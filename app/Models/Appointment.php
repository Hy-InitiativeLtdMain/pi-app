<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'title',
        'meeting_type',
        'meeting_link',
        'description',
        'scheduled_at',
        'scheduled_end',
        'total_time',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function mentees()
    {
        return $this->belongsToMany(Mentee::class, 'appointment_mentees');
    }
}
