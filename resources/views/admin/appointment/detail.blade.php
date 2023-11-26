@extends('admin.layout')
@section('title')
{{__('messages.Appointment Detail')}}
@stop @section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>{{__('messages.Appointment')}}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">{{__('messages.Appointment')}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Appointment #{{ $appointment->id }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <h3>Appointment Details</h3>
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>{{ $appointment->name }}</th>
                            </tr>
                            <tr>
                                <th>Phone No</th>
                                <th>{{ $appointment->phone_no }}</th>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <th>{{ $appointment->date }}</th>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <th>{{ $appointment->date }}</th>
                            </tr>
                            <tr>
                                <th>Messages</th>
                                <th>{{ $appointment->messages }}</th>
                            </tr>
                            <tr>
                                <th>Payment Method</th>
                                <th>{{ $appointment->payment_method }}</th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>
                                    @if($appointment->status==3)
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="{{ $appointment->id }}" data-status="3">{{__('messages.Approve')}}</a>
                                    @elseif($appointment->status==6)
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="{{ $appointment->id }}" data-status="6">{{__('messages.Reject')}}</a>
                                    @elseif($appointment->status==0)
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="{{ $appointment->id }}" data-status="0">{{__('messages.Absent')}}</a>
                                    @elseif($appointment->status==1)
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="{{ $appointment->id }}" data-status="1">{{__('messages.Receive')}}</a>
                                    @elseif($appointment->status==2)
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="{{ $appointment->id }}" data-status="2">{{__('messages.Reschedule')}}</a>
                                    @elseif($appointment->status==4)
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="{{ $appointment->id }}" data-status="4">{{__('messages.Complete')}}</a>
                                    @elseif($appointment->status==5)
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="{{ $appointment->id }}" data-status="5">{{__('messages.Refer Doctor')}}</a>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            {{-- @if($appointment->has('patient'))
            <div class="col-sm-6">
                <h3>Patient Details</h3>
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }} </th>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <th>{{ $appointment->patient->age }}</th>
                            </tr>
                            <tr>
                                <th>DOB</th>
                                <th>{{ $appointment->patient->dob }}</th>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <th>{{ $appointment->patient->gender }}</th>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <th>{{ $appointment->patient->location }}</th>
                            </tr>
                            <tr>
                                <th>Relation</th>
                                <th>{{ $appointment->patient->relation }}</th>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <th>{{ $appointment->patient->phone }}</th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>{{ $appointment->patient->email }}</th>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <th>{{ $appointment->patient->address }}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            @endif --}}
            @if($appointment->has('doctors'))
            <div class="col-sm-6">
                <h3>Doctor's Details</h3>
                <div class="card">
                    <table class="table">
                        <thead>
                            @if($appointment->doctors->image)
                            <tr>
                                <th>Image</th>
                                <th>
                                    <img src="{{ asset('public/upload/doctor/'.$appointment->doctors->image) }}" alt=""> 
                                </th>
                            </tr>
                            
                            @endif
                            <tr>
                                <th>Doctor Name</th>
                                <th>{{ $appointment->doctors->name }} </th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>{{ $appointment->doctors->email }}</th>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <th>{{ $appointment->doctors->phone_no }}</th>
                            </tr>
                            <tr>
                                <th>NMC</th>
                                <th>{{ $appointment->doctors->nmc }}</th>
                            </tr>
                            <tr>
                                <th>Work Type</th>
                                <th>{{ $appointment->doctors->work_type }}</th>
                            </tr>
                            <tr>
                                <th>Qualification</th>
                                <th>{{ $appointment->doctors->qualification }}</th>
                            </tr>
                            <tr>
                                <th>Appointment Fee</th>
                                <th>{{ $appointment->doctors->appointment_fee }}</th>
                            </tr>
                            <tr>
                                <th>Experience</th>
                                <th>{{ $appointment->doctors->experience }}</th>
                            </tr>
                            <tr>
                                <th>About Us</th>
                                <th>{{ $appointment->doctors->about_us }}</th>
                            </tr>
                            <tr>
                                <th>Service</th>
                                <th>{{ $appointment->doctors->service }}</th>
                            </tr>
                          
                            <tr>
                                <th>Hospital</th>
                                @if($appointment->doctors->hospital_id)
                                <th>
                                    {{$appointment->doctors->hospital->name}}
                                </th>
                                @else
                                <th>no-hospital</th>
                                @endif
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            @endif
            @if($appointment->has('hospital') && $appointment->hospital_id)
            <div class="col-sm-6">
                <h3>Hospital's Details</h3>
                <div class="card">
                    <table class="table">
                        <thead>
                            @if(isset($appointment->hospital->logo))
                            <tr>
                                <th>Logo</th>
                                <th>
                                    <img src="{{ asset('public//'.$appointment->hospital->logo) }}" alt=""> 
                                </th>
                            </tr>
                            
                            @endif
                            <tr>
                                <th>Hospital Name</th>
                                <th>{{ $appointment->hospital->name }} </th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>{{ $appointment->hospital->email }}</th>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <th>{{ $appointment->hospital->phone_ }}</th>
                            </tr>
                            <tr>
                                <th>Appointment Fee</th>
                                <th>{{ $appointment->hospital->appointment_fee }}</th>
                            </tr>
                            <tr>
                                <th>Partner Type</th>
                                <th>{{ $appointment->hospital->partner_type }}</th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>{{ $appointment->hospital->status }}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<div id="statusModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Change Status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ route('appointment.update') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="appointmentStatus">
                        <option value="0">Absent</option>
                        <option value="1">Receive</option>
                        <option value="2">Re Schedule</option>
                        <option value="3">Approve</option>
                        <option value="4">Completed</option>
                        <option value="5">Refer Code</option>
                    </select>
                    <input type="text" name="app_id" id="appID" style="display: none;" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>

@stop
@section('footer')
<script>
    $(function(){

        $(document).on('click','.appointment_status',function(){
            let status = $(this).data('status');
            let app_id = $(this).data('app_id');
            $('#appointmentStatus').val(status);
            $('#appID').val(app_id);
            $('#statusModal').modal('show');
        });

    });
</script>
@endsection