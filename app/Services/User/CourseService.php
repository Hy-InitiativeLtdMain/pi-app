<?php

namespace App\Services\User;

use App\Jobs\Service\ProcessServices;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseSignalPlan;
use App\Models\Transaction;
use App\Models\TransactionCourse;
use App\Models\User;
use App\Services\Media\CloudinaryService;
use App\Services\Payment\PaystackService;
use App\Services\Query\FilteringService;
use Illuminate\Support\Str;

class CourseService
{
    public function index($inputs)
    {

        $filter = new FilteringService();
        $courses = Course::with(['user', 'categories']);
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

    public function store($input)
    {
        if ($input['cover_file'] != null) {
            $cloudinary = new CloudinaryService();
            $resp = $cloudinary->store($input['cover_file'], "course-images");
            $input['cover_url'] = $resp[0];
            $input['cover_url_id'] = $resp[1];
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
}
