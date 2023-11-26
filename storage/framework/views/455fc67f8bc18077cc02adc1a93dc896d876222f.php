<div class="" style="display:grid; grid-template-columns:1fr 1fr 1fr 1fr; gap:1rem;">
    <?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" text-center mt-4"
            style="box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px; padding: 1rem;
            ">
            <a href="<?php echo e(asset('hospital/' . $hospital->slug)); ?>">
                <img style="width:100%;height:200px;" src="<?php echo e(asset('public' . $hospital->logo)); ?>"
                    alt="">
                <h3 class="mt-3" 
                    style="color:#000; text-transform:capitalize;">
                    <?php echo e($hospital->name); ?>

                </h3>
            </a>
            <span>
                <?php echo e(isset($hospital->city) ? $hospital->city->name : $hospital->city_id); ?>

            </span>
            <br />
            <div class="btn bg-lightgreen mt-2">
                <a style="color:#fff" href="<?php echo e(asset('hospital/' . $hospital->slug)); ?>">Book appointment</a>
            </div>
        </div>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxsitesearch/hospital.blade.php ENDPATH**/ ?>