<?php

namespace App\Services\Payment;

use App\Models\BankAccount;
use App\Models\Transaction;
use App\Services\Admin\UserService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PaystackWebhookService
{
    public function chargeSuccess($_data)
    {
        Log::info('Paystack chargeSuccess webhook received', ['data' => $_data]);
        $transaction = Transaction::whereRef($_data['reference'])->first();
        if (!$transaction) {
            Log::error('Transaction not found for reference', ['reference' => $_data['reference']]);
            return response()->json(['message' => 'Transaction not found'], 404);
        }
        Log::info('Transaction found', ['transaction_id' => $transaction->id]);
        if (abs(floatval($transaction->total_amount)) * 100 == floatval($_data['amount'])) {
            $transaction->status = 1;
            $transaction->paid_at = Carbon::now();
            $transaction->save();
            Log::info('Transaction marked as paid', ['transaction_id' => $transaction->id]);
            $data['message'] = 'Updated';
            return response()->json($data, 200);
        }
        Log::warning('Amount mismatch for transaction', [
            'transaction_id' => $transaction->id,
            'expected' => abs(floatval($transaction->total_amount)) * 100,
            'actual' => floatval($_data['amount'])
        ]);
        $data['message'] = 'Not found';
        return response()->json($data, 404);
    }

    public function transferSuccess($_data)
    {
        Log::info('Paystack transferSuccess webhook received', ['data' => $_data]);
        $transaction = Transaction::whereRef($_data['reference'])->first();
        if (!$transaction) {
            Log::error('Transaction not found for reference', ['reference' => $_data['reference']]);
            return response()->json(['message' => 'Transaction not found'], 404);
        }
        Log::info('Transaction found', ['transaction_id' => $transaction->id]);
        if (abs(floatval($transaction->amount)) * 100 == floatval($_data['amount'])) {
            $transaction->status = 1;
            $transaction->paid_at = Carbon::now();
            $transaction->save();
            Log::info('Transaction marked as paid', ['transaction_id' => $transaction->id]);
            $data['message'] = 'Updated';
            return response()->json($data, 200);
        }
        Log::warning('Amount mismatch for transaction', [
            'transaction_id' => $transaction->id,
            'expected' => abs(floatval($transaction->amount)) * 100,
            'actual' => floatval($_data['amount'])
        ]);
        $data['message'] = 'Not found';
        return response()->json($data, 404);
    }
}
