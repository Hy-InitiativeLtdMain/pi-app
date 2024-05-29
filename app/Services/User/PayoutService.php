<?php

namespace App\Services\User;

use App\Models\BankAccount;
use App\Models\Config;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Str;

class PayoutService
{


    public function requestPayout(User $user, $bank_account_id, float $amount)
    {

        // $system_minimum_payout = Config::where('key','system_minimum_payout')->first();
        // if($system_minimum_payout == null){
        //     return [
        //         'data' => [
        //             "message" => "System Minimum Payout Not Set"
        //         ], 
        //         'code' => 422
        //     ];
        // }
        // $minimum_payout = floatval($system_minimum_payout->value);
        $availableBalance = Transaction::leftJoin('transaction_course', 'transaction_course.transaction_id', '=', 'transactions.id')
            ->leftJoin('courses', 'transaction_course.course_id', '=', 'courses.id')
            ->where('courses.user_id', $user->id)
            ->sum('transactions.amount');
        if ($availableBalance < $amount) {
            return [
                'data' => [
                    "message" => "Insufficient Funds"
                ],
                'code' => 403
            ];
        }
        // if($user->availableCommission < $minimum_payout){
        //     return [
        //         'data' => [
        //             "message" => "Available Balance is less than minimum system payout"
        //         ], 
        //         'code' => 422
        //     ];
        // }
        $amount *= -1;
        $type = "User Payout";
        $ref = 'PAYOUT_' . (str_pad((Str::random(3) . mt_rand(0, 9999)), 7, '0', STR_PAD_LEFT));

        $transaction = Transaction::create([
            'ref' => $ref,
            'type' => $type,
            'amount' => $amount,
            'user_id' => $user->id,
            'bank_account_id' => $bank_account_id
        ]);
        $data['message'] = "Payout Request Request Created";
        $data['transaction'] = $transaction;
        return [
            'data' => $data,
            'code' => 201
        ];
    }
}
