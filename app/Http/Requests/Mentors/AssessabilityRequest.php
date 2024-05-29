<?php

namespace App\Http\Requests\Mentors;

use Illuminate\Foundation\Http\FormRequest;

class AssessabilityRequest extends FormRequest
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
            'accessabilities' => 'json',
            'slot' => 'integer'
        ];
    }

    public static $_updateRules = [
        'accessabilities' => 'json',
        'slot' => 'integer'
    ];
}
