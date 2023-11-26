<html>
	<h1>New Prescription Request Submitted</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>{{ $appointment->name }}</th>
			</tr>
			<tr>
				<th>Mobile</th>
				<th>{{ $appointment->phone_no }}</th>
			</tr>
			<tr>
				<th>Date</th>
				<th>{{ $appointment->date }}</th>
			</tr>
			<tr>
				<th>Doctor Name</th>
				<th>{{ $doctor->name }}</th>
			</tr>
			<tr>
				<th>patient Name</th>
				<th>{{ $patient->first_name.' '.$patient->last_name }}</th>
			</tr>
		</thead>
	</table>
</html>