<?php $__env->startSection('title'); ?>
<?php echo e(__('Prescriptions')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('Prescriptions')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('Prescriptions')); ?></li>
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
                     
                  </div>
                  <div class="table-responsive">
                    <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('messages.Name')); ?></th>
                           <th><?php echo e(__('Mobile')); ?></th>
                           <th><?php echo e(__('Delivery Address')); ?></th>
                           <th><?php echo e(__('Document')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                           <th><?php echo e(__('Date')); ?></th>
                           <th><?php echo e(__('Time')); ?></th>   
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(count($prescriptions)>0): ?>
                        <?php $__currentLoopData = $prescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                           <td><?php echo e($d->name); ?></td>
                           <td><?php echo e($d->mobile); ?></td>
                           <td><?php echo e($d->delivery_address); ?></td>
                           <td>
                              <a href="<?php echo e(asset('public'.$d->path)); ?>"> View/Download File</a>
                           </td>
                           <td>
                              <div class="btn-group" role="group">
                                 <a class="btn btn-sm btn-success" href="<?php echo e(url('admin/prescription/'.$d->id)); ?>">
                                    <i class="fa fa-eye"></i>
                                 </a>
                                 <button data-id="<?php echo e($d->id); ?>" class="btn btn-sm btn-danger rowDelete">
                                    <i class="fa fa-trash text-white"></i>
                                 </button>

                              </div>
                           </td>
                           <td> <?php echo e($d->created_at->toDateString()); ?> <?php echo e($d->created_at->diffforhumans()); ?></td>
                           <td><?php echo e($d->created_at->toTimeString()); ?></td>
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
      <form id="deleteForm" action="<?php echo e(asset('admin/prescription/delete')); ?>" method="POST">
         <?php echo csrf_field(); ?>
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this prescription?</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <input type="text" name="id" id="prescriptionID"  style="display: none;"/>
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
         let url = $(this).data('action');
         $('#deleteCityModal').modal('show');
         $('#prescriptionID').val(id);
         $('#deleteForm').attr('action',url);
      });

   });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/prescription/index.blade.php ENDPATH**/ ?>