<?php

namespace App\Http\Controllers\Mentee;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Http\Resources\Mentee\AvailableMentorsResource;
use App\Http\Resources\Mentee\BookingResource;
use App\Http\Resources\Mentor\AvailabilityResource;
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
        $request->merge(['mentee_id' => auth()->user()->mentee->id]);
        $booking = Booking::create($request->all());
        return response()->json(['data' => new BookingResource($booking), 'message' => 'Booking created successfully'], 201);
    }

    public function index()
    {
        $mentee = auth()->user()->mentee->id;
        $bookings = Booking::where('mentee_id', $mentee)->get();
        return $this->successResponse(BookingResource::collection($bookings), 200);
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

        // Paginate the MentorAvailability records
        $perPage = $request->input('per_page', 10); // Default to 10 items per page
        $allAvailability = MentorAvailability::all();

        // Filter the records based on the date field within the availability JSON
        $availableMentors = $allAvailability->filter(function ($availability) use ($date) {
            // Decode the availability field only if it's a string
            $availabilityData = is_string($availability->availability) ? json_decode($availability->availability, true) : $availability->availability;
            // Check if the decoded data has the expected structure and date
            return is_array($availabilityData) && isset ($availabilityData['date']) && $availabilityData['date'] === $date;
        });

        $data = AvailableMentorsResource::collection($availableMentors);


        // Return the paginated response
        return $this->paginate($data, $perPage);
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


}
