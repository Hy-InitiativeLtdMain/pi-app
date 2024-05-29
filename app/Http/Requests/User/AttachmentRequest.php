<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AttachmentRequest extends FormRequest
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
            'type' => 'required|max:255',
            'url' => 'required|max:255',

            'assignment_id' => 'exists:assignments,id',
            'course_id' => 'exists:courses,id',
            'lesson_id' => 'exists:lessons,id',
        ];
        return $rules;
    }

    public static $_updateRules = [
        'type' => 'max:255',
        'url' => 'max:255',

        'assignment_id' => 'exists:assignments,id',
        'category_id' => 'exists:categories,id',
        'lesson_id' => 'exists:lessons,id',
    ];
}
