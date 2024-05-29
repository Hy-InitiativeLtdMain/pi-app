<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentee_id',
        'mentor_availability_id',
        'mentor_id',
        'date',
        'time',
        'reason',
        'status'
    ];

    public function mentee()
    {
        return $this->belongsTo(Mentee::class);
    }

    public function mentorAvailability()
    {
        return $this->belongsTo(MentorAvailability::class);
    }

    public function mentor() {
        return $this->belongsTo(Mentor::class);
    }

    public function hasExpired(): bool
    {
        return Carbon::parse($this->date . ' ' . $this->time)->isPast();
    }

    public function isApproved(): bool
    {
        return $this->status === 'Approved';
    }
}
