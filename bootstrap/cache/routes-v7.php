<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QhXpAy3EfBOfJvXi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/paystack-hook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ru5GMPU2h3GOZjaF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/flw-hook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WQJvUjwZE4MA163g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PbCUuYPh3NErKxRP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NdSHuvOZQbGqH2Ru',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/auth/admin/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jtq1n7ZwvMgVipRv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/auth/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5WuQCkMrXOQhCUY2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/auth/regenerate-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F6sK75eRLwDjkkGU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aWNvW0VJOpg6Kh50',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/notifications/mark-as-read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Pje9UqMuY0yOmz8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentor/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentor.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentor.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentee.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentee.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentee-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xFqgE53Ow7hfj54D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentor-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UbhxmUft02ZOUKuV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bHFT9Rj5JaQ7PvUP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/settings/profile/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5s9V3VVnwOVcgBxy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/settings/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::igUbkdetl9qnfRtG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/settings/features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LaeOHkriew0ppKDb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MGpP4M1sdDBN8Jwu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/settings/notification/features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Mhms30gc1JVJluf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZiLZsk7NKRJzyUnP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/recent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QVQWO683gm1JJprP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/user-page/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3FyYpvK3zvbjym8V',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/learners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MxngZKpV6xSmObzn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/learners/recent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nqWMuDlWEnwd2aJX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/creators' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vHTq2gaeaZwtvXFv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/creators/recent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v6OwTXDCqCY6CpMu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G7JyHbqGRUmJpWed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/learners/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OJgLapui2uMrBwVz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/creators/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jkQ0SkoI6A7DR3eK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LXsqadH7TSE270bV',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/create/learner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bwCUHs4i16qB36Qq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/users/create/creator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2xHzVfmrmKJ6EvQb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yA64Iu9CLbEuhqi5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QXuBgkWw6qjfnoNU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/transactions/recent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YNUJ2PkMBUDZOlpq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/transactions/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2bCjJroW2EmJdvn8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/users/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9WMKK6pIVTRn6931',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/enrollment/percent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tk3V9TPJEXbsiBBG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/courses/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x7rfzJKetzZIwuPX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/enrollment/learners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VT4u7O5omVViROkF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/enrollment/creators' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XLmDkXTsgqcS53tD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/enrollment/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iyjNALG7pMEt9LcZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/enrollment/mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6r8LwZlYzZld3zOJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/top-students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cfnnRNMJk9H5Hm44',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/top-creators' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vI0af3xvdII6w7QS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/demography/gender' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NnOIFLfNKVwARKyr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/analytics/top-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7lrO7I1JbvhBKPGv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3ftIkxu2myYCZmyw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NKjzCXKajGdLwSJd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/mentors/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OsPQrLDeoBFN0IZj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/mentors/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nl30YFBsMF9vphLS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/mentors/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2FGIQpMlmZFKiXtr',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/admin/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'events.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentors/availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'availability.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'availability.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentors/availabilities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fo2ZbUswP3ZZ27HH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentors/accepted-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IsvKvx08fjScRix7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentors/session-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BP1jsbdmyH0a1obe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentors/experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IWIYXePoXgX5BM0U',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentors/skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iQnSLjuWeJms0H7l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentors/accessability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XYoQHawC05oHlhlY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentors/number-of-mentees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xj0ry0lgn1mh0U6P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentors/mentor/profile/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bHlR8ejlZPNHAEPG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentees/bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XU3QoT3IucUvah9t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JDBfKRcT1nj41Xy1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentees/mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::StTSfGfjGqnr6o7U',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentees/available-mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jU8ds4R2DNiHqU1i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentees/my-mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N6pbMZ512i52Uo6B',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentees/session-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VvcI4U4oR7Yd9Fin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/mentees/number-of-mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CgHmoi4LHyjzRGXR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m0H6WjCthrL4bw1z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PPNS1kZBKpoNewDm',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::funrPgK2xhfyZOTB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K6CpzKycWoAWQBiQ',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/account/request-payout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3HuCH0QoPjmN9alN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WtdAtQuefb7akYBy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hdL72YDswUs0HxfE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/category/bulk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cAFyDeX2CRvPOEtd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/course' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HWiWz2InZ26CTCNJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f1kSf3d2LMHKHRh5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/course/buyers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ag65L9V7qyIBpb5C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/lesson' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5jZjYfJzyD6Qx4nL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PEiXSiTwtQprCUHc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/transaction/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lIvyy1HTSh4qW5Xu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/assignment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kQsVuPveCL2Rngni',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f4Ek8S3Q2sp6ym0u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/attachment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bTYQRDfU43SNyv7l',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bTv0bLNHt45QyBhO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/bank-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PhwAcFvonz0CW4YB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6MkCfAtbIEtFzYqJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/banking/paystack/listbank' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1B0gY7ni1NPBOca9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/banking/paystack/verify-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SNdikjvno84dbr0C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/banking/paystack/initialize-transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bThfgCauhgN6RmMy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/quiz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nGaDho2j2pAddfyr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gqAF2OTRDOTECXr5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lUkkFbxYWk2WjIRk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZlZ18ute4fX3Xkc1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EeQVpnzM4FNFGuXz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/question' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jrnz22FEwZrESvDt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JCZssLtdAxCVbnUH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/analytics/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DOIcK2No830aGp39',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/analytics/users-enrollment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Poa8lRbIxS6CnSQ7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/analytics/users-enrollment-year' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZbMm8RCxiM75WdOF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EPyLWMRWKfH0nm5l',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/media/aws' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LxPzWK52JUT8nOhG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/media/vimeo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N4G9DQUzngziUWRW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/paystack/create-subaccount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DHUkDXj42Tv07V2T',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/paystack/subaccounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3qG3v7n1V60cIR2w',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentees/bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YJeGA36RWRyb2nnH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tuVT9Y9kKY86EPuG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentees/mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QdfGuoQBP2DqBIGV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentees/available-mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FYRn5XH7D5rQ277G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentees/my-mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BTUdTubWlhqezQmt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentees/session-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Os8zCLUlzT2LZQsw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentees/number-of-mentors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pPHUOq9GOrqHRKWe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.availability.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.availability.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/mentees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XeqCXu7PBNHuCrIp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/availabilities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iFEaAV3joXBqE8au',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/accepted-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Uy03jXhhPcgGcxw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/session-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WayVtRlJhHw8HlFj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nDuqMQp0N2f7B5Vb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kUkjIl5sSlUtbeQO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/accessability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SCyEWSBuJ7hyrJfz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/number-of-mentees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8KcfMOpuOnRsqb9e',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/mentor/profile/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vHABh3GJKHtSJflR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentors/skill-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'skill-categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'skill-categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentor/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentor.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentor.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentee.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentee.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentor-projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JjCZsfVQgO2242FH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentee-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hS6BgdUYNUM82y3q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/mentor-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hwIOhGILNUjzlyVY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/mentorship/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bfOhE7M8eJrcgeKp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UMOwHasQPItQ7Hny',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/v1/(?|user/(?|a(?|uth/(?|reset\\-password/([^/]++)/([^/]++)(*:70)|complete\\-registration/([^/]++)/([^/]++)(*:117))|dmin/(?|users/(?|([^/]++)(?|(*:154)|/role\\-update(*:175))|role\\-update(*:196))|mentor(?|/(?|status/([^/]++)(*:233)|a(?|vailability/([^/]++)(*:265)|ccessability/([^/]++)(*:294)))|s/mentor/([^/]++)(*:321))|analytics/courses/([^/]++)/user(*:361)|course(?|s/([^/]++)(?|(*:391)|/(?|status(*:409)|lessons(*:424)))|/([^/]++)(*:443))|lessons/([^/]++)/status(*:475)|events/([^/]++)(?|(*:501)))|ssignment/([^/]++)(?|(*:532)|/submit(*:547)|(*:555))|ttachment/([^/]++)(?|(*:585)))|ment(?|or(?|/([^/]++)(?|(*:619)|/edit(*:632)|(*:640))|s/(?|availability/(?|([^/]++)(?|(*:681))|bookings(?|(*:701)|/([^/]++)(?|(*:721)|(*:729))))|mentee/profile/([^/]++)/review(?|(*:773)|/([^/]++)(?|(*:793)))|([^/]++)/profile/reviews(*:827)))|ee(?|/([^/]++)(?|/edit(*:859)|(*:867))|s/(?|bookings/([^/]++)(?|(*:901)|/mentor(*:916))|mentor/profile/([^/]++)/review(?|(*:958)|/([^/]++)(?|(*:978)))|([^/]++)/profile/reviews(*:1012)|mentee/profile/reviews(*:1043))))|event/([^/]++)(*:1069)|c(?|ategory/([^/]++)(?|(*:1101))|ourse/(?|c(?|reate\\-course\\-with\\-ai/([^/]++)(*:1156)|ourses/([^/]++)/(?|modules(*:1191)|flashcards(*:1210)|quizzes(*:1226)|lessons(*:1242)))|([^/]++)(*:1261)|ai/([^/]++)(*:1281)|([^/]++)(?|/subscribe(*:1311)|(*:1320))))|lesson/([^/]++)(?|(*:1350)|/(?|list(*:1367)|seen(*:1380)|update(*:1395))|(*:1405))|transaction/([^/]++)(?|(*:1438)|/(?|payout(*:1457)|verify\\-payout\\-otp(*:1485)))|bank\\-account/([^/]++)(?|(*:1521))|qu(?|iz/(?|([^/]++)(?|(*:1553)|/submit(*:1569)|(*:1578))|lesson/([^/]++)(*:1603))|estion/([^/]++)(?|(*:1631)))|review/([^/]++)(?|(*:1660))|user/([^/]++)(?|(*:1686)))|mentorship/(?|ment(?|ee(?|s/(?|bookings/([^/]++)(?|(*:1748)|/mentor(*:1764))|mentor/profile/([^/]++)/review(?|(*:1807)|/([^/]++)(?|(*:1828)))|([^/]++)/profile/reviews(*:1863)|mentee/profile/reviews(*:1894))|/([^/]++)(?|/edit(*:1921)|(*:1930)))|or(?|s/(?|availability/(?|([^/]++)(?|(*:1978))|bookings(?|(*:1999)|/([^/]++)(?|(*:2020)|(*:2029))))|mentee/profile/([^/]++)/review(?|(*:2074)|/([^/]++)(?|(*:2095)))|([^/]++)/profile/reviews(*:2130)|skill\\-categories/([^/]++)(?|(*:2168)))|/([^/]++)(?|(*:2191)|/edit(*:2205)|(*:2214))))|event/([^/]++)(*:2240))))/?$}sDu',
    ),
    3 => 
    array (
      70 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aCxRzklpKaAqgPNb',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gKsi77GjBWCTSWkE',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      154 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cDJZVZ2L0uqZnUur',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jCPj9sN0K2ysseTK',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5KUYxoZjC2PZGNn1',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ms6Q2JHQTdbcqxP6',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u9rlPd6lNNScLPJk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vSPjwYBi7anLFKlv',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LxREo3o3XRTHObd9',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VFatHEdeizv98Eko',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dbaXW5jIKwVTN9Mf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cnu2p7UqZu82zkVS',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EghFM9bJy0k57klb',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TQFRtrFth8zNYf3O',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iuLIk40H29Cpkzcv',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Flmnx5oguBtAqW9d',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jPCx8FsEML9vpScX',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events.show',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'events.update',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'events.destroy',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      532 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sz66PMO0jIGDEDoD',
          ),
          1 => 
          array (
            0 => 'assignment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yEoSL8t7iVmMfzPG',
          ),
          1 => 
          array (
            0 => 'assignment',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uU44qLoKaL7JDTIa',
          ),
          1 => 
          array (
            0 => 'assignment',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6xDQsaXOolbuYTwY',
          ),
          1 => 
          array (
            0 => 'assignment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QNxASZoNPKbxnUcn',
          ),
          1 => 
          array (
            0 => 'attachment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dgRtWV0LpBTLXkKt',
          ),
          1 => 
          array (
            0 => 'attachment',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K49QpE1dpaZHVPkf',
          ),
          1 => 
          array (
            0 => 'attachment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentor.show',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentor.edit',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentor.update',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mentor.destroy',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'availability.update',
          ),
          1 => 
          array (
            0 => 'availability',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'availability.destroy',
          ),
          1 => 
          array (
            0 => 'availability',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hvzkrrxpysvajx10',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3HpZc0WqD9RXEkUU',
          ),
          1 => 
          array (
            0 => 'booking',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ir18E9uXdnhbqEjw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1Gk8RGKbShvBzTQK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DhHqFvicSSoYF8Ns',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'userReview',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ml1FwEJBExsYOLcn',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'userReview',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L9U2WwTmZY2juxcm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentee.edit',
          ),
          1 => 
          array (
            0 => 'mentee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      867 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentee.update',
          ),
          1 => 
          array (
            0 => 'mentee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mentee.destroy',
          ),
          1 => 
          array (
            0 => 'mentee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      901 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O5izNPK57Ka8JYzB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cFRxALZ0Oe6OSivH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WV9X7UZFYxDxxeCl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7zOMp8maHXf7HNhH',
          ),
          1 => 
          array (
            0 => 'bookingId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bSNS6fZHP6XiBbnu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TO5nZ9VICYqSM3Pu',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'userReview',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9TJJTgMccioXbnAE',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'userReview',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wHEeU8WLVKNjbGDB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fvD6Y5EyyqAoaqVk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1069 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kkvc2EN9jEpDKcBa',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LDhTCyyX9rXufXrY',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RxVN99yrhQNoKB6A',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dtUe80uNFRHsFsBk',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uOIMQa0Bqkfk2hSq',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0FsLPmUi3uF2V9vL',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qSLCS24ClNdaBg4m',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r5mMPuCMMfI07MdU',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vfdOpCS4hNtRAb7o',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A1vnemZTOLd4R8Nk',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::77xWZMqeLPUjmyGh',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b6hVheiBVrI7vV68',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DZditdwEVqZReF6U',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dfWERwxEsLGdYK8G',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uFCtkGocRIepjgwR',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YyLWgkr3STCeEFnP',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aFGKu25n9dlgrtSz',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BYM6KXCQQvgUHFsV',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pXQUMQ30s9l5BMDO',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ojR5dwwbxvsfyb3i',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5v5zrqKcmcxFLw0J',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LTFVJQw2rah09ZmV',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fsDWp2L1uMlICOyt',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BIL5BrhMkAV5qqEd',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NLMOvtzChzT7F3hT',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sIqjIXVA1bPCbZfB',
          ),
          1 => 
          array (
            0 => 'bankAccount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f8OfEtMcNDmiPrOZ',
          ),
          1 => 
          array (
            0 => 'bankAccount',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RqUA5Bj8lhuIrU5L',
          ),
          1 => 
          array (
            0 => 'bankAccount',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cGvRDiO1b8Mm2Qna',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YVR2JFTHYRtJhkBM',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ercy3hdyNGK1Z0pu',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mB5S0u7PaeRDJ6bG',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jIeyZNFWjVO1IYu6',
          ),
          1 => 
          array (
            0 => 'lesson',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iGANDMhpEUW12K50',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l34fIZzkvhMJQyDp',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8ch9trjiaHw3lB1q',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1hE3mIBBy5if5pzU',
          ),
          1 => 
          array (
            0 => 'review',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Aj8Jh6qkXMBmqll4',
          ),
          1 => 
          array (
            0 => 'review',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CyyyeiDAcL8hzzMq',
          ),
          1 => 
          array (
            0 => 'review',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1E5iq1lg5ORkqfwb',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DphBvSnbmgy5WkuN',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kHkKceoVudbBzmMz',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j91BJJIyZbxMWk38',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FJF8Ujr2i0d7QNa2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZoytoHWjRYWT4sK7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1764 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7MniTujvLL7uhMUz',
          ),
          1 => 
          array (
            0 => 'bookingId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1807 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EqAz5VLTb6ta0jgW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HYHenEX7jX4luCQk',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'userReview',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n89RP4DPmk4JQFx8',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'userReview',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xxIVI4UUAXMNGnUS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aMduataxOI2f2VLq',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentee.edit',
          ),
          1 => 
          array (
            0 => 'mentee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentee.update',
          ),
          1 => 
          array (
            0 => 'mentee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentee.destroy',
          ),
          1 => 
          array (
            0 => 'mentee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.availability.update',
          ),
          1 => 
          array (
            0 => 'availability',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.availability.destroy',
          ),
          1 => 
          array (
            0 => 'availability',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vP92znCjUbZUlmuD',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rqiNUUNYOXJiD4Nk',
          ),
          1 => 
          array (
            0 => 'booking',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sH5nt4ixk9L9Ja6I',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YjsbISfUlrZupzv9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HpaOyGtyri4QXi8X',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'userReview',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IvtQhDgBHikHAcHP',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'userReview',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ImVf2h1OZPhM7EV7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'skill-categories.show',
          ),
          1 => 
          array (
            0 => 'skill_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'skill-categories.update',
          ),
          1 => 
          array (
            0 => 'skill_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'skill-categories.destroy',
          ),
          1 => 
          array (
            0 => 'skill_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentor.show',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentor.edit',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentor.update',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentor.destroy',
          ),
          1 => 
          array (
            0 => 'mentor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CJyFu79SUuxjsLG3',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QhXpAy3EfBOfJvXi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003ff0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QhXpAy3EfBOfJvXi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ru5GMPU2h3GOZjaF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/paystack-hook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\WebhooksManager@paymentWebhook',
        'controller' => 'App\\Http\\Controllers\\WebhooksManager@paymentWebhook',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ru5GMPU2h3GOZjaF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WQJvUjwZE4MA163g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/flw-hook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\WebhooksManager@flwWebhook',
        'controller' => 'App\\Http\\Controllers\\WebhooksManager@flwWebhook',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WQJvUjwZE4MA163g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PbCUuYPh3NErKxRP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AuthManager@login',
        'controller' => 'App\\Http\\Controllers\\User\\AuthManager@login',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::PbCUuYPh3NErKxRP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NdSHuvOZQbGqH2Ru' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AuthManager@register',
        'controller' => 'App\\Http\\Controllers\\User\\AuthManager@register',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::NdSHuvOZQbGqH2Ru',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jtq1n7ZwvMgVipRv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/auth/admin/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthManager@register',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthManager@register',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::jtq1n7ZwvMgVipRv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5WuQCkMrXOQhCUY2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/auth/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AuthManager@forgot',
        'controller' => 'App\\Http\\Controllers\\User\\AuthManager@forgot',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::5WuQCkMrXOQhCUY2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aCxRzklpKaAqgPNb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/auth/reset-password/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AuthManager@resetPassword',
        'controller' => 'App\\Http\\Controllers\\User\\AuthManager@resetPassword',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::aCxRzklpKaAqgPNb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'user' => 'email',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gKsi77GjBWCTSWkE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/auth/complete-registration/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AuthManager@completeRegistration',
        'controller' => 'App\\Http\\Controllers\\User\\AuthManager@completeRegistration',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::gKsi77GjBWCTSWkE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'user' => 'email',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F6sK75eRLwDjkkGU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/auth/regenerate-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AuthManager@regenerateToken',
        'controller' => 'App\\Http\\Controllers\\User\\AuthManager@regenerateToken',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::F6sK75eRLwDjkkGU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aWNvW0VJOpg6Kh50' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::aWNvW0VJOpg6Kh50',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Pje9UqMuY0yOmz8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/notifications/mark-as-read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@markNotification',
        'controller' => 'App\\Http\\Controllers\\NotificationController@markNotification',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::6Pje9UqMuY0yOmz8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentor.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentor/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentor.create',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@create',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@create',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentor.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentor.store',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@store',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentor.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentor/{mentor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentor.show',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@show',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentor.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentor/{mentor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentor.edit',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@edit',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@edit',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentor.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/user/mentor/{mentor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentor.update',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@update',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentor.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/mentor/{mentor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentor.destroy',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@destroy',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentee.create',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@create',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@create',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentee.store',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@store',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentee.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentee/{mentee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentee.edit',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@edit',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@edit',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentee.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/user/mentee/{mentee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentee.update',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@update',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentee.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/mentee/{mentee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'mentee.destroy',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@destroy',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xFqgE53Ow7hfj54D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentee-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@showProfile',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@showProfile',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::xFqgE53Ow7hfj54D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UbhxmUft02ZOUKuV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentor-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@showProfile',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@showProfile',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UbhxmUft02ZOUKuV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bHFT9Rj5JaQ7PvUP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\EventController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::bHFT9Rj5JaQ7PvUP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kkvc2EN9jEpDKcBa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/event/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@show',
        'controller' => 'App\\Http\\Controllers\\EventController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Kkvc2EN9jEpDKcBa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5s9V3VVnwOVcgBxy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/settings/profile/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5s9V3VVnwOVcgBxy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::igUbkdetl9qnfRtG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/settings/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@changePassword',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::igUbkdetl9qnfRtG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LaeOHkriew0ppKDb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/settings/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@features',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@features',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LaeOHkriew0ppKDb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MGpP4M1sdDBN8Jwu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/settings/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@createOrUpdateFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@createOrUpdateFeatures',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MGpP4M1sdDBN8Jwu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Mhms30gc1JVJluf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/settings/notification/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Notification\\FeatureController@notifyFeature',
        'controller' => 'App\\Http\\Controllers\\Notification\\FeatureController@notifyFeature',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6Mhms30gc1JVJluf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZiLZsk7NKRJzyUnP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@users',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@users',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZiLZsk7NKRJzyUnP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QVQWO683gm1JJprP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users/recent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@recentUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@recentUsers',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QVQWO683gm1JJprP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3FyYpvK3zvbjym8V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/user-page/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@count',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@count',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3FyYpvK3zvbjym8V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MxngZKpV6xSmObzn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users/learners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@learners',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@learners',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MxngZKpV6xSmObzn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nqWMuDlWEnwd2aJX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users/learners/recent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@recentLearners',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@recentLearners',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::nqWMuDlWEnwd2aJX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vHTq2gaeaZwtvXFv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users/creators',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@creators',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@creators',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vHTq2gaeaZwtvXFv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v6OwTXDCqCY6CpMu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users/creators/recent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@recentCreators',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@recentCreators',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::v6OwTXDCqCY6CpMu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G7JyHbqGRUmJpWed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@usersExport',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@usersExport',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::G7JyHbqGRUmJpWed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OJgLapui2uMrBwVz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users/learners/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@learnersExport',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@learnersExport',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OJgLapui2uMrBwVz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jkQ0SkoI6A7DR3eK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users/creators/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@creatorsExport',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@creatorsExport',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jkQ0SkoI6A7DR3eK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cDJZVZ2L0uqZnUur' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cDJZVZ2L0uqZnUur',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jCPj9sN0K2ysseTK' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jCPj9sN0K2ysseTK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5KUYxoZjC2PZGNn1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\UserManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5KUYxoZjC2PZGNn1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ms6Q2JHQTdbcqxP6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/users/{user}/role-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthManager@updateUserRole',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthManager@updateUserRole',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ms6Q2JHQTdbcqxP6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u9rlPd6lNNScLPJk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/users/role-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthManager@updateUsersRoles',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthManager@updateUsersRoles',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::u9rlPd6lNNScLPJk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LXsqadH7TSE270bV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/admin/users-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@usersDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@usersDelete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LXsqadH7TSE270bV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bwCUHs4i16qB36Qq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/users/create/learner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@createLearner',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@createLearner',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bwCUHs4i16qB36Qq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2xHzVfmrmKJ6EvQb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/users/create/creator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@createCreator',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@createCreator',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2xHzVfmrmKJ6EvQb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yA64Iu9CLbEuhqi5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yA64Iu9CLbEuhqi5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QXuBgkWw6qjfnoNU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MentorController@getMentorSearch',
        'controller' => 'App\\Http\\Controllers\\Admin\\MentorController@getMentorSearch',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QXuBgkWw6qjfnoNU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vSPjwYBi7anLFKlv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/mentor/status/{mentor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@updateMentorStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@updateMentorStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vSPjwYBi7anLFKlv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LxREo3o3XRTHObd9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/mentor/availability/{mentor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@setMentorAvailability',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@setMentorAvailability',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LxREo3o3XRTHObd9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VFatHEdeizv98Eko' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/mentor/accessability/{mentor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@setMentorAccessability',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@setMentorAccessability',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VFatHEdeizv98Eko',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YNUJ2PkMBUDZOlpq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/transactions/recent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YNUJ2PkMBUDZOlpq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2bCjJroW2EmJdvn8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/transactions/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionController@balance',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionController@balance',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2bCjJroW2EmJdvn8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9WMKK6pIVTRn6931' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/users/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@userCount',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@userCount',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9WMKK6pIVTRn6931',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tk3V9TPJEXbsiBBG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/enrollment/percent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@enrollmentPercentage',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@enrollmentPercentage',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Tk3V9TPJEXbsiBBG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x7rfzJKetzZIwuPX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/courses/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@coursesCount',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@coursesCount',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::x7rfzJKetzZIwuPX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VT4u7O5omVViROkF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/enrollment/learners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@enrollmentCountPerMonth',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@enrollmentCountPerMonth',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VT4u7O5omVViROkF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XLmDkXTsgqcS53tD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/enrollment/creators',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@creatorsEnrollmentCountPerMonth',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@creatorsEnrollmentCountPerMonth',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XLmDkXTsgqcS53tD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iyjNALG7pMEt9LcZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/enrollment/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@userEnrollmentCountPerMonth',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@userEnrollmentCountPerMonth',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iyjNALG7pMEt9LcZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6r8LwZlYzZld3zOJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/enrollment/mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@mentorEnrollmentCountPerMonth',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@mentorEnrollmentCountPerMonth',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6r8LwZlYzZld3zOJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cfnnRNMJk9H5Hm44' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/top-students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@usersByLessonsTaken',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@usersByLessonsTaken',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cfnnRNMJk9H5Hm44',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vI0af3xvdII6w7QS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/top-creators',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@usersByCoursesCreated',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@usersByCoursesCreated',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vI0af3xvdII6w7QS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NnOIFLfNKVwARKyr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/demography/gender',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@demography',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@demography',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NnOIFLfNKVwARKyr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cnu2p7UqZu82zkVS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/courses/{course}/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@courseUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@courseUsers',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cnu2p7UqZu82zkVS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7lrO7I1JbvhBKPGv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/analytics/top-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@showTopCourses',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticsController@showTopCourses',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7lrO7I1JbvhBKPGv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ftIkxu2myYCZmyw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CourseController@getCategories',
        'controller' => 'App\\Http\\Controllers\\Admin\\CourseController@getCategories',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3ftIkxu2myYCZmyw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NKjzCXKajGdLwSJd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstituteController@courses',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstituteController@courses',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NKjzCXKajGdLwSJd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EghFM9bJy0k57klb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/courses/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CourseController@getCourses',
        'controller' => 'App\\Http\\Controllers\\Admin\\CourseController@getCourses',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EghFM9bJy0k57klb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TQFRtrFth8zNYf3O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/courses/{course}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CourseController@flagCourse',
        'controller' => 'App\\Http\\Controllers\\Admin\\CourseController@flagCourse',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TQFRtrFth8zNYf3O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Flmnx5oguBtAqW9d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/course/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CourseController@getCourse',
        'controller' => 'App\\Http\\Controllers\\Admin\\CourseController@getCourse',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Flmnx5oguBtAqW9d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jPCx8FsEML9vpScX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/lessons/{lesson}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CourseController@flagLesson',
        'controller' => 'App\\Http\\Controllers\\Admin\\CourseController@flagLesson',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jPCx8FsEML9vpScX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iuLIk40H29Cpkzcv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/courses/{course}/lessons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CourseController@getLessons',
        'controller' => 'App\\Http\\Controllers\\Admin\\CourseController@getLessons',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iuLIk40H29Cpkzcv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OsPQrLDeoBFN0IZj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/mentors/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MentorController@getPendingMentors',
        'controller' => 'App\\Http\\Controllers\\Admin\\MentorController@getPendingMentors',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OsPQrLDeoBFN0IZj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dbaXW5jIKwVTN9Mf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/mentors/mentor/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MentorController@getMentor',
        'controller' => 'App\\Http\\Controllers\\Admin\\MentorController@getMentor',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dbaXW5jIKwVTN9Mf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nl30YFBsMF9vphLS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/mentors/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MentorController@mentorsExport',
        'controller' => 'App\\Http\\Controllers\\Admin\\MentorController@mentorsExport',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Nl30YFBsMF9vphLS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2FGIQpMlmZFKiXtr' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/admin/mentors/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MentorController@deleteMentors',
        'controller' => 'App\\Http\\Controllers\\Admin\\MentorController@deleteMentors',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2FGIQpMlmZFKiXtr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'as' => 'events.index',
        'uses' => 'App\\Http\\Controllers\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\EventController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'as' => 'events.store',
        'uses' => 'App\\Http\\Controllers\\EventController@store',
        'controller' => 'App\\Http\\Controllers\\EventController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'as' => 'events.show',
        'uses' => 'App\\Http\\Controllers\\EventController@show',
        'controller' => 'App\\Http\\Controllers\\EventController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/user/admin/events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'as' => 'events.update',
        'uses' => 'App\\Http\\Controllers\\EventController@update',
        'controller' => 'App\\Http\\Controllers\\EventController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/admin/events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.admin.access',
        ),
        'as' => 'events.destroy',
        'uses' => 'App\\Http\\Controllers\\EventController@destroy',
        'controller' => 'App\\Http\\Controllers\\EventController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'availability.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentors/availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'availability.index',
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@index',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'availability.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentors/availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'availability.store',
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@store',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'availability.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/user/mentors/availability/{availability}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'availability.update',
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@update',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'availability.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/mentors/availability/{availability}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'as' => 'availability.destroy',
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fo2ZbUswP3ZZ27HH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentors/availabilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:123:"function () {
                return \\response()->json([\'message\' => \'Testing availability index endpoint\']);
            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008120000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::Fo2ZbUswP3ZZ27HH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hvzkrrxpysvajx10' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentors/availability/bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@booking',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@booking',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::Hvzkrrxpysvajx10',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3HpZc0WqD9RXEkUU' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/mentors/availability/bookings/{booking}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@updateStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::3HpZc0WqD9RXEkUU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ir18E9uXdnhbqEjw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentors/availability/bookings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@getBooking',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@getBooking',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::Ir18E9uXdnhbqEjw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IsvKvx08fjScRix7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentors/accepted-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getAcceptedBookings',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getAcceptedBookings',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::IsvKvx08fjScRix7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BP1jsbdmyH0a1obe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentors/session-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionsManager@sessions',
        'controller' => 'App\\Http\\Controllers\\SessionsManager@sessions',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::BP1jsbdmyH0a1obe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IWIYXePoXgX5BM0U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentors/experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createExperience',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createExperience',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::IWIYXePoXgX5BM0U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iQnSLjuWeJms0H7l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentors/skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createSkills',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createSkills',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::iQnSLjuWeJms0H7l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XYoQHawC05oHlhlY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentors/accessability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createAccessability',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createAccessability',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::XYoQHawC05oHlhlY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xj0ry0lgn1mh0U6P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentors/number-of-mentees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@countMentees',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@countMentees',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::xj0ry0lgn1mh0U6P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1Gk8RGKbShvBzTQK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentors/mentee/profile/{id}/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@store',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::1Gk8RGKbShvBzTQK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DhHqFvicSSoYF8Ns' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/user/mentors/mentee/profile/{id}/review/{userReview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@update',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::DhHqFvicSSoYF8Ns',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ml1FwEJBExsYOLcn' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/mentors/mentee/profile/{id}/review/{userReview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::ml1FwEJBExsYOLcn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bHlR8ejlZPNHAEPG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentors/mentor/profile/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@fetchMentorReviews',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@fetchMentorReviews',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::bHlR8ejlZPNHAEPG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L9U2WwTmZY2juxcm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentors/{id}/profile/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@fetchMentorReview',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@fetchMentorReview',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::L9U2WwTmZY2juxcm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XU3QoT3IucUvah9t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@index',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::XU3QoT3IucUvah9t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JDBfKRcT1nj41Xy1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentees/bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@storeOrUpdate',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@storeOrUpdate',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::JDBfKRcT1nj41Xy1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O5izNPK57Ka8JYzB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/bookings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@show',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::O5izNPK57Ka8JYzB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cFRxALZ0Oe6OSivH' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/user/mentees/bookings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@update',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::cFRxALZ0Oe6OSivH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WV9X7UZFYxDxxeCl' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/mentees/bookings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@destroy',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::WV9X7UZFYxDxxeCl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::StTSfGfjGqnr6o7U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@index',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::StTSfGfjGqnr6o7U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jU8ds4R2DNiHqU1i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/available-mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getAvailableMentorsAtCurrentTime',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getAvailableMentorsAtCurrentTime',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::jU8ds4R2DNiHqU1i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N6pbMZ512i52Uo6B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/my-mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentors',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentors',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::N6pbMZ512i52Uo6B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7zOMp8maHXf7HNhH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/bookings/{bookingId}/mentor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentor',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentor',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::7zOMp8maHXf7HNhH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VvcI4U4oR7Yd9Fin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/session-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionsManager@sessions',
        'controller' => 'App\\Http\\Controllers\\SessionsManager@sessions',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::VvcI4U4oR7Yd9Fin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CgHmoi4LHyjzRGXR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/number-of-mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@countMentors',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@countMentors',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::CgHmoi4LHyjzRGXR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bSNS6fZHP6XiBbnu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentees/mentor/profile/{id}/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@store',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::bSNS6fZHP6XiBbnu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TO5nZ9VICYqSM3Pu' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/user/mentees/mentor/profile/{id}/review/{userReview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@update',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::TO5nZ9VICYqSM3Pu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9TJJTgMccioXbnAE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/mentees/mentor/profile/{id}/review/{userReview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::9TJJTgMccioXbnAE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wHEeU8WLVKNjbGDB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/{id}/profile/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@fetchMenteeReview',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@fetchMenteeReview',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::wHEeU8WLVKNjbGDB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fvD6Y5EyyqAoaqVk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/mentees/mentee/profile/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@fetchMenteeReviews',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@fetchMenteeReviews',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::fvD6Y5EyyqAoaqVk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m0H6WjCthrL4bw1z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'excluded_middleware' => 
        array (
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DetailManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\DetailManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/account',
        'where' => 
        array (
        ),
        'as' => 'generated::m0H6WjCthrL4bw1z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PPNS1kZBKpoNewDm' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'excluded_middleware' => 
        array (
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DetailManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\DetailManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/account',
        'where' => 
        array (
        ),
        'as' => 'generated::PPNS1kZBKpoNewDm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::funrPgK2xhfyZOTB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'excluded_middleware' => 
        array (
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DetailManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\DetailManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/account',
        'where' => 
        array (
        ),
        'as' => 'generated::funrPgK2xhfyZOTB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K6CpzKycWoAWQBiQ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'excluded_middleware' => 
        array (
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DetailManager@deleteAccount',
        'controller' => 'App\\Http\\Controllers\\User\\DetailManager@deleteAccount',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/account',
        'where' => 
        array (
        ),
        'as' => 'generated::K6CpzKycWoAWQBiQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3HuCH0QoPjmN9alN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/account/request-payout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'excluded_middleware' => 
        array (
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DetailManager@requestPayout',
        'controller' => 'App\\Http\\Controllers\\User\\DetailManager@requestPayout',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/account',
        'where' => 
        array (
        ),
        'as' => 'generated::3HuCH0QoPjmN9alN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WtdAtQuefb7akYBy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CategoryManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\CategoryManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/category',
        'where' => 
        array (
        ),
        'as' => 'generated::WtdAtQuefb7akYBy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hdL72YDswUs0HxfE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CategoryManager@store',
        'controller' => 'App\\Http\\Controllers\\User\\CategoryManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/category',
        'where' => 
        array (
        ),
        'as' => 'generated::hdL72YDswUs0HxfE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cAFyDeX2CRvPOEtd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/category/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CategoryManager@bulkCreate',
        'controller' => 'App\\Http\\Controllers\\User\\CategoryManager@bulkCreate',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/category',
        'where' => 
        array (
        ),
        'as' => 'generated::cAFyDeX2CRvPOEtd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LDhTCyyX9rXufXrY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CategoryManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\CategoryManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/category',
        'where' => 
        array (
        ),
        'as' => 'generated::LDhTCyyX9rXufXrY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RxVN99yrhQNoKB6A' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
          5 => 'auth.learner.access',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CategoryManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\CategoryManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/category',
        'where' => 
        array (
        ),
        'as' => 'generated::RxVN99yrhQNoKB6A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dtUe80uNFRHsFsBk' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
          5 => 'auth.learner.access',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CategoryManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\CategoryManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/category',
        'where' => 
        array (
        ),
        'as' => 'generated::dtUe80uNFRHsFsBk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HWiWz2InZ26CTCNJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::HWiWz2InZ26CTCNJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ag65L9V7qyIBpb5C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/course/buyers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@buyers',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@buyers',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::ag65L9V7qyIBpb5C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f1kSf3d2LMHKHRh5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@store',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::f1kSf3d2LMHKHRh5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uOIMQa0Bqkfk2hSq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/course/create-course-with-ai/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@createCourseWithAI',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@createCourseWithAI',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::uOIMQa0Bqkfk2hSq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0FsLPmUi3uF2V9vL' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/user/course/courses/{course}/modules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@updateCourseModule',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@updateCourseModule',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::0FsLPmUi3uF2V9vL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qSLCS24ClNdaBg4m' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/user/course/courses/{course}/flashcards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@updateFlashcardModule',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@updateFlashcardModule',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::qSLCS24ClNdaBg4m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r5mMPuCMMfI07MdU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/user/course/courses/{course}/quizzes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@updateQuizModule',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@updateQuizModule',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::r5mMPuCMMfI07MdU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vfdOpCS4hNtRAb7o' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/user/course/courses/{course}/lessons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@updateLessonModule',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@updateLessonModule',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::vfdOpCS4hNtRAb7o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A1vnemZTOLd4R8Nk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/course/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::A1vnemZTOLd4R8Nk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::77xWZMqeLPUjmyGh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/course/ai/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@viewAICourse',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@viewAICourse',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::77xWZMqeLPUjmyGh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b6hVheiBVrI7vV68' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/course/{course}/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
          5 => 'auth.learner.access',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@subscribe',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@subscribe',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::b6hVheiBVrI7vV68',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DZditdwEVqZReF6U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/course/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::DZditdwEVqZReF6U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dfWERwxEsLGdYK8G' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/course/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CourseManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\CourseManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/course',
        'where' => 
        array (
        ),
        'as' => 'generated::dfWERwxEsLGdYK8G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5jZjYfJzyD6Qx4nL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/lesson',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LessonManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\LessonManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/lesson',
        'where' => 
        array (
        ),
        'as' => 'generated::5jZjYfJzyD6Qx4nL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uFCtkGocRIepjgwR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/lesson/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LessonManager@store',
        'controller' => 'App\\Http\\Controllers\\User\\LessonManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/lesson',
        'where' => 
        array (
        ),
        'as' => 'generated::uFCtkGocRIepjgwR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YyLWgkr3STCeEFnP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/lesson/{course}/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LessonManager@storeList',
        'controller' => 'App\\Http\\Controllers\\User\\LessonManager@storeList',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/lesson',
        'where' => 
        array (
        ),
        'as' => 'generated::YyLWgkr3STCeEFnP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pXQUMQ30s9l5BMDO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/lesson/{lesson}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LessonManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\LessonManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/lesson',
        'where' => 
        array (
        ),
        'as' => 'generated::pXQUMQ30s9l5BMDO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aFGKu25n9dlgrtSz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/lesson/{lesson}/seen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
          5 => 'auth.learner.access',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LessonManager@seen',
        'controller' => 'App\\Http\\Controllers\\User\\LessonManager@seen',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/lesson',
        'where' => 
        array (
        ),
        'as' => 'generated::aFGKu25n9dlgrtSz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BYM6KXCQQvgUHFsV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/lesson/{lesson}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LessonManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\LessonManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/lesson',
        'where' => 
        array (
        ),
        'as' => 'generated::BYM6KXCQQvgUHFsV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ojR5dwwbxvsfyb3i' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/lesson/{lesson}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LessonManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\LessonManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/lesson',
        'where' => 
        array (
        ),
        'as' => 'generated::ojR5dwwbxvsfyb3i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PEiXSiTwtQprCUHc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TransactionManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/transaction',
        'where' => 
        array (
        ),
        'as' => 'generated::PEiXSiTwtQprCUHc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lIvyy1HTSh4qW5Xu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/transaction/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TransactionManager@indexAll',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionManager@indexAll',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/transaction',
        'where' => 
        array (
        ),
        'as' => 'generated::lIvyy1HTSh4qW5Xu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5v5zrqKcmcxFLw0J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/transaction/{transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TransactionManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/transaction',
        'where' => 
        array (
        ),
        'as' => 'generated::5v5zrqKcmcxFLw0J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LTFVJQw2rah09ZmV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/transaction/{transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TransactionManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/transaction',
        'where' => 
        array (
        ),
        'as' => 'generated::LTFVJQw2rah09ZmV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fsDWp2L1uMlICOyt' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/transaction/{transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TransactionManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/transaction',
        'where' => 
        array (
        ),
        'as' => 'generated::fsDWp2L1uMlICOyt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BIL5BrhMkAV5qqEd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/transaction/{transaction}/payout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TransactionManager@makePayout',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionManager@makePayout',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/transaction',
        'where' => 
        array (
        ),
        'as' => 'generated::BIL5BrhMkAV5qqEd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NLMOvtzChzT7F3hT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/transaction/{transaction}/verify-payout-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TransactionManager@verifyOTPPayout',
        'controller' => 'App\\Http\\Controllers\\User\\TransactionManager@verifyOTPPayout',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/transaction',
        'where' => 
        array (
        ),
        'as' => 'generated::NLMOvtzChzT7F3hT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kQsVuPveCL2Rngni' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/assignment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AssignmentManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\AssignmentManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/assignment',
        'where' => 
        array (
        ),
        'as' => 'generated::kQsVuPveCL2Rngni',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f4Ek8S3Q2sp6ym0u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/assignment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AssignmentManager@store',
        'controller' => 'App\\Http\\Controllers\\User\\AssignmentManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/assignment',
        'where' => 
        array (
        ),
        'as' => 'generated::f4Ek8S3Q2sp6ym0u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sz66PMO0jIGDEDoD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/assignment/{assignment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AssignmentManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\AssignmentManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/assignment',
        'where' => 
        array (
        ),
        'as' => 'generated::Sz66PMO0jIGDEDoD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yEoSL8t7iVmMfzPG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/assignment/{assignment}/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
          5 => 'auth.learner.access',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AssignmentManager@submit',
        'controller' => 'App\\Http\\Controllers\\User\\AssignmentManager@submit',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/assignment',
        'where' => 
        array (
        ),
        'as' => 'generated::yEoSL8t7iVmMfzPG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uU44qLoKaL7JDTIa' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/assignment/{assignment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AssignmentManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\AssignmentManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/assignment',
        'where' => 
        array (
        ),
        'as' => 'generated::uU44qLoKaL7JDTIa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6xDQsaXOolbuYTwY' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/assignment/{assignment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AssignmentManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\AssignmentManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/assignment',
        'where' => 
        array (
        ),
        'as' => 'generated::6xDQsaXOolbuYTwY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bTYQRDfU43SNyv7l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/attachment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AttachmentManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\AttachmentManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/attachment',
        'where' => 
        array (
        ),
        'as' => 'generated::bTYQRDfU43SNyv7l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bTv0bLNHt45QyBhO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/attachment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AttachmentManager@store',
        'controller' => 'App\\Http\\Controllers\\User\\AttachmentManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/attachment',
        'where' => 
        array (
        ),
        'as' => 'generated::bTv0bLNHt45QyBhO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QNxASZoNPKbxnUcn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/attachment/{attachment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AttachmentManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\AttachmentManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/attachment',
        'where' => 
        array (
        ),
        'as' => 'generated::QNxASZoNPKbxnUcn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dgRtWV0LpBTLXkKt' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/attachment/{attachment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AttachmentManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\AttachmentManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/attachment',
        'where' => 
        array (
        ),
        'as' => 'generated::dgRtWV0LpBTLXkKt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K49QpE1dpaZHVPkf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/attachment/{attachment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AttachmentManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\AttachmentManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/attachment',
        'where' => 
        array (
        ),
        'as' => 'generated::K49QpE1dpaZHVPkf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PhwAcFvonz0CW4YB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/bank-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BankAccountManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\BankAccountManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/bank-account',
        'where' => 
        array (
        ),
        'as' => 'generated::PhwAcFvonz0CW4YB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6MkCfAtbIEtFzYqJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/bank-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BankAccountManager@store',
        'controller' => 'App\\Http\\Controllers\\User\\BankAccountManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/bank-account',
        'where' => 
        array (
        ),
        'as' => 'generated::6MkCfAtbIEtFzYqJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sIqjIXVA1bPCbZfB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/bank-account/{bankAccount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BankAccountManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\BankAccountManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/bank-account',
        'where' => 
        array (
        ),
        'as' => 'generated::sIqjIXVA1bPCbZfB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f8OfEtMcNDmiPrOZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/bank-account/{bankAccount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BankAccountManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\BankAccountManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/bank-account',
        'where' => 
        array (
        ),
        'as' => 'generated::f8OfEtMcNDmiPrOZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RqUA5Bj8lhuIrU5L' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/bank-account/{bankAccount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BankAccountManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\BankAccountManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/bank-account',
        'where' => 
        array (
        ),
        'as' => 'generated::RqUA5Bj8lhuIrU5L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1B0gY7ni1NPBOca9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/banking/paystack/listbank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaystackManager@allBanks',
        'controller' => 'App\\Http\\Controllers\\User\\PaystackManager@allBanks',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/banking/paystack',
        'where' => 
        array (
        ),
        'as' => 'generated::1B0gY7ni1NPBOca9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SNdikjvno84dbr0C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/banking/paystack/verify-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaystackManager@verifyAccount',
        'controller' => 'App\\Http\\Controllers\\User\\PaystackManager@verifyAccount',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/banking/paystack',
        'where' => 
        array (
        ),
        'as' => 'generated::SNdikjvno84dbr0C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bThfgCauhgN6RmMy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/banking/paystack/initialize-transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaystackManager@initializeTransaction',
        'controller' => 'App\\Http\\Controllers\\User\\PaystackManager@initializeTransaction',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/banking/paystack',
        'where' => 
        array (
        ),
        'as' => 'generated::bThfgCauhgN6RmMy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nGaDho2j2pAddfyr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/quiz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuizManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\QuizManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/quiz',
        'where' => 
        array (
        ),
        'as' => 'generated::nGaDho2j2pAddfyr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gqAF2OTRDOTECXr5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/quiz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuizManager@store',
        'controller' => 'App\\Http\\Controllers\\User\\QuizManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/quiz',
        'where' => 
        array (
        ),
        'as' => 'generated::gqAF2OTRDOTECXr5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cGvRDiO1b8Mm2Qna' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/quiz/{quiz}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuizManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\QuizManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/quiz',
        'where' => 
        array (
        ),
        'as' => 'generated::cGvRDiO1b8Mm2Qna',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YVR2JFTHYRtJhkBM' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/quiz/{quiz}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuizManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\QuizManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/quiz',
        'where' => 
        array (
        ),
        'as' => 'generated::YVR2JFTHYRtJhkBM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ercy3hdyNGK1Z0pu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/quiz/{quiz}/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
          5 => 'auth.learner.access',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuizManager@submit',
        'controller' => 'App\\Http\\Controllers\\User\\QuizManager@submit',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/quiz',
        'where' => 
        array (
        ),
        'as' => 'generated::Ercy3hdyNGK1Z0pu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mB5S0u7PaeRDJ6bG' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/quiz/{quiz}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuizManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\QuizManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/quiz',
        'where' => 
        array (
        ),
        'as' => 'generated::mB5S0u7PaeRDJ6bG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jIeyZNFWjVO1IYu6' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/quiz/lesson/{lesson}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuizManager@deleteByLessonId',
        'controller' => 'App\\Http\\Controllers\\User\\QuizManager@deleteByLessonId',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/quiz',
        'where' => 
        array (
        ),
        'as' => 'generated::jIeyZNFWjVO1IYu6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lUkkFbxYWk2WjIRk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReviewManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\ReviewManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/review',
        'where' => 
        array (
        ),
        'as' => 'generated::lUkkFbxYWk2WjIRk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZlZ18ute4fX3Xkc1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReviewManager@store',
        'controller' => 'App\\Http\\Controllers\\User\\ReviewManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/review',
        'where' => 
        array (
        ),
        'as' => 'generated::ZlZ18ute4fX3Xkc1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1hE3mIBBy5if5pzU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/review/{review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReviewManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\ReviewManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/review',
        'where' => 
        array (
        ),
        'as' => 'generated::1hE3mIBBy5if5pzU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Aj8Jh6qkXMBmqll4' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/review/{review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReviewManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\ReviewManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/review',
        'where' => 
        array (
        ),
        'as' => 'generated::Aj8Jh6qkXMBmqll4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CyyyeiDAcL8hzzMq' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/review/{review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReviewManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ReviewManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/review',
        'where' => 
        array (
        ),
        'as' => 'generated::CyyyeiDAcL8hzzMq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EeQVpnzM4FNFGuXz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/user',
        'where' => 
        array (
        ),
        'as' => 'generated::EeQVpnzM4FNFGuXz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1E5iq1lg5ORkqfwb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\UserManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1E5iq1lg5ORkqfwb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DphBvSnbmgy5WkuN' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DphBvSnbmgy5WkuN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kHkKceoVudbBzmMz' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/user',
        'where' => 
        array (
        ),
        'as' => 'generated::kHkKceoVudbBzmMz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jrnz22FEwZrESvDt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/question',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuestionManager@index',
        'controller' => 'App\\Http\\Controllers\\User\\QuestionManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/question',
        'where' => 
        array (
        ),
        'as' => 'generated::Jrnz22FEwZrESvDt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JCZssLtdAxCVbnUH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/question',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuestionManager@store',
        'controller' => 'App\\Http\\Controllers\\User\\QuestionManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/question',
        'where' => 
        array (
        ),
        'as' => 'generated::JCZssLtdAxCVbnUH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iGANDMhpEUW12K50' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/question/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuestionManager@view',
        'controller' => 'App\\Http\\Controllers\\User\\QuestionManager@view',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/question',
        'where' => 
        array (
        ),
        'as' => 'generated::iGANDMhpEUW12K50',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l34fIZzkvhMJQyDp' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/user/question/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuestionManager@update',
        'controller' => 'App\\Http\\Controllers\\User\\QuestionManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/question',
        'where' => 
        array (
        ),
        'as' => 'generated::l34fIZzkvhMJQyDp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8ch9trjiaHw3lB1q' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/question/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\QuestionManager@delete',
        'controller' => 'App\\Http\\Controllers\\User\\QuestionManager@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/question',
        'where' => 
        array (
        ),
        'as' => 'generated::8ch9trjiaHw3lB1q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DOIcK2No830aGp39' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/analytics/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AnalyticsManager@stats',
        'controller' => 'App\\Http\\Controllers\\User\\AnalyticsManager@stats',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/analytics',
        'where' => 
        array (
        ),
        'as' => 'generated::DOIcK2No830aGp39',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Poa8lRbIxS6CnSQ7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/analytics/users-enrollment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AnalyticsManager@usersLineGraph',
        'controller' => 'App\\Http\\Controllers\\User\\AnalyticsManager@usersLineGraph',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/analytics',
        'where' => 
        array (
        ),
        'as' => 'generated::Poa8lRbIxS6CnSQ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZbMm8RCxiM75WdOF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/analytics/users-enrollment-year',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AnalyticsManager@usersLineGraphYear',
        'controller' => 'App\\Http\\Controllers\\User\\AnalyticsManager@usersLineGraphYear',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/analytics',
        'where' => 
        array (
        ),
        'as' => 'generated::ZbMm8RCxiM75WdOF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EPyLWMRWKfH0nm5l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'auth.user.state',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AuthManager@logout',
        'controller' => 'App\\Http\\Controllers\\User\\AuthManager@logout',
        'namespace' => NULL,
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::EPyLWMRWKfH0nm5l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LxPzWK52JUT8nOhG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/media/aws',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Media\\AwsManager@generatePresignedUrl',
        'controller' => 'App\\Http\\Controllers\\Media\\AwsManager@generatePresignedUrl',
        'namespace' => NULL,
        'prefix' => 'api/v1/media/aws',
        'where' => 
        array (
        ),
        'as' => 'generated::LxPzWK52JUT8nOhG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N4G9DQUzngziUWRW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/media/vimeo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Media\\VimeoManager@generatePresignedUrl',
        'controller' => 'App\\Http\\Controllers\\Media\\VimeoManager@generatePresignedUrl',
        'namespace' => NULL,
        'prefix' => 'api/v1/media/vimeo',
        'where' => 
        array (
        ),
        'as' => 'generated::N4G9DQUzngziUWRW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DHUkDXj42Tv07V2T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/paystack/create-subaccount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaystackManager@createSubaccount',
        'controller' => 'App\\Http\\Controllers\\User\\PaystackManager@createSubaccount',
        'namespace' => NULL,
        'prefix' => 'api/v1/paystack',
        'where' => 
        array (
        ),
        'as' => 'generated::DHUkDXj42Tv07V2T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3qG3v7n1V60cIR2w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/paystack/subaccounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaystackManager@getSubaccounts',
        'controller' => 'App\\Http\\Controllers\\User\\PaystackManager@getSubaccounts',
        'namespace' => NULL,
        'prefix' => 'api/v1/paystack',
        'where' => 
        array (
        ),
        'as' => 'generated::3qG3v7n1V60cIR2w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YJeGA36RWRyb2nnH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@index',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::YJeGA36RWRyb2nnH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tuVT9Y9kKY86EPuG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentees/bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@storeOrUpdate',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@storeOrUpdate',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::tuVT9Y9kKY86EPuG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j91BJJIyZbxMWk38' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/bookings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@show',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::j91BJJIyZbxMWk38',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FJF8Ujr2i0d7QNa2' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/mentorship/mentees/bookings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@update',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::FJF8Ujr2i0d7QNa2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZoytoHWjRYWT4sK7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/mentorship/mentees/bookings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@destroy',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::ZoytoHWjRYWT4sK7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QdfGuoQBP2DqBIGV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@index',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::QdfGuoQBP2DqBIGV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FYRn5XH7D5rQ277G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/available-mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getAvailableMentorsAtCurrentTime',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getAvailableMentorsAtCurrentTime',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::FYRn5XH7D5rQ277G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BTUdTubWlhqezQmt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/my-mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentors',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentors',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::BTUdTubWlhqezQmt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7MniTujvLL7uhMUz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/bookings/{bookingId}/mentor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentor',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentor',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::7MniTujvLL7uhMUz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Os8zCLUlzT2LZQsw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/session-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionsManager@sessions',
        'controller' => 'App\\Http\\Controllers\\SessionsManager@sessions',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::Os8zCLUlzT2LZQsw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pPHUOq9GOrqHRKWe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/number-of-mentors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@countMentors',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@countMentors',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::pPHUOq9GOrqHRKWe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EqAz5VLTb6ta0jgW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentees/mentor/profile/{id}/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@store',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::EqAz5VLTb6ta0jgW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HYHenEX7jX4luCQk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/mentorship/mentees/mentor/profile/{id}/review/{userReview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@update',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::HYHenEX7jX4luCQk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n89RP4DPmk4JQFx8' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/mentorship/mentees/mentor/profile/{id}/review/{userReview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::n89RP4DPmk4JQFx8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xxIVI4UUAXMNGnUS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/{id}/profile/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@fetchMenteeReview',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@fetchMenteeReview',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::xxIVI4UUAXMNGnUS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aMduataxOI2f2VLq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/mentee/profile/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@fetchMenteeReviews',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@fetchMenteeReviews',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::aMduataxOI2f2VLq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.availability.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.availability.index',
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@index',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.availability.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.availability.store',
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@store',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.availability.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/mentorship/mentors/availability/{availability}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.availability.update',
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@update',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.availability.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/mentorship/mentors/availability/{availability}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.availability.destroy',
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XeqCXu7PBNHuCrIp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/mentees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentees',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getMentees',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::XeqCXu7PBNHuCrIp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iFEaAV3joXBqE8au' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/availabilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:115:"function () {
            return \\response()->json([\'message\' => \'Testing availability index endpoint\']);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008a00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::iFEaAV3joXBqE8au',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vP92znCjUbZUlmuD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/availability/bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@booking',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@booking',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::vP92znCjUbZUlmuD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rqiNUUNYOXJiD4Nk' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/mentorship/mentors/availability/bookings/{booking}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@updateStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::rqiNUUNYOXJiD4Nk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sH5nt4ixk9L9Ja6I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/availability/bookings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@getBooking',
        'controller' => 'App\\Http\\Controllers\\Mentor\\AvailabilityController@getBooking',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::sH5nt4ixk9L9Ja6I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Uy03jXhhPcgGcxw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/accepted-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getAcceptedBookings',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@getAcceptedBookings',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::3Uy03jXhhPcgGcxw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WayVtRlJhHw8HlFj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/session-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionsManager@sessions',
        'controller' => 'App\\Http\\Controllers\\SessionsManager@sessions',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::WayVtRlJhHw8HlFj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nDuqMQp0N2f7B5Vb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createExperience',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createExperience',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::nDuqMQp0N2f7B5Vb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kUkjIl5sSlUtbeQO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createSkills',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createSkills',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::kUkjIl5sSlUtbeQO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SCyEWSBuJ7hyrJfz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/accessability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createAccessability',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createAccessability',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::SCyEWSBuJ7hyrJfz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8KcfMOpuOnRsqb9e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/number-of-mentees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@countMentees',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@countMentees',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::8KcfMOpuOnRsqb9e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YjsbISfUlrZupzv9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/mentee/profile/{id}/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@store',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::YjsbISfUlrZupzv9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HpaOyGtyri4QXi8X' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/mentorship/mentors/mentee/profile/{id}/review/{userReview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@update',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::HpaOyGtyri4QXi8X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IvtQhDgBHikHAcHP' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/mentorship/mentors/mentee/profile/{id}/review/{userReview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::IvtQhDgBHikHAcHP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vHABh3GJKHtSJflR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/mentor/profile/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@fetchMentorReviews',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@fetchMentorReviews',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::vHABh3GJKHtSJflR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ImVf2h1OZPhM7EV7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/{id}/profile/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\UserReviewController@fetchMentorReview',
        'controller' => 'App\\Http\\Controllers\\UserReviewController@fetchMentorReview',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::ImVf2h1OZPhM7EV7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'skill-categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/skill-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'skill-categories.index',
        'uses' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'skill-categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/skill-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'skill-categories.store',
        'uses' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'skill-categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/skill-categories/{skill_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'skill-categories.show',
        'uses' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'skill-categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/mentorship/mentors/skill-categories/{skill_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'skill-categories.update',
        'uses' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'skill-categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/mentorship/mentors/skill-categories/{skill_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'skill-categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\SkillCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentor.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentor/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentor.create',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@create',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@create',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentor.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentor.store',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@store',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentor.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentor/{mentor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentor.show',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@show',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentor.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentor/{mentor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentor.edit',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@edit',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@edit',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentor.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/mentorship/mentor/{mentor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentor.update',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@update',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentor.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/mentorship/mentor/{mentor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentor.destroy',
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@destroy',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentee.create',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@create',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@create',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentee.store',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@store',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentee.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentee/{mentee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentee.edit',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@edit',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@edit',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentee.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/mentorship/mentee/{mentee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentee.update',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@update',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mentorship.mentee.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/mentorship/mentee/{mentee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'as' => 'mentorship.mentee.destroy',
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@destroy',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JjCZsfVQgO2242FH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentor-projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getProjectsWithCategories',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getProjectsWithCategories',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
        'as' => 'generated::JjCZsfVQgO2242FH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hS6BgdUYNUM82y3q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentee-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@showProfile',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@showProfile',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
        'as' => 'generated::hS6BgdUYNUM82y3q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hwIOhGILNUjzlyVY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentor-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@showProfile',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@showProfile',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
        'as' => 'generated::hwIOhGILNUjzlyVY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bfOhE7M8eJrcgeKp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\EventController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
        'as' => 'generated::bfOhE7M8eJrcgeKp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CJyFu79SUuxjsLG3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/event/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@show',
        'controller' => 'App\\Http\\Controllers\\EventController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship',
        'where' => 
        array (
        ),
        'as' => 'generated::CJyFu79SUuxjsLG3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UMOwHasQPItQ7Hny' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008c90000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UMOwHasQPItQ7Hny',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
