<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentMentee extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'mentee_id',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function mentee()
    {
        return $this->belongsTo(Mentee::class);
    }
}
