@extends('admin.layout')
@section('title')
Order Details
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Order Detail</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/order')}}">{{__('Orders')}}</a></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">

   <div class="row">

      
      
      <div class="col-sm-12">
         <div class="card">
            <div class="card-head">
               <?php $user = \App\User::whereId($order->user_id)->first(); ?>

               <table class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Order ID</th>
                        <th>#{{ $order->id }}</th>
                     </tr>
                     @if(auth()->user()->usertype==2)
                     <tr>
                        <th>Customer</th>
                        <th>{{ $user->name }}</th>
                     </tr>
                     <tr>
                        <th>Email</th>
                        <th>{{ $user->email }}</th>
                     </tr>
                     <tr>
                        <th>Phone No</th>
                        <th>{{ $user->phone_no }}</th>
                     </tr>
                     <tr>
                        <th>Address</th>
                        <th>{{ $user->address }}</th>
                     </tr>
                    <tr>
                        <th>Seller</th>
                        <th>{{ ($seller_name)?$seller_name :"-" }}</th>
                    </tr>
                     @endif
                     
                     
                  </thead>
               </table>

            </div>
            <div class="card-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th style="text-align:left;padding-left: 20px;">Products</th>
                        <th></th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     @php $totalAmount = 0; @endphp
                     @foreach($orderDetails as $cartDetail)
                        @if(auth()->user()->usertype==2)
                           <tr>
                              <td>
                                 <div class="cart-info">
                                    <img src="{{ asset('public/'.$cartDetail->product->photo) }}"
                                          alt="">
                                    </div>
                                    </td>
                                    <td  class="text-left">
                                          <div>
                                          <p><b>{{ $cartDetail->product->name }}</b></p>
                                          @if($cartDetail->seller_id)
                                          <small class="small">Seller: {{ $cartDetail->seller_name }} ( {{ $cartDetail->seller_phone }} )</small>
                                          @endif
                                          <br>
                                    </div>
                                    </td>
                              <td>
                                 {{ $cartDetail->quantity }}
                              </td>
                              <td>Rs. {{ $cartDetail->amount }}</td>
                              <td>
                                 @if($cartDetail->status=="Pending")
                                    <span class="badge badge-primary switch_status" data-status="{{ $cartDetail->status }}" data-id="{{ $cartDetail->id }}">{{ $cartDetail->status }} </span>
                                 @elseif($cartDetail->status == "Delivered")
                                    <span class="badge badge-success switch_status" data-status="{{ $cartDetail->status }}" data-id="{{ $cartDetail->id }}">{{ $cartDetail->status }} </span>
                                 @elseif($cartDetail->status == "Not Available")
                                    <span class="badge badge-danger switch_status" data-status="{{ $cartDetail->status }}" data-id="{{ $cartDetail->id }}">{{ $cartDetail->status }} </span>
                                 @else
                                    <span class="badge badge-success">{{ $cartDetail->status }}</span>
                                 @endif
                              </td>
                           </tr>
                        @elseif(auth()->user()->usertype==5)
                           @php
                              $seller = \App\Seller::where('user_id',auth()->user()->id)->first();
                           @endphp
                              @if($seller && $seller->id==$cartDetail->seller_id)
                              <tr>
                                 <td>
                                    <div class="cart-info">
                                       <img src="{{ asset('public/'.$cartDetail->product->photo) }}" alt="">
                                    </div>
                                 </td>
                                 <td  class="text-left">
                                    <div>
                                       <p><b>{{ $cartDetail->product->name }}</b></p>
                                       <br>
                                    </div>
                                 </td>
                                 <td>
                                    {{ $cartDetail->quantity }}
                                 </td>
                                 <td>
                                    Rs. {{ $cartDetail->amount }}
                                    @php $totalAmount = $totalAmount + $cartDetail->amount; @endphp
                                 </td>
                                 <td>
                                    @if($cartDetail->status=="Pending")
                                       <span class="badge badge-primary switch_status" data-status="{{ $cartDetail->status }}" data-id="{{ $cartDetail->id }}">{{ $cartDetail->status }} </span>
                                    @elseif($cartDetail->status == "Delivered")
                                       <span class="badge badge-success" data-status="{{ $cartDetail->status }}" data-id="{{ $cartDetail->id }}">{{ $cartDetail->status }} </span>
                                    @elseif($cartDetail->status == "Not Available")
                                       <span class="badge badge-danger" data-status="{{ $cartDetail->status }}" data-id="{{ $cartDetail->id }}">{{ $cartDetail->status }} </span>
                                    @else
                                       <span class="badge badge-success">{{ $cartDetail->status }}</span>
                                    @endif
                                 </td>
                              </tr>
                              @endif
                        @endif
                     @endforeach
                  </tbody>
                  <tfoot>
                     <tr>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td>
                           @if(auth()->user()->usertype==2)
                           Rs. {{ $order->total_price }}
                           @elseif(auth()->user()->usertype==5)
                           Rs. {{ $totalAmount }}
                           @endif
                        </td>
                     </tr>
                     <tr>
                        <td>Status
                           <span class="badge badge-success">{{ $order->status }}</span>
                           <button  class="btn btn-primary order_status" data-id="{{ $order->id }}" data-status="{{ $order->status }}">
                              Change Status
                           </button>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                     </tr>
                  </tfoot>
      
                </table>
            </div>
         </div>
         
      </div>
   </div>
</div>
<div id="orderStatusModal" class="modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <form action="{{ route('order.status') }}" method="POST">
         @csrf
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title">Order Status</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <input type="text" style="display:none;" id="orderID" name="id" />
         <select class="form-control" id="orderStatus" name="status">
            <option value="Pending">Pending</option>
            <option value="Complete">Complete</option>
            <option value="Cancelled">Cancelled</option>
         </select>
       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Update</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       </div>
     </div>
      </form>
   </div>
 </div>
<div id="orderDetailStatusModal" class="modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <form action="{{ route('order.detail.status') }}" method="POST">
         @csrf
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title">Order Detail Status</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <input type="text" style="display:none;" id="orderDetailID" name="id" />
         <select class="form-control" id="orderDetailStatus" name="status">
            <option value="Pending">Pending</option>
            <option value="Delivered">Delivered</option>
            <option value="Not Available">Not Available</option>
         </select>
       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Update</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       </div>
     </div>
      </form>
   </div>
 </div>
@stop
@section('footer')
<script>
   $(document).on('click','.order_status',function(){
      let id = $(this).data('id');
      let status = $(this).data('status');
      $("#orderID").val(id);
      $('#orderStatus').val(status);
      $('#orderStatusModal').modal('show');
   });
   
   $(document).on('click','.switch_status',function(){
      let id = $(this).data('id');
      let status = $(this).data('status');
      $('#orderDetailID').val(id);
      $('#orderDetailStatus').val(status);
      $('#orderDetailStatusModal').modal('show');
   });
</script>
@endsection