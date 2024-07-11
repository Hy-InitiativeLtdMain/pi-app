<?php

namespace App\Http\Controllers\Admin;

use App\Events\Admin\MentorApproval;
use App\Exports\CreatorExport;
use App\Exports\LearnerExport;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Resources\Admin\CourseResource;
use App\Http\Resources\Admin\CreatorsResource;
use App\Http\Resources\Admin\LearnersResource;
use App\Http\Resources\Admin\UserResource;
use App\Http\Resources\Mentor\MentorResource;
use App\Http\Resources\Mentor\AvailabilityResource;
use App\Http\Requests\Mentors\AssessabilityRequest;
use App\Jobs\User\AuthJobManager;
use App\Models\Course;
use App\Models\Mentor;
use App\Models\Transaction;
use App\Models\User;
use App\Models\MentorAvailability;
use App\Services\Media\CloudinaryService;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use App\Traits\ProcessAvailability as TraitsProcessAvailability;


class InstituteController extends Controller
{
    use ApiResponser, TraitsProcessAvailability;

    public function __construct()
    {
        // 'mentorship', 'course', 'analytics', 'transaction'
        $this->middleware('feature:course')->only('courses');
        $this->middleware('feature:mentorship')->only(['mentors', 'updateMentorStatus', 'setMentorAvailability']);
        $this->middleware('feature:transaction')->only('transactions');
    }

