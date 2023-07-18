<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\QuestionRequest;
use App\Models\Question;
use App\Services\User\QuestionService;
use Illuminate\Http\Request;

class QuestionManager extends Controller
{

    private $questionService;

    function __construct(QuestionService $questionService )
    {
        $this->questionService = $questionService;
    }

    public function index(Request $request)
    {
        $_data = $this->questionService->index($request->all());
        return response($_data['data'], $_data['code']);
    }


    public function view(Question $question)
    {
        $_data = $this->questionService->view($question);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, Question $question)
    {
        $validated = $request->validate(QuestionRequest::$_updateRules);
        $_data = $this->questionService->update($question, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function store(QuestionRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = $request->user()->id;
        $_data = $this->questionService->store($validated);
        return response($_data['data'], $_data['code']);
    }

    public function delete(Question $question)
    {
        $_data = $this->questionService->delete($question);
        return response($_data['data'], $_data['code']);
    }
}
