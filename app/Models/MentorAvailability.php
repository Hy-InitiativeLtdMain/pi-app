<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorAvailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'title',
        'availability', // JSON column
        'duration',
        'about',
        'meeting_link',

    ];

    protected $casts = [
        'availability' => 'json',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    /**
     * Get all of the booking for the MentorAvailability
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

}
