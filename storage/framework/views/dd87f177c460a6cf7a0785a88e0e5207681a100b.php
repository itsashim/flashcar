<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('public/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/select2/css/new-section.css')); ?>">
    <!--<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css' rel='stylesheet' />-->
    <!-- Bootstrap 5  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Bootstrap 5 End -->

    <!-- Animate.js CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Animate.js End -->

    <!-- AOS Link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- AOS Link Ends -->



    <style>
        .hide {
            display: none !important;
        }

        #navbarSupportedContent {
            justify-content: right;
        }

        .ft-12 {
            font-size: 12px;
        }

        .section-hospital {
            background-color: #e9eaeb9e;
        }

        .text-bold {
            font-weight: bold;
        }

        .fs-xl {
            font-size: x-large;
        }

        .fs-l {
            font-size: larger;
        }

        .bg-aquamarine {
            background-color: aquamarine !important;
        }

        .link-text-black {
            color: black;
            text-decoration: none;
        }

        .link-text-black:hover {
            color: brown;
            text-decoration: none;
        }

        /* Owl Caurosel */

        .owl-prev>span {
            color: white;
            margin-top: -27px;
            margin-left: -5px;
            position: absolute;
            font-size: 32px;
        }

        .owl-next>span {
            color: white;
            margin-top: -27px;
            margin-left: -5px;
            position: absolute;
            font-size: 32px;
        }

        .owl-nav>.owl-prev:hover {
            background-color: red !important;
        }

        .owl-nav>.owl-next:hover {
            background-color: red !important;
        }

        #owlCarouseltrust .owl-prev,
        #owlCarouseltrust .owl-next {
            display: none;
        }


        /* Owl Caurosel End */


        /* Pricing Section */
        .pricing-main-box .pricing-part-box {
            padding: 20px;
            border: 1px solid #d7d7d7;
            border-radius: 10px;
            margin-top: 30px;
            text-align: center;
            border-bottom: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .pricing-part-box h3 {
            color: #076483 !important;
        }

        .pricing-part-box .pricing-cost {
            margin: 15px 0px;
        }

        .pricing-cost span {
            font-size: 45px;
            font-weight: 600;
        }

        .pricing-cost h6 {
            display: inline-block;
            font-size: 15px;
            color: #767676;
        }

        .pricing-part-box p {
            height: auto;
            font-size: 14px;
            width: 80%;
            margin: 0 auto;
            color: #767676;
            font-family: 'AvenirLTStd-Book';
        }

        .pricing-part-btn a {
            background-color: #076483 !important;
            color: white !important;
        }

        .pricing-part-btn a {
            background-color: #076483;
            border: none;
            color: white;
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            outline: none;
            font-family: 'AvenirLTStd-Medium';
            text-transform: uppercase;
            font-size: 15px;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
        }

        /* Pricing Section End */

        /* Number Count Section */
        .numbers-counter-part-box img {
            width: 35px;
            height: auto;
        }

        .numbers-counter-part-box .counter-value {
            font-weight: bold;
            font-size: 38px;
            margin-top: 15px;
        }

        .numbers-counter-main-box {
            padding: 30px;
            background-color: #22242a;
            margin: 0px 0px;
        }

        .numbers-counter-part-box {
            text-align: center;
            color: white;
        }

        /* Number Count Section End */

        /* Trusted Section */
        .global-heading {
            text-align: center;
        }

        .global-heading h2 {
            color: #0f4a86 !important;
        }

        .global-heading p {
            font-size: 20px;
            color: #767676;
            margin-bottom: 0;
            margin: 25px auto 0;
            font-family: 'AvenirLTStd-Book';
            margin-bottom: 15px;
        }

        /* Trusted Section End */

        /* Footer Section */
        .footer {
            background-color: #000000;
            background-image: linear-gradient(147deg, #000000 0%, #2c3e50 74%);
            color: aliceblue;
            /*padding: 5rem;*/
        }

        .footer_wrap {
            padding: 5rem;
        }

        .footer_wrap a {
            color: white;
        }

        .contact_us,
        .link_2,
        .social {
            line-height: 2.3rem;
        }

        .terms_condition {
            font-size: 0.8rem;
            font-weight: 600;
        }

        .copyright {
            opacity: 70%;
        }

        .footer .footer_wrap h4 {
            color: darkcyan;
        }

        .abou-sec {
            line-height: 2rem;
        }

        @media  screen and (max-width: 992px) {
            .footer_1 {
                padding: 5rem 1.8rem;
            }
        }

        /* Footer Sectoin End */



        /* Pagination Design*/
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #076483;
            border-color: #007bff;
        }

        /* Pagination Design*/



        /* Large Screen Device */
        @media  screen and (min-width: 992px) {

            /*.dropdown-menu {*/
            /*    position:inherit !important;*/
            /*}*/

            .bg-lightgreen {
                background-color: #076483;
            }

            .height-50 {
                height: 50px;
            }

            .p-10 {
                padding: 10px;
            }

            .m-10 {
                margin: 10px;
            }

            .text-lg-center {
                text-align: center;
            }

            .text-lg-left {
                text-align: left;
            }

            .text-lg-right {
                text-align: right;
            }

            /*.main-nav-item-sm {*/
            /*    border-bottom: 2px solid white !important;*/
            /*}*/

            #navbarSupportedContent>.navbar-nav>.nav-item>.nav-link {
                font-size: 13px;
                font-weight: 800;
                padding-left: 15px;
                text-transform: uppercase;
                color: forestgreen;

            }

            .main-nav-link-item {
                margin-top: 10px;
                ;
            }

            .icon-nav-lg {
                margin-left: 6px;
            }

            .carousel-item {
                height: 400px;
            }

            .carousel-inner {
                height: 400px;
            }

            .carousel-image {
                height: 400px;
            }

            .pd-lg-20 {
                padding: 20px;
            }

            .text-lg-right {
                text-align: right;
            }

            .owl-nav>.owl-prev {
                width: 36px;
                height: 36px;
                background: #076483 !important;
                border-radius: 50% !important;
                position: absolute;
                left: 0%;
                margin-top: -200px !important;
            }

            .owl-nav>.owl-next {
                width: 36px;
                height: 36px;
                background: #076483 !important;
                border-radius: 50% !important;
                position: absolute;
                right: 0%;
                margin-top: -200px !important;
            }

        }

        /* Mobile Device */
        @media  screen and (max-width: 575px) {

            .bg-lightgreen {
                background-color: #076483;
            }

            .height-50 {
                height: 80px;
            }

            .p-10 {
                padding: 10px;
            }

            .m-10 {
                margin: 10px;
            }

            .text-sm-center {
                text-align: center;
            }

            .text-sm-left {
                text-align: left;
            }

            .text-sm-right {
                text-align: right;
            }

            #navbarSupportedContent>.navbar-nav>.nav-item>.nav-link {
                font-size: 15px;
                font-weight: 600;
                padding-left: 15px;
                text-transform: uppercase;
            }

            .main-nav-link-item {
                margin-top: 0px;
                ;
            }

            .icon-nav-sm {
                margin-left: 15px;
            }

            .carousel-item {
                height: 260px;
            }

            .carousel-inner {
                height: 260px;
            }

            .carousel-image {
                height: 260px;
            }

            .owl-nav>.owl-prev {
                width: 36px;
                height: 36px;
                background: #076483 !important;
                border-radius: 50% !important;
                position: absolute;
                left: 0%;
                margin-top: -230px !important;
            }

            .owl-nav>.owl-next {
                width: 36px;
                height: 36px;
                background: #076483 !important;
                border-radius: 50% !important;
                position: absolute;
                right: 0%;
                margin-top: -230px !important;
            }

            .footer-bottom-main-box p {
                float: none;
            }

            .pb-sm-20 {
                padding-bottom: 20px;
            }

            .footer-main-box {
                padding: 20px;
                background-color: black;
                color: white;
            }

        }

        /* Table Device */
        @media  screen and (min-width: 575px) and (max-width: 991px) {
            .bg-lightgreen {
                background-color: #076483;
            }

            .height-50 {
                height: 50px;
            }

            .p-10 {
                padding: 10px;
            }

            .icon-nav-lg {
                margin-left: 12px;
            }

            .carousel-item {
                height: 380px;
            }

            .carousel-inner {
                height: 380px;
            }

            .carousel-image {
                height: 380px;
            }

            .pd-md-20 {
                padding: 20px;
            }

            .text-md-left {
                text-align: left;
            }

            .text-md-right {
                text-align: right;
            }

            .text-md-center {
                text-align: center;
            }

            .scanqr {
                width: 30%;
            }

            .owl-nav>.owl-prev {
                width: 36px;
                height: 36px;
                background: #076483 !important;
                border-radius: 50% !important;
                position: absolute;
                left: 0%;
                margin-top: -215px !important;
            }

            .owl-nav>.owl-next {
                width: 36px;
                height: 36px;
                background: #076483 !important;
                border-radius: 50% !important;
                position: absolute;
                right: 0%;
                margin-top: -215px !important;
            }
        }
    </style>


    <?php echo $__env->yieldContent('styles'); ?>
    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="main-wrapper">
        



        <!-- new navbar -->
        <div class="alert_top  align-items-center justify-content-between">
            <p class="mb-0 mx-auto">
                <?php echo $topadds[0]['name']; ?> 🚚 📦
            </p>
            
            <a class="btn directing-page m-0 text-white" href="mailto:wheelonpalm@gmail.com"
                style="display:flex; gap:10px">
                <span>
                    <i class="fa-regular fa-envelope fa-lg"></i>
                </span>
                wheelonpalm@gmail.com
            </a>
        </div>
        <nav class="nav_bar gap-2">
            <!--  -->
            <div class="d-flex justify-content-center align-items-center gap-3">
                <!-- Hamburger -->
                <div class="ham">
                    <i class="fa-solid fa-bars ham_bar"></i>
                    <i class="fa-solid fa-xmark ham_cross hide"></i>
                    <div class="ham_menu animate__animated animate__fadeInLeft hide ">
                        <ul>
                            <li id="spare_bike" class="d-flex align-items-center justify-content-between px-4">
                                <p>Spare by Bike</p>
                                <i class="fa-solid fa-angle-right "></i>
                            </li>
                            <li class="d-flex align-items-center justify-content-between px-4">
                                <p>Spare by Category</p>
                                <i class="fa-solid fa-angle-right "></i>
                            </li>

                        </ul>
                    </div>
                    <!-- Ham menu nav sub Item -->
                    <!-- Ham menu nav sub Item -->
                    <!-- Ham menu nav sub Item -->
                    <!-- too add another "sub items" create a another div just like below -->
                    <div for="spare_bike" class="sub_item hide animate__animated animate__fadeInRight">
                        <p class="back d-flex align-items-center gap-2">
                            <i class="fa-solid fa-angle-left"></i><span>Back</span>
                        </p>
                        <div class="divider"></div>
                        <div class="p-3">
                            <h5>Spare By Bikes</h5>
                            <ul>
                                <li>
                                    <p id="bajaj" class="d-flex align-items-center justify-content-between">
                                        <span>Bajaj</span> <i class="fa-solid fa-angle-right"></i>
                                    </p>
                                </li>
                                <li>
                                    <p>Hero</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Ham menu nav sub Item End-->
                    <!-- Ham menu nav sub Item End-->
                    <!-- Ham menu nav sub Item End-->

                    <!-- Ham menu nav sub sub sub Item -->
                    <!-- Ham menu nav sub sub Item -->
                    <!-- Ham menu nav sub sub Item -->
                    <!-- too add another "sub sub items" create a another div just like below -->
                    <div for="bajaj" class="sub_sub_item animate__animated animate__fadeInRight hide">
                        <p class="sub_back d-flex align-items-center gap-2">
                            <i class="fa-solid fa-angle-left"></i><span>Back</span>
                        </p>
                        <div class="divider"></div>
                        <ul>
                            <li><a href="#">bajaj</a></li>
                            <li><a href="#">bajaj 300</a></li>
                        </ul>
                    </div>
                    <!-- Ham menu nav sub sub sub Item -->
                    <!-- Ham menu nav sub sub Item -->
                    <!-- Ham menu nav sub sub Item -->
                </div>
                <!-- Hamburger End -->

                <div class="nav_logo ">
                    <a href="<?php echo e(url('/')); ?>">
                        <?php if(isset($setting->logo)): ?>
                            <img class="main-logo" src="<?php echo e(asset('public/upload/images') . '/' . $setting->logo); ?>"
                                class="logo-img">
                        <?php else: ?>
                            <img class="main-logo" src="<?php echo e(Session::get('logo')); ?>">
                        <?php endif; ?>
                    </a>
                </div>
            </div>

            <!--  -->

            <!-- Nav Search Bar -->
            <form class="search_bar" action="<?php echo e(url('site-search')); ?>" method="GET">
                <div class="search_bar">
                    <input class="search_input mb-0" name="search" type="text" placeholder="Search.."
                        aria-label="Recipient's username" aria-describedby="basic-addon2" />
                    <!-- Select category -->

                    <!-- Select category End -->

                    <!-- Search Button -->
                    <button class="search_button" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <!-- Search Button -->
                </div>
            </form>
            <!-- Nav Search Bar End -->

            <!--  -->
            <div class="d-flex align-items-center justify-content-center gap-3 nav_child3">
                <!-- Login / SignUp -->
                <div>
                    <div class="login_dropdown">
                        <div class="login_text">
                            <span class="sub_title_login ">Login / SignUp</span>
                            <p
                                class="login_dropdown_click  m-0 d-flex align-items-center justify-content-center gap-2">
                                <span>My Account</span><i class="fa-solid fa-angle-down"></i>
                            </p>
                        </div>
                        <div class="profile_icon login_dropdown_click">
                            <i class="fa-solid fa-1x fa-user"></i>
                        </div>

                        <!-- Login Modal -->
                        <div class="login_modal animate__animated  animate__fadeIn  hide">

                            
                            <!-- Login / Signup Form -->

                            <!-- Login / Signup Form  End-->


                            
                            <?php if(auth()->user()): ?>
                                <li class="nav-item main-nav-item-sm dropdown"
                                    style="padding-top: 10px;  
                                         overflow: unset; 
                                    box-shadow: none;
                                          border-width: 0; 
                                          background-color: unset;
                                           list-style: none;">

                                    <a style="color: #076483 !important;" class="dropdown-item "
                                        href="<?php echo e(url('myaccount')); ?>">My Account</a>
                                    <a style="color: #076483 !important;" class="dropdown-item"
                                        href="<?php echo e(url('userlogout')); ?>">Logout</a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item main-nav-item-sm" style="list-style: none;">
                                    <i class="triangle fa-solid fa-play"></i>
                                    <h3 class="text-center my-3">Login to my account</h3>

                                    <form class="login_form" action="<?php echo e(asset('user/login')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <h5 class="mb-3">Enter you e-mail and password:</h5>

                                        <input type="email" name="email" placeholder="Email" />
                                        <input type="password" name="password" placeholder="password" />
                                        <button class="login_btn mb-4">Login</button>
                                        <a href="<?php echo e(url('register')); ?>">Create a new account</a>
                                        <span>||</span>
                                        <a href="<?php echo e(url('forgot-password')); ?>">Forget password?</a>
                                    </form>
                                </li>
                            <?php endif; ?>
                            


                        </div>
                        <!-- Login Modal End-->
                    </div>
                </div>
                <!-- Login / SignUp End -->
                <!-- Add to cart -->
                <div class="d-flex" style="gap: 1.5rem;">

                    <div class="cart_icon_div d-flex gap-4 align-items-center">
                        <a href="<?php echo e(asset('cart')); ?>">
                            <div class="cart_icon">
                                <i class="fa-solid  fa-cart-shopping text-white"></i>
                                <?php
                                    if (auth()->user()) {
                                        $cartCount = \App\CartDetail::where('user_id', auth()->user()->id)
                                            ->where('status', 'Pending')
                                            ->sum('quantity');
                                    }
                                ?>
                                <div id="cartTotalCount" class="cart_count"><?php echo e(isset($cartCount) ? $cartCount : 0); ?>

                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Wishlist -->
                    <div class="cart_icon_div d-flex gap-4 align-items-center">
                        <a href="<?php echo e(asset('my-wishlists')); ?>">
                            <div class="cart_icon">
                                <i class="fa-solid fa-heart fa-lg text-white"></i>
                                <?php
                                    if (auth()->user()) {
                                        $wishlistCount = \App\Wishlist::where('user_id', auth()->user()->id)->count();
                                    }
                                ?>
                                <div id="cartTotalCount" class="cart_count">
                                    <?php echo e(isset($wishlistCount) ? $wishlistCount : 0); ?>

                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Wishlist End -->

                </div>
                <!-- Add to cart End -->
            </div>


            <!--  -->
        </nav>
        <!-- Bottom Nav bar -->
        <nav class="bottom_nav  gap-3">
            <div class="dropdown d-inline-block">
                <a class="dropdown-toggle" href="<?php echo e(asset('brandlist')); ?>" role="button" aria-expanded="false">
                    Spares by Bike
                </a>

                <ul class="dropdown-menu">
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('bikebrandlist', ['id' => $brand->id])); ?>">
                                <?php echo e($brand->name); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

            <div class="dropdown d-inline-block">
                <a href="<?php echo e(url('/categorylist')); ?>" class="dropdown-toggle" role="button" aria-expanded="false">
                    Spares by Category
                </a>

                <div class="dropdown-menu" style="width: 80vw;">
                    <div class="d-flex flex-wrap  gap-3">

                        
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div style="min-width: 215px;width: 15%;">
                                <a class="dropdown-item" href="<?php echo e(asset('categories/' . $category->slug)); ?>" style="white-space: unset !important;max-width: 20ch; font-weight: 600;">
                                    <?php echo e($category->name); ?>

                                </a>
                                <ul>

                                    <?php if($category->subCategory->count() > 0): ?>
                                        <?php $__currentLoopData = $category->subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="px-3">
                                                <a style="color: #000;" href="<?php echo e(asset('sub-categories/' . $subCategory->slug)); ?>">
                                                    <?php echo e($subCategory->name); ?>

                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                    
                                </ul>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
            
            <div>
                <a href="<?php echo e(url('/pricing')); ?>">Subscription</a>
            </div>
            <!--<div>-->
            <!--    <a href="facebook.com">Accessories</a>-->
            <!--</div> -->
            <div class="dropdown d-inline-block">
                <a class="dropdown-toggle" href="<?php echo e(url('/services')); ?>" role="button" aria-expanded="false">
                    Services
                </a>

                <div class="dropdown-menu">
                    <div class="d-flex  gap-3">
                        <ul>
                            <li><a class="dropdown-item" href="#">Bike Servicing</a></li>
                            <li><a class="dropdown-item" href="#">Scooter Servicing</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Emergency Breakdown</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Emergency Road Assistance</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('bluebook-renew')); ?>">BlueBook Renewal</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <a class="dropdown-toggle" href="<?php echo e(url('/about-us')); ?>" role="button" aria-expanded="false">
                    About Us
                </a>

                <div class="dropdown-menu">
                    <div class="d-flex  gap-3">
                        <ul>
                            <li><a class="dropdown-item" href="<?php echo e(url('/about-us')); ?>">About Us</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/contact_us')); ?>">Contact Us</a></li>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('/privacypolicy')); ?>">Privacy Policy</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('/termcondition')); ?>">Terms of Service</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <a href="<?php echo e(url('/blogslist')); ?>">Blogs</a>
            </div>
            <div>
                <a href="<?php echo e(url('used-bike-list')); ?>">Buy & Sell</a>
            </div>

            <div>
                <a href="<?php echo e(url('accessories')); ?>">Accessories</a>
            </div>
            
            
        </nav>
        <!-- Bottom Nav bar End-->
        <!-- new navbar end -->



        <?php echo $__env->yieldContent('content'); ?>
        <!-- Footer Section -->
        <footer class="footer">
            <div class="row footer_wrap mx-0 ">
                <div class="abou-sec col-lg-4 col-md-3 col-sm-8">
                    <h4 class="mb-4">About Us</h4>
                    <p>
                        Wheels On Palms is a concept of young and enthusiastic people who
                        are always in search and development of country & upliftment of the
                        society.
                        <!--This concept is mainly win the trust of its
                                customers/consumers,
                                through their product & services.-->
                    </p>
                </div>

                <!--<div class="link_1">
                        <h4>Quick Links</h4>
                        
                    </div>-->

                <div class="link_2 d-flex flex-column col-lg-2 col-md-3 col-sm-4">
                    <h4 class="mb-3">Services</h4>
                    <a href="<?php echo e(url('bluebook-renew')); ?>">Bluebook Renewal</a>
                    <a href="<?php echo e(url('used-bike-list')); ?>">Buy/Sell</a>
                </div>

                <div class="contact_us d-flex flex-column col-lg-3 col-md-3 col-sm-6">
                    <h4 class="mb-3">Contact Us</h4>
                    <a href="mailto:wheelonpalm@gmail.com"><i
                            class="fa-regular fa-envelope fa-lg mr-2"></i>wheelonpalm@gmail.com</a>
                    <a href="tel:+977-9843002972"><i class="fa-solid fa-phone fa-lg mr-2"></i>+977-9843002972</a>
                    <a href="#"><i class="fa-solid fa-location-dot mr-2"></i>Buddhanagar,
                        Kathmandu, Nepal</a>
                </div>

                <div class="social d-flex flex-column col-lg-3 col-md-3 col-sm-6">
                    <h4 class="mb-3">Social Connect</h4>
                    <div class="social_icons">
                        <a href="https://www.facebook.com/?sk=welcome"><i
                                class="fa-brands fa-facebook fa-2xl mr-3"></i></a>
                        <a
                            href="https://www.instagram.com/wheelonpalm/?fbclid=IwAR16-bv8oY35cmmstD3GqABW7Ac-e7sYw1SyZltvj0AASysizvG-Bc8ZU60 "><i
                                class="fa-brands fa-instagram fa-2xl mr-3"></i></a>
                        <a href="https://www.twitter.com/"><i class="fa-brands fa-square-twitter fa-2xl mr-3"></i></a>
                        
                    </div>
                    
                </div>
            </div>
            <div class="copyright text-center p-3">
                <p>2023 @ Company private ltd.</p>
            </div>
        </footer>
        <!-- Footer Section End-->




    </div>
