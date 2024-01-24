<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'gender',
        'phone',
        'email',
        'password',
        'is_admin',
        'image',
        'image_id',
        'institute',
        'location',
        'signature'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function verifications()
    {
        return $this->hasMany(VerificationToken::class);
    }

    /**
     * Get all of the bankAccounts for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bankAccounts(): HasMany
    {
        return $this->hasMany(BankAccount::class);
    }

    public function courseSoldCount(): Attribute
    {
        return new Attribute(
            get: function () {
                $user = auth('user')->user();
                $user_id = $user->id;
                return Transaction::
                    leftJoin('transaction_course', 'transaction_course.transaction_id', '=', 'transactions.id')
                    ->leftJoin('courses', 'transaction_course.course_id', '=', 'courses.id')
                    ->whereNotNull('transactions.paid_at')
                    ->where('courses.user_id', $user_id)
                    ->distinct()
                    ->count();
            }
        );
    }

    /**
     * Get all of the courses for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
