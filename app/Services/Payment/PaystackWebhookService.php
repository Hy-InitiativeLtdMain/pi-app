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
        // Log::info('_data == ' . print_r($_data, true));
        $transaction = Transaction::whereRef($_data['reference'])->firstOrFail();
        // Log::info('transaction == ' . print_r($transaction, true));

        if (abs(floatval($transaction->total_amount)) * 100 == floatval($_data['amount'])) {
            $transaction->status = 1;
            $transaction->paid_at = Carbon::now();
            $transaction->save();
            // $_children = $transaction->transactions;
            // foreach ($_children as $_transaction) {
            //     $_transaction->status = 1;
            //     $_transaction->paid_at = Carbon::now();
            //     $_transaction->save();
            // }
            $data['message'] = 'Updated';
            // Log::info('data == ' . print_r($data, true));
            return response()->json($data, 200);
        }
        $data['message'] = 'Not found';
        return response()->json($data, 404);
    }

    public function transferSuccess($_data)
    {
        // Log::info('_data == ' . print_r($_data, true));
        $transaction = Transaction::whereRef($_data['reference'])->firstOrFail();
        // Log::info('transaction == ' . print_r($transaction, true));
        if (abs(floatval($transaction->amount)) * 100 == floatval($_data['amount'])) {
            $transaction->status = 1;
            $transaction->paid_at = Carbon::now();
            $transaction->save();
            // $_userService = new UserService();


            $data['message'] = 'Updated';
            // Log::info('data == ' . print_r($data, true));
            return response()->json($data, 200);
        }
        $data['message'] = 'Not found';
        return response()->json($data, 404);
    }
}
