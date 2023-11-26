@extends('front.layout.front')
@section('title')
    {{ __('Checkout') }}
@stop

@section('styles')
<style>
    .card-header{
        background-color: #20748f;
        color: white;
    }
    .card-title{
        color: white;
        text-decoration: none;
    }

    .back_cart{
        background-color: #20748f;
        color: white;
    }
    .back_cart:hover{
        color: white;
        background-color: #83b2c1;
    }
</style>
@endsection

@section('content')
    <?php
    $res_curr = explode('-', $setting->currency);
    
    ?>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <?php
    if (Session::get('payment_done')) {
        $cs = 'block';
    } else {
        $cs = 'none';
    }
    ?>
    <div class="modal" id="ssuccess" style="display:<?= $cs ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="ssuccess-main-box">
                        <div class="success-icon">
                            <img src="{{ asset('public/upload/correct.png') }}">
                        </div>
                        <div class="success-bottom-part">
                            <div class="success-heading">
                                <h3>{{ __('messages.Subscription successfully') }}</h3>
                            </div>
                            <div class="success-des">
                                <p>{{ __('messages.sublin1') }} </p>
                                <p>{{ __('messages.sublin2') }}</p>
                            </div>
                            <div class="success-buttons-main-box">
                                <div class="success-buttons">
                                    <a href="{{ url('chatarea/1') }}"
                                        onclick="closemode()">{{ __('messages.lets chat') }}</a>
                                </div>
                                <div class="success-buttons">
                                    <button type="button">{{ __('messages.Call') }} ({{ $setting->phone_no }})</button>
                                </div>
                                <div class="success-buttons">
                                    <a href="{{ url('/') }}">{{ __('messages.Visit Hospital') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="success-close-button">
                            <button type="button" class="btn btn-secondary"
                                onclick="closemode()">{{ __('messages.Ok Great') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ssuccess-background-black">
        </div>
    </div>
    <div class="d-detailpg-main-box my-5">
        <div class="container">

            <div class="row">

                <div class="col-sm-8">
                    <h2 style="color:#20748f; font-size:30px;font-weight:bold;">Checkout now</h2>
                </div>
                <div class="col-sm-4">
                    <a class="btn back_cart float-right" href="{{ asset('cart') }}">
                        Back to cart
                    </a>
                </div>


                <div class="col-sm-12 table-responsive mt-4">

                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align:left;padding-left: 20px;">Products</th>
                                <th></th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartDetails as $cartDetail)
                                <tr>
                                    <td>
                                        <div class="cart-info" style="width: 200px;
                                                                    height: 150px;
                                                                    object-fit: cover;
                                                                    overflow: hidden;"> 
                                            <img src="{{ asset('public/' . $cartDetail->product->photo) }}" alt="" style="width: 100%;">
                                        </div>
                                    </td>
                                    <td class="text-left">
                                        <div>
                                            <p><b>{{ $cartDetail->product->name }}</b></p>
                                            @if($cartDetail->product->offer_price)
                                                <small class="small"><span style="text-decoration: line-through;color:red;">Rs. {{ $cartDetail->product->price }}</span> <span style="color:#20748f;font-size:16px;">Rs. {{ $cartDetail->product->offer_price }}</span> </small>
                                            @else
                                                <small class="small" style="color:#20748f;font-size:16px;">Rs: {{ $cartDetail->product->price }}</small>
                                            @endif
                                            <br>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $cartDetail->quantity }}
                                    </td>
                                    <td>Rs. {{ $cartDetail->amount }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Shipping Details</h3>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input id="address" type="text" name="address" class="form-control"
                                    placeholder="Enter Delivery Address" value="{{ auth()->user()->address }}" />
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input id="city" type="text" name="city" class="form-control"
                                    placeholder="Enter City" value="{{ auth()->user()->city }}" />
                            </div>
                            <div class="form-group">
                                <label for="zip_code">Zip Code</label>
                                <input id="zip_code" type="text" name="zip_code" class="form-control"
                                    placeholder="Enter Zip Code" value="{{ auth()->user()->zip_code }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-detailpg-part-main-box mt-4">
                <div class="row">
                    <div class="col-md-8">
                        @if (session('success_msg'))
                            <div class="alert alert-success fade in alert-dismissible show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{ session('success_msg') }}
                            </div>
                        @endif
                        @if (session('error_msg'))
                            <div class="alert alert-danger fade in alert-dismissible show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{ session('error_msg') }}
                            </div>
                        @endif
                        <div class="">
                            <div id="accordion" class="accordion">
                                <div class="card mb-0">
                              {{--
                                    @if (Auth::id())
                                        <div class="card-header collapsed" href="#collapseOne">
                                            <a class="card-title">
                                                {{ Auth::user()->name }}
                                            </a>
                                        </div>
                                    @else
                                        <div class="card-header collapsed" href="#collapseOne">
                                            <a class="card-title">
                                                {{ __('messages.Returning Patient') }} <span class="sublogin">
                                                    {{ __('messages.Click here to login') }}</span>
                                            </a>
                                        </div>
                                    @endif
                                    --}}

                                    @if (Auth::id())
                                        <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                                        @else
                                            <div id="collapseOne" class="card-body collapse collapse in"
                                                data-parent="#accordion">
                                    @endif
                                    <div class="part-form-main-box">
                                        <form method="post" action="{{ url('userlogin') }}" class="btnsaveoption">
                                            {{ csrf_field() }}
                                            <span id="login_error" class="dangerrequired"></span>
                                            <input type="text" class="modelemail" name="email"
                                                placeholder="{{ __('messages.Enter Your Email') }}" id="login_email">
                                            <span id="login_email_error" class="dangerrequired"></span>
                                            <input type="password" id="login_password" name="password"
                                                placeholder="{{ __('messages.Enter Your Password') }}">
                                            <span id="login_password_error" class="dangerrequired"></span>
                                            <div class="btnsublogin">
                                                <button type="submit" class="btneee">{{ __('messages.Login') }}</button>
                                            </div>
                                        </form>
                                        <p>{{ __("messages.Don't have an account?") }} <a href=""
                                                onclick="showregmodel()" data-toggle="modal"
                                                data-target="#myModal">{{ __('messages.Register Now') }}</a></p>
                                    </div>
                                </div>
                                @if (Auth::id())
                                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo">
                                    @else
                                        <div class="card-header collapsed" data-parent="#accordion" href="#collapseTwo">
                                @endif
                                <a class="card-title">
                                    {{ __('messages.Payment Information') }}
                                </a>
                            </div>
                            @if (Auth::id())
                                <div id="collapseTwo" class="card-body collapse collapse show" data-parent="#accordion">
                                @else
                                    <div id="collapseTwo" class="card-body collapse show" data-parent="#accordion">
                            @endif

                            <div class="part-form-main-box">
                                @php
                                    $months = [1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec'];
                                @endphp
                                <form>
                            
                                    <div class="radio" class="subradio">
                                        <input id="radio_cod" name="payment" type="radio" value="cod"
                                            data-toggle="modal" data-target="#codModal">
                                        <label for="radio_cod" class="radio-label">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <img style="width:60px;" src="{{ asset('public/images/cod.png') }}" class="payimg">                                                    
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 text-right">
                                                    <span style="font-size: 20px;color:#20748f;">Cash On Delivery</span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="radio" class="subradio">
                                        <input id="radio_manual" name="payment" type="radio" value="manual"
                                            data-toggle="modal" data-target="#manualModal">
                                        <label for="radio_manual" class="radio-label">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <img style="width:60px;" src="{{ asset('public/images/manualpayment.jpg') }}" class="payimg">                                                  
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 text-right">
                                                    <span style="font-size: 20px;color:#20748f;">Manual Payment</span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-0">
                <div class="card-header">
                    {{ __('Cart Total') }}
                </div>
                <div class="card-body">
                    <div>
                        <label>{{ __('messages.Price') }}</label>
                        <span class="floatright"><span id="packageprice">{{ $cart->total_price }}</span></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div id="codModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cash on delivery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Checkout with the cash on delivery?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn back_cart" id="confirmCheckout">Checkout Now</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div id="manualModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Manual Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Pay manually to our payment receiving account</h6>
                    <b>Bank Name: {{ $setting->bank_name }}</b><br />
                    <b>Bank Account Number: {{ $setting->bank_account_number }}</b><br />
                    <b>Esewa ID: {{ $setting->esewa_id }}</b><br />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn back_cart" id="confirmMCheckout">Checkout Now</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://js.braintreegateway.com/web/dropin/1.23.0/js/dropin.min.js"></script>
<script>
        var form = document.querySelector('#payment-form');
        var client_token = "{{ $token }}";

        braintree.dropin.create({
            authorization: client_token,
            selector: '#bt-dropin',
            paypal: {
                flow: 'vault'
            }
        }, function(createErr, instance) {
            if (createErr) {
                console.log('Create Error', createErr);
                return;
            }
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                instance.requestPaymentMethod(function(err, payload) {
                    if (err) {
                        console.log('Request Payment Method Error', err);
                        return;
                    }

                    // Add the nonce to the form and submit
                    document.querySelector('#nonce').value = payload.nonce;
                    form.submit();
                });
            });
        });

        $('#confirmCheckout').on('click', function() {
            let address = $('#address').val();
            let city = $('#city').val();
            let zip_code = $('#zip_code').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ asset('confirm-cash-on-delivery') }}",
                type: "POST",
                data: {
                    "address": address,
                    "city": city,
                    "zip_code": zip_code,
                    "payment_method": "cod",
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        alert(data.message);
                        window.location.href = "{{ asset('/') }}";
                    } else {
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });

        $('#confirmMCheckout').on('click', function() {
            let address = $('#address').val();
            let city = $('#city').val();
            let zip_code = $('#zip_code').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ asset('confirm-cash-on-delivery') }}",
                type: "POST",
                data: {
                    "address": address,
                    "city": city,
                    "zip_code": zip_code,
                    "payment_method": "manual",
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        alert('CheckOut completed successfully');
                        window.location.href = "{{ asset('/') }}";
                    } else {
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });
</script>
@endsection
