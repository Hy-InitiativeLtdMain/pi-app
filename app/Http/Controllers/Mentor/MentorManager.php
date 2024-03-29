<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Http\Requests\MentorRequest;
use App\Http\Resources\Mentor\MentorResource;
use App\Models\Mentor;
use App\Traits\ApiResponser;

class MentorManager extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mentors = Mentor::with('availability')->get();
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
}
