<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotherData extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
