<?php

namespace App\Notifications\Mentor;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PendingBookingNotification extends Notification
{
    use Queueable;

    public $booking, $institute;
    /**
     * Create a new notification instance.
     */
    public function __construct(Booking $booking, $institute)
    {
        $this->booking = $booking;
        $this->institute = $institute;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->from('info@wesonline.ng', strtoupper($this->institute) . ' @ WESOnline')
            ->subject('New Pending Booking')
            ->view('vendor.notifications.mentor.pending_booking', [
                'booking' => $this->booking,
                'user' => $notifiable,
                'institute' => $this->institute
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            "title" => "New Pending Booking",
            "description" => "A mentee has created a new booking that requires your action.",
            "category" => "Booking",
            "booking_id" => $this->booking->id
        ];
    }
}
