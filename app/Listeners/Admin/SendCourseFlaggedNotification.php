<?php

namespace App\Listeners\Admin;

use App\Events\Admin\FlaggedCourse as AdminFlaggedCourse;
use App\Models\User;
use App\Notifications\Admin\CourseFlaggedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendCourseFlaggedNotification implements ShouldQueue
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
    public function handle(AdminFlaggedCourse $event): void
    {
        $user_id = $event->lesson->course->user_id;

        $user = User::where('id', $user_id)->first();

        $user->notify(new CourseFlaggedNotification($event->lesson));
    }
}
