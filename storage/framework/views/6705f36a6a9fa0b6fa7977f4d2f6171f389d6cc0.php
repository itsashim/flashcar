<?php $__env->startSection('title'); ?>
Create Seller
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Create Seller</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/seller')); ?>"><?php echo e(__('Seller')); ?></a></li>
               <li class="active">Add Seller</li>
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
                        <form action="<?php echo e(route('seller.store')); ?>" method="POST" enctype="multipart/form-data">
                           <?php echo csrf_field(); ?>
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
                                    <input class="form-control" type="text" name="name" placeholder="Enter Seller Name" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Phone</label>
                                    <input class="form-control" type="text" name="phone" placeholder="Enter Phone Number">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Address</label>
                                    <input class="form-control" type="text" name="address" placeholder="Enter Address">
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Cities</label>
                                    <select class="form-control select2" name="city_ids[]" multiple>
                                        <option value="">Select City</option>
                                        <?php $__currentLoopData = \App\City::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
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
<?php $__env->startSection('footer'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.select2').select2({
        "tags":true,
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/seller/create.blade.php ENDPATH**/ ?>