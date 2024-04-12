<?php

namespace App\Http\Resources\Mentee;

use App\Http\Resources\Mentor\AvailabilityResource;
use App\Http\Resources\Mentor\MentorResource;
use App\Traits\ProcessAvailability;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    use ProcessAvailability;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $dateTime = \DateTime::createFromFormat('H:i:s', $this->time);
        return [
            'booking_id' => $this->id,
            'mentee_id' => $this->mentee_id,
            'mentee_name' => $this->mentee->user->first_name . ' '. $this->mentee->user->last_name,
            'mentee_email' => $this->mentee->user->email,
            'mentee_profile_pic' => $this->mentee->user->image,
            'status' => $this->status,
            'date' => $this->date,
            'time' => $this->time,
            'calendar' => [
                'start' => $this->date . "T" . $dateTime->format('H:i'),
                'end' => $this->date . "T" . $this->calculateEndTimeWithSeconds($this->time, $this->mentorAvailability->duration)
            ],
            'reason' => $this->reason,
            'mentor_id' => $this->mentor_id,
            'mentor_duration' => $this->mentorAvailability->duration,
            'mentor_availability' => $this->processAvailability($this->mentorAvailability),
            'mentor_name' => $this->mentor->firstname. " ". $this->mentor->lastname,
            'meeting_link' => $this->mentorAvailability->meeting_link,
        ];
    }
}
