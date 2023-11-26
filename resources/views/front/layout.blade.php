<!DOCTYPE html>
<html>
<head>
	<title id="changeunreadcount">@yield('title')</title>
	 @yield("meta_title")
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/css/bootstrap.min.css">-->
	<link rel="shortcut icon" href="{{asset('public/favicon.png')}}">
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="{{url('/')}}"/>
	<meta property="og:title" content="{{__('messages.site name')}}"/>
	<meta property="og:image" content="{{asset('public/favicon.png')}}"/>
	<meta property="og:image:width" content="250px"/>
	<meta property="og:image:height" content="250px"/>
	<meta property="og:site_name" content="{{__('messages.site name')}}"/>
	<meta property="og:description" content="{{__('messages.meta_description_admin')}}"/>
	<meta property="og:keyword" content="{{__('messages.meta_keyword')}}"/>
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('public/front/css/bootstrap.css')}}"> --}}
	<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">-->
	@if(isset($setting->is_rtl)&&$setting->is_rtl=='0')
		<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/rtl-style.css?v=5r12')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/style.css?v=45d')}}">
	@endif
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/responsive.css?v=ftgyert4')}}">
	
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<input type="hidden" id="authid" value="{{Auth::id()}}">
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!---->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!---->
<style>
	.dropdown-menu {
		position: absolute;
		top: 144%;
		left: 0px !important;
		z-index: 1000;
		display: none;
		float: left;
		min-width: 10rem;
		border: 1px solid rgb(0 0 0 / 5%);
	}
	.navbar-nav .dropdown-menu {
		position: absolute;
		float: none;
	}
	@media only screen and (min-width: 201px) and (max-width: 767px)
	{
		.navbar-nav .dropdown-menu {
			position: fixed;
			float: none;
		}
		.top-header p {
    margin-bottom: 0;
    padding: 5px 0px;
    font-size: 12px;
    color: white !important;
}
.navbar-brand{
    position: fixed;
    left: 45% !important;
}
.navbar-toggler{
    margin-left: 15px;
    margin-top: 12px;
}
.nav{
    background: white;
}
.nav-link-1{
    margin-left: 1rem !important;
}
.nav-link-2{
    margin-left: 1rem !important;
}
.dropdown-menu{
    margin-top: 148px;
    margin-left: 91px;
}
	}
	
	.navbar-badge {
    font-size: 1rem;
    font-weight: 300;
    padding: 2px 4px;
    position:relative;
    top: -12px;
    left:-9px;
}

.badge-danger {
    color: #fff;
    background-color: #20c997;
}
	
	  .navbar-nav .nav-item+.nav-item {
    margin-left: 1rem !important;
}
.navigation-custom-single .nav-link{
    padding:unset !important;
}

	@media only screen and (min-width: 201px) and (max-width: 767px)
	{
		.logo-img{
		     position:absolute;
		     left:-4rem;
		      justify-content:center;
		       top:-1rem;
		}
		}
		
	@media only screen and (min-width: 201px) and (max-width: 767px)
	{
		.service{
		     display:flex;
		     padding-top:1rem;
		     padding-top:1rem;
		      
		}
		}


	@media only screen and (min-width: 201px) and (max-width: 767px)
	{
		.city{
		      width:100px;
		      
		      
		      
		}
		}
		@media only screen and (min-width: 201px) and (max-width: 767px)
	{
		.search{
		       padding:0px 0px 0px 0px;
		       margin:0px 0px 0px 0px;
		      
		      
		      
		}
		}
		
        
        

