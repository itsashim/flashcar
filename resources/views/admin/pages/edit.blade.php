@extends('admin.layout')
@section('title')
Update Page
@stop
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Update Page</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/page')}}">{{__('Page')}}</a></li>
               <li class="active">Update Page</li>
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
                        <form action="{{ route('page.update',[$page->id]) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Title</label>
                                    <input class="form-control" type="text" name="title" placeholder="Enter Title Name" value="{{ $page->title }}" required>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <label for="">Page Category</label>
                                 <select name="page_category_id" class="form-control" id="pageCategory" required>
                                    <option selected disabled>Select Page Category</option>
                                    @foreach($pageCategories as $pageCategory)
                                       <option @if($pageCategory->id==$page->page_category_id) selected="selected" @endif value="{{ $pageCategory->id }}">{{ $pageCategory->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="col-sm-12">
                                 <label for="">Sub Page Category</label>
                                 <select name="page_sub_category_id" id="subPageCategory" class="form-control">
                                    <option selected disabled>Select Sub Page Category</option>
                                 </select>
                              </div>
                              <div class="col-sm-12">
                                 <label for="">Content</label>
                                 <textarea class="summernote" id="textContent" name="content" required>{{ $page->content }}</textarea>
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

@section('footer')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
   $('.summernote').summernote();

   $("#pageCategory").change(function(){
      let url = "{{ route('getSubPageCategory') }}";
      let id = $(this).val();
      $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id":id
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                  let sub_page_category_id = "{{ $page->page_sub_category_id }}";
                  $("#subPageCategory").empty();
                  $("#subPageCategory").append('<option value="" selected="selected" disabled>Select a Sub Page Category</option>');
                  $.each(data.data, function (key, value) {
                     if(value.id==sub_page_category_id){
                        $("#subPageCategory").append('<option selected="selected" value="' + value.id + '">' + value.name + '</option>');
                     }else{
                        $("#subPageCategory").append('<option value="' + value.id + '">' + value.name + '</option>');
                     }
                  });
                }else{
                  console.log(data.data);
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });

   });

   $('#pageCategory').change();
</script>
@endsection