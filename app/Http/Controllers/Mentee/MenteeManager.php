<?php

namespace App\Http\Controllers\Mentee;

use App\Models\Mentee;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenteeRequest;
use App\Http\Resources\Mentee\MenteeResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\MentorMenteeAssignmentService;

class MenteeManager extends Controller
{
    use ApiResponser;

    private $instituteSlug;

    function __construct(Request $request)
    {
        $this->instituteSlug = $request->institute_slug;
        $this->middleware('feature:mentorship');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!auth()->user()->mentee) {
            return $this->errorResponse('User is not a mentee!', 404);
        }

        $instituteSlug = $this->instituteSlug;
        // dd($instituteSlug);
        $mentees = Mentee::whereHas('user', function ($query) use ($instituteSlug) {
            $query->where('institute_slug', $instituteSlug);
        })->get();
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
    public function showProfile()
    {
        if (!auth()->user()->mentee) {
            return $this->errorResponse('Mentee not found', 404);
        }
        $mentee = Mentee::find(auth()->user()->mentee->id);
        return $this->showOne(new MenteeResource($mentee), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mentee $mentee)
    {
        if (!auth()->user()->mentee) {
            return $this->errorResponse('User is not a mentee!', 404);
        }
        $validated = $request->validate(MenteeRequest::$_updateRules);
        $mentee->update($validated);
        return $this->successResponse(new MenteeResource($mentee), 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentee $mentee)
    {
        if (!auth()->user()->mentee) {
            return $this->errorResponse('User is not a mentee!', 404);
        }
        $mentee->delete();
        return $this->successResponse(null, 204);
    }

    /**
     * Update the mentee profile.
     */
    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        if (!$user->mentee) {
            return $this->errorResponse('Mentee not found', 404);
        }
        $mentee = $user->mentee;
        $validated = $request->validate(\App\Http\Requests\MenteeRequest::$_updateRules);
        $mentee->update($validated);
        // Assign mentor after update
        $assignmentService = app(MentorMenteeAssignmentService::class);
        $assignmentResult = $assignmentService->assignMentorToMentee($mentee->fresh());
        return $this->successResponse([
            'mentee' => new \App\Http\Resources\Mentee\MenteeResource($mentee->fresh()),
            'mentor_assignment' => $assignmentResult
        ], 200);
    }
}
