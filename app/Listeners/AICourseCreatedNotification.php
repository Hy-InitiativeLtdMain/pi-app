<?php

namespace App\Listeners;

use App\Events\AICourseCreated;
use App\Notifications\AICourseCreated as NotificationsAICourseCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AICourseCreatedNotification implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AICourseCreated $event): void
    {
        $user = $event->user;

        $user->notify(new NotificationsAICourseCreated($event->user, $event->course));
    }
}
