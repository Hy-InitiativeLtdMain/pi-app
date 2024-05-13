<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class SessionsManager extends Controller
{
    use ApiResponser;

    public function __construct()
    {
        $this->middleware('feature:mentorship');
    }

    public function checkUser($authUser){
        if ($authUser->mentee){
            $user = 'mentee';
            return $user;
        } elseif ($authUser->mentor){
            $user = 'mentor';
            return $user;
        }
    }

    public function sessions(){
        $user = auth()->user();
        $userType = $this->checkUser($user);
        if ($userType == 'mentee'){
            $mentee = $user->mentee->id;
            $bookings = Booking::where('mentee_id', $mentee)->where('status', 'Approved')->get();
            // create an array of date and number of bookings
            // there is a date field in booking
            // return the array

            foreach ($bookings as $booking) {
                $date = $booking->date;
                if (isset($sessionData[$date])) {
                    $sessionData[$date]++;
                } else {
                    $sessionData[$date] = 1;
                }
            }

        }

        if ($userType == 'mentor'){
            $mentor = $user->mentor->id;
            $bookings = Booking::where('mentor_id', $mentor)->where('status', 'Approved')->get();
            $sessionData = [];
            // create an array of date and number of bookings

            // return the array
            foreach ($bookings as $booking) {
                $date = $booking->date;
                if (isset($sessionData[$date])) {
                    $sessionData[$date]++;
                } else {
                    $sessionData[$date] = 1;
                }
            }
        }
        $formattedData = [];
        foreach ($sessionData as $date => $count) {
            $formattedData[] = [
                'date' => $date,
                'booking_count' => $count
            ];
        }

        return response()->json($formattedData);

    }
}
