<?php

namespace App\Jobs;

use App\Models\Booking;
use App\Models\Mentee;
use App\Models\Mentor;
use App\Models\User;
use App\Notifications\BookingReminderNotification;
use App\Services\Notification\FirebaseNotificationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendBookingReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $booking;
    protected $user;
    protected FirebaseNotificationService $firebaseNotificationService;

    /**
     * Create a new job instance.
     */
    public function __construct(Booking $booking, User $user)
    {
        $this->booking = $booking;
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(FirebaseNotificationService $firebaseNotificationService): void
    {
        $this->firebaseNotificationService = $firebaseNotificationService;

        // Send traditional notification (email + database)
        $this->user->notify(new BookingReminderNotification($this->booking));

        // Send Firebase notification
        $institute = $this->user->institute_slug ?? 'default';
        $this->firebaseNotificationService->sendBookingReminderNotification($this->booking, $this->user, $institute);
    }
}
