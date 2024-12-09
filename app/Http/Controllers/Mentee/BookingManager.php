<?php

namespace App\Http\Controllers\Mentee;

use App\Events\Mentee\BookingApproval;
use App\Events\Mentor\MentorshipBooking;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Http\Resources\Mentee\AvailableMentorsResource;
use App\Http\Resources\Mentee\BookingResource;
use App\Http\Resources\Mentor\MentorResource;
use App\Jobs\SendBookingReminder;
use App\Models\Booking;
use App\Models\MentorAvailability;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingManager extends Controller
{
    use ApiResponser;
    public function __construct()
    {
        // 'mentorship', 'course', 'analytics', 'transaction'
        $this->middleware('feature:mentorship');
    }

    public function storeOrUpdate(BookingRequest $request)
    {
        // Validate the request data
        $validatedData = $request->validated();

        // Get the authenticated mentee's ID
        $mentee_id = auth()->user()->mentee->id;

        if (!$mentee_id) {
            return response()->json(['message' => 'Mentee not found OR mentee details not registered'], 404);
        }

        // Find the next occurrence of the requested day
        $day = $request->day;
        $currentDay = Carbon::today()->format('l');

        // Determine the next occurrence date of the requested day
        $nextDay = $currentDay !== $day ? Carbon::now()->next($day) : Carbon::now()->next($day);
        $nextDayDate = $nextDay->format('Y-m-d');

        // Check if a booking already exists for the same mentee_id and mentor_id
        $existingBooking = Booking::where('mentee_id', $mentee_id)
            ->where('mentor_id', $request->mentor_id)
            ->first();

        if ($existingBooking) {
            // If booking exists, update it
            $existingBooking->update([
                'mentor_availability_id' => $request->mentor_availability_id,
                'day' => $day,
                'time' => $request->time,
                'date' => $nextDayDate,
                'reason' => $request->reason,
            ]);

            event(new MentorshipBooking($existingBooking, auth()->user()->institute_slug));

            return response()->json(['data' => new BookingResource($existingBooking), 'message' => 'Booking updated successfully'], 200);
        } else {
            // If no booking exists, create a new one
            $newBooking = Booking::create([
                'mentee_id' => $mentee_id,
                'mentor_id' => $request->mentor_id,
                'mentor_availability_id' => $request->mentor_availability_id,
                'day' => $day,
                'time' => $request->time,
                'date' => $nextDayDate,
                'reason' => $request->reason,
            ]);

            event(new MentorshipBooking($newBooking, auth()->user()->institute_slug));

            return response()->json(['data' => new BookingResource($newBooking), 'message' => 'Booking created successfully'], 201);
        }
    }

    public function index(Request $request)
    {
        $mentee = auth()->user()->mentee->id;

        if (!$mentee) {
            return response()->json(['message' => 'Mentee not found OR mentee details not registered'], 404);
        }

        // Start the query for bookings
        $query = Booking::where('mentee_id', $mentee)->with('mentorAvailability');

        // Add date filters based on request parameters
        if ($request->has('filter')) {
            $filter = $request->input('filter');

            switch ($filter) {
                case 'today':
                    $query->whereDate('created_at', Carbon::today());
                    break;

                case 'week':
                    $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                    break;

                case 'month':
                    $query->whereMonth('created_at', Carbon::now()->month)
                        ->whereYear('created_at', Carbon::now()->year);
                    break;

                case 'year':
                    $query->whereYear('created_at', Carbon::now()->year);
                    break;

                default:
                    return response()->json(['message' => 'Invalid filter provided.'], 400);
            }
        }

        $bookings = $query->get();

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
            'date' => 'required|date',
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
            $isAvailable = is_array($availabilityData) && isset($availabilityData['date']) && $availabilityData['date'] === $date;
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
        if (!auth()->user()->mentor->id) {
            return $this->errorResponse('You are not a mentor', 404);
        }
        if (auth()->user()->mentor->status == 'pending') {
            return $this->errorResponse('Your account is pending', 404);
        } else if (auth()->user()->mentor->status == 'declined') {
            return $this->errorResponse('Your account is rejected', 404);
        }
        // CHECK IF THE BOOKING IS OWNED BY THE CURRENT USER
        if ($booking->mentor_id != auth()->user()->mentor->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $request->validate([
            'status' => 'required|in:Pending,Approved,Declined',
        ]);

        $booking->update(['status' => $request->input('status')]);

        // if the booking status is approved
        if ($booking->status == 'Approved') {
            // Schedule the reminder notification
            $bookingDate = Carbon::parse($booking->date); // Assume booking->date holds the booking date
            $delay = $bookingDate->addHour(1); // Adjust the delay as needed

            $mentor = $booking->mentor->user; // Retrieve the mentor user
            SendBookingReminder::dispatch($booking, $mentor)->delay($delay);

            $mentee = $booking->mentee->user; // Retrieve the mentee user
            SendBookingReminder::dispatch($booking, $mentee)->delay($delay);
        }

        event(new BookingApproval($booking, auth()->user()->institute_slug));
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

        if (!$menteeId) {
            return response()->json(['message' => 'Mentee not found OR mentee details not registed'], 404);
        }

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
        if (!auth()->user()->mentor->id) {
            return $this->errorResponse('You are not a mentor', 404);
        }
        if (auth()->user()->mentor->status == 'pending') {
            return $this->errorResponse('Your account is pending', 404);
        } else if (auth()->user()->mentor->status == 'declined') {
            return $this->errorResponse('Your account is rejected', 404);
        }
        $mentorId = auth()->user()->mentor->id;
        $bookings = Booking::where('mentor_id', $mentorId)->where('status', 'Approved')->with('mentee')->get();
        return $this->showAll(BookingResource::collection($bookings), 200);
    }

    // Create a function where we count the number of mentees/mentors based on the authenticated user

    public function countMentees()
    {
        $mentorId = auth()->user()->mentor->id;
        $count = Booking::where('mentor_id', $mentorId)->where('status', 'Approved')->count();
        return response()->json(['no_of_mentees' => $count], 200);
    }

    // create a count for mentors too

    public function countMentors()
    {
        $menteeId = auth()->user()->mentee->id;
        $count = Booking::where('mentee_id', $menteeId)->where('status', 'Approved')->count();
        return response()->json(['no_of_mentors' => $count], 200);
    }
}
