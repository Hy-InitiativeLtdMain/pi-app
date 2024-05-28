<?php

namespace App\Listeners\Admin;

use App\Events\Admin\MentorApproval;
use App\Models\User;
use App\Notifications\Admin\MentorApprovalNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMentorApprovalNotification implements ShouldQueue
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
    public function handle(MentorApproval $event): void
    {
        $user_id = $event->mentor->user_id;

        $user = User::where('id', $user_id)->first();

        $user->notify(new MentorApprovalNotification($event->mentor, $event->institute));
    }
}
