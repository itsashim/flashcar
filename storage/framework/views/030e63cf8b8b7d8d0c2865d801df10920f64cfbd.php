
<?php $__env->startSection('title'); ?>
 <?php echo e(__('messages.Subscription')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?php echo e(__('messages.Subscription')); ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><?php echo e(__('messages.Subscription')); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

       <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">                         
                            <div class="card-body"> 
                            <?php if(Session::get("message")): ?>
                              <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                 <?php echo e(Session::get("message")); ?>

                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                              </div>
                            <?php endif; ?>
                              <div class="table-responsive">
                                   <table id="service" class="table  table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('messages.Id')); ?></th>
                                            <th><?php echo e(__('messages.Name')); ?></th>
                                            <th><?php echo e(__('messages.Package Name')); ?></th>
                                            <th><?php echo e(__('messages.Payment Type')); ?></th>
                                            <th><?php echo e(__('messages.Status')); ?></th>
                                            <th><?php echo e(__('messages.Action')); ?></th>
                                            <th><?php echo e(__('messages.Date')); ?></th>
                                            <th><?php echo e(__('messages.Time')); ?></th>
                                        </tr>
                                    </thead> 
                                    <tbody>  
                                    <?php if(count($data)>0): ?>
                                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                                 <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                                                 <td><?php echo e(isset($d->name)?$d->name:""); ?></td>
                                                 <td><?php echo e(isset($d->packagedata)?$d->packagedata->name:""); ?></td>
                                                 <td><?php echo e(isset($d->paymentdata)?$d->paymentdata->gateway_name:""); ?></td>
                                                 <td>
                                                    <?php if($d->status=='1'): ?>
                                                       <?php echo e(__("messages.Receive")); ?>

                                                    <?php elseif($d->status=='2'): ?>
                                                    <?php echo e(__("messages.Approve")); ?>

                                                    <?php elseif($d->status=='3'): ?>
                                                    <?php echo e(__("messages.Cancel")); ?>

                                                    <?php elseif($d->status=='4'): ?>
                                                    <?php echo e(__('messages.In progress')); ?>

                                                    <?php elseif($d->status=='5'): ?>
                                                    <?php echo e(__('messages.Complete')); ?>

                                                    <?php elseif($d->status=='6'): ?>
                                                    <?php echo e(__('messages.Refund')); ?>

                                                    <?php endif; ?>
                                                 </td>
                                                 <td style="display: flex; gap: 5px; justify-content: center;">
                                                    <?php if($d->status=='1'): ?>
                                                      <a href="<?php echo e(url('admin/changepackagestatus/2').'/'.$d->id); ?>" class="btn btn-primary"><?php echo e(__('messages.Approve')); ?></a>
                                                       <a href="<?php echo e(url('admin/changepackagestatus/3').'/'.$d->id); ?>" class="btn btn-danger"><?php echo e(__('messages.Cancel')); ?></a>
                                                    <?php elseif($d->status=='2'): ?>
                                                        <a href="<?php echo e(url('admin/changepackagestatus/4').'/'.$d->id); ?>" class="btn btn-primary"><?php echo e(__('messages.In progress')); ?></a>
                                                       <a href="<?php echo e(url('admin/changepackagestatus/3').'/'.$d->id); ?>" class="btn btn-danger"><?php echo e(__('messages.Cancel')); ?></a>
                                                    <?php elseif($d->status=='4'): ?>
                                                    <a href="<?php echo e(url('admin/changepackagestatus/5').'/'.$d->id); ?>" class="btn btn-primary"><?php echo e(__('messages.Complete')); ?></a>
                                                     
                                                     <?php elseif($d->status=='5'): ?>
                                                     <a href="#" class="btn btn-primary"><?php echo e(__('messages.Complete')); ?></a>
                                                      <?php elseif($d->status=='3'): ?>
                                                    <a href="<?php echo e(url('admin/changepackagestatus/6').'/'.$d->id); ?>" class="btn btn-primary"><?php echo e(__('messages.Refund')); ?></a>
                                                     
                                                    <?php endif; ?>
                                                 </td>
                                                 <td><?php echo e($d->created_at->todatestring()); ?> <?php echo e($d->created_at->diffforhumans()); ?></td>
                                                 <td><?php echo e($d->created_at->totimestring()); ?></td>
                                            </tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  <?php endif; ?>
                                    </tbody>                                  
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/admin/subscription.blade.php ENDPATH**/ ?>