@extends('admin.layout')
@section('title')
{{__('Top adds')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Adds</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">Manage Adds</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   @if(Session::get("adds"))
   <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
      {{Session::get("adds")}}
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
   <form method="POST" action="{{ route('topadds.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="animated fadeIn">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-body">
                     <h4 class="card-title">Top Adds Title</h4> 
                        <textarea name="name" id="name" class="w-100"> {{$topadds -> name}} </textarea>
                  </div>
                  <div class="card-body">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
               </div>
            </div>
            
         </div>
      </div>
   </form>
</div>
<div class="modal fade" id="deleteCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <form id="deleteForm" action="#" method="POST">
         @csrf
         @method('DELETE')
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this city?</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-danger">Delete</button>
       </div>
     </div>
      </form>
   </div>
 </div>
@stop
@section('footer')

<script>
   $(function(){

      $(document).on('click','.rowDelete',function(){
         let id = $(this).data('id');
         let url = $(this).data('url');
         $('#deleteCityModal').modal('show');
         $('#deleteForm').attr('action',url);
      });

   });
</script>

@endsection