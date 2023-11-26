@extends('front.layout.front')
<!-- owl carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('title')
    Category
@stop

@section('styles')
    <style>
        .card1_wrap {
            overflow: hidden;
        }

        .card1 {
            background-image: linear-gradient(#00000048, #000000c3);
            height: 25vh;
            background-repeat: no-repeat;
            object-fit: contain;
            color: white;
            position: relative;
            background-size: cover;

            transition: all 1.5s;
        }

        .card1:hover {
            overflow: hidden;
            transform: scale(1.1);
            zoom: 1;
            cursor: pointer;
        }

        /*.fade-in-image:hover {
                                animation: fadeIn 5s;
                            }

                            @keyframes fadeIn {
                                0% {
                                    opacity: 0;
                                }

                                100% {
                                    opacity: 1;
                                }
                            }*/



        /* .card1 h3 {
                    position: absolute;
                    top: 45%;
                    left: 25%;
                }

                .card1 h3 a {
                    color: #fff;
                } */

        .img-wrapper {
            /* width: 400px;
            height: 400px; */
            overflow: hidden;
            opacity: 0.9;
        }

        .inner-img {
            transition: 0.3s;
        }

        .inner-img:hover {
            transform: scale(1.1);
        }

        .img-wrapper {
            display: inline-block;
            box-sizing: border-box;
            //border: 1px solid #000;
        }

        .category_title {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            padding: 0 20px;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            z-index: 1;
            text-shadow: 1px 2px 4px rgba(0, 0, 0, .2);
        }


                /* Categories */
                .category_item_wrap {
        overflow: hidden;
        }
        .category_item {
        display: flex !important;
        height: 200px;
        position: relative;
        background-color: #030c0e;
        border-radius: 3px;
        align-items:center;
        }

        .category_item img {
            width: 100%;
            opacity: 0.7;
            transition: 3s all;
        }
        

        .category_item:hover img {
        transform: scale(1.4);
        }
        .category_item:hover {
        }

        .category_item p {
        position: absolute;
        margin: auto;
        inset: 0;
        text-align: center;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.7rem;
        font-weight: 600;
        }

/* categories end */

    </style>
@endsection

@section('content')
    <!--new categories section -->
    <section class="categories_sec container">
        <div class="categories_wrapper">
            <div class="row mb-3">
                <div class="col-lg-8 col-md-8 aos-init aos-animate" data-aos="zoom-in"
                    style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Categories</h2>
                    <p class="m-0">Services available in following categories</p>
                </div>
            </div>

            <div class="">
                <div class="row">
                    {{--
                    @foreach ($categories as $category)
                        <div class="card1_wrap col-lg-4 col-md-4 col-sm-6 p-2">
                            <div class=" card1 fade-in-image"
                                style="background-image: linear-gradient(#00000048, #000000c3), url('{{ asset("public{$category->image}") }}');">
                                <h3><a href="{{ asset('categories/' . $category->slug) }}"> {{ $category->name }} </a></h3>
                            </div>
                        </div>
                    @endforeach
                    --}}

                    @foreach ($categories as $category)
                        <div class="col-lg-4 col-md-6 p-3">
                            <div class="category_item_wrap">
                                <a
                                    href="{{route('categorySlug',$category->slug)}}"
                                    class="category_item d-flex justify-content-center align-items-center"
                                >
                                    <img
                                    src="{{ asset("public{$category->image}") }}"
                                    />
                                    <p>{{ $category->name }}</p></a
                                >
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- categories section end -->

@stop

@section('scripts')
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/5cfe83b03e.js" crossorigin="anonymous"></script>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- owl carosel cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- owl carousel js -->
    <script>
        $("#owl-demo2").owlCarousel({
            loop: true,
            autoplay: 1000,
            autoPlaySpeed: 1000,
            slideSpeed: 100,
            paginationSpeed: 400,
            items: 6,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: 2
                },

                700: {
                    items: 3
                },

                800: {
                    items: 4
                },
                1100: {
                    items: 6
                }
            }


        });

        var owl = $(".owl-carousel_prev_next");
        // owl.owlCarousel();
        $(".next-btn").click(function() {
            owl.trigger("next.owl.carousel");
        });
        $(".prev-btn").click(function() {
            owl.trigger("prev.owl.carousel");
        });
        $(".prev-btn").addClass("disabled");
    </script>

@endsection
