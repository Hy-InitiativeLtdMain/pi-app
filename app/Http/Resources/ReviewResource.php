<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'mentor_id' => $this->mentor_id,
            'mentor_name' => $this->mentor->firstname. ' '. $this->mentor->lastname,
            'mentee_id' => $this->mentee_id,
            'mentee_name' => $this->mentees->name,
            'review' => $this->review,
            'rating' => $this->rating,
            'session' => $this->session ? 'True': 'False',
            'hours' => $this->session_hours,
            'session_count' => $this->number_of_sessions,
            'sent_from' => $this->user_type ? "Mentor": "Mentee",
        ];
    }
}
