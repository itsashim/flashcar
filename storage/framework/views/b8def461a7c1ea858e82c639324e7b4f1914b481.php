<?php $__env->startSection('title'); ?>
    <?php echo e(__('Cart')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .disable{
            display:none;
        }
        .cart-page {
            margin: 80px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        th {
            text-align: right;
            padding: 15px;
            color: #fff;
            background: #24a190;
            font-weight: normal;
        }

        td {
            padding: 10px 5px;
            text-align: right;
        }

        td input {
            width: 120px;
            height: 45px;
            padding: 5px;
        }

        td a {
            color: #ff523b;
            font-size: 12px;
        }

        td img {
            width: 90px;
            height: 90px;
            margin-left: 10px;
        }

        .total-price {
            display: flex;
            justify-content: flex-end;
        }

        .total-price table {
            border-top: 3px solid #ff523b;
            width: 90%;
            max-width: 400px;
            margin-right: 40px;
        }

        td:last-child {
            text-align: right;
        }

        th:last-child {
            text-align: right;
        }

        p {
            font-family: poppins;
            font-size: large;
        }



        .checkout {
            background-color: #00c994;
            color: white;
            margin-right: 45px;
            padding: 15px;
            margin-top: 20px;
            float: right;
            font-size: 18px;
        }

        .checkout:hover {
            color: white;
        }

        .text-secondary {
            font-size: 18px;
        }

        .sapm {
            font-size: 18px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .small {}
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="departmentpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2><?php echo e(__('Cart')); ?></h2>
            </div>
            <div class="department-part-main-box">
                <?php if(count($cartDetails) > 0): ?>
                    <div class="small container cart-page table-responsive" id="cartContent">
                        <table>
                            <tr>
                                <th colspan=2 style="text-align:center;">Product</th>
                                <!--<th style="text-align:left;">Name</th>-->
                                <th style="text-align:left;">Price</th>
                                <th style="min-width:100px;">Quantity</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                            <?php $__currentLoopData = $cartDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="cart-info">
                                             <img src="<?php echo e(asset('public/' . $cartDetail->product->photo)); ?>" alt=""> 
                                        </div>
                                    </td>
                                    
                                    <td class="text-left">
                                        <p><b><?php echo e($cartDetail->product->name); ?></b></p>
                                    </td>
                                    
                                    <td class="text-left">
                                        <div>
                                            
                                            <?php if($cartDetail->product->offer_price): ?>
                                                <small class="small"><span style="text-decoration: line-through;color:red;">Rs. <?php echo e($cartDetail->product->price); ?></span> <span style="color:green;font-size:16px;">Rs. <?php echo e($cartDetail->product->offer_price); ?></span> </small>
                                            <?php else: ?>
                                                <small class="small" style="color:green;font-size:16px;">Rs: <?php echo e($cartDetail->product->price); ?></small>
                                            <?php endif; ?>
                                            <br>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="minus"><span data-id="<?php echo e($cartDetail->product_id); ?>"
                                                class="fa fa-minus-square text-secondary substract sub_from_cart"></span>
                                            <span class="sapm"><?php echo e($cartDetail->quantity); ?></span>
                                            <span data-id="<?php echo e($cartDetail->product_id); ?>"
                                                class="fa fa-plus-square text-secondary model_cart_plus add_to_cart">

                                            </span>
                                        </div>
                                    </td>
                                    <td>Rs. <?php echo e($cartDetail->amount); ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-danger btnRemove"
                                            data-id="<?php echo e($cartDetail->product_id); ?>"
                                            id="remove-from-cart">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <div class="total-price">
                            <table>
                                <tr>
                                    <td>Total</td>
                                    <td>Rs <?php echo e($cart->total_price); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <a href="<?php echo e(asset('checkout')); ?>" class="checkout" id="checkout" >
                                <b>Procedure To Checkout</b>
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <h2 style="color: rgb(170, 88, 11);text-align:center;">Cart is empty.</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).on('click', '.add_to_cart', function() {
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
                        //    alert(data.message);
                        $('#cartContent').html(data.view);
                        $('#cartTotalCount').html(data.cartCount);
                    } else {
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });
        $(document).on('click', '.sub_from_cart', function() {
            let id = $(this).data('id');
            let url = "<?php echo e(asset('/sub-from-cart')); ?>";
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
                        //    alert(data.message);
                        $('#cartContent').html(data.view);
                        $('#cartTotalCount').html(data.cartCount);
                    } else {
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });
        
        // //let btn = document.querySelector('#remove-from-cart');//.btnRemove
        // let btn = document.querySelector('.btnRemove');//
        //     btn.addEventListener("click",function(e){
        //         e.preventDefault();
               
        //     });
            
        $(document).on('click', '.btnRemove', function() {
            // let btn = document.querySelector('#checkout');
            // btn.classList.add("disable");
            let id = $(this).data('id');
            let url = "<?php echo e(asset('/remove-from-cart')); ?>";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "product_id": id,
                },
                beforeSend: function() {
                  
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#cartContent').html(data.view);
                        $('#cartTotalCount').html(data.cartCount);
                        
                    } else {
                        console.log(data.message);
                    }
                    location.reload(true);
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/front/cart.blade.php ENDPATH**/ ?>