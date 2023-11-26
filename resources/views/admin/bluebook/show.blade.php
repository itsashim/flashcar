@extends('admin.layout')
@section('title')
Applied Bluebook Details
@stop
@section('content')
<style>
   .mr-10 {
      margin-right: 10px;
   }

   .form-group {
      background: aliceblue;
      border-radius: 10px;
      padding: 0.5rem 0.75rem;
   }
</style>

<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            {{-- <h1>Applied Seller</h1> --}}
            <h1>{{ $title }} </h1>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row rowcenter">
         <div class="col-md-10">
            <div class="card">
               <div class="card-body">
                  @if($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif  

                           <div class="row align-items-center ">
                              {{--<div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Image</label>
                                     <img src="{{ asset('public'.$appliedSeller->image_path) }}" height="200px" /> 
                                     
                                 </div>
                              </div>--}}

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Name:</label> <br>
                                    <span>{{ $appliedSeller->name }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Phone:</label> <br>
                                    <span>{{ $appliedSeller->phone }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Pickup Address:</label> <br>
                                    <span>{{ $appliedSeller->pickup_address }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Type:</label> <br>
                                    <span>{{ $appliedSeller->vehicle_type }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Name:</label> <br>
                                    <span>{{ $appliedSeller->vehicle_name }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Registration No.:</label> <br>
                                    <span>{{ $appliedSeller->vehicle_reg_no }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Engine:</label> <br>
                                    <span>{{ $appliedSeller->vehicle_engine }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Vehicle Insurance:</label> <br>
                                    <span>{{ $appliedSeller->insurance }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Message:</label> <br>
                                    <span>{{ $appliedSeller->message }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Bluebook Quantity:</label> <br>
                                    <span>{{ $appliedSeller->bluebook_qty }}</span>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name" class="font-weight-bold mr-10">Service Charges:</label> <br>
                                    <span>{{ $appliedSeller->service_charge }}</span>
                                 </div>
                              </div>
                              
                              

                              <div class="col-sm-12">
                                 <button class="btn btn-primary approvenow" data-id="{{ $appliedSeller->id }}">Approve Now</button>
                                 <button class="btn btn-danger rejectnow" data-id="{{ $appliedSeller->id }}">Reject Now</button>
                              </div>
                              
                           </div>
                           
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@stop
@section('footer')
<script>
   $(function(){

      $(document).on('click','.approvenow',function(){
        let id = $(this).data('id');
        let url = "{{ route('bluebook.approve-now') }}";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id":id,
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                   alert(data.message);
                   window.location.href = "{{ asset('admin/bluebook') }}";
                }else{
                  alert(data.message);
                   console.log('error');
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });

    $(document).on('click','.rejectnow',function(){
        let id = $(this).data('id');
        let url = "{{ route('bluebook.reject-now') }}";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id":id,
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                   alert(data.message);
                   window.location.href = "{{ asset('admin/bluebook') }}";
                }else{
                  alert(data.message);
                   console.log('error');
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });

   });
</script>
@endsection