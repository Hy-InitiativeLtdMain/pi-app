<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Http\Requests\MentorRequest;
use App\Http\Requests\Mentors\AssessabilityRequest;
use App\Http\Requests\Mentors\ExperienceRequest;
use App\Http\Requests\Mentors\SkillRequest;
use App\Http\Resources\Mentor\MentorResource;
use App\Models\Mentor;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentorManager extends Controller
{
    use ApiResponser;


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instituteSlug = Auth::user()->institute_slug;

        $mentors = Mentor::whereHas('user', function ($query) use ($instituteSlug) {
            $query->where('institute_slug', $instituteSlug);
        })->with('availability')->get();
        // dd($mentors);
        // $mentors = Mentor::with('availability')->get();
        // dd($mentors);
        return $this->showAll(MentorResource::collection($mentors), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MentorRequest $request)
    {
        // get the user_id from the auth user
        $userId = auth()->user()->id;
        $userEmail = auth()->user()->email;

        $request->merge([
            'user_id' => $userId,
            'email' => $userEmail,
        ]);
        // dd($request->all());

        $mentor = Mentor::create($request->all());
        return $this->successResponse(new MentorResource($mentor), 201);
    }

    /**
     * Display the specified resource.
     */
    public function showProfile()
    {
        if (!auth()->user()->mentor) {
            return $this->errorResponse('Mentor not found', 404);
        }
        $mentor = Mentor::find(auth()->user()->mentor->id);
        return $this->showOne(new MentorResource($mentor), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MentorRequest $request, Mentor $mentor)
    {
        $mentor->update($request->validated());
        return $this->successResponse(new MentorResource($mentor), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentor $mentor)
    {
        $mentor->delete();
        return $this->successResponse('Mentor profile deleted successfully', 204);
    }

    // create/update mentor experience
    public function createExperience(Request $request)
    {

        if (!auth()->user()->mentor) {
            return response()->json('Please fill your mentor details', 404);
        }
        $mentor = auth()->user()->mentor;

        $validate = $request->validate(ExperienceRequest::$_updateRules);
        // check if mentor has experience
        if ($mentor->experience) {
            // update experience
            $mentor->experience->update($validate);

            return $this->successResponse(new MentorResource($mentor), 200);
        } else {
            // create experience
            $mentor->experience()->create($validate);

            return $this->successResponse(new MentorResource($mentor), 200);
        }
    }

    public function createSkills(Request $request)
    {

        if (!auth()->user()->mentor) {
            return response()->json('Please fill your mentor details', 404);
        }
        $mentor = auth()->user()->mentor;

        $validate = $request->validate(SkillRequest::$_updateRule);
        // check if mentor has experience
        if ($mentor->skills) {
            // update experience
            $mentor->skills->update($validate);

            return $this->successResponse(new MentorResource($mentor), 200);
        } else {
            // create experience
            $mentor->skills()->create($validate);

            return $this->successResponse(new MentorResource($mentor), 200);
        }
    }

    public function createAccessability(Request $request)
    {
        if (!auth()->user()->mentor) {
            return response()->json('Please fill your mentor details', 404);
        }
        $mentor = auth()->user()->mentor;

        $validate = $request->validate(AssessabilityRequest::$_updateRules);
        // check if mentor has experience
        if ($mentor->accessability) {
            // update experience
            $mentor->accessability->update($validate);

            return $this->successResponse(new MentorResource($mentor), 200);
        } else {
            // create experience
            $mentor->accessability()->create($validate);

            return $this->successResponse(new MentorResource($mentor), 200);
        }
    }
}
