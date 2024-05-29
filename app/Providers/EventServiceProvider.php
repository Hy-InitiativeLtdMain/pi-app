<?php

namespace App\Providers;

use App\Events\Admin\MentorApproval;
use App\Events\Admin\NewCourse;
use App\Events\Admin\NewUser;
use App\Events\Mentee\BookingApproval;
use App\Events\Mentor\MentorshipBooking;
use App\Events\PasswordChange;
use App\Listeners\Admin\SendMentorApprovalNotification;
use App\Listeners\Admin\SendNewCourseNotification;
use App\Listeners\Admin\SendNewUserNotification;
use App\Listeners\Mentee\SendBookingNotification;
use App\Listeners\Mentor\SendPendingBookingNotification;
use App\Listeners\SendPasswordChangeNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        // Mentorship approved/declined
        MentorApproval::class => [SendMentorApprovalNotification::class],
        NewCourse::class => [SendNewCourseNotification::class],
        NewUser::class => [SendNewUserNotification::class],

        // Mentee
        BookingApproval::class => [SendBookingNotification::class],

        // Mentor
        MentorshipBooking::class => [SendPendingBookingNotification::class],

        // Users
        PasswordChange::class => [SendPasswordChangeNotification::class],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
