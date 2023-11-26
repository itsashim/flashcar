<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Appointment')); ?>

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
                            <form action="<?php echo e(url('admin/hospital-appointment')); ?>" method="GET">
                                <div class="form-group col-md-12 paddiv">
                                    <div class="col-md-4">
                                        <label for="cc-payment" class="control-label mb-1">
                                            <?php echo e(__('messages.Start Date')); ?>

                                        </label>
                                        <input id="start_date" name="start_date" type="text" class="form-control"
                                            required value="<?= isset($startdate) && $startdate != 0 ? $startdate : '' ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cc-payment" class="control-label mb-1">
                                            <?php echo e(__('messages.End Date')); ?>

                                        </label>
                                        <input id="end_date" name="end_date" type="text" class="form-control" required
                                            value="<?= isset($enddate) && $enddate != 0 ? $enddate : '' ?>">
                                    </div>
                                    <div class="col-md-4 appbtn">
                                        <button type="submit" name="searchbydate"
                                            class="btn btn-primary"><?php echo e(__('messages.Search')); ?></button>
                                        <button type="button" name="reset" onclick="Resetappointment()"
                                            class="btn btn-primary"><?php echo e(__('messages.Reset')); ?></button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table id="service" class="table table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('messages.Token Number')); ?></th>
                                            <th>Category</th>
                                            <th>Service Provider</th>
                                            <th><?php echo e(__('messages.Service Name')); ?></th>
                                            <th>User Name</th>
                                            <th><?php echo e(__('messages.Timing')); ?></th>
                                            <th><?php echo e(__('messages.Messages')); ?></th>
                                            <th><?php echo e(__('Actions')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($appointments) > 0): ?>
                                            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($d->id); ?></td>
                                                    <td><?php echo e(isset($d->department) ? $d->department->name : ''); ?></td>
                                                    <td><?php echo e(isset($d->doctors) ? $d->doctors->name : ''); ?></td>
                                                    <td><?php echo e(isset($d->services) ? $d->services->name : ''); ?></td>
                                                    <td><?php echo e($d->name); ?></td>
                                                    <td><?php echo e($d->date . ' ' . $d->time); ?></td>
                                                    <td><?php echo e($d->messages); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('appointment.detail', $d->id)); ?>"
                                                            class="btn btn-sm btn-success">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <?php if($d->status == 3): ?>
                                                            <a href="#" data-app_id="<?php echo e($d->id); ?>"
                                                                data-status="<?php echo e($d->status); ?>"
                                                                class="btn btn-primary appointment_status"><?php echo e(__('messages.Approve')); ?></a>
                                                        <?php elseif($d->status == 6): ?>
                                                            <a href="#" data-app_id="<?php echo e($d->id); ?>"
                                                                data-status="<?php echo e($d->status); ?>"
                                                                class="btn btn-primary appointment_status"><?php echo e(__('messages.Reject')); ?></a>
                                                        <?php elseif($d->status == 0): ?>
                                                            <a href="#" data-app_id="<?php echo e($d->id); ?>"
                                                                data-status="<?php echo e($d->status); ?>"
                                                                class="btn btn-primary appointment_status"><?php echo e(__('messages.Absent')); ?></a>
                                                        <?php elseif($d->status == 1): ?>
                                                            <a href="#" data-app_id="<?php echo e($d->id); ?>"
                                                                data-status="<?php echo e($d->status); ?>"
                                                                class="btn btn-primary appointment_status"><?php echo e(__('messages.Receive')); ?></a>
                                                        <?php elseif($d->status == 2): ?>
                                                            <a href="#" data-app_id="<?php echo e($d->id); ?>"
                                                                data-status="<?php echo e($d->status); ?>"
                                                                class="btn btn-primary appointment_status"><?php echo e(__('messages.Reschedule')); ?></a>
                                                        <?php elseif($d->status == 4): ?>
                                                            <a href="#" data-app_id="<?php echo e($d->id); ?>"
                                                                data-status="<?php echo e($d->status); ?>"
                                                                class="btn btn-primary appointment_status"><?php echo e(__('messages.Complete')); ?></a>
                                                        <?php elseif($d->status == 5): ?>
                                                            <a href="#" data-app_id="<?php echo e($d->id); ?>"
                                                                data-status="<?php echo e($d->status); ?>"
                                                                class="btn btn-primary appointment_status"><?php echo e(__('messages.Refer Doctor')); ?></a>
                                                        <?php endif; ?>
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
        $(function() {

            $(document).on('click', '.appointment_status', function() {
                let status = $(this).data('status');
                let app_id = $(this).data('app_id');
                $('#appointmentStatus').val(status);
                $('#appID').val(app_id);
                $('#statusModal').modal('show');
            });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/flashcarsrental.com/public_html/resources/views/admin/appointment/index.blade.php ENDPATH**/ ?>