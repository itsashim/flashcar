<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Appointment Detail')); ?>

<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><?php echo e(__('messages.Appointment')); ?></h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><?php echo e(__('messages.Appointment')); ?></li>
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
                        <h3>Appointment #<?php echo e($appointment->id); ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <h3>Appointment Details</h3>
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th><?php echo e($appointment->name); ?></th>
                            </tr>
                            <tr>
                                <th>Phone No</th>
                                <th><?php echo e($appointment->phone_no); ?></th>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <th><?php echo e($appointment->date); ?></th>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <th><?php echo e($appointment->date); ?></th>
                            </tr>
                            <tr>
                                <th>Messages</th>
                                <th><?php echo e($appointment->messages); ?></th>
                            </tr>
                            <tr>
                                <th>Payment Method</th>
                                <th><?php echo e($appointment->payment_method); ?></th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>
                                    <?php if($appointment->status==3): ?>
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="<?php echo e($appointment->id); ?>" data-status="3"><?php echo e(__('messages.Approve')); ?></a>
                                    <?php elseif($appointment->status==6): ?>
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="<?php echo e($appointment->id); ?>" data-status="6"><?php echo e(__('messages.Reject')); ?></a>
                                    <?php elseif($appointment->status==0): ?>
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="<?php echo e($appointment->id); ?>" data-status="0"><?php echo e(__('messages.Absent')); ?></a>
                                    <?php elseif($appointment->status==1): ?>
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="<?php echo e($appointment->id); ?>" data-status="1"><?php echo e(__('messages.Receive')); ?></a>
                                    <?php elseif($appointment->status==2): ?>
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="<?php echo e($appointment->id); ?>" data-status="2"><?php echo e(__('messages.Reschedule')); ?></a>
                                    <?php elseif($appointment->status==4): ?>
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="<?php echo e($appointment->id); ?>" data-status="4"><?php echo e(__('messages.Complete')); ?></a>
                                    <?php elseif($appointment->status==5): ?>
                                        <a href="#" class="btn btn-primary appointment_status" data-app_id="<?php echo e($appointment->id); ?>" data-status="5"><?php echo e(__('messages.Refer Doctor')); ?></a>
                                    <?php endif; ?>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            
            <?php if($appointment->has('doctors')): ?>
            <div class="col-sm-6">
                <h3>Doctor's Details</h3>
                <div class="card">
                    <table class="table">
                        <thead>
                            <?php if($appointment->doctors->image): ?>
                            <tr>
                                <th>Image</th>
                                <th>
                                    <img src="<?php echo e(asset('public/upload/doctor/'.$appointment->doctors->image)); ?>" alt=""> 
                                </th>
                            </tr>
                            
                            <?php endif; ?>
                            <tr>
                                <th>Doctor Name</th>
                                <th><?php echo e($appointment->doctors->name); ?> </th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th><?php echo e($appointment->doctors->email); ?></th>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <th><?php echo e($appointment->doctors->phone_no); ?></th>
                            </tr>
                            <tr>
                                <th>NMC</th>
                                <th><?php echo e($appointment->doctors->nmc); ?></th>
                            </tr>
                            <tr>
                                <th>Work Type</th>
                                <th><?php echo e($appointment->doctors->work_type); ?></th>
                            </tr>
                            <tr>
                                <th>Qualification</th>
                                <th><?php echo e($appointment->doctors->qualification); ?></th>
                            </tr>
                            <tr>
                                <th>Appointment Fee</th>
                                <th><?php echo e($appointment->doctors->appointment_fee); ?></th>
                            </tr>
                            <tr>
                                <th>Experience</th>
                                <th><?php echo e($appointment->doctors->experience); ?></th>
                            </tr>
                            <tr>
                                <th>About Us</th>
                                <th><?php echo e($appointment->doctors->about_us); ?></th>
                            </tr>
                            <tr>
                                <th>Service</th>
                                <th><?php echo e($appointment->doctors->service); ?></th>
                            </tr>
                          
                            <tr>
                                <th>Hospital</th>
                                <?php if($appointment->doctors->hospital_id): ?>
                                <th>
                                    <?php echo e($appointment->doctors->hospital->name); ?>

                                </th>
                                <?php else: ?>
                                <th>no-hospital</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <?php endif; ?>
            <?php if($appointment->has('hospital') && $appointment->hospital_id): ?>
            <div class="col-sm-6">
                <h3>Hospital's Details</h3>
                <div class="card">
                    <table class="table">
                        <thead>
                            <?php if(isset($appointment->hospital->logo)): ?>
                            <tr>
                                <th>Logo</th>
                                <th>
                                    <img src="<?php echo e(asset('public//'.$appointment->hospital->logo)); ?>" alt=""> 
                                </th>
                            </tr>
                            
                            <?php endif; ?>
                            <tr>
                                <th>Hospital Name</th>
                                <th><?php echo e($appointment->hospital->name); ?> </th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th><?php echo e($appointment->hospital->email); ?></th>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <th><?php echo e($appointment->hospital->phone_); ?></th>
                            </tr>
                            <tr>
                                <th>Appointment Fee</th>
                                <th><?php echo e($appointment->hospital->appointment_fee); ?></th>
                            </tr>
                            <tr>
                                <th>Partner Type</th>
                                <th><?php echo e($appointment->hospital->partner_type); ?></th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th><?php echo e($appointment->hospital->status); ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div id="statusModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Change Status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?php echo e(route('appointment.update')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="appointmentStatus">
                        <option value="0">Absent</option>
                        <option value="1">Receive</option>
                        <option value="2">Re Schedule</option>
                        <option value="3">Approve</option>
                        <option value="4">Completed</option>
                        <option value="5">Refer Code</option>
                    </select>
                    <input type="text" name="app_id" id="appID" style="display: none;" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
    $(function(){

        $(document).on('click','.appointment_status',function(){
            let status = $(this).data('status');
            let app_id = $(this).data('app_id');
            $('#appointmentStatus').val(status);
            $('#appID').val(app_id);
            $('#statusModal').modal('show');
        });

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/admin/appointment/detail.blade.php ENDPATH**/ ?>