<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'price' => 'required|numeric',
            'description' => 'required|max:255',
            'cover_type' => 'required|in:image,video',
            'cover_file' => 'required|file|max:10240|mimes:png,jpg,jpeg,gif,svg,mp4',
            'categories' => 'array',
            'categories.*' => 'exists:categories,id',
            
        ];
        return $rules;
    }

    public static $_updateRules = [
        'title' => 'max:255',
        'price' => 'numeric',
        'description' => 'max:255',
        'published' => 'boolean',
        'cover_type' => 'in:image,video',
        'cover_file' => 'file|max:10240|mimes:png,jpg,jpeg,gif,svg,mp4',
        'category_id' => 'exists:categories,id',
        'categories' => 'array',
            'categories.*' => 'exists:categories,id',
    ];
}
