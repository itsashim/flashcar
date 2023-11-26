<div class="categoryGrid px-0 col-12">
    <div class="form-row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-2 col-md-4 col-sm-6 col-lg-3">
                <a title="Show products in category Orthopaedics" href="<?php echo e(asset('product_details/' . $product->slug)); ?>"
                    target="_self" class="">
                    <article class="card mb-2">
                        <img src="<?php echo e(asset('public/' . $product->photo)); ?>" alt="<?php echo e($product->name); ?>" class="card-img"
                            width="260px" height="260px" />
                        <div class="card-body text-center">
                            <a href="<?php echo e(asset('product_details/' . $product->slug)); ?>">
                                <!---->

                                <h5><?php echo e($product->name); ?></h5>
                            </a>
                            <span>Rs <?php echo e($product->price); ?></span> <br>
                            <button style="background-color: #00be9c; text-transform:capitalize; color:#fff;" data-id="<?php echo e($product->id); ?>"
                                class="btn add_to_cart mt-2">add to cart</button>

                            <!---->
                </a>

            </div>
            </article>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxsitesearch/products.blade.php ENDPATH**/ ?>