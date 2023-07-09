<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\DetailRequest;
use App\Services\User\UserService;
use App\Services\User\PayoutService;
use Illuminate\Http\Request;

class DetailManager extends Controller
{

    private $userService;

    function __construct(UserService $userService )
    {
        $this->userService = $userService;
    }
    
    public function index(Request $request)
    {
        $user = $request->user();
        $_data = $this->userService->show($user);
        return response($_data['data'], $_data['code']);
    }

    

    public function update(DetailRequest $request)
    {
        $validated = $request->validated();
        $user = $request->user();
        $_data = $this->userService->update($user, $validated);
        return response($_data['data'], $_data['code']);
    }


    public function deleteAccount(Request $request)
    {
        $user = $request->user();
        $_data = $this->userService->deleteAccount($user);
        return response($_data['data'], $_data['code']);
    }

    public function requestPayout(Request $request)
    {
        $user = $request->user();
        $payoutService = new PayoutService();
        $validated = $request->validate(DetailRequest::$_requestPayoutRules);
        $_data = $payoutService->requestPayout($user,  $validated['bank_account_id'] ,$validated['amount']);
        return response($_data['data'], $_data['code']);
    }

}
