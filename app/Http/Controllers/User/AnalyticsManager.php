<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\AnalyticsService;
use Illuminate\Http\Request;

class AnalyticsManager extends Controller
{

    private $analyticsService;

    function __construct(AnalyticsService $analyticsService)
    {
        $this->analyticsService = $analyticsService;
        $this->middleware('feature:analytics');
    }

    public function stats(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $_data = $this->analyticsService->stats($validated);
        return response($_data['data'], $_data['code']);
    }

    public function usersLineGraph(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $_data = $this->analyticsService->usersLineGraph($validated);
        return response($_data['data'], $_data['code']);
    }

    public function usersLineGraphYear(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $_data = $this->analyticsService->usersLineGraphYear($validated);
        return response($_data['data'], $_data['code']);
    }
}
