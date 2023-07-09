<?php

namespace App\Models;

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
        'content',


        'course_id',
    ];

    protected $hidden = [
        "cover_url_id",
        "created_at",
        "updated_at",
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
}
