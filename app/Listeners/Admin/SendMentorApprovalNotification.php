<?php

namespace App\Listeners\Admin;

use App\Events\Admin\MentorApproval;
use App\Models\User;
use App\Notifications\Admin\MentorApprovalNotification;
use App\Services\Notification\FirebaseNotificationService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMentorApprovalNotification implements ShouldQueue
{
    use InteractsWithQueue;

    protected FirebaseNotificationService $firebaseNotificationService;

    /**
     * Create the event listener.
     */
    public function __construct(FirebaseNotificationService $firebaseNotificationService)
    {
        $this->firebaseNotificationService = $firebaseNotificationService;
    }

    /**
     * Handle the event.
     */
    public function handle(MentorApproval $event): void
    {
        $user_id = $event->mentor->user_id;

        $user = User::where('id', $user_id)->first();

        // Send traditional notification (email + database)
        $user->notify(new MentorApprovalNotification($event->mentor, $event->institute));

        // Send Firebase notification
        $this->firebaseNotificationService->sendMentorApprovalNotification($event->mentor, $event->institute, $event->mentor->status);
    }
}
