@extends('front.layout.front')
@section('title', 'Related Department')
@section('content')

<div class="container" style="margin-top: 4rem;margin-bottom: 4rem" >
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6">
                <h1 class="mb-5 mt-4" style="font-weight: 600;color: #555">Related Department List</h1>
            </div>
        </div>
        <div class="row">
            @foreach($doctors as $doctor)
                <div class="doctor-card col-lg-3 col-md-4 col-sm-6" style="margin: 0 0 2rem 0">

                    <div class=" shadow px-3 pb-3 pt-3 mb-2" style="text-align: center;border-radius: 12px">
                        <a  href="{{ route('services.find',['id'=>$doctor->id])}}">
                            @if($doctor->image)
                                <img class="owl-img" src="{{ asset('public/upload/doctor/'.$doctor->image) }}" class="mt-4" style="width: 135px; height: 135px; border-radius: 50%" alt="img">
                            @else
                                <img class="owl-img" src="{{ asset('public/images/doctor.png')}}" class="mt-4" style="width: 135px; height: 135px; border-radius: 50%" alt="img">
                            @endif
                        </a>
                        <span class="img-text text-center">
                            <h4 style="margin: 1rem 0; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $doctor->name }}</h4>
                            
                            <h6> {{ $doctor->department->name }} </h6>
                            <a href="{{ route('services.find',['id'=>$doctor->id])}}" class="btn form-control" style="color:#000; background-color: #019444; color:#fff;">Book Appointment</a>
                        </span>
                    </div>
                  
                </div>
            @endforeach
        </div>
          
    </div>

@endsection