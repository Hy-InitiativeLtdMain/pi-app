<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            'status' => 'numeric|between:0,2',
            'image' => 'file|max:10240|mimes:png,jpg,jpeg,gif,svg',
        ];
        return $rules;
    }


    public static $_verifyAccountRules = [
        'account_number' => 'required|max:255',
        'bank_code' => 'required|max:255'
    ];

    public static $_paymentLinkRules = [
        'email' => 'required|max:255',
        'amount' => 'required|numeric|min:1',
        'reference' => 'required|max:255',
        'callback_url' => 'required|max:255',
    ];

    public static $_paymentTypeRules = [
        'type' => 'required|in:paystack,transfer',
        'note' => 'max:255',
        'quantity' => 'max:255',
        
    ];

    public static $_signalPaymentTypeRules = [
        'type' => 'required|in:paystack,transfer',
        'plan' => 'required|in:monthly,yearly,biannual',
        'note' => 'max:255',
        
    ];
}
