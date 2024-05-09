<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Resources\Admin\CreatorsResource;
use App\Http\Resources\Admin\LearnersResource;
use App\Http\Resources\Admin\UserResource;
use App\Jobs\User\AuthJobManager;
use App\Models\Course;
use App\Models\Mentor;
use App\Models\Transaction;
use App\Models\User;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    use ApiResponser;


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

    // get recent users
    public function recentUsers()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->orderBy('created_at', 'desc')->take(10)->get();
        return $this->showAll(UserResource::collection($users));
    }

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

    // get creator by id return no of courses , no of mentees
    public function creatorById($id){
        $institute_slug = auth()->user()->institute_slug;
        $creator = User::where('institute_slug', $institute_slug)->where('id', $id)->first();
        $courses = Course::where('user_id', $id)->get();
        $courseCount = $courses->count();
        $mentees = User::where('institute_slug', $institute_slug)->where('creator_id', $id)->get();
        return $this->showOne(new UserResource($creator), ['courses' => $courses, 'mentees' => $mentees]);
    }




    // add/create creator
    public function createCreator(Request $request)
    {
        $institute_slug = auth()->user()->institute_slug;
        $validated =$request->validate(RegisterRequest::$_creatorRules);
        $validated['password'] = bcrypt('qwerty12345');
        $validated['institute_slug'] = $institute_slug;
        $validated['is_admin'] = 1;
        $user = User::create($validated);
        $user->verifications()->create([
            'token' => mt_rand(1000, 9999)
        ]);
        $user->save();

        $emailJob = (new AuthJobManager($user, "new_user_admin"))->delay(Carbon::now()->addSeconds(5));
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
        $validated =$request->validate(RegisterRequest::$_learnerRules);
        $validated['password'] = bcrypt('qwerty12345');
        $validated['institute_slug'] = $institute_slug;

        $user = User::create($validated);
        $user->verifications()->create([
            'token' => mt_rand(1000, 9999)
        ]);
        $user->save();

        $emailJob = (new AuthJobManager($user, "new_user_admin"))->delay(Carbon::now()->addSeconds(2));
        dispatch($emailJob);

        return response()->json([
            'message' => 'Student/Learner created successfully',
            'status' => 'success',
        ]);
    }


    //  Get all courses based on the institute_slug of the authenticated user
    public function courses()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        // convert the users_id to array
        $users_id = $users->pluck('id')->toArray();
        $courses = Course::whereIn('user_id', $users_id)->get();
        // count the courses
        $count = $courses->count();
        return response()->json(['courses' => $courses, 'count' => $count]);
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
            'status' => 'required|in:approved,declined'
        ]);
        $mentor->update($validated);
        return response()->json(['message' => 'Mentor status updated successfully']);
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
}
