<?php

namespace App\Console\Commands;

use App\Models\Booking;
use App\Notifications\BookingReminderNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;

class NotifyUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:booking';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $bookings = Booking::where('date', '<=', Carbon::now()->add(1, 'day')->toDateString())
                    ->where('date', '>', Carbon::now()->toDateString)
                    ->get();

        foreach ($bookings as $booking) {
            $booking->mentor->user->notify(new BookingReminderNotification($booking));
            $booking->mentee->user->notify(new BookingReminderNotification($booking));
        }
    }
}
