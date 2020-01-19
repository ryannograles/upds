<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class StudentLoginController extends Controller
{
    public function login(Request $request){

        if(Auth::attempt([
            'student_id' => $request->student_id,
            'password' => $request->password

        ]))

        {

            $user = User::all();

            if (count($user) > 0) {

//                /*$user = User::where('student_id', $request->student_id)->get();*/

                $studentNameData = DB::table("student_data")->where('student_id', $request->student_id)->get();
                $studentBirthData = DB::table("student_personal_data")->where('student_id', $request->student_id)->get();
                $studentAddress = DB::table('students_address')->where('student_id', $request->student_id)->get();
                $motherData = DB::table('mother_data')->where('student_id', $request->student_id)->get();
                $motherBirthData = DB::table("mother_personal_data")->where('student_id', $request->student_id)->get();
                $motherAddress = DB::table('mother_address')->where('student_id', $request->student_id)->get();
                $fatherData = DB::table('father_data')->where('student_id', $request->student_id)->get();
                $fatherBirthData = DB::table("father_personal_data")->where('student_id', $request->student_id)->get();
                $fatherAddress = DB::table('father_address')->where('student_id', $request->student_id)->get();

                $motherContact = DB::table('contacts')->where([
                    ['student_id', $request->student_id],
                    ['relationship', '=' , 1]
                ])->first();
                $fatherContact = DB::table('contacts')->where([
                    ['student_id', $request->student_id],
                    ['relationship','=', 2]
                ])->first();

//                dd(compact('studentBirthData','studentNameData', 'studentAddress', 'fatherAddress' ,'motherBirthData' , 'fatherBirthData' ,'motherAddress' ,'motherData', 'fatherData', 'motherContact', 'fatherContact'));


               return view('userdashboard')->with(compact('studentBirthData','studentNameData', 'studentAddress', 'fatherAddress' ,'motherBirthData' , 'fatherBirthData' ,'motherAddress' ,'motherData', 'fatherData', 'motherContact', 'fatherContact'));

            }
        }

        else

        {

            return view('auth/login');

        }
    }
}
