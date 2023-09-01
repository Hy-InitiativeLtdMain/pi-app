<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\AnalyticsService;
use Illuminate\Http\Request;

class AnalyticsManager extends Controller
{

    private $categoryService;

    function __construct(AnalyticsService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function usersLineGraph(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $_data = $this->categoryService->usersLineGraph($validated);
        return response($_data['data'], $_data['code']);
    }
}
