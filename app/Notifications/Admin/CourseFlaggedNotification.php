<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CourseFlaggedNotification extends Notification
{
    use Queueable;

    public $lesson;
    /**
     * Create a new notification instance.
     */
    public function __construct($lesson)
    {
        $this->lesson = $lesson;
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
        $status = $this->lesson->status;
        // dd($status);
        $message = new MailMessage;

        if ($status == 'approved') {
            $message->from('info@wesonline.ng', strtoupper($this->lesson->course->institute_slug) . ' @ WESOnline')
            ->subject('Course Lesson Approval Status: Approved')
            ->view('vendor.notifications.course.approval.approved', ['user' => $notifiable, 'lesson' => $this->lesson, 'institute' => $this->lesson->course->institute_slug]);
        } elseif ($status == 'declined') {
            $message->subject('Course Lesson Status: Declined')
            ->view('vendor.notifications.course.approval.declined', ['user' => $notifiable, 'lesson' => $this->lesson, 'institute' => $this->lesson->course->institute_slug]);
        } else {
            $message->subject('Course Lesson Approval Status: Pending')
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
        $status = $this->lesson->status;
        $message = '';
        $title = '';

        if ($status == 'approved') {
            $title = 'Course Lesson Approval Status: Approved';
            $message = 'Your course lesson has been approved.';
        } elseif ($status == 'declined') {
            $title = 'Course Lesson Approval Status: Declined';
            $message = 'Your course lesson has been declined.';
        } else {
            $title = 'Course Lesson Approval Status: Pending';
            $message = 'Your course lesson is currently under review.';
        }
        return [
            'user_id' => $this->lesson->course->user_id,
            'title' => $title,
            'description' => $message,
            'category' => "Course"
        ];
    }
}
