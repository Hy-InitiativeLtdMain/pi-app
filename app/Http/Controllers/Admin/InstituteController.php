<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    // Get all users based on the institute_slug of the authenticated user
    public function index()
    {
        $institute_slug = auth()->user()->institute_slug;
        $users = User::where('institute_slug', $institute_slug)->get();
        // count the users
        $count = $users->count();
        return response()->json(['users' => $users, 'count' => $count]);
    }

    //  Get all courses based on the institute_slug of the authenticated user
    public function courses()
    {
        $institute_slug = auth()->user()->institute_slug;
        $courses = Course::where('institute_slug', $institute_slug)->get();
        // count the courses
        $count = $courses->count();
        return response()->json(['courses' => $courses, 'count' => $count]);
    }

    // Get all transactions based on the institute_slug of the authenticated user
    public function transactions()
    {
        $institute_slug = auth()->user()->institute_slug;
        $transactions = Transaction::where('institute_slug', $institute_slug)->get();
        // count the transactions
        $count = $transactions->count();
        return response()->json(['transactions' => $transactions, 'count' => $count]);
    }
}
