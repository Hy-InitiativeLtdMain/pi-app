<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LearnersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $mentee = $this->mentee()->first(); // Retrieve the mentee model instance
        if ($mentee) {
            $numberOfMentors = $mentee->getNumberOfMentors('Approved');
            // dd($numberOfMentors);
        } else {
            $numberOfMentors = 0;
        };
        return [
            'id' => $this->id,
            'name' => $this->first_name . ' ' . $this->last_name,
            'email' => $this->email,
            'no_of_courses' => $this->lessons->count(),
            'no_of_mentors' => $numberOfMentors,
            'created_at' => $this->created_at,
            'image' => $this->image
        ];
}
}
