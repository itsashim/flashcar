<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Dashboard')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.Dashboard')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('appointment-view')): ?>
<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="<?php echo e(url('admin/appointment/0/0')); ?>">
         <div class="card-body">
            <div class="stat-widget-one" >
               <div class="stat-icon dib"><i class="fa fa-ambulance  text-primary border-primary"></i></div>
               <div class="stat-content dib">
                  <div class="stat-text"><?php echo e(__('messages.Total')); ?></div>
               <div class="stat-text"><?php echo e(__('messages.Appointment')); ?></div>
                  <?php if(auth()->user()->usertype==4): ?>
                     <?php
                     $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first();
                     $appointmentCount = \App\Model\Appointment::where('hospital_id',$hospital->id)->count(); ?>
                     <div class="stat-digit"><?php echo e($appointmentCount); ?></div>
                  <?php elseif(auth()->user()->usertype==3): ?>
                     <?php
                     $doctor = \App\Model\Doctor::where('user_id',auth()->user()->id)->first();
                     $appointmentCount = \App\Model\Appointment::where('doc_id',$doctor->id)->count();
                     ?>
                     <div class="stat-digit"><?php echo e($appointmentCount); ?></div>
                  <?php else: ?>
                     <div class="stat-digit"><?php echo e($totaldoctor); ?></div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('department-view')): ?>
<div class="col-xl-3 col-lg-6">
   <div class="card">
     <a href="<?php echo e(url('admin/department')); ?>"> <div class="card-body">
         <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
            <div class="stat-content dib">
               <div class="stat-text"><?php echo e(__('messages.Total')); ?></div>
               <div class="stat-text"><?php echo e(__('messages.Department')); ?>

               </div>
               <?php if(auth()->user()->usertype==4): ?>
                  <?php $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first(); ?>
                  <div class="stat-digit"><?php echo e(count(json_decode($hospital->department_ids))); ?></div>
               <?php else: ?>
                  <div class="stat-digit"><?php echo e($totaldepartment); ?></div>
               <?php endif; ?>
            </div>
         </div>
      </div></a>
   </div>
</div>
<?php endif; ?>
<!--<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-view')): ?>-->
<!--<div class="col-xl-3 col-lg-6">-->
<!--   <div class="card">-->
<!--      <a href="<?php echo e(url('admin/service')); ?>">-->
<!--         <div class="card-body">-->
<!--            <div class="stat-widget-one">-->
<!--               <div class="stat-icon dib"><i class="ti-book  text-warning border-warning"></i></div>-->
<!--               <div class="stat-content dib">-->
<!--                  <div class="stat-text"><?php echo e(__('messages.Total')); ?></div>-->
<!--                  <div class="stat-text"><?php echo e(__('messages.Facilities')); ?></div>-->
<!--                  <?php if(auth()->user()->usertype==4): ?>-->
<!--                     <?php $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first(); ?>-->
<!--                     <div class="stat-digit"><?php echo e(count(json_decode($hospital->facility_ids))); ?></div>-->
<!--                  <?php else: ?>-->
<!--                     <div class="stat-digit"><?php echo e($totalservice); ?></div>-->
<!--                  <?php endif; ?>-->
                  
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </a>-->
<!--   </div>-->
<!--</div>-->
<!--<?php endif; ?>-->
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('doctor-view')): ?>
<div class="col-xl-3 col-lg-6">
   <div class="card">
     <a href="<?php echo e(url('admin/doctor')); ?>"> <div class="card-body">
         <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="fa fa-user  text-danger border-danger"></i></div>
            <div class="stat-content dib">
               <div class="stat-text"><?php echo e(__('messages.Total')); ?></div>
               <div class="stat-text"><?php echo e(__('Services')); ?></div>
               <?php if(auth()->user()->usertype==4): ?>
                  <?php $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first();
                        $doctorsCount = \App\Model\Doctor::where('hospital_id',$hospital->id)->count();
                  ?>
                  <div class="stat-digit"><?php echo e($doctorsCount); ?></div>
               <?php else: ?>
                  <div class="stat-digit"><?php echo e($totaldoctor); ?></div>
               <?php endif; ?>
               
            </div>
         </div>
      </div></a>
   </div>
</div>

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="<?php echo e(url('admin/product')); ?>">
         <div class="card-body">
            <div class="stat-widget-one" >
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib">
                  <div class="stat-text"><?php echo e(__('messages.Total')); ?></div>
                  <div class="stat-text"><?php echo e(__('Departments')); ?>

                  </div>
                    
                  <div class="stat-digit"><?php echo e($totaldepartment); ?></div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

