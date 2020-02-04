<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

    protected $table = 'student_data';

    public function studentData(){
        return $this->hasMany('App\StudentPersonalData', 'student_id', 'student_id');
    }

    public function fatherData(){
        return $this->hasMany('App\FatherData', 'student_id', 'student_id');
    }

    public function motherData(){
        return $this->hasMany('App\MotherData', 'student_id', 'student_id');
    }


}
