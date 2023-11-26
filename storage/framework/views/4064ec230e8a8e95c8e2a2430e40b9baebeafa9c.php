<?php $__env->startSection('title'); ?>
<?php echo e(__('Quotes')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('Quotes')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('Quotes')); ?></li>
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
                           <th><?php echo e(__('Email')); ?></th>
                           <th><?php echo e(__('Product')); ?></th>
                           <th><?php echo e(__('Message')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(count($quotes)>0): ?>
                           <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                              <td><?php echo e($d->name); ?></td>
                              <td><?php echo e($d->phone); ?></td>
                              <td><?php echo e($d->email); ?></td>
                              <td><?php echo e($d->product->name); ?></td>
                              <td>
                                 
                                 <?php echo e($d->message); ?>

                              </td>
                              <td>
                                 <button data-id="<?php echo e($d->id); ?>" class="btn btn-danger rowDelete">
                                    <i class="fa fa-trash text-white"></i>
                                 </button>
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
      
       <form id="deleteForm"  method="POST">
         <?php echo csrf_field(); ?>
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this quote?</h5>
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
         //let url = $(this).data('action');
         let url = "<?php echo e(route('quote.destroy', ':id')); ?>".replace(':id', id);
         $('#deleteCityModal').modal('show');
         $('#prescriptionID').val(id);
         $('#deleteForm').attr('action',url);
      });

   });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/quotes/index.blade.php ENDPATH**/ ?>