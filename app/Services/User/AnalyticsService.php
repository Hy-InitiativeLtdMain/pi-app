<?php

namespace App\Services\User;

use App\Models\User;

class AnalyticsService
{
    public function usersLineGraph($inputs)
    {
        $data['data'] = User::query()
        ->selectRaw('count(id) as number, DATE(created_at) as m_date')
        ->whereBetween('users.created_at', [$inputs['start_date'], $inputs['end_date']])
        ->groupBy('m_date')->get();
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
