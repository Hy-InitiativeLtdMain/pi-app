<?php

namespace App\Services\User;

use App\Models\User;

class AnalyticsService
{
    public function usersLineGraph()
    {
        $data['data'] = User::query()
        ->selectRaw('count(id) as number, DATE(created_at) as m_date')
        ->groupBy('m_date')->get();
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