</style>
@yield('styles')
</head>
<body onload="gettimezone()" >
    @include('front.firebase_config');
	@include('front.cssclass');
    @yield('loader')
	 
     
	<div class="header-pinned" id="header">
		<div class="top-header">
			<div class="container">
				<div class="top-left-text">
					<p>
					    <!--{{isset($setting->working_day)?$setting->working_day:Session::get('working_day')}}-->
					    matinsoftech@gmail.com
					</p>
				</div>
				<div class="top-right-text">
					<p>{{__('messages.Call us')}} : {{isset($setting->phone_no)?$setting->phone_no:Session::get("phone")}}</p>
				</div>
			</div>
		</div>
		<div class="container-fluid p-0">
			<div class="navigation-custom-single">
				<nav class="navbar navbar-light bg-faded" style="height: 78px;">
				  	<a class="navbar-brand" href="{{url('/')}}" style="position: fixed; left: 8%;">
				  	    @if(isset($setting->logo))
				  		<img src="{{asset('public/upload/images').'/'.$setting->logo}}" class="logo-img">
				  		@else
				  		<img src="{{Session::get('logo')}}" class="logo-img">
				  		@endif
				  	</a>
			  		<button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#CollapsingNavbar" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
			    		&#9776;
			  		</button>
			  		
			  		<div class="collapse navbar-toggleable-sm" id="CollapsingNavbar">
			    		<ul class="nav navbar-nav pull-sm-right" style="margin-right: -14rem;">
			      			<li class="nav-item py-2">
			        			<a class="nav-link nav-link-1 " href="{{url('doctors')}}">{{__('Find Doctors')}}</a>
			      			</li>
			      			<li class="nav-item py-2">
			        			<a class="nav-link" href="{{url('product-list')}}">{{__('Shop')}}</a>
			      			</li>
			      		
			      			<li class="nav-item py-2">
			        			<a class="nav-link" href="{{url('pricing')}}">{{__('messages.Help Package')}}</a>
			      			</li>      			
			      			<!--<li class="nav-item btn btn-success py-2" style="background-color: #00be9c;padding-top: 2px;padding-bottom: 2px;">-->
			      				@if(Auth::user())
								<li class="nav-item dropdown" style="padding-top: 8px;">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
									<div class="dropdown-menu" style="position:absolute !important;">
										<a class="dropdown-item" href="{{ asset('myaccount') }}">My Account</a>
										<a class="dropdown-item" href="{{ url('userlogout') }}">Logout</a>
									</div>
								</li>
			      				@else
			        			<a class="nav-link  " href="#" style="padding-top: 8px !important; margin-left:1rem;">
			        				<span type="button" onclick="showloginmodel()">{{__('messages.Login')}}</span>
			        				<span>/</span>
			        				<span id="six" class="button2" onclick="showregmodel()" data-toggle="modal" data-target="#myModal">{{__('messages.Register')}}</span>
			        			</a>
			        			@endif
			      			</li>


							<?php  $cities = \App\City::orderBy('name','ASC')->get(); ?>
			      				<li class="nav-item dropdown btn ">
									<a  style="color:white !important; background: #00be9c; padding: 9px 25px !important; margin-left: 15px; " class="nav-link dropdown-toggle mt-1 city " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">City</a>
									<div class="dropdown-menu " style="font-size: 16px;">
										@foreach($cities as $city)
										<a class="dropdown-item " href="{{ asset('hospitals?city_id='.$city->id) }}">{{ $city->name }}</a>
										@endforeach	
									</div>
								</li>
