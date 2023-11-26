<html>
	<h1>New Doctor has applied</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>{{ $doctor->name }}</th>
			</tr>
			<tr>
				<th>First Name</th>
				<th>{{ $doctor->first_name }}</th>
			</tr>
			<tr>
				<th>Last Name</th>
				<th>{{ $doctor->last_name }}</th>
			</tr>
			<tr>
				<th>Phone</th>
				<th>{{ $doctor->phone_no }}</th>
			</tr>
			<tr>
				<th>Email</th>
				<th>{{ $doctor->email }}</th>
			</tr>
			<tr>
				<th>NMC</th>
				<th>{{ $doctor->nmc }}</th>
			</tr>
			<tr>
				<th>Qualification</th>
				<th>{{ $doctor->qualification }}</th>
			</tr>
		</thead>
	</table>
</html>