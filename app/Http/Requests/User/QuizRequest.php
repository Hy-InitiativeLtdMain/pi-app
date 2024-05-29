<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'course_id' => 'exists:courses,id',
            'lesson_id' => 'exists:lessons,id',
        ];
        return $rules;
    }

    public static $_updateRules = [
        'title' => 'max:255',
        'description' => 'max:255',
        'course_id' => 'exists:courses,id',
        'lesson_id' => 'exists:lessons,id',
    ];

    public static $_submitRules = [
        'points' => 'required|numeric',
    ];
}
