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

                return redirect('dashboard');

            }
        }
        else
        {
            return view('auth/login');
        }
    }

}
