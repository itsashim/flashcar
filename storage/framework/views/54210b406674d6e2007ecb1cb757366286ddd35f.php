<html>
	<h1>New Prescription Request</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th><?php echo e($prescription->name); ?></th>
			</tr>
			<tr>
				<th>Mobile</th>
				<th><?php echo e($prescription->mobile); ?></th>
			</tr>
			<tr>
				<th>Message</th>
				<th><?php echo e($prescription->message); ?></th>
			</tr>
			<tr>
				<th>Delivery Address</th>
				<th><?php echo e($prescription->delivery_address); ?></th>
			</tr>
		</thead>
	</table>
</html><?php /**PATH /home/sansarhealth/public_html/resources/views/email/newprescription.blade.php ENDPATH**/ ?>