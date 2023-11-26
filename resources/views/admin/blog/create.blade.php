@extends('admin.layout')
@section('title','Add Blog')
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
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
                <h3 class="card-title">Add Blog</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input name="title" type="text" class="form-control" placeholder="Title" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input name="image" type="file" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-12">Description</label>
                    <div class="col-sm-12">
                      <textarea id="blog_description" name="description" class="form-control" required></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                  </div>
                  
                </form>
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
