<html>
	<h1>New Doctor has applied</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th><?php echo e($doctor->name); ?></th>
			</tr>
			<tr>
				<th>First Name</th>
				<th><?php echo e($doctor->first_name); ?></th>
			</tr>
			<tr>
				<th>Last Name</th>
				<th><?php echo e($doctor->last_name); ?></th>
			</tr>
			<tr>
				<th>Phone</th>
				<th><?php echo e($doctor->phone_no); ?></th>
			</tr>
			<tr>
				<th>Email</th>
				<th><?php echo e($doctor->email); ?></th>
			</tr>
			<tr>
				<th>NMC</th>
				<th><?php echo e($doctor->nmc); ?></th>
			</tr>
			<tr>
				<th>Qualification</th>
				<th><?php echo e($doctor->qualification); ?></th>
			</tr>
		</thead>
	</table>
</html><?php /**PATH /home/sansarhealth/public_html/resources/views/email/newdoctor.blade.php ENDPATH**/ ?>