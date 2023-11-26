<?php $__env->startSection('title'); ?>

<?php echo e(__('messages.Department')); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="breadcrumbs">

   <div class="col-sm-4">

      <div class="page-header float-left">

         <div class="page-title">

            <h1><?php echo e(__('messages.Department')); ?></h1>

         </div>

      </div>

   </div>

   <div class="col-sm-8">

      <div class="page-header float-right">

         <div class="page-title">

            <ol class="breadcrumb text-right">

               <li class="active"><?php echo e(__('messages.Department')); ?></li>

            </ol>

         </div>

      </div>

   </div>

</div>

<div class="content mt-3">

   <div class="animated fadeIn">

      <div class="row">

         <div class="col-md-12">

            <div class="card">

               <div class="card-body">

                  <?php if(Session::get("message")): ?>

                  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">

                     <?php echo e(Session::get("message")); ?>


                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                     <span aria-hidden="true">×</span>

                     </button>

                  </div>

                  <?php endif; ?>

                  

                  <div class="table-responsive">

                  <table id="service" class="table  table-striped table-bordered">

                     <thead>

                        <tr>

                           <th><?php echo e(__('messages.Id')); ?></th>

                           <th><?php echo e(__('messages.Name')); ?></th>

                           <th><?php echo e(__('messages.Image')); ?></th>

                           <th><?php echo e(__('messages.Emergency No')); ?></th>

                           <th><?php echo e(__('messages.Action')); ?></th>

                        </tr>

                     </thead>

                     <tbody>

                        <?php if(count($data)>0): ?>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>

                           <td><?php echo e(isset($d->id)?$d->id:""); ?></td>

                           <td><?php echo e(isset($d->name)?$d->name:""); ?></td>

                           <td>

                               <img src="<?php echo e(asset('public/upload/department').'/'.$d->image); ?>" class="imgsize1"/>

                           </td>

                           <td><?php echo e(isset($d->emergency_no)?$d->emergency_no:""); ?></td>

                           <td>
                              <div class="btn-group" role="button">
                                 <a href="<?php echo e(url('admin/savedepartment/').'/'.$d->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
   
                                 <a href="javascript:deleterow('deletedepartment','<?= $d->id ?>')" class="btn btn-sm btn-danger"><i class="fa fa-trash text-white"></i></a>
   
                                
                              </div>


                           </td>

                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php endif; ?>

                     </tbody>

                  </table>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/department/default.blade.php ENDPATH**/ ?>