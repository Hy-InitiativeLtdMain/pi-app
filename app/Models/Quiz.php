<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'lesson_id',
        'course_id',
    ];

    protected $appends = [
        "submitted"
    ];


    /**
     * Get the lessson that owns the Quiz
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lessson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }


    /**
     * Get the course that owns the Quiz
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get all of the questions for the Quiz
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    /**
     * Get all of the userQuizzes for the Quiz
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userQuizzes(): HasMany
    {
        return $this->hasMany(UserQuiz::class);
    }

    public function submitted(): Attribute
    {
        return new Attribute(
            get: function () {
                $user = auth('user')->user();
                $user_id = $user->id;
                return $this->userQuizzes()->where('user_quizzes.user_id', $user_id)->first() != null;
            }
        );
    }
}
