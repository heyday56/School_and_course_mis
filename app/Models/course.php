<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    protected $table = 'course';

    public function teacher()
    {
        return $this->belongsTo(employee::class, 'teacher_id');
    }

}
