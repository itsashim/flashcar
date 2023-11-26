<html>
	<h1>User has applied for seller account.</h1>
	<p>Seller Details</p>
	<table>
		<tbody>
			<tr>
				<td>Name</td>
				<td><?php echo e($seller->name); ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo e($seller->email); ?></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><?php echo e($seller->phone); ?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo e($seller->address); ?></td>
			</tr>
		</tbody>
	</table>
</html><?php /**PATH /home2/sathiservice/public_html/resources/views/email/newsellerapplied.blade.php ENDPATH**/ ?>