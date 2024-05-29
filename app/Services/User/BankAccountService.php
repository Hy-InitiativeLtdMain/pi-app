<?php

namespace App\Services\User;

use App\Models\BankAccount;
use App\Models\BankAccountPlan;
use App\Models\User;
use App\Services\Media\CloudinaryService;
use Carbon\Carbon;

class BankAccountService
{
    public function index(User $user)
    {
        $data['bankAccounts'] = $user->bankAccounts()->latest()->paginate();
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function view(BankAccount $bankAccount)
    {
        $data['bankAccount'] = $bankAccount;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function store(User $user, $input)
    {
        $bankAccount = $user->bankAccounts()->create($input);
        $data['message'] = "Bank Account Created";
        $data['bankAccount'] = $bankAccount;
        return [
            'data' => $data, 
            'code' => 201
        ];
    }

    public function update(BankAccount $bankAccount, $input)
    {
        
        $bankAccount->fill($input);
        if ($bankAccount->isDirty()) {
            $bankAccount->save();
        }
        $data['message'] = "BankAccount updated";
        $data['bankAccount'] = $bankAccount;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function delete(BankAccount $bankAccount)
    {
        
        $bankAccount->delete();
        $data['message'] = "Deleted Successfully";
        $data['bankAccount'] = $bankAccount;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

}
