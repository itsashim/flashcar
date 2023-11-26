<?php $__env->startSection('title', 'Book Doctor Through Hospital'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .container-fluid {
        overflow-x:hidden;
    }

    .carousel-indicators {
        gap:1rem;
    }

    .curosel-li {
        width: 10px !important;
        height: 10px !important;
        border-radius: 50% !important;
    }
    
    .hospital-details {
        flex-wrap: wrap;
        gap: 2rem;
        padding: 0 2rem;
    }
    
    .hospital-content h1 {
        font-size:1.5rem !important;
    }
    
    .hospital-content h1 b {
        background-color:unset !important;
    }
    
    .hospital-content h1 b font {
        color:#fff;
    }
    
    .hospital-content p {
        color:#fff;
    }
    
    @media  screen and (max-width:991px) {
        .hospital-center {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    }
    
    @media  screen and (max-width:425px) {
        .hospital-logo {
            justify-content:center;
            padding:0 1.5rem;
        }
        
        .hospital-name {
            margin: 0 !important;
        }
    }
    
    @media  screen and (max-width:396px) {
        .hospital-details {
            gap:0;
        }
    }
    
    
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="padding:0;">
    <div class="row " style="background-color:#5CC09C">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="curosel-li" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li class="curosel-li" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li class="curosel-li" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php $__currentLoopData = $hospitalGalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
                            <img class="d-block w-100 carousel-image"
                                src="<?php echo e(asset('public/storage/' . $gallery->image_path)); ?>" alt="First slide" />
                            <div class="carousel-caption" style="color: black; position: absolute; bottom: 20px">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        </div>
        <div class="col-lg-6 col-sm-12 col-sm-12 hospital-center">

            <div class="row d-flex hospital-logo" >
                <div class=" mt-2 ">
                    <img src="<?php echo e(asset('public' . $hospital->logo)); ?>" alt="background"
                        style="width: 120px; height: 120px; border-radius: 50%;" />

                </div>
                <div>
                    <p class="text-left fs-6 text-uppercase mt-4 pl-4 pt-2 hospital-name" style="font-weight: bold; ">
                        <?php echo e($hospital->name); ?>

                    </p>
                    <div class="">
                        <div class="justify-content-center pb-2 d-flex pl-4 mt-4">

                            <a href="<?php echo e($hospital->facebook_url ? $hospital->facebook_url : '-'); ?>">
                                <!--<i class="fa-brands fa-facebook-f"></i>-->
                                <i class="fa-brands fa-facebook fa-2xl px-2"  ></i>
                                <!--<i class="fa-brands fa-facebook-f px-2"-->
                                <!--    style=" font-size: 2.3rem; border: solid; border-radius: 10px; "></i>-->
                            </a>
                            <a href="<?php echo e($hospital->instagram_url ? $hospital->instagram_url : '-'); ?>">
                                <i class="fa-brands fa-instagram fa-2xl px-2" style="color:#FF647F "></i>
                                <!--<i class="fa-brands fa-instagram px-2"-->
                                <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: pink;"></i>-->
                            </a>
                            <a href="<?php echo e($hospital->twitter_url ? $hospital->twitter_url : '-'); ?>">
                                <i class="fa-brands fa-twitter fa-2xl px-2 "></i>
                                <!--<i class="fa-brands fa-square-twitter fa-2xl px-2"></i>-->
                                <!--<i class="fa-brands fa-twitter px-2"-->
                                <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: blue;"></i>-->
                            </a>
                            <a href="<?php echo e($hospital->linkedin_url ? $hospital->linkedin_url : '-'); ?>">
                                <i class="fa-brands fa-whatsapp fa-2xl px-2" style="color:forestgreen"></i>
                                <!--<i class="fa-brands fa-whatsapp px-2"-->
                                <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: green;"></i>-->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="">
                </div>
            </div>
            <hr>
                <div class="hospital-details d-flex">
                    <div class="">
                        <span class="d-flex"><i class="fa-solid fa-phone pt-1"></i>
                            <p class="px-2 text-bold"  >Phone</p>
                        </span>
                        <p style="color: white; font-weight:bold;"><?php echo e($hospital->phone ? $hospital->phone : '-'); ?></p>
                    </div>
                    <div class="">
                        <span class="d-flex"><i class="fa-solid fa-envelope pt-1"></i>
                            <p class="px-2 text-bold"  >Email</p>
                        </span>
                        <p style="color: white; font-weight:bold;"><?php echo e($hospital->email ? $hospital->email : '-'); ?></p>
                    </div>
                    <div class=" ">
    
                        <span class="d-flex "><i class="fa-solid fa-location-dot pt-1"></i>
                            <p class="px-2 text-bold">Address</p>
                        </span>
                        <p style="color: white; font-weight:bold;"><?php echo e($hospital->address ? $hospital->address : '-'); ?></p>
                    </div>
                </div>
            
            <div class="px-4 hospital-content">
                <?php echo $hospital->detail; ?>

            </div>
        </div>
    </div>

    <div>
        <div class="row mt-5 mb-3">
            <div class="col-lg-3 col-md-12">
                <div class="border-2  " style="
                    background-color: #5cc09c;
                    width: 100%;
                    height: 415px;
                    border-radius: 7px;
                  ">
                  <p class="text-capitalize pl-3 pt-2" style="font-size: 1.3rem; font-weight: bold">
                    Follow below easy steps
                  </p>
                  <div class="border-2 m-3" style="background-color: white; border-radius: 7px">
                    <div>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Step 1: Select a Department</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">विभाग छान्नुहोस्।</th>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Step 2: Select a Doctor and Time</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">
                              चिकित्सक् र दिन छान्नुहोस्।
                            </th>
                          </tr> -->
                        </tbody>
                      </table>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Step 3: Select Patient</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">विभाग छान्नुहोस्।</th>
                          </tr> -->
                        </tbody>
                      </table>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Step 4: Get Appointment confirmation.</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">विभाग छान्नुहोस्।</th>
                          </tr> -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-lg-8 col-md-8">

                <div class="">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <p class=" mt-4" style="font-weight: 600">Select a Department</p>
                        <p>Extended Hospital Service</p>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="input-group mb-4 mt-4 ">
                            <input type="text" class="form-control" name="" id="searchDepart"
                                placeholder="Find Specilities" style="height: 38px; font-size: 14px" />
                            
                        </div>
                    </div>
                </div>
                <div class="row px-4" id="departmentListBox">
                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 p-2 ">
                        <div style="text-align:center ; border-radius:7px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                            <img src="<?php echo e(asset('public/upload/department/'.$department->image)); ?>" alt="card1"
                                style="width: 100px; height:100px; border:solid 1px; border-radius:50%" class="mt-2" />
                            <h6 class=""><?php echo e($department->name); ?></h6>
                            <p><?php echo e($department->doctorsCount); ?> Doctors</p>
                            <a href="<?php echo e(asset('hospital/'.$hospital->slug.'?department_id='.$department->id)); ?>" >
                                <span style="margin-bottom: 5px;" class="btn btn-success btn-sm">Consult Now</span>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $('#searchDepart').on('keyup',function(){
        let name = $(this).val();
        let url = "<?php echo e(asset('departmentlist/search/view')); ?>";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "name":name,
                "hospital_id":<?php echo e($hospital->id); ?>,
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                    $('#departmentListBox').html(data.data);          
                }else{
                    console.log('error');
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/service.sansarhealth.com/resources/views/front/pages/bookhospital_step1.blade.php ENDPATH**/ ?>