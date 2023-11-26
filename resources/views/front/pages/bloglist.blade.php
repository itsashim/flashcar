@extends('front.layout.front')
@section('title','Blog List')
@section('content')
    <!-- start -->
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h2 class="mb-4 mt-4" style="font-weight: 600">Blog List</h2>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                {{-- <div class="input-group mb-4 mt-4">
                    <input type="text" class="form-control" name="hospital_name" id="hospitalName"
                        placeholder="Hospital Name" style="height: 38px; font-size: 14px" />
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2" style="font-size: 14px">Search</span>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-5 col-md-12 col-sm-6">
                {{-- <select class="float-right form-control mb-4 mt-4" id="cityID" style="height: 38px; font-size: 14px">
                    <option value="null">Select City</option>
                    @foreach($cities as $city)
                        <option @if(request()->city_id==$city->id) selected="selected" @endif value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select> --}}
            </div>
        </div>
        <div class="row" id="hospitallistbox">
            @foreach($blogs as $blog)
            <div class="doctor-card col-lg-3 col-md-4 col-sm-6">
                <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
                    <a href="{{ asset('blogs/'.$blog->slug) }}">
                    @if($blog->image)
                        <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4" src="{{ asset('public'.$blog->image) }}" alt="">
                    @else
                        <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4" src="{{ asset('public/images/hospital.png') }}" alt="" />
                    @endif
                    </a>
                    
                    <p class="text-center text-capitalize mt-4" style="font-size: 22px;">
                        {{ $blog->title }}
                    </p>
                    <p class="text-center text-uppercase text-success" style="font-size: 1rem">
                        {!! substr($blog->description, 0, 50) !!}...
                    </p>

                    <a href="{{ asset('blogs/'.$blog->slug) }}" class="btn bg-lightgreen text-light text-uppercase rounded-3">
                        
                    
                        Read More
                    </a>
                </div>
               {{$blogs->links()}}
            </div>
            @endforeach
        </div>
    </div>
    <!-- end -->
@endsection
@section('scripts')
<script>
    $(function(){

        $('#hospitalName').on('keyup',function(){
            let name = $(this).val();
            let url = "{{ asset('hospitallist/search/view') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "name":name,
                },
                beforeSend:function(){
                    console.log('ajax fired');
                },
                success: function (data) {
                    if(data.status==true){
                        $('#hospitallistbox').html(data.data);          
                    }else{
                        console.log('error');
                    }
                },
                error:function(xhr){
                    console.log(xhr);
                }
            });

        });

    });
</script>
@endsection