@extends('front.layout.front')
@section('title', 'Services List')

@section('styles')
    <style>
        .doctor__card {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>

@endsection
@section('content')

    <!-- start -->
    <div class="container" style="margin-top: 3rem; margin-bottom: 3rem">
        <div class="row" style="align-items:center;">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h1 class="mb-4 mt-4" style="font-weight: 600;color: #555;">Service List</h1>
            </div>
            <!--<div class="col-lg-9 col-md-6 col-sm-6">-->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="input-group mb-4 mt-4">
                    <input type="text" class="form-control" name="hospital_name" id="hospitalName"
                        placeholder="Service Name" style="height: 38px; font-size: 14px" />
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2" style="font-size: 14px">Search</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-6 mt-4">
                <select class="float-right form-control mb-4" id="cityID" style="height: 38px; font-size: 14px">
                    <option value="null">Select City</option>
                    @foreach ($cities as $city)
                        <option @if (request()->city_id == $city->id) selected="selected" @endif value="{{ $city->id }}">
                            {{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row" id="hospitallistbox">
            @foreach ($doctors as $doctor)
                <div class="doctor-card col-xl-3 col-lg-4 col-md-6 col-sm-6">

                    <div class="shadow py-4 mb-2 doctor__card" style="border-radius: 12px;">
                        <a href="{{ asset('find-doctor?doctor_id=' . $doctor->id) }}">
                            @if ($doctor->image)
                                <img src="{{ asset('public/upload/doctor/' . $doctor->image) }}" class="mt-4"
                                    style="width: 100px; height: 100px; border-radius: 50%" alt="img" />
                            @else
                                <img src="{{ asset('public/upload/profile/profile.png') }}" class=""
                                    style="width: 125px; height: 125px; border-radius: 50%" alt="img" />
                            @endif
                        </a>
                        <p class="text-center text-capitalize mt-2" style="font-size: 1.5rem;line-height: 1.2;font-weight: 500;color: #076483;">
                            {{ $doctor->name }}
                        </p>
                        <span
                            style="font-size: 20px;color: #333;">{{ isset($doctor->department->name) ? $doctor->department->name : '--------------' }}</span>
                            {{-- href="{{ asset('find-doctor?doctor_id=' . $doctor->id) }}"--}}
                        <a class="bg-lightgreen rounded w-80 mt-2 py-2 text-center d-block" style="width:80%; color:#fff;"
                            href="{{route('services.find',['id'=>$doctor->id])}}"
                            class="btn btn-primary text-uppercase rounded-3">
                            Book Appontment
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $doctors->links() }}
    </div>
    <!-- end -->

@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            $('#cityID').on('change', function() {
                let id = $(this).val();
                window.location.href = "{{ asset('doctors?city_id=') }}" + id;
            });

            $('#hospitalName').on('keyup', function() {
                let name = $(this).val();
                let url = "{{ asset('doctorlist/search/view') }}";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "name": name,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            $('#hospitallistbox').html(data.data);
                        } else {
                            console.log('error');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });

            });

        });
    </script>
@endsection
