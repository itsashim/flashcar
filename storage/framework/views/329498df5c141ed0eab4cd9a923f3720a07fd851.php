<?php $__env->startSection("title"); ?>
<?php echo e(__("messages.Contact Us")); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("meta_title"); ?>
<meta name="title" content='<?php echo e(__("messages.Contact Us")); ?>'>
<meta name="description" content='<?php echo e(__("messages.Do you have any questions? Please do not hesitate to contact us directly")); ?>'/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>

	<!-- start -->
    <div class="container">
		<div class="row">
		  <div class="col-lg-6 col-md-6 col-sm-12">
			<form action="<?php echo e(url('savecontact')); ?>" method="POST">
			  <?php echo csrf_field(); ?>
			  <div>
				<div class="my-4">
				  <input name="name" type="text" placeholder="Enter Your Full Name" class="py-3 col-lg-12" style="
						border: solid 2px white;
						background-color: #f2f2f2;
						border-radius: 7px;
					  " required />
				</div>
				<div class="my-4">
				  <input name="email" type="email" placeholder="Enter Your Email" class="py-3 col-lg-12" style="
						border: solid 2px white;
						background-color: #f2f2f2;
						border-radius: 7px;
					  " required />
				</div>
				<div class="my-4">
				  <input name="topic" type="text" placeholder="Enter Your Query topic" class="py-3 col-lg-12" style="
						border: solid 2px white;
						background-color: #f2f2f2;
						border-radius: 7px;
					  " required />
				</div>
				<div class="my-4">
				  <input name="phone" type="text" placeholder="Enter Your Number" class="py-3 col-lg-12" style="
						border: solid 2px white;
						background-color: #f2f2f2;
						border-radius: 7px;
					  " required />
				</div>
				<div class="my-4">
				  <textarea name="message" type="text" placeholder="Enter Your Messages" class="py-3 col-lg-12" style="
						border: solid 2px white;
						background-color: #f2f2f2;
						border-radius: 7px;
					  " required></textarea>
				  <div class="my-4">
					<button type="submit" class="py-3 col-lg-12" style="
						  border: solid 2px white;
						  background-color: #00be9c;
						  border-radius: 7px;
						  color: white;
						">Submit </button>
				  </div>
				</div>
			  </div>
			</form>
		  </div>
		  <div class="col-lg-6 col-md-6 col-sm-12">
			<div class="w-full h-full my-4" style="background-color: #00be9c">
			  <div class="flex text-center">
				<img src="https://sansarhealth.com/public/front/img/cphone.png" class="mt-4 p-3" style="
					  border: solid 2px white;
					  background-color: white;
					  border-radius: 50%;
					  font-size: 4rem;
					" />
				<h3 class="text-light text-capitalize mt-3">call now</h3>
				<p class="text-capitalize text-light" style="
					  font-family: 'AvenirLTStd-Book';
					  font-size: 1.2rem;
					  font-weight: 400px;
					">
				  +9779800971310
				</p>
			  </div>
			  <div class="flex text-center">
				<img src="https://sansarhealth.com/public/front/img/cmail.png" class="mt-4 p-3" style="
					  border: solid 2px white;
					  background-color: white;
					  border-radius: 50%;
					  font-size: 4rem;
					" />
				<h3 class="text-light text-capitalize mt-3">email address</h3>
				<p class="text-capitalize text-light" style="
					  font-family: 'AvenirLTStd-Book';
					  font-size: 1.2rem;
					  font-weight: 400px;
					">
				  matinsoftech@gmail.com
				</p>
			  </div>
			  <div class="flex justify-content-center">
				<p class="text-light" style="
					  font-family: 'AvenirLTStd-Book';
					  font-size: 1.3rem;
					  font-weight: 400px;
					  padding-left: 4rem;
					  padding-right: 4rem;
					">
				  Our team will come back to you within a matter of hours to
				  help you.
				</p>
				<div class="pb-5">
				  <div class="flex text-center">
					<a href="https://www.facebook.com/"><i class="fa-brands fa-facebook mt-4 p-3" style="
							/* border: solid 2px blue;
							background-color: blue;
							border-radius: 50%; */
							font-size: 3rem;
							color: blue;
							width: 60px;
							height: 60px;
						  "></i></a>
					<a href="https://www.instagram.com/"><i class="fa-brands fa-instagram p-3" style="
							/* border: 2px solid #ff647f;
							background-color: #ff647f;
							
							border-radius: 50%; */
							width: 60px;
							height: 60px;
							font-size: 3rem;
							color: #ff647f;
						  "></i></a>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- end -->
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layout.front", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/contactus.blade.php ENDPATH**/ ?>