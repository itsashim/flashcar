<html>
	<h1>New Health Partner has applied</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>{{ $healthPartner->name }}</th>
			</tr>
			<tr>
				<th>First Name</th>
				<th>{{ $healthPartner->first_name }}</th>
			</tr>
			<tr>
				<th>Last Name</th>
				<th>{{ $healthPartner->last_name }}</th>
			</tr>
			<tr>
				<th>Phone</th>
				<th>{{ $healthPartner->phone }}</th>
			</tr>
			<tr>
				<th>Email</th>
				<th>{{ $healthPartner->email }}</th>
			</tr>
			<tr>
				<th>Address</th>
				<th>{{ $healthPartner->address }}</th>
			</tr>
		</thead>
	</table>
</html>