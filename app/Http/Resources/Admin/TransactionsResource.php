<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionsResource extends JsonResource
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
            'user_name' => $this->user->first_name . ' '. $this->user->last_name,
            'date_done' => $this->created_at,
            'amount' => $this->amount,
            'status' => $this->status == 0? 'pending':( $this->status == 1? 'paid': 'failed'),
            

        ];
    }
}
