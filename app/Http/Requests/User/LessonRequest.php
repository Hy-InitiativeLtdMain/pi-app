<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            'cover_type' => 'required|in:image,video',
            'cover_file' => 'required|file|max:10240|mimes:png,jpg,jpeg,gif,svg,mp4',
            
        ];
        return $rules;
    }

    public static $_updateRules = [
        'title' => 'max:255',
        'content' => '',
        'cover_type' => 'in:image,video',
        'cover_file' => 'file|max:10240|mimes:png,jpg,jpeg,gif,svg,mp4',

        // 'meeting_link' => 'max:255',
        // 'recording_link' => 'max:255',
    ];

    public static $_arrayRules = [
        'list' => 'required|array',
        'list.*.title' => 'required|max:255',
        'list.*.content' => 'required',
        'list.*.cover_type' => 'required|in:image,video',
        'list.*.cover_file' => 'required|file|max:10240|mimes:png,jpg,jpeg,gif,svg',
    ];
}
