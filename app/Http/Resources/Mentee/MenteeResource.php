<?php

namespace App\Http\Resources\Mentee;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MenteeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $count = Booking::where('mentee_id', $this->id)->where('status', 'Approved')->count();

        // Check if mentee is a team lead
        $isTeamLead = \App\Models\MentorMentee::where('mentee_id', $this->id)->where('team_lead', true)->exists();
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'user_uuid' => $this->user->user_uuid,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'level' => $this->level,
            'profile_picture' => $this->user->image,
            'course' => $this->course,
            'track' => $this->track,
            'institute' => $this->institute,
            'no_of_mentors' => $count,
            'isTeamLead' => $isTeamLead,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
