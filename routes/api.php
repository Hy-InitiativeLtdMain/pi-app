<?php

use App\Http\Controllers\Admin\AnalyticsController;
use Illuminate\Http\Request;
// use App\Models\MentorAvailability;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsManager;
use App\Http\Controllers\WebhooksManager;
use App\Http\Controllers\Media\AwsManager;
use App\Http\Controllers\User\AuthManager;
use App\Http\Controllers\User\QuizManager;
use App\Http\Controllers\User\UserManager;
use App\Http\Controllers\Media\VimeoManager;
use App\Http\Controllers\User\CourseManager;
use App\Http\Controllers\User\DetailManager;
use App\Http\Controllers\User\LessonManager;
use App\Http\Controllers\User\ReviewManager;
use App\Http\Controllers\Mentee\MenteeManager;
use App\Http\Controllers\Mentor\MentorManager;
use App\Http\Controllers\User\CategoryManager;
use App\Http\Controllers\User\PaystackManager;
use App\Http\Controllers\User\QuestionManager;
use App\Http\Controllers\Mentee\BookingManager;
use App\Http\Controllers\User\AnalyticsManager;
use App\Http\Controllers\User\AssignmentManager;
use App\Http\Controllers\User\AttachmentManager;
use App\Http\Controllers\User\BankAccountManager;
use App\Http\Controllers\User\TransactionManager;
use App\Http\Controllers\Mentor\AvailabilityController;
use App\Http\Controllers\Admin\AuthManager as AdminAuth;
use App\Http\Controllers\Admin\AuthManager as AdminAuthManager;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Notification\FeatureController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserReviewController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/paystack-hook', [WebhooksManager::class, 'paymentWebhook']);
Route::post('/flw-hook', [WebhooksManager::class, 'flwWebhook']);

