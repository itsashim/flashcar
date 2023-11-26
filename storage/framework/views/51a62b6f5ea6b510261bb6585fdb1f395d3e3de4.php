<html>
	<h1>New Prescription Request</h1>
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
			
		</thead>
	</table>
</html><?php /**PATH /home2/sathiservice/public_html/resources/views/email/newappointment.blade.php ENDPATH**/ ?>