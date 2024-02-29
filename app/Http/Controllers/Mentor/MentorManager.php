<?php

namespace App\Http\Controllers\Mentor;

use App\Models\Mentor;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use App\Http\Requests\MentorRequest;
use App\Http\Resources\Mentor\MentorResource;

class MentorManager extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mentors = Mentor::all();
        return $this->showAll(MentorResource::collection($mentors), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MentorRequest $request)
    {
        $mentor = Mentor::create($request->validated());
        return $this->successResponse(new MentorResource($mentor), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mentor $mentor)
    {
        return $this->successResponse(new MentorResource($mentor), 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MentorRequest $request, Mentor $mentor)
    {
        $mentor->update($request->validated());
        return $this->successResponse(new MentorResource($mentor), 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentor $mentor)
    {
        $mentor->delete();
        return $this->successResponse(null, 204);
    }
}
