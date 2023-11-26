@extends('front.layout.front')
@section('title')
    {{ $product->name }}
@stop
@section('styles')
    <style>
        .prod-image {
            max-width: 25%;
            max-height: 25%;
        }

        .product-title {
            color: #00be9c;
            border-width: 0px 0px 4px 0px;
            border-color: #00be9c;
            border-style: solid;
        }

      

        .add-to-cart,.get_quote{
            border:1px solid greenyellow;
        }

        .add-to-cart:hover,.get_quote:hover{
            background-color: aquamarine;
            color:brown;
            animation: 2s fade-in;
        }


    </style>

@stop

@section('content')
 

    <div class="container mb-5">
        <div class="row justify-content-center align-items-center">
            <div class="gallery px-0 col-md-6 col-12">

                <!-- caurosel -->
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                            @php 
                                $image = \App\ProductGallery::get()->first();
                            @endphp
                            <img src="{{ asset('public/storage/' . $image->image_path) }}" class="p-2 d-block w-100" width="300px" height="400px"/>
                    </div>
                    @foreach ($productGalleries as $productGallery)
                        <div class="carousel-item">
                           @if($productGallery->image_path)
                                <img src="{{ asset('public/storage/' . $productGallery->image_path) }}"
                                    datasrc="{{ asset('public/storage/' . $productGallery->image_path) }}" alt="{{ $product->name }}"
                                    title="{{ $product->name }}" class="p-2 d-block w-100" onclick="clickOtherThumbnails()" width="300px" height="400px"/> 
                            @endif
                        </div>
                    @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!-- caurosel end -->





