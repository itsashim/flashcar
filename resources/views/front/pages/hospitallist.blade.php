@extends('front.layout.front')
@section('content')
    <!-- start -->
    <div class="container">


        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h2 class="mb-4 mt-4" style="font-weight: 600">Hospitals List</h2>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="input-group mb-4 mt-4">
                    <input type="text" class="form-control" name="hospital_name" id="hospitalName"
                        placeholder="Hospital Name" style="height: 38px; font-size: 14px" />
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2" style="font-size: 14px">Search</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-sm-6">
                <select class="float-right form-control mb-4 mt-4" id="cityID" style="height: 38px; font-size: 14px">
                    <option value="">Select City</option>
                    @foreach ($cities as $city)
                        <option @if (request()->city_id == $city->id) selected="selected" @endif value="{{ $city->id }}">
                            {{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-6" style="display:none;">
                <select name="department_id" id="department_id" class="form-control mt-4 mb-4">
                    <option class="pd_first" value="">Filter by Department</option>
                    @foreach ($departments as $department)
                        <option @if (isset(request()->department_id) && $department->id == request()->department_id) selected="selected" @endif value="{{ $department->id }}"
                            class="pd_tld">
                            {{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row" id="hospitallistbox">
            @foreach ($hospitals as $hospital)
                <div class="doctor-card col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
                        <a href="{{ asset('hospital/' . $hospital->slug) }}">
                            @if ($hospital->logo)
                                <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4"
                                    src="{{ asset('public' . $hospital->logo) }}" alt="">
                            @else
                                <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4"
                                    src="{{ asset('public/images/hospital.png') }}" alt="" />
                            @endif
                        </a>

                        <p class="text-center text-capitalize mt-4" style="font-size: 22px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            {{ $hospital->name }}
                        </p>
                        <p class="text-center text-uppercase text-success" style="font-size: 1rem">
                            {{ isset($hospital->city) ? $hospital->city->name : $hospital->city_id }}
                        </p>

                        <a href="{{ asset('hospital/' . $hospital->slug) }}"
                            class="btn bg-lightgreen text-light text-uppercase rounded-3">
                            book an appontment
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $hospitals->links() }}
    </div>

    <!-- end -->
@endsection
@section('scripts')
    <script>
        $(function() {

            function filterHospital(){

                let name = $('#hospitalName').val();
                let city_id = $('#cityID').val();
                let department_id = $('#department_id').val();
                let url = "{{ asset('hospitallist/search/view') }}";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "name": name,
                        "city_id":city_id,
                        "department_id":department_id,
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
            }

            $('#cityID').on('change', function() {
                filterHospital();
            });
            
            $('#department_id').on('change', function() {
                filterHospital();
            });

            $('#hospitalName').on('keyup', function() {
                filterHospital();
            });

        });
    </script>
@endsection
