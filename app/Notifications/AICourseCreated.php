<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AICourseCreated extends Notification
{
    use Queueable;

    public $user, $course;
    /**
     * Create a new notification instance.
     */
    public function __construct($user, $course)
    {
        $this->user = $user;
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
        return (new MailMessage)
                    ->from('info@wesonline.ng', strtoupper($this->user->institute_slug) . ' @ WESOnline')
                    ->subject('AI Course Details Generated')
                    ->view('vendor.notifications.user.generated',[
                        'user' => $this->user,
                        'course' => $this->course
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
            "title" => "AI Content Generated",
            "description" => "Your Course details that you generated are done, please check it soon.",
            "category" => "Urgent",
            "user_id" => $this->user->id,
            "type" => "Course",
            "id" => $this->course->id,
        ];
    }
}
