<?php $__env->startSection('title','Blog List'); ?>
<?php $__env->startSection('content'); ?>
    <!-- start -->
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h2 class="mb-4 mt-4" style="font-weight: 600">Blog List</h2>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                
            </div>
            <div class="col-lg-5 col-md-12 col-sm-6">
                
            </div>
        </div>
        <div class="row" id="hospitallistbox">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="doctor-card col-lg-3 col-md-4 col-sm-6">
                <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
                    <a href="<?php echo e(asset('blogs/'.$blog->slug)); ?>">
                    <?php if($blog->image): ?>
                        <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4" src="<?php echo e(asset('public'.$blog->image)); ?>" alt="">
                    <?php else: ?>
                        <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4" src="<?php echo e(asset('public/images/hospital.png')); ?>" alt="" />
                    <?php endif; ?>
                    </a>
                    
                    <p class="text-center text-capitalize mt-4" style="font-size: 22px;">
                        <?php echo e($blog->title); ?>

                    </p>
                    <p class="text-center text-uppercase text-success" style="font-size: 1rem">
                        <?php echo substr($blog->description, 0, 50); ?>...
                    </p>

                    <a href="<?php echo e(asset('blogs/'.$blog->slug)); ?>" class="btn bg-lightgreen text-light text-uppercase rounded-3">
                        
                    
                        Read More
                    </a>
                </div>
               <?php echo e($blogs->links()); ?>

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
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/rental.shahbazali.website/resources/views/front/pages/bloglist.blade.php ENDPATH**/ ?>