@extends('front.layout.front')
@section('title')
    {{ __('messages.My Account') }}
@stop
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    @include('front.members.membernav')

    <style>
        #myPurchase_wrapper {
            overflow-x: scroll;
        }
    </style>

    <div class="container">
        <div class="row mx-0">
            <div class="col-sm-12">
                <table id="myPurchase" class="table table-striped table-bordered" >
                    <thead>
                        <tr>
                            <th>Cart Id</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td style="cursor:pointer;">
                                    @if ($order->status == 'Pending')
                                        <span data-id="{{ $order->id }}"
                                            class="badge badge-warning cancel_order">{{ $order->status }}</span>
                                    @elseif($order->status == 'Complete')
                                        <span class="badge badge-success">{{ $order->status }}</span>
                                    @else
                                        <span class="badge badge-primary">{{ $order->status }}</span>
                                    @endif
                                </td>
                                <td>{{ $order->total_price }}</td>
                                <td style="display: flex; gap: 0.2rem;">
                                    <button class="btn btn-sm btn-primary btnOrderView" data-id="{{ $order->id }}">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                    
                                     @if ($order->status == 'Pending')
                                        <form action="{{ route('order.status.cancel',['id'=> $order->id]) }}" method="POST" class="delete-confirm">
                                            @csrf
                                            @method("DELETE")
                                             <button class="btn btn-sm btn-outline-danger" type="submit">
                                                <i class="fa-solid fa-ban" title="cancel order"></i>
                                            </button>
                                        </form>
                                    @endif
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

     <div id="myOrderModel" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<h5 class="modal-title">Patient Detail</h5>-->
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="OrderDetail">
                </div>
            </div>
        </div>
    </div>

    <div id="myOrderStatusModel" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="{{ route('order.status') }}" method="POST">
                <div class="modal-content">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure want to cancel the order?</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" style="display: none;" name="id" id="orderStatusUpdateID" />
                        <input type="text" style="display: none;" name="status" value="Cancelled" />
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Confirm</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
@endsection
@section('scripts')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $('#myPurchase').dataTable();

        $(document).on('click', '.cancel_order', function() {
            let id = $(this).data('id');
            $('#myOrderStatusModel').modal('show');
            $('#orderStatusUpdateID').val(id);
        });

        $(document).on('click', '.btnOrderView', function() {

            let id = $(this).data('id');
            let url = "{{ asset('myorder/show') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "id": id,
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#myOrderModel').modal('show');
                        $('#OrderDetail').html(data.data);
                    } else {
                        console.log('error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });

        });
    </script>
@endsection
