<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeFatherEmail extends Model
{
    protected $table = 'change_father_email';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
