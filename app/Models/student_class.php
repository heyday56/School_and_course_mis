<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student_class extends Model
{
    //
    protected $table = 'student_class';

    public function student()
    {
        return $this->belongsTo(student::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(course::class, 'course_id');
    }

}
