<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CourseFlagNotification extends Notification
{
    use Queueable;

    private $course;
    /**
     * Create a new notification instance.
     */
    public function __construct($course)
    {
        $this->course = $course;
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
        $status = $this->course->status;
        // dd($status);
        $message = new MailMessage;

        if ($status == 'approved') {
            $message->from('info@wesonline.ng', strtoupper($this->course->institute_slug) . ' @ WESOnline')
            ->subject('Course Approval Status: Approved')
            ->view('vendor.notifications.course.approved.approved', ['user' => $notifiable, 'course' => $this->course, 'institute' => $this->course->institute_slug]);
        } elseif ($status == 'declined') {
            $message->subject('Course Approval Status: Declined')
            ->view('vendor.notifications.course.approved.declined', ['user' => $notifiable, 'course' => $this->course, 'institute' => $this->course->institute_slug]);
        } else {
            $message->subject('Course Approval Status: Pending')
            ->line('Your course is currently under review.')
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
        $status = $this->course->status;
        $message = '';
        $title = '';
        $heading = $this->course->title;

        if ($status == 'approved') {
            $title = 'Course Approval Status: Approved';
            $message = "Your course '". $heading . "' has been approved.";
        } elseif ($status == 'declined') {
            $title = 'Course Approval Status: Declined';
            $message = "Your course '" . $heading . "' has been declined.";
        } else {
            $title = 'Course Approval Status: Pending';
            $message = "Your course '" . $heading . "' is currently under review.";
        }
        return [
            'user_id' => $this->course->user_id,
            'title' => $title,
            'description' => $message,
            'category' => "Course",
        ];
    }
}
