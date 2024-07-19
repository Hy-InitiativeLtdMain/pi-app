<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleLesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'lesson_title',
        'lesson_content',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
