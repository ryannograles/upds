<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OriginalFatherAddress extends Model
{
    protected $table = 'original_father_address';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
