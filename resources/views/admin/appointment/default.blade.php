@extends('admin.layout')
@section('title','Booking')

@section('content')
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
                                    <div class="col-md-2">
                                        <label for="cc-payment" class="control-label mb-1">
                                            Select Status
                                        </label>
                                        <select id="status" name="status" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cc-payment" class="control-label mb-1">
                                            {{ __('messages.Start Date') }}
                                        </label>
                                        <input id="start_date" name="start_date" type="text" class="form-control"
                                            required value="<?= isset($startdate) && $startdate != 0 ? $startdate : '' ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cc-payment" class="control-label mb-1">
                                            {{ __('messages.End Date') }}
                                        </label>
                                        <input id="end_date" name="end_date" type="text" class="form-control" required
                                            value="<?= isset($enddate) && $enddate != 0 ? $enddate : '' ?>">
                                    </div>
                                    <div class="col-md-2 appbtn">
                                        <button type="button" id="searchAppointment" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table id="service" class="table table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{ __('messages.Token') }} {{ __('messages.Number') }}</th>
                                            <th>Category</th>
                                            <th>Car</th>
                                            <th>Booked By</th>
                                            <th>Pickup Location</th>
                                            <th>Pickup Date</th>
                                            <th>Pickup Time</th>
                                            <th>Drop Location</th>
                                            <th>Drop Date</th>
                                            <th>Drop Time</th>
                                            <th>Payment Method</th>
                                            <th>Payment Currency</th>
                                            <th>Payment Amount</th>
                                            <th>Booking Status</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($data) > 0)
                                            @php $i=0 @endphp
                                            @foreach ($data as $d)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ isset($d->department) ? $d->department->name : '' }}</td>
                                                    <td>{{ $d->doctor->name }}</td>
                                                    <td>{{ $d->bookedBy->name }}</td>
                                                    <td>{{ isset($d->pickup_location) ? $d->pickup_location : '' }}</td>
                                                    <td>{{ isset($d->pickup_date) ? $d->pickup_date : '' }}</td>
                                                    <td>{{ isset($d->pickup_time) ? $d->pickup_time : '' }}</td>
                                                    <td>{{ isset($d->drop_location) ? $d->drop_location : '' }}</td>
                                                    <td>{{ isset($d->drop_date) ? $d->drop_date : '' }}</td>
                                                    <td>{{ isset($d->drop_time) ? $d->drop_time : '' }}</td>
                                                    <td>{{ isset($d->payment_method) ? $d->payment_method : '' }}</td>
                                                    <td>{{ isset($d->currency_symbol) ? $d->currency_symbol : '' }}</td>
                                                    <td>{{ isset($d->amount) ? $d->amount : '' }}</td>
                                                    <td><span class="badge badge-primary">{{ $d->status }}</span></td>
                                                    <td style="display: flex; gap: 5px; align-items: center;">
                                                        <a href="{{ route('appointment.detail', $d->id) }}"
                                                            class="btn btn-sm btn-success">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
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
                                <option value="3">Approve</option>
                                <option value="4">Completed</option>
                                <option value="6">Reject</option>
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
@endsection
@section('footer')
    <script>
        $(function() {

            $(document).on('click', '.appointment_status', function() {
                let status = $(this).data('status');
                let app_id = $(this).data('app_id');
                $('#appointmentStatus').val(status);
                $('#appID').val(app_id);
                $('#statusModal').modal('show');
            });

            $(document).on('click','#searchAppointment',function(){
                console.log('clicked');
                let start_date = $('#start_date').val();
                let end_date = $('#end_date').val();
                let status = $('#status').val();
                let appointment_url = '{{ asset("admin/appointment") }}'+'/'+start_date+'/'+end_date+'?status='+status;
                window.location.href = appointment_url;
            });

        });
    </script>
@endsection
