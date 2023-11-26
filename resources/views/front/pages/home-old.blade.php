@extends('front.layout.front')
@section('title')
    {{ __('messages.Home') }}
@stop

@section('styles')
    <style>
        .sec_padding {
            padding: 0 5%;
        }

        /* Direct Changes in Owl Carousel */
        .our_service {
            width: 200px;
        }

        .our_service img {
            width: 65% !important;
        }

        .brand_sec .owl-nav {
            /* display: none; */
        }

        .brand_sec .owl-item {
            display: flex;
            align-items: center !important;
            justify-content: center;
        }

        .brand_sec .owl-img {
            width: 75% !important;
        }

        .brand_sec .owl-stage {
            display: flex;
            justify-content: center !important;
        }


        /* Direct Changes in Owl Carousel End */

        .owl-nav {
            display: flex;
            align-items: center;
            margin: 0;
        }

        .ViewAllBtn {
            padding: 7px 10px;
            border: 2px solid #c7c7c7;
            color: #000;
            border-radius: 5px
        }

        .ViewAllBtn:hover {
            background: #076483;
            color: #fff;
        }

        .viewAllDesktop {
            display: block;
        }

        .viewAllMobile {
            display: none;
        }

        .pricing-part-box__p {
            /*white-space: nowrap; */
            /*overflow: hidden;*/
            /*text-overflow: ellipsis; */

            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: justify;
        }

        .mobile-view,
        .mobile-view2 {
            display: flex;
            align-items: center;
        }


        /* modal */
        .department_select span {
            min-width: 16% !important;
        }

        /* modal end */

        /* become a seller */
        @media screen and (max-width:425px) {
            .mobile-view {
                flex-direction: column-reverse;
                text-align: center;
            }

            .mobile-view2 {
                flex-direction: column;
                text-align: center;
            }

            .seller-img {
                height: 200px;
                width: 300px;
            }

        }

        /* become a seller end */

        /* Tablet */
        @media screen and (min-width: 575px) and (max-width: 991px) {}

        /* mobile */
        @media screen and (max-width: 575px) {


            /**/
            .viewAllDesktop {
                display: none;
            }

            .viewAllMobile {
                display: block;
                text-align: center;
            }

            /* mobile app */
            .mobile-app {
                text-align: center;
            }

            /* mobile app end */

        }

        /* laptop */
        @media screen and (min-width: 992px) {}

        @media screen and (max-width:767px) {
            .col-reverse {
                flex-direction: column-reverse;
            }
        }

        /* app download */
        @media screen and (min-width: 768px) and (max-width: 991px) {
            .scanqr {
                width: 100% !important;
            }
        }

        @media screen and (max-width:767px) {
            .img-fluid {
                height: 150px;
            }

            .app-qr__bottom {
                width: 150px;
            }

            .download-text {
                font-size: 1.5rem;
            }
        }

        /* app download end */
    </style>
@endsection


