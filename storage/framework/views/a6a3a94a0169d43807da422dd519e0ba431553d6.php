<?php $__env->startSection('title'); ?>
    <?php echo e(__('Search Results')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    <style>
        .bookThisTime {
            font-size: 10px;
        }

        /* Scroll Menu */
        div.scrollmenu {
            background-color: #00BE9C;
            overflow: auto;
            white-space: nowrap;
            text-align: center;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            font-weight: bold;

            text-decoration: none;
        }

        .department-part-box {
            box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
            padding: 1rem;
            text-align: center;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }



        @media  only screen and (max-width: 600px) {
            div.scrollmenu {
                padding-left: 0;
            }

            .searchResults {
                text-align: center;

            }
        }

        /* Scroll Menu End */
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="departmentpg-main-box">
        <div class="container">
            <div class="row">







                
                <div class="col-sm-12 col-lg-12  my-3">


                    <!--<div class="col-sm-12 col-md-12 col-lg-6" style="float:left">-->
                    <!--    <input style="width: 80%;float:left;" type="text" name="search_now" class="form-control"-->
                    <!--        placeholder="Search Hospitals,departments, doctors,products,blogs" id="searchSite"-->
                    <!--        value="<?php echo e(request()->get('search')); ?>" />-->
                    <!--    <button class="btn btn-primary float-left" id="searchNow">-->
                    <!--        <i class="fa fa-search"></i>-->
                    <!--    </button>-->
                    <!--</div>-->

                    <div class="col-sm-12 col-md-12 col-lg-6" style="float:left">
                        <form action="<?php echo e(url('site-search')); ?>" method="GET">
                            <div class="input-group mb-3">
                                <input name="search" style="border-radius: 10px 0 0 10px;" type="text"
                                    class="form-control" placeholder="Search Hospitals,departments, doctors,products,blogs"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"
                                        style="background-color: #00be9c;color: white;border-radius: 0 10px 10px 0;">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="global-heading searchResults col-md-12 col-sm-12 col-lg-6" style="float:right">
                        <h2><?php echo e(__('Search Results')); ?></h2>
                    </div>
                </div>

            </div>
            <input type="hidden" name="searchTextResponse" id="searchTextResponse" value="<?php echo e($search); ?>" />
            
            <?php if($hospitalCount > 0): ?>
                <h1 class="text-center bg-info text-light">Hospitals</h1>

                <div class="department-part-main-box mb-4" id="mainView">
                    <div class="" style="display:grid; grid-template-columns:1fr 1fr 1fr 1fr; gap:1rem;">
                        <?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class=" text-center mt-4"
                                style="box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px; padding: 1rem;
							">
                                <a href="<?php echo e(asset('hospital/' . $hospital->slug)); ?>">
                                    <img style="width:200px; height:200px;" src="<?php echo e(asset('public' . $hospital->logo)); ?>"
                                        alt="">
                                    <h3 class="mt-3" style="color:#000; text-transform:capitalize;">
                                        <?php echo e($hospital->name); ?>

                                    </h3>
                                </a>
                                <span>
                                    <?php echo e(isset($hospital->city) ? $hospital->city->name : $hospital->city_id); ?>

                                </span>
                                <br />
                                <div class="btn bg-lightgreen mt-2">
                                    <a style="color:#fff" href="<?php echo e(asset('hospital/' . $hospital->slug)); ?>">Book
                                        appointment</a>
                                </div>
                            </div>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

            
            <?php if($departmentCount > 0): ?>
                <h1 class="text-center bg-info text-light">Departments</h1>

                <div class="departmentpg-main-box">
                    <div class="container">
                        <div class="department-part-main-box my-4">
                            <div class="row">
                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="department-part-box">
                                            <div class="department-part-img">
                                                <img src="<?php echo e(asset('public/upload/department') . '/' . $d->image); ?>"
                                                    width="200px"
                                                    height="200px>
                									</div>
                									<div class="text-detail-box">
                                                <h4><?php echo e($d->name); ?></h4>
                                                <p><?php echo e(substr($d->description, 0, 75)); ?></p>
                                            </div>
                                            <div class="department-viewd-btn services-btn-main-box">
                                                <a
                                                    href="<?php echo e(url('find-doctor?department_id=') . '/' . $d->id); ?>"><?php echo e(__('messages.View Detail')); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>


            <?php if($productCount > 0): ?>
                <h1 class="text-center bg-info text-light">Products</h1>
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-2 col-sm-6 col-md-6 col-lg-4 ">
                            <a title="Show products in category Orthopaedics"
                                href="<?php echo e(asset('product_details/' . $product->slug)); ?>" target="_self" class="">
                                <article class="card mb-2 p-2">
                                    <img src="<?php echo e(asset('public/' . $product->photo)); ?>" alt="<?php echo e($product->name); ?>"
                                        class="card-img mb-1" width="200px"
                                        height="200px />
                                        <div class="card-body">
                                    <a href="<?php echo e(asset('product_details/' . $product->slug)); ?>">
                                        <button data-id="<?php echo e($product->id); ?>"
                                            class="btn bg-lightgreen text-light text-capitalize add_to_cart float-right text-white">add
                                            to cart</button>
                                        <h5 class="text-dark"><?php echo e($product->name); ?></h5>
                                    </a>
                                    <?php if($product->offer_price): ?>
                                        <span style="text-decoration:line-through;color:red;">Rs
                                            <?php echo e($product->price); ?></span> <span style="font-size:20px;color:green;">Rs.
                                            <?php echo e($product->offer_price); ?>

                                        </span>
                                    <?php else: ?>
                                        <span style="color:green;">Rs <?php echo e($product->price); ?></span>
                                    <?php endif; ?>
                                </article>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        <?php endif; ?>


        <?php if($doctorCount > 0): ?>
            <h1 class="text-center bg-info text-light">Doctors</h1>

            <section class="doctors mb-4" id="doctors">
                <div class="box-container" id="hospitallistbox" style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="box text-center" style="box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px; padding: 1rem;">
                            <a href="<?php echo e(asset('find-doctor?doctor_id=' . $doctor->id)); ?>">
                                <?php if($doctor->image): ?>
                                    <img src="<?php echo e(asset('public/upload/doctor/' . $doctor->image)); ?>" alt=""
                                        width="200px" height="200px">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('public/images/doctor.png')); ?>" width="200px"
                                        height="200px" />
