<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeFatherContact extends Model
{
    protected $table = 'change_father_contact';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
