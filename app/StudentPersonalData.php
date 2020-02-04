<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPersonalData extends Model
{

    protected $table = 'student_personal_data';

    public function user(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
