@extends('admin.layout')
@section('title')
Edit Bike Model
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Edit Bike Model</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/sub-category')}}">{{__('Bike Model')}}</a></li>
               <li class="active">Edit Bike Model</li>
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
                        <form action="{{ route('bikemodel.update',[$bikemodel->id]) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Bike Model Name" value="{{ $bikemodel->name }}">
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Bike Brand</label>
                                    <select name="bikebrand_id" id="" class="form-control">
                                       @foreach($categories as $category)
                                           <option value="{{ $category->id }}" @if($category->id == $bikemodel->category_id) selected @endif>
                                               {{ $category->name }}
                                           </option>
                                       @endforeach
                                   </select>                                   
                                    
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <img src="{{ asset('public'.$bikemodel->logo_path) }}">
                                    <label for="name">Image</label>
                                    <input type="file" name="logo_path" placeholder="Enter Image" class="form-control">
                                 </div>
                              </div>

                              <button class="btn btn-primary">Save</button>
                              
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