@extends('front.layout.front')
@section('title')
    {{ __('messages.My Account') }}
@stop
@section('content')

    @include('front.members.membernav')
<style>
    .container {
        padding: unset !important;
    }

    .edit_wrap{
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    padding: 3rem 2rem;
    margin: 5%;
    border-radius: 12px
    }
    
    @media screen and (max-width: 575px) {
        .pro-d {
         padding-left:1rem;   
        }
        .select-pic{
            margin-left:1rem;
        }
    }
</style>

    <div class="container my-5">
        <form action="{{ url('updateprofile') }}" method="post" enctype="multipart/form-data">
            @csrf
        <p class=" text-center text-capitalize" style="font-size: 1.2rem; font-weight: 600">
            Update your profile
        </p>
        <div class="d-flex row mb-5 mx-0">
            <div class="col-lg-2 col-md-4 col-sm-12 ">
                @if (Auth::user()->profile_pic)
                    <img style="border-radius: 50%;width: 150px;height: 150px;aspect-ratio:1"
                        src="{{ asset('public/upload/profile') . '/' . Auth::user()->profile_pic }}">
                @else
                    <img style="border-radius: 50%;width: 150px;height: 150px;aspect-ratio:1"
                        src="{{ asset('public/upload/profile/profile.png') }}">
                @endif
                
            </div>
            <div class="col-lg-10 col-md-4 col-sm-12 ">
                <p class="text-capitalize lg-mx-5 mt-5 fw-bold text-default pro-d"
                    style="font-size: 2rem; line-height: 1.3rem !important">
                    {{ auth()->user()->name }}
                </p>
                <p class="lg-mx-5" style="line-height: 0.3rem">
                    {{ auth()->user()->email }}
                </p>
                <div class="lg-mx-5"><input type="file" class="select-pic" name="image" /></div>
            </div>
        </div>
        <div class="my-5 edit_wrap" >
            <p class="text-default fw-bold fs-xl text-capitalize" style="font-size: 1.6rem;color: #555">Edit profile</p>
            <div class="#">
                <div class="row mx-0">
                    <div class="col-lg-6 col-sm-12 col-md-6 ps-0">
                        <div class="p-2">
                            <label for="name" class="text-default text-capitalize" style="font-size: 1.3rem">name:</label>
                            <input name="name" type="text" class="col-lg-12 col-md-12 col-sm-12 p-2" placeholder="Enter Your Name"
                            style="border-radius: 6px; border: solid whitesmoke" value="{{ auth()->user()->name }}" />
                        </div>
                        <div class="p-2">
                            <label for="name" class="text-default text-capitalize" style="font-size: 1.3rem">Address
                                :</label>
                            <input name="address" type="text" class="col-lg-12 col-md-12 col-sm-12 p-2" placeholder="Enter Your Address"
                                style="border-radius: 6px; border: solid whitesmoke" value="{{ auth()->user()->address }}" />
                        </div>
                        <div class="p-2">
                            <label for="name" class="text-default text-capitalize" style="font-size: 1.3rem">Phone
                                Number :</label>
                            <input name="phone_no" type="text" class="col-lg-12 col-md-12 col-sm-12 p-2" placeholder="Enter Your Number"
                                style="border-radius: 6px; border: solid whitesmoke" value="{{ auth()->user()->phone_no }}" />
                        </div>
                        <div class="p-2">
                            <label for="name" class="text-default text-capitalize" style="font-size: 1.3rem">Email
                                :</label>
                            <input name="email" type="email" class="col-lg-12 col-md-12 col-sm-12 p-2" placeholder="Enter Your Email"
                                style="border-radius: 6px; border: solid whitesmoke" value="{{ auth()->user()->email }}" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="p-2">
                            <label for="name" class="text-default text-capitalize" style="font-size: 1.3rem">city
                                :</label>
                            <input name="city" type="text" class="col-lg-12 col-md-12 col-sm-12 p-2" placeholder="Enter Your City"
                                style="border-radius: 6px; border: solid whitesmoke" value="{{ auth()->user()->city }}" />
                        </div>
                        <div class="p-2">
                            <label for="name" class="px-2 text-default text-capitalize" style="font-size: 1.3rem">Zip
                                Code :</label>
                            <input name="zip_code" type="text" class="col-lg-12 col-md-12 col-sm-12 p-2"
                                placeholder="Enter Your Zip Code" style="border-radius: 6px; border: solid whitesmoke" value="{{ auth()->user()->zip_code }}" />
                        </div>
                        <div class="p-2">
                            <label for="name" class="text-default text-capitalize" style="font-size: 1.3rem">Password: <span style="color: green; font-size:12px;">(Enter only if change is needed)</span> </label>
                            <input name="password" type="password" class="col-lg-12 col-md-12 col-sm-12 p-2"
                                placeholder="Enter Password"
                                style="border-radius: 6px; border: solid whitesmoke"  />
                        </div>
                        <div class="p-2">
                            <label for="name" class="text-default text-capitalize" style="font-size: 1.3rem">Confirm
                                Password :</label>
                            <input name="c_password" type="password" class="col-lg-12 col-md-12 col-sm-12 p-2"
                                placeholder="Confirm Password"
                                style="border-radius: 6px; border: solid whitesmoke" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn_1 text-uppercase">update</button>
            </div>
        </div>
        </div>
        </form>

    </div>

@stop
