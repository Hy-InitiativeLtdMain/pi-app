<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentee_id',
        'mentor_availability_id',
        'date',
        'time',
    ];

    public function mentee()
    {
        return $this->belongsTo(Mentee::class);
    }

    public function mentorAvailability()
    {
        return $this->belongsTo(MentorAvailability::class);
    }
}
