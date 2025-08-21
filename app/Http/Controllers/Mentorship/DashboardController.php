<?php

namespace App\Http\Controllers\Mentorship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use Carbon\Carbon;
=======
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5

class DashboardController extends Controller
{
    /**
     * Display the mentor dashboard summary.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
<<<<<<< HEAD
        $currentDateTime = Carbon::now();
        
        // Dashboard stats
        $totalFellowsManaged = DB::table('mentor_mentees')->where('mentor_id', $user->mentor->id)->count();
        
        // Calculate completed sessions (past appointments based on scheduled_end or scheduled_at)
        $completedSessions = DB::table('appointments')
            ->where('mentor_id', $user->mentor->id)
            ->where(function($query) use ($currentDateTime) {
                $query->where('scheduled_end', '<', $currentDateTime)
                      ->orWhere(function($subQuery) use ($currentDateTime) {
                          $subQuery->whereNull('scheduled_end')
                                   ->where('scheduled_at', '<', $currentDateTime);
                      });
            })
            ->count();
            
        // Calculate pending sessions (future appointments)
        $pendingSessions = DB::table('appointments')
            ->where('mentor_id', $user->mentor->id)
            ->where(function($query) use ($currentDateTime) {
                $query->where('scheduled_end', '>=', $currentDateTime)
                      ->orWhere(function($subQuery) use ($currentDateTime) {
                          $subQuery->whereNull('scheduled_end')
                                   ->where('scheduled_at', '>=', $currentDateTime);
                      });
            })
            ->count();
            
        
        $totalMentoringMinutes = DB::table('appointments')
            ->where('mentor_id', $user->mentor->id)
            ->where(function($query) use ($currentDateTime) {
                $query->where('scheduled_end', '<', $currentDateTime)
                        ->orWhere(function($subQuery) use ($currentDateTime) {
                            $subQuery->whereNull('scheduled_end')
                                    ->where('scheduled_at', '<', $currentDateTime);
                        });
            })
            ->whereNotNull('total_time')
            ->sum('total_time');
        $totalMentoringHours = round($totalMentoringMinutes / 60, 1);
        
=======
        // Dashboard stats
        $totalFellowsManaged = DB::table('mentor_mentees')->where('mentor_id', $user->mentor->id)->count();
        // Count sessions as number of appointments for this mentor
        $totalSessionsDone = DB::table('appointments')->where('mentor_id', $user->mentor->id)->count();
        $totalMentoringHours = DB::table('bookings')->where('mentor_id', $user->mentor->id)->where('status', 'completed')->sum('hours');
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
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
<<<<<<< HEAD
            'total_sessions_done' => $completedSessions,
            'total_sessions_completed' => $completedSessions,
            'total_sessions_pending' => $pendingSessions,
=======
            'total_sessions_done' => $totalSessionsDone,
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
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
    // public function notifications(Request $request)
    // {
    //     // Placeholder response
    //     return response()->json([
    //         'notifications' => [
    //             ['id' => 1, 'message' => 'Welcome to the dashboard!', 'read' => false],
    //         ]
    //     ]);
    // }

    /**
<<<<<<< HEAD
     * Get detailed session statistics.
     */
    public function sessionStats(Request $request)
    {
        $user = Auth::user();
        $currentDateTime = Carbon::now();
        
        // Get completed sessions with details
        $completedSessions = DB::table('appointments')
            ->where('mentor_id', $user->mentor->id)
            ->where(function($query) use ($currentDateTime) {
                $query->where('scheduled_end', '<', $currentDateTime)
                      ->orWhere(function($subQuery) use ($currentDateTime) {
                          $subQuery->whereNull('scheduled_end')
                                   ->where('scheduled_at', '<', $currentDateTime);
                      });
            })
            ->select('id', 'title', 'scheduled_at', 'scheduled_end', 'total_time', 'meeting_type')
            ->orderBy('scheduled_at', 'desc')
            ->get();
            
        // Get pending sessions with details
        $pendingSessions = DB::table('appointments')
            ->where('mentor_id', $user->mentor->id)
            ->where(function($query) use ($currentDateTime) {
                $query->where('scheduled_end', '>=', $currentDateTime)
                      ->orWhere(function($subQuery) use ($currentDateTime) {
                          $subQuery->whereNull('scheduled_end')
                                   ->where('scheduled_at', '>=', $currentDateTime);
                      });
            })
            ->select('id', 'title', 'scheduled_at', 'scheduled_end', 'total_time', 'meeting_type')
            ->orderBy('scheduled_at', 'asc')
            ->get();
            
        return response()->json([
            'completed_sessions' => [
                'count' => $completedSessions->count(),
                'sessions' => $completedSessions
            ],
            'pending_sessions' => [
                'count' => $pendingSessions->count(), 
                'sessions' => $pendingSessions
            ],
            'total_hours_completed' => $this->calculateTotalHours($completedSessions)
        ]);
    }
    
    /**
     * Calculate total hours from sessions.
     */
    private function calculateTotalHours($sessions)
    {
        $totalMinutes = 0;
        foreach ($sessions as $session) {
            if ($session->total_time) {
                $totalMinutes += $session->total_time;
            } else if ($session->scheduled_end && $session->scheduled_at) {
                // Calculate duration from scheduled times
                $start = Carbon::parse($session->scheduled_at);
                $end = Carbon::parse($session->scheduled_end);
                $totalMinutes += $start->diffInMinutes($end);
            }
        }
        return round($totalMinutes / 60, 1);
    }
    
    /**
     * Get upcoming sessions (next 7 days).
     */
    public function upcomingSessions(Request $request)
    {
        $user = Auth::user();
        $currentDateTime = Carbon::now();
        $nextWeek = Carbon::now()->addDays(7);
        
        $upcomingSessions = DB::table('appointments')
            ->where('mentor_id', $user->mentor->id)
            ->where('scheduled_at', '>=', $currentDateTime)
            ->where('scheduled_at', '<=', $nextWeek)
            ->select('id', 'title', 'scheduled_at', 'scheduled_end', 'total_time', 'meeting_type', 'description')
            ->orderBy('scheduled_at', 'asc')
            ->get();
            
        return response()->json([
            'upcoming_sessions' => $upcomingSessions,
            'count' => $upcomingSessions->count()
        ]);
    }
    
    /**
     * Get session summary by month.
     */
    public function sessionSummaryByMonth(Request $request)
    {
        $user = Auth::user();
        $year = $request->input('year', date('Y'));
        
        $monthlySummary = DB::table('appointments')
            ->where('mentor_id', $user->mentor->id)
            ->whereYear('scheduled_at', $year)
            ->selectRaw('MONTH(scheduled_at) as month, COUNT(*) as total_sessions')
            ->selectRaw('SUM(CASE WHEN scheduled_at < NOW() THEN 1 ELSE 0 END) as completed_sessions')
            ->selectRaw('SUM(CASE WHEN scheduled_at >= NOW() THEN 1 ELSE 0 END) as pending_sessions')
            ->selectRaw('SUM(CASE WHEN scheduled_at < NOW() THEN total_time ELSE 0 END) as completed_minutes')
            ->groupBy('month')
            ->orderBy('month')
            ->get();
            
        return response()->json([
            'year' => $year,
            'monthly_summary' => $monthlySummary
        ]);
    }

    /**
=======
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
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
<<<<<<< HEAD
} 
=======
} 
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
