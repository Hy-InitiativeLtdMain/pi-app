<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionCourse extends Model
{
    use HasFactory;
    protected  $table = "transaction_course";

    protected $fillable = [
        'course_id',
        'transaction_id',
    ];
}
