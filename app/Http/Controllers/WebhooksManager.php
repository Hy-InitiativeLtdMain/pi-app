<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\Payment\FlutterwaveWebhookService;
use App\Services\Payment\PaystackWebhookService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebhooksManager extends Controller
{

    

    


    public function paymentWebhook(Request $request)
    {
        $paystackWebhookService = new PaystackWebhookService();
        $_data = $request->input('data');
        if ($request->input('event') === "charge.success") {
            return $paystackWebhookService->chargeSuccess($_data);
        }
        if ($request->input('event') === "transfer.success") {
            return $paystackWebhookService->transferSuccess($_data);
        }
    }

    public function flwWebhook(Request $request)
    {
        $flutterwaveWebhookService = new FlutterwaveWebhookService();
        $_data = $request->input('data');
        if ($request->input('event') === "transfer.completed") {
            return $flutterwaveWebhookService->transferSuccess($_data);
        }
    }
}
