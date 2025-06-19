<?php

namespace App\Http\Controllers;

use App\Models\Mentee;
use App\Models\Mentor;
use App\Models\MentorMentee;
use Illuminate\Http\Request;

class MentorMenteeController extends Controller
{
    // List all mentor-mentee assignments
    public function index()
    {
        return MentorMentee::all();
    }

    // Assign a mentee to a mentor
    public function store(Request $request)
    {
        $data = $request->validate([
            'mentor_id' => 'required|exists:mentors,id',
            'mentee_id' => 'required|exists:mentees,id',
        ]);

        // Check if mentor already has 10 mentees
        $menteeCount = MentorMentee::where('mentor_id', $data['mentor_id'])->count();
        if ($menteeCount >= 10) {
            return response()->json(['error' => 'Mentor already has 10 mentees'], 422);
        }

        // Check if this mentee is already assigned to any mentor
        $menteeAssigned = MentorMentee::where('mentee_id', $data['mentee_id'])->exists();
        if ($menteeAssigned) {
            return response()->json(['error' => 'Mentee is already assigned to a mentor'], 422);
        }

        // Check if mentor and mentee have the same track
        $mentor = Mentor::find($data['mentor_id']);
        $mentee = Mentee::find($data['mentee_id']);
        if (!$mentor || !$mentee || $mentor->track !== $mentee->track) {
            return response()->json(['error' => 'Mentor and mentee must have the same track'], 422);
        }

        $assignment = MentorMentee::create($data);

        return response()->json($assignment, 201);
    }

    // Remove a mentor-mentee assignment
    public function destroy($id)
    {
        $assignment = MentorMentee::findOrFail($id);
        $assignment->delete();

        return response()->json(['message' => 'Assignment deleted']);
    }

    // Get all mentees for a specific mentor
    public function menteesByMentor($mentorId)
    {
        $mentees = MentorMentee::where('mentor_id', $mentorId)
            ->with('mentees')
            ->get();
        return response()->json($mentees);
    }

}
