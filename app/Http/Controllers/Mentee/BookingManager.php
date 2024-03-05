<?php

namespace App\Http\Controllers\Mentee;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Http\Resources\Mentee\BookingResource;
use App\Http\Resources\Mentor\AvailabilityResource;
use App\Models\Booking;
use App\Models\MentorAvailability;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $request->validate([
            'date' => 'required|date',
            // 'time' => 'required|date_format:H:i',
        ]);

        $date = $request->input('date');
        // $time = $request->input('time');


        $availableMentors = MentorAvailability::whereJsonContains('availability->date', $date)
            // ->whereJsonContains('availability->time_slots','like', '%' . $time. '%')
            ->get();

        // dd($availableMentors);

        return $this->successResponse(AvailabilityResource::collection($availableMentors), 200);
    }

    // Needs mentee input (Fetch Available Mentors at a given time)
    public function getAvailableMentorsAtTime(Request $request)
    {
        $request->validate([
            'time' => 'required|date_format:H:i',
        ]);

        $requestedTime = Carbon::createFromFormat('H:i', $request->input('time'));

        $availableMentors = MentorAvailability::whereJsonContains('availability', function ($query) use ($requestedTime) {
            $query->where('time_slots', 'like', '%' . $requestedTime->format('H:i') . '%');
        })->with('mentor')->get();

        return $availableMentors;
    }
}
