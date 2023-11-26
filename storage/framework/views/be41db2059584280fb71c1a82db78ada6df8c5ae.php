<?php $__env->startSection('title'); ?>

<?php echo e(__('messages.Department Details')); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>

	.global-heading p {
		font-size: 20px;
		color: #767676;
		margin-bottom: 0;
		margin: 25px auto 0;
		font-family: 'AvenirLTStd-Book';
		margin-bottom: 15px;
	}
	.d-detailpg-part-main-box {
		margin-top: 30px;
	}
	.d-detail-main-box {
		margin: 30px 0px;
	}
	.global-part-heading {
		text-align: left;
	}
	.global-heading h3 {
		display: inline-block;
		position: relative;
		color: black;
		font-size: 25px;
		font-weight: bold;
	}
	.global-heading h3:after {
		content: '';
		width: 68px;
		height: 8px;
		position: absolute;
		left: 0;
		background-color: #00be9c !important;
		bottom: 0;
		top: 35px;
	}
	.pricelist-part-main-box {
		margin-top: 50px;
		margin-bottom: 30px;
	}
	.d-detail-emergency-mainbox {
		background-color: #ededc2 !important;
	}
	@media (max-width: 991px){
		.d-detail-emergency-mainbox {
			text-align: center;
			padding: 30px;
			background-color: #fffce7;
			border-radius: 10px;
			margin-bottom: 30px;
			margin: 20px auto;
		}
	}

	.d-detail-emergency-mainbox {
		text-align: center;
		padding: 30px;
		background-color: #fffce7;
		border-radius: 10px;
		margin-bottom: 30px;
	}

	.d-detail-emergency-mainbox img {
		width: 50px;
		height: auto;
	}

	.d-detail-emergency-mainbox p {
		color: #00be9c !important;
	}

	.d-detail-emergency-mainbox p {
		margin: 30px 0px 10px;
		font-size: 17px;
		color: #e7d046;
		font-weight: bold;
	}

	.d-detail-emergency-mainbox h4 {
		margin-top: 0px;
		font-size: 17px;
		color: black;
		font-family: 'AvenirLTStd-Book';
	}

	@media (max-width: 991px){
		.d-detail-collapse-doctor {
			margin: 0 auto;
		}
	}

	.d-detail-collapse-doctor {
		margin-top: 50px;
	}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $res_curr=explode("-",$setting->currency);?>

  <div class="d-detailpg-main-box">

		<div class="container">

			<div class="global-heading">

				<h2 style="border-bottom: 2px solid #00be9c;"><?php echo e($departmentdetails->name); ?></h2>

				<p><?php echo e(__('messages.The life so short, the craft so long to learn')); ?></p>

			</div>

			<div class="d-detailpg-part-main-box">

				<div class="row">

					<div class="col-lg-9 col-md-12">

						

						<div class="d-detail-main-box">

							<div class="global-part-heading global-heading">

								<h3><?php echo e(__('messages.About Department')); ?></h3>

								<p><?php echo e($departmentdetails->description); ?></p>

							</div>

						</div>

						<div class="d-pricelist-main-box">

							<div class="global-part-heading global-heading">

								<h3><?php echo e(__('messages.Price list')); ?></h3>

							</div>

							<div class="pricelist-part-main-box">

								<div class="row">

									<div class="col-lg-6 col-md-6">

										<div class="pricelist-treatment-main-box">

											<div class="pricelist-part-img-mainbox">

												<div class="pricelist-part-img-box">

													<img src="<?php echo e(asset('public/front/img/treatment.png')); ?>">

												</div>

												<span><?php echo e(__('messages.Treatments')); ?></span>

											</div>

											<div class="pricelist-part-detail-mainbox">

												<?php if($departmentdetails->service): ?>

												<?php $__currentLoopData = $departmentdetails->service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												   <?php if($s->price_for=='2'): ?>

												       <div class="pricelist-part-detail-box">

															<p><?php echo e($s->name); ?></p>

															

															<span>- <?php echo e($res_curr[1].$s->price); ?></span>

													    </div>

												   <?php endif; ?>	

												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

												<?php endif; ?>

											</div>

										</div>

									</div>

									<div class="col-lg-6 col-md-6">

										<div class="pricelist-investigation-main-box">

											<div class="pricelist-part-img-mainbox">

												<div class="pricelist-part-img-box">

													<img src="<?php echo e(asset('public/front/img/investigation.png')); ?>">

												</div>

												<span><?php echo e(__('messages.Investigations')); ?></span>

											</div>

											<div class="pricelist-part-detail-mainbox">

												<?php if($departmentdetails->service): ?>

												<?php $__currentLoopData = $departmentdetails->service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												   <?php if($s->price_for=='1'): ?>

												<div class="pricelist-part-detail-box">

													<p><?php echo e($s->name); ?></p>

															<span>- <?php echo e($res_curr[1].$s->price); ?></span>

												</div>

												  <?php endif; ?>	

												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

												<?php endif; ?>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="col-lg-3 col-md-12">

						<div class="d-detail-emergency-mainbox">

							<img src="<?php echo e(asset('public/front/img/emergency.png')); ?>">

							<p><?php echo e(__('messages.Emergency Number')); ?></p>

							<h4><?php echo e($departmentdetails->emergency_no); ?></h4>

						</div>

						<div class="d-detail-collapse-doctor">

							<div class="accordion indicator-plus-before round-indicator" id="accordionH" aria-multiselectable="true">

								<div class="card m-b-0">

									<?php if($departmentdetails->doctor): ?>

									   <?php $i=0; ?>

									    

										<?php $__currentLoopData = $departmentdetails->doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

											<div class="card-header collapsed" role="tab" id="heading<?php echo e($i); ?>" href="#collapse<?php echo e($i); ?>"  data-parent="#accordion<?php echo e($i); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($i); ?>" onclick="changedoctorblog('<?php echo e($i); ?>')">

												<a class="card-title">

													<?php echo e(ucwords(strtolower($doc->name))); ?>


												</a>

											</div>

											 <?php if($i==0): ?>

											 <div class="collapse in" id="collapse<?php echo e($i); ?>" role="tabpanel" aria-labelledby="heading<?php echo e($i); ?>" aria-expanded="true" >

									     <?php else: ?>

									     <div class="collapse" id="collapse<?php echo e($i); ?>" role="tabpanel" aria-labelledby="heading<?php echo e($i); ?>" aria-expanded="false" >

									     <?php endif; ?>

											

												<div class="card-body">

													<div class="doctorl-part-box">

														<?php 

					                                             if($doc->image){

					                                             	$image=asset('public/upload/doctor')."/".$doc->image;

					                                             }else{

					                                             	$image=asset('public/upload/profile/profile.png');

					                                             }

														?>

														<div class="doctorl-dp-img doctorl-dp-img-1" style="background-image: url('<?=$image?>')"></div>

														<div class="doctor-detail-part">

															<div class="doctorl-part-detail">

																<h4><?php echo e($doc->name); ?></h4>

																<p class="departdoc"><?php echo e(substr($doc->about_us,0,50)); ?></p>

															</div>

															<div class="icons-images">

																<span class="facebook-doctorl">

																	<a href="<?php echo e(isset($doc->facebook_id)?$doc->facebook_id:''); ?>"><i class="fab fa-facebook-f"></i></a>

																</span>

																<span class="twitter-doctorl">

																	<a href="<?php echo e(isset($doc->twitter_id)?$doc->twitter_id:''); ?>"><i class="fab fa-twitter"></i></a>

																</span>

																<span class="gp-doctorl">

																	<a href="<?php echo e(isset($doc->google_id)?$doc->google_id:''); ?>"><i class="fab fa-google-plus-g"></i></a>

																</span>

																<span class="instagram-doctorl">

																	<a href="<?php echo e(isset($doc->instagram_id)?$doc->instagram_id:''); ?>"><img src="<?php echo e(asset('public/front/img/instagram.png')); ?>"></a>

																</span>

															</div>

														</div>

													</div>

												</div>

											</div>

											<?php $i++;?>

										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									<?php endif; ?>	

									<input type="hidden" id="avilabledoctor" value="<?php echo e($i); ?>">								

								</div>

							</div>

						</div>	

					</div>

				</div>

			</div>

		</div>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/departmentdetails.blade.php ENDPATH**/ ?>