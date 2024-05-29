<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'level',
        'course',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function getNumberOfMentors($status = null)
    {
        $query = $this->bookings();

        if ($status !== null) {
            $query->where('status', $status);
        }

        return $query->distinct('mentor_id')->count('mentor_id');
    }
}
