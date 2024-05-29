<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MentorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this->getNumberOfMentees('approved'));
        return [
            'id' => $this->id,
            'name' => $this->firstname. ' '. $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'created_at' => $this->created_at,
            'no_of_mentees' => $this->getNumberOfMentees('approved'),
            'status' => $this->status,
            'job_title' => $this->job_title,
        ];
    }
}
