@extends('admin.layout')
@section('title')
Create Hospital
@stop
@section('styles')
<link rel="stylesheet" href="{{asset('public/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('public/summernote/summernote.min.css')}}">
@endsection
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Create Hospital</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/city')}}">{{__('messages.Cities')}}</a></li>
               <li class="active">Add Hospital</li>
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
                        <form action="{{ route('hospital.store') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Logo</label>
                                    <input type="file" name="logo" placeholder="Select Logo" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Hospital Name" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="subtitle">Sub Title</label>
                                    <input class="form-control" type="text" name="sub_title" placeholder="Enter Sub Title" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="appointment_fee">Appointment Fee</label>
                                    <input class="form-control" type="number" name="appointment_fee" placeholder="Enter Appointment Fee" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">City</label>
                                    <select name="city_id" class="form-control" required>
                                       <option disabled>Select City</option>
                                       @foreach($cities as $city)
                                       <option value="{{ $city->id }}">{{ $city->name }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="facebook_url">Facebook</label>
                                    <input type="text" name="facebook_url" class="form-control" placeholder="Enter Facebook url" />
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="twitter_url">Twitter</label>
                                    <input type="text" name="twitter_url" class="form-control" placeholder="Enter Twitter url" />
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="instagram_url">Instagram</label>
                                    <input type="text" name="instagram_url" class="form-control" placeholder="Enter Instagram url" />
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="linkedin_url">LinkedIn</label>
                                    <input type="text" name="linkedin_url" class="form-control" placeholder="Enter LinkedIn url" />
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="department">Select Department</label>
                                    <select name="department_ids[]" class="form-control select2" multiple required>
                                       @foreach($departments as $department)
                                          <option value="{{ $department->id }}">{{ $department->name }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>

                              <!--<div class="col-sm-12">-->
                              <!--   <div class="form-group">-->
                              <!--      <label for="department">Select Facility</label>-->
                              <!--      <select name="facility_ids[]" class="form-control select2" multiple required>-->
                              <!--         @foreach($facilities as $facility)-->
                              <!--            <option value="{{ $facility->id }}">{{ $facility->name }}</option>-->
                              <!--         @endforeach-->
                              <!--      </select>-->
                              <!--   </div>-->
                              <!--</div>-->

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

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Gallery</label>
                                    <input type="file" name="gallery[]" multiple class="form-control">
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Detail</label>
                                    <textarea name="detail" class="form-control summernote" id="" cols="30" rows="10"></textarea>
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                       <option value="Pending">Pending</option>
                                       <option value="Approved">Approved</option>
                                       <option value="Disabled">Disabled</option>
                                    </select>
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
<script src="{{ asset('public/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('public/summernote/summernote.min.js') }}"></script>
<script>
   $('.select2').select2({
      "tags":true,
   });

   $('.summernote').summernote();

</script>
@endsection