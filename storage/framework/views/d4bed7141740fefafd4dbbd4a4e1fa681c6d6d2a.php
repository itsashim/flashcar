<?php $__env->startSection('title'); ?>
<?php echo e(__('Customer')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('Customer')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('Customer')); ?></li>
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
                  <div>
                     <a href="<?php echo e(url('admin/customer/create')); ?>" class="btn btn-primary"><?php echo e(__('messages.Add').' Customer'); ?></a>
                  </div>
                  <div class="table-responsive">
                    <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('Image')); ?></th>
                           <th><?php echo e(__('messages.Name')); ?></th>
                           <th><?php echo e(__('messages.Email')); ?></th>
                           <th><?php echo e(__('Phone')); ?></th>
                           <th><?php echo e(__('Address')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(count($data)>0): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                           <td>
                              <?php if($d->profile_pic): ?>
                              <img src="<?php echo e(asset('public/'.$d->profile_pic)); ?>" height="200px" />
                              <?php else: ?>
                              <img style="height: 200px;width:200px;" src="<?php echo e(asset('public/upload/profile/profile_243682.png')); ?>" alt="" />
                              <?php endif; ?>
                           </td>
                           <td><?php echo e($d->name); ?></td>
                           <td><?php echo e($d->email); ?></td>
                           <td><?php echo e($d->phone_no); ?></td>
                           <td><?php echo e($d->address); ?></td>
                           <td>
                              <a href="<?php echo e(route('customer.show',[$d->id])); ?>" class="btn btn-success"><?php echo e(__('View')); ?></a>
                              <a href="<?php echo e(route('customer.edit',[$d->id])); ?>" class="btn btn-primary"><?php echo e(__('messages.Edit')); ?></a>
                              <a data-url="<?php echo e(route('customer.destroy',[$d->id])); ?>" data-id="<?php echo e($d->id); ?>" class="btn btn-danger rowDelete"><?php echo e(__('messages.Delete')); ?></a>
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
<div class="modal fade" id="deleteCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <form id="deleteForm" action="#" method="POST">
         <?php echo csrf_field(); ?>
         <?php echo method_field('DELETE'); ?>
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this seller?</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
       </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-success">View</button>
       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-danger">Delete</button>
       </div>
     </div>
      </form>
   </div>
 </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

<script>
   $(function(){

      $(document).on('click','.rowDelete',function(){
         let id = $(this).data('id');
         let url = $(this).data('url');
         $('#deleteCityModal').modal('show');
         $('#deleteForm').attr('action',url);
      });

   });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/customer/index.blade.php ENDPATH**/ ?>