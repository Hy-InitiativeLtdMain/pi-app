<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'employment_type',
        'company_name',
        'job_title',
        'location',
        'location_type',
        'current_job',
        'start_date',
        'end_date'
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }
}
