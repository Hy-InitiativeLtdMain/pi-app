<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MentorMentee extends Model
{
    protected $table = 'mentor_mentees';

    protected $fillable = [
        'mentor_id',
        'mentee_id',
    ];

    // Define the relationship: a mentor can have many mentees
    public function mentees()
    {
        return $this->hasMany(Mentee::class, 'mentee_id', 'id');
    }

    // Define the relationship: a mentee belongs to a mentor
    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'mentor_id', 'id');
    }
}
