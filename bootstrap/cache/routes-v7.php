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
            '_route' => 'generated::au7KdhzdhVGCVhK6',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Qd9M3j8qrPY7iB78',
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
            '_route' => 'generated::ainQchViqjqPzbfw',
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
            '_route' => 'generated::I3wL3VIBNKZxcYZO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::l529vNRz5CIWMXvz',
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
            '_route' => 'generated::EdMOVIdRLcSjHTIu',
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
            '_route' => 'generated::phVSLJwnTg8CP0zh',
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
            '_route' => 'generated::tHY4Imcut7XSUoUa',
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
            '_route' => 'generated::U9JTUepjbqDI5Jzt',
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
            '_route' => 'generated::cTQOCcTfjpU6Xiom',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::eWym38Lvhj8Ca4eT',
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
            '_route' => 'generated::URQobkIYXX257FUa',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::helEs2JtiacLmOQJ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::5IQw1JSqtl25Wv5D',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::uKzhy5v610dxz1uW',
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
            '_route' => 'generated::yNzPqu7LgWrGvZMM',
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
            '_route' => 'generated::QMG0cxKp3Hp248nM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5sBi0RkiQASuzQdY',
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
            '_route' => 'generated::0OpvLs7Dllegj1Pp',
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
            '_route' => 'generated::cZ2D3oBcQKy1UFQd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::7QcpEW2TvtdUiwDP',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::CaVectQYKWSxN2Tn',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::OonVVaB66B69mR8Q',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::fO3GFlSDoRdT238Q',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qqjnw1kZoosmJxyi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::sWj5K53HuWYQJTCa',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::4Dpez7JSzidSry7V',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::W5xbrsFmNJI6XxJl',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::a3bK2wjvswrWyJom',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::6IUy6P5WFaadpotr',
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
            '_route' => 'generated::v8eFuOj7CFOZW5Pp',
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
            '_route' => 'generated::8cJlYfhhkNtYaFsB',
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
            '_route' => 'generated::nBQJ0JHCmvantxHj',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::0kdq3Ms6GSbl4mJb',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::AFVySW6K31v4v5Go',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::EhbQga8tNcoDLCIb',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::kMmzeUbPbMjUpuVa',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::P9GA4iuOIAnHNlDz',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::iMFp4rrIm1iJ8LSj',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Fu1RsnYkpi3TFADt',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::7kSDvUuUzgKFOEuE',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::EXmzdhrmNUU2vi0T',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::GEIXdjfGEoLWy3kf',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::YcmvFxYx0XGnntLD',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::4oEKAwPjrODxhHuh',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qw4cXTUSMRa5fWQf',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::A3PkxA9lYPg5wtLs',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8ug7RhSgocQ3ADXJ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::hlEN5oLo4UiX06dN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::4LGigU5SmVWCJUld',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::LY23FhmNMYs7jbz1',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::DpYT8gqbbRCoXZHv',
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
            '_route' => 'generated::x691lwDXNqhbo3MZ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::lJZrEylc7Rm4uYRG',
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
            '_route' => 'generated::cyWzBCTbHPkcZuhB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::wX8eydvyjh7MovWT',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::1nsLH1ybTvs8R531',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::FGzNN6VWIsVKuryL',
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
            '_route' => 'generated::c9hWpY9cvw8UDGWU',
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
            '_route' => 'generated::3JohrxpQn9uu3sKb',
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
            '_route' => 'generated::NU76FeKigRXCgXFe',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::0lyP48v4DhRrb8rj',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::XoRm0mJqzqFD6MLd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cKE6X0U7fdj7zSsc',
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
            '_route' => 'generated::S7PtCnP6hK6PPcVw',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::J5gX3qWOCFpv3tmP',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qFWJNC8TAZXtg8jq',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::KHlAUfDiqTRjh3kq',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8zsAGfVsoY0unUci',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::6oqVDnHNW9Bj69bE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7B1tlZCnGTBBQ3Uk',
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
            '_route' => 'generated::CNNzdk8WiqybLGgv',
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
            '_route' => 'generated::OuKrNoVAWFWiB5gc',
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
            '_route' => 'generated::yWw1Ur2NKmAQDHT0',
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
            '_route' => 'generated::Hl3xvBow4ikQqUI6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::U5IlHA3TO2ixIHeD',
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
            '_route' => 'generated::MGfApO3GcNDJq1Zc',
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
            '_route' => 'generated::IHoNpms6RvLZLC3D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rGKh4a26KkZaxfjB',
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
            '_route' => 'generated::z2QQAKoAMEr0DAqu',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ASZm7Fz4n09kEOsP',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::UQQ8uThMwFeNVIIs',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::C7CgpQ8ddt7yyorA',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::3jie6IYL94rVMfeI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::K5LwTgzrrydtm0DD',
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
            '_route' => 'generated::ZATxGlMz9pXgRSAR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LvcHou8yZUC7BJED',
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
            '_route' => 'generated::M9u71G4ouUCqkSLW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HZ5RyDjidrV9NyKF',
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
            '_route' => 'generated::Q0HtOGKfG3F95ACg',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::oOwN3xaljMZyGzs2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::DJLwGTbWvtw4fUyI',
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
            '_route' => 'generated::ltc5EwFA33NdC0ne',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rmTAKQCQpXvsY58p',
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
            '_route' => 'generated::R9YamSwYcYfR1oew',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zN0xw1LMXmOM6Zsr',
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
            '_route' => 'generated::1P4vbCo8AISe9zRR',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::dc3WwMEwfPMxIPF6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xM428bAAICV7l73O',
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
            '_route' => 'generated::wPL9Eyt3VcQkKeyS',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::a8IWOd3x3TU9T3VO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::J7bEsoiIAgLVMadB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Xt5xlIW6DjW59jIp',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::G1SUt5j7OLASklkb',
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
            '_route' => 'generated::4rFfXUiaUxIMmioB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::DrYpm5j7AWnM2rke',
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
            '_route' => 'generated::oxu3Br5tTuWLcTZw',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8OxUdrlcipF4bci9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mqdF0o0bseowm0v1',
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
            '_route' => 'generated::4K8IhAfFUbbz20Aw',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::1WCzlqb5KxOTRW2F',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LAR2Uf2K4bCxWwfT',
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
            '_route' => 'generated::CJORGFtYWPvaxcV7',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::f8tSruji0JLmCWBo',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::odFBWCXoV2UN0hRf',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::0EiU8RqqC2tPrStC',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::TdTDRM4O8lKpgJnV',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ZNsUJGmqQJqXGDp7',
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
            '_route' => 'generated::pTI0FnqUhAFbeQ7B',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::WGJf3n45Jxkj8P4A',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::6v8yxj1wvtyGzG7J',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Tn6E6z2fbytU3x8x',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::N6MPB991djv19FkE',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::zSPcR9PMqeKaup2k',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ChZ22VHdQB6gMLR3',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::cBOfuPF0nGA19aRV',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::sDQMamj7o6znMHmU',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::MP7O1NUT32ysALgQ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::4bloYJqmmlXB4gbA',
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
            '_route' => 'generated::JcobmEa2aDYn6qBH',
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
            '_route' => 'generated::bwWljcyjU2eFQZAk',
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
            '_route' => 'generated::P6l38Qg9JXRl5t57',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::86CxU1ZCvBGZ9nWN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::51mkUulfzBG07ZqJ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::xCJsqkNKPNMPc364',
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
            '_route' => 'generated::AUcPLrBBT6TAHgin',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::z1rNkfefzsSijDh9',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Wrk5OGhhmRDPuBK0',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::iZGVgXXuw1RAWOgi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::6rJlcR8M7KX1FxZO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::B2E1rtx4LDzqkymM',
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
            '_route' => 'generated::OMfJ8x9eMs81G4u6',
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
            '_route' => 'generated::e1182B7JIM7jN70H',
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
            '_route' => 'generated::lYHCm9JIrC85KVeb',
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
            '_route' => 'generated::hxHF3bA5pDsTCXXQ',
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
            '_route' => 'generated::0pSSsz1SGiyiugF0',
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
            '_route' => 'generated::uH75ZLgwM1IFdl8E',
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
            '_route' => 'generated::mworw8p6hu61OVeC',
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
            '_route' => 'generated::wXYBGHbFtUd0DPfk',
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
            '_route' => 'generated::E5LcBmmyw0xcoeft',
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
            '_route' => 'generated::osOy2GPz9aWJa3tc',
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
            '_route' => 'generated::8PshoypeNNfQPBV2',
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
            '_route' => 'generated::7eaqzL0casCp1cli',
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
            '_route' => 'generated::T47Bg5SPtjSOjjzR',
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
            '_route' => 'generated::2Z3f0zVfawbdZu6h',
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
            '_route' => 'generated::ZpyThT29UVCfb0nY',
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
            '_route' => 'generated::w6DEuBCdcMDvYrCH',
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
            '_route' => 'generated::RiPLPSsZn1GsLw1N',
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
            '_route' => 'generated::edP0XPO4uj5MzWte',
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
            '_route' => 'generated::qZMAz5LqnO4N5Qp7',
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
            '_route' => 'generated::a0hwJX6gaq8bTAud',
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
            '_route' => 'generated::CKbBsy5w1Ehu280e',
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
            '_route' => 'generated::R08G0DxPBFHHmCYk',
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
            '_route' => 'generated::JRMQufwyjpRX8TVY',
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
            '_route' => 'generated::2xSNYoRy8JrThjk3',
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
            '_route' => 'generated::WyNXFFicoJ7CT22X',
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
            '_route' => 'generated::4oQRDFMaHWPiGZyx',
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
            '_route' => 'generated::fWi1YZIGICFt1AKC',
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
            '_route' => 'generated::6Rmsq1GkMknBT42d',
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
            '_route' => 'generated::LI2gsq3EhG8eD4so',
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
            '_route' => 'generated::gqS0OdDguwzXdCAp',
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
            '_route' => 'generated::7XOzGctlMyP8aNqL',
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
            '_route' => 'generated::xTB71jJQoRXAQOOC',
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
            '_route' => 'generated::Z5e2zhW2tAPmyCVw',
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
            '_route' => 'generated::PgolCDAXgrmdY4eG',
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
            '_route' => 'generated::USCZVzbR5RjyDiLK',
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
            '_route' => 'generated::xA3d2uS7Jo4sSLn9',
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
            '_route' => 'generated::MSnYwv4VloLkmdOl',
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
            '_route' => 'generated::kKRjLVgZiOCLNkQ3',
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
            '_route' => 'generated::kafU1uch1bUe19Qg',
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
            '_route' => 'generated::xD6TK82TCO2p9LYx',
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
            '_route' => 'generated::yvlbgH1FQ1j51mEM',
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
            '_route' => 'generated::9HSZdZK8JosGZwdR',
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
            '_route' => 'generated::UeVNP8HFJ8e7xD1p',
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
            '_route' => 'generated::ezCY9JIolIv3elgJ',
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
            '_route' => 'generated::F8VoW4TSmWI3wRCh',
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
            '_route' => 'generated::LARhHs4DbylxpptR',
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
            '_route' => 'generated::fd7mdedHLZwGSG6m',
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
            '_route' => 'generated::QUxVSTEooHZ0NAil',
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
            '_route' => 'generated::eH9404yRdebXQGds',
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
            '_route' => 'generated::FWm3wdNjHQ5mShlb',
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
            '_route' => 'generated::nsZuUPKi3GFFAnq5',
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
            '_route' => 'generated::r8KVy28AM4AxCLnM',
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
            '_route' => 'generated::bSJPr7E9LmExsDlm',
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
            '_route' => 'generated::DbJv6dQvS2KmxlTI',
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
            '_route' => 'generated::ZwdHK7Td9bm1s5H3',
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
            '_route' => 'generated::Hj9mrY8648sZTtqw',
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
            '_route' => 'generated::MTZETc1ZBffrDSJK',
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
            '_route' => 'generated::7SkenGpRbIMhSZJA',
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
            '_route' => 'generated::yEaEdYDgVXEWPIxX',
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
            '_route' => 'generated::EbjKdLhmb2R9nfN2',
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
            '_route' => 'generated::svjx42RWDTqgM7fE',
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
            '_route' => 'generated::5VZqc5ioRNU2hH8K',
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
            '_route' => 'generated::cyfWTIgbgUPJ1yKZ',
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
            '_route' => 'generated::VFo1ibOdlN0mkKR8',
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
            '_route' => 'generated::8nOfzZCwYgIc5NWu',
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
            '_route' => 'generated::03Qlx4Vd9bxgsZTO',
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
            '_route' => 'generated::hFM6b8X9zFAHxngA',
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
            '_route' => 'generated::ZYxQGkGHF7rB7Lt0',
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
            '_route' => 'generated::GoTDI8VTCJr7JGnJ',
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
            '_route' => 'generated::NftcJZqIFoVYAqpx',
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
            '_route' => 'generated::NHSiC1MQw6vtAE5X',
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
            '_route' => 'generated::hewdaiNyIZSS2ciS',
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
            '_route' => 'generated::JPAAggJL92gz3tjh',
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
            '_route' => 'generated::6vqLLeVuGOmnvKqX',
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
            '_route' => 'generated::eLldlnfF24WxVLgd',
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
            '_route' => 'generated::Dld5bDvYhG2rxjMv',
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
            '_route' => 'generated::I45WpjFwHQUOtAAk',
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
            '_route' => 'generated::QecBUtxGRpkXb5KT',
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
            '_route' => 'generated::JR7XoD1uZ8c9dljK',
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
            '_route' => 'generated::DTeNfKjcjhGWyKnM',
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
            '_route' => 'generated::Rig0UIU2dgp0Nfmy',
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
            '_route' => 'generated::5rcgkXJxtyZpmsgK',
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
            '_route' => 'generated::BW1f56OmECa0Sf3y',
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
            '_route' => 'generated::ZlMp82VqwyAXAFaf',
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
            '_route' => 'generated::zyz3CbMm9Rh8thHd',
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
            '_route' => 'generated::tU1fpkQUPyxaeaaN',
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
            '_route' => 'generated::5mLTJs6r7cOwXi3Q',
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
            '_route' => 'generated::0le8Gwm6P7JpM7lw',
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
            '_route' => 'generated::r22oDZ7y1WujxZH8',
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
            '_route' => 'generated::VY5TqBYBy8aUrOsQ',
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
            '_route' => 'generated::grcdIdmyzYAxx1nS',
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
            '_route' => 'generated::NeqNIlfS2PaS4HSM',
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
            '_route' => 'generated::s82uQAStg6QCbr4R',
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
            '_route' => 'generated::pU3hZ7HGHQcOxEL8',
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
            '_route' => 'generated::zMaugNBDsrWt2Y3p',
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
            '_route' => 'generated::SIE7I7VDOUa13LnV',
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
            '_route' => 'generated::G7Y16LTw9npDp0Pr',
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
            '_route' => 'generated::Ofzcjh8iPAe0ezkB',
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
            '_route' => 'generated::CZwC63uR8SYKgiH3',
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
            '_route' => 'generated::651JSlM2o6CNsrTF',
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
            '_route' => 'generated::1qhiTFkjmX8eCn6r',
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
            '_route' => 'generated::JShBzKyk3Q8OemLu',
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
            '_route' => 'generated::I7HS4zUryIz4koXm',
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
            '_route' => 'generated::nTTbVdv27NSa3Tq9',
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
            '_route' => 'generated::82XoUbizkKmvhoAD',
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
            '_route' => 'generated::4Yo8qsck5R1AdCIi',
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
            '_route' => 'generated::KnzQVeklncjB509D',
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
            '_route' => 'generated::hWHLKlQdHoDkI4aa',
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
            '_route' => 'generated::ApVdkOFD6UQyrOEG',
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
            '_route' => 'generated::8m0vUWRZwFLNj3T0',
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
            '_route' => 'generated::9lAEi6932jMkKqiF',
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
            '_route' => 'generated::glJ79SfyiBdjEoFn',
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
            '_route' => 'generated::s3iQ2PLsfVVBXDsB',
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
    'generated::au7KdhzdhVGCVhK6' => 
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
        'as' => 'generated::au7KdhzdhVGCVhK6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qd9M3j8qrPY7iB78' => 
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
        'as' => 'generated::Qd9M3j8qrPY7iB78',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ainQchViqjqPzbfw' => 
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
        'as' => 'generated::ainQchViqjqPzbfw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I3wL3VIBNKZxcYZO' => 
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
        'as' => 'generated::I3wL3VIBNKZxcYZO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l529vNRz5CIWMXvz' => 
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
        'as' => 'generated::l529vNRz5CIWMXvz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EdMOVIdRLcSjHTIu' => 
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
        'as' => 'generated::EdMOVIdRLcSjHTIu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::phVSLJwnTg8CP0zh' => 
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
        'as' => 'generated::phVSLJwnTg8CP0zh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tHY4Imcut7XSUoUa' => 
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
        'as' => 'generated::tHY4Imcut7XSUoUa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B2E1rtx4LDzqkymM' => 
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
        'as' => 'generated::B2E1rtx4LDzqkymM',
      ),
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
    'generated::OMfJ8x9eMs81G4u6' => 
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
        'as' => 'generated::OMfJ8x9eMs81G4u6',
      ),
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
    'generated::U9JTUepjbqDI5Jzt' => 
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
        'as' => 'generated::U9JTUepjbqDI5Jzt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cTQOCcTfjpU6Xiom' => 
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
        'as' => 'generated::cTQOCcTfjpU6Xiom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eWym38Lvhj8Ca4eT' => 
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
        'as' => 'generated::eWym38Lvhj8Ca4eT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::URQobkIYXX257FUa' => 
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
        'as' => 'generated::URQobkIYXX257FUa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::helEs2JtiacLmOQJ' => 
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
        'as' => 'generated::helEs2JtiacLmOQJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5IQw1JSqtl25Wv5D' => 
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
        'as' => 'generated::5IQw1JSqtl25Wv5D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ezCY9JIolIv3elgJ' => 
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
        'as' => 'generated::ezCY9JIolIv3elgJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uKzhy5v610dxz1uW' => 
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
        'as' => 'generated::uKzhy5v610dxz1uW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yNzPqu7LgWrGvZMM' => 
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
        'as' => 'generated::yNzPqu7LgWrGvZMM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QMG0cxKp3Hp248nM' => 
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
        'as' => 'generated::QMG0cxKp3Hp248nM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5sBi0RkiQASuzQdY' => 
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
        'as' => 'generated::5sBi0RkiQASuzQdY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0OpvLs7Dllegj1Pp' => 
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
        'as' => 'generated::0OpvLs7Dllegj1Pp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cZ2D3oBcQKy1UFQd' => 
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
        'as' => 'generated::cZ2D3oBcQKy1UFQd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7QcpEW2TvtdUiwDP' => 
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
        'as' => 'generated::7QcpEW2TvtdUiwDP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CaVectQYKWSxN2Tn' => 
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
        'as' => 'generated::CaVectQYKWSxN2Tn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OonVVaB66B69mR8Q' => 
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
        'as' => 'generated::OonVVaB66B69mR8Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fO3GFlSDoRdT238Q' => 
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
        'as' => 'generated::fO3GFlSDoRdT238Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qqjnw1kZoosmJxyi' => 
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
        'as' => 'generated::qqjnw1kZoosmJxyi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sWj5K53HuWYQJTCa' => 
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
        'as' => 'generated::sWj5K53HuWYQJTCa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Dpez7JSzidSry7V' => 
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
        'as' => 'generated::4Dpez7JSzidSry7V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W5xbrsFmNJI6XxJl' => 
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
        'as' => 'generated::W5xbrsFmNJI6XxJl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a3bK2wjvswrWyJom' => 
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
        'as' => 'generated::a3bK2wjvswrWyJom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e1182B7JIM7jN70H' => 
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
        'as' => 'generated::e1182B7JIM7jN70H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lYHCm9JIrC85KVeb' => 
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
        'as' => 'generated::lYHCm9JIrC85KVeb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hxHF3bA5pDsTCXXQ' => 
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
        'as' => 'generated::hxHF3bA5pDsTCXXQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0pSSsz1SGiyiugF0' => 
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
        'as' => 'generated::0pSSsz1SGiyiugF0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uH75ZLgwM1IFdl8E' => 
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
        'as' => 'generated::uH75ZLgwM1IFdl8E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6IUy6P5WFaadpotr' => 
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
        'as' => 'generated::6IUy6P5WFaadpotr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v8eFuOj7CFOZW5Pp' => 
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
        'as' => 'generated::v8eFuOj7CFOZW5Pp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8cJlYfhhkNtYaFsB' => 
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
        'as' => 'generated::8cJlYfhhkNtYaFsB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nBQJ0JHCmvantxHj' => 
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
        'as' => 'generated::nBQJ0JHCmvantxHj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0kdq3Ms6GSbl4mJb' => 
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
        'as' => 'generated::0kdq3Ms6GSbl4mJb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mworw8p6hu61OVeC' => 
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
        'as' => 'generated::mworw8p6hu61OVeC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wXYBGHbFtUd0DPfk' => 
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
        'as' => 'generated::wXYBGHbFtUd0DPfk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E5LcBmmyw0xcoeft' => 
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
        'as' => 'generated::E5LcBmmyw0xcoeft',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AFVySW6K31v4v5Go' => 
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
        'as' => 'generated::AFVySW6K31v4v5Go',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EhbQga8tNcoDLCIb' => 
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
        'as' => 'generated::EhbQga8tNcoDLCIb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kMmzeUbPbMjUpuVa' => 
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
        'as' => 'generated::kMmzeUbPbMjUpuVa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P9GA4iuOIAnHNlDz' => 
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
        'as' => 'generated::P9GA4iuOIAnHNlDz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iMFp4rrIm1iJ8LSj' => 
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
        'as' => 'generated::iMFp4rrIm1iJ8LSj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fu1RsnYkpi3TFADt' => 
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
        'as' => 'generated::Fu1RsnYkpi3TFADt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7kSDvUuUzgKFOEuE' => 
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
        'as' => 'generated::7kSDvUuUzgKFOEuE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EXmzdhrmNUU2vi0T' => 
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
        'as' => 'generated::EXmzdhrmNUU2vi0T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GEIXdjfGEoLWy3kf' => 
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
        'as' => 'generated::GEIXdjfGEoLWy3kf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YcmvFxYx0XGnntLD' => 
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
        'as' => 'generated::YcmvFxYx0XGnntLD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4oEKAwPjrODxhHuh' => 
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
        'as' => 'generated::4oEKAwPjrODxhHuh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qw4cXTUSMRa5fWQf' => 
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
        'as' => 'generated::qw4cXTUSMRa5fWQf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T47Bg5SPtjSOjjzR' => 
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
        'as' => 'generated::T47Bg5SPtjSOjjzR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A3PkxA9lYPg5wtLs' => 
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
        'as' => 'generated::A3PkxA9lYPg5wtLs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8ug7RhSgocQ3ADXJ' => 
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
        'as' => 'generated::8ug7RhSgocQ3ADXJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hlEN5oLo4UiX06dN' => 
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
        'as' => 'generated::hlEN5oLo4UiX06dN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2Z3f0zVfawbdZu6h' => 
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
        'as' => 'generated::2Z3f0zVfawbdZu6h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZpyThT29UVCfb0nY' => 
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
        'as' => 'generated::ZpyThT29UVCfb0nY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RiPLPSsZn1GsLw1N' => 
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
        'as' => 'generated::RiPLPSsZn1GsLw1N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::edP0XPO4uj5MzWte' => 
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
        'as' => 'generated::edP0XPO4uj5MzWte',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w6DEuBCdcMDvYrCH' => 
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
        'as' => 'generated::w6DEuBCdcMDvYrCH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4LGigU5SmVWCJUld' => 
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
        'as' => 'generated::4LGigU5SmVWCJUld',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::osOy2GPz9aWJa3tc' => 
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
        'as' => 'generated::osOy2GPz9aWJa3tc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LY23FhmNMYs7jbz1' => 
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
        'as' => 'generated::LY23FhmNMYs7jbz1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DpYT8gqbbRCoXZHv' => 
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
        'as' => 'generated::DpYT8gqbbRCoXZHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x691lwDXNqhbo3MZ' => 
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
        'as' => 'generated::x691lwDXNqhbo3MZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lJZrEylc7Rm4uYRG' => 
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
        'as' => 'generated::lJZrEylc7Rm4uYRG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8PshoypeNNfQPBV2' => 
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
        'as' => 'generated::8PshoypeNNfQPBV2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7eaqzL0casCp1cli' => 
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
        'as' => 'generated::7eaqzL0casCp1cli',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::cyWzBCTbHPkcZuhB' => 
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
        'as' => 'generated::cyWzBCTbHPkcZuhB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4oQRDFMaHWPiGZyx' => 
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
        'as' => 'generated::4oQRDFMaHWPiGZyx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fWi1YZIGICFt1AKC' => 
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
        'as' => 'generated::fWi1YZIGICFt1AKC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Rmsq1GkMknBT42d' => 
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
        'as' => 'generated::6Rmsq1GkMknBT42d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wX8eydvyjh7MovWT' => 
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
        'as' => 'generated::wX8eydvyjh7MovWT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LI2gsq3EhG8eD4so' => 
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
        'as' => 'generated::LI2gsq3EhG8eD4so',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gqS0OdDguwzXdCAp' => 
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
        'as' => 'generated::gqS0OdDguwzXdCAp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1nsLH1ybTvs8R531' => 
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
        'as' => 'generated::1nsLH1ybTvs8R531',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FGzNN6VWIsVKuryL' => 
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
        'as' => 'generated::FGzNN6VWIsVKuryL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c9hWpY9cvw8UDGWU' => 
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
        'as' => 'generated::c9hWpY9cvw8UDGWU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3JohrxpQn9uu3sKb' => 
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
        'as' => 'generated::3JohrxpQn9uu3sKb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NU76FeKigRXCgXFe' => 
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
        'as' => 'generated::NU76FeKigRXCgXFe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7XOzGctlMyP8aNqL' => 
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
        'as' => 'generated::7XOzGctlMyP8aNqL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xTB71jJQoRXAQOOC' => 
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
        'as' => 'generated::xTB71jJQoRXAQOOC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z5e2zhW2tAPmyCVw' => 
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
        'as' => 'generated::Z5e2zhW2tAPmyCVw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0lyP48v4DhRrb8rj' => 
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
        'as' => 'generated::0lyP48v4DhRrb8rj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PgolCDAXgrmdY4eG' => 
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
        'as' => 'generated::PgolCDAXgrmdY4eG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XoRm0mJqzqFD6MLd' => 
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
        'as' => 'generated::XoRm0mJqzqFD6MLd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cKE6X0U7fdj7zSsc' => 
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
        'as' => 'generated::cKE6X0U7fdj7zSsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::USCZVzbR5RjyDiLK' => 
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
        'as' => 'generated::USCZVzbR5RjyDiLK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xA3d2uS7Jo4sSLn9' => 
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
        'as' => 'generated::xA3d2uS7Jo4sSLn9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MSnYwv4VloLkmdOl' => 
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
        'as' => 'generated::MSnYwv4VloLkmdOl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S7PtCnP6hK6PPcVw' => 
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
        'as' => 'generated::S7PtCnP6hK6PPcVw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J5gX3qWOCFpv3tmP' => 
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
        'as' => 'generated::J5gX3qWOCFpv3tmP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qFWJNC8TAZXtg8jq' => 
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
        'as' => 'generated::qFWJNC8TAZXtg8jq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kKRjLVgZiOCLNkQ3' => 
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
        'as' => 'generated::kKRjLVgZiOCLNkQ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KHlAUfDiqTRjh3kq' => 
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
        'as' => 'generated::KHlAUfDiqTRjh3kq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8zsAGfVsoY0unUci' => 
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
        'as' => 'generated::8zsAGfVsoY0unUci',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kafU1uch1bUe19Qg' => 
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
        'as' => 'generated::kafU1uch1bUe19Qg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xD6TK82TCO2p9LYx' => 
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
        'as' => 'generated::xD6TK82TCO2p9LYx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yvlbgH1FQ1j51mEM' => 
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
        'as' => 'generated::yvlbgH1FQ1j51mEM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9HSZdZK8JosGZwdR' => 
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
        'as' => 'generated::9HSZdZK8JosGZwdR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UeVNP8HFJ8e7xD1p' => 
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
        'as' => 'generated::UeVNP8HFJ8e7xD1p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6oqVDnHNW9Bj69bE' => 
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
        'as' => 'generated::6oqVDnHNW9Bj69bE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7B1tlZCnGTBBQ3Uk' => 
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
        'as' => 'generated::7B1tlZCnGTBBQ3Uk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CNNzdk8WiqybLGgv' => 
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
        'as' => 'generated::CNNzdk8WiqybLGgv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OuKrNoVAWFWiB5gc' => 
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
        'as' => 'generated::OuKrNoVAWFWiB5gc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yWw1Ur2NKmAQDHT0' => 
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
        'as' => 'generated::yWw1Ur2NKmAQDHT0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hl3xvBow4ikQqUI6' => 
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
        'as' => 'generated::Hl3xvBow4ikQqUI6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U5IlHA3TO2ixIHeD' => 
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
        'as' => 'generated::U5IlHA3TO2ixIHeD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MGfApO3GcNDJq1Zc' => 
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
        'as' => 'generated::MGfApO3GcNDJq1Zc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F8VoW4TSmWI3wRCh' => 
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
        'as' => 'generated::F8VoW4TSmWI3wRCh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LARhHs4DbylxpptR' => 
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
        'as' => 'generated::LARhHs4DbylxpptR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fd7mdedHLZwGSG6m' => 
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
        'as' => 'generated::fd7mdedHLZwGSG6m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IHoNpms6RvLZLC3D' => 
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
        'as' => 'generated::IHoNpms6RvLZLC3D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z2QQAKoAMEr0DAqu' => 
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
        'as' => 'generated::z2QQAKoAMEr0DAqu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rGKh4a26KkZaxfjB' => 
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
        'as' => 'generated::rGKh4a26KkZaxfjB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QUxVSTEooHZ0NAil' => 
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
        'as' => 'generated::QUxVSTEooHZ0NAil',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eH9404yRdebXQGds' => 
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
        'as' => 'generated::eH9404yRdebXQGds',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FWm3wdNjHQ5mShlb' => 
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
        'as' => 'generated::FWm3wdNjHQ5mShlb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nsZuUPKi3GFFAnq5' => 
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
        'as' => 'generated::nsZuUPKi3GFFAnq5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r8KVy28AM4AxCLnM' => 
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
        'as' => 'generated::r8KVy28AM4AxCLnM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bSJPr7E9LmExsDlm' => 
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
        'as' => 'generated::bSJPr7E9LmExsDlm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DbJv6dQvS2KmxlTI' => 
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
        'as' => 'generated::DbJv6dQvS2KmxlTI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZwdHK7Td9bm1s5H3' => 
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
        'as' => 'generated::ZwdHK7Td9bm1s5H3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hj9mrY8648sZTtqw' => 
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
        'as' => 'generated::Hj9mrY8648sZTtqw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MTZETc1ZBffrDSJK' => 
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
        'as' => 'generated::MTZETc1ZBffrDSJK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ASZm7Fz4n09kEOsP' => 
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
        'as' => 'generated::ASZm7Fz4n09kEOsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7SkenGpRbIMhSZJA' => 
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
        'as' => 'generated::7SkenGpRbIMhSZJA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yEaEdYDgVXEWPIxX' => 
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
        'as' => 'generated::yEaEdYDgVXEWPIxX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5VZqc5ioRNU2hH8K' => 
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
        'as' => 'generated::5VZqc5ioRNU2hH8K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EbjKdLhmb2R9nfN2' => 
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
        'as' => 'generated::EbjKdLhmb2R9nfN2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::svjx42RWDTqgM7fE' => 
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
        'as' => 'generated::svjx42RWDTqgM7fE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cyfWTIgbgUPJ1yKZ' => 
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
        'as' => 'generated::cyfWTIgbgUPJ1yKZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UQQ8uThMwFeNVIIs' => 
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
        'as' => 'generated::UQQ8uThMwFeNVIIs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C7CgpQ8ddt7yyorA' => 
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
        'as' => 'generated::C7CgpQ8ddt7yyorA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VFo1ibOdlN0mkKR8' => 
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
        'as' => 'generated::VFo1ibOdlN0mkKR8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8nOfzZCwYgIc5NWu' => 
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
        'as' => 'generated::8nOfzZCwYgIc5NWu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::03Qlx4Vd9bxgsZTO' => 
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
        'as' => 'generated::03Qlx4Vd9bxgsZTO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hFM6b8X9zFAHxngA' => 
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
        'as' => 'generated::hFM6b8X9zFAHxngA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZYxQGkGHF7rB7Lt0' => 
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
        'as' => 'generated::ZYxQGkGHF7rB7Lt0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3jie6IYL94rVMfeI' => 
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
        'as' => 'generated::3jie6IYL94rVMfeI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K5LwTgzrrydtm0DD' => 
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
        'as' => 'generated::K5LwTgzrrydtm0DD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qZMAz5LqnO4N5Qp7' => 
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
        'as' => 'generated::qZMAz5LqnO4N5Qp7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a0hwJX6gaq8bTAud' => 
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
        'as' => 'generated::a0hwJX6gaq8bTAud',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CKbBsy5w1Ehu280e' => 
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
        'as' => 'generated::CKbBsy5w1Ehu280e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R08G0DxPBFHHmCYk' => 
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
        'as' => 'generated::R08G0DxPBFHHmCYk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZATxGlMz9pXgRSAR' => 
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
        'as' => 'generated::ZATxGlMz9pXgRSAR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LvcHou8yZUC7BJED' => 
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
        'as' => 'generated::LvcHou8yZUC7BJED',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JRMQufwyjpRX8TVY' => 
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
        'as' => 'generated::JRMQufwyjpRX8TVY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2xSNYoRy8JrThjk3' => 
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
        'as' => 'generated::2xSNYoRy8JrThjk3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WyNXFFicoJ7CT22X' => 
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
        'as' => 'generated::WyNXFFicoJ7CT22X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M9u71G4ouUCqkSLW' => 
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
        'as' => 'generated::M9u71G4ouUCqkSLW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HZ5RyDjidrV9NyKF' => 
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
        'as' => 'generated::HZ5RyDjidrV9NyKF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GoTDI8VTCJr7JGnJ' => 
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
        'as' => 'generated::GoTDI8VTCJr7JGnJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NftcJZqIFoVYAqpx' => 
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
        'as' => 'generated::NftcJZqIFoVYAqpx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NHSiC1MQw6vtAE5X' => 
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
        'as' => 'generated::NHSiC1MQw6vtAE5X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q0HtOGKfG3F95ACg' => 
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
        'as' => 'generated::Q0HtOGKfG3F95ACg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oOwN3xaljMZyGzs2' => 
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
        'as' => 'generated::oOwN3xaljMZyGzs2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DJLwGTbWvtw4fUyI' => 
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
        'as' => 'generated::DJLwGTbWvtw4fUyI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ltc5EwFA33NdC0ne' => 
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
        'as' => 'generated::ltc5EwFA33NdC0ne',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rmTAKQCQpXvsY58p' => 
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
        'as' => 'generated::rmTAKQCQpXvsY58p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hewdaiNyIZSS2ciS' => 
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
        'as' => 'generated::hewdaiNyIZSS2ciS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JPAAggJL92gz3tjh' => 
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
        'as' => 'generated::JPAAggJL92gz3tjh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6vqLLeVuGOmnvKqX' => 
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
        'as' => 'generated::6vqLLeVuGOmnvKqX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eLldlnfF24WxVLgd' => 
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
        'as' => 'generated::eLldlnfF24WxVLgd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dld5bDvYhG2rxjMv' => 
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
        'as' => 'generated::Dld5bDvYhG2rxjMv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R9YamSwYcYfR1oew' => 
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
        'as' => 'generated::R9YamSwYcYfR1oew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zN0xw1LMXmOM6Zsr' => 
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
        'as' => 'generated::zN0xw1LMXmOM6Zsr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DTeNfKjcjhGWyKnM' => 
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
        'as' => 'generated::DTeNfKjcjhGWyKnM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rig0UIU2dgp0Nfmy' => 
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
        'as' => 'generated::Rig0UIU2dgp0Nfmy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5rcgkXJxtyZpmsgK' => 
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
        'as' => 'generated::5rcgkXJxtyZpmsgK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1P4vbCo8AISe9zRR' => 
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
        'as' => 'generated::1P4vbCo8AISe9zRR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BW1f56OmECa0Sf3y' => 
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
        'as' => 'generated::BW1f56OmECa0Sf3y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZlMp82VqwyAXAFaf' => 
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
        'as' => 'generated::ZlMp82VqwyAXAFaf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zyz3CbMm9Rh8thHd' => 
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
        'as' => 'generated::zyz3CbMm9Rh8thHd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dc3WwMEwfPMxIPF6' => 
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
        'as' => 'generated::dc3WwMEwfPMxIPF6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xM428bAAICV7l73O' => 
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
        'as' => 'generated::xM428bAAICV7l73O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I45WpjFwHQUOtAAk' => 
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
        'as' => 'generated::I45WpjFwHQUOtAAk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QecBUtxGRpkXb5KT' => 
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
        'as' => 'generated::QecBUtxGRpkXb5KT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JR7XoD1uZ8c9dljK' => 
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
        'as' => 'generated::JR7XoD1uZ8c9dljK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wPL9Eyt3VcQkKeyS' => 
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
        'as' => 'generated::wPL9Eyt3VcQkKeyS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a8IWOd3x3TU9T3VO' => 
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
        'as' => 'generated::a8IWOd3x3TU9T3VO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J7bEsoiIAgLVMadB' => 
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
        'as' => 'generated::J7bEsoiIAgLVMadB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xt5xlIW6DjW59jIp' => 
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
        'as' => 'generated::Xt5xlIW6DjW59jIp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G1SUt5j7OLASklkb' => 
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
        'as' => 'generated::G1SUt5j7OLASklkb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4rFfXUiaUxIMmioB' => 
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
        'as' => 'generated::4rFfXUiaUxIMmioB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DrYpm5j7AWnM2rke' => 
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
        'as' => 'generated::DrYpm5j7AWnM2rke',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oxu3Br5tTuWLcTZw' => 
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
        'as' => 'generated::oxu3Br5tTuWLcTZw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8OxUdrlcipF4bci9' => 
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
        'as' => 'generated::8OxUdrlcipF4bci9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mqdF0o0bseowm0v1' => 
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
        'as' => 'generated::mqdF0o0bseowm0v1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4K8IhAfFUbbz20Aw' => 
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
        'as' => 'generated::4K8IhAfFUbbz20Aw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1WCzlqb5KxOTRW2F' => 
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
        'as' => 'generated::1WCzlqb5KxOTRW2F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LAR2Uf2K4bCxWwfT' => 
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
        'as' => 'generated::LAR2Uf2K4bCxWwfT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tU1fpkQUPyxaeaaN' => 
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
        'as' => 'generated::tU1fpkQUPyxaeaaN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5mLTJs6r7cOwXi3Q' => 
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
        'as' => 'generated::5mLTJs6r7cOwXi3Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0le8Gwm6P7JpM7lw' => 
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
        'as' => 'generated::0le8Gwm6P7JpM7lw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r22oDZ7y1WujxZH8' => 
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
        'as' => 'generated::r22oDZ7y1WujxZH8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VY5TqBYBy8aUrOsQ' => 
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
        'as' => 'generated::VY5TqBYBy8aUrOsQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CJORGFtYWPvaxcV7' => 
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
        'as' => 'generated::CJORGFtYWPvaxcV7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f8tSruji0JLmCWBo' => 
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
        'as' => 'generated::f8tSruji0JLmCWBo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::odFBWCXoV2UN0hRf' => 
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
        'as' => 'generated::odFBWCXoV2UN0hRf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::grcdIdmyzYAxx1nS' => 
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
        'as' => 'generated::grcdIdmyzYAxx1nS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0EiU8RqqC2tPrStC' => 
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
        'as' => 'generated::0EiU8RqqC2tPrStC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TdTDRM4O8lKpgJnV' => 
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
        'as' => 'generated::TdTDRM4O8lKpgJnV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NeqNIlfS2PaS4HSM' => 
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
        'as' => 'generated::NeqNIlfS2PaS4HSM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s82uQAStg6QCbr4R' => 
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
        'as' => 'generated::s82uQAStg6QCbr4R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pU3hZ7HGHQcOxEL8' => 
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
        'as' => 'generated::pU3hZ7HGHQcOxEL8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zMaugNBDsrWt2Y3p' => 
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
        'as' => 'generated::zMaugNBDsrWt2Y3p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SIE7I7VDOUa13LnV' => 
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
        'as' => 'generated::SIE7I7VDOUa13LnV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZNsUJGmqQJqXGDp7' => 
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
        'as' => 'generated::ZNsUJGmqQJqXGDp7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pTI0FnqUhAFbeQ7B' => 
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
        'as' => 'generated::pTI0FnqUhAFbeQ7B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G7Y16LTw9npDp0Pr' => 
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
        'as' => 'generated::G7Y16LTw9npDp0Pr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ofzcjh8iPAe0ezkB' => 
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
        'as' => 'generated::Ofzcjh8iPAe0ezkB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CZwC63uR8SYKgiH3' => 
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
        'as' => 'generated::CZwC63uR8SYKgiH3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::651JSlM2o6CNsrTF' => 
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
        'as' => 'generated::651JSlM2o6CNsrTF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WGJf3n45Jxkj8P4A' => 
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
        'as' => 'generated::WGJf3n45Jxkj8P4A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6v8yxj1wvtyGzG7J' => 
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
        'as' => 'generated::6v8yxj1wvtyGzG7J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nTTbVdv27NSa3Tq9' => 
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
        'as' => 'generated::nTTbVdv27NSa3Tq9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tn6E6z2fbytU3x8x' => 
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
        'as' => 'generated::Tn6E6z2fbytU3x8x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N6MPB991djv19FkE' => 
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
        'as' => 'generated::N6MPB991djv19FkE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zSPcR9PMqeKaup2k' => 
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
        'as' => 'generated::zSPcR9PMqeKaup2k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::ChZ22VHdQB6gMLR3' => 
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
        'as' => 'generated::ChZ22VHdQB6gMLR3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cBOfuPF0nGA19aRV' => 
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
        'as' => 'generated::cBOfuPF0nGA19aRV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1qhiTFkjmX8eCn6r' => 
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
        'as' => 'generated::1qhiTFkjmX8eCn6r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JShBzKyk3Q8OemLu' => 
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
        'as' => 'generated::JShBzKyk3Q8OemLu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I7HS4zUryIz4koXm' => 
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
        'as' => 'generated::I7HS4zUryIz4koXm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sDQMamj7o6znMHmU' => 
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
        'as' => 'generated::sDQMamj7o6znMHmU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::82XoUbizkKmvhoAD' => 
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
        'as' => 'generated::82XoUbizkKmvhoAD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Yo8qsck5R1AdCIi' => 
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
        'as' => 'generated::4Yo8qsck5R1AdCIi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MP7O1NUT32ysALgQ' => 
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
        'as' => 'generated::MP7O1NUT32ysALgQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4bloYJqmmlXB4gbA' => 
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
        'as' => 'generated::4bloYJqmmlXB4gbA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JcobmEa2aDYn6qBH' => 
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
        'as' => 'generated::JcobmEa2aDYn6qBH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bwWljcyjU2eFQZAk' => 
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
        'as' => 'generated::bwWljcyjU2eFQZAk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P6l38Qg9JXRl5t57' => 
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
        'as' => 'generated::P6l38Qg9JXRl5t57',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KnzQVeklncjB509D' => 
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
        'as' => 'generated::KnzQVeklncjB509D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hWHLKlQdHoDkI4aa' => 
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
        'as' => 'generated::hWHLKlQdHoDkI4aa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ApVdkOFD6UQyrOEG' => 
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
        'as' => 'generated::ApVdkOFD6UQyrOEG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::86CxU1ZCvBGZ9nWN' => 
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
        'as' => 'generated::86CxU1ZCvBGZ9nWN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8m0vUWRZwFLNj3T0' => 
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
        'as' => 'generated::8m0vUWRZwFLNj3T0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::51mkUulfzBG07ZqJ' => 
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
        'as' => 'generated::51mkUulfzBG07ZqJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xCJsqkNKPNMPc364' => 
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
        'as' => 'generated::xCJsqkNKPNMPc364',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9lAEi6932jMkKqiF' => 
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
        'as' => 'generated::9lAEi6932jMkKqiF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::glJ79SfyiBdjEoFn' => 
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
        'as' => 'generated::glJ79SfyiBdjEoFn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AUcPLrBBT6TAHgin' => 
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
        'as' => 'generated::AUcPLrBBT6TAHgin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z1rNkfefzsSijDh9' => 
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
        'as' => 'generated::z1rNkfefzsSijDh9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wrk5OGhhmRDPuBK0' => 
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
        'as' => 'generated::Wrk5OGhhmRDPuBK0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iZGVgXXuw1RAWOgi' => 
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
        'as' => 'generated::iZGVgXXuw1RAWOgi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s3iQ2PLsfVVBXDsB' => 
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
        'as' => 'generated::s3iQ2PLsfVVBXDsB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6rJlcR8M7KX1FxZO' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008ec0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6rJlcR8M7KX1FxZO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
