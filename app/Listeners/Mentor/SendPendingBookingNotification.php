<?php

namespace App\Listeners\Mentor;

use App\Events\Mentor\MentorshipBooking;
use App\Models\User;
use App\Notifications\Mentor\PendingBookingNotification;
use App\Services\Notification\FirebaseNotificationService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPendingBookingNotification implements ShouldQueue
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
    public function handle(MentorshipBooking $event): void
    {
        $mentor = $event->booking->mentor;

        $user = User::where('id', $mentor->user_id)->first();

        // Send traditional notification (email + database)
        $user->notify(new PendingBookingNotification($event->booking, $event->institute));

        // Send Firebase notification
        $this->firebaseNotificationService->sendBookingNotificationToMentor($event->booking, $event->institute);
    }
}
