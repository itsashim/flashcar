@extends('front.layout.front')
@section('title')
    {{ __('messages.My Account') }}
@stop
@section('styles')
<style>
    .tab-appointment-box {
        background-color: #b8ffc491 !important;
    }
    .tab-appointment-detail-box h4{
        color: #20748f;
        padding: 14px;
    }

    .tab-appointment-time-box{
        padding: 10px;
    }
    .tab-appointment-calendar-box{
        padding: 10px;
    }

</style>
@endsection

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@include('front.members.membernav')

<div class=" my-5" style="margin: 0 5%">
            <div class="card-body">
                <div class="row">
                @if (count($subscriptions) > 0)
                    @foreach ($subscriptions as $s)
                    <div class="col-lg-4 col-md-6 col-sm-12 p-2 ">
                        <div class="tab-appointment-box" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" style="border-radius: 10px;">
                            <div class="tab-appointment-detail-box tab-subcription-detail-box">
                                <h4>{{ isset($s->packagedata) ? $s->packagedata->name : '' }}</h4>
                                @if ($s->status == '1')
                                    <!--<a href="{{ asset('subscription/'.$s->package_id) }}" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success">{{ __('messages.Receive') }}</a>-->
                                        
                                    <a href="javascript:void(0)" style=";float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 25px;" class="badge badge-success">{{ __('messages.Receive') }}</a>
                                        
                                @elseif($s->status == '2')
                                    <!--<a href="{{ asset('subscription/'.$s->package_id) }}" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success">{{ __('messages.Accept') }}</a>-->
                                        
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 25px;" class="badge badge-success">{{ __('messages.Accept') }}</a>
                                @elseif($s->status == '3')
                                    <!--<a href="{{ asset('subscription/'.$s->package_id) }}" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success">{{ __('messages.Cancel') }}</a>-->
                                        
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 25px;" class="badge badge-success">{{ __('messages.Cancel') }}</a>
                                @elseif($s->status == '4')
                                    <!--<a href="{{ asset('subscription/'.$s->package_id) }}" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success">{{ __('messages.In progress') }}</a>-->
                                        
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 25px;" class="badge badge-success">{{ __('messages.In progress') }}</a>
                                @elseif($s->status == '5')
                                    <a href="{{ asset('subscription/'.$s->package_id) }}" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 25px;" class="badge badge-success">{{ __('messages.Complete') }}</a>
                                    
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 25px;" class="badge badge-success">{{ __('messages.Complete') }}</a>
                                @else
                                    <!--<a href="{{ asset('subscription/'.$s->package_id) }}" style="display:none; float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;-->
                                    <!--    margin-right: 45px;" class="badge badge-success">{{ __('messages.Refund') }}</a>-->
                                        
                                    <a href="javascript:void(0)" style="float: right;position: absolute;top: 0;right: 0;padding: 10px;margin-top: 36px;
                                        margin-right: 25px;" class="badge badge-success">{{ __('messages.Refund') }}</a>
                                @endif
                                
                                
                                <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $s->id }}" style="position:absolute; float:right; top:100px; right:50px;cursor:pointer" title="click to see details">
                                   <div class="col-sm">
                                    <i class="fa fa-eye"></i>
                                </div>
                                
                                <div class="modal fade" id="exampleModal-{{ $s->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ isset($s->packagedata) ? $s->packagedata->name : '' }}</h1>
                                        <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                      </div>
                                      <div class="modal-body">
                                             {{$s->packagedata->description}}
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                            </div>
                            </div>
                            
                            <div class="tab-timingd-box tab-timingd2-box">
                                <div class="tab-appointment-time-box">
                                    <i class="far fa-clock"></i>
                                    <span>{{ $s->time }}</span>
                                </div>
                                <div class="tab-appointment-calendar-box">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>{{ $s->date }}</span>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    {{ __('messages.No Subscription History avilable ') }}
                @endif

            
        </div>
    </div>
</div>
@endsection