Route::group(['prefix' => 'v1', 'middleware' => ['cors', 'json.response']], function () {



    Route::group(['prefix' => 'user'], function () {


        Route::group(['prefix' => 'auth'], function () {


            Route::post('/login', [AuthManager::class, 'login']);
            Route::post('/register', [AuthManager::class, 'register']);
            Route::post('/admin/register', [AdminAuth::class, 'register']);
            Route::post('/forgot-password', [AuthManager::class, 'forgot']);
            Route::post('/reset-password/{user:email}/{token}', [AuthManager::class, 'resetPassword']);

            Route::get('/complete-registration/{user:email}/{token}', [AuthManager::class, 'completeRegistration']);
            Route::post('/regenerate-token', [AuthManager::class, 'regenerateToken']);
        });

        Route::get('notifications', [NotificationController::class, 'index'])->middleware(['auth:user']);
        Route::post('notifications/mark-as-read', [NotificationController::class, 'markNotification'])->middleware(['auth:user']);


        Route::resource('mentor', MentorManager::class)->middleware(['auth:user'])->except('index');
        Route::resource('mentee', MenteeManager::class)->middleware(['auth:user'])->except(['index', 'show']);
        Route::get('mentee-profile', [MenteeManager::class, 'showProfile'])->middleware(['auth:user']);

        Route::get('mentor-profile', [MentorManager::class, 'showProfile'])->middleware(['auth:user']);

        Route::group(['prefix' => 'admin', 'middleware' => ['auth:user', 'auth.administrator.access']], function () {
            // Settings
            Route::post('settings/profile/update', [SettingsController::class, 'update']);
            Route::post('settings/password/update', [SettingsController::class, 'changePassword']);

            Route::get('settings/features', [SettingsController::class, 'features']);
            Route::post('settings/features', [SettingsController::class, 'createOrUpdateFeatures']);
            Route::post('settings/notification/features', [FeatureController::class, 'notifyFeature']);

            // Users
            Route::get('/users', [InstituteController::class, 'users']);
            Route::get('/users/recent', [InstituteController::class, 'recentUsers']);
            Route::get('/user-page/count', [InstituteController::class, 'count']);
            Route::get('users/learners', [InstituteController::class, 'learners']);
            Route::get('users/learners/recent', [InstituteController::class, 'recentLearners']);
            Route::get('users/creators', [InstituteController::class, 'creators']);
            Route::get('users/creators/recent', [InstituteController::class, 'recentCreators']);
            Route::get('users/export',[InstituteController::class, 'usersExport']);
            Route::get('users/learners/export', [InstituteController::class, 'learnersExport']);
            Route::get('users/creators/export', [InstituteController::class, 'creatorsExport']);
            Route::patch('users/{user}', [UserManager::class, 'update']);
            Route::delete('users/{user}', [UserManager::class, 'delete']);
            Route::get('users/{user}', [UserManager::class, 'view']);
            Route::post('users/{user}/role-update', [AdminAuthManager::class, 'updateUserRole']);
            Route::post('users/role-update', [AdminAuthManager::class, 'updateUsersRoles']);
            Route::delete('users-delete', [InstituteController::class, 'usersDelete']);

            // CREATE USERS
            Route::post('users/create/learner', [InstituteController::class, 'createLearner']);
            Route::post('users/create/creator', [InstituteController::class, 'createCreator']);

            Route::get('/transactions', [TransactionController::class, 'index']);
            Route::get('/mentors', [InstituteController::class, 'mentors']);

            Route::post('/mentor/status/{mentor}', [InstituteController::class, 'updateMentorStatus']);
            Route::post('/mentor/availability/{mentor}', [InstituteController::class, 'setMentorAvailability']);
            Route::post('/mentor/accessability/{mentor}', [InstituteController::class, 'setMentorAccessability']);

            // Transactions
            Route::get('/transactions/recent', [TransactionController::class, 'index']);
            Route::get('/transactions/balance', [TransactionController::class, 'balance']);

            // Analytics
            Route::get('analytics/users/count', [AnalyticsController::class, 'userCount']);
            Route::get('analytics/enrollment/percent', [AnalyticsController::class, 'enrollmentPercentage']);
            Route::get('analytics/courses/count', [AnalyticsController::class, 'coursesCount']);
            Route::get('analytics/enrollment/learners', [AnalyticsController::class, 'enrollmentCountPerMonth']);
            Route::get('analytics/enrollment/creators', [AnalyticsController::class, 'creatorsEnrollmentCountPerMonth']);
            Route::get('analytics/enrollment/users', [AnalyticsController::class, 'userEnrollmentCountPerMonth']);
            Route::get('analytics/enrollment/mentors', [AnalyticsController::class, 'mentorEnrollmentCountPerMonth']);
            Route::get('analytics/top-students', [AnalyticsController::class, 'usersByLessonsTaken']);
            Route::get('analytics/top-creators', [AnalyticsController::class, 'usersByCoursesCreated']);
            Route::get('analytics/demography/gender', [AnalyticsController::class, 'demography']);
            Route::get('analytics/courses/{course}/user', [AnalyticsController::class, 'courseUsers']);

            // Courses/Lessons
            Route::get('/category', [CourseController::class, 'getCategories']);
            Route::get('/courses', [InstituteController::class, 'courses']);
            Route::get('/courses/{category}', [CourseController::class, 'getCourses']);
            Route::post('courses/{course}/status', [CourseController::class, 'flagCourse']);
            Route::get('/course/{course}', [CourseController::class, 'getCourse']);
            Route::post('lessons/{lesson}/status', [CourseController::class, 'flagLesson']);
            Route::get('/courses/{course}/lessons', [CourseController::class, 'getLessons']);

            // Mentor
            Route::get('/mentors', [MentorController::class, 'getMentorSearch']);
            Route::get('/mentors/pending', [MentorController::class, 'getPendingMentors']);
            Route::get('/mentors/mentor/{id}', [MentorController::class, 'getMentor']);
            Route::get('mentors/export', [MentorController::class, 'mentorsExport']);
            Route::delete('/mentors/delete', [MentorController::class, 'deleteMentors']);

            // Route::get('/approve-mentors-in-db', [InstituteController::class, 'approveMentors']);
        });

        // Availability
        Route::group(['prefix' => 'mentors', 'middleware' => ['auth:user']], function () {
            Route::apiResource('availability', AvailabilityController::class)->except('show');
            Route::get('availabilities', function () {
                return response()->json(['message' => 'Testing availability index endpoint']);
            });
            Route::get('availability/bookings', [AvailabilityController::class, 'booking']);

            // Update booking status
            Route::patch('availability/bookings/{booking}', [BookingManager::class, 'updateStatus']);
            Route::get('availability/bookings/{id}', [AvailabilityController::class, 'getBooking']);
            Route::get('accepted-bookings', [BookingManager::class, 'getAcceptedBookings']);

            Route::get('/session-data', [SessionsManager::class, 'sessions']);

            Route::post('experience', [MentorManager::class, 'createExperience']);
            Route::post('skills', [MentorManager::class, 'createSkills']);
            Route::post('accessability', [MentorManager::class, 'createAccessability']);
            Route::get('/number-of-mentees', [BookingManager::class, 'countMentees']);
            Route::post('/mentee/profile/{id}/review', [UserReviewController::class, 'store']);

            Route::put('mentee/profile/{id}/review/{userReview}', [UserReviewController::class, 'update']);
            Route::delete('mentee/profile/{id}/review/{userReview}', [UserReviewController::class, 'destroy']);
            Route::get('/mentor/profile/reviews', [UserReviewController::class, 'fetchMentorReviews']);
            Route::get('/{id}/profile/reviews', [UserReviewController::class, 'fetchMentorReview']);

        });

        //Booking
        Route::group(['prefix' => 'mentees', 'middleware' => ['auth:user']], function () {
            Route::get('/bookings', [BookingManager::class, 'index']);
            Route::post('/bookings', [BookingManager::class, 'store']);
            Route::get('/bookings/{id}', [BookingManager::class, 'show']);
            Route::put('/bookings/{id}', [BookingManager::class, 'update']);
            Route::delete('/bookings/{id}', [BookingManager::class, 'destroy']);
            // View Available Mentors
            Route::get('/mentors', [MentorManager::class, 'index']);
            Route::get('/available-mentors', [BookingManager::class, 'getAvailableMentorsAtCurrentTime']);
            Route::get('/my-mentors', [BookingManager::class, 'getMentors']);
            Route::get('/bookings/{bookingId}/mentor', [BookingManager::class, 'getMentor']);

            Route::get('/session-data', [SessionsManager::class, 'sessions']);
            Route::get('/number-of-mentors', [BookingManager::class, 'countMentors']);
            Route::post('/mentor/profile/{id}/review', [UserReviewController::class, 'store']);
            Route::put('mentor/profile/{id}/review/{userReview}', [UserReviewController::class, 'update']);
            Route::delete('mentor/profile/{id}/review/{userReview}', [UserReviewController::class, 'destroy']);

            Route::get('/{id}/profile/reviews', [UserReviewController::class, 'fetchMenteeReview']);
            Route::get('/mentee/profile/reviews', [UserReviewController::class, 'fetchMenteeReviews']);

        });

        Route::group(['middleware' => ['auth:user', 'auth.user.state']], function () {

            Route::group(['prefix' => 'account', 'excluded_middleware' => []], function () {
                Route::get('/', [DetailManager::class, 'index']);
                Route::patch('/', [DetailManager::class, 'update']);
                Route::post('/', [DetailManager::class, 'update']);
                Route::delete('/', [DetailManager::class, 'deleteAccount']);
                Route::post('/request-payout', [DetailManager::class, 'requestPayout']);
            });

            Route::group(['prefix' => 'category', 'middleware' => []], function () {
                Route::get('/', [CategoryManager::class, 'index']);
                Route::post('/', [CategoryManager::class, 'store'])->middleware(["auth.admin.access"]);
                Route::post('/bulk', [CategoryManager::class, 'bulkCreate'])->middleware(["auth.admin.access"]);
                Route::get('/{category}', [CategoryManager::class, 'view']);
                Route::patch('/{category}', [CategoryManager::class, 'update'])->middleware(["auth.learner.access"]);
                Route::delete('/{category}', [CategoryManager::class, 'delete'])->middleware(["auth.learner.access"]);
            });

            Route::group(['prefix' => 'course', 'middleware' => []], function () {
                Route::get('/', [CourseManager::class, 'index']);
                Route::get('/buyers', [CourseManager::class, 'buyers']);
                Route::post('/', [CourseManager::class, 'store'])->middleware(["auth.admin.access"]);
                Route::post('/create-course-with-ai/{course}', [CourseManager::class, 'createCourseWithAI'])->middleware(["auth.admin.access"]);
                Route::put('/courses/{course}/modules', [CourseManager::class, 'updateCourseModule'])->middleware(["auth.admin.access"]);
                Route::put('/courses/{course}/flashcards', [CourseManager::class, 'updateFlashcardModule'])->middleware(["auth.admin.access"]);
                Route::put('/courses/{course}/quizzes', [CourseManager::class, 'updateQuizModule'])->middleware(["auth.admin.access"]);
                Route::put('/courses/{course}/lessons', [CourseManager::class, 'updateLessonModule'])->middleware(["auth.admin.access"]);
                Route::get('/{course}', [CourseManager::class, 'view']);
                Route::get('/ai/{course}', [CourseManager::class, 'viewAICourse']);
                Route::get('/{course}/subscribe', [CourseManager::class, 'subscribe'])->middleware(["auth.learner.access"]);;
                Route::post('/{course}', [CourseManager::class, 'update'])->middleware(["auth.admin.access"]);
                Route::delete('/{course}', [CourseManager::class, 'delete'])->middleware(["auth.admin.access"]);
            });

            Route::group(['prefix' => 'lesson', 'middleware' => []], function () {
                Route::get('/', [LessonManager::class, 'index']);
                Route::post('/{course}', [LessonManager::class, 'store'])->middleware(["auth.admin.access"]);
                Route::post('/{course}/list', [LessonManager::class, 'storeList']);
                Route::get('/{lesson}', [LessonManager::class, 'view']);
                Route::get('/{lesson}/seen', [LessonManager::class, 'seen'])->middleware(["auth.learner.access"]);
                Route::post('/{lesson}/update', [LessonManager::class, 'update'])->middleware(["auth.admin.access"]);
                Route::delete('/{lesson}', [LessonManager::class, 'delete'])->middleware(["auth.admin.access"]);
            });

            Route::group(['prefix' => 'transaction', 'middleware' => []], function () {
                Route::get('/', [TransactionManager::class, 'index']);
                Route::get('/all', [TransactionManager::class, 'indexAll']);
                Route::get('/{transaction}', [TransactionManager::class, 'view']);
                Route::post('/{transaction}', [TransactionManager::class, 'update'])->middleware(["auth.admin.access"]);
                Route::delete('/{transaction}', [TransactionManager::class, 'delete'])->middleware(["auth.admin.access"]);
                Route::get('/{transaction}/payout', [TransactionManager::class, 'makePayout'])->middleware(["auth.admin.access"]);
                Route::get('/{transaction}/verify-payout-otp', [TransactionManager::class, 'verifyOTPPayout'])->middleware(["auth.admin.access"]);
            });

            Route::group(['prefix' => 'assignment', 'middleware' => []], function () {
                Route::get('/', [AssignmentManager::class, 'index']);
                Route::post('/', [AssignmentManager::class, 'store'])->middleware(["auth.admin.access"]);
                Route::get('/{assignment}', [AssignmentManager::class, 'view']);
                Route::post('/{assignment}/submit', [AssignmentManager::class, 'submit'])->middleware(["auth.learner.access"]);
                Route::patch('/{assignment}', [AssignmentManager::class, 'update'])->middleware(["auth.admin.access"]);
                Route::delete('/{assignment}', [AssignmentManager::class, 'delete'])->middleware(["auth.admin.access"]);
            });

            Route::group(['prefix' => 'attachment', 'middleware' => []], function () {
                Route::get('/', [AttachmentManager::class, 'index']);
                Route::post('/', [AttachmentManager::class, 'store']);
                Route::get('/{attachment}', [AttachmentManager::class, 'view']);
                Route::patch('/{attachment}', [AttachmentManager::class, 'update']);
                Route::delete('/{attachment}', [AttachmentManager::class, 'delete']);
            });

            Route::group(['prefix' => 'bank-account', 'middleware' => []], function () {
                Route::get('/', [BankAccountManager::class, 'index']);
                Route::post('/', [BankAccountManager::class, 'store']);
                Route::get('/{bankAccount}', [BankAccountManager::class, 'view']);
                Route::post('/{bankAccount}', [BankAccountManager::class, 'update']);
                Route::delete('/{bankAccount}', [BankAccountManager::class, 'delete']);
            });

            Route::group(['prefix' => 'banking', 'middleware' => []], function () {
                Route::group(['prefix' => 'paystack', 'middleware' => []], function () {
                    Route::get('/listbank', [PaystackManager::class, 'allBanks']);
                    Route::get('/verify-account', [PaystackManager::class, 'verifyAccount']);
                    Route::post('/initialize-transaction', [PaystackManager::class, 'initializeTransaction']);
                });
            });

            Route::group(['prefix' => 'quiz', 'middleware' => []], function () {
                Route::get('/', [QuizManager::class, 'index']);
                Route::post('/', [QuizManager::class, 'store']);
                Route::get('/{quiz}', [QuizManager::class, 'view']);
                Route::patch('/{quiz}', [QuizManager::class, 'update']);
                Route::post('/{quiz}/submit', [QuizManager::class, 'submit'])->middleware(["auth.learner.access"]);
                Route::delete('/{quiz}', [QuizManager::class, 'delete']);
                Route::delete('/lesson/{lesson}', [QuizManager::class, 'deleteByLessonId']);
            });


            Route::group(['prefix' => 'review', 'middleware' => []], function () {
                Route::get('/', [ReviewManager::class, 'index']);
                Route::post('/', [ReviewManager::class, 'store']);
                Route::get('/{review}', [ReviewManager::class, 'view']);
                Route::patch('/{review}', [ReviewManager::class, 'update']);
                Route::delete('/{review}', [ReviewManager::class, 'delete']);
            });

            Route::group(['prefix' => 'user', 'middleware' => []], function () {
                Route::get('/', [UserManager::class, 'index']);
                Route::get('/{user}', [UserManager::class, 'view']);
                Route::patch('/{user}', [UserManager::class, 'update']);
                Route::delete('/{user}', [UserManager::class, 'delete']);
            });

            Route::group(['prefix' => 'question', 'middleware' => []], function () {
                Route::get('/', [QuestionManager::class, 'index']);
                Route::post('/', [QuestionManager::class, 'store']);
                Route::get('/{question}', [QuestionManager::class, 'view']);
                Route::patch('/{question}', [QuestionManager::class, 'update']);
                Route::delete('/{question}', [QuestionManager::class, 'delete']);
            });


            Route::group(['prefix' => 'analytics', 'middleware' => []], function () {
                Route::get('/stats', [AnalyticsManager::class, 'stats']);
                Route::get('/users-enrollment', [AnalyticsManager::class, 'usersLineGraph']);
                Route::get('/users-enrollment-year', [AnalyticsManager::class, 'usersLineGraphYear']);
            });





            Route::get('/logout', [AuthManager::class, 'logout']);
        });
    });
    Route::group(['prefix' => 'media'], function () {
        Route::group(['prefix' => 'aws'], function () {
            Route::post('/', [AwsManager::class, 'generatePresignedUrl']);
        });
        Route::group(['prefix' => 'vimeo'], function () {
            Route::get('/', [VimeoManager::class, 'generatePresignedUrl']);
        });
    });
});
