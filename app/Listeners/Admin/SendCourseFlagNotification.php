<?php

namespace App\Listeners\Admin;

use App\Events\Admin\FlagCourse;
use App\Models\User;
use App\Notifications\Admin\CourseFlagNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendCourseFlagNotification implements ShouldQueue
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
    public function handle(FlagCourse $event): void
    {
        $user_id = $event->course->user_id;

        $user = User::where('id', $user_id)->first();

        $user->notify(new CourseFlagNotification($event->course));
    }
}
