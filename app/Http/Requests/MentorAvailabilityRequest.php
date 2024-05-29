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
            'availability' => 'required|json',
            // 'availability.date' => 'required|date',
            // 'availability.time_slots' => 'required|array',
            // 'availability.time_slots.*' => 'required|date_format:H:i',
            'title' => 'required|string',
            'duration' => 'required|string',
            'about' => 'required|string',
            'meeting_link' => 'required|url',
        ];
    }
}
