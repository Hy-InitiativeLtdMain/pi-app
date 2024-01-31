<?php

namespace App\Services\User;

use App\Models\Course;
use App\Models\Transaction;
use App\Models\User;

class AnalyticsService
{

    public function stats($inputs)
    {
        $data['user_count'] = User::query()
            ->whereBetween('created_at', [$inputs['start_date'], $inputs['end_date']])
            ->count();
        $data['course_count'] = Course::query()
            ->whereBetween('created_at', [$inputs['start_date'], $inputs['end_date']])
            ->count();
        $data['transaction_count'] = Transaction::query()
            ->whereBetween('created_at', [$inputs['start_date'], $inputs['end_date']])
            ->count();
        $data['transaction_total'] = Transaction::query()
            ->whereBetween('created_at', [$inputs['start_date'], $inputs['end_date']])
            ->paid()
            ->sum('amount');
        return [
            'data' => $data,
            'code' => 200
        ];
    }
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

    public function usersLineGraphYear($inputs)
    {
        $data['data'] = User::query()
            ->selectRaw("count(id) as number, CONCAT(YEAR(created_at),'-',MONTHNAME(created_at)) as m_date")
            ->whereBetween('users.created_at', [$inputs['start_date'], $inputs['end_date']])
            ->groupBy('m_date')->get();
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
