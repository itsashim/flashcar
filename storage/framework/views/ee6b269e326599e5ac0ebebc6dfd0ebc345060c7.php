<?php $__env->startSection('title'); ?>
Applied Bluebook Details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
   .mr-10 {
      margin-right: 10px;
   }

   .form-group {
      background: aliceblue;
      border-radius: 10px;
      padding: 0.5rem 0.75rem;
   }
</style>

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

                           <div class="row align-items-center ">
                              

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Name:</label> <br>
                                    <span><?php echo e($appliedSeller->name); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Phone:</label> <br>
                                    <span><?php echo e($appliedSeller->phone); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Pickup Address:</label> <br>
                                    <span><?php echo e($appliedSeller->pickup_address); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Type:</label> <br>
                                    <span><?php echo e($appliedSeller->vehicle_type); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Name:</label> <br>
                                    <span><?php echo e($appliedSeller->vehicle_name); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Registration No.:</label> <br>
                                    <span><?php echo e($appliedSeller->vehicle_reg_no); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Engine:</label> <br>
                                    <span><?php echo e($appliedSeller->vehicle_engine); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Insurance:</label> <br>
                                    <span><?php echo e($appliedSeller->insurance); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Message:</label> <br>
                                    <span><?php echo e($appliedSeller->message); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Bluebook Quantity:</label> <br>
                                    <span><?php echo e($appliedSeller->bluebook_qty); ?></span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Service Charges:</label> <br>
                                    <span><?php echo e($appliedSeller->service_charge); ?></span>
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
        let url = "<?php echo e(route('bluebook.approve-now')); ?>";
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
                   window.location.href = "<?php echo e(asset('admin/bluebook')); ?>";
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
        let url = "<?php echo e(route('bluebook.reject-now')); ?>";
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
                   window.location.href = "<?php echo e(asset('admin/bluebook')); ?>";
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/admin/bluebook/show.blade.php ENDPATH**/ ?>