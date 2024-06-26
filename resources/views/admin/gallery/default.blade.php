@extends('admin.layout')

@section('title')

{{__('messages.Gallery')}}

@stop

@section('content')

<div class="breadcrumbs">

   <div class="col-sm-4">

      <div class="page-header float-left">

         <div class="page-title">

            <h1>{{__('messages.Gallery')}}</h1>

         </div>

      </div>

   </div>

   <div class="col-sm-8">

      <div class="page-header float-right">

         <div class="page-title">

            <ol class="breadcrumb text-right">

               <li class="active">{{__('messages.Gallery')}}</li>

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

                     <a href="{{url('admin/savealbum/0')}}" class="btn btn-primary">{{__('messages.Add Album')}}</a>

                  </div>

                  <div class="table-responsive">

                  <table id="service" class="table  table-striped table-bordered">

                     <thead>

                        <tr>

                           <th>{{__('messages.Id')}}</th>

                           <th>{{__('messages.Name')}}</th>

                           <th>{{__('messages.Action')}}</th>

                        </tr>

                     </thead>

                     <tbody>

                        @if(count($data)>0)

                        @foreach($data as $d)

                        <tr>

                           <td>{{$d->id}}</td>

                           <td>{{$d->name}}</td>

                           <td>
                              <div class="btn-group" role="group">
                                 
                                 <a href="{{url('admin/savealbum/').'/'.$d->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
   
                                 <a href="javascript:deleterow('deletealbum','<?= $d->id ?>')" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
   
                                 <a href="{{url('admin/addphoto/').'/'.$d->id}}" class="btn btn-warning btndepartwarning">
                                    <i class="fa fa-plus" alt="Add Photo"></i> Add Photos
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

@stop