<div class="service">
			      				<li class="nav-item py-2 ">
									<a class="nav-link " href="{{ asset('cart') }}" style="display:inline">
										<i class="fas fa-shopping-cart service1 ml-3" style="color: #4c5b6f; border-radius: 100%;background-color: #ccebde;padding: 10px;">
										</i>

										@php
											if(auth()->user()){
												$cartCount = \App\CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('quantity');
											}
										@endphp
										<span id="cartTotalCount" class="badge badge-danger navbar-badge">{{isset($cartCount)?$cartCount:0 }}</span>
									</a>
								</li>
			      				
								<li class="nav-item py-2 mr-3 ">
									<a class="nav-link nav-link-2 service2 " href="{{ asset('my-wishlists') }}" style="display:inline">
										<i class="fas fa-heart" style="color: #4c5b6f; border-radius: 100%;background-color: #ccebde;padding: 10px;">
										</i>

										@php
											if(auth()->user()){
												$wishlistCount = \App\Wishlist::where('user_id',auth()->user()->id)->count();
											}
										@endphp
										<span id="wishlistTotalCount" class="badge badge-danger navbar-badge">{{isset($wishlistCount)?$wishlistCount:0 }}</span>
									</a>
								</li></div>
								<input placeholder="serach anything" class="my-2 mx-4 search"  style="padding: 0.375rem 0.75rem;font-size: 1rem;line-height: 1.5;color: #495057;background-color: #fff;background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;"> 
								
			    		</ul>
			  	
			  		</div>
			  	
				</nav>
			</div>
		</div>
	</div>

	<div class="spacefor-global">
	</div>
	 @yield('content')
	
		<div class="modal" id="myModal">
		    <div class="modal-dialog">
		      	<div class="modal-content">
		        	<div class="modal-body">
		        		<div id="loginmodel">
		        			<h2>{{__('messages.Login')}}</h2>
			          		<div class="part-form-main-box">
								<form action="{{ asset('user/login') }}" method="POST">
									@csrf
									<span id="login_error" class="dangerrequired"></span>
									<input type="text" class="modelemail" name="email" placeholder="{{__('messages.Enter Your Email')}}" id="login_email">
									<span id="login_email_error" class="dangerrequired"></span>
									<input type="password" id="login_password" name="password" placeholder="{{__('messages.Enter Your Password')}}">
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
  		<div id="chat_new" class="modal" >
                <div class="modal-dialog modal-md modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">{{__("messages.Search Doctor")}}</h4>
                            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        	<div class="input-group">
                                <input type="text" class="form-control search border-right-0 transparent-bg pr-0" id="search-contact1" placeholder="Search users...">
                                    <div class="input-group-append">
                                        <div class="input-group-text transparent-bg border-left-0" role="button">
                                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                            </div>
                            <div class="sidebar-body" id="chatsidebar1">
                                <ul class="user-list" id="userchatlistall" style="padding: 15px;list-style: none;height: 375px;overflow-y: auto;">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<div class="modal" id="appointmentModal">
		    <div class="modal-dialog">
		      	<div class="modal-content">
		        	<div class="modal-body">
		        		<div id="loginmodel">
		        			<h2>{{__('messages.Appointment Now!')}}</h2>
			          		<div class="part-form-main-box">
								<form action="{{url('bookappoinment')}}" method="post">
					   {{csrf_field()}}      
					<div class="appo-select-main-box">
						<div class="appo-select-box">
							<select id="department" required class="dropdown" name="department" onchange="getserviceanddoctor(this.value)">
								<option value="" disabled="disabled" selected="selected">- {{__('messages.Select Department')}}</option>
								@if(isset($departments))
								@foreach($departments as $d)
								   <option value="{{$d->id}}">{{$d->name}}</option>
								@endforeach
								@endif
							</select>
						</div>
						<div class="appo-select-box">
							<select id="service" required class="dropdown" name="service">
								<option value="" disabled="disabled" selected="selected">- {{__('messages.Select Services')}}</option>
							</select>
						</div>						
						<div class="appo-select-box">
							<select id="doctors" required class="dropdown" name="doctors">
								<option value="" disabled="disabled" selected="selected">- {{__('messages.Select Doctors')}}</option>
							</select>
						</div>
					</div>
					<div class="appo-input-main-box">
						<input type="text" required name="name" id="name" placeholder="{{__('messages.Enter Your Full Name')}}" value="{{Auth::user()?Auth::user()->name:''}}"> 
						<input type="text" required name="phone_no" id="phone_no" placeholder="{{__('messages.Enter Phone number')}}" class="appo-right-input" value="{{Auth::user()?Auth::user()->phone_no:''}}">
						<input type="date" required name="app_date" id="app_date" min="<?= date('Y-m-d')?>" placeholder="dd/mm/yyyy">
						<input type="time" required name="app_time" placeholder="Time" class="appo-right-input">
						<textarea rows="3" required name="messages" placeholder="{{__('messages.Enter Your Messages')}}"></textarea>
					</div>
					<div class="appo-btn-main-box">
						@if(Auth::id())
						   <button type="submit">{{__('messages.Book Appointment')}}</button>
						@else
						   <button type="button" onclick="userloginalert()">{{__('messages.Book Appointment')}}</button>
						@endif
						
					</div>
				</form>
							</div>
		        		</div>
		        			        		
		        	</div>
		      	</div>
	    	</div>
		</div>
		

		<div class="modal" id="autoization">
		    <div class="modal-dialog">
		      	<div class="modal-content">
		        	<div class="modal-body">
		        		<div id="loginmodel">
		        			<h2>{{__('messages.Order Pay')}}</h2>
			          		<div class="part-form-main-box">
			          			@php
							    $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
							@endphp
								<form id="payment-card-info" method="post" action="{{ url('paymentsubscription') }}">
                                  @csrf
                                  <input type="hidden" name="package_id" value="{{isset($subscription->id)?$subscription->id:''}}">
                                  <div class="row">
                                      <div class="form-group owner col-md-8">
                                          <label for="owner">{{__('messages.date')}}</label>
                                          <input type="date" class="form-control" id="package_date" name="package_date" value="" required>
                                          
                                      </div>
                                      <div class="form-group CVV col-md-4">
                                          <label for="cvv">{{__('messages.time')}}</label>
                                          <input type="time" class="form-control" id="package_time" name="package_time" value="" required>
                                         
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="form-group owner col-md-8">
                                          <label for="owner">{{__('messages.Name')}}</label>
                                          <input type="text" class="form-control" id="owner" name="owner" value="{{ old('owner') }}" required>
                                          
                                      </div>
                                      <div class="form-group CVV col-md-4">
                                          <label for="cvv">{{__('messages.CVV')}}</label>
                                          <input type="number" class="form-control" id="cvv" name="cvv" value="{{ old('cvv') }}" required>
                                          
                                      </div>
                                  </div>    
                                  <div class="row">
                                      <div class="form-group col-md-8" id="card-number-field">
                                          <label for="cardNumber">{{__('messages.Card Number')}}</label>
                                          <input type="text" class="form-control" id="cardNumber" name="cardNumber" value="{{ old('cardNumber') }}" required>
                                         
                                      </div>
                                      <div class="form-group col-md-4" >
                                          <label for="amount">{{__('messages.Amount')}}</label>
                                          <input type="text" class="form-control" id="amount" name="amount" value="{{isset($subscription->price)?$subscription->price:''}}" required>
                                          
                                          
                                      </div>
                                  </div>    
                                  <div class="row">
                                      <div class="form-group col-md-6" id="expiration-date">
                                          <label>Expiration Date</label><br/>
                                          <select class="form-control expritionmonth" id="expiration-month" name="expiration-month">
                                              @foreach($months as $k=>$v)
                                                  <option value="{{ $k }}" <?=old('expiration-month') == $k ? 'selected' : ''?> >{{ $v }}</option>                                                        
                                              @endforeach
                                          </select>  
                                          <select class="form-control expriationyear" id="expiration-year" name="expiration-year" >
                                              
                                              @for($i = date('Y'); $i <= (date('Y') + 15); $i++)
                                              <option value="{{ $i }}">{{ $i }}</option>            
                                              @endfor
                                          </select>
                                      </div>                                                
                                      <div class="form-group col-md-6 btnsaveoption" id="credit_cards">
                                          <img src="{{ asset('public/upload/payment/featured-image.gif') }}" id="visa" class="payimg">
                                         
                                      </div>
                                  </div>
                                  
                                  <br/>
                                  <div class="form-group" id="pay-now">
                                      <button type="submit" class="btn btn-success themeButton" id="confirm-purchase">{{__('messages.Confirm Payment')}}</button>
                                  </div>
                                </form>
							</div>
		        		</div>    		
		        	</div>
		      	</div>
	    	</div>
		</div>

	<div class="footer-main-box">
		<div class="container">
			<div class="footer-part-main-box">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="footer-r1-box">
							<div class="footer-logo-box">
							    @if(isset($setting->logo))
							    <img src="{{asset('public/upload/images').'/'.$setting->logo}}">
							    @else
							      <img src="{{Session::get('logo')}}">
							    @endif
								
							</div>
							<div class="footer-r1-detail">
								
								<div class="footer-d1-box">
									<h3>{{__('messages.Contact Us')}}</h3>
									<p><span><img src="{{asset('public/front/img/phone.png')}}"></span>{{isset($setting->email)?$setting->email:Session::get("email")}}</p>
									<p><span><img src="{{asset('public/front/img/mail.png')}}"></span>{{isset($setting->phone_no)?$setting->phone_no:Session::get("phone")}}</p>
								</div>
								
							</div>
							
						</div>
						<div class="footer-r1-box">
							<div class="footer-r1-detail">
								<div class="footer-d1-box">
									<h3>{{__('messages.Address')}}</h3>
									<p>{{isset($setting->address)?$setting->address:Session::get("address")}}</p>
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="col-lg-2 col-md-3">
						<div class="footer-r1-box">
							<div class="footer-r1-detail">
								<div class="footer-d1-box">
									<h3>{{__('messages.Our department')}}</h3>
									<?php $i=0;?>
									@if(isset($departmentsForFooter))
									
									@foreach($departmentsForFooter as $d)
									  @if($i<5)
									  	<a href="{{url('find-doctor?department_id='.$d->id)}}">{{$d->name}} {{__('messages.Department')}}</a>
									  	<?php $i++; ?>
									  	@endif
									@endforeach
									@else
									@if(Session::get("departmentlist"))
									   	@foreach(Session::get("departmentlist") as $d)
									  @if($i<5)
									  	<a href="{{url('find-doctor?department_id='.$d->id)}}">{{$d->name}} {{__('messages.Department')}}</a>
									  	<?php $i++; ?>
									  	@endif
									@endforeach
									@endif
									@endif
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-2 col-md-3">
						<div class="footer-r1-box">
							<div class="footer-r1-detail">
								<div class="footer-d1-box">
									<h3>{{__('messages.Helpful links')}}</h3>
									{{-- <a href="{{url('allfacilites')}}">{{__('messages.Facilities')}}</a> --}}
								
									<a href="{{url('termcondition')}}">{{__("messages.Terms & Condition")}}</a>
									<a href="{{url('privacypolicy')}}">{{__("messages.Privacy Policy")}}</a>
									<a href="{{url('contact_us')}}">{{__('messages.Contact Us')}}</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						<div class="footer-r1-box">
							<div class="footer-r1-detail">
								<div class="footer-d1-box">
									<h3>Quick Links</h3>
									<a href="{{url('admin')}}">Seller's Dashboard</a>
									<a href="{{url('admin')}}">Doctor's Dashboard</a>
									<a href="{{url('admin')}}">Hospital's Dashboard</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-part2-main-box">
				<div class="footer-bottom-main-box">
					<div class="footer-icons-main-box">
						<div class="footer-icon-box">
							<a href="{{isset($setting->facebook_id)?$setting->facebook_id:''}}">
								<i class="fab fa-facebook-f"></i>
							</a>
						</div>
						<div class="footer-icon-box">
							<a href="{{isset($setting->twitter_id)?$setting->twitter_id:''}}">
								<i class="fab fa-twitter"></i>
							</a>
						</div>
						<div class="footer-icon-box">
							<a href="{{isset($setting->google_id)?$setting->google_id:''}}">
								<i class="fab fa-google-plus-g"></i>
							</a>
						</div>
						<div class="footer-icon-box">
							<a href="{{isset($setting->instagram_id)?$setting->instagram_id:''}}">
								<i class="fab fa-instagram"></i>
							</a>
						</div>
					</div>
					<p>{{date('Y')}} @ {{__('messages.Company private ltd')}}.</p>
				</div>
			</div>
		</div>
	</div>
	{{--
		<input type="hidden" id="is_chat" value="0"/>
  	<div id="gdchat-fixed-bottom-right" class="gdchat-fixed-bottom-right ch1">
      	
		@if(isset($chatpage))
			<div class="chat-home-top-mbox ch2">
						@if(Auth::id()&&Auth::user()->usertype=='1')
						  <a href="{{url('chatarea/1')}}" data-lp-event="click" class="cha">
						@else
					 	<a href="#" onclick="changehiddenstatus()" data-toggle="modal" data-target="#myModal" data-lp-event="click" class="cha">
						@endif
				<img src="{{asset('public/upload/doctor_876303.png')}}" class="chimg">
				<span>{{__("messages.Chat with Us")}}</span></a>
			</div>
			<div class="chat-home-bottom-mbox">
				<img src="{{asset('public/upload/chat.png')}}">
				<span>{{__("messages.We're online")}}</span>
			</div>
		@endif
</div>
--}}
<div class="modal fade bd-example-modal-lg" id="doctorModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" style="margin-top: 100px;">
	  <div class="modal-content">
		  <div id="appointmentContent">
		  </div>
	  </div>
	</div>
