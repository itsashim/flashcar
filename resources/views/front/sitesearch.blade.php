@extends('front.layout.front')
@section('title')
    {{ __('Search Results') }}
@stop
@section('styles')
    <style>
        .bookThisTime {
            font-size: 10px;
        }

        /* Scroll Menu */
        div.scrollmenu {
            background-color: #00BE9C;
            overflow: auto;
            white-space: nowrap;
            text-align: center;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            font-weight: bold;

            text-decoration: none;
        }

        .department-part-box {
            box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
            padding: 1rem;
            text-align: center;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }



        @media only screen and (max-width: 600px) {
            div.scrollmenu {
                padding-left: 0;
            }

            .searchResults {
                text-align: center;

            }
        }

        /* Scroll Menu End */
    </style>
@endsection
@section('content')
    <div class="departmentpg-main-box">
        <div class="container">
            <div class="row">
                {{--
                <!---->
                <div class="scrollmenu col-sm-12" style="margin=5px 0">
                    <a class="nav-link" id="tabHospital">Hospitals <span
                            id="countHospitals">({{ $hospitals->count() }})</span></a>
                    <a class="nav-link" id="tabDepartment">Departments <span
                            id="countDepartments">({{ $departments->count() }})</span> </a>

                    <a class="nav-link" id="tabDoctor">Doctors <span id="countDoctors">({{ $doctors->count() }})</span> </a>

                    <a class="nav-link" id="tabProduct">Products <span id="countProducts">({{ $products->count() }})</span>
                    </a>

                    <a class="nav-link" id="tabBlog">Blogs <span id="countBlogs">({{ $blogs->count() }})</span> </a>

                </div>
                <!---->
--}}






                {{-- <div class="col-sm-8 mt-2">
					<button class="btn btn-primary" id="tabHospital">Hospitals <span id="countHospitals">({{ $hospitals->count() }})</span></button>
					<button class="btn btn-primary" id="tabDepartment">Departments <span id="countDepartments">({{ $departments->count() }})</span></button>
					<button class="btn btn-primary" id="tabDoctor">Doctors <span id="countDoctors">({{ $doctors->count() }})</span></button>
					<button class="btn btn-primary" id="tabProduct">Products <span id="countProducts">({{ $products->count() }})</span></button>
					<button class="btn btn-primary" id="tabBlog">Blogs <span id="countBlogs">({{ $blogs->count() }})</span></button>
					<input type="hidden" id="currentSearchTab" value="hospital" />
				</div>
		--}}
                <div class="col-sm-12 col-lg-12  my-3">


                    <!--<div class="col-sm-12 col-md-12 col-lg-6" style="float:left">-->
                    <!--    <input style="width: 80%;float:left;" type="text" name="search_now" class="form-control"-->
                    <!--        placeholder="Search Hospitals,departments, doctors,products,blogs" id="searchSite"-->
                    <!--        value="{{ request()->get('search') }}" />-->
                    <!--    <button class="btn btn-primary float-left" id="searchNow">-->
                    <!--        <i class="fa fa-search"></i>-->
                    <!--    </button>-->
                    <!--</div>-->

                    {{-- <div class="col-sm-12 col-md-12 col-lg-6" style="float:left">
                        <form action="{{ url('site-search') }}" method="GET">
                            <div class="input-group mb-3">
                                <input name="search" style="border-radius: 10px 0 0 10px;" type="text"
                                    class="form-control" placeholder="Search Hospitals,departments, doctors,products,blogs"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"
                                        style="background-color: #00be9c;color: white;border-radius: 0 10px 10px 0;">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> --}}

                    <div class="global-heading searchResults text-center">
                        <h2>{{ __('Search Results') }}</h2>
                    </div>
                </div>

            </div>
            <input type="hidden" name="searchTextResponse" id="searchTextResponse" value="{{ $search }}" />
            {{-- @if ($hospitals) --}}
            {{--
            @if ($hospitalCount > 0)
                <h1 class="text-center bg-info text-light">Hospitals</h1>

                <div class="department-part-main-box mb-4" id="mainView">
                    <div class="" style="display:grid; grid-template-columns:1fr 1fr 1fr 1fr; gap:1rem;">
                        @foreach ($hospitals as $hospital)
                            <div class=" text-center mt-4"
                                style="box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px; padding: 1rem;
							">
                                <a href="{{ asset('hospital/' . $hospital->slug) }}">
                                    <img style="width:200px; height:200px;" src="{{ asset('public' . $hospital->logo) }}"
                                        alt="">
                                    <h3 class="mt-3" style="color:#000; text-transform:capitalize;">
                                        {{ $hospital->name }}
                                    </h3>
                                </a>
                                <span>
                                    {{ isset($hospital->city) ? $hospital->city->name : $hospital->city_id }}
                                </span>
                                <br />
                                <div class="btn bg-lightgreen mt-2">
                                    <a style="color:#fff" href="{{ asset('hospital/' . $hospital->slug) }}">Book
                                        appointment</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
--}}

            {{-- @if ($departments) --}}
            {{--
            @if ($departmentCount > 0)
                <h1 class="text-center bg-info text-light">Departments</h1>

                <div class="departmentpg-main-box">
                    <div class="container">
                        <div class="department-part-main-box my-4">
                            <div class="row">
                                @foreach ($departments as $d)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="department-part-box">
                                            <div class="department-part-img">
                                                <img src="{{ asset('public/upload/department') . '/' . $d->image }}"
                                                    width="200px"
                                                    height="200px>
                									</div>
                									<div class="text-detail-box">
                                                <h4>{{ $d->name }}</h4>
                                                <p>{{ substr($d->description, 0, 75) }}</p>
                                            </div>
                                            <div class="department-viewd-btn services-btn-main-box">
                                                <a
                                                    href="{{ url('find-doctor?department_id=') . '/' . $d->id }}">{{ __('messages.View Detail') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
--}}

            @if ($productCount > 0)
                <h1 class="text-center text-light" style="background-color: #20748f;">Products</h1>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="mb-2 col-sm-6 col-md-6 col-lg-3 ">
                            <a title="Show products in category Orthopaedics"
                                href="{{ asset('product_details/' . $product->slug) }}" target="_self" class="">
                                <article class="card mb-2 p-2">
                                    <img src="{{ asset('public/' . $product->photo) }}" alt="{{ $product->name }}"
                                        class="card-img mb-1 object-fit-contain" width="200px"
                                        height="200px" />
                                        <div class="card-body">
                                    <a href="{{ asset('product_details/' . $product->slug) }}">
                                        <button data-id="{{ $product->id }}"
                                            class="btn bg-lightgreen text-light text-capitalize add_to_cart float-right text-white">add
                                            to cart</button>
                                        <h5 class="text-dark">{{ $product->name }}</h5>
                                    </a>
                                    @if ($product->offer_price)
                                        <span style="text-decoration:line-through;color:red;">Rs
                                            {{ $product->price }}</span> <span style="font-size:20px;color:green;">Rs.
                                            {{ $product->offer_price }}
                                        </span>
                                    @else
                                        <span style="color:green;">Rs {{ $product->price }}</span>
                                    @endif
                                </article>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif

            {{--
            @if ($doctorCount > 0)
                <h1 class="text-center bg-info text-light">Doctors</h1>

                <section class="doctors mb-4" id="doctors">
                    <div class="box-container" id="hospitallistbox"
                        style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                        @foreach ($doctors as $doctor)
                            <div class="box text-center" style="box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px; padding: 1rem;">
                                <a href="{{ asset('find-doctor?doctor_id=' . $doctor->id) }}">
                                    @if ($doctor->image)
                                        <img src="{{ asset('public/upload/doctor/' . $doctor->image) }}" alt=""
                                            width="200px" height="200px">
                                    @else
                                        <img src="{{ asset('public/images/doctor.png') }}" width="200px"
                                            height="200px" />
                                    @endif
                                    <h3>{{ $doctor->name }}</h3>
                                </a>
                                <span>{{ isset($doctor->hospital) ? $doctor->hospital->name : '-' }}</span>
                                <div class="share ">
                                    <a class="btn bg-lightgreen text-light text-capitalize"
                                        href="{{ asset('find-doctor?doctor_id=' . $doctor->id) }}">Book appointment</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            @if ($blogCount > 0)
                <h1 class="text-center bg-info text-light">Blogs</h1>
                <div class="row" id="hospitallistbox">
                    @foreach ($blogs as $blog)
                        <div class="doctor-card col-lg-3 col-md-4 col-sm-6">
                            <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
                                <a href="{{ asset('blogs/' . $blog->slug) }}">
                                    @if ($blog->image)
                                        <img style="width: 200px; height: 200px; border-radius: 50%" class="mt-4"
                                            src="{{ asset('public' . $blog->image) }}" alt="">
                                    @else
                                        <img style="width: 200px; height: 200px; border-radius: 50%" class="mt-4"
                                            src="{{ asset('public/images/hospital.png') }}" alt="" />
                                    @endif
                                </a>

                                <p class="text-center text-capitalize mt-4" style="font-size: 22px;">
                                    {{ $blog->title }}
                                </p>
                                <p class="text-center text-uppercase text-success" style="font-size: 1rem">
                                    {!! substr($blog->description, 0, 50) !!}...
                                </p>

                                <a href="{{ asset('blogs/' . $blog->slug) }}"
                                    class="btn bg-lightgreen text-light text-uppercase rounded-3">


                                    Read More
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
--}}
        </div>
    </div>
    <div id="doctorProfile" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
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
@stop
@section('scripts')
    <script>
        function siteSearch(searchType) {
            let searchText = $('#searchSite').val();
            $('#currentSearchTab').val(searchType);
            // let searchType = $('#searchTextResponse').val();
            $.ajax({
                url: "{{ asset('site-search/ajax') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    "searchType": searchType,
                    "searchText": searchText,
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#mainView').html(data.data);
                        // $('#countHospitals').html('( ' + data.hospitalCount + ' )');
                        // $('#countDepartments').html('( ' + data.departmentCount + ' )');
                        // $('#countDoctors').html('( ' + data.doctorCount + ' )');
                        $('#countProducts').html('( ' + data.productCount + ' )');
                        // $('#countBlogs').html('( ' + data.blogCount + ' )');
                    } else {
                        console.log(data);
                    }
                },
                error: function(error) {
                    // alert('error');
                }
            });
        }


        // $('#tabHospital').on('click', function() {
        //     siteSearch('hospital');
        // });
        // $('#tabDepartment').on('click', function() {
        //     siteSearch('department');
        // });
        $('#tabProduct').on('click', function() {
            siteSearch('product');
        });
        // $('#tabDoctor').on('click', function() {
        //     siteSearch('doctor');
        // });
        // $('#tabBlog').on('click', function() {
        //     siteSearch('blog');
        // });

        $('#searchNow').on('click', function() {
            let currenttab = $('#currentSearchTab').val();
            siteSearch(currenttab);
        });

        $('#searchSite').on('keyup', function(e) {
            if (e.keyCode == 13) {
                let currenttab = $('#currentSearchTab').val();
                siteSearch(currenttab);
            }
        });
    </script>
    <script>
        $(document).on('click', '.add_to_cart', function() {
            let id = $(this).data('id');
            let url = "{{ asset('/add-to-cart') }}";

            @if (auth()->user())
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
                            alert(data.message);
                        } else {
                            console.log(data.message);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            @else
                $('#product_id').val(id);
                showloginmodel();
            @endif
        });

        $(document).on('click', '.bookThisTime', function() {
            let date = $(this).data('date');
            let time = $(this).data('time');
            let id = $(this).data('id');
            window.location.href = "{{ asset('/appoint/doctor?doctor_id=') }}" + id + "&date=" + date + "&time=" +
                time;
        });

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
