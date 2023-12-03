@extends('front.layout.front')

@section('content')
    <!-- Box Styles Sidebar -->
    <style>
        .side_bar {
            padding: 1rem;
            width: 100%;
            background-color: white;
        }

        .side_bar_wrap {
            margin-left: 15px;

        }

        .side_bar_wrap input {
            margin-left: 10px;

        }

        .T1 h6 {
            padding-top: 15px;
            color: #90A3BF;
            font-family: Plus Jakarta Sans;
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
            width: 90%;
        }

        .side_bar_wrap label {
            color: black;
            font-weight: 500;
            line-height: 50px;
        }

        .side_bar_wrap input {
            margin: 4px 0 0;
            line-height: normal;

        }

        .T1 input {
            margin-left: 10px;
        }

        .cards {
            padding: 1rem;
            position: relative;
        }

        .card {
            margin: 0.5rem;
        }

        .line_1 {
            height: 4rem;
            border: 1px solid lightgray;
        }

        .exch {
            position: absolute;
            left: 46%;
            bottom: 40%;

        }

        .D {
            margin-top: 30px;
        }

        .D h5 {
            font-family: emoji;
            font-size: 20px;
            font-weight: 600;
            line-height: 30px;
        }

        .card h6 {
            font-weight: 700;
            margin-left: 5px;
        }

        .card p {
            color: slategray;
            font-weight: 500;
            margin-left: 5px;
        }

        .link a {
            margin-top: 40px;
            text-decoration: none;
            color: slategray;
        }

        .parent {
            border-radius: 30px;
            justify-content: center;
            gap: 10px;

        }

        .parent a {
            color: slategrey;
        }

        .B button {
            margin-top: 50px;
            margin-bottom: 50px;
            width: 13%;

        }

        .p {
            background-color: whitesmoke;
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

        main {
            margin-top: 20%;

        }

        .bottom {
            display: flex;
            flex-direction: column;

        }

        .bottom img {
            max-width: 300px;
            width: 100%;
            margin: 0 auto;
        }

        .bottom p {
            text-align: center;
            color: slategrey;
        }

        .Foot {
            justify-content: center;
            justify-content: space-around;
            margin-top: 20px;
        }

        .Font {
            display: flex;
            gap: 30px;
            font-size: 30px;
        }
    </style>
    <!-- BOx Sidetbar Ends -->

    <!-- Carlist Styles -->
    <style>
        .main_sec {
            background-color: #f5f3f4;
            padding-top: 3rem;
        }

        .car_list_sec {
            background-color: #f5f3f4;
        }

        .car_list_sec p {
            color: #929395 !important;
        }

        .rent {
            background-color: #f5f3f4;
            padding: 2rem;
        }

        .search_nav {
            border-radius: 91.146px;
            border: 1.302px solid rgba(195, 212, 233, 0.40);
            background: #FFF;
            display: flex;
            align-items: center;
            padding: 0 15px;
            max-width: 640.625px;
            height: 57.292px;
            flex-shrink: 0;
        }

        .search_nav input {
            width: 100%;
            border: none;
            padding-left: 20px;
            font-size: 18px;
        }

        .search_nav input:focus {
            outline: none;
        }

        .footer_ {
            margin-top: 4rem;
        }

        .footer_divider {
            background: rgba(19, 19, 19, 0.16);
            width: 100%;
            height: 1.302px;
        }


        @media(max-width: 767px) {
           .exch{
               left: 43% !important;
               bottom: 45% !important;
           }
        }
    </style>
    <!-- Carlist Styles End-->
    </head>

    <body>
        <section class="main_sec p-2">
            <div class="row">
                <div class="col-lg-3">
                    <div class="side_bar ">
                        <div class="search_nav my-3">
                            <div><img style="width: 1.5rem" src="{{ asset('public/new-images/search-normal.svg') }}"
                                    alt="" /></div>
                            <input id="search_key" type="text" placeholder="Search something here" />
                            <div><img style="width: 1.5rem" src="{{ asset('public/new-images/filter.svg') }}"
                                    alt="" /></div>
                        </div>
                        <div class="side_bar_wrap">
                            <div class="T1">
                                <h6>TYPE</h6>
                            </div>

                            @foreach ($carTypes as $type)
                                <div class="form-check" style="display: flex;align-items: center;gap: 1rem;">
                                    <input name="" class="form-check-input car_types" data-id="{{ $type->id }}" type="checkbox" value="" id="flexCheckChecked{{ $type->id }}" />
                                    <label class="form-check-label" for="flexCheckChecked{{ $type->id }}">
                                        {{ $type->name }}
                                    </label>
                                </div>
                            @endforeach

                            <div class="T2">
                                <h6>CAPACITY</h6>
                            </div>

                            <div class="form-check" style="display: flex;align-items: center;gap: 1rem;">
                                <input class="form-check-input seat_capacity" data-capacity="2" type="checkbox" id="flexCheckChecked"
                                />
                                <label class="form-check-label" for="flexCheckChecked">
                                    2 Person
                                </label>
                            </div>

                            <div class="form-check" style="display: flex; align-items: center; gap: 1rem;">
                                <input class="form-check-input seat_capacity" data-capacity="4" type="checkbox" id="flexCheckChecked"
                                />
                                <label class="form-check-label" for="flexCheckChecked">
                                    4 Person
                                </label>
                            </div>

                            <div class="form-check" style="display: flex; align-items: center; gap: 1rem;">
                                <input class="form-check-input seat_capacity" data-capacity="6" type="checkbox" id="flexCheckChecked"
                                />
                                <label class="form-check-label" for="flexCheckChecked">
                                    6 Person
                                </label>
                            </div>

                            <div class="form-check" style="display: flex; align-items: center; gap: 1rem;">
                                <input class="form-check-input seat_capacity" data-capacity="8" type="checkbox" id="flexCheckChecked"
                                />
                                <label class="form-check-label" for="flexCheckChecked">
                                    8 Person
                                </label>
                            </div>

                            <div class="T3">
                                <h6>PRICE</h6>
                                <span id="selectedValue"></span>
                            </div>

                            <div class="Range">
                                <label for="customRange1" class="form-label"></label>
                                <input type="range" class="form-range" id="customRange1" min="0" max="10000" value="5000" />
                                <h6>MAX. AED 10000</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="rent">
                        <div class="cards pick_drop_cards position-relative p-1 mt-0 mb-3">
                            <div class="d-flex justify-content-center">
                                <!-- Card 1 - Pick-Up -->
                                <div class="row" style="width: 100%;">
                                    <div class="col-lg-6 col-md-6 col-sm-12 p-3 ps-0">
                                        <div class="card_up">
                                            <div class="">
                                                <div class="form-check mb-3 ps-0">
                                               {{-- <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1" /> --}}
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <h5>Pick-Up</h5>
                                                    </label>
                                                </div>
                                                <!-- Pick-Up Dropdowns -->
                                                <div class="drop_down d-flex justify-content-between flex-wrap">
                                                    <!-- Location Dropdown -->
                                                    <div class="">
                                                        <h6>Location</h6>
                                                        <div class="dropdown">
                                                            <select id="startLocation" class="form-select" aria-label">
                                                                <option value="">Select Location</option>
                                                                @foreach ($cities as $city)
                                                                    <option @if(request()->get('startLocation') == $city->id ) selected @endif value="{{ $city->id }}">{{ $city->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="line_1"></div>
                                                    <!-- Date Dropdown -->

                                                    <div class="">
                                                        <h6>Date</h6>
                                                        <div class="dropdown">
                                                            <input type="date" class="form-control" id="startDate" value="{{ request()->get('startDate') }}">
                                                        </div>
                                                    </div>

                                                    <div class="line_1"></div>
                                                    <!-- Time Dropdown -->

                                              {{--  <div class="">
                                                        <h6>Time</h6>
                                                        <div class="dropdown">
                                                            <input type="time" class="form-control" id="startTime" value="{{ request()->get('startTime') }}">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 - Drop-off -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 p-3 ps-0">
                                        <div class="card_up">
                                            <div class="">
                                                <div class="form-check mb-3 ps-0">
                                                {{-- <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault2" /> --}}
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        <h5>Drop-off</h5>
                                                    </label>
                                                </div>
                                                <!-- Drop-off Dropdowns -->
                                                <div class="drop_down d-flex justify-content-around flex-wrap">
                                                    <!-- Location Dropdown -->
                                                    <div class="">
                                                        <h6>Location</h6>
                                                        <div class="dropdown">
                                                            <select id="endLocation" class="form-select" aria-label">
                                                                <option value="">Select Location</option>
                                                                @foreach ($cities as $city)
                                                                    <option @if(request()->get('endLocation') == $city->id ) selected @endif value="{{ $city->id }}">{{ $city->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Date Dropdown -->
                                                    <div class="line_1"></div>
                                                    <div class="">
                                                        <h6>Date</h6>
                                                        <div class="dropdown">
                                                            <input type="date" class="form-control" id="endDate" value="{{ request()->get('endDate') }}">
                                                        </div>
                                                    </div>
                                                    <!-- Time Dropdown -->
                                                    <div class="line_1"></div>
                                            {{--  <div class="">
                                                        <h6>Time</h6>
                                                        <div class="dropdown">
                                                            <input type="time" class="form-control" id="endTime" value="{{ request()->get('endTime') }}">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Exchange Button -->
                            <a href="#" class="exch"><button type="button">
                                    <img src="{{ asset('public/new-images/Swap.svg') }}" /></button></a>
                        </div>

                        <section class="car_list_sec">
                            <div class="d-flex flex-wrap justify-content-between gap-2" id="carListView">
                                @foreach ($doctors as $doctor)
                                    <div class="cardss">
                                        <h6>{{ $doctor->name }}</h6>
                                        <p>{{ $doctor->department->name }}</p>

                                        <div class="img">
                                            <img src="{{ asset('public/' . $doctor->carGalleries[0]->image_path) }}"
                                                class="mt-3" width="220" alt="car">
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
                                                <h4 class="m-0">{{ session()->get('currency_symbol') }}
                                                    {{ convertCurrency($doctor->daily_fee, 'USD', session('currency_symbol')) }}/</h4>
                                                <p class="text-secondary m-0">day</p>
                                            </div>
                                            <button type="button" class="book_now" data-url="{{ route('cars.details', $doctor->id) }}">Rent Now</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    @endsection
@section('scripts')

<script>
    $(function(){

        var checkedIds = [];
        var checkedPersonsIds = [];

        function prepareData(){
            let search_key = $('#search_key').val();
            let price = $('#customRange1').val();
            checkedIds = [];
            $('.car_types:checked').each(function () {
                checkedIds.push($(this).data('id'));
            });

            checkedPersonsIds = [];
            $('.seat_capacity:checked').each(function(){
                checkedPersonsIds.push($(this).data('capacity'));
            });

            $('#selectedValue').html(price);

            let startLocation = $('#startLocation').val();
            let endLocation = $('#endLocation').val();
            let startDate = $('#startDate').val();
            let endDate = $('#endDate').val();
            let startTime = $('#startTime').val();
            let endTime = $('#endTime').val();

            let data = {
                search_key: search_key,
                price: price,
                checkedIds: checkedIds,
                checkedPersonsIds: checkedPersonsIds,
                startLocation: startLocation,
                endLocation: endLocation,
                startDate: startDate,
                endDate: endDate,
                startTime: startTime,
                endTime: endTime
            };

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('carlist.filter') }}",
                type: "POST",
                data: data,
                success: function(data) {
                    if(data.status == true){
                        $('#carListView').html(data.data);
                    }else{
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }

        $(document).on('click','.book_now',function(){
            let startDate = $('#startDate').val();
            let endDate = $('#endDate').val();
            let startTime = $('#startTime').val();
            let endTime = $('#endTime').val();
            let url = $(this).data('url');
            window.location.href = url + "?startDate=" + startDate + "&endDate=" + endDate + "&startTime=" + startTime + "&endTime=" + endTime;
        });

        // Handle checkbox change event
        $('.car_types,.seat_capacity, #customRange1').change(prepareData);

    });
</script>

@endsection
