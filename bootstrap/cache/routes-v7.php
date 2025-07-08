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
            '_route' => 'generated::QPqmIddPRXhs8Uyp',
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
            '_route' => 'generated::fXojC6DSkY01SGol',
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
            '_route' => 'generated::Mv6WGhwei03XKy82',
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
      '/api/paystack-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c5iRegUexXK704rh',
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
      '/api/v1/user/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GGd1AlZ6HQsWJfM8',
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
            '_route' => 'generated::yXr1uTelQANHnPSi',
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
            '_route' => 'generated::VCbqOR48qzRyLMVz',
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
            '_route' => 'generated::AYs1lkB4KPLYH2C5',
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
            '_route' => 'generated::PFfVMQaztwIHebG7',
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
            '_route' => 'generated::6R5WFjXxW3VJJSyc',
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
            '_route' => 'generated::DNAlqtAKKdSNCMtN',
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
      '/api/v1/user/mentee' => 
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
      '/api/v1/user/mentee-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::60fbyH6iotEFpxzc',
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
            '_route' => 'generated::2HIGmZV95yKDWJkV',
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
            '_route' => 'generated::SLRuMA7te3GUtXWp',
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
            '_route' => 'generated::iUpxNl2lV6Q3XNP1',
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
            '_route' => 'generated::qmE8q2hlteGLtrqx',
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
            '_route' => 'generated::TlmuexeCzsUCDfkx',
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
            '_route' => 'generated::jDNWuMjggLLFeP91',
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
            '_route' => 'generated::FcvM4Lbje5h7DrDt',
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
            '_route' => 'generated::HUefDWXjeVnasJ9a',
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
            '_route' => 'generated::9p8Wnk1iTvTmfq1m',
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
            '_route' => 'generated::e4vh8Qp1jOmhqQRd',
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
            '_route' => 'generated::FSjBnY1ii7tBUIIZ',
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
            '_route' => 'generated::c7OZ5ORHlXDP7BC2',
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
            '_route' => 'generated::6IegrNmgfnHFoox3',
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
            '_route' => 'generated::GRoYxQjzigDGYZpl',
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
            '_route' => 'generated::IvFwi1XkZoRGy40T',
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
            '_route' => 'generated::oNi4oD1bimF5onZg',
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
            '_route' => 'generated::XboT2SJz3UDtMdsb',
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
            '_route' => 'generated::FxzAVbzEQny4s3gK',
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
            '_route' => 'generated::kxJ92Ozf0LRBkF3A',
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
            '_route' => 'generated::fwfletbQQFfYeSDq',
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
            '_route' => 'generated::tu5inKobiSJbuDRW',
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
            '_route' => 'generated::MZoh6yedc156YiRY',
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
            '_route' => 'generated::5w6zCfG8tWzCM8KI',
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
            '_route' => 'generated::lxPS9di8FuhCAMe5',
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
            '_route' => 'generated::l0axVSM603QktdH1',
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
            '_route' => 'generated::sr7tju2nSN0b24eS',
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
            '_route' => 'generated::5Ctmd6bThbTq61hn',
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
            '_route' => 'generated::M2i6i7gyxO9NzyQN',
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
            '_route' => 'generated::FkFpr5V6vsqvcB4j',
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
            '_route' => 'generated::Hr2GdMoinp5rVh6k',
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
            '_route' => 'generated::k3FnX3t2twQKAVSq',
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
            '_route' => 'generated::cYUwMBoXZOAeKMcR',
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
            '_route' => 'generated::Iit4ZFn1QmazrSWp',
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
            '_route' => 'generated::7BilNcmT7jjcVc6R',
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
            '_route' => 'generated::sjxNTpps8N359EDj',
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
            '_route' => 'generated::7PdzQAhqnXErBizP',
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
            '_route' => 'generated::uGWIBf43gBrQHfK9',
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
            '_route' => 'generated::W0r2aRN55s27WIZL',
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
            '_route' => 'generated::l7GdpgOhyBlZ64XN',
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
            '_route' => 'generated::ztalfqDnEJc7o55m',
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
      '/api/v1/user/admin/mentors/needing-assignments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7N90eg1wFtz4Prbp',
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
      '/api/v1/user/admin/mentors/run-automated-assignment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EsXB2FPjS5hVlxXp',
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
            '_route' => 'generated::oS3WZlDapS6r7r8f',
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
            '_route' => 'generated::WjO7KFf9V3iOaYrT',
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
            '_route' => 'generated::PAmlpHJRvwDldYcU',
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
            '_route' => 'generated::M9FZvbiGjS5tOMYs',
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
            '_route' => 'generated::xH7YZczah8t99D7g',
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
            '_route' => 'generated::5VgtdZyATZxJp3iP',
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
            '_route' => 'generated::90XLa3xohOrUkES4',
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
            '_route' => 'generated::55xtbuSWGrY2wK2L',
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
            '_route' => 'generated::l7zIXDVIdAUY487P',
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
            '_route' => 'generated::HJ1k10cqwGP24JvF',
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
            '_route' => 'generated::YOPXhwtzPSNgURH5',
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
            '_route' => 'generated::TvJtjMoZ9kmWO7Il',
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
            '_route' => 'generated::6Gx303hye1ljlrGi',
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
            '_route' => 'generated::wHohhPyx7xiySn6w',
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
            '_route' => 'generated::sNgVoG69nYqYSivW',
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
            '_route' => 'generated::4OMIT0i3FznEIVSG',
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
            '_route' => 'generated::sC3v7FtiiQfqTf0k',
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
            '_route' => 'generated::bB847dLx5Krd9h3q',
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
            '_route' => 'generated::NSfxtHf7VsTgxU2z',
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
            '_route' => 'generated::0Laj7QiBDbj9X9XQ',
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
            '_route' => 'generated::ciYAVFPzGseKsoJt',
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
            '_route' => 'generated::nUjsGBwsTzoT1QHv',
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
            '_route' => 'generated::5Zuvu5ZNNikUenuY',
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
            '_route' => 'generated::meBjCzQOAg64Uw0g',
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
            '_route' => 'generated::QymV3t2ff6yjTjXb',
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
            '_route' => 'generated::vAToyl4objR5DwrE',
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
            '_route' => 'generated::SgSNed65oqiv88FT',
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
            '_route' => 'generated::TLW3cNGZodRwDVoZ',
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
            '_route' => 'generated::jZ6ddMrvly2ViYuV',
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
            '_route' => 'generated::ansWeHA7jQ91gDHN',
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
            '_route' => 'generated::fwavr5h6ntbdUhfR',
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
            '_route' => 'generated::R1KbLvEfOOz6jZeb',
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
            '_route' => 'generated::utNRTc5geCjeXyhJ',
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
            '_route' => 'generated::uzRaxXvlBWbYp2td',
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
            '_route' => 'generated::ekJ5cZfTDRZXhgim',
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
            '_route' => 'generated::BgICIsI1pb1NKlZn',
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
            '_route' => 'generated::ptYSw0n9rGUz2d47',
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
            '_route' => 'generated::5iDM5FCmcOAPT6aG',
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
            '_route' => 'generated::VuTYvzXkPNczKUtz',
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
            '_route' => 'generated::JFwH77GMwUF6lBnn',
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
            '_route' => 'generated::lM6TYjFlgfC2fnOP',
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
            '_route' => 'generated::PRq77qy3prxF4hSO',
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
            '_route' => 'generated::FQwmH6qIdxIitp5j',
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
            '_route' => 'generated::Wp4EvM8mG2VCvCr5',
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
            '_route' => 'generated::rTrZAvafsLOSQoZ2',
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
            '_route' => 'generated::ifR3FYRb1jshXYUx',
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
            '_route' => 'generated::bWnUQIbRwRIEd9i1',
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
            '_route' => 'generated::UqyqgAA3gT27d5Oi',
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
            '_route' => 'generated::DyTduZW44cCn6L9P',
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
            '_route' => 'generated::Dzd67By4ssJOC3zG',
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
            '_route' => 'generated::2mh7RLZsHsfdk3ti',
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
            '_route' => 'generated::UJ63TjhWPfmvY33N',
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
            '_route' => 'generated::KVUDSnxNL7P6q3bl',
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
      '/api/v1/mentorship/mentees/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XpZQZ5MlPnEDijCN',
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
            '_route' => 'generated::onuICSdbq8Hc6GyP',
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
      '/api/v1/mentorship/mentees/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x0c3YxJb9SNuH5kt',
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
            '_route' => 'generated::FHfo0xfVwxhmhJfo',
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
            '_route' => 'generated::VnoMmVsMr6bywNtY',
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
            '_route' => 'generated::00cVwLs7Hy2DGZro',
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
            '_route' => 'generated::gWCQNNvfHUlgGwkF',
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
            '_route' => 'generated::QX7Q4pi09CjjbUzl',
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
            '_route' => 'generated::32yNUpbvT3dHWfGL',
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
            '_route' => 'generated::drPZe9Fd8QGhA8W6',
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
      '/api/v1/mentorship/mentors/appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6MPjZyiAiaDP8nBE',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNclkBwvoUSYZPuf',
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
      '/api/v1/mentorship/mentors/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NOjUfUENoJG1v1nT',
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
      '/api/v1/mentorship/mentors/todos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0oTK4wIa2ycPu8Qd',
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
      '/api/v1/mentorship/mentors/badges' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w7Legy8wZvDdq7Bi',
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
      '/api/v1/mentorship/mentors/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ElxwY07F6nkjK80l',
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
      '/api/v1/mentorship/mentors/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PoSXpMPJhQMexHNH',
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
            '_route' => 'generated::eDztKVb4GnCexF4P',
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
            '_route' => 'generated::Up1lflrNlnlsNeha',
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
            '_route' => 'generated::tZcxAevHKqzsLyBm',
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
            '_route' => 'generated::98WTUW9Wg8UTNQSa',
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
            '_route' => 'generated::670wcyqTCT7ouX5i',
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
            '_route' => 'generated::YVQROJH6M1HsY5MH',
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
            '_route' => 'generated::SLWUn7fw7QniXuTr',
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
            '_route' => 'generated::ci8XVwBFM6Jancsk',
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
            '_route' => 'generated::BWy03ECbF6HM9PJl',
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
      '/api/v1/mentorship/mentors/assigned-mentees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kxQ08n0KSBGtyyns',
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
            '_route' => 'mentorship.mentee.form',
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
            '_route' => 'mentorship.mentee.hold',
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
      '/api/v1/mentorship/admin/mentors/needing-assignments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2za9U07LiCkwKUWU',
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
      '/api/v1/mentorship/admin/mentors/run-automated-assignment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qyDIhl22vkSsHkyk',
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
            '_route' => 'generated::arPM70QZ525WK2py',
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
            '_route' => 'generated::5JsN6O4A35xcTFV5',
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
            '_route' => 'generated::sS5J9mY1x2YCBn1N',
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
            '_route' => 'generated::pV9MXaBm0geHAN2i',
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
            '_route' => 'generated::KFd2UvfwEUFaWibX',
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
      0 => '{^(?|/api/v1/(?|user/(?|a(?|uth/(?|reset\\-password/([^/]++)/([^/]++)(*:70)|complete\\-registration/([^/]++)/([^/]++)(*:117))|dmin/(?|users/(?|([^/]++)(?|(*:154)|/role\\-update(*:175))|role\\-update(*:196))|mentor(?|/(?|status/([^/]++)(*:233)|a(?|vailability/([^/]++)(*:265)|ccessability/([^/]++)(*:294)))|s/(?|mentor/([^/]++)(*:324)|([^/]++)/(?|assign\\-mentees(*:359)|capacity(*:375))))|analytics/courses/([^/]++)/user(*:417)|course(?|s/([^/]++)(?|(*:447)|/(?|status(*:465)|lessons(*:480)))|/([^/]++)(*:499))|lessons/([^/]++)/status(*:531)|events/([^/]++)(?|(*:557)))|ssignment/([^/]++)(?|(*:588)|/submit(*:603)|(*:611))|ttachment/([^/]++)(?|(*:641)))|ment(?|or(?|/([^/]++)(?|(*:675)|/edit(*:688)|(*:696))|s/(?|availability/(?|([^/]++)(?|(*:737))|bookings(?|(*:757)|/([^/]++)(?|(*:777)|(*:785))))|bookings/([^/]++)/(?|cancel(*:823)|reschedule(*:841))|mentee/profile/([^/]++)/review(?|(*:883)|/([^/]++)(?|(*:903)))|([^/]++)/profile/reviews(*:937)))|ee(?|/([^/]++)(?|/edit(*:969)|(*:977))|s/(?|bookings/([^/]++)(?|(*:1011)|/mentor(*:1027))|mentor/profile/([^/]++)/review(?|(*:1070)|/([^/]++)(?|(*:1091)))|([^/]++)/profile/reviews(*:1126)|mentee/profile/reviews(*:1157))))|event/([^/]++)(*:1183)|c(?|ategory/([^/]++)(?|(*:1215))|ourse/(?|c(?|reate\\-course\\-with\\-ai/([^/]++)(*:1270)|ourses/([^/]++)/(?|modules(*:1305)|flashcards(*:1324)|quizzes(*:1340)|lessons(*:1356)))|([^/]++)(*:1375)|ai/([^/]++)(*:1395)|([^/]++)(?|/subscribe(*:1425)|(*:1434))))|lesson/([^/]++)(?|(*:1464)|/(?|list(*:1481)|seen(*:1494)|update(*:1509))|(*:1519))|transaction/([^/]++)(?|(*:1552)|/(?|payout(*:1571)|verify\\-payout\\-otp(*:1599)))|bank\\-account/([^/]++)(?|(*:1635))|qu(?|iz/(?|([^/]++)(?|(*:1667)|/submit(*:1683)|(*:1692))|lesson/([^/]++)(*:1717))|estion/([^/]++)(?|(*:1745)))|review/([^/]++)(?|(*:1774))|user/([^/]++)(?|(*:1800)))|mentorship/(?|ment(?|ee(?|s/(?|bookings/([^/]++)(?|(*:1862)|/(?|cancel(*:1881)|reschedule(*:1900)|mentor(*:1915)))|mentor/profile/([^/]++)/review(?|(*:1959)|/([^/]++)(?|(*:1980)))|([^/]++)/profile/reviews(*:2015)|mentee/profile/reviews(*:2046))|/([^/]++)(?|/edit(*:2073)|(*:2082)))|or(?|s/(?|a(?|ppointments/([^/]++)(?|(*:2130))|vailability/(?|([^/]++)(?|(*:2166))|bookings(?|(*:2187)|/([^/]++)(?|(*:2208)|(*:2217)))))|todos/([^/]++)/complete(*:2253)|bookings/([^/]++)/(?|cancel(*:2289)|reschedule(*:2308))|mentee/profile/([^/]++)/review(?|(*:2351)|/([^/]++)(?|(*:2372)))|([^/]++)/profile/reviews(*:2407)|skill\\-categories/([^/]++)(?|(*:2445)))|/([^/]++)(?|(*:2468)|/edit(*:2482)|(*:2491))))|admin/mentors/([^/]++)/(?|assign\\-mentees(*:2544)|capacity(*:2561))|event/([^/]++)(*:2585))))/?$}sDu',
    ),
    3 => 
    array (
      70 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1GMrqjdJ3aVXMGlf',
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
            '_route' => 'generated::S3cVkEh61eTap6XV',
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
            '_route' => 'generated::aGLQtRMI18r7yeh0',
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
            '_route' => 'generated::AiIDJOWdz6ZK9EcE',
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
            '_route' => 'generated::KLzfRDAi95yNFY3i',
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
            '_route' => 'generated::gGVcTzjOycFLevtM',
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
            '_route' => 'generated::6zQ4zBX1tTMcFKQ3',
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
            '_route' => 'generated::kQoYb6eP5f9bhygA',
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
            '_route' => 'generated::hZ7OwTTZngXjbmQ4',
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
            '_route' => 'generated::sKYFXUUFqVvF79U2',
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
      324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::INbki7KxHsnxG6AE',
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
      359 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mszV6VXCTDqFifzA',
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
          5 => false,
          6 => NULL,
        ),
      ),
      375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pAxb9T25tUsmuZn5',
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
      417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::We6vnhELcbYdIS0d',
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
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JKsh6JLUyBG82qO0',
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
      465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VqvaS9CsQedoESEl',
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
      480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fdyMAHAhVvKGcQiP',
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
      499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dbvlg7TMBieoDQu3',
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
      531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MKdtSlh9ePxEL1rA',
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
      557 => 
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
      588 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2dzZ26vp9GJdz0Hd',
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
      603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IBPVAJ9SYGV3Ttns',
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
      611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BcOZktxyhcd8tx1H',
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
            '_route' => 'generated::08fyHG6LSDcBrv45',
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
      641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eqfJntWhBIDLUXw0',
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
            '_route' => 'generated::bFQ9d1WmmoLcIyt0',
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
            '_route' => 'generated::XXXa2eZ8i0553fFi',
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
      675 => 
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
      688 => 
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
      696 => 
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
      737 => 
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
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5iwKp4f86bGjOntA',
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
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LnxmpHBIlXeVfU8W',
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
      785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5XW2XeX9Z78oDjDa',
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
      823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HoQ9RFne4ofT6wMr',
          ),
          1 => 
          array (
            0 => 'booking',
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
      841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yo869LTc5fqdDZog',
          ),
          1 => 
          array (
            0 => 'booking',
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
      883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NchRWsUsJkZVhSCd',
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
      903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gmnQZ31XaJloR123',
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
            '_route' => 'generated::rsbZEVLeEua5JHFn',
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
      937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HbIjQes2uQtom8VG',
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
      969 => 
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
      977 => 
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
      1011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3wYcEuxwBST8wr81',
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
            '_route' => 'generated::OqcNaJbBuFyfibiR',
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
            '_route' => 'generated::uwhPuBTS50I2WAoA',
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
      1027 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4k4bbuaVrjBsDwiM',
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
      1070 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1afLRaMGZA9ThuOM',
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
      1091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H0hVWqQT1EOguSKl',
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
            '_route' => 'generated::Rk6qL9l25YJ1GbnV',
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
      1126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dKnl0OoTcOFukijz',
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
      1157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mCvLKhw7981Kfv5Q',
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
      1183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::52nOrtBu2xTSUP7r',
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
      1215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e7QyHkhU650IoqvF',
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
            '_route' => 'generated::XBpZDJVMyY2fzAwl',
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
            '_route' => 'generated::0947A8LZWyVpXWos',
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
      1270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MGncmnNrocPY6oNq',
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
      1305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vOFOq6s9cTjQr4ih',
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
      1324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SAWrWtieWPHEqg5H',
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
      1340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5pvg8NbkNxyEh5TJ',
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
      1356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LOYJj008m8mmYj2M',
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
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MKGScEP06aEURb5w',
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
      1395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bxQM4bjiaoLrZCdF',
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
      1425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eOQQILeyBEKrdyyN',
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
      1434 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IqdzesSrgVGgPFFj',
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
            '_route' => 'generated::9Lo3Xv7IE4Makbzg',
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
      1464 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CSXJC3ugnu8Wa7UM',
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
      1481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3e7hgbYXQfbiu0n5',
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
      1494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::awzkTSc0y7DFPl9n',
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
      1509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::py9nYpum9gGdeIYJ',
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
      1519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w50Ekz7IDL9OqCIA',
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
            '_route' => 'generated::oSe4qv7QVIWRDsf9',
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
      1552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jFYhLtfIiDsgIB5L',
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
            '_route' => 'generated::bE81EjjtPkToGHfP',
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
            '_route' => 'generated::QQdTEN0wcGtCTrKS',
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
      1571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7kK75Ns0JFtxnfE6',
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
      1599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zZ1odsvJuZdYI6hC',
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
      1635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BNpquO4JneyP2pFg',
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
            '_route' => 'generated::2AvMFyKa515B2ph1',
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
            '_route' => 'generated::1aFl65c0jqvAxYNp',
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
      1667 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zfv1ok7nnRRGqqPV',
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
            '_route' => 'generated::2ChtPWEnJZ3gfZdZ',
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
      1683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9Zgj40mqyDobBVQz',
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
      1692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2uV9PYX2GBONqS1o',
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
      1717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uz3EU8dn8P3QoAck',
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
      1745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZaztMjQ3gyNW1JeZ',
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
            '_route' => 'generated::oM1gMqk6TeNAww32',
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
            '_route' => 'generated::mwZqCuo5cw9oXFvy',
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
      1774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uCBY85b5TKOF6bN4',
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
            '_route' => 'generated::Pfzk9Eu3xkPyeVOO',
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
            '_route' => 'generated::fNsQidZiWiwYrtfK',
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
      1800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s411ll0vvSQSzYay',
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
            '_route' => 'generated::ap87jBd5Kdp4SsCC',
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
            '_route' => 'generated::TIQOuttvLyuCQj5W',
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
      1862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A77q2vhINErM9Ukq',
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
            '_route' => 'generated::X3S5wQmIUU0v1mQu',
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
            '_route' => 'generated::eV07LVnqyCxBfUgY',
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
      1881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7tcPdqHrrK7kAiOC',
          ),
          1 => 
          array (
            0 => 'booking',
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
      1900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mMY1r8O7GJ2BmIhW',
          ),
          1 => 
          array (
            0 => 'booking',
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
      1915 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HDTeAIUch5kY4qya',
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
      1959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iFzRqFDxMA22ZJwa',
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
      1980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dFD2obGID3SzZDOD',
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
            '_route' => 'generated::23rMEddQpnqd0uAx',
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
      2015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HOP4AFdTj7g92Ne8',
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
      2046 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wJqFetkfZHJN5yZb',
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
      2073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentee.reform',
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
      2082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mentorship.mentee.upgrade',
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
            '_route' => 'mentorship.mentee.kill',
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
      2130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AOViwvXd4J8sW2PY',
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
            '_route' => 'generated::71melyAigLrnDTho',
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
            '_route' => 'generated::CvbtVtpJY4KzAm1S',
          ),
          1 => 
          array (
            0 => 'id',
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
        3 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2XiOVBwf0NJIzh2n',
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
      2166 => 
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
      2187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uIvUfaH9JU4Zclvk',
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
      2208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yuysXmj1uowGz6hx',
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
      2217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WGAfGtEnSFwM93BI',
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
      2253 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jQFzvir9wJaUPzpn',
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
      2289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YPc9wltucIsQ07r7',
          ),
          1 => 
          array (
            0 => 'booking',
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
      2308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wlpkrgh8DhIPDUJz',
          ),
          1 => 
          array (
            0 => 'booking',
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
      2351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TKdTSNaWVkq3rZFg',
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
      2372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uqn9b29rcgxlE7Sx',
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
            '_route' => 'generated::zfzV0kaQW2SY5jbg',
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
      2407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ed8WU4d2X2IenNKV',
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
      2445 => 
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
      2468 => 
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
      2482 => 
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
      2491 => 
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
      2544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ll9rgd4XcdacY5z6',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TFVuXsZJCQWljC8N',
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
      2585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oQI6JFomiX18VJrr',
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
    'generated::QPqmIddPRXhs8Uyp' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004040000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QPqmIddPRXhs8Uyp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fXojC6DSkY01SGol' => 
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
        'as' => 'generated::fXojC6DSkY01SGol',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mv6WGhwei03XKy82' => 
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
        'as' => 'generated::Mv6WGhwei03XKy82',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c5iRegUexXK704rh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/paystack-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaystackManager@handleCallback',
        'controller' => 'App\\Http\\Controllers\\User\\PaystackManager@handleCallback',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::c5iRegUexXK704rh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GGd1AlZ6HQsWJfM8' => 
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
        'as' => 'generated::GGd1AlZ6HQsWJfM8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yXr1uTelQANHnPSi' => 
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
        'as' => 'generated::yXr1uTelQANHnPSi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VCbqOR48qzRyLMVz' => 
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
        'as' => 'generated::VCbqOR48qzRyLMVz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AYs1lkB4KPLYH2C5' => 
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
        'as' => 'generated::AYs1lkB4KPLYH2C5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1GMrqjdJ3aVXMGlf' => 
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
        'as' => 'generated::1GMrqjdJ3aVXMGlf',
      ),
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
    'generated::S3cVkEh61eTap6XV' => 
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
        'as' => 'generated::S3cVkEh61eTap6XV',
      ),
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
    'generated::PFfVMQaztwIHebG7' => 
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
        'as' => 'generated::PFfVMQaztwIHebG7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6R5WFjXxW3VJJSyc' => 
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
        'as' => 'generated::6R5WFjXxW3VJJSyc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DNAlqtAKKdSNCMtN' => 
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
        'as' => 'generated::DNAlqtAKKdSNCMtN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'mentorship.mentee.create' => 
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
        'as' => 'mentorship.mentee.create',
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
    'mentorship.mentee.store' => 
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
        'as' => 'mentorship.mentee.store',
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
    'mentorship.mentee.edit' => 
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
        'as' => 'mentorship.mentee.edit',
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
    'mentorship.mentee.update' => 
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
        'as' => 'mentorship.mentee.update',
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
    'mentorship.mentee.destroy' => 
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
        'as' => 'mentorship.mentee.destroy',
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
    'generated::60fbyH6iotEFpxzc' => 
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
        'as' => 'generated::60fbyH6iotEFpxzc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2HIGmZV95yKDWJkV' => 
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
        'as' => 'generated::2HIGmZV95yKDWJkV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SLRuMA7te3GUtXWp' => 
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
        'as' => 'generated::SLRuMA7te3GUtXWp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::52nOrtBu2xTSUP7r' => 
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
        'as' => 'generated::52nOrtBu2xTSUP7r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iUpxNl2lV6Q3XNP1' => 
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
        'as' => 'generated::iUpxNl2lV6Q3XNP1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qmE8q2hlteGLtrqx' => 
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
        'as' => 'generated::qmE8q2hlteGLtrqx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TlmuexeCzsUCDfkx' => 
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
        'as' => 'generated::TlmuexeCzsUCDfkx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jDNWuMjggLLFeP91' => 
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
        'as' => 'generated::jDNWuMjggLLFeP91',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FcvM4Lbje5h7DrDt' => 
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
        'as' => 'generated::FcvM4Lbje5h7DrDt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HUefDWXjeVnasJ9a' => 
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
        'as' => 'generated::HUefDWXjeVnasJ9a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9p8Wnk1iTvTmfq1m' => 
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
        'as' => 'generated::9p8Wnk1iTvTmfq1m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e4vh8Qp1jOmhqQRd' => 
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
        'as' => 'generated::e4vh8Qp1jOmhqQRd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FSjBnY1ii7tBUIIZ' => 
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
        'as' => 'generated::FSjBnY1ii7tBUIIZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c7OZ5ORHlXDP7BC2' => 
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
        'as' => 'generated::c7OZ5ORHlXDP7BC2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6IegrNmgfnHFoox3' => 
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
        'as' => 'generated::6IegrNmgfnHFoox3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GRoYxQjzigDGYZpl' => 
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
        'as' => 'generated::GRoYxQjzigDGYZpl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IvFwi1XkZoRGy40T' => 
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
        'as' => 'generated::IvFwi1XkZoRGy40T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oNi4oD1bimF5onZg' => 
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
        'as' => 'generated::oNi4oD1bimF5onZg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XboT2SJz3UDtMdsb' => 
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
        'as' => 'generated::XboT2SJz3UDtMdsb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aGLQtRMI18r7yeh0' => 
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
        'as' => 'generated::aGLQtRMI18r7yeh0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AiIDJOWdz6ZK9EcE' => 
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
        'as' => 'generated::AiIDJOWdz6ZK9EcE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KLzfRDAi95yNFY3i' => 
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
        'as' => 'generated::KLzfRDAi95yNFY3i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gGVcTzjOycFLevtM' => 
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
        'as' => 'generated::gGVcTzjOycFLevtM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6zQ4zBX1tTMcFKQ3' => 
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
        'as' => 'generated::6zQ4zBX1tTMcFKQ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FxzAVbzEQny4s3gK' => 
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
        'as' => 'generated::FxzAVbzEQny4s3gK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kxJ92Ozf0LRBkF3A' => 
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
        'as' => 'generated::kxJ92Ozf0LRBkF3A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fwfletbQQFfYeSDq' => 
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
        'as' => 'generated::fwfletbQQFfYeSDq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tu5inKobiSJbuDRW' => 
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
        'as' => 'generated::tu5inKobiSJbuDRW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MZoh6yedc156YiRY' => 
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
        'as' => 'generated::MZoh6yedc156YiRY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kQoYb6eP5f9bhygA' => 
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
        'as' => 'generated::kQoYb6eP5f9bhygA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hZ7OwTTZngXjbmQ4' => 
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
        'as' => 'generated::hZ7OwTTZngXjbmQ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sKYFXUUFqVvF79U2' => 
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
        'as' => 'generated::sKYFXUUFqVvF79U2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5w6zCfG8tWzCM8KI' => 
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
        'as' => 'generated::5w6zCfG8tWzCM8KI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lxPS9di8FuhCAMe5' => 
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
        'as' => 'generated::lxPS9di8FuhCAMe5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l0axVSM603QktdH1' => 
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
        'as' => 'generated::l0axVSM603QktdH1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sr7tju2nSN0b24eS' => 
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
        'as' => 'generated::sr7tju2nSN0b24eS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Ctmd6bThbTq61hn' => 
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
        'as' => 'generated::5Ctmd6bThbTq61hn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M2i6i7gyxO9NzyQN' => 
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
        'as' => 'generated::M2i6i7gyxO9NzyQN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FkFpr5V6vsqvcB4j' => 
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
        'as' => 'generated::FkFpr5V6vsqvcB4j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hr2GdMoinp5rVh6k' => 
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
        'as' => 'generated::Hr2GdMoinp5rVh6k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k3FnX3t2twQKAVSq' => 
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
        'as' => 'generated::k3FnX3t2twQKAVSq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cYUwMBoXZOAeKMcR' => 
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
        'as' => 'generated::cYUwMBoXZOAeKMcR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Iit4ZFn1QmazrSWp' => 
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
        'as' => 'generated::Iit4ZFn1QmazrSWp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7BilNcmT7jjcVc6R' => 
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
        'as' => 'generated::7BilNcmT7jjcVc6R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::We6vnhELcbYdIS0d' => 
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
        'as' => 'generated::We6vnhELcbYdIS0d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sjxNTpps8N359EDj' => 
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
        'as' => 'generated::sjxNTpps8N359EDj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7PdzQAhqnXErBizP' => 
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
        'as' => 'generated::7PdzQAhqnXErBizP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uGWIBf43gBrQHfK9' => 
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
        'as' => 'generated::uGWIBf43gBrQHfK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JKsh6JLUyBG82qO0' => 
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
        'as' => 'generated::JKsh6JLUyBG82qO0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VqvaS9CsQedoESEl' => 
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
        'as' => 'generated::VqvaS9CsQedoESEl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dbvlg7TMBieoDQu3' => 
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
        'as' => 'generated::Dbvlg7TMBieoDQu3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MKdtSlh9ePxEL1rA' => 
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
        'as' => 'generated::MKdtSlh9ePxEL1rA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fdyMAHAhVvKGcQiP' => 
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
        'as' => 'generated::fdyMAHAhVvKGcQiP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W0r2aRN55s27WIZL' => 
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
        'as' => 'generated::W0r2aRN55s27WIZL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::INbki7KxHsnxG6AE' => 
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
        'as' => 'generated::INbki7KxHsnxG6AE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l7GdpgOhyBlZ64XN' => 
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
        'as' => 'generated::l7GdpgOhyBlZ64XN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ztalfqDnEJc7o55m' => 
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
        'as' => 'generated::ztalfqDnEJc7o55m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7N90eg1wFtz4Prbp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/mentors/needing-assignments',
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
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getMentorsNeedingAssignments',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getMentorsNeedingAssignments',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7N90eg1wFtz4Prbp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EsXB2FPjS5hVlxXp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/mentors/run-automated-assignment',
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
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@runAutomatedMenteeAssignment',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@runAutomatedMenteeAssignment',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EsXB2FPjS5hVlxXp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mszV6VXCTDqFifzA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/admin/mentors/{mentor}/assign-mentees',
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
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@manuallyAssignMentees',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@manuallyAssignMentees',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mszV6VXCTDqFifzA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pAxb9T25tUsmuZn5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/admin/mentors/{mentor}/capacity',
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
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@checkMentorCapacity',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@checkMentorCapacity',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pAxb9T25tUsmuZn5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::oS3WZlDapS6r7r8f' => 
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
            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000081c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::oS3WZlDapS6r7r8f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5iwKp4f86bGjOntA' => 
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
        'as' => 'generated::5iwKp4f86bGjOntA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LnxmpHBIlXeVfU8W' => 
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
        'as' => 'generated::LnxmpHBIlXeVfU8W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5XW2XeX9Z78oDjDa' => 
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
        'as' => 'generated::5XW2XeX9Z78oDjDa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WjO7KFf9V3iOaYrT' => 
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
        'as' => 'generated::WjO7KFf9V3iOaYrT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HoQ9RFne4ofT6wMr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentors/bookings/{booking}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@cancelSession',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@cancelSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::HoQ9RFne4ofT6wMr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yo869LTc5fqdDZog' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/mentors/bookings/{booking}/reschedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@rescheduleSession',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@rescheduleSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/user/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::Yo869LTc5fqdDZog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PAmlpHJRvwDldYcU' => 
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
        'as' => 'generated::PAmlpHJRvwDldYcU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M9FZvbiGjS5tOMYs' => 
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
        'as' => 'generated::M9FZvbiGjS5tOMYs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xH7YZczah8t99D7g' => 
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
        'as' => 'generated::xH7YZczah8t99D7g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5VgtdZyATZxJp3iP' => 
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
        'as' => 'generated::5VgtdZyATZxJp3iP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::90XLa3xohOrUkES4' => 
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
        'as' => 'generated::90XLa3xohOrUkES4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NchRWsUsJkZVhSCd' => 
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
        'as' => 'generated::NchRWsUsJkZVhSCd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gmnQZ31XaJloR123' => 
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
        'as' => 'generated::gmnQZ31XaJloR123',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rsbZEVLeEua5JHFn' => 
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
        'as' => 'generated::rsbZEVLeEua5JHFn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::55xtbuSWGrY2wK2L' => 
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
        'as' => 'generated::55xtbuSWGrY2wK2L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HbIjQes2uQtom8VG' => 
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
        'as' => 'generated::HbIjQes2uQtom8VG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l7zIXDVIdAUY487P' => 
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
        'as' => 'generated::l7zIXDVIdAUY487P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HJ1k10cqwGP24JvF' => 
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
        'as' => 'generated::HJ1k10cqwGP24JvF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3wYcEuxwBST8wr81' => 
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
        'as' => 'generated::3wYcEuxwBST8wr81',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OqcNaJbBuFyfibiR' => 
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
        'as' => 'generated::OqcNaJbBuFyfibiR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uwhPuBTS50I2WAoA' => 
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
        'as' => 'generated::uwhPuBTS50I2WAoA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YOPXhwtzPSNgURH5' => 
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
        'as' => 'generated::YOPXhwtzPSNgURH5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TvJtjMoZ9kmWO7Il' => 
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
        'as' => 'generated::TvJtjMoZ9kmWO7Il',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Gx303hye1ljlrGi' => 
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
        'as' => 'generated::6Gx303hye1ljlrGi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4k4bbuaVrjBsDwiM' => 
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
        'as' => 'generated::4k4bbuaVrjBsDwiM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wHohhPyx7xiySn6w' => 
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
        'as' => 'generated::wHohhPyx7xiySn6w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sNgVoG69nYqYSivW' => 
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
        'as' => 'generated::sNgVoG69nYqYSivW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1afLRaMGZA9ThuOM' => 
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
        'as' => 'generated::1afLRaMGZA9ThuOM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H0hVWqQT1EOguSKl' => 
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
        'as' => 'generated::H0hVWqQT1EOguSKl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rk6qL9l25YJ1GbnV' => 
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
        'as' => 'generated::Rk6qL9l25YJ1GbnV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dKnl0OoTcOFukijz' => 
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
        'as' => 'generated::dKnl0OoTcOFukijz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mCvLKhw7981Kfv5Q' => 
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
        'as' => 'generated::mCvLKhw7981Kfv5Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4OMIT0i3FznEIVSG' => 
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
        'as' => 'generated::4OMIT0i3FznEIVSG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sC3v7FtiiQfqTf0k' => 
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
        'as' => 'generated::sC3v7FtiiQfqTf0k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bB847dLx5Krd9h3q' => 
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
        'as' => 'generated::bB847dLx5Krd9h3q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NSfxtHf7VsTgxU2z' => 
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
        'as' => 'generated::NSfxtHf7VsTgxU2z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Laj7QiBDbj9X9XQ' => 
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
        'as' => 'generated::0Laj7QiBDbj9X9XQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ciYAVFPzGseKsoJt' => 
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
        'as' => 'generated::ciYAVFPzGseKsoJt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nUjsGBwsTzoT1QHv' => 
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
        'as' => 'generated::nUjsGBwsTzoT1QHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Zuvu5ZNNikUenuY' => 
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
        'as' => 'generated::5Zuvu5ZNNikUenuY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e7QyHkhU650IoqvF' => 
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
        'as' => 'generated::e7QyHkhU650IoqvF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XBpZDJVMyY2fzAwl' => 
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
        'as' => 'generated::XBpZDJVMyY2fzAwl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0947A8LZWyVpXWos' => 
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
        'as' => 'generated::0947A8LZWyVpXWos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::meBjCzQOAg64Uw0g' => 
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
        'as' => 'generated::meBjCzQOAg64Uw0g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vAToyl4objR5DwrE' => 
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
        'as' => 'generated::vAToyl4objR5DwrE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QymV3t2ff6yjTjXb' => 
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
        'as' => 'generated::QymV3t2ff6yjTjXb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MGncmnNrocPY6oNq' => 
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
        'as' => 'generated::MGncmnNrocPY6oNq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vOFOq6s9cTjQr4ih' => 
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
        'as' => 'generated::vOFOq6s9cTjQr4ih',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SAWrWtieWPHEqg5H' => 
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
        'as' => 'generated::SAWrWtieWPHEqg5H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5pvg8NbkNxyEh5TJ' => 
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
        'as' => 'generated::5pvg8NbkNxyEh5TJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LOYJj008m8mmYj2M' => 
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
        'as' => 'generated::LOYJj008m8mmYj2M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MKGScEP06aEURb5w' => 
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
        'as' => 'generated::MKGScEP06aEURb5w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bxQM4bjiaoLrZCdF' => 
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
        'as' => 'generated::bxQM4bjiaoLrZCdF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eOQQILeyBEKrdyyN' => 
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
        'as' => 'generated::eOQQILeyBEKrdyyN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IqdzesSrgVGgPFFj' => 
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
        'as' => 'generated::IqdzesSrgVGgPFFj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Lo3Xv7IE4Makbzg' => 
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
        'as' => 'generated::9Lo3Xv7IE4Makbzg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SgSNed65oqiv88FT' => 
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
        'as' => 'generated::SgSNed65oqiv88FT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CSXJC3ugnu8Wa7UM' => 
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
        'as' => 'generated::CSXJC3ugnu8Wa7UM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3e7hgbYXQfbiu0n5' => 
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
        'as' => 'generated::3e7hgbYXQfbiu0n5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w50Ekz7IDL9OqCIA' => 
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
        'as' => 'generated::w50Ekz7IDL9OqCIA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::awzkTSc0y7DFPl9n' => 
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
        'as' => 'generated::awzkTSc0y7DFPl9n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::py9nYpum9gGdeIYJ' => 
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
        'as' => 'generated::py9nYpum9gGdeIYJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oSe4qv7QVIWRDsf9' => 
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
        'as' => 'generated::oSe4qv7QVIWRDsf9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TLW3cNGZodRwDVoZ' => 
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
        'as' => 'generated::TLW3cNGZodRwDVoZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jZ6ddMrvly2ViYuV' => 
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
        'as' => 'generated::jZ6ddMrvly2ViYuV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jFYhLtfIiDsgIB5L' => 
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
        'as' => 'generated::jFYhLtfIiDsgIB5L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bE81EjjtPkToGHfP' => 
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
        'as' => 'generated::bE81EjjtPkToGHfP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QQdTEN0wcGtCTrKS' => 
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
        'as' => 'generated::QQdTEN0wcGtCTrKS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7kK75Ns0JFtxnfE6' => 
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
        'as' => 'generated::7kK75Ns0JFtxnfE6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zZ1odsvJuZdYI6hC' => 
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
        'as' => 'generated::zZ1odsvJuZdYI6hC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ansWeHA7jQ91gDHN' => 
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
        'as' => 'generated::ansWeHA7jQ91gDHN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fwavr5h6ntbdUhfR' => 
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
        'as' => 'generated::fwavr5h6ntbdUhfR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2dzZ26vp9GJdz0Hd' => 
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
        'as' => 'generated::2dzZ26vp9GJdz0Hd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IBPVAJ9SYGV3Ttns' => 
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
        'as' => 'generated::IBPVAJ9SYGV3Ttns',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BcOZktxyhcd8tx1H' => 
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
        'as' => 'generated::BcOZktxyhcd8tx1H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::08fyHG6LSDcBrv45' => 
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
        'as' => 'generated::08fyHG6LSDcBrv45',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R1KbLvEfOOz6jZeb' => 
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
        'as' => 'generated::R1KbLvEfOOz6jZeb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::utNRTc5geCjeXyhJ' => 
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
        'as' => 'generated::utNRTc5geCjeXyhJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eqfJntWhBIDLUXw0' => 
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
        'as' => 'generated::eqfJntWhBIDLUXw0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bFQ9d1WmmoLcIyt0' => 
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
        'as' => 'generated::bFQ9d1WmmoLcIyt0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XXXa2eZ8i0553fFi' => 
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
        'as' => 'generated::XXXa2eZ8i0553fFi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uzRaxXvlBWbYp2td' => 
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
        'as' => 'generated::uzRaxXvlBWbYp2td',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ekJ5cZfTDRZXhgim' => 
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
        'as' => 'generated::ekJ5cZfTDRZXhgim',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BNpquO4JneyP2pFg' => 
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
        'as' => 'generated::BNpquO4JneyP2pFg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2AvMFyKa515B2ph1' => 
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
        'as' => 'generated::2AvMFyKa515B2ph1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1aFl65c0jqvAxYNp' => 
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
        'as' => 'generated::1aFl65c0jqvAxYNp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BgICIsI1pb1NKlZn' => 
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
        'as' => 'generated::BgICIsI1pb1NKlZn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ptYSw0n9rGUz2d47' => 
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
        'as' => 'generated::ptYSw0n9rGUz2d47',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5iDM5FCmcOAPT6aG' => 
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
        'as' => 'generated::5iDM5FCmcOAPT6aG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VuTYvzXkPNczKUtz' => 
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
        'as' => 'generated::VuTYvzXkPNczKUtz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JFwH77GMwUF6lBnn' => 
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
        'as' => 'generated::JFwH77GMwUF6lBnn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zfv1ok7nnRRGqqPV' => 
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
        'as' => 'generated::zfv1ok7nnRRGqqPV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2ChtPWEnJZ3gfZdZ' => 
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
        'as' => 'generated::2ChtPWEnJZ3gfZdZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Zgj40mqyDobBVQz' => 
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
        'as' => 'generated::9Zgj40mqyDobBVQz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2uV9PYX2GBONqS1o' => 
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
        'as' => 'generated::2uV9PYX2GBONqS1o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uz3EU8dn8P3QoAck' => 
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
        'as' => 'generated::uz3EU8dn8P3QoAck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lM6TYjFlgfC2fnOP' => 
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
        'as' => 'generated::lM6TYjFlgfC2fnOP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PRq77qy3prxF4hSO' => 
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
        'as' => 'generated::PRq77qy3prxF4hSO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uCBY85b5TKOF6bN4' => 
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
        'as' => 'generated::uCBY85b5TKOF6bN4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pfzk9Eu3xkPyeVOO' => 
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
        'as' => 'generated::Pfzk9Eu3xkPyeVOO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fNsQidZiWiwYrtfK' => 
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
        'as' => 'generated::fNsQidZiWiwYrtfK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FQwmH6qIdxIitp5j' => 
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
        'as' => 'generated::FQwmH6qIdxIitp5j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s411ll0vvSQSzYay' => 
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
        'as' => 'generated::s411ll0vvSQSzYay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ap87jBd5Kdp4SsCC' => 
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
        'as' => 'generated::ap87jBd5Kdp4SsCC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TIQOuttvLyuCQj5W' => 
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
        'as' => 'generated::TIQOuttvLyuCQj5W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wp4EvM8mG2VCvCr5' => 
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
        'as' => 'generated::Wp4EvM8mG2VCvCr5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rTrZAvafsLOSQoZ2' => 
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
        'as' => 'generated::rTrZAvafsLOSQoZ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZaztMjQ3gyNW1JeZ' => 
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
        'as' => 'generated::ZaztMjQ3gyNW1JeZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oM1gMqk6TeNAww32' => 
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
        'as' => 'generated::oM1gMqk6TeNAww32',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mwZqCuo5cw9oXFvy' => 
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
        'as' => 'generated::mwZqCuo5cw9oXFvy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ifR3FYRb1jshXYUx' => 
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
        'as' => 'generated::ifR3FYRb1jshXYUx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bWnUQIbRwRIEd9i1' => 
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
        'as' => 'generated::bWnUQIbRwRIEd9i1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UqyqgAA3gT27d5Oi' => 
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
        'as' => 'generated::UqyqgAA3gT27d5Oi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DyTduZW44cCn6L9P' => 
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
        'as' => 'generated::DyTduZW44cCn6L9P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dzd67By4ssJOC3zG' => 
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
        'as' => 'generated::Dzd67By4ssJOC3zG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2mh7RLZsHsfdk3ti' => 
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
        'as' => 'generated::2mh7RLZsHsfdk3ti',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UJ63TjhWPfmvY33N' => 
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
        'as' => 'generated::UJ63TjhWPfmvY33N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KVUDSnxNL7P6q3bl' => 
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
        'as' => 'generated::KVUDSnxNL7P6q3bl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XpZQZ5MlPnEDijCN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/profile',
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
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::XpZQZ5MlPnEDijCN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::onuICSdbq8Hc6GyP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentees/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeManager@updateProfile',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::onuICSdbq8Hc6GyP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x0c3YxJb9SNuH5kt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentees/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\MenteeDashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Mentee\\MenteeDashboardController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::x0c3YxJb9SNuH5kt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FHfo0xfVwxhmhJfo' => 
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
        'as' => 'generated::FHfo0xfVwxhmhJfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VnoMmVsMr6bywNtY' => 
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
        'as' => 'generated::VnoMmVsMr6bywNtY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A77q2vhINErM9Ukq' => 
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
        'as' => 'generated::A77q2vhINErM9Ukq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X3S5wQmIUU0v1mQu' => 
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
        'as' => 'generated::X3S5wQmIUU0v1mQu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eV07LVnqyCxBfUgY' => 
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
        'as' => 'generated::eV07LVnqyCxBfUgY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7tcPdqHrrK7kAiOC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentees/bookings/{booking}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@cancelSession',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@cancelSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::7tcPdqHrrK7kAiOC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mMY1r8O7GJ2BmIhW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentees/bookings/{booking}/reschedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@rescheduleSession',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@rescheduleSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentees',
        'where' => 
        array (
        ),
        'as' => 'generated::mMY1r8O7GJ2BmIhW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::00cVwLs7Hy2DGZro' => 
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
        'as' => 'generated::00cVwLs7Hy2DGZro',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gWCQNNvfHUlgGwkF' => 
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
        'as' => 'generated::gWCQNNvfHUlgGwkF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QX7Q4pi09CjjbUzl' => 
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
        'as' => 'generated::QX7Q4pi09CjjbUzl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HDTeAIUch5kY4qya' => 
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
        'as' => 'generated::HDTeAIUch5kY4qya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::32yNUpbvT3dHWfGL' => 
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
        'as' => 'generated::32yNUpbvT3dHWfGL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::drPZe9Fd8QGhA8W6' => 
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
        'as' => 'generated::drPZe9Fd8QGhA8W6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iFzRqFDxMA22ZJwa' => 
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
        'as' => 'generated::iFzRqFDxMA22ZJwa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dFD2obGID3SzZDOD' => 
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
        'as' => 'generated::dFD2obGID3SzZDOD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::23rMEddQpnqd0uAx' => 
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
        'as' => 'generated::23rMEddQpnqd0uAx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HOP4AFdTj7g92Ne8' => 
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
        'as' => 'generated::HOP4AFdTj7g92Ne8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wJqFetkfZHJN5yZb' => 
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
        'as' => 'generated::wJqFetkfZHJN5yZb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6MPjZyiAiaDP8nBE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createAppointment',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@createAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::6MPjZyiAiaDP8nBE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DNclkBwvoUSYZPuf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getAppointments',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::DNclkBwvoUSYZPuf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AOViwvXd4J8sW2PY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/appointments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getAppointment',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::AOViwvXd4J8sW2PY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::71melyAigLrnDTho' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/mentorship/mentors/appointments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@updateAppointment',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@updateAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::71melyAigLrnDTho',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CvbtVtpJY4KzAm1S' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/mentorship/mentors/appointments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@updateAppointment',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@updateAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::CvbtVtpJY4KzAm1S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2XiOVBwf0NJIzh2n' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/mentorship/mentors/appointments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@deleteAppointment',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@deleteAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::2XiOVBwf0NJIzh2n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NOjUfUENoJG1v1nT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::NOjUfUENoJG1v1nT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0oTK4wIa2ycPu8Qd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/todos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@todos',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@todos',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::0oTK4wIa2ycPu8Qd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jQFzvir9wJaUPzpn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/todos/{id}/complete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@completeTodo',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@completeTodo',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::jQFzvir9wJaUPzpn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w7Legy8wZvDdq7Bi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/badges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@badges',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@badges',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::w7Legy8wZvDdq7Bi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ElxwY07F6nkjK80l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@notifications',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@notifications',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::ElxwY07F6nkjK80l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PoSXpMPJhQMexHNH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@search',
        'controller' => 'App\\Http\\Controllers\\Mentorship\\DashboardController@search',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::PoSXpMPJhQMexHNH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::eDztKVb4GnCexF4P' => 
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
        'as' => 'generated::eDztKVb4GnCexF4P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Up1lflrNlnlsNeha' => 
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
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008bd0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::Up1lflrNlnlsNeha',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uIvUfaH9JU4Zclvk' => 
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
        'as' => 'generated::uIvUfaH9JU4Zclvk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yuysXmj1uowGz6hx' => 
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
        'as' => 'generated::yuysXmj1uowGz6hx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WGAfGtEnSFwM93BI' => 
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
        'as' => 'generated::WGAfGtEnSFwM93BI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tZcxAevHKqzsLyBm' => 
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
        'as' => 'generated::tZcxAevHKqzsLyBm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YPc9wltucIsQ07r7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/bookings/{booking}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@cancelSession',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@cancelSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::YPc9wltucIsQ07r7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wlpkrgh8DhIPDUJz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/mentors/bookings/{booking}/reschedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentee\\BookingManager@rescheduleSession',
        'controller' => 'App\\Http\\Controllers\\Mentee\\BookingManager@rescheduleSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::Wlpkrgh8DhIPDUJz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::98WTUW9Wg8UTNQSa' => 
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
        'as' => 'generated::98WTUW9Wg8UTNQSa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::670wcyqTCT7ouX5i' => 
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
        'as' => 'generated::670wcyqTCT7ouX5i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YVQROJH6M1HsY5MH' => 
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
        'as' => 'generated::YVQROJH6M1HsY5MH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SLWUn7fw7QniXuTr' => 
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
        'as' => 'generated::SLWUn7fw7QniXuTr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ci8XVwBFM6Jancsk' => 
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
        'as' => 'generated::ci8XVwBFM6Jancsk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TKdTSNaWVkq3rZFg' => 
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
        'as' => 'generated::TKdTSNaWVkq3rZFg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uqn9b29rcgxlE7Sx' => 
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
        'as' => 'generated::Uqn9b29rcgxlE7Sx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zfzV0kaQW2SY5jbg' => 
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
        'as' => 'generated::zfzV0kaQW2SY5jbg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BWy03ECbF6HM9PJl' => 
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
        'as' => 'generated::BWy03ECbF6HM9PJl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ed8WU4d2X2IenNKV' => 
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
        'as' => 'generated::Ed8WU4d2X2IenNKV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::kxQ08n0KSBGtyyns' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/mentors/assigned-mentees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getAssignedMentees',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getAssignedMentees',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/mentors',
        'where' => 
        array (
        ),
        'as' => 'generated::kxQ08n0KSBGtyyns',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'mentorship.mentee.form' => 
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
        'as' => 'mentorship.mentee.form',
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
    'mentorship.mentee.hold' => 
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
        'as' => 'mentorship.mentee.hold',
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
    'mentorship.mentee.reform' => 
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
        'as' => 'mentorship.mentee.reform',
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
    'mentorship.mentee.upgrade' => 
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
        'as' => 'mentorship.mentee.upgrade',
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
    'mentorship.mentee.kill' => 
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
        'as' => 'mentorship.mentee.kill',
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
    'generated::2za9U07LiCkwKUWU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/admin/mentors/needing-assignments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getMentorsNeedingAssignments',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@getMentorsNeedingAssignments',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2za9U07LiCkwKUWU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qyDIhl22vkSsHkyk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/admin/mentors/run-automated-assignment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@runAutomatedMenteeAssignment',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@runAutomatedMenteeAssignment',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qyDIhl22vkSsHkyk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ll9rgd4XcdacY5z6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/mentorship/admin/mentors/{mentor}/assign-mentees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@manuallyAssignMentees',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@manuallyAssignMentees',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ll9rgd4XcdacY5z6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TFVuXsZJCQWljC8N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/mentorship/admin/mentors/{mentor}/capacity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'mentorship',
        ),
        'uses' => 'App\\Http\\Controllers\\Mentor\\MentorManager@checkMentorCapacity',
        'controller' => 'App\\Http\\Controllers\\Mentor\\MentorManager@checkMentorCapacity',
        'namespace' => NULL,
        'prefix' => 'api/v1/mentorship/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TFVuXsZJCQWljC8N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::arPM70QZ525WK2py' => 
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
        'as' => 'generated::arPM70QZ525WK2py',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5JsN6O4A35xcTFV5' => 
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
        'as' => 'generated::5JsN6O4A35xcTFV5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sS5J9mY1x2YCBn1N' => 
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
        'as' => 'generated::sS5J9mY1x2YCBn1N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pV9MXaBm0geHAN2i' => 
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
        'as' => 'generated::pV9MXaBm0geHAN2i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oQI6JFomiX18VJrr' => 
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
        'as' => 'generated::oQI6JFomiX18VJrr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KFd2UvfwEUFaWibX' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008ed0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KFd2UvfwEUFaWibX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