    // USERS
    // Get all users based on the institute_slug of the authenticated user
    public function users(Request $request)
    {
        $institute_slug = auth()->user()->institute_slug;
        // dd($institute_slug);
        if ($request->has('search')) {
            $searchTerm = $request->input('search');

            // Search mentors by first name or last name
            $users = User::where('institute_slug', $institute_slug)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('first_name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('last_name', 'like', '%' . $searchTerm . '%');
                })
                ->get();
        } else {
            $users = User::where('institute_slug', $institute_slug)->get();
        }
        return $this->showAll(UserResource::collection($users));
    }

    public function usersExport(){
        $institute_slug = auth()->user()->institute_slug;

        // Fetch all users for the institute
        $users = User::where('institute_slug', $institute_slug)->get(['first_name', 'last_name', 'email', 'phone', 'gender', 'location']);

        // Pass the users to the UsersExport class
        return Excel::download(new UsersExport($users), 'users.xlsx');
    }

    // get recent users
    public function recentUsers()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->orderBy('created_at', 'desc')->take(10)->get();
        return $this->showAll(UserResource::collection($users));
    }

    // Mass users delete
    public function usersDelete(Request $request)
    {
        // Validate the request
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:users,id',
        ]);

        // Retrieve the list of IDs from the request
        $ids = $request->input('ids');

        // Initialize a counter for deleted users
        $deletedCount = 0;

        // Use a transaction to ensure all deletions are successful or none
        DB::transaction(function () use ($ids, &$deletedCount) {
            foreach ($ids as $id) {
                try {
                    // Attempt to find and delete the user
                    $user = User::findOrFail($id);
                    $user->delete();
                    $deletedCount++;
                } catch (ModelNotFoundException $e) {
                    // If user not found, continue to next user
                    continue;
                }
            }
        });

        // Return a success response
        return response()->json([
            'message' => 'Users deleted successfully',
            'deleted_count' => $deletedCount
        ], 200);
    }

    // USERS - Learners
    // learners
    public function learners(Request $request)
    {
        $institute_slug = auth()->user()->institute_slug;

        if ($request->has('search')) {
            $searchTerm = $request->input('search');

            // Search mentors by first name or last name
            $learners = User::where('institute_slug', $institute_slug)
                ->where('is_admin', 0)
                ->where('admin', 0)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('first_name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('last_name', 'like', '%' . $searchTerm . '%');
                })
                ->get();
        } else {
            $learners = User::where('institute_slug', $institute_slug)
                ->where('is_admin', 0)
                ->where('admin', 0)
                ->get();
        }
        return $this->showAll(LearnersResource::collection($learners));
    }


    public function learnersExport()
    {
        $institute_slug = auth()->user()->institute_slug;

        // Fetch all users for the institute
        $users =
        User::where('institute_slug', $institute_slug)
        ->where('is_admin', 0)
        ->where('admin', 0)
        ->get(['first_name', 'last_name', 'email', 'phone', 'gender', 'location']);

        // Pass the users to the UsersExport class
        return Excel::download(new LearnerExport($users), 'learners.xlsx');
    }

    // get recent learners
    public function recentLearners()
    {
        $institute_slug = auth()->user()->institute_slug;
        $learners = User::where('institute_slug', $institute_slug)
            ->where('is_admin', 0)
            ->where('admin', 0)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return $this->showAll(LearnersResource::collection($learners));
    }

    // USERS - Creators
    // creators
    public function creators(Request $request)
    {
        $institute_slug = auth()->user()->institute_slug;

        if ($request->has('search')) {
            $searchTerm = $request->input('search');

            // Search mentors by first name or last name
            $creators = User::where('institute_slug', $institute_slug)
                ->where('is_admin', 1)
                ->where('admin', 0)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('first_name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('last_name', 'like', '%' . $searchTerm . '%');
                })
                ->get();
        } else {
            $creators = User::where('institute_slug', $institute_slug)
                ->where('is_admin', 1)
                ->where('admin', 0)
                ->get();
        }
        return $this->showAll(CreatorsResource::collection($creators));
    }

    public function recentCreators()
    {
        $institute_slug = auth()->user()->institute_slug;
        $creators = User::where('institute_slug', $institute_slug)
            ->where('is_admin', 0)
            ->where('admin', 0)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return $this->showAll(CreatorsResource::collection($creators));
    }

    public function creatorsExport()
    {
        $institute_slug = auth()->user()->institute_slug;

        // Fetch all users for the institute
        $users =
            User::where('institute_slug', $institute_slug)
            ->where('is_admin', 1)
            ->where('admin', 0)
            ->get(['first_name', 'last_name', 'email', 'phone', 'gender', 'location']);

        // Pass the users to the UsersExport class
        return Excel::download(new CreatorExport($users), 'creators.xlsx');
    }


    // get creator by id return no of courses , no of mentees
    public function creatorById($id)
    {
        $institute_slug = auth()->user()->institute_slug;
        $creator = User::where('institute_slug', $institute_slug)->where('id', $id)->first();

        // sum user balance from transactions
        $balance = Transaction::where('user_id', $creator->id)->sum('amount');

        $courses = Course::where('user_id', $id)->get();
        $courseCount = $courses->count();

        if ($creator->mentor) {
            $mentees = $creator->mentor()->first()->getNumberOfMentees('accepted');
        } else {
            $mentees = 0;
        }
        return response()->json([
            'revenue' => $balance,
            'total_courses' => $courseCount,
            'mentees' => $mentees,
        ]);
    }

    // add/create creator
    public function createCreator(Request $request)
    {
        $institute_slug = auth()->user()->institute_slug;
        $validated = $request->validate(RegisterRequest::$_creatorRules);
        $validated['password'] = bcrypt('qwerty12345');
        $validated['institute_slug'] = $institute_slug;
        $validated['is_admin'] = 1;

        $user = User::create($validated);
        $user->verifications()->create([
            'token' => mt_rand(1000, 9999)
        ]);

        if ($request->hasFile('image')) {
            $cloudinary = new CloudinaryService();
            if ($user->image_id != null) {
                $cloudinary->delete($user->image_id);
            }

            $resp = $cloudinary->store($request->file('image'), "user-images");
            $user->image = $resp[0];
            $user->image_id = $resp[1];
        }

        $user->save();

        $emailJob = (new AuthJobManager($user, "new_user_admin", $request->url))->delay(Carbon::now()->addSeconds(5));
        dispatch($emailJob);

        return response()->json([
            'message' => 'Creator created successfully',
            'status' => 'success',
        ]);
    }

    // add/create learner
    public function createLearner(Request $request)
    {
        $institute_slug = auth()->user()->institute_slug;
        $validated = $request->validate(RegisterRequest::$_learnerRules);
        $validated['password'] = bcrypt('qwerty12345');
        $validated['institute_slug'] = $institute_slug;

        $user = User::create($validated);
        $user->verifications()->create([
            'token' => mt_rand(1000, 9999)
        ]);

        if ($request->hasFile('image')) {
            $cloudinary = new CloudinaryService();
            $resp = $cloudinary->store($request->file('image'), "user-images");
            $user->image = $resp[0];
            $user->image_id = $resp[1];
        }

        $user->save();

        $emailJob = (new AuthJobManager($user, "new_user_admin", $request->url))->delay(Carbon::now()->addSeconds(2));
        dispatch($emailJob);

        return response()->json([
            'message' => 'Student/Learner created successfully',
            'status' => 'success',
        ]);
    }



    //  Get all courses based on the institute_slug of the authenticated user
    public function courses(Request $request)
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        // convert the users_id to array
        $users_id = $users->pluck('id')->toArray();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');

            // Search mentors by first name or last name
            $courses = Course::where('institute_slug', $institute_slug)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('title', 'like', '%' . $searchTerm . '%')
                        ->orWhere('description', 'like', '%' . $searchTerm . '%');
                })
                ->paginate();
        } else {
            $courses = Course::where('institute_slug', $institute_slug)->paginate();
        }
        // count the courses
        $count = $courses->count();
        return response()->json(['courses' => CourseResource::collection($courses), 'count' => $count]);
    }



    // Get all transactions based on the institute_slug of the authenticated user
    public function transactions()
    {
        $institute_slug = auth()->user()->institute_slug;
        // Get users with the same institute_slug
        $users = User::where('institute_slug', $institute_slug)->get();
        // convert the users_id to array
        $users_id = $users->pluck('id')->toArray();
        $transactions = Transaction::whereIn('user_id', $users_id)->get();
        // count the transactions
        $count = $transactions->count();
        return response()->json(['transactions' => $transactions, 'count' => $count]);
    }

    public function mentors()
    {
        $institute_slug = auth()->user()->institute_slug;
        // Get users with the same institute_slug
        $users = User::where('institute_slug', $institute_slug)->get();
        // convert the users_id to array
        $users_id = $users->pluck('id')->toArray();
        $mentors = Mentor::whereIn('user_id', $users_id)->get();
        // count the transactions
        $count = $mentors->count();
        return response()->json(['mentors' => $mentors, 'count' => $count]);
    }

    // update mentor's status
    public function updateMentorStatus(Request $request, Mentor $mentor)
    {
        //check if the institute slug of the authenticated user matches the institute slug of the mentor
        if ($mentor->user->institute_slug !== auth()->user()->institute_slug) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $validated = $request->validate([
            'status' => 'required|in:approved,pending,declined'
        ]);
        $mentor->update($validated);
        // send notification to the mentor
        event(new MentorApproval($mentor, auth()->user()->institute_slug));
        return response()->json(['message' => 'Mentor status updated successfully']);
    }


    // set mentor availability by admin
    public function setMentorAvailability(Request $request, Mentor $mentor)
    {
        $mentorId = $mentor->id;
        $availability = $request->input('availability');

           $data =  MentorAvailability::create([
                'mentor_id' => $mentorId,
                'availability' => $availability,
                'title' => $request->input('title'),
                'meeting_link' => $request->input('meeting_link'),
                'duration' => $request->input('duration'),
                'about' => $request->input('about'),
            ]);


        return response()->json([
            'message' => 'Availability stored successfully',
            'data' => $this->processAvailability(new AvailabilityResource($data))
            ], 201);
    }

    // set mentor accessability by admin
    public function setMentorAccessability(Request $request, Mentor $mentor)
    {
        $validate = $request->validate(AssessabilityRequest::$_updateRules);
        //     // check if mentor has experience
        if ($mentor->accessability) {
        //         // update experience
                $mentor->accessability->update($validate);
                $data = [
                    'message' => 'Availability updated successfully.',
                    'data' => new MentorResource($mentor)
                ];
                return $this->successResponse($data, 200);
            } else {
                // create experience
                $mentor->accessability()->create($validate);
                $data = [
                    'message' => 'Availablity added successfully.',
                    'data' => new MentorResource($mentor)
                ];
                return $this->successResponse($data, 200);
            }
    }

    // a function that returns the number of users/courses/transaction_amount
    public function count()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        $users = User::where('institute_slug', $institute_slug)->get();
        // convert the users_id to array
        $users_id = $users->pluck('id')->toArray();
        $courses = Course::whereIn('user_id', $users_id)->get();
        $transactions = Transaction::whereIn('user_id', $users_id)->sum('amount');
        $count = [
            'users' => $users->count(),
            'courses' => $courses->count(),
            'revenue' => $transactions,
        ];
        return response()->json($count);
    }

    // Approve all mentors where status is pending
    public function approveMentors(){
        $mentors = Mentor::where('status', 'pending')->get();
        foreach ($mentors as $mentor) {
            $mentor->status = 'approved';
            $mentor->save();
        }
        return response()->json(['message' => 'All mentors approved successfully']);
    }
}
