<?php

use App\Http\Controllers\Media\AwsManager;
use App\Http\Controllers\Media\VimeoManager;
use App\Http\Controllers\Mentee\BookingManager;
use App\Http\Controllers\Mentee\MenteeManager;
use App\Http\Controllers\Mentor\AvailabilityController;
use App\Http\Controllers\Mentor\MentorManager;
use App\Http\Controllers\User\AnalyticsManager;
use App\Http\Controllers\User\AssignmentManager;
use App\Http\Controllers\User\AttachmentManager;
use App\Http\Controllers\User\AuthManager;
use App\Http\Controllers\User\BankAccountManager;
use App\Http\Controllers\User\CategoryManager;
use App\Http\Controllers\User\CourseManager;
use App\Http\Controllers\User\DetailManager;
use App\Http\Controllers\User\LessonManager;
use App\Http\Controllers\User\PaystackManager;
use App\Http\Controllers\User\QuestionManager;
use App\Http\Controllers\User\QuizManager;
use App\Http\Controllers\User\ReviewManager;
use App\Http\Controllers\User\UserManager;
use App\Http\Controllers\User\TransactionManager;
use App\Http\Controllers\WebhooksManager;
use App\Models\MentorAvailability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
            Route::post('/forgot-password', [AuthManager::class, 'forgot']);
            Route::post('/reset-password/{user:email}/{token}', [AuthManager::class, 'resetPassword']);

            Route::get('/complete-registration/{user:email}/{token}', [AuthManager::class, 'completeRegistration']);
            Route::post('/regenerate-token', [AuthManager::class, 'regenerateToken']);
        });

        Route::resource('mentor', MentorManager::class)->middleware(['auth:user'])->except('index');
        Route::resource('mentee', MenteeManager::class)->middleware(['auth:user'])->except(['index', 'show']);
        Route::get('mentee-profile', [MenteeManager::class, 'showProfile'])->middleware(['auth:user']);

        Route::get('mentor-profile', [MentorManager::class, 'showProfile'])->middleware(['auth:user']);


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
            Route::get('/my-mentors', [BookingManager::class,'getMentors']);
            Route::get('/bookings/{bookingId}/mentor', [BookingManager::class, 'getMentor']);
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
                Route::get('/{category}', [CategoryManager::class, 'view']);
                Route::patch('/{category}', [CategoryManager::class, 'update'])->middleware(["auth.learner.access"]);
                Route::delete('/{category}', [CategoryManager::class, 'delete'])->middleware(["auth.learner.access"]);
            });

            Route::group(['prefix' => 'course', 'middleware' => []], function () {
                Route::get('/', [CourseManager::class, 'index']);
                Route::get('/buyers', [CourseManager::class, 'buyers']);
                Route::post('/', [CourseManager::class, 'store'])->middleware(["auth.admin.access"]);
                Route::get('/{course}', [CourseManager::class, 'view']);
                Route::get('/{course}/subscribe', [CourseManager::class, 'subscribe'])->middleware(["auth.learner.access"]);
                ;
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
