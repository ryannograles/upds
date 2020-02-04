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

    public function updateStudentInfo(Request $request){

        DB::table("student_data")->where('student_id', $request->student_id)
        ->update(array(
            'first_name'=> $request->input('fname'),
            'middle_name' => $request->input('mname'),
            'last_name' => $request->input('lname')));

        DB::table('student_personal_data')->where('student_id', $request->student_id)
            ->update(array(
                'year_level'=> $request->input('y_level'),
                'strand'=> $request->input('strand'),
                'birth_month'=> $request->input('bmonth'),
                'birth_day'=> $request->input('bday'),
                'birth_year'=> $request->input('byear'),
                'xavier_email'=> $request->input('email')));

        DB::table('students_address')->where('student_id', $request->student_id)
            ->update(array(
                'house_number'=> $request->input('hnumber'),
                'street' => $request->input('street'),
                'barangay' => $request->input('brgy'),
                'subdivision_building'=> $request->input('subdiv_and_build'),
                'district' => $request->input('district'),
                'postal_code'=> $request->input('pcode'),
                'city'=> $request->input('city'),
                'province_municipality'=> $request->input('prov_or_muni'),
                'region'=> $request->input('region'),
            ));


        DB::table('contacts')->where([
            ['student_id', $request->student_id],
            ['relationship', '=' , 1]
        ])->update(['contact' => $request->input('studentmothernumber')]);

        DB::table('contacts')->where([
            ['student_id', $request->student_id],
            ['relationship', '=' , 2]
        ])->update(['contact' => $request->input('studentfathernumber')]);

    }

    public function updateMotherinfo(Request $request){
        DB::table("mother_data")->where('student_id', $request->student_id)
            ->update([
                ['first_name'=> $request->input('fname')],
                ['middle_name' => $request->input('mname')],
                ['last_name'=> $request->input('lname')]
            ]);

        DB::table('mother_personal_data')->where('student_id', $request->student_id)
            ->update([
                ['birth_month' => $request->input('bmonth')],
                ['birth_day'=> $request->input('bday')],
                ['birth_year' => $request->input('byear')],
                ['email' => $request->input('email')]
            ]);

        DB::table('mother_address')->where('student_id', $request->student_id)
            ->update([
                ['house_number' => $request->input('hnumber')],
                ['street' => $request->input('street')],
                ['barangay' => $request->input('brgy')],
                ['subdivision_building' => $request->input('subdiv_and_build')],
                ['district' => $request->input('district')],
                ['postal_code'=> $request->input('pcode')],
                ['city' => $request->input('city')],
                ['province_municipality' => $request->input('prov_and_muni')],
                ['region' => $request->input('region')],
            ]);
    }

    public function updateFatherInfo(Request $request){

        DB::table("father_data")->where('student_id', $request->student_id)
            ->update([
                ['first_name'=> $request->input('fname')],
                ['middle_name' => $request->input('mname')],
                ['last_name'=> $request->input('lname')]
            ]);

        DB::table('father_personal_data')->where('student_id', $request->student_id)
            ->update([
                ['birth_month' => $request->input('bmonth')],
                ['birth_day'=> $request->input('bday')],
                ['birth_year' => $request->input('byear')],
                ['email' => $request->input('email')]
            ]);

        DB::table('father_address')->where('student_id', $request->student_id)
            ->update([
                ['house_number' => $request->input('hnumber')],
                ['street' => $request->input('street')],
                ['barangay' => $request->input('brgy')],
                ['subdivision_building' => $request->input('subdiv_and_build')],
                ['district' => $request->input('district')],
                ['postal_code'=> $request->input('pcode')],
                ['city' => $request->input('city')],
                ['province_municipality' => $request->input('prov_and_muni')],
                ['region' => $request->input('region')],
            ]);
    }
}
