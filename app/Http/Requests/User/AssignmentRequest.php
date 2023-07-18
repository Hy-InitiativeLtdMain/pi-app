<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentRequest extends FormRequest
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
            'content' => 'required',
            'course_id' => 'exists:courses,id',
            'lesson_id' => 'exists:lessons,id',
        ];
        return $rules;
    }

    public static $_updateRules = [
        'title' => 'max:255',
        'content' => '',
        'course_id' => 'exists:courses,id',
        'lesson_id' => 'exists:lessons,id',
    ];


    public static $_submitRules = [
        
        'attachment_id' => 'required|exists:attachments,id',
        // 'assignment_id' => 'exists:assignments,id',
        // 'user_id' => 'required|exists:users,id',
    ];
}
