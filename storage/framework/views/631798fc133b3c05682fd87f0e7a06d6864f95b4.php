<?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a class="nav-link <?php if($notification->status==0): ?> notify-red <?php else: ?> notify-green <?php endif; ?>" href="<?php echo e(url('admin/quick-notification/show/'.$notification->id)); ?>" >
        <?php echo e($notification->title); ?><br/>
        <?php echo e($notification->detail); ?> 
        <span class="float-right">
            <?php echo e(\Carbon\Carbon::parse($notification->created_at)->diffForHumans()); ?>

        </span>
    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<a class="nav-link text-center" href="<?php echo e(url('admin/quick-notification')); ?>">
    <u>View All</u>
</a><?php /**PATH /home/shahbazali.website/rental.shahbazali.website/resources/views/admin/dashboardajax.blade.php ENDPATH**/ ?>