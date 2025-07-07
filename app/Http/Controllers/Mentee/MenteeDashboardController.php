<?php

namespace App\Http\Controllers\Mentee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MenteeDashboardController extends Controller
{
    /**
     * Display the mentee dashboard summary.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $mentee = $user->mentee;
        if (!$mentee) {
            return response()->json([
                'error' => 'Mentee profile not found.'
            ], 404);
        }
        // Dashboard stats for mentee
        $totalMentors = DB::table('mentor_mentees')->where('mentee_id', $mentee->id)->count();
        $totalSessions = DB::table('appointment_mentees')->where('mentee_id', $mentee->id)->count();
        $totalLearningHours = DB::table('bookings')->where('mentee_id', $mentee->id)->where('status', 'completed')->sum('hours');
        // To-dos: check mentee profile completeness
        $requiredFields = [
            'firstname', 'lastname', 'email', 'phone', 'bio',
            'highest_edu_qualification', 'learning_goals', 'profile_pic',
            'country', 'track', 'institute'
        ];
        $missingFields = [];
        foreach ($requiredFields as $field) {
            if (empty($mentee->$field)) {
                $missingFields[] = $field;
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
        return response()->json([
            'total_mentors' => $totalMentors,
            'total_sessions' => $totalSessions,
            'total_learning_hours' => $totalLearningHours,
            'todos' => $todos,
        ]);
    }
} 