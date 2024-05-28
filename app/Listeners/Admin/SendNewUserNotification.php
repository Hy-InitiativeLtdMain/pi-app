<?php

namespace App\Listeners\Admin;

use App\Events\Admin\NewUser;
use App\Models\User;
use App\Notifications\Admin\NewUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewUserNotification implements ShouldQueue
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
    public function handle(NewUser $event): void
    {
        $userInstitute = $event->user->institute_slug;

        $admin = User::where('institute_slug', $userInstitute)->where('admin', 1)->get();

        foreach ($admin as $user){
            $user->notify(new NewUserNotification($event->user, $event->institute));
        }
    }
}
