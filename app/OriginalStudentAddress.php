<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OriginalStudentAddress extends Model
{
    protected $table = 'original_student_address';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
