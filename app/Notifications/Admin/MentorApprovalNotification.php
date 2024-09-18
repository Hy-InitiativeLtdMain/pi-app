<?php

namespace App\Notifications\Admin;

use App\Models\Mentor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MentorApprovalNotification extends Notification
{
    use Queueable;

    public Mentor $mentor;
    public $institute;
    /**
     * Create a new notification instance.
     */
    public function __construct($mentor, $institute)
    {
        $this->mentor = $mentor;
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
        $status = $this->mentor->status;
        $message = new MailMessage;

        if ($status == 'approved') {
            $message->from('info@wesonline.ng', strtoupper($this->institute). ' @ WESOnline')
            ->subject('Mentor Approval Status: Approved')
            ->view('vendor.notifications.mentor.approval.approved', ['user' => $notifiable, 'institute' => $this->institute]);
        } elseif ($status == 'declined') {
            $message->subject('Mentor Approval Status: Declined')
            ->view('vendor.notifications.mentor.approval.declined', ['user' =>$notifiable, 'institute' => $this->institute]);
        } else {
            $message->subject('Mentor Approval Status: Pending')
            ->line('Your mentor application is currently under review.')
            ->line('We will notify you once a decision has been made.')
            ->line('Thank you for your patience.');
        }

        return $message;
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        $status = $this->mentor->status;
        $message = '';
        $title = '';

        if ($status == 'approved') {
            $title = 'Mentor Approval Status: Approved';
            $message = 'Your mentor application has been approved.';
        } elseif ($status == 'declined') {
            $title = "Mentor Approval Status: Declined";
            $message = 'Your mentor application has been declined.';
        } else {
            $title = "Mentor Approval Status: Pending";
            $message = 'Your mentor application is currently under review.';
        }

        return [
            'mentor_id' => $this->mentor->id,
            'title' => $title,
            'description' => $message,
            'category' => "Mentor"
        ];
    }
}
