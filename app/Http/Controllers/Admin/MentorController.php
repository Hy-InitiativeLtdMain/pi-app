<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    // get mentor list
    public function getMentors()
    {
        $users = $this->users()->where('is_admin', 1)->where('admin', 0);
        $user_ids = $users->pluck('id')->toArray();
        $mentors = Mentor::whereIn('user_id', $user_ids)->get();
        return response()->json($mentors);
    }

    public function getMentorSearch(Request $request)
    {
        // Start with querying the mentors table
        $users = User::where('is_admin', 1)->where('admin', 0)->where('institute_slug', auth()->user()->institute_slug);
        $userIds = $users->pluck('id')->toArray();

        // If a search query is provided, filter mentors by name
        if ($request->has('search')) {
            $searchTerm = $request->input('search');

            // Search mentors by first name or last name
            $filteredMentors = Mentor::whereIn('user_id', $userIds)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('firstname', 'like', '%' . $searchTerm . '%')
                        ->orWhere('lastname', 'like', '%' . $searchTerm . '%');
                })
                ->get();
        } else {
            // Retrieve all mentors
            $filteredMentors = Mentor::whereIn('user_id', $userIds)->get();
        }

        return response()->json($filteredMentors);
    }

    // get mentors that are pending
    public function getPendingMentors()
    {
        $users = $this->users()->where('is_admin', 1)->where('admin', 0);
        $user_ids = $users->pluck('id')->toArray();
        $mentors = Mentor::whereIn('user_id', $user_ids)->where('status', 'pending')->get();
        return response()->json($mentors);
    }

    // get specific mentor
    public function getMentor($id)
    {
        $mentor = Mentor::findOrFail($id);
        return response()->json($mentor);
    }



    private function users()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        return $users;
    }
}
