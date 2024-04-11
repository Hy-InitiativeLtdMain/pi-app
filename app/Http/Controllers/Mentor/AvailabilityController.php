<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Http\Requests\MentorAvailabilityRequest;
use App\Http\Resources\Mentee\BookingResource;
use App\Http\Resources\Mentor\AvailabilityResource;
use App\Models\Booking;
use App\Models\MentorAvailability;
use App\Traits\ApiResponser;
use App\Traits\ProcessAvailability as TraitsProcessAvailability;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    use ApiResponser, TraitsProcessAvailability;


    public function index()
    {
        $mentorId = auth()->user()->mentor->id;
        $availability = MentorAvailability::where('mentor_id', $mentorId)->with('booking')->get();

        $allAvailability=[];
        foreach ($availability as $index => $avail) {

            $allAvailability[$avail->id] = $this->processAvailability(new AvailabilityResource($avail));

        }
        return $this->successResponse($allAvailability, 200);
    }

    public function booking()
    {
        // Get booking
        // Error handling for mentor not found
        if (!auth()->user()->mentor) {
            return $this->errorResponse('You are not a mentor', 404);
        }

        $data = Booking::where("mentor_id", auth()->user()->mentor->id)->get();
        // Error handling for booking not found
        if (!$data) {
            return $this->errorResponse('No Bookings made!', 404);
        }
        return $this->showAll(BookingResource::collection($data), 200);
    }

    // Get a booking
    public function getBooking($id)
    {
        // Error handling for mentor not found
        if (!auth()->user()->mentor) {
            return $this->errorResponse('You are not a mentor', 404);
        }

        $data = Booking::where("mentor_id", auth()->user()->mentor->id)->where("id", $id)->first();

        return $this->showOne(new BookingResource($data), 200);

    }
    public function store(MentorAvailabilityRequest $request)
    {
        $mentorId = auth()->user()->mentor->id;
        // error handling
        if (!$mentorId) {
            return $this->errorResponse('You are not a mentor', 404);
        }
        $availability = $request->input('availability');


           $data =  MentorAvailability::create([
                'mentor_id' => $mentorId,
                'availability' => $availability,
                'title' => $request->input('title'),
                'meeting_link' => $request->input('meeting_link'),
                'duration' => $request->input('duration'),
                'about' => $request->input('about'),
            ]);


        return response()->json([
            'message' => 'Availability stored successfully',
            'data' => $this->processAvailability(new AvailabilityResource($data))
            ], 201);
    }

    public function update(MentorAvailabilityRequest $request, MentorAvailability $availability)
    {
        $mentorId = auth()->user()->mentor->id;
        $current = $request->input('availability');

        $availability->update([
            'mentor_id' => $mentorId,
            'availability' => $current,
            'title' => $request->input('title'),
            'meeting_link' => $request->input('meeting_link')
        ]);
        $resource = new AvailabilityResource($availability);
        // replace the avialability in the resource with the new availability

        return $this->successResponse($this->processAvailability($resource), 201);
    }

    public function destroy(MentorAvailability $availability)
    {
        $availability->delete();
        return $this->successResponse(null, 204);
    }



}
