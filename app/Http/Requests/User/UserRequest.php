<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'message' => 'required',
            'rate' => 'required|numeric',
            'course_id' => 'exists:courses,id',
            'quiz_id' => 'exists:quizzes,id',
        ];
        return $rules;
    }

    public static $_updateRules = [
        'first_name' => 'max:255',
        'last_name' => 'max:255',
        'username' => 'max:255',
        'gender' => 'max:255',
        'phone' => 'max:255',
        'email' => 'max:255|unique:users,email',
        'institute' => 'max:255',
        'location' => 'max:255',
        'signature' => 'nullable',
        'image' => 'nullable',
        'signature' => 'nullable'
    ];

}
