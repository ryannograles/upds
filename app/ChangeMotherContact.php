<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeMotherContact extends Model
{
    protected $table = 'change_mother_contact';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
