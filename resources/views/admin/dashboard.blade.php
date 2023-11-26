@extends('admin.layout')
@section('title')
{{__('messages.Dashboard')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Dashboard')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('messages.Dashboard')}}</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
@can('appointment-view')
<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="{{url('admin/appointment/0/0')}}">
         <div class="card-body">
            <div class="stat-widget-one" >
               <div class="stat-icon dib">
                  <i class="fa fa-calendar text-primary border-primary"></i>
               </div>
               <div class="stat-content dib">
                  <div class="stat-text">{{__('messages.Total')}}</div>
               <div class="stat-text">{{__('messages.Appointment')}}</div>
                  @if(auth()->user()->usertype==4)
                     <?php
                     $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first();
                     $appointmentCount = \App\Model\Appointment::where('hospital_id',$hospital->id)->count(); ?>
                     <div class="stat-digit">{{$appointmentCount}}</div>
                  @elseif(auth()->user()->usertype==3)
                     <?php
                     $doctor = \App\Model\Doctor::where('user_id',auth()->user()->id)->first();
                     $appointmentCount = \App\Model\Appointment::where('doc_id',$doctor->id)->count();
                     ?>
                     <div class="stat-digit">{{$appointmentCount}}</div>
                  @else
                     <div class="stat-digit">{{$totaldoctor}}</div>
                  @endif
               </div>
            </div>
         </div>
      </a>
   </div>
</div>
@endcan
@can('department-view')
<div class="col-xl-3 col-lg-6">
   <div class="card">
     <a href="{{url('admin/department')}}"> <div class="card-body">
         <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
            <div class="stat-content dib">
               <div class="stat-text">{{__('messages.Total')}}</div>
               <div class="stat-text">Categories
               </div>
               @if(auth()->user()->usertype==4)
                  <?php $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first(); ?>
                  <div class="stat-digit">{{ count(json_decode($hospital->department_ids)) }}</div>
               @else
                  <div class="stat-digit">{{$totaldepartment}}</div>
               @endif
            </div>
         </div>
      </div></a>
   </div>
</div>
@endcan
<!--@can('service-view')-->
<!--<div class="col-xl-3 col-lg-6">-->
<!--   <div class="card">-->
<!--      <a href="{{url('admin/service')}}">-->
<!--         <div class="card-body">-->
<!--            <div class="stat-widget-one">-->
<!--               <div class="stat-icon dib"><i class="ti-book  text-warning border-warning"></i></div>-->
<!--               <div class="stat-content dib">-->
<!--                  <div class="stat-text">{{__('messages.Total')}}</div>-->
<!--                  <div class="stat-text">{{__('messages.Facilities')}}</div>-->
<!--                  @if(auth()->user()->usertype==4)-->
<!--                     <?php $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first(); ?>-->
<!--                     <div class="stat-digit">{{ count(json_decode($hospital->facility_ids)) }}</div>-->
<!--                  @else-->
<!--                     <div class="stat-digit">{{$totalservice}}</div>-->
<!--                  @endif-->
                  
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </a>-->
<!--   </div>-->
<!--</div>-->
<!--@endcan-->
@can('doctor-view')
<div class="col-xl-3 col-lg-6">
   <div class="card">
     <a href="{{url('admin/doctor')}}"> <div class="card-body">
         <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="fa fa-user  text-danger border-danger"></i></div>
            <div class="stat-content dib">
               <div class="stat-text">{{__('messages.Total')}}</div>
               <div class="stat-text">{{__('Services')}}</div>
               @if(auth()->user()->usertype==4)
                  <?php $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first();
                        $doctorsCount = \App\Model\Doctor::where('hospital_id',$hospital->id)->count();
                  ?>
                  <div class="stat-digit">{{ $doctorsCount }}</div>
               @else
                  <div class="stat-digit">{{$totaldoctor}}</div>
               @endif
               {{-- <div class="stat-digit">{{$totaldoctor}}</div> --}}
            </div>
         </div>
      </div></a>
   </div>
</div>

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="{{url('admin/product')}}">
         <div class="card-body">
            <div class="stat-widget-one" >
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib">
                  <div class="stat-text">{{__('messages.Total')}}</div>
                  <div class="stat-text">{{__('Categories')}}
                  </div>
                    
                  <div class="stat-digit">{{ $totaldepartment }}</div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

@endcan

@if(auth()->user()->usertype == '5' )

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="{{url('admin/product')}}">
         <div class="card-body">
            <div class="stat-widget-one" >
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib">
                  <div class="stat-text">{{__('messages.Total')}}</div>
                  <div class="stat-text">{{__('My Products')}}
                  </div>
                  <?php $seller = \App\Seller::where('user_id',auth()->user()->id)->first(); 
                        $productCount = \App\Product::where('seller_id',$seller->id)->count();
                  ?>
                  <div class="stat-digit">{{ $productCount }}</div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="{{url('admin/order')}}">
         <div class="card-body">
            <div class="stat-widget-one" style="display: flex; white-space: nowrap;">
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib" >
                  <div class="stat-text">{{__('messages.Total')}}</div>
                  <div class="stat-text">{{__('Pending Order Items')}}
                  </div>
                  <?php $seller = \App\Seller::where('user_id',auth()->user()->id)->first(); 
                        $orderCount = \App\OrderDetail::where('seller_id',$seller->id)->where('status','Pending')->count();
                  ?>
                  <div class="stat-digit">{{ $orderCount }}</div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="{{url('admin/order')}}">
         <div class="card-body">
            <div class="stat-widget-one">
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib">
                  <div class="stat-text">{{__('messages.Total')}}</div>
                  <div class="stat-text">{{__('Sold Order Items')}}
                  </div>
                  <?php $seller = \App\Seller::where('user_id',auth()->user()->id)->first(); 
                        $soldOrderCount = \App\OrderDetail::where('seller_id',$seller->id)->where('status','Checkout')->count();
                  ?>
                  <div class="stat-digit">{{ $soldOrderCount }}</div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

<div class="col-xl-3 col-lg-6">
   <div class="card">
      <a href="{{url('admin/order')}}">
         <div class="card-body">
            <div class="stat-widget-one">
               <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
               <div class="stat-content dib">
                  <div class="stat-text">{{__('messages.Total')}}</div>
                  <div class="stat-text">{{__('Delivered Items')}}
                  </div>
                  <?php $seller = \App\Seller::where('user_id',auth()->user()->id)->first(); 
                        $soldOrderCount = \App\OrderDetail::where('seller_id',$seller->id)->where('status','Delivered')->count();
                  ?>
                  <div class="stat-digit">{{ $soldOrderCount }}</div>
               </div>
            </div>
         </div>
      </a>
   </div>
</div>

@endif
<div class="col-md-12 flt">
   <div class="row">
      @can('doctor-view')
      <div class="col-md-12 col-xl-6 col-12 flat-r">
         <div class="card">
            <div class="card-body">
               <h4 class="orderh4">
                  <i class="fa fa-calendar mr-2" aria-hidden="true"></i>{{__('messages.Latest').' '.__('messages.Appointment')}} 
                  <a class="btn btn-primary btn-flat m-b-30 m-t-30 elec textorder" href="{{url('admin/appointment/0/0')}}">{{__('messages.Show All')}}</a>
               </h4>
               <div class="table-responsive dtdiv">
                  <table id="latestorderTable" class="table table-striped dttablewidth">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Name')}}</th>
                           <th>Customer Name</th>
                           <th>Category Name</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(count($leastappointment)>0) 
                       {{--  @if(isset($leastappointment)) --}}
                            @foreach($leastappointment as $d)
                                  <tr>
                                     <td>{{$d->id}}</td>
                                     <td>{{isset($d->doctors)?$d->doctors->name:""}}</td>
                                     <td>{{isset($d->name)?$d->name:""}}</td>
                                     <td>{{isset($d->department)?$d->department->name:""}}</td>
                                  </tr>
                            @endforeach
                        @endif
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      @endcan
      @can('review-view')
      <div class="col-md-12 col-xl-6 col-12 flat-r">
         <div class="card">
            <div class="card-body">
               <h4 class="orderh4">
                  <i class="fa fa-comments-o mr-2" aria-hidden="true"></i>{{__('messages.Latest').' '.__('messages.Review')}}
                  <a class="btn btn-primary btn-flat m-b-30 m-t-30 elec textorder" href="{{url('admin/review')}}">{{__('messages.Show All')}}</a>
               </h4>
               <div class="table-responsive dtdiv">
                  <table id="myTablereview" class="table table-striped dttablewidth">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Name')}}</th>
                           <th>Customer Name</th>
                           <th>{{__('messages.Ratting')}}</th>
                        </tr>
                     </thead>
                      <tbody>
                        {{-- @if(count($leastreview)>0) --}}
                            @foreach($leastreview as $d)
                                <tr>
                                   <th>{{$d->id}}</th>
                                   <td>{{isset($d->doctors)?$d->doctors->name:""}}</td>
                                   <td>{{isset($d->users)?$d->users->name:""}}</td>
                                   <td>{{isset($d->ratting)?$d->ratting:""}}</td>
                                </tr>
                            @endforeach
                        {{-- @endif     --}}                 
                     </tbody> 
                  </table>
               </div>
            </div>
         </div>
      </div>
      @endcan
   </div>
</div>
@stop
@section('footer')
<script type="text/javascript">adminchangelogin()</script>
@stop