<?php

namespace App\Services\User;

use App\Models\Question;
use App\Services\Query\FilteringService;

class QuestionService
{
    public function index($inputs)
    {
        $filter = new FilteringService();
        $questions = Question::query();
        $filter->filterColumns($questions, $inputs);
        $data['questions'] = $questions->latest()->paginate();
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function view(Question $question)
    {
        $data['question'] = $question;
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function store($input)
    {
        $question = Question::create($input);


        $data['message'] = "Question Created";
        $data['question'] = $question;
        return [
            'data' => $data,
            'code' => 201
        ];
    }

    public function update(Question $question, $input)
    {
        $question->fill($input);
        if ($question->isDirty()) {
            $question->save();
        }
        $data['message'] = "Question updated";
        $data['question'] = $question;
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function delete(Question $question)
    {

        $question->delete();
        $data['message'] = "Deleted Successfully";
        $data['question'] = $question;
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
