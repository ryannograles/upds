<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotherAddress extends Model
{
    protected $table = 'mother_address';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
