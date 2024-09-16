<?php

namespace App\Http\Controllers\Admin;

use App\Events\Admin\FlagCourse;
use App\Events\Admin\FlaggedCourse;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\CourseResource;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    use ApiResponser;
    public function __construct()
    {
        $this->middleware('feature:course');
    }


    // get categories
    public function getCategories()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        $userIds = $users->pluck('id')->toArray();
        $categories = Category::whereIn('user_id', $userIds)->paginate();
        return response()->json($categories);
    }
    // get courses based on the param filter category id
    public function getCourses(Request $request, Category $category)
    {
        // add search functionality
        if ($request->has('search')) {
            $searchTerm = $request->input('search');

            // Search mentors by first name or last name
            $courses = Course::where('category_id', $category->id)
            ->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('description', 'like', '%' . $searchTerm . '%');
            })
            ->paginate();
        } else {
            $courses = Course::where('category_id', $category->id)->paginate();
        }
        return $this->showAll(CourseResource::collection($courses));
    }

    // flag or approve courses
    public function flagLesson(Request $request, Lesson $lesson)
    {
        if ($lesson->course->user->institute_slug !== auth()->user()->institute_slug)
        {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $validated = $request->validate([
            'status' => 'required|in:approved,declined'
        ]);

        $lesson->update($validated);
        event(new FlaggedCourse($lesson));

        return response()->json(['message' => 'Lesson status updated successfully']);

    }

    public function flagCourse(Request $request, Course $course)
    {
        if ($course->user->institute_slug !== auth()->user()->institute_slug) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $validated = $request->validate([
            'status' => 'required|in:approved,declined',
            'feedback' => 'nullable'
        ]);

        $course->update($validated);
        event(new FlagCourse($course));
        return response()->json(['message' => 'Course status updated successfully']);
    }
    // get a course
    public function getCourse($course) {
        $course = Course::with('lessons')->findOrFail($course);

        return $this->successResponse(new CourseResource($course), 200);
    }

    public function getLessons($course){
        $course = Course::findOrFail($course);
        // dd($course);
        $lessons = Lesson::where('course_id', $course->id)->get();
        return response()->json($lessons);

    }

}
