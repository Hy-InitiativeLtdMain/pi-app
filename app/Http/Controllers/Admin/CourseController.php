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


    // get categories
    public function getCategories()
    {
        $categories = Category::paginate();
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
        return response()->json($courses);
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
        return response()->json(['message' => 'Course status updated successfully']);
    }
    // get a course
    public function getCourse($course) {
        $course = Course::with('lessons')->findOrFail($course);

        return response()->json($course, 200);
    }





}
