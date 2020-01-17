<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

                $user = User::where('student_id', $request->student_id)->get();

                return view('/dashboard')->with('studentData', $user);

            }
        }

        else

        {

            return view('auth/login');

        }
    }
}
