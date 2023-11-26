<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.My Account')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<?php echo $__env->make('front.members.membernav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-body table-responsive">
                <table id="patientTable" class="table table-striped table-hovered table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($patients) > 0): ?>
                            <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($patient->first_name); ?></td>
                                    <td><?php echo e($patient->last_name); ?></td>
                                    <td><?php echo e($patient->phone); ?></td>
                                    <td><?php echo e($patient->email); ?></td>
                                    <td><?php echo e($patient->age); ?></td>
                                    <td><?php echo e($patient->dob); ?></td>
                                    <td><?php echo e($patient->gender); ?></td>
                                    <td><?php echo e($patient->address); ?></td>
                                    <td>
                                        <button class="btn btn-success btnPatientView" data-id="<?php echo e($patient->id); ?>"><i class="fa fa-eye"></i>
                                        </button>
                                        <button class="btn btn-primary btnPatientEdit" data-id="<?php echo e($patient->id); ?>"><i class="fa fa-edit"></i>
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

  <div id="myPatientModel" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Patient Detail</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="PatientDetail">
            </div>
        </div>
    </div>
</div>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $('#patientTable').dataTable();

		$(document).on('click','.btnPatientView',function(){

			let id = $(this).data('id');
			let url = "<?php echo e(asset('mypatient/show')); ?>";
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: url,
				type: "POST",
				data: {
					"id":id,
				},
				beforeSend:function(){
					console.log('ajax fired');
				},
				success: function (data) {
					if(data.status==true){
						$('#myPatientModel').modal('show');
						$('#PatientDetail').html(data.data);          
					}else{
						console.log('error');
					}
				},
				error:function(xhr){
					console.log(xhr);
				}
			});

		});

		$(document).on('click','.btnPatientEdit',function(){

			let id = $(this).data('id');
			let url = "<?php echo e(asset('mypatient/edit')); ?>";
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: url,
				type: "POST",
				data: {
					"id":id,
				},
				beforeSend:function(){
					console.log('ajax fired');
				},
				success: function (data) {
					if(data.status==true){
						$('#myPatientModel').modal('show');
						$('#PatientDetail').html(data.data);          
					}else{
						console.log('error');
					}
				},
				error:function(xhr){
					console.log(xhr);
				}
			});

			});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/members/patient.blade.php ENDPATH**/ ?>