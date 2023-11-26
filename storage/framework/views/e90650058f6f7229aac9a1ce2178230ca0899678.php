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

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/pages/ssr/bike_list_render.blade.php ENDPATH**/ ?>