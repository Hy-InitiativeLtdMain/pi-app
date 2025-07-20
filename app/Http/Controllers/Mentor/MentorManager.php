<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Http\Requests\MentorRequest;
use App\Http\Requests\Mentors\AssessabilityRequest;
use App\Http\Requests\Mentors\ExperienceRequest;
use App\Http\Requests\Mentors\SkillRequest;
use App\Http\Resources\Mentor\MentorResource;
use App\Models\Mentee;
use App\Models\Mentor;
use App\Models\MentorAccessability;
use App\Models\MentorExperience;
use App\Models\MentorMentee;
use App\Models\MentorSkill;
use App\Models\Project;
use App\Services\Media\CloudinaryService;
use App\Services\Media\FirebaseService;
use App\Services\Notification\FirebaseNotificationService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Services\MentorMenteeAssignmentService;

class MentorManager extends Controller
{
    use ApiResponser;
    public function __construct()
    {
        // 'mentorship', 'course', 'analytics', 'transaction'
        $this->middleware('feature:mentorship');
    }


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
    public function store(Request $request)
    {
        $user = auth()->user();

        $userId = $user->id;
        $userEmail = $user->email;

        $firebase = app(FirebaseService::class);

        // Optional: Only if user_uuid exists
        if ($user->user_uuid) {
            if ($request->hasFile('profile')) {
                $url = $firebase->uploadFile($request->file('profile'), 'mentor-images');
                $request->merge(['profile_pic' => $url]);
            }

            if ($request->hasFile('resume')) {
                $url = $firebase->uploadFile($request->file('resume'), 'mentor-resume');
                $request->merge(['resume_link' => $url]);
            }

            if ($request->hasFile('intro')) {
                $url = $firebase->uploadFile($request->file('intro'), 'mentor-intro');
                $request->merge(['video_intro' => $url]);
            }

            $request->merge(['status' => 'approved']);
            $request->merge([
                'institute' => $user->institute_slug ?? null,
                'track' => $user->track ?? null,
            ]);
        }

        // Always attach these
        $request->merge([
            'user_id' => $userId,
            'email'   => $userEmail,
        ]);

        // Check for existing mentor with same email
        $existingMentor = Mentor::where('email', $userEmail)->first();
        if ($existingMentor) {
            return response()->json(['message' => 'Mentor profile already created.'], 409);
        }

        // Create mentor
        $mentor = Mentor::create($request->all());

        // Assign mentees to the mentor using the new function
        $assignmentResult = $this->assignMenteesToMentor($mentor);

        $data = [
            'message' => 'Profile Created Successfully.',
            'data'    => new MentorResource($mentor),
            'mentee_assignment' => $assignmentResult
        ];

        return $this->successResponse($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function showProfile()
    {
        $user = auth()->user();
        if (!$user->mentor) {
            return $this->errorResponse('Mentor data not found', 404);
        }
        if ($user->user_uuid) {
            $user->mentor->status = 'approved';
            $user->mentor->save();
        }
        if ($user->mentor->status == 'pending') {
            return $this->errorResponse('Your account is pending', 404);
        } else if ($user->mentor->status == 'declined') {
            return $this->errorResponse('Your account is rejected', 404);
        }

        return $this->showOne(new MentorResource($user->mentor), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mentor $mentor)
    {
        if (!$mentor) {
            return $this->errorResponse('You are not a mentor', 404);
        }

        if ($mentor->user_id !== auth()->id()) {
            return $this->errorResponse('Unauthorized access', 403);
        }

        if ($mentor->status === 'pending') {
            return $this->errorResponse('Your account is pending approval', 403);
        }

        if ($mentor->status === 'declined') {
            return $this->errorResponse('Your account has been rejected', 403);
        }

        $firebase = app(FirebaseService::class);
        $user = auth()->user();

        // Handle file uploads if user has UUID
        if ($user->user_uuid) {
            if ($request->hasFile('profile')) {
                $url = $firebase->uploadFile($request->file('profile'), 'mentor-images');
                $request->merge(['profile_pic' => $url]);
            }

            if ($request->hasFile('resume')) {
                $url = $firebase->uploadFile($request->file('resume'), 'mentor-resume');
                $request->merge(['resume_link' => $url]);
            }

            if ($request->hasFile('intro')) {
                $url = $firebase->uploadFile($request->file('intro'), 'mentor-intro');
                $request->merge(['video_intro' => $url]);
            }
        }

        try {
            $mentor->update($request->all());
            // Assign mentees after update
            $assignmentService = app(MentorMenteeAssignmentService::class);
            $assignmentResult = $assignmentService->assignMenteesToMentor($mentor->fresh());
            return $this->successResponse([
                'mentor' => new MentorResource($mentor->fresh()),
                'mentee_assignment' => $assignmentResult
            ], 200);
        } catch (\Exception $e) {
            return $this->errorResponse('Error updating mentor profile: ' . $e->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentor $mentor)
    {
        if (!auth()->user()->mentor->id) {
            return $this->errorResponse('You are not a mentor', 404);
        }
        if (auth()->user()->mentor->status == 'pending') {
            return $this->errorResponse('Your account is pending', 404);
        } else if (auth()->user()->mentor->status == 'declined') {
            return $this->errorResponse('Your account is rejected', 404);
        }
        $mentor->delete();
        return $this->successResponse('Mentor profile deleted successfully', 204);
    }

    /**
     * Check if a mentor can accept more mentees
     * @param Mentor $mentor
     * @return array
     */
    public function checkMentorCapacity(Mentor $mentor)
    {
        $currentMenteeCount = MentorMentee::where('mentor_id', $mentor->id)->count();
        $maxMentees = 10;
        
        return [
            'mentor_id' => $mentor->id,
            'current_mentees' => $currentMenteeCount,
            'max_mentees' => $maxMentees,
            'remaining_slots' => max(0, $maxMentees - $currentMenteeCount),
            'can_accept_more' => $currentMenteeCount < $maxMentees,
            'is_full' => $currentMenteeCount >= $maxMentees
        ];
    }

    /**
     * Manually assign mentees to a mentor (for admin use)
     * @param Request $request
     * @param Mentor $mentor
     * @return \Illuminate\Http\JsonResponse
     */
    public function manuallyAssignMentees(Request $request, Mentor $mentor)
    {
        // Check if mentor is from 3mtt institute
        if ($mentor->institute !== '3mtt') {
            return $this->errorResponse('This assignment system is only for 3mtt institute mentors', 400);
        }

        // Check if mentor can accept more mentees
        $capacityCheck = $this->checkMentorCapacity($mentor);

        if (!$capacityCheck['can_accept_more']) {
            return $this->errorResponse('Mentor cannot accept more mentees. Current count: ' . $capacityCheck['current_mentees'], 400);
        }

        // Check if mentee_id is provided in the request
        $menteeId = $request->input('mentee_id');
        if (!$menteeId) {
            return $this->errorResponse('No mentee_id provided for manual assignment.', 400);
        }

        // Check if the mentee exists
        $mentee = \App\Models\Mentee::find($menteeId);
        if (!$mentee) {
            return $this->errorResponse('Mentee not found.', 404);
        }

        // Check if the mentee has already been assigned to any mentor
        $alreadyAssigned = \App\Models\MentorMentee::where('mentee_id', $menteeId)->exists();
        if ($alreadyAssigned) {
            return $this->errorResponse('This mentee has already been assigned to a mentor.', 400);
        }

        // Assign the mentee to the mentor
        try {
            \App\Models\MentorMentee::create([
                'mentor_id' => $mentor->id,
                'mentee_id' => $menteeId,
            ]);
        } catch (\Exception $e) {
            return $this->errorResponse('Failed to assign mentee: ' . $e->getMessage(), 500);
        }

        // Recalculate mentor capacity after assignment
        $finalMenteeCount = \App\Models\MentorMentee::where('mentor_id', $mentor->id)->count();
        $maxMentees = 10;

        return $this->successResponse([
            'message' => "Mentee assigned successfully.",
            'data' => [
                'mentor_id' => $mentor->id,
                'mentee_id' => $menteeId,
                'total_mentees' => $finalMenteeCount,
                'remaining_slots' => max(0, $maxMentees - $finalMenteeCount)
            ]
        ], 200);
    }

    /**
     * Get mentors that need mentee assignments (for automated tasks)
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMentorsNeedingAssignments()
    {
        // All approved 3mtt mentors with a track
        $mentorsWithTrack = Mentor::where('status', 'approved')
            ->whereNotNull('track')
            ->where('institute', '3mtt')
            ->get();

        // All approved 3mtt mentors without a track
        $mentorsWithoutTrack = Mentor::where('status', 'approved')
            ->whereNull('track')
            ->where('institute', '3mtt')
            ->get();

        // All approved 3mtt mentors (regardless of track)
        $all3mttMentors = Mentor::where('status', 'approved')
            ->where('institute', '3mtt')
            ->get();

        $mentorsNeedingAssignments = [];

        foreach ($mentorsWithTrack as $mentor) {
            $capacityCheck = $this->checkMentorCapacity($mentor);

            if ($capacityCheck['can_accept_more']) {
                $mentorsNeedingAssignments[] = [
                    'mentor' => new MentorResource($mentor),
                    'capacity' => $capacityCheck
                ];
            }
        }

        return $this->successResponse([
            'mentors_needing_assignments' => $mentorsNeedingAssignments,
            'total_mentors_needing_assignments' => count($mentorsNeedingAssignments),
            'total_3mtt_mentors_with_track' => $mentorsWithTrack->count(),
            'total_3mtt_mentors_without_track' => $mentorsWithoutTrack->count(),
            'total_3mtt_mentors' => $all3mttMentors->count(),
        ], 200);
    }

    /**
     * Run automated mentee assignment for all eligible mentors
     * @return \Illuminate\Http\JsonResponse
     */
    public function runAutomatedMenteeAssignment()
    {
        $mentors = Mentor::where('status', 'approved')
            ->whereNotNull('track')
            ->where('institute', '3mtt') // Only target 3mtt mentors
            ->get();
        
        $results = [];
        $totalAssigned = 0;
        $assignmentService = app(\App\Services\MentorMenteeAssignmentService::class);
        
        foreach ($mentors as $mentor) {
            $capacityCheck = $this->checkMentorCapacity($mentor);
            
            if ($capacityCheck['can_accept_more']) {
                $assignmentResult = $assignmentService->assignMenteesToMentor($mentor);
                $totalAssigned += $assignmentResult['assigned'];
                
                $results[] = [
                    'mentor_id' => $mentor->id,
                    'mentor_name' => $mentor->firstname . ' ' . $mentor->lastname,
                    'assignment_result' => $assignmentResult
                ];
            }
        }
        
        return $this->successResponse([
            'message' => "Automated mentee assignment completed for 3mtt institute. Total new assignments: {$totalAssigned}",
            'total_new_assignments' => $totalAssigned,
            'results' => $results
        ], 200);
    }

    // create/update mentor experience
    public function createExperience(Request $request)
    {
        // Check if the user is a mentor
        if (!auth()->user()->mentor) {
            return response()->json('Please fill your mentor details', 404);
        }

        // Check the mentor's status
        $mentorStatus = auth()->user()->mentor->status;
        if ($mentorStatus == 'pending') {
            return $this->errorResponse('Your account is pending', 404);
        } elseif ($mentorStatus == 'declined') {
            return $this->errorResponse('Your account is rejected', 404);
        }

        $mentor = auth()->user()->mentor;
        $experiencesData = $request->validate([
            '*.id' => 'nullable|integer',
            '*.employment_type' => 'string|nullable',
            '*.company_name' => 'string|nullable',
            '*.job_title' => 'string|nullable',
            '*.location' => 'string|nullable',
            '*.location_type' => 'string|nullable',
            '*.current_job' => 'boolean|nullable',
            '*.start_date' => 'string|nullable',
            '*.end_date' => 'string|nullable',
        ]);

        // Loop through each experience data
        foreach ($experiencesData as $experienceDatum) {
            if (isset($experienceDatum['id'])) {
                // If an ID is provided, update the existing experience
                $existingExperience = MentorExperience::findOrFail($experienceDatum['id']);
                $existingExperience->update($experienceDatum);
            } else {
                // If no ID is provided, create a new experience
                $experience = new MentorExperience($experienceDatum);
                $mentor->experience()->save($experience);
            }
        }
        $data = [
            'message' => "Experience successfully created/updated",
            'data' => new MentorResource($mentor)
        ];

        return $this->successResponse($data, 200);
    }


    public function createSkills(Request $request)
    {
        $mentor = auth()->user()->mentor;

        if (!$mentor) {
            return $this->errorResponse('Please complete your mentor profile first', 404);
        }

        if ($mentor->status === 'pending') {
            return $this->errorResponse('Your account is pending approval', 403);
        }

        if ($mentor->status === 'declined') {
            return $this->errorResponse('Your account has been rejected', 403);
        }

        $validated = $request->validate([
            'skills' => 'required|json'
        ]);

        $skillsData = json_decode($validated['skills'], true, 512, JSON_THROW_ON_ERROR);

        MentorSkill::updateOrCreate(
            ['mentor_id' => $mentor->id],
            ['skills' => $skillsData]
        );

        return $this->showOne(new MentorResource($mentor->fresh()->load('skills')), 200);
    }

    public function getProjectsWithCategories()
    {
        $projects = Project::with('category')->get();
        return $this->successResponse([
            'data' => $projects
        ], 200);
    }

    public function createAccessability(Request $request)
    {
        $mentor = auth()->user()->mentor;

        if (!$mentor) {
            return $this->errorResponse('Please complete your mentor profile first', 404);
        }

        if ($mentor->status === 'pending') {
            return $this->errorResponse('Your account is pending approval', 403);
        }

        if ($mentor->status === 'declined') {
            return $this->errorResponse('Your account has been rejected', 403);
        }

        $validated = $request->validate(AssessabilityRequest::$_updateRules);

        MentorAccessability::updateOrCreate(
            ['mentor_id' => $mentor->id],
            $validated
        );

        return $this->showOne(
            new MentorResource($mentor->fresh()->load('accessability')),
            200
        );
    }

    /**
     * Create an appointment (session) for the mentor with selected mentees.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createAppointment(Request $request)
    {
        $mentor = auth()->user()->mentor;
        if (!$mentor) {
            return $this->errorResponse('Mentor profile not found', 404);
        }
        if ($mentor->status !== 'approved') {
            return $this->errorResponse('Mentor account not approved', 403);
        }

        $validated = $request->validate([
            'title' => 'required|string',
            'meeting_type' => 'nullable|string',
            'meeting_link' => 'nullable|string',
            'description' => 'nullable|string',
            'scheduled_at' => 'required|date',
            'mentee_ids' => 'nullable|array',
            'mentee_ids.*' => 'integer|exists:mentees,id',
            'total_time' => 'nullable|integer', // in minutes
            'scheduled_end' => 'nullable|date',
        ]);

        // Determine total_time (in minutes)
        $totalTime = $validated['total_time'] ?? 120; // default 2 hours
        $scheduledAt = $validated['scheduled_at'];
        $scheduledEnd = $validated['scheduled_end'] ?? (new \Carbon\Carbon($scheduledAt))->addMinutes($totalTime);

        // Get all mentees assigned to this mentor if mentee_ids not provided
        $menteeIds = $validated['mentee_ids'] ?? MentorMentee::where('mentor_id', $mentor->id)->pluck('mentee_id')->toArray();
        if (empty($menteeIds)) {
            return $this->errorResponse('No mentees assigned to this mentor', 400);
        }

        $appointment = $mentor->appointments()->create([
            'title' => $validated['title'],
            'meeting_type' => $validated['meeting_type'] ?? null,
            'meeting_link' => $validated['meeting_link'] ?? null,
            'description' => $validated['description'] ?? null,
            'scheduled_at' => $scheduledAt,
            'scheduled_end' => $scheduledEnd,
            'total_time' => $totalTime,
        ]);
        $appointment->mentees()->sync($menteeIds);

        return $this->successResponse([
            'message' => 'Appointment created successfully',
            'appointment' => $appointment->load('mentees'),
        ], 201);
    }

    /**
     * Get all appointments for the authenticated mentor.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAppointments()
    {
        $mentor = auth()->user()->mentor;
        if (!$mentor) {
            return $this->errorResponse('Mentor profile not found', 404);
        }
        if ($mentor->status !== 'approved') {
            return $this->errorResponse('Mentor account not approved', 403);
        }

        $appointments = $mentor->appointments()->with('mentees')->orderByDesc('scheduled_at')->get();

        return $this->successResponse([
            'appointments' => $appointments
        ], 200);
    }

    /**
     * Get a specific appointment for the authenticated mentor.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAppointment($id)
    {
        $mentor = auth()->user()->mentor;
        if (!$mentor) {
            return $this->errorResponse('Mentor profile not found', 404);
        }
        if ($mentor->status !== 'approved') {
            return $this->errorResponse('Mentor account not approved', 403);
        }

        $appointment = $mentor->appointments()->with('mentees')->find($id);
        if (!$appointment) {
            return $this->errorResponse('Appointment not found', 404);
        }

        return $this->successResponse([
            'appointment' => $appointment
        ], 200);
    }

    /**
     * Update a specific appointment for the authenticated mentor.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateAppointment(Request $request, $id)
    {
        $mentor = auth()->user()->mentor;
        if (!$mentor) {
            return $this->errorResponse('Mentor profile not found', 404);
        }
        if ($mentor->status !== 'approved') {
            return $this->errorResponse('Mentor account not approved', 403);
        }

        $appointment = $mentor->appointments()->find($id);
        if (!$appointment) {
            return $this->errorResponse('Appointment not found', 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|required|string',
            'meeting_type' => 'nullable|string',
            'meeting_link' => 'nullable|string',
            'description' => 'nullable|string',
            'scheduled_at' => 'nullable|date',
            'mentee_ids' => 'nullable|array',
            'mentee_ids.*' => 'integer|exists:mentees,id',
            'total_time' => 'nullable|integer', // in minutes
            'scheduled_end' => 'nullable|date',
        ]);

        $updateData = [
            'title' => $validated['title'] ?? $appointment->title,
            'meeting_type' => $validated['meeting_type'] ?? $appointment->meeting_type,
            'meeting_link' => $validated['meeting_link'] ?? $appointment->meeting_link,
            'description' => $validated['description'] ?? $appointment->description,
            'scheduled_at' => $validated['scheduled_at'] ?? $appointment->scheduled_at,
        ];

        // Handle total_time and scheduled_end
        $totalTime = $validated['total_time'] ?? $appointment->total_time ?? 120;
        $scheduledAt = $validated['scheduled_at'] ?? $appointment->scheduled_at;
        $scheduledEnd = $validated['scheduled_end'] ?? (new \Carbon\Carbon($scheduledAt))->addMinutes($totalTime);
        $updateData['total_time'] = $totalTime;
        $updateData['scheduled_end'] = $scheduledEnd;

        $appointment->update($updateData);

        if (isset($validated['mentee_ids'])) {
            $appointment->mentees()->sync($validated['mentee_ids']);
        }

        return $this->successResponse([
            'message' => 'Appointment updated successfully',
            'appointment' => $appointment->load('mentees'),
        ], 200);
    }

    /**
     * Delete a specific appointment for the authenticated mentor.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAppointment($id)
    {
        $mentor = auth()->user()->mentor;
        if (!$mentor) {
            return $this->errorResponse('Mentor profile not found', 404);
        }
        if ($mentor->status !== 'approved') {
            return $this->errorResponse('Mentor account not approved', 403);
        }

        $appointment = $mentor->appointments()->find($id);
        if (!$appointment) {
            return $this->errorResponse('Appointment not found', 404);
        }

        $appointment->mentees()->detach();
        $appointment->delete();

        return $this->successResponse([
            'message' => 'Appointment deleted successfully.'
        ], 200);
    }

    /**
     * Get all mentees assigned to the authenticated 3mtt mentor
     */
    public function getAssignedMentees()
    {
        $user = auth()->user();
        $mentor = $user->mentor;
        if (!$mentor || $mentor->institute !== '3mtt') {
            return $this->errorResponse('Only 3mtt mentors can access this resource', 403);
        }
        $assignedMenteeIds = \App\Models\MentorMentee::where('mentor_id', $mentor->id)->pluck('mentee_id');
        $mentees = \App\Models\Mentee::whereIn('id', $assignedMenteeIds)->get();
        return $this->showAll(\App\Http\Resources\Mentee\MenteeResource::collection($mentees), 200);
    }
}
