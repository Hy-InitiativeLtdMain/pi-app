<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CourseCategory extends Pivot
{
    use HasFactory;

    protected  $table = "course_category";
    protected $fillable = [
        

        'course_id',
        'category_id',
    ];
}
