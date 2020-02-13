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
        'student_id', 'first_name', 'middle_name', 'last_name', 'password',
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

    public function studentdata(){
        return $this->hasMany('App\StudentPersonalData', 'student_id', 'student_id');
    }

    public function fatherdata(){
        return $this->hasMany('App\FatherData', 'student_id', 'student_id');
    }

    public function motherdata(){
        return $this->hasMany('App\MotherData', 'student_id', 'student_id');
    }

    public function viewstudentname(){
        return $this->hasMany('App\ViewStudentName', 'student_id', 'student_id');
    }

    public function viewstudentstrand(){
        return $this->hasMany('App\ViewStudentStrand', 'student_id', 'student_id');
    }

    public function studentpersonaldata(){
        return $this->hasMany('App\StudentPersonalData', 'student_id', 'student_id');
    }

    public function viewmothername(){
        return $this->hasMany('App\ViewStudentStrand', 'student_id', 'student_id');
    }

    public function motheraddress(){
        return $this->hasMany('App\MotherAddress', 'student_id', 'student_id');
    }

    public function fatheraddress(){
        return $this->hasMany('App\FatherAddress', 'student_id', 'student_id');
    }

    public function viewfathername(){
        return $this->hasMany('App\ViewStudentStrand', 'student_id', 'student_id');
    }

    public function originalmotheraddress(){
        return $this->hasMany('App\OriginalMotherAddress', 'student_id', 'student_id');
    }

    public function originalfatheraddress(){
        return $this->hasMany('App\OriginalFatherAddress', 'student_id', 'student_id');
    }

    public function motherpersonaldata(){
        return $this->hasMany('App\MotherPersonalData', 'student_id', 'student_id');
    }

    public function fatherpersonaldata(){
        return $this->hasMany('App\FatherPersonalData', 'student_id', 'student_id');
    }

    public function forapproval(){
        return $this->hasMany('App\ForApproval', 'student_id', 'student_id');
    }

    public function originalfathercontact(){
        return $this->hasMany('App\OriginalFatherContact', 'student_id', 'student_id');
    }

    public function originalmothercontact(){
        return $this->hasMany('App\OriginalMotherContact', 'student_id', 'student_id');
    }

    public function changestudentaddress(){
        return $this->hasMany('App\ChangeStudentAddress', 'student_id', 'student_id');
    }

    public function changestudentemail(){
        return $this->hasMany('App\ChangeStudentEmail', 'student_id', 'student_id');
    }

    public function changestudentbirthdate(){
        return $this->hasMany('App\ChangeStudentBirthdate', 'student_id', 'student_id');
    }

    public function changemotheraddress(){
        return $this->hasMany('App\ChangeMotherAddress', 'student_id', 'student_id');
    }

    public function changemotheremail(){
        return $this->hasMany('App\ChangeMotherEmail', 'student_id', 'student_id');
    }

    public function changemothercontact(){
        return $this->hasMany('App\ChangeMotherContact', 'student_id', 'student_id');
    }

    public function changemotherbirthdate(){
        return $this->hasMany('App\ChangeMotherBirthdate', 'student_id', 'student_id');
    }

    public function changefatheraddress(){
        return $this->hasMany('App\ChangeFatherAddress', 'student_id', 'student_id');
    }

    public function changefatheremail(){
        return $this->hasMany('App\ChangeFatherEmail', 'student_id', 'student_id');
    }

    public function changefathercontact(){
        return $this->hasMany('App\ChangeFatherContact', 'student_id', 'student_id');
    }

    public function changefatherbirthdate(){
        return $this->hasMany('App\ChangeFatherBirthdate', 'student_id', 'student_id');
    }

    public function relationship(){
        return $this->hasMany('App\Relationship', 'student_id', 'student_id');
    }

    public function contacttype(){
        return $this->hasMany('App\ContactType', 'student_id', 'student_id');
    }
}
