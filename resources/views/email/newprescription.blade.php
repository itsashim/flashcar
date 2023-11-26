<html>
	<h1>New Prescription Request</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>{{ $prescription->name }}</th>
			</tr>
			<tr>
				<th>Mobile</th>
				<th>{{ $prescription->mobile }}</th>
			</tr>
			<tr>
				<th>Message</th>
				<th>{{ $prescription->message }}</th>
			</tr>
			<tr>
				<th>Delivery Address</th>
				<th>{{ $prescription->delivery_address }}</th>
			</tr>
		</thead>
	</table>
</html>