<?php endif; ?>
                            <h3><?php echo e($doctor->name); ?></h3>
                        </a>
                         
                         <span><?php echo e(isset($doctor->hospital) ? $doctor->hospital->name : '-'); ?></span>
                        <div class="share ">
                                            <a class="btn bg-lightgreen text-light text-capitalize" href="<?php echo e(asset('find-doctor?doctor_id=' . $doctor->id)); ?>">Book appointment</a>
                                        </div>
                                    </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
            </section>
        <?php endif; ?>


        <?php if($blogCount > 0): ?>
            <h1 class="text-center bg-info text-light">Blogs</h1>
            <div class="row" id="hospitallistbox">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="doctor-card col-lg-3 col-md-4 col-sm-6">
                        <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
                            <a href="<?php echo e(asset('blogs/' . $blog->slug)); ?>">
                                <?php if($blog->image): ?>
                                    <img style="width: 200px; height: 200px; border-radius: 50%" class="mt-4"
                                        src="<?php echo e(asset('public' . $blog->image)); ?>" alt="">
                                <?php else: ?>
                                    <img style="width: 200px; height: 200px; border-radius: 50%" class="mt-4"
                                        src="<?php echo e(asset('public/images/hospital.png')); ?>" alt="" />
                                <?php endif; ?>
                            </a>

                            <p class="text-center text-capitalize mt-4" style="font-size: 22px;">
                                <?php echo e($blog->title); ?>

                            </p>
                            <p class="text-center text-uppercase text-success" style="font-size: 1rem">
                                <?php echo substr($blog->description, 0, 50); ?>...
                            </p>

                            <a href="<?php echo e(asset('blogs/' . $blog->slug)); ?>"
                                class="btn bg-lightgreen text-light text-uppercase rounded-3">


                                Read More
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
    </div>
    <div id="doctorProfile" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Doctor Details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="profileContent"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        function siteSearch(searchType) {
            let searchText = $('#searchSite').val();
            $('#currentSearchTab').val(searchType);
            // let searchType = $('#searchTextResponse').val();
            $.ajax({
                url: "<?php echo e(asset('site-search/ajax')); ?>",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    "searchType": searchType,
                    "searchText": searchText,
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#mainView').html(data.data);
                        $('#countHospitals').html('( ' + data.hospitalCount + ' )');
                        $('#countDepartments').html('( ' + data.departmentCount + ' )');
                        $('#countDoctors').html('( ' + data.doctorCount + ' )');
                        $('#countProducts').html('( ' + data.productCount + ' )');
                        $('#countBlogs').html('( ' + data.blogCount + ' )');
                    } else {
                        console.log(data);
                    }
                },
                error: function(error) {
                    // alert('error');
                }
            });
        }


        $('#tabHospital').on('click', function() {
            siteSearch('hospital');
        });
        $('#tabDepartment').on('click', function() {
            siteSearch('department');
        });
        $('#tabProduct').on('click', function() {
            siteSearch('product');
        });
        $('#tabDoctor').on('click', function() {
            siteSearch('doctor');
        });
        $('#tabBlog').on('click', function() {
            siteSearch('blog');
        });

        $('#searchNow').on('click', function() {
            let currenttab = $('#currentSearchTab').val();
            siteSearch(currenttab);
        });

        $('#searchSite').on('keyup', function(e) {
            if (e.keyCode == 13) {
                let currenttab = $('#currentSearchTab').val();
                siteSearch(currenttab);
            }
        });
    </script>
    <script>
        $(document).on('click', '.add_to_cart', function() {
            let id = $(this).data('id');
            let url = "<?php echo e(asset('/add-to-cart')); ?>";

            <?php if(auth()->user()): ?>
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
                            alert(data.message);
                        } else {
                            console.log(data.message);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            <?php else: ?>
                $('#product_id').val(id);
                showloginmodel();
            <?php endif; ?>
        });

        $(document).on('click', '.bookThisTime', function() {
            let date = $(this).data('date');
            let time = $(this).data('time');
            let id = $(this).data('id');
            window.location.href = "<?php echo e(asset('/appoint/doctor?doctor_id=')); ?>" + id + "&date=" + date + "&time=" +
                time;
        });

        $(document).on('click', '.doctorprofile', function() {

            let id = $(this).data('docid');
            let url = "<?php echo e(asset('doctor/profile')); ?>";
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
                        $('#doctorProfile').modal('show');
                        $('#profileContent').html(data.data);
                    } else {
                        console.log('error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/front/sitesearch.blade.php ENDPATH**/ ?>