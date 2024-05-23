<?php

namespace App\Listeners\Admin;

use App\Events\Admin\NewCourse;
use App\Models\User;
use App\Notifications\Admin\NewCourseNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewCourseNotification implements ShouldQueue
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
    public function handle(NewCourse $event): void
    {
        $userInstitute = $event->course->user->institute_slug;
        $admin = User::where('institute_slug', $userInstitute)->where('admin', 1)->get();
        foreach ($admin as $user) {
            $user->notify(new NewCourseNotification($event->course));
        }
    }
}
