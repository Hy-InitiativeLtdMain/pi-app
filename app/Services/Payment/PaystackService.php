<?php

namespace App\Services\Payment;

use App\Models\BankAccount;
use App\Models\Transaction;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PaystackService
{
    public function verifyAccount($account_number, $bank_code)
    {
        $host = getenv('PAYSTACK_HOST');
        $secretKey = getenv('PAYSTACK_SECRET_KEY');
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer ' . trim($secretKey)
        ])->get($host . 'bank/resolve', [
            'account_number' => $account_number,
            'bank_code' => $bank_code,
        ])->json();

        return [
            'data' => $resp,
            'code' => 200,
        ];
    }

    public function allBanks()
    {
        $secretKey = getenv('PAYSTACK_SECRET_KEY');
        $host = getenv('PAYSTACK_HOST');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer' . $secretKey,
        ])->retry(3, 2000, function ($exception) {
            // Retry only if the response is available and it's a 429 or 503
            return $exception instanceof ConnectionException ||
                ($exception->response && in_array($exception->response->status(), [429, 503]));
        })->get($host . 'bank');

        if ($response->successful()) {
            return [
                'data' => $response->json(),
                'code' => $response->status(),
            ];
        }

        return [
            'error' => $response->json()['message'] ?? 'Unexpected error occurred',
            'code' => $response->status(),
        ];
    }

    public function initializeTransaction($input)
    {
        $host = getenv('PAYSTACK_HOST');
        $input['amount'] = intval($input['amount']) * 100;
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer ' . getenv('PAYSTACK_SECRET_KEY'),
        ])->post($host . 'transaction/initialize', $input);

        return [
            'data' => $resp->json(),
            'code' => $resp->status(),
        ];
    }

    public function verifyPayment(Transaction $transaction)
    {
        $host = getenv('PAYSTACK_HOST');
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer' . getenv('PAYSTACK_SECRET_KEY'),
        ])->get($host . 'transaction/verify/' . $transaction->ref);
        return [
            'data' => $resp->json(),
            'code' => $resp->status(),
        ];
    }

    public function fetchRecipient(BankAccount $bankAccount)
    {
        $host = getenv('PAYSTACK_HOST');
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer' . getenv('PAYSTACK_SECRET_KEY'),
        ])->post($host . 'transferrecipient', [
            'type' => "nuban",
            'name' => $bankAccount->account_name,
            'account_number' => $bankAccount->account_number,
            'bank_code' => $bankAccount->bank_code,
            'description' => "Retrieve Bank Recipient Code",
            'currency' => "NGN",
        ]);
        return [
            'data' => $resp->json(),
            'code' => $resp->status(),
        ];
    }

    public function makePayout(Transaction $transaction)
    {
        $host = getenv('PAYSTACK_HOST');
        if ($transaction->type != "User Payout") {
            return [
                'data' => [
                    "message" => "This is not a payout transaction",
                ],
                'code' => 422,
            ];
        }

        if ($transaction->paid) {
            return [
                'data' => [
                    "message" => "Payment is paid",
                ],
                'code' => 422,
            ];
        }
        if ($transaction->bankAccount == null) {
            return [
                'data' => [
                    "message" => "Bank Account is not found",
                ],
                'code' => 422,
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
                'code' => 403,
            ];
        }
        $amount = abs($transaction->amount) * 100;
        $ref = Str::lower($transaction->ref);
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer' . getenv('PAYSTACK_SECRET_KEY'),
        ])->post($host . 'transfer', [
            'source' => 'balance',
            'amount' => $amount,
            'recipient' => $transaction->bankAccount->recipient_code,
            'reason' => 'Withdrawal of Funds',
            'reference' => $ref,
        ]);
        $_resp = $resp->json();

        if ($_resp['status']) {
            $transfer_code = $_resp['data']['transfer_code'];
            $transaction->transfer_code = $transfer_code;
            $transaction->save();
        }

        return [
            'data' => $_resp,
            'code' => $resp->status(),
        ];
    }

    public function verifyOTPPayout(Transaction $transaction, String $otp)
    {
        $host = getenv('PAYSTACK_HOST');
        if ($transaction->type != "User Payout") {
            return [
                'data' => [
                    "message" => "This is not a payout transaction",
                ],
                'code' => 422,
            ];
        }

        if ($transaction->paid) {
            return [
                'data' => [
                    "message" => "Payment is paid",
                ],
                'code' => 422,
            ];
        }
        if ($transaction->bankAccount == null) {
            return [
                'data' => [
                    "message" => "Bank Account is not found",
                ],
                'code' => 422,
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
                'code' => 403,
            ];
        }
        $amount = abs($transaction->amount) * 100;
        $ref = Str::lower($transaction->ref);
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer' . getenv('PAYSTACK_SECRET_KEY'),
        ])->post($host . 'transfer/finalize_transfer', [
            'transfer_code' => $transaction->transfer_code,
            'otp' => $otp,
        ]);
        return [
            'data' => $resp->json(),
            'code' => $resp->status(),
        ];
    }

    public function createSubaccount($input)
    {
        $host = getenv('PAYSTACK_HOST');
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer ' . getenv('PAYSTACK_SECRET_KEY'),
        ])->post($host . 'subaccount', $input);

        return [
            'data' => $resp->json(),
            'code' => $resp->status(),
        ];
    }

    public function getSubaccounts()
    {
        $host = getenv('PAYSTACK_HOST');
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer ' . getenv('PAYSTACK_SECRET_KEY'),
        ])->get($host . 'subaccount');

        return [
            'data' => $resp->json(),
            'code' => $resp->status(),
        ];
    }
}
