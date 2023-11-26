<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.My Account')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<style>
    .tab-appointment-box {
        background-color: #b8ffc491 !important;
    }
    .tab-appointment-detail-box h4{
        color: green;
        padding: 14px;
    }

    .tab-appointment-time-box{
        padding: 10px;
    }
    .tab-appointment-calendar-box{
        padding: 10px;
    }

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<?php echo $__env->make('front.members.membernav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
            <div class="card-body">
                <div class="row">
                <?php if(count($subscriptions) > 0): ?>
                    <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-2 ">
                        <div class="tab-appointment-box" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" style="border-radius: 20px;">
                            <div class="tab-appointment-detail-box tab-subcription-detail-box">
                                <h4><?php echo e(isset($s->packagedata) ? $s->packagedata->name : ''); ?></h4>
                                <?php if($s->status == '1'): ?>
                                    <!--<a href="<?php echo e(asset('subscription/'.$s->package_id)); ?>" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Receive')); ?></a>-->
                                        
                                    <a href="javascript:void(0)" style=";float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Receive')); ?></a>
                                        
                                <?php elseif($s->status == '2'): ?>
                                    <!--<a href="<?php echo e(asset('subscription/'.$s->package_id)); ?>" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Accept')); ?></a>-->
                                        
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Accept')); ?></a>
                                <?php elseif($s->status == '3'): ?>
                                    <!--<a href="<?php echo e(asset('subscription/'.$s->package_id)); ?>" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Cancel')); ?></a>-->
                                        
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Cancel')); ?></a>
                                <?php elseif($s->status == '4'): ?>
                                    <!--<a href="<?php echo e(asset('subscription/'.$s->package_id)); ?>" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.In progress')); ?></a>-->
                                        
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.In progress')); ?></a>
                                <?php elseif($s->status == '5'): ?>
                                    <a href="<?php echo e(asset('subscription/'.$s->package_id)); ?>" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Complete')); ?></a>
                                    
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Complete')); ?></a>
                                <?php else: ?>
                                    <!--<a href="<?php echo e(asset('subscription/'.$s->package_id)); ?>" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Refund')); ?></a>-->
                                        
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 45px;" class="badge badge-success"><?php echo e(__('messages.Refund')); ?></a>
                                <?php endif; ?>
                                
                                
                                <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo e($s->id); ?>" style="position:absolute; float:right; top:100px; right:50px;cursor:pointer" title="click to see details">
                                   <div class="col-sm">
                                    <i class="fa fa-eye"></i>
                                </div>
                                
                                <div class="modal fade" id="exampleModal-<?php echo e($s->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo e(isset($s->packagedata) ? $s->packagedata->name : ''); ?></h1>
                                        <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                      </div>
                                      <div class="modal-body">
                                             <?php echo e($s->packagedata->description); ?>

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                            </div>
                            </div>
                            
                            <div class="tab-timingd-box tab-timingd2-box">
                                <div class="tab-appointment-time-box">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo e($s->time); ?></span>
                                </div>
                                <div class="tab-appointment-calendar-box">
                                    <i class="far fa-calendar-alt"></i>
                                    <span><?php echo e($s->date); ?></span>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php echo e(__('messages.No Subscription History avilable ')); ?>

                <?php endif; ?>

            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/front/members/subscription.blade.php ENDPATH**/ ?>