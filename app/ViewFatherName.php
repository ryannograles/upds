<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewFatherName extends Model
{
    protected $table = 'view_father_name';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