</body>

<!-- AOS script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- AOS Script Ends -->

<!-- initialize AOS -->
<script>
    AOS.init();
</script>
<!-- initialize AOS  End-->


<!--<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.8/index.global.min.js"
    integrity="sha512-R2ktoX0ULWEVnA5+oE1kuNEl3KZ9SczXbJk4aT7IgPNfbgTqMG7J14uVqPsdQmZfyTjh0rddK9sG/Mlj97TMEw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- bootstrap cdn -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

<script src="<?php echo e(asset('public/select2/js/select2.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- owl carosel cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // $('.normalCarousel .owl-carousel').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     nav: true,
    //     dots: false,
    //     interval: 3000,
    //     autoplay: true,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         600: {
    //             items: 3
    //         },
    //         1000: {
    //             items: 6
    //         }
    //     }
    // });


    $('#brandCarousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navigation: true,
        dots: true,
        interval: 3000,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });



    $('.serviceCarousel .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        interval: 3000,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });



    $('#owlCarouseltrust .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        interval: 3000,
        autoplay: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    <?php if(session()->has('message')): ?>
        toastr.success("<?php echo e(session()->get('message')); ?>");
    <?php elseif(session()->has('message_err')): ?>
        toastr.error("<?php echo e(session()->get('message_err')); ?>");
    <?php endif; ?>
</script>

<script>
    $('.delete-confirm').on('click', function(e) {
        event.preventDefault();
        const url = $(this).attr('action');
        var token = $('meta[name="csrf-token"]').attr('content');
        swal({
            title: 'Are you sure?',
            text: 'Your order will be cancelled !',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
            dangerMode: true,
            closeOnClickOutside: false,
        }).then(function(value) {
            if (value == true) {
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        _token: token,
                        '_method': 'DELETE',
                    },
                    success: function(data) {
                        swal({
                            title: "Success!",
                            type: "success",
                            text: data.message + "\n Click OK",
                            icon: "success",
                            showConfirmButton: false,
                        }).then(location.reload(true));

                    },
                    error: function(data) {
                        swal({
                            title: 'Opps...',
                            text: data.message + "\n Please refresh your page",
                            type: 'error',
                            timer: '1500'
                        });
                    }
                });
            } else {
                swal({
                    title: 'Cancel',
                    text: "Order cancel aborted.",
                    icon: "success",
                    type: 'info',
                    timer: '1500'
                });
            }
        });
    });
