<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OriginalMotherContact extends Model
{
    protected $table = 'original_mother_contact';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
