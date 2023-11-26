@extends('front.layout.front')

@section('title', 'Book Service')
@section('styles')
    <style>
        .curosel-li {
            width: 10px !important;
            height: 10px !important;
            border-radius: 50% !important;
        }

        .hospital-details {
            flex-wrap: wrap;
            gap: 2rem;
            padding: 0 2rem;
        }

        #overlay {
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
            cursor: pointer;
        }

        #text {
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 50px;
            color: white;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }

        .overlay-closeBtn {
            position: absolute;
            /*top: 5%;*/
            top: 5%;
            right: 10%;
            font-size: 4rem;
            color: #fff;
        }

        #overlay a:hover {
            color: #fff !important;
            text-decoration: none;
        }

        .tabView-div {
            text-align: center;
            padding: 0 2rem;
            margin-top: 4rem;
        }

        @media screen and (max-width:967px) {

            /* Payment */
            #AppointmentDetail {
                text-align: center;
            }

            /* Payment end */
        }

        @media screen and (max-width:767px) {
            .tabView-div {
                margin: 0;
            }

            .tabView-h3 {
                font-size: 1.5rem;
            }

            .tabView-img {
                width: 250px !important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid" style="padding:0;">
        @if (isset($hospital))
            <div class="row" style="background-color:#5CC09C">
                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style='gap:1rem;'>
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active curosel-li"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="curosel-li"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="curosel-li"></li>
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
                <div class="col-lg-6 col-sm-12 col-sm-12">

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
                                <div class="justify-content-center pb-2 d-flex pl-4 ">

                                    <a href="{{ $hospital->facebook_url ? $hospital->facebook_url : '-' }}"
                                        style="color:#004b9b">
                                        <!--<i class="fa-brands fa-facebook-f"></i>-->
                                        <i class="fa-brands fa-facebook fa-2xl px-2"></i>
                                        <!--<i class="fa-brands fa-facebook-f px-2"-->
                                        <!--    style=" font-size: 2.3rem; border: solid; border-radius: 10px; "></i>-->
                                    </a>
                                    <a href="{{ $hospital->instagram_url ? $hospital->instagram_url : '-' }}">
                                        <i class="fa-brands fa-instagram fa-2xl px-2" style="color:#FF647F "></i>
                                        <!--<i class="fa-brands fa-instagram px-2"-->
                                        <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: pink;"></i>-->
                                    </a>
                                    <a href="{{ $hospital->twitter_url ? $hospital->twitter_url : '-' }}"
                                        style="color:#004b9b">
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
                        <div class="">
                        </div>
                    </div>
                    <hr>

                    <div class="hospital-details d-flex">
                        <div class="">
                            <span class="d-flex"><i class="fa-solid fa-phone pt-1"></i>
                                <p class="px-2 text-bold">Phone</p>
                            </span>
                            <p style="color: white; font-weight:bold;">{{ $hospital->phone ? $hospital->phone : '-' }}</p>
                        </div>
                        <div class="">
                            <span class="d-flex"><i class="fa-solid fa-envelope pt-1"></i>
                                <p class="px-2 text-bold">Email</p>
                            </span>
                            <p style="color: white; font-weight:bold;">{{ $hospital->email ? $hospital->email : '-' }}</p>
                        </div>
                        <div class=" ">

                            <span class="d-flex "><i class="fa-solid fa-location-dot pt-1"></i>
                                <p class="px-2 text-bold">Address</p>
                            </span>
                            <p style="color: white; font-weight:bold;">{{ $hospital->address ? $hospital->address : '-' }}
                            </p>
                        </div>
                    </div>

                    <!--<div class="col-lg-4 col-lg-3 col-md-3">-->
                    <!--    <span class="d-flex"><i class="fa-solid fa-phone pt-1"></i>-->
                    <!--        <p class="px-2 text-bold"  >Phone</p>-->
                    <!--    </span>-->
                    <!--    <p style="color: white; font-weight:bold;">{{ $hospital->phone ? $hospital->phone : '-' }}</p>-->
                    <!--</div>-->
                    <!--<div class="col-lg-4 col-lg-3 col-md-3 ">-->

                    <!--    <span class="d-flex "><i class="fa-solid fa-location-dot pt-1"></i>-->
                    <!--        <p class="px-2 text-bold"  ">Address</p>-->
                    <!--    </span>-->
                    <!--    <p style="color: white; font-weight:bold;">{{ $hospital->address ? $hospital->address : '-' }}</p>-->
                    <!--</div>-->
                    <!--<div class="col-lg-4 col-lg-3 col-md-3">-->
                    <!--    <span class="d-flex"><i class="fa-solid fa-envelope pt-1"></i></i>-->
                    <!--        <p class="px-2 text-bold"  >Email</p>-->
                    <!--    </span>-->
                    <!--    <p style="color: white; font-weight:bold;">{{ $hospital->email ? $hospital->email : '-' }}</p>-->
                    <!--</div>-->

                    <p class="px-2">
                        {!! $hospital->detail !!}
                    </p>
                </div>
            </div>
        @endif

        <div>
            <div class="row mt-5 mb-3">
                <div class="col-lg-3 col-md-12">
                    <div class="border-2 pb-2"
                        style="
                    background-color: #5cc09c;
                    width: 100%;
                    height: auto;
                    <!--height: 415px;-->
                    border-radius: 7px;
                  ">
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
                                        {{-- <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">विभाग छान्नुहोस्।</th>
                          </tr> --}}
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Step 2: Select a Service and Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr style="background-color: #d4d4d4">
                                <th scope="row" style="color: green">
                                  चिकित्सक् र दिन छान्नुहोस्।
                                </th>
                              </tr> -->
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead>
                                        <!--<tr>-->
                                        <!--    <th scope="col">Step 3: Select Patient</th>-->
                                        <!--</tr>-->
                                    </thead>
                                    <tbody>
                                        {{-- <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">बिरामी चयन गर्नुहोस्|</th>
                          </tr> --}}
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Step 4: Get Appointment confirmation.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--<tr style="background-color: #d4d4d4">-->
                                        <!--    <th scope="row" style="color: green">एपोइन्टमेण्ट निश्चित भएको sms-->
                                        <!--        पाउनुहोस्।</th>-->
                                        <!--</tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">

                    @if (session()->has('confirmed'))
                        <section id="AppointmentConfirmed">

                            {{-- Overlay --}}

                            <!--<div class="col-md-12 bg-white" id="overlay" onclick="off()">-->
                            <!--    <a href="javascript:void(0)" class="closebtn overlay-closeBtn"-->
                            <!--        onclick="off()">&times;</a>-->
                                <!--<a href="javascript:void(0)" class="closebtn overlay-closeBtn" onclick="closeNav()">&times;</a>-->
                            <!--    <div id="text" class="tabView-div">-->
                            <!--        <h3 class="tabView-h3 text-dark text-center" style=" margin-bottom: 2rem;">-->
                            <!--            Thank you for having appointment from our site. Your appointment request has been-->
                            <!--            submitted.-->
                            <!--        </h3>-->
                            <!--        <img class="tabView-img"-->
                            <!--            src="https://sansarhealth.com/public/upload/images/638996222fe35.png"-->
                            <!--            style="width: 400px;" />-->
                            <!--    </div>-->
                            <!--    <a href="javascript:void(0)" class="text-light bg-primary" style="position:absolute;bottom:30px;left:50%;width:max-content;font-size:30px;border-radius:8px;padding:0 10px 0 10px"-->
                            <!--        onclick="off()">Close</a>-->
                            <!--</div> -->

                            {{-- Overlay end --}}

                            <!--<h3>Thank you for having appointment from our site. Your appointment request has been submitted. </h3>-->

                            <div id="printDIV" style="text-align:center;">

                                <head>
                                    <meta charset="UTF-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>Document</title>
                                    <style>
                                        .container {
                                            /*padding: 2rem 5rem;*/
                                            text-align: center;
                                        }

                                        table {
                                            width: 100%;
                                        }

                                        th,
                                        td {
                                            width: 50%;
                                        }

                                        th,td {
                                            text-align: start;
                                        }

                                        .img {
                                            text-align: end;
                                        }

                                        h3 {
                                            text-align: start;
                                        }
                                    </style>

                                </head>
                                <div class="container">
                               {{-- <h2>Sansar Health </h2> --}}
                                {{--<div class="img" style="text-align: center!important;">
                                    <img src="https://sansarhealth.com/public/upload/images/638996222fe35.png" style="width: 250px;">
                                </div> --}}
                                    <h2 style="text-align: left; font-size:1.17rem;">Book Details</h2>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th colspan="2" style="background-color: lightgreen; padding: 1rem;text-align:center;">Booking Confirmed</th>
                                            </tr>
                                            <tr>
                                                <th>Token Number</th>
                                                <th>{{ session()->get('appointment_id') }}</th>
                                            </tr>
                                            <tr>
                                                <!--<th>First Name</th>-->
                                                <th>{{-- $patient->first_name --}}</th>
                                            </tr>
                                            <tr>
                                                <!--<th>Last Name</th>-->
                                                <th>{{-- $patient->last_name --}}</th>
                                            </tr>
                                            @if(isset($hospital))
                                            <tr>
                                                <th>Service Name</th>
                                                <th>{{ $hospital->name }}</th>
                                            </tr>
                                            @endif
                                            @if( session()->has('doctor'))
                                            <tr>
                                                <th>Service Name</th>
                                                <th>{{ session()->get('doctor')->name }}</th>
                                            </tr>
                                            @endif

                                            @if( session()->has('department'))

                                            <tr>
                                                <th>Category Name</th>
                                                <th>{{ session()->get('department')->name }}</th>
                                            </tr>

                                            @endif

                                            <tr>
                                                <th>Date</th>
                                                <th>{{ $date }}</th>
                                            </tr>

                                            @if(!isset($hospital))
                                            <tr>
                                                <th>Time</th>
                                                <th>{{ $time }}</th>
                                            </tr>
                                            @endif

                                            <tr>
                                                <!--<th>Age</th>-->
                                                <th>{{-- $patient->age --}}</th>
                                            </tr>
                                            <tr>
                                                <!--<th>DOB</th>-->
                                                <th>{{-- $patient->dob --}}</th>
                                            </tr>
                                            <tr>
                                                <!--<th>Gender</th>-->
                                                <th>{{-- $patient->gender --}}</th>
                                            </tr>
                                            <tr>
                                                <!--<th>Phone</th>-->
                                                <th>{{-- $patient->phone --}}</th>
                                            </tr>
                                            <tr>
                                                <!--<th>Email</th>-->
                                                <th>{{-- $patient->email --}}</th>
                                            </tr>
                                            <tr>
                                                <!--<th>Address</th>-->
                                                <th>{{-- $patient->location --}}</th>
                                            </tr>
                                            <!--<tr>-->
                                            <!--  <th>Address</th>-->
                                            <!--  <th>{{-- $patient->address --}}</th>-->
                                            <!--</tr>-->
                                        </thead>
                                    </table>

                                    <!--<h2 style="color: green; text-align: end; padding: 0 1rem;">Received</h2>-->

                                    <p style="font-size:1rem;text-align: center; padding: 0.5rem 3rem;">Thanks for choosing our service! <br>
                                        Contact the hospital for any clarifications.
                                    </p>
                                </div>
                            </div>

                            <button class="btn btn-primary" type="button" onclick="printDiv()">Print</button>
                        </section>
                    @else
                        <section id="AppointmentDetail">
                            <h3>Payment and Confirm Appointment</h3>
                            <p class="text-bold text-capitalize">Appointment Fee: Rs {{ $appointment_fee }}</p>
                            <div class="row">



                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <img style="width: 100px; height:100px; border:1px solid green; border-radius:50%;"
                                        class="payment_method" id="cod"
                                        src="{{ asset('public/front/cashondelivery.png') }}" />
                                    <p class="text-capitalize text-3xl"> cash on delivery</p>
                                    <div id="codDetails" class="hide"></div>
                                    <img style="width: 100px; height:100px; border:1px solid green; border-radius:50%;"
                                        class="payment_method" id="manual"
                                        src="{{ asset('public/images/manualpayment.jpg') }}" />
                                    <p class="text-capitalize text-3xl">manual payment</p>
                                </div>
                                {{-- <div class="col-sm-4">
                    <img class="payment_method" id="esewatransfer" style="height: 160px;" src="{{ asset('public/front/esewa_money_transfer.jpg') }}" />
                    <div id="esewaTrasferDetails" class="hide">
                      <ul class="list">
                        <li>Transfer amount to esewa number 98XXXXXXX</li>
                        <li>
                          Screenshot your payment details and upload your file here.
                          <input type="file" name="payment_proof" class="form-control" />
                        </li>
                        <li>Await for payment verificatin from us shortly.</li>
                      </ul>
                    </div>
                  </div> --}}
                                {{-- <div class="col-sm-4">
                    <img class="payment_method" id="paymentGateway" style="height: 145px;" src="{{ asset('public/front/payment_gateway.png') }}" />
                    <div id="livepayment" class="hide">
                      Coming soon
                    </div> --}}
                            </div>
                </div>
                </section>
                @endif

            </div>
        </div>
    </div>
    </div>


    <div id="codModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ asset('cod/confirm') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Continue with Cash On Delivery</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Appointment Fee: {{ $appointment_fee }}</p>
                    </div>
                    <div class="modal-footer">
                        <input style="display: none;" type="text" name="patient_id" value="{{-- $patient->id --}}" />
                        <input style="display: none;" type="text" name="doctor_id" value="{{ $doctor_id }}" />
                        <input style="display: none;" type="text" name="date" value="{{ $date }}" />
                        <input style="display: none;" type="text" name="time" value="{{ $time }}" />
                        <input style="display: none;" type="text" name="time_table_id" value="{{ isset($time_id)?$time_id:'-'}}" />
                        <input style="display: none;" type="text" name="payment_method" value="cod" />
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Confirm Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="manualModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ asset('cod/confirm') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Continue with Manual Payment</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Appointment Fee: {{ $appointment_fee }}</p>
                        <b>Bank Name: {{ $setting->bank_name }}</b><br />
                        <b>Bank Account Number: {{ $setting->bank_account_number }}</b><br />
                        <b>Esewa ID: {{ $setting->esewa_id }}</b><br />
                    </div>
                    <div class="modal-footer">
                        <input style="display: none;" type="text" name="patient_id" value="{{-- $patient->id --}}" />
                        <input style="display: none;" type="text" name="doctor_id" value="{{ $doctor_id }}" />
                        <input style="display: none;" type="text" name="date" value="{{ $date }}" />
                        <input style="display: none;" type="text" name="time" value="{{ $time }}" />
                        <input style="display: none;" type="text" name="time_table_id" value="{{ isset($time_id)?$time_id:'-'}}" />
                        <input style="display: none;" type="text" name="payment_method" value="manual" />
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Confirm Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function printDiv() {
            var divContents = document.getElementById("printDIV").innerHTML;
            var a = window.open('', '', 'height=800, width=800');
            a.document.write('<html>');
            a.document.write('<body > <h1>Appointment Details<br><br><br>');
            a.document.write('<div class="img" style="text-align: center!important;"><img src="https://sansarhealth.com/public/upload/images/638996222fe35.png" style="width: 250px;"></div>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }



        $('#cod').on('click', function() {
            $('#codDetails').removeClass('hide');
            $('#esewaTrasferDetails').addClass('hide');
            $('#livepayment').addClass('hide');
        });

        $('#esewatransfer').on('click', function() {
            $('#esewaTrasferDetails').removeClass('hide');
            $('#codDetails').addClass('hide');
            $('#livepayment').addClass('hide');
        });

        $('#paymentGateway').on('click', function() {
            $('#livepayment').removeClass('hide');
            $('#codDetails').addClass('hide');
            $('#esewaTrasferDetails').addClass('hide');
        });

        $('#cod').on('click', function() {
            $('#codModal').modal('show');
        });

        $('#manual').on('click', function() {
            $('#manualModal').modal('show');
        });


        // Overlay 
        // function closeNav() {
        //   document.getElementById("overlay").style.width = "0%";
        // }

        function on() {
            document.getElementById("overlay").style.display = "block";
        }

        function off() {
            document.getElementById("overlay").style.display = "none";
        }

        // Overlay end
    </script>
@endsection
