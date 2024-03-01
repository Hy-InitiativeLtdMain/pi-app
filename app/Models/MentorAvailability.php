<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorAvailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'availability' // JSON column
    ];

    protected $casts = [
        'availability' => 'array',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

}
