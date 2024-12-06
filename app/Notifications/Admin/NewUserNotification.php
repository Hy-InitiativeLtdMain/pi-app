<?php

namespace App\Notifications\Admin;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserNotification extends Notification
{
    use Queueable;

    public $user;
    public $institute;
    /**
     * Create a new notification instance.
     */
    public function __construct(User $user, $institute)
    {
        $this->user = $user;
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
                    ->subject('New User Registered')
                    ->view('vendor.notifications.admin.user', ['user' => $notifiable, 'newUser' => $this->user, 'institute' => $this->institute]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            "title" => "New User Registered.",
            "description" => "A new user has registered in your institute.",
            "category" => "User",
            "type" => "User",
            "id" => $this->user->id,
        ];
    }
}
