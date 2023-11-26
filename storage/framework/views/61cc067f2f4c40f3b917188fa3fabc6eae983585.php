<div class="row">

    <div class="col-sm-6">
        <div class="box-light-grey row">
            <div class="col-sm-6" style="display: flex; justify-content: center;">
                <?php if($doctor->image): ?>
                    <img src="<?php echo e(asset('public/upload/doctor/'.$doctor->image)); ?>" alt="<?php echo e($doctor->name); ?>" class="img-thumbnail" />
                                    
                <?php else: ?>
                    <img class="img-thumbnail" src="<?php echo e(asset('public/upload/profile/profile.png')); ?>"
                        alt="<?php echo e($doctor->name); ?>" style="width: 200px; height:200px;">
                <?php endif; ?>
            </div>
            <div class="col-sm-6">
                <h4 style="font-weight: 700;"> <?php echo e($doctor->name); ?></h4>
                <i class="fa fa-play"></i> <?php echo e($doctor->department->name); ?> <br/>
                <i class="fa fa-play"></i> Experience: <?php echo e($doctor->experience); ?>  <br/>
            </div>
        </div>

    </div>
     
    

    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-6">
                <h5 style="font-weight: 700;">Description</h5>
                 <?php echo e($doctor->about_us); ?>

            </div>
            <div class="col-sm-6">
                <h5 style="font-weight: 700;">Consultation Fee</h5>
                <?php echo e($doctor->appointment_fee); ?>

            </div>
        </div>

    </div>

</div><?php /**PATH /home2/sathiservice/public_html/resources/views/front/ajaxpages/doctor_detail.blade.php ENDPATH**/ ?>