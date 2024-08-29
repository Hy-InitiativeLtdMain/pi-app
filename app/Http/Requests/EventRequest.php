<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'max:255',
            'description' => 'max:255',
            'link_type' => 'max:255',
            'link' => 'max:255',
            'link_password' => 'max:255',
            'date' => '',
            'time' => '',
            'image' => 'file|mimes:png,jpg',
            'image_id' => 'max:255',
            'file' => 'file',
            'file_id' => '',
            'institute' => '',
        ];
    }

    public static $_updateRules = [

        'title' => 'max:255',
        'description'=> 'max:255',
        'link_type' => 'max:255',
        'link' => 'max:255',
        'link_password' => 'max:255',
        'date' => '',
        'time' => '',
        'image' => 'file|max:10240|mimes:png,jpg',
        'image_id' => 'max:255',
        'file' => '',
        'file_id' => '',
        'institute' => '',

    ];
}
