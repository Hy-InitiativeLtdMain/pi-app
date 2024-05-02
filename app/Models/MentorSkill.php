<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'skills'
    ];
    // skills are json
    protected $casts = [
        'skills' => 'json'
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }
}
