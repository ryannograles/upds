<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OriginalStudentPersonalData extends Model
{
    protected $table = 'original_student_personal_data';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
