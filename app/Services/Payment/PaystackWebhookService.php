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
        
        // Find all transactions created in the same subscription session
        // Look for transactions with the same course and created within a short time window
        $courseId = $transaction->courses()->first()->id ?? null;
        if (!$courseId) {
            Log::error('No course found for transaction', ['transaction_id' => $transaction->id]);
            return response()->json(['message' => 'No course found for transaction'], 404);
        }
        
        // Get transactions for this specific course created within 5 minutes of the current transaction
        $timeWindow = 5; // minutes
        $courseTransactions = Transaction::whereIn('id', function($query) use ($courseId, $transaction, $timeWindow) {
            $query->select('transaction_id')
                  ->from('transaction_course')
                  ->where('course_id', $courseId)
                  ->where('created_at', '>=', $transaction->created_at->subMinutes($timeWindow))
                  ->where('created_at', '<=', $transaction->created_at->addMinutes($timeWindow));
        })->get();
        
        Log::info('Found course transactions for webhook', [
            'course_id' => $courseId,
            'transaction_count' => $courseTransactions->count(),
            'transaction_ids' => $courseTransactions->pluck('id'),
            'time_window' => $timeWindow . ' minutes'
        ]);
        
        $totalExpectedAmount = $courseTransactions->sum('amount') * 100; // Convert to kobo
        
        if (abs($totalExpectedAmount) == floatval($_data['amount'])) {
            // Mark all related transactions as paid
            foreach ($courseTransactions as $courseTransaction) {
                $courseTransaction->status = 1;
                $courseTransaction->paid_at = Carbon::now();
                $courseTransaction->save();
                Log::info('Transaction marked as paid', ['transaction_id' => $courseTransaction->id]);
            }
            
            $data['message'] = 'Updated';
            return response()->json($data, 200);
        }
        
        Log::warning('Amount mismatch for course transactions', [
            'course_id' => $courseId,
            'course_transaction_ids' => $courseTransactions->pluck('id'),
            'expected_total' => $totalExpectedAmount,
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
