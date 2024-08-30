<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Services\User\EventService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $eventService;

    function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $_data = $this->eventService->index($request->all());
        return response($_data['data'], $_data['code']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $_data = $this->eventService->store($request);
        return response($_data['data'], $_data['code']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $_data = $this->eventService->show($event);
        return response($_data['data'], $_data['code']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Event $event, EventRequest $request)
    {
        // dd($request);
        $validate = $request->validate(EventRequest::$_updateRules);
        // dd($validate);
        $_data = $this->eventService->update($event, $validate);
        return response($_data['data'], $_data['code']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $_data = $this->eventService->destroy($event);
        return response($_data['data'], $_data['code']);
    }
}
