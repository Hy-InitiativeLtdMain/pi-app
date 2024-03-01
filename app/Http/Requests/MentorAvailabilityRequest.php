<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MentorAvailabilityRequest extends FormRequest
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
            // 'mentor_id' => 'required|exists:mentors,id',
            'availability' => 'required|array',
            'availability.*.time_start' => 'required|date_format:H:i',
            'availability.*.time_end' => 'required|date_format:H:i',
            'availability.*.date' => 'required|date',
        ];
    }
}
