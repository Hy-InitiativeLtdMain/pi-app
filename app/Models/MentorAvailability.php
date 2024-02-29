<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorAvailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'date',
        'start_time',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
    
}
