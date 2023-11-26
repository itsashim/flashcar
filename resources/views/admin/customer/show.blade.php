@extends('admin.layout')
@section('title')
{{__('Customer')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('Patient List')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('Customer')}}</li>
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
                     <a href="{{url('admin/customer/create')}}" class="btn btn-primary">{{__('messages.Add').' Patient'}}</a>
                  </div>
                  <div class="table-responsive">
                    <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('Image')}}</th>
                           <th>{{__('messages.Name')}}</th>
                           <th>{{__('messages.Email')}}</th>
                           <th>{{__('Phone')}}</th>
                           <th>{{__('Address')}}</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(count($data)>0)
                        @foreach($data as $d)
                        <tr>
                           <td>{{isset($d->id)?$d->id:""}}</td>
                           <td>
                              @if($d->profile_pic)
                              <img src="{{asset('public/'.$d->profile_pic)}}" height="200px" />
                              @else
                              <img style="height: 200px;width:200px;" src="{{ asset('public/upload/profile/profile_243682.png') }}" alt="" />
                              @endif
                           </td>
                           <td>{{$d->name}}</td>
                           <td>{{$d->email}}</td>
                           <td>{{$d->phone_no}}</td>
                           <td>{{$d->address}}</td>
                           <td>
                              <a href="{{route('customer.show',[$d->id]) }}" class="btn btn-success">{{__('View')}}</a>
                           <!--   <a href="{{route('customer.edit',[$d->id]) }}" class="btn btn-primary">{{__('messages.Edit')}}</a>-->
                           <!--   <a data-url="{{  route('customer.destroy',[$d->id])  }}" data-id="{{  $d->id  }}" class="btn btn-danger rowDelete">{{__('messages.Delete')}}</a>-->
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
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this seller?</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
       </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-success">View</button>
       </div>
       <!--<div class="modal-footer">-->
       <!--  <button type="submit" class="btn btn-danger">Delete</button>-->
       <!--</div>-->
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