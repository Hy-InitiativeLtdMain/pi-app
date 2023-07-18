<?php

namespace App\Services\User;

use App\Models\Quiz;
use App\Models\UserQuiz;
use App\Services\Query\FilteringService;

class QuizService
{
    public function index($inputs)
    {
        $filter = new FilteringService();
        $quizs = Quiz::query();
        $filter->filterColumns($quizs, $inputs);
        $data['quizzes'] = $quizs->latest()->paginate();
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function view(Quiz $quiz)
    {
        $data['quiz'] = $quiz;
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function store($input)
    {
        $quiz = Quiz::create($input);


        $data['message'] = "Quiz Created";
        $data['quiz'] = $quiz;
        return [
            'data' => $data,
            'code' => 201
        ];
    }

    public function update(Quiz $quiz, $input)
    {
        $quiz->fill($input);
        if ($quiz->isDirty()) {
            $quiz->save();
        }
        $data['message'] = "Quiz updated";
        $data['quiz'] = $quiz;
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function submit($input)
    {
        $userQuiz = UserQuiz::create($input);


        $data['message'] = "User Quiz Created";
        $data['userQuiz'] = $userQuiz;
        return [
            'data' => $data,
            'code' => 201
        ];
    }

    public function delete(Quiz $quiz)
    {

        $quiz->delete();
        $data['message'] = "Deleted Successfully";
        $data['quiz'] = $quiz;
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
