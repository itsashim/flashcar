<?php $__env->startSection('title', 'Related Department'); ?>
<?php $__env->startSection('content'); ?>

<div class="container" style="margin-top: 4rem;margin-bottom: 4rem" >
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6">
                <h1 class="mb-5 mt-4" style="font-weight: 600;color: #555">Related Department List</h1>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="doctor-card col-lg-3 col-md-4 col-sm-6" style="margin: 0 0 2rem 0">

                    <div class=" shadow px-3 pb-3 pt-3 mb-2" style="text-align: center;border-radius: 12px">
                        <a  href="<?php echo e(route('services.find',['id'=>$doctor->id])); ?>">
                            <?php if($doctor->image): ?>
                                <img class="owl-img" src="<?php echo e(asset('public/upload/doctor/'.$doctor->image)); ?>" class="mt-4" style="width: 135px; height: 135px; border-radius: 50%" alt="img">
                            <?php else: ?>
                                <img class="owl-img" src="<?php echo e(asset('public/images/doctor.png')); ?>" class="mt-4" style="width: 135px; height: 135px; border-radius: 50%" alt="img">
                            <?php endif; ?>
                        </a>
                        <span class="img-text text-center">
                            <h4 style="margin: 1rem 0; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo e($doctor->name); ?></h4>
                            
                            <h6> <?php echo e($doctor->department->name); ?> </h6>
                            <a href="<?php echo e(route('services.find',['id'=>$doctor->id])); ?>" class="btn form-control" style="color:#000; background-color: #019444; color:#fff;">Book Appointment</a>
                        </span>
                    </div>
                  
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
          
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/pages/departmentrelated_list.blade.php ENDPATH**/ ?>