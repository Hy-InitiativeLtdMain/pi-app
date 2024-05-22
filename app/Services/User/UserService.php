<?php

namespace App\Services\User;

use App\Events\PasswordChange;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Jobs\User\AuthJobManager;
use App\Models\AdminFeature;
use Illuminate\Support\Facades\Hash;
use App\Services\Query\FilteringService;
use App\Services\Media\CloudinaryService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserService
{

    public function index($inputs)
    {
        $instituteSlug = Auth::user()->institute_slug;
        $filter = new FilteringService();
        $users = User::where('institute_slug', $instituteSlug)->query();
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
        if ($user->admin) {

            // Fetch admin features
            $adminFeatures = AdminFeature::where('user_id', $user->id)->get();
            // dd($adminFeatures);

            // If admin features are empty, create default features
            if ($adminFeatures->isEmpty()) {
                // Check if there is another admin with the same institute_slug
                $adminWithSameInstitute = User::where('institute_slug', $user->institute_slug)
                    ->where('admin', true)
                    ->get()->pluck('id')->toArray();

                // dd($adminWithSameInstitute);
                // If another admin with the same institute_slug exists, get their features
                if ($adminWithSameInstitute) {
                    $adminFeatures = AdminFeature::whereIn('user_id', $adminWithSameInstitute)->get();
                    // dd($adminFeatures);
                }

            }
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
        // dd($input);
        if (isset($input['password'])) {
            if (!isset($input['current_password'])) {
                if (!Hash::check($input['current_password'], $user->password)){
                $data['message'] = 'Current Password is incorrect';
                return [
                    'data' => $data,
                    'code' => 422
                ];}
            }

            $user->password = $input['password'];
            $user->save();
            $data['message'] = 'Password Updated';
            // return with current password
            // $data['user'] = $user;
            // event(new PasswordChange($user));

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
        DB::transaction(function () use ($user) {
            // List all related models that should be deleted when the user is deleted
            $relatedModels = [
                'bankAccounts',
                'courses',
                'mentor',
                'mentee',
                'lessons',
                // Add any other related models here
            ];

            // Iterate through the related models and delete them
            foreach ($relatedModels as $relation) {
                if ($user->$relation()->exists()) {
                    $user->$relation()->delete();
                }
            }

            // Now delete the user
            $user->delete();
        });

        $data['user'] = $user;
        $data['message'] = "Account Deleted";
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
