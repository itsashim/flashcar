<?php $__env->startSection('title', 'Bike Models'); ?>
<?php $__env->startSection('styles'); ?>
    <style>
        .card {
            box-sizing: border-box;
            margin: 0.5rem auto;
            box-shadow: 1px 3px 4px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.5s ease-in-out;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .card img {
            /* height: 15rem; */
            width: 100%;
            object-fit: contain;
            border-radius: 6px 6px 0 0;
        }

        .card {
            background-color: rgb(245, 250, 250);
            /* padding: 0.3rem 2rem 1rem 2rem; */
            padding: 0.5rem ;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- start -->
    <div class="container my-5">
        <div class="row text-center">
            <?php $__currentLoopData = $bikemodels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bikemodel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <a class="our_service mx-auto d-block" href="<?php echo e(route('productModal-list', ['id' => $bikemodel->id])); ?>">

                            <img src="<?php echo e(asset('public/' . $bikemodel->logo_path)); ?>" alt="<?php echo e($bikemodel->name); ?>"
                                style="height: 115px;" />
                           
                        </a>
                      
                        <div class="content">
                            <h6 class="mt-1 font-weight-bold"><?php echo e($bikemodel->name); ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!-- end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/rental.shahbazali.website/resources/views/front/pages/bike_models.blade.php ENDPATH**/ ?>