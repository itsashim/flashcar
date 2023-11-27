@extends('front.layout.front')

@section('content')
    <!-- Hero Section -->
    <div class="header_banner d-none d-md-block">
        <div class="hero_sec">
          <div class="hero_sec_carousel owl-carousel">
            <div class="hero_carousel_item">
              <img src="{{asset('public/new-images/lambo.png')}}" alt="" />
            </div>

            <div class="hero_carousel_item">
              <img src="{{asset('public/new-images/lambo.png')}}" alt="" />
            </div>
          </div>
          <div class="side">
            <img class="yellow-car" src="{{asset('public/new-images/yellow-car.png')}}" alt="yellow car" />
          </div>
          <div class="side">
            <img class="yellow-car-2" src="{{asset('public/new-images/yellow-car-3.png')}} " alt="yellow car" />
          </div>
        </div>

        <div class="img_2">
            <h1>Rent Your Favourite</h1>
            <h1>Car In <strong class="text-warning">Easy</strong> Steps.</h1>
            <p>Get a car wherever and whenever you need<br> it with your iOS or Android device.</p>
        </div>
    </div>
    <!-- Hero Section End-->
    <!-- Hero Section Small desktop -->
    <div class="hero_sec_sm header_banner d-md-none d-block mt-4">
        <div class="hero_sec_wrap">
            <h1 class="text-center">Rent Your Favourite</h1>
            <h1 class="text-center">Car In <strong class="text-warning">Easy</strong> Steps.</h1>

            <div class="owl-carousel owl-theme" id="img_carousel">
                <img class="item mx-auto" style="max-width: 400px;width: 60%"
                    src="{{ asset('public/new-images/lambo.png') }}" alt="">
                <img class="item mx-auto" style="max-width: 400px;width: 60%"
                    src="{{ asset('public/new-images/lambo.png') }}" alt="">
                <img class="item mx-auto" style="max-width: 400px;width: 60%"
                    src="{{ asset('public/new-images/lambo.png') }}" alt="">
            </div>
            <p class="text-center mt-2">Get a car wherever and whenever you need<br> it with your Android device.</p>
            <div class="resgister_hero">
                <button type="button" class=" register_url mx-auto">Register Now</button>
                <div class="d-flex gap-2 justify-content-center mt-3">
                    <div><img src="{{ asset('public/new-images/App Store.png') }}"></div>
                    <div><img src="{{ asset('public/new-images/Google Play.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section Small desktop End -->

    <!-- Cards Section -->
    {{-- <div class="cards pick_drop_cards position-relative" >
        <div class="d-flex justify-content-center">
            <!-- Card 1 - Pick-Up -->
            <div class="row" style="width: 100%; max-width: 800px">

                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <div class="card_up">
                        <div class="">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
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
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="line_1"></div>
                                <!-- Date Dropdown -->

                                <div class="">
                                    <h6>Date</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="line_1"></div>
                                <!-- Time Dropdown -->

                                <div class="">
                                    <h6>Time</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - Drop-off -->
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <div class="card_up">
                        <div class="">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
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
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Date Dropdown -->
                                <div class="line_1"></div>
                                <div class="">
                                    <h6>Date</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Time Dropdown -->
                                <div class="line_1"></div>
                                <div class="">
                                    <h6>Time</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Exchange Button -->
        <a href="#" class="exch"><button type="button">
            <img src="{{asset('public/new-images/Swap.svg')}}">
        </button></a>

        <!-- Button Section -->
        <div class="btns text-center mt-4 d-none d-md-block">
            <button type="button" class="btn_1">Book Now</button>
            <button type="button" class="btn_2">Contact Us</button>
        </div>
    </div> --}}

    <div class="more_services container container-sm">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <section class="offer_services d-none d-md-block">
                    <h1>More Services We <br> All offer For Our</h1>
                    <h1 class="position-relative" style="color: #E5CE00;">Customer!! <br>
                        <svg class="d-none" xmlns="http://www.w3.org/2000/svg" width="375" height="34"
                            viewBox="0 0 375 34" fill="none">
                            <path d="M0.0440759 15.187L374.282 0.226267L366.674 7.64472L0.365026 34.0001L0.0440759 15.187Z"
                                fill="#A49300" />
                        </svg>
                    </h1>
                    <p>Get a car wherever and whenever you need it with <br>
                        your iOS or Android device.</p>

                    <div class="btns_2  mt-4">
                        <button type="button" class="btn_1 contact_us">Contact Us</button>
                        <button type="button" class="btn_2 know_more">Know More</button>
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 ">
                <div class="owl-carousel owl-theme" id="service_card">
                    <div class="rental_img">
                        <img src="{{ asset('public/new-images/Frame 427320752.png') }}" width="100%" alt="car_rental_img">
                    </div>
                    <div class="rental_img">
                        <img src="{{ asset('public/new-images/Group 1000001787.png') }}" width="100%"
                            alt="car_rental_img">
                    </div>
                    <div class="rental_img">
                        <img src="{{ asset('public/new-images/Group 1000001788.png') }}" width="100%"
                            alt="car_rental_img">
                    </div>
                    <div class="rental_img">
                        <img src="{{ asset('public/new-images/Group 1000001789.png') }}" width="100%"
                            alt="car_rental_img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popular_rental_deals">

        <div class="card_head_text text-center">
            <p>POPULAR RENTAL DEALS</p>
            <h4>Most popular cars rental deals</h4>
        </div>


        <div class="popular_car">

            <div class="popular_card">

                <div class="d-flex justify-content-between mb-3">
                    <h5>Popular Car</h5>
                    <a href="{{'/car-list'}}" class="text-warning">View All</a>
                </div>

                <div class="owl-carousel owl-theme" id="popular_car-carousel">
                    @foreach ($doctors as $doctor)
                        <div class="cardss">
                            <h6>{{ $doctor->name }}</h6>
                            <p>{{ $doctor->department->name }}</p>

                            <div class="img">
                                <img src="{{ asset('public/' . $doctor->carGalleries[0]->image_path) }}" class="mt-3"
                                    width="220" alt="car">
                            </div>
                            <div class="d-flex justify-content-between text-muted mt-5">
                                <a href="#">
                                    <p><i class="fa-solid fa-gas-pump me-1"></i>{{ $doctor->fuel_capacity }} L</p>
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
                                    <h4 class="m-0">
                                        {{ session()->get('currency_symbol') }}
                                        {{ convertCurrency($doctor->daily_fee, 'USD', session('currency_symbol')) }}
                                        / Day</h4>
                                </div>
                                <a href="{{ route('cars.details', $doctor->id) }}">
                                    <button type="button">Rent Now</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="recomendation_car">

            <div class="popular_card">

                <div class="d-flex justify-content-between mb-3">
                    <h5>Recommendation Car</h5>
                </div>

                <div class="owl-carousel owl-theme recommend_car-carousel">
                    @foreach ($doctors as $doctor)
                        <div class="cardss">
                            <h6>{{ $doctor->name }}</h6>
                            <p>{{ $doctor->department->name }}</p>

                            <div class="img">
                                <img src="{{ asset('public/' . $doctor->carGalleries[0]->image_path) }}" class="mt-3"
                                    width="220" alt="car">
                            </div>
                            <div class="d-flex justify-content-between text-muted mt-5">
                                <a href="#">
                                    <p><i class="fa-solid fa-gas-pump me-1"></i>{{ $doctor->fuel_capacity }} L</p>
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
                                    <h4 class="m-0">
                                        {{ session()->get('currency_symbol') }}
                                        {{ convertCurrency($doctor->daily_fee, 'USD', session('currency_symbol')) }}
                                        / Day</h4>
                                </div>
                                <a href="{{ route('cars.details', $doctor->id) }}">
                                    <button type="button">Rent Now</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>

        <div class="btn_3 text-center mt-5">
            <button class="more_cars btn_1" type="button">Show More</button>
            <button class="know_more btn_2" type="button">Know More</button>
        </div>
    </div>

    <div class="blogs_cards mt-5 d-none d-md-block">

        <div class="row mx-0">

            <div class="col-xl-4  col-sm-12">
                <div class="blogs">
                    <h1>Blogs</h1>
                    <p>We are constantly publishing informative and insightful blogs covering a wide variety of
                        topics
                        related
                        to
                        <b> education, freelancing, careers, courses,</b> and anything else that can help our
                        readers in
                        some
                        way.
                    </p>
                </div>
            </div>


            <div class="col-xl-8  col-sm-12">

                <div class="big_card">
                    @php
                        function limitAndStripTags($content, $limit)
                        {
                            // Strip HTML tags
                            $strippedContent = strip_tags($content);

                            // Limit the content
                            $limitedContent = substr($strippedContent, 0, $limit);

                            // Add ellipsis if the content was truncated
                            if (strlen($strippedContent) > $limit) {
                                $limitedContent .= '...';
                            }

                            // Output the result
                            return $limitedContent;
                        }
                    @endphp


                    <div class="row">
                        @php $counter = 1; @endphp

                        @foreach ($blogs->take(5) as $blog)
                            @if ($counter == 1)
                                <div class="col-lg-6 col-md-12 col-sm-12 p-1">
                                    <div class="card tall_card" style="width: 100%; height: 100%; margin: 0;">
                                        <img src="{{ asset('public/' . $blog->image) }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $blog->title }}
                                            </h5>
                                            <p class="card-text">{!! limitAndStripTags($blog->description, 400) !!}</p>
                                            <a href="{{ asset('blogs/' . $blog->slug) }}">
                                                <button type="button"
                                                    class="read_more  mt-3 d-flex align-items-center">Read More<svg
                                                        xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 10 10" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z"
                                                            fill="#111111" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @elseif($counter == 2)
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="small_cards">

                                        <div class="row">

                                            <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                                <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                                    <img src="{{ asset('public/' . $blog->image) }}" class="card-img-top"
                                                        alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                                        <p class="card-text">{!! limitAndStripTags($blog->description, 200) !!}</p>
                                                        <a href="{{ asset('blogs/' . $blog->slug) }}">
                                                            <button type="button"
                                                                class="read_more  mt-3 d-flex align-items-center">Read
                                                                More<svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                                    height="10" viewBox="0 0 10 10" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z"
                                                                        fill="#111111" />
                                                                </svg>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($counter == 3)
                                            <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                                <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                                    <img src="{{ asset('public/' . $blog->image) }}" class="card-img-top"
                                                        alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                                        <p class="card-text">{!! limitAndStripTags($blog->description, 200) !!}</p>
                                                        <a href="{{ asset('blogs/' . $blog->slug) }}">
                                                            <button type="button"
                                                                class="read_more  mt-3 d-flex align-items-center">Read
                                                                More<svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                                    height="10" viewBox="0 0 10 10" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z"
                                                                        fill="#111111" />
                                                                </svg>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($counter == 4)
                                            <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                                <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                                    <img src="{{ asset('public/' . $blog->image) }}" class="card-img-top"
                                                        alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                                        <p class="card-text">{!! limitAndStripTags($blog->description, 200) !!}</p>
                                                        <a href="{{ asset('blogs/' . $blog->slug) }}">
                                                            <button type="button"
                                                                class="read_more  mt-3 d-flex align-items-center">Read
                                                                More<svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                                    height="10" viewBox="0 0 10 10" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z"
                                                                        fill="#111111" />
                                                                </svg>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($counter == 5)
                                            <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                                <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                                    <img src="{{ asset('public/' . $blog->image) }}" class="card-img-top"
                                                        alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                                        <p class="card-text">{!! limitAndStripTags($blog->description, 200) !!}</p>
                                                        <a href="{{ asset('blogs/' . $blog->slug) }}">
                                                            <button type="button"
                                                                class="read_more  mt-3 d-flex align-items-center">Read
                                                                More<svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                                    height="10" viewBox="0 0 10 10" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z"
                                                                        fill="#111111" />
                                                                </svg>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @php $counter++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TEstimonial Section -->
    <div class="testimonials">
        <div class="test_head text-center">
            <h5>Testimonial</h5>
            <h3>What people say about?</h3>
        </div>

        <div id="testimonial" class="carousel slide ">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial_wrap row mx-auto  mt-4 ">
                        <div class="col-lg-6">
                            <div class="testi_img"><img src="{{ asset('public/new-images/testimonial1.jpeg') }}"
                                    alt="testimonial one"></div>
                        </div>
                        <div class="col-lg-6 p-3 d-flex flex-column">
                            <div class="order-2 order-md-1">
                                <p class="text-center text-md-start">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Placeat atque enim explicabo assumenda tempore autem minus culpa neque? Quisquam
                                    vel libero quos asperiores. Eligendi optio voluptatibus adipisci reiciendis cumque sint
                                    praesentium recusandae atque ut tenetur?</p>
                            </div>
                            <div class="order-1 order-md-2">
                                <h4 class="text-center text-md-start">Name of the customer</h4>
                                <div class="stars text-center text-md-start mb-2">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span class="total_rating">4.9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="testimonial_wrap row mx-auto  mt-4 ">
                        <div class="col-lg-6">
                            <div class="testi_img"><img src="{{ asset('public/new-images/testimonial1.jpeg') }}"
                                    alt="testimonial one"></div>
                        </div>
                        <div class="col-lg-6 p-3 d-flex flex-column">
                            <div class="order-2 order-md-1">
                                <p class="text-center text-md-start">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Placeat atque enim explicabo assumenda tempore autem minus culpa neque? Quisquam
                                    vel libero quos asperiores. Eligendi optio voluptatibus adipisci reiciendis cumque sint
                                    praesentium recusandae atque ut tenetur?</p>
                            </div>
                            <div class="order-1 order-md-2">
                                <h4 class="text-center text-md-start">Name of the customer</h4>
                                <div class="stars text-center text-md-start mb-2">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span class="total_rating">4.9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial" data-bs-slide="prev">
                <div class="carousel_control " aria-hidden="true">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonial" data-bs-slide="next">
                <span class="carousel_control" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <!-- TEstimonial Section -->

    {{-- <div class="modal" id="modalHealthPartner" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-modal="true" style="display: block; padding-left: 0px;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form id="appliedHealthForm" action="{{ asset('applied-health-partner') }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-header" data-aos="zoom-in" style="background-color:#019444;">
                        <h5 class="modal-title">Become a Vendor</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="row hide" id="alertSectionAHP">
                        <div class="col-sm-12">
                            <div class="alert" id="alertMsgAHP"></div>
                        </div>
                    </div>
                    <div class="modal-body" id="bodySectionAHP" data-aos="zoom-in" style="background-color:#f1f1f9">
                        @csrf
                        <div class="row">

                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="healthpartnername" class="form-label fw-semi">Vendor Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" id="healthpartnername"
                                    name="health_partner_name" placeholder="Enter your Health Partner Name">
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="firstname" class="form-label fw-semi">First Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Enter First Name">
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="lastname" class="form-label fw-semi">Last Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Enter Last Name">
                            </div>
                            <!--column-->


                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="mobileno" class="form-label fw-semi">Phone Number <span
                                        class="text-primary">*</span> </label>
                                <input type="number" class="form-control" id="mobileno" name="phone"
                                    onkeypress="validatePhoneNumber(6)" maxlength="10" pattern="[1-9]{1}[0-9]{9}"
                                    placeholder="Enter your Phone Number">
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="email" class="form-label fw-semi">Email <span
                                        class="text-primary">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your Email Address">
                            </div>

                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="password" class="form-label fw-semi">Password <span
                                        class="text-primary">*</span></label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your Password">
                            </div>
                            <!--column-->


                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="address" class="form-label fw-semi">Address<span class="text-primary">
                                        *</span></label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter your  Address">
                            </div>
                            <!--column-->

                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="type" class="form-label fw-semi">Upload Document<span
                                        class="text-primary"> *</span></label>
                                <input type="file" id="file" name="document" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="type" class="form-label fw-semi">Upload Logo

                                    <input type="file" id="file" name="logo" class="form-control">
                                </label>
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <img src="" id="previmage" name="previmage" style="display:none">
                            </div>
                            <!--column-->

                            <div class="col-md-12 mb-3 department_select" data-aos="zoom-in"
                                style="display: flex; align-items: center;">
                                <label for="department" class="form-label fw-semi">Department<span
                                        class="text-primary">*</span></label>
                                <select name="department_ids[]" class="form-control select2 select2-hidden-accessible"
                                    multiple="" required="" data-select2-id="4" tabindex="-1"
                                    aria-hidden="true">
                                    <!--<option selected disabled>Select Department</option>-->
                                    <option value="1">Electronics</option>
                                    <option value="2">Electricals</option>
                                    <option value="3">Plumbing</option>
                                    <option value="4">False Ceiling &amp; Decoration</option>
                                    <option value="5">Beautician</option>
                                    <option value="6">Computer</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="5" style="width: auto;"><span class="selection"><span
                                            class="select2-selection select2-selection--multiple" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                            aria-disabled="false">
                                            <ul class="select2-selection__rendered">
                                                <li class="select2-search select2-search--inline"><input
                                                        class="select2-search__field" type="search" tabindex="0"
                                                        autocomplete="off" autocorrect="off" autocapitalize="none"
                                                        spellcheck="false" role="searchbox" aria-autocomplete="list"
                                                        placeholder="" style="width: 0.75em;"></li>
                                            </ul>
                                        </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <button type="submit" class="btn becomepartnerBtn mt-3 ms-2 me-3" id="formsubmitBtn"
                            style="background-color:#019444; color: white;">
                            Become a Service Provider
                        </button>
                        <button type="button" class="btn btn-danger mt-3 float-right"
                            data-bs-dismiss="modal"="modal"="">
                            Close
                        </button>
                    </div>
                    <div class="modal-footer" data-aos="zoom-in" style="background-color:#019444; height: 50px;">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
@endsection
@section('scripts')
    <script>
        $(function() {
            $(document).on('click', '.know_more', function() {
                window.location.href = "{{ asset('about-us') }}";
            });

            $(document).on('click', '.contact_us', function() {
                window.location.href = "{{ asset('contact_us') }}";
            });

            $(document).on('click', '.more_cars', function() {
                window.location.href = "{{ asset('car-list') }}";
            });
        })
    </script>

    <!--Hero Section-->

    <script>
            $('.hero_sec_carousel').owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          items: 1
      })
    </script>
@endsection
