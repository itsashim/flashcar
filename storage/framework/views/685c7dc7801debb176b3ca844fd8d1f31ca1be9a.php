<?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="doctor-card col-lg-3 col-md-4 col-sm-6">

        <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
            <a href="<?php echo e(asset('find-doctor?doctor_id=' . $doctor->id)); ?>">
                <?php if($doctor->image): ?>
                    <img src="<?php echo e(asset('public/upload/doctor/' . $doctor->image)); ?>" class="mt-4"
                        style="width: 100px; height: 100px; border-radius: 50%" alt="img" />
                <?php else: ?>
                    <img src="<?php echo e(asset('public/upload/profile/profile.png')); ?>" class="mt-4"
                        style="width: 100px; height: 100px; border-radius: 50%" alt="img" />
                <?php endif; ?>
            </a>
            <p class="text-center text-capitalize mt-4" style="font-size: 2rem">
                <?php echo e($doctor->name); ?>

            </p>
            <span
                style="font-size: 20px;color: #862b2b;"><?php echo e(isset($doctor->department->name) ? $doctor->department->name : '--------------'); ?></span>
            <a style="width:80%;" href="<?php echo e(asset('find-doctor?doctor_id=' . $doctor->id)); ?>"
                class="btn btn-primary text-uppercase rounded-3">
                Book Appontment
            </a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/front/ajaxpages/doctorList.blade.php ENDPATH**/ ?>