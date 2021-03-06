<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotherData extends Model
{
    protected $table = 'mother_data';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
