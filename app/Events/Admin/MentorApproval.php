<?php

namespace App\Events\Admin;

use App\Models\Mentor;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MentorApproval
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Mentor $mentor;
    public $institute;

    /**
     * Create a new event instance.
     */
    public function __construct($mentor, $institute)
    {
        $this->mentor = $mentor;
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
