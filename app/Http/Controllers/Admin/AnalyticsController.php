<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\LessonUser;
use App\Models\User;
use App\Traits\ApiResponser;
use DateTime;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    use ApiResponser;

    public function userCount()
    {
        $institute_slug = auth()->user()->institute_slug;
        // dd($institute_slug);
        $users = User::where('institute_slug', $institute_slug)->get();
        // count the users
        $count = $users->count();

        return response()->json([
            "number_of_users" => $count,
        ]);
    }

    // get the enrollment percentage
    public function enrollmentPercentage()
    {
        // get total number of users where is_admin is 0
        $studentCount = User::where('admin', 0)->count();

        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        // convert the users_id to array
        $users_id = $users->pluck('id')->toArray();
        $courses = Course::whereIn('user_id', $users_id)->get();
        $courses_id = $courses->pluck('id')->toArray();
        $lessons = Lesson::whereIn('course_id', $courses_id)->get();
        $lessons_id = $lessons->pluck('id')->toArray();
        // to get total number of enrolled users
        $enrolledCount = LessonUser::whereIn('lesson_id', $lessons_id)->count();

        // get the enrollment percentage
        $percentage = ($enrolledCount / $studentCount) * 100;

        // return the enrollment percentage
        return response()->json([
            'enrollment_percentage' => $percentage,
        ]);
    }

    public function coursesCount()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        // convert the users_id to array
        $users_id = $users->pluck('id')->toArray();
        $courses = Course::whereIn('user_id', $users_id)->get();
        // count the courses
        $count = $courses->count();
        return response()->json(['number_of_courses' => $count]);
    }

    public function enrollmentCountPerMonth()
    {
        // Get the current year and month
        $currentYear = date('Y');
        $currentMonth = date('m');

        // Define the start date as one year before the current month
        $startYear = $currentYear - 1;
        $startDate = "{$startYear}-{$currentMonth}-01 00:00:00";

        // Define the end date as the current date and time
        $endDate = date('Y-m-d H:i:s');

        // Initialize an array to store enrollment counts for each month
        $enrollmentCounts = [];

        // Loop through each month from the start date to the end date
        $currentDate = new DateTime($startDate);
        while ($currentDate <= new DateTime($endDate)) {
            // Get the year and month of the current date
            $year = $currentDate->format('Y');
            $month = $currentDate->format('m');

            // Get the total number of enrolled users within the current month
            $enrolledCount = LessonUser::whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->count();

            // Store the enrollment count for the current month
            $enrollmentCounts[$month] = $enrolledCount;

            // Move to the next month
            $currentDate->modify('+1 month');
        }

        // Return the enrollment counts for each month from the start date to the end date
        return response()->json([
            'enrollment_counts' => $enrollmentCounts,
            'start_date' => $startDate,
            'end_date' => $endDate,
        ]);
    }
}
