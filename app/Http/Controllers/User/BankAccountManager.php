<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\BankAccountRequest;
use App\Models\BankAccount;
use App\Services\User\BankAccountService;
use Illuminate\Http\Request;

class BankAccountManager extends Controller
{

    private $bankAccountService;

    function __construct(BankAccountService $bankAccountService )
    {
        $this->bankAccountService = $bankAccountService;
    }

    public function index(Request $request)
    {
        $user = $request->user();
        $_data = $this->bankAccountService->index($user);
        return response($_data['data'], $_data['code']);
    }


    public function view(Request $request, BankAccount $bankAccount)
    {
        //REFACTOR
        $user = $request->user();
        $user->bankAccounts()->whereUserId($user->id);
        if($user->id != $bankAccount->user->id){
            abort(403, "Unauthorized Access");
        }
        //REFACTOR

        $_data = $this->bankAccountService->view($bankAccount);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, BankAccount $bankAccount)
    {
        //REFACTOR
        $user = $request->user();
        $user->bankAccounts()->whereUserId($user->id);
        if($user->id != $bankAccount->user->id){
            abort(403, "Unauthorized Access");
        }
        //REFACTOR

        $validated = $request->validate(BankAccountRequest::$_updateRules);
        $_data = $this->bankAccountService->update($bankAccount, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function store(BankAccountRequest $request)
    {
        $validated = $request->validated();

        $user = $request->user();
        $_data = $this->bankAccountService->store($user, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function delete(Request $request, BankAccount $bankAccount)
    {

        //REFACTOR
        $user = $request->user();
        $user->bankAccounts()->whereUserId($user->id);
        if($user->id != $bankAccount->user->id){
            abort(403, "Unauthorized Access");
        }
        //REFACTOR

        $_data = $this->bankAccountService->delete($bankAccount);
        return response($_data['data'], $_data['code']);
    }
}
