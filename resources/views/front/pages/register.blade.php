@extends('front.layout.front')

@section('styles')

<style>
    body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .box-form {
            margin: 3rem auto;
            width: 85%;
            background: #FFFFFF;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex: 1 1 100%;
            align-items: stretch;
            justify-content: space-between;
        }

        label::before {
            height: 1.4rem;
        }

        @media (max-width: 980px) {
            .box-form {
                flex-flow: wrap;
                text-align: center;
                align-content: center;
                align-items: center;
            }
        .box-form .right input {
            margin: 0 auto;
            max-width: unset !important;
         }
         .box-form .left .overlay img{
            max-width: 490px;
         }
         .box-form .right p{
            text-align: start;
         }
        }

        .box-form div {
            height: auto;
        }

        .box-form .left {
            overflow: hidden;
            width: 100%;
        }

        .box-form .left .overlay img{
           width: 100%;
           border-radius: 14px;
           /* max-width: 490px; */
        }


        .box-form .right {
            padding: 40px;
            margin: 20px;
            margin-top: 0;
            margin-bottom: 0;
            overflow: hidden;
            width: 80%;
            border-radius: 33px;
            background: rgba(246, 247, 249, 0.53);
        }

        @media (max-width: 980px) {
            .box-form .right {
                width: 100%;
                margin-bottom: 2rem;
            }
        }

        .box-form .right h5 {
            color: #0C1421;
            text-align: start;
            font-size: 55px;
            font-style: normal;
            font-weight: 800;
            line-height: 100%;
            letter-spacing: 0.78px;
            font-style: italic;
        }

        .box-form .right p {
            color:  #313957;
            font-size: 17px;
            font-style: normal;
            font-weight: 400;
            line-height: 160%; 
            letter-spacing: 0.222px;
            font-family: 'Inter', sans-serif;
        }

        .box-form .right .inputs {
            overflow: hidden;
        }

        .box-form .right input {
            width: 100%;
            max-width: 326.405px;
            padding: 10px;
            font-size: 16px;
            outline: none;
            border-radius: 10px;
            border: 1.111px solid #D4D7E3;
            background-color: #F7FBFF;
            color: #8897AD;
        }

        .box-form .right .remember-me--forget-password {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .box-form .right .remember-me--forget-password input {
            margin: 0;
            margin-right: 7px;
            width: auto;
        }

        .box-form .right button {
            font-size: 16px;
            padding: 12px 35px;
            border-radius: 10px;
            display: inline-block;
            border: 0;
            outline: 0;
            box-shadow: -7px 10px 5px 0px rgba(217, 217, 217, 0.45);
            background-image: linear-gradient(135deg, #ffe500 10%, #ffea33 100%);
            font-weight: 600;
            width: 100%;
        }

        @media screen and (max-width: 980px) {
            .box-form .right button {
                float: none;
            }
        }






        @media screen and (max-width: 520px) {
            .box-form .left .overlay span a:last-child {
                margin-left: 0;
            }
        }

        /* Login Page End */
</style>

@endsection

@section('content')

<!-- Login Body -->
        <!-- partial:index.partial.html -->
        <div class="box-form">
            <div class="left order-2">
                <div class="overlay">
                    <img src="{{asset('public/new-images/login-img.jpg')}}" alt="">
                </div>
            </div>

            <div class="right order-1">
                <h5>Register</h5>
                <p>Today is a new day. It's your day. You shape it. Sign in to start managing your projects.</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ asset('user/register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="inputs">
                        <label class="d-block mt-2 text-start text-start text-start" for="name">Name</label>
                        <input type="text" name="name" placeholder=" Enter Your Full Name"  required>
                        <br>
                        <label class="d-block mt-2 text-start text-start text-start" for="email">Email</label>
                        <input type="text" name="email" placeholder="Enter Your Email"  required >
                        <br>
                        <label class="d-block mt-2 text-start text-start text-start" for="phone_no">Number</label>
                        <input type="text" name="phone_no" placeholder="Enter Your Phone" required >
                        <br>
                        <label class="d-block mt-2 text-start text-start text-start" for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" required>
                        <br>
                        <label class="d-block mt-2 text-start text-start text-start" for="confirm_password">Confirm</label>
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        <br>
                        <label class="d-block mt-2 text-start text-start text-start" for="address">Address</label>
                        <input type="text" name="address" placeholder="Enter Your Address" required >
                        <br>
                       {{-- <input type="text" name="city" placeholder="Enter Your City" required > --}}
                        <br>
                        <label class="" for="passport">Passport</label>
                        <input class=" mt-0 form-control" type="file" name="passport" placeholder="Upload Your Passport">
                        
                        <label class="" for="driver_license">Driver License</label>
                        <input class="mt-0 form-control" type="file" name="driver_license" placeholder="Upload Your Driver License">
                        
                        <label class="" for="national_id_card">National Id Card</label>
                        <input class="mt-0 form-control" type="file" name="national_id_card" placeholder="Upload Your National Id Card">
                        
                        <label class="" for="residence_permit">Residence Permit</label>
                        <input class="mt-0 form-control" type="file" name="residence_permit" placeholder="Upload Your Residence Permit">
                    </div>

                    <div class="remember-me--forget-password">
                        <!-- Angular -->
                        {{-- <label>
                            <input type="checkbox" name="item" checked />
                            <span class="text-checkbox">Remember me</span>
                        </label>
                        <p>forget password?</p> --}}
                    </div>

                    <br>
                    <button type="submit">Register</button>
                </form>
            </div>

        </div>
        <!-- Login End -->
@endsection
