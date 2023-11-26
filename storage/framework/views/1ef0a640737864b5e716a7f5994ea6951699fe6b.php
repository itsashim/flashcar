<?php $__env->startSection('title'); ?>
 <?php echo e(__('Customer')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?php echo e(__('Customer')); ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><?php echo e(__('Customer')); ?></li>
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
                                            <th><?php echo e(__('messages.Email')); ?></th>
                                            <th><?php echo e(__('messages.Phone No')); ?></th>
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
                                                    
                                                        <?php if($d->profile_pic!=""): ?>
                                                            <img src="<?php echo e(asset('public/upload/profile').'/'.$d->profile_pic); ?>" class="imgsize1 profilepic" />
                                                        <?php else: ?>
                                                            <img src="<?php echo e(asset('public/upload/profile/profile.png')); ?>" class="imgsize1 profilepic" />
                                                        <?php endif; ?>
                                                </td>
                                                <td><?php echo e(isset($d->email)?$d->email:""); ?></td>
                                                <td><?php echo e(isset($d->phone_no)?$d->phone_no:""); ?></td>
                                                <td>
                                                   
                                                    
                                                    <a href="<?php echo e(route('delete.patient',$d->id)); ?>">
                                                        <i class="btn btn-danger fa fa-trash"></i>
                                                    </a>
                                                    
                                                    
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


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/rental.shahbazali.website/resources/views/admin/patient.blade.php ENDPATH**/ ?>