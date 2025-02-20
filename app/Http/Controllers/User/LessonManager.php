<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LessonRequest;
use App\Models\Course;
use App\Models\Lesson;
use App\Services\User\LessonService;
use Illuminate\Http\Request;

class LessonManager extends Controller
{

    private $lessonService;

    function __construct(LessonService $lessonService )
    {
        $this->lessonService = $lessonService;
        $this->middleware('feature:course');
    }

    public function index(Request $request)
    {
        $_data = $this->lessonService->index($request->all());
        return response($_data['data'], $_data['code']);
    }


    public function view(Lesson $lesson)
    {
        $_data = $this->lessonService->view($lesson);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, Lesson $lesson)
    {
        $validated = $request->validate(LessonRequest::$_updateRules);
        $_data = $this->lessonService->update($lesson, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function store(LessonRequest $request, Course $course)
    {
        $validated = $request->validated();

        $_data = $this->lessonService->store($course, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function storeList(Request $request, Course $course)
    {
        $validatedArr = $request->validate(LessonRequest::$_arrayRules);
        $_data = [];
        foreach ($validatedArr['list'] as $input) {
            $_data[] = $this->lessonService->store($course, $input);
        }

        return response($_data, 200);
    }

    public function delete( Lesson $lesson)
    {
        $_data = $this->lessonService->delete($lesson);
        return response($_data['data'], $_data['code']);
    }

    public function seen(Request $request,  Lesson $lesson)
    {

        $user = request()->user();
        $_data = $this->lessonService->updateLessonSeen($lesson, $user, boolval($request->input('seen')));
        return response($_data['data'], $_data['code']);
    }
}
