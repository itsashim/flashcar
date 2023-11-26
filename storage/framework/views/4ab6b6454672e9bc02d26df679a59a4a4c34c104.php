<?php $__env->startSection('title'); ?>
 <?php echo e(__("messages.Privacy Policy")); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="departmentpg-main-box">
		<div class="container" style="margin-top: 3rem; margin-bottom: 3rem;max-width: 75ch;width: 80%;line-height: 1.5">
			<div class="global-heading">
				<h2><?php echo e(__("messages.Privacy Policy")); ?></h2>
				<p><?php echo e(__("messages.People should think things out fresh and not just accept conventional terms and the conventional way of doing things")); ?></p>
			</div>
			<div class="department-part-main-box">
				<div class="row termsmar" style="color: #555">
					<?=html_entity_decode($setting->privacy_policy)?>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/front/privacypolicy.blade.php ENDPATH**/ ?>