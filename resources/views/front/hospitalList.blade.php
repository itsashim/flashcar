@extends('front.layout')
@section('title')
 {{__('Hospitals')}} 
@stop
@section('loader')
<div id="overlayer"></div>
<span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')

    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap');

        :root{
            --green:#16a085;
            --black:#444;
            --light-color:#777;
            --box-shadow:.5rem .5rem 0 rgba(22, 160, 133, .2);
            --text-shadow:.4rem .4rem 0 rgba(0, 0, 0, .2)
            --border:.2rem solid var(--green);
        }

        *{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            /* border: none; */
            text-transform: capitalize;
            transition: all .2s ease-in-out;
            text-decoration: none;
        }

        html{
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 7rem;
        }

        section{
            padding: 2rem 9%;
        }

        section:nth-child(even){
            background: #f5f5f5;
        }

        .doctors .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap: 1rem;
        }

        .doctors .box-container .box{
            text-align: center;
            background: #fff;
            border-radius: .5rem;
            border: 1px solid black;
            box-shadow: var(--box-shadow);
            padding: 2rem;
        }

        .doctors .box-container .box img{
            height: 15rem;
            border: var(--border);
            border-radius: .5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .doctors .box-container .box h3{
        color: var(--black);
        font-size: 2.5rem; 
        }

        .doctors .box-container .box span{
            color: var(--green);
            font-size: 1.5rem;
        }

        .doctors .box-container .box .share{
            padding-top: 2rem;
        }

        .doctors .box-container .box .share a{
            height: 5rem;
            width: 5rem;
            line-height: 4.5rem;
            font-size: 2rem;
            color: #fff;
            border-radius: .5rem;
            border: var(--border);
            margin: .3rem;
            background: var(--green);
            padding: 5px;
        }

        .doctors .box-container .box .share a:hover{
            background: var(--green);
            color: #fff;
            box-shadow: var(--box-shadow);

        }

        .doctors .box-container .box img:hover{
            background: var(--green);
            color: #fff;
            box-shadow: var(--box-shadow);

        }

        h4{
            font-size: 16px;
        }
        .owl-nav button {
            position: absolute;
            top: 50%;
            background-color: #e7d045;
            color: #fff;
            margin: 0;
            transition: all 0.3s ease-in-out;
        }

        .owl-nav button.owl-prev {
            left: 0;
        }

        .owl-nav button.owl-next {
            right: 0;
        }

        .owl-dots {
            text-align: center;
            padding-top: 15px;
        }

        .owl-dots button.owl-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            background: #00be9c;
            margin: 0 3px;
        }

        .owl-dots button.owl-dot.active {
            background-color: #e7d045;
        }

        .owl-dots button.owl-dot:focus {
            outline: none;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.38) !important;
        }

        .owl-nav button:focus {
            outline: none;
        }

        .item {
            text-align: center;
        }

        .card {
            box-shadow: 0 0 9px #c1c1c1;
            border-radius: 5px;
        }

        .card-body {
            padding: 10px 20px 8px 20px;
            text-align: left;
        }

        .card-body h5 {
            font-weight: 600;
        }

        .card-img-top {
            height: 179px;
            object-fit: cover;
            border-radius: 5px 5px 0px 0px;
        }
</style>

<section class="doctors" id="doctors">
    <h1 class="heading">
        <div class="row">
            <div class="col-sm-2">
                <h1 class="mb-4 mt-4" style="font-weight: 600;">Hospitals List</h1>
            </div>
            <div class="col-sm-4">
                <div class="input-group mb-4 mt-4">
  <input type="text" class="form-control" name="hospital_name" id="hospitalName" placeholder="Hospital Name" style="height: 38px; font-size: 14px;">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2" style="font-size: 14px;">Search</span>
  </div>
</div>
                
            </div>
            <div class="col-sm-6">
                <select class="float-right form-control mb-4 mt-4" id="cityID" style="height: 38px; font-size: 14px;">
                    <option value="null">Select City</option>
                    @foreach($cities as $city)
                        <option @if(request()->city_id==$city->id) selected="selected" @endif value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </h1>
    <div class="box-container" id="hospitallistbox">
        @foreach($hospitals as $hospital)
        <div class="box">
            <a href="{{ asset('hospital/'.$hospital->slug) }}">
                @if($hospital->logo)
                <img src="{{ asset('public'.$hospital->logo) }}" alt="">
                @else
                <img src="{{ asset('public/images/hospital.png') }}" alt="" />
                @endif
                <h3>{{ $hospital->name }}</h3>
            </a>
            <span>{{ (isset($hospital->city))?$hospital->city->name:$hospital->city_id }}</span>
            <div class="share">
                <a href="{{ asset('hospital/'.$hospital->slug) }}">Book appointment</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@stop

@section('footer')
<script>
    $(function(){

        $('#cityID').on('change',function(){
            let id = $(this).val();
            window.location.href = "{{ asset('hospitals?city_id=') }}"+id;
        });

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