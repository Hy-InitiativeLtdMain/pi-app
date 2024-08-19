<?php

namespace App\Listeners;

use App\Events\PasswordChange;
use App\Notifications\ChangedPasswordNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPasswordChangeNotification implements ShouldQueue
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
    public function handle(PasswordChange $event): void
    {
        $user = $event->user;

        $user->notify(new ChangedPasswordNotification($event->user, $event->institute));
    }
}
