<?php

namespace App\Http\Controllers\Mentee;

use App\Models\Mentee;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenteeRequest;
use App\Http\Resources\Mentee\MenteeResource;
use App\Models\MentorMentee;
use App\Models\AppointmentMentee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    /**
     * Get fellow mentees under the same mentor as the authenticated mentee
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFellowMentees()
    {
        $user = auth()->user();
        $mentee = $user->mentee;
        
        if (!$mentee) {
            return $this->errorResponse('Mentee profile not found', 404);
        }

        // Find the mentor assigned to this mentee
        $mentorMenteeRelation = MentorMentee::where('mentee_id', $mentee->id)->first();
        
        if (!$mentorMenteeRelation) {
            return $this->successResponse([
                'message' => 'No mentor assigned yet, so no fellow mentees to show',
                'data' => [
                    'fellow_mentees' => [],
                    'count' => 0,
                    'mentor_info' => null
                ]
            ], 200);
        }

        $mentorId = $mentorMenteeRelation->mentor_id;

        // Get all mentees under the same mentor, excluding the current mentee
        $fellowMenteeIds = MentorMentee::where('mentor_id', $mentorId)
            ->where('mentee_id', '!=', $mentee->id)
            ->pluck('mentee_id');

        $fellowMentees = Mentee::whereIn('id', $fellowMenteeIds)
            ->with('user')
            ->get();

        // Get team lead information
        $teamLeadRelation = MentorMentee::where('mentor_id', $mentorId)
            ->where('team_lead', true)
            ->with('mentee')
            ->first();

        // Get mentor information
        $mentor = \App\Models\Mentor::find($mentorId);

        // Add team lead flag to fellow mentees
        $fellowMenteesWithTeamLead = $fellowMentees->map(function ($fellowMentee) use ($teamLeadRelation) {
            $menteeResource = new MenteeResource($fellowMentee);
            $menteeData = $menteeResource->toArray(request());
            $menteeData['is_team_lead'] = $teamLeadRelation && $teamLeadRelation->mentee_id == $fellowMentee->id;
            return $menteeData;
        });

        return $this->successResponse([
            'message' => 'Fellow mentees retrieved successfully',
            'data' => [
                'fellow_mentees' => $fellowMenteesWithTeamLead,
                'count' => $fellowMentees->count(),
                'mentor_info' => $mentor ? [
                    'id' => $mentor->id,
                    'name' => trim($mentor->firstname . ' ' . $mentor->lastname),
                    'email' => $mentor->email,
                    'company' => $mentor->company,
                    'track' => $mentor->track,
                    'profile_picture' => $mentor->user->image,
                ] : null,
                'team_lead_info' => $teamLeadRelation ? [
                    'mentee_id' => $teamLeadRelation->mentee_id,
                    'mentee_name' => $teamLeadRelation->mentee ? trim($teamLeadRelation->mentee->name ?? '') : 'Unknown',
                    'is_current_user' => $teamLeadRelation->mentee_id == $mentee->id
                ] : null
            ]
        ], 200);
    }

    /**
     * Get the current mentee's mentor information
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMyMentor()
    {
        $user = auth()->user();
        $mentee = $user->mentee;
        
        if (!$mentee) {
            return $this->errorResponse('Mentee profile not found', 404);
        }

        // Find the mentor assigned to this mentee
        $mentorMenteeRelation = MentorMentee::where('mentee_id', $mentee->id)
            ->with(['mentor'])
            ->first();
        
        if (!$mentorMenteeRelation || !$mentorMenteeRelation->mentor) {
            return $this->successResponse([
                'message' => 'No mentor assigned yet',
                'data' => null
            ], 200);
        }

        $mentor = $mentorMenteeRelation->mentor;
        
        return $this->successResponse([
            'message' => 'Mentor information retrieved successfully',
            'data' => [
                'mentor' => new \App\Http\Resources\Mentor\MentorResource($mentor),
                'assigned_at' => $mentorMenteeRelation->created_at,
                'is_team_lead' => $mentorMenteeRelation->team_lead
            ]
        ], 200);
    }

    /**
     * Get the count of completed sessions for authenticated mentee.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCompletedSessionsCount()
    {
        $user = auth()->user();
        $menteeId = $user->mentee->id;

        $count = AppointmentMentee::where('mentee_id', $menteeId)
            ->whereHas('appointment', function($query) {
                $query->where('end_time', '<', now())
                      ->orWhere(function($query) {
                          $query->whereNull('end_time')
                                ->where('start_time', '<', now());
                      });
            })
            ->count();

        return $this->successResponse(['completed_sessions_count' => $count], 200);
    }

    /**
     * Get all appointments for the authenticated mentee
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMyAppointments()
    {
        $user = auth()->user();
        $mentee = $user->mentee;
        if (!$mentee) {
            return $this->errorResponse('Mentee profile not found', 404);
        }
        $appointments = \App\Models\AppointmentMentee::where('mentee_id', $mentee->id)
            ->with('appointment')
            ->get()
            ->pluck('appointment')
            ->filter(); // Remove nulls if any
        return $this->successResponse([
            'appointments' => $appointments
        ], 200);
    }

    /**
     * Get all appointments created by fellow mentees under the same mentor (fellows_call)
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMenteeCreatedAppointments()
    {
        $user = auth()->user();
        $mentee = $user->mentee;
        if (!$mentee) {
            return $this->errorResponse('Mentee profile not found', 404);
        }

        // Find the mentor assigned to this mentee
        $mentorMenteeRelation = MentorMentee::where('mentee_id', $mentee->id)->first();
        
        if (!$mentorMenteeRelation) {
            return $this->successResponse([
                'message' => 'No mentor assigned yet, so no fellow appointments to show',
                'appointments' => []
            ], 200);
        }

        $mentorId = $mentorMenteeRelation->mentor_id;

        // Get all mentee IDs under the same mentor (including current mentee)
        $fellowMenteeIds = MentorMentee::where('mentor_id', $mentorId)
            ->pluck('mentee_id');

        // Get all appointments created by any fellow mentee (fellows_call)
        $appointments = \App\Models\Appointment::whereIn('mentee_id', $fellowMenteeIds)
            ->where('meeting_type', 'fellows_call')
            ->with(['mentee.user']) // Include mentee and user info to show who created each appointment
            ->orderByDesc('scheduled_at')
            ->get();

        // Add creator information to each appointment
        $appointmentsWithCreator = $appointments->map(function ($appointment) {
            $appointmentData = $appointment->toArray();
            $appointmentData['created_by'] = [
                'mentee_id' => $appointment->mentee_id,
                'name' => $appointment->mentee && $appointment->mentee->user ? 
                    trim($appointment->mentee->user->firstname . ' ' . $appointment->mentee->user->lastname) : 'Unknown',
                'email' => $appointment->mentee && $appointment->mentee->user ? 
                    $appointment->mentee->user->email : null
            ];
            return $appointmentData;
        });

        return $this->successResponse([
            'appointments' => $appointmentsWithCreator
        ], 200);
    }
}
