<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{
    use HasFactory;

    protected $fillable = [
        'front',
        'back',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
