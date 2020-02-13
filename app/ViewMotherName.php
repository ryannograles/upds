<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewMotherName extends Model
{
    protected $table = 'view_mother_name';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
