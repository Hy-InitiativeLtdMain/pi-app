<?php

namespace App\Http\Controllers\Mentee;

use App\Models\Mentee;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenteeRequest;
use App\Http\Resources\Mentee\MenteeResource;

class MenteeManager extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mentees = Mentee::all();
        return $this->showAll(MenteeResource::collection($mentees), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenteeRequest $request)
    {
        $userId = auth()->user()->id;
        $userEmail = auth()->user()->email;

        $request->merge([
            'user_id' => $userId,
            'email' => $userEmail
        ]);
        $mentee = Mentee::create($request->all());
        return $this->successResponse(new MenteeResource($mentee), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mentee $mentee)
    {
        return $this->successResponse(new MenteeResource($mentee), 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenteeRequest $request, Mentee $mentee)
    {
        $mentee->update($request->validated());
        return $this->successResponse(new MenteeResource($mentee), 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentee $mentee)
    {
        $mentee->delete();
        return $this->successResponse(null, 204);
    }
}
