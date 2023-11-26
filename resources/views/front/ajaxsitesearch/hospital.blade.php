<div class="" style="display:grid; grid-template-columns:1fr 1fr 1fr 1fr; gap:1rem;">
    @foreach ($hospitals as $hospital)
        <div class=" text-center mt-4"
            style="box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px; padding: 1rem;
            ">
            <a href="{{ asset('hospital/' . $hospital->slug) }}">
                <img style="width:100%;height:200px;" src="{{ asset('public' . $hospital->logo) }}"
                    alt="">
                <h3 class="mt-3" 
                    style="color:#000; text-transform:capitalize;">
                    {{ $hospital->name }}
                </h3>
            </a>
            <span>
                {{ isset($hospital->city) ? $hospital->city->name : $hospital->city_id }}
            </span>
            <br />
            <div class="btn bg-lightgreen mt-2">
                <a style="color:#fff" href="{{ asset('hospital/' . $hospital->slug) }}">Book appointment</a>
            </div>
        </div>
        {{-- <div class="col-sm-6 col-md-4 col-lg-4 text-center mt-4"
            style="box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px; padding: 1rem;">
            <a href="{{ asset('hospital/' . $hospital->slug) }}">
                <img style="width:100%;height:200px;" src="{{ asset('public' . $hospital->logo) }}"
                    alt="">
                <h3 class="mt-1">{{ $hospital->name }}</h3>
            </a>
            <span>{{ isset($hospital->city) ? $hospital->city->name : $hospital->city_id }}</span>
            <br />
            <div class="btn bg-lightgreen">
                <a style="color:#fff" href="{{ asset('hospital/' . $hospital->slug) }}">Book appointment</a>
            </div>
        </div> --}}
    @endforeach
</div>