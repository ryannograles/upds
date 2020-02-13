<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin';

    protected $guard = 'admin';

    protected $fillable = [
        'admin_id',
        'first_name',
        'last_name',
        'password',
        'last_login',
    ];

    public $timestamps = false;

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function forapproval(){

        return $this->hasMany("App\ForApproval");
    }

}
