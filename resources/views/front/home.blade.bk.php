@extends('front.layout')
@section('title')
    {{ __('messages.Home') }}
@stop
@section('styles')
<link rel="stylesheet" href="{{ asset('public/select2/css/select2.min.css') }}">
@endsection
@section('loader')
    <div id="overlayer"></div><span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .collection-item {
            margin-bottom: 30px;
            -webkit-box-shadow: 0px 0px 20px 0px #dddddd82;
            box-shadow: 0px 0px 20px 0px #dddddd82;
            border-radius: 10px 10px 0px 0px;
            overflow: hidden;
        }

        .collection-item:hover .collection-top ul {
            opacity: 1;
            bottom: 0;
        }

        .collection-item:hover .collection-top .add-cart {
            right: 10px;
        }

        .collection-item:hover .collection-top .add-cart a {
            opacity: 1;
        }

        .collection-item .collection-top {
            position: relative;
        }

        .collection-item .collection-top img {
            width: 100%;
            border-radius: 10px 10px 0px 0px;
        }

        .collection-item .collection-top ul {
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            position: absolute;
            bottom: -10px;
            left: 0;
            right: 0;
            opacity: 0;
            padding: 4px 15px;
            border-radius: 8px 8px 0 0;
            max-width: 150px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            -webkit-box-shadow: 0px 6px 15px 0px #dddddd40;
            box-shadow: 0px 6px 15px 0px #dddddd40;
            -webkit-transition: 0.5s all ease;
            transition: 0.5s all ease;
        }

        .collection-item .collection-top ul li {
            list-style-type: none;
            display: inline-block;
        }

        .collection-item .collection-top ul li i {
            color: #ddd;
            display: block;
        }

        .collection-item .collection-top ul li .checked {
            color: #ffc107;
        }

        .collection-item .collection-top .add-cart {
            display: inline-block;
            position: absolute;
            top: 10px;
            right: -15px;
        }

        .collection-item .collection-top .add-cart a {
            display: block;
            color: #0b0320;
            background-color: #ffffff;
            border-radius: 5px;
            padding: 4px 12px 8px;
            font-size: 13px;
            opacity: 0;
        }

        .collection-item .collection-top .add-cart a i {
            display: inline-block;
            color: #ffbe00;
            font-size: 22px;
            position: relative;
            top: 4px;
            margin-right: 3px;
        }

        .collection-item .collection-top .add-cart a:hover {
            color: #ffffff;
            background-color: #0b0320;
        }

        .collection-item .collection-bottom {
            padding: 15px 20px 17px;
        }

        .collection-item .collection-bottom h3 {
            font-weight: 500;
            font-size: 20px;
            margin-bottom: 15px;
            font-family: "Poppins", sans-serif;
        }

        .collection-item .collection-bottom ul {
            margin: 0;
            padding: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .collection-item .collection-bottom ul li {
            list-style-type: none;
            display: inline-block;
        }

        .collection-item .collection-bottom ul li:first-child {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%;
        }

        .collection-item .collection-bottom ul li:last-child {
            text-align: left;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 80%;
            flex: 0 0 80%;
            max-width: 80%;
        }

        .collection-item .collection-bottom ul li span {
            display: block;
            font-weight: 500;
            font-size: 20px;
            color: #fe3333;
            position: relative;
            top: 4px;
        }

        .collection-item .collection-bottom ul li .minus,
        .collection-item .collection-bottom ul li .plus {
            width: 35px;
            height: 35px;
            line-height: 35px;
            color: #ffffff;
            background-color: #fbdb7d;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            margin-bottom: 0;
            vertical-align: middle;
            -webkit-transition: 0.5s all ease;
            transition: 0.5s all ease;
            border-radius: 10px;
            top: 0;
        }

        .collection-item .collection-bottom ul li .minus:hover,
        .collection-item .collection-bottom ul li .plus:hover {
            background-color: #ffbe00;
        }

        .collection-item .collection-bottom ul li .form-control {
            height: 25px;
            width: 50px;
            text-align: center;
            font-size: 20px;
            font-weight: 500;
            border: 0;
            color: #ffbe00;
            display: inline-block;
            vertical-align: middle;
            margin-left: -4px;
            margin-right: -4px;
        }

        .collection-item .collection-bottom ul li .form-control:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 0;
        }

        .addtocart {
            background: #00be9c;
            padding: 7px 14px;
            font-size: 11px;
            border-radius: 4px;
            color: white;
        }
        .select2-container--default{
            width: 100%!important;
        }
        
         
        
    </style>
    <div class="appointment-section">
        <div class="header-img">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style=" ;">
                    <div class="carousel-item active" style=" ">
                        <img src="{{ asset('public/front/doctorgirl.png') }}" class="d-block w-100" alt="..."
                            style=" ; object-fit:cover">
                    </div>
                    <div class="carousel-item" style=" ;">
                        <img src="{{ asset('public/front/m.jpg') }}" class="d-block w-100" alt="..."
                            style=" ; object-fit:cover">
                    </div>
                    <div class="carousel-item" style=" ;">
                        <img src="{{ asset('public/front/onn.jpg') }}" class="d-block w-100" alt="..."
                            style=" ; object-fit:cover">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                    data-slide="prev" style="    border: 0px; background: none; ">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                    data-slide="next" style="   border: 0px;  background: none; ">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
        <div class="container">
            <div class="header-appo-main-box"
                style="margin-top: 340px;margin-bottom:100px;width:70%;border-radius:60px;opacity:0.99;">
                <div class="input-group">
                    <input name="search" type="search" class="form-control rounded"
                        placeholder="Search for hospitals, doctors, medicines etc..." aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary"
                        style="background: #00be9c;  padding: 7px 14px; font-size: 11px; border-radius: 7px; color: white; border: 0px;">search</button>
                </div>
                {{-- <h1>{{ __('messages.Appointment Now!') }}</h1>
                @if (Session::get('message'))
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif
                <span id="loginerrorreview"></span>
                <form action="{{ url('bookappoinment') }}" method="post">
                    {{ csrf_field() }}
                    <div class="appo-select-main-box">
                        <div class="appo-select-box">
                            <select id="department" required class="dropdown" name="department"
                                onchange="getserviceanddoctor(this.value)">
                                <option value="" disabled="disabled" selected="selected">-
                                    {{ __('messages.Select Department') }}</option>
                                @foreach ($department as $d)
                                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="appo-select-box">
                            <select id="doctors" required class="dropdown" name="doctors">
                                <option value="" disabled="disabled" selected="selected">-
                                    {{ __('messages.Select Doctors') }}</option>
                            </select>
                        </div>
                        <div class="appo-select-box">
                            <select id="service" required class="dropdown" name="service">
                                <option value="" disabled="disabled" selected="selected">-
                                    {{ __('messages.Select Services') }}</option>
                            </select>
                        </div>

                    </div>
                    <div class="appo-input-main-box">
                        <input type="text" required name="name" id="name" placeholder="Your name"
                            value="{{ Auth::user() ? Auth::user()->name : '' }}">
                        <input type="text" required name="phone_no" id="phone_no" placeholder="Phone number"
                            class="appo-right-input" value="{{ Auth::user() ? Auth::user()->phone_no : '' }}">
                        <input type="date" required name="app_date" id="app_date" data-date-inline-picker="true"
                            min="<?= date('Y-m-d') ?>" placeholder="dd/mm/yyyy">
                        <input type="time" required name="app_time" placeholder="Time" class="appo-right-input">
                        <textarea rows="3" required name="messages" placeholder="Message"></textarea>
                    </div>
                    <div class="appo-btn-main-box">
                        @if (Auth::id())
                            <button type="submit">{{ __('messages.Book Appointment') }}</button>
                        @else
                            <button type="button" onclick="changehiddenstatus()" data-toggle="modal"
                                data-target="#myModal">{{ __('messages.Book Appointment') }}</button>
                        @endif

                    </div>
                </form> --}}
            </div>
        </div>
    </div>

    {{-- <div class="services-main-box">
        <div class="container">
            <div class="services-left-part">
                <div class="left-part-detail">
                    <h2>{{ __('messages.Personal care & healthy living') }}</h2>
                    <p>{{ __('messages.facilitydetails') }}</p>
                    <div class="services-btn-main-box">
                        <a href="{{ url('allfacilites') }}">{{ __('messages.Explopre all Facility') }}</a>
                    </div>
                    <div class="left-triangle">
                    </div>
                </div>
            </div>
            <div class="services-right-part">
                <div class="row">
                    @if (count($services) > 0)
                        <?php $i = 0; ?>
                        @foreach ($services as $s)
                            <div class="col-md-4 col-sm-6">
                                @if ($i % 2 == 0)
                                    <div class="services-part-box services-part1-box">
                                    @else
                                        <div class="services-part-box services-part2-box">
                                @endif
                                <img src="{{ asset('public/upload/service') . '/' . $s->icon }}">
                                <div class="text-detail-box">
                                    <h4>{{ $s->name }}</h4>
                                    <p>{{ $s->description }}</p>
                                </div>
                            </div>
                </div>
                <?php $i++; ?>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    </div>
</div> --}}



    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style type="text/css">
        .owl-nav button {
            position: absolute;
            top: 50%;
            background-color: #e7d045;
            color: #fff;
            margin: 0;
            transition: all 0.3s ease-in-out;
        }

        .owl-nav button.owl-prev {
            left: 0;
        }

        .owl-nav button.owl-next {
            right: 0;
        }

        .owl-dots {
            text-align: center;
            padding-top: 15px;
        }

        .owl-dots button.owl-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            background: #00be9c;
            margin: 0 3px;
        }

        .owl-dots button.owl-dot.active {
            background-color: #e7d045;
        }

        .owl-dots button.owl-dot:focus {
            outline: none;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.38) !important;
        }

        .owl-nav button:focus {
            outline: none;
        }

        .item {
            text-align: center;
        }

        .card {
            box-shadow: 0 0 9px #c1c1c1;
            border-radius: 5px;
        }

        .card-body {
            padding: 10px 20px 8px 20px;
            text-align: left;
        }

        .card-body h5 {
            font-weight: 600;
        }

        .card-img-top {
            height: 179px;
            object-fit: cover;
            border-radius: 5px 5px 0px 0px;
        }

        @media only screen and (min-device-width: 200px) and (max-device-width: 1000px) {
            .scanqr {
                width: 30% !important;
            }
        }
    </style>


    <section>
        <div class="container pt-2 pb-5">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="p-3" style="background:#00be9c;">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-map-marker text-white" aria-hidden="true" style="font-size:45px"></i>
                            </div>
                            <div class="col-10">
                                <p class="text-white m-0" style="font-size:12px">Find From City</p>
                                <select style="width: 100%; border: 0px; padding: 5px;" name="city_id" class="city_id select2">
                                    <option selected>All City</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-12">
                    <div class="p-3" style="background:#00be9c;">
                        <div class="row">
                            <div class="col-2 pt-2">
                                <i class="fa fa-plus-square text-white" aria-hidden="true" style="font-size:35px"></i>
                            </div>
                            <div class="col-10">
                                <p class="text-white m-0" style="font-size:12px">Hospital / Clinic</p>
                                <select style="width: 100%; border: 0px; padding: 5px;" name="hospital_id" class="hospital_id select2">
                                    <option selected disabled>Select Hospital</option>
                                    @foreach($hospitals as $hospital)
                                        <option value="{{ asset('hospital/'.$hospital->slug) }}">{{ $hospital->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-12">
                    <div class="p-3" style="background:#00be9c;">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-user-md text-white" aria-hidden="true" style="font-size:45px"></i>
                            </div>
                            <div class="col-10">
                                <p class="text-white m-0" style="font-size:12px">Select Department</p>
                                <select style="width: 100%; border: 0px; padding: 5px;" name="department_id" class="department_id select2">
                                    <option value="#">Select Department</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-12">
                    <div class="p-3" style="background:#00be9c;">
                        <div class="row">
                            <div class="col-2 pt-2">
                                <i class="fa fa-medkit text-white" aria-hidden="true" style="font-size:35px"></i>
                            </div>
                            <div class="col-10">
                                <p class="text-white m-0" style="font-size:10px"></p>
                                <button style="background-color: #00be9c;border-color:#00be9c;margin-top:5px;font-size:14px;" type="button" class="btn btn-success">Book Appointment Now</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>

    <section style="background: #e9eaeb9e;">

        <div class="container" style="padding-top: 80px;">
            <div class="row">
                <div class="col-lg-6 col-12" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Book Appointment at Hospital</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2">
                    <a href="" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All Hospital &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="container pb-3">
            <div class="owl-carousel loop5 pb-5 pt-4">

                @foreach($hospitals as $hospital)
                <div class="item">
                    <div class="card" style="width: 23rem;box-shadow: none; border:0px">
                        <img class="card-img-top" src="{{ asset('public'.$hospital->logo) }}" alt="Card image cap" style="    height: 215px;">
                        <div class="card-body" style="padding: 10px">
                            <h5>{{ $hospital->name }}</h5>
                            <p class="card-text pb-2">{{ $hospital->sub_title }} </p>
                            <p><a href="{{ route('hospital.details',[$hospital->slug]) }}" style="background: #00be9c; padding: 7px 10px; border: 0px; color:white;">Book
                                    Appointment &nbsp;<i class="fa fa-angle-right " aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <script type="text/javascript">
                $(".loop5").owlCarousel({
                    autoplay: true,
                    lazyLoad: true,
                    loop: true,
                    margin: 20,
                    /*
                      animateOut: 'fadeOut',
                      animateIn: 'fadeIn',
                      */
                    responsiveClass: true,
                    autoHeight: true,
                    autoplayTimeout: 7000,
                    smartSpeed: 800,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },

                        600: {
                            items: 2
                        },

                        1024: {
                            items: 3
                        },

                        1366: {
                            items: 3
                        }
                    }
                });
            </script>
        </div>
    </section>

    <section>
        <div class="container" style="padding-top: 80px;">
            <div class="row">
                <div class="col-lg-6 col-12" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Meet Our Doctor</h2>
                    <p class="m-0">Experienced medical practitioners available for appointment.</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2">
                    <a href="" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All Doctor &nbsp;<i
                            class="fa fa-angle-right " aria-hidden="true"></i></a>
                </div>

            </div>
        </div>

        <div class="container pb-3">
            <div class="owl-carousel loop2 pb-5 pt-4">

                @foreach($doctors as $doctor)
                <div class="item">

                    <div class="card" style="width: 17rem;box-shadow: none; border:0px">
                        <img class="card-img-top"  src="{{ asset('public/upload/doctor/'.$doctor->image) }}"  alt="Card image cap">
                        <div class="card-body" style="    border: 0px;     padding: 10px 4px 8px 0px;">
                            <h5>{{ $doctor->name }}</h5>
                            <p class="card-text pb-2">{{ $doctor->service }} </p>
                            <p><a href="" style="padding: 7px 10px; border: 2px solid #c7c7c7;">Book
                                    Appointment <i class="fa fa-hand-o-left " aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <script type="text/javascript">
                $(".loop2").owlCarousel({
                    autoplay: true,
                    lazyLoad: true,
                    loop: true,
                    margin: 20,
                    /*
                      animateOut: 'fadeOut',
                      animateIn: 'fadeIn',
                      */
                    responsiveClass: true,
                    autoHeight: true,
                    autoplayTimeout: 7000,
                    smartSpeed: 800,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },

                        600: {
                            items: 2
                        },

                        1024: {
                            items: 4
                        },

                        1366: {
                            items: 4
                        }
                    }
                });
            </script>
        </div>
    </section>

    <section>
        <div class="container" style="padding-top: 80px;">
            <div class="row">
                <div class="col-lg-6 col-12" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Our Department</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2">
                    <a href="" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All &nbsp;<i
                            class="fa fa-angle-right " aria-hidden="true"></i></a>
                </div>

            </div>
        </div>

        <div class="container pb-3">
            <div class="owl-carousel loop3  pt-4">

                @foreach($departments as $department)
                <div class="item">
                    <div class="card" style="width: 17rem;box-shadow: none; border:0px">
                        <img class="card-img-top"
                            src="{{ asset('public/upload/department/'.$department->image) }}"
                            alt="Card image cap">
                        <div class="card-body text-center"
                            style="  padding: 10px 20px 14px 20px;  border: 0px;      background: #00be9c; ">
                            <h5 class="text-white">{{ $department->name }}</h5>
                            <p class="card-text pb-2 text-white" style="    font-size: 13px;">
                                {{ $department->description }}
                            </p>
                            <p style="position: absolute; left: 31%;"><a href=""
                                    style="        border: 1px solid #ffffff;    background: #0f4a86;    padding: 7px 22px; font-size: 13px;    border-radius: 12px;    color: white;"><i
                                        class="fa fa-angle-right " aria-hidden="true"></i> View </a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <script type="text/javascript">
                $(".loop3").owlCarousel({
                    autoplay: true,
                    lazyLoad: true,
                    loop: true,
                    margin: 20,
                    /*
                      animateOut: 'fadeOut',
                      animateIn: 'fadeIn',
                      */
                    responsiveClass: true,
                    autoHeight: true,
                    autoplayTimeout: 7000,
                    smartSpeed: 800,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },

                        600: {
                            items: 2
                        },

                        1024: {
                            items: 4
                        },

                        1366: {
                            items: 4
                        }
                    }
                });
            </script>
        </div>
    </section>



    {{-- <div class="container pt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-6 col-lg-3 mix ux ui">
                    <div class="collection-item">
                        <div class="collection-top">
                            <img src="{{ asset('public' . $product->photo) }}" alt="Collection">


                        </div>
                        <div class="collection-bottom">
                            <h3>{{ $product->name }}</h3>

                            <div class="row">
                                <div class="col-5 pt-1"><span style="color:red">RS.{{ $product->price }}</span></div>
                                <div class="col-7">

                                    <a class="addtocart" href="{{ url('/product_details/' . $product->slug) }}">
                                        <i class="fas fa-shopping-cart"></i>
                                        Add to Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div> --}}




    {{-- <div class="doctorl-main-box">
        <div class="container">
            <div class="global-heading">
                <h2>{{ __('messages.Meet Our Doctors') }}</h2>
                <p>{{ __('messages.Talent wins games, but teamwork and intelligence win championships') }}</p>
            </div>
            <div class="row">
                @if (count($doctorls) > 0)
                    @foreach ($doctorls as $d)
                        <a href="{{ url('doctordetails/') . '/' . $d->user_id }}">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="doctorl-part-box">
                                    <?php
                                    if ($d->image) {
                                        $image = asset('public/upload/doctor') . '/' . $d->image;
                                    } else {
                                        $image = asset('public/upload/profile/profile.png');
                                    }
                                    ?>
                                    <div class="doctorl-dp-img doctorl-dp-img-1"
                                        style="background-image: url('<?= $image ?>')"></div>
                                    <div class="doctorl-part-detail">
                                        <h4>{{ ucwords(strtolower($d->name)) }}</h4>
                                        <p>{{ substr(trim($d->about_us), 0, 135) }}</p>
                                    </div>
                                    <div class="icons-images">
                                        <span class="facebook-doctorl">
                                            <a href="{{ isset($d->facebook_id) ? $d->facebook_id : '' }}"
                                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        </span>
                                        <span class="twitter-doctorl">
                                            <a href="{{ isset($d->twitter_id) ? $d->twitter_id : '' }}"
                                                target="_blank"><i class="fab fa-twitter"></i></a>
                                        </span>
                                        <span class="gp-doctorl">
                                            <a href="{{ isset($d->google_id) ? $d->google_id : '' }}"
                                                target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                        </span>
                                        <span class="instagram-doctorl">
                                            <a href="{{ isset($d->instagram_id) ? $d->instagram_id : '' }}"
                                                target="_blank"><img
                                                    src="{{ asset('public/front/img/instagram.png') }}"></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div> --}}

    <section>
        <div class="container" style="padding-top: 80px;">
            <div class="row">
                <div class="col-lg-12 col-12" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Medicine</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                </div>

            </div>
            <div class="row pt-5 pb-5">
                <div class="col-lg-6 col-sm-12">
                    <div class="p-3" style="background:#00be9c;border-radius:10px;">
                        <div class="row">
                            <div class="col-7 p-3">
                                <h3 class="text-white">Become a Seller</h3>
                                <p class="text-white" style="font-size:14px">Diagnostic Services Professional Consultation
                                    Tooth Diagnostic Services Professional Consultation Tooth</p>
                                <button class="become_seller"
                                    style="background: white; border: 0px; border-radius: 14px;  padding: 2px 20px;">Register
                                    Now</button>
                            </div>
                            <div class="col-5">
                                <img src="{{ asset('public/front/ld.PNG') }}" width="100%"
                                    style="border-radius:10px; border:5px solid white;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="p-3" style="background:#0f4a86;border-radius:10px;">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{ asset('public/front/ld.PNG') }}" width="100%"
                                    style="border-radius:10px; border:5px solid white;">
                            </div>
                            <div class="col-7 p-3 text-right">
                                <h3 class="text-white">Upload Prescription</h3>
                                <p class="text-white" style="font-size:14px">Diagnostic Services Professional Consultation Tooth Diagnostic Services Professional Consultation Tooth</p>
                                <button class="priscription_upload" style="background: white; border: 0px; border-radius: 14px;  padding: 2px 20px;">Upload Now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pb-4">
                    <hr>
                    <h4><b>Pharmaceutical Drug, Medicine, Medical Care & Consultation</b></h4>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 col-12">
                            <div
                                style="background-image: url('{{ asset('public/front/ld.PNG') }}'); background-position: center center;      background-size: cover;   background-repeat: no-repeat;">
                                <div
                                    style="    padding: 230px 24px 20px;background: linear-gradient(0deg, rgba(0,0,0,1) 1%, rgba(8,7,104,0) 100%);">
                                    <p class="text-white m-0" style="font-size:16px">Diagnostic Services Professional
                                        Consultation Tooth Diagnostic Services Professional Consultation Tooth</p>
                                    <button class="mt-2"
                                        style="background: #00be9c; border: 0px; color: white; border-radius: 4px; padding: 2px 20px;">View
                                        All</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <div class="row mr-1 ml-1">


                                <div class="col-lg-4  col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 pb-5 mb-5">

                    <h4><b>Pharmaceutical Drug, Medicine, Medical Care & Consultation</b></h4>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 col-12">
                            <div
                                style="background-image: url('{{ asset('public/front/ld.PNG') }}'); background-position: center center;      background-size: cover;   background-repeat: no-repeat;">
                                <div
                                    style="    padding: 230px 24px 20px;background: linear-gradient(0deg, rgba(0,0,0,1) 1%, rgba(8,7,104,0) 100%);">
                                    <p class="text-white m-0" style="font-size:16px">Diagnostic Services Professional
                                        Consultation Tooth Diagnostic Services Professional Consultation Tooth</p>
                                    <button class="mt-2"
                                        style="background: #00be9c; border: 0px; color: white; border-radius: 4px; padding: 2px 20px;">View
                                        All</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <div class="row mr-1 ml-1">


                                <div class="col-lg-4  col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-lg-4 col-12 p-1">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center"> <img
                                                    src="{{ asset('public/front/ld.PNG') }}" width="70%"
                                                    style="border-radius:10px; margin-top: 20%;"></div>
                                            <div class="col-8 p-0">
                                                <p class="m-0" style="font-size:14px;"><b>Pharma Drug</b></p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                                <p class="m-0" style="font-size:14px;">Diagnostic</p>
                                                <p class="m-0" style="font-size:14px;">Services Professional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5"
        style="background-image: url('{{ asset('public/front/bg.jpg') }}'); background-position: center center;     background-repeat: no-repeat;">

        <div class="container-fluid"
            style="background-image: radial-gradient(at top right, #43848dc7 0%, #43848df0 100%);">
            <div class="row pt-5">
                <div class="col-lg-1 c0l-sm-12"></div>
                <div class="col-lg-5 c0l-sm-12 pt-5">
                    <h1 class="text-white"><b>Download Our App</b></h1><br>
                    <p class="text-white">Conveniently transform frictionless mindshare after orthogonal manufactured
                        products.</p>
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <img src="{{ asset('public/front/scan.png') }}" class="img-fluid scanqr"
                                style="border:5px solid black; width:70%">

                        </div>
                        <div class="col-lg-8 col-sm-12">
                            <h2 class="text-white"><b>Scan here to <br>Download our App</b></h2>
                            <hr style="background:white; height:3px;">
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 c0l-sm-12 pt-5">

                    <img src="{{ asset('public/front/hand-app.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-1 c0l-sm-12"></div>
            </div>
        </div>
    </section>




    <div class="pricing-main-box">
        <div class="container">
            <div class="global-heading">
                <h2>{{ __('messages.Help Package') }}</h2>
                <p>{{ __('messages.The easiest way to keep life on track') }}</p>
            </div>
            <div class="pricing-part-main-box">
                <div class="row">
                    @foreach ($package as $p)
                        <div class="col-md-4">
                            <div class="pricing-all-content">
                                <div class="pricing-part-box">
                                    <h3>{{ $p->name }}</h3>
                                    <div class="pricing-cost">
                                        <h3>{{ Session::get('currency') }}</h3>
                                        <span>{{ $p->price }}</span>
                                        <h6>/ session</h6>
                                    </div>
                                    <p>{{ $p->description }}</p>
                                </div>
                                <div class="pricing-part-btn">
                                    <a class="btn"
                                        href="{{ url('subscription') . '/' . $p->id }}">{{ __('messages.Order now') }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="numbers-counter-main-box">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="{{ asset('public/front/img/n1.png') }}">
                            <div class="counter-value" data-count="10200">
                                {{ $setting->happy_client }}
                            </div>
                            <div class="counter-name">
                                <p>{{ __('messages.Happy people') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="{{ asset('public/front/img/n2.png') }}">
                            <div class="counter-value" data-count="700">
                                {{ $setting->surgery_complete }}
                            </div>
                            <div class="counter-name">
                                <p>{{ __('messages.SURGERY COMPLETED') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="{{ asset('public/front/img/n3.png') }}">
                            <div class="counter-value" data-count="189">
                                {{ $setting->expert_doctor }}
                            </div>
                            <div class="counter-name">
                                <p>{{ __('messages.Expert doctors') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="{{ asset('public/front/img/n4.png') }}">
                            <div class="counter-value" data-count="11">
                                {{ $setting->worldwide_branch }}
                            </div>
                            <div class="counter-name">
                                <p>{{ __('messages.World wide branch') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Blogs Section --}}

    <div class="container">
        <div class="global-heading">
            <h2>Blog</h2>
            <p>{{ __('messages.The easiest way to keep life on track') }}</p>
        </div>
    </div>

    <div class="container">
        <div id="carousel" class="owl-carousel">
            @foreach ($blogs as $blog)
                <div class="item">
                    <center>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('public' . $blog->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5>{{ $blog->title }}</h5>
                                <p class="card-text">{!! substr($blog->description, 0, 50) !!}...</p>
                                <p><a href="">Read More <i class="fa fa-hand-o-left " aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </center>
                </div>
            @endforeach
        </div>



        <script type="text/javascript">
            $("#carousel").owlCarousel({
                autoplay: true,
                lazyLoad: true,
                loop: true,
                margin: 20,
                /*
                  animateOut: 'fadeOut',
                  animateIn: 'fadeIn',
                  */
                responsiveClass: true,
                autoHeight: true,
                autoplayTimeout: 7000,
                smartSpeed: 800,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },

                    600: {
                        items: 2
                    },

                    1024: {
                        items: 3
                    },

                    1366: {
                        items: 3
                    }
                }
            });
        </script>
    </div>


    {{-- Blogs Section End --}}

    <div class="testimonial-main-box">
        <div class="container">
            <div class="global-heading">
                <h2>{{ __('messages.Patient Reviews') }}</h2>
                <p>{{ __('messages.Feedback is the breakfast of champions') }}</p>
            </div>
            <div class="testimonial-part-main-box">
                <div class="owl-carousel testimonial-carousel">
                    @if ($review)
                        @foreach ($review as $r)
                            <div class="single-testimonial">
                                <div class="testimonial-part-box">
                                    <div class="testimonial-inner-images">
                                        <div class="col-md-3 testimage">
                                            <?php
                                            if ($r->users->profile_pic != '') {
                                                $image = asset('public/upload/profile') . '/' . $r->users->profile_pic;
                                            } elseif (isset($r->doctors) && isset($r->doctors->$image)) {
                                                $image = asset('public/upload/doctor') . '/' . $r->doctors->image;
                                            } else {
                                                $image = asset('public/upload/profile/profile.png');
                                            }
                                            ?>
                                            <img src="{{ $image }}" class="testimonial-profile-img">
                                        </div>
                                        <div class="col-md-9 testtext">
                                            <p class="testip">{{ substr($r->review, 0, 165) }}</p>
                                            <span class="testimonialspan"></span>
                                            @if (isset($r->users->name))
                                                <h3 class="testimonialh">- {{ $r->users->name }}</h3>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    <section style="background: #f7f7f7;">


        <div class="container" style="padding-top: 80px;">
            <div class="global-heading">
                <h2>Trusted By Company</h2>
                <p>Diagnostic Services Professional Consultation Tooth Implants<br> Surgical Extractions Teeth Whitening</p>
            </div>
        </div>

        <div class="container pb-3">
            <div id="carousel" class="owl-carousel loop pb-5 pt-4">


                <div class="item">
                    <center>

                        <img src="{{ asset('public/front/lll.png') }}" alt="image" width="95%">


                    </center>
                </div>


            </div>



            <script type="text/javascript">
                $(".loop").owlCarousel({
                    autoplay: true,
                    lazyLoad: true,
                    loop: true,
                    margin: 20,
                    /*
                      animateOut: 'fadeOut',
                      animateIn: 'fadeIn',
                      */
                    responsiveClass: true,
                    autoHeight: true,
                    autoplayTimeout: 7000,
                    smartSpeed: 800,
                    nav: true,
                    responsive: {
                        0: {
                            items: 2
                        },

                        600: {
                            items: 4
                        },

                        1024: {
                            items: 5
                        },

                        1366: {
                            items: 5
                        }
                    }
                });
            </script>
        </div>

    </section>

    <div id="sellerRegisterModal" class="modal fade bd-example-modal-lg" style="margin-top: 70px;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <form action="{{ asset('applied-seller') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-header" style="margin-top: 230px;">
                <h5 class="modal-title">Become a Seller</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    @csrf
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Cities</label>
                            <select name="city_ids[]" class="select2 form-control" multiple>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Profile Image</label>
                            <input type="file" name="image_path" id="preview_img" required />
                            <div id="viewLogo"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Register Now</button>
            </div>
        </form>
          </div>
        </div>
    </div>

    <div id="PrescriptionModal" class="modal fade bd-example-modal-lg" style="margin-top: 70px;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
                <form action="{{ asset('upload-prescription') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-header" style="margin-top: 140px;">
                        <h5 class="modal-title">Upload Prescription</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">

                                @if(auth()->user())
                                @else
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Message</label>
                                        <input type="text" name="message" class="form-control">
                                    </div>
                                @endif
                                    <div class="form-group">
                                        <label>Document</label>
                                        <input type="file" name="path" id="preview_img2" required />
                                        <div id="viewLogo2"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Upload Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('footer')
<script src="{{ asset('public/select2/js/select2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    
    $('.select2').select2();

    @if(session()->has('message'))
        toastr.success("{{ session()->get('message') }}");
    @endif

    $(document).on('change','.city_id',function(){
        let id = $(this).val();
        let url = "{{ asset('/gethospitals') }}";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id":id,
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                   $('.hospital_id').empty();
                   $('.hospital_id').append('<option selected disabled>Select Hospital</option>');
                   $.each(data.data,function(k,v){
                        $('.hospital_id').append('<option value="'+v.id+'">'+v.name+'</option>');
                   });
                }else{
                   console.log('error');
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });

    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                    $('#viewLogo').html('<img src="'+e.target.result+'" width="200" height="200"/>');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function filePreview2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                    $('#viewLogo2').html('<img src="'+e.target.result+'" width="200" height="200"/>');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#preview_img').on('change',function(){
        filePreview(this);
    });

    $('#preview_img2').on('change',function(){
        filePreview2(this);
    });

    $(document).on('change','.hospital_id',function(){
        let url = $(this).val();
        window.location.href = url;
    });

    $(document).on('change','.department_id',function(){
        let id = $(this).val();
        window.location.href = "{{ asset('find-doctor?department_id=') }}"+id;
    });

    $(document).on('click','.become_seller',function(){
        $('#sellerRegisterModal').modal('show');
    });
    $(document).on('click','.priscription_upload',function(){
        $('#PrescriptionModal').modal('show');
    });

</script>
@endsection