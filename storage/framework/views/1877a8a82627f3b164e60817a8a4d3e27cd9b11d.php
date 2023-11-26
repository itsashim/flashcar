<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Home')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .sec_padding {
            padding: 0 5%;
        }

        /* Direct Changes in Owl Carousel */
        .our_service {
            width: 200px;
        }

        .our_service img {
            width: 65% !important;
        }

        .brand_sec .owl-nav {
            /* display: none; */
        }

        .brand_sec .owl-item {
            display: flex;
            align-items: center !important;
            justify-content: center;
        }

        .brand_sec .owl-img {
            width: 75% !important;
        }

        .brand_sec .owl-stage {
            display: flex;
            justify-content: center !important;
        }


        /* Direct Changes in Owl Carousel End */

        .owl-nav {
            display: flex;
            align-items: center;
            margin: 0;
        }

        .ViewAllBtn {
            padding: 7px 10px;
            border: 2px solid #c7c7c7;
            color: #000;
            border-radius: 5px
        }

        .ViewAllBtn:hover {
            background: #076483;
            color: #fff;
        }

        .viewAllDesktop {
            display: block;
        }

        .viewAllMobile {
            display: none;
        }

        .pricing-part-box__p {
            /*white-space: nowrap; */
            /*overflow: hidden;*/
            /*text-overflow: ellipsis; */

            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: justify;
        }

        .mobile-view,
        .mobile-view2 {
            display: flex;
            align-items: center;
        }


        /* modal */
        .department_select span {
            min-width: 16% !important;
        }

        /* modal end */

        /* become a seller */
        @media  screen and (max-width:425px) {
            .mobile-view {
                flex-direction: column-reverse;
                text-align: center;
            }

            .mobile-view2 {
                flex-direction: column;
                text-align: center;
            }

            .seller-img {
                height: 200px;
                width: 300px;
            }

        }

        /* become a seller end */

        /* Tablet */
        @media  screen and (min-width: 575px) and (max-width: 991px) {}

        /* mobile */
        @media  screen and (max-width: 575px) {


            /**/
            .viewAllDesktop {
                display: none;
            }

            .viewAllMobile {
                display: block;
                text-align: center;
            }

            /* mobile app */
            .mobile-app {
                text-align: center;
            }

            /* mobile app end */

        }

        /* laptop */
        @media  screen and (min-width: 992px) {}

        @media  screen and (max-width:767px) {
            .col-reverse {
                flex-direction: column-reverse;
            }
        }

        /* app download */
        @media  screen and (min-width: 768px) and (max-width: 991px) {
            .scanqr {
                width: 100% !important;
            }
        }

        @media  screen and (max-width:767px) {
            .img-fluid {
                height: 150px;
            }

            .app-qr__bottom {
                width: 150px;
            }

            .download-text {
                font-size: 1.5rem;
            }
        }

        /* app download end */
    </style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Caurosel Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 carousel-image" src="<?php echo e(asset('public/front/banner.jpg')); ?>" alt="First slide">
                
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carousel-image" src="<?php echo e(asset('public/front/banner.jpg')); ?>" alt="Second slide">
                
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carousel-image" src="<?php echo e(asset('public/front/banner.jpg')); ?>" alt="Third slide">
                
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Caurosel Section  End-->


    <!-- Home Page Filter Section -->

    <!--<div class="container">-->
    <!--    <div class="box pd-md-20 pd-lg-20">-->
    <!--        <div class="row" style="align-items: center;">-->
    <!--            <div class="col-lg-3 col-md-6 mt-2">-->
    <!--                <div class="inner-box" style="padding: 10px 20px 15px 20px;background: #076483;">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <div class="icon">-->
    <!--                                <i class="fa-solid fa-location-dot text-white" style="font-size: 35px;margin-top: 10px;"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <div class="title text-white ft-12">Find From City</div>-->
    <!--                            <div class="detail">-->
    <!--                                <select style="width: 100%; border: 0px; padding: 5px;" name="city_id" class="city_id select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">-->
    <!--                                    <option value="null" selected="" data-select2-id="3">All City</option>-->
    <!--                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -->
    <!--                                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>-->
    <!--
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
    <!--                                </select>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>                  -->
    <!--            <div class="col-lg-3 col-md-6 mt-2">-->
    <!--                <div class="inner-box" style="padding: 10px 20px 15px 20px;background: #076483;">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <div class="icon">-->
    <!--                                <i class="fa-solid fa-plus-square text-white" style="font-size: 35px;margin-top: 10px;"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <div class="title text-white ft-12">Hospital/Clinic</div>-->
    <!--                            <div class="detail">-->
    <!--                                <select id="hospitalID" style="width: 100%; border: 0px; padding: 5px;" name="hospital_id" class="hospital_id select3">-->
    <!--                                    <option selected>Select Hospital</option>-->
    <!--                                    <?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -->
    <!--                                        <option value="<?php echo e(asset('hospital/' . $hospital->slug)); ?>"><?php echo e($hospital->name); ?></option>-->
    <!--
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
    <!--                                </select>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>                  -->
    <!--            <div class="col-lg-3 col-md-6 mt-2">-->
    <!--                <div class="inner-box" style="padding: 10px 20px 15px 20px;background: #076483;">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <div class="icon">-->
    <!--                                <i class="fa-solid fa-user-md text-white" style="font-size: 35px;margin-top: 10px;"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <div class="title text-white ft-12">Select Department</div>-->
    <!--                            <div class="detail">-->
    <!--                                <select style="width: 100%; border: 0px; padding: 5px;" name="department_id" class="department_id select2">-->
    <!--                                    <option value="#">Select Department</option>-->
    <!--                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -->
    <!--                                        <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>-->
    <!--
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
    <!--                                </select>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6 mt-2">-->
    <!--                <div class="inner-box" style="padding: 10px 20px 10px 20px;background: #076483;">-->
    <!--                    <div class="row" style="justify-content: center;">-->
    <!--                        <a style="text-decoration: none;cursor: pointer;" href="<?php echo e(url('/emergency')); ?>">-->
    <!--                            <span class="title text-white" style="font-size: 18px;text-decoration:none;">Instant Consultation</span><br/>-->
    <!--                            <span class="btn form-control" style="background-color: #076483; color:#fff;border: 2px solid #fff">Emergency Service</span>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>                  -->
    <!--        </div>-->
    <!--    </div>-->

    <!--</div>-->
    <!-- Home Page Filter Section End -->
    <!-- Category Section -->
    
    <!-- Category Section End -->

    <!--Brand Section -->
    <div class="section-doctor brand_sec mt-5 " data-aos="fade-up">
        <div class="row container mx-auto mb-3">
            <div class="col-lg-8 col-md-8 " 
                style="    border-left: 7px solid #076483;">
                <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Search by Brands</h2>
                <p class="m-0">Services available in following Brands</p>
            </div>

            <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 viewAllDesktop">
                <a href="<?php echo e(asset('brandlist')); ?>" class="ViewAllBtn">View All Brands &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <!--  -->
        <div class="container">
            <div class="carousel-wrap">
                <div class="owl-carousel owl-theme" id="brandCarousel">
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <a class="our_service mx-auto d-block"
                                href="<?php echo e(route('bikebrandlist', ['id' => $brand->id])); ?>">

                                
                                <img class="owl-img mx-auto" src="<?php echo e(asset('public/' . $brand->logo_path)); ?>">

                            </a>
                            
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-lg-right pt-3 pb-sm-20 aos-init aos-animate viewAllMobile"
                data-aos="zoom-in">
                <a href="<?php echo e(url('doctors')); ?>" class="ViewAllBtn">View All Doctors &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </div>
    <!--Brand Section End -->

    

    <!-- Product Section -->
    <!-- Products Section -->
    <section class="product_sec" data-aos="fade-up">
        <div class="product_wrapper container">
            <div class="row mx-auto mb-3">
                <div class="col-lg-8 col-md-8" 
                    style="    border-left: 7px solid #076483;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Products</h2>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 viewAllDesktop">
                    <a href="<?php echo e(asset('product-list')); ?>" class="ViewAllBtn">View All Products &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            

            <div class="products row justify-content-center justify-content-sm-start" id="productContent">

                <?php if(Auth::user()): ?>

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                  <?php if($data->product): ?>
                    <?php $__currentLoopData = $data->product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="col-lg-3 col-md-4 col-sm-6 col-10 p-2">
                     <div class="product">
                         <!--<div class="product_sale">-->
                         <!--  <p class="m-0">Save Rs.100</p>-->
                         <!--</div>-->
                         <div class="product_img mx-auto">

                             <img src="<?php echo e(asset('public/' . $value->photo)); ?>" alt="<?php echo e($value->name); ?>" />
                         </div>
                         <div class="product_price d-flex align-items-end  flex-wrap">

                             <?php if($value->offer_price): ?>
                                 <span style="text-decoration:line-through;color:red;display: block">Rs
                                     <?php echo e($value->price); ?></span>
                                 <span class="discount_price me-2">Rs. <?php echo e($value->offer_price); ?></span>
                             <?php else: ?>
                                 <span class="discount_price mt-2">Rs. <?php echo e($value->price); ?></span>
                             <?php endif; ?>

                        
                         </div>
                         <h5 class="mt-2 product_title">
                             <a href="<?php echo e(asset('product_details/' . $value->slug)); ?>">
                                 <?php echo e($value->name); ?>

                             </a>
                         </h5>
                         
                         

                         

                              <?php if($value->cartDetails->where('user_id',Auth::user()->id)->count() == 1): ?>
                         
                                <p>Already in list</p>

                              

                         <?php else: ?>  


                         <button type="submit" data-id="<?php echo e($value->id); ?>"
                             class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
                             data-id="<?php echo e($value->id); ?>">
                             Add to Cart
                         </button>
                         
                         <?php endif; ?>

                        
                     </div>
                 </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <?php endif; ?>
              
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php else: ?>


                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-10 p-2">
                        <div class="product">
                            <!--<div class="product_sale">-->
                            <!--  <p class="m-0">Save Rs.100</p>-->
                            <!--</div>-->
                            <div class="product_img mx-auto">

                                <img src="<?php echo e(asset('public/' . $product->photo)); ?>" alt="<?php echo e($product->name); ?>" />
                            </div>
                            <div class="product_price d-flex align-items-end  flex-wrap">

                                <?php if($product->offer_price): ?>
                                    <span style="text-decoration:line-through;color:red;display: block">Rs
                                        <?php echo e($product->price); ?></span>
                                    <span class="discount_price me-2">Rs. <?php echo e($product->offer_price); ?></span>
                                <?php else: ?>
                                    <span class="discount_price mt-2">Rs. <?php echo e($product->price); ?></span>
                                <?php endif; ?>

                                <!--<span class="discount_price me-2">Rs. <?php echo e($product->offer_price); ?></span>-->
                                <!--<span class="original_price">Rs. <?php echo e($product->price); ?></span>-->
                            </div>
                            <h5 class="mt-2 product_title">
                                <a href="<?php echo e(asset('product_details/' . $product->slug)); ?>">
                                    <?php echo e($product->name); ?>

                                </a>
                            </h5>
                            <!--<p class="mb-0 product_subtitle">BAJAJ OE</p>-->

                            <?php if(Auth::user()): ?>
                            
                              <?php if($product->cartDetails->where('user_id',Auth::user()->id)->count() == 1): ?>
                                 <p>Already in list</p>

                              <?php else: ?>   

                              <button type="submit" data-id="<?php echo e($product->id); ?>"
                                  class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
                                  data-id="<?php echo e($product->id); ?>">
                                  Add to Cart
                              </button>
                             
                              <?php endif; ?>

                            <?php else: ?>

                            <button type="submit" data-id="<?php echo e($product->id); ?>"
                                class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
                                data-id="<?php echo e($product->id); ?>">
                                Add to Cart
                            </button>

                            <?php endif; ?> 
                         
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>




            </div>
        </div>
    </section>
    <!-- Products Section End-->
    <!-- Product Section End -->



    

    <!--Services Section -->
    <div class="section-doctor sec_padding" data-aos="fade-up">
        <div class="container" style="padding-top: 60px;">
            <div class="row mb-3">
                <div class="col-lg-8 col-md-8" 
                    style="    border-left: 7px solid #076483;">
                    <h2 style="color: #0f4a86 !important; font-size:32px; font-weight:bold;">Our Services</h2>
                    <p class="m-0">Services provided from skillfull mainpower.</p>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pt-3 pb-sm-20 aos-init aos-animate viewAllDesktop"
                    data-aos="zoom-in">
                    
                    <a href="<?php echo e(route('user.services')); ?>" class="ViewAllBtn">View All Services &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        



        <div class="container">
            <div class="carousel-wrap serviceCarousel">
                <div class="owl-carousel owl-theme">
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <a class="our_service mx-auto d-block"
                                href="<?php echo e(route('services.find', ['id' => $doctor->id])); ?>">
                                <?php if($doctor->image): ?>
                                    <img class="owl-img mx-auto"
                                        src="<?php echo e(asset('public/upload/doctor/' . $doctor->image)); ?>">
                                <?php else: ?>
                                    <img class="owl-img mx-auto" src="<?php echo e(asset('public/images/doctor.png')); ?>">
                                <?php endif; ?>
                            </a>
                            <span class="img-text text-center">
                                <h4
                                    style="margin: 1rem 0; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    <?php echo e($doctor->name); ?></h4>
                                
                                <h6> <?php echo e($doctor->department->name); ?> </h6>
                                <a href="<?php echo e(route('services.find', ['id' => $doctor->id])); ?>" class="btn form-control"
                                    style="color:#000; background-color: #076483; color:#fff;">Book Now</a>
                            </span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-lg-right pt-3 pb-sm-20  viewAllMobile">
                <a href="<?php echo e(url('doctors')); ?>" class="ViewAllBtn">View All Doctors &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                </a>
            </div>
        </div>



    </div>
    <!--Services Section End -->

    <!-- Book Appointment Section -->
    
    <!-- Book Appointment Section End -->


    <!-- Health Packages -->
    <div class="pricing-main-box flex py-5 mt-4 sec_padding" data-aos="fade-up">

        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-8"
                    style="border-left: 7px solid #076483;">
                    <h2 style="color: #0f4a86 !important; font-size:32px; font-weight:bold;">Subscription Package</h2>
                    <p class="m-0">Get packages as per your requirement</p>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pt-2  viewAllDesktop">
                    <a href="https://wheelonpalm.com/pricing" class="ViewAllBtn">View All Package &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="pricing-part-main-box">
                <div class="row">
                    <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="pricing-all-content aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                                <div class="pricing-part-box" >
                                    <h3><?php echo e($p->name); ?></h3>
                                    <span class="badge badge-info"></span>
                                    <div class="pricing-cost ">
                                        <h3><?php echo e(Session::get('currency')); ?></h3>
                                        <span>Rs.<?php echo e($p->price); ?></span>
                                        <h6>/day</h6>
                                    </div>
                                    <p class="pricing-part-box__p"><?php echo e($p->description); ?></p>
                                </div>
                                <div class="pricing-part-btn">
                                    <a class="btn" href="<?php echo e(url('subscription') . '/' . $p->id); ?>">Order now</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-lg-right pt-2  viewAllMobile mt-2" >
                <a href="https://wheelonpalm.com/pricing" class="viewAllBtn">View All Package &nbsp;
                    <i class="fa fa-angle-right " aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>
    <!-- Health Packages End -->


    <!-- how it works section  -->
    
    <!-- how it works section end -->
    



    




    <!-- Download App QR Section -->
    
    <!-- Download App QR Section End -->

    <!-- download in mobile -->
    <section class="download_app_sec" data-aos="fade-up">
        <div class="download_app">
            <div class="dom_img_div">

                <img style="width: 100%;border-radius:8px" class="dom_img"
                    src="<?php echo e(asset('public/upload/Qrscanner.jpg')); ?>" alt="" />
            </div>

            <div class="dom_info">
                <h2><span class="dom_bold">Download</span>&nbsp;APP NOW</h2>
                <p>Select your device platform and get download start</p>
                <div>
                    <button class="apple_user app_btn">
                        <i class="fa-brands fa-apple"></i>&nbsp;Apple User
                    </button>
                    <button class="android_user app_btn">
                        <i class="fa-brands fa-android"></i>
                        &nbsp; Android User
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- download in mobile End-->




    <!-- Number Count Section -->
    <div class="numbers-counter-main-box" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6 aos-init aos-animate p-2" data-aos="zoom-in">
                    <div class="numbers-counter-part-box aos-init aos-animate" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in" class="aos-init aos-animate">
                            <img src="<?php echo e(asset('public/front/img/n1.png')); ?>">
                            <div class="counter-value aos-init aos-animate" data-count="<?php echo e($setting->happy_client); ?>"
                                data-aos="zoom-in"><?php echo e($setting->happy_client); ?></div>
                            <div class="counter-name aos-init aos-animate" data-aos="zoom-in">
                                <p>Happy people</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 p-2">
                    <div class="numbers-counter-part-box aos-init aos-animate" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in" class="aos-init aos-animate">
                            <img src="<?php echo e(asset('public/front/img/n2.png')); ?>">
                            <div class="counter-value aos-init aos-animate" data-count="<?php echo e($setting->surgery_complete); ?>"
                                data-aos="zoom-in"><?php echo e($setting->surgery_complete); ?></div>
                            <div class="counter-name aos-init aos-animate" data-aos="zoom-in">
                                <p>SURGERY COMPLETED</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 p-2">
                    <div class="numbers-counter-part-box aos-init aos-animate" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in" class="aos-init aos-animate">
                            <img src="<?php echo e(asset('public/front/img/n3.png')); ?>">
                            <div class="counter-value aos-init aos-animate" data-count="<?php echo e($setting->expert_doctor); ?>"
                                data-aos="zoom-in"><?php echo e($setting->expert_doctor); ?></div>
                            <div class="counter-name aos-init aos-animate" data-aos="zoom-in">
                                <p><?php echo e($setting->expert_doctor); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 p-2">
                    <div class="numbers-counter-part-box aos-init aos-animate" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in" class="aos-init aos-animate">
                            <img src="<?php echo e(asset('public/front/img/n4.png')); ?>">
                            <div class="counter-value aos-init aos-animate" data-count="<?php echo e($setting->worldwide_branch); ?>"
                                data-aos="zoom-in"><?php echo e($setting->worldwide_branch); ?></div>
                            <div class="counter-name aos-init aos-animate" data-aos="zoom-in">
                                <p><?php echo e(__('messages.World wide branch')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Number Count Section End -->

    

    <!-- Trusted Section -->
    <section style="background: #f7f7f7;padding: 0 0 4rem 0" data-aos="fade-up" data-aos-duration="3000">


        <div class="container" style="padding-top: 80px;">
            <div class="global-heading " >
                <h2>Trusted By Company</h2>
                <p>Diagnostic Services Professional Consultation Tooth Implants<br> Surgical Extractions Teeth Whitening</p>
            </div>
        </div>
        <div class="container" style="padding-bottom: 50px;">
            <div class="carousel-wrap" id="owlCarouseltrust">
                <div class="owl-carousel  owl-theme">

                    <div class="item">
                        <img src="<?php echo e(asset('public/front/white-logo1.png')); ?>" />
                        <span class="img-text text-center">
                        </span>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('public/front/haji.png')); ?>" />
                        <span class="img-text text-center">
                        </span>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('public/front/trackit.png')); ?>" />
                        <span class="img-text text-center">
                        </span>
                    </div>

                    <!--<div class="item">-->
                    <!--<img src="<?php echo e(asset('public/front/lll.png')); ?>" />-->
                    <!--<span class="img-text text-center">-->
                    <!--</span>-->
                    <!--</div>-->
                    <!--<div class="item">-->
                    <!--<img src="<?php echo e(asset('public/front/lll.png')); ?>" />-->
                    <!--<span class="img-text text-center">-->
                    <!--</span>-->
                    <!--</div>-->

                </div>
            </div>
        </div>

    </section>
    <!-- Trusted Section End -->

    <!-- Registration Hospital and Doctor Section -->
    
    <!-- Registration Hospital and Doctor Section End -->

    
    <div class="modal fade" id="modalHealthPartner" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger" data-aos="zoom-in">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form id="appliedHealthForm" action="<?php echo e(asset('applied-health-partner')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-header" data-aos="zoom-in" style="background-color:#076483;">
                        <h5 class="modal-title">Become a Service Provider</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row hide" id="alertSectionAHP">
                        <div class="col-sm-12">
                            <div class="alert" id="alertMsgAHP"></div>
                        </div>
                    </div>
                    <div class="modal-body" id="bodySectionAHP" data-aos="zoom-in" style="background-color:#f1f1f9">
                        <?php echo csrf_field(); ?>

                        <div class="row">

                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="healthpartnername" class="form-label fw-semi">Service Provider Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" id="healthpartnername"
                                    name="health_partner_name" placeholder="Enter your Health Partner Name">
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="firstname" class="form-label fw-semi">First Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Enter First Name">
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="lastname" class="form-label fw-semi">Last Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Enter Last Name">
                            </div>
                            <!--column-->


                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="mobileno" class="form-label fw-semi">Phone Number <span
                                        class="text-primary">*</span> </label>
                                <input type="number" class="form-control" id="mobileno" name="phone"
                                    onkeypress="validatePhoneNumber(6)" maxlength="10" pattern="[1-9]{1}[0-9]{9}"
                                    placeholder="Enter your Phone Number">
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="email" class="form-label fw-semi">Email <span
                                        class="text-primary">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your Email Address">
                            </div>

                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="password" class="form-label fw-semi">Password <span
                                        class="text-primary">*</span></label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your Password">
                            </div>
                            <!--column-->

                            <div class="col-md-6 mb-3" data-aos="zoom-in" style="display: flex; align-items: center;">
                                <label for="partnerdistrictid" class="form-label fw-semi">City<span
                                        class="text-primary">*</span></label>
                                <select name="city_id" class="form-control select2" required>
                                    <option selected disabled>Select City</option>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="address" class="form-label fw-semi">Address<span class="text-primary">
                                        *</span></label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter your  Address">
                            </div>
                            <!--column-->
                            
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="type" class="form-label fw-semi">Upload Document<span
                                        class="text-primary"> *</span></label>
                                <input type="file" id="file" name="document" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <label for="type" class="form-label fw-semi">Upload Logo

                                    <input type="file" id="file" name="logo" class="form-control">
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3" data-aos="zoom-in">
                                <img src="" id="previmage" name="previmage" style="display:none">
                            </div>
                            <!--column-->

                            <div class="col-md-12 mb-3 department_select" data-aos="zoom-in"
                                style="display: flex; align-items: center;">
                                <label for="department" class="form-label fw-semi">Department<span
                                        class="text-primary">*</span></label>
                                <select name="department_ids[]" class="form-control select2" multiple required>
                                    <!--<option selected disabled>Select Department</option>-->
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn becomepartnerBtn mt-3 ms-2 me-3" id="formsubmitBtn"
                            style="background-color:#076483; color: white;">
                            Become a Service Provider
                        </button>
                        <button type="button" class="btn btn-danger mt-3 float-right" data-bs-dismiss="modal"="modal">
                            Close
                        </button>
                    </div>
                    <div class="modal-footer" data-aos="zoom-in" style="background-color:#076483; height: 50px;">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDoctor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form id="appliedDoctorForm" action="<?php echo e(asset('applied-doctor')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-header" style="background-color:#076483;">
                        <h5 class="modal-title">Become a Doctor</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row hide" id="alertSectionDF">
                        <div class="col-sm-12">
                            <div class="alert" id="alertMsgDF"></div>
                        </div>
                    </div>

                    <div class="modal-body" id="bodySectionDF" style="background-color:#f1f1f9">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstname" class="form-label fw-semi">Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Name" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mobileno" class="form-label fw-semi">Phone Number <span
                                        class="text-primary">*</span> </label>
                                <input type="number" class="form-control" id="mobileno" name="phone_no"
                                    onkeypress="validatePhoneNumber(6)" maxlength="10" pattern="[1-9]{1}[0-9]{9}"
                                    placeholder="Enter your Phone Number" required>
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-semi">Email <span
                                        class="text-primary">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter Email Address">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label fw-semi">Password <span
                                        class="text-primary">*</span></label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter password">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partnerdistrictid" class="form-label fw-semi">Nmc Number<span
                                        class="text-primary">*</span></label>
                                <input type="text" class="form-control" name="nmc"
                                    placeholder="Enter Your NmcNO">
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3">
                                <label for="partnervdcid" class="form-label fw-semi">Experienced Year<span
                                        class="text-primary"> *</span></label>
                                <input type="text" class="form-control" name="experience"
                                    placeholder="Enter Your Experienced Year">

                                </select>
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3">
                                <label for="department_id" class="form-label fw-semi">Specialist<span
                                        class="text-primary"> *</span></label>
                                <select name="department_id" class="form-control" required>
                                    <option selected disabled>Select Specialist</option>
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <!--column-->

                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label fw-semi">Qualification<span class="text-primary">
                                        *</span></label>
                                <input type="text" class="form-control" id="address" name="qualification"
                                    placeholder="Select Qualification">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="city_id" class=" form-control-label">Select City<span
                                        class="reqfield">*</span>
                                </label>
                                <select name="city_id" class="form-control">
                                    <option value="">Select City</option>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <!--column-->
                            <div class="col-md-6 mb-3">
                                <label for="type" class="form-label fw-semi">Currently Working at<span
                                        class="text-primary"> *</span></label>
                                <select class="form-control" id="work_type" name="work_type">
                                    <option value="lab">Lab</option>
                                    <option value="clinic">PolyClinic</option>
                                    <option value="pharmacy">Pharmacy</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn mt-3 ms-2 me-3" id="formsubmitBtn"
                            style="background-color:#076483; color: white;">
                            Become a Doctor
                        </button>
                        <button type="button" class="btn btn-danger float-right mt-3" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                    <div class="modal-footer" style="background-color:#076483; height: 50px;">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="sellerRegisterModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#076483;">
                    <h5 class="modal-title" id="exampleModalLongTitle">Become a Seller</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(asset('applied-seller')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Cities</label>
                                    <select name="city_ids[]" class="select2 form-control" style="width:100%" multiple
                                        required>
                                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input type="file" name="image_path" id="preview_img" style="font-size: 13px;"
                                        required />
                                    <div id="viewLogo">
                                        <img src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.pJlS~36fbd/w:auto/h:auto/q:90/f:avif/https://s15165.pcdn.co/wp-content/uploads/2021/07/audience.png"
                                            width="220" height="350" style="margin-top:20px">
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-3 mt-1"
                                style="background-color:orange;">Register Now</button>
                        </div>
                    </div>
                </form>
                <div class="modal-footer" style="background-color:#076483;">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="PrescriptionModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#076483;">
                    <h5 class="modal-title" id="exampleModalLongTitle">Upload Prescription</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(asset('upload-prescription')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body" style="background-color:#f1f1f9">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-sm-12">

                                
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <input type="text" name="message" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Delivery Address</label>
                                    <input type="text" name="delivery_address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Prescription Image</label>
                                    <input type="file" name="path" id="preview_img2" required />
                                    <div id="viewLogo2"></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-3 m-2"
                                style="background-color:orange">Upload Now</button>
                        </div>
                    </div>
                </form>
                <div class="modal-footer" style="background-color:#076483;">
                    
                </div>
            </div>
        </div>
    </div>
    

    <div class="d-none">
        <img src="<?php echo e(asset('public/upload/mero gaadi logo black.png')); ?>" />
        <span class="img-text text-center">
        </span>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


    <script>
        $('.select2').select2();

        $('.select3').select2();

        $(document).on('change', '.city_id', function() {
            let id = $(this).val();
            let url = "<?php echo e(asset('gethospitals')); ?>";
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
                        $('#hospitalID').empty();
                        $('#hospitalID').append('<option selected disabled>Select Hospital</option>');
                        $.each(data.data, function(k, v) {
                            let tempurl = "<?php echo e(asset('hospital')); ?>/" + v.slug;
                            $('#hospitalID').append('<option value="' + tempurl + '">' + v
                                .name + '</option>');
                        });
                    } else {
                        console.log('error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });

        });

        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#viewLogo').html('<img src="' + e.target.result + '" width="200" height="200"/>');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function filePreview2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#viewLogo2').html('<img src="' + e.target.result + '" width="200" height="200"/>');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#preview_img').on('change', function() {
            filePreview(this);
        });

        $('#preview_img2').on('change', function() {
            filePreview2(this);
        });

        $(document).on('change', '.hospital_id', function() {
            let url = $(this).val();
            window.location.href = url;
        });

        $(document).on('change', '.department_id', function() {
            let id = $(this).val();
            window.location.href = "<?php echo e(asset('find-doctor?department_id=')); ?>" + id;
        });

        $(document).on('click', '.become_seller', function() {
            $('#sellerRegisterModal').modal('show');
        });
        $(document).on('click', '.priscription_upload', function() {
            $('#modalHealthPartner').modal('show');
        });

        $(document).on('click', '.add_to_cart', function() {

            <?php if(auth()->user()): ?>

                let id = $(this).data('id');
                let url = "<?php echo e(asset('/add-to-cart')); ?>";
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
                            $('#productContent').html(data.productView);
                        } else {
                            console.log(data.message);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            <?php else: ?>
                <?php
                    session()->flash('product_id', $product->id);
                ?>
                window.location.href = "<?php echo e(url('login')); ?>";
            <?php endif; ?>
        });

        $(document).on('click', '.appoint_now', function() {
            let id = $(this).data('id');
            let url = "<?php echo e(asset('/doctor-detail-page')); ?>";
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
                        $('#doctorModal').modal('show');
                        $('#appointmentContent').html(data.data);
                    } else {
                        console.log('error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });

        $(document).on('click', '#bookNow', function() {
            let url = "<?php echo e(asset('/bookappoinment')); ?>";
            let name = $('#book_name').val();
            let phone_no = $('#book_contact_number').val();
            let department_id = $('#book_department_id').val();
            let doc_id = $('#book_doc_id').val();
            let service_id = null;
            let user_id = $('#bookAuthId').val();
            let messages = $('#book_message').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "name": name,
                    "phone_no": phone_no,
                    "department_id": department_id,
                    "doc_id": doc_id,
                    "service_id": service_id,
                    "user_id": user_id,
                    "messages": messages,
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        alert(data.message);
                        $('#doctorModal').modal('hide');
                    } else {
                        console.log('error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });

        $(document).on('click', '.become_health_partner', function() {
            $('#alertSectionAHP').addClass('hide');
            $('#modalHealthPartner').modal('show');
            $('#bodySectionAHP').removeClass('hide');
        });
        $(document).on('click', '.become_doctor', function() {
            $('#alertSectionDF').addClass('hide');
            $('#modalDoctor').modal('show');
            $('#bodySectionDF').removeClass('hide');
        });

        $('#appliedHealthForm').on('submit', function(e) {
            e.preventDefault();
            let url = $(this).attr('action');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {

                    $('#alertSectionAHP').removeClass('hide');
                    $('#bodySectionAHP').addClass('hide');
                    $('#alertMsgAHP').html(data.message);
                    $('#alertMsgAHP').addClass('alert-success');
                    if (data.status == true) {
                        $('#appliedHealthForm')[0].reset();
                    }
                },
                error: function(xhr) {
                    let errorMessage = "<div class='alert alert-danger'><ul>";
                    $.each(xhr.responseJSON.errors, function(k, v) {
                        errorMessage = "<li>" + errorMessage + v + '</li>';
                    });
                    errorMessage = errorMessage + "</ul></div>";
                    $('#alertSectionAHP').removeClass('hide');
                    $('#alertMsgAHP').html(errorMessage);
                }
            });
        });

        $('#appliedDoctorForm').on('submit', function(e) {
            e.preventDefault();
            let url = $(this).attr('action');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    $('#alertSectionDF').removeClass('hide');
                    $('#bodySectionDF').addClass('hide');
                    $('#alertMsgDF').html(data.message);
                    $('#alertMsgDF').addClass('alert-success');
                    if (data.status == true) {
                        $('#appliedDoctorForm')[0].reset();
                    }
                },
                error: function(xhr) {
                    let errorMessage = "<div class='alert alert-danger'><ul>";
                    $.each(xhr.responseJSON.errors, function(k, v) {
                        errorMessage = "<li>" + errorMessage + v + '</li>';
                    });
                    errorMessage = errorMessage + "</ul></div>";
                    $('#alertSectionDF').removeClass('hide');
                    $('#alertMsgDF').html(errorMessage);
                }
            });
        });
    </script>

    <script>
        $("#owl-demo2").owlCarousel({
            loop: false,
            autoplay: 6000,
            autoPlaySpeed: 1000,
            slideSpeed: 100,
            paginationSpeed: 400,
            items: 4,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: 1
                },

                700: {
                    items: 2
                },

                800: {
                    items: 3
                },
                1100: {
                    items: 4
                }
            }


        });

        var owl = $(".owl-carousel_prev_next");

        $(".next-btn").click(function() {
            owl.trigger("next.owl.carousel");
        });
        $(".prev-btn").click(function() {
            owl.trigger("prev.owl.carousel");
        });
        $(".prev-btn").addClass("disabled");
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/pages/home.blade.php ENDPATH**/ ?>