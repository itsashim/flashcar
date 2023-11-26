@foreach ($doctors as $doctor)
    <div class="doctor-card col-lg-3 col-md-4 col-sm-6">

        <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
            <a href="{{ asset('find-doctor?doctor_id=' . $doctor->id) }}">
                @if ($doctor->image)
                    <img src="{{ asset('public/upload/doctor/' . $doctor->image) }}" class="mt-4"
                        style="width: 100px; height: 100px; border-radius: 50%" alt="img" />
                @else
                    <img src="{{ asset('public/upload/profile/profile.png') }}" class="mt-4"
                        style="width: 100px; height: 100px; border-radius: 50%" alt="img" />
                @endif
            </a>
            <p class="text-center text-capitalize mt-4" style="font-size: 2rem">
                {{ $doctor->name }}
            </p>
            <span
                style="font-size: 20px;color: #862b2b;">{{ isset($doctor->department->name) ? $doctor->department->name : '--------------' }}</span>
            <a style="width:80%;" href="{{ asset('find-doctor?doctor_id=' . $doctor->id) }}"
                class="btn btn-primary text-uppercase rounded-3">
                Book Appontment
            </a>
        </div>
    </div>
@endforeach