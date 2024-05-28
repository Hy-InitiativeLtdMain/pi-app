<?php

namespace App\Listeners\Mentee;

use App\Events\Mentee\BookingApproval;
use App\Models\User;
use App\Notifications\Mentee\BookingApprovalNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendBookingNotification implements ShouldQueue
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
    public function handle(BookingApproval $event): void
    {
        $mentee = $event->booking->mentee;
        $user = User::where('id', $mentee->user_id)->first();

        $user->notify(new BookingApprovalNotification($event->booking, $event->institute));
    }
}
