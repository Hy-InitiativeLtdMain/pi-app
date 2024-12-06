<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ChangedPasswordNotification extends Notification
{
    use Queueable;

    public $user, $institute;
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
            ->subject('Password Changed')
            ->view('vendor.notifications.user.password_changed', [
                'userp' => $this->user,
                'user' => $notifiable,
                'institute' => $this->institute,
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
            "title" => "Password Changed",
            "description" => "Your password has been successfully changed.",
            "category" => "Security",
            "user_id" => $this->user->id,
            "type" => "User",
            "id" => $this->user->id,
        ];
    }
}
