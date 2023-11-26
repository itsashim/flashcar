@foreach ($hospitals as $hospital)
    <div class="doctor-card col-lg-3 col-md-4 col-sm-6">
        <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
            <a href="{{ asset('hospital/' . $hospital->slug) }}">
                @if ($hospital->logo)
                    <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4"
                        src="{{ asset('public' . $hospital->logo) }}" alt="">
                @else
                    <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4"
                        src="{{ asset('public/images/hospital.png') }}" alt="" />
                @endif
            </a>

            <p class="text-center text-capitalize mt-4" style="font-size: 22px;">
                {{ $hospital->name }}
            </p>
            <p class="text-center text-uppercase text-success" style="font-size: 1rem">
                {{ isset($hospital->city) ? $hospital->city->name : $hospital->city_id }}
            </p>

            <a href="{{ asset('hospital/' . $hospital->slug) }}" class="btn btn-primary text-uppercase rounded-3">
                book an appontment
            </a>
        </div>
    </div>
@endforeach