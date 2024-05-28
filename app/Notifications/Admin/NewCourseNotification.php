<?php

namespace App\Notifications\Admin;

use App\Models\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCourseNotification extends Notification
{
    use Queueable;

    public $course;
    public $institute;
    /**
     * Create a new notification instance.
     */
    public function __construct(Course $course, $institute)
    {
        $this->course = $course;
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
            ->subject('New Course Uploaded.')
            ->view('vendor.notifications.admin.course', ['user' => $notifiable, 'course' => $this->course, 'institute' => $this->institute]);

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            "title" => "New Course Created",
            "description" => "A new course titled \"" . $this->course->title . "\" has been created.",
            "category" => "Course"
        ];
    }
}
