<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Http\Requests\MentorAvailabilityRequest;
use App\Models\MentorAvailability;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    use ApiResponser;
    public function store(MentorAvailabilityRequest $request)
    {
        $mentorId = auth()->user()->mentor->id;
        $availability = $request->input('availability');


            MentorAvailability::create([
                'mentor_id' => $mentorId,
                'availability' => json_encode($availability)
            ]);


        return response()->json(['message' => 'Availability stored successfully'], 201);
    }

    public function update(MentorAvailabilityRequest $request, MentorAvailability $availability)
    {
        $mentorId = auth()->user()->mentor->id;
        $availability = $request->input('availability');

        $availability->update([
            'mentor_id' => $mentorId,
            'availability' => json_encode($availability)
        ]);
        return $this->successResponse($availability, 201);
    }

    public function destroy(MentorAvailability $availability)
    {
        $availability->delete();
        return $this->successResponse(null, 204);
    }
}
