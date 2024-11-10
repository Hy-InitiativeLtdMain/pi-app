<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'cover_type',
        'cover_url',
        'cover_url_id',
        'description',

        'published',

        'category_id',
        'user_id',
        'status',
        'feedback',
        'institute_slug',
    ];

    protected $hidden = [
        "cover_url_id",
        "user_id",
    ];

    protected $appends = [
        "paid",
        "rating"
    ];

    public function scopePublished($query)
    {
        $query->where('published', true);
    }

    /**
     * Get the user that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the category that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The categories that belong to the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'course_category');
    }

    /**
     * Get all of the lessons for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }





    /**
     * The transactions that belong to the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function transactions(): BelongsToMany
    {
        return $this->belongsToMany(Transaction::class, 'transaction_course');
    }




    public function userActivePayment(User $user)
    {
        $user_id = $user->id;
        if ($this->is_free) {
            return $user->free_course == null;
        }

        $latestTransaction =  $this->transactions()->where('transactions.user_id',  $user_id)->latest('paid_at')->first();
        if ($latestTransaction == null) {
            return false;
        }
        if ($latestTransaction->paid_at == null) {
            return false;
        }

        return true;
    }

    public function hasActivePayment(): Attribute
    {
        return new Attribute(
            get: function () {
                $user = auth('api')->user();
                $user_id = $user->id;
                if ($this->is_free) {
                    return $user->free_course == null;
                }

                $latestTransaction =  $this->transactions()->where('transactions.user_id',  $user_id)->latest('paid_at')->first();
                if ($latestTransaction == null) {
                    return false;
                }
                if ($latestTransaction->paid_at == null) {
                    return false;
                }

                return true;
            }
        );
    }

    public function pendingPayment(): Attribute
    {
        return new Attribute(
            get: function ($month = 1) {
                $user = auth('api')->user();
                $user_id = $user->id;
                return $this->transactions()->where('transactions.user_id',  $user_id)->whereNull('transactions.paid_at')->latest()->first();
            }
        );
    }

    public function hasPendingPayment(): Attribute
    {
        return new Attribute(
            get: function ($month = 1) {
                $user = auth('api')->user();
                $user_id = $user->id;
                $latestTransaction =  $this->transactions()->where('transactions.user_id',  $user_id)->latest('paid_at')->first();
                if ($latestTransaction == null) {
                    return false;
                }
                if ($latestTransaction->paid_at == null) {
                    return true;
                }
                return false;
            }
        );
    }





    public function certificate(): Attribute
    {
        return new Attribute(
            get: function () {
                $batch = $this->myBatch;
                if ($batch != null && ($batch->status == 2 || $batch->status == 3)) {
                    $user = auth('api')->user();
                    $coures_id = $this->id;
                    $user_id = $user->id;
                    $certificateValue = Config::where('key', 'certificate_base_url')->first();
                    $certificate_base_url = 'https://iii.app/certificate';
                    if ($certificateValue != null) {
                        $certificate_base_url = $certificateValue->value;
                    }
                    return "$certificate_base_url/$coures_id/$user_id";
                }
                return null;
            }
        );
    }

    public function seenLesson(Lesson $lesson, User $user)
    {
        # code...
    }

    public function paid(): Attribute
    {
        return new Attribute(
            get: fn($value) => $this->hasActivePayment,
        );
    }

    /**
     * Get all of the assignments for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assignments(): HasMany
    {
        return $this->hasMany(Assignment::class);
    }

    /**
     * Get all of the reviews for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function rating(): Attribute
    {
        return new Attribute(
            get: fn($value) => $this->reviews()->avg("rate"),
        );
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function flashcards()
    {
        return $this->hasMany(Flashcard::class);
    }

    /**
     * Get the top courses based on unique user count
     *
     * @param int $limit
     * @return \Illuminate\Support\Collection
     */
    public static function getTopCoursesByUserCount(int $limit = 4)
    {
        return DB::table('courses')
            ->join('lessons', 'courses.id', '=', 'lessons.course_id')
            ->join('lesson_users', 'lessons.id', '=', 'lesson_users.lesson_id')
            ->select('courses.id', 'courses.title', DB::raw('COUNT(DISTINCT lesson_users.user_id) as user_count'))
            ->groupBy('courses.id', 'courses.title')
            ->orderByDesc('user_count')
            ->limit($limit)
            ->get();
    }
}
