@extends('layouts.adminapp')
@section('admin-content')
    <div class="overall-container container-fluid">
        <div class="request-header">
            <h1> Requests </h1>
        </div>
        @if(count($forapprovals) > 0 )
            <div class="request-table">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Student ID</td>
                        <td>Table Name</td>
                        <td>Name</td>
                        <td>Relationship</td>
                        <td>Request</td>
                        <td>Column Type</td>
                        <td>Contact Type</td>
                        <td>Contact Relationship</td>
                        <td>Status</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($forapprovals as $approval)
                            <tr>
                                <td> {{ $approval->id }}</td>
                                <td>{{ $approval->student_id }}
                                </td>
                                <td>{{ $approval->table_name}}
                                </td>
                                <td>{{ $approval->Name }}
                                </td>
                                <td>{{ $approval-> relationship }}
                                </td>
                                <td>{{ $approval-> request_for_approval }}
                                </td>
                                <td>{{ $approval-> type_of_column }}
                                </td>
                                <td>{{ $approval-> contact_type }}
                                </td>
                                <td>{{ $approval-> contact_relationship }}
                                </td>
                                <td>@if($approval -> status == "PENDING")
                                        <div class="accept-button buttons">
                                            <form action="{{ url('/updateinfos/'. $approval->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="student_id" value="{{ $approval->student_id }}">
                                                <input type="hidden" name="table_name" value="{{ $approval->table_name }}">
                                                <input type="hidden" name="Name" value="{{ $approval->Name }}">
                                                <input type="hidden" name="relationship" value="{{ $approval-> relationship }}">
                                                <input type="hidden" name="requestapproval" value="{{ $approval-> request_for_approval }}">
                                                <input type="hidden" name="column" value="{{ $approval->type_of_column}}">
                                                <input type="hidden" name="contact_type" value="{{ $approval->contact_type}}">
                                                <input type="hidden" name="relationshipcontact" value="{{ $approval->contact_relationship}}">
                                                <button type="submit" class="btn btn-primary btn-sm">ACCEPT</button>
                                            </form>
                                        </div>
                                        <div class="reject-button buttons">
                                            <form action="{{ url('/rejectstatus/'. $approval->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-danger btn-sm">REJECT</button>
                                            </form>
                                        </div>
                                        @elseif($approval->status == 'ACCEPTED')
                                        ACCEPTED
                                        @else
                                        REJECTED
                                        @endif
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="No-data">
                <h1> No Data to Be Displayed </h1>
            </div>
            @endif
    </div>
@endsection
