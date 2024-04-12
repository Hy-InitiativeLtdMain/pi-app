<?php

namespace App\Http\Controllers\Mentee;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Http\Resources\Mentee\AvailableMentorsResource;
use App\Http\Resources\Mentee\BookingResource;
use App\Http\Resources\Mentor\AvailabilityResource;
use App\Http\Resources\Mentor\MentorResource;
use App\Models\Booking;
use App\Models\MentorAvailability;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingManager extends Controller
{
    use ApiResponser;

    public function store(BookingRequest $request)
    {
        $request->validated();

        $day = $request->day;
        $currentDay = Carbon::today()->format('l');

        // Find the next occurrence of $day
        if ($currentDay !== $day) {
            $nextDay = Carbon::now()->next($day);
        } else {
            $nextDay = Carbon::now()->next($day);
        }

        // Get the date of the next occurrence
        $nextDayDate = $nextDay->format('Y-m-d');


        $request->merge(['mentee_id' => auth()->user()->mentee->id, 'date' => $nextDayDate]);
        $booking = Booking::create($request->all());
        return response()->json(['data' => new BookingResource($booking), 'message' => 'Booking created successfully'], 201);
    }

    public function index()
    {
        $mentee = auth()->user()->mentee->id;
        $bookings = Booking::where('mentee_id', $mentee)->with('mentorAvailability')->get();
        // dd($bookings);
        // Add flags for expired bookings and meeting links for approved bookings
        $bookings->transform(function ($booking) {
            if ($booking->hasExpired()) {
                $booking->expired = true;
            }

            if ($booking->isApproved()) {
                $booking->meeting_link = $booking->mentorAvailability->meeting_link;
            }
            return $booking;
        });

        return $this->showAll(BookingResource::collection($bookings), 200);
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return response()->json(['data' => new BookingResource($booking)], 200);
    }

    public function update(BookingRequest $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update($request->all());
        return response()->json(['data' => new BookingResource($booking), 'message' => 'Booking updated successfully'], 200);
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json(['message' => 'Booking deleted successfully'], 204);
    }

    public function getAvailableMentorsAtCurrentTime(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'date' => 'required|date'
        ]);

        // Retrieve the date from the request
        $date = $request->input('date');

        // Error handling
        if (!auth()->user()->mentee) {
            return $this->errorResponse('You are not a mentee', 401);
        }
        // get signed-in mentee id
        $menteeId = auth()->user()->mentee->id;


        //retrieve the signed-in mentee's bookings
        $menteeBookings = Booking::where('mentee_id', $menteeId)->pluck('mentor_availability_id');

        // Paginate the MentorAvailability records
        $perPage = $request->input('per_page', 10); // Default to 10 items per page
        $allAvailability = MentorAvailability::all();

        // Filter the records based on the date field within the availability JSON
        $availableMentors = $allAvailability->filter(function ($availability) use ($date, $menteeBookings) {
            // Decode the availability field only if it's a string
            $availabilityData = is_string($availability->availability) ? json_decode($availability->availability, true) : $availability->availability;
            // Check if the decoded data has the expected structure and date
            $isAvailable = is_array($availabilityData) && isset ($availabilityData['date']) && $availabilityData['date'] === $date;
            // Check if the mentor has been booked
            $isBooked = $menteeBookings->contains($availability->id);
            // Add a temporary field to the availability record to indicate if the mentor is booked
            $availability->is_booked = $isBooked ? 'yes' : 'no';
            // Return the availability record with the temporary field
            return $isAvailable;
        });

        // Return the paginated response
        return $this->paginate(AvailableMentorsResource::collection($availableMentors), $perPage);
    }

    // Update Status of Booking
    public function updateStatus(Request $request, Booking $booking)
    {
        // CHECK IF THE BOOKING IS OWNED BY THE CURRENT USER
        if ($booking->mentor_id != auth()->user()->mentor->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $request->validate([
            'status' => 'required|in:Pending,Approved,Declined',
        ]);


        $booking->update(['status' => $request->input('status')]);
        return response()->json(['message' => 'Booking status updated successfully'], 200);
    }

    // // Needs mentee input (Fetch Available Mentors at a given time)
    // public function getAvailableMentorsAtTime(Request $request)
    // {
    //     $request->validate([
    //         'time' => 'required|date_format:H:i',
    //     ]);

    //     $requestedTime = Carbon::createFromFormat('H:i', $request->input('time'));

    //     $availableMentors = MentorAvailability::whereJsonContains('availability', function ($query) use ($requestedTime) {
    //         $query->where('time_slots', 'like', '%' . $requestedTime->format('H:i') . '%');
    //     })->with('mentor')->get();

    //     return $availableMentors;
    // }


    // get mentors based on approved booking
    public function getMentors()
    {
        $menteeId = auth()->user()->mentee->id;
        $bookings = Booking::where('mentee_id', $menteeId)->where('status', 'Approved')->with('mentor')->get();
        // get the mentors from the bookings
        $mentors = $bookings->pluck('mentor');



        return $this->showAll(MentorResource::collection($mentors), 200);
    }

    public function getMentor($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);
        $mentor = $booking->mentor;
        return $this->showOne(new MentorResource($mentor), 200);
    }

    // A function for the mentor to get all bookings he has accepted
    public function getAcceptedBookings()
    {
        $mentorId = auth()->user()->mentor->id;
        $bookings = Booking::where('mentor_id', $mentorId)->where('status', 'Approved')->with('mentee')->get();
        return $this->showAll(BookingResource::collection($bookings), 200);
    }
}

