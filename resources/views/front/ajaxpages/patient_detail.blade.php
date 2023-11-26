<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>First Name</th>
            <th>{{ $patient->first_name }}</th>
        </tr>
        <tr>
            <th>Last Name</th>
            <th>{{ $patient->last_name }}</th>
        </tr>
        <tr>
            <th>Age</th>
            <th>{{ $patient->age }}</th>
        </tr>
        <tr>
            <th>DOB</th>
            <th>{{ $patient->dob }}</th>
        </tr>
        <tr>
            <th>Gender</th>
            <th>{{ $patient->gender }}</th>
        </tr>
        <tr>
            <th>Address</th>
            <th>{{ $patient->address }}</th>
        </tr>
    </thead>
</table>