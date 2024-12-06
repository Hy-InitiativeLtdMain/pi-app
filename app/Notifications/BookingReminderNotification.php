<?php

namespace App\Notifications;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingReminderNotification extends Notification
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
        return ['mail', 'booking'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->from('info@wesonline.ng', strtoupper($this->institute) . ' @ WESOnline')
            ->subject('Booking Reminder')
            ->view('vendor.notifications.user.booking_reminder', [
                'user' => $notifiable,
                'booking' => $this->booking,
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
            'booking_id' => $this->booking->id,
            'title' => "Mentorship Session Reminder",
            'description' => "This is a reminder for your upcoming Mentorship Session at ". $this->booking->time .".",
            'category' => "Reminder",
            "type" => "Booking",
            "id" => $this->booking->id,
        ];
    }
}
