@extends('front.layout.front')

@section('title', 'Bike Details')

@section('styles')
    <style>
        .card-text {
            line-height: 3px;
        }

        .specs_9 {
            border: 1px solid black;
            width: auto;
            border-radius: 1rem;
            margin: 0.3rem;
            font-size: small;
            padding: 0.3rem;
        }


        .features_9 {
            width: auto;
            border-radius: 1rem;
            padding: 0.5rem;
            margin: 0.3rem;
            font-size: small;
            background-color: ghostwhite;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .Specifications {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            padding: 1rem;
            margin: 0.5rem;
        }

        .Specifications p {
            margin-bottom: 0px;
        }

        .features {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            padding: 1rem;
            margin: 0.5rem;
        }

        .features p {
            margin-bottom: 0px;
        }

        @media screen and (max-width:768px) {
            .google-map {
                width: 400px;
            }

        }
    </style>
@endsection

@section('content')

    <div class="container my-5">
        <div class="row">
            <!--CAROUSEL-->
            <div class="col-lg-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('public/' . $find_data->bike->logo_path) }}" alt="First slide">

                        </div>
                       {{--  <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('public/front/img/bike.png') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('public/front/img/bike.png') }}" alt="Third slide">
                        </div> --}}
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--CAROUSEL-->

                <!--SPECIFICATION CARD-->
                <div class="Specifications">
                    <h3 class="md-5">Specification</h3>
                    <div class="d-flex flex-wrap">
                        <div></div>
                        <div class="text-center specs_9">
                            <p>Engine CC</p>
                            <h6>250</h6>
                        </div>

                        <div class="text-center specs_9">
                            <p>Ownership</p>
                            <h6>{{$find_data->ownership}}</h6>
                        </div>

                        <div class="text-center specs_9">
                            <p>Price Negotiable</p>
                            <h6>No</h6>
                        </div>

                        <div class="text-center specs_9">
                            <p>Make year</p>
                            <h6>{{$find_data->year}}</h6>
                        </div>
                        <div class="text-center specs_9">
                            <p>Mileage</p>
                            <h6>{{$find_data->mileage}}</h6>
                        </div>

                        <div class="text-center specs_9">
                            <p>Bike Conditions</p>
                            <h6>{{$find_data->bike_condition}}</h6>
                        </div>

                        <div class="text-center specs_9">
                            <p>Tax Cleared</p>
                            <h6>{{$find_data->tax_cleared}}</h6>
                        </div>

                        <div class="text-center specs_9">
                            <p>KM run</p>
                            <h6>{{$find_data->run_km}}</h6>
                        </div>

                        <div class="text-center specs_9">
                            <p>Color</p>
                            <h6>{{$find_data->bike->color}}</h6>
                        </div>
                    </div>
                </div>
                <!--SPECIFICATION CARD-->

                <!--FEATURES CARD-->
                <div class="features">
                    <h3 class="md-5">
                        Bike features
                    </h3>
                    <div class="d-flex flex-wrap">

                        <div class="features_9">
                            @foreach ($features as $feature)
                                <p>{{$feature->name}}</p>
                            @endforeach
                        </div>
                        {{-- <div class="features_9">
                            <p>Front Disc</p>
                        </div>
                        <div class="features_9">
                            <p>Rear Disc</p>
                        </div>
                        <div class="features_9">
                            <p>Mono Suspension</p>
                        </div>
                        <div class="features_9">
                            <p>Low Fuel Indicator</p>
                        </div>
                        <div class="features_9">
                            <p>Tripmeter</p>
                        </div> --}}
                      {{--   <div class="features_9">
                            <p>FI ENGINE</p>
                        </div>
                        <div class="features_9">
                            <p>Low Oil Indicator</p>
                        </div>
                        <div class="features_9">
                            <p>Fuel Saving Modes</p>
                        </div>
                        <div class="features_9">
                            <p>Low Battery Indicator</p>
                        </div>
                        <div class="features_9">
                            <p>Turn Signal/Pass Light</p>
                        </div> --}}
                    </div>
                </div>

            </div>
            <!--FEATURES CARD-->

            <!--PRODUCT INFORMATION CARD-->
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-sm-12 m-2">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex text-left flex-column">
                                    <h3 class="card-title">Bajaj Pulsar 150</h3>
                                    <p class="lead font-italic font-weight-bold">{{$find_data->bike->register_no}}</p>
                                </div>
                                <h4 class="text-success text-center md-3">Selling Price Rs.{{$find_data->price}}</h4>
                                <div class="card-text">
                                    <h6>Description</h6>
                                    <p>{{$find_data->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT INFORMATION CARD-->

                    <!--CONTACT CARD-->
                    <div class="col-sm-12 m-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><i class="fa-solid fa-user mr-2"></i>{{$find_data->user->name}}</h3>
                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-dark"
                                        style="padding: 2.5% 18%; border-radius: 2rem;">Email</button>
                                    <button type="button" class="btn btn-dark"
                                        style="padding: 2.5% 18%; border-radius: 2rem;">Call</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CONTACT CARD-->

                    <!--GOOGLE MAP CARD-->
                    <div class="google-map col-sm-12 m-2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114311.48436650043!2d87.18940577904526!3d26.44818882117293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef744704331cc5%3A0x6d9a85e45c54b3fc!2sBiratnagar%2056613!5e0!3m2!1sen!2snp!4v1696587348079!5m2!1sen!2snp"
                            width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!--GOOGLE MAP CARD-->
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
@endsection
