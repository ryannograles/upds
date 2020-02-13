<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    protected $table = 'students_address';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
