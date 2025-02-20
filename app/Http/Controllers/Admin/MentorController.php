<?php

namespace App\Http\Controllers\Admin;

use App\Exports\MentorExport;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\MentorsResource;
use App\Http\Resources\Mentor\MentorResource;
use App\Models\Booking;
use App\Models\Mentor;
use App\Models\MentorAvailability;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;

class MentorController extends Controller
{
    use ApiResponser;

    public function __construct()
    {
        // 'mentorship', 'course', 'analytics', 'transaction'
        $this->middleware('feature:course')->only('courses');
        $this->middleware('feature:mentorship');
        $this->middleware('feature:transaction')->only('transactions');
    }
    // get mentor list
    public function getMentors()
    {
        $users = $this->users()->where('admin', 0);
        $user_ids = $users->pluck('id')->toArray();
        $mentors = Mentor::whereIn('user_id', $user_ids)->get();
        return $this->showAll(MentorsResource::collection($mentors));
    }



    public function mentorsExport()
    {
        $users = $this->users()->where('admin', 0);
        $user_ids = $users->pluck('id')->toArray();
        $mentors = Mentor::whereIn('user_id', $user_ids)->get(['firstname', 'lastname', 'email', 'phone', 'company', 'job_title','bio', 'status']);

        // Pass the users to the UsersExport class
        return Excel::download(new MentorExport($mentors), 'mentors.xlsx');
    }

    public function getMentorSearch(Request $request)
    {
        // Start with querying the mentors table
        $users = User::where('admin', 0)->where('institute_slug', auth()->user()->institute_slug);
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

        return $this->showAll(MentorsResource::collection($filteredMentors));
    }

    // get mentors that are pending
    public function getPendingMentors()
    {
        $users = $this->users()->where('admin', 0);
        $user_ids = $users->pluck('id')->toArray();
        $mentors = Mentor::whereIn('user_id', $user_ids)->where('status', 'pending')->get();
        return response()->json($mentors);
    }

    // get specific mentor
    public function getMentor($id)
    {
        $mentor = Mentor::findOrFail($id);
        $noOfMentees = $mentor->getNumberOfMentees('approved');
        return response()->json(['number_of_mentees' => $noOfMentees,$mentor]);
    }



    private function users()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        return $users;
    }

    public function deleteMentors(Request $request)
    {
        // Validate the request
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:mentors,id',
        ]);

        // Retrieve the list of IDs from the request
        $ids = $request->input('ids');

        MentorAvailability::whereIn('mentor_id', $ids)->delete();
        // Delete related bookings
        Booking::whereIn('mentor_id', $ids)->delete();

        // Delete the mentors with the given IDs
        $deleted = Mentor::whereIn('id', $ids)->delete();


        return response()->json([
            'message' => 'Mentors deleted successfully',
            'deleted_count' => $deleted
        ], 200);
    }
}
