@extends('admin.layout')
@section('title')
{{__('Save Service')}}
@stop
@section('styles')
<style>
    .toggle {
    cursor: pointer;
    display: inline-block;
  }

  .toggle-switch {
    display: inline-block;
    background-color: #ccc;
    border-radius: 16px;
    width: 58px;
    height: 32px;
    position: relative;
    vertical-align: middle;
    transition: background-color 0.25s;
  }
  .toggle-switch:before, .toggle-switch:after {
    content: "";
  }
  .toggle-switch:before {
    display: block;
    background: linear-gradient(to bottom, #fff 0%, #eee 100%);
    border-radius: 50%;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.25);
    width: 24px;
    height: 24px;
    position: absolute;
    top: 4px;
    left: 4px;
    transition: left 0.25s;
  }
  .toggle:hover .toggle-switch:before {
    background: linear-gradient(to bottom, #fff 0%, #fff 100%);
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.5);
  }
  .toggle-checkbox:checked + .toggle-switch {
    background: #56c080;
  }
  .toggle-checkbox:checked + .toggle-switch:before {
    left: 30px;
  }

  .toggle-checkbox {
    position: absolute;
    visibility: hidden;
  }

  .toggle-label {
    margin-left: 5px;
    position: relative;
    top: 2px;
  }
