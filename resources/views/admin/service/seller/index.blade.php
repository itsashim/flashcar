@extends('admin.layout')
@section('title')
{{__('Seller')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('Seller')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('Seller')}}</li>
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
                     <a href="{{url('admin/seller/create')}}" class="btn btn-primary">{{__('messages.Add').' Seller'}}</a>
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
                           <th>{{__('Cities')}}</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(count($data)>0)
                        @foreach($data as $d)
                        <tr>
                           <td>{{isset($d->id)?$d->id:""}}</td>
                           <td>
                              @if($d->image_path)
                                 <img src="{{asset('public/'.$d->image_path)}}" height="200px" />
                              @else
                                 <img src="{{ asset('public/images/seller.jpeg') }}" height="200px" />
                              @endif
                           </td>
                           <td>{{$d->name}}</td>
                           <td>{{$d->email}}</td>
                           <td>{{$d->phone}}</td>
                           <td>{{$d->address}}</td>
                           <td>
                              <?php $cities = json_decode($d->city_ids); ?>
                              @if($cities!=null)
                              @foreach($cities as $city)
                              @if($loop->first)
                                 <?php 
                                    $filtercity = \App\City::where('id',$city)->first(); 
                                    if($filtercity)
                                       echo $filtercity->name;
                                 ?>
                              @else
                                 , <?php 
                                    $filtercity = \App\City::where('id',$city)->first(); 
                                    if($filtercity)
                                       echo $filtercity->name;
                                 ?>
                              @endif
                              @endforeach
                              @endif
                           </td>
                           <td>
                              <div class="btn-group" role="group">
                                 <a href="{{route('seller.edit',[$d->id]) }}" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                 </a>
                                 <a data-url="{{  route('seller.destroy',[$d->id])  }}" data-id="{{  $d->id  }}" class="btn btn-danger rowDelete">
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
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this seller?</h5>
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