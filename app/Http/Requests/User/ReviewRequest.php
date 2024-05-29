<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
        'message' => '',
        'rate' => 'max:255',
        'course_id' => 'exists:courses,id',
        'quiz_id' => 'exists:quizzes,id',
    ];

}
