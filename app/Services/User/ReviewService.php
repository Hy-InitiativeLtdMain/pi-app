<?php

namespace App\Services\User;

use App\Models\Review;
use App\Services\Query\FilteringService;

class ReviewService
{
    public function index($inputs)
    {
        $filter = new FilteringService();
        $reviews = Review::query();
        $filter->filterColumns($reviews, $inputs);
        $data['reviews'] = $reviews->with(['user'])->latest()->paginate();
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function view(Review $review)
    {
        $data['review'] = $review;
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function store($input)
    {
        $review = Review::create($input);


        $data['message'] = "Review Created";
        $data['review'] = $review;
        return [
            'data' => $data,
            'code' => 201
        ];
    }

    public function update(Review $review, $input)
    {
        $review->fill($input);
        if ($review->isDirty()) {
            $review->save();
        }
        $data['message'] = "Review updated";
        $data['review'] = $review;
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function delete(Review $review)
    {

        $review->delete();
        $data['message'] = "Deleted Successfully";
        $data['review'] = $review;
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
