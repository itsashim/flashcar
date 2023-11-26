@extends('admin.layout')
@section('title')
Edit Category
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Edit Category</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/city')}}">{{__('messages.Cities')}}</a></li>
               <li class="active">Edit Category</li>
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
                        <form action="{{ route('category.update',[$category->id]) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Enter Category Name" value="{{ $category->name }}">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <img src="{{ asset('public'.$category->image) }}">
                                    <label for="name">Image</label>
                                    <input type="file" name="image" placeholder="Enter Image">
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