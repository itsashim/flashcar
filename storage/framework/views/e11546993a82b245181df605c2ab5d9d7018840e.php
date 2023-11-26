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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card text-white <?php if($notification->status==1): ?> bg-success <?php else: ?> bg-danger <?php endif; ?> mb-3">
                    <div class="card-header"><?php echo e($notification->title); ?> <a class="btn btn-dark float-right rounded-circle" href="<?php echo e(url('admin/quick-notification/show/'.$notification->id)); ?>"> <i class="fa fa-eye"></i></a> </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($notification->detail); ?>

                            <p class="card-text text-white float-right"><?php echo e(\Carbon\Carbon::parse($notification->created_at)->diffForHumans()); ?></p>
                        </h5>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="pagination">
                <?php echo $data->links(); ?>

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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/admin/quicknotification/index.blade.php ENDPATH**/ ?>