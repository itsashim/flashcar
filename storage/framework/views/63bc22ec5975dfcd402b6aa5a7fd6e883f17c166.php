
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Save').' '.__('messages.Facilities')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Save').' '.__('messages.Facilities')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li>
                  <a href="<?php echo e(url('admin/service')); ?>"><?php echo e(__('messages.Facilities')); ?></a>
               </li>
               <li class="active"><?php echo e(__('messages.Save').' '.__('messages.Facilities')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row rowcenter">
         <div class="col-md-9">
            <div class="card">
               <div class="card-body">
                  <?php if(Session::has('message')): ?>
                  <div class="col-sm-12">
                     <div class="alert  <?php echo e(Session::get('alert-class', 'alert-info')); ?> alert-dismissible fade show" role="alert"><?php echo e(Session::get('message')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                  </div>
                  <?php endif; ?>
                  <?php if($errors->any()): ?>
                  <div class="alert alert-danger">
                     <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </div>
                  <?php endif; ?>                              
                  <form action="<?php echo e(url('admin/updateservice')); ?>" method="post"  enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>

                     <input type="hidden" name="id" id="id" value="<?php echo e($service_id); ?>"/>
                     <input type="hidden" name="real_image" id="real_image" value="<?php echo e(isset($servicedata->icon)?$servicedata->icon:''); ?>"/>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Name')); ?>

                        <span class="reqfield" >*</span>
                        </label>
                        <input type="text" id="name" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Name')); ?>" class="form-control" required name="name" value="<?php echo e(isset($servicedata->name)?$servicedata->name:''); ?>">
                     </div>
                     <div class="form-group">
                        <label for="email" class=" form-control-label">
                        <?php echo e(__('messages.Description')); ?><span class="reqfield" >*</span>
                        </label>
                        <textarea required id="description" name="description"  class="form-control"><?php echo e(isset($servicedata->description)?$servicedata->description:''); ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        <?php echo e(__('messages.Image')); ?>(80X80)<span class="reqfield" >*</span>
                        </label>
                        <?php if($service_id!=0): ?>
                        <img src="<?php echo e(asset('public/upload/service').'/'.$servicedata->icon); ?>" class="imgsize1" /> 
                        <?php endif; ?>
                        <div>
                           <input type="file" id="file" name="image" class="form-control-file" accept="image/*">
                        </div>
                     </div>
                     <div>
                         <?php if(Session::get("is_demo")=='1'): ?>
                           <button id="payment-button" type="button" onclick="disablebtn()" class="btn btn-lg btn-info floatright">
                           <?php echo e(__('messages.Submit')); ?>

                           </button>
                        <?php else: ?>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info floatright">
                              <?php echo e(__('messages.Submit')); ?>

                           </button>
                        <?php endif; ?>
                       
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/service/saveservice.blade.php ENDPATH**/ ?>