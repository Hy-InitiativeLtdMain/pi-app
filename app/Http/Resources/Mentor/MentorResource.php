<?php

namespace App\Http\Resources\Mentor;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MentorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Some checks
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => $this->company,
            'job_title' => $this->job_title,
            'availability' => $this->availability->map(function ($avail) {
                return [
                    'id' => $avail->id,
                    'title' => $avail->title,
                    'about' => $avail->about,
                    'duration' => $avail->duration,
                    'meeting_link' => $avail->meeting_link,
                    'date' => json_decode($avail->availability)->date,
                    'time_slots' => json_decode($avail->availability)->time_slots,
                ];
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
