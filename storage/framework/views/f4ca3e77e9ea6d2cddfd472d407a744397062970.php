<?php $__env->startSection('title'); ?>
    Medical Appliances
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .text-black {
            color:#000 !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pb-4 aos-init aos-animate" data-aos="zoom-in">
                    <hr>
                    <h4><b>Pharmaceutical Drug, Medicine, Medical Care &amp; Consultation</b></h4>
                    <br>
                    <div class="row">
                        
                        <div class="col-md-6 col-lg-3 col-12 aos-init" data-aos="zoom-in">

                            <div style="background-image: url('<?php echo e(url('public/front/ld.PNG')); ?>'); background-position: center center;background-size: cover;background-repeat: no-repeat;"
                                data-aos="zoom-in" class="aos-init">
                                <div style="    padding: 230px 24px 20px;background: linear-gradient(0deg, rgba(0,0,0,1) 1%, rgba(8,7,104,0) 100%);"
                                    data-aos="zoom-in" class="aos-init">
                                    <h5 class="text-white font-weight-bold mb-5">Medicine Appliances</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12 aos-init" data-aos="zoom-in">
                            <div class="row mr-1 ml-1">
                                
                                <?php $__currentLoopData = $medicalAppliancesSubCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="col-lg-4 col-12 p-1 aos-init" data-aos="zoom-in">
                                    <div class="p-2" style=" border: 1px solid #d7d5d5;    height: 194px;">
                                        <div class="row">
                                            <div class="col-4 p-1 text-center aos-init" data-aos="zoom-in">
                                                <a class="text-black" href="<?php echo e(asset('sub-categories/'.$subCategory->slug)); ?>">
                                                    <img src="<?php echo e(asset('public'.$subCategory->image)); ?>"
                                                        width="70%" style="border-radius:10px; margin-top: 20%;">
                                                </a>
                                            </div>
                                            
                                            <div class="col-8 p-0 aos-init" data-aos="zoom-in">
                                                <a class="text-black" href="<?php echo e(asset('sub-categories/'.$subCategory->slug)); ?>">
                                                    <p class="m-0" style="font-size:14px;"><b><?php echo e($subCategory->name); ?></b></p>
                                                </a>
                                                <?php $__currentLoopData = $subCategory->product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a class="text-black" href="<?php echo e(asset('product_details/'.$product->slug)); ?>">
                                                    <p class="m-0" style="font-size:12px;"><?php echo e($product->name); ?></p>
                                                </a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/front/medical-appliances.blade.php ENDPATH**/ ?>