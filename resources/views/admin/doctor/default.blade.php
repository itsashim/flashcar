@extends('admin.layout')
@section('title')
{{__('Services')}}
@stop

<style>
   #service-2_filter {
      float: right;
   }
</style>

@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('Services')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('Services')}}</li>
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
                     <a href="{{url('admin/save-service/0/1')}}" class="btn btn-primary">{{__('messages.Add').' '.__('Services')}}</a>
                     {{--
                     @if(Auth::user()->usertype == "2")
                     <select name="associatedWithhospital" id="associatedWithhospital">
                        <option value="">Select Services</option>
                        @foreach($hospitals as $hospital)
                            <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                        @endforeach
                     </select>
                     @endif

                     --}}

                     {{--

                    @if(Auth::user()->usertype != "4")
                     <select name="city_id" id="cityID" class="float-right select" style="width: 200px;">
                        <option>Select City</option>
                        @foreach($cities as $city)
                           <option value="{{ $city->id }}">{{ $city->name }}</option>
                           @endforeach
                        </select>
                    @endif
                    --}}
                     </div>
                     <h3 class="text-center">Services</h3>
                  <br>
                  <div class="table-responsive">
                    <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Image')}}</th>
                           <th>CarType</th>
                           <!-- <th>{{__('messages.Hospital')}}</th> -->
                           <!-- <th>{{__('City')}}</th> -->
                           <th>{{__('messages.Name')}}</th>
                           <!-- <th>{{__('messages.Email')}}</th> -->
                           <!-- <th>{{__('messages.Phone No')}}</th> -->
                           <th>{{__('Status')}}</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                            @foreach($data as $d)
                                {{-- @if( $d->hospital_id != null ) --}}
                                    <tr>
                                       <td>{{isset($d->id)?$d->id:""}}</td>
                                       <td>
                                          @if($d->image)
                                             <img src="{{asset('public/upload/doctor').'/'.$d->image}}" class="imgsize1" style="width: 150px;"/>
                                          @else
                                             <img src="{{ asset('public/images/doctor.png') }}" alt="" />
                                          @endif
                                       </td>
                                       <td>@if(isset($d->department->name)) {{$d->department->name}} @else - @endif</td>
                                       <!-- <td>@if(isset($d->hospital->name)) {{$d->hospital->name}} @else - @endif</td> -->
                                       <!-- <td>@if(isset($d->city->name)) {{$d->city->name}} @else - @endif</td> -->
                                       <td>{{$d->name}}</td>
                                       <!-- <td>{{$d->email}}</td> -->
                                       <!-- <td>{{$d->phone_no}}</td> -->
                                       <td>
                                          @if($d->status=="Pending")
                                             <span class="badge badge-warning">{{ $d->status }}</span>
                                          @elseif($d->status=="Approved")
                                             <span class="badge badge-success">{{ $d->status }}</span>
                                          @else
                                             <span class="badge badge-danger">{{ $d->status }}</span>
                                          @endif
                                       </td>
                                       <td>
                                          <div class="btn-group" role="group">
                                             <a href="{{url('admin/save-service/').'/'.$d->id.'/1'}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                             </a>
                                             <a href="javascript:deleterow('deletedoctor','<?= $d->id ?>')" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                               {{-- @endif --}}
                            @endforeach
                     </tbody>
                  </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>  
     
    {{-- @if(Auth::user()->usertype != "4")
        <div class="animated fadeIn">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-body">  
                  <h3 class="text-center">Private Doctors</h3>
                  <div class="table-responsive">
                    <table id="service-2" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Image')}}</th>
                           <th>{{__('messages.Department')}}</th>
                           <th>{{__('City')}}</th>
                           <th>{{__('messages.Name')}}</th>
                           <th>{{__('messages.Email')}}</th>
                           <th>{{__('messages.Phone No')}}</th>
                           <th>{{__('Status')}}</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                            @foreach($data as $d)
                                @if( $d->hospital_id == null )
                                    <tr>
                                       <td>{{isset($d->id)?$d->id:""}}</td>
                                       <td>
                                          @if($d->image)
                                             <img src="{{asset('public/upload/doctor').'/'.$d->image}}" class="imgsize1" style="width: 150px;"/>
                                          @else
                                             <img src="{{ asset('public/images/doctor.png') }}" alt="" />
                                          @endif
                                       </td>
                                       <td>@if(isset($d->department->name)) {{$d->department->name}} @else - @endif</td>
                                       <td>@if(isset($d->city->name)) {{$d->city->name}} @else - @endif</td>
                                       <td>{{$d->name}}</td>
                                       <td>{{$d->email}}</td>
                                       <td>{{$d->phone_no}}</td>
                                       <td>
                                          @if($d->status=="Pending")
                                             <span class="badge badge-warning">{{ $d->status }}</span>
                                          @elseif($d->status=="Approved")
                                             <span class="badge badge-success">{{ $d->status }}</span>
                                          @else
                                             <span class="badge badge-danger">{{ $d->status }}</span>
                                          @endif
                                       </td>
                                       <td>
                                          <div class="btn-group" role="group">
                                             <a href="{{url('admin/savedoctor/').'/'.$d->id.'/1'}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                             </a>
                                             <a href="javascript:deleterow('deletedoctor','<?= $d->id ?>')" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                @endif
                            @endforeach
                     </tbody>
                  </table>
                  </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
    @endif --}}
      
</div>
@stop
@section('footer')
<script>
   $('#cityID').on('change',function(){
         let url = "{{ url()->current() }}?city_id="+ $(this).val();
         window.location.href = url;
   });
   
   $('#associatedWithhospital').on('change',function(){
         let url = "{{ url()->current() }}?associatedWithhospital="+ $(this).val();
         window.location.href = url;
   });
</script>
@endsection