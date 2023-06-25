<?php

namespace App\Services\Payment;

use App\Jobs\Service\ProcessServices;
use App\Models\Transaction;

class InvoiceService
{
    public function sendMail(Transaction $transaction)
    {

        if($transaction->transaction_id == null){
            // if($transaction->amount > 0){
                $newSignal = (new ProcessServices('new_invoice', $transaction))->delay(2);
                dispatch($newSignal);   
            // }         
        }
        
        
    }

    

}
