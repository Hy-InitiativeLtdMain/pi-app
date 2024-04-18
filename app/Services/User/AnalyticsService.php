<?php

namespace App\Services\User;

use App\Models\Course;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AnalyticsService
{

    public function stats($inputs)
    {
        $instituteSlug = Auth::user()->institute_slug;

        $data['user_count'] = User::where('institute_slug', $instituteSlug)->query()
            ->whereBetween('created_at', [$inputs['start_date'], $inputs['end_date']])
            ->count();
        $data['course_count'] = Course::whereHas('user', function ($query) use ($instituteSlug) {
            $query->where('institute_slug', $instituteSlug);
        })->query()
            ->whereBetween('created_at', [$inputs['start_date'], $inputs['end_date']])
            ->count();
        $data['transaction_count'] = Transaction::whereHas('user', function ($query) use ($instituteSlug) {
            $query->where('institute_slug', $instituteSlug);
        })->query()
            ->whereBetween('created_at', [$inputs['start_date'], $inputs['end_date']])
            ->count();
        $data['transaction_total'] = Transaction::whereHas('user', function ($query) use ($instituteSlug) {
            $query->where('institute_slug', $instituteSlug);
        })->query()
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
        $instituteSlug = Auth::user()->institute_slug;
        $data['data'] = User::where('institute_slug', $instituteSlug)->query()
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
        $instituteSlug = Auth::user()->institute_slug;
        $data['data'] = User::where('institute_slug', $instituteSlug)->query()
            ->selectRaw("count(id) as number, CONCAT(YEAR(created_at),'-',MONTHNAME(created_at)) as m_date")
            ->whereBetween('users.created_at', [$inputs['start_date'], $inputs['end_date']])
            ->groupBy('m_date')->get();
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
