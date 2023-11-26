<!-- Nav Bar Desktop -->
<div class="nav_bar  justify-content-xl-end justify-content-end justify-content-md-center">

    <div class="center d-flex justify-content-lg-between justify-content-start align-items-center">
        <a href="{{ asset('/') }}">Home</a>
        <a href="{{ asset('car-list') }}">Carlist</a>
        <a href="{{ asset('/') }}"><img src="{{ asset('public/new-images/main-logo.png') }}" alt="Logo"></a>
        <a href="{{ asset('blogslist') }}">Blogs</a>
        <a href="{{ asset('contact_us') }}">Contact Us</a>
        @if(auth()->user())
        <div class="right_end d-flex gap-3">
            <div class="wish_list">
                <a href="{{ asset('my-wishlists') }}">
                    <img src="{{asset('public/new-images/heart.svg')}}"/>
                </a>
            </div>
            <div class="user_profile" >
                <img src="{{asset('public/new-images/demo_user.png')}}"/>
            </div>
            <!-- Currency  -->
            <div class="currency">
              <a href="#">🇳🇵रु</a>
            </div>
           <!-- Currency End -->
        </div>
        @else
        <div class="right  d-flex gap-2 align-items-center">
            <button type="button" class="btns_con register_url">Register</button>
            <button type="button" class="btns_log login_url">Login</button>
            <!-- Currency  -->
            <div class="currency">
              <a href="#">🇳🇵रु</a>
            </div>
           <!-- Currency End -->
        </div>
        @endif
    </div>
</div>
<!-- Nav Bar Desktop End-->



        <!--Profile modal -->
        <div class="profile_modal hide">
            <a href="{{ asset('myaccount') }}">My profile</a>
            <div class="divider"></div>
            <a href="{{ asset('userlogout') }}">Log out</a>
        </div>
        <!--Profile modal -->

        <!--currency  modal -->
        <div class="currency_modal  hide">
        <a href="{{ asset('myaccount') }}">🇳🇵रु</a>
        <div class="divider"></div>
        <a href="{{ asset('userlogout') }}">🇺🇸$</a>
        </div>
        <!--currency modal -->

<!-- Nav Bar Small Screen -->
<div class="nav_bar_sm  justify-content-around align-items-center">
    <div class="ham_menu">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>

    </div>
    <div class="main_logo">
        <img src="{{ asset('public/new-images/main-logo.png') }}" alt="">
    </div>
       @if(auth()->user())
            <div class="right_end d-flex gap-3">
                <div class="wish_list">
                    <a href="{{ asset('my-wishlists') }}">
                        <img src="{{asset('public/new-images/heart.svg')}}"/>
                    </a>
                </div>
                <div class="user_profile" >
                    <img src="{{asset('public/new-images/demo_user.png')}}"/>
                </div>
            <!-- Currency  -->
            <div class="currency">
              <a href="#">🇳🇵रु</a>
            </div>
           <!-- Currency End -->
            </div>
            @else
            <div class="right d-flex gap-2 align-items-center">
                <button type="button" class="btns_con register_url">Register</button>
                <button type="button" class="btns_log login_url">Login</button>
                    <!-- Currency  -->
                    <div class="currency">
                    <a href="#">🇳🇵रु</a>
                    </div>
                <!-- Currency End -->

            </div>
            @endif
    <div class="nav_side hide">
        <nav
            class="center
            flex-column
            justify-content-lg-between justify-content-start align-items-center
            ">
            <a href="{{ asset('/') }}">Home</a>
            <a href="{{ asset('car-list') }}">Carlist</a>
            <a href="{{ asset('blogslist') }}">Blogs</a>
            <a href="{{ asset('contact_us') }}">Contact Us</a>
         
        </nav>
    </div>
</div>
<!-- Nav Bar Small Screen End -->
