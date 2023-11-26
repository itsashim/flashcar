<?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-3 col-md-6 col-sm-6 p-2 ">
        <div style="text-align:center ; border-radius:7px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <img src="<?php echo e(asset('public/upload/department/' . $department->image)); ?>" alt="card1"
                style="width: 100px; height:100px; border:solid 1px; border-radius:50%" class="mt-2" />
            <h6 class=""><?php echo e($department->name); ?></h6>
            <p><?php echo e($department->doctorsCount); ?> Doctors</p>
            <a href="<?php echo e(asset('hospital/' . $hospital->slug . '?department_id=' . $department->id)); ?>">
                <span style="margin-bottom: 5px;" class="btn btn-success btn-sm">Consult Now</span>
            </a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxpages/departmentList.blade.php ENDPATH**/ ?>