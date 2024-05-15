<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'cover_type' => $this->cover_type,
            'cover_url' => $this->cover_url,
            'cover_url_id' => $this->cover_url_id,
            'number_of_lessons' => $this->lessons->count(),
            'status' => $this->status,
            'published' => $this->published,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'feedback' => $this->feedback
        ];
    }
}