<!--new curosel -->
            {{-- <div class="carousel-wrap normalCarousel">
                <div class="owl-carousel owl-theme">
                    @foreach($productGalleries as $productGallery)
                    <div class="item" >
                        @if($productGallery->image_path)
                        <img class="owl-img img-fluid" src="{{ asset('public/storage/' . $productGallery->image_path) }}"  alt="Card image cap" style="height:200px" >
                        @endif
                        
                    </div>
                    @endforeach
                    
                </div>
                
                
            </div> --}}
 <!--new curosel end -->




            {{--    <img id="main-product-image" src="{{ asset('public/' . $product->photo) }}" style="width:100%;margin-top:40px;"
                    alt="Picture of Safe Hands Sanitizer 150ml" title="Picture of Safe Hands Sanitizer 150ml" />
                <div class="thumbnails d-flex justify-content-center">
                    @foreach ($productGalleries as $productGallery)
                        <img src="{{ asset('public/storage/' . $productGallery->image_path) }}"
                            datasrc="{{ asset('public/storage/' . $productGallery->image_path) }}" alt="{{ $product->name }}"
                            title="{{ $product->name }}" class="prod-image p-2" onclick="clickOtherThumbnails()" />
                    @endforeach
                </div> --}}

                    
{{--
                  <div id="imgSlider" class="owl-theme thumbnails d-flex justify-content-center">
                    @foreach ( $product_Galleries as $productGallery)
                    <div class="item">
                        
                    
                        <img  src="{{ asset('public/storage/' . $productGallery->image_path) }}"
                            datasrc="{{ asset('public/storage/' . $productGallery->image_path) }}" alt="{{ $product->name }}"
                            title="{{ $product->name }}" class="prod-image p-2" onclick="clickOtherThumbnails()" />
                            </div>
                    @endforeach
                </div>
--}}
            </div>
            <div class="overview col-md-6 col-12 mt-3">
                <div class="text-center">
                    <h3 class="product-title">{{ $product->name }}</h3>

                    <p class="product-description">
                        {{ $product->description }}
                    </p>
                    @if($product->offer_price)
                    <h6 class="price">Price: <span style="text-decoration:line-through;color:red;">Rs.{{ $product->price }}</span> <span style="font-size:20px;color:green;">Rs. {{ $product->offer_price }}</span> </h6>
                    @else
                    <h6 class="price">Price: <span>Rs.{{ $product->price }}</span></h6>
                    @endif

                    <div class="action">
                        <button class="add-to-cart btn btn-default add_to_cart" data-id="{{ $product->id }}"
                            type="button">
                            Add to cart
                        </button>
                        <button class="like btn btn-default add_to_wishlist" data-id="{{ $product->id }}" type="button">
                            <span class="fa fa-heart add-to-fav"></span>
                        </button>

                        <button class="btn btn-default like get_quote">Get Quotes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="userLoginModal">
        <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <div id="userlogin">
                        <h2>{{__('messages.Login')}}</h2>
                          <div class="part-form-main-box">
                            <form action="{{ asset('user/login') }}" method="POST">
                                @csrf
                                <span id="login_error" class="dangerrequired"></span>
                                <input type="text" class="modelemail" name="email" placeholder="{{__('messages.Enter Your Email')}}" id="login_email">
                                <span id="login_email_error" class="dangerrequired"></span>
                                <input type="password" id="password" name="password" placeholder="{{__('messages.Enter Your Password')}}">
                                <span id="login_password_error" class="dangerrequired"></span>
                                <button type="submit">{{__('messages.Login')}}</button>
                            </form>
                            <div class="forgot-pass-modal">
                                <a href="javascript:showforgotmodel()">{{__('messages.Forgot password')}}</a>
                            </div>
                            <p>{{__("messages.Don't have an account?")}} <a href="javascript:showregmodel()">{{__('messages.Register Now')}}</a></p>
                            <div class="login-soical">
                                @if(isset($setting->facebook_active)&&$setting->facebook_active=='1')
                                <div class="button-facebook">
                                    <a href="{{ url('auth/facebook') }}">
                                        <img src="{{asset('public/front/img/facebook.png')}}">
                                    </a>
                                @endif
                                @if(isset($setting->google_active)&&$setting->google_active=='1')
                                    <a href="{{ url('auth/google') }}">
                                        <img src="{{asset('public/front/img/google.png')}}">
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div id="registermodel">
                        <h2>{{__('messages.Register')}}</h2>
                        <span id="reg_list"></span>
                          <div class="part-form-main-box">
                            <form>
                                <input type="text" name="reg_name" id="reg_name" placeholder="{{__('messages.Enter Your Full Name')}}">
                                <span id="reg_name_error" class="dangerrequired"></span>
                                <input type="text" name="reg_email" id="reg_email" placeholder="{{__('messages.Enter Your Email')}}">
                                <span id="reg_email_error" class="dangerrequired"></span>
                                <input type="text" name="reg_phone" id="reg_phone" placeholder="{{__('messages.Enter Your Phone No')}}">
                                <span id="reg_phone_error" class="dangerrequired"></span>
                                <input type="password" name="reg_pwd" id="reg_pwd" placeholder="{{__('messages.Enter Your Password')}}">
                                <span id="reg_password_error" class="dangerrequired"></span>
                                <input type="password" name="reg_cpwd" id="reg_cpwd" placeholder="{{__('messages.Re Enter Your Password')}}" onchange="checkbothpwd(this.value)">
                                <span id="reg_cpwd_error" class="dangerrequired"></span>
                                <button type="button" onclick="PostRegister()">{{__('messages.Register')}}</button>
                            </form>
                            
                            <p>{{__("messages.Already have an account")}} <a href="javascript:showloginmodel()">{{__('messages.Login')}}</a></p>
                        </div>
                    </div>
                    <div id="forgotmodel">
                        <h2>{{__("messages.Forgot Password")}}</h2>
                          <div class="part-form-main-box">
                            <form>
                                <span id="forgot_email_success" class="successemail"></span>
                                <span id="forgot_email_error" class="dangerrequired"></span>
                                <input type="text" class="modelemail" name="forgot_email" id="forgot_email" placeholder="Enter Your Email">

                                <button type="button" onclick="Postforgot()">{{__('messages.Forgot')}}</button>
                            </form>
                            
                            <p><a href="javascript:showloginmodel()">{{__('messages.Login')}}</a></p>
                        </div>
                    </div>		        		
                </div>
              </div>
        </div>
    </div>

    <div id="quoteModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="{{ route('front.quote.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Get Quotes</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <input type="text" name="message" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input style="display: none;" type="text" name="product_id" value="{{ $product->id }}" />
                        <button type="submit" class="btn btn-primary">Get Quote</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const feedMainProductImageToDOM = (e) => {
            const mainProductImage =
                document.getElementById("main-product-image");
            console.log(e.target.src);
            if (e.target.src !== undefined) {
                mainProductImage.src = e.target.src;
            }
        };

        const clickOtherThumbnails = () => {
            document.addEventListener("click", feedMainProductImageToDOM);
        };
        $(document).on('click', '.add_to_cart', function() {

            @if(auth()->user())

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
                        toastr.success(data.message);
                        // alert(data.message);                    
                        $('#cartTotalCount').html(data.cartCount);
                    } else {
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });

            @else
                @php
                    session()->flash('product_id',$product->id);
                @endphp
                window.location.href = "{{ url('login') }}";

            @endif
        });

        $(document).on('click', '.add_to_wishlist', function() {

            @if(auth()->user())

            let product_id = $(this).data('id');
            let url = "{{ asset('/add-to-wishlist') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "product_id": product_id,
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        toastr.success(data.message);
                        // alert(data.message);                    
                        $('#cartTotalCount').html(data.cartCount);
                        $('#wishlistTotalCount').html(data.wishlistCount);
                    } else {
                        toastr.success(data.message);
                        // alert(data.message);
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });

            @else

            // $('#userLoginModal').modal('show');
                @php
                    session()->flash('product_id',$product->id);
                @endphp
                window.location.href = "{{ url('login') }}";

            @endif
        });

        $(document).on('click','.get_quote',function(){

            $('#quoteModal').modal('show');

        });
        
        $(document).ready(function(){
     $('#imgSlider').owlCarousel({
         loop:false,
    center: true,
    items:2,
    dots:false,
    margin:10,
    nav:false,
    responsive:{
        600:{
            items:4
        }
    }
}); 
     
     document.querySelector("#imgSlider > div.owl-nav.disabled").remove(); 
        })
     
    </script>
@stop
