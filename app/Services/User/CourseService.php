<?php

namespace App\Services\User;

use App\Jobs\Service\ProcessServices;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseSignalPlan;
use App\Models\Transaction;
use App\Models\TransactionCourse;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Flashcard;
use App\Models\Module;
use App\Models\ModuleLesson;
use App\Services\Media\CloudinaryService;
use App\Services\Payment\PaystackService;
use App\Services\Query\FilteringService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class CourseService
{
    public function index($inputs)
    {

        $filter = new FilteringService();
        $instituteSlug = Auth::user()->institute_slug;
        $courses = Course::whereHas('user', function ($query) use ($instituteSlug) {
            $query->where('institute_slug', $instituteSlug);
        })->with(['user', 'categories']);
        $filter->filterColumns($courses, $inputs);
        $data['courses'] = $courses->latest()->paginate();
        $data['courses']->each(function ($course) {
            // $course->user_count = $course->batches->pluck('users')->collapse()->count();
        });
        return [
            'data' => $data,
            'code' => 200
        ];
    }


    public function buyers(User $user, $inputs)
    {

        $filter = new FilteringService();
        // $courses = $user->courses()->with(['user', 'categories']);
        // $filter->filterColumns($courses, $inputs);
        // $data['courses'] = $courses->latest()->paginate();
        // $data['courses']->each(function ($course) {
        //     // $course->user_count = $course->batches->pluck('users')->collapse()->count();
        // });
        $data['tranastions'] = Transaction::leftJoin('transaction_course', 'transaction_course.transaction_id', '=', 'transactions.id')
            ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
            ->leftJoin('courses', 'transaction_course.course_id', '=', 'courses.id')
            ->whereNotNull('transactions.paid_at')
            ->where('courses.user_id', $user->id)
            ->select('users.*')
            ->distinct()
            ->paginate();
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function view(Course $course)
    {

        $data['course'] = $course->fresh(['user', 'categories']);
        // $data['course']->users = $data['course']->batches->pluck('users')->collapse();

        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function viewAiCourse(Course $course)
    {

        $data['course'] = $course->fresh(['user', 'categories','modules','modules.lessons', 'quizzes', 'flashcards']);

        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function store($input)
    {
        if ($input['cover_file'] != null) {
            $cloudinary = new CloudinaryService();
            $resp = $cloudinary->store($input['cover_file'], "course-images");
            $input['cover_url'] = $resp[0];
            $input['cover_url_id'] = $resp[1];
            $input['institute_slug'] = Auth::user()->institute_slug;
        }

        $course = Course::create($input);

        if (isset($input['categories'])) {
            foreach ($input['categories'] as $category_id) {

                CourseCategory::create([
                    'course_id' => $course->id,
                    'category_id' => $category_id,
                ]);
            }
        }

        $data['message'] = "Course Created";
        $data['course'] = $course->fresh([]);
        return [
            'data' => $data,
            'code' => 201
        ];
    }

    public function update(Course $course, $input)
    {
        if (isset($input['cover_file'])) {
            $cloudinary = new CloudinaryService();
            if ($course->cover_url_id != null) {
                $cloudinary->delete($course->cover_url_id);
            }

            $resp = $cloudinary->store($input['cover_file'], "course-images");
            $input['cover_url'] = $resp[0];
            $input['cover_url_id'] = $resp[1];
        }
        $course->fill($input);
        if ($course->isDirty()) {
            $course->save();
        }
        if (isset($input['categories'])) {
            CourseCategory::where('course_id', $course->id, )->delete();
            foreach ($input['categories'] as $category_id) {
                CourseCategory::create([
                    'course_id' => $course->id,
                    'category_id' => $category_id,
                ]);
            }
        }

        $data['message'] = "Course updated";
        $data['course'] = $course->fresh([]);
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function delete(Course $course)
    {

        $course->delete();

        if ($course->cover_url_id != null) {
            $cloudinary = new CloudinaryService();
            $cloudinary->delete($course->cover_url_id);
        }

        $data['message'] = "Deleted Successfully";
        $data['course'] = $course;
        return [
            'data' => $data,
            'code' => 200
        ];
    }



    public function subscribe(User $user, Course $course, $type)
    {
        $course = Course::published()->findOrFail($course->id);

        if ($course->has_active_payment) {
            $data['message'] = 'You have an active Subscription';
            return [
                'data' => $data,
                'code' => 200
            ];
        }

        if ($course->pendingPayment != null) {
            $data['message'] = 'You have an Pending Payment';
            $data['transaction'] = $course->pendingPayment;
            return [
                'data' => $data,
                'code' => 200
            ];
        }

        $ref = 'CRS' . (str_pad((Str::random(3) . mt_rand(0, 9999)), 7, '0', STR_PAD_LEFT));
        $transaction = Transaction::create([
            'ref' => $ref,
            'type' => $type,
            'amount' => $course->price,
            'user_id' => $user->id
        ]);



        $transactionCourse = TransactionCourse::create([
            'course_id' => $course->id,
            'transaction_id' => $transaction->id,
        ]);


        $data['message'] = 'Subscription was successful';
        $data['transaction'] = $transaction;
        $data['course'] = $course;
        $data['transactionCourse'] = $transactionCourse;


        if ($type == 'paystack') {
            $_paystackService = new PaystackService();
            $_data = $_paystackService->initializeTransaction([
                'email' => $user->email,
                'amount' => $course->price,
                'reference' => $ref,
            ]);

            $data = [...$data, ...($_data['data'])];
            $data['NOTE'] = 'USE REF TRANSACTION AS PAYMENT TX_REF';
        }
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function createCourseWithAI(UploadedFile $file, Course $course)
{
    set_time_limit(600); // Set the execution time limit to 600 seconds
    try {
        // Prepare the HTTP client request
        $response = Http::timeout(600)
            ->connectTimeout(600)
            ->withHeaders([
                'X-AUG-KEY' => "fHjrSbk5.VdXuuv4lxnF2acfgIqsEDsMF5g1tvM4z",
                'Authorization' => '••••••',
            ])
            ->attach(
                'files',
                file_get_contents($file->getPathname()),
                $file->getClientOriginalName()
            )
            ->post('https://api.autogon.ai/api/v1/services/create-course/');

        // Handle the response
        if ($response->successful()) {
            $data = $response->json()['data'];

            // Save Modules, Lessons, Quizzes, and Flashcards
            $courseId = $course->id;

            // Save Modules and Lessons
            foreach ($data['overview']['modules'] as $moduleData) {
                $module = Module::create([
                    'module_title' => $moduleData['moduleTitle'],
                    'module_description' => $moduleData['moduleDescription'],
                    'course_id' => $courseId,
                ]);

                foreach ($moduleData['lessons'] as $lessonData) {
                    ModuleLesson::create([
                        'module_id' => $module->id,
                        'lesson_title' => $lessonData['lessonTitle'],
                        'lesson_content' => $lessonData['lessonContent'],
                    ]);
                }
            }

            // Save Quizzes
            foreach ($data['quizzes']['quizzes'] as $quizData) {
                Quiz::create([
                    'question' => $quizData['question'],
                    'options' => $quizData['options'],
                    'correct_answer' => $quizData['correctAnswer'],
                    'course_id' => $courseId,
                ]);
            }

            // Save Flashcards
            foreach ($data['flashcards']['flashcards'] as $flashcardData) {
                Flashcard::create([
                    'front' => $flashcardData['front'],
                    'back' => $flashcardData['back'],
                    'course_id' => $courseId,
                ]);
            }

            return [
                'data' => $data,
                'code' => 200
            ];
        } else {
            $errorMessage = 'Unexpected HTTP status: ' . $response->status() . ' ' . $response->body();
            Log::error('Error creating course with AI: ' . $errorMessage);
            return [
                'message' => $errorMessage,
                'code' => $response->status()
            ];
        }
    } catch (\Exception $e) {
        $errorMessage = 'Error creating course with AI: ' . $e->getMessage();
        Log::error($errorMessage);
        return [
            'message' => $errorMessage,
            'code' => 500
        ];
    }
}

public function updateCourseModule($data, Course $course)
    {
        try {
            foreach ($data['modules'] as $moduleData) {
                $module = Module::where('id', $moduleData['id'])->where('course_id', $course->id)->first();
                if ($module) {
                    $module->update([
                        'module_title' => $moduleData['module_title'],
                        'module_description' => $moduleData['module_description'],
                    ]);
                }
            }
            return ['message' => 'Modules updated successfully', 'code' => 200];
        } catch (\Exception $e) {
            Log::error('Error updating course modules: ' . $e->getMessage());
            return ['message' => 'Error updating course modules', 'code' => 500];
        }
    }

    public function updateFlashcardModule($data, Course $course)
    {
        try {
            foreach ($data['flashcards'] as $flashcardData) {
                $flashcard = Flashcard::where('id', $flashcardData['id'])->where('course_id', $course->id)->first();
                if ($flashcard) {
                    $flashcard->update([
                        'front' => $flashcardData['front'],
                        'back' => $flashcardData['back'],
                    ]);
                }
            }
            return ['message' => 'Flashcards updated successfully', 'code' => 200];
        } catch (\Exception $e) {
            Log::error('Error updating flashcards: ' . $e->getMessage());
            return ['message' => 'Error updating flashcards', 'code' => 500];
        }
    }

    public function updateQuizModule($data, Course $course)
    {
        try {
            foreach ($data['quizzes'] as $quizData) {
                $quiz = Quiz::where('id', $quizData['id'])->where('course_id', $course->id)->first();
                if ($quiz) {
                    $quiz->update([
                        'question' => $quizData['question'],
                        'options' => $quizData['options'],
                        'correct_answer' => $quizData['correct_answer'],
                    ]);
                }
            }
            return ['message' => 'Quizzes updated successfully', 'code' => 200];
        } catch (\Exception $e) {
            Log::error('Error updating quizzes: ' . $e->getMessage());
            return ['message' => 'Error updating quizzes', 'code' => 500];
        }
    }

    public function updateLessonModule($data, Course $course)
    {
        try {
            foreach ($data['lessons'] as $lessonData) {
                $lesson = ModuleLesson::where('id', $lessonData['id'])->where('module_id', $lessonData['module_id'])->first();
                if ($lesson) {
                    $lesson->update([
                        'lesson_title' => $lessonData['lesson_title'],
                        'lesson_content' => $lessonData['lesson_content'],
                    ]);
                }
            }
            return ['message' => 'Lessons updated successfully', 'code' => 200];
        } catch (\Exception $e) {
            Log::error('Error updating lessons: ' . $e->getMessage());
            return ['message' => 'Error updating lessons', 'code' => 500];
        }
    }
}
