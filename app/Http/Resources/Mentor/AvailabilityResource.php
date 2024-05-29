<?php

namespace App\Http\Resources\Mentor;

use App\Http\Resources\Mentee\BookingResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvailabilityResource extends JsonResource
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
            'availability' => $this->availability,
            'duration' => $this->duration,
            'about' => $this->about,
            'title' => $this->title,
            'meeting_link' => $this->meeting_link,
            'mentor' => $this->mentor,
            'bookings' => BookingResource::collection($this->booking),
        ];
    }
}
