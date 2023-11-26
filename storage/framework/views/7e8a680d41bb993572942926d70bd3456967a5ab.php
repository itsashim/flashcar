<?php $__env->startSection('title', 'Department List'); ?>
<?php $__env->startSection('content'); ?>

    <!-- start -->
    <div class="container" style="margin-top: 4rem;margin-bottom: 4rem" >
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                
            </div>
            
        </div>
        <div class="row">
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="doctor-card col-lg-3 col-md-4 col-sm-6" style="margin: 0 0 2rem 0">

                    <div class=" shadow px-3 pb-5 mb-2" style="text-align: center;border-radius: 12px">
                        <a href="<?php echo e(url('departmentlist?department_id=').$department->id); ?>">
                            <?php if($department->image): ?>
                                <img src="<?php echo e(asset('public/upload/department/'.$department->image)); ?>" class="mt-4 rounded" style="width: 175px; height: 135px;" alt="img" />
                            <?php else: ?>
                                <img src="<?php echo e(asset('public/upload/department/'.$department->image)); ?>" class="mt-4 rounded" style="width: 175px; height: 135px;" alt="img" />
                            <?php endif; ?>
                        </a>
                        <a class="mt-3" href="<?php echo e(url('departmentlist?department_id=').$department->id); ?>" style="text-decoration:none;">
                        <p class="text-center text-capitalize mb-2 mt-3" style="font-size: 1.8rem;line-height: 1.2; font-weight: 500;color: #00a042">
                            <?php echo e($department->name); ?>

                        </p>
                       </a>
                       
                       <a href="<?php echo e(url('departmentlist?department_id=').$department->id); ?>" style="text-decoration:none;">
                        <p style="font-size: 16px;color: #862b2b;color: #555;margin-bottom: 0 !important"><?php echo e(substr($department->description,0,70)); ?></p>
                        </a>
                        <!--<a style="width:80%;" href="<?php echo e(url('find-doctor?department_id='.$department->id)); ?>" class="btn text-light bg-lightgreen  text-uppercase rounded-3">-->
                        <!--    View Doctors-->
                        <!--</a>-->
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
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/wheelonpalms.shahbazali.website/resources/views/front/pages/departmentlist.blade.php ENDPATH**/ ?>