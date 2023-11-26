<div class="row">
    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6 col-md-4 col-lg-3 text-center mt-5">
            <a href="<?php echo e(asset('find-doctor?department_id='.$department->id)); ?>">
                <img style="width:100%;height:200px;" src="<?php echo e(asset('public/upload/department/'.$department->image)); ?>" alt="">
                <h3 class="mt-1"><?php echo e($department->name); ?></h3>
            </a>
            <div class="btn" style="background-color: #00be9c;">
                <a style="color:#fff" href="<?php echo e(asset('find-doctor?department_id='.$department->id)); ?>">Book appointment</a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxsitesearch/departments.blade.php ENDPATH**/ ?>