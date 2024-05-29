<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\TransactionRequest;
use App\Models\Paystack;
use App\Services\Payment\PaystackService;
use Illuminate\Http\Request;

class PaystackManager extends Controller
{

    private $paystackService;

    function __construct(PaystackService $paystackService )
    {
        $this->paystackService = $paystackService;
    }

    public function allBanks(Request $request)
    {
        $_data = $this->paystackService->allBanks();
        return response($_data['data'], $_data['code']);
    }


    public function verifyAccount(Request $request)
    {
        $validated = $request->validate(TransactionRequest::$_verifyAccountRules);
        $_data = $this->paystackService->verifyAccount($validated['account_number'],$validated['bank_code']);
        return response($_data['data'], $_data['code']);
    }

    public function initializeTransaction(Request $request)
    {
        $validated = $request->validate(TransactionRequest::$_paymentLinkRules);
        $_data = $this->paystackService->initializeTransaction($validated);
        return response($_data['data'], $_data['code']);
    }
}
