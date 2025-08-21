<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
<<<<<<< HEAD
        'mentee_id',
        'title',
        'meeting_type',
        'meeting_link',
        'start_meeting_link',
        'description',
        'scheduled_at',
        'scheduled_end',
        'total_time',
=======
        'title',
        'meeting_type',
        'meeting_link',
        'description',
        'scheduled_at',
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function mentees()
    {
        return $this->belongsToMany(Mentee::class, 'appointment_mentees');
    }
<<<<<<< HEAD

    public function mentee()
    {
        return $this->belongsTo(Mentee::class, 'mentee_id');
    }
=======
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
}
