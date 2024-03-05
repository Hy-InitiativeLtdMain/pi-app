<?php

namespace App\Http\Resources\Mentee;

use App\Http\Resources\Mentor\AvailabilityResource;
use App\Http\Resources\Mentor\MentorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'mentee' => $this->mentee,
            'availability' => json_decode($this->mentorAvailability->availability),
            'status' => $this->status,
            'date' => $this->date,
            'time' => $this->time,
            'reason' => $this->reason,
            'mentor' => $this->mentor
        ];
    }
}
