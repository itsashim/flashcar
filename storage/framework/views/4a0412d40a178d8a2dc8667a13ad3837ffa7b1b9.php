<?php $__env->startSection('title'); ?>
Create Hospital
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/select2/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/summernote/summernote.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Create Hospital</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/city')); ?>"><?php echo e(__('messages.Cities')); ?></a></li>
               <li class="active">Add Hospital</li>
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
                        <form action="<?php echo e(route('hospital.store')); ?>" method="POST" enctype="multipart/form-data">
                           <?php echo csrf_field(); ?>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Logo</label>
                                    <input type="file" name="logo" placeholder="Select Logo" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Hospital Name" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="subtitle">Sub Title</label>
                                    <input class="form-control" type="text" name="sub_title" placeholder="Enter Sub Title" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="appointment_fee">Appointment Fee</label>
                                    <input class="form-control" type="number" name="appointment_fee" placeholder="Enter Appointment Fee" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">City</label>
                                    <select name="city_id" class="form-control" required>
                                       <option disabled>Select City</option>
                                       <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="facebook_url">Facebook</label>
                                    <input type="text" name="facebook_url" class="form-control" placeholder="Enter Facebook url" />
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="twitter_url">Twitter</label>
                                    <input type="text" name="twitter_url" class="form-control" placeholder="Enter Twitter url" />
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="instagram_url">Instagram</label>
                                    <input type="text" name="instagram_url" class="form-control" placeholder="Enter Instagram url" />
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="linkedin_url">LinkedIn</label>
                                    <input type="text" name="linkedin_url" class="form-control" placeholder="Enter LinkedIn url" />
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="department">Select Department</label>
                                    <select name="department_ids[]" class="form-control select2" multiple required>
                                       <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                 </div>
                              </div>

                              <!--<div class="col-sm-12">-->
                              <!--   <div class="form-group">-->
                              <!--      <label for="department">Select Facility</label>-->
                              <!--      <select name="facility_ids[]" class="form-control select2" multiple required>-->
                              <!--         <?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                              <!--            <option value="<?php echo e($facility->id); ?>"><?php echo e($facility->name); ?></option>-->
                              <!--         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                              <!--      </select>-->
                              <!--   </div>-->
                              <!--</div>-->

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

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Gallery</label>
                                    <input type="file" name="gallery[]" multiple class="form-control">
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Detail</label>
                                    <textarea name="detail" class="form-control summernote" id="" cols="30" rows="10"></textarea>
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                       <option value="Pending">Pending</option>
                                       <option value="Approved">Approved</option>
                                       <option value="Disabled">Disabled</option>
                                    </select>
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
<script src="<?php echo e(asset('public/select2/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/summernote/summernote.min.js')); ?>"></script>
<script>
   $('.select2').select2({
      "tags":true,
   });

   $('.summernote').summernote();

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/admin/hospital/create.blade.php ENDPATH**/ ?>