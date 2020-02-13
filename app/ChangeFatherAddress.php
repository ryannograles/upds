<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeFatherAddress extends Model
{
    protected $table = 'change_father_address';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
