@extends('admin.layout')
@section('title')
{{__('Bike ')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('Bike ')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('Bike ')}}</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-md-12">
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
                  <div>
                     {{-- <a href="{{url('admin/bike-/create')}}" class="btn btn-primary">{{__('messages.Add').' '}}</a> --}}
                  </div>
                  <div class="table-responsive">
                    <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Image')}}</th>
                           <th>Bike Brand</th>
                           <th>Bike Model</th>
                           <th>Register no.</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(count($categories)>0)
                        @foreach($categories as $d)
                        <tr>
                           <td>{{isset($d->id)?$d->id:""}}</td>
                           
                           <td>
                              <img src="{{ asset('public'.$d->logo_path) }}" alt="" style="height: 80px; width: 80px;">
                           </td>
                           <td>{{$d->bikebrand->name}}</td>
                           <td>{{$d->bikemodels->name}}</td>
                           <td>{{$d->register_no}}</td>
                           <td>
                              <div class="btn-group" role="group">
                                 {{-- <a href="{{route('bike.edit',[$d->id]) }}" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                 </a> --}}
                                 
                                    <a data-url="{{  route('bike.destroy',[$d->id])  }}" data-id="{{  $d->id  }}" class="btn btn-danger rowDelete">
                                       <i class="fa fa-trash text-white"></i>
                                    </a>
                                 

                              </div>
                           </td>
                        </tr>
                        @endforeach
                        @endif
                     </tbody>
                  </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="deleteCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <form id="deleteForm" action="#" method="POST">
         @csrf
         @method('DELETE')
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this bike?</h5>
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