@section('content')
    <!-- Caurosel Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 carousel-image" src="{{ asset('public/front/banner.jpg') }}" alt="First slide">
                {{-- <div class="carousel-caption" style="color: black;position: absolute;bottom: 20px;">
                <h5>Item One</h5>
                <p>Super beneficial</p>
            </div> --}}
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carousel-image" src="{{ asset('public/front/banner.jpg') }}" alt="Second slide">
                {{--  <div class="carousel-caption" style="color: black;position: absolute;bottom: 20px;">
                <h5>Lots of Products</h5>
                <p>Awesome pharmacy products</p>
            </div> --}}
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carousel-image" src="{{ asset('public/front/banner.jpg') }}" alt="Third slide">
                {{--  <div class="carousel-caption" style="color: black;position: absolute;bottom: 20px;">
                <h5>Large number of doctor available</h5>
                <p>Good doctors available</p>
            </div> --}}
            </div>
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
    <!-- Caurosel Section  End-->


    <!-- Home Page Filter Section -->

    <!--<div class="container">-->
    <!--    <div class="box pd-md-20 pd-lg-20">-->
    <!--        <div class="row" style="align-items: center;">-->
    <!--            <div class="col-lg-3 col-md-6 mt-2">-->
    <!--                <div class="inner-box" style="padding: 10px 20px 15px 20px;background: #076483;">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <div class="icon">-->
    <!--                                <i class="fa-solid fa-location-dot text-white" style="font-size: 35px;margin-top: 10px;"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <div class="title text-white ft-12">Find From City</div>-->
    <!--                            <div class="detail">-->
    <!--                                <select style="width: 100%; border: 0px; padding: 5px;" name="city_id" class="city_id select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">-->
    <!--                                    <option value="null" selected="" data-select2-id="3">All City</option>-->
    <!--                                    @foreach ($cities as $city)
    -->
    <!--                                        <option value="{{ $city->id }}">{{ $city->name }}</option>-->
    <!--
    @endforeach-->
    <!--                                </select>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>                  -->
    <!--            <div class="col-lg-3 col-md-6 mt-2">-->
    <!--                <div class="inner-box" style="padding: 10px 20px 15px 20px;background: #076483;">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <div class="icon">-->
    <!--                                <i class="fa-solid fa-plus-square text-white" style="font-size: 35px;margin-top: 10px;"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <div class="title text-white ft-12">Hospital/Clinic</div>-->
    <!--                            <div class="detail">-->
    <!--                                <select id="hospitalID" style="width: 100%; border: 0px; padding: 5px;" name="hospital_id" class="hospital_id select3">-->
    <!--                                    <option selected>Select Hospital</option>-->
    <!--                                    @foreach ($hospitals as $hospital)
    -->
    <!--                                        <option value="{{ asset('hospital/' . $hospital->slug) }}">{{ $hospital->name }}</option>-->
    <!--
    @endforeach-->
    <!--                                </select>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>                  -->
    <!--            <div class="col-lg-3 col-md-6 mt-2">-->
    <!--                <div class="inner-box" style="padding: 10px 20px 15px 20px;background: #076483;">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <div class="icon">-->
    <!--                                <i class="fa-solid fa-user-md text-white" style="font-size: 35px;margin-top: 10px;"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <div class="title text-white ft-12">Select Department</div>-->
    <!--                            <div class="detail">-->
    <!--                                <select style="width: 100%; border: 0px; padding: 5px;" name="department_id" class="department_id select2">-->
    <!--                                    <option value="#">Select Department</option>-->
    <!--                                    @foreach ($departments as $department)
    -->
    <!--                                        <option value="{{ $department->id }}">{{ $department->name }}</option>-->
    <!--
    @endforeach-->
    <!--                                </select>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6 mt-2">-->
    <!--                <div class="inner-box" style="padding: 10px 20px 10px 20px;background: #076483;">-->
    <!--                    <div class="row" style="justify-content: center;">-->
    <!--                        <a style="text-decoration: none;cursor: pointer;" href="{{ url('/emergency') }}">-->
    <!--                            <span class="title text-white" style="font-size: 18px;text-decoration:none;">Instant Consultation</span><br/>-->
    <!--                            <span class="btn form-control" style="background-color: #076483; color:#fff;border: 2px solid #fff">Emergency Service</span>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>                  -->
    <!--        </div>-->
    <!--    </div>-->

    <!--</div>-->
    <!-- Home Page Filter Section End -->
    <!-- Category Section -->
    {{--
    <div class="section-department">
        <div class="container" style="padding-top: 60px;">
            <div class="row mb-3">
                <div class="col-lg-8 col-md-8 aos-init aos-animate" data-aos="zoom-in" style="    border-left: 7px solid #076483;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Categories</h2>
                    <p class="m-0">Services  available in following categories</p>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 aos-init aos-animate viewAllDesktop" data-aos="zoom-in">
                    <a href="{{ asset('department') }}" class="ViewAllBtn">View All Categories &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="carousel-wrap normalCarousel">
                <div class="owl-carousel owl-theme">
                    @foreach ($departments as $department)
                    <div class="item">
                        <a href="{{'https://wheelonpalm.com/find-doctor?department_id='.$department-> id}}">
                        <img class="owl-img" src="{{ asset('public/upload/department/'.$department->image) }}" style="padding:70px; background: #076483;" />
                        </a>
                        <span class="img-text text-center">
                            <h4 class="name" style="margin-top:1rem" data-aos="zoom-in" ><a href="{{'https://wheelonpalm.com/find-doctor?department_id='.$department-> id}}" style="color:#000">{{ $department->name }}</a></h4>
                            <div class="desc" data-aos="zoom-in" style="margin: 1rem 0; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;
                                overflow: hidden; text-overflow: ellipsis; text-align: justify;">
                                {{substr($department->description, 0, strpos($department->description, ' ',70))}} 
                            </div>
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 aos-init aos-animate viewAllMobile" data-aos="zoom-in">
                <a href="{{ asset('department') }}" class="ViewAllBtn">View All Departments &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    --}}
    <!-- Category Section End -->

    <!--Brand Section -->
    <div class="section-doctor brand_sec mt-5 " data-aos="fade-up">
        <div class="row container mx-auto mb-3">
            <div class="col-lg-8 col-md-8 " 
                style="    border-left: 7px solid #076483;">
                <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Search by Brands</h2>
                <p class="m-0">Services available in following Brands</p>
            </div>

            <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 viewAllDesktop">
                <a href="{{ asset('brandlist') }}" class="ViewAllBtn">View All Brands &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <!--  -->
        <div class="container">
            <div class="carousel-wrap">
                <div class="owl-carousel owl-theme" id="brandCarousel">
                    @foreach ($brands as $brand)
                        <div class="item">
                            <a class="our_service mx-auto d-block"
                                href="{{ route('bikebrandlist', ['id' => $brand->id]) }}">

                                {{-- <img class="owl-img" src="{{ asset('public'.$brand->local_path) }}"> --}}
                                <img class="owl-img mx-auto" src="{{ asset('public/' . $brand->logo_path) }}">

                            </a>
                            {{--  <span class="img-text text-center">
                                <h4 style="margin: 1rem 0; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $brand->name }}</h4>
                            </span> --}}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-lg-right pt-3 pb-sm-20 aos-init aos-animate viewAllMobile"
                data-aos="zoom-in">
                <a href="{{ url('doctors') }}" class="ViewAllBtn">View All Doctors &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </div>
    <!--Brand Section End -->

    {{--
           <!-- Pharma drug medicaland consultancy -->
           <section class="m-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 pb-4 aos-init aos-animate" data-aos="zoom-in">
                            <hr>
                            <h4><b>Products & its categories</b></h4>
                            <br>
                            <div class="row">
                                <div class="col-md-6 col-lg-3 col-12 aos-init aos-animate" data-aos="zoom-in">
                                    <div style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjDuagUH7J93xp7jVhIG_soL2zhIV3mjukOA&usqp=CAU); background-position: center center; background-size: cover;   background-repeat: no-repeat;" class="rounded aos-init aos-animate" data-aos="zoom-in">
                                        <div style="    padding: 230px 24px 20px;background: linear-gradient(0deg, rgba(0,0,0,1) 1%, rgba(8,7,104,0) 100%);" data-aos="zoom-in" class="aos-init aos-animate">
                                            <h5 class="text-white font-weight-bold mb-5 text-center">Products</h5>
                                            <a class="mt-2 btn form-control ViewAllBtn" style=" color: #fff;" href="{{url('product-list')}}">View All</a>
                                            <!--<a class="mt-2 btn form-control ViewAllBtn" style=" color: #fff;" href="{{url('medical-appliances')}}">View All</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-6 col-12 aos-init aos-animate" data-aos="zoom-in">
                                    <div class="row mr-1 ml-1">

                                        @foreach ($categories->take(6) as $category)
                                        <div class="col-lg-4 col-12 p-1 aos-init aos-animate" data-aos="zoom-in">
                                            <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px; ">
                                                <div class="row">
                                                    <div class="col-4 p-1 text-center aos-init aos-animate" data-aos="zoom-in"> 
                                                        <a href="{{ asset('categories/'.$category->slug) }}">
                                                            <img src="{{ asset('public'.$category->image) }}" width="70%" style="border-radius:10px; margin-top: 20%;">
                                                        </a>
                                                    </div>
                                                    <div class="col-8 p-0 aos-init aos-animate" data-aos="zoom-in">
                                                        <a class="link-text-black" href="{{ asset('categories/'.$category->slug) }}">
                                                            <p class="m-0" style="font-size:15px;"><b>{{ $category->name }}</b></p>
                                                        </a>
                                                        @foreach ($category->subCategory->take(5) as $subCategory)
                                                            <a class="link-text-black" href="{{ asset('sub-categories/'.$subCategory->slug) }}">
                                                                <p class="m-0" style="font-size:13px;">{{ $subCategory->name }}</p>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </section>
           <!-- Pharma drug medicaland consultancy End -->
           --}}

    <!-- Product Section -->
    <!-- Products Section -->
    <section class="product_sec" data-aos="fade-up">
        <div class="product_wrapper container">
            <div class="row mx-auto mb-3">
                <div class="col-lg-8 col-md-8" 
                    style="    border-left: 7px solid #076483;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Products</h2>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 viewAllDesktop">
                    <a href="{{ asset('product-list') }}" class="ViewAllBtn">View All Products &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            {{-- <h3 class="text-center text-sm-start fw-bold fs-3">Products</h3> --}}

            <div class="products row justify-content-center justify-content-sm-start" id="productContent">

                @if(Auth::user())

                @foreach ($products as $data)
              
                  @if($data->product)
                    @foreach($data->product as $key=>$value)
                 <div class="col-lg-3 col-md-4 col-sm-6 col-10 p-2">
                     <div class="product">
                         <!--<div class="product_sale">-->
                         <!--  <p class="m-0">Save Rs.100</p>-->
                         <!--</div>-->
                         <div class="product_img mx-auto">

                             <img src="{{ asset('public/' . $value->photo) }}" alt="{{ $value->name }}" />
                         </div>
                         <div class="product_price d-flex align-items-end  flex-wrap">

                             @if ($value->offer_price)
                                 <span style="text-decoration:line-through;color:red;display: block">Rs
                                     {{ $value->price }}</span>
                                 <span class="discount_price me-2">Rs. {{ $value->offer_price }}</span>
                             @else
                                 <span class="discount_price mt-2">Rs. {{ $value->price }}</span>
                             @endif

                        
                         </div>
                         <h5 class="mt-2 product_title">
                             <a href="{{ asset('product_details/' . $value->slug) }}">
                                 {{ $value->name }}
                             </a>
                         </h5>
                         {{-- <p class="mb-0 value_subtitle">{{$value->cartDetails->count()}}mmm</p> --}}
                         {{-- <h1>{{$value->cartDetails}}</h1> --}}

                         {{-- @if($value->cartDetails != null) --}}

                              @if($value->cartDetails->where('user_id',Auth::user()->id)->count() == 1)
                         
                                <p>Already in list</p>

                              {{-- @endif    --}}

                         @else  


                         <button type="submit" data-id="{{ $value->id }}"
                             class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
                             data-id="{{ $value->id }}">
                             Add to Cart
                         </button>
                         
                         @endif

                        {{--  <button type="submit" data-id="{{ $value->id }}"
                             class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
                             data-id="{{ $value->id }}">
                             Add to Cart
                         </button>
                       --}}
                     </div>
                 </div>
                    @endforeach

                  @endif
              
                @endforeach

                @else


                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-10 p-2">
                        <div class="product">
                            <!--<div class="product_sale">-->
                            <!--  <p class="m-0">Save Rs.100</p>-->
                            <!--</div>-->
                            <div class="product_img mx-auto">

                                <img src="{{ asset('public/' . $product->photo) }}" alt="{{ $product->name }}" />
                            </div>
                            <div class="product_price d-flex align-items-end  flex-wrap">

                                @if ($product->offer_price)
                                    <span style="text-decoration:line-through;color:red;display: block">Rs
                                        {{ $product->price }}</span>
                                    <span class="discount_price me-2">Rs. {{ $product->offer_price }}</span>
                                @else
                                    <span class="discount_price mt-2">Rs. {{ $product->price }}</span>
                                @endif

                                <!--<span class="discount_price me-2">Rs. {{ $product->offer_price }}</span>-->
                                <!--<span class="original_price">Rs. {{ $product->price }}</span>-->
                            </div>
                            <h5 class="mt-2 product_title">
                                <a href="{{ asset('product_details/' . $product->slug) }}">
                                    {{ $product->name }}
                                </a>
                            </h5>
                            <!--<p class="mb-0 product_subtitle">BAJAJ OE</p>-->

                            @if(Auth::user())
                            
                              @if($product->cartDetails->where('user_id',Auth::user()->id)->count() == 1)
                                 <p>Already in list</p>

                              @else   

                              <button type="submit" data-id="{{ $product->id }}"
                                  class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
                                  data-id="{{ $product->id }}">
                                  Add to Cart
                              </button>
                             
                              @endif

                            @else

                            <button type="submit" data-id="{{ $product->id }}"
                                class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
                                data-id="{{ $product->id }}">
                                Add to Cart
                            </button>

                            @endif 
                         
                        </div>
                    </div>
                @endforeach

                @endif




            </div>
        </div>
    </section>
    <!-- Products Section End-->
    <!-- Product Section End -->



    {{--
    <!--new categories section -->
    <section class="categories_sec container">
      <div class="categories_wrapper pb-0">
        <div class="row mb-3">
                <div class="col-lg-8 col-md-8 aos-init aos-animate" data-aos="zoom-in" style="    border-left: 7px solid #076483;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Search Categories</h2>
                    <p class="m-0">Services  available in following categories</p>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 aos-init aos-animate viewAllDesktop" data-aos="zoom-in">
                    <a href="{{ asset('department') }}" class="ViewAllBtn">View All Categories &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
        </div>



        <div class="carousel-wrap normalCarousel">
                <div class="owl-carousel owl-theme">
        @foreach ($departments as $department)
          <div class="item mt-4  mr-md-2  p-3">
            <div class="categories_img_div d-flex">
                <a class="d-flex justify-content-center align-items-center"  href="{{'https://wheelonpalm.com/departmentlist?department_id='.$department-> id}}">
              <img
                class="categories_img"
                src="{{ asset('public/upload/department/'.$department->image) }}"
                alt="White air-conditioner"
              />
              </a>
            </div>
            <h4 class="categories_h4"><a href="{{'https://wheelonpalm.com/departmentlist?department_id='.$department-> id}}" style="color:#000">{{ $department->name }}</a></h4>
          </div>
          @endforeach
        </div>
      </div>
      </div>
    </section>
    <!-- categories section end -->
    --}}

    <!--Services Section -->
    <div class="section-doctor sec_padding" data-aos="fade-up">
        <div class="container" style="padding-top: 60px;">
            <div class="row mb-3">
                <div class="col-lg-8 col-md-8" 
                    style="    border-left: 7px solid #076483;">
                    <h2 style="color: #0f4a86 !important; font-size:32px; font-weight:bold;">Our Services</h2>
                    <p class="m-0">Services provided from skillfull mainpower.</p>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pt-3 pb-sm-20 aos-init aos-animate viewAllDesktop"
                    data-aos="zoom-in">
                    {{--    <a href="{{ url('doctors') }}" class="ViewAllBtn">View All Services &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a> --}}
                    <a href="{{ route('user.services') }}" class="ViewAllBtn">View All Services &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        {{-- //new --}}



        <div class="container">
            <div class="carousel-wrap serviceCarousel">
                <div class="owl-carousel owl-theme">
                    @foreach ($doctors as $doctor)
                        <div class="item">
                            <a class="our_service mx-auto d-block"
                                href="{{ route('services.find', ['id' => $doctor->id]) }}">
                                @if ($doctor->image)
                                    <img class="owl-img mx-auto"
                                        src="{{ asset('public/upload/doctor/' . $doctor->image) }}">
                                @else
                                    <img class="owl-img mx-auto" src="{{ asset('public/images/doctor.png') }}">
                                @endif
                            </a>
                            <span class="img-text text-center">
                                <h4
                                    style="margin: 1rem 0; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $doctor->name }}</h4>
                                {{--   <p class="pb-2">{{ $doctor->service }} </p> --}}
                                <h6> {{ $doctor->department->name }} </h6>
                                <a href="{{ route('services.find', ['id' => $doctor->id]) }}" class="btn form-control"
                                    style="color:#000; background-color: #076483; color:#fff;">Book Now</a>
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-lg-right pt-3 pb-sm-20  viewAllMobile">
                <a href="{{ url('doctors') }}" class="ViewAllBtn">View All Doctors &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                </a>
            </div>
        </div>



    </div>
    <!--Services Section End -->

    <!-- Book Appointment Section -->
    {{--  <div class="section-hospital">
        <div class="container" style="padding-top: 60px;">
            <div class="row mb-3" >
                <div class="col-lg-8 col-md-8 aos-init aos-animate" data-aos="zoom-in" style="border-left: 7px solid #076483;">
                    <h2 style="color: #0f4a86 !important; font-size:32px; font-weight:bold;">Book Services</h2>
                    <p class="m-0">Get Services from Professionals</p>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pt-3 pb-sm-20 aos-init aos-animate viewAllBtn viewAllDesktop" data-aos="zoom-in">
                    <a href="{{ url('hospitals') }}" class="ViewAllBtn" >View All Services &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container" style="padding-bottom: 50px;">
            <div class="carousel-wrap normalCarousel">
                <div class="owl-carousel owl-theme">
                    @foreach ($hospitals as $hospital)
                    <div class="item">
                        <a href="{{ route('hospital.details',[$hospital->slug]) }}">
                        @if ($hospital->logo)
                        <img class="owl-img" src="{{ asset('public'.$hospital->logo) }}" alt="Card image cap">
                        @else
                        <img class="owl-img" src="{{ asset('public/images/hospital.png') }}" alt="Card image cap">
                        @endif
                        </a>
                        <span class="img-text text-center" >
                            <a href="{{ route('hospital.details',[$hospital->slug]) }}">
                                <h4 style="margin: 1rem 0; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $hospital->name }}</h4>
                                <h6 style="margin: 1rem 0; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-transform: capitalize;">{{ $hospital->address }}</h6>
                            </a>
                            <a href="{{ route('hospital.details',[$hospital->slug]) }}" class="btn form-control" style="background-color: #076483; color:#fff">Book Appointment</a>
                        </span>
                    </div>
                    @endforeach
                    
                </div>
                
                
            </div>
            <div class="col-lg-4 col-md-4 text-lg-right pt-3 pb-sm-20 aos-init aos-animate viewAllMobile" data-aos="zoom-in">
                    <a href="{{ url('hospitals') }}" style="padding: 7px 10px; border: 2px solid #c7c7c7; color:#000">View All Hospital &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
        </div>
    </div> --}}
    <!-- Book Appointment Section End -->


    <!-- Health Packages -->
    <div class="pricing-main-box flex py-5 mt-4 sec_padding" data-aos="fade-up">

        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-8"
                    style="border-left: 7px solid #076483;">
                    <h2 style="color: #0f4a86 !important; font-size:32px; font-weight:bold;">Subscription Package</h2>
                    <p class="m-0">Get packages as per your requirement</p>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pt-2  viewAllDesktop">
                    <a href="https://wheelonpalm.com/pricing" class="ViewAllBtn">View All Package &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="pricing-part-main-box">
                <div class="row">
                    @foreach ($package as $p)
                        <div class="col-md-4">
                            <div class="pricing-all-content aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                                <div class="pricing-part-box" >
                                    <h3>{{ $p->name }}</h3>
                                    <span class="badge badge-info">{{-- $p->deparmentdata?  $p->deparmentdata->name:"not assigned" --}}</span>
                                    <div class="pricing-cost ">
                                        <h3>{{ Session::get('currency') }}</h3>
                                        <span>Rs.{{ $p->price }}</span>
                                        <h6>/day</h6>
                                    </div>
                                    <p class="pricing-part-box__p">{{ $p->description }}</p>
                                </div>
                                <div class="pricing-part-btn">
                                    <a class="btn" href="{{ url('subscription') . '/' . $p->id }}">Order now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-lg-right pt-2  viewAllMobile mt-2" >
                <a href="https://wheelonpalm.com/pricing" class="viewAllBtn">View All Package &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>
    <!-- Health Packages End -->


    <!-- how it works section  -->
    {{-- <section class="hiw_sec" data-aos="fade-up">
        <div class="hiw_wrapper">
            <h3 class="">How it works</h3>
            <div class="process_div row">
                <div class="process step-one col-md-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-delay="0">
                    <div class="process_img_div">
                        <img class="process_img" src="{{ asset('public/upload/selectPackage.png') }}" alt="" />
                    </div>
                    <h4>Select Packages</h4>
                    <p>"Discover a variety of packages tailored just for you."</p>
                </div>
                <div class="process step-two col-md-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-delay="200">
                    <div class="process_img_div">
                        <img class="process_img" src="{{ asset('public/upload/chooseService.png') }}" alt="" />
                    </div>
                    <h4>Choose Services</h4>
                    <p>"Pick the service that suits you best."</p>
                </div>
                <div class="process step-three col-md-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-delay="400">
                    <div class="process_img_div">
                        <img class="process_img" src="{{ asset('public/upload/bookAppointment.png') }}"
                            alt="" />
                    </div>
                    <h4>Book an appointment</h4>
                    <p>"Book an appointment and get ready to enjoy!"</p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- how it works section end -->
    {{--
    <!-- Meet the hire pros  -->
    <section class="hire_sec">
      <div class="hire_wrapper">
        <div class="hire_left">
          <div class="hire_img_div">
            <img
              class="hire_img"
              src="{{ asset('public/upload/inidianMaind.png') }}"
              alt=""
            />
          </div>
        </div>
        <div class="hire_right">
          <h2>For Customers</h2>
          <ul class="hire_list">
            <li>
              <i class="right_arrow fa-solid fa-circle-arrow-right"></i>
              <div>
                <h4>Convenience:</h4>
                <p>
                                Customers can easily find and book
                a wide range of services through a single app,
                saving time and effort compared to searching for
                service providers individually.
                </p>
              </div>
            </li>
            <li>
              <i class="right_arrow fa-solid fa-circle-arrow-right"></i>
              <div>
                <h4>Choice and Comparison:</h4>
                <p>
                               The app provides a
                variety of service providers, allowing customers to
                compare offerings, prices, and reviews before
                making a decision.
                </p>
              </div>
            </li>
            <li>
              <i class="right_arrow fa-solid fa-circle-arrow-right"></i>
              <div>
                <h4>Accessibility:</h4>
                <p>
                    Users can access services from their
                    smartphones, anytime and anywhere, eliminating
                    the need for physical visits or calls.
                </p>
              </div>
            </li>
            <li>
              <i class="right_arrow fa-solid fa-circle-arrow-right"></i>
              <div>
                <h4>Trust and Quality:</h4>
                <p>
                               The app typically features reviews and Ease of Payment: Integrated payment gateways
                ratings from previous customers, helping customers make make it easy for customers to pay for services without
                informed choices & trust the quality of the services they're dealing with cash transactions.
                booking.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Meet the hire pros  -->
    --}}



    {{--
    
    <!-- Medicine Seller and Priscription Section -->
    <section class="medicine-seller-priscription">
        <div class="container" style="padding-top: 80px;padding-bottom: 20px">
            <div class="row">
                <div class="col-lg-6  aos-init aos-animate " data-aos="zoom-in" style="    border-left: 7px solid #076483;">
                <!--<div class="col-lg-6 col-12 aos-init aos-animate " data-aos="zoom-in" style="    border-left: 7px solid #076483;">-->
                    <h2 style="color: #0f4a86 !important; font-size:32px; font-weight:bold;">Be a part of us</h2>
                    <p class="m-0"></p>
                </div>
                
            </div>
            <div class="row pt-5 pb-5  ">
                <div class="col-lg-6 col-sm-12 seller aos-init aos-animate" data-aos="zoom-in">
                    <div class="p-3" style="background:#076483;border-radius:10px;">
                        <div class="mobile-view">
                            <div class=" p-3 aos-init aos-animate my-2" data-aos="zoom-in">
                            <!--<div class="col-7 p-3 aos-init aos-animate my-2" data-aos="zoom-in">-->
                                <h3 class="text-white">Become a Seller</h3>
                                <p class="text-white" style="font-size:14px">"Ready to share your products with the world? Join us as a seller. Reach a wider audience, set up your shop, and start your entrepreneurial journey."</p>
                                <button class="become_seller" style="background: white; border: 0px; border-radius: 14px;  padding: 6px 20px;">Register
                                    Now</button>
                            </div>
                            <div class=" aos-init aos-animate" data-aos="zoom-in">
                            <!--<div class="col-5 aos-init aos-animate" data-aos="zoom-in">-->
                                <!--<img class="seller-img" src="{{ url('resources/views/seller.jpg') }}" style="border-radius:10px; border:5px solid white; width:100%;">-->
                                     <img class="seller-img" src="data:image/png;base64,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" style="border-radius:10px;  width:100%;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 seller aos-init aos-animate" data-aos="{{ url('resources/views/seller.jpg') }}zoom-in">
                    <div class="p-3 aos-init aos-animate my-2" data-aos="zoom-in" style="background:#0f4a86;border-radius:10px;">
                        <div class="mobile-view2">
                            <div class="aos-init aos-animate " data-aos="zoom-in">
                            <!--<div class="col-5 aos-init aos-animate " data-aos="zoom-in">-->
                                <!--<img class="seller-img" src="{{ url('resources/views/upload.jpg') }}" style="border-radius:10px; border:5px solid white; width:100%;">-->
                                 <img class="seller-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzuxIHNkhKJF5_oLvMqp5A7aXDHO4KExl6cg&usqp=CAU" style="border-radius:10px;  width:100%;">
                            </div>
                            <div class="p-3 aos-init aos-animate  " data-aos="zoom-in">
                            <!--<div class="col-7 p-3 text-right aos-init aos-animate  " data-aos="zoom-in">-->
                                <h3 class="text-white">Become  Service Provider</h3>
                                <p class="text-white" style="font-size:14px">"Passionate about your services? Become a provider and offer your expertise to a larger clientele. Join us to connect with those in need of your skills."</p>
                                <button class="priscription_upload" style="background: white; border: 0px; border-radius: 14px;  padding: 6px 20px;">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Medicine Seller and Priscription Section End -->

    --}}




    <!-- Download App QR Section -->
    {{--
    <section class="mb-5" style="background-image: url('{{ asset('public/front/bg.jpg') }}'); background-position: center center;background-repeat: no-repeat;">

        <div class="container-fluid" style="background-image: radial-gradient(at top right, #43848dc7 0%, #43848df0 100%); text-align:center;">
            <div class="row col-reverse">
                <div class="col-lg-1 col-md-1 col-sm-12"></div>
                <div class="col-lg-5 col-md-5 col-sm-12 pt-4 aos-init aos-animate mobile-app" data-aos="zoom-in">
                    <h1 class="text-white download-text"><b>Download Our App</b></h1><br>
                    <p class="text-white">Conveniently transform frictionless mindshare after orthogonal manufactured
                        products.</p>
                    <div class="row col-reverse">
                        <div class="col-lg-4 col-md-4 col-sm-12 aos-init text-center pb-4" data-aos="zoom-in">
                            <img src="{{ asset('public/front/scan.png') }}" class="img-fluid scanqr app-qr__bottom" style="border:5px solid black; ">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 aos-init" data-aos="zoom-in">
                            <h2 class="text-white download-text" ><b>Scan here to <br>Download our App</b></h2>
                            <hr style="background:white; height:3px;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 pt-4 aos-init aos-animate" data-aos="zoom-in">
                    <img src="{{ asset('public/front/hand-app.png') }}" class="img-fluid ">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12"></div>
            </div>
        </div>
    </section>
    --}}
    <!-- Download App QR Section End -->

    <!-- download in mobile -->
    <section class="download_app_sec" data-aos="fade-up">
        <div class="download_app">
            <div class="dom_img_div">

                <img style="width: 100%;border-radius:8px" class="dom_img"
                    src="{{ asset('public/upload/Qrscanner.jpg') }}" alt="" />
            </div>

            <div class="dom_info">
                <h2><span class="dom_bold">Download</span>&nbsp;APP NOW</h2>
                <p>Select your device platform and get download start</p>
                <div>
                    <button class="apple_user app_btn">
                        <i class="fa-brands fa-apple"></i>&nbsp;Apple User
                    </button>
                    <button class="android_user app_btn">
                        <i class="fa-brands fa-android"></i>
                        &nbsp; Android User
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- download in mobile End-->




    <!-- Number Count Section -->
    <div class="numbers-counter-main-box" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6 aos-init aos-animate p-2" data-aos="zoom-in">
                    <div class="numbers-counter-part-box aos-init aos-animate" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in" class="aos-init aos-animate">
                            <img src="{{ asset('public/front/img/n1.png') }}">
                            <div class="counter-value aos-init aos-animate" data-count="{{ $setting->happy_client }}"
                                data-aos="zoom-in">{{ $setting->happy_client }}</div>
                            <div class="counter-name aos-init aos-animate" data-aos="zoom-in">
                                <p>Happy people</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 p-2">
                    <div class="numbers-counter-part-box aos-init aos-animate" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in" class="aos-init aos-animate">
                            <img src="{{ asset('public/front/img/n2.png') }}">
                            <div class="counter-value aos-init aos-animate" data-count="{{ $setting->surgery_complete }}"
                                data-aos="zoom-in">{{ $setting->surgery_complete }}</div>
                            <div class="counter-name aos-init aos-animate" data-aos="zoom-in">
                                <p>SURGERY COMPLETED</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 p-2">
                    <div class="numbers-counter-part-box aos-init aos-animate" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in" class="aos-init aos-animate">
                            <img src="{{ asset('public/front/img/n3.png') }}">
                            <div class="counter-value aos-init aos-animate" data-count="{{ $setting->expert_doctor }}"
                                data-aos="zoom-in">{{ $setting->expert_doctor }}</div>
                            <div class="counter-name aos-init aos-animate" data-aos="zoom-in">
                                <p>{{ $setting->expert_doctor }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 p-2">
                    <div class="numbers-counter-part-box aos-init aos-animate" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in" class="aos-init aos-animate">
                            <img src="{{ asset('public/front/img/n4.png') }}">
                            <div class="counter-value aos-init aos-animate" data-count="{{ $setting->worldwide_branch }}"
                                data-aos="zoom-in">{{ $setting->worldwide_branch }}</div>
                            <div class="counter-name aos-init aos-animate" data-aos="zoom-in">
                                <p>{{ __('messages.World wide branch') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Number Count Section End -->

    {{--
     <!--Blog Section -->
    <div class="section-department">
        <div class="container" style="padding-top: 60px;">
            <div class="row mb-3">
                <div class="col-lg-8 col-md-8 aos-init aos-animate" data-aos="zoom-in" style="    border-left: 7px solid #076483;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Blogs</h2>
                    <p class="m-0">Get Information through our blogs</p>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 aos-init aos-animate viewAllDesktop" data-aos="zoom-in">
                    <a href="{{ url('blogslist') }}" class="ViewAllBtn">View All Blogs &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="carousel-wrap normalCarousel">
                <div class="owl-carousel owl-theme">
                    @foreach ($blogs as $blog)
                    <div class="item">
                        <img class="owl-img" src="{{ asset('public' . $blog->image) }}"  />
                        <span class="img-text text-center">
                            <h4 class="mt-3" style="font-weight: 600;line-height: 1;text-align: left;">{!! substr($blog->title, 0, 30) !!}...</h4>
     
                            <p  class="card-text">{!! substr($blog->description, 0, 50) !!}...</p>
                            <a href="{{ asset('blogs/'.$blog->slug) }}" class="btn form-control" style="background-color: #076483; color:#fff;">Read More <i class="fa fa-hand-o-left " aria-hidden="true"></i> </a>
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 aos-init aos-animate viewAllMobile" data-aos="zoom-in">
                    <a href="{{ url('blogslist') }}" class="ViewAllBtn">View All Blogs &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
        </div>
    </div>
    <!-- Blog Section End -->
    --}}

    <!-- Trusted Section -->
    <section style="background: #f7f7f7;padding: 0 0 4rem 0" data-aos="fade-up" data-aos-duration="3000">


        <div class="container" style="padding-top: 80px;">
            <div class="global-heading " >
                <h2>Trusted By Company</h2>
                <p>Diagnostic Services Professional Consultation Tooth Implants<br> Surgical Extractions Teeth Whitening</p>
            </div>
        </div>
        <div class="container" style="padding-bottom: 50px;">
            <div class="carousel-wrap" id="owlCarouseltrust">
                <div class="owl-carousel  owl-theme">

                    <div class="item">
                        <img src="{{ asset('public/front/white-logo1.png') }}" />
                        <span class="img-text text-center">
                        </span>
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/front/haji.png') }}" />
                        <span class="img-text text-center">
                        </span>
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/front/trackit.png') }}" />
                        <span class="img-text text-center">
                        </span>
                    </div>

                    <!--<div class="item">-->
                    <!--<img src="{{ asset('public/front/lll.png') }}" />-->
                    <!--<span class="img-text text-center">-->
                    <!--</span>-->
                    <!--</div>-->
                    <!--<div class="item">-->
                    <!--<img src="{{ asset('public/front/lll.png') }}" />-->
                    <!--<span class="img-text text-center">-->
                    <!--</span>-->
                    <!--</div>-->

                </div>
            </div>
        </div>

    </section>
    <!-- Trusted Section End -->

    <!-- Registration Hospital and Doctor Section -->
    {{--
    <section>
        <div class="container" style="padding-top: 80px;">
            
            <div class="row pt-5 pb-5">
                <div class="col-lg-6 col-sm-12 pb-4">
                    <div class="p-3 aos-init aos-animate" data-aos="zoom-in" style="background:#076483;border-radius:10px;">
                        <div class="row">
                            <div class="col-12 p-3 text-center aos-init aos-animate" data-aos="zoom-in">
                                <h3 class="text-white text-center ">Become our Servce Provider</h3>
                                <button class="become_health_partner" style="background: white; border: 0px; border-radius: 14px;  padding: 6px 20px;">Apply Now</button>
                            </div>
                        
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="p-3 aos-init aos-animate" data-aos="zoom-in" style="background:#0f4a86;border-radius:10px;">
                        <div class="row">
                        
                            <div class="col-12 p-3 text-center aos-init aos-animate" data-aos="zoom-in">
                                <h3 class="text-white text-center ">Become Our Cusomer</h3>
                                <button class="become_doctor" style="background: white; border: 0px; border-radius: 14px;  padding: 6px 20px;">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    --}}
    <!-- Registration Hospital and Doctor Section End -->

    {{-- Modals --}}
    <div class="modal fade" id="modalHealthPartner" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                @if ($errors->any())
                    <div class="alert alert-danger" data-aos="zoom-in">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="appliedHealthForm" action="{{ asset('applied-health-partner') }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-header" data-aos="zoom-in" style="background-color:#076483;">
                        <h5 class="modal-title">Become a Service Provider</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
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
                                <label for="healthpartnername" class="form-label fw-semi">Service Provider Name <span
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

                            <div class="col-md-6 mb-3" data-aos="zoom-in" style="display: flex; align-items: center;">
                                <label for="partnerdistrictid" class="form-label fw-semi">City<span
                                        class="text-primary">*</span></label>
                                <select name="city_id" class="form-control select2" required>
                                    <option selected disabled>Select City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="address" class="form-label fw-semi">Address<span class="text-primary">
                                        *</span></label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter your  Address">
                            </div>
                            <!--column-->
                            {{-- <div class="col-md-6 mb-3" data-aos="zoom-in">
                            <label for="type" class="form-label fw-semi">Partner Type<span class="text-primary"> *</span></label>
                            <select class="form-control" id="type" name="partner_type">
                                <option value="lab">Lab</option>
                                <option value="clinic">PolyClinic</option>
                                <option value="pharmacy">Pharmacy</option>
                            </select>
                        </div> --}}
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="type" class="form-label fw-semi">Upload Document<span
                                        class="text-primary"> *</span></label>
                                <input type="file" id="file" name="document" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="type" class="form-label fw-semi">Upload Logo

                                    <input type="file" id="file" name="logo" class="form-control">
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
                                <select name="department_ids[]" class="form-control select2" multiple required>
                                    <!--<option selected disabled>Select Department</option>-->
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn becomepartnerBtn mt-3 ms-2 me-3" id="formsubmitBtn"
                            style="background-color:#076483; color: white;">
                            Become a Service Provider
                        </button>
                        <button type="button" class="btn btn-danger mt-3 float-right" data-bs-dismiss="modal"="modal">
                            Close
                        </button>
                    </div>
                    <div class="modal-footer" data-aos="zoom-in" style="background-color:#076483; height: 50px;">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDoctor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="appliedDoctorForm" action="{{ asset('applied-doctor') }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-header" style="background-color:#076483;">
                        <h5 class="modal-title">Become a Doctor</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row hide" id="alertSectionDF">
                        <div class="col-sm-12">
                            <div class="alert" id="alertMsgDF"></div>
                        </div>
                    </div>

                    <div class="modal-body" id="bodySectionDF" style="background-color:#f1f1f9">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstname" class="form-label fw-semi">Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Name" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mobileno" class="form-label fw-semi">Phone Number <span
                                        class="text-primary">*</span> </label>
                                <input type="number" class="form-control" id="mobileno" name="phone_no"
                                    onkeypress="validatePhoneNumber(6)" maxlength="10" pattern="[1-9]{1}[0-9]{9}"
                                    placeholder="Enter your Phone Number" required>
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-semi">Email <span
                                        class="text-primary">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter Email Address">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label fw-semi">Password <span
                                        class="text-primary">*</span></label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter password">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partnerdistrictid" class="form-label fw-semi">Nmc Number<span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" name="nmc"
                                    placeholder="Enter Your NmcNO">
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3">
                                <label for="partnervdcid" class="form-label fw-semi">Experienced Year<span
                                        class="text-primary"> *</span></label>
                                <input type="text" class="form-control" name="experience"
                                    placeholder="Enter Your Experienced Year">

                                </select>
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3">
                                <label for="department_id" class="form-label fw-semi">Specialist<span
                                        class="text-primary"> *</span></label>
                                <select name="department_id" class="form-control" required>
                                    <option selected disabled>Select Specialist</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--column-->

                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label fw-semi">Qualification<span class="text-primary">
                                        *</span></label>
                                <input type="text" class="form-control" id="address" name="qualification"
                                    placeholder="Select Qualification">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="city_id" class=" form-control-label">Select City<span
                                        class="reqfield">*</span>
                                </label>
                                <select name="city_id" class="form-control">
                                    <option value="">Select City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3">
                                <label for="type" class="form-label fw-semi">Currently Working at<span
                                        class="text-primary"> *</span></label>
                                <select class="form-control" id="work_type" name="work_type">
                                    <option value="lab">Lab</option>
                                    <option value="clinic">PolyClinic</option>
                                    <option value="pharmacy">Pharmacy</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn mt-3 ms-2 me-3" id="formsubmitBtn"
                            style="background-color:#076483; color: white;">
                            Become a Doctor
                        </button>
                        <button type="button" class="btn btn-danger float-right mt-3" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                    <div class="modal-footer" style="background-color:#076483; height: 50px;">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="sellerRegisterModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#076483;">
                    <h5 class="modal-title" id="exampleModalLongTitle">Become a Seller</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ asset('applied-seller') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Cities</label>
                                    <select name="city_ids[]" class="select2 form-control" style="width:100%" multiple
                                        required>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input type="file" name="image_path" id="preview_img" style="font-size: 13px;"
                                        required />
                                    <div id="viewLogo">
                                        <img src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.pJlS~36fbd/w:auto/h:auto/q:90/f:avif/https://s15165.pcdn.co/wp-content/uploads/2021/07/audience.png"
                                            width="220" height="350" style="margin-top:20px">
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-3 mt-1"
                                style="background-color:orange;">Register Now</button>
                        </div>
                    </div>
                </form>
                <div class="modal-footer" style="background-color:#076483;">
                    {{-- footer --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="PrescriptionModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#076483;">
                    <h5 class="modal-title" id="exampleModalLongTitle">Upload Prescription</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ asset('upload-prescription') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body" style="background-color:#f1f1f9">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">

                                {{--    @if (auth()->user()) 
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <span>{{ auth()->user()->name }}</span>
                                </div>
                                @if (auth()->user()->phone_no)
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <span>{{ auth()->user()->phone_no }}</span>
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <span>{{ auth()->user()->email }}</span>
                                </div>
                                @endif
                            @else
                        --}}
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" required>
                                </div>
                                {{--    @endif  --}}
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <input type="text" name="message" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Delivery Address</label>
                                    <input type="text" name="delivery_address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Prescription Image</label>
                                    <input type="file" name="path" id="preview_img2" required />
                                    <div id="viewLogo2"></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-3 m-2"
                                style="background-color:orange">Upload Now</button>
                        </div>
                    </div>
                </form>
                <div class="modal-footer" style="background-color:#076483;">
                    {{-- footer --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Modals End --}}

    <div class="d-none">
        <img src="{{ asset('public/upload/mero gaadi logo black.png') }}" />
        <span class="img-text text-center">
        </span>
    </div>
@endsection

@section('scripts')


    <script>
        $('.select2').select2();

        $('.select3').select2();

        $(document).on('change', '.city_id', function() {
            let id = $(this).val();
            let url = "{{ asset('gethospitals') }}";
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
                        $('#hospitalID').empty();
                        $('#hospitalID').append('<option selected disabled>Select Hospital</option>');
                        $.each(data.data, function(k, v) {
                            let tempurl = "{{ asset('hospital') }}/" + v.slug;
                            $('#hospitalID').append('<option value="' + tempurl + '">' + v
                                .name + '</option>');
                        });
                    } else {
                        console.log('error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });

        });

        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#viewLogo').html('<img src="' + e.target.result + '" width="200" height="200"/>');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function filePreview2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#viewLogo2').html('<img src="' + e.target.result + '" width="200" height="200"/>');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#preview_img').on('change', function() {
            filePreview(this);
        });

        $('#preview_img2').on('change', function() {
            filePreview2(this);
        });

        $(document).on('change', '.hospital_id', function() {
            let url = $(this).val();
            window.location.href = url;
        });

        $(document).on('change', '.department_id', function() {
            let id = $(this).val();
            window.location.href = "{{ asset('find-doctor?department_id=') }}" + id;
        });

        $(document).on('click', '.become_seller', function() {
            $('#sellerRegisterModal').modal('show');
        });
        $(document).on('click', '.priscription_upload', function() {
            $('#modalHealthPartner').modal('show');
        });

        $(document).on('click', '.add_to_cart', function() {

            @if (auth()->user())

                let id = $(this).data('id');
                let url = "{{ asset('/add-to-cart') }}";
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
                            toastr.success(data.message);
                            // alert(data.message);                    
                            $('#cartTotalCount').html(data.cartCount);
                            $('#productContent').html(data.productView);
                        } else {
                            console.log(data.message);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            @else
                @php
                    session()->flash('product_id', $product->id);
                @endphp
                window.location.href = "{{ url('login') }}";
            @endif
        });

        $(document).on('click', '.appoint_now', function() {
            let id = $(this).data('id');
            let url = "{{ asset('/doctor-detail-page') }}";
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
                        $('#doctorModal').modal('show');
                        $('#appointmentContent').html(data.data);
                    } else {
                        console.log('error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });

        $(document).on('click', '#bookNow', function() {
            let url = "{{ asset('/bookappoinment') }}";
            let name = $('#book_name').val();
            let phone_no = $('#book_contact_number').val();
            let department_id = $('#book_department_id').val();
            let doc_id = $('#book_doc_id').val();
            let service_id = null;
            let user_id = $('#bookAuthId').val();
            let messages = $('#book_message').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "name": name,
                    "phone_no": phone_no,
                    "department_id": department_id,
                    "doc_id": doc_id,
                    "service_id": service_id,
                    "user_id": user_id,
                    "messages": messages,
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        alert(data.message);
                        $('#doctorModal').modal('hide');
                    } else {
                        console.log('error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });

        $(document).on('click', '.become_health_partner', function() {
            $('#alertSectionAHP').addClass('hide');
            $('#modalHealthPartner').modal('show');
            $('#bodySectionAHP').removeClass('hide');
        });
        $(document).on('click', '.become_doctor', function() {
            $('#alertSectionDF').addClass('hide');
            $('#modalDoctor').modal('show');
            $('#bodySectionDF').removeClass('hide');
        });

        $('#appliedHealthForm').on('submit', function(e) {
            e.preventDefault();
            let url = $(this).attr('action');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {

                    $('#alertSectionAHP').removeClass('hide');
                    $('#bodySectionAHP').addClass('hide');
                    $('#alertMsgAHP').html(data.message);
                    $('#alertMsgAHP').addClass('alert-success');
                    if (data.status == true) {
                        $('#appliedHealthForm')[0].reset();
                    }
                },
                error: function(xhr) {
                    let errorMessage = "<div class='alert alert-danger'><ul>";
                    $.each(xhr.responseJSON.errors, function(k, v) {
                        errorMessage = "<li>" + errorMessage + v + '</li>';
                    });
                    errorMessage = errorMessage + "</ul></div>";
                    $('#alertSectionAHP').removeClass('hide');
                    $('#alertMsgAHP').html(errorMessage);
                }
            });
        });

        $('#appliedDoctorForm').on('submit', function(e) {
            e.preventDefault();
            let url = $(this).attr('action');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    $('#alertSectionDF').removeClass('hide');
                    $('#bodySectionDF').addClass('hide');
                    $('#alertMsgDF').html(data.message);
                    $('#alertMsgDF').addClass('alert-success');
                    if (data.status == true) {
                        $('#appliedDoctorForm')[0].reset();
                    }
                },
                error: function(xhr) {
                    let errorMessage = "<div class='alert alert-danger'><ul>";
                    $.each(xhr.responseJSON.errors, function(k, v) {
                        errorMessage = "<li>" + errorMessage + v + '</li>';
                    });
                    errorMessage = errorMessage + "</ul></div>";
                    $('#alertSectionDF').removeClass('hide');
                    $('#alertMsgDF').html(errorMessage);
                }
            });
        });
    </script>

    <script>
        $("#owl-demo2").owlCarousel({
            loop: false,
            autoplay: 6000,
            autoPlaySpeed: 1000,
            slideSpeed: 100,
            paginationSpeed: 400,
            items: 4,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: 1
                },

                700: {
                    items: 2
                },

                800: {
                    items: 3
                },
                1100: {
                    items: 4
                }
            }


        });

        var owl = $(".owl-carousel_prev_next");

        $(".next-btn").click(function() {
            owl.trigger("next.owl.carousel");
        });
        $(".prev-btn").click(function() {
            owl.trigger("prev.owl.carousel");
        });
        $(".prev-btn").addClass("disabled");
    </script>
@endsection
