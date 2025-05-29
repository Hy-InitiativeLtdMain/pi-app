<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MentorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'job_title' => 'nullable|string',
            'company' => 'nullable|string',
            'bio' => 'nullable',
            "highest_edu_qualification" => 'nullable|string',
            "past_mentorship_exp" => 'nullable|string',
            "video_intro" => 'nullable|string',
            'profile_pic' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'country' => 'nullable|string',
            'linkedin_profile' => 'nullable|string|url',
            'portfolio' => 'nullable|string|url',
            'resume_link' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'project_choice' => 'nullable|string'
        ];
    }
}
