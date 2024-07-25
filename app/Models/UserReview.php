<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    use HasFactory;
    protected $table = 'user_reviews';
    protected $fillable = [
        'mentor_id',
        'mentee_id',
        'review',
        'rating',
        'session',
        'session_hours',
        'number_of_session',
        'user_type'
    ];

    /**
     * Get the mentor that owns the UserReview
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }

    /**
     * Get the mentee that owns the UserReview
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mentee()
    {
        return $this->belongsTo(Mentee::class, 'mentee_id');
    }
}
