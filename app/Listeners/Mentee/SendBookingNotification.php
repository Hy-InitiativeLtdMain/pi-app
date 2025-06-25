<?php

namespace App\Listeners\Mentee;

use App\Events\Mentee\BookingApproval;
use App\Models\User;
use App\Notifications\Mentee\BookingApprovalNotification;
use App\Services\Notification\FirebaseNotificationService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendBookingNotification implements ShouldQueue
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
    public function handle(BookingApproval $event): void
    {
        $mentee = $event->booking->mentee;
        $user = User::where('id', $mentee->user_id)->first();

        // Send traditional notification (email + database)
        $user->notify(new BookingApprovalNotification($event->booking, $event->institute));

        // Send Firebase notification
        $this->firebaseNotificationService->sendBookingApprovalNotificationToMentee($event->booking, $event->institute);
    }
}
