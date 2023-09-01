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
        $_data = $this->categoryService->usersLineGraph();
        return response($_data['data'], $_data['code']);
    }
}
