<?php

namespace App\Services\Payment;

use App\Models\BankAccount;
use App\Models\Transaction;
use App\Services\Admin\UserService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class FlutterwaveWebhookService
{
    

    public function transferSuccess($_data )
    {
        $transaction = Transaction::whereRef($_data['reference'])->firstOrFail();
        if(abs(floatval($transaction->amount)) == floatval($_data['amount']) ){
            $transaction->status = 1;
            $transaction->paid_at = Carbon::now();
            $transaction->save();            
            
            $data['message'] = 'Updated';
            return response()->json($data, 200);
        }
        $data['message'] = 'Not found';
        return response()->json($data, 404);
        
    }

    
}
