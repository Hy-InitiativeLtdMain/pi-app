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
            '_route' => 'generated::ogqknOmLhjAhikW2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::zX4G6aUQS0hXLUZ0',
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
            '_route' => 'generated::mxh7e5oh1ETkrDI7',
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
            '_route' => 'generated::TNxhdZruryTy61fi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::CAUjylwTPvMcQlWd',
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
            '_route' => 'generated::Pc7pOtWDKokU0agI',
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
            '_route' => 'generated::dECGL2tUVZ1XwTHx',
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
            '_route' => 'generated::D8diR2BBmH0A9sTG',
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
            '_route' => 'generated::Hu699SBjygflgivr',
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
            '_route' => 'generated::QUKk1TDvO7FicIGp',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::vkxmv7ihayQSJ0nf',
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
            '_route' => 'generated::C2WQuqSHS1aoxCYU',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::a76bffXvVToobojr',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::atsYyj2NVeXdUPd2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::U153n5RpbmZssYsT',
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
            '_route' => 'generated::qAH1LXyaEtsE2jG1',
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
            '_route' => 'generated::dwAZ30GqVtRlpej6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::solsgFgaowfVzygY',
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
            '_route' => 'generated::1HilVNMQipqeYSah',
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
            '_route' => 'generated::hVFzK3Id4r4hCjAY',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::H9KP9vWsD9EzazyU',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::aIAIZupnvSEOxYIx',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ovkOCu8MXz1LcxBA',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::lPlEppvc9B1X3Mpy',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::M6KNyRvl9rujUBq5',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::YN5f7pob1B5BoDoG',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::VyBMcspOBpR4irJE',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::aM7Z9xZUgFmAu6sE',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::IcfNjXZMpTerZSxy',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::rsYF3uF8TwZuwjnI',
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
            '_route' => 'generated::bsEGeSylXPppv6MY',
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
            '_route' => 'generated::LjkM6egWhHnjkUPo',
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
            '_route' => 'generated::L6vUZvFkBX26aYyY',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::3PWjIyWbZYlXFKjx',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::DuSCSZ1mNkJH0vdR',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::GLJfA0tZFcA8zEBM',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qVnhlmlN0WnJx27R',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::c6W60oNwPqq2NL7m',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::A08QsEI91RiZtGMl',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::J5Ezn9mz4BdNbyu4',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::KUZeL6tv77UZkBTj',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::hBo4y4Da1UYDddAd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::LbahvctlS75hBfJa',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::PqETJYLACKqDHnkB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ib7vyJhuoVNJKhog',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::W78YlyjRQX7pg4VC',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::td5Bok1BAqIHw8FB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::xK4E6QGPdH0Q7T6p',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::7UytSU4fBruuOhzQ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::RKj5X0HtY07eQVo8',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::vML18slYyDQZlIsq',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::fDGCAQ6elWnr7eFf',
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
            '_route' => 'generated::9Bk7VOByHagem4Iv',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::y97vEalSIfGbtw4l',
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
            '_route' => 'generated::XqMP8pIewivImrPU',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::UfvelU6JprE4waZm',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::VqksUZIythMlLpCK',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::FnJgJNNovZNBG4dD',
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
            '_route' => 'generated::zM9AVv05tX4ga8x4',
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
            '_route' => 'generated::5x1jejyVu5LZPyHu',
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
            '_route' => 'generated::fl9PBhKIgkICYIQa',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::HuWuKMjybnRfU71F',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::TX8xNO0ELazvt2fJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gRiAoSxOuGiP6kDC',
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
            '_route' => 'generated::Thycd8Z5eOpaklEd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Tda2Q7hSnUucKuJb',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::wt3mlgEiEN0tIkEN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::leigsakPd5yGwHcV',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ELtCC0bAKTyfxMEP',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Roiz8Ja58KBCmphL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bEnW1OtpTOlmfwjv',
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
            '_route' => 'generated::CJ9AUANrRjHwJmMo',
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
            '_route' => 'generated::AXJsqWaYwuY5WCnC',
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
            '_route' => 'generated::jYa6GYaua8o2xLof',
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
            '_route' => 'generated::0HNonc6uXhhYhR9u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xfQqO9TiODzqaTkj',
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
            '_route' => 'generated::zvas8h063sGwY4bF',
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
            '_route' => 'generated::duMYpJTR6C4iQjp5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7oZ0WY47MuFgdn27',
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
            '_route' => 'generated::BSOlrRiTiIBNkGmx',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Jzdi6TN5FltbuDHI',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::FxAZKG78UKbjihC5',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::xxB6SZtS3ACAEAcz',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Y8pMQT3seNNBvp46',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JMVfrby8sFCqBR7Z',
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
            '_route' => 'generated::yTHN6Bq4w3FQ7RXS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6RMmrWxWwJsQ0xYs',
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
            '_route' => 'generated::umTdAPm09BBqzPNf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::n4H5tSJlKatfjAFk',
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
            '_route' => 'generated::Grz7c4iC8UgeRzC5',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::jIlrMUUlkq8T0Oca',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::JokzulruFGBeZ5kS',
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
            '_route' => 'generated::j6si9uIdxrh8bEWL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gkjINmqbjyTCGXpF',
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
            '_route' => 'generated::Ti5h2uvKAPhj111L',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZqcELUQ8xMzb5Xmn',
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
            '_route' => 'generated::L77UDSB1d8EDLIb3',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::cwEzwVk8MTPRG5cH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1QcGdYlM3LxRXQX4',
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
            '_route' => 'generated::Ca9AMZtyqyjeaLUm',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Ix7iGyTSq966NXTz',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Qtmnmx7NX2fFwLnR',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::r4hywG90vZr6nb7u',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::itLtntAM6atNIOOi',
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
            '_route' => 'generated::jAKaQLb1Y03RsNd6',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::4XLyRHNqmKmcZASi',
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
            '_route' => 'generated::67udFxzLbfAfqsrJ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::URc1BMILk8WLyiNE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8jByCL9KtQ51aGQB',
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
            '_route' => 'generated::ffxeuD4i55Fvu1tx',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::VR7mWsuB4rLEiUtr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qEYwhxbM481Tf95J',
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
            '_route' => 'generated::O0gHTPZj1BwHyLak',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::fua4KGHInT0oFihH',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::UYCBgoHbau1MHveY',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::lLuEyfRuYZtOp4k0',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::hRQKrTGvfxKbtKP2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::BlsfiXiFykwPdz77',
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
            '_route' => 'generated::oKlwysuz9gUGu5EM',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::S7VMSwm379nqtLbu',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::IodwnWmzGZtCLBZh',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::uqBC6yrDSCU8AZYO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::LOAdisxwH1LZlfWQ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::YPWacjs0uTDAxoHE',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::cjvpHHSyOvsR1xm5',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::3smYmtLizMG3P6f9',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ra9jBgJk1Kt5pmx4',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::E11sm4k2ALpYWX0Z',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ZJBBsYNo2gsP8NFi',
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
            '_route' => 'generated::qgBHhiBZPaep9knu',
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
            '_route' => 'generated::JnVqXXB2y6I9SR36',
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
            '_route' => 'generated::79jn4LYPTwzgnsuT',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::rgxyJ00NYdxQEA6d',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::MpHqERn1lcatv7TN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::HgonjcOhPgzi7hXF',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::4ERkiPjZrORZor0N',
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
            '_route' => 'generated::ZDWi6ZVwRT9cJmQZ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::98aX4Tn2Bx43GK6W',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::YbiO5rkvyeaKKqc4',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::NeZKvFvufzQ9QUBB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::SZkEvR1kJ8Rdzn5q',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::1LLb5BAIqHirOvD0',
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
            '_route' => 'generated::jiN7HGbQQal1Cp0f',
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
            '_route' => 'generated::pwOfkfCSKhvLuFQq',
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
            '_route' => 'generated::BfiYdddBOhqdxj44',
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
            '_route' => 'generated::Xhp0tYIHd5HcmZxR',
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
            '_route' => 'generated::cBJ6ROl7Vei2WEDX',
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
            '_route' => 'generated::7LJXdEX5t0iQyKgM',
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
            '_route' => 'generated::HYOvwqubG57BeEb5',
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
            '_route' => 'generated::S5COLRO8he6Am35G',
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
            '_route' => 'generated::BUlAPI9fFXooa4BG',
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
            '_route' => 'generated::vLgRET3tINBDwt5i',
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
            '_route' => 'generated::ylhOhIoyXcvl5GLx',
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
            '_route' => 'generated::Q3W00dhQ6CmG4sqj',
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
            '_route' => 'generated::O6Q7tiTu4MQQGjHb',
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
            '_route' => 'generated::010xwrHlOyfrGZbO',
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
            '_route' => 'generated::LPIxEElHIG8rz4Cu',
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
            '_route' => 'generated::qFCSvZc1JBHzCs1G',
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
            '_route' => 'generated::3BekTrah5KWoaLvO',
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
            '_route' => 'generated::ASXAOFi0RKocODGp',
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
            '_route' => 'generated::FK8RsEgKBzVpVmA9',
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
            '_route' => 'generated::gm3PNSe9y3EqZRgH',
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
            '_route' => 'generated::drCd6hhU8NVQQrEY',
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
            '_route' => 'generated::X0OMrUANHHVSlelv',
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
            '_route' => 'generated::DTeyaCbmmZ3EyVIg',
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
            '_route' => 'generated::Q1k8uryeJ2kZ0wKF',
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
            '_route' => 'generated::qZDqz9PKxpIJRvlV',
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
            '_route' => 'generated::xf8OdwmthmliMBOO',
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
            '_route' => 'generated::NtaTdViBg9Jx2rfT',
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
            '_route' => 'generated::5J2WPIi4cGcVmRhX',
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
            '_route' => 'generated::5sTiMk0rN7Ljr2a8',
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
            '_route' => 'generated::6UQqjemFPBMO7PPB',
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
            '_route' => 'generated::icZjU5rF4gKF9zjO',
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
            '_route' => 'generated::Esmwsme3adKIQIoE',
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
            '_route' => 'generated::DkOHJBnkjR1KGGPG',
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
            '_route' => 'generated::I4NwVpA7g4dcJLWT',
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
            '_route' => 'generated::2jdfPb5A1M7lcOzp',
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
            '_route' => 'generated::M74LxGArMn7A7tGX',
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
            '_route' => 'generated::YlxUliilhh0VqtJa',
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
            '_route' => 'generated::DRIWXzs1MpHABF4j',
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
            '_route' => 'generated::nPaBu9apw6A2CqIF',
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
            '_route' => 'generated::h159sYYBN66Zp6fd',
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
            '_route' => 'generated::t1qhPRopTa7eMTtI',
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
            '_route' => 'generated::0hySaG5NLkuPjfdX',
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
            '_route' => 'generated::Rdc2OYXYsTT3JoVA',
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
            '_route' => 'generated::kHD94tXPYbjgerOA',
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
            '_route' => 'generated::QKgswbPnt9Yzn0if',
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
            '_route' => 'generated::HNC1qWMRJtHWZarD',
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
            '_route' => 'generated::uTE7UEmk9BwjNdRx',
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
            '_route' => 'generated::KRahPhJilIaLfify',
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
            '_route' => 'generated::DZPcYiMKNqZ9gFHW',
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
            '_route' => 'generated::2SwVRFiRRe3pBKVE',
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
            '_route' => 'generated::NV6RSgLf7d5QP5gO',
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
            '_route' => 'generated::NgPRWMK4c9RkBKaK',
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
            '_route' => 'generated::f06L55yr8dxsdmYq',
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
            '_route' => 'generated::MgCJWG9wDu9I6xy4',
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
            '_route' => 'generated::qs20hUgxEgJcDSXE',
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
            '_route' => 'generated::5VP9bLv2Q0BFKATR',
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
            '_route' => 'generated::DQ3xxfAy1P3d0TkM',
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
            '_route' => 'generated::UkEhkELqpjQdYfHj',
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
            '_route' => 'generated::lgIs3lVRyCuEwodP',
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
            '_route' => 'generated::LKqm7xE0QeqmW8VN',
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
            '_route' => 'generated::zD3HGDwzOl6ZFKvk',
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
            '_route' => 'generated::U6zjcuklhtI94XWB',
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
            '_route' => 'generated::qB8jVvaVJhM8DJNf',
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
            '_route' => 'generated::XT19vPemnDqB76Ub',
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
            '_route' => 'generated::QYUKOviCcEG79iJp',
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
            '_route' => 'generated::xBBv7PK81lG75DvD',
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
            '_route' => 'generated::gfViFhdrdU565O8L',
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
            '_route' => 'generated::PtYgCxrMBva51F0g',
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
            '_route' => 'generated::fcmqBow9TVkHD0Et',
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
            '_route' => 'generated::j1poOHEOXZ6lg1zC',
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
            '_route' => 'generated::K2bF6snm2op38Z6T',
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
            '_route' => 'generated::R8AZ5Wp48PHMUvXL',
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
            '_route' => 'generated::HHfJI0j2GhVWIi8B',
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
            '_route' => 'generated::30zJL2TQPEqNl9UG',
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
            '_route' => 'generated::GLWVV92WXZW3B0Aq',
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
            '_route' => 'generated::ULkspgjDMGDvOakP',
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
            '_route' => 'generated::45qsZwGKmWiroWbi',
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
            '_route' => 'generated::ED4biKCmwhHbJg1r',
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
            '_route' => 'generated::F6GUIAkCSudp5AFl',
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
            '_route' => 'generated::iWeJdROxI2COBBHx',
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
            '_route' => 'generated::NNN5XxnhZPagpoGH',
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
            '_route' => 'generated::4TmVTx1Bq2gg1L5z',
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
            '_route' => 'generated::XjU4Q6DmLLYODTY6',
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
            '_route' => 'generated::G1hmdb6GVNWg6Nzs',
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
            '_route' => 'generated::KSACmINNoWOHv5uc',
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
            '_route' => 'generated::hwaLmYt2OB72zDnQ',
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
            '_route' => 'generated::Bve5HbYl13XmDEF0',
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
            '_route' => 'generated::n7nOt14Q4fCa5rTn',
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
            '_route' => 'generated::CMPPGhoRNJxlVOEo',
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
            '_route' => 'generated::gX1u0IpUXefMBTNR',
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
            '_route' => 'generated::HbLqU2C7jVlxQbj0',
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
            '_route' => 'generated::1jVsML24axAKnLZA',
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
            '_route' => 'generated::pfUJp4pDlphb4GVR',
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
            '_route' => 'generated::cEE3MjhLjLemcyq1',
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
            '_route' => 'generated::d2BZMB4kIxtyY1UB',
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
            '_route' => 'generated::dCDp8WWQwPZnKy6R',
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
            '_route' => 'generated::b2qm0Pf7YFhjx7JA',
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
            '_route' => 'generated::3wcW9yTzSh6FemkQ',
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
            '_route' => 'generated::oDEgA7ORoyZaqqLW',
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
            '_route' => 'generated::Cfs3ug5TyBSufuvm',
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
            '_route' => 'generated::WhL6IDPCF6R4ZYjL',
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
            '_route' => 'generated::Hsai1qw9VsIvbb0I',
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
            '_route' => 'generated::yJMTILCzTRc7BkVM',
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
            '_route' => 'generated::Z1vOOxcZf5JEd2Jk',
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
            '_route' => 'generated::ELC9bHnt1HrTsZj4',
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
            '_route' => 'generated::PVIsz6CaH8VD0WLp',
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
            '_route' => 'generated::29NEWGaCoTpZYnIP',
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
            '_route' => 'generated::9zMytBcCnPdZT5SP',
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
            '_route' => 'generated::93ldIFHyirHd86WY',
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
            '_route' => 'generated::zEimj07UuvyQpdVT',
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
            '_route' => 'generated::0mnAXSt9RqcCgZcE',
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
            '_route' => 'generated::sOZLF6g9od9zBsVz',
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
            '_route' => 'generated::dyCyrcjzjUDKXFPQ',
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
    'generated::ogqknOmLhjAhikW2' => 
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
        'as' => 'generated::ogqknOmLhjAhikW2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zX4G6aUQS0hXLUZ0' => 
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
        'as' => 'generated::zX4G6aUQS0hXLUZ0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mxh7e5oh1ETkrDI7' => 
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
        'as' => 'generated::mxh7e5oh1ETkrDI7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TNxhdZruryTy61fi' => 
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
        'as' => 'generated::TNxhdZruryTy61fi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CAUjylwTPvMcQlWd' => 
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
        'as' => 'generated::CAUjylwTPvMcQlWd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pc7pOtWDKokU0agI' => 
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
        'as' => 'generated::Pc7pOtWDKokU0agI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dECGL2tUVZ1XwTHx' => 
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
        'as' => 'generated::dECGL2tUVZ1XwTHx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D8diR2BBmH0A9sTG' => 
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
        'as' => 'generated::D8diR2BBmH0A9sTG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1LLb5BAIqHirOvD0' => 
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
        'as' => 'generated::1LLb5BAIqHirOvD0',
      ),
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
    'generated::jiN7HGbQQal1Cp0f' => 
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
        'as' => 'generated::jiN7HGbQQal1Cp0f',
      ),
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
    'generated::Hu699SBjygflgivr' => 
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
        'as' => 'generated::Hu699SBjygflgivr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QUKk1TDvO7FicIGp' => 
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
        'as' => 'generated::QUKk1TDvO7FicIGp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vkxmv7ihayQSJ0nf' => 
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
        'as' => 'generated::vkxmv7ihayQSJ0nf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::C2WQuqSHS1aoxCYU' => 
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
        'as' => 'generated::C2WQuqSHS1aoxCYU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a76bffXvVToobojr' => 
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
        'as' => 'generated::a76bffXvVToobojr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::atsYyj2NVeXdUPd2' => 
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
        'as' => 'generated::atsYyj2NVeXdUPd2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kHD94tXPYbjgerOA' => 
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
        'as' => 'generated::kHD94tXPYbjgerOA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U153n5RpbmZssYsT' => 
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
        'as' => 'generated::U153n5RpbmZssYsT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qAH1LXyaEtsE2jG1' => 
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
        'as' => 'generated::qAH1LXyaEtsE2jG1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dwAZ30GqVtRlpej6' => 
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
        'as' => 'generated::dwAZ30GqVtRlpej6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::solsgFgaowfVzygY' => 
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
        'as' => 'generated::solsgFgaowfVzygY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1HilVNMQipqeYSah' => 
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
        'as' => 'generated::1HilVNMQipqeYSah',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hVFzK3Id4r4hCjAY' => 
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
        'as' => 'generated::hVFzK3Id4r4hCjAY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H9KP9vWsD9EzazyU' => 
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
        'as' => 'generated::H9KP9vWsD9EzazyU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aIAIZupnvSEOxYIx' => 
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
        'as' => 'generated::aIAIZupnvSEOxYIx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ovkOCu8MXz1LcxBA' => 
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
        'as' => 'generated::ovkOCu8MXz1LcxBA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lPlEppvc9B1X3Mpy' => 
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
        'as' => 'generated::lPlEppvc9B1X3Mpy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M6KNyRvl9rujUBq5' => 
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
        'as' => 'generated::M6KNyRvl9rujUBq5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YN5f7pob1B5BoDoG' => 
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
        'as' => 'generated::YN5f7pob1B5BoDoG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VyBMcspOBpR4irJE' => 
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
        'as' => 'generated::VyBMcspOBpR4irJE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aM7Z9xZUgFmAu6sE' => 
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
        'as' => 'generated::aM7Z9xZUgFmAu6sE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IcfNjXZMpTerZSxy' => 
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
        'as' => 'generated::IcfNjXZMpTerZSxy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pwOfkfCSKhvLuFQq' => 
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
        'as' => 'generated::pwOfkfCSKhvLuFQq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BfiYdddBOhqdxj44' => 
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
        'as' => 'generated::BfiYdddBOhqdxj44',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xhp0tYIHd5HcmZxR' => 
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
        'as' => 'generated::Xhp0tYIHd5HcmZxR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cBJ6ROl7Vei2WEDX' => 
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
        'as' => 'generated::cBJ6ROl7Vei2WEDX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7LJXdEX5t0iQyKgM' => 
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
        'as' => 'generated::7LJXdEX5t0iQyKgM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rsYF3uF8TwZuwjnI' => 
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
        'as' => 'generated::rsYF3uF8TwZuwjnI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bsEGeSylXPppv6MY' => 
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
        'as' => 'generated::bsEGeSylXPppv6MY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LjkM6egWhHnjkUPo' => 
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
        'as' => 'generated::LjkM6egWhHnjkUPo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L6vUZvFkBX26aYyY' => 
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
        'as' => 'generated::L6vUZvFkBX26aYyY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3PWjIyWbZYlXFKjx' => 
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
        'as' => 'generated::3PWjIyWbZYlXFKjx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HYOvwqubG57BeEb5' => 
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
        'as' => 'generated::HYOvwqubG57BeEb5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S5COLRO8he6Am35G' => 
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
        'as' => 'generated::S5COLRO8he6Am35G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BUlAPI9fFXooa4BG' => 
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
        'as' => 'generated::BUlAPI9fFXooa4BG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DuSCSZ1mNkJH0vdR' => 
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
        'as' => 'generated::DuSCSZ1mNkJH0vdR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GLJfA0tZFcA8zEBM' => 
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
        'as' => 'generated::GLJfA0tZFcA8zEBM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qVnhlmlN0WnJx27R' => 
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
        'as' => 'generated::qVnhlmlN0WnJx27R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c6W60oNwPqq2NL7m' => 
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
        'as' => 'generated::c6W60oNwPqq2NL7m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A08QsEI91RiZtGMl' => 
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
        'as' => 'generated::A08QsEI91RiZtGMl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J5Ezn9mz4BdNbyu4' => 
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
        'as' => 'generated::J5Ezn9mz4BdNbyu4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KUZeL6tv77UZkBTj' => 
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
        'as' => 'generated::KUZeL6tv77UZkBTj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hBo4y4Da1UYDddAd' => 
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
        'as' => 'generated::hBo4y4Da1UYDddAd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LbahvctlS75hBfJa' => 
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
        'as' => 'generated::LbahvctlS75hBfJa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PqETJYLACKqDHnkB' => 
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
        'as' => 'generated::PqETJYLACKqDHnkB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ib7vyJhuoVNJKhog' => 
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
        'as' => 'generated::ib7vyJhuoVNJKhog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W78YlyjRQX7pg4VC' => 
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
        'as' => 'generated::W78YlyjRQX7pg4VC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O6Q7tiTu4MQQGjHb' => 
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
        'as' => 'generated::O6Q7tiTu4MQQGjHb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::td5Bok1BAqIHw8FB' => 
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
        'as' => 'generated::td5Bok1BAqIHw8FB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xK4E6QGPdH0Q7T6p' => 
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
        'as' => 'generated::xK4E6QGPdH0Q7T6p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7UytSU4fBruuOhzQ' => 
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
        'as' => 'generated::7UytSU4fBruuOhzQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::010xwrHlOyfrGZbO' => 
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
        'as' => 'generated::010xwrHlOyfrGZbO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LPIxEElHIG8rz4Cu' => 
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
        'as' => 'generated::LPIxEElHIG8rz4Cu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3BekTrah5KWoaLvO' => 
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
        'as' => 'generated::3BekTrah5KWoaLvO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ASXAOFi0RKocODGp' => 
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
        'as' => 'generated::ASXAOFi0RKocODGp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qFCSvZc1JBHzCs1G' => 
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
        'as' => 'generated::qFCSvZc1JBHzCs1G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RKj5X0HtY07eQVo8' => 
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
        'as' => 'generated::RKj5X0HtY07eQVo8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vLgRET3tINBDwt5i' => 
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
        'as' => 'generated::vLgRET3tINBDwt5i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vML18slYyDQZlIsq' => 
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
        'as' => 'generated::vML18slYyDQZlIsq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fDGCAQ6elWnr7eFf' => 
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
        'as' => 'generated::fDGCAQ6elWnr7eFf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Bk7VOByHagem4Iv' => 
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
        'as' => 'generated::9Bk7VOByHagem4Iv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y97vEalSIfGbtw4l' => 
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
        'as' => 'generated::y97vEalSIfGbtw4l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ylhOhIoyXcvl5GLx' => 
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
        'as' => 'generated::ylhOhIoyXcvl5GLx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q3W00dhQ6CmG4sqj' => 
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
        'as' => 'generated::Q3W00dhQ6CmG4sqj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::XqMP8pIewivImrPU' => 
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
        'as' => 'generated::XqMP8pIewivImrPU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xf8OdwmthmliMBOO' => 
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
        'as' => 'generated::xf8OdwmthmliMBOO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NtaTdViBg9Jx2rfT' => 
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
        'as' => 'generated::NtaTdViBg9Jx2rfT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5J2WPIi4cGcVmRhX' => 
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
        'as' => 'generated::5J2WPIi4cGcVmRhX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UfvelU6JprE4waZm' => 
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
        'as' => 'generated::UfvelU6JprE4waZm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5sTiMk0rN7Ljr2a8' => 
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
        'as' => 'generated::5sTiMk0rN7Ljr2a8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6UQqjemFPBMO7PPB' => 
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
        'as' => 'generated::6UQqjemFPBMO7PPB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VqksUZIythMlLpCK' => 
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
        'as' => 'generated::VqksUZIythMlLpCK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FnJgJNNovZNBG4dD' => 
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
        'as' => 'generated::FnJgJNNovZNBG4dD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zM9AVv05tX4ga8x4' => 
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
        'as' => 'generated::zM9AVv05tX4ga8x4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5x1jejyVu5LZPyHu' => 
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
        'as' => 'generated::5x1jejyVu5LZPyHu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fl9PBhKIgkICYIQa' => 
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
        'as' => 'generated::fl9PBhKIgkICYIQa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::icZjU5rF4gKF9zjO' => 
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
        'as' => 'generated::icZjU5rF4gKF9zjO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Esmwsme3adKIQIoE' => 
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
        'as' => 'generated::Esmwsme3adKIQIoE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DkOHJBnkjR1KGGPG' => 
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
        'as' => 'generated::DkOHJBnkjR1KGGPG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HuWuKMjybnRfU71F' => 
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
        'as' => 'generated::HuWuKMjybnRfU71F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I4NwVpA7g4dcJLWT' => 
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
        'as' => 'generated::I4NwVpA7g4dcJLWT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TX8xNO0ELazvt2fJ' => 
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
        'as' => 'generated::TX8xNO0ELazvt2fJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gRiAoSxOuGiP6kDC' => 
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
        'as' => 'generated::gRiAoSxOuGiP6kDC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2jdfPb5A1M7lcOzp' => 
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
        'as' => 'generated::2jdfPb5A1M7lcOzp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M74LxGArMn7A7tGX' => 
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
        'as' => 'generated::M74LxGArMn7A7tGX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YlxUliilhh0VqtJa' => 
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
        'as' => 'generated::YlxUliilhh0VqtJa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Thycd8Z5eOpaklEd' => 
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
        'as' => 'generated::Thycd8Z5eOpaklEd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tda2Q7hSnUucKuJb' => 
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
        'as' => 'generated::Tda2Q7hSnUucKuJb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wt3mlgEiEN0tIkEN' => 
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
        'as' => 'generated::wt3mlgEiEN0tIkEN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DRIWXzs1MpHABF4j' => 
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
        'as' => 'generated::DRIWXzs1MpHABF4j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::leigsakPd5yGwHcV' => 
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
        'as' => 'generated::leigsakPd5yGwHcV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ELtCC0bAKTyfxMEP' => 
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
        'as' => 'generated::ELtCC0bAKTyfxMEP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nPaBu9apw6A2CqIF' => 
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
        'as' => 'generated::nPaBu9apw6A2CqIF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h159sYYBN66Zp6fd' => 
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
        'as' => 'generated::h159sYYBN66Zp6fd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t1qhPRopTa7eMTtI' => 
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
        'as' => 'generated::t1qhPRopTa7eMTtI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0hySaG5NLkuPjfdX' => 
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
        'as' => 'generated::0hySaG5NLkuPjfdX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rdc2OYXYsTT3JoVA' => 
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
        'as' => 'generated::Rdc2OYXYsTT3JoVA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Roiz8Ja58KBCmphL' => 
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
        'as' => 'generated::Roiz8Ja58KBCmphL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bEnW1OtpTOlmfwjv' => 
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
        'as' => 'generated::bEnW1OtpTOlmfwjv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CJ9AUANrRjHwJmMo' => 
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
        'as' => 'generated::CJ9AUANrRjHwJmMo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AXJsqWaYwuY5WCnC' => 
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
        'as' => 'generated::AXJsqWaYwuY5WCnC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jYa6GYaua8o2xLof' => 
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
        'as' => 'generated::jYa6GYaua8o2xLof',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0HNonc6uXhhYhR9u' => 
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
        'as' => 'generated::0HNonc6uXhhYhR9u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xfQqO9TiODzqaTkj' => 
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
        'as' => 'generated::xfQqO9TiODzqaTkj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zvas8h063sGwY4bF' => 
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
        'as' => 'generated::zvas8h063sGwY4bF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QKgswbPnt9Yzn0if' => 
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
        'as' => 'generated::QKgswbPnt9Yzn0if',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HNC1qWMRJtHWZarD' => 
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
        'as' => 'generated::HNC1qWMRJtHWZarD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uTE7UEmk9BwjNdRx' => 
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
        'as' => 'generated::uTE7UEmk9BwjNdRx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::duMYpJTR6C4iQjp5' => 
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
        'as' => 'generated::duMYpJTR6C4iQjp5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BSOlrRiTiIBNkGmx' => 
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
        'as' => 'generated::BSOlrRiTiIBNkGmx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7oZ0WY47MuFgdn27' => 
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
        'as' => 'generated::7oZ0WY47MuFgdn27',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KRahPhJilIaLfify' => 
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
        'as' => 'generated::KRahPhJilIaLfify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DZPcYiMKNqZ9gFHW' => 
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
        'as' => 'generated::DZPcYiMKNqZ9gFHW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2SwVRFiRRe3pBKVE' => 
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
        'as' => 'generated::2SwVRFiRRe3pBKVE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NV6RSgLf7d5QP5gO' => 
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
        'as' => 'generated::NV6RSgLf7d5QP5gO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NgPRWMK4c9RkBKaK' => 
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
        'as' => 'generated::NgPRWMK4c9RkBKaK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f06L55yr8dxsdmYq' => 
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
        'as' => 'generated::f06L55yr8dxsdmYq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MgCJWG9wDu9I6xy4' => 
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
        'as' => 'generated::MgCJWG9wDu9I6xy4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qs20hUgxEgJcDSXE' => 
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
        'as' => 'generated::qs20hUgxEgJcDSXE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5VP9bLv2Q0BFKATR' => 
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
        'as' => 'generated::5VP9bLv2Q0BFKATR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DQ3xxfAy1P3d0TkM' => 
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
        'as' => 'generated::DQ3xxfAy1P3d0TkM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jzdi6TN5FltbuDHI' => 
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
        'as' => 'generated::Jzdi6TN5FltbuDHI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UkEhkELqpjQdYfHj' => 
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
        'as' => 'generated::UkEhkELqpjQdYfHj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lgIs3lVRyCuEwodP' => 
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
        'as' => 'generated::lgIs3lVRyCuEwodP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U6zjcuklhtI94XWB' => 
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
        'as' => 'generated::U6zjcuklhtI94XWB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LKqm7xE0QeqmW8VN' => 
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
        'as' => 'generated::LKqm7xE0QeqmW8VN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zD3HGDwzOl6ZFKvk' => 
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
        'as' => 'generated::zD3HGDwzOl6ZFKvk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qB8jVvaVJhM8DJNf' => 
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
        'as' => 'generated::qB8jVvaVJhM8DJNf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FxAZKG78UKbjihC5' => 
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
        'as' => 'generated::FxAZKG78UKbjihC5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xxB6SZtS3ACAEAcz' => 
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
        'as' => 'generated::xxB6SZtS3ACAEAcz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XT19vPemnDqB76Ub' => 
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
        'as' => 'generated::XT19vPemnDqB76Ub',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QYUKOviCcEG79iJp' => 
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
        'as' => 'generated::QYUKOviCcEG79iJp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xBBv7PK81lG75DvD' => 
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
        'as' => 'generated::xBBv7PK81lG75DvD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gfViFhdrdU565O8L' => 
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
        'as' => 'generated::gfViFhdrdU565O8L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PtYgCxrMBva51F0g' => 
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
        'as' => 'generated::PtYgCxrMBva51F0g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y8pMQT3seNNBvp46' => 
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
        'as' => 'generated::Y8pMQT3seNNBvp46',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JMVfrby8sFCqBR7Z' => 
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
        'as' => 'generated::JMVfrby8sFCqBR7Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FK8RsEgKBzVpVmA9' => 
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
        'as' => 'generated::FK8RsEgKBzVpVmA9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gm3PNSe9y3EqZRgH' => 
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
        'as' => 'generated::gm3PNSe9y3EqZRgH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::drCd6hhU8NVQQrEY' => 
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
        'as' => 'generated::drCd6hhU8NVQQrEY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X0OMrUANHHVSlelv' => 
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
        'as' => 'generated::X0OMrUANHHVSlelv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yTHN6Bq4w3FQ7RXS' => 
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
        'as' => 'generated::yTHN6Bq4w3FQ7RXS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6RMmrWxWwJsQ0xYs' => 
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
        'as' => 'generated::6RMmrWxWwJsQ0xYs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DTeyaCbmmZ3EyVIg' => 
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
        'as' => 'generated::DTeyaCbmmZ3EyVIg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q1k8uryeJ2kZ0wKF' => 
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
        'as' => 'generated::Q1k8uryeJ2kZ0wKF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qZDqz9PKxpIJRvlV' => 
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
        'as' => 'generated::qZDqz9PKxpIJRvlV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::umTdAPm09BBqzPNf' => 
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
        'as' => 'generated::umTdAPm09BBqzPNf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n4H5tSJlKatfjAFk' => 
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
        'as' => 'generated::n4H5tSJlKatfjAFk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fcmqBow9TVkHD0Et' => 
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
        'as' => 'generated::fcmqBow9TVkHD0Et',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j1poOHEOXZ6lg1zC' => 
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
        'as' => 'generated::j1poOHEOXZ6lg1zC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K2bF6snm2op38Z6T' => 
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
        'as' => 'generated::K2bF6snm2op38Z6T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Grz7c4iC8UgeRzC5' => 
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
        'as' => 'generated::Grz7c4iC8UgeRzC5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jIlrMUUlkq8T0Oca' => 
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
        'as' => 'generated::jIlrMUUlkq8T0Oca',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JokzulruFGBeZ5kS' => 
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
        'as' => 'generated::JokzulruFGBeZ5kS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j6si9uIdxrh8bEWL' => 
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
        'as' => 'generated::j6si9uIdxrh8bEWL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gkjINmqbjyTCGXpF' => 
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
        'as' => 'generated::gkjINmqbjyTCGXpF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R8AZ5Wp48PHMUvXL' => 
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
        'as' => 'generated::R8AZ5Wp48PHMUvXL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HHfJI0j2GhVWIi8B' => 
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
        'as' => 'generated::HHfJI0j2GhVWIi8B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::30zJL2TQPEqNl9UG' => 
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
        'as' => 'generated::30zJL2TQPEqNl9UG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GLWVV92WXZW3B0Aq' => 
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
        'as' => 'generated::GLWVV92WXZW3B0Aq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ULkspgjDMGDvOakP' => 
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
        'as' => 'generated::ULkspgjDMGDvOakP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ti5h2uvKAPhj111L' => 
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
        'as' => 'generated::Ti5h2uvKAPhj111L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZqcELUQ8xMzb5Xmn' => 
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
        'as' => 'generated::ZqcELUQ8xMzb5Xmn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iWeJdROxI2COBBHx' => 
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
        'as' => 'generated::iWeJdROxI2COBBHx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NNN5XxnhZPagpoGH' => 
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
        'as' => 'generated::NNN5XxnhZPagpoGH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4TmVTx1Bq2gg1L5z' => 
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
        'as' => 'generated::4TmVTx1Bq2gg1L5z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L77UDSB1d8EDLIb3' => 
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
        'as' => 'generated::L77UDSB1d8EDLIb3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XjU4Q6DmLLYODTY6' => 
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
        'as' => 'generated::XjU4Q6DmLLYODTY6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G1hmdb6GVNWg6Nzs' => 
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
        'as' => 'generated::G1hmdb6GVNWg6Nzs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KSACmINNoWOHv5uc' => 
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
        'as' => 'generated::KSACmINNoWOHv5uc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cwEzwVk8MTPRG5cH' => 
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
        'as' => 'generated::cwEzwVk8MTPRG5cH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1QcGdYlM3LxRXQX4' => 
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
        'as' => 'generated::1QcGdYlM3LxRXQX4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::45qsZwGKmWiroWbi' => 
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
        'as' => 'generated::45qsZwGKmWiroWbi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ED4biKCmwhHbJg1r' => 
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
        'as' => 'generated::ED4biKCmwhHbJg1r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F6GUIAkCSudp5AFl' => 
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
        'as' => 'generated::F6GUIAkCSudp5AFl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ca9AMZtyqyjeaLUm' => 
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
        'as' => 'generated::Ca9AMZtyqyjeaLUm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ix7iGyTSq966NXTz' => 
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
        'as' => 'generated::Ix7iGyTSq966NXTz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qtmnmx7NX2fFwLnR' => 
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
        'as' => 'generated::Qtmnmx7NX2fFwLnR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r4hywG90vZr6nb7u' => 
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
        'as' => 'generated::r4hywG90vZr6nb7u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::itLtntAM6atNIOOi' => 
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
        'as' => 'generated::itLtntAM6atNIOOi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jAKaQLb1Y03RsNd6' => 
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
        'as' => 'generated::jAKaQLb1Y03RsNd6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4XLyRHNqmKmcZASi' => 
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
        'as' => 'generated::4XLyRHNqmKmcZASi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::67udFxzLbfAfqsrJ' => 
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
        'as' => 'generated::67udFxzLbfAfqsrJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::URc1BMILk8WLyiNE' => 
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
        'as' => 'generated::URc1BMILk8WLyiNE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8jByCL9KtQ51aGQB' => 
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
        'as' => 'generated::8jByCL9KtQ51aGQB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ffxeuD4i55Fvu1tx' => 
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
        'as' => 'generated::ffxeuD4i55Fvu1tx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VR7mWsuB4rLEiUtr' => 
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
        'as' => 'generated::VR7mWsuB4rLEiUtr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qEYwhxbM481Tf95J' => 
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
        'as' => 'generated::qEYwhxbM481Tf95J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hwaLmYt2OB72zDnQ' => 
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
        'as' => 'generated::hwaLmYt2OB72zDnQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bve5HbYl13XmDEF0' => 
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
        'as' => 'generated::Bve5HbYl13XmDEF0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n7nOt14Q4fCa5rTn' => 
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
        'as' => 'generated::n7nOt14Q4fCa5rTn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CMPPGhoRNJxlVOEo' => 
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
        'as' => 'generated::CMPPGhoRNJxlVOEo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gX1u0IpUXefMBTNR' => 
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
        'as' => 'generated::gX1u0IpUXefMBTNR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O0gHTPZj1BwHyLak' => 
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
        'as' => 'generated::O0gHTPZj1BwHyLak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fua4KGHInT0oFihH' => 
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
        'as' => 'generated::fua4KGHInT0oFihH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UYCBgoHbau1MHveY' => 
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
        'as' => 'generated::UYCBgoHbau1MHveY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HbLqU2C7jVlxQbj0' => 
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
        'as' => 'generated::HbLqU2C7jVlxQbj0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lLuEyfRuYZtOp4k0' => 
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
        'as' => 'generated::lLuEyfRuYZtOp4k0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hRQKrTGvfxKbtKP2' => 
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
        'as' => 'generated::hRQKrTGvfxKbtKP2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1jVsML24axAKnLZA' => 
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
        'as' => 'generated::1jVsML24axAKnLZA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pfUJp4pDlphb4GVR' => 
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
        'as' => 'generated::pfUJp4pDlphb4GVR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cEE3MjhLjLemcyq1' => 
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
        'as' => 'generated::cEE3MjhLjLemcyq1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d2BZMB4kIxtyY1UB' => 
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
        'as' => 'generated::d2BZMB4kIxtyY1UB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dCDp8WWQwPZnKy6R' => 
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
        'as' => 'generated::dCDp8WWQwPZnKy6R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BlsfiXiFykwPdz77' => 
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
        'as' => 'generated::BlsfiXiFykwPdz77',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oKlwysuz9gUGu5EM' => 
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
        'as' => 'generated::oKlwysuz9gUGu5EM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b2qm0Pf7YFhjx7JA' => 
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
        'as' => 'generated::b2qm0Pf7YFhjx7JA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3wcW9yTzSh6FemkQ' => 
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
        'as' => 'generated::3wcW9yTzSh6FemkQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oDEgA7ORoyZaqqLW' => 
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
        'as' => 'generated::oDEgA7ORoyZaqqLW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cfs3ug5TyBSufuvm' => 
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
        'as' => 'generated::Cfs3ug5TyBSufuvm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S7VMSwm379nqtLbu' => 
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
        'as' => 'generated::S7VMSwm379nqtLbu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IodwnWmzGZtCLBZh' => 
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
        'as' => 'generated::IodwnWmzGZtCLBZh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z1vOOxcZf5JEd2Jk' => 
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
        'as' => 'generated::Z1vOOxcZf5JEd2Jk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uqBC6yrDSCU8AZYO' => 
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
        'as' => 'generated::uqBC6yrDSCU8AZYO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LOAdisxwH1LZlfWQ' => 
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
        'as' => 'generated::LOAdisxwH1LZlfWQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YPWacjs0uTDAxoHE' => 
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
        'as' => 'generated::YPWacjs0uTDAxoHE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::cjvpHHSyOvsR1xm5' => 
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
        'as' => 'generated::cjvpHHSyOvsR1xm5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3smYmtLizMG3P6f9' => 
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
        'as' => 'generated::3smYmtLizMG3P6f9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WhL6IDPCF6R4ZYjL' => 
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
        'as' => 'generated::WhL6IDPCF6R4ZYjL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hsai1qw9VsIvbb0I' => 
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
        'as' => 'generated::Hsai1qw9VsIvbb0I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yJMTILCzTRc7BkVM' => 
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
        'as' => 'generated::yJMTILCzTRc7BkVM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ra9jBgJk1Kt5pmx4' => 
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
        'as' => 'generated::ra9jBgJk1Kt5pmx4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ELC9bHnt1HrTsZj4' => 
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
        'as' => 'generated::ELC9bHnt1HrTsZj4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PVIsz6CaH8VD0WLp' => 
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
        'as' => 'generated::PVIsz6CaH8VD0WLp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E11sm4k2ALpYWX0Z' => 
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
        'as' => 'generated::E11sm4k2ALpYWX0Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZJBBsYNo2gsP8NFi' => 
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
        'as' => 'generated::ZJBBsYNo2gsP8NFi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qgBHhiBZPaep9knu' => 
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
        'as' => 'generated::qgBHhiBZPaep9knu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JnVqXXB2y6I9SR36' => 
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
        'as' => 'generated::JnVqXXB2y6I9SR36',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::79jn4LYPTwzgnsuT' => 
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
        'as' => 'generated::79jn4LYPTwzgnsuT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::29NEWGaCoTpZYnIP' => 
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
        'as' => 'generated::29NEWGaCoTpZYnIP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9zMytBcCnPdZT5SP' => 
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
        'as' => 'generated::9zMytBcCnPdZT5SP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::93ldIFHyirHd86WY' => 
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
        'as' => 'generated::93ldIFHyirHd86WY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rgxyJ00NYdxQEA6d' => 
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
        'as' => 'generated::rgxyJ00NYdxQEA6d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zEimj07UuvyQpdVT' => 
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
        'as' => 'generated::zEimj07UuvyQpdVT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::MpHqERn1lcatv7TN' => 
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
        'as' => 'generated::MpHqERn1lcatv7TN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::HgonjcOhPgzi7hXF' => 
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
        'as' => 'generated::HgonjcOhPgzi7hXF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4ERkiPjZrORZor0N' => 
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
        'as' => 'generated::4ERkiPjZrORZor0N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0mnAXSt9RqcCgZcE' => 
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
        'as' => 'generated::0mnAXSt9RqcCgZcE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sOZLF6g9od9zBsVz' => 
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
        'as' => 'generated::sOZLF6g9od9zBsVz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZDWi6ZVwRT9cJmQZ' => 
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
        'as' => 'generated::ZDWi6ZVwRT9cJmQZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::98aX4Tn2Bx43GK6W' => 
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
        'as' => 'generated::98aX4Tn2Bx43GK6W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YbiO5rkvyeaKKqc4' => 
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
        'as' => 'generated::YbiO5rkvyeaKKqc4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NeZKvFvufzQ9QUBB' => 
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
        'as' => 'generated::NeZKvFvufzQ9QUBB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dyCyrcjzjUDKXFPQ' => 
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
        'as' => 'generated::dyCyrcjzjUDKXFPQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SZkEvR1kJ8Rdzn5q' => 
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
        'as' => 'generated::SZkEvR1kJ8Rdzn5q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
