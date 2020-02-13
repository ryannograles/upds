<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewStudentStrand extends Model
{
    protected $table = 'view_student_grade_strand';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
