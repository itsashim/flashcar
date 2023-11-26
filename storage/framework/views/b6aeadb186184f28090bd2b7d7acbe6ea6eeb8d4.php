
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

                    

                    <div class="global-heading searchResults text-center">
                        <h2><?php echo e(__('Search Results')); ?></h2>
                    </div>
                </div>

            </div>
            <input type="hidden" name="searchTextResponse" id="searchTextResponse" value="<?php echo e($search); ?>" />
            
            

            
            

            <?php if($productCount > 0): ?>
                <h1 class="text-center text-light" style="background-color: #20748f;">Products</h1>
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-2 col-sm-6 col-md-6 col-lg-3 ">
                            <a title="Show products in category Orthopaedics"
                                href="<?php echo e(asset('product_details/' . $product->slug)); ?>" target="_self" class="">
                                <article class="card mb-2 p-2">
                                    <img src="<?php echo e(asset('public/' . $product->photo)); ?>" alt="<?php echo e($product->name); ?>"
                                        class="card-img mb-1 object-fit-contain" width="200px"
                                        height="200px" />
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
                        // $('#countHospitals').html('( ' + data.hospitalCount + ' )');
                        // $('#countDepartments').html('( ' + data.departmentCount + ' )');
                        // $('#countDoctors').html('( ' + data.doctorCount + ' )');
                        $('#countProducts').html('( ' + data.productCount + ' )');
                        // $('#countBlogs').html('( ' + data.blogCount + ' )');
                    } else {
                        console.log(data);
                    }
                },
                error: function(error) {
                    // alert('error');
                }
            });
        }


        // $('#tabHospital').on('click', function() {
        //     siteSearch('hospital');
        // });
        // $('#tabDepartment').on('click', function() {
        //     siteSearch('department');
        // });
        $('#tabProduct').on('click', function() {
            siteSearch('product');
        });
        // $('#tabDoctor').on('click', function() {
        //     siteSearch('doctor');
        // });
        // $('#tabBlog').on('click', function() {
        //     siteSearch('blog');
        // });

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

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/sitesearch.blade.php ENDPATH**/ ?>