<?php endif; ?>
<?php if(auth()->user()->usertype == '5' ): ?>

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="<?php echo e(url('admin/product')); ?>">
         <div class="card-body">
            <div class="stat-widget-one" >
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib">
                  <div class="stat-text"><?php echo e(__('messages.Total')); ?></div>
                  <div class="stat-text"><?php echo e(__('My Products')); ?>

                  </div>
                  <?php $seller = \App\Seller::where('user_id',auth()->user()->id)->first(); 
                        $productCount = \App\Product::where('seller_id',$seller->id)->count();
                  ?>
                  <div class="stat-digit"><?php echo e($productCount); ?></div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="<?php echo e(url('admin/order')); ?>">
         <div class="card-body">
            <div class="stat-widget-one" style="display: flex; white-space: nowrap;">
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib" >
                  <div class="stat-text"><?php echo e(__('messages.Total')); ?></div>
                  <div class="stat-text"><?php echo e(__('Pending Order Items')); ?>

                  </div>
                  <?php $seller = \App\Seller::where('user_id',auth()->user()->id)->first(); 
                        $orderCount = \App\OrderDetail::where('seller_id',$seller->id)->where('status','Pending')->count();
                  ?>
                  <div class="stat-digit"><?php echo e($orderCount); ?></div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="<?php echo e(url('admin/order')); ?>">
         <div class="card-body">
            <div class="stat-widget-one">
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib">
                  <div class="stat-text"><?php echo e(__('messages.Total')); ?></div>
                  <div class="stat-text"><?php echo e(__('Sold Order Items')); ?>

                  </div>
                  <?php $seller = \App\Seller::where('user_id',auth()->user()->id)->first(); 
                        $soldOrderCount = \App\OrderDetail::where('seller_id',$seller->id)->where('status','Checkout')->count();
                  ?>
                  <div class="stat-digit"><?php echo e($soldOrderCount); ?></div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="<?php echo e(url('admin/order')); ?>">
         <div class="card-body">
            <div class="stat-widget-one">
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib">
                  <div class="stat-text"><?php echo e(__('messages.Total')); ?></div>
                  <div class="stat-text"><?php echo e(__('Delivered Items')); ?>

                  </div>
                  <?php $seller = \App\Seller::where('user_id',auth()->user()->id)->first(); 
                        $soldOrderCount = \App\OrderDetail::where('seller_id',$seller->id)->where('status','Delivered')->count();
                  ?>
                  <div class="stat-digit"><?php echo e($soldOrderCount); ?></div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

<?php endif; ?>
<div class="col-md-12 flt">
   <div class="row">
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('doctor-view')): ?>
      <div class="col-md-12 col-xl-6 col-12 flat-r">
         <div class="card">
            <div class="card-body">
               <h4 class="orderh4">
                  <i class="fa fa-ambulance" aria-hidden="true"></i><?php echo e(__('messages.Latest').' '.__('messages.Appointment')); ?> 
                  <a class="btn btn-primary btn-flat m-b-30 m-t-30 elec textorder" href="<?php echo e(url('admin/appointment/0/0')); ?>"><?php echo e(__('messages.Show All')); ?></a>
               </h4>
               <div class="table-responsive dtdiv">
                  <table id="latestorderTable" class="table table-striped dttablewidth">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('messages.Doctor').' '.__('messages.Name')); ?></th>
                           <th><?php echo e(__('messages.Patient').' '.__('messages.Name')); ?></th>
                           <th><?php echo e(__('messages.Department').' '.__('messages.Name')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(count($leastappointment)>0): ?> 
                       
                            <?php $__currentLoopData = $leastappointment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                     <td><?php echo e($d->id); ?></td>
                                     <td><?php echo e(isset($d->doctors)?$d->doctors->name:""); ?></td>
                                     <td><?php echo e(isset($d->name)?$d->name:""); ?></td>
                                     <td><?php echo e(isset($d->department)?$d->department->name:""); ?></td>
                                  </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <?php endif; ?>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('review-view')): ?>
      <div class="col-md-12 col-xl-6 col-12 flat-r">
         <div class="card">
            <div class="card-body">
               <h4 class="orderh4">
                  <i class="fa fa-comments-o" aria-hidden="true"></i><?php echo e(__('messages.Latest').' '.__('messages.Review')); ?>

                  <a class="btn btn-primary btn-flat m-b-30 m-t-30 elec textorder" href="<?php echo e(url('admin/review')); ?>"><?php echo e(__('messages.Show All')); ?></a>
               </h4>
               <div class="table-responsive dtdiv">
                  <table id="myTablereview" class="table table-striped dttablewidth">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('messages.Doctor').' '.__('messages.Name')); ?></th>
                           <th><?php echo e(__('messages.Patient').' '.__('messages.Name')); ?></th>
                           <th><?php echo e(__('messages.Ratting')); ?></th>
                        </tr>
                     </thead>
                      <tbody>
                        
                            <?php $__currentLoopData = $leastreview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                   <th><?php echo e($d->id); ?></th>
                                   <td><?php echo e(isset($d->doctors)?$d->doctors->name:""); ?></td>
                                   <td><?php echo e(isset($d->users)?$d->users->name:""); ?></td>
                                   <td><?php echo e(isset($d->ratting)?$d->ratting:""); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         
                     </tbody> 
                  </table>
               </div>
            </div>
         </div>
      </div>
      <?php endif; ?>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script type="text/javascript">adminchangelogin()</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>