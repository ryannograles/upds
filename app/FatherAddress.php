<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FatherAddress extends Model
{
    protected $table = 'father_address';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
