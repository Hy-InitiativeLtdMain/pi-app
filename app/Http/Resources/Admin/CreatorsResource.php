<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CreatorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $mentor = $this->mentor()->first(); // Retrieve the mentor model instance
        if ($mentor) {
            $numberOfMentees = $mentor->getNumberOfMentees('accepted');
            // dd();
        } else {
            $numberOfMentees = 0;
        };
        return [
            'id' => $this->id,
            'name' => $this->first_name . ' ' . $this->last_name,
            'email' => $this->email,
            'no_of_courses' => $this->courses->count(),
            'no_of_mentees' => $numberOfMentees,
            'created_at' => $this->created_at
        ];
    }
}
