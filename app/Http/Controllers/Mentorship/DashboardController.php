<?php

namespace App\Http\Controllers\Mentorship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display the mentor dashboard summary.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        // Dashboard stats
        $totalFellowsManaged = DB::table('mentor_mentees')->where('mentor_id', $user->id)->count();
        $totalSessionsDone = DB::table('bookings')->where('mentor_id', $user->id)->where('status', 'completed')->count();
        $totalMentoringHours = DB::table('bookings')->where('mentor_id', $user->id)->where('status', 'completed')->sum('duration');
        // To-dos: check mentor profile completeness
        $mentor = $user->mentor;
        $requiredFields = [
            'firstname', 'lastname', 'email', 'phone', 'company', 'job_title', 'bio',
            'highest_edu_qualification', 'past_mentorship_exp', 'time_commitment',
            'profile_pic', 'country', 'linkedin_profile', 'portfolio', 'resume_link',
            'project_reference_id', 'track', 'institute'
        ];
        $missingFields = [];
        if ($mentor) {
            foreach ($requiredFields as $field) {
                if (empty($mentor->$field)) {
                    $missingFields[] = $field;
                }
            }
        }
        $todos = [];
        foreach ($missingFields as $i => $field) {
            $todos[] = [
                'id' => $i + 1,
                'title' => 'Fill in your ' . str_replace('_', ' ', ucfirst($field)),
                'field' => $field,
                'completed' => false
            ];
        }
        if (!$mentor) {
            $todos[] = ['id' => 0, 'title' => 'Mentor profile not found', 'completed' => false];
        }
        return response()->json([
            'total_fellows_managed' => $totalFellowsManaged,
            'total_sessions_done' => $totalSessionsDone,
            'total_mentoring_hours' => $totalMentoringHours,
            'todos' => $todos,
        ]);
    }

    /**
     * Get mentor to-dos.
     */
    public function todos(Request $request)
    {
        $user = Auth::user();
        $mentor = $user->mentor;
        $requiredFields = [
            'firstname', 'lastname', 'email', 'phone', 'company', 'job_title', 'bio',
            'highest_edu_qualification', 'past_mentorship_exp', 'time_commitment',
            'profile_pic', 'country', 'linkedin_profile', 'portfolio', 'resume_link',
            'project_reference_id', 'track', 'institute'
        ];
        $missingFields = [];
        if ($mentor) {
            foreach ($requiredFields as $field) {
                if (empty($mentor->$field)) {
                    $missingFields[] = $field;
                }
            }
        } else {
            return response()->json([
                'todos' => [['id' => 0, 'title' => 'Mentor profile not found', 'completed' => false]]
            ]);
        }
        $todos = [];
        foreach ($missingFields as $i => $field) {
            $todos[] = [
                'id' => $i + 1,
                'title' => 'Fill in your ' . str_replace('_', ' ', ucfirst($field)),
                'field' => $field,
                'completed' => false
            ];
        }
        return response()->json(['todos' => $todos]);
    }

    /**
     * Mark a to-do as completed.
     */
    public function completeTodo(Request $request, $id)
    {
        // Placeholder response
        return response()->json(['message' => "To-do $id marked as completed."]);
    }

    /**
     * Get mentor badge/progress info.
     */
    // public function badges(Request $request)
    // {
    //     // Placeholder response
    //     return response()->json([
    //         'badges' => [
    //             ['id' => 1, 'name' => 'First Mentoring Badge', 'earned' => false],
    //         ]
    //     ]);
    // }

    /**
     * Get mentor notifications.
     */
    public function notifications(Request $request)
    {
        // Placeholder response
        return response()->json([
            'notifications' => [
                ['id' => 1, 'message' => 'Welcome to the dashboard!', 'read' => false],
            ]
        ]);
    }

    /**
     * Search dashboard data.
     */
    public function search(Request $request)
    {
        $query = $request->input('query', '');
        // Placeholder response
        return response()->json([
            'results' => [],
            'query' => $query
        ]);
    }
} 