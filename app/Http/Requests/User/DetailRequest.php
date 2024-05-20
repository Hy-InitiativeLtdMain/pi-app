<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class DetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'first_name' => 'max:255',
            'last_name' => 'max:255',
            'signature' => 'max:255',
            'username' => 'max:255',
            'gender' => 'max:255',
            'phone' => 'max:15',
            'is_admin' => 'boolean',
            'password' => 'min:6|confirmed',
            'current_password' => 'min:6',
            'image' => 'file|max:10240|mimes:png,jpg,jpeg,gif,svg',
            'interest' => 'string|nullable'
        ];
        return $rules;
    }

    public static $_updateFcmRules = [
        'fcm_token' => 'max:255|unique:fcm_tokens,token',
    ];

    public static $_requestPayoutRules = [
        'amount' => 'required|numeric|min:100',
        'bank_account_id' => 'required|exists:bank_accounts,id',
    ];
}
