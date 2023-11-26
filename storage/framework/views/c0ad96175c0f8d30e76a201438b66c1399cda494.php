<?php $__env->startSection('title'); ?>
Applied Seller Details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            
            <h1><?php echo e($title); ?> </h1>
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
                  <?php if($errors->any()): ?>
                  <div class="alert alert-danger">
                     <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </div>
                  <?php endif; ?>  

                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Image</label>
                                     <img src="<?php echo e(asset('public'.$appliedSeller->image_path)); ?>" height="200px" /> 
                                     
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <span><?php echo e($appliedSeller->name); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Phone</label>
                                    <span><?php echo e($appliedSeller->phone); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Address</label>
                                    <span><?php echo e($appliedSeller->address); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Email</label>
                                    <span><?php echo e($appliedSeller->email); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Email Verified</label>
                                    <span>
                                       <?php if($appliedSeller->email_verified==1): ?>
                                       Yes
                                       <?php else: ?>
                                       No
                                       <?php endif; ?>
                                    </span>
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <button class="btn btn-primary approvenow" data-id="<?php echo e($appliedSeller->id); ?>">Approve Now</button>
                                 <button class="btn btn-danger rejectnow" data-id="<?php echo e($appliedSeller->id); ?>">Reject Now</button>
                              </div>
                              
                           </div>
                           
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
<script>
   $(function(){

      $(document).on('click','.approvenow',function(){
        let id = $(this).data('id');
        let url = "<?php echo e(asset('admin/applied-sellers/approve-now')); ?>";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id":id,
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                   alert(data.message);
                   window.location.href = "<?php echo e(asset('admin/applied-seller')); ?>";
                }else{
                  alert(data.message);
                   console.log('error');
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });

    $(document).on('click','.rejectnow',function(){
        let id = $(this).data('id');
        let url = "<?php echo e(asset('admin/applied-sellers/reject-now')); ?>";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id":id,
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                   alert(data.message);
                   window.location.href = "<?php echo e(asset('admin/applied-seller')); ?>";
                }else{
                  alert(data.message);
                   console.log('error');
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });

   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/admin/applied-seller/show.blade.php ENDPATH**/ ?>