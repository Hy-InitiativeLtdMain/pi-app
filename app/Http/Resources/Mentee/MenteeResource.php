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

        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'level' => $this->level,
            'course' => $this->course,
            'no_of_mentors' => $count,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
