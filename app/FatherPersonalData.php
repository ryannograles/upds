<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FatherPersonalData extends Model
{
    protected $table = 'father_personal_data';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
