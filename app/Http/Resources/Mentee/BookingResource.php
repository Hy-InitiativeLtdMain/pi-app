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
            'booking_id' => $this->id,
            'mentee_id' => $this->mentee_id,
            'mentee_name' => $this->mentee->name,
            'mentee_email' => $this->mentee->user->email,
            'mentee_profile_pic' => $this->mentee->user->image,
            'status' => $this->status,
            'date' => $this->date,
            'time' => $this->time,
            'reason' => $this->reason,
            'mentor_id' => $this->mentor_id,
            'mentor_duration' => $this->mentorAvailability->duration,
            'mentor_availability_title' => $this->mentorAvailability->title,
            'mentor_name' => $this->mentor->firstname. " ". $this->mentor->lastname,
        ];
    }
}
