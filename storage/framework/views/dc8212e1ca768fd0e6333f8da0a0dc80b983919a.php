<?php $__env->startSection('title'); ?>
 Medical Appliances
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<style>
.container_privacy{
	width: 80%;
	max-width: 92ch;
	margin: 4rem auto;
	line-height: 1.7;
}
.global-heading h2{
	margin-bottom: 3rem;
}
.global-heading p{
	font-family: unset !important;
}

.head_p{
	font-family: font-family: "REM", sans-serif !important;
	font-size: 18px !important;
	text-align: left;
	margin: 0 !important;

}
.department-part-main-box{
	margin-top: 1.4rem;
}

</style>

   <div class="departmentpg-main-box">
		<div class="container_privacy">
			<div class="global-heading">
				<h2><?php echo e(__('messages.Terms & Condition')); ?></h2>
				<p class="head_p"><?php echo e(__("messages.People should think things out fresh and not just accept conventional terms and the conventional way of doing things")); ?></p>
			</div>
			<div class="department-part-main-box">
				<div class="row termsmar" style="color: #555">
					<?=html_entity_decode($setting->terms_condition)?>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/termcondition.blade.php ENDPATH**/ ?>