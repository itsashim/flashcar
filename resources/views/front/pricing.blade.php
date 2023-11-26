@extends('front.layout.front')
@section('title')
    {{ __('messages.Help Package') }}
@stop
@section('content')
    <?php $res_curr = explode('-', $setting->currency); ?>
    <div class="pricing pg-main-box mt-5">
        <div class="container">
            <div class="global-heading">
                <h2>{{ __('Subscription Package') }}</h2>
                <p>{{ __('messages.The easiest way to keep life on track') }}</p>
            </div>
            <div class="facility-main-box">

                <div class="pricing-main-box pricing pg-part-main-box">
                    <div class="container">
                        <div class="pricing-part-main-box">
                            <div class="row">
                                @foreach ($pricing as $p)
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="pricing-all-content">
                                            <div class="pricing-part-box">
                                                <h3>{{ $p->name }}</h3>
                                                {{-- <span class="badge badge-info">{{ $p->deparmentdata->name }}</span> --}}
                                                <div class="pricing-cost">
                                                    <h3>{{ $res_curr[1] }}</h3>
                                                    <span>{{ $p->price }}</span>
                                                    <h6><i>/Session</i></h6>
                                                </div>
                                                <p>{{ $p->description }}</p>
                                            </div>
                                            <div class="pricing-part-btn">
                                                <a class="btn"
                                                    href="{{ url('subscription') . '/' . $p->id }}">{{ __('messages.Order now') }}</a>
                                            </div>
                                        </div>
                                        {{ $pricing->links() }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <br />

            </div>
        </div>
    </div>

@stop