</div>
	
	    <input type="hidden" id="siteurl" value="{{url('/')}}">
	     <input type="hidden" id="own_url" value="{{url('/')}}" />
	    <input type="hidden" id="soundnotify" value="{{asset('public/sound/notification/beltekpar.mp3')}}">
	    <input type="hidden" id="site_name_lang" value="{{__('messages.site name')}}" />
	    <input type="hidden" id="loginalert" value="{{__('messages.Please Login Your Account')}}" />
	    <input type="hidden" id="currentusername" value="{{isset(Auth::user()->name)?Auth::user()->name:''}}">
        <input type="hidden" id="mycurrentuser" value="{{isset(Auth::user()->id)?Auth::user()->id:''}}">
        <input type="hidden" id="authprofile" value="/profile/{{isset(Auth::user()->profile_pic)?Auth::user()->profile_pic:'profile.png'}}">
	    <input type="hidden" id="newsletteralert" value="{{__('messages.Thanks for subscribing we will inform you for Upcoming event')}}">
	    <input type="hidden" id="emailreq" value="{{__('messages.email_required')}}">
	    <input type="hidden" id="vaildemail" value="{{__('messages.vaild_email')}}">
	    <input type="hidden" id="rtl" value="{{isset($setting->is_rtl)?$setting->is_rtl:''}}"/>
        <input type="hidden" id="pwdreq" value="{{__('messages.pwdreq')}}">
        <input type="hidden" id="namereq" value="{{__('messages.namereq')}}">
        <input type="hidden" id="incomming" value="0" />
        <input type="hidden" id="phonereq" value="{{__('messages.phonereq')}}">
        <input type="hidden" id="confirmpwdreq" value="{{__('messages.confirmpwdreq')}}">
        <input type="hidden" id="registersuccess" value="{{__('messages.registersuccess')}}">
        <input type="hidden" id="alreadyemailexiste" value="{{__('messages.alreadyemailexiste')}}">
        <input type="hidden" id="checkcpwd" value="{{__('messages.Please Enter Correct Password')}}">
        <input type="hidden" id="mailsend" value="{{__('messages.mailsend')}}">
        <input type="hidden" id="notfoundemail" value="{{__('messages.notfoundemail')}}">
        <input type="hidden" id="bothpwdsame" value="{{__('messages.bothpwdsame')}}">
		<input type="hidden" id="rightimg" value='{{asset("public/front/img/left.png")}}' />
		<input type="hidden" id="leftimg" value='{{asset("public/front/img/right.png")}}' />
		<script type="text/javascript" src="{{asset('public/js/script.js')}}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js"></script>
		
		
		
		{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script> --}}
	
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/@iconfu/svg-inject@1.2.3/dist/svg-inject.js"></script>
	
		<script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
		
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.23/moment-timezone-with-data-2012-2022.min.js"></script>
	   
	    
		
		{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.js"></script> --}}
		 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	     @yield('footer')

	     <script type="text/javascript" src="{{asset('public/js/front.js?v=4543543')}}"></script>
		 @if(session()->has('showlogin'))

		 <script>
			 showloginmodel();
		 </script>


		 @endif
		
</body>
</html>