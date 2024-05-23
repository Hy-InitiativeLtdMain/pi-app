<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NotificationController extends Controller
{
    use ApiResponser;

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        return $this->successResponse($notifications, Response::HTTP_OK);


    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return $this->successResponse( "Notification has been Read", Response::HTTP_NO_CONTENT);
    }
}
