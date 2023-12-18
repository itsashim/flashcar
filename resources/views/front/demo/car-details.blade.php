@extends('front.layout.front')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .pic2 img {
            width: 180px;

        }

        .Font {
            display: flex;
            gap: 30px;
            font-size: 30px;
        }


        .box {
            width: 100%;
            background-color: white;


        }

        .F {
            margin-left: 15px;

        }

        .F input {
            margin-left: 10px;

        }

        .T1 h6 {
            padding-top: 15px;
            color: #90A3BF;
            font-family: Plus Jakarta Sans;
        }

        .image img {
            border-radius: 100%;
            width: 100px;
        }


        .T2 h6 {
            padding-top: 15px;
            color: #90A3BF;
            font-family: Plus Jakarta Sans;
        }


        .T3 h6 {
            padding-top: 15px;
            color: #90A3BF;
            font-family: Plus Jakarta Sans;
        }

        .Range h6 {
            color: slategray;

        }

        .Range input {
            width: 95%;
        }

        .F label {
            color: black;
            font-weight: 500;
            line-height: 50px;
        }

        .F input {
            margin: 4px 0 0;
            line-height: normal;

        }

        .T1 input {
            margin-left: 10px;
        }

        .pic3 img {
            width: 100%;
            max-width: 500px;
        }

        .parent1 .Heading {
            border-radius: 15px;
            background-color: rgba(248, 223, 32);
        }

        .parent1 .Heading div {
            padding: 25px;
            aspect-ratio: 4/2;
        }

        .parent1 .Heading h3 {
            font-weight: 600;
        }

        .parent1 .Heading p {
            font-weight: 500;
        }

        .parent2 .Heading2 {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            padding: 35px;
            border-radius: 15px;
            height: 100%;
        }

        .Heading2 h3 {
            color: var(--secondary-500, #1A202C);
            font-family: Plus Jakarta Sans;
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
            /* 62.5px */
            letter-spacing: -1.25px;
        }

        .Heading2 p {
            color: #596780;
            font-family: Plus Jakarta Sans;
            font-size: 17px;
            font-style: normal;
            font-weight: 400;
            line-height: 200%;
            /* 52.083px */
            letter-spacing: -0.521px;
        }

        .car_attr div {
            width: 40%;
            min-width: 200px;
            justify-content: space-between;
            margin: 0 auto;
        }

        .car_attr p,
        .car_attr label {
            color: #596780;
            font-size: 17px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            /* 39.063px */
            letter-spacing: -0.521px;
            margin-bottom: 5px;
        }

        .car_attr p {
            color: #E9B824;
        }

        .rating {
            color: #596780;
            font-family: Plus Jakarta Sans;
            font-size: 18.229px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            letter-spacing: 0.365px;
        }

        .rating img {
            width: 20px;
            height: 20px;
        }

        .pics {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            width: 100%;
            gap: 15px;
            margin-top: 20px;
            position: relative;
            cursor: pointer;
        }

        .pic:nth-child(1) {
            background-color: #F8DE22;
            display: flex;
            align-items: center;
            padding: 5px;
        }

        .pic:nth-child(4) {
            background-color: #222;
            opacity: 0.8;
            background: linear-gradient(180deg, #000 -15%, rgba(0, 0, 0, 0.00) 48.35%, rgba(0, 0, 0, 0.62) 100%);
        }

        .pic:nth-child(4)::before {
            content: "+3";
            color: white;
            font-size: 2.3rem;
            font-weight: 600;
            position: absolute;
        }


        .pic img {
            width: 100%;
            max-width: 192.708px;
            /* height: 161.458px; */
        }

        .pic {
            width: 100%;
            max-width: 250px;
            border: 1px solid #a6a6a6;
            border-radius: 8px;
            background: white;
            aspect-ratio: 3/2;
            padding: 0 10px;
        }



        .B {
            justify-content: space-between;
            margin-top: 20px;
        }

        .B .btn {
            border-radius: 5.208px;
            background: #F8DE22;
            width: 120.292px;
            text-align: center;
            gap: 10.417px;
            flex-shrink: 0;
            color: white;
        }


        .B h5 {
            color: #1A202C;
            font-family: Plus Jakarta Sans;
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: 70%;
            letter-spacing: -1.25px;
        }

        .B span {
            font-size: 17px;
            color: #E9B824;
            font-weight: 500;
        }

        .B .line_through {
            text-decoration: line-through;
        }

        .k {
            border: 2px solid;
            width: 100%;
        }

        .L {
            padding: 64px;

        }

        .R {
            font-weight: 600;
            margin-left: 20px;
        }

        .R h6 {
            color: #f8de22;
        }

        .parent1 {
            border-radius: 30px;
            justify-content: center;
            gap: 54px;
            width: 100%;

        }

        .parent1 a {
            color: slategrey;
        }


        .parent2 {
            border-radius: 30px;
            justify-content: center;
            gap: 54px;
            width: 100%;
            height: 100%;
        }

        .parent2 a {
            color: slategray;
        }




        .Bot a {
            text-decoration: none;
            color: slategrey;

        }

        .Bot {
            gap: 50px;
            line-height: 40px;
            margin-top: 20px;

        }

        .car_list_sec .view {
            color: #F8DE22 !important;
            text-align: center;
            font-size: 17px;
            font-style: normal;
            font-weight: 600;
            line-height: 150%;
            /* 31.25px */
            letter-spacing: -0.417px;
        }

        .flatpickr-day {
            color: #36c336;
            /* color: #fff; */
        }

        .flatpickr-disabled {
            color: red !important;
            /* color: #fff !important; */
        }
        

        /* Plan */
        .plan{
        border: 1.267px solid #000;
        display: flex;
        border-radius: 12.669px;
        max-width: 160px;
        width: 100%;
        overflow: hidden;
    }
    
    
    
    .plan:nth-child(1){
           box-shadow: 0px 0px 7.601px 0px rgba(47, 128, 237, 0.25);
        border: 1.267px solid #FFE500;
        
        }
        
       .plan:nth-child(1) .icon{
           background: rgba(229, 206, 0, 0.06);
       }

        .plan .icon{
        background: #F7F7F7;
        padding: 0.6rem;
        }
        .plan h4{
         font-size: 0.8rem;
        }
        .plan p{
        font-size: 0.7rem;
        }
        
        @media(max-width: 767px){
            .parent1 .Heading div{
                padding: 0;
            }
            .parent1 .Heading p{
                display: none;
            }
            .parent1 .Heading h3{
                display: none;
            }
            .pics{
            grid-template-columns: 1fr 1fr 1fr;
            }
            .parent2 .Heading2{
             padding: 20px;
            }
        }
    </style>
@endsection

@section('content')

    <body>
        <section class="main_sec row justify-content-center" style="width: 100%">

            <div class="col-xl-11 col-lg-12  col-md-10">
                <div class="rent">
                    <!-- Review Car Start -->
                    <div class=" row mb-5">
                        <div class="col-lg-6 col-md-12 col-sm-12 p-2">
                            <div class="parent1">
                                <div class="Heading">
                                    <div>
                                        <h3 class="text-white">
                                            Sports car with the best<br />
                                            design and acceleration
                                        </h3>
                                        <p class="text-white">
                                            Safety and comfort while driving a futuristic<br />
                                            and elegant sports car
                                        </p>
                                        <div class="pic3 justify-content-center align-items-center d-flex">
                                            <img id="main-product-image"
                                                src="{{ asset('public/' . $car->carGalleries[0]->image_path) }}"
                                                width="50%" />
                                        </div>
                                    </div>
                                </div>

                                <div class="pics">

                                    @foreach ($car->carGalleries as $carGallery)
                                        <div class="pic d-flex align-items-center justify-content-center">
                                            <img class="img_select"
                                                src="{{ asset('public/' . $carGallery->image_path) }}" />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 p-2">
                            <div class="parent2">
                                <div class="Heading2">
                                    <div class="d-flex justify-content-between mb-4">
                                        <div>
                                            <h3>{{ $car->name }}</h3>
                                            <div class="rating d-flex align-items-end gap-1">
                                                <img src="{{ asset('public/new-images/review-list/full-star.svg') }}"
                                                    alt="" />
                                                <img src="{{ asset('public/new-images/review-list/full-star.svg') }}"
                                                    alt="" />
                                                <img src="{{ asset('public/new-images/review-list/full-star.svg') }}"
                                                    alt="" />
                                                <img src="{{ asset('public/new-images/review-list/full-star.svg') }}"
                                                    alt="" />
                                                <img src="{{ asset('public/new-images/review-list/full-star.svg') }}"
                                                    alt="" />
                                                <span>440+ Reviewer</span>
                                            </div>
                                        </div>
                                        <div><img class="add_wishlist" data-carid="{{ $car->id }}"
                                                src="{{ asset('public/new-images/review-list/null-heart.svg') }}"
                                                alt="" /></div>
                                    </div>

                                    <p>
                                        {{ $car->about_us }}
                                    </p>

                                    <div class="car_attr d-flex flex-wrap justify-content-between">
                                        <div class="d-flex">
                                            <p>Type Car</p>
                                            <label for="car-type">{{ $car->department->name }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Power</p>
                                            <label for="car-type">{{ $car->power }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Max Speed</p>
                                            <label for="car-type">{{ $car->max_speed }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Acceleration</p>
                                            <label for="car-type">{{ $car->acceleration }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Door</p>
                                            <label for="car-type">{{ $car->door }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Seat</p>
                                            <label for="car-type">{{ $car->seat }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Luggage</p>
                                            <label for="car-type">{{ $car->luggage }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Transmission</p>
                                            <label for="car-type">{{ $car->transmission }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>AC</p>
                                            <label for="car-type">{{ $car->ac }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Car Years</p>
                                            <label for="car-type">{{ $car->car_years }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Plate Number</p>
                                            <label for="car-type">{{ $car->plate_number }}</label>
                                        </div>
                                        <div class="d-flex">
                                            <p>Fuel Capacity</p>
                                            <label for="car-type">{{ $car->fuel_capacity }}</label>
                                        </div>
                                    </div>

                                    <div class="B d-flex align-items-center mt-5 flex-wrap">
                                        {{-- <div style="width: 75%;"> --}}
                                        <div class="col-12 col-md-8">
                                            <div class="pb-3">
                                                <table class="table table-striped table-bordered d-none d-md-block">
                                                    <thead>
                                                        <tr>
                                                            <th>Daily Fee</th>
                                                            <th>
                                                                {{ session()->get('currency_symbol') }}
                                                                {{ convertCurrency($car->daily_fee, 'USD', session('currency_symbol')) }}
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>Weekly Fee</th>
                                                            <th>
                                                                {{ session()->get('currency_symbol') }}
                                                                {{ convertCurrency($car->weekly_fee, 'USD', session('currency_symbol')) }}
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>Monthly Fee</th>
                                                            <th>
                                                                {{ session()->get('currency_symbol') }}
                                                                {{ convertCurrency($car->monthly_fee, 'USD', session('currency_symbol')) }}
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <!--  -->

                                            <div class="mt-4 d-block d-md-none my-4">
                                                <h3>Plan</h3>
                                                <div class="d-flex flex-wrap gap-2">
                                                    <div class="plan">
                                                        <div class="icon">
                                                            <img src="{{asset('public/new-images/time.svg')}}" alt="">
                                                            <span class="d-block">{{ session()->get('currency_symbol') }}
                                                                        {{ convertCurrency($car->daily_fee, 'USD', session('currency_symbol')) }}</span>
                                                        </div>
                                                        <div class="p-2">
                                                            <h4 class="mb-0">Hourly Rent</h4>
                                                            <p class="mb-0">Best for business
                                                            appointments</p>
                                                        </div>
                                                    </div>
                                                    <div class="plan">
                                                        <div class="icon">
                                                            <img src="{{asset('public/new-images/Calendar.svg')}}" alt="">
                                                            <span class="d-block">  {{ session()->get('currency_symbol') }}
                                                                        {{ convertCurrency($car->weekly_fee, 'USD', session('currency_symbol')) }}</span>
                                                        </div>
                                                        <div class="p-2">
                                                            <h4 class="mb-0">Weekly Rent</h4>
                                                            <p class="mb-0">Best for travel</p>
                                                        </div>
                                                    </div>
                                                    <div class="plan">
                                                        <div class="icon">
                                                            <img src="{{asset('public/new-images/Calendar.svg')}}" alt="">
                                                            <span class="d-block">  {{ session()->get('currency_symbol') }}
                                                                        {{ convertCurrency($car->monthly_fee, 'USD', session('currency_symbol')) }}</span>
                                                        </div>
                                                        <div class="p-2">
                                                            <h4 class="mb-0">Montly Rent</h4>
                                                            <p class="mb-0">Best for travel</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                @php
                                                    if(request()->startDate && request()->endDate){
                                                        $startDate = \Carbon\Carbon::createFromFormat('Y-m-d', request()->startDate)->format('M j, Y');
                                                        $endDate = \Carbon\Carbon::createFromFormat('Y-m-d', request()->endDate)->format('M j, Y');
                                                    }
                                                @endphp
                                                <input type="text" id="dateRangePicker"
                                                    placeholder="Select Start and End Date" class="form-control">
                                            </div>
                                        </div>
                                        <span class="col-4 d-flex justify-content-center" id="availability"></span>
                                        <button data-carid="{{ $car->id }}" type="button" class="btn rentNow">Rent
                                            Now</button>
                                    </div>

                               

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- REview Car End -->

                    <section class="car_list_sec">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="view">Recent Car</p>
                            <p class="view">View All</p>
                        </div>
                        <div class="d-flex flex-wrap justify-content-start gap-3">
                            @foreach ($latestCars as $doctor)
                                <div class="cardss">
                                    <h6>{{ $doctor->name }}</h6>
                                    <p>{{ $doctor->department->name }}</p>

                                    <div class="img d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('public/' . $doctor->carGalleries[0]->image_path) }}"
                                            class="" width="220" alt="car">
                                    </div>
                                    <div class="d-flex justify-content-between text-muted mt-5">
                                        <a href="#">
                                            <p><i class="fa-solid fa-gas-pump me-1"></i>{{ $doctor->fuel_capacity }} L
                                            </p>
                                        </a>
                                        <a href="#">
                                            <p><i class="fa-regular fa-circle-dot me-1 "></i>{{ $doctor->power }}</p>
                                        </a>
                                        <a href="#">
                                            <p><i class="fa-solid fa-user-group me-1"></i>{{ $doctor->max_speed }}</p>
                                        </a>
                                    </div>
                                    <div class="price d-flex justify-content-between align-items-center mt-3">
                                        <div class="d-flex">
                                            <h4 class="m-0">{{ session()->get('currency_symbol') }} {{ convertCurrency($doctor->daily_fee, 'USD', session('currency_symbol')) }}/</h4>
                                            <p class="text-secondary m-0">day</p>
                                        </div>
                                        <a href="{{ route('cars.details', $doctor->id) }}">
                                            <button type="button">Rent Now</button>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </section>
        @php
        if(request()->startDate && request()->endDate){
            $startDate = \Carbon\Carbon::parse(request()->startDate);
            $endDate = \Carbon\Carbon::parse(request()->endDate);
            $diffInDays = $startDate->diffInDays($endDate);
        }
        @endphp
        <input type="hidden" id="durationType" value="{{ isset($diffInDays)?$diffInDays:null }}" />
        <input type="hidden" id="start_date" value="{{ request()->startDate }}" />
        <input type="hidden" id="end_date" value="{{ request()->endDate }}" />
    @endsection
    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
        <script>
            $(function() {

                var checkedIds = [];
                var checkedPersonsIds = [];

                var req_start_date = $('#start_date').val();
                var req_end_date = $('#end_date').val();

                function prepareData() {
                    let search_key = $('#search_key').val();
                    let price = $('#customRange1').val();
                    checkedIds = [];
                    $('.car_types:checked').each(function() {
                        checkedIds.push($(this).data('id'));
                    });

                    checkedPersonsIds = [];
                    $('.seat_capacity:checked').each(function() {
                        checkedPersonsIds.push($(this).data('capacity'));
                    });

                    $('#selectedValue').html(price);

                    let data = {
                        search_key: search_key,
                        price: price,
                        checkedIds: checkedIds,
                        checkedPersonsIds: checkedPersonsIds
                    };

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('carlist.filter') }}",
                        type: "POST",
                        data: data,
                        success: function(data) {
                            if (data.status == true) {
                                $('#carListView').html(data.data);
                            } else {
                                console.log(data.message);
                            }
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }

                // Handle checkbox change event
                $('.car_types,.seat_capacity, #customRange1').change(prepareData);

                $(document).on('click', '.img_select', function() {
                    let img = $(this).attr('src');
                    $('#main-product-image').attr('src', img);
                });

                $(document).on('click', '.rentNow', function() {
                    let id = $(this).data('carid');
                    let selectedDuration = $('#durationType').val();
                    let start_date = $('#start_date').val();
                    let end_date = $('#end_date').val();
                    if (!selectedDuration) {
                        toastr.error('Please Select Duration Type');
                        return;
                    } else {

                        if(selectedDuration >= 1 && selectedDuration <= 6){
                            selectedDuration = "Day";
                        }else if(selectedDuration >= 7 && selectedDuration<= 29){
                            selectedDuration = "Week";
                        }else{
                            selectedDuration = "Month";
                        }

                        window.location.href =
                        `{{ asset('billing') }}?car_id=${id}&duration_type=${selectedDuration}&start_date=${start_date}&end_date=${end_date}`;
                    }
                });

                $(document).on('click', '.add_wishlist', function() {
                    let product_id = $(this).data('carid');
                    let url = "{{ asset('add-to-wishlist') }}";
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: url,
                        type: "POST",
                        data: {
                            "product_id": product_id,
                        },
                        beforeSend: function() {
                            console.log('ajax fired');
                        },
                        success: function(data) {
                            if (data.status == true) {
                                toastr.success(data.message);
                                // $('#cartTotalCount').html(data.cartCount);
                                // $('#wishlistTotalCount').html(data.wishlistCount);
                            } else {
                                toastr.success(data.message);
                                // alert(data.message);
                                // console.log(data.message);
                            }
                        },
                        error: function(xhr) {
                            console.log(xhr);
                        }
                    });

                });

                if(req_start_date && req_end_date){
                    $("#dateRangePicker").flatpickr({
                        dateFormat: "Y-m-d",
                        minDate: "today", // Disable past dates
                        mode: "range", // Enable date range selection
                        defaultDate: [
                            req_start_date,
                            req_end_date
                        ],
                        disable: {!! json_encode($unavailableDates) !!},
                        onClose: function(selectedDates, dateStr, instance) {
                            const startDate = selectedDates[0].toLocaleDateString("en-CA");
                            const endDate = selectedDates[1].toLocaleDateString("en-CA");

                            // Format for display purposes
                            const formattedStartDate = selectedDates[0].toLocaleDateString("en-US", {
                                year: "numeric",
                                month: "short",
                                day: "numeric"
                            });
                            const formattedEndDate = selectedDates[1].toLocaleDateString("en-US", {
                                year: "numeric",
                                month: "short",
                                day: "numeric"
                            });

                            // Set the input value for display
                            $("#dateRangePicker").val(`${formattedStartDate} to ${formattedEndDate}`);

                            // Use startDate and endDate in Y-m-d format for other purposes
                            let url = "{{ asset('appointment-booking/check-availability') }}";

                            $('#start_date').val(startDate);
                            $('#end_date').val(endDate);

                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: url,
                                type: "POST",
                                data: {
                                    "car_id": "{{ $car->id }}",
                                    "start_date" : startDate,
                                    "end_date" : endDate,
                                },
                                beforeSend: function() {
                                    console.log('ajax fired');
                                },
                                success: function(data) {
                                    if (data.status == true) {
                                        let icon_url = "{{ asset('public/images/checked_mark.png') }}";
                                        $('#availability').html('<img style="width:100px;" src="' + icon_url + '" alt="" />');

                                        if(data.duration){
                                            $('#durationType').val(data.duration)
                                        }

                                    } else {
                                        let error_icon_url = "{{ asset('public/images/not_available.png') }}";
                                        $('#availability').html('<img style="width:100px;" src="' + error_icon_url + '" alt="" />');

                                        if(data.duration){
                                            $('#durationType').val('');
                                        }
                                    }
                                },
                                error: function(xhr) {
                                    console.log(xhr);
                                }
                            });
                        },
                    });
                    req_start_date = "";
                    req_end_date = "";
                }else{
                    $("#dateRangePicker").flatpickr({
                        dateFormat: "Y-m-d",
                        minDate: "today", // Disable past dates
                        mode: "range", // Enable date range selection
                        disable: {!! json_encode($unavailableDates) !!},
                        onClose: function(selectedDates, dateStr, instance) {
                            const startDate = selectedDates[0].toLocaleDateString("en-CA");
                            const endDate = selectedDates[1].toLocaleDateString("en-CA");

                            // Format for display purposes
                            const formattedStartDate = selectedDates[0].toLocaleDateString("en-US", {
                                year: "numeric",
                                month: "short",
                                day: "numeric"
                            });
                            const formattedEndDate = selectedDates[1].toLocaleDateString("en-US", {
                                year: "numeric",
                                month: "short",
                                day: "numeric"
                            });

                            // Set the input value for display
                            $("#dateRangePicker").val(`${formattedStartDate} to ${formattedEndDate}`);

                            // Use startDate and endDate in Y-m-d format for other purposes
                            let url = "{{ asset('appointment-booking/check-availability') }}";

                            $('#start_date').val(startDate);
                            $('#end_date').val(endDate);

                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: url,
                                type: "POST",
                                data: {
                                    "car_id": "{{ $car->id }}",
                                    "start_date" : startDate,
                                    "end_date" : endDate,
                                },
                                beforeSend: function() {
                                    console.log('ajax fired');
                                },
                                success: function(data) {
                                    if (data.status == true) {
                                        let icon_url = "{{ asset('public/images/checked_mark.png') }}";
                                        $('#availability').html('<img style="width:100px;" src="' + icon_url + '" alt="" />');

                                        if(data.duration){
                                            $('#durationType').val(data.duration)
                                        }

                                    } else {
                                        let error_icon_url = "{{ asset('public/images/not_available.png') }}";
                                        $('#availability').html('<img style="width:100px;" src="' + error_icon_url + '" alt="" />');

                                        if(data.duration){
                                            $('#durationType').val('');
                                        }
                                    }
                                },
                                error: function(xhr) {
                                    console.log(xhr);
                                }
                            });
                        },
                    });
                }
            });
        </script>
    @endsection
