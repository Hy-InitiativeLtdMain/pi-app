<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Http\Requests\MentorAvailabilityRequest;
use App\Http\Resources\Mentee\BookingResource;
use App\Http\Resources\Mentor\AvailabilityResource;
use App\Models\Booking;
use App\Models\MentorAvailability;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $mentorId = auth()->user()->mentor->id;
        $availability = MentorAvailability::where('mentor_id', $mentorId)->with('booking')->get();
        return $this->showAll(AvailabilityResource::collection($availability), 200);
    }

    public function booking()
    {
        // Get booking
        $data = Booking::where("mentor_id", auth()->user()->mentor->id)->get();
        return $this->successResponse(BookingResource::collection($data), 200);
    }
    public function store(MentorAvailabilityRequest $request)
    {
        $mentorId = auth()->user()->mentor->id;
        $availability = $request->input('availability');


           $data =  MentorAvailability::create([
                'mentor_id' => $mentorId,
                'availability' => $availability,
                'meeting_link' => $request->input('meeting_link'),
                'duration' => $request->input('duration'),
                'about' => $request->input('about'),
            ]);


        return response()->json([
            'message' => 'Availability stored successfully',
            'data' => new AvailabilityResource($data)
            ], 201);
    }

    public function update(MentorAvailabilityRequest $request, MentorAvailability $availability)
    {
        $mentorId = auth()->user()->mentor->id;
        $current = $request->input('availability');

        $availability->update([
            'mentor_id' => $mentorId,
            'availability' => $current,
            'meeting_link' => $request->input('meeting_link')
        ]);
        return $this->successResponse(new AvailabilityResource($availability), 201);
    }

    public function destroy(MentorAvailability $availability)
    {
        $availability->delete();
        return $this->successResponse(null, 204);
    }
}
