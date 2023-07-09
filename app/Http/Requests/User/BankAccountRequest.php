<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class BankAccountRequest extends FormRequest
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
            'account_name' => 'required|max:255',
            'account_number' => 'required|max:255',
            'bank_name' => 'required|max:255',
            'bank_code' => 'required|max:255'
        ];
        return $rules;
    }

    public static $_updateRules = [
        'account_name' => 'max:255',
        'account_number' => 'max:255',
        'bank_name' => 'max:255',
        'bank_code' => 'max:255'
    ];
}
