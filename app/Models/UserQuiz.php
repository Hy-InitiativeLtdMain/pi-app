<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserQuiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'points',


        'quiz_id',
        'user_id',
    ];


    /**
     * Get the quiz that owns the UserQuiz
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }
}
