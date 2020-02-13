<?php

namespace App\Http\Controllers;


use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;


class AdminLoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin-login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function index()
    {

        return view('auth/admin-login');
    }

    public function login(Request $request){

        //validate data form

        $this->validate($request, [
            'admin_id' => 'required|string',
            'password' => 'required|min:6'
        ]);

        //attemt to login admin

        if(Auth::guard('admin')->attempt(['admin_id' => $request->admin_id, 'password' => $request->password]))
        {

//            DB::table('admin')->where('admin_id', $request->admin_id)->update(['last_login' =>  \Carbon\Carbon::now() ]);

            return redirect('admindash');


        }

        //if sucess redirect to adminpage

        return redirect()->back()->withInput($request->only('admin_id'));

        // if unsuccessfull redirect to adminlogin

    }


    }

