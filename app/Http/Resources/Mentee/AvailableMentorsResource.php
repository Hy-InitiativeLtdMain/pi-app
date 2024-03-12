<?php

namespace App\Http\Resources\Mentee;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvailableMentorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->mentor->id,
            'name' => $this->mentor->firstname . ' '. $this->mentor->lastname,
            'email' => $this->mentor->email,
            'profile_image' => $this->mentor->user->image ?? null,
            'job_title' => $this->mentor->job_title,
            'company' => $this->mentor->company,
            'about' => $this->about,
            'availability_id' => $this->id,
            'availability' => $this->availability,
            'title' => $this->title,
            'duration' => $this->duration

        ];
    }
}
