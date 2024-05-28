<?php

namespace App\Http\Controllers\User;

use App\Events\Admin\NewCourse;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\CourseRequest;
use App\Http\Requests\User\TransactionRequest;
use App\Models\Course;
use App\Services\User\CourseService;
use Illuminate\Http\Request;

class CourseManager extends Controller
{

    private $courseService;

    function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
        $this->middleware('feature:course');
    }

    public function index(Request $request)
    {
        $_data = $this->courseService->index($request->all());
        return response($_data['data'], $_data['code']);
    }

    public function buyers(Request $request)
    {
        $_data = $this->courseService->buyers($request->user(), $request->all());
        return response($_data['data'], $_data['code']);
    }


    public function view(Course $course)
    {
        $_data = $this->courseService->view($course);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate(CourseRequest::$_updateRules);
        $_data = $this->courseService->update($course, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function store(CourseRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = $request->user()->id;
        $validated['institute_slug'] = auth()->user()->institute_slug;
        $_data = $this->courseService->store($validated);

        // Admin Notification
        event(new NewCourse($_data['data']['course'], $_data['data']['institute_slug']));

        return response($_data['data'], $_data['code']);
    }

    public function delete(Course $course)
    {
        $_data = $this->courseService->delete($course);
        return response($_data['data'], $_data['code']);
    }

    public function subscribe(Request $request, Course $course)
    {
        $validated = $request->validate(TransactionRequest::$_paymentTypeRules);
        $user = $request->user();




        $_data = $this->courseService->subscribe($user, $course, $validated['type']);
        return response($_data['data'], $_data['code']);
    }
}
