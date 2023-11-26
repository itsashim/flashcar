@extends('front.layout.front')
@section('title')
    {{ __('Cart') }}
@stop

@section('styles')
    <style>
        .disable{
            display:none;
        }
        .cart-page {
            margin: 80px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        th {
            text-align: right;
            padding: 15px;
            color: #fff;
            background: #20748f;
            font-weight: 500;
            font-size: 16px;
        }

        td {
            padding: 10px 5px;
            text-align: right;
        }

        td input {
            width: 120px;
            height: 45px;
            padding: 5px;
        }

        td a {
            color: #ff523b;
            font-size: 12px;
        }

        td img {
            width: 90px;
            height: 90px;
            margin-left: 10px;
        }

        .total-price {
            display: flex;
            justify-content: flex-end;
        }

        .total-price table {
            border-top: 3px solid  #83b2c1;
            width: 90%;
            max-width: 400px;
            margin-right: 40px;
        }

        td:last-child {
            text-align: right;
        }

        th:last-child {
            text-align: right;
        }

       
        .cross_btn{
            background-color: #20748f !important;
            color: white;
        }

        .cross_btn:hover{
            background-color:  #83b2c1;
            color: white;
        }



        .checkout {
            background-color: #20748f;
            color: white;
            margin-right: 45px;
            padding: 15px;
            margin-top: 20px;
            float: right;
            font-size: 18px;
        }

        .checkout:hover {
            color: white;
            background-color: #83b2c1;
        }

        .text-secondary {
            font-size: 18px;
        }

        .sapm {
            font-size: 18px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .small {}
    </style>
@endsection

@section('content')
    <div class="departmentpg-main-box my-5">
        <div class="container">
            <div class="global-heading">
                <h2>{{ __('Cart') }}</h2>
            </div>
            <div class="department-part-main-box">
                @if (count($cartDetails) > 0)
                    <div class="small container cart-page table-responsive" id="cartContent">
                        <table>
                            <tr>
                                <th colspan=2 style="text-align:center;">Product</th>
                                <!--<th style="text-align:left;">Name</th>-->
                                <th style="text-align:left;">Price</th>
                                <th style="min-width:100px;">Quantity</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                            @foreach ($cartDetails as $cartDetail)
                                <tr>
                                    <td>
                                        <div class="cart-info">
                                             <img src="{{ asset('public/' . $cartDetail->product->photo) }}" alt=""> 
                                        </div>
                                    </td>
                                    
                                    <td class="text-left">
                                        <p><b>{{ $cartDetail->product->name }}</b></p>
                                    </td>
                                    
                                    <td class="text-left">
                                        <div>
                                            
                                            @if($cartDetail->product->offer_price)
                                                <small class="small"><span style="text-decoration: line-through;color:red;">Rs. {{ $cartDetail->product->price }}</span> <span class="ms-2" style="color:#20748f;font-size:16px;">Rs. {{ $cartDetail->product->offer_price }}</span> </small>
                                            @else
                                                <small class="small" style="color:green;font-size:16px;">Rs: {{ $cartDetail->product->price }}</small>
                                            @endif
                                            <br>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="minus"><span data-id="{{ $cartDetail->product_id }}"
                                                class="fa fa-minus-square text-secondary substract sub_from_cart"></span>
                                            <span class="sapm">{{ $cartDetail->quantity }}</span>
                                            <span data-id="{{ $cartDetail->product_id }}"
                                                class="fa fa-plus-square text-secondary model_cart_plus add_to_cart">

                                            </span>
                                        </div>
                                    </td>
                                    <td>Rs. {{ $cartDetail->amount }}</td>
                                    <td>
                                        <button class="btn btn-sm  btnRemove cross_btn"
                                            data-id="{{ $cartDetail->product_id }}"
                                            id="remove-from-cart">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                        <div class="total-price">
                            <table>
                                <tr>
                                    <td>Total</td>
                                    <td>Rs {{ $cart->total_price }}</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <a href="{{ asset('checkout') }}" class="checkout" id="checkout" >
                                <p class="m-0">Procedure To Checkout</p>
                            </a>
                        </div>
                    </div>
                @else
                    <h2 style="color: rgb(170, 88, 11);text-align:center;">Cart is empty.</h2>
                @endif
            </div>
        </div>
    </div>
@stop

@section('scripts')

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).on('click', '.add_to_cart', function() {
            let id = $(this).data('id');
            let url = "{{ asset('/add-to-cart') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "id": id,
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        //    alert(data.message);
                        $('#cartContent').html(data.view);
                        $('#cartTotalCount').html(data.cartCount);
                    } else {
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });
        $(document).on('click', '.sub_from_cart', function() {
            let id = $(this).data('id');
            let url = "{{ asset('/sub-from-cart') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "id": id,
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        //    alert(data.message);
                        $('#cartContent').html(data.view);
                        $('#cartTotalCount').html(data.cartCount);
                    } else {
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });
        
        // //let btn = document.querySelector('#remove-from-cart');//.btnRemove
        // let btn = document.querySelector('.btnRemove');//
        //     btn.addEventListener("click",function(e){
        //         e.preventDefault();
               
        //     });
            
        $(document).on('click', '.btnRemove', function() {
            // let btn = document.querySelector('#checkout');
            // btn.classList.add("disable");
            let id = $(this).data('id');
            let url = "{{ asset('/remove-from-cart') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "product_id": id,
                },
                beforeSend: function() {
                  
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#cartContent').html(data.view);
                        $('#cartTotalCount').html(data.cartCount);
                        
                    } else {
                        console.log(data.message);
                    }
                    location.reload(true);
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });
    </script>
@endsection
