<?php

namespace App\Http\Controllers;
use App\Admin;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('guest:admin');
//    }


    public function index(){

        $forapprovals = DB::table('for_approval')->get();

        return view('admindashboard')->with(compact('forapprovals'));
    }

    public function updateInfo(Request $request, $id){

        $tablename = $request->input('table_name');
        $columntype = $request->input('column');
//        $contactType = $request->input('contact_type');
//        $contactrelationship = $request->input('relationshipcontact');
        $approvalrequest = $request->input('requestapproval');

        DB::table('for_approval')->where('id', $id)->update(['status' => 'ACCEPTED']);
//
        DB::table($tablename)->where('student_id', $request->student_id)->update([$columntype => $approvalrequest]);
//
//
        return redirect('/admin-dashboard')->with('success', 'Request has been accepted');

//        dd($tablename, $columntype, $approvalrequest, $id);


    }

}
