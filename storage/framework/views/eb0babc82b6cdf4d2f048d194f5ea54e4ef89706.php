<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Department')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    <style>
        ul>li {
            list-style-type: none;
        }

        .list {
            padding-left: 2px;
        }

        .viewBox.listBox {
            /*background: #e3dada;*/
            z-index: 1;
            margin: 4px 0;
            border-radius: 5px;
            padding: 0.5rem;
            /*background: #fff;*/
            box-shadow: 0 0 17px 0px rgb(200 200 200 / 50%);
            border: 1px solid #e3e3e3;
        }

        .active {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .active li {
            list-style-type: none;
            border-left: 2px solid #00be9c;
            margin-right: 1rem;
        }

        .active li {
            padding-left: 1em;
            position: relative;
        }

        .sublist>li a::before {
            content: "";
            position: absolute;
            top: 0;
            left: -2px;
            bottom: 50%;
            width: 0.75em;
            border: 2px solid #00be9c;
            border-top: 0 none transparent;
            border-right: 0 none transparent;
        }

        ul>li:last-child {
            border-left: 2px solid transparent;
        }

        .text-green {
            color: #00be9c;
        }

        .text-black {
            color: black;
        }

        /*.new-btn {*/
        /*      display:flex;*/
        /*      align-items:center;*/
        /*      gap:1rem;*/
        /*  }*/

        /*  .visible-tab  {*/
        /*      background: aquamarine;*/
        /*  }*/

        @media  screen and (min-width:768px) {
            .content__body-container {
                display: flex;
                flex-wrap: wrap;
            }

        }

        /*@media  screen and (max-width:767px) {*/
        /*    .content__body-container {*/
        /*        display:block;*/
        /*    }*/

        /*    .tab-hidden {*/
        /*        display:none;*/
        /*      }*/

        /*      .doctorprofile-view {*/
        /*          display:block;*/
        /*      }*/

        /*  .visible-tab {*/
        /*      display: flex;*/
        /*      justify-content: start;*/
        /*      gap: 1rem;*/
        /*  }*/
        /*}*/


        /* v2 new style */
        .doctorprofile-view {
            display: none;
        }

        .doctorProfile {
            width: 90%;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 25%) 0px 54px 55px, rgb(0 0 0 / 12%) 0px -12px 30px, rgb(0 0 0 / 12%) 0px 4px 6px, rgb(0 0 0 / 17%) 0px 12px 13px, rgb(0 0 0 / 9%) 0px -3px 5px;
            position: absolute;
            top: 0%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            text-align: center;
            visibility: hidden;
            transition: transform 0.4s, left 0.4s;
        }

        .closeProfile {
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 1rem;
        }

        .displayProfile {
            visibility: visible;
            /*top: 185%;*/
            /*top: -165%;*/
            left: 50%;
            transform: translate(-50%, -50%) scale(1);
        }

        .modal-body {
            display: grid;
            grid-template-columns: 1fr;
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 30px;
        }

        /* Large Screen Device */
        @media  screen and (min-width: 992px) {
            .displayProfile {
                width: 80%;
            }
        }

        @media  screen and (max-width:767px) {
            .visible-tab {
                display: none;
            }

            .doctorprofile-view {
                display: block;
            }

            .content__body-container {
                display: block;
            }

            .tab-hidden {
                display: none;
            }
        }

        /* v2 new style end */

        /* v3 */
        .open-category {
            font-size: 30px;
            cursor: pointer;
            padding: 15px;
            font-weight: 600;
        }

        .new-listBox {
            margin: 4px 30px !important;
        }

        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            /*top: 25%;*/
            width: 100%;
            text-align: start;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 16px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media  screen and (min-width:768px) {
            .open-category {
                display: none;
            }
        }

        @media  screen and (max-width:767px) {
            .open-category {
                dispay: block
            }
        }

        @media  screen and (max-height: 450px) {
            .overlay a {
                font-size: 16px
            }

            .overlay .closebtn {
                font-size: 40px;
                /*top: 15px;*/
                /*right: 35px;*/
                top: 30px;
                right: 30px;
                width: 80px;
                text-align: center;
            }
        }

        /* v3 end */
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="departmentpg-main-box productList__container">
        <div class="content__body-container" style="margin-top:3rem; margin-bottom:3rem;">

            <!-- visible on tab view -->

            <!-- v3 -->
            <div class="overlay" id="myNav">
                <div class="left-sidebar-categories order-1 overlay-content">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <h2 style="color: #818181; text-align: center;">Categories</h2>
                    <div class="viewBox listBox new-listBox">
                        <ul class="list m-0 " >
                            <?php if(isset($category) && $category->slug == 'medical-appliances'): ?>
                                <?php if(count($subCategories) > 0): ?>
                                    <ul class="sublist">
                                        <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="inactive">
                                                <a href="<?php echo e(asset('sub-categories/' . $subCategory->slug)); ?>"
                                                    <?php if(isset($sCategory) && $sCategory->id == $subCategory->id): ?> class="text-green" <?php else: ?> class="text-black" <?php endif; ?>>
                                                    <?php echo e($subCategory->name); ?> 
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(isset($category->id) && $c->id == $category->id): ?>
                                        <li class="active last">
                                            <a href="<?php echo e(asset('categories/' . $c->slug)); ?>" class="text-green">
                                                <?php echo e($c->name); ?> </a>
                                            <?php if(count($subCategories) > 0): ?>
                                                <ul class="sublist">
                                                    <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="inactive">
                                                            <a href="<?php echo e(asset('sub-categories/' . $subCategory->slug)); ?>"
                                                                <?php if(isset($sCategory) && $sCategory->id == $subCategory->id): ?> class="text-green" <?php else: ?> class="text-black" <?php endif; ?>>
                                                                <?php echo e($subCategory->name); ?> </a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php else: ?>
                                        <li class="inactive"><a class="text-black"
                                                href="<?php echo e(asset('categories/' . $c->slug)); ?>"> <?php echo e($c->name); ?> </a></li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- v3 end -->


            <!-- v2 new  -->
            <!--<button id="toggleBtn" class="btn btn-outline-success small doctorprofile-view" type="submit"-->
            <!--                 onclick="displayProfile()">-->
            <!--                 View Profie-->
            <!-- </button>-->
            <!-- <div class=" doctorProfile displayProfile" id="doctorProfile">-->
            <!--   <div class="left-sidebar-categories order-1 modal-body" id="profileContent">-->
            <!--         <div class="catBtn">-->
            <!--             <h2>Categories</h2>-->

            <!--         </div>-->
            <!--     <div class="viewBox listBox">-->
            <!--       <ul class="list m-0">-->
            <!--          <?php if(isset($category) && $category->slug == 'medical-appliances'): ?>-->
            <!--             <?php if(count($subCategories) > 0): ?>-->
            <!--               <ul class="sublist">-->
            <!--                   <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -->
            <!--                   <li class="inactive">-->
            <!--                     <a href="<?php echo e(asset('sub-categories/' . $subCategory->slug)); ?>" <?php if(isset($sCategory) && $sCategory->id == $subCategory->id): ?> class="text-green" <?php else: ?> class="text-black" <?php endif; ?> > <?php echo e($subCategory->name); ?> </a>-->
            <!--                   </li>-->
            <!--
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
            <!--               </ul>-->
            <!--               <?php endif; ?>-->
        <!--          <?php else: ?>-->
            <!--             <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -->

            <!--             <?php if(isset($category->id) && $c->id == $category->id): ?>
    -->
            <!--             <li class="active last">-->
            <!--               <a href="<?php echo e(asset('categories/' . $c->slug)); ?>" class="text-green"  > <?php echo e($c->name); ?> </a>-->
            <!--               <?php if(count($subCategories) > 0): ?>
    -->
            <!--               <ul class="sublist">-->
            <!--                   <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -->
            <!--                   <li class="inactive">-->
            <!--                     <a href="<?php echo e(asset('sub-categories/' . $subCategory->slug)); ?>" <?php if(isset($sCategory) && $sCategory->id == $subCategory->id): ?> class="text-green" <?php else: ?> class="text-black" <?php endif; ?> > <?php echo e($subCategory->name); ?> </a>-->
            <!--                   </li>-->
            <!--
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
            <!--               </ul>-->
            <!--
    <?php endif; ?>-->
            <!--             </li>-->

        <!--             <?php else: ?>-->
            <!--               <li class="inactive"><a class="text-black" href="<?php echo e(asset('categories/' . $c->slug)); ?>"> <?php echo e($c->name); ?> </a></li>-->
            <!--
    <?php endif; ?>-->


            <!--
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
            <!--         <?php endif; ?>-->
            <!--       </ul>-->
            <!--     </div>-->
            <!--   </div>-->
            <!--   <button class="btn btn-success btn-lg closeProfile" type="button"-->
            <!--                 onclick="closeProfile()">Close</button>-->
            <!-- </div>-->
            <!-- v2 end  -->

            <!--<nav class="navbar navbar-expand-lg navbar-light visible-tab">-->
            <!--    <button class="navbar-toggler new-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
            <!--        <h5 class="">-->
            <!--            Categories-->
            <!--        </h5>-->
            <!--        <i class="fa-solid fa-chevron-right" stye="position:fixed;"></i>-->
            <!--    </button>-->

            <!--    <div class="collapse navbar-collapse " id="navbarSupportedContent2">-->
            <!--        <ul class="list m-0">-->
            <!--             <?php if(isset($category) && $category->slug == 'medical-appliances'): ?>-->
            <!--                <?php if(count($subCategories) > 0): ?>-->
            <!--                  <ul class="sublist">-->
            <!--                      <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -->
            <!--                      <li class="inactive">-->
            <!--                        <a href="<?php echo e(asset('sub-categories/' . $subCategory->slug)); ?>" <?php if(isset($sCategory) && $sCategory->id == $subCategory->id): ?> class="text-green" <?php else: ?> class="text-black" <?php endif; ?> > <?php echo e($subCategory->name); ?> </a>-->
            <!--                      </li>-->
            <!--
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
            <!--                  </ul>-->
            <!--                  <?php endif; ?>-->
        <!--             <?php else: ?>-->
            <!--                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -->

            <!--                <?php if(isset($category->id) && $c->id == $category->id): ?>
    -->
            <!--                <li class="active last">-->
            <!--                  <a href="<?php echo e(asset('categories/' . $c->slug)); ?>" class="text-green"  > <?php echo e($c->name); ?> </a>-->
            <!--                  <?php if(count($subCategories) > 0): ?>
    -->
            <!--                  <ul class="sublist">-->
            <!--                      <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -->
            <!--                      <li class="inactive">-->
            <!--                        <a href="<?php echo e(asset('sub-categories/' . $subCategory->slug)); ?>" <?php if(isset($sCategory) && $sCategory->id == $subCategory->id): ?> class="text-green" <?php else: ?> class="text-black" <?php endif; ?> > <?php echo e($subCategory->name); ?> </a>-->
            <!--                      </li>-->
            <!--
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
            <!--                  </ul>-->
            <!--
    <?php endif; ?>-->
            <!--                </li>-->

        <!--                <?php else: ?>-->
            <!--                  <li class="inactive"><a class="text-black" href="<?php echo e(asset('categories/' . $c->slug)); ?>"> <?php echo e($c->name); ?> </a></li>-->
            <!--
    <?php endif; ?>-->


            <!--
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
            <!--            <?php endif; ?>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</nav>-->
            <!-- visible on tab view end -->
              
                    <span class="open-category" style="font-size:30px;cursor:pointer" onclick="openNav()">
                        Categories
                        <i class="fa-solid fa-caret-right" style="font-size:25px;"></i>
                    </span>
                    <hr />
            <!--<span class="open-category" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->
                        
       
                <div class="col-lg-3 col-md-5 col-sm-5 tab-hidden">
                            <div class="left-sidebar-categories order-1">
                                <h2 style="color:#555">Categories</h2>
                                <div class="viewBox listBox">
                                    <ul class="list m-0">
                                        <?php if(isset($category) && $category->slug == 'medical-appliances'): ?>
                                            <?php if(count($subCategories) > 0): ?>
                                                <ul class="sublist">
                                                    <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="inactive">
                                                            <a style="color: #333" href="<?php echo e(asset('sub-categories/' . $subCategory->slug)); ?>"
                                                                <?php if(isset($sCategory) && $sCategory->id == $subCategory->id): ?> class="text-green" <?php else: ?> class="text-black" <?php endif; ?>>
                                                                <?php echo e($subCategory->name); ?> </a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(isset($category->id) && $c->id == $category->id): ?>
                                                    <li class="active last">
                                                        <a style="color: #333" href="<?php echo e(asset('categories/' . $c->slug)); ?>" class="text-green">
                                                            <?php echo e($c->name); ?> </a>
                                                        <?php if(count($subCategories) > 0): ?>
                                                            <ul class="sublist">
                                                                <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li class="inactive">
                                                                        <a style= "color: #333" href="<?php echo e(asset('sub-categories/' . $subCategory->slug)); ?>"
                                                                            <?php if(isset($sCategory) && $sCategory->id == $subCategory->id): ?> class="text-green" <?php else: ?> class="text-black" <?php endif; ?>>
                                                                            <?php echo e($subCategory->name); ?> </a>
                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="inactive"><a style="color: #333"
                                                            href="<?php echo e(asset('categories/' . $c->slug)); ?>"> <?php echo e($c->name); ?> </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                <div class="col-lg-9 col-md-7 col-sm-12 ">
                            <h2 class="mb-4" style="color:#555">Products List</h2>
            
                            <div class="categoryGrid px-0 col-12">
                                <div class="form-row">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="mb-2 col-12 col-sm-6 col-md-6 col-lg-4">
                                            <a title="Show products in category Orthopaedics"
                                                href="<?php echo e(asset('product_details/' . $product->slug)); ?>" target="_self"
                                                class="">
                                                <article class="card mb-2" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                                    <img src="<?php echo e(asset('public/' . $product->photo)); ?>" alt="<?php echo e($product->name); ?>"
                                                        class="card-img" width="260px" height="260px" />
                                                    <div class="card-body">
                                                        <a href="<?php echo e(asset('product_details/' . $product->slug)); ?>">
                                                            <button data-id="<?php echo e($product->id); ?>"
                                                                class="btn bg-lightgreen text-light text-capitalize add_to_cart float-right text-white" style="font-size: 1rem">add
                                                                to cart</button>
                                                            <h5 style="font-weight: 600;font-size: 1rem;color: #333"><?php echo e($product->name); ?></h5>
                                                        </a>
                                                        <?php if($product->offer_price): ?>
                                                            <span style="text-decoration:line-through;color:red;display: block">Rs
                                                                <?php echo e($product->price); ?></span> <span
                                                                style="font-size:20px;color:green;">Rs. <?php echo e($product->offer_price); ?>

                                                            </span>
                                                        <?php else: ?>
                                                            <span>Rs <?php echo e($product->price); ?></span>
                                                        <?php endif; ?>
            
                                                    </div>
                                                </article>
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <?php echo e($products->links()); ?>

                        </div>
                        <div class="text-center col-12">
                             
                        </div>
                       
        </div>
    </div>






    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
                           toastr.success(data.message);
                            alert(data.message);
                            $('#cartTotalCount').html(data.cartCount);
                        } else {
                            toastr.success(data.message);
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



        // v2
        let doctorProfile = document.getElementById("doctorProfile");

        function displayProfile() {
            doctorProfile.classList.add("displayProfile");
        }

        function closeProfile() {
            doctorProfile.classList.remove("displayProfile")
        }

        $(document).on('click', '.closeProfile', function() {
            console.log('clicked');
            $('#doctorProfile').modal('hide');
        });
        //   v2 end

        // v3
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
        // v3 end


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/rental.shahbazali.website/resources/views/front/productlist.blade.php ENDPATH**/ ?>