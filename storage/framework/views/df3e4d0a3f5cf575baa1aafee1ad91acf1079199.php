<?php $__env->startSection('title'); ?>
 <?php echo e(__('Blog Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        

<style>
        /*Related Blog */
    
            .blog_blog{
              background-image: url('<?php echo e(asset('public/'.$blog->image)); ?>');
              width: 100%;
              height: 200px;
              background-repeat: no-repeat;
              background-size: cover;
              display: flex;
              align-items: end;
               padding: 3%;
               border-radius: 5px;
          }
            .blog_blog:hover{
              cursor: pointer;
             background-image: linear-gradient(45deg,  rgba(0, 0, 0, 0.264) 70%,  rgba(255, 255, 255, 0.296)) , url('<?php echo e(asset('public/'.$blog->image)); ?>');
          

            }
            .blog_blog a{
              display: none;

            }
            .blog_blog:hover a{
              display: inline !important;
              text-align: left;
              font-size: 22px;
              line-height: 1.3;
            }
            /*Related blog*/
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>




 <div style="margin-top:3rem;margin-bottom: 3rem; padding: 2rem 5%;">
      <div class="row">
        <div class="col-lg-8">
          <div class="card" style="border: none">
            <h3 class="font-weight-bold mb-4" style="font-size: 30px;">
             <?php echo e($blog->title); ?>

            </h3>
            <img
              class="card-img"
              style="border-radius: 10px"
              src=<?php echo e(asset('public/'.$blog->image)); ?>

              alt=""
            />
            <div class="card-body">
              <p class="mt-2">
<?php echo $blog->description; ?>

              </p>
              <div class="d-flex align-items-center">
                <a class="text-decoration-none text-dark" href="#"
                  ><i class="fa-regular fa-clock h6">   <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('Y-m-d h:m:s')); ?></i>
                </a>
                <i class="fa-solid fa-share fa-2x mx-3" style="cursor: pointer"></i>
              </div>
            </div>
          </div>
        </div>
        <aside class="col-lg-4 ">
          <h3 class="mb-3 text-center">Related Blogs</h3>
          <div class="d-flex flex-wrap p-4" style="gap: 5px">
            <div class="blog_blog me-2">
              <a href="#" class="text-white"
                >This is the way. This is the way...</a
              >
            </div>

            <div class="blog_blog me-2">
              <a href="#" class="text-white"
                >This is the way. This is the way...</a
              >
            </div>

            <div class="blog_blog me-2">
              <a href="#" class="text-white"
                >This is the way. This is the way...</a
              >
            </div>
          </div>
        </aside>
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
    <!--FOnt awesome-->
    <script src="https://kit.fontawesome.com/5cfe83b03e.js" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/blog_detail.blade.php ENDPATH**/ ?>