<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserReviewRequest;
use App\Http\Requests\UpdateUserReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Mentee;
use App\Models\Mentor;
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
        if (auth()->user()->mentor) {
            $data['user_type'] = 1;
            $data['mentor_id'] = auth()->user()->mentor->id;
            $data['mentee_id'] = $id;
            $data['rating'] = $request->rating;
            $data['review'] = $request->review ? $request->review : null;
            $data['session'] = $request->session;
            $data['session_hours'] = $request->session_hours ? $request->session_hours : null;
            $data['number_of_sessions'] = $request->number_of_sessions ? $request->number_of_sessions : null;
            UserReview::create($data);
            return response()->json(['message' => 'Review Submitted successfully.'], 201);
        }else if (auth()->user()->mentee) {
            $data['user_type'] = 0;
            $data['mentor_id'] = $id;
            $data['mentee_id'] = auth()->user()->mentee->id;
            $data['rating'] = $request->rating;
            $data['review'] = $request->review ? $request->review : null;
            $data['session'] = $request->session;
            $data['session_hours'] = $request->session_hours ? $request->session_hours : null;
            $data['number_of_sessions'] = $request->number_of_sessions ? $request->number_of_sessions : null;
            UserReview::create($data);
            return response()->json(['message' => 'Review Submitted successfully.'], 201);
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
        return response()->json( ReviewResource::collection($reviews));

    }

    public function fetchMenteeReviews()
    {
        $reviews = UserReview::where('mentee_id', auth()->user()->mentee->id)
            ->where('user_type', 1)->get();
        return response()->json(ReviewResource::collection($reviews));
    }

    public function fetchMentorReview(Mentor $id)
    {
        $reviews = UserReview::where('mentor_id', $id->id)
            ->where('user_type', 0)->get();
    // dd($reviews);
        return response()->json(ReviewResource::collection($reviews));
    }

    public function fetchMenteeReview(Mentee $id)
    {
        // dd($id->id);
        $reviews = UserReview::where('mentee_id', $id->id)
            ->where('user_type', 1)->get();
    // dd($reviews);

        return response()->json(ReviewResource::collection($reviews));
    }
}
