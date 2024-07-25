<?php

namespace App\Http\Resources\Mentor;

use App\Models\Booking;
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
        $count = Booking::where('mentor_id', $this->id)->where('status', 'Approved')->count();
        // Some checks
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'bio' => $this->bio,
            'no_of_mentees' => $count,
            'company' => $this->company,
            'job_title' => $this->job_title,
            'experience' => $this->experience,
            'skills' => $this->skills,
            'accessability' => $this->accessability,
            'availability' => $this->availability->map(function ($avail) {
                if (is_string($avail->availability)) {
                    $availability = json_decode($avail->availability);
                    if ($availability) {
                        return [
                            'id' => $avail->id,
                            'title' => $avail->title,
                            'about' => $avail->about,
                            'duration' => $avail->duration,
                            'meeting_link' => $avail->meeting_link,
                            'days' => isset($availability->day) ? $availability->day : null,
                            'time_slots' => isset($availability->time_slots) ? $availability->time_slots : null,
                        ];
                    }
                }
                // If it's not a string or not valid JSON, return as is
                return [
                    'id' => $avail->id,
                    'title' => $avail->title,
                    'about' => $avail->about,
                    'duration' => $avail->duration,
                    'meeting_link' => $avail->meeting_link,
                    'days' => $avail->availability['day'],
                    'time_slots' => $avail->availability['time_slots'],
                ];
                ;
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
