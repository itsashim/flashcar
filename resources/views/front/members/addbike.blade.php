@extends('front.layout.front')
@section('title')
    {{ __('messages.My Account') }}
@stop
@section('styles')
    <style>
        h2 {
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            gap: 1rem;
        }

        input[type="text"],
        select {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            width: calc(100% - 20px);
        }

        .reg {
            /* color: red; */
            margin-top: 10px;
        }

        #dropdownContainer {
            display: none;
        }


        /* added */

        body {
            font-family: "Inter", sans-serif;
            color: #000021;
            /* font-size: calc(1em + 1.25vw); */
            background-color: #e6e6ef;
        }


        .label {
            display: flex;
            cursor: pointer;
            font-weight: 500;
            position: relative;
            overflow: hidden;
            margin-bottom: 0.375em;
            /* Accessible outline */
            /* Remove comment to use */
            /*
                                                                            &:focus-within {
                                                                                    outline: .125em solid $primary-color;
                                                                            }
                                                                        */
        }

        .label input {
            position: absolute;
            left: -9999px;
        }

        .label input:checked+span {
            background-color: #d6d6e5;
        }

        .label input:checked+span:before {
            box-shadow: inset 0 0 0 0.4375em #00005c;
        }

        .label span {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
            /* padding: 0.375em 0.75em 0.375em 0.375em; */
            border-radius: 99em;
            transition: 0.25s ease;
        }

        .label span:hover {
            background-color: #d6d6e5;
        }

        .label span:before {
            display: flex;
            flex-shrink: 0;
            content: "";
            background-color: #fff;
            width: 1.5em;
            height: 1.5em;
            border-radius: 50%;
            margin-right: 0.375em;
            transition: 0.25s ease;
            box-shadow: inset 0 0 0 0.125em #00005c;
        }

        /* Edit form start */
        form input {
            border-radius: 5px;
            border: 0.5px solid;
            padding-left: 30px;
        }

        .parent {
            display: flex;
            gap: 100px;
        }

        /* Edit form start end */
    </style>
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    @include('front.members.membernav')

    <div class="container">
        {{-- <form action="{{ url('updateprofile') }}" method="post" enctype="multipart/form-data"> --}}
        {{-- @csrf --}}
        <section class="categories_sec container">
            <div class="categories_wrapper pb-0">
                <div class="row mb-3">
                    <div class="col-lg-8 col-md-8 aos-init aos-animate" data-aos="zoom-in"
                        style="    border-left: 7px solid #076483;">
                        <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Bike List</h2>

                    </div>
                    <div class="col-lg-4 col-md-4 aos-init aos-animate" data-aos="zoom-in">
                        {{-- added section --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn bg-lightgreen text-white float-right" data-toggle="modal"
                            data-target="#exampleModal">
                            Add Bike
                        </button>


                        <!-- Add Bike Modal End -->
                        {{-- added section end --}}

                    </div>
                </div>
                <div class="row text-center mb-5">
                    @foreach ($bikes as $bike)
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="card">
                                <img src="{{ asset('public/' . $bike->logo_path) }}" alt="{{ $bike->name }}" />
                                {{-- <img src="{{ asset('storage/uploads/bike') . '/' . $bike->logo_path }}"> --}}
                                <div class="content ">
                                    <h4>{{ $bike->bikebrand->name }}</h4>
                                    <h4>{{ $bike->bikemodels->name }}</h4>
                                    <div class="d-flex justify-content-around mb-2">

                                        {{-- Sell part --}}
                                        <!-- Button trigger modal -->
                                        <div>
                                            @if ($bike->bikesell->phone != null)
                                                <button type="button" class="btn btn-primary"
                                                    data-bike="{{ $bike->id }}" data-toggle="modal"
                                                    data-target="#exampleModal1">
                                                    Sell
                                                </button>
                                            @endif



                                        </div>

                                        <!-- Sell Modal -->

                                        <!-- Sell Modal -->
                                        {{-- Sell part End --}}

                                        {{-- Edit part --}}
                                        <!-- Button trigger modal -->
                                        <div>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal2" data-bike = "{{ $bike->id }}">
                                                Edit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
        {{-- </form> --}}

    </div>



    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you Sure </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row justify-content-around">
                    <form action="{{ route('bikesell.sellStatus') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="bike_id" id="bike_id">


                        <div>
                            <button type="submit" class="btn btn-primary">Confirm Sell</button>
                        </div>

                    </form>

                    <div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Bike Details
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('bikesell.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <input type="hidden" name="bike_id" id="bike_ids">
                        <div class="">
                            <div class="form-group" style="text-align: start;">
                                <div>
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Description" rows="3"></textarea>
                                </div>

                                <div class="my-3">
                                    <label> Price </label>
                                    <input name="price" type="Number" placeholder="Price" size="50" required>
                                    <input name="" type="checkbox" required> Price negotiable<br>
                                </div>

                                <div class="my-3">
                                    <label>Ownership </label>
                                    <div class="form-check-inline">
                                        <span class="form-check-label" for="ownership_1st">
                                            <input type="radio" class="form-check-input" name="ownership"
                                                value="1st" id="ownership_1st">1st
                                        </span>
                                    </div>
                                    <div class="form-check-inline">
                                        <span class="form-check-label" id="ownership_2nd">
                                            <input type="radio" class="form-check-input" name="ownership"
                                                value="2nd" id="ownership_2nd">2nd
                                        </span>
                                    </div>
                                    <div class="form-check-inline">
                                        <span class="form-check-label" id="ownership_3rd">
                                            <input type="radio" class="form-check-input" name="ownership"
                                                value="3rd" id="ownership_3rd">3rd
                                        </span>
                                    </div>
                                    <div class="form-check-inline">
                                        <span class="form-check-label" id="ownership_4th">
                                            <input type="radio" class="form-check-input" name="ownership"
                                                value="4th" id="ownership_4th">4th
                                        </span>
                                    </div>
                                    <div class="form-check-inline">
                                        <span class="form-check-label" id="ownership_5th">
                                            <input type="radio" class="form-check-input" name="ownership"
                                                value="5th" id="ownership_5th">5th
                                        </span>
                                    </div>
                                </div>

                                <div class="my-3">
                                    <label>Bike Condition</label>
                                    <div class="form-check-inline">
                                        <span class="form-check-label">
                                            <input type="radio" class="form-check-input" name="bike_condition"
                                                value="Brand New">Brand new
                                        </span>
                                    </div>
                                    <div class="form-check-inline">
                                        <span class="form-check-label">
                                            <input type="radio" class="form-check-input" name="bike_condition"
                                                value="Like New">Like new
                                        </span>
                                    </div>
                                    <div class="form-check-inline">
                                        <span class="form-check-label">
                                            <input type="radio" class="form-check-input" name="bike_condition"
                                                value="Excellent">Excellent
                                        </span>
                                    </div>
                                    <div class="form-check-inline">
                                        <span class="form-check-label">
                                            <input type="radio" class="form-check-input" name="bike_condition"
                                                value="Poor">Poor
                                        </span>
                                    </div>
                                    <div class="form-check-inline">
                                        <span class="form-check-label">
                                            <input type="radio" class="form-check-input" name="bike_condition"
                                                value="Fair">Fair
                                        </span>
                                    </div>
                                </div>

                                <div class="my-3">
                                    <input name="year" type="Number" placeholder="Make year" size="10">
                                    <input name="mileage" type="Number" placeholder="Mileage" size="10">
                                    <input name="run_km" type="Number" placeholder="KM run" size="10"
                                        style="margin-top: 10px;"><br>
                                </div>

                                <div class="my-3">
                                    <label>Bikes features</label>
                                    <div class="parent">
                                        <div class="C1">
                                            @foreach ($features as $key => $feature)
                                                <span>
                                                    <input type="checkbox" name="feature[]" value="{{ $feature->id }}">
                                                    {{ $feature->name }}</span><br>
                                                <span>
                                            @endforeach
                                            {{--       <input type="checkbox" name="feature[]" value="2"> Tubless
                                                Tyres</span><br>
                                            <span><input type="checkbox" name="feature"> Projected
                                                Headlight</span><br>
                                            <span><input type="checkbox"> Rear
                                                Disc</span><br>
                                            <span><input type="checkbox"> Split
                                                Seat</span><br>
                                            <span><input type="checkbox"> Low Fuel
                                                Indicator</span><br> --}}
                                        </div>
                                        {{-- <div class="C2">
                                            <input type="checkbox"> FI ENGINE</label><br>
                                            <input type="checkbox"> Low Oil
                                            Indicator</label><br>
                                            <input type="checkbox"> Low Battery
                                            Indicator</label><br>
                                            <input type="checkbox"> Alloy
                                            Wheels</label><br>
                                            <input type="checkbox"> Digital
                                            Display</label><br>
                                            <input type="checkbox"> Front Disc</label><br>
                                        </div> --}}
                                        {{-- <div class="c3">
                                            <input type="checkbox"> Mono
                                            Suspension</label><br>
                                            <input type="checkbox"> Anti Lock
                                            Braking(ADS)</label><br>
                                            <input type="checkbox"> Tripmeter</label><br>
                                            <input type="checkbox"> LED Light</label><br>
                                            <input type="checkbox"> Fuel Saving
                                            Modes</label><br>
                                            <input type="checkbox"> Turn Signal/Pass
                                            Light</label><br>
                                        </div> --}}
                                    </div>
                                </div>

                                <div>
                                    <label>Tax cleared?</label>
                                    <div class="row">
                                        <div class="d-flex col-2">
                                            <input type="radio" id="css" name="tax_cleared" value="Yes">
                                            <span for="css" class="mb-0 ml-2">Yes</span>
                                        </div>
                                        <div class="d-flex col-2">
                                            <input type="radio" id="javascript" name="tax_cleared" value="No">
                                            <span for="javascript" class="mb-0 ml-2">No</span><br>
                                        </div>
                                    </div>
                                    <input name="phone" type="number" placeholder="Mobile Number">
                                    <input type="checkbox"> Allow calls<br>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save
                                changes</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        {{-- Edit part end --}}
    </div>

    <!-- Add Bike Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Bike</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="main">
                        <form action="{{ route('bike.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <label for="brand">Brand:</label>
                            <select id="brand" name="bikebrand_id" required>
                                @foreach ($brand as $bike)
                                    <option value="{{ $bike->id }}">{{ $bike->name }}</option>
                                @endforeach
                                <!-- Add more brands as needed -->
                            </select><br /><br />

                            <label for="model">Model:</label>
                            <select id="model" name="bikemodel_id" required>
                                @foreach ($model as $bike)
                                    <option value="{{ $bike->id }}">{{ $bike->name }}</option>
                                @endforeach
                                <!-- Add more models as needed -->
                            </select><br /><br />

                            <label for="image">Upload Image:</label>
                            <input type="file" id="logo_path" name="logo_path" accept="image/*"
                                required /><br /><br />

                            <div class="color_option"><label>Bike Color *</label><br /></div>
                            <div class="btn d-flex flex-wrap w-100">

                                <div class="col-4">
                                    <label class="label">
                                        <input type="radio" name="color" value="red" checked />
                                        <span>Red</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="label">
                                        <input type="radio" name="color" value="white" />
                                        <span>White</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="label">
                                        <input type="radio" name="color" value="black" />
                                        <span>Black</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="label">
                                        <input type="radio" name="color" value="blue" />
                                        <span>Blue</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="label">
                                        <input type="radio" name="color" value="orange" />
                                        <span>Orange</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="label">
                                        <input type="radio" name="color" value="grey" />
                                        <span>Grey</span>
                                    </label>
                                </div>

                                <div class="col-4">
                                    <label class="label">
                                        <input type="radio" name="color" value="silver" />
                                        <span>Silver</span>
                                    </label>
                                </div>

                                <div class="col-4">
                                    <label class="label">
                                        <input type="radio" name="color" value="yellow" />
                                        <span>Yellow</span>
                                    </label>
                                </div>

                                <div class="col-4">
                                    <label class="label">
                                        <input type="radio" name="color" value="other" />
                                        <span>Other</span>
                                    </label>
                                </div>


                            </div>
                            <div class="reg">

                                <label> Registration No *</label>

                            </div>

                            <div class="container d-flex" style="gap: 10px;">
                                <input type="checkbox" id="toggle">
                                <label class="m-0" for="toggle"> Number Plate with
                                    State:</label>
                            </div>
                            <div id="inputContainer">
                                <label for="numberPlate"></label>
                                <input type="text" id="numberPlate" name="register_no" placeholder="001pa 9999">
                            </div>


                            <div id="dropdownContainer" class="container">
                                <div>
                                    <input type="text" id="numberPlate" placeholder="Vehicle state code"
                                        class="w-100">
                                </div>
                            </div>



                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input class="btn btn-primary" type="submit" value="Submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        $("#brand").change(function(e) {

            let bikebrand_id = $(this).val();

            $.ajax({
                url: "{{ route('getFilterBikeModelList') }}",
                method: 'get',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    "bikebrand_id": bikebrand_id
                },
                beforeSend: function() {
                    console.log('Getting Plant type');
                },
                success: function(data) {

                    $("#model").empty();
                    $('#model').append(
                        `<option value="" disabled selected>--Select Brand Model--</option>`);
                    data.data.forEach(d => {
                        $('#model').append(`<option value="${d.id}">${d.name}</option>`);
                    });
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });



        $(document).on('click', '[data-target="#exampleModal2"]', function() {
            // Get the value of the data-bike attribute
            var bikeId = $(this).data('bike');
            // console.log(bikeId);
            var bike_id = $('#bike_ids').val(bikeId);

        });

        $(document).on('click', '[data-target="#exampleModal1"]', function() {
            // Get the value of the data-bike attribute
            var bikeId = $(this).data('bike');
            // console.log(bikeId);
            var bike_id = $('#bike_id').val(bikeId);

        });


        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('toggle');
            const dropdownContainer = document.getElementById('dropdownContainer');

            dropdownContainer.style.display = 'none'; // Initially hide the dropdowns
            toggle.checked = false; // Uncheck the checkbox

            toggle.addEventListener('change', function() {
                dropdownContainer.style.display = this.checked ? 'flex' : 'none';
            });
        });
    </script>
@endsection
