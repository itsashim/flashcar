<?php $__env->startSection('title'); ?>
Update Seller
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Update Seller</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/seller')); ?>"><?php echo e(__('Seller')); ?></a></li>
               <li class="active">Update Seller</li>
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
                        <form action="<?php echo e(route('customer.update',[$customer->id])); ?>" method="POST" enctype="multipart/form-data">
                           <?php echo csrf_field(); ?>
                           <?php echo method_field('PUT'); ?>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Image</label>
                                    <input type="file" name="image_path" placeholder="Select Image" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Seller Name" value="<?php echo e($customer->name); ?>" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Phone</label>
                                    <input class="form-control" type="text" name="phone" placeholder="Enter Phone Number" value="<?php echo e($customer->phone); ?>">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Address</label>
                                    <input class="form-control" type="text" name="address" placeholder="Enter Address" value="<?php echo e($customer->address); ?>">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="Enter Email" value="<?php echo e($customer->email); ?>" required>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <button class="btn btn-primary">Save</button>
                              </div>
                              
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/customer/edit.blade.php ENDPATH**/ ?>