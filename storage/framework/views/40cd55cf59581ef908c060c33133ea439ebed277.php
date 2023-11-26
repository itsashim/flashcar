<html>
	<h1>New Prescription Request Submitted</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th><?php echo e($appointment->name); ?></th>
			</tr>
			<tr>
				<th>Mobile</th>
				<th><?php echo e($appointment->phone_no); ?></th>
			</tr>
			<tr>
				<th>Date</th>
				<th><?php echo e($appointment->date); ?></th>
			</tr>
			<tr>
				<th>Doctor Name</th>
				<th><?php echo e($doctor->name); ?></th>
			</tr>
			<tr>
				<th>patient Name</th>
				<th><?php echo e($patient->first_name.' '.$patient->last_name); ?></th>
			</tr>
		</thead>
	</table>
</html><?php /**PATH /home/sansarhealth/public_html/resources/views/email/customerappointment.blade.php ENDPATH**/ ?>