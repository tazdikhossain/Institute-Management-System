<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teacher';
    public $timestamps = false;
    protected $primarykey = 'phone';

    public function courses()
    {
        return $this->hasMany(Course::class, 'teacherId');
    }

    public function assignedCourses()
    {
        return Course::where('teacher', $this->id)->get();
    }
}
