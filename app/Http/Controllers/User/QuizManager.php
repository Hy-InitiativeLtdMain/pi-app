<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\QuizRequest;
use App\Models\Quiz;
use App\Services\User\QuizService;
use Illuminate\Http\Request;

class QuizManager extends Controller
{

    private $quizService;

    function __construct(QuizService $quizService )
    {
        $this->quizService = $quizService;
    }

    public function index(Request $request)
    {
        $_data = $this->quizService->index($request->all());
        return response($_data['data'], $_data['code']);
    }


    public function view(Quiz $quiz)
    {
        $_data = $this->quizService->view($quiz);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, Quiz $quiz)
    {
        $validated = $request->validate(QuizRequest::$_updateRules);
        $_data = $this->quizService->update($quiz, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function store(QuizRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = $request->user()->id;
        $_data = $this->quizService->store($validated);
        return response($_data['data'], $_data['code']);
    }

    public function submit(Request $request, Quiz $quiz)
    {
        $validated = $request->validate(QuizRequest::$_submitRules);
        $validated['user_id'] = $request->user()->id;
        $validated['quiz_id'] = $quiz->id;
        $_data = $this->quizService->submit( $validated);
        return response($_data['data'], $_data['code']);
    }

    public function delete(Quiz $quiz)
    {
        $_data = $this->quizService->delete($quiz);
        return response($_data['data'], $_data['code']);
    }
}
