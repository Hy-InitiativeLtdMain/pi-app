<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'status',
        'highest_edu_qualification',
        'past_mentorship_exp',
        'video_intro',

        'profile_pic',
        'country',
        'linkedin_profile',
        'portfolio',
        'resume_link',
        'project_reference_id',
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
        return $this->hasMany(MentorExperience::class);
    }

    public function skills()
    {
        return $this->hasOne(MentorSkill::class)
            ->select('skills')
            ->selectRaw('JSON_UNQUOTE(skills) as skills')
            ->whereNotNull('skills');
    }

    public function accessability(){
        return $this->hasOne(MentorAccessability::class);
    }

    /**
     * Get the project associated with the mentor.
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_reference_id');
    }

    // Define the relationship with bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Define the no_of_mentees function to count the number of mentees
    public function getNumberOfMentees($status = null)
    {
        // Start building the query
        $query = $this->bookings();

        // If a status is provided, filter the bookings by status
        if ($status) {
            $query->where('status', $status);
        }

        // Count the number of mentees
        return $query->distinct('mentee_id')->count('mentee_id');
    }
}
