<?php

namespace App\Notifications\Mentee;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingApprovalNotification extends Notification
{
    use Queueable;

    public $booking;
    /**
     * Create a new notification instance.
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
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
        $status = $this->booking->status; // Assuming `status` holds the approval status
        $statusMessage = $status === 'Approved' ? 'approved' : 'declined';

        return (new MailMessage)
            ->subject('Booking ' . ucfirst($statusMessage))
            ->view('vendor.notifications.mentee.booking', [
                'booking' => $this->booking,
                'user' => $notifiable,
                'statusMessage' => $statusMessage
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        $statusMessage = $this->booking->status === 'approved' ? 'approved' : 'declined';

        return [
            "title" => "Booking " . ucfirst($statusMessage),
            "description" => "Your booking for the session has been " . $statusMessage . ".",
            "category" => "Booking"
        ];
    }
}
