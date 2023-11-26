@extends('admin.layout')
@section('title','Blog Details')
@section('styles')
<!-- summernote -->
<link rel="stylesheet" href="{{asset('public/plugins/summernote/summernote-bs4.min.css')}}">
<style type="text/css">
  .hide{
    display: none;
  }
  .alignright>.dt-buttons{
    float: right;
  }
  .dataTables_paginate{
      float: right;
  }
</style>
@endsection
@section('content')
<div class="content-wrapper" style="min-height: 1302.4px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{ $blog->title }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <img src="{{ asset('public'.$blog->image) }}" /></img>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-12">Description</label>
                    <div class="col-sm-12">
                      {!!  $blog->description !!}"
                    </div>
                  </div>

              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('footer')
<script src="{{asset('public/plugins/summernote/summernote-bs4.js')}}"></script>
<script>
  // Summernote
  $('#blog_description').summernote();

</script>
@endsection
