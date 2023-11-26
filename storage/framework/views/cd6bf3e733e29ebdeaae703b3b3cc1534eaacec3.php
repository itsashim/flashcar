
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Payment Gateway')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Payment Gateway')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.Payment Gateway')); ?></li>
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
                           <th><?php echo e(__('messages.Image')); ?></th>
                           <th><?php echo e(__('messages.mode')); ?></th>
                           <th><?php echo e(__('messages.Status')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(count($data)>0): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($d->id); ?></td>
                           <td><?php echo e($d->gateway_name); ?></td>
                           <td><img src="<?php echo e(asset('public/upload/payment/').'/'.$d->Image); ?>" class="departmentimg"/></td>
                           <td><?php echo e($d->mode); ?></td>
                           <td>
                               <?php if($d->is_active=='1'): ?>
                                 <?php echo e(__('messages.active')); ?>

                              <?php else: ?>
                                  <?php echo e(__('messages.deactive')); ?>

                              <?php endif; ?>
                           </td>
                           <td>
                                 <a href="<?php echo e(url('admin/editpaymentgateway/').'/'.$d->id); ?>" class="btn btn-primary"><?php echo e(__('messages.Edit')); ?></a>
                                 <?php if($d->is_active&&$d->is_active=='1'): ?>
                                    <a href="<?php echo e(url('admin/changestatuspayment/').'/'.$d->id.'/0'); ?>" class="btn btn-primary"><?php echo e(__('messages.Enable')); ?></a>
                                 <?php else: ?>
                                   <a href="<?php echo e(url('admin/changestatuspayment/').'/'.$d->id.'/1'); ?>" class="btn btn-secondary"><?php echo e(__('messages.Disable')); ?></a>
                                 <?php endif; ?>
                           </td>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/paymentgateway/default.blade.php ENDPATH**/ ?>