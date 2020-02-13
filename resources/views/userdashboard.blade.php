@extends('layouts.app')

@section('content')
   <div class="overall-container">
       <button class="btn btn-primary" id="edit">Edit</button>
       <form action="{{ route('store.info') }}" method="POST">
           @csrf
           @foreach($studentNameData as $nameData)
           <input type="hidden" name="fullname" value="{{ $nameData->first_name }} {{ $nameData->middle_name }} {{ $nameData->last_name }}">
               <input type="hidden" name="student_id" value="{{ $nameData->student_id }}">
           @endforeach

           <div class="sticky-buttons container-fluid">
               <div class="row">
                       <button class="btn btn-success" id="submit">Save</button>
               </div>
           </div>
           <div class=" infos">
               <div class="col col-md-12 student-info box-layout">
                   <h1>Student Info</h1>
                   <div class="student">
                       <div class="row container">
                           <div class="col col-md-3 marginer">
                               Student details
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
                               <table>
                                       <tbody>
                                       <tr>
                                           <td>Month:</td>
                                           <td class="forchange"> {{$s_bmonth}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="sbmonth" class="sbmonth" id="sbmonth" placeholder="Enter new birthmonth" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Day:</td>
                                           <td class="forchange"> {{ $s_bday }}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="sbday" class="sbday" id="sbday" placeholder="Enter new birthday" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Year:</td>
                                           <td class="forchange"> {{$s_byear}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="sbyear" class="sbyear" id="sbyear" placeholder="Enter new birthyear" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Email:</td>
                                           <td class="forchange"> {{$s_email}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="semail" class="semail" id="semail" placeholder="Enter new email:" required>
                                           </td>
                                       </tr>
                                       </tbody>
                               </table>
                           </div>
                           <div class="col col-md-3 marginer">
                               Student Address
                               <table>
                                   <tbody>
                                       <tr>
                                           <td>House Number:</td>
                                           <td class="forchange"> {{$s_hn}}</td>
                                       </tr>
                                        <tr class="change">
                                            <td>Input:</td>
                                            <td>
                                                <input type="text" name="shn" class="shn" id="shn" placeholder="Enter new house #" required>
                                            </td>
                                        </tr>
                                       <tr>
                                           <td>Street:</td>
                                           <td class="forchange"> {{$s_street}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="s-street" class="s-street" id="s-street" placeholder="Enter new street" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Brgy:</td>
                                           <td class="forchange"> {{$s_brgy}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="sbrgy" class="sbrgy" id="sbrgy" placeholder="Enter new barangay" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Subdivision/Building:</td>
                                           <td class="forchange"> {{$s_sub}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="sbuild" class="sbuild" id="sbuild" placeholder="Enter new subd/building" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>District:</td>
                                           <td class="forchange"> {{$s_district}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="sdistrict" class="sdistrict" id="sdistrict" placeholder="Enter new district" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Postal Code:</td>
                                           <td class="forchange"> {{$s_pcode}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="spcode" class="spcode" id="spcode" placeholder="Enter new postalcode" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>City:</td>
                                           <td class="forchange"> {{$s_city}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="scity" class="scity" id="scity" placeholder="Enter new city" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Province/Municipality:</td>
                                           <td class="forchange"> {{$s_prov}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="sprov" class="sprov" id="sprov" placeholder="Enter new province/municipality" required>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Region:</td>
                                           <td class="forchange"> {{$s_region}}</td>
                                       </tr>
                                       <tr class="change">
                                           <td>Input:</td>
                                           <td>
                                               <input type="text" name="sregion" class="sregion" id="sregion" placeholder="Enter new region" required>
                                           </td>
                                       </tr>
                                       </tbody>
                               </table>
                           </div>
                           <div class="col col-md-3 marginer">
                               Student Contacts
                               <table>
                                   <tbody>
                                   <tr>
                                       <td>Mother:</td>
                                       <td class="forchange"> {{$s_mcontact}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="smnumber" class="smnumber" id="smnumber" placeholder="Enter new mother #" required>
                                       </td>
                                   </tr>
                                   <tbody>
                                   <tr>
                                       <td>Father:</td>
                                       <td class="forchange"> {{$s_fcontact}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="sfnumber" class="sfnumber" id="sfnumber" placeholder="Enter new father #" required>
                                       </td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col col-md-12 mother-info box-layout">
                   <h1>Mother Info</h1>
                   <div class="mother">
                       <div class="row container">
                           <div class="col col-md-3 marginer">
                               Mother details
                               <table>
                                   @foreach($motherData as $nameData )
                                       <tbody>
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
                               <table>
                                   <tbody>
                                   <tr>
                                       <td>Month:</td>
                                       <td class="forchange"> {{$m_bmonth}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mbmonth" class=“mbmonth" id=“mbmonth" placeholder="Enter new birthmonth" required>

                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Day:</td>
                                       <td class="forchange"> {{ $m_bday }}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mbday" class=“mbday" id=“mbday" placeholder="Enter new birthday" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Year:</td>
                                       <td class="forchange"> {{$m_byear}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mbyear" class=“mbyear" id=“mbyear" placeholder="Enter new birthyear" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Email:</td>
                                       <td class="forchange"> {{$m_email}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="memail" class=“memail" id=“memail" placeholder="Enter new email:" required>
                                       </td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div>
                           <div class="col col-md-3 marginer">
                               Mother Address
                               <table>
                                   <tbody>
                                   <tr>
                                       <td>House Number:</td>
                                       <td class="forchange"> {{$m_hn}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mhn" class=“mhn" id=“mhn" placeholder="Enter new house #" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Street:</td>
                                       <td class="forchange"> {{$m_street}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="m-street" class=“m-street" id=“m-street" placeholder="Enter new street" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Brgy:</td>
                                       <td class="forchange"> {{$m_brgy}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mbrgy" class=“mbrgy" id=“mbrgy" placeholder="Enter new barangay" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Subdivision/Building:</td>
                                       <td class="forchange"> {{$m_sub}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mbuild" class=“mbuild" id=“mbuild" placeholder="Enter new subd/building" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>District:</td>
                                       <td class="forchange"> {{$m_district}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mdistrict" class=“mdistrict" id=“mdistrict" placeholder="Enter new district" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Postal Code:</td>
                                       <td class="forchange"> {{$m_pcode}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mpcode" class=“mpcode" id=“mpcode" placeholder="Enter new postalcode" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>City:</td>
                                       <td class="forchange"> {{$m_city}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mcity" class=“mcity" id=“mcity" placeholder="Enter new city" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Province/Municipality:</td>
                                       <td class="forchange"> {{$m_prov}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mprov" class=“mprov" id=“mprov" placeholder="Enter new province/municipality" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Region:</td>
                                       <td class="forchange"> {{$m_region}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name="mregion" class="mregion" id=“mregion" placeholder="Enter new region" required>
                                       </td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>

               <div class="col col-md-12 father-info box-layout">
                   <h1>Father Info</h1>
                   <div class="father">
                       <div class="row container">
                           <div class="col col-md-3 marginer">
                               Father details
                               <table>
                                   @foreach($fatherData as $nameData )
                                       <tbody>
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
                               <table>
                                   <tbody>
                                   <tr>
                                       <td>Month:</td>
                                       <td class="forchange"> {{$f_bmonth}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fbmonth" class=“fbmonth" id=“fbmonth" placeholder="Enter new birthmonth" required>

                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Day:</td>
                                       <td class="forchange"> {{ $f_bday }}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fbday" class=“fbday" id=“fbday" placeholder="Enter new birthday" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Year:</td>
                                       <td class="forchange"> {{$f_byear}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fbyear" class=“fbyear" id=“fbyear" placeholder="Enter new birthyear" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Email:</td>
                                       <td class="forchange"> {{$f_email}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“femail" class=“femail" id=“femail" placeholder="Enter new email:" required>
                                       </td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div>
                           <div class="col col-md-3 marginer">
                               Father Address
                               <table>
                                   <tbody>
                                   <tr>
                                       <td>House Number:</td>
                                       <td class="forchange"> {{$f_hn}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fhn" class=“fhn" id=“fhn" placeholder="Enter new house #" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Street:</td>
                                       <td class="forchange"> {{$f_street}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“f-street" class=“f-street" id=“f-street" placeholder="Enter new street" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Brgy:</td>
                                       <td class="forchange"> {{$f_brgy}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fbrgy" class=“fbrgy" id=“fbrgy" placeholder="Enter new barangay" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Subdivision/Building:</td>
                                       <td class="forchange"> {{$f_sub}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fbuild" class=“fbuild" id=“fbuild" placeholder="Enter new subd/building" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>District:</td>
                                       <td class="forchange"> {{$f_district}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fdistrict" class=“fdistrict" id=“fdistrict" placeholder="Enter new district" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Postal Code:</td>
                                       <td class="forchange"> {{$f_pcode}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fpcode" class=“fpcode" id=“fpcode" placeholder="Enter new postalcode" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>City:</td>
                                       <td class="forchange"> {{$f_city}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fcity" class=“fcity" id=“fcity" placeholder="Enter new city" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Province/Municipality:</td>
                                       <td class="forchange"> {{$f_prov}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fprov" class=“fprov" id=“fprov" placeholder="Enter new province/municipality" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Region:</td>
                                       <td class="forchange"> {{$f_region}}</td>
                                   </tr>
                                   <tr class="change">
                                       <td>Input:</td>
                                       <td>
                                           <input type="text" name=“fregion" class=“fregion" id=“fregion" placeholder="Enter new region" required>
                                       </td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div>
                           </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </form>
   </div>
@endsection

