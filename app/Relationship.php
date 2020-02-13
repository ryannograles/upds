<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $table = 'relationship';

    public function users(){
        return $this->hasMany('App\User', 'student_id', 'student_id');
    }
}
