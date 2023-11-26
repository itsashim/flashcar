<html>
	<h1>User has applied for seller account.</h1>
	<p>Seller Details</p>
	<table>
		<tbody>
			<tr>
				<td>Name</td>
				<td>{{ $seller->name }}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{ $seller->email }}</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>{{ $seller->phone }}</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>{{ $seller->address }}</td>
			</tr>
		</tbody>
	</table>
</html>