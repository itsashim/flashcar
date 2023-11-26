<?php $__env->startSection('title'); ?>
    <?php echo e(__('My Prescriptions')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <?php echo $__env->make('front.members.membernav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row mx-0">
            <div class="col-sm-12">
                <div class="card-body table-responsive">
                    <table id="patientTable" class="table table-striped table-hovered table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Message</th>
                                <th>Delivery Address</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($prescriptions) > 0): ?>
                                <?php $__currentLoopData = $prescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-align:center;">
                                            <?php if($prescription->path): ?>
                                            <img src="<?php echo e(asset('public/'.$prescription->path)); ?>" alt="<?php echo e($prescription->name); ?>" style="width:100px; height:100px;"/>
                                            <?php else: ?>
                                            -----
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($prescription->name); ?></td>
                                        <td><?php echo e($prescription->mobile); ?></td>
                                        <td><?php echo e($prescription->message); ?></td>
                                        <td><?php echo e($prescription->delivery_address); ?></td>
                                        <td><?php echo e($prescription->created_at); ?></td>
                                        <td>
                                            <button class="btn btn-danger btnDelete" data-id="<?php echo e($prescription->id); ?>"><i
                                                    class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php echo e(__('messages.No Patients avilable ')); ?>

                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div id="deleteModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="<?php echo e(route('prescription.delete')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Prescription</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to delete prescription?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="id" style="display: none;" id="deletePid" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $('#patientTable').dataTable();

        $(document).on('click', '.btnDelete', function() {
            let id = $(this).data('id');
            $('#deletePid').val(id);
            $('#deleteModal').modal('show');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/members/prescription.blade.php ENDPATH**/ ?>