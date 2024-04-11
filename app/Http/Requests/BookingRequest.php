<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'mentor_availability_id' => 'required|exists:mentor_availabilities,id',
            'day' => 'required|string',
            'time' => 'required|date_format:H:i',
            'mentor_id' => 'required|exists:mentors,id',
            'reason' => 'nullable|string',
            // 'status' => 'default|string',
        ];
    }
}
