<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('feature:course');
    }

    // get courses based on the param filter category id
    public function getCourses(Category $category)
    {
        $courses = Course::where('category_id', $category->id)->get();
        return response()->json($courses);
    }

    // flag or approve courses
    public function flagCourse(Request $request, Lesson $lesson)
    {
        if ($lesson->course->user->institute_slug !== auth()->user()->institute_slug)
        {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $validated = $request->validate([
            'status' => 'required|in:approved,declined'
        ]);

        $lesson->update($validated);
        return response()->json(['message' => 'Lesson status updated successfully']);

    }

    // get a course
    public function getCourse($course) {
        $course = Course::with('lessons')->findOrFail($course);

        return response()->json($course, 200);
    }





}
