<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question' => 'required|max:255',
            'options' => 'required',
            'answer' => '',
            'quiz_id' => 'required|exists:quizzes,id',

        ];
        return $rules;
    }

    public static $_updateRules = [
        'question' => 'max:255',
        'options' => '',
        'answer' => '',
        'quiz_id' => 'exists:quizzes,id',
    ];
}
