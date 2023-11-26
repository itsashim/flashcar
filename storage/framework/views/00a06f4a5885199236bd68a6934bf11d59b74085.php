<?php $__env->startSection('title'); ?>
Edit Bike Model
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Edit Bike Model</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/sub-category')); ?>"><?php echo e(__('Bike Model')); ?></a></li>
               <li class="active">Edit Bike Model</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row rowcenter">
         <div class="col-md-10">
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
                  <?php if($errors->any()): ?>
                  <div class="alert alert-danger">
                     <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </div>
                  <?php endif; ?>  
                        <form action="<?php echo e(route('bikemodel.update',[$bikemodel->id])); ?>" method="POST" enctype="multipart/form-data">
                           <?php echo csrf_field(); ?>
                           <?php echo method_field('PUT'); ?>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Bike Model Name" value="<?php echo e($bikemodel->name); ?>">
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Bike Brand</label>
                                    <select name="bikebrand_id" id="" class="form-control">
                                       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <option value="<?php echo e($category->id); ?>" <?php if($category->id == $bikemodel->category_id): ?> selected <?php endif; ?>>
                                               <?php echo e($category->name); ?>

                                           </option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>                                   
                                    
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <img src="<?php echo e(asset('public'.$bikemodel->logo_path)); ?>">
                                    <label for="name">Image</label>
                                    <input type="file" name="logo_path" placeholder="Enter Image" class="form-control">
                                 </div>
                              </div>

                              <button class="btn btn-primary">Save</button>
                              
                           </div>
                           
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/admin/bike_model/edit.blade.php ENDPATH**/ ?>