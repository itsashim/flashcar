@extends('admin.layout')
@section('title')
Prescription Details
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Prescription Detail</h1>
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
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <label for="name">Image</label>
                                 <img src="{{ asset('public'.$prescription->path) }}" height="200px" />
                              </div>
                           </div>
                        </div>
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>{{ $prescription->name }}</th>
                              </tr>
                              <tr>
                                 <th>Mobile</th>
                                 <th>{{ $prescription->mobile }}</th>
                              </tr>
                              <tr>
                                 <th>Message</th>
                                 <th>{{ $prescription->message }}</th>
                              </tr>
                              <tr>
                                 <th>Delivery Address</th>
                                 <th>{{ $prescription->delivery_address }}</th>
                              </tr>
                              <tr>
                                  <th>Prescribed Date and Time</th>
                                  <th>{{$prescription->created_at}} {{$prescription->created_at->diffforhumans()}}</th>
                              </tr>
                           </thead>  
                        </table>
                        
                           
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
        let url = "{{ asset('admin/applied-sellers/approve-now') }}";
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
                   window.location.href = "{{ asset('admin/applied-seller') }}";
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
        let url = "{{ asset('admin/applied-sellers/reject-now') }}";
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
                   window.location.href = "{{ asset('admin/applied-seller') }}";
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