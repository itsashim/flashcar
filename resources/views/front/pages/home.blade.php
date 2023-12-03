@extends('front.layout.front')

@section('content')
    <!-- Hero Section -->
    <div class="header_banner d-none d-md-block">
        <div class="hero_sec">
            <div class="hero_sec_carousel owl-carousel">
                <div class="hero_carousel_item">
                    <img src="{{ asset('public/new-images/lambo.png') }}" alt="" />
                </div>

                <div class="hero_carousel_item">
                    <img src="{{ asset('public/new-images/lambo.png') }}" alt="" />
                </div>
            </div>
            <div class="side">
                <img class="yellow-car" src="{{ asset('public/new-images/yellow-car.png') }}" alt="yellow car" />
            </div>
            <div class="side">
                <img class="yellow-car-2" src="{{ asset('public/new-images/yellow-car-3.png') }} " alt="yellow car" />
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
    <div class="cards pick_drop_cards position-relative">
        <div class="d-flex justify-content-center">
            <!-- Card 1 - Pick-Up -->
            <div class="row" style="width: 100%; max-width: 800px">

                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <div class="card_up">
                        <div class="">
                            <div class="form-check mb-3 ps-0">
                            {{--<input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1"> --}}
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
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="line_1"></div>
                                <!-- Date Dropdown -->

                                <div class="">
                                    <h6>Date</h6>
                                    <div class="dropdown">
                                        <input type="date" class="form-control" id="startDate">
                                    </div>
                                </div>


                                <div class="line_1"></div>
                                <!-- Time Dropdown -->

                    {{--        <div class="">
                                    <h6>Time</h6>
                                    <div class="dropdown">
                                        <input type="time" class="form-control" id="startTime">
                                    </div>
                                </div>    --}}
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- Card 2 - Drop-off -->
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <div class="card_up">
                        <div class="">
                            <div class="form-check mb-3 ps-0">
                           {{-- <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2"> --}}
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <h5>Drop-off</h5>
                                </label>
                            </div>
                            <!-- Drop-off Dropdowns -->
                            <div class="drop_down d-flex justify-content-around flex-wrap">
                                <!-- Location Dropdown -->
                                <div class="">
                                    <h6>Location</h6>
                                    <select id="endLocation" class="form-select" aria-label">
                                        <option value="">Select Location</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Date Dropdown -->
                                <div class="line_1"></div>
                                <div class="">
                                    <h6>Date</h6>
                                    <div class="dropdown">
                                        <input type="date" class="form-control" id="endDate">
                                    </div>
                                </div>
                                <!-- Time Dropdown -->
                                <div class="line_1"></div>
                             {{--<div class="">
                                    <h6>Time</h6>
                                    <div class="dropdown">
                                        <input type="time" class="form-control" id="endTime">
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
                <img src="{{ asset('public/new-images/Swap.svg') }}">
            </button></a>

        <!-- Button Section -->
        <div class="btns text-center mt-4 d-none d-md-block">
            <button type="button" class="btn_1 book_now">Book Now</button>
            <a href="{{ asset('contact_us') }}"><button type="button" class="btn_2">Contact Us</button></a>
        </div>
    </div>

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
                        <img src="{{ asset('public/new-images/Frame 427320752.png') }}" width="100%"
                            alt="car_rental_img">
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
                    <a href="{{ '/car-list' }}" class="text-warning">View All</a>
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

    <!--Blogs Section-->

    <div class="blogs_cards mt-5 d-none d-md-block">

        <div class="row mx-0">

            <div class="col-xl-3  col-sm-12">
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


            <div class="col-xl-9  col-sm-12">

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
                                <div class="col-lg-5 col-md-12 col-sm-12 p-1">
                                    <div class="card tall_card" style="width: 100%; height: 100%; margin: 0;">
                                        <div class="tall_blog_img">
                                            <img src="{{ asset('public/' . $blog->image) }}" class="card-img-top"
                                                alt="...">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $blog->title }}
                                            </h5>
                                            <p class="card-text">{!! limitAndStripTags($blog->description, 100) !!}</p>
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
                                <div class="col-lg-7 col-md-12 col-sm-12">

                                    <div class="small_cards">

                                        <div class="row">

                                            <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                                <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                                    <div class="blog_img">
                                                        <img src="{{ asset('public/' . $blog->image) }}"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                                        <p class="card-text">{!! limitAndStripTags($blog->description, 65) !!}</p>
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
                                                    <div class="blog_img">
                                                        <img src="{{ asset('public/' . $blog->image) }}"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                                        <p class="card-text">{!! limitAndStripTags($blog->description, 65) !!}</p>
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
                                                    <div class="blog_img">
                                                        <img src="{{ asset('public/' . $blog->image) }}"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                                        <p class="card-text">{!! limitAndStripTags($blog->description, 65) !!}</p>
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
                                                    <div class="blog_img"><img
                                                            src="{{ asset('public/' . $blog->image) }}"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                                        <p class="card-text">{!! limitAndStripTags($blog->description, 65) !!}</p>
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
    <!--Blogs Section-->

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

            $(document).on('click','.book_now',function(){
                let id = $(this).data('id');
                let startDate = $('#startDate').val();
                let endDate = $('#endDate').val();
                let startLocation = $('#startLocation').val();
                let endLocation = $('#endLocation').val();
                let startTime = $('#startTime').val();
                let endTime = $('#endTime').val();
                window.location.href = "{{ asset('car-list') }}"+"?startDate="+startDate+"&endDate="+endDate+"&startLocation="+startLocation+"&endLocation="+endLocation+"&startTime="+startTime+"&endTime="+endTime;
            });
        });
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
