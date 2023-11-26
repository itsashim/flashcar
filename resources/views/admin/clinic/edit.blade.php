@extends('admin.layout')
@section('title')
Edit Clinic
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Edit Clinic</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/city')}}">{{__('messages.Cities')}}</a></li>
               <li class="active">Edit Clinic</li>
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
                  <form action="{{ route('clinic.update',[$hospital->id]) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label for="name">Logo</label>
                              <img src="{{ asset('public'.$hospital->logo) }}" height="200px" />
                              <input type="file" name="logo" placeholder="Select Logo" required>
                           </div>
                        </div>

                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="name">Name</label>
                              <input class="form-control" type="text" name="name" placeholder="Enter City Name" value="{{ $hospital->name }}" required>
                           </div>
                        </div>

                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="name">City</label>
                              <select name="city_id" class="form-control" required>
                                 <option disabled>Select City</option>
                                 @foreach($cities as $city)
                                 <option @if($city->id==$hospital->city_id) selected="selected" @endif value="{{ $city->id }}">{{ $city->name }}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>

                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="name">Phone</label>
                              <input class="form-control" type="text" name="phone" placeholder="Enter Phone Number" value="{{ $hospital->phone }}">
                           </div>
                        </div>

                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="name">Address</label>
                              <input class="form-control" type="text" name="address" placeholder="Enter Address" value="{{ $hospital->address }}">
                           </div>
                        </div>

                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="name">Email</label>
                              <input class="form-control" type="email" name="email" placeholder="Enter Email" required value="{{ $hospital->email }}">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="name">Password( Only fill to update new password )</label>
                              <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                           </div>
                        </div>

                        <div class="col-sm-12">
                           @foreach($hospitalGalleries as $gallery)
                              <img src="{{ asset('public/storage/'.$gallery->image_path) }}" height="200px" />
                           @endforeach
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
                              <textarea name="detail" class="form-control" id="" cols="30" rows="10">{{ $hospital->detail }}</textarea>
                              <input class="form-control" type="text" name="address" placeholder="Enter Address">
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