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
            '_route' => 'generated::slOmM3BrL5YEek7V',
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
            '_route' => 'generated::sKHZE4jq6faEjt37',
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
            '_route' => 'generated::Q93gdOAMhQjVUKkS',
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
            '_route' => 'generated::iVwEsUn4pAy3hUBW',
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
            '_route' => 'generated::HFuEI4VpSoT4X8Wn',
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
            '_route' => 'generated::j4FN1z15pYIYJ0DT',
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
            '_route' => 'generated::LFlH5xcYxcyDGbMV',
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
            '_route' => 'generated::vjfSDuiq7z0JZhn2',
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
            '_route' => 'generated::aShMZoMJXHge0wac',
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
            '_route' => 'generated::CsJtPLsb8DiUUBm7',
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
            '_route' => 'generated::YGIUXtLpzHQFFWB5',
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
            '_route' => 'generated::AzzTed3uXhUShftH',
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
            '_route' => 'generated::JxNLBOM19N8DfNHd',
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
            '_route' => 'generated::GjmCDJNG17V4qPGh',
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
            '_route' => 'generated::kZHbVmGtsB9rLJIz',
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
            '_route' => 'generated::7afSWdGF8QUKVKiU',
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
            '_route' => 'generated::bs5kyLOocWieCrsj',
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
            '_route' => 'generated::YArz67yZgmZXruId',
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
            '_route' => 'generated::oNAZcf7r9ve9aNEf',
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
            '_route' => 'generated::7OigUeLKrTT2aHrJ',
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
            '_route' => 'generated::3mB6pCpOOfZbxyYT',
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
            '_route' => 'generated::LoloqJERNMoXaEvY',
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
            '_route' => 'generated::uzy2AOyGa4mFitp3',
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
            '_route' => 'generated::BZ8GlVnbCo1nZcuJ',
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
            '_route' => 'generated::Jv8oy6tQLYc7zIz8',
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
            '_route' => 'generated::STRd4o0BTaU0eauo',
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
            '_route' => 'generated::nX9PZSpThfp15EC6',
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
            '_route' => 'generated::rigJA3MrLzbthSY4',
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
            '_route' => 'generated::Pte7v4Bjy0bZ45Zx',
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
            '_route' => 'generated::kgXp88A8RKE3JSdb',
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
            '_route' => 'generated::fcs6o9xuj2koInZV',
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
            '_route' => 'generated::EXN0075fYZKKO9mL',
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
            '_route' => 'generated::UvLHdoTdVfIlcTs6',
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
            '_route' => 'generated::rp4TxviF6cEdkBxp',
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
            '_route' => 'generated::qGS9HZFJ1QlBSAJl',
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
            '_route' => 'generated::30lTWrk5K4I4jXkc',
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
            '_route' => 'generated::e9FklICbEh8zMnfU',
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
            '_route' => 'generated::PRh71p3lpR8kfGkt',
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
            '_route' => 'generated::RGpCAe4esM17eO06',
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
            '_route' => 'generated::yypMcMnMJGCQrTJk',
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
            '_route' => 'generated::3zQvYm0hO7jWyuLV',
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
            '_route' => 'generated::rjg2AE7mpu6FSI9l',
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
            '_route' => 'generated::SHpaYOyOCw1Vfg5G',
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
            '_route' => 'generated::O6eHEl68yyYWydVJ',
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
            '_route' => 'generated::3snMZeWauCv6fR0l',
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
            '_route' => 'generated::UJdwtgUA8mr4SoTG',
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
            '_route' => 'generated::buxbyygCZhaIuT7x',
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
            '_route' => 'generated::GenrgaLpFcMbUwPZ',
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
            '_route' => 'generated::gifK0uE9bj9mKAjc',
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
            '_route' => 'generated::CM4Qssv5YfY3EI14',
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
            '_route' => 'generated::qqSX3qGk9OKol5Ct',
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
            '_route' => 'generated::sGn1vkQtnkaKxV6D',
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
            '_route' => 'generated::q9b5aRROn8RImeGH',
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
            '_route' => 'generated::at455Z0suLWbbASn',
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
            '_route' => 'generated::rKxQ4bMiGFTB0FTs',
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
            '_route' => 'generated::EVdVjVnVNYyOyRkk',
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
            '_route' => 'generated::l5G3z83v4qeygsHf',
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
            '_route' => 'generated::ljr5Sw2gUS7yHmAZ',
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
            '_route' => 'generated::4LXuTEcdx1A7N3Vo',
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
            '_route' => 'generated::G5BdShtSm0b3CR3S',
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
            '_route' => 'generated::ai8Kwvx18TZaBS0i',
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
            '_route' => 'generated::LKHWJp9YedIx20EU',
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
            '_route' => 'generated::lLtZeFtNRE8Mel2D',
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
            '_route' => 'generated::HajvWDOMP1E5XILj',
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
            '_route' => 'generated::ar9RFEW4tKDNFN14',
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
            '_route' => 'generated::Bw2rfabMaAAn6ifc',
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
            '_route' => 'generated::iG7nh8tX4nAZcX7T',
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
            '_route' => 'generated::vrol2EzDLzYx8xjf',
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
            '_route' => 'generated::3s7umdK9bD5cseAS',
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
            '_route' => 'generated::pDsnIfDD9X9ZtrQb',
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
            '_route' => 'generated::9V57jBlBafOPKKWL',
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
            '_route' => 'generated::pLgjn25aUIdfj3QN',
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
            '_route' => 'generated::mqPARTXcfjy0Sgt5',
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
            '_route' => 'generated::Mvt4uHqEIsTUyVj2',
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
            '_route' => 'generated::6bFEoTaabGnYqxQ2',
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
            '_route' => 'generated::ATNnOCFX2KVLj06x',
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
            '_route' => 'generated::A4DfghV9rsctCj9O',
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
            '_route' => 'generated::liEy5igzwoLZUnd3',
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
            '_route' => 'generated::eGMIAisuXlNgqHGD',
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
            '_route' => 'generated::KARCAcwLY0kHfBnc',
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
            '_route' => 'generated::l8cwitrj7jx4wY51',
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
            '_route' => 'generated::Cf9K6tki8Gw03hXp',
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
            '_route' => 'generated::aYsB22HCFAToBUji',
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
            '_route' => 'generated::9SzHIZ8ihawrFP3X',
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
            '_route' => 'generated::AifIFMwjuh0rD4NM',
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
            '_route' => 'generated::pU4saw8O0CmCTw9y',
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
            '_route' => 'generated::IANrbsNbCcle7QJH',
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
            '_route' => 'generated::LFMDbqbkbDD8aK8w',
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
            '_route' => 'generated::xnJgp7nwte4j6Szx',
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
            '_route' => 'generated::qhoHdDyLRihlGoFm',
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
            '_route' => 'generated::GIuVc3trkHh09vPI',
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
            '_route' => 'generated::bMt67xdgfD1PGARY',
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
            '_route' => 'generated::NX7ih22UAaVDwQNu',
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
            '_route' => 'generated::26bOQ3aUcFNJwSV9',
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
            '_route' => 'generated::ggN4l9dEqtJE1xEb',
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
            '_route' => 'generated::xmo5YmiNziFQwo5K',
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
            '_route' => 'generated::O0Co2mNqopsfieuC',
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
            '_route' => 'generated::eKTgx4PJnIWsnRkI',
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
            '_route' => 'generated::y2n6xM6zk1NDFsmN',
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
            '_route' => 'generated::XCr91FDEjOnFVM3A',
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
            '_route' => 'generated::ASWVfMvQWifwLnYd',
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
            '_route' => 'generated::O4vXtRcR0oTkaOp3',
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
            '_route' => 'generated::XHSDwJeaAVDPGNY4',
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
            '_route' => 'generated::p3SpAoFVtN8KIFqS',
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
            '_route' => 'generated::zrTRkh1TVYZLqvee',
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
            '_route' => 'generated::RjikoM8n917IgKgo',
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
            '_route' => 'generated::TISflsN5rwtJV1I2',
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
            '_route' => 'generated::SskWDpk9mVisdr6A',
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
            '_route' => 'generated::NBPbWGFImMJo3go7',
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
            '_route' => 'generated::6FzpYrvZTB5YRcPM',
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
            '_route' => 'generated::jdAXek4x803UMAcW',
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
            '_route' => 'generated::sCgn4qkNfwF6TyNE',
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
            '_route' => 'generated::z1FBQItqztAs854k',
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
            '_route' => 'generated::BPRWypucG4pX1NvZ',
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
            '_route' => 'generated::2yoQQ0WB6UjRFSEr',
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
            '_route' => 'generated::SG93X8woQJZQmiRj',
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
            '_route' => 'generated::Hkw29OE0dnM8FE7m',
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
            '_route' => 'generated::CxNLCJ7rRULIlT78',
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
            '_route' => 'generated::PSQ5pjxvtmLMilT4',
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
            '_route' => 'generated::pDIMxqR1qDuF6QEr',
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
            '_route' => 'generated::E7UHVEVqyMsgt6gh',
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
            '_route' => 'generated::3ORd4RR8Pgf3RK7N',
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
            '_route' => 'generated::h6ZYhAolNlv8Omw5',
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
            '_route' => 'generated::pu9OKfrKL42SC2U1',
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
            '_route' => 'generated::JfvRhFa2QEcMqv5e',
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
            '_route' => 'generated::I0hb6gkTXGKICkin',
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
            '_route' => 'generated::fUou58pvQXycXLr8',
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
            '_route' => 'generated::775Mb4hKqcFu9bQ9',
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
            '_route' => 'generated::BqhgKfCs4BFSFIaL',
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
            '_route' => 'generated::sz0LURP5oifpOEEg',
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
            '_route' => 'generated::PNsLagtVg6PiaxVn',
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
            '_route' => 'generated::P5eJQlr6S1D3b53o',
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
            '_route' => 'generated::yTefhRUjaFNB9TJ9',
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
            '_route' => 'generated::dAZOGrOtYAWERqLg',
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
            '_route' => 'generated::9idDOe1VWU40zIDN',
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
            '_route' => 'generated::aNaFxiarEynzgrDp',
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
            '_route' => 'generated::ebRLhVujLZxKyBVH',
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
            '_route' => 'generated::c02rdvEL0x3Ek8i8',
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
            '_route' => 'generated::PEBQ4litsyk4wI0z',
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
            '_route' => 'generated::wKX5qZKaH9Sle791',
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
            '_route' => 'generated::Pl0jtoqDIFrqQRsh',
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
            '_route' => 'generated::Kx7wW6JMWnJjBbl2',
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
            '_route' => 'generated::1Qcrmkn5lQ6ljxNG',
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
            '_route' => 'generated::ShRFHpn0PZVZfSXI',
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
            '_route' => 'generated::Zhmj8mEeWICiVyaf',
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
            '_route' => 'generated::CtyZgOBSdLDjMZeT',
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
            '_route' => 'generated::vbtsjVYi8Z1ljbec',
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
            '_route' => 'generated::yax00GiMyAMvf7wo',
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
            '_route' => 'generated::8LpSp6tJUd3cg4XN',
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
            '_route' => 'generated::8liotE6QDdQshEFM',
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
            '_route' => 'generated::6THXia9QfF9rdDzC',
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
            '_route' => 'generated::mzDsJkWnTltkppny',
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
            '_route' => 'generated::Gwi8YihpBD6DCSpi',
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
            '_route' => 'generated::yOGyIuasHIwYx8yP',
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
            '_route' => 'generated::epshwqHB1kmEEAFz',
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
            '_route' => 'generated::5wSzZhoLgA8qoD1Y',
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
            '_route' => 'generated::QAyTlS7v8TzIERv6',
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
            '_route' => 'generated::ddmhOxpkRrVoxk3p',
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
            '_route' => 'generated::0JzOuTz6MclvLSQL',
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
            '_route' => 'generated::M43XJntoLRl5Him1',
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
            '_route' => 'generated::WdbA5QhYm9y3YV7I',
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
            '_route' => 'generated::xMQETOZFQPQy47yq',
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
            '_route' => 'generated::7rhvCoLUDk4mT4qq',
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
            '_route' => 'generated::zinr7nq9Lx7eHjAY',
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
            '_route' => 'generated::qR90I2tUAnOXOosY',
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
            '_route' => 'generated::anKOswDsW8MPesxO',
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
            '_route' => 'generated::IBgZmbUx3yL0NGCX',
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
            '_route' => 'generated::VviEuA2bGUmgitZe',
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
            '_route' => 'generated::jBR49bk39EZHIJ0C',
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
            '_route' => 'generated::u2d0HxKebHaqyAed',
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
            '_route' => 'generated::EDt9xDr1claqQXYk',
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
            '_route' => 'generated::c1Z8K7b9MFfrRyNp',
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
            '_route' => 'generated::8XEAxkWwCW0CfmZt',
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
            '_route' => 'generated::EghXyLk2qOA0SFdn',
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
            '_route' => 'generated::KebjeGbpnYkiBn5Q',
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
            '_route' => 'generated::tURADofQCli4OLYe',
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
            '_route' => 'generated::KGT7rlPcQtM31wIU',
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
            '_route' => 'generated::jFvEfRQz0rZiHXOS',
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
            '_route' => 'generated::2b7ELjmBDikhfvje',
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
            '_route' => 'generated::iM7mqvf8bluRh4yR',
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
            '_route' => 'generated::gs3xflvzfBQcuVai',
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
            '_route' => 'generated::HQMIu5Khz2UvplHo',
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
            '_route' => 'generated::j5wZaWL4mmwdDoey',
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
            '_route' => 'generated::b8sV0XiFizmZ6QDp',
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
            '_route' => 'generated::sdq1GIItLlLLfaoY',
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
            '_route' => 'generated::HUsQFj2rJfN3Legm',
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
            '_route' => 'generated::XWfB6yg6nuptXGhZ',
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
            '_route' => 'generated::cBUr304zHfea0CVm',
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
            '_route' => 'generated::yGAOq0g3t0L4jEw5',
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
            '_route' => 'generated::BurlTnSStEeJIeDV',
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
            '_route' => 'generated::p8ar0zGic8g6CLug',
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
            '_route' => 'generated::dpTF9l7pF9YLU5wv',
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
            '_route' => 'generated::C2cdNzPtFvyD5pjh',
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
            '_route' => 'generated::2KU8Zgtn21LC22UW',
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
            '_route' => 'generated::CLDHwmiW9Fo3KdtE',
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
            '_route' => 'generated::ewZAOsCHfNKub3z1',
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
            '_route' => 'generated::I8wGJAgyArUjQyao',
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
            '_route' => 'generated::taFjtziPqt3wZNu3',
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
            '_route' => 'generated::8FHboJ1bE1f9kEY9',
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
            '_route' => 'generated::4oWBVDqIwGLQ56lI',
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
            '_route' => 'generated::UzMhu3uxML7qXh3l',
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
            '_route' => 'generated::c3OdhXtZeEKeR2tZ',
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
            '_route' => 'generated::MuVE86eLKF4pkAGb',
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
            '_route' => 'generated::J5vaRvlzo7MAaXXg',
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
            '_route' => 'generated::d9f2NSMok2G9RfhN',
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
            '_route' => 'generated::7wivi5lpDvai2fVu',
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
            '_route' => 'generated::nK0YxTsaOL67iZWr',
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
            '_route' => 'generated::IxA1AuX7fcta7PgV',
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
            '_route' => 'generated::vxmau7SgI8s241QZ',
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
            '_route' => 'generated::ekC5PwXVvzCvly9D',
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
            '_route' => 'generated::jLMoW4ZpLAek4n2H',
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
            '_route' => 'generated::ImTkE1XCUWw331Ki',
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
            '_route' => 'generated::ApzAPmByxehtLfgg',
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
            '_route' => 'generated::xkijtKXhkslfvopx',
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
            '_route' => 'generated::jgVj1sOy9sDj0WrC',
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
            '_route' => 'generated::J2nW1cZ3DV00LgfI',
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
            '_route' => 'generated::kLv6uxWA6y0yI9Qo',
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
            '_route' => 'generated::9jY1rn5reoHg92P9',
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
            '_route' => 'generated::ZQJ1Hf1iMlNkXbs2',
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
            '_route' => 'generated::ISkvEsgrD1bHB6iQ',
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
            '_route' => 'generated::NDgM2M2NAoqdk5Cs',
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
            '_route' => 'generated::LyhsE6A367pB4FWa',
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
            '_route' => 'generated::bRufZCzuEU4qbOQw',
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
            '_route' => 'generated::2xzJZkyaPx1Y0pHm',
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
    'generated::slOmM3BrL5YEek7V' => 
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
        'as' => 'generated::slOmM3BrL5YEek7V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sKHZE4jq6faEjt37' => 
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
        'as' => 'generated::sKHZE4jq6faEjt37',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q93gdOAMhQjVUKkS' => 
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
        'as' => 'generated::Q93gdOAMhQjVUKkS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iVwEsUn4pAy3hUBW' => 
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
        'as' => 'generated::iVwEsUn4pAy3hUBW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HFuEI4VpSoT4X8Wn' => 
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
        'as' => 'generated::HFuEI4VpSoT4X8Wn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j4FN1z15pYIYJ0DT' => 
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
        'as' => 'generated::j4FN1z15pYIYJ0DT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LFlH5xcYxcyDGbMV' => 
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
        'as' => 'generated::LFlH5xcYxcyDGbMV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I0hb6gkTXGKICkin' => 
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
        'as' => 'generated::I0hb6gkTXGKICkin',
      ),
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
    'generated::fUou58pvQXycXLr8' => 
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
        'as' => 'generated::fUou58pvQXycXLr8',
      ),
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
    'generated::vjfSDuiq7z0JZhn2' => 
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
        'as' => 'generated::vjfSDuiq7z0JZhn2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aShMZoMJXHge0wac' => 
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
        'as' => 'generated::aShMZoMJXHge0wac',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CsJtPLsb8DiUUBm7' => 
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
        'as' => 'generated::CsJtPLsb8DiUUBm7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::YGIUXtLpzHQFFWB5' => 
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
        'as' => 'generated::YGIUXtLpzHQFFWB5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AzzTed3uXhUShftH' => 
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
        'as' => 'generated::AzzTed3uXhUShftH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JxNLBOM19N8DfNHd' => 
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
        'as' => 'generated::JxNLBOM19N8DfNHd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::anKOswDsW8MPesxO' => 
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
        'as' => 'generated::anKOswDsW8MPesxO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GjmCDJNG17V4qPGh' => 
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
        'as' => 'generated::GjmCDJNG17V4qPGh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kZHbVmGtsB9rLJIz' => 
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
        'as' => 'generated::kZHbVmGtsB9rLJIz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7afSWdGF8QUKVKiU' => 
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
        'as' => 'generated::7afSWdGF8QUKVKiU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bs5kyLOocWieCrsj' => 
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
        'as' => 'generated::bs5kyLOocWieCrsj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YArz67yZgmZXruId' => 
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
        'as' => 'generated::YArz67yZgmZXruId',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oNAZcf7r9ve9aNEf' => 
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
        'as' => 'generated::oNAZcf7r9ve9aNEf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7OigUeLKrTT2aHrJ' => 
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
        'as' => 'generated::7OigUeLKrTT2aHrJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3mB6pCpOOfZbxyYT' => 
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
        'as' => 'generated::3mB6pCpOOfZbxyYT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LoloqJERNMoXaEvY' => 
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
        'as' => 'generated::LoloqJERNMoXaEvY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uzy2AOyGa4mFitp3' => 
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
        'as' => 'generated::uzy2AOyGa4mFitp3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BZ8GlVnbCo1nZcuJ' => 
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
        'as' => 'generated::BZ8GlVnbCo1nZcuJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jv8oy6tQLYc7zIz8' => 
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
        'as' => 'generated::Jv8oy6tQLYc7zIz8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::STRd4o0BTaU0eauo' => 
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
        'as' => 'generated::STRd4o0BTaU0eauo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nX9PZSpThfp15EC6' => 
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
        'as' => 'generated::nX9PZSpThfp15EC6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rigJA3MrLzbthSY4' => 
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
        'as' => 'generated::rigJA3MrLzbthSY4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::775Mb4hKqcFu9bQ9' => 
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
        'as' => 'generated::775Mb4hKqcFu9bQ9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BqhgKfCs4BFSFIaL' => 
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
        'as' => 'generated::BqhgKfCs4BFSFIaL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sz0LURP5oifpOEEg' => 
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
        'as' => 'generated::sz0LURP5oifpOEEg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PNsLagtVg6PiaxVn' => 
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
        'as' => 'generated::PNsLagtVg6PiaxVn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P5eJQlr6S1D3b53o' => 
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
        'as' => 'generated::P5eJQlr6S1D3b53o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pte7v4Bjy0bZ45Zx' => 
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
        'as' => 'generated::Pte7v4Bjy0bZ45Zx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kgXp88A8RKE3JSdb' => 
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
        'as' => 'generated::kgXp88A8RKE3JSdb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fcs6o9xuj2koInZV' => 
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
        'as' => 'generated::fcs6o9xuj2koInZV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EXN0075fYZKKO9mL' => 
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
        'as' => 'generated::EXN0075fYZKKO9mL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UvLHdoTdVfIlcTs6' => 
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
        'as' => 'generated::UvLHdoTdVfIlcTs6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yTefhRUjaFNB9TJ9' => 
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
        'as' => 'generated::yTefhRUjaFNB9TJ9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dAZOGrOtYAWERqLg' => 
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
        'as' => 'generated::dAZOGrOtYAWERqLg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9idDOe1VWU40zIDN' => 
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
        'as' => 'generated::9idDOe1VWU40zIDN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rp4TxviF6cEdkBxp' => 
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
        'as' => 'generated::rp4TxviF6cEdkBxp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qGS9HZFJ1QlBSAJl' => 
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
        'as' => 'generated::qGS9HZFJ1QlBSAJl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::30lTWrk5K4I4jXkc' => 
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
        'as' => 'generated::30lTWrk5K4I4jXkc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e9FklICbEh8zMnfU' => 
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
        'as' => 'generated::e9FklICbEh8zMnfU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PRh71p3lpR8kfGkt' => 
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
        'as' => 'generated::PRh71p3lpR8kfGkt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RGpCAe4esM17eO06' => 
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
        'as' => 'generated::RGpCAe4esM17eO06',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yypMcMnMJGCQrTJk' => 
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
        'as' => 'generated::yypMcMnMJGCQrTJk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3zQvYm0hO7jWyuLV' => 
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
        'as' => 'generated::3zQvYm0hO7jWyuLV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rjg2AE7mpu6FSI9l' => 
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
        'as' => 'generated::rjg2AE7mpu6FSI9l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SHpaYOyOCw1Vfg5G' => 
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
        'as' => 'generated::SHpaYOyOCw1Vfg5G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O6eHEl68yyYWydVJ' => 
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
        'as' => 'generated::O6eHEl68yyYWydVJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3snMZeWauCv6fR0l' => 
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
        'as' => 'generated::3snMZeWauCv6fR0l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ebRLhVujLZxKyBVH' => 
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
        'as' => 'generated::ebRLhVujLZxKyBVH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UJdwtgUA8mr4SoTG' => 
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
        'as' => 'generated::UJdwtgUA8mr4SoTG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::buxbyygCZhaIuT7x' => 
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
        'as' => 'generated::buxbyygCZhaIuT7x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GenrgaLpFcMbUwPZ' => 
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
        'as' => 'generated::GenrgaLpFcMbUwPZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c02rdvEL0x3Ek8i8' => 
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
        'as' => 'generated::c02rdvEL0x3Ek8i8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PEBQ4litsyk4wI0z' => 
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
        'as' => 'generated::PEBQ4litsyk4wI0z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pl0jtoqDIFrqQRsh' => 
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
        'as' => 'generated::Pl0jtoqDIFrqQRsh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kx7wW6JMWnJjBbl2' => 
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
        'as' => 'generated::Kx7wW6JMWnJjBbl2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wKX5qZKaH9Sle791' => 
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
        'as' => 'generated::wKX5qZKaH9Sle791',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gifK0uE9bj9mKAjc' => 
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
        'as' => 'generated::gifK0uE9bj9mKAjc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aNaFxiarEynzgrDp' => 
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
        'as' => 'generated::aNaFxiarEynzgrDp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CM4Qssv5YfY3EI14' => 
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
        'as' => 'generated::CM4Qssv5YfY3EI14',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qqSX3qGk9OKol5Ct' => 
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
        'as' => 'generated::qqSX3qGk9OKol5Ct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::sGn1vkQtnkaKxV6D' => 
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
        'as' => 'generated::sGn1vkQtnkaKxV6D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8liotE6QDdQshEFM' => 
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
        'as' => 'generated::8liotE6QDdQshEFM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6THXia9QfF9rdDzC' => 
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
        'as' => 'generated::6THXia9QfF9rdDzC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mzDsJkWnTltkppny' => 
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
        'as' => 'generated::mzDsJkWnTltkppny',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q9b5aRROn8RImeGH' => 
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
        'as' => 'generated::q9b5aRROn8RImeGH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::at455Z0suLWbbASn' => 
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
        'as' => 'generated::at455Z0suLWbbASn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rKxQ4bMiGFTB0FTs' => 
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
        'as' => 'generated::rKxQ4bMiGFTB0FTs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EVdVjVnVNYyOyRkk' => 
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
        'as' => 'generated::EVdVjVnVNYyOyRkk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l5G3z83v4qeygsHf' => 
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
        'as' => 'generated::l5G3z83v4qeygsHf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ljr5Sw2gUS7yHmAZ' => 
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
        'as' => 'generated::ljr5Sw2gUS7yHmAZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gwi8YihpBD6DCSpi' => 
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
        'as' => 'generated::Gwi8YihpBD6DCSpi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yOGyIuasHIwYx8yP' => 
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
        'as' => 'generated::yOGyIuasHIwYx8yP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::epshwqHB1kmEEAFz' => 
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
        'as' => 'generated::epshwqHB1kmEEAFz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4LXuTEcdx1A7N3Vo' => 
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
        'as' => 'generated::4LXuTEcdx1A7N3Vo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5wSzZhoLgA8qoD1Y' => 
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
        'as' => 'generated::5wSzZhoLgA8qoD1Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G5BdShtSm0b3CR3S' => 
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
        'as' => 'generated::G5BdShtSm0b3CR3S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ai8Kwvx18TZaBS0i' => 
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
        'as' => 'generated::ai8Kwvx18TZaBS0i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QAyTlS7v8TzIERv6' => 
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
        'as' => 'generated::QAyTlS7v8TzIERv6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ddmhOxpkRrVoxk3p' => 
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
        'as' => 'generated::ddmhOxpkRrVoxk3p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0JzOuTz6MclvLSQL' => 
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
        'as' => 'generated::0JzOuTz6MclvLSQL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LKHWJp9YedIx20EU' => 
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
        'as' => 'generated::LKHWJp9YedIx20EU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lLtZeFtNRE8Mel2D' => 
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
        'as' => 'generated::lLtZeFtNRE8Mel2D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HajvWDOMP1E5XILj' => 
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
        'as' => 'generated::HajvWDOMP1E5XILj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M43XJntoLRl5Him1' => 
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
        'as' => 'generated::M43XJntoLRl5Him1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ar9RFEW4tKDNFN14' => 
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
        'as' => 'generated::ar9RFEW4tKDNFN14',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bw2rfabMaAAn6ifc' => 
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
        'as' => 'generated::Bw2rfabMaAAn6ifc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WdbA5QhYm9y3YV7I' => 
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
        'as' => 'generated::WdbA5QhYm9y3YV7I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xMQETOZFQPQy47yq' => 
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
        'as' => 'generated::xMQETOZFQPQy47yq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7rhvCoLUDk4mT4qq' => 
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
        'as' => 'generated::7rhvCoLUDk4mT4qq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zinr7nq9Lx7eHjAY' => 
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
        'as' => 'generated::zinr7nq9Lx7eHjAY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qR90I2tUAnOXOosY' => 
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
        'as' => 'generated::qR90I2tUAnOXOosY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iG7nh8tX4nAZcX7T' => 
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
        'as' => 'generated::iG7nh8tX4nAZcX7T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vrol2EzDLzYx8xjf' => 
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
        'as' => 'generated::vrol2EzDLzYx8xjf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3s7umdK9bD5cseAS' => 
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
        'as' => 'generated::3s7umdK9bD5cseAS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pDsnIfDD9X9ZtrQb' => 
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
        'as' => 'generated::pDsnIfDD9X9ZtrQb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9V57jBlBafOPKKWL' => 
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
        'as' => 'generated::9V57jBlBafOPKKWL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pLgjn25aUIdfj3QN' => 
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
        'as' => 'generated::pLgjn25aUIdfj3QN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mqPARTXcfjy0Sgt5' => 
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
        'as' => 'generated::mqPARTXcfjy0Sgt5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mvt4uHqEIsTUyVj2' => 
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
        'as' => 'generated::Mvt4uHqEIsTUyVj2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IBgZmbUx3yL0NGCX' => 
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
        'as' => 'generated::IBgZmbUx3yL0NGCX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VviEuA2bGUmgitZe' => 
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
        'as' => 'generated::VviEuA2bGUmgitZe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jBR49bk39EZHIJ0C' => 
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
        'as' => 'generated::jBR49bk39EZHIJ0C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6bFEoTaabGnYqxQ2' => 
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
        'as' => 'generated::6bFEoTaabGnYqxQ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A4DfghV9rsctCj9O' => 
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
        'as' => 'generated::A4DfghV9rsctCj9O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ATNnOCFX2KVLj06x' => 
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
        'as' => 'generated::ATNnOCFX2KVLj06x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u2d0HxKebHaqyAed' => 
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
        'as' => 'generated::u2d0HxKebHaqyAed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EDt9xDr1claqQXYk' => 
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
        'as' => 'generated::EDt9xDr1claqQXYk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c1Z8K7b9MFfrRyNp' => 
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
        'as' => 'generated::c1Z8K7b9MFfrRyNp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8XEAxkWwCW0CfmZt' => 
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
        'as' => 'generated::8XEAxkWwCW0CfmZt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EghXyLk2qOA0SFdn' => 
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
        'as' => 'generated::EghXyLk2qOA0SFdn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KebjeGbpnYkiBn5Q' => 
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
        'as' => 'generated::KebjeGbpnYkiBn5Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tURADofQCli4OLYe' => 
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
        'as' => 'generated::tURADofQCli4OLYe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KGT7rlPcQtM31wIU' => 
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
        'as' => 'generated::KGT7rlPcQtM31wIU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jFvEfRQz0rZiHXOS' => 
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
        'as' => 'generated::jFvEfRQz0rZiHXOS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2b7ELjmBDikhfvje' => 
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
        'as' => 'generated::2b7ELjmBDikhfvje',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::liEy5igzwoLZUnd3' => 
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
        'as' => 'generated::liEy5igzwoLZUnd3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iM7mqvf8bluRh4yR' => 
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
        'as' => 'generated::iM7mqvf8bluRh4yR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gs3xflvzfBQcuVai' => 
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
        'as' => 'generated::gs3xflvzfBQcuVai',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b8sV0XiFizmZ6QDp' => 
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
        'as' => 'generated::b8sV0XiFizmZ6QDp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HQMIu5Khz2UvplHo' => 
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
        'as' => 'generated::HQMIu5Khz2UvplHo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j5wZaWL4mmwdDoey' => 
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
        'as' => 'generated::j5wZaWL4mmwdDoey',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sdq1GIItLlLLfaoY' => 
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
        'as' => 'generated::sdq1GIItLlLLfaoY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eGMIAisuXlNgqHGD' => 
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
        'as' => 'generated::eGMIAisuXlNgqHGD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KARCAcwLY0kHfBnc' => 
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
        'as' => 'generated::KARCAcwLY0kHfBnc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HUsQFj2rJfN3Legm' => 
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
        'as' => 'generated::HUsQFj2rJfN3Legm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XWfB6yg6nuptXGhZ' => 
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
        'as' => 'generated::XWfB6yg6nuptXGhZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cBUr304zHfea0CVm' => 
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
        'as' => 'generated::cBUr304zHfea0CVm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yGAOq0g3t0L4jEw5' => 
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
        'as' => 'generated::yGAOq0g3t0L4jEw5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BurlTnSStEeJIeDV' => 
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
        'as' => 'generated::BurlTnSStEeJIeDV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l8cwitrj7jx4wY51' => 
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
        'as' => 'generated::l8cwitrj7jx4wY51',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cf9K6tki8Gw03hXp' => 
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
        'as' => 'generated::Cf9K6tki8Gw03hXp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1Qcrmkn5lQ6ljxNG' => 
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
        'as' => 'generated::1Qcrmkn5lQ6ljxNG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ShRFHpn0PZVZfSXI' => 
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
        'as' => 'generated::ShRFHpn0PZVZfSXI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zhmj8mEeWICiVyaf' => 
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
        'as' => 'generated::Zhmj8mEeWICiVyaf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CtyZgOBSdLDjMZeT' => 
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
        'as' => 'generated::CtyZgOBSdLDjMZeT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aYsB22HCFAToBUji' => 
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
        'as' => 'generated::aYsB22HCFAToBUji',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9SzHIZ8ihawrFP3X' => 
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
        'as' => 'generated::9SzHIZ8ihawrFP3X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vbtsjVYi8Z1ljbec' => 
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
        'as' => 'generated::vbtsjVYi8Z1ljbec',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yax00GiMyAMvf7wo' => 
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
        'as' => 'generated::yax00GiMyAMvf7wo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8LpSp6tJUd3cg4XN' => 
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
        'as' => 'generated::8LpSp6tJUd3cg4XN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AifIFMwjuh0rD4NM' => 
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
        'as' => 'generated::AifIFMwjuh0rD4NM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pU4saw8O0CmCTw9y' => 
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
        'as' => 'generated::pU4saw8O0CmCTw9y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p8ar0zGic8g6CLug' => 
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
        'as' => 'generated::p8ar0zGic8g6CLug',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dpTF9l7pF9YLU5wv' => 
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
        'as' => 'generated::dpTF9l7pF9YLU5wv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C2cdNzPtFvyD5pjh' => 
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
        'as' => 'generated::C2cdNzPtFvyD5pjh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IANrbsNbCcle7QJH' => 
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
        'as' => 'generated::IANrbsNbCcle7QJH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LFMDbqbkbDD8aK8w' => 
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
        'as' => 'generated::LFMDbqbkbDD8aK8w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xnJgp7nwte4j6Szx' => 
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
        'as' => 'generated::xnJgp7nwte4j6Szx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qhoHdDyLRihlGoFm' => 
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
        'as' => 'generated::qhoHdDyLRihlGoFm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GIuVc3trkHh09vPI' => 
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
        'as' => 'generated::GIuVc3trkHh09vPI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2KU8Zgtn21LC22UW' => 
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
        'as' => 'generated::2KU8Zgtn21LC22UW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CLDHwmiW9Fo3KdtE' => 
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
        'as' => 'generated::CLDHwmiW9Fo3KdtE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ewZAOsCHfNKub3z1' => 
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
        'as' => 'generated::ewZAOsCHfNKub3z1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I8wGJAgyArUjQyao' => 
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
        'as' => 'generated::I8wGJAgyArUjQyao',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::taFjtziPqt3wZNu3' => 
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
        'as' => 'generated::taFjtziPqt3wZNu3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bMt67xdgfD1PGARY' => 
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
        'as' => 'generated::bMt67xdgfD1PGARY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NX7ih22UAaVDwQNu' => 
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
        'as' => 'generated::NX7ih22UAaVDwQNu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c3OdhXtZeEKeR2tZ' => 
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
        'as' => 'generated::c3OdhXtZeEKeR2tZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MuVE86eLKF4pkAGb' => 
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
        'as' => 'generated::MuVE86eLKF4pkAGb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J5vaRvlzo7MAaXXg' => 
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
        'as' => 'generated::J5vaRvlzo7MAaXXg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::26bOQ3aUcFNJwSV9' => 
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
        'as' => 'generated::26bOQ3aUcFNJwSV9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d9f2NSMok2G9RfhN' => 
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
        'as' => 'generated::d9f2NSMok2G9RfhN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7wivi5lpDvai2fVu' => 
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
        'as' => 'generated::7wivi5lpDvai2fVu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nK0YxTsaOL67iZWr' => 
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
        'as' => 'generated::nK0YxTsaOL67iZWr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ggN4l9dEqtJE1xEb' => 
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
        'as' => 'generated::ggN4l9dEqtJE1xEb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xmo5YmiNziFQwo5K' => 
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
        'as' => 'generated::xmo5YmiNziFQwo5K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8FHboJ1bE1f9kEY9' => 
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
        'as' => 'generated::8FHboJ1bE1f9kEY9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4oWBVDqIwGLQ56lI' => 
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
        'as' => 'generated::4oWBVDqIwGLQ56lI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UzMhu3uxML7qXh3l' => 
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
        'as' => 'generated::UzMhu3uxML7qXh3l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O0Co2mNqopsfieuC' => 
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
        'as' => 'generated::O0Co2mNqopsfieuC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eKTgx4PJnIWsnRkI' => 
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
        'as' => 'generated::eKTgx4PJnIWsnRkI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y2n6xM6zk1NDFsmN' => 
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
        'as' => 'generated::y2n6xM6zk1NDFsmN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XCr91FDEjOnFVM3A' => 
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
        'as' => 'generated::XCr91FDEjOnFVM3A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ASWVfMvQWifwLnYd' => 
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
        'as' => 'generated::ASWVfMvQWifwLnYd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O4vXtRcR0oTkaOp3' => 
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
        'as' => 'generated::O4vXtRcR0oTkaOp3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XHSDwJeaAVDPGNY4' => 
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
        'as' => 'generated::XHSDwJeaAVDPGNY4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p3SpAoFVtN8KIFqS' => 
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
        'as' => 'generated::p3SpAoFVtN8KIFqS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zrTRkh1TVYZLqvee' => 
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
        'as' => 'generated::zrTRkh1TVYZLqvee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RjikoM8n917IgKgo' => 
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
        'as' => 'generated::RjikoM8n917IgKgo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IxA1AuX7fcta7PgV' => 
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
        'as' => 'generated::IxA1AuX7fcta7PgV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vxmau7SgI8s241QZ' => 
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
        'as' => 'generated::vxmau7SgI8s241QZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ekC5PwXVvzCvly9D' => 
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
        'as' => 'generated::ekC5PwXVvzCvly9D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TISflsN5rwtJV1I2' => 
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
        'as' => 'generated::TISflsN5rwtJV1I2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SskWDpk9mVisdr6A' => 
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
        'as' => 'generated::SskWDpk9mVisdr6A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NBPbWGFImMJo3go7' => 
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
        'as' => 'generated::NBPbWGFImMJo3go7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jLMoW4ZpLAek4n2H' => 
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
        'as' => 'generated::jLMoW4ZpLAek4n2H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6FzpYrvZTB5YRcPM' => 
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
        'as' => 'generated::6FzpYrvZTB5YRcPM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jdAXek4x803UMAcW' => 
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
        'as' => 'generated::jdAXek4x803UMAcW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ImTkE1XCUWw331Ki' => 
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
        'as' => 'generated::ImTkE1XCUWw331Ki',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ApzAPmByxehtLfgg' => 
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
        'as' => 'generated::ApzAPmByxehtLfgg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xkijtKXhkslfvopx' => 
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
        'as' => 'generated::xkijtKXhkslfvopx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jgVj1sOy9sDj0WrC' => 
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
        'as' => 'generated::jgVj1sOy9sDj0WrC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J2nW1cZ3DV00LgfI' => 
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
        'as' => 'generated::J2nW1cZ3DV00LgfI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::sCgn4qkNfwF6TyNE' => 
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
        'as' => 'generated::sCgn4qkNfwF6TyNE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z1FBQItqztAs854k' => 
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
        'as' => 'generated::z1FBQItqztAs854k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kLv6uxWA6y0yI9Qo' => 
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
        'as' => 'generated::kLv6uxWA6y0yI9Qo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9jY1rn5reoHg92P9' => 
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
        'as' => 'generated::9jY1rn5reoHg92P9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZQJ1Hf1iMlNkXbs2' => 
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
        'as' => 'generated::ZQJ1Hf1iMlNkXbs2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BPRWypucG4pX1NvZ' => 
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
        'as' => 'generated::BPRWypucG4pX1NvZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2yoQQ0WB6UjRFSEr' => 
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
        'as' => 'generated::2yoQQ0WB6UjRFSEr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SG93X8woQJZQmiRj' => 
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
        'as' => 'generated::SG93X8woQJZQmiRj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hkw29OE0dnM8FE7m' => 
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
        'as' => 'generated::Hkw29OE0dnM8FE7m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CxNLCJ7rRULIlT78' => 
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
        'as' => 'generated::CxNLCJ7rRULIlT78',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PSQ5pjxvtmLMilT4' => 
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
        'as' => 'generated::PSQ5pjxvtmLMilT4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ISkvEsgrD1bHB6iQ' => 
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
        'as' => 'generated::ISkvEsgrD1bHB6iQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NDgM2M2NAoqdk5Cs' => 
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
        'as' => 'generated::NDgM2M2NAoqdk5Cs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LyhsE6A367pB4FWa' => 
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
        'as' => 'generated::LyhsE6A367pB4FWa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pDIMxqR1qDuF6QEr' => 
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
        'as' => 'generated::pDIMxqR1qDuF6QEr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bRufZCzuEU4qbOQw' => 
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
        'as' => 'generated::bRufZCzuEU4qbOQw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::E7UHVEVqyMsgt6gh' => 
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
        'as' => 'generated::E7UHVEVqyMsgt6gh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ORd4RR8Pgf3RK7N' => 
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
        'as' => 'generated::3ORd4RR8Pgf3RK7N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h6ZYhAolNlv8Omw5' => 
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
        'as' => 'generated::h6ZYhAolNlv8Omw5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pu9OKfrKL42SC2U1' => 
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
        'as' => 'generated::pu9OKfrKL42SC2U1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2xzJZkyaPx1Y0pHm' => 
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
        'as' => 'generated::2xzJZkyaPx1Y0pHm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JfvRhFa2QEcMqv5e' => 
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
        'as' => 'generated::JfvRhFa2QEcMqv5e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
