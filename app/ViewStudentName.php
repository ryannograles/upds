<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewStudentName extends Model
{
    protected $table = 'view_student_name';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
