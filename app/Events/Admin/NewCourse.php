<?php

namespace App\Events\Admin;

use App\Models\Course;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewCourse
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $course;
    public $institute;
    /**
     * Create a new event instance.
     */
    public function __construct(Course $course, $institute)
    {
        $this->course = $course;
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
