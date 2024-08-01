<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FeatureNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $featureTitle, $featureUrl, $institute, $user;


    /**
     * Create a new notification instance.
     */
    public function __construct($featureTitle, $featureUrl, $institute, $user)
    {
        $this->featureTitle = $featureTitle;
        $this->featureUrl = $featureUrl;
        $this->institute = $institute;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->from('info@wesonline.ng', strtoupper($this->institute) . ' @ WESOnline')
            ->subject('New Feature Added')
            ->view('vendor.notifications.feature', [
                'feature_title' => $this->featureTitle,
                'feature_url' => $this->featureUrl,
                'institute' => $this->institute,
                'user'=> $this->user,
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
            'feature_title' => $this->featureTitle,
            'feature_url' => $this->featureUrl,
            'message' => 'New feature added',
            'category' => 'Features'
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'feature_title' => $this->featureTitle,
        ]);
    }
}
