<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenteeRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string',
            'email' => 'required|email|unique:mentees,email,' . ($this->mentee ? $this->mentee->id : ''),
            'phone' => 'required|string',
            'level' => 'required|string',
            'course' => 'required|string',
        ];
    }
}
