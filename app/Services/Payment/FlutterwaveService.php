<?php

namespace App\Services\Payment;

use App\Models\BankAccount;
use App\Models\Transaction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class FlutterwaveService
{


    public function makePayout(Transaction $transaction)
    {

        if ($transaction->type != "User Payout") {
            return [
                'data' => [
                    "message" => "This is not a payout transaction"
                ],
                'code' => 422
            ];
        }

        if ($transaction->paid) {
            return [
                'data' => [
                    "message" => "Payment is paid"
                ],
                'code' => 422
            ];
        }
        if ($transaction->bankAccount == null) {
            return [
                'data' => [
                    "message" => "Bank Account is not found"
                ],
                'code' => 422
            ];
        }
        $available_balance = Transaction::leftJoin('transaction_course', 'transaction_course.transaction_id', '=', 'transactions.id')
            ->leftJoin('courses', 'transaction_course.course_id', '=', 'courses.id')
            ->where('courses.user_id', $transaction->user->id)
            // ->select('transactions.*')
            ->sum('transactions.amount');
        if ($transaction->amount > $available_balance) {
            $data['message'] = "Insufficient Funds";
            return [
                'data' => $data,
                'code' => 403
            ];
        }
        $amount = abs($transaction->amount);
        $ref = Str::lower($transaction->ref);
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer ' . getenv('FLW_SECRET_KEY'),
        ])->post(getenv('FLW_HOST') . 'transfers', [

            "account_bank" => $transaction->bankAccount->bank_code,
            "account_number" => $transaction->bankAccount->account_number,
            "amount" => $amount,
            "narration" => "Withdrawal of Funds",
            "currency" => "NGN",
            "reference" => $ref,
            // "callback_url"=> "https://webhook.site/b3e505b0-fe02-430e-a538-22bbbce8ce0d",
            "debit_currency" => "NGN",

        ]);
        $resp['ip'] = request()->ip();
        return [
            'data' => $resp->json(),
            'code' => $resp->status()
        ];
    }
}
