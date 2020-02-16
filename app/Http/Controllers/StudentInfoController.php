<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request)
    {


        $d=[];

        $user_id = $request->input('student_id');
        $fullname = $request->input('fullname');

        $s_change_bmonth = $request->input("sbmonth");
        $s_change_bdate = $request->input("sbday" );
        $s_change_byear = $request->input("sbyear");
        $s_change_email = $request->input("semail" );

        $s_change_house_number = $request->input("shn" );
        $s_change_street = $request->input("s-street" );
        $s_change_brgy = $request->input("sbrgy" );
        $s_change_subdivision_building = $request->input("sbuild" );
        $s_change_district = $request->input("sdistrict" );
        $s_change_pcode = $request->input("spcode" );
        $s_change_city = $request->input("scity" );
        $s_change_province_municipality = $request->input("sprov" );
        $s_change_region = $request->input("sregion" );
        $s_change_mother_contact = $request->input("smnumber" );
        $s_change_father_contact = $request->input("sfnumber" );

        $m_change_bmonth = $request->input("mbmonth" );
        $m_change_bdate = $request->input("mbday" );
        $m_change_byear = $request->input("mbyear" );
        $m_change_email = $request->input("memail" );

        $m_change_house_number = $request->input("mhn" );
        $m_change_street = $request->input("m-street" );
        $m_change_brgy = $request->input("mbrgy");
        $m_change_subdivision_building = $request->input("mbuild" );
        $m_change_district = $request->input("mdistrict" );
        $m_change_pcode = $request->input("mpcode");
        $m_change_city = $request->input("mcity" );
        $m_change_province_municipality = $request->input("mprov" );
        $m_change_region = $request->input("mregion" );

        $f_change_bmonth = $request->input("fbmonth");
        $f_change_bdate = $request->input("fbday" );
        $f_change_byear = $request->input("fbyear" );
        $f_change_email = $request->input("femail" );

        $f_change_house_number = $request->input("fhn" );
        $f_change_street = $request->input("f-street" );
        $f_change_brgy = $request->input("fbrgy" );
        $f_change_subdivision_building = $request->input("fbuild" );
        $f_change_district = $request->input("fdistrict" );
        $f_change_pcode = $request->input("fpcode" );
        $f_change_city = $request->input("fcity" );
        $f_change_province_municipality = $request->input("fprov" );
        $f_change_region = $request->input("fregion");


        if (!(empty($s_change_bmonth))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'student_personal_data',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_bmonth,
                'type_of_column' => 'change_birth_month',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($s_change_bdate))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'student_personal_data',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_bdate,
                'type_of_column' => 'change_birth_day',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }


        if (!(empty($s_change_byear))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'student_personal_data',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_byear,
                'type_of_column' => 'change_birth_year',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);

        }


        if (!(empty($s_change_email))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'student_personal_data',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_email,
                'type_of_column' => 'change_in_email',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($s_change_house_number))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'students_address',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_house_number,
                'type_of_column' => 'change_house_number',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }



        if (!(empty($s_change_street))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'students_address',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_street,
                'type_of_column' => 'change_street',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($s_change_brgy))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'students_address',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_brgy,
                'type_of_column' => 'change_barangay',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($s_change_subdivision_building))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'students_address',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_subdivision_building,
                'type_of_column' => 'change_subdivision_building',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($s_change_district))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'students_address',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_district,
                'type_of_column' => 'change_district',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($s_change_pcode))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'students_address',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_pcode,
                'type_of_column' => 'change_postal_code',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'
            ]);


        }

        if (!(empty($s_change_city))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'students_address',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_city,
                'type_of_column' => 'change_city',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($s_change_province_municipality))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'students_address',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_province_municipality,
                'type_of_column' => 'change_province_municipality',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($s_change_region))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'students_address',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_region,
                'type_of_column' => 'change_region',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);

        }

        if(!(empty($s_change_mother_contact))){
            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'contacts',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_mother_contact,
                'type_of_column' => 'change_contact',
                'contact_type' => '1',
                'contact_relationship' => '1',
                'status' => 'PENDING'

            ]);


        }

        if(!(empty($s_change_father_contact))){
            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'contacts',
                'Name' => $fullname,
                'relationship' => 'Student',
                'request_for_approval' => $s_change_father_contact,
                'type_of_column' => 'change_contact',
                'contact_type' => '1',
                'contact_relationship' => '2',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($m_change_bmonth))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_personal_data',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_bmonth,
                'type_of_column' => 'change_birth_month',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($m_change_bdate))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_personal_data',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_bdate,
                'type_of_column' => 'change_birth_day',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }


        if (!(empty($m_change_byear))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_personal_data',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_byear,
                'type_of_column' => 'change_birth_year',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }


        if(!(empty($m_change_email))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_personal_data',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_email,
                'type_of_column' => 'change_in_email',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($m_change_house_number))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_address',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_house_number,
                'type_of_column' => 'change_house_number',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }



        if (!(empty($m_change_street))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_address',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_street,
                'type_of_column' => 'change_street',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($m_change_brgy))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_address',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_brgy,
                'type_of_column' => 'change_barangay',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($m_change_subdivision_building))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_address',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_subdivision_building,
                'type_of_column' => 'change_subdivision_building',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($m_change_district))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_address',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_district,
                'type_of_column' => 'change_district',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($m_change_pcode))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_address',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_pcode,
                'type_of_column' => 'change_postal_code',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'
            ]);


        }

        if (!(empty($m_change_city))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_address',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_city,
                'type_of_column' => 'change_city',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($m_change_province_municipality))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_address',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_province_municipality,
                'type_of_column' => 'change_province_municipality',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($m_change_region))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'mother_address',
                'Name' => $fullname,
                'relationship' => 'Mother',
                'request_for_approval' => $m_change_region,
                'type_of_column' => 'change_region',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($f_change_bmonth))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_personal_data',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_bmonth,
                'type_of_column' => 'change_birth_month',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($f_change_bdate))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_personal_data',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_bdate,
                'type_of_column' => 'change_birth_day',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }


        if (!(empty($f_change_byear))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_personal_data',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_byear,
                'type_of_column' => 'change_birth_year',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }


        if(!(empty($f_change_email))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_personal_data',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_email,
                'type_of_column' => 'change_in_email',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($f_change_house_number))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_address',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_house_number,
                'type_of_column' => 'change_house_number',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }



        if (!(empty($f_change_street))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_address',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_street,
                'type_of_column' => 'change_street',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($f_change_brgy))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_address',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_brgy,
                'type_of_column' => 'change_barangay',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($f_change_subdivision_building))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_address',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_subdivision_building,
                'type_of_column' => 'change_subdivision_building',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);

        }

        if (!(empty($f_change_district))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_address',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_district,
                'type_of_column' => 'change_district',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($f_change_pcode))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_address',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_pcode,
                'type_of_column' => 'change_postal_code',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'
            ]);
        }

        if (!(empty($f_change_city))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_address',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_city,
                'type_of_column' => 'change_city',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($f_change_province_municipality))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_address',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_province_municipality,
                'type_of_column' => 'change_province_municipality',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }

        if (!(empty($f_change_region))){

            DB::table('for_approval')->insert([

                'student_id' => $user_id,
                'table_name' => 'father_address',
                'Name' => $fullname,
                'relationship' => 'Father',
                'request_for_approval' => $f_change_region,
                'type_of_column' => 'change_region',
                'contact_type' => 'NONE',
                'contact_relationship' => 'NONE',
                'status' => 'PENDING'

            ]);


        }



        return redirect('dashboard')->with('success', 'Response has been submitted');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
