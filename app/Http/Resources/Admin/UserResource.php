<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->first_name . ' '. $this->last_name,
            'email' => $this->email,
            'role' => $this->is_admin ? 'Creator' : 'Learner',
            'created_at' => $this->created_at,
            'image' => $this->image,
        ];
    }
}
