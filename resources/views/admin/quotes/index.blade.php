@extends('admin.layout')
@section('title')
{{__('Quotes')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('Quotes')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('Quotes')}}</li>
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
                     {{-- <a href="{{url('admin/seller/create')}}" class="btn btn-primary">{{__('messages.Add').' Seller'}}</a> --}}
                  </div>
                  <div class="table-responsive">
                    <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Name')}}</th>
                           <th>{{__('Mobile')}}</th>
                           <th>{{__('Email')}}</th>
                           {{--<th>{{__('Product')}}</th>--}}
                           <th>{{__('Message')}}</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(count($quotes)>0)
                           @foreach($quotes as $d)
                           <tr>
                              <td>{{ isset($d->id)?$d->id:""}}</td>
                              <td>{{ $d->name   }}</td>
                              <td>{{ $d->phone }}</td>
                              <td>{{ $d->email  }}</td>
                             {{-- <td>{{ $d->product->name}}</td>--}}
                              <td>
                                 {{-- <a href="{{ asset('public'.$d->path) }}"> View/Download File</a> --}}
                                 {{$d->message }}
                              </td>
                              <td>
                                 <button data-id="{{$d->id}}" class="btn btn-danger rowDelete">
                                    <i class="fa fa-trash text-white"></i>
                                 </button>
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
      {{-- <form id="deleteForm" action="{{ asset('admin/prescription/delete') }}" method="POST"> --}}
       <form id="deleteForm"  method="POST">
         @csrf
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this quote?</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <input type="text" name="id" id="prescriptionID"  style="display: none;"/>
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
         //let url = $(this).data('action');
         let url = "{{ route('quote.destroy', ':id') }}".replace(':id', id);
         $('#deleteCityModal').modal('show');
         $('#prescriptionID').val(id);
         $('#deleteForm').attr('action',url);
      });

   });
</script>

@endsection