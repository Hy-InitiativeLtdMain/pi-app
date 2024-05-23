<?php

namespace App\Listeners\Mentor;

use App\Events\Mentor\MentorshipBooking;
use App\Models\User;
use App\Notifications\Mentor\PendingBookingNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPendingBookingNotification implements ShouldQueue
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
    public function handle(MentorshipBooking $event): void
    {
        $mentor = $event->booking->mentor;

        $user = User::where('id', $mentor->user_id)->first();

        $user->notify(new PendingBookingNotification($event->booking));
    }
}
