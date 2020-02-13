<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotherPersonalData extends Model
{
    protected $table = 'mother_personal_data';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
