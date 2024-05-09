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

        $studentUsers = $this->users()->where('is_admin', 0);
        $studentUsers = $studentUsers->where('admin', 0);
        // dd($studentUsers);
        // Get id of $studentUsers
        $studentUsers = $studentUsers->pluck('id')->toArray();
        // dd($studentUsers);
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
                ->whereIn('user_id', $studentUsers)
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

    public function creatorsEnrollmentCountPerMonth()
    {
        // Get the current year and month
        $currentYear = date('Y');
        $currentMonth = date('m');

        // Define the start date as one year before the current month
        $startYear = $currentYear - 1;
        $startDate = "{$startYear}-{$currentMonth}-01 00:00:00";

        // Define the end date as the current date and time
        $endDate = date('Y-m-d H:i:s');

        $creatorsUsers = $this->users()->where('is_admin', 1);
        $creatorsUsers = $creatorsUsers->where('admin', 0);
        // dd($creatorsUsers);
        // Get id of $creatorsUsers
        $creatorsUsers = $creatorsUsers->pluck('id')->toArray();
        // dd($creatorsUsers);
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
                ->whereIn('user_id', $creatorsUsers)
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

    // get the users in order of number of lessons taken\
    public function usersByLessonsTaken()
    {
        // Get users who are not admins and not admins
        $users = $this->users()->where('is_admin', 0)->where('admin', 0);

        // Use collection map to transform each user into an array with lessons taken count and details
        $usersByLessonsTaken = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->first_name . ' ' . $user->last_name,
                // 'phone' => $user->phone,
                // 'email' => $user->email,
                'lessons_taken' => LessonUser::where('user_id', $user->id)->count(),
            ];
        });

        // Sort the users by the number of lessons taken in descending order
        $usersByLessonsTaken = $usersByLessonsTaken->sortByDesc('lessons_taken');
        // dont send the data if the lessons_taken is 0
        $usersByLessonsTaken = $usersByLessonsTaken->filter(function ($user) {
            return $user['lessons_taken'] > 0;
        });

        // Return the users in order of the number of lessons taken
        return response()->json($usersByLessonsTaken);
    }

    public function usersByCoursesCreated()
    {
        // Get users who are  Creators
        $users = $this->users()->where('is_admin', 1)->where('admin', 0);

        // Use collection map to transform each user into an array with lessons taken count and details
        $usersByCoursesCreated = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->first_name . ' ' . $user->last_name,
                // 'phone' => $user->phone,
                // 'email' => $user->email,
                'courses_created' => Course::where('user_id', $user->id)->count(),
            ];
        });

        // Sort the users by the number of lessons taken in descending order
        $usersByCoursesCreated = $usersByCoursesCreated->sortByDesc('courses_created');

        // dont send the data if the courses_created is 0
        $usersByCoursesCreated = $usersByCoursesCreated->filter(function ($user) {
            return $user['courses_created'] > 0;
        });

        // Return the users in order of the number of lessons taken
        return response()->json($usersByCoursesCreated);
    }

    private function users()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        return $users;
    }
}
