<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Home')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/select2/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

    .collection-item {
        margin-bottom: 30px;
        -webkit-box-shadow: 0px 0px 20px 0px #dddddd82;
        box-shadow: 0px 0px 20px 0px #dddddd82;
        border-radius: 10px 10px 0px 0px;
        overflow: hidden;
    }

    .collection-item:hover .collection-top ul {
        opacity: 1;
        bottom: 0;
    }

    .collection-item:hover .collection-top .add-cart {
        right: 10px;
    }

    .collection-item:hover .collection-top .add-cart a {
        opacity: 1;
    }

    .collection-item .collection-top {
        position: relative;
    }

    .collection-item .collection-top img {
        width: 100%;
        border-radius: 10px 10px 0px 0px;
    }

    .collection-item .collection-top ul {
        margin: 0;
        padding: 0;
        background-color: #ffffff;
        position: absolute;
        bottom: -10px;
        left: 0;
        right: 0;
        opacity: 0;
        padding: 4px 15px;
        border-radius: 8px 8px 0 0;
        max-width: 150px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        -webkit-box-shadow: 0px 6px 15px 0px #dddddd40;
        box-shadow: 0px 6px 15px 0px #dddddd40;
        -webkit-transition: 0.5s all ease;
        transition: 0.5s all ease;
    }

    .collection-item .collection-top ul li {
        list-style-type: none;
        display: inline-block;
    }

    .collection-item .collection-top ul li i {
        color: #ddd;
        display: block;
    }

    .collection-item .collection-top ul li .checked {
        color: #ffc107;
    }

    .collection-item .collection-top .add-cart {
        display: inline-block;
        position: absolute;
        top: 10px;
        right: -15px;
    }

    .collection-item .collection-top .add-cart a {
        display: block;
        color: #0b0320;
        background-color: #ffffff;
        border-radius: 5px;
        padding: 4px 12px 8px;
        font-size: 13px;
        opacity: 0;
    }

    .collection-item .collection-top .add-cart a i {
        display: inline-block;
        color: #ffbe00;
        font-size: 22px;
        position: relative;
        top: 4px;
        margin-right: 3px;
    }

    .collection-item .collection-top .add-cart a:hover {
        color: #ffffff;
        background-color: #0b0320;
    }

    .collection-item .collection-bottom {
        padding: 15px 20px 17px;
    }

    .collection-item .collection-bottom h3 {
        font-weight: 500;
        font-size: 20px;
        margin-bottom: 15px;
        font-family: "Poppins", sans-serif;
    }

    .collection-item .collection-bottom ul {
        margin: 0;
        padding: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .collection-item .collection-bottom ul li {
        list-style-type: none;
        display: inline-block;
    }

    .collection-item .collection-bottom ul li:first-child {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%;
    }

    .collection-item .collection-bottom ul li:last-child {
        text-align: left;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80%;
        flex: 0 0 80%;
        max-width: 80%;
    }

    .collection-item .collection-bottom ul li span {
        display: block;
        font-weight: 500;
        font-size: 20px;
        color: #fe3333;
        position: relative;
        top: 4px;
    }

    .collection-item .collection-bottom ul li .minus,
    .collection-item .collection-bottom ul li .plus {
        width: 35px;
        height: 35px;
        line-height: 35px;
        color: #ffffff;
        background-color: #fbdb7d;
        display: inline-block;
        text-align: center;
        cursor: pointer;
        margin-bottom: 0;
        vertical-align: middle;
        -webkit-transition: 0.5s all ease;
        transition: 0.5s all ease;
        border-radius: 10px;
        top: 0;
    }

    .collection-item .collection-bottom ul li .minus:hover,
    .collection-item .collection-bottom ul li .plus:hover {
        background-color: #ffbe00;
    }

    .collection-item .collection-bottom ul li .form-control {
        height: 25px;
        width: 50px;
        text-align: center;
        font-size: 20px;
        font-weight: 500;
        border: 0;
        color: #ffbe00;
        display: inline-block;
        vertical-align: middle;
        margin-left: -4px;
        margin-right: -4px;
    }

    .collection-item .collection-bottom ul li .form-control:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 0;
    }

    .addtocart {
        background: #00be9c;
        padding: 7px 14px;
        font-size: 11px;
        border-radius: 4px;
        color: white;
    }
    .select2-container--default{
        width: 100%!important;
    }
        #carouselExampleIndicators > div > div > img{
            
        height:60vh;
        }
    
    
    @media  only screen and (max-width: 600px) {
        #carouselExampleIndicators > div > div > img{
                height:unset !important;
        }
    }

    .hide{
        display: none;
    }
    
    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
      box-shadow: 0 2px 8px 0 rgb(0 0 0 / 22%);
    height: 35px;
    width: 35px;
    font-size: 16px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    background-color: #f9f9f9;
    border: 1px solid #eee;
    transition: all 300ms ease-in;
     position:static;
         
          
          
        
         
    }
    .owl-dots {
    text-align: center;
    padding-top: 15px;
    display: none;
}
    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot:hover{
        background-color:green;
    }
   .bg-text1{
        padding-left: 71rem;
    /* margin-bottom: 0rem; */
    position: relative;
    top: -19rem;
    font-size: 3rem;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
   }
    .bg-text2{
         
    /* margin-bottom: 0rem; */
    
    position: relative;
    top: -19rem;
    font-size: 3rem;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
   }
 .bg-text{
         position: absolute;
    left: 44rem;
    top: -9rem;
    font-size: 2rem;
    font-weight: bold;
    text-transform: uppercase;
 }
 
 .bg-text1{
    position: absolute;
    left: -70rem;
    top: -7rem;
    font-size: 2rem;
    font-weight: bold;
    text-transform: uppercase;
 }
 
 
 @media  only screen and (min-width: 201px) and (max-width: 767px){
     .bg-text{
    position: relative;
    left: 2rem;
    top: -1rem;
    font-size: 2rem;
    font-weight: bold;
    text-transform: uppercase;
 }
 .bg-text1{
    position: absolute;
    left: 2rem;
    top: -1rem;
    font-size: 2rem;
    font-weight: bold;
    text-transform: uppercase;
 }
 }
	   
 

