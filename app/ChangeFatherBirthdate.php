<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeFatherBirthdate extends Model
{
    protected $table = 'change_father_birthdate';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
