<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Table name if different from the default
    protected $table = 'events';

    // The attributes that are mass assignable
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'link_type',
        'link',
        'link_password',
        'date',
        'time',
        'image',
        'image_id',
        'file',
        'file_id',
        'institute',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessor to format the date and time if needed
    public function getFormattedDateAttribute()
    {
        return \Carbon\Carbon::parse($this->date)->format('F j, Y'); // Example format: August 21, 2024
    }

    public function getFormattedTimeAttribute()
    {
        return \Carbon\Carbon::parse($this->time)->format('h:i A'); // Example format: 10:00 AM
    }
}
