<div class="row">

    <div class="col-sm-6">
        <div class="box-light-grey row">
            <div class="col-sm-6" style="display: flex; justify-content: center;">
                @if($doctor->image)
                    <img src="{{ asset('public/upload/doctor/'.$doctor->image) }}" alt="{{ $doctor->name }}" class="img-thumbnail" />
                                    
                @else
                    <img class="img-thumbnail" src="{{ asset('public/upload/profile/profile.png') }}"
                        alt="{{ $doctor->name }}" style="width: 200px; height:200px;">
                @endif
            </div>
            <div class="col-sm-6">
                <h4 style="font-weight: 700;"> {{ $doctor->name }}</h4>
                <i class="fa fa-play"></i> {{ $doctor->department->name }} <br/>
                <i class="fa fa-play"></i> Experience: {{ $doctor->experience }}  <br/>
            </div>
        </div>

    </div>
     {{--        <i class="fa fa-play"></i> NMC No. {{ $doctor->nmc }} <br/> --}}
    {{--       <i class="fa fa-play"></i> Qualification: {{ $doctor->qualification }}  <br/> --}}

    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-6">
                <h5 style="font-weight: 700;">Description</h5>
                 {{ $doctor->about_us }}
            </div>
            <div class="col-sm-6">
                <h5 style="font-weight: 700;">Consultation Fee</h5>
                {{ $doctor->appointment_fee }}
            </div>
        </div>

    </div>

</div>