<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ReviewRequest;
use App\Models\Review;
use App\Services\User\ReviewService;
use Illuminate\Http\Request;

class ReviewManager extends Controller
{

    private $reviewService;

    function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    public function index(Request $request)
    {
        $_data = $this->reviewService->index($request->all());
        return response($_data['data'], $_data['code']);
    }


    public function view(Review $review)
    {
        $_data = $this->reviewService->view($review);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, Review $review)
    {
        $validated = $request->validate(ReviewRequest::$_updateRules);
        $_data = $this->reviewService->update($review, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function store(ReviewRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = $request->user()->id;
        $_data = $this->reviewService->store($validated);
        return response($_data['data'], $_data['code']);
    }



    public function delete(Review $review)
    {
        $_data = $this->reviewService->delete($review);
        return response($_data['data'], $_data['code']);
    }
}
