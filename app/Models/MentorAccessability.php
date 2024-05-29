<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorAccessability extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'accessabilities',
        'slot'
    ];

    // accessabilites is json field
    protected $casts = [
        'accessabilities' => 'json'
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }
}
