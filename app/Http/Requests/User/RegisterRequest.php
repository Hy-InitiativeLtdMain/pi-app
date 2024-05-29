<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'institute_slug' => 'required',
            'is_admin' => 'nullable|boolean',
        ];
        return $rules;
    }


    public static $_forgotRules = [
        'email' => 'required|exists:users|max:255',
    ];

    public static $_resetRules = [
        'password' => 'required|min:6|confirmed',
    ];

    public static $_adminRules = [
        'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'institute_slug' => 'nullable',
            'admin' => 'required',
            'image' => 'nullable',
    ];

    public static $_creatorRules = [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'phone' => 'required|max:255',
        'gender' => 'nullable|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'is_admin' => 'nullable|boolean',
    ];

    public static $_learnerRules = [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'phone' => 'required|max:255',
        'gender' => 'nullable|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'is_admin' => 'nullable|boolean',
    ];
}
