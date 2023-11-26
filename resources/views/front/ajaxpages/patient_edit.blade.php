<section>
    <form action="{{ asset('mypatient/update') }}" method="POST">
        @csrf
        <div class="form-grouup">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" value="{{ $patient->first_name }}" />
        </div>
        <div class="form-grouup">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{ $patient->last_name }}" />
        </div>
        <div class="form-grouup">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ $patient->phone }}" />
        </div>
        <div class="form-grouup">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $patient->email }}"  />
        </div>
        <div class="form-grouup">
            <label for="age">Age</label>
            <input type="text" class="form-control" name="age" value="{{ $patient->age }}" />
        </div>
        <div class="form-grouup">
            <label for="dob">DOB</label>
            <input type="text" class="form-control" name="dob" value="{{ $patient->dob }}" />
        </div>
        <div class="form-grouup">
            <label for="dob">Gender</label>
            <input type="text" class="form-control" name="gender" value="{{ $patient->gender }}" />
        </div>
        <div class="form-grouup">
            <label for="dob">Address</label>
            <input type="text" class="form-control" name="address" value="{{ $patient->address }}" />
        </div>
        <div class="form-group">
            <input type="text" name="id" value="{{ $patient->id }}" style="display: none;" />
            <button type="submit" class="btn btn-primary" >Update</button>
        </div>

    </form>

</section>