<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserReviewRequest;
use App\Http\Requests\UpdateUserReviewRequest;
use App\Models\UserReview;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        if (auth()->user()->mentor->id) {
            $data['user_type'] = 1;
            $data['mentor_id'] = auth()->user()->mentor->id;
            $data['mentee_id'] = $id;
            $data['rating'] = $request->rating;
            $data['review'] = $request->review;
            $data['session'] = $request->session;
            $data['session_hours'] = $request->session_hours;
            $data['number_of_sessions'] = $request->number_of_sessions;
            UserReview::create($data);
            return response()->json('Review Submitted successfully.', 200);
        }
        if (auth()->user()->mentee->id) {
            $data['user_type'] = 0;
            $data['mentor_id'] = $id;
            $data['mentee_id'] = auth()->user()->mentee->id;
            $data['rating'] = $request->rating;
            $data['review'] = $request->review;
            $data['session'] = $request->session;
            $data['session_hours'] = $request->session_hours;
            $data['number_of_sessions'] = $request->number_of_sessions;
            UserReview::create($data);
            return response()->json('Review Submitted successfully.', 200);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(UserReview $userReview)
    {
        return response()->json($userReview);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, UserReview $userReview)
    {
        $userReview->update($request->all());
        return response()->json('Review updated successfully.', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id, UserReview $userReview)
    {
        $userReview->delete();
        return response()->json('Review deleted successfully.', 200);
    }

    // fetch auth users reviews\
    public function fetchMentorReviews()
    {
        $reviews = UserReview::where('mentor_id', auth()->user()->mentor->id)
                               ->where('user_type', 0)->get();
        return response()->json($reviews);

    }

    public function fetchMenteeReviews()
    {
        $reviews = UserReview::where('mentee_id', auth()->user()->mentee->id)
            ->where('user_type', 1)->get();
        return response()->json($reviews);
    }
}
