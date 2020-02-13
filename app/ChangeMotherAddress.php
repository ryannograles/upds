<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeMotherAddress extends Model
{
    protected $table = 'change_mother_address';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
