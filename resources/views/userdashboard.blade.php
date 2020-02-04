@extends('layouts.app')

@section('content')
   <div class="overall-container">
       <div class=" infos">
           <div class="col col-md-12 student-info box-layout">
               <h1>Student Info</h1>
               <div class="student">
                   <div class="row container">
                       <div class="col col-md-3 marginer">
                           Student details
{{--                           <div class="student-id">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-2">--}}
{{--                                       ID:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-9 forchange">--}}
{{--                                       2018-0003--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-fname">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-4">--}}
{{--                                       Name:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-8 forchange">--}}
{{--                                       Montgomery--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-mname">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-5">--}}
{{--                                       Middle Name:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-7 forchange">--}}
{{--                                       Adolfo--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-lname">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-5">--}}
{{--                                       Last Name:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-7 forchange">--}}
{{--                                       Toft--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
                           <table>
                               @foreach($studentNameData as $nameData )
                               <tbody>
                               <tr>
                                   <td>ID:</td>
                                   <td class="forchange"> {{$nameData->student_id}}</td>
                               </tr>
                               <tr>
                                   <td>First Name:</td>
                                   <td class="forchange"> {{$nameData->first_name}}</td>
                               </tr>
                               <tr>
                                   <td>Middle Name:</td>
                                   <td class="forchange"> {{$nameData->middle_name}}</td>
                               </tr>
                               <tr>
                                   <td>Last Name:</td>
                                   <td class="forchange"> {{$nameData->last_name}}</td>
                               </tr>
                               </tbody>
                                   @endforeach
                           </table>
                       </div>
                       <div class="col col-sm-3 marginer">
                           Birth Details
{{--                           <div class="student-bmonth">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-4">--}}
{{--                                       Month:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-4 forchange">--}}
{{--                                       January--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-bday">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-4">--}}
{{--                                       Day:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-4 forchange">--}}
{{--                                       12--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-byear">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-4">--}}
{{--                                       Year:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-4 forchange">--}}
{{--                                       1999--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
                           <table>
                               @foreach($studentBirthData as $birthData )
                                   <tbody>
                                   <tr>
                                       <td>Month:</td>
                                       <td class="forchange"> {{$birthData->birth_month}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>Day:</td>
                                       <td class="forchange"> {{$birthData->birth_day}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>Year:</td>
                                       <td class="forchange"> {{$birthData->birth_year}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   </tbody>
                               @endforeach
                           </table>
                       </div>
                       <div class="col col-md-3 marginer">
                           Student Address
{{--                           <div class="student-hn">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-5 ">--}}
{{--                                       House Number:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-sm-1 forchange">--}}
{{--                                       45--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                       </div>--}}
{{--                           <div class="student-street">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-3 ">--}}
{{--                                       Street:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-5 forchange">--}}
{{--                                       St. Peter--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-brgy">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-3">--}}
{{--                                       Brgy:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-3 forchange">--}}
{{--                                      171--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-subbuild">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-7">--}}
{{--                                       Subdivision/Building:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-5 forchange">--}}
{{--                                       Kingstown 2--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-district">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-6">--}}
{{--                                       District:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-6 forchange">--}}
{{--                                       4--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-pcode">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-6">--}}
{{--                                       Postal Code:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-6 forchange">--}}
{{--                                       1421--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-city">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-2">--}}
{{--                                       City:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-9 forchange">--}}
{{--                                       Caloocan--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-pm">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-7">--}}
{{--                                       Province/Municipality:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-5 forchange">--}}
{{--                                       Metro Manila--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-region">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-3">--}}
{{--                                       Region:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-4 forchange">--}}
{{--                                       NCR--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
                           <table>
                               @foreach($studentAddress as $address )
                                   <tbody>
                                   <tr>
                                       <td>House Number:</td>
                                       <td class="forchange"> {{$address->house_number}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>Street:</td>
                                       <td class="forchange"> {{$address->street}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>Brgy:</td>
                                       <td class="forchange"> {{$address->barangay}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>Subdivision/Building:</td>
                                       <td class="forchange"> {{$address->subdivision_building}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>District:</td>
                                       <td class="forchange"> {{$address->district}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>Postal Code:</td>
                                       <td class="forchange"> {{$address->postal_code}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>City:</td>
                                       <td class="forchange"> {{$address->city}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>Province/Municipality:</td>
                                       <td class="forchange"> {{$address->province_municipality}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   <tr>
                                       <td>Region:</td>
                                       <td class="forchange"> {{$address->region}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                   </tbody>
                               @endforeach
                           </table>
                       </div>
                       <div class="col col-md-2 marginer">
                           Student Contacts
{{--                           <div class="student-mcontact">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-6">--}}
{{--                                       Mother:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-6 forchange">--}}
{{--                                       09477797992--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="student-fcontact">--}}
{{--                               <div class="row">--}}
{{--                                   <div class="col col-md-6">--}}
{{--                                       Father:--}}
{{--                                   </div>--}}
{{--                                   <div class="col col-md-6 forchange">--}}
{{--                                       09477797992--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
                           <table>
                                   <tbody>
                                   <tr>
                                       <td>Mother:</td>
                                       <td class="forchange"> {{$motherContact->contact}}</td>
                                   </tr>
                                   <tr class="change">

                                   </tr>
                                       <tbody>
                                       <tr>
                                           <td>Father:</td>
                                           <td class="forchange"> {{$fatherContact->contact}}</td>
                                       </tr>
                                       <tr class="change">

                                       </tr>
                                   </tbody>
                           </table>
                           </div>
                       </div>
                   </div>
               </div>
           <div class="col col-md-12 mother-info box-layout">
               <h1>Mother Info</h1>
               <div class="row">
                   <div class="col col-md-6">
                       Mother details
                       <div class="student-id">

                       </div>
                   </div>
                   <div class="col col-md-6">
                       Mother Address
                   </div>
               </div>
           </div>
           <div class="col col-md-12 father-info box-layout">
               <h1>Father Info</h1>
               <div class="row">
                   <div class="col col-md-6">
                       Father details
                   </div>
                   <div class="col col-md-6">
                       Father Address
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection

