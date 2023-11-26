<?php $__env->startSection('title'); ?>
 <?php echo e(__('Blog Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   
   
   
     <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <img class="card-img"
                        src="<?php echo e(asset('public/'.$blog->image)); ?>"
                        alt="" style="height: 400px;">
                    <div class="card-body">
                        
                        <h3 class="mt-5 font-weight-bold"><?php echo e($blog->title); ?></h3>
                        <p class="mt-2">
                            <?php echo $blog->description; ?>

                        </p>
                        <div>
                            <a class="text-decoration-none text-dark" href="#"><i class="fa-regular fa-clock h6"></i>
                            <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('Y-m-d h:m:s')); ?>

                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






   

   
   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/blog_detail.blade.php ENDPATH**/ ?>