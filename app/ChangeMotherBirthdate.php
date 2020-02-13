<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeMotherBirthdate extends Model
{
    protected $table = 'change_mother_birthdate';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