</style>
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('Save Service')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/doctor')}}">{{__('Services')}}</a></li>
               <li class="active">{{__('Save Service')}}</li>
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
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link <?= $tab_id == 1 ? 'active' : "" ?>" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{__('messages.Basic Information')}}</a>
                     </li>
                     {{--
                     <li class="nav-item">
                        <a class="nav-link <?= $tab_id == 2 ? 'active' : "" ?>" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">{{__('messages.Working Hours')}}</a>
                     </li>
                     --}}
                  </ul>
                  <div class="tab-content pl-3 p-1" id="myTabContent">
                     <div class="tab-pane fade <?= $tab_id == 1 ? 'show active' : "" ?>" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form action="{{route('services.store')}}" method="post"  enctype="multipart/form-data">
                           {{csrf_field()}}
                           <input type="hidden" name="id" id="id" value="{{$doctor_id}}"/>
                           <input type="hidden" name="real_image" id="real_image" value="{{ isset($data->image)?$data->image:''}}"/>
                           <div class="form-group">
                              <div class="col-md-6" >
                                 <label for="name" class=" form-control-label">
                                 {{__('messages.Select Department')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <select id="department" name="department" required class="form-control">
                                    <option value="">{{__('messages.Select Department')}}</option>
                                    @foreach($department as $d)
                                    <option value="{{$d->id}}" <?= isset($data->department_id) && $data->department_id == $d->id ? "selected='selected'" : "" ?> >{{$d->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="col-md-6"> 
                                 <label for="name" class=" form-control-label">
                                 {{__('messages.Service Name')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="name" placeholder="{{__('messages.Enter').' '.__('messages.Service Name')}}" class="form-control" required name="name" value="{{ isset($data->name)?$data->name:''}}" >
                              </div>
                           </div>

                           
                           <div class="form-group">
                               <div class="col-md-4">
                                 <label for="daily_charge" class=" form-control-label">
                                 {{__('Service Charge Daily')}}
                                 <!--<span class="reqfield" >*</span>-->
                                 </label>
                                 <input type="text" id="daily_charge" placeholder="{{__('messages.Enter').' '.__('Daily Fee')}}" class="form-control" required name="daily_fee" value="{{ isset($data->daily_fee)?$data->daily_fee:''}}" >
                              </div>
                              <div class="col-md-4">
                                 <label for="phone" class=" form-control-label">
                                 {{__('Service Charge Weekly')}}
                                 <!--<span class="reqfield" >*</span>-->
                                 </label>
                                 <input type="text" id="appointmentFee" placeholder="{{__('messages.Enter').' '.__('Weekly Fee')}}" class="form-control" required name="weekly_fee" value="{{ isset($data->weekly_fee)?$data->weekly_fee:''}}" >
                              </div>
                              <div class="col-md-4">
                                 <label for="phone" class=" form-control-label">
                                 {{__('Service Charge Monthly')}}
                                 <!--<span class="reqfield" >*</span>-->
                                 </label>
                                 <input type="text" id="appointmentFee" placeholder="{{__('messages.Enter').' '.__('Monthky Fee')}}" class="form-control" required name="monthly_fee" value="{{ isset($data->monthly_fee)?$data->monthly_fee:''}}" >
                              </div>
                            
                           </div>
                           {{--@if(Auth::user()->usertype == 2) --}}
                         {{--  <div class="form-group">
                              <div class="col-md-6">
                                 <label for="email" class=" form-control-label">
                                 {{__('messages.Email')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="email" placeholder="{{__('messages.Enter').' '.__('messages.Email')}}" class="form-control" required name="email" value="{{ isset($data->email)?$data->email:''}}" >
                              </div>
                              <div class="col-md-6">
                                 <label for="name" class=" form-control-label">
                                 {{__('messages.Password')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="password" placeholder="{{__('messages.Enter').' '.__('messages.Password')}}" class="form-control" @if(isset($data->id)) @else required @endif name="password" >
                              </div>
                           </div>--}}
                           {{-- @endif --}}
                           <div class="form-group">
                           {{--   <div class="col-md-6">
                                 <label for="phone" class=" form-control-label">
                                 {{__('messages.Phone No')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="phone_no" placeholder="{{__('messages.Enter').' '.__('messages.Phone No')}}" class="form-control" required name="phone_no" value="{{ isset($data->phone_no)?$data->phone_no:''}}" >
                              </div> --}}
                              <div class="col-md-6">
                              </div>
                           </div>
                         
                    
                         
                       
                       {{--    <div class="form-group">
                              <div class="col-md-6">
                                 <label for="phone" class=" form-control-label">
                                 {{__('Experience')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="experience" placeholder="{{__('messages.Enter').' '.__('Experience')}}" class="form-control" required name="experience" value="{{ isset($data->experience)?$data->experience:''}}" >
                              </div>
                              <div class="col-md-6">
                              </div>
                           </div> --}}
                           
                      {{--    <div class="form-group">
                              <div class="col-md-6">
                                 <label for="phone" class=" form-control-label">
                                 {{__('messages.Facebook ID')}}
                                 </label>
                                 <input type="text" id="facebook" placeholder="{{__('messages.Enter').' '.__('messages.Facebook ID')}}"  class="form-control"  name="facebook" value="{{ isset($data->facebook_id)?$data->facebook_id:''}}" >
                              </div>
                              <div class="col-md-6">
                                 <label for="name" class=" form-control-label">
                                 {{__('messages.Twitter ID')}}
                                 </label>
                                 <input type="text" id="twitter_id" placeholder="{{__('messages.Enter').' '.__('messages.Twitter ID')}}"  class="form-control"  name="twitter_id" value="{{ isset($data->twitter_id)?$data->twitter_id:''}}" >
                              </div>
                           </div>--}} 
                      {{--     <div class="form-group">
                              <div class="col-md-6">
                                 <label for="phone" class=" form-control-label">
                                 {{__('messages.Google ID')}}
                                 </label>
                                 <input type="text" id="google_id" placeholder="{{__('messages.Enter').' '.__('messages.Google ID')}}"  class="form-control"  name="google_id" value="{{ isset($data->google_id)?$data->google_id:''}}" >
                              </div>
                              <div class="col-md-6">
                                 <label for="name" class=" form-control-label">
                                 {{__('messages.Instagram ID')}}
                                 </label>
                                 <input type="text" id="instagram_id" placeholder="{{__('messages.Enter').' '.__('messages.Instagram ID')}}"  class="form-control"  name="instagram_id" value="{{ isset($data->instagram_id)?$data->instagram_id:''}}" >
                              </div>
                           </div>--}}
                           <div class=" col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              {{__('messages.Description')}}
                              </label>
                              <textarea required id="description" name="aboutus" class="form-control" >{{ isset($data->about_us)?$data->about_us:''}}</textarea>
                           </div>
                           {{--<div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              {{__('messages.Service')}}<span class="reqfield" >*</span>
                              </label>
                              <textarea id="servicedoctor" name="service"  class="form-control" >{{ isset($data->service)?$data->service:''}}</textarea>
                           </div> --}}
                           
                            <div class="col-md-12 form-group">
                              <label for="city_id" class=" form-control-label">
                                   {{__('city')}}<span class="reqfield" >*</span>
                                   </label>
                                    <select name="city_id" class="form-control">
                                            
                                        @if(isset($data->city->name))
                                            <option value="{{$data->city->id}}" >{{$data->city->name}}</option> 
                                        @else
                                             <option value="#">Select City</option>
                                        @endif
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                     @endforeach
                                    </select>
                                 </div>
                           @if(auth()->user()->usertype==1 || auth()->user()->usertype==2 || auth()->user()->usertype==4)                           
                           <div class="col-md-12 form-group">
                              <label for="status" class=" form-control-label">
                              {{__('messages.Status')}}<span class="reqfield" >*</span>
                              </label>
                              <select name="status" class="form-control">
                                 <option @if(isset($data->status) && $data->status=="Pending") selected @endif>Pending</option>
                                 <option @if(isset($data->status) && $data->status=="Approved") selected @endif>Approved</option>
                                 <option @if(isset($data->status) && $data->status=="Disabled") selected @endif>Disabled</option>

                              </select>
                           </div>
                           @endif
                           <div class="col-md-12 form-group">
                              <label for="file" class=" form-control-label">  
                              {{__('messages.Image')}}
                              <!--<span class="reqfield" >*</span>-->
                              </label>
                              @if($doctor_id!=0)
                                 @if($data->image)
                                 <img src="{{asset('public/upload/doctor').'/'.$data->image}}" class="imgsize1 btndepartwarning" /> 
                                 @else
                                 <img src="{{asset('public/images/doctor.png')}}" class="imgsize1 btndepartwarning" /> 
                                 @endif
                              @endif
                              <div>
                                 <input type="file" id="file" name="image" class="form-control-file" accept="image/*">
                              </div>
                           </div>
                           <div>
                              @if(Session::get("is_demo")=='1')
                              <button id="payment-button" type="button" onclick="disablebtn()"  class="btn btn-lg btn-info floatright">
                              {{__('messages.Submit')}}
                              </button>
                        @else
                             <button id="payment-button" type="submit" class="btn btn-lg btn-info floatright">
                              {{__('messages.Submit')}}
                              </button>
                        @endif
                             
                           </div>
                        </form>
                     </div>
                     
                     <div class="tab-pane fade <?= $tab_id == 2 ? 'show active' : "" ?> btnsaveoption" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{url('admin/updateworkinghours')}}" method="post"  enctype="multipart/form-data">
                           {{csrf_field()}}
                           <input type="hidden" name="id" id="id" value="{{$doctor_id}}"/>
                           <div class="table-responsive">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>{{__('messages.Day')}}</th>
                                    <th>{{__('messages.From')}}</th>
                                    <th>{{__('messages.To')}}</th>
                                    <th>{{__('Token')}}</th>
                                    <th>{{__('messages.Status')}}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php $arr = [ __('messages.Sunday'),__('messages.Monday'), __('messages.Tuesday'), __('messages.Wednesday'), __('messages.Thursday'), __('messages.Friday'), __('messages.Saturday')]; ?>
                                 <?php $i = 0; ?>
                                 @if(count($workinghour)>0)
                                 
                                 @foreach($workinghour as $work)
                                 <tr id="tr_{{$work->id}}">
                                    <td><input type="hidden"  name="work_id[]" id="id{{$i}}" value="<?= isset($work->id) ? $work->id : 0 ?>"></td>
                                    <td><input type="text" name="day[]" id="day{{$i}}"  value="{{$i+1}}" class="form-control" />
                                       @if(($i+1)==1)
                                       <span>{{$arr[0]}}</span>
                                       @elseif(($i+1)==2)
                                       <span> {{$arr[1]}}</span>
                                       @elseif(($i+1)==3)
                                       <span>{{$arr[2]}}</span>
                                       @elseif(($i+1)==4)
                                       <span> {{$arr[3]}}</span>
                                       @elseif(($i+1)==5)
                                       <span> {{$arr[4]}}</span>
                                       @elseif(($i+1)==6)
                                       <span> {{$arr[5]}}</span>
                                       @else
                                       <span> {{$arr[6]}}</span>
                                       @endif
                                    </td>
                                    <td><input type="time" name="from[]" id="from{{$i}}" required {{$work->status==0? 'readonly':''}} class="form-control na-field" value='<?= isset($work->from) ? $work->from : "" ?>'  /></td>
                                    <td><input type="time"  name="to[]" id="to{{$i}}" required {{$work->status==0? 'readonly':''}} value="<?= isset($work->to) ? $work->to : "" ?>" class="form-control na-field" onchange="checktime(this.value,'{{$i}}')" /></td>
                                    
                                    <td><input type="number"  name="token[]" required {{$work->status==0? 'readonly':''}} id="token{{$i}}" value="<?= isset($work->token) ? $work->token : "" ?>" min="0" class="form-control na-field" /></td>
                                    
                                     {{-- <td><input type="checkbox"  class="na" name="" id="na{{$work->id}}" value="{{$work->id}}"></td>  --}}
                           
                                     <td>
                                           <!--<div class="form-check form-switch form-check-custom form-check-solid">-->
                                           <!--     <input class="form-check-input h-25px w-50px" type="checkbox" value=""-->
                                           <!--     id="statusId" checked="{{$work->status==1? 'checked':''}}" data-id="' . $work->id . '" />-->
                                           <!--     <label class="form-check-label" for="flexSwitchChecked">-->
                                           <!--     </label>-->
                                           <!-- </div>-->
                                          <label class="toggle">
                                            <input id="statusId" data-id="{{$work->id}}" {{$work->status==1? 'checked':''}} class="toggle-checkbox" type="checkbox">
                                            <div class="toggle-switch"></div>
                                        </label>
                                     </td>
                                 </tr>
                                 <?php $i++; ?>
                                 @endforeach  
                                 @else
                                 @foreach($arr as $a)
                                 <tr>
                                    <td><input type="hidden" name="work_id[]" id="id{{$i}}" >#</td>
                                    <td><input type="hidden" name="day[]" id="day{{$i}}"  value="{{$i+1}}" class="form-control" />
                                       <span>{{$a}}</span>
                                    </td>
                                    <td><input type="time"  name="from[]" id="from{{$i}}" class="form-control"  required /></td>
                                    <td><input type="time"  name="to[]" id="to{{$i}}"  class="form-control" onchange="checktime(this.value,'{{$i}}')" required /></td>
                                    <td><input type="number"  name="token[]" id="token{{$i}}"  class="form-control" onchange="checktime(this.value,'{{$i}}')" required /></td>
                                    {{-- <td><input type="checkbox"  class="na" name="" id="id{{$i}}" ></td>  --}}
                                 </tr>
                                 <?php $i++; ?>
                                 @endforeach 
                                 @endif
                              </tbody>
                           </table>
                        </div>
                         @if(Session::get("is_demo")=='1')
                            <button id="payment-button" type="button" onclick="disablebtn()"  class="btn btn-lg btn-info floatright">
                              {{__('Submit')}}
                            </button>
                        @else
                             <button id="payment-button" type="submit" class="btn btn-lg btn-info floatright">
                              {{__('Submit')}}
                             </button>
                        @endif
                           
                        </form>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
  <script>
    
        let na = document.querySelectorAll(".na")
        let na_field = document.querySelectorAll(".na-field")
        na.forEach(element => {
          element.addEventListener("click",()=>{
              na_field.forEach(el => {
                if(element.checked == true)
                {
                    
                    el.disabled=true
                     
                }
                else{
                    el.disabled = false
                }
              })
            })
        })
 </script>
 <script>
 
      $('body').on('click', '#statusId', function() {
         
        const id=$(this).attr("data-id");
        const rowId="tr_"+id;
        const selectedRow=document.getElementById(rowId);
        const fromInput=selectedRow.querySelector('[name="from[]"]');
        const toInput=selectedRow.querySelector('[name="to[]"]');
        const tokenInput=selectedRow.querySelector('[name="token[]"]');
        if($(this).is(':checked')) {
                fromInput.readOnly=false;
                toInput.readOnly=false;
                tokenInput.readOnly=false;
                
        }else{
                fromInput.readOnly=true;
                toInput.readOnly=true;
                tokenInput.readOnly=true;
                tokenInput.value=0;
        }
        
        activeInactiveSave(id, $(this).is(':checked'));
        
    })
    function activeInactiveSave(id, toggleBool){
            $.ajax({
                type: "POST",
                url:" {{url('/admin/statusToggle')}}/"+ id,
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                    'status': toggleBool,
                },
            })
    }
 </script>
@stop