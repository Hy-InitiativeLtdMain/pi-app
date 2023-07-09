<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AssignmentRequest;
use App\Models\Assignment;
use App\Services\User\AssignmentService;
use Illuminate\Http\Request;

class AssignmentManager extends Controller
{

    private $assignmentService;

    function __construct(AssignmentService $assignmentService )
    {
        $this->assignmentService = $assignmentService;
    }

    public function index(Request $request)
    {
        $_data = $this->assignmentService->index($request->all());
        return response($_data['data'], $_data['code']);
    }


    public function view(Assignment $assignment)
    {
        $_data = $this->assignmentService->view($assignment);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, Assignment $assignment)
    {
        $validated = $request->validate(AssignmentRequest::$_updateRules);
        $_data = $this->assignmentService->update($assignment, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function store(AssignmentRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = $request->user()->id;
        $_data = $this->assignmentService->store($validated);
        return response($_data['data'], $_data['code']);
    }

    public function delete(Assignment $assignment)
    {
        $_data = $this->assignmentService->delete($assignment);
        return response($_data['data'], $_data['code']);
    }
}
