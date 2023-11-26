
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Department Service')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Department Service')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/department')); ?>"><?php echo e(__('messages.Department')); ?></a></li>
               <li class="active"><?php echo e(__('messages.Department Service')); ?></li>
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
                           <th><?php echo e(__('messages.Price For')); ?></th>
                           <th><?php echo e(__('messages.Price')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($d->id); ?></td>
                           <td><?php echo e($d->name); ?></td>
                           <td>
                              <?php if($d->price_for=='1'): ?>
                              <?php echo e(__('messages.Investigations')); ?>

                              <?php else: ?>
                              <?php echo e(__('messages.Treatments')); ?>

                              <?php endif; ?>
                           </td>
                           <td><?php echo e($d->price); ?></td>
                           <td>
                              <a href="<?php echo e(url('admin/savedepartmentservice/').'/'.$d->department_id.'/'.$d->id); ?>" class="btn btn-primary"><?php echo e(__('messages.Edit')); ?></a>
                              <a href="javascript:deleterow('deletedepartmentservice','<?= $d->id ?>')" class="btn btn-danger"><?php echo e(__('messages.Delete')); ?></a>
                           </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/department/saveservice.blade.php ENDPATH**/ ?>