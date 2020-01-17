@extends('layouts.app')

@section('content')
    <div class="overall-container">
        <div class="title-header">
            <h1>Student Information</h1>
            <p>Information about your details as well as mother and father details</p>
        </div>
        <div class="table-container">
            <table class="table table-bordered table-responsive table-light user-table">
                <thead>
                <th>Student Details</th>
                <th>Info</th>
                <th>Edit</th>
                <th>Mother Details</th>
                <th>Info</th>
                <th>Edit</th>
                <th>Father Details</th>
                <th>Info</th>
                <th>Edit</th>
                </thead>
                <tbody>
                <tr>
                    @foreach($studentData as $user)
                    <td>ID: </td>
                    <td>{{$user->student_id}}</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>First Name: </td>
                    <td>Montymont</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>First Name: </td>
                    <td>Montymont</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td>{{$user->first_name}}</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Middle Name: </td>
                    <td>Adolfodolf</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Middle Name: </td>
                    <td>Adolfodolf</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Middle Name: </td>
                    <td>{{$user->middle_name}}</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Last Name: </td>
                    <td>TofiToft</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Last Name: </td>
                    <td>TofiToft</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td>{{$user->last_name}}</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Birthmonth:</td>
                    <td>January</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Birthmonth:</td>
                    <td>January</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Birthmonth:</td>
                    <td>January</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Birthdate:</td>
                    <td>12</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Birthdate:</td>
                    <td>12</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Birthdate:</td>
                    <td>12</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Birthyear:</td>
                    <td>1999</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Birthyear:</td>
                    <td>1999</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Birthyear: </td>
                    <td>1999</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Email:</td>
                    <td>montytoft@yahoo.com</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Email:</td>
                    <td>montytoft@yahoo.com</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>montytoft@yahoo.com</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>House Number:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>House Number:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>House Number: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Street:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Street:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Street: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Barangay:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Barangay:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Barangay: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Subdivision/Building:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Subdivision/Building:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Subdivision/Building: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>District:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>District:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>District: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Municipality:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Municipality:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Municipality: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Postal Code:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Postal Code:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Postal Code: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>City:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>City:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>City: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Province/Municipality:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Province/Municipality:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Province/Municipality: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Region:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                    <td>Region:</td>
                    <td>34234</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                <tr>
                    <td>Region: </td>
                    <td>213124</td>
                    <td><span class="btn btn-link user-button">Edit</span></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

