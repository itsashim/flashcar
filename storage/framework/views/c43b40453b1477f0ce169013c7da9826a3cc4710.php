<?php $__env->startSection('title'); ?>
<?php echo e(__('Services')); ?>

<?php $__env->stopSection(); ?>

<style>
   #service-2_filter {
      float: right;
   }
</style>

<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('Services')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('Services')); ?></li>
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
                     <a href="<?php echo e(url('admin/save-service/0/1')); ?>" class="btn btn-primary"><?php echo e(__('messages.Add').' '.__('Services')); ?></a>
                     
                     <?php if(Auth::user()->usertype == "2"): ?>
                     <select name="associatedWithhospital" id="associatedWithhospital">
                        <option value="">Select Services</option>
                        <?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($hospital->id); ?>"><?php echo e($hospital->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                     <?php endif; ?>

                    <?php if(Auth::user()->usertype != "4"): ?>
                     <select name="city_id" id="cityID" class="float-right select" style="width: 200px;">
                        <option>Select City</option>
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    <?php endif; ?>
                     </div>
                     <h3 class="text-center">Services</h3>
                  <br>
                  <div class="table-responsive">
                    <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('messages.Image')); ?></th>
                           <th><?php echo e(__('messages.Department')); ?></th>
                           <th><?php echo e(__('messages.Hospital')); ?></th>
                           <th><?php echo e(__('City')); ?></th>
                           <th><?php echo e(__('messages.Name')); ?></th>
                           <th><?php echo e(__('messages.Email')); ?></th>
                           <th><?php echo e(__('messages.Phone No')); ?></th>
                           <th><?php echo e(__('Status')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr>
                                       <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                                       <td>
                                          <?php if($d->image): ?>
                                             <img src="<?php echo e(asset('public/upload/doctor').'/'.$d->image); ?>" class="imgsize1" style="width: 150px;"/>
                                          <?php else: ?>
                                             <img src="<?php echo e(asset('public/images/doctor.png')); ?>" alt="" />
                                          <?php endif; ?>
                                       </td>
                                       <td><?php if(isset($d->department->name)): ?> <?php echo e($d->department->name); ?> <?php else: ?> - <?php endif; ?></td>
                                       <td><?php if(isset($d->hospital->name)): ?> <?php echo e($d->hospital->name); ?> <?php else: ?> - <?php endif; ?></td>
                                       <td><?php if(isset($d->city->name)): ?> <?php echo e($d->city->name); ?> <?php else: ?> - <?php endif; ?></td>
                                       <td><?php echo e($d->name); ?></td>
                                       <td><?php echo e($d->email); ?></td>
                                       <td><?php echo e($d->phone_no); ?></td>
                                       <td>
                                          <?php if($d->status=="Pending"): ?>
                                             <span class="badge badge-warning"><?php echo e($d->status); ?></span>
                                          <?php elseif($d->status=="Approved"): ?>
                                             <span class="badge badge-success"><?php echo e($d->status); ?></span>
                                          <?php else: ?>
                                             <span class="badge badge-danger"><?php echo e($d->status); ?></span>
                                          <?php endif; ?>
                                       </td>
                                       <td>
                                          <div class="btn-group" role="group">
                                             <a href="<?php echo e(url('admin/save-service/').'/'.$d->id.'/1'); ?>" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                             </a>
                                             <a href="javascript:deleterow('deletedoctor','<?= $d->id ?>')" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                               
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->startSection('footer'); ?>
<script>
   $('#cityID').on('change',function(){
         let url = "<?php echo e(url()->current()); ?>?city_id="+ $(this).val();
         window.location.href = url;
   });
   
   $('#associatedWithhospital').on('change',function(){
         let url = "<?php echo e(url()->current()); ?>?associatedWithhospital="+ $(this).val();
         window.location.href = url;
   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/admin/doctor/default.blade.php ENDPATH**/ ?>