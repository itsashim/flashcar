@extends('front.layout.front')

@section('styles')



<style>
        .box-form {
            margin: 3rem auto;
            width: 70%;
            background: #FFFFFF;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex: 1 1 100%;
            align-items: stretch;
            justify-content: space-between;
            padding: 10px;
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
                width: 85%
            }
        }

        .box-form div {
            height: auto;
        }

        .box-form .left {
            color: #FFFFFF;
            width: 100%;
            overflow: hidden;
        }

        .box-form .left .overlay img{
           width: 100%;
           border-radius: 14px;
           max-width: 490px;
        }


        .box-form .right {
            padding: 40px;
            overflow: hidden;
            width: 100%;
        }

        @media (max-width: 980px) {
            .box-form .right {
                width: 100%;
            }
        }

        .box-form .right h5 {
            font-size: 4vmax;
            /* line-height: 0; */
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
            padding: 10px;
            margin-top: 25px;
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
            <div class="left order-2">
                <div class="overlay">
                 <img src="{{asset('public/new-images/login-img.jpg')}}" alt="">
                </div>
            </div>


            <div class="right order-1">
                <div>
                    <h2>Welcome Back  👋</h2>
                    <p>Today is a new day. It's your day. You shape it. 
                    Sign in to start managing your projects.</p>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-info">
                    {{ session()->get('message') }}
                </div>
                @elseif(session()->has('message_err'))
                <div class="alert alert-danger">
                    {{ session()->get('message_err') }}
                </div>
                @endif
                <form action="{{ asset('user/login') }}" method="POST">
                    @csrf
                    <div class="inputs">
                        <input type="text" name="email" placeholder="Enter your email id">
                        <br>
                        <input type="password" name="password" placeholder="Enter your password">
                        <br/>
                        <input style="display:none;" type="text" name="product_id" value="{{ session()->get('product_id') }}" />
                        <input style="display:none;" type="text" name="cart" value="{{ session()->get('cart') }}" />
                        <input style="display:none;" type="text" name="wishlist" value="{{ session()->get('wishlist') }}" />
                        <input style="display:none;" type="text" name="subscription_id" value="{{ session()->get('subscription_id') }}" />
                    </div>

<br>
                    <div class="remember-me--forget-password justify-content-end">
                        <p>
                            <a href="{{ url('forgot-password') }}">forgot password?</a>
                        </p>
                    </div>

  <br>
                    <button type="submit mb-4">Sign In</button>
                    <br>
                </form>
                <p class="mt-5">Don't you have an account? <a href="{{'/register'}}">Sign up</a></p>
            </div>

        </div>
        <!-- Login End -->
@endsection