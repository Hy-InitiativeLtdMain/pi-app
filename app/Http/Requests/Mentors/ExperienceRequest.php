<?php

namespace App\Http\Requests\Mentors;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            // 'mentor_id',
            'employment_type' => 'string',
            'company_name' => 'string',
            'job_title' => 'string',
            'location' => 'string',
            'location_type' => 'string',
            'current_job' => 'boolean',
            'start_date' => 'string',
            'end_date' => 'string|nullable',
        ];
    }

    public static $_updateRules = [
        'employment_type' => 'string',
        'company_name' => 'string',
        'job_title' => 'string',
        'location' => 'string',
        'location_type' => 'string',
        'current_job' => 'boolean',
        'start_date' => 'string',
        'end_date' => 'string|nullable',
    ];
}
