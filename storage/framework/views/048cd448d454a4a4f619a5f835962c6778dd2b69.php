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
    <link rel="stylesheet" href="<?php echo e(asset('public/select2/css/select2.min.css')); ?>">
    <style>
        .main-logo {
            width: 160px;
            height: 40px;
        }

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
            color: #00be9c !important;
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
            background-color: #00be9c !important;
            color: white !important;
        }

        .pricing-part-btn a {
            background-color: #00be9c;
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
            font-size: 50px;
            margin-top: 15px;
        }

        .numbers-counter-main-box {
            padding: 30px;
            background-color: #22242a;
            margin: 80px 0px;
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
        .footer-main-box {
            padding: 50px;
            background-color: black;
            color: white;
        }

        .footer-part-main-box {
            border-bottom: 1px solid white;
        }

        .footer-part-main-box .footer-r1-box {
            margin-left: 15px;
        }

        .footer-logo-box img {
            width: 150px;
            margin-bottom: 30px;
        }

        .footer-d1-box {
            margin-bottom: 30px;
        }

        .footer-icons-main-box {
            margin-top: 15px;
            display: inline-block;
        }

        .footer-icons-main-box .footer-icon-box {
            background-color: #00be9c !important;
        }

        .footer-icon-box i {
            color: white !important;
        }

        .footer-icons-main-box .footer-icon-box {
            height: 35px;
            width: 35px;
            background-color: #e7d046;
            text-align: center;
            padding: 6px 0px;
            border-radius: 1000px;
            display: inline-block;
            margin: 0px 5px;
        }

        .footer-bottom-main-box {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            justify-items: stretch;
            flex-wrap: wrap;
        }


        .footer-r1-detail h3 {
            color: #00be9c !important;
        }

        .footer-r1-detail h3 {
            font-size: 17px;
            font-family: 'AvenirLTStd-Medium';
            color: #00be9c;
        }

        .footer-r1-detail a {
            margin-bottom: 5px;
            font-size: 14px;
            font-family: 'AvenirLTStd-Medium';
            cursor: pointer;
            display: inline-block;
            color: white;
            width: 90%;
        }

        .footer-bottom-main-box p {
            display: inline-block;
            padding: 20px 0px 0px;
            margin-bottom: 0px;
            font-size: 12px;
            font-family: 'AvenirLTStd-Book';
        }

        .directing-page:hover {
            color: #fff;
            text-decoration: underline;
        }

        /* Footer Section End */

        /* Pagination Design*/
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #00be9c;
            border-color: #007bff;
        }

        /* Pagination Design*/



        /* Large Screen Device */
        @media  screen and (min-width: 992px) {

            /*.dropdown-menu {*/
            /*    position:inherit !important;*/
            /*}*/

            .bg-lightgreen {
                background-color: #00be9c;
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

            .main-nav-item-sm {
                border-bottom: 2px solid white !important;
            }

            #navbarSupportedContent>.navbar-nav>.nav-item>.nav-link {
                font-size: 12px;
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
                background: #00be9c !important;
                border-radius: 50% !important;
                position: absolute;
                left: 0%;
                margin-top: -200px !important;
            }

            .owl-nav>.owl-next {
                width: 36px;
                height: 36px;
                background: #00be9c !important;
                border-radius: 50% !important;
                position: absolute;
                right: 0%;
                margin-top: -200px !important;
            }

        }

        /* Mobile Device */
        @media  screen and (max-width: 575px) {

            .bg-lightgreen {
                background-color: #00be9c;
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
                background: #00be9c !important;
                border-radius: 50% !important;
                position: absolute;
                left: 0%;
                margin-top: -230px !important;
            }

            .owl-nav>.owl-next {
                width: 36px;
                height: 36px;
                background: #00be9c !important;
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
                background-color: #00be9c;
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
                background: #00be9c !important;
                border-radius: 50% !important;
                position: absolute;
                left: 0%;
                margin-top: -215px !important;
            }

            .owl-nav>.owl-next {
                width: 36px;
                height: 36px;
                background: #00be9c !important;
                border-radius: 50% !important;
                position: absolute;
                right: 0%;
                margin-top: -215px !important;
            }
        }
    </style>
    <?php echo $__env->yieldContent('styles'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="main-wrapper">

        <div class="top-nav bg-lightgreen height-50 p-10 text-sm-center text-md-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-lg-left text-white">
                        <a class="text-white" href="mailto:sansarhealth@gmail.com">
                            sansarhealth@gmail.com
                        </a>
                    </div>
                    <div class="col-sm-6 text-lg-right text-white">
                        <a class="text-white" href="tel:9800971310">
                            Call Us Now : 9800971310
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar-section">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php if(isset($setting->logo)): ?>
                        <img class="main-logo" src="<?php echo e(asset('public/upload/images') . '/' . $setting->logo); ?>"
                            class="logo-img">
                    <?php else: ?>
                        <img class="main-logo" src="<?php echo e(Session::get('logo')); ?>">
                    <?php endif; ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item main-nav-item-sm active">
                            <a class="nav-link main-nav-link-item" href="<?php echo e(url('doctors')); ?>">Find Doctor <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item main-nav-item-sm">
                            <a class="nav-link main-nav-link-item" href="<?php echo e(url('product-list')); ?>">Medicine <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item main-nav-item-sm">
                            <a class="nav-link main-nav-link-item" href="<?php echo e(url('medical-appliances')); ?>"> Medicine
                                Appliances <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item main-nav-item-sm">
                            <a class="nav-link main-nav-link-item" href="<?php echo e(url('pricing')); ?>">Health Package <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <?php if(auth()->user()): ?>
                            <li class="nav-item main-nav-item-sm dropdown"
                                style="padding-top: 10px;  overflow: unset; box-shadow: none;
                    border-width: 0; background-color: unset;">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(url('myaccount')); ?>">My Account</a>
                                    <a class="dropdown-item" href="<?php echo e(url('userlogout')); ?>">Logout</a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li class="nav-item main-nav-item-sm">
                                <a class="nav-link main-nav-link-item" href="<?php echo e(url('login')); ?>">Login</a>
                            </li>
                            <li class="nav-item main-nav-item-sm">
                                <a class="nav-link main-nav-link-item" href="<?php echo e(url('register')); ?>">Register</a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item main-nav-item-sm">
                            <div
                                style="display: flex;justify-content: flex-start;align-items: center;margin-top: 8px;margin-bottom: 8px;">
                                <a class="nav-link main-nav-link-item" href="<?php echo e(asset('cart')); ?>"
                                    style="background-color: aquamarine;border-radius: 50%;width: 46px;margin: 0px 5px 0px 5px;">
                                    <span>
                                        <i class="fa fa-shopping-cart icon-nav-lg icon-nav-sm"
                                            style="font-size: 16px;padding-right: 5px;color:  #15369e;"></i>
                                    </span>
                                    <?php
                                        if (auth()->user()) {
                                            $cartCount = \App\CartDetail::where('user_id', auth()->user()->id)
                                                ->where('status', 'Pending')
                                                ->sum('quantity');
                                        }
                                    ?>
                                    <span id="cartTotalCount" style="position: absolute;margin: -10px 0px 0px -1px;"
                                        class="badge badge-primary navbar-badge"><?php echo e(isset($cartCount) ? $cartCount : 0); ?></span>
                                </a>
                                <a class="nav-link main-nav-link-item" href="<?php echo e(asset('my-wishlists')); ?>"
                                    style="background-color: aquamarine;border-radius: 50%;width: 46px;margin: 0px 5px 0px 5px;">
                                    <span>
                                        <i class="fa fa-heart icon-nav-lg icon-nav-sm"
                                            style="font-size: 16px;padding-right: 5px;color:  #15369e;"></i>
                                    </span>
                                    <?php
                                        if (auth()->user()) {
                                            $wishlistCount = \App\Wishlist::where('user_id', auth()->user()->id)->count();
                                        }
                                    ?>
                                    <span id="wishlistTotalCount"
                                        style="position: absolute;margin: -10px 0px 0px -1px;"
                                        class="badge badge-primary navbar-badge"><?php echo e(isset($wishlistCount) ? $wishlistCount : 0); ?></span>
                                </a>
                            </div>
                        </li>
                        <!-- <li class="nav-item main-nav-item-sm dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li> -->
                        <li class="nav-item main-nav-item-sm">
                            <a class="nav-link" href="#" style="padding: 10px 0 0 0;">
                                <form action="<?php echo e(url('site-search')); ?>" method="GET">
                                    <div class="input-group mb-3">
                                        <input name="search" style="border-radius: 10px 0 0 10px;" type="text"
                                            class="form-control" placeholder="Enter anything to search"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit"
                                                style="background-color: #00be9c;color: white;border-radius: 0 10px 10px 0;">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

        </div>

        <?php echo $__env->yieldContent('content'); ?>

        <!-- Footer Section -->
        <div class="footer-main-box">
            <div class="container">
                <div class="footer-part-main-box">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-r1-box">
                                <div class="footer-logo-box">
                                    <img src="https://sansarhealth.com/public/upload/images/638996222fe35.png">
                                </div>
                                <div class="footer-r1-detail">

                                    <div class="footer-d1-box">
                                        <h3>Contact Us</h3>
                                        <p>
                                            <a class="btn directing-page" href="mailto:matinsoftech@gmail.com"
                                                style="display:flex; gap:10px">
                                                <span>
                                                    <img src="https://sansarhealth.com/public/front/img/mail.png">
                                                </span>

                                                matinsoftech@gmail.com
                                            </a>
                                        </p>
                                        <p>
                                            <a class="btn directing-page" href="tel:+977 9800971310"
                                                style="display:flex; gap:10px">
                                                <span>
                                                    <img src="https://sansarhealth.com/public/front/img/phone.png">
                                                </span>
                                                +977 9800971310
                                            </a>
                                        </p>
                                    </div>

                                </div>

                            </div>
                            <div class="footer-r1-box">
                                <div class="footer-r1-detail">
                                    <div class="footer-d1-box">
                                        <h3>Address</h3>
                                        <p>Matrika Marg, Biratnagar 56613, Nepal</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3">
                            <div class="footer-r1-box">
                                <div class="footer-r1-detail">
                                    <div class="footer-d1-box">
                                        <h3>Our department</h3>
                                        <a href="https://sansarhealth.com/find-doctor?department_id=1">Cardiologists
                                            Department</a>
                                        <a href="https://sansarhealth.com/find-doctor?department_id=2">Urology
                                            Department</a>
                                        <a href="https://sansarhealth.com/find-doctor?department_id=3">Neurology
                                            Department</a>
                                        <a href="https://sansarhealth.com/find-doctor?department_id=4">Dental
                                            Department</a>
                                        <a href="https://sansarhealth.com/find-doctor?department_id=18">abacadada
                                            Department</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3">
                            <div class="footer-r1-box">
                                <div class="footer-r1-detail">
                                    <div class="footer-d1-box">
                                        <h3>Helpful links</h3>


                                        <a href="https://sansarhealth.com/termcondition">Terms &amp; Condition</a>
                                        <a href="https://sansarhealth.com/privacypolicy">Privacy Policy</a>
                                        <a href="https://sansarhealth.com/contact_us">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-r1-box">
                                <div class="footer-r1-detail">
                                    <div class="footer-d1-box">
                                        <h3>Quick Links</h3>
                                        <a href="https://sansarhealth.com/admin">Seller's Dashboard</a>
                                        <a href="https://sansarhealth.com/admin">Doctor's Dashboard</a>
                                        <a href="https://sansarhealth.com/admin">Hospital's Dashboard</a>
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
                                <a href="https://www.facebook.com/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="footer-icon-box">
                                <a href="https://twitter.com/explore">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="footer-icon-box">
                                <a href="https://www.google.com/">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </div>
                            <div class="footer-icon-box">
                                <a href="https://www.instagram.com/?hl=en">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <p>2023 @ Company private ltd.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo e(asset('public/select2/js/select2.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.normalCarousel .owl-carousel').owlCarousel({
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
                items: 4
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
    $('.delete-confirm').on('click', function (e) {
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
        if(value == true){
          $.ajax({
            url: url,
            type: "POST",
            data: {
              _token: token,
              '_method': 'DELETE',
            },
            success: function (data) {
              swal({
                title: "Success!",
                type: "success",
                text: data.message+"\n Click OK",
                icon: "success",
                showConfirmButton: false,
              }).then(location.reload(true));
              
            },
            error: function (data) {
              swal({
                title: 'Opps...',
                text: data.message+"\n Please refresh your page",
                type: 'error',
                timer: '1500'
              });
            }
          });
        }else{
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
  
<?php echo $__env->yieldContent('scripts'); ?>

</html>
<?php /**PATH /home/sansarhealth/public_html/service.sansarhealth.com/resources/views/front/layout/front.blade.php ENDPATH**/ ?>