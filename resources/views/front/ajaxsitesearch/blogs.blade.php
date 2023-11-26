<div class="row">
@foreach ($blogs as $blog)
    <div class="item col-xm-12 col-sm-6 col-md-4 col-lg-3 mb-3">
        <center>
            <div class="card" >
                <img class="card-img-top" style="height: 200px;" src="{{ asset('public' . $blog->image) }}" alt="Card image cap">
                <div class="card-body">
                    <h5>{{ $blog->title }}</h5>
                    <p class="card-text">{!! substr($blog->description, 0, 50) !!}...</p>
                    <p><a href="{{ asset('blogs/'.$blog->slug) }}">Read More <i class="fa fa-hand-o-left " aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
        </center>
    </div>
@endforeach
</div>