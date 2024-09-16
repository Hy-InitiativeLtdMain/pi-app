<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_type',
        'cover_url',
        'cover_url_id',
        'url',
        'content',


        'course_id',
        'status',
    ];

    protected $hidden = [
        "cover_url_id",
        "created_at",
        "updated_at",
    ];

    protected $appends = [
        "seen",
    ];
    /**
     * Get the course that owns the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }




    /**
     * Get all of the lessonBatchSeens for the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessonSeens(): HasMany
    {
        return $this->hasMany(LessonUser::class);
    }


    /**
     * Get all of the assignments for the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assignments(): HasMany
    {
        return $this->hasMany(Assignment::class);
    }

    public function seen(): Attribute
    {
        return new Attribute(
            get: function () {
                $user = auth('api')->user();
                if ($user == null) return false;
                $user_id = $user->id;
                $lessonSeen = $this->lessonSeens()->where('lesson_users.user_id', $user_id)->first();
                return $lessonSeen ? $lessonSeen->seen == 1 : false;
            },
        );
    }
}