</script>

<script>
    // new navbar script
    "use strict";

    // Login Modal
    const login_dropdown = $(".login_dropdown_click");
    const login_modal = $(".login_modal");

    login_dropdown.on("click", function(event) {
        event.stopPropagation();

        login_modal.toggleClass("hide");
    });

    $(document).on("click", function() {
        if (!login_modal.hasClass("hide")) {
            login_modal.addClass("hide");
        }
    });

    login_modal.on("click", function(event) {
        event.stopPropagation();
    });
    // Login Modal End

    // Hamburger Menu Sub Items-----------------------------------
    $(".ham_bar").on("click", function() {
        $(".ham_bar").toggleClass("hide");
        $(".ham_cross").toggleClass("hide");

        $(".ham_menu").toggleClass("hide");
    });
    $(".ham_cross").on("click", function() {
        $(".ham_bar").toggleClass("hide");
        $(".ham_cross").toggleClass("hide");
        $(".ham_menu").toggleClass("hide");
    });

    // Ham Menu Sub Items
    $("#spare_bike").on("click", function() {
        $("div[for|='spare_bike']").removeClass("hide");
    });

    // Ham Menu Sub Items End

    // ham sub sub items
    $("#bajaj").on("click", function() {
        $("div[for|='bajaj']").toggleClass("hide");
    });
    // ham sub sub items End

    // Back Button of nav sub items
    $(".back").on("click", function() {
        $("div[for|='spare_bike']").toggleClass("hide");
    });
    // Back Button of nav sub items End

    // Back  button of nav sub sub items
    $(".sub_back").on("click", function() {
        $("div[for|='bajaj']").toggleClass("hide");
    });
    // Back  button of nav sub sub items End

    // Hamburger Menu End------------------------

    // new navbar script end
</script>

<?php echo $__env->yieldContent('scripts'); ?>

</html>
<?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/layout/front.blade.php ENDPATH**/ ?>