<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title id="changeunreadcount">@yield('title')</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <meta name="description" content="{{__('messages.meta_description_admin')}}">
      <meta name="title" content="{{__('messages.meta_title_admin')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta property="og:type" content="website"/>
      <meta property="og:url" content="{{url('/')}}"/>
      <meta property="og:title" content="{{__('messages.site name')}}"/>
      <meta property="og:image" content="{{asset('public/App_icon.png')}}"/>
      <meta property="og:image:width" content="250px"/>
      <meta property="og:image:height" content="250px"/>
      <meta property="og:site_name" content="{{__('messages.site name')}}"/>
      <meta property="og:description" content="{{__('messages.meta_description_admin')}}"/>
      <meta property="og:keyword" content="{{__('messages.meta_keyword')}}"/>
      @yield('meta_title')
      <link rel="shortcut icon" href="{{asset('public/App_icon.png')}}">
      <link rel="stylesheet" href="{{asset('public/adesign/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/adesign/vendors/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/adesign/vendors/themify-icons/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{asset('public/adesign/vendors/flag-icon-css/css/flag-icon.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/adesign/vendors/selectFX/css/cs-skin-elastic.css')}}">
      <link rel="stylesheet" href="{{asset('public/adesign/vendors/jqvmap/dist/jqvmap.min.css')}}">
      @if(Session::get("is_rtl")==""||Session::get("is_rtl")=='1')
      <link rel="stylesheet" href="{{asset('public/adesign/assets/css/style.css?v=9560')}}">
      @else
      <link rel="stylesheet" href="{{asset('public/adesign/assets/css/rtl.css?v=dfgdgfd')}}">
      @endif
      <link href="{{asset('public/fileupload/dist/css/jquery.dm-uploader.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('public/front/css/app.min.css')}}">
      <input type="hidden" id="authid" value="{{Auth::id()}}">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      @yield('styles')
      <style>
         .notify-red{
            background-color: rgb(108, 8, 8);
            color: white!important;
            border-bottom: 2px solid yellow;
            width: 350px;
            padding: 2px 15px !important;
         }
         .notify-green{
            background-color: rgb(15, 102, 15);
            color: white!important;
            border-bottom: 2px solid yellow;
            width: 350px;
            padding: 2px 15px !important
         }
         .ico-bell{
            font-size: 20px;
            margin-top: 6px;
            color: blueviolet;
         }
         .bell-badge{
            position: absolute;
            margin: -2px 0px 0px 12px;
         }
         #service_wrapper{
            max-width: 400px !important;
         }
      </style>
   </head>
   <body class="rtl" onload="gettimezone()">
       @include('front.firebase_config')
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa fa-bars"></i>
               </button>
               <img src="{{ asset('public/images/carrental.png/') }}" alt="Rental Image">
               <!-- <a class="navbar-brand" href="{{url('admin/dashboard')}}">RentalService</a> -->
               <a class="navbar-brand hidden" href="{{url('admin/dashboard')}}"></a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse admin-main-menu">
               <ul class="nav navbar-nav">
                  <li class="active">
                     <a href="{{url('admin/dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>{{__('messages.Dashboard')}} </a>
                  </li>
                  @can('appointment-view')
                  <li class="active">
                     <a href="{{url('admin/appointment/0/0')}}"> <i class="menu-icon fa fa-calendar"></i>Booking</a>
                  </li>
                  @endcan

                 {{-- @can('city-view')
                  <li class="active">
                     <a href="{{url('admin/city')}}"> <i class="menu-icon fa fa-user"></i>{{__('City')}}</a>
                  </li>
                  @endcan
                  --}}


                  {{-- <li class="active">
                     <a href="{{url('admin/topadds')}}"> <i class="menu-icon fa fa-user"></i>Top Adds</a>
                  </li>
                  --}}



                  <li class="active">
                     <a href="{{ route('user.contactReq') }}"> <i
                              class="menu-icon fa fa-user"></i>{{ __('Contact Req') }}</a>
                  </li>

                  
                  @can('hospital-view')
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-table"></i>Fleet</a>
                     <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route('servicesProvider.approved') }}">Approved Fleet</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('servicesProvider.appointment') }}">Fleet Appointments</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('servicesProvider.pending') }}">Pending Fleet</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('servicesProvider.disabled') }}">Rejected Fleet</a></li>
                     </ul>
                  </li>
                  @endcan
                  

                  @can('doctor-view')
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-table"></i>Service</a>
                     <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route('services.approved') }}">car</a></li>
                        {{-- <li><i class="fa fa-table"></i><a href="{{ url('admin/doctor-appointment') }}">Serice Appointments</a></li> --}}
                        {{--
                        @if(Auth::user()->usertype == '2')
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/service-pending') }}">Pending Services </a></li>
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/doctor-disabled') }}">Rejected Services  </a></li>
                        @endif
                        --}}
                     </ul>
                  </li>
                  @endcan

                  {{--

                  @can('seller-view')
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-table"></i>Seller</a>
                     <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user"></i><a href="{{url('admin/applied-seller')}}">{{__('Applied Seller')}}</a>
                        </li>
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/seller?status=approved') }}">Approved Sellers</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/seller?status=disabled') }}">Rejected Sellers  </a></li>
                     </ul>
                  </li>
                  @endcan

                  --}}

                  {{--

                  @can('product-view')
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-table"></i>Product</a>
                     <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/product') }}">All Product</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/category') }}">Categories</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/sub-category') }}">Sub Categories </a></li>
                     </ul>
                  </li>
                  @endcan
                  --}}

                  {{--
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-table"></i>Bike Details</a>
                     <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/bike') }}">Added Bike</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/bike-brand') }}">Bike Brand</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/bike-model') }}">Bike Models</a></li>
                     </ul>
                  </li>
                  --}}

                  {{--

                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-table"></i>Bluebook</a>
                     <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ url('admin/bluebook') }}">Bluebook Renew</a></li>
                     </ul>
                  </li>

                  --}}

                  {{--

                  @can('order-view')
                  <li class="active">
                     <a href="{{url('admin/order')}}"> <i class="menu-icon fa fa-user"></i>{{__('Orders')}}</a>
                  </li>
                  @endcan

                  --}}

                  {{--

                  @can('seller-view')
                  <li class="active">
                     <a href="{{url('admin/quote')}}"> <i class="menu-icon fa fa-user"></i>{{__('Quote')}}</a>
                  </li>
                  <li class="active">
                     <a href="{{url('admin/prescription')}}"> <i class="menu-icon fa fa-user"></i>{{__('Prescription')}}</a>
                  </li>
                  @endcan

                  --}}

                  {{--
                @if(Auth::user()->usertype == "2")
                  <li class="active">
                        <a href="{{url('admin/subscription')}}"> <i class="menu-icon fa fa-gift"></i>{{__('messages.Subscription')}}</a>
                     </li>
                @endif
                --}}

                {{--


                  @can('blog-view')
                  <li class="active">
                     <a href="{{url('admin/blog')}}"> <i class="menu-icon fa fa-user"></i>{{__('Blog')}}</a>
                  </li>
                  @endcan

                  --}}

                  @can('patient-view')
                  <li class="active">
                     <a href="{{url('admin/patient')}}"> <i class="menu-icon fa fa-user"></i>{{__('Customer')}}</a>
                  </li>
                  @endcan


                  @can('review-view')
                  <li class="active">
                     <a href="{{url('admin/review')}}"> <i class="menu-icon fa fa-star"></i>{{__('messages.Review')}}</a>
                  </li>
                  @endcan

                  @can('department-view')
                  <li class="active">
                     <a href="{{url('admin/department')}}"> <i class="menu-icon fa fa-eercast"></i>Category</a>
                  </li>
                  @endcan
                  {{--
                  @if(Auth::user()->usertype == "2")
                   <li class="active">
                     <a href="{{url('admin/package')}}"> <i class="menu-icon fa fa-user-md"></i>Package</a>
                  </li>
                  @endif

                  --}}

                  @can('setting-view')
                  <li class="active">
                     <a href="{{url('admin/setting/1')}}"> <i class="menu-icon fa fa-cogs"></i>{{__('messages.Setting')}}</a>
                  </li>
                  @endcan

                  {{--@can('role-view')
                  <li class="active">
                     <a href="{{url('admin/role')}}"> <i class="menu-icon fa fa-cogs"></i>{{__('Roles and Permissions')}}</a>
                  </li>
                  @endcan --}}

                @if(Auth::user()->usertype == "2")
                  <li class="active">
                     <a href="{{url('admin/editprofile')}}"><i class="menu-icon fa fa-user"></i> {{__('messages.My Profile')}}</a>
                  </li>
                @endif
                  <li class="active">
                     <a href="{{url('admin/changepassword')}}"><i class="menu-icon fa fa-user"></i> {{__('messages.Change password')}}</a>
                  </li>
                  <li class="active">
                     <a href="javascript:logout()"><i class="menu-icon fa fa-power-off"></i> {{__('messages.Logout')}}</a>
                  </li>





                  {{-- @can('chat-view')
                  <li class="active">
                     <a href="{{url('admin/chat')}}"> <i class="menu-icon fa fa-comment"></i>{{__('messages.Chat')}} </a>
                  </li>
                  @endcan --}}
                  {{-- @can('gallery-view')
                  <li class="active">
                     <a href="{{url('admin/gallery')}}"> <i class="menu-icon fa fa-file-image-o"></i>{{__('messages.Gallery')}}</a>
                  </li>
                  @endcan --}}
                 {{-- @can('subscription-view')
                     <li class="active">
                        <a href="{{url('admin/subscription')}}"> <i class="menu-icon fa fa-gift"></i>{{__('messages.Subscription')}}</a>
                     </li>
                  @endcan --}}
                  @can('news-view')
                  <li class="active">
                     <a href="{{url('admin/news')}}"> <i class="menu-icon fa  fa-newspaper-o"></i>{{__('messages.news')}}</a>
                  </li>
                  @endcan
                  @can('contact-us-view')
                  <li class="active">
                     <a href="{{url('admin/contactus')}}"> <i class="menu-icon fa  fa-address-card"></i>{{__('messages.Contact Us')}}</a>
                  </li>
                  @endcan
                  @can('service-view')
                  <!--<li class="active">-->
                  <!--   <a href="{{url('admin/service')}}"> <i class="menu-icon fa fa-book"></i>{{__('messages.Facilities')}}</a>-->
                  <!--</li>-->
                  @endcan

                  @can('notification-view')
                  <li class="active">
                     <a href="{{url('admin/notification')}}"> <i class="menu-icon fa fa-bell"></i>{{__('messages.Notification')}}</a>
                  </li>
                  @endcan
                  {{-- @can('payment-gateway-view')
                  <li class="active">
                     <a href="{{url('admin/paymentgateway')}}"> <i class="menu-icon fa fa-money"></i>{{__('messages.Payment Gateway')}}</a>
                  </li>
                  @endcan --}}

                  <li class="active">
                     @if(auth()->user()->usertype==3)
                     <?php $doctor = \App\Model\Doctor::where('user_id',auth()->user()->id)->first(); ?>
                     <a href="{{url('admin/savedoctor/'.$doctor->id.'/1')}}"><i class="menu-icon fa fa-user"></i> {{__('Update Info')}}</a>
                     @endif
                  </li>

                  <li class="active">
                     @if(auth()->user()->usertype==4)
                     <?php $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first(); ?>
                     <a href="{{url('admin/hospital/'.$hospital->id.'/edit')}}"><i class="menu-icon fa fa-user"></i> {{__('Update Info')}}</a>
                     @endif
                  </li>

               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="header-menu">
               <div class="col-sm-7">
                  <a id="menuToggle" class="menutoggle pull-left d-flex justify-content-center align-items-center"><i class="fa fa fa-tasks"></i></a>
                  <div class="header-left">
                  </div>
               </div>
               <div class="col-sm-5">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="@if(auth()->user()->profile_pic) {{ asset('public/upload/profile/'.auth()->user()->profile_pic) }} @else {{ asset('public/profileicon.png') }} @endif"  alt="User Avatar">
                     </a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="{{url('admin/editprofile')}}"><i class="fa fa-user"></i> {{__('messages.My Profile')}}</a>
                        @if(auth()->user()->usertype==3)
                        <?php $doctor = \App\Model\Doctor::where('user_id',auth()->user()->id)->first(); ?>
                        <a class="nav-link" href="{{url('admin/savedoctor/'.$doctor->id.'/1')}}"><i class="fa fa-user"></i> {{__('Update Doctor Details')}}</a>
                        @endif
                        @if(auth()->user()->usertype==4)
                        <?php $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first(); ?>
                        <a class="nav-link" href="{{url('admin/hospital/'.$hospital->id.'/edit')}}"><i class="fa fa-user"></i> {{__('Update Hospital Details')}}</a>
                        @endif
                        <a class="nav-link" href="{{url('admin/changepassword')}}"><i class="fa fa-user"></i> {{__('messages.Change password')}}</a>
                        <a class="nav-link" href="javascript:logout()"><i class="fa fa-power-off"></i> {{__('messages.Logout')}}</a>
                     </div>
                  </div>
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="user-avatar rounded-circle fa fa-bell ico-bell"></i>
                        @php
                        if(auth()->user()->usertype==2){
                              $unreadCount = \App\Model\QuickNotification::where('reader_id',auth()->user()->id)->where('status',0)->count();
                        }elseif(auth()->user()->usertype==3){
                              $doctor = \App\Model\Doctor::where('user_id',auth()->user()->id)->first();
                              $unreadCount = \App\Model\QuickNotification::where('reader_id',$doctor->id)->where('status',0)->count();
                        }elseif(auth()->user()->usertype==4){
                              $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first();
                              $unreadCount = \App\Model\QuickNotification::where('reader_id',$hospital->id)->where('status',0)->count();
                        }elseif(auth()->user()->usertype==5){
                              $seller = \App\Seller::where('user_id',auth()->user()->id)->first();
                              $unreadCount = \App\Model\QuickNotification::where('reader_id',$seller->id)->where('status',0)->count();
                        }else{
                              $unreadCount = \App\Model\QuickNotification::where('reader_id',0)->where('status',0)->count();
                        }
                        @endphp
                        <span class="badge badge-primary bell-badge" id="unreadCount">{{ $unreadCount }}</span>
                     </a>
                     <div class="user-menu dropdown-menu" id="notificationView">
                        @php
                        if(auth()->user()->usertype==2){
                              $notifications = \App\Model\QuickNotification::where('reader_id',auth()->user()->id)->latest()->limit(10)->get();
                        }elseif(auth()->user()->usertype==3){
                              $doctor = \App\Model\Doctor::where('user_id',auth()->user()->id)->first();
                              $notifications = \App\Model\QuickNotification::where('reader_id',$doctor->id)->latest()->limit(10)->get();
                        }elseif(auth()->user()->usertype==4){
                              $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first();
                              $notifications = \App\Model\QuickNotification::where('reader_id',$hospital->id)->latest()->limit(10)->get();
                        }elseif(auth()->user()->usertype==5){
                              $seller = \App\Seller::where('user_id',auth()->user()->id)->first();
                              $notifications = \App\Model\QuickNotification::where('reader_id',$seller->id)->latest()->limit(10)->get();
                        }else{
                              $notifications = \App\Model\QuickNotification::where('reader_id',0)->limit(10)->get();
                        }
                        @endphp
                        @foreach($notifications as $notification)
                           <a class="nav-link @if($notification->status==0) notify-red @else notify-green @endif" href="{{ url('admin/quick-notification/show/'.$notification->id) }}" >
                              {{ $notification->title }}<br/>
                              {{ $notification->detail }}
                              <span class="float-right">
                                 {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                              </span>
                           </a>
                        @endforeach
                        <a class="nav-link text-center" href="{{ url('admin/quick-notification') }}">
                           <u>View All</u>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         @yield('content')
      </div>
      <div id="chat_new" class="modal" >
            <div class="modal-dialog modal-md modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                        <h4 class="modal-title">{{__("messages.Search Doctor")}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
      <div id="chat_new" class="modal" >
            <div class="modal-dialog modal-md modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                        <h4 class="modal-title">{{__('messages.Search')}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
      <input type="hidden" id="site_url" value="{{url('/')}}" />
      <input type="hidden" id="siteurl" value="{{url('/')}}" />
      <input type="hidden" id="admin_url" value="{{url('/admin')}}" />
      <input type="hidden" id="own_url" value="{{url('admin')}}" />
      <input type="hidden" id="currentusername" value="{{Auth::user()->name}}">
      <input type="hidden" id="mycurrentuser" value="{{Auth::user()->id}}">
      <input type="hidden" id="authprofile" value="{{Session::get('profile_pic_path')}}">
      <input type="hidden" id="usertype" value="{{Auth::user()->usertype}}">
      <input type="hidden" id="site_type" value="{{Session::get('is_demo')}}">
      <input type="hidden" id="delete_msg" value="{{__('messages.Are sure want to delete this row')}}"/>
      <input type="hidden" id="samepwd" value="{{__('messages.New password and Re enter password must be same')}}">
      <input type="hidden" id="incorrectpwd" value="{{__('messages.Please Enter Correct Password')}}">
      <input type="hidden" id="invaildimg" value="{{__('messages.Image Size Invaild')}}">
      <input type="hidden" id="chkworkingtime" value="{{__('messages.Please Check You Working Time')}}"/>
      <input type="hidden" id="seldate" value="{{__('messages.Please Select Date')}}">

      <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
      <script type="text/javascript" src="{{asset('public/js/script.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
      <script src="{{asset('public/adesign/assets/js/main.js')}}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="{{asset('public/adesign/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/jszip/dist/jszip.min.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('public/adesign/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
      <script src="{{asset('public/fileupload/dist/js/jquery.dm-uploader.min.js')}}"></script>
      <script src="{{asset('public/fileupload/demo/demo-ui.js')}}"></script>
      <script src="{{asset('public/fileupload/demo/demo-config.js?v=296')}}"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.23/moment-timezone-with-data-2012-2022.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="{{asset('public/adesign/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

      <script src="{{asset('public/js/admin.js?v=1333324')}}"></script>
      @yield('footer')
      <script>
         $(function(){

            setInterval(() => {

               $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: '{{ url("admin/quick-notification/ajaxdata") }}',
                  type: "POST",
                  data: null,
                  beforeSend:function(){
                     console.log('ajax fired');
                  },
                  success: function (data) {
                     if(data.status==true){
                        $('#unreadCount').html(data.unreadCount);
                        $('#notificationView').html(data.notificationView);
                     }else{
                        console.log('error');
                     }
                  },
                  error:function(xhr){
                     console.log(xhr);
                  }
               });


            }, 10000);

         });
      </script>

   </body>
</html>
