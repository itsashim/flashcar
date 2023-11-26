<html>
	<h1>New Health Partner has applied</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th><?php echo e($healthPartner->name); ?></th>
			</tr>
			<tr>
				<th>First Name</th>
				<th><?php echo e($healthPartner->first_name); ?></th>
			</tr>
			<tr>
				<th>Last Name</th>
				<th><?php echo e($healthPartner->last_name); ?></th>
			</tr>
			<tr>
				<th>Phone</th>
				<th><?php echo e($healthPartner->phone); ?></th>
			</tr>
			<tr>
				<th>Email</th>
				<th><?php echo e($healthPartner->email); ?></th>
			</tr>
			<tr>
				<th>Address</th>
				<th><?php echo e($healthPartner->address); ?></th>
			</tr>
		</thead>
	</table>
</html><?php /**PATH /home2/sathiservice/public_html/resources/views/email/newhealthpartner.blade.php ENDPATH**/ ?>