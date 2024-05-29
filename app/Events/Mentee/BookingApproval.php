<?php

namespace App\Events\Mentee;

use App\Models\Booking;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BookingApproval
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $booking;
    public $institute;
    /**
     * Create a new event instance.
     */
    public function __construct(Booking $booking, $institute)
    {
        $this->booking = $booking;
        $this->institute = $institute;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
