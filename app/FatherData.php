<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FatherData extends Model
{
    protected $table = 'father_data';

    public function user(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
