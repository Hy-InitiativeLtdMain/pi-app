<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AttachmentRequest;
use App\Models\Attachment;
use App\Services\User\AttachmentService;
use Illuminate\Http\Request;

class AttachmentManager extends Controller
{

    private $attachmentService;

    function __construct(AttachmentService $attachmentService )
    {
        $this->attachmentService = $attachmentService;
        $this->middleware('feature:course');
    }

    public function index(Request $request)
    {
        $_data = $this->attachmentService->index($request->all());
        return response($_data['data'], $_data['code']);
    }


    public function view(Attachment $attachment)
    {
        $_data = $this->attachmentService->view($attachment);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, Attachment $attachment)
    {
        $validated = $request->validate(AttachmentRequest::$_updateRules);
        $_data = $this->attachmentService->update($attachment, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function store(AttachmentRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = $request->user()->id;
        $_data = $this->attachmentService->store($validated);
        return response($_data['data'], $_data['code']);
    }

    public function delete(Attachment $attachment)
    {
        $_data = $this->attachmentService->delete($attachment);
        return response($_data['data'], $_data['code']);
    }
}
