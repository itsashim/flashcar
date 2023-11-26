@foreach ($departments as $department)
    <div class="col-lg-3 col-md-6 col-sm-6 p-2 ">
        <div style="text-align:center ; border-radius:7px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <img src="{{ asset('public/upload/department/' . $department->image) }}" alt="card1"
                style="width: 100px; height:100px; border:solid 1px; border-radius:50%" class="mt-2" />
            <h6 class="">{{ $department->name }}</h6>
            <p>{{ $department->doctorsCount }} Doctors</p>
            <a href="{{ asset('hospital/' . $hospital->slug . '?department_id=' . $department->id) }}">
                <span style="margin-bottom: 5px;" class="btn btn-success btn-sm">Consult Now</span>
            </a>
        </div>
    </div>
@endforeach