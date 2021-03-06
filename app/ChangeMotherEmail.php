<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeMotherEmail extends Model
{
    protected $table = 'change_mother_email';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
