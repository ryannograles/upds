<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ForApproval;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{

    public function index(Request $request){

        $id = auth()->user()->id;

        $student_id = DB::table('view_student_name')->where('id', $id)->value('student_id');

        $studentNameData = DB::table("view_student_name")->where('id', $id)->get();
        $studentOrigBirthMonth = DB::table("original_student_personal_data")->where('id', $id)->value('birth_month');
        $studentBirthMonth = DB::table("change_student_birthdate")->where('id', $id)->value('change_birth_month');
        $studentOrigBirthDay = DB::table("original_student_personal_data")->where('id', $id)->value('birth_day');
        $studentBirthDay = DB::table("change_student_birthdate")->where('id', $id)->value('change_birth_day');
        $studentOrigBirthYear= DB::table("original_student_personal_data")->where('id', $id)->value('birth_year');
        $studentBirthYear = DB::table("change_student_birthdate")->where('id', $id)->value('change_birth_year');
        $studentOrigEmail= DB::table("original_student_personal_data")->where('id', $id)->value('xavier_email');
        $studentEmail = DB::table("change_student_email")->where('id', $id)->value('change_in_email');
        $studentOrigHN = DB::table('original_student_address')->where('id', $id)->value('house_number');
        $studentHN = DB::table('change_students_address')->where('id', $id)->value('change_house_number');
        $studentOrigStreet= DB::table('original_student_address')->where('id', $id)->value('street');
        $studentStreet = DB::table('change_students_address')->where('id', $id)->value('change_street');
        $studentOrigSub= DB::table('original_student_address')->where('id', $id)->value('subdivision_building');
        $studentSub= DB::table('change_students_address')->where('id', $id)->value('change_subdivision_building');
        $studentOrigBrgy= DB::table('original_student_address')->where('id', $id)->value('barangay');
        $studentBrgy = DB::table('change_students_address')->where('id', $id)->value('change_barangay');
        $studentOrigDistrict = DB::table('original_student_address')->where('id', $id)->value('district');
        $studentDistrict = DB::table('change_students_address')->where('id', $id)->value('change_district');
        $studentOrigPCode= DB::table('original_student_address')->where('id', $id)->value('postal_code');
        $studentPCode = DB::table('change_students_address')->where('id', $id)->value('change_postal_code');
        $studentOrigCity= DB::table('original_student_address')->where('id', $id)->value('city');
        $studentCity = DB::table('change_students_address')->where('id', $id)->value('change_city');
        $studentOrigProv= DB::table('original_student_address')->where('id', $id)->value('province_municipality');
        $studentProv = DB::table('change_students_address')->where('id', $id)->value('change_province_municipality');
        $studentOrigRegion= DB::table('original_student_address')->where('id', $id)->value('region');
        $studentRegion = DB::table('change_students_address')->where('id', $id)->value('change_region');
        $motherOrigBirthMonth = DB::table("original_mother_personal_data")->where('id', $id)->value('birth_month');
        $motherBirthMonth = DB::table("change_mother_birthdate")->where('id', $id)->value('change_birth_month');
        $motherOrigBirthDay = DB::table("original_mother_personal_data")->where('id', $id)->value('birth_day');
        $motherBirthDay = DB::table("change_mother_birthdate")->where('id', $id)->value('change_birth_day');
        $motherOrigBirthYear= DB::table("original_mother_personal_data")->where('id', $id)->value('birth_year');
        $motherBirthYear = DB::table("change_mother_birthdate")->where('id', $id)->value('change_birth_year');
        $motherOrigEmail= DB::table("original_mother_personal_data")->where('id', $id)->value('email');
        $motherEmail = DB::table("change_mother_email")->where('id', $id)->value('change_in_email');
        $motherOrigHN = DB::table('original_mother_address')->where('id', $id)->value('house_number');
        $motherHN = DB::table('change_mother_address')->where('id', $id)->value('change_house_number');
        $motherOrigStreet= DB::table('original_mother_address')->where('id', $id)->value('street');
        $motherStreet = DB::table('change_mother_address')->where('id', $id)->value('change_street');
        $motherOrigSub= DB::table('original_mother_address')->where('id', $id)->value('barangay');
        $motherSub= DB::table('change_mother_address')->where('id', $id)->value('change_barangay');
        $motherOrigBrgy= DB::table('original_mother_address')->where('id', $id)->value('subdivision_building');
        $motherBrgy = DB::table('change_mother_address')->where('id', $id)->value('change_subdivision_building');
        $motherOrigDistrict = DB::table('original_mother_address')->where('id', $id)->value('district');
        $motherDistrict = DB::table('change_mother_address')->where('id', $id)->value('change_district');
        $motherOrigPCode= DB::table('original_mother_address')->where('id', $id)->value('postal_code');
        $motherPCode = DB::table('change_mother_address')->where('id', $id)->value('change_postal_code');
        $motherOrigCity= DB::table('original_mother_address')->where('id', $id)->value('city');
        $motherCity = DB::table('change_mother_address')->where('id', $id)->value('change_city');
        $motherOrigProv= DB::table('original_mother_address')->where('id', $id)->value('province_municipality');
        $motherProv = DB::table('change_mother_address')->where('id', $id)->value('change_province_municipality');
        $motherOrigRegion= DB::table('original_mother_address')->where('id', $id)->value('region');
        $motherRegion = DB::table('change_mother_address')->where('id', $id)->value('change_region');
        $fatherOrigBirthMonth = DB::table("original_father_personal_data")->where('id', $id)->value('birth_month');
        $fatherBirthMonth = DB::table("change_father_birthdate")->where('id', $id)->value('change_birth_month');
        $fatherOrigBirthDay = DB::table("original_father_personal_data")->where('id', $id)->value('birth_day');
        $fatherBirthDay = DB::table("change_father_birthdate")->where('id', $id)->value('change_birth_day');
        $fatherOrigBirthYear= DB::table("original_father_personal_data")->where('id', $id)->value('birth_year');
        $fatherBirthYear = DB::table("change_father_birthdate")->where('id', $id)->value('change_birth_year');
        $fatherOrigEmail= DB::table("original_father_personal_data")->where('id', $id)->value('email');
        $fatherEmail = DB::table("change_father_email")->where('id', $id)->value('change_in_email');
        $fatherOrigHN = DB::table('original_father_address')->where('id', $id)->value('house_number');
        $fatherHN = DB::table('change_father_address')->where('id', $id)->value('change_house_number');
        $fatherOrigStreet= DB::table('original_father_address')->where('id', $id)->value('street');
        $fatherStreet = DB::table('change_father_address')->where('id', $id)->value('change_street');
        $fatherOrigSub= DB::table('original_father_address')->where('id', $id)->value('barangay');
        $fatherSub= DB::table('change_father_address')->where('id', $id)->value('change_barangay');
        $fatherOrigBrgy= DB::table('original_father_address')->where('id', $id)->value('subdivision_building');
        $fatherBrgy = DB::table('change_father_address')->where('id', $id)->value('change_subdivision_building');
        $fatherOrigDistrict = DB::table('original_father_address')->where('id', $id)->value('district');
        $fatherDistrict = DB::table('change_father_address')->where('id', $id)->value('change_district');
        $fatherOrigPCode= DB::table('original_father_address')->where('id', $id)->value('postal_code');
        $fatherPCode = DB::table('change_father_address')->where('id', $id)->value('change_postal_code');
        $fatherOrigCity= DB::table('original_father_address')->where('id', $id)->value('city');
        $fatherCity = DB::table('change_father_address')->where('id', $id)->value('change_city');
        $fatherOrigProv= DB::table('original_father_address')->where('id', $id)->value('province_municipality');
        $fatherProv = DB::table('change_father_address')->where('id', $id)->value('change_province_municipality');
        $fatherOrigRegion= DB::table('original_father_address')->where('id', $id)->value('region');
        $fatherRegion = DB::table('change_father_address')->where('id', $id)->value('change_region');

        $status = DB::table('for_approval')->where([
            ['student_id', $student_id ],
            ['status', '=' , "PENDING"]
        ])->get();



        $motherData = DB::table('view_mother_name')->where('id', $id)->get();
        $fatherData = DB::table('view_father_name')->where('id', $id)->get();

        $motherContactOrig = DB::table('contacts')->where([
            ['id', $id],
            ['relationship', '=' , 1]
        ])->value('contact');
        $motherContact = DB::table('change_mother_contact')->where([
            ['id', $id],
            ['contact_type', '=' , 1]
        ])->value('change_contact');
        $fatherContactOrig = DB::table('contacts')->where([
            ['id', $id],
            ['relationship', '=' , 2]
        ])->value('contact');
        $fatherContact = DB::table('change_father_contact')->where([
            ['id', $id],
            ['contact_type', '=' , 1]
        ])->value('change_contact');

        if ($studentBirthMonth != $studentOrigBirthMonth && $studentBirthMonth != null){

            $s_bmonth = $studentBirthMonth;
        }
        else{
            $s_bmonth = $studentOrigBirthMonth;
        }

        if ($studentBirthDay != $studentOrigBirthDay && $studentBirthDay != null){

            $s_bday = $studentBirthDay;
        }
        else{
            $s_bday= $studentOrigBirthDay;
        }

        if ($studentBirthYear != $studentOrigBirthYear && $studentBirthYear != null){

            $s_byear = $studentBirthYear;
        }
        else{
            $s_byear = $studentOrigBirthYear;
        }

        if ($studentOrigEmail != $studentEmail && $studentEmail != null){

            $s_email = $studentEmail;
        }
        else{
            $s_email = $studentOrigEmail;
        }

        if ($studentOrigHN != $studentHN && $studentHN != null){

            $s_hn = $studentHN;
        }
        else{
            $s_hn = $studentOrigHN;
        }

        if ($studentOrigStreet != $studentStreet && $studentStreet != null){

            $s_street = $studentStreet;
        }
        else{
            $s_street = $studentOrigStreet;
        }

        if ($studentOrigBrgy != $studentBrgy && $studentBrgy != null){

            $s_brgy = $studentBrgy;
        }
        else{
            $s_brgy = $studentOrigBrgy;
        }
        if ($studentOrigSub != $studentSub && $studentSub != null){

            $s_sub = $studentSub;
        }
        else{
            $s_sub = $studentOrigSub;
        }
        if ($studentOrigDistrict != $studentDistrict && $studentDistrict != null){

            $s_district = $studentDistrict;
        }
        else{
            $s_district = $studentOrigDistrict;
        }

        if ($studentOrigPCode != $studentPCode && $studentPCode != null){

            $s_pcode = $studentPCode;
        }
        else{
            $s_pcode = $studentOrigPCode;
        }

        if ($studentOrigCity != $studentCity && $studentCity != null){

            $s_city = $studentCity;
        }
        else{
            $s_city = $studentOrigCity;
        }

        if ($studentOrigProv != $studentProv && $studentProv != null){

            $s_prov = $studentProv;
        }
        else{
            $s_prov = $studentOrigProv;
        }

        if ($studentOrigRegion != $studentRegion && $studentRegion != null){

            $s_region= $studentRegion;
        }
        else{
            $s_region = $studentOrigRegion;
        }
        if ($motherContactOrig != $motherContact && $motherContact != null){

            $s_mcontact= $motherContact;
        }
        else{
            $s_mcontact = $motherContactOrig;
        }

        if ($fatherContact != $fatherContactOrig && $fatherContact != null){

            $s_fcontact= $fatherContact;
        }
        else{
            $s_fcontact = $fatherContactOrig;
        }

        if ($motherBirthMonth != $motherOrigBirthMonth && $motherBirthMonth != null){

            $m_bmonth = $motherBirthMonth;
        }
        else{
            $m_bmonth = $motherOrigBirthMonth;
        }

        if ($motherBirthDay != $motherOrigBirthDay && $motherBirthDay != null){

            $m_bday = $motherBirthDay;
        }
        else{
            $m_bday= $motherOrigBirthDay;
        }

        if ($motherBirthYear != $motherOrigBirthYear && $motherBirthYear != null){

            $m_byear = $motherBirthYear;
        }
        else{
            $m_byear = $motherOrigBirthYear;
        }

        if ($motherOrigEmail != $motherEmail && $motherEmail != null){

            $m_email = $motherEmail;
        }
        else{
            $m_email = $motherOrigEmail;
        }

        if ($motherOrigHN != $motherHN && $motherHN != null){

            $m_hn = $motherHN;
        }
        else{
            $m_hn = $motherOrigHN;
        }

        if ($motherOrigStreet != $motherStreet && $motherStreet != null){

            $m_street = $motherStreet;
        }
        else{
            $m_street = $motherOrigStreet;
        }

        if ($motherOrigBrgy != $motherBrgy && $motherBrgy != null){

            $m_brgy = $motherBrgy;
        }
        else{
            $m_brgy = $motherOrigBrgy;
        }
        if ($motherOrigSub != $motherSub && $motherSub != null){

            $m_sub = $motherSub;
        }
        else{
            $m_sub = $motherOrigSub;
        }
        if ($motherOrigDistrict != $motherDistrict && $motherDistrict != null){

            $m_district = $motherDistrict;
        }
        else{
            $m_district = $motherOrigDistrict;
        }

        if ($motherOrigPCode != $motherPCode && $motherPCode != null){

            $m_pcode = $motherPCode;
        }
        else{
            $m_pcode = $motherOrigPCode;
        }

        if ($motherOrigCity != $motherCity && $motherCity != null){

            $m_city = $motherCity;
        }
        else{
            $m_city = $motherOrigCity;
        }

        if ($motherOrigProv != $motherProv && $motherProv != null){

            $m_prov = $motherProv;
        }
        else{
            $m_prov = $motherOrigProv;
        }

        if ($motherOrigRegion != $motherRegion && $motherRegion != null){

            $m_region= $motherRegion;
        }
        else{
            $m_region = $motherOrigRegion;
        }

        if ($fatherBirthMonth != $fatherOrigBirthMonth && $fatherBirthMonth != null){

            $f_bmonth = $fatherBirthMonth;
        }
        else{
            $f_bmonth = $fatherOrigBirthMonth;
        }

        if ($fatherBirthDay != $fatherOrigBirthDay && $fatherBirthDay != null){

            $f_bday = $fatherBirthDay;
        }
        else{
            $f_bday= $fatherOrigBirthDay;
        }

        if ($fatherBirthYear != $fatherOrigBirthYear && $fatherBirthYear != null){

            $f_byear = $fatherBirthYear;
        }
        else{
            $f_byear = $fatherOrigBirthYear;
        }

        if ($fatherOrigEmail != $fatherEmail && $fatherEmail != null){

            $f_email = $fatherEmail;
        }
        else{
            $f_email = $fatherOrigEmail;
        }

        if ($fatherOrigHN != $fatherHN && $fatherHN != null){

            $f_hn = $fatherHN;
        }
        else{
            $f_hn = $fatherOrigHN;
        }

        if ($fatherOrigStreet != $fatherStreet && $fatherStreet != null){

            $f_street = $fatherStreet;
        }
        else{
            $f_street = $fatherOrigStreet;
        }

        if ($fatherOrigBrgy != $fatherBrgy && $fatherBrgy != null){

            $f_brgy = $fatherBrgy;
        }
        else{
            $f_brgy = $fatherOrigBrgy;
        }
        if ($fatherOrigSub != $fatherSub && $fatherSub != null){

            $f_sub = $fatherSub;
        }
        else{
            $f_sub = $fatherOrigSub;
        }
        if ($fatherOrigDistrict != $fatherDistrict && $fatherDistrict != null){

            $f_district = $fatherDistrict;
        }
        else{
            $f_district = $fatherOrigDistrict;
        }

        if ($fatherOrigPCode != $fatherPCode && $fatherPCode != null){

            $f_pcode = $fatherPCode;
        }
        else{
            $f_pcode = $fatherOrigPCode;
        }

        if ($fatherOrigCity != $fatherCity && $fatherCity != null){

            $f_city = $fatherCity;
        }
        else{
            $f_city = $fatherOrigCity;
        }

        if ($fatherOrigProv != $fatherProv && $fatherProv != null){

            $f_prov = $fatherProv;
        }
        else{
            $f_prov = $fatherOrigProv;
        }

        if ($fatherOrigRegion != $fatherRegion && $fatherRegion != null){

            $f_region= $fatherRegion;
        }
        else{
            $f_region = $fatherOrigRegion;
        }



         return view('userdashboard')->with(compact('studentNameData','motherData','fatherData', 's_region','s_email','s_prov', 's_bmonth', 's_bday','s_byear','s_hn','s_street','s_brgy', 's_sub', 's_district', 's_pcode','s_city' , 'm_region','m_email','m_prov', 'm_bmonth', 'm_bday','m_byear','m_hn','m_street','m_brgy', 'm_sub', 'm_district', 'm_pcode','m_city', 'f_region','f_email','f_prov', 'f_bmonth', 'f_bday','f_byear','f_hn','f_street','f_brgy', 'f_sub', 'f_district', 'f_pcode','f_city','s_mcontact','s_fcontact','status'));
    }
}
