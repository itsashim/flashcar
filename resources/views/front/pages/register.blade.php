@extends('front.layout.front')

@section('styles')

<style>
    body {
            background-image: linear-gradient(135deg, #9cc1cd 10%, #20748f 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Open Sans", sans-serif;
            color: #333333;
        }

        .box-form {
            margin: 3rem auto;
            width: 80%;
            background: #FFFFFF;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex: 1 1 100%;
            align-items: stretch;
            justify-content: space-between;
            box-shadow: 0 0 20px 6px #090b6f85;
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
        }

        .box-form div {
            height: auto;
        }

        .box-form .left {
            color: #FFFFFF;
            background-size: cover;
            background-repeat: no-repeat;
            /*background-image: url("https://i.pinimg.com/736x/5d/73/ea/5d73eaabb25e3805de1f8cdea7df4a42--tumblr-backgrounds-iphone-phone-wallpapers-iphone-wallaper-tumblr.jpg");*/
            background-image: url("{{ url('public/login_image.jpg') }}");
            overflow: hidden;
        }

        .box-form .left .overlay {
            padding: 30px;
            width: 100%;
            height: 100%;
            background: #5194a888;
            overflow: hidden;
            box-sizing: border-box;
        }

        .box-form .left .overlay h1 {
            font-size: 6vmax;
            line-height: 1;
            font-weight: 900;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .box-form .left .overlay span p {
            margin-top: 30px;
            font-weight: 900;
        }

        .box-form .left .overlay span a {
            background: #3b5998;
            color: #FFFFFF;
            margin-top: 10px;
            padding: 10px 35px;
            border-radius: 100px;
            display: inline-block;
            box-shadow: 0 3px 6px 1px #042d4657;
        }

        .box-form .left .overlay span a:last-child {
            background: #1dcaff;
            margin-left: 30px;
        }

        .box-form .right {
            padding: 40px;
            overflow: hidden;
        }

        @media (max-width: 980px) {
            .box-form .right {
                width: 100%;
            }
        }

        .box-form .right h5 {
            font-size: 6vmax;
            /* line-height: 0; */
        }

        .box-form .right p {
            font-size: 14px;
            color: #B0B3B9;
        }

        .box-form .right .inputs {
            overflow: hidden;
        }

        .box-form .right input {
            width: 100%;
            padding: 10px;
            margin-top: 25px;
            font-size: 16px;
            border: none;
            outline: none;
            border-bottom: 2px solid #B0B3B9;
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
            float: right;
            color: #fff;
            font-size: 16px;
            padding: 12px 35px;
            border-radius: 50px;
            display: inline-block;
            border: 0;
            outline: 0;
            box-shadow: 0px 4px 20px 0px #b5d1daa6;
            background-image: linear-gradient(135deg, #5193a8 10%, #065069 100%);
        }

        @media screen and (max-width: 980px) {
            .box-form .right button {
                float: none;
            }
        }

        
        label {
            display: block;
            position: relative;
            margin-left: 30px;
        }

        label::before {
            content: ' \f00c';
            position: absolute;
            font-family: FontAwesome;
            background: transparent;
            border: 3px solid #70F570;
            border-radius: 4px;
            color: transparent;
            left: -30px;
            transition: all 0.2s linear;
        }

        label:hover::before {
            font-family: FontAwesome;
            content: ' \f00c';
            color: #fff;
            cursor: pointer;
            background: #70F570;
        }

        label:hover::before .text-checkbox {
            background: #70F570;
        }

        label span.text-checkbox {
            display: inline-block;
            height: auto;
            position: relative;
            cursor: pointer;
            transition: all 0.2s linear;
        }

        label input[type="checkbox"] {
            display: none;
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
            <div class="left">
                <div class="overlay">
                    <h1>Wheels On Palms</h1>
                    
                    <span>
                        {{-- <p>login with social media</p>
                        <a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i> Login with Twitter</a> --}}
                    </span>
                </div>
            </div>

            <div class="right">
                <h5>Register</h5>
                <p>Have an account? <a href="{{ url('login') }}">Login you account. </a></p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ asset('user/register') }}" method="POST">
                    @csrf
                    <div class="inputs">
                        <input type="text" name="name" placeholder=" Enter Your Full Name"  required>
                        <br>
                        <input type="text" name="email" placeholder="Enter Your Email"  required >
                        <br>
                        <input type="text" name="phone_no" placeholder="Enter Your Phone" required >
                        <br>
                        <input type="password" name="password" placeholder="Password" required>
                        <br>
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        <br>
                        <input type="text" name="otp" placeholder="Type Otp" required>
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