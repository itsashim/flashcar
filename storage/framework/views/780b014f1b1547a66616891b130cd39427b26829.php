<?php $__env->startSection('title'); ?>
<?php echo e(__('Top adds')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Adds</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">Manage Adds</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <?php if(Session::get("adds")): ?>
   <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
      <?php echo e(Session::get("adds")); ?>

      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
   </div>
   <?php endif; ?>
   <?php if($errors->any()): ?>
   <div class="alert alert-danger">
      <ul>
         <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li><?php echo e($error); ?></li>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
   </div>
   <?php endif; ?> 
   <form method="POST" action="<?php echo e(route('topadds.store')); ?>" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="animated fadeIn">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-body">
                     <h4 class="card-title">Top Adds Title</h4> 
                        <textarea name="name" id="name" class="w-100"> <?php echo e($topadds -> name); ?> </textarea>
                  </div>
                  <div class="card-body">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
               </div>
            </div>
            
         </div>
      </div>
   </form>
</div>
<div class="modal fade" id="deleteCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <form id="deleteForm" action="#" method="POST">
         <?php echo csrf_field(); ?>
         <?php echo method_field('DELETE'); ?>
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this city?</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/admin/topadds/index.blade.php ENDPATH**/ ?>