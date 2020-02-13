<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OriginalMotherAddress extends Model
{
    protected $table = 'original_mother_address';

    public function users(){
        return $this->belongsTo('App\User', 'student_id', 'student_id');
    }
}
