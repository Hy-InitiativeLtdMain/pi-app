<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Http\Requests\MentorRequest;
use App\Http\Requests\Mentors\AssessabilityRequest;
use App\Http\Requests\Mentors\ExperienceRequest;
use App\Http\Requests\Mentors\SkillRequest;
use App\Http\Resources\Mentor\MentorResource;
use App\Models\Mentor;
use App\Models\MentorAccessability;
use App\Models\MentorExperience;
use App\Models\MentorSkill;
use App\Services\Media\CloudinaryService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // get the user_id from the auth user
        $userId = auth()->user()->id;
        $userEmail = auth()->user()->email;

        // Add user_uuid and status if available
        if (auth()->user()->user_uuid) {
            if ($request->hasFile('profile')) {
                $cloudinary = new CloudinaryService();
                $profilePic = $request->file('profile');

                $resp = $cloudinary->store($profilePic, "mentor-images");
                $request->merge([
                    'profile_pic' => $resp[0],
                ]);
            }

            if ($request->hasFile('resume')) {
                $cloudinary = new CloudinaryService();
                $resume = $request->file('resume');
                $resp = $cloudinary->store($resume, "mentor-resume");
                $request->merge([
                    'resume_link' => $resp[0]
                ]);
            }

            // dd($request->all());
            $request->merge([
                'status' => 'approved'
            ]);
        }
        $request->merge([
            'user_id' => $userId,
            'email' => $userEmail,
        ]);


        $existingMentor = Mentor::where('email', $userEmail)->first();
        if ($existingMentor) {
            // Handle the case where another user already has this email
            return response()->json(['message' => 'Mentor profile already created.'], 409); // 409 Conflict
        } else {
            // dd($request->all());

            $mentor = Mentor::create($request->all());
            $data = [
                'message' => 'Profile Created Successfully.',
                'data' => new MentorResource($mentor)
            ];
            return $this->successResponse($data, 201);
        }


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

        if ($mentor->status === 'pending') {
            return $this->errorResponse('Your account is pending approval', 403);
        }

        if ($mentor->status === 'declined') {
            return $this->errorResponse('Your account has been rejected', 403);
        }

        // Only handle file uploads if user has UUID (matching store() logic)
        if (auth()->user()->user_uuid) {
            // Handle profile picture upload
            if ($request->hasFile('profile')) {
                $cloudinary = new CloudinaryService();
                $profilePic = $request->file('profile');
                $resp = $cloudinary->store($profilePic, "mentor-images");
                $request->merge(['profile_pic' => $resp[0]]);
            }

            // Handle resume upload
            if ($request->hasFile('resume')) {
                $cloudinary = new CloudinaryService();
                $resume = $request->file('resume');
                $resp = $cloudinary->store($resume, "mentor-resume");
                $request->merge(['resume_link' => $resp[0]]);
            }
        }

        $mentor->update($request->all());

        return $this->showOne(new MentorResource($mentor->fresh()), 200);
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
}
