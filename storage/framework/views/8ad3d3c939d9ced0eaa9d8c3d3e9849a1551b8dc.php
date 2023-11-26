<?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="doctor-card col-lg-3 col-md-4 col-sm-6">
        <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
            <a href="<?php echo e(asset('hospital/' . $hospital->slug)); ?>">
                <?php if($hospital->logo): ?>
                    <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4"
                        src="<?php echo e(asset('public' . $hospital->logo)); ?>" alt="">
                <?php else: ?>
                    <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4"
                        src="<?php echo e(asset('public/images/hospital.png')); ?>" alt="" />
                <?php endif; ?>
            </a>

            <p class="text-center text-capitalize mt-4" style="font-size: 22px;">
                <?php echo e($hospital->name); ?>

            </p>
            <p class="text-center text-uppercase text-success" style="font-size: 1rem">
                <?php echo e(isset($hospital->city) ? $hospital->city->name : $hospital->city_id); ?>

            </p>

            <a href="<?php echo e(asset('hospital/' . $hospital->slug)); ?>" class="btn btn-primary text-uppercase rounded-3">
                book an appontment
            </a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxpages/hospitalList.blade.php ENDPATH**/ ?>