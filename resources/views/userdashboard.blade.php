@extends('layouts.app')

@section('content')
    <div class="overall-container">
        <div class="title-header">
            <h1>Student Information</h1>
            <p>Information about your details as well as mother and father details</p>
        </div>
        <div class="student-info-container">
            <div class="card-deck">
                <div class="card user-info">
                    <div class="info-title">
                        <h3 class="text-center">Student Details</h3>
                    </div>
                    <div class="table-container">
                        <table class="table table-responsive-md table-borderless user-table">
                            <tbody>
                            @foreach($studentNameData as $studentname)
                                <tr>
                                    <td>Student ID:</td>
                                    <td>{{ $studentname->student_id }}</td>
                                </tr>
                                <tr>
                                    <td>First Name:</td>
                                    <td>{{ $studentname->first_name }}</td>
                                </tr>
                                <tr>
                                    <td>Middle Name:</td>
                                    <td>{{ $studentname->middle_name }}</td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td>{{ $studentname->last_name }}</td>
                                </tr>
                            @endforeach
                            @foreach($studentBirthData as $studentbirth)
                                <tr>
                                    <td>Year Level:</td>
                                    <td>{{ $studentbirth->year_level  }}</td>
                                </tr>
                                <tr>
                                    <td>Birthyear:</td>
                                    <td>{{ $studentbirth->birth_year }}</td>
                                </tr>
                                <tr>
                                    <td>Birthmonth:</td>
                                    <td>{{ $studentbirth->birth_month  }}</td>
                                </tr>
                                <tr>
                                    <td>Birthday:</td>
                                    <td>{{ $studentbirth->birth_day  }}</td>
                                </tr>
                            @endforeach
                            @foreach($studentAddress as $address)
                                <tr>
                                    <td>House Number:</td>
                                    <td>{{ $address->house_number }}</td>
                                </tr>
                                <tr>
                                    <td>Street:</td>
                                    <td>{{ $address->street }}</td>
                                </tr>
                                <tr>
                                    <td>Barangay:</td>
                                    <td>{{ $address->barangay }}</td>
                                </tr>
                                <tr>
                                    <td>Subdivision/Building:</td>
                                    <td>{{ $address->subdivision_building }}</td>
                                </tr>
                                <tr>
                                    <td>District:</td>
                                    <td>{{ $address->district }}</td>
                                </tr>
                                <tr>
                                    <td>Postal Code:</td>
                                    <td>{{ $address->postal_code }}</td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td>{{ $address->city }}</td>
                                </tr>
                                <tr>
                                    <td>Province/Municipality:</td>
                                    <td>{{ $address->province_municipality }}</td>
                                </tr>
                                <tr>
                                    <td>Region:</td>
                                    <td>{{ $address->region }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>Contact Details:</td>
                            </tr>
                            <tr>
                                <td>Mother:</td>
                                @if(is_null($motherContact->contact))
                                    <td>No details</td>
                                @else
                                    <td>{{$motherContact->contact}}</td>
                                @endif
                            </tr>
                            <tr>
                                <td>Father:</td>
                                @if(is_null($fatherContact->contact))
                                    <td>No details</td>
                                @else
                                    <td>{{$fatherContact->contact}}</td>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                        <div class=" edit-button">
                            <button class="btn btn-primary btn-block" type="submit">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="card user-info">
                    <div class="info-title">
                        <h3 class="text-center">Mother Details</h3>
                    </div>
                    <div class="table-container">
                        <table class="table table-responsive-md table-borderless user-table">
                            <tbody>
                            @foreach($motherData as $mothername)
                                <tr>
                                    <td>First Name:</td>
                                    <td>{{ $mothername->first_name }}</td>
                                </tr>
                                <tr>
                                    <td>Middle Name:</td>
                                    <td>{{ $mothername->middle_name }}</td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td>{{ $mothername->last_name }}</td>
                                </tr>
                            @endforeach
                            @foreach($motherBirthData as $motherbirth)
                                <tr>
                                    <td>Birthyear:</td>
                                    <td>{{ $motherbirth->birth_year }}</td>
                                </tr>
                                <tr>
                                    <td>Birthmonth:</td>
                                    <td>{{ $motherbirth->birth_month  }}</td>
                                </tr>
                                <tr>
                                    <td>Birthday:</td>
                                    <td>{{ $motherbirth->birth_day  }}</td>
                                </tr>
                            @endforeach
                            @foreach($motherAddress as $address)
                                <tr>
                                    <td>House Number:</td>
                                    <td>{{ $address->house_number }}</td>
                                </tr>
                                <tr>
                                    <td>Street:</td>
                                    <td>{{ $address->street }}</td>
                                </tr>
                                <tr>
                                    <td>Barangay:</td>
                                    <td>{{ $address->barangay }}</td>
                                </tr>
                                <tr>
                                    <td>Subdivision/Building:</td>
                                    <td>{{ $address->subdivision_building }}</td>
                                </tr>
                                <tr>
                                    <td>District:</td>
                                    <td>{{ $address->district }}</td>
                                </tr>
                                <tr>
                                    <td>Postal Code:</td>
                                    <td>{{ $address->postal_code }}</td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td>{{ $address->city }}</td>
                                </tr>
                                <tr>
                                    <td>Province/Municipality:</td>
                                    <td>{{ $address->province_municipality }}</td>
                                </tr>
                                <tr>
                                    <td>Region:</td>
                                    <td>{{ $address->region }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class=" edit-button">
                            <button class="btn btn-primary btn-block" type="submit">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="card user-info">
                    <div class="info-title">
                        <h3 class="text-center">Father Details</h3>
                    </div>
                    <div class="table-container">
                        <table class="table table-responsive-md table-borderless user-table">
                            <tbody>
                            @foreach($fatherData as $fathername)
                                <tr>
                                    <td>First Name:</td>
                                    <td>{{ $fathername->first_name }}</td>
                                </tr>
                                <tr>
                                    <td>Middle Name:</td>
                                    <td>{{ $fathername->middle_name }}</td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td>{{ $fathername->last_name }}</td>
                                </tr>
                            @endforeach
                            @foreach($fatherBirthData as $fatherbirth)
                                <tr>
                                    <td>Birthyear:</td>
                                    <td>{{ $fatherbirth->birth_year }}</td>
                                </tr>
                                <tr>
                                    <td>Birthmonth:</td>
                                    <td>{{ $fatherbirth->birth_month  }}</td>
                                </tr>
                                <tr>
                                    <td>Birthday:</td>
                                    <td>{{ $fatherbirth->birth_day  }}</td>
                                </tr>
                            @endforeach
                            @foreach($fatherAddress as $address)
                                <tr>
                                    <td>House Number:</td>
                                    <td>{{ $address->house_number }}</td>
                                </tr>
                                <tr>
                                    <td>Street:</td>
                                    <td>{{ $address->street }}</td>
                                </tr>
                                <tr>
                                    <td>Barangay:</td>
                                    <td>{{ $address->barangay }}</td>
                                </tr>
                                <tr>
                                    <td>Subdivision/Building:</td>
                                    <td>{{ $address->subdivision_building }}</td>
                                </tr>
                                <tr>
                                    <td>District:</td>
                                    <td>{{ $address->district }}</td>
                                </tr>
                                <tr>
                                    <td>Postal Code:</td>
                                    <td>{{ $address->postal_code }}</td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td>{{ $address->city }}</td>
                                </tr>
                                <tr>
                                    <td>Province/Municipality:</td>
                                    <td>{{ $address->province_municipality }}</td>
                                </tr>
                                <tr>
                                    <td>Region:</td>
                                    <td>{{ $address->region }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class=" edit-button">
                            <button class="btn btn-primary btn-block" type="submit">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection

