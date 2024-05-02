<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'company',
        'job_title',
        'bio',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function availability()
    {
        return $this->hasMany(MentorAvailability::class);
    }

    public function experience(){
        return $this->hasOne(MentorExperience::class);
    }

    public function skills(){
        return $this->hasOne(MentorSkill::class);
    }

    public function accessability(){
        return $this->hasOne(MentorAccessability::class);
    }
}
