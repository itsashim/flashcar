<div class="row">
<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item col-xm-12 col-sm-6 col-md-4 col-lg-3 mb-3">
        <center>
            <div class="card" >
                <img class="card-img-top" style="height: 200px;" src="<?php echo e(asset('public' . $blog->image)); ?>" alt="Card image cap">
                <div class="card-body">
                    <h5><?php echo e($blog->title); ?></h5>
                    <p class="card-text"><?php echo substr($blog->description, 0, 50); ?>...</p>
                    <p><a href="<?php echo e(asset('blogs/'.$blog->slug)); ?>">Read More <i class="fa fa-hand-o-left " aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
        </center>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxsitesearch/blogs.blade.php ENDPATH**/ ?>