</style>
    <div class="appointment-section">
        
        <!--new slide show-->
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo e(asset('public/images/background1.jpg')); ?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="bg-text">this is a section text</h5>
     
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo e(asset('public/images/background3.jpg')); ?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="bg-text1">this is a section text</h5>
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo e(asset('public/images/background1.jpg')); ?>" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="bg-text">this is a section text</h5>
     
  </div>
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
        
        
        
        <!--<div class="header-img">-->
        <!--    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
                
        <!--        <div class="carousel-inner" style="">-->
                    
        <!--            <div class="carousel-item active" style="">-->
                       
        <!--                <img src="<?php echo e(asset('public/images/background1.jpg')); ?>" class="d-block w-100" alt="..."-->
        <!--                    style=" object-fit:cover  " ></img>-->
                            
        <!--            </div>-->
                     
        <!--            <div class="carousel-item" style="">-->
        <!--                <img src="<?php echo e(asset('public/images/background3.jpg')); ?>" class="d-block w-100" alt="..."-->
        <!--                    style=" object-fit:cover"></img>-->
                            
        <!--            </div>-->
                     
        <!--            <div class="carousel-item" style="">-->
        <!--                <img src="<?php echo e(asset('public/images/background1.jpg')); ?>" class="d-block w-100" alt="..."-->
        <!--                    style=" object-fit:cover"></img>-->
                            
        <!--            </div>-->
                     
        <!--        </div>-->
        <!--        <div>thi is a section</div>-->
        <!--        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"-->
        <!--            data-slide="prev" style="    border: 0px; background: none; color:green;">-->
        <!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
        <!--            <span class="sr-only">Previous</span>-->
        <!--        </button>-->
        <!--        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"-->
        <!--            data-slide="next" style="   border: 0px;  background: none;  ">-->
        <!--            <span class="carousel-control-next-icon"   aria-hidden="true"></span>-->
        <!--            <span class="sr-only" style="color:red;">Next</span>-->
        <!--        </button>-->
        <!--    </div>-->
        <!--</div>-->
        -->
        
    </div>

    



    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style type="text/css">
        .owl-nav button {
            position: absolute;
            top: 50%;
            background-color: #e7d045;
            color: #fff;
            margin: 0;
            transition: all 0.3s ease-in-out;
        }

        .owl-nav button.owl-prev {
            left: 0;
        }

        .owl-nav button.owl-next {
            right: 0;
        }

        .owl-dots {
            text-align: center;
            padding-top: 15px;
        }

        .owl-dots button.owl-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            background: #00be9c;
            margin: 0 3px;
        }

        .owl-dots button.owl-dot.active {
            background-color: #e7d045;
        }

        .owl-dots button.owl-dot:focus {
            outline: none;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.38) !important;
        }

        .owl-nav button:focus {
            outline: none;
        }

        .item {
            text-align: center;
        }

        .card {
            box-shadow: 0 0 9px #c1c1c1;
            border-radius: 5px;
        }

        .card-body {
            padding: 10px 20px 8px 20px;
            text-align: left;
        }

        .card-body h5 {
            font-weight: 600;
        }

        .card-img-top {
            height: 179px;
            object-fit: cover;
            border-radius: 5px 5px 0px 0px;
        }

        @media  only screen and (min-device-width: 200px) and (max-device-width: 1000px) {
            .scanqr {
                width: 30% !important;
            }
        }
        
        
       
    </style>


    <section>
        <div class="container pt-2 pb-3 my-3 px-2">
            <div class="row">
                <div class="col-lg-3 col-12" data-aos="">
                    <div class="p-3" style="background:#00be9c;">
                        <div class="row">
                            <div class="col-2" data-aos=" ">
                                <i class="fa fa-map-marker text-white" aria-hidden="true" style="font-size:45px"></i>
                            </div>
                            <div class="col-10" data-aos="">
                                <p class="text-white m-0" style="font-size:12px">Find From City</p>
                                <select style="width: 100%; border: 0px; padding: 5px;" name="city_id" class="city_id select2">
                                    <option value="null" selected>All City</option>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 " data-aos="">
                    <div class="p-3" style="background:#00be9c;">
                        <div class="row">
                            <div class="col-2 pt-2" data-aos=" ">
                                <i class="fa fa-plus-square text-white" aria-hidden="true" style="font-size:35px"></i>
                            </div>
                            <div class="col-10" data-aos="">
                                <p class="text-white m-0" style="font-size:12px">Hospital / Clinic</p>
                                <select id="hospitalID" style="width: 100%; border: 0px; padding: 5px;" name="hospital_id" class="hospital_id select2">
                                    <option selected disabled>Select Hospital</option>
                                    <?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e(asset('hospital/'.$hospital->slug)); ?>"><?php echo e($hospital->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12">
                    <div class="p-3" data-aos=" " style="background:#00be9c;">
                        <div class="row">
                            <div class="col-2" data-aos="">
                                <i class="fa fa-user-md text-white" aria-hidden="true" style="font-size:45px"></i>
                            </div>
                            <div class="col-10" data-aos=" ">
                                <p class="text-white m-0" style="font-size:12px">Select Department</p>
                                <select style="width: 100%; border: 0px; padding: 5px;" name="department_id" class="department_id select2">
                                    <option value="#">Select Department</option>
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-12" data-aos=" ">
                    <div class="p-3" style="background:#00be9c;" data-aos=" ">
                        <div class="row">
                            <div class="col-2 pt-2" data-aos=" ">
                                <i class="fa fa-exclamation-circle text-white" aria-hidden="true" style="font-size:35px"></i>
                            </div>
<div class="col-10" data-aos="">
<p class="text-white m-0" style="font-size:12px">Emergency</p>
<button style="background-color: #00be9c;border-color:#00be9c;margin-top:5px;font-size:15px; border:none; " type="button" class="text-white"  
onclick="location.href='https://sansarhealth.com/emergency'"

>Emergency Consult</button>
</div>
</div>
</div>
</div>




            </div>
        </div>
    </section>

    <section style="background: #e9eaeb9e;">

        <div class="container" style="padding-top: 80px;">
            <div class="row">
                <div class="col-lg-6 col-12" data-aos="zoom-in" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Book Appointment at Hospital</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2" data-aos="zoom-in">
                    <a href="<?php echo e(asset('hospitals')); ?>" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All Hospital &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true" ></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="container pb-3">
            <div class="owl-carousel loop5 pb-5 pt-4" data-aos="zoom-in">

                <?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item" data-aos="zoom-in">
                    <div class="card" data-aos="zoom-in" style="width: 23rem;box-shadow: none; border:0px">
                        <a href="<?php echo e(route('hospital.details',[$hospital->slug])); ?>">
                            <?php if($hospital->logo): ?>
                        <img class="card-img-top" src="<?php echo e(asset('public'.$hospital->logo)); ?>" alt="Card image cap" style="    height: 215px;">
                        <?php else: ?>
                        <img class="card-img-top" src="<?php echo e(asset('public/images/hospital.png')); ?>" alt="Card image cap" style="    height: 215px;">
                        <?php endif; ?>
                        </a>
                        <div class="card-body" data-aos="zoom-in" style="padding: 10px">
                            <a href="<?php echo e(route('hospital.details',[$hospital->slug])); ?>">
                                <h5><?php echo e($hospital->name); ?></h5>
                            </a>
                            <p class="card-text pb-2"><?php echo e(isset($hospital->city->name)?$hospital->city->name:"-"); ?> </p>
                            <p><a href="<?php echo e(route('hospital.details',[$hospital->slug])); ?>" style="background: #00be9c; padding: 7px 10px; border: 0px; color:white;">Book
                                    Appointment &nbsp;<i class="fa fa-angle-right  aria-hidden="true"  ></i></a></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
            <!--color: green; 
            border-radius: 50%; 
            font-size: 2rem; padding: 1rem; 
            border: solid; /* height: 0px; */ 
            front-size: 2rem; margin-bottom: 2rem;-->
            
            <script type="text/javascript">
                $(".loop5").owlCarousel({
                    autoplay: true,
                    lazyLoad: true,
                    loop: true,
                    margin: 20,
                    /*
                      animateOut: 'fadeOut',
                      animateIn: 'fadeIn',
                      */
                    responsiveClass: true,
                    autoHeight: true,
                    autoplayTimeout: 7000,
                    smartSpeed: 800,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },

                        600: {
                            items: 2
                        },

                        1024: {
                            items: 3
                        },

                        1366: {
                            items: 3
                        }
                    }
                });
            </script>
        </div>
    </section>

    <section>
        <div class="container" style="padding-top: 80px;">
            <div class="row">
                <div class="col-lg-6 col-12" data-aos="zoom-in" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Meet Our Doctor</h2>
                    <p class="m-0">Experienced medical practitioners available for appointment.</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2" data-aos="zoom-in">
                    <a href="<?php echo e(asset('doctors')); ?>" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All Doctor &nbsp;<i
                            class="fa fa-angle-right " aria-hidden="true"></i></a>
                </div>

            </div>
        </div>

        <div class="container pb-3">
            <div class="owl-carousel loop2 pb-5 pt-4">
                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item" data-aos="zoom-in">
                    <div class="card" data-aos="zoom-in" style="width: 17rem;box-shadow: none; border:0px">
                        <?php if($doctor->image): ?>
                            <img class="card-img-top"  src="<?php echo e(asset('public/upload/doctor/'.$doctor->image)); ?>"  alt="Card image cap">
                        <?php else: ?>
                            <img class="card-img-top"  src="<?php echo e(asset('public/images/doctor.png')); ?>"  alt="Card image cap">
                        <?php endif; ?>
                        <div class="card-body" data-aos="zoom-in" style="    border: 0px;     padding: 10px 4px 8px 0px;">
                            <h5><?php echo e($doctor->name); ?></h5>
                            <p class="card-text pb-2"><?php echo e($doctor->service); ?> </p>
                            <p>
                                <a href="<?php echo e(asset('find-doctor?doctor_id='.$doctor->id)); ?>" class="btn  btn-sm text-light"  role="button"  style="background: #00be9c !important;"> 
                                    <span class="elementor-button-content-wrapper">
                                       <span class="elementor-button-text" style="padding: 5px 15px;">Book Appointment</span>
                                    </span> 
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <script type="text/javascript">
                $(".loop2").owlCarousel({
                    autoplay: true,
                    lazyLoad: true,
                    loop: true,
                    margin: 20,
                    /*
                      animateOut: 'fadeOut',
                      animateIn: 'fadeIn',
                      */
                    responsiveClass: true,
                    autoHeight: true,
                    autoplayTimeout: 7000,
                    smartSpeed: 800,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },

                        600: {
                            items: 2
                        },

                        1024: {
                            items: 4
                        },

                        1366: {
                            items: 4
                        }
                    }
                });
            </script>
        </div>
    </section>

    <section>
        <div class="container" style="padding-top: 80px;">
            <div class="row">
                <div class="col-lg-6 col-12" data-aos="zoom-in" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Our Department</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2" data-aos="zoom-in">
                    <a href="<?php echo e(asset('department')); ?>" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All &nbsp;<i
                            class="fa fa-angle-right " aria-hidden="true"></i></a>
                </div>

            </div>
        </div>

        <div class="container pb-3">
            <div class="owl-carousel loop3  pt-4">

                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                    <div class="cardtop card" data-aos="zoom-in">
                    <div class="imagetop" data-aos="zoom-in">
                        <a href="<?php echo e('https://sansarhealth.com/find-doctor?department_id='.$department-> id); ?>">
                            <img style="margin:auto;" src="<?php echo e(asset('public/upload/department/'.$department->image)); ?>">
                        </a>
                    </div>
                    <div class="name" data-aos="zoom-in"> <a href="<?php echo e('https://sansarhealth.com/find-doctor?department_id='.$department-> id); ?>"><?php echo e($department->name); ?></a></div>
                    <div class="desc" data-aos="zoom-in"><?php echo e(substr($department->description, 0, strpos($department->description, ' ',70))); ?> ...</div>
                        <!--<div class="desc"> <?php echo e(substr($department->description,0,70)); ?> ...</div>-->
                    </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
                <style>
                    .cardtop {
                        color:#fff;
                        width: 100%;
                        height: 100%;
                        border-radius: 10px;
                        background: #00be9c!important;
                        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                        transition: all 0.3s ease-in-out;
                    }
                    .cardtop .name{
                        font-size:20px;
                        font-weight:bold;
                        color:#fff;
                        padding:10px;
                    }
                    .imagetop img {
                        width: 80px !important;
                        height: auto !important;
                        vertical-align: middle;
                    }

                    .imagetop {
                        height: 180px;
                        padding: 90px;
                        border-top-left-radius: 10px;
                        border-top-right-radius: 10px;
                        overflow: hidden;
                    }

                    .name {
                        text-align: center;
                    }

                    .desc {
                        text-align: center;
                        padding-top: 2px;
                        padding-bottom: 30px;
                    }
                    @media  only screen and (max-width: 600px) {
         .seller{
              margin-top:1rem;
               
         }
        }
    }
                </style>

                <script type="text/javascript">
                    $(".loop3").owlCarousel({
                        autoplay: true,
                        lazyLoad: true,
                        loop: true,
                        margin: 20,
                        /*
                        animateOut: 'fadeOut',
                        animateIn: 'fadeIn',
                        */
                        responsiveClass: true,
                        autoHeight: true,
                        autoplayTimeout: 7000,
                        smartSpeed: 800,
                        nav: true,
                        responsive: {
                            0: {
                                items: 1
                            },

                            600: {
                                items: 2
                            },

                            1024: {
                                items: 4
                            },

                            1366: {
                                items: 4
                            }
                        }
                    });
                </script>
        </div>
    </section>

    <section>
        <div class="container" style="padding-top: 80px;">
            <div class="row">
                <div class="col-lg-6 col-12" data-aos="zoom-in" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Medicine</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                    
                </div>
                
            </div>
            <div class="row pt-5 pb-5  ">
                <div class="col-lg-6 col-sm-12 seller" data-aos="zoom-in">
                    <div class="p-3" style="background:#00be9c;border-radius:10px;">
                        <div class="row">
                            <div class="col-7 p-3" data-aos="zoom-in">
                                <h3 class="text-white">Become a Seller</h3>
                                <p class="text-white" style="font-size:14px">Diagnostic Services Professional Consultation
                                    Tooth Diagnostic Services Professional Consultation Tooth</p>
                                <button class="become_seller"
                                    style="background: white; border: 0px; border-radius: 14px;  padding: 6px 20px;">Register
                                    Now</button>
                            </div>
                            <div class="col-5" data-aos="zoom-in">
                                <img src="https://sansarhealth.com/resources/views/seller.jpg" width="100%"
                                    style="border-radius:10px; border:5px solid white;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 seller" data-aos="zoom-in">
                    <div class="p-3" data-aos="zoom-in" style="background:#0f4a86;border-radius:10px;">
                        <div class="row">
                            <div class="col-5" data-aos="zoom-in">
                                <img src="https://sansarhealth.com/resources/views/upload.jpg" width="100%"
                                    style="border-radius:10px; border:5px solid white;">
                            </div>
                            <div class="col-7 p-3 text-right" data-aos="zoom-in">
                                <h3 class="text-white">Upload Prescription</h3>
                                <p class="text-white" style="font-size:14px">Diagnostic Services Professional Consultation Tooth Diagnostic Services Professional Consultation Tooth</p>
                                <button class="priscription_upload" style="background: white; border: 0px; border-radius: 14px;  padding: 6px 20px;">Upload Now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pb-4" data-aos="zoom-in">
                    <hr>
                    <h4><b>Pharmaceutical Drug, Medicine, Medical Care & Consultation</b></h4>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 col-12" data-aos="zoom-in">
                            <div
                                style="background-image: url('<?php echo e(asset('public/front/ld.PNG')); ?>'); background-position: center center; background-size: cover;   background-repeat: no-repeat;" class="rounded" data-aos="zoom-in">
                                <div
                                    style="    padding: 230px 24px 20px;background: linear-gradient(0deg, rgba(0,0,0,1) 1%, rgba(8,7,104,0) 100%);" data-aos="zoom-in">
                                    <h5 class="text-white font-weight-bold mb-5">Medicine Appliances</h5>
                                    <!--<p class="text-white m-0" style="font-size:16px">Diagnostic Services Professional-->
                                    <!--    Consultation Tooth Diagnostic Services Professional Consultation Tooth</p>-->
                                    <button class="mt-2"
                                        style="background: #00be9c; border: 0px; color: white; border-radius: 4px; padding: 6px 30px;"><a href="https://sansarhealth.com/medical-appliances">View All</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12" data-aos="zoom-in">
                            <div class="row mr-1 ml-1">

                                <?php $__currentLoopData = $categories->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4  col-12 p-1" data-aos="zoom-in">
                                    <div class="p-2" style="    border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center" data-aos="zoom-in"> 
                                                <a href="<?php echo e(asset('categories/'.$category->slug)); ?>">
                                                    <img src="<?php echo e(asset('public'.$category->image)); ?>" width="70%" style="border-radius:10px; margin-top: 20%;">
                                                </a>
                                            </div>
                                            <div class="col-8 p-0" data-aos="zoom-in">
                                                <a href="<?php echo e(asset('categories/'.$category->slug)); ?>">
                                                    <p class="m-0" style="font-size:14px;"><b><?php echo e($category->name); ?></b></p>
                                                </a>
                                                <?php $__currentLoopData = $category->subCategory->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e(asset('sub-categories/'.$subCategory->slug)); ?>">
                                                    <p class="m-0" style="font-size:12px;"><?php echo e($subCategory->name); ?></p>
                                                </a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5" style="background-image: url('<?php echo e(asset('public/front/bg.jpg')); ?>'); background-position: center center;background-repeat: no-repeat;">

        <div class="container-fluid"
            style="background-image: radial-gradient(at top right, #43848dc7 0%, #43848df0 100%);">
            <div class="row pt-5">
                <div class="col-lg-1 c0l-sm-12"></div>
                <div class="col-lg-5 c0l-sm-12 pt-5" data-aos="zoom-in">
                    <h1 class="text-white"><b>Download Our App</b></h1><br>
                    <p class="text-white">Conveniently transform frictionless mindshare after orthogonal manufactured
                        products.</p>
                    <div class="row">
                        <div class="col-lg-4 col-sm-12" data-aos="zoom-in">
                            <img src="<?php echo e(asset('public/front/scan.png')); ?>" class="img-fluid scanqr"
                                style="border:5px solid black; width:70%">

                        </div>
                        <div class="col-lg-8 col-sm-12" data-aos="zoom-in">
                            <h2 class="text-white"><b>Scan here to <br>Download our App</b></h2>
                            <hr style="background:white; height:3px;">
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 c0l-sm-12 pt-5" data-aos="zoom-in">

                    <img src="<?php echo e(asset('public/front/hand-app.png')); ?>" class="img-fluid">
                </div>
                <div class="col-lg-1 c0l-sm-12"></div>
            </div>
        </div>
    </section>




    <div class="pricing-main-box flex">
        
        <div class="container ">
             <div class="row">
                 <div class="col-lg-6 col-12" data-aos="zoom-in" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Health Package</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2" data-aos="zoom-in">
                    <a href="<?php echo e(asset('pricing')); ?>" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All Package &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true" ></i>
                    </a>
                </div>
             </div>
            <div class="pricing-part-main-box" data-aos="zoom-in">
                <div class="row">
                    <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="pricing-all-content" data-aos="zoom-in">
                                <div class="pricing-part-box" data-aos="zoom-in">
                                    <h3><?php echo e($p->name); ?></h3>
                                    <div class="pricing-cost" data-aos="zoom-in">
                                        <h3><?php echo e(Session::get('currency')); ?></h3>
                                        <span><?php echo e($p->price); ?></span>
                                        <h6>/ session</h6>
                                    </div>
                                    <p><?php echo e($p->description); ?></p>
                                </div>
                                <div class="pricing-part-btn" data-aos="zoom-in">
                                    <a class="btn"
                                        href="<?php echo e(url('subscription') . '/' . $p->id); ?>"><?php echo e(__('messages.Order now')); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> 
            </div>
            
        </div>
        
    </div>


    <div class="numbers-counter-main-box">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6" data-aos="zoom-in">
                    <div class="numbers-counter-part-box" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in">
                            <img src="<?php echo e(asset('public/front/img/n1.png')); ?>">
                            <div class="counter-value" data-count="10200" data-aos="zoom-in">
                                <?php echo e($setting->happy_client); ?>

                            </div>
                            <div class="counter-name" data-aos="zoom-in">
                                <p><?php echo e(__('messages.Happy people')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in">
                            <img src="<?php echo e(asset('public/front/img/n2.png')); ?>">
                            <div class="counter-value" data-count="700" data-aos="zoom-in">
                                <?php echo e($setting->surgery_complete); ?>

                            </div>
                            <div class="counter-name" data-aos="zoom-in">
                                <p><?php echo e(__('messages.SURGERY COMPLETED')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in">
                            <img src="<?php echo e(asset('public/front/img/n3.png')); ?>">
                            <div class="counter-value" data-count="189" data-aos="zoom-in">
                                <?php echo e($setting->expert_doctor); ?>

                            </div>
                            <div class="counter-name" data-aos="zoom-in">
                                <p><?php echo e(__('messages.Expert doctors')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box" data-aos="zoom-in">
                        <div id="counter" data-aos="zoom-in">
                            <img src="<?php echo e(asset('public/front/img/n4.png')); ?>">
                            <div class="counter-value" data-count="11" data-aos="zoom-in">
                                <?php echo e($setting->worldwide_branch); ?>

                            </div>
                            <div class="counter-name" data-aos="zoom-in">
                                <p><?php echo e(__('messages.World wide branch')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container my-5  ">
        <div class="row">
                <div class="col-lg-6 col-12" data-aos="zoom-in" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Blog</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2" data-aos="zoom-in">
                    <a href="<?php echo e(asset('hospitals')); ?>" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All Blog &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true" ></i>
                    </a>
                </div>
            </div>
        
        <!--<div class="global-heading" data-aos="zoom-in">-->
        <!--    <h2>Blog</h2>-->
        <!--    <p><?php echo e(__('messages.The easiest way to keep life on track')); ?></p>-->
            
        <!--</div>-->
        
    </div>

<style>
    .btn-blog{
        border:solid;
        padding:2rem;
    }
</style>


    <div class="container">
        <div id="carousel" class="owl-carousel" data-aos="zoom-in">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item" data-aos="zoom-in">
                    <center>
                        <div class="card" data-aos="zoom-in" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo e(asset('public' . $blog->image)); ?>" alt="Card image cap">
                            <div class="card-body" data-aos="zoom-in">
                                <h5><?php echo e($blog->title); ?></h5>
                                <p class="card-text"><?php echo substr($blog->description, 0, 50); ?>...</p>
                                <p><button href="<?php echo e(asset('blogs/'.$blog->slug)); ?>" class="btn btn-primary">Read More <i class="fa fa-hand-o-left " aria-hidden="true"></i></button>
                                </p>
                            </div>
                        </div>
                    </center>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>



        <script type="text/javascript">
            $("#carousel").owlCarousel({
                autoplay: true,
                lazyLoad: true,
                loop: true,
                margin: 20,
                /*
                  animateOut: 'fadeOut',
                  animateIn: 'fadeIn',
                  */
                responsiveClass: true,
                autoHeight: true,
                autoplayTimeout: 7000,
                smartSpeed: 800,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },

                    600: {
                        items: 2
                    },

                    1024: {
                        items: 3
                    },

                    1366: {
                        items: 3
                    }
                }
            });
        </script>
    </div>


    

    

    <section style="background: #f7f7f7;">


        <div class="container" style="padding-top: 80px;">
            <div class="global-heading" data-aos="zoom-in">
                <h2>Trusted By Company</h2>
                <p>Diagnostic Services Professional Consultation Tooth Implants<br> Surgical Extractions Teeth Whitening</p>
            </div>
        </div>

        <div class="container pb-3">
            <div id="carousel" class="owl-carousel loop pb-5 pt-4">


                <div class="item">
                    <center>

                        <img src="<?php echo e(asset('public/front/lll.png')); ?>" alt="image" width="95%">


                    </center>
                </div>


            </div>



            <script type="text/javascript">
                $(".loop").owlCarousel({
                    autoplay: true,
                    lazyLoad: true,
                    loop: true,
                    margin: 20,
                    /*
                      animateOut: 'fadeOut',
                      animateIn: 'fadeIn',
                      */
                    responsiveClass: true,
                    autoHeight: true,
                    autoplayTimeout: 7000,
                    smartSpeed: 800,
                    nav: true,
                    responsive: {
                        0: {
                            items: 2
                        },

                        600: {
                            items: 4
                        },

                        1024: {
                            items: 5
                        },

                        1366: {
                            items: 5
                        }
                    }
                });
            </script>
        </div>

    </section>
    
    <!--register doctor hospital section start-->
    
     <section>
        <div class="container" style="padding-top: 80px;">
            
            <div class="row pt-5 pb-5" >
                <div class="col-lg-6 col-sm-12 pb-4" >
                    <div class="p-3" data-aos="zoom-in" style="background:#00be9c;border-radius:10px;">
                        <div class="row">
                            <div class="col-12 p-3 text-center" data-aos="zoom-in">
                                <h3 class="text-white text-center ">Become our Health Partner</h3>
                                <button class="become_health_partner"
                                    style="background: white; border: 0px; border-radius: 14px;  padding: 6px 20px;">Apply Now</button>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="p-3" data-aos="zoom-in" style="background:#0f4a86;border-radius:10px;">
                        <div class="row">
                          
                            <div class="col-12 p-3 text-center" data-aos="zoom-in">
                                <h3 class="text-white text-center ">Become our Doctor</h3>
                                <button class="become_doctor" style="background: white; border: 0px; border-radius: 14px;  padding: 6px 20px;">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    
    <div id="modalHealthPartner" class="modal fade bd-example-modal-lg" style="margin-top: 70px;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" data-aos="zoom-in">
          <div class="modal-content" data-aos="zoom-in">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger" data-aos="zoom-in">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form id="appliedHealthForm" action="<?php echo e(asset('applied-health-partner')); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header" data-aos="zoom-in" style="margin-top: 0px;background-color:#00be9c;">
                    <h5 class="modal-title">Become a Health Partner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            <label for="healthpartnername" class="form-label fw-semi">Health Partner Name <span class="text-primary">*</span></label>
                            <input type="text" class="form-control" id="healthpartnername" name="health_partner_name"
                            placeholder="Enter your Health Partner Name">
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
                            <label for="email" class="form-label fw-semi">Email <span class="text-primary">*</span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your Email Address">
                        </div>
                        
                        <div class="col-md-6 mb-3" data-aos="zoom-in">
                            <label for="password" class="form-label fw-semi">Password <span class="text-primary">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password">
                        </div>
                        <!--column-->

                        <div class="col-md-6 mb-3" data-aos="zoom-in">
                            <label for="partnerdistrictid" class="form-label fw-semi">City<span class="text-primary">*</span></label>
                            <select name="city_id" class="form-control select2" required>
                                <option selected disabled>Select City</option>
                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        
                        <div class="col-md-6 mb-3" data-aos="zoom-in">
                            <label for="address" class="form-label fw-semi">Address<span
                                    class="text-primary"> *</span></label>
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
                    </div>
                    <button type="submit" class="btn becomepartnerBtn mt-3 ms-2 me-3" id="formsubmitBtn" style="background-color:#00be9c; color: white;">
                        Become a Health Partner
                    </button>
                    <button type="button" class="btn btn-danger mt-3 float-right" data-dismiss="modal">
                        Close
                    </button>
                </div>
                <div class="modal-footer" data-aos="zoom-in" style="background-color:#00be9c; height: 50px;">
                </div>
            </form>
          </div>
        </div>
    </div>
    
    <div id="modalDoctor" class="modal fade bd-example-modal-lg" style="margin-top: 70px;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        
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
            <form id="appliedDoctorForm" action="<?php echo e(asset('applied-doctor')); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header" style="margin-top: 182px;background-color:#00be9c;">
                    <h5 class="modal-title">Become a Doctor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            <label for="email" class="form-label fw-semi">Email <span class="text-primary">*</span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Email Address">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label fw-semi">Password <span class="text-primary">*</span></label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter password">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="partnerdistrictid" class="form-label fw-semi">Nmc Number<span
                                    class="text-primary">*</span></label>
                            <input type="text" class="form-control" name="nmc" placeholder="Enter Your NmcNO">
                        </div>
                        <!--column-->
                        <div class="col-md-6 mb-3">
                            <label for="partnervdcid" class="form-label fw-semi">Experienced Year<span
                                    class="text-primary"> *</span></label>
                                    <input type="text" class="form-control" name="experience" placeholder="Enter Your Experienced Year">

                            </select>
                        </div>
                        <!--column-->
                        <div class="col-md-6 mb-3">
                            <label for="department_id" class="form-label fw-semi">Specialist<span class="text-primary"> *</span></label>
                            <select name="department_id" class="form-control" required>
                                <option selected disabled>Select Specialist</option>
                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!--column-->

                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label fw-semi">Qualification<span
                                    class="text-primary"> *</span></label>
                            <input type="text" class="form-control" id="address" name="qualification"
                                placeholder="Select Qualification">
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
                    <button type="submit" class="btn mt-3 ms-2 me-3" id="formsubmitBtn" style="background-color:#00be9c; color: white;">
                        Become a Doctor
                    </button>
                    <button type="button" class="btn btn-danger float-right mt-3" data-dismiss="modal">
                        Close
                    </button>
                </div>
            <div class="modal-footer" style="background-color:#00be9c; height: 50px;">
            
            </div>
        </form>
          </div>
        </div>
    </div>
    
    

    <div id="sellerRegisterModal" class="modal fade bd-example-modal-lg" style="margin-top: 70px;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
        <form action="<?php echo e(asset('applied-seller')); ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-header" style="margin-top: 201px;background-color:#00be9c;">
                <h5 class="modal-title">Become a Seller</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="background-color:#f1f1f9">
                    <?php echo csrf_field(); ?>
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
                            <select name="city_ids[]" class="select2 form-control" multiple required>
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
                            <input type="file" name="image_path" id="preview_img" style="font-size: 13px;" required />
                            <div id="viewLogo">
                                <img src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.pJlS~36fbd/w:auto/h:auto/q:90/f:avif/https://s15165.pcdn.co/wp-content/uploads/2021/07/audience.png" width="220" height="350" style="margin-top:20px" >
                            </div>

                        </div>
                    </div>
                     <button type="submit" class="btn btn-primary ml-3 mt-1" style="background-color:orange;">Register Now</button>
                </div>
            </div>
            <div class="modal-footer" style="background-color:#00be9c;">
            </div>
        </form>
          </div>
        </div>
    </div>

    <div id="PrescriptionModal" class="modal fade bd-example-modal-lg" style="margin-top: 70px;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
                <form action="<?php echo e(asset('upload-prescription')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-header" style="margin-top: 140px; background-color:#00be9c">
                        <h5 class="modal-title mt-2">Upload Prescription</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color:#f1f1f9">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-sm-12">

                                <?php if(auth()->user()): ?>
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <span><?php echo e(auth()->user()->name); ?></span>
                                    </div>
                                    <?php if(auth()->user()->phone_no): ?>
                                    <div class="form-group">
                                        <label for="">Mobile</label>
                                        <span><?php echo e(auth()->user()->phone_no); ?></span>
                                    </div>
                                    <?php else: ?>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <span><?php echo e(auth()->user()->email); ?></span>
                                    </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" required>
                                    </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <label for="">Message</label>
                                        <input type="text" name="message" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Delivery Address</label>
                                        <input type="text" name="delivery_address" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Profile Image</label>
                                        <input type="file" name="path" id="preview_img2" required />
                                        <div id="viewLogo2"></div>
                                    </div>
                            </div>
                             <button type="submit" class="btn btn-primary ml-3 m-2" style="background-color:orange">Upload Now</button>
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color:#00be9c;">
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script src="<?php echo e(asset('public/select2/js/select2.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    
    $('.select2').select2();

    <?php if(session()->has('message')): ?>
        toastr.success("<?php echo e(session()->get('message')); ?>");
    <?php endif; ?>

    $(document).on('change','.city_id',function(){
        let id = $(this).val();
        let url = "<?php echo e(asset('gethospitals')); ?>";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id":id,
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                    $('#hospitalID').empty();
                    $('#hospitalID').append('<option selected disabled>Select Hospital</option>');
                    $.each(data.data,function(k,v){
                        let tempurl = "<?php echo e(asset('hospital')); ?>/"+v.slug;
                        $('#hospitalID').append('<option value="'+tempurl+'">'+v.name+'</option>');
                    });
                }else{
                    console.log('error');
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });

    });

    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                    $('#viewLogo').html('<img src="'+e.target.result+'" width="200" height="200"/>');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    function filePreview2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#viewLogo2').html('<img src="'+e.target.result+'" width="200" height="200"/>');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#preview_img').on('change',function(){
        filePreview(this);
    });
    $('#preview_img2').on('change',function(){
        filePreview2(this);
    });

    $(document).on('change','.hospital_id',function(){
        let url = $(this).val();
        window.location.href = url;
    });

    $(document).on('change','.department_id',function(){
        let id = $(this).val();
        window.location.href = "<?php echo e(asset('find-doctor?department_id=')); ?>"+id;
    });

    $(document).on('click','.become_seller',function(){
        $('#sellerRegisterModal').modal('show');
    });
    $(document).on('click','.priscription_upload',function(){
        $('#PrescriptionModal').modal('show');
    });

    $(document).on('click','.appoint_now',function(){
        let id = $(this).data('id');
        let url = "<?php echo e(asset('/doctor-detail-page')); ?>";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id":id,
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                    $('#doctorModal').modal('show');
                    $('#appointmentContent').html(data.data);          
                }else{
                    console.log('error');
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });
    
    $(document).on('click','#bookNow',function(){
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
                "name":name,
                "phone_no":phone_no,
                "department_id":department_id,
                "doc_id":doc_id,
                "service_id":service_id,
                "user_id":user_id,
                "messages":messages,
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                    alert(data.message);
                    $('#doctorModal').modal('hide');
                }else{
                    console.log('error');
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });

    $(document).on('click','.become_health_partner',function(){
        $('#alertSectionAHP').addClass('hide');
        $('#modalHealthPartner').modal('show');
        $('#bodySectionAHP').removeClass('hide');
    });
    $(document).on('click','.become_doctor',function(){
        $('#alertSectionDF').addClass('hide');
        $('#modalDoctor').modal('show');
        $('#bodySectionDF').removeClass('hide');
    });

    $('#appliedHealthForm').on('submit',function(e){
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
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                $('#alertSectionAHP').removeClass('hide');
                $('#bodySectionAHP').addClass('hide');
                $('#alertMsgAHP').html(data.message);
                $('#alertMsgAHP').addClass('alert-success');
                if(data.status==true){
                    $('#appliedHealthForm')[0].reset();
                }
            },
            error:function(xhr){
                let errorMessage = "<div class='alert alert-danger'><ul>";
                $.each(xhr.responseJSON.errors,function(k,v){
                    errorMessage = "<li>"+errorMessage + v + '</li>';
                });
                errorMessage =  errorMessage + "</ul></div>";
                $('#alertSectionAHP').removeClass('hide');
                $('#alertMsgAHP').html(errorMessage);
            }
        });
    });
    
    $('#appliedDoctorForm').on('submit',function(e){
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
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                $('#alertSectionDF').removeClass('hide');
                // $('#bodySectionDF').addClass('hide');
                $('#alertMsgDF').html(data.message);
                $('#alertMsgDF').addClass('alert-success');
                if(data.status==true){
                    $('#appliedDoctorForm')[0].reset();
                }
            },
            error:function(xhr){
                let errorMessage = "<div class='alert alert-danger'><ul>";
                $.each(xhr.responseJSON.errors,function(k,v){
                    errorMessage = "<li>"+errorMessage + v + '</li>';
                });
                errorMessage =  errorMessage + "</ul></div>";
                $('#alertSectionDF').removeClass('hide');
                $('#alertMsgDF').html(errorMessage);
            }
        });
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/home.blade.php ENDPATH**/ ?>