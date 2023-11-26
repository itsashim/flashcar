<?php $__env->startSection('title'); ?>


Bike Brand
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="breadcrumbs">

   <div class="col-sm-4">

      <div class="page-header float-left">

         <div class="page-title">

            <h1>Bike Brand</h1>
            

         </div>

      </div>

   </div>

   <div class="col-sm-8">

      <div class="page-header float-right">

         <div class="page-title">

            <ol class="breadcrumb text-right">

               <li class="active">Bike Brand</li>
               

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

                  <div>

                     <a href="<?php echo e(url('admin/savebrand/0')); ?>" class="btn btn-primary">Add Brand</a>
                     

                  </div>

                  <div class="table-responsive">

                  <table id="service" class="table  table-striped table-bordered">

                     <thead>

                        <tr>

                           <th><?php echo e(__('messages.Id')); ?></th>
                           
                           <th>Logo</th>

                           <th>Brand Name</th>
                           

                           

                           <th><?php echo e(__('messages.Action')); ?></th>

                        </tr>

                     </thead>

                     <tbody>

                        <?php if(count($data)>0): ?>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>

                           <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                           
                           <td>
                              <img src="<?php echo e(asset('public/upload/department').'/'.$d->image); ?>" class="imgsize1"/>
                           </td>

                           <td><?php echo e(isset($d->name)?$d->name:""); ?></td>

                           

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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/admin/bike_brand/default.blade.php ENDPATH**/ ?>