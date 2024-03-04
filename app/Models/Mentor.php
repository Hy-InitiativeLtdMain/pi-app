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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
