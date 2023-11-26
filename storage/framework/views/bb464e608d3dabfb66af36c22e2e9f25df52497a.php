<?php $__env->startSection('title', 'Department List'); ?>
<?php $__env->startSection('content'); ?>

    <!-- start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <h1 class="mb-4 mt-4" style="font-weight: 600">Department List</h1>
            </div>
            
        </div>
        <div class="row">
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="doctor-card col-lg-3 col-md-4 col-sm-6">

                    <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
                        <a href="<?php echo e(url('find-doctor?department_id=').'/'.$department->id); ?>">
                            <?php if($department->image): ?>
                                <img src="<?php echo e(asset('public/upload/department/'.$department->image)); ?>" class="mt-4" style="width: 100px; height: 100px; border-radius: 50%" alt="img" />
                            <?php else: ?>
                                <img src="<?php echo e(asset('public/upload/department/'.$department->image)); ?>" class="mt-4" style="width: 100px; height: 100px; border-radius: 50%" alt="img" />
                            <?php endif; ?>
                        </a>
                        <p class="text-center text-capitalize mt-4" style="font-size: 2rem">
                            <?php echo e($department->name); ?>

                        </p>
                        <br/>
                        <p style="font-size: 20px;color: #862b2b;word-break: break-all;"><?php echo e(substr($department->description,0,75)); ?></p>
                        <a style="width:80%;" href="<?php echo e(url('find-doctor?department_id='.$department->id)); ?>" class="btn text-light bg-lightgreen  text-uppercase rounded-3">
                            View Doctors
                        </a>
                    </div>
                  
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
          
    </div>
    <!-- end -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $(function(){

        $('#hospitalName').on('keyup',function(){
            let name = $(this).val();
            let url = "<?php echo e(asset('hospitallist/search/view')); ?>";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "name":name,
                },
                beforeSend:function(){
                    console.log('ajax fired');
                },
                success: function (data) {
                    if(data.status==true){
                        $('#hospitallistbox').html(data.data);          
                    }else{
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
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/pages/departmentlist.blade.php ENDPATH**/ ?>