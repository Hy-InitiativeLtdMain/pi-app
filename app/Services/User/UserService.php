<?php

namespace App\Services\User;

use App\Jobs\User\AuthJobManager;
use App\Models\Transaction;
use App\Models\User;
use App\Services\Media\CloudinaryService;
use App\Services\Query\FilteringService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService
{

    public function index($inputs)
    {
        $filter = new FilteringService();
        $users = User::query();
        $filter->filterColumns($users, $inputs);
        $data = [];
        $data['users'] = $users->with([])->latest()->paginate();
        $data['users']->each(function ($user) {
            $user->append([]);
        });
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function view(User $user)
    {
        $data['user'] = $user;
        return [
            'data' => $data,
            'code' => 200
        ];
    }



    public function show(User $user)
    {
        $data['user'] = $user->fresh([]);
        $data['user']->append(['course_sold_count']);
        if ($user->mentor){
            $data['is_mentor'] = true;
        } else if ($user->mentee){
            $data['is_mentee'] = true;
        } else {
            $data['is_mentor'] = false;
            $data['is_mentee'] = false;
        }

        $data['available_balance'] = Transaction::leftJoin('transaction_course', 'transaction_course.transaction_id', '=', 'transactions.id')
        ->leftJoin('courses', 'transaction_course.course_id', '=', 'courses.id')
        ->where('courses.user_id', $user->id )
        // ->select('transactions.*')
        ->sum('transactions.amount');
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function store($input)
    {


        if (isset($input['image'])) {
            $cloudinary = new CloudinaryService();
            $resp = $cloudinary->store($input['image'], "user-images");
            $input['image'] = $resp[0];
            $input['image_id'] = $resp[1];
        }

        $input['password'] = Str::random(8);
        $user = User::create($input);

        $data['message'] = 'User Created';
        $data['user'] = $user;
        $user->verifications()->create([
            'token' => mt_rand(1000, 9999)
        ]);
        $emailJob = (new AuthJobManager($user, "new_user", $input['password']))->delay(Carbon::now()->addSeconds(2));
        dispatch($emailJob);
        return [
            'data' => $data,
            'code' => 201
        ];
    }



    public function update(User $user, $input)
    {
        if (isset($input['password'])) {
            if (!isset($input['current_password']) ||  !Hash::check($input['current_password'], $user->password)) {
                $data['message'] = 'Current Password is incorrect';
                return [
                    'data' => $data,
                    'code' => 422
                ];
            }
        }
        if (isset($input['image'])) {
            $cloudinary = new CloudinaryService();
            if ($user->image_id != null) {
                $cloudinary->delete($user->image_id);
            }

            $resp = $cloudinary->store($input['image'], "user-images");
            $input['image'] = $resp[0];
            $input['image_id'] = $resp[1];
        }
        if (isset($input['referrer_code'])) {
            $referrer = User::where('referral_code', $input['referrer_code'])->firstOrFail();
            $input['referrer_user_id'] = $referrer->id;
        }
        $user->fill($input);
        if ($user->isDirty()) {
            $user->save();
        }
        $data['user'] = $user;
        return [
            'data' => $data,
            'code' => 200
        ];
    }


    public function deleteAccount(User $user)
    {

        $user->delete();
        $data['user'] = $user;
        $data['message'] = "Account Deleted";
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
