<?php

use App\Http\Controllers\User\AuthManager;
use App\Http\Controllers\User\CategoryManager;
use App\Http\Controllers\User\CourseManager;
use App\Http\Controllers\User\DetailManager;
use App\Http\Controllers\User\LessonManager;
use App\Http\Controllers\User\TransactionManager;
use App\Http\Controllers\WebhooksManager;
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
        Route::group(['middleware' => ['auth:user', 'auth.user.state']], function () {

            Route::group(['prefix' => 'account', 'excluded_middleware' => []], function () {
                Route::get('/', [DetailManager::class, 'index']);
                Route::patch('/', [DetailManager::class, 'update']);
                Route::post('/', [DetailManager::class, 'update']);
                Route::delete('/', [DetailManager::class, 'deleteAccount']);
            });

            Route::group(['prefix' => 'category', 'middleware' => []], function () {
                Route::get('/', [CategoryManager::class, 'index']);
                Route::post('/', [CategoryManager::class, 'store']);
                Route::get('/{category}', [CategoryManager::class, 'view']);
                Route::post('/{category}', [CategoryManager::class, 'update']);
                Route::delete('/{category}', [CategoryManager::class, 'delete']);
            });

            Route::group(['prefix' => 'course', 'middleware' => []], function () {
                Route::get('/', [CourseManager::class, 'index']);
                Route::post('/', [CourseManager::class, 'store']);
                Route::get('/{course}', [CourseManager::class, 'view']);
                Route::get('/{course}/subscribe', [CourseManager::class, 'subscribe']);
                Route::post('/{course}', [CourseManager::class, 'update']);
                Route::delete('/{course}', [CourseManager::class, 'delete']);
                
                Route::group(['prefix' => '/{course}/lesson', 'middleware' => []], function () {
                    Route::get('/', [LessonManager::class, 'index']);
                    Route::post('/', [LessonManager::class, 'store']);
                    Route::post('/list', [LessonManager::class, 'storeList']);
                    Route::get('/{lesson}', [LessonManager::class, 'view']);
                    Route::post('/{lesson}', [LessonManager::class, 'update']);
                    Route::delete('/{lesson}', [LessonManager::class, 'delete']);
                });
            });

            Route::group(['prefix' => 'transaction', 'middleware' => []], function () {
                Route::get('/', [TransactionManager::class, 'index']);
                Route::get('/all', [TransactionManager::class, 'indexAll']);
                Route::get('/{transaction}', [TransactionManager::class, 'view']);
                Route::post('/{transaction}', [TransactionManager::class, 'update']);
                Route::delete('/{transaction}', [TransactionManager::class, 'delete']);
                Route::get('/{transaction}/payout', [TransactionManager::class, 'makePayout']);          
            });

            

            


            Route::get('/logout', [AuthManager::class, 'logout']);
        });

        
    });
});
