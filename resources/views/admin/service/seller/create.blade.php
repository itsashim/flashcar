@extends('admin.layout')
@section('title')
Create Seller
@stop

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Create Seller</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/seller')}}">{{__('Seller')}}</a></li>
               <li class="active">Add Seller</li>
            </ol>
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
                  @if(Session::get("message"))
                  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                     {{Session::get("message")}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif  
                        <form action="{{ route('seller.store') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Image</label>
                                    <input type="file" name="image_path" placeholder="Select Image" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Seller Name" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Phone</label>
                                    <input class="form-control" type="text" name="phone" placeholder="Enter Phone Number">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Address</label>
                                    <input class="form-control" type="text" name="address" placeholder="Enter Address">
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Cities</label>
                                    <select class="form-control select2" name="city_ids[]" multiple>
                                        <option value="">Select City</option>
                                        @foreach(\App\City::all() as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <button class="btn btn-primary">Save</button>
                              </div>
                              
                           </div>
                           
                        </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.select2').select2({
        "tags":true,
    });
</script>
@endsection