<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForApproval extends Model
{
    protected $table = 'for_approval';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
