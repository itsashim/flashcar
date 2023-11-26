<div class="row">
    @foreach($departments as $department)
        <div class="col-sm-6 col-md-4 col-lg-3 text-center mt-5">
            <a href="{{ asset('find-doctor?department_id='.$department->id) }}">
                <img style="width:100%;height:200px;" src="{{ asset('public/upload/department/'.$department->image) }}" alt="">
                <h3 class="mt-1">{{ $department->name }}</h3>
            </a>
            <div class="btn" style="background-color: #00be9c;">
                <a style="color:#fff" href="{{ asset('find-doctor?department_id='.$department->id) }}">Book appointment</a>
            </div>
        </div>
    @endforeach
</div>