<?php $__env->startSection('title'); ?>
Prescription Details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Prescription Detail</h1>
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
                                 <img src="<?php echo e(asset('public'.$prescription->path)); ?>" height="200px" />
                              </div>
                           </div>
                        </div>
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th><?php echo e($prescription->name); ?></th>
                              </tr>
                              <tr>
                                 <th>Mobile</th>
                                 <th><?php echo e($prescription->mobile); ?></th>
                              </tr>
                              <tr>
                                 <th>Message</th>
                                 <th><?php echo e($prescription->message); ?></th>
                              </tr>
                              <tr>
                                 <th>Delivery Address</th>
                                 <th><?php echo e($prescription->delivery_address); ?></th>
                              </tr>
                              <tr>
                                  <th>Prescribed Date and Time</th>
                                  <th><?php echo e($prescription->created_at); ?> <?php echo e($prescription->created_at->diffforhumans()); ?></th>
                              </tr>
                           </thead>  
                        </table>
                        
                           
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/prescription/show.blade.php ENDPATH**/ ?>