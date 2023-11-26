@extends('admin.layout')
@section('title')
Booking
@stop @section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Booking</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Booking</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group col-md-12 paddiv">
                                <div class="col-md-4">
                                    <label for="cc-payment" class="control-label mb-1">
                                        {{__('messages.Start Date')}}
                                    </label>
                                    <input id="start_date" name="start_date" type="text" class="form-control" required value="<?= isset($startdate)&&$startdate!=0?$startdate:""?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="cc-payment" class="control-label mb-1">
                                        {{__('messages.End Date')}}
                                    </label>
                                    <input id="end_date" name="end_date" type="text" class="form-control" required value="<?= isset($enddate)&&$enddate!=0?$enddate:""?>">
                                </div>
                                <div class="col-md-4 appbtn">
                                    <button type="button" onclick="searchappointment()" name="searchbydate" class="btn btn-primary">{{__('messages.Search')}}</button>
                                    <button type="button" name="reset" onclick="Resetappointment()" class="btn btn-primary">{{__('messages.Reset')}}</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table id="service" class="table table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.Token') }} {{ __('messages.Number') }}</th>
                                        <th>Category</th>
                                        <th>Servce Provider</th>
                                        <th>{{__('messages.Service Name')}}</th>
                                        <th>User Name</th>
                                        <th>{{__('messages.Timing')}}</th>
                                        <th>{{__('messages.Messages')}}</th>
                                        <th>{{__('Actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data)>0)
                                       @foreach($data as $d)
                                            <tr>
                                                <td>{{$d->id}}</td>
                                                <td>{{isset($d->department)?$d->department->name:""}}</td>
                                                <td>{{isset($d->doctors)?$d->doctors->name:""}}</td>
                                                <td>{{isset($d->services)?$d->services->name:""}}</td>
                                                <td>{{$d->name}}</td>
                                                <td>{{$d->date.' '.$d->time}}</td>
                                                <td>{{$d->messages}}</td>
                                                <td style="display: flex; gap: 5px; align-items: center;">
                                                    <a href="{{ route('appointment.detail',$d->id) }}" class="btn btn-sm btn-success">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    @if($d->status==3)
                                                        <a href="#" data-app_id="{{ $d->id }}" data-status="{{ $d->status }}" class="btn btn-primary appointment_status">{{__('messages.Approve')}}</a>
                                                    @elseif($d->status==6)
                                                        <a href="#" data-app_id="{{ $d->id }}" data-status="{{ $d->status }}" class="btn btn-primary appointment_status">{{__('messages.Reject')}}</a>
                                                    @elseif($d->status==0)
                                                        <a href="#" data-app_id="{{ $d->id }}" data-status="{{ $d->status }}" class="btn btn-primary appointment_status">{{__('messages.Absent')}}</a>
                                                    @elseif($d->status==1)
                                                        <a href="#" data-app_id="{{ $d->id }}" data-status="{{ $d->status }}" class="btn btn-primary appointment_status">{{__('messages.Receive')}}</a>
                                                    @elseif($d->status==2)
                                                        <a href="#" data-app_id="{{ $d->id }}" data-status="{{ $d->status }}" class="btn btn-primary appointment_status">{{__('messages.Reschedule')}}</a>
                                                    @elseif($d->status==4)
                                                        <a href="#" data-app_id="{{ $d->id }}" data-status="{{ $d->status }}" class="btn btn-primary appointment_status">{{__('messages.Complete')}}</a>
                                                    @elseif($d->status==5)
                                                        <a href="#" data-app_id="{{ $d->id }}" data-status="{{ $d->status }}" class="btn btn-primary appointment_status">{{__('messages.Refer Doctor')}}</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="statusModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Change Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('appointment.update') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="appointmentStatus">
                        <option value="0">Absent</option>
                        <option value="1">Receive</option>
                        <option value="2">Re Schedule</option>
                        <option value="3">Approve</option>
                        <option value="4">Completed</option>
                        <option value="5">Refer Code</option>
                    </select>
                    <input type="text" name="app_id" id="appID" style="display: none;" />
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@stop
@section('footer')
<script>
    $(function(){

        $(document).on('click','.appointment_status',function(){
            let status = $(this).data('status');
            let app_id = $(this).data('app_id');
            $('#appointmentStatus').val(status);
            $('#appID').val(app_id);
            $('#statusModal').modal('show');
        });

    });
</script>
@endsection
