@extends('front.layout.front')

@section('title', 'Book Doctor Through Hospital')

@section('styles')
    <style>
        .bookThisTime {
            margin: 2px 0;
        }
        
        .curosel-li {
            width: 10px !important;
            height: 10px !important;
            border-radius: 50% !important;
        }
        
        .carousel-indicators {
            gap:1rem;
        }
        
        .hospital-details {
            flex-wrap: wrap;
            gap: 2rem;
            padding: 0 2rem;
        }
        
        @media screen and (max-width:991px) {
            .hospital-content-mobile {        
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }
        
        @media screen and (max-width:396px) {
            .hospital-details {
                gap:0;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid" style="padding:0;">
         <div class="row " style="background-color:#5CC09C">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="curosel-li" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li class="curosel-li" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li class="curosel-li" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($hospitalGalleries as $gallery)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img class="d-block w-100 carousel-image"
                                    src="{{ asset('public/storage/' . $gallery->image_path) }}" alt="First slide" />
                                <div class="carousel-caption" style="color: black; position: absolute; bottom: 20px">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-sm-12 hospital-content-mobile">
    
                <div class="row d-flex ">
                    <div class=" mt-2 ">
                        <img src="{{ asset('public' . $hospital->logo) }}" alt="background"
                            style="width: 120px; height: 120px; border-radius: 50%;" />
    
                    </div>
                    <div>
                        <p class="text-left fs-6 text-uppercase mt-4 pl-4 pt-2" style="font-weight: bold">
                            {{ $hospital->name }}
                        </p>
                        <div class="">
                            <div class="justify-content-center pb-2 d-flex pl-4 mt-4">
    
                                <a href="{{ $hospital->facebook_url ? $hospital->facebook_url : '-' }}">
                                    <!--<i class="fa-brands fa-facebook-f"></i>-->
                                    <i class="fa-brands fa-facebook fa-2xl px-2"  ></i>
                                    <!--<i class="fa-brands fa-facebook-f px-2"-->
                                    <!--    style=" font-size: 2.3rem; border: solid; border-radius: 10px; "></i>-->
                                </a>
                                <a href="{{ $hospital->instagram_url ? $hospital->instagram_url : '-' }}">
                                    <i class="fa-brands fa-instagram fa-2xl px-2" style="color:#FF647F "></i>
                                    <!--<i class="fa-brands fa-instagram px-2"-->
                                    <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: pink;"></i>-->
                                </a>
                                <a href="{{ $hospital->twitter_url ? $hospital->twitter_url : '-' }}">
                                    <i class="fa-brands fa-twitter fa-2xl px-2 "></i>
                                    <!--<i class="fa-brands fa-square-twitter fa-2xl px-2"></i>-->
                                    <!--<i class="fa-brands fa-twitter px-2"-->
                                    <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: blue;"></i>-->
                                </a>
                                <a href="{{ $hospital->linkedin_url ? $hospital->linkedin_url : '-' }}">
                                    <i class="fa-brands fa-whatsapp fa-2xl px-2" style="color:forestgreen"></i>
                                    <!--<i class="fa-brands fa-whatsapp px-2"-->
                                    <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: green;"></i>-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                    <div class="hospital-details d-flex">
                        <div class="">
                            <span class="d-flex"><i class="fa-solid fa-phone pt-1"></i>
                                <p class="px-2 text-bold"  >Phone</p>
                            </span>
                            <p style="color: white; font-weight:bold;">{{ $hospital->phone ? $hospital->phone : '-' }}</p>
                        </div>
                        <div class="">
                            <span class="d-flex"><i class="fa-solid fa-envelope pt-1"></i>
                                <p class="px-2 text-bold"  >Email</p>
                            </span>
                            <p style="color: white; font-weight:bold;">{{ $hospital->email ? $hospital->email : '-' }}</p>
                        </div>
                        <div class=" ">
        
                            <span class="d-flex "><i class="fa-solid fa-location-dot pt-1"></i>
                                <p class="px-2 text-bold">Address</p>
                            </span>
                            <p style="color: white; font-weight:bold;">{{ $hospital->address ? $hospital->address : '-' }}</p>
                        </div>
                    </div>
                
                <div class="px-4 hospital-content">
                    {!! $hospital->detail !!}
                </div>
            </div>
        </div>

        <div>
            <div class="row mt-5 mb-3">
                <div class="col-lg-3 col-md-12">
                    <div class="border-2  "
                        style="background-color: #5cc09c;width: 100%;height: 100%;border-radius: 7px;">
                        <p class="text-capitalize pl-3 pt-2" style="font-size: 1.3rem; font-weight: bold">
                            Follow below easy steps
                        </p>
                        <div class="border-2 m-3" style="background-color: white; border-radius: 7px">
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Step 1: Select a Department</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Step 2: Select a Doctor and Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background-color: #d4d4d4">
                                            <th scope="row" style="color: green">
                                                चिकित्सक् र दिन छान्नुहोस्।
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Step 3: Select Patient</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Step 4: Get Appointment confirmation.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 order-0 order-lg-1">

                    <section id="doctorSection">
                        @foreach ($doctors as $doctor)
                            <div id="finddoctors_view"><input type="hidden" id="cid" value="4522"
                                    data-count="1" data-sync="0">
                                <div
                                    class="d-sm-flex flex-wrap mb-4 shadow-sm rounded-3 bg-gray-light border doc-list-item">
                                    <div class="col-md-5 flex-fill">
                                        <div class="p-3 pb-0 d-xl-flex mb-3 docdetail2029">
                                            <div class="text-center">
                                                <a href="javascript:void(0);" data-docid="4522" data-orgid="614"
                                                    data-nextavltime="Aug 25 at 7:00 PM" class="d-block doctorprofile">
                                                    <img class="rounded-circle border-success"
                                                        src="{{ asset('public/upload/doctor/' . $doctor->image) }}"
                                                        alt="Dr. Madhur Basnet" style="width: 200px; height:200px;">
                                                </a>

                                                <div class="d-xl-none">
                                                    <h6 class="my-2" data-depid="1974" data-docid="2696"
                                                        data-gdepid="14" data-gdocid="623" data-orgid="614"
                                                        id="doctordetail">Dr. {{ $doctor->name }} </h6>
                                                    <p class="mb-1 pb-2 fs-12"><i
                                                            class="bi bi-caret-right-square-fill me-1 text-success"></i>Department
                                                        : {{ $doctor->department->name }}
                                                    </p>
                                                    <a data-docid="3" data-orgid="614"
                                                        data-nextavltime="Aug 25 at 7:00 PM"
                                                        class="btn btn-sm btn-outline-success small doctorprofile">View
                                                        Profile <em class="bi bi-chevron-right"></em></a>
                                                    <!--<a data-docid="4522" data-orgid="614"-->
                                                    <!--    data-nextavltime="Aug 25 at 7:00 PM"-->
                                                    <!--    class="btn btn-sm btn-outline-success small doctorprofile">View-->
                                                    <!--    Profile <em class="bi bi-chevron-right"></em></a>-->
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <input type="hidden" id="newdocid0" value="4522" data-gdocid="2029"
                                                    data-orgid="614" data-gdepid="81" data-depid="1996">

                                                <div class="d-none d-xl-block pb-2">
                                                    <h5 class="mb-3" data-depid="1974" data-docid="2696"
                                                        data-gdepid="14" data-gdocid="623" data-orgid="614"
                                                        id="doctordetail">Dr. {{ $doctor->name }} </h5>
                                                    <!-- <div class="line line-sm ms-0 mb-3"></div> -->
                                                    <div class="fs-12 ">
                                                        <p class="mb-2 pb-1"><i
                                                                class="fa-solid fa-caret-right"></i></i>&nbsp;&nbsp;Department:
                                                            {{ $doctor->department->name }}
                                                        </p>
                                                        <!-- 				<p class="mb-2 pb-1"><i class="bi bi-caret-right-square-fill me-1 text-success"></i> </p> -->
                                                        <p class="mb-2 pb-1">
                                                            <i
                                                                class="fa-solid fa-caret-right"></i></i>&nbsp;&nbsp;Experience:
                                                            {{ $doctor->experience }}
                                                        </p>
                                                        <p class="mb-2 pb-1"><i
                                                                class="fa-solid fa-caret-right"></i></i>&nbsp;&nbsp;Next
                                                            Available Time:
                                                            <span class="text-dark pt-1">Aug 25 at 7:00 PM </span>
                                                        </p>
                                                    </div>
                                                    <a data-docid="{{ $doctor->id }}" data-orgid="614"
                                                        data-nextavltime="Aug 25 at 7:00 PM"
                                                        class="btn btn-sm text-white small doctorprofile"
                                                        style="background: #00be9c;"> <i class="fa fa-user"></i> View
                                                        Profile
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-7 border-start flex-fill bg-white">
                                        <div id="doctorschedule_4522">
                                            <div class="appointment-time-info px-3 pb-3 pt-2">
                                                <div class="table-responsive mb-3 mb-xl-0">
                                                    <table class="table" style="width:800px;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="width:120px;">Date</th>
                                                                <th scope="col" style="width:170px;">Dr. Available Time
                                                                </th>
                                                                <th scope="col" style="min-width:400px;">Available Tokens
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="small align-middle">
                                                            <tr>
                                                                <td>
                                                                    <?php 
                                                                    $dayOfWeek = \Carbon\Carbon::now()->addDays(1)->dayOfWeek;
                                                                    $tomorrow = $dayOfWeek + 1;
                                                                    if($tomorrow > 7){
                                                                        $tomorrow = 1;
                                                                    }
                                                                    $dayaftertomorrow = $dayOfWeek + 2;
                                                                    if($dayaftertomorrow > 7){
                                                                        $dayaftertomorrow = 1;
                                                                    }
                                                                    $todayTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                                        ->where('day', $dayOfWeek)
                                                                        ->first();
                                                                    if ($todayTimeTable) {
                                                                        $time_table_id = $todayTimeTable->id;
                                                                    }

                                                                    $tommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                                        ->where('day', $tomorrow)
                                                                        ->first();
                                                                        
                                                                    $dayAfterTommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                                        ->where('day', $dayaftertomorrow)
                                                                        ->first();
                                                                    
                                                                    ?>
                                                                    <div class="m-1">
                                                                        {{ \Carbon\Carbon::now()->format('Y/m/d') }}
                                                                        <span class="badge badge-warning text-light">{{ \Carbon\Carbon::now()->format('l') }}</span>
                                                                        </div>
                                                                </td>
                                                                <td>
                                                                    @if(isset($todayTimeTable->from) && isset($todayTimeTable->to))
                                                                        <div class="m-1">{{ $todayTimeTable->from }} -
                                                                            {{ $todayTimeTable->to }}</div>
                                                                    @else
                                                                        <div class="m-1">{{ "N/A" }} -
                                                                            {{ "N/A" }}</div>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <div class="m-1">
                                                                        <?php
                                                                        $todayToken = isset($todayTimeTable->token) ? $todayTimeTable->token : 0 ;
                                                                        $tokenTime = 0;
                                                                        $status =  isset($todayTimeTable->status) ?  $todayTimeTable->status : 0;
                                                                        ?>
                                                                        
                                                                        <!--fortoken count-->
                                                                        @if($status != '0')
                                                                            @if($todayToken != '0')
                                                                            <a class="btn bookThisTime text-white"
                                                                                        data-time_table_id = "<?php 
                                                                                             if ($todayTimeTable) {
                                                                                                echo $time_table_id = $todayTimeTable->id;
                                                                                            } 
                                                                                        ?>"
                                                                                        data-id="{{ $doctor->id }}"
                                                                                        data-date="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" <?php //now()->addDays(1) ?>
                                                                                        data-time="{{ isset($todayTimeTable->from) ? $todayTimeTable->from: "N/A" }}"
                                                                                        style="background: #00be9c;">{{ isset($todayTimeTable->token) ? $todayTimeTable->token : 0 }} token available
                                                                                        </a
                                                                            @else
                                                                                <span class="badge badge-danger">No Token Available</span>
                                                                            @endif
                                                                        @else
                                                                            <span class="badge badge-info">No Doctor Available</span>
                                                                        @endif
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="m-1">
                                                                        {{ \Carbon\Carbon::now()->addDays(1)->format('Y/m/d') }}
                                                                        <span class="badge badge-warning text-light">{{ \Carbon\Carbon::now()->addDays(1)->format('l') }}</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    @if(isset($tommorowTimeTable->from) && isset($tommorowTimeTable->to))
                                                                        <div class="m-1">{{ $todayTimeTable->from }} -
                                                                            {{ $tommorowTimeTable->to }}</div>
                                                                    @else
                                                                        <div class="m-1">{{ "N/A" }} -
                                                                            {{ "N/A" }}</div>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <div class="m-1">
                                                                        <?php
                                                                        $tommorrowToken = isset($tommorowTimeTable->token) ? $tommorowTimeTable->token : 0;
                                                                        $tokenTime = 0;
                                                                        $tommorrowStatus = isset($tommorowTimeTable->status) ? $tommorowTimeTable->status : 0;
                                                                        ?>
                                                                        
                                                                       @if($tommorrowStatus != "0")
                                                                             @if($tommorrowToken != 0)
                                                                            <!--fortoken count-->
                                                                            <a class="btn bookThisTime text-white"
                                                                                        data-time_table_id = "<?php if ($tommorowTimeTable) {
                                                                                                echo $time_table_id = $tommorowTimeTable->id;
                                                                                            }  ?>"
                                                                                        data-id="{{ $doctor->id }}"
                                                                                        data-date="{{ \Carbon\Carbon::now()->addDays(1)->format('Y-m-d') }}"
                                                                                        data-time="{{ isset($tommorowTimeTable->from) ? $tommorowTimeTable->from: "N/A" }}"
                                                                                        
                                                                                        style="background: #00be9c;">{{ isset($tommorowTimeTable->token) ? $tommorowTimeTable->token." token available" : 0 }} 
                                                                                        </a>
                                                                            @else
                                                                                 <span class="badge badge-danger">No Token Available</span>
                                                                            @endif
                                                                       @else
                                                                            <span class="badge badge-info">No Doctor Available</span>
                                                                       @endif
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <td>
                                                                    <div class="m-1">
                                                                        {{ \Carbon\Carbon::now()->addDays(2)->format('Y/m/d') }}
                                                                        <span class="badge badge-warning text-light">{{ \Carbon\Carbon::now()->addDays(2)->format('l') }}</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    @if(isset($dayAfterTommorowTimeTable->from) && isset($dayAfterTommorowTimeTable->from))
                                                                    <div class="m-1">
                                                                        {{ $dayAfterTommorowTimeTable->from }} -
                                                                        {{ $dayAfterTommorowTimeTable->to }}</div>
                                                                    @else
                                                                        {{ "N/A" }} - {{ "N/A" }}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <div class="m-1">
                                                                        <?php
                                                                            $dayAfterTommorrowToken = isset($dayAfterTommorowTimeTable->token)?$dayAfterTommorowTimeTable->token: "0";
                                                                            $tokenTime = 0;
                                                                            $dayAfterTommorrowStatus = isset($dayAfterTommorowTimeTable->status)?$dayAfterTommorowTimeTable->status: "0";
                                                                        ?>
                                                                        
                                                                        @if($dayAfterTommorrowStatus != "0")
                                                                            @if($dayAfterTommorrowToken != '0')
                                                                                <a class="btn bookThisTime text-white"        
                                                                                    data-time_table_id = "<?php if ($dayAfterTommorowTimeTable) {
                                                                                                    echo $time_table_id = $dayAfterTommorowTimeTable->id;
                                                                                                }  ?>"
                                                                                            
                                                                                    data-id="{{ $doctor->id }}"
                                                                                    data-date="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}"
                                                                                    data-time="{{ \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i') }}"
                                                                                    style="background: #00be9c;">
                                                                                   {{ isset($dayAfterTommorowTimeTable->token) ? $dayAfterTommorowTimeTable->token." token available" : 0 }}
                                                                                </a>
                                                                            @else
                                                                                <span class="badge badge-danger">No Token Available</span>
                                                                            @endif
                                                                        @else
                                                                            <span class="badge badge-info">No Doctor Available</span>
                                                                        @endif
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </section>


                </div>
            </div>
        </div>


    </div>

    <div id="doctorProfile" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Doctor Details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="profileContent"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        @if (isset($department_id))

            $(document).on('click', '.bookThisTime', function() {
                console.log('this is test');
                let doctor_id = $(this).data('id');
                let date = $(this).data('date');
                let time = $(this).data('time');
                let time_id = $(this).data('time_table_id');
                window.location.href =
                    "{{ asset('hospital/' . $hospital->slug . '?department_id=' . $department_id) }}" + "&date=" +
                    date +
                    "&time=" + time + "&doctor_id=" + doctor_id + "&time_table_id=" +time_id;
            });
        @endif


        $(document).on('click', '.doctorprofile', function() {

            let id = $(this).data('docid');
            let url = "{{ asset('doctor/profile') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "id": id,
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#doctorProfile').modal('show');
                        $('#profileContent').html(data.data);
                    } else {
                        console.log('error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });
    </script>
@endsection
