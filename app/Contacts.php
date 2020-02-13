<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';

    public function user(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
