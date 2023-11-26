<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Help Package')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $res_curr = explode('-', $setting->currency); ?>
    <div class="pricing pg-main-box mt-5">
        <div class="container">
            <div class="global-heading">
                <h2><?php echo e(__('Subscription Package')); ?></h2>
                <p><?php echo e(__('messages.The easiest way to keep life on track')); ?></p>
            </div>
            <div class="facility-main-box">

                <div class="pricing-main-box pricing pg-part-main-box">
                    <div class="container">
                        <div class="pricing-part-main-box">
                            <div class="row">
                                <?php $__currentLoopData = $pricing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="pricing-all-content">
                                            <div class="pricing-part-box">
                                                <h3><?php echo e($p->name); ?></h3>
                                                
                                                <div class="pricing-cost">
                                                    <h3><?php echo e($res_curr[1]); ?></h3>
                                                    <span><?php echo e($p->price); ?></span>
                                                    <h6><i>/Session</i></h6>
                                                </div>
                                                <p><?php echo e($p->description); ?></p>
                                            </div>
                                            <div class="pricing-part-btn">
                                                <a class="btn"
                                                    href="<?php echo e(url('subscription') . '/' . $p->id); ?>"><?php echo e(__('messages.Order now')); ?></a>
                                            </div>
                                        </div>
                                        <?php echo e($pricing->links()); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <br />

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/pricing.blade.php ENDPATH**/ ?>