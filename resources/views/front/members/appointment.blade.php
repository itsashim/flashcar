@extends('front.layout.front')
@section('title')
    {{ __('messages.My Account') }}
@stop

@section('styles')

    <style>
        .disnone {
            display: none;
        }
    </style>

@endsection

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    @include('front.members.membernav')

    <div class="container-fluid mt-5 mb-3">
        <h3>Upcoming Appointments</h3>
        <div class="row">
            @if ($upcomming->count() > 0)
                @foreach ($upcomming as $u)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card mb-2">
                            <div class="card-header card-primary">
                                {{-- @if (isset($u->doctors->image))
                            <img class="img-thumbnail" src="{{ asset('public/upload/doctor') . '/' . $u->doctors->image }}">
                        @else
                            <img class="img-thumbnail" src="{{ asset('public/upload/profile/profile.png') }}">
                        @endif --}}
                                <button id="print-{{ $u->id }}" class="btn-sm btn-info"><i
                                        class="fa fa-print"></i></button>

                                <div id="print_div-{{ $u->id }}" style="text-align:center;" class="disnone">

                                    <head>
                                        <meta charset="UTF-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>Document</title>
                                        <style>
                                            .container {
                                                padding: 2rem 5rem;
                                                text-align: center;
                                            }

                                            table {
                                                width: 100%;
                                            }

                                            th,
                                            td {
                                                width: 50%;
                                            }

                                            th,
                                            td {
                                                text-align: center; //start
                                            }

                                            .img {
                                                text-align: end;
                                            }

                                            h3 {
                                                text-align: start;
                                            }

                                            .badge {
                                                border: none;
                                                outline: none;
                                                padding: 5px;
                                                border-radius: 8px;
                                            }

                                            .badge-success {
                                                color: white;
                                                background-color: green;
                                            }

                                            .badge-danger {
                                                color: white;
                                                background-color: red;
                                            }

                                            .badge-warning {
                                                color: black;
                                                background-color: #FFE840;
                                            }

                                            .badge-primary {
                                                color: white;
                                                background-color: #1179E8;
                                            }

                                            .text-center {
                                                position: relative;
                                                top: 50%;
                                                left: 50%;
                                                transform: translateX(-50%);
                                            }
                                        </style>

                                    </head>
                                    <div class="container">
                                        <h2 style="text-align: left; font-size:1.17rem;">Patient Details</h2>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"
                                                        style="background-color: lightgreen; padding: 1rem;text-align:center;">
                                                        Booking Confirmed</th><br>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        @if ($u->status == 3)
                                                            <span
                                                                class="badge badge-success">{{ __('messages.Approve') }}</span>
                                                        @elseif($u->status == 6)
                                                            <span
                                                                class="badge badge-danger">{{ __('messages.Reject') }}</span>
                                                        @elseif($u->status == 0)
                                                            <span
                                                                class="badge badge-danger">{{ __('messages.Absent') }}</span>
                                                        @elseif($u->status == 1)
                                                            <span
                                                                class="badge badge-warning">{{ __('messages.Receive') }}</span>
                                                        @elseif($u->status == 2)
                                                            <span
                                                                class="badge badge-primary">{{ __('messages.Reschedule') }}</span>
                                                        @elseif($u->status == 4)
                                                            <span
                                                                class="badge badge-succeess">{{ __('messages.Complete') }}</span>
                                                        @elseif($u->status == 5)
                                                            <span
                                                                class="badge badge-primary">{{ __('messages.Refer Doctor') }}</span>
                                                        @endif
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Token Number</th>
                                                    <th>{{ $u->id }}</th>
                                                </tr>
                                                {{-- <tr>
                                                    <th>First Name</th>
                                                    <th>{{ $u->patient->first_name }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <th>{{ $u->patient->first_name }}</th>
                                                </tr> --}}
                                                <tr>
                                                    <th>Hospital Name</th>
                                                    <th>{{ isset($u->hospital_id) ? $u->hospital->name : '-' }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Doctor Name</th>
                                                    <th>{{-- $u->doctors->name --}}</th>
                                                </tr>
                                                <tr>
                                                    <th>Department Name</th>
                                                    <th>{{ $u->department->name }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>{{ $u->date }}</th>
                                                </tr>
                                                @if ($u->hospital_id == null)
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>{{ $u->time }}</th>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <th>Age</th>
                                                    <th>{{ $u->patient->age }}</th>
                                                </tr>
                                                <tr>
                                                    <th>DOB</th>
                                                    <th>{{ $u->patient->dob }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <th>{{ $u->patient->gender }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <th>{{ $u->patient->phone }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>{{ $u->patient->email }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <th>{{ $u->patient->address }}</th>
                                                </tr>
                                            </thead>
                                        </table>

                                    </div>
                                </div>

                                <script>
                                    (function(id) {
                                        let div = document.querySelector("#print-" + id);
                                        div.addEventListener("click", () => {
                                            var divContents = document.getElementById("print_div-" + id).innerHTML;
                                            var a = window.open('', '', 'height=800, width=800');
                                            a.document.write('<html>');
                                            a.document.write('<body > <h1>Appointment Details<br><br><br>');
                                            a.document.write(
                                                '<div class="img" style="text-align: center!important;"><img src="https://sansarhealth.com/public/upload/images/638996222fe35.png" style="width: 250px;"></div>'
                                            );
                                            a.document.write(divContents);
                                            a.document.write('</body></html>');
                                            a.document.close();
                                            a.print();
                                        });
                                    })
                                    ({{ $u->id }});
                                </script>


                            </div>
                            <div class="card-body" id="card-{{ $u->id }}" data-toggle="modal"
                                data-target="#exampleModal-{{ $u->id }}" style="cursor:pointer"
                                title="click to see details">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="tab-appointment-detail-box">
                                            <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><i
                                                    class="fa-solid fa-user-doctor"></i> <br>
                                                {{ isset($u->doctors->name) ? $u->doctors->name : '-' }}</h5>
                                            @if ($u->status == 3)
                                                <span class="badge badge-success">{{ __('messages.Approve') }}</span>
                                            @elseif($u->status == 6)
                                                <span class="badge badge-danger">{{ __('messages.Reject') }}</span>
                                            @elseif($u->status == 0)
                                                <span class="badge badge-danger">{{ __('messages.Absent') }}</span>
                                            @elseif($u->status == 1)
                                                <span class="badge badge-warning">{{ __('messages.Receive') }}</span>
                                            @elseif($u->status == 2)
                                                <span class="badge badge-primary">{{ __('messages.Reschedule') }}</span>
                                            @elseif($u->status == 4)
                                                <span class="badge badge-succeess">{{ __('messages.Complete') }}</span>
                                            @elseif($u->status == 5)
                                                <span class="badge badge-primary">{{ __('messages.Refer Doctor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        @if ($u->hospital_id == null)
                                            <i class="far fa-clock"></i>
                                            <span>
                                                <?php $date = date_create($u->time);
                                                if ($date) {
                                                    echo date_format($date, 'H:i a');
                                                }
                                                ?>
                                            </span>
                                            <br />
                                        @else
                                            <i class="fa-solid fa-hospital"></i>
                                            <span>
                                                {{ $u->hospital->name }}
                                            </span>
                                            <br />
                                        @endif
                                        <i class="far fa-calendar-alt"></i>
                                        <span>
                                            <?php
                                            $date = date_create($u->date);
                                            if ($date) {
                                                echo date_format($date, 'd F,Y');
                                            }
                                            ?>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal-{{ $u->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Doctor: {{ $u->doctors->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="overflow:scroll">

                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Department</th>
                                                    @if ($u->hospital_id == null)
                                                        <th scope="col">Time</th>
                                                    @endif
                                                    <th scope="col">Date</th>
                                                    @if ($u->hospital_id != null)
                                                        <th scope="col">Hospital</th>
                                                    @endif
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $u->department->name }}</td>
                                                    @if ($u->hospital_id == null)
                                                        <td>
                                                            @php
                                                                $date = date_create($u->time);
                                                                echo date_format($date, 'H:i a');
                                                            @endphp
                                                        </td>
                                                    @endif
                                                    <td> @php
                                                        $date = date_create($u->date);
                                                        echo date_format($date, 'd F,Y');
                                                    @endphp
                                                        {{ $u->created_at->diffforhumans() }}
                                                    </td>
                                                    {{-- <td> @if (isset($u->hospital_id)){{$u->hospital->name }} @else {{ '-' }}  @endif</td> --}}
                                                    @if ($u->hospital_id != null)
                                                        <td> {{ $u->hospital->name }} </td>
                                                    @endif
                                                    <td>
                                                        @if ($u->status == 3)
                                                            <span
                                                                class="badge badge-success">{{ __('messages.Approve') }}</span>
                                                        @elseif($u->status == 6)
                                                            <span
                                                                class="badge badge-danger">{{ __('messages.Reject') }}</span>
                                                        @elseif($u->status == 0)
                                                            <span
                                                                class="badge badge-danger">{{ __('messages.Absent') }}</span>
                                                        @elseif($u->status == 1)
                                                            <span
                                                                class="badge badge-warning">{{ __('messages.Receive') }}</span>
                                                        @elseif($u->status == 2)
                                                            <span
                                                                class="badge badge-primary">{{ __('messages.Reschedule') }}</span>
                                                        @elseif($u->status == 4)
                                                            <span
                                                                class="badge badge-succeess">{{ __('messages.Complete') }}</span>
                                                        @elseif($u->status == 5)
                                                            <span
                                                                class="badge badge-primary">{{ __('messages.Refer Doctor') }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">No upcoming appointments available</div>
            @endif
        </div>
    </div>


    <div class="container-fluid mb-5">
        <h3>Expired Past Appointments</h3>
        <div class="row">
            @if ($past->count() > 0)
                @foreach ($past as $u)
                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <div class="card mb-2">
                            <div class="card-header card-primary">
                                {{-- @if (isset($u->doctors->image))
                        <img class="img-thumbnail" src="{{ asset('public/upload/doctor') . '/' . $u->doctors->image }}">
                    @else
                        <img class="img-thumbnail" src="{{ asset('public/upload/profile/profile.png') }}">
                    @endif --}}
                                <button id="print-{{ $u->id }}" class="btn-sm btn-info"><i
                                        class="fa fa-print"></i></button>


                                <div id="print_div-{{ $u->id }}" style="text-align:center;" class="disnone">

                                    <head>
                                        <meta charset="UTF-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>Document</title>
                                        <style>
                                            .container {
                                                padding: 2rem 5rem;
                                                text-align: center;
                                            }

                                            table {
                                                width: 100%;
                                            }

                                            th,
                                            td {
                                                width: 50%;
                                            }

                                            th,
                                            td {
                                                text-align: center; //start
                                            }

                                            .img {
                                                text-align: end;
                                            }

                                            h3 {
                                                text-align: start;
                                            }

                                            .badge {
                                                border: none;
                                                outline: none;
                                                padding: 5px;
                                                border-radius: 8px;
                                            }

                                            .badge-success {
                                                color: white;
                                                background-color: green;
                                            }

                                            .badge-danger {
                                                color: white;
                                                background-color: red;
                                            }

                                            .badge-warning {
                                                color: black;
                                                background-color: #FFE840;
                                            }

                                            .badge-primary {
                                                color: white;
                                                background-color: #1179E8;
                                            }

                                            .text-center {
                                                position: relative;
                                                top: 50%;
                                                left: 50%;
                                                transform: translateX(-50%);
                                            }
                                        </style>

                                    </head>
                                    <div class="container">
                                        {{-- <h2>Sansar Health </h2> --}}
                                        {{-- <div class="img" style="text-align: center!important;">
                                    <img src="https://sansarhealth.com/public/upload/images/638996222fe35.png" style="width: 250px;">
                                </div> --}}
                                        <h2 style="text-align: left; font-size:1.17rem;">Patient Details</h2>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"
                                                        style="background-color: lightgreen; padding: 1rem;text-align:center;">
                                                        Booking Confirmed</th><br>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">
                                                        @if ($u->status == 3)
                                                            <span
                                                                class="badge badge-success">{{ __('messages.Approve') }}</span>
                                                        @elseif($u->status == 6)
                                                            <span
                                                                class="badge badge-danger">{{ __('messages.Reject') }}</span>
                                                        @elseif($u->status == 0)
                                                            <span
                                                                class="badge badge-danger">{{ __('messages.Absent') }}</span>
                                                        @elseif($u->status == 1)
                                                            <span
                                                                class="badge badge-warning">{{ __('messages.Receive') }}</span>
                                                        @elseif($u->status == 2)
                                                            <span
                                                                class="badge badge-primary">{{ __('messages.Reschedule') }}</span>
                                                        @elseif($u->status == 4)
                                                            <span
                                                                class="badge badge-succeess">{{ __('messages.Complete') }}</span>
                                                        @elseif($u->status == 5)
                                                            <span
                                                                class="badge badge-primary">{{ __('messages.Refer Doctor') }}</span>
                                                        @endif
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Token Number</th>
                                                    <th>{{ $u->id }}</th>
                                                </tr>
                                            {{--   <tr>
                                                    <th>First Name</th>
                                                    <th>{{ $u->patient->first_name }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <th>{{ $u->patient->first_name }}</th>
                                                </tr>--}} 
                                                <tr>
                                                    <th>Hospital Name</th>
                                                    <th>{{ isset($u->hospital_id) ? $u->hospital->name : '-' }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Doctor Name</th>
                                                    <th>{{-- $u->doctors->name --}}</th>
                                                </tr>
                                                <tr>
                                                    <th>Department Name</th>
                                                    <th>{{ $u->department->name }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>{{ $u->date }}</th>
                                                </tr>
                                                @if ($u->hospital_id == null)
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>{{ $u->time }}</th>
                                                    </tr>
                                                @endif
                                             {{--   <tr>
                                                    <th>Age</th>
                                                    <th>{{ $u->patient->age }}</th>
                                                </tr>
                                                <tr>
                                                    <th>DOB</th>
                                                    <th>{{ $u->patient->dob }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <th>{{ $u->patient->gender }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <th>{{ $u->patient->phone }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>{{ $u->patient->email }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <th>{{ $u->patient->address }}</th>
                                                </tr>--}}
                                            </thead>
                                        </table>

                                    </div>
                                </div>

                                <script>
                                    (function(id) {
                                        let div = document.querySelector("#print-" + id);
                                        div.addEventListener("click", () => {
                                            var divContents = document.getElementById("print_div-" + id).innerHTML;
                                            var a = window.open('', '', 'height=800, width=800');
                                            a.document.write('<html>');
                                            a.document.write('<body > <h1>Appointment Details<br><br><br>');
                                            a.document.write(
                                                '<div class="img" style="text-align: center!important;"><img src="https://sansarhealth.com/public/upload/images/638996222fe35.png" style="width: 250px;"></div>'
                                            );
                                            a.document.write(divContents);
                                            a.document.write('</body></html>');
                                            a.document.close();
                                            a.print();
                                        });
                                    })
                                    ({{ $u->id }});
                                </script>

                            </div>
                            <div class="card-body" id="card-{{ $u->id }}" data-toggle="modal"
                                data-target="#exampleModal-{{ $u->id }}" style="cursor:pointer"
                                title="click to see details">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="tab-appointment-detail-box">
                                            <h4 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                         {{--   <i class="fa-solid fa-user-doctor"></i> --}}
                                                <br>
                                                {{ isset($u->doctors->name) ? $u->doctors->name : '-' }}</h4>
                                            @if ($u->status == 3)
                                                <span class="badge badge-success">{{ __('messages.Approve') }}</span>
                                            @elseif($u->status == 6)
                                                <span class="badge badge-danger">{{ __('messages.Reject') }}</span>
                                            @elseif($u->status == 0)
                                                <span class="badge badge-danger">{{ __('messages.Absent') }}</span>
                                            @elseif($u->status == 1)
                                                <span class="badge badge-warning">{{ __('messages.Receive') }}</span>
                                            @elseif($u->status == 2)
                                                <span class="badge badge-primary">{{ __('messages.Reschedule') }}</span>
                                            @elseif($u->status == 4)
                                                <span class="badge badge-succeess">{{ __('messages.Complete') }}</span>
                                            @elseif($u->status == 5)
                                                <span class="badge badge-primary">{{ __('messages.Refer Doctor') }}</span>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        @if ($u->hospital_id == null)
                                            <i class="far fa-clock"></i>
                                            <span>
                                                <?php $date = date_create($u->time);
                                                if ($date) {
                                                    echo date_format($date, 'H:i a');
                                                }
                                                ?>
                                            </span>
                                            <br />
                                        @else
                                            <i class="fa-solid fa-hospital"></i>
                                            <span>
                                                {{ $u->hospital->name }}
                                            </span>
                                            <br />
                                        @endif
                                        <i class="far fa-calendar-alt"></i>
                                        <span><?php
                                        $date = date_create($u->date);
                                        echo date_format($date, 'd F,Y'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal-{{ $u->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Doctor:
                                            {{-- $u->doctors->name --}}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="overflow:scroll">

                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Department</th>
                                                    @if ($u->hospital_id == null)
                                                        <th scope="col">Time</th>
                                                    @endif
                                                    <th scope="col">Date</th>
                                                    @if ($u->hospital_id != null)
                                                        <th scope="col">Hospital</th>
                                                    @endif
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $u->department->name }}</td>
                                                    @if ($u->hospital_id == null)
                                                        <td>
                                                            @php
                                                                $date = date_create($u->time);
                                                                echo date_format($date, 'H:i a');
                                                            @endphp
                                                        </td>
                                                    @endif
                                                    <td> @php
                                                        $date = date_create($u->date);
                                                        echo date_format($date, 'd F,Y');
                                                    @endphp {{ $u->created_at->diffforhumans() }} </td>
                                                    {{-- <td> {{ isset($u->hospital_id) ? $u->hospital->name : "-" }}  @endif</td> --}}
                                                    @if ($u->hospital_id != null)
                                                        <td> {{ $u->hospital->name }} </td>
                                                    @endif
                                                    <td>
                                                        @if ($u->status == 3)
                                                            <span
                                                                class="badge badge-success">{{ __('messages.Approve') }}</span>
                                                        @elseif($u->status == 6)
                                                            <span
                                                                class="badge badge-danger">{{ __('messages.Reject') }}</span>
                                                        @elseif($u->status == 0)
                                                            <span
                                                                class="badge badge-danger">{{ __('messages.Absent') }}</span>
                                                        @elseif($u->status == 1)
                                                            <span
                                                                class="badge badge-warning">{{ __('messages.Receive') }}</span>
                                                        @elseif($u->status == 2)
                                                            <span
                                                                class="badge badge-primary">{{ __('messages.Reschedule') }}</span>
                                                        @elseif($u->status == 4)
                                                            <span
                                                                class="badge badge-succeess">{{ __('messages.Complete') }}</span>
                                                        @elseif($u->status == 5)
                                                            <span
                                                                class="badge badge-primary">{{ __('messages.Refer Doctor') }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">No past appointments available</div>
            @endif
        </div>
    </div>

@endsection
