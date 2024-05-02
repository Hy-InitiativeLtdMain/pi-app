<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Mentor;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    // Get all users based on the institute_slug of the authenticated user
    public function users()
    {
        $institute_slug = auth()->user()->institute_slug;
        // dd($institute_slug);
        $users = User::where('institute_slug', $institute_slug)->get();
        // count the users
        $count = $users->count();
        return response()->json(['users' => $users, 'count' => $count]);
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
}
