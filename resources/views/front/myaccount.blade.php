@extends('front.layout')
@section('title')
    {{ __('messages.My Account') }}
@stop
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav container">
        <li class="nav-item active">
          <a class="nav-link" href="#">My Account </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Appointment Histories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Patients List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Purchased Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Subscription History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="part-form-main-box" style="padding-top: 40px;">
                <form action="{{ url('updateprofile') }}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="tab-profile-main-box">
                        <div class="tab-profileimg-main-box" style="padding-top: 20px;">
                            @if (Auth::user()->profile_pic)
                                <img src="{{ asset('public/upload/profile') . '/' . Auth::user()->profile_pic }}">
                            @else
                                <img src="{{ asset('public/upload/profile/profile.png') }}">
                            @endif
                            <input type="file" name="image">
                        </div>

                        <div class="tab-profile-form-box" style="padding-top: 20px;">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Your name" required value="{{ Auth::user()->name }}">
                            <label for="email">Email</label>
                            <input type="email" readonly name="email" required placeholder="Email address" value="{{ Auth::user()->email }}">
                            <label for="phone_no">Phone Number</label>
                            <input type="text" name="phone_no" required id="phone_no" placeholder="Phone number" value="{{ Auth::user()->phone_no }}">

                            <label for="password">Password <span style="color: green;">(Leave blank if you don't want to update password)</span></label>
                            <input type="password" name="password" autocomplete="off"/>
                        </div>
                    </div>
                    <button style="width: 140px;float: right;color: white!important;margin-right: 25px" type="submit">Update</button>
                </form>
            </div>
        </div>
        <div class="col-sm-3"></div>    
    </div>
  </div>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <div class="my-accountpg-main-box">
        <div class="myaccountpg-main-tabbox">
            <div class="container d-flex">
                <ul id="tabs" class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a id="tab-ap" href="#pane-ap" class="nav-link active" data-toggle="tab" role="tab">
                            {{ __('messages.Appointment history') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="tab-pl" href="#pane-pl" class="nav-link" data-toggle="tab" role="tab">
                            {{ __('Patient List') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="tab-products" href="#pane-products" class="nav-link" data-toggle="tab" role="tab">
                            {{ __('My Products Purchases') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="tab-su" href="#pane-su" class="nav-link" data-toggle="tab" role="tab">
                            {{ __('messages.Subcription history') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="tab-my" href="#pane-my" class="nav-link" data-toggle="tab" role="tab">
                            {{ __('messages.My profile') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="tab-ch" href="#pane-ch" class="nav-link" data-toggle="tab" role="tab">
                            {{ __('messages.Change password') }}
                        </a>
                    </li>
                    <!--	<li class="nav-item">
       <a id="tab-lg" href="javascript:logout()" class="nav-link" role="tab">
       {{ __('messages.Log out') }}
       </a>
       </li>-->
                </ul>
            </div>
        </div>
        <div class="myaccountpg-main-tabcontentbox">
            <div class="container">
                <div id="content" class="tab-content" role="tablist">
                    <div id="pane-ap" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-ap">
                        <div class="card-header" role="tab" id="heading-A">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-A" data-parent="#content" aria-expanded="true"
                                    aria-controls="collapse-A">
                                    {{ __('messages.Appointment history') }}
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-A" class="collapse in" role="tabpanel" aria-labelledby="heading-A">
                            <div class="card-body">
                                @if (Session::has('message'))
                                    <div class="col-sm-12">
                                        <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show"
                                            role="alert">{{ Session::get('message') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                                <div class="tab-appointment-main-box">
                                    <h5>{{ __('messages.Upcoming') }}</h5>
                                    <div class="tab-appointment-part-box">
                                        @if (count($upcomming) > 0)
                                            @foreach ($upcomming as $u)
                                                <div class="tab-appointment-box" data-aos-anchor-placement="top-bottom">
                                                    <div class="tab-part-box">
                                                        <?php
                                                        if (isset($u->doctors->image)) {
                                                            $path = asset('public/upload/doctor') . '/' . $u->doctors->image;
                                                        } else {
                                                            $path = asset('public/upload/profile/profile.png');
                                                        }
                                                        
                                                        ?>
                                                        <img src="{{ $path }}">
                                                        <div class="tab-timingd-box">
                                                            <div class="tab-appointment-time-box">
                                                                <i class="far fa-clock"></i>
                                                                <span><?php
                                                                $date = date_create($u->time);
                                                                echo date_format($date, 'H:i a'); ?></span>
                                                            </div>
                                                            <div class="tab-appointment-calendar-box">
                                                                <i class="far fa-calendar-alt"></i>
                                                                <span><?php
                                                                $date = date_create($u->date);
                                                                echo date_format($date, 'd F,Y'); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="tab-appointment-detail-box">
                                                        <h4>{{ $u->doctors->name }}</h4>
                                                        @if ($u->status == 3)
                                                            <span class="pending">{{ __('messages.Approve') }}</span>
                                                        @elseif($u->status == 6)
                                                            <span class="pending">{{ __('messages.Reject') }}</span>
                                                        @elseif($u->status == 0)
                                                            <span class="pending">{{ __('messages.Absent') }}</span>
                                                        @elseif($u->status == 1)
                                                            <span class="pending">{{ __('messages.Receive') }}</span>
                                                        @elseif($u->status == 2)
                                                            <span class="pending">{{ __('messages.Reschedule') }}</span>
                                                        @elseif($u->status == 4)
                                                            <span class="pending">{{ __('messages.Complete') }}</span>
                                                        @elseif($u->status == 5)
                                                            <span class="pending">{{ __('messages.Refer Doctor') }}</span>
                                                        @endif

                                                    </div>

                                                    <div class="tab-appointment-detail2-box">
                                                        <span>{{ $u->department->name }}</span>
                                                        <h6>
                                                            @if (isset($u->services->name))
                                                                {{ $u->services->name }}
                                                            @else
                                                                {{ $u->doctors->name }}
                                                            @endif
                                                        </h6>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <h3>{{ __('messages.Upcoming Appointment Not Avilable') }}</h3>
                                        @endif
                                    </div>
                                    <h5>{{ __('messages.Past') }}</h5>
                                    <div class="tab-appointment-part-box">

                                        @if (count($past) > 0)
                                            @foreach ($past as $u)
                                                <div class="tab-appointment-box" data-aos-anchor-placement="top-bottom">
                                                    <div class="tab-part-box">
                                                        <?php
                                                        if (isset($u->doctors->image)) {
                                                            $path = asset('public/upload/doctor') . '/' . $u->doctors->image;
                                                        } else {
                                                            $path = asset('public/upload/profile/profile.png');
                                                        }
                                                        
                                                        ?>
                                                        <img src="{{ $path }}">
                                                        <div class="tab-timingd-box">
                                                            <div class="tab-appointment-time-box">
                                                                <i class="far fa-clock"></i>
                                                                <span><?php
                                                                $date = date_create($u->time);
                                                                echo date_format($date, 'H:i a'); ?></span>
                                                            </div>
                                                            <div class="tab-appointment-calendar-box">
                                                                <i class="far fa-calendar-alt"></i>
                                                                <span><?php
                                                                $date = date_create($u->date);
                                                                echo date_format($date, 'd F,Y'); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-appointment-detail-box">
                                                        <h4>{{ $u->doctors->name }}</h4>
                                                        @if ($u->status == 3)
                                                            <span class="pending">{{ __('messages.Approve') }}</span>
                                                        @elseif($u->status == 6)
                                                            <span class="pending">{{ __('messages.Reject') }}</span>
                                                        @elseif($u->status == 0)
                                                            <span class="pending">{{ __('messages.Absent') }}</span>
                                                        @elseif($u->status == 1)
                                                            <span class="pending">{{ __('messages.Receive') }}</span>
                                                        @elseif($u->status == 2)
                                                            <span class="pending">{{ __('messages.Reschedule') }}</span>
                                                        @elseif($u->status == 4)
                                                            <span class="pending">{{ __('messages.Complete') }}</span>
                                                        @elseif($u->status == 5)
                                                            <span class="pending">{{ __('messages.Refer Doctor') }}</span>
                                                        @endif

                                                    </div>
                                                    <div class="tab-appointment-detail2-box">
                                                        <h6>
                                                            @if (isset($u->services->name))
                                                                {{ $u->services->name }}
                                                            @else
                                                                {{ $u->doctors->name }}
                                                            @endif
                                                        </h6>
                                                        <span>{{ $u->department->name }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <h3>{{ __('messages.In Past You dont make it any appointment') }}</h3>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pane-pl" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-pl">
                        <div class="card-header" role="tab" id="heading-pl">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-B" data-parent="#content"
                                    aria-expanded="false" aria-controls="collapse-B">
                                    {{ __('messages.Subcription history') }}
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-patients" class="collapse" role="tabpanel" aria-labelledby="heading-patients">
                            <div class="card-body table-responsive">
                                <table id="patientTable" class="table table-striped table-hovered table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Age</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($patients) > 0)
                                            @foreach ($patients as $patient)
                                                <tr>
                                                    <td>{{ $patient->first_name }}</td>
                                                    <td>{{ $patient->last_name }}</td>
                                                    <td>{{ $patient->phone }}</td>
                                                    <td>{{ $patient->email }}</td>
                                                    <td>{{ $patient->age }}</td>
                                                    <td>{{ $patient->dob }}</td>
                                                    <td>{{ $patient->gender }}</td>
                                                    <td>{{ $patient->address }}</td>
                                                    <td>
                                                        <button class="btn btn-success btnPatientView" data-id="{{ $patient->id }}"><i class="fa fa-eye"></i>
														</button>
                                                        <button class="btn btn-primary btnPatientEdit" data-id="{{ $patient->id }}"><i class="fa fa-edit"></i>
														</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            {{ __('messages.No Patients avilable ') }}
                                        @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                    <div id="pane-products" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-products">
                        <div class="card-header" role="tab" id="heading-OR">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-OR" data-parent="#content"
                                    aria-expanded="false" aria-controls="collapse-B">
                                    {{ __('messages.Subcription history') }}
                                </a>
                            </h5>
                        </div>
						<div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                        <div class="card-body">
                            <table id="myPurchase" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cart Id</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                        <th>Total Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>#{{ $order->id }}</td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td>{{ $order->total_price }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary btnOrderView" data-id="{{ $order->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
						</div>
                    </div>

                </div>
                <div id="pane-su" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-su">
                    <div class="card-header" role="tab" id="heading-B">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapse-B" data-parent="#content"
                                aria-expanded="false" aria-controls="collapse-B">
                                {{ __('messages.Subcription history') }}
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                        <div class="card-body">
                            @if (count($subscription) > 0)
                                @foreach ($subscription as $s)
                                    <div class="tab-appointment-box" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom">
                                        <div class="tab-appointment-detail-box tab-subcription-detail-box">
                                            <h4>{{ isset($s->packagedata) ? $s->packagedata->name : '' }}</h4>
                                            @if ($s->status == '1')
                                                <span class="pending">{{ __('messages.Receive') }}</span>
                                            @elseif($s->status == '2')
                                                <span class="pending">{{ __('messages.Accept') }}</span>
                                            @elseif($s->status == '3')
                                                <span class="pending">{{ __('messages.Cancel') }}</span>
                                            @elseif($s->status == '4')
                                                <span class="pending">{{ __('messages.In progress') }}</span>
                                            @elseif($s->status == '5')
                                                <span class="pending">{{ __('messages.Complete') }}</span>
                                            @else
                                                <span class="pending">{{ __('messages.Refund') }}</span>
                                            @endif

                                        </div>
                                        <div class="tab-timingd-box tab-timingd2-box">
                                            <div class="tab-appointment-time-box">
                                                <i class="far fa-clock"></i>
                                                <span>{{ $s->time }}</span>
                                            </div>
                                            <div class="tab-appointment-calendar-box">
                                                <i class="far fa-calendar-alt"></i>
                                                <span>{{ $s->date }}</span>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                {{ __('messages.No Subscription History avilable ') }}
                            @endif

                        </div>
                    </div>
                </div>
                <div id="pane-my" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-my">
                    <div class="card-header" role="tab" id="heading-C">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapse-C" data-parent="#content"
                                aria-expanded="	false" aria-controls="collapse-C">
                                {{ __('messages.My profile') }}
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-C" class="collapse" role="tabpanel" aria-labelledby="heading-C">
                        <div class="card-body">
                            <div class="tab-chpmainbox">
                                <div class="part-form-main-box">
                                    <form action="{{ url('updateprofile') }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="tab-profile-main-box">
                                            <div class="tab-profileimg-main-box">
                                                @if (Auth::user()->profile_pic)
                                                    <img
                                                        src="{{ asset('public/upload/profile') . '/' . Auth::user()->profile_pic }}">
                                                @else
                                                    <img src="{{ asset('public/upload/profile/profile.png') }}">
                                                @endif
                                                <input type="file" name="image">
                                            </div>

                                            <div class="tab-profile-form-box">
                                                <input type="text" name="name" id="name"
                                                    placeholder="Your name" required value="{{ Auth::user()->name }}">
                                                <input type="email" readonly name="email" required
                                                    placeholder="Email address" value="{{ Auth::user()->email }}">
                                                <input type="text" name="phone_no" required id="phone_no"
                                                    placeholder="Phone number" value="{{ Auth::user()->phone_no }}">
                                            </div>
                                        </div>
                                        <button type="submit">{{ __('messages.Update') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pane-ch" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-ch">
                    <div class="card-header" role="tab" id="heading-d">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapse-d" data-parent="#content"
                                aria-expanded="	false" aria-controls="collapse-d">
                                {{ __('messages.Change password') }}
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-d" class="collapse" role="tabpanel" aria-labelledby="heading-d">
                        <div class="card-body">
                            <h2>{{ __('messages.Change password') }}</h2>
                            <div class="tab-chpmainbox">
                                <div class="part-form-main-box">

                                    <form action="{{ url('changepasswords') }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="password" name="opwd"
                                            id="opwd"placeholder="{{ __('messages.Enter current password') }}"
                                            required onchange="checkcurrentpwd(this.value)">
                                        <input type="password" name="npwd"
                                            placeholder="{{ __('messages.Enter new password') }}" id="npwd"
                                            required>
                                        <input type="password" name="rpwd"
                                            placeholder="{{ __('messages.Re-enter password') }}" id="rpwd" required
                                            onchange="updatecheckbothpwd(this.value)">
                                        <button type="submit">{{ __('messages.Update') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="myPatientModel" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Patient Detail</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="PatientDetail">
                </div>
            </div>
        </div>
    </div>

	<div id="myOrderModel" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Patient Detail</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="OrderDetail">
                </div>
            </div>
        </div>
    </div>

@stop
@section('footer')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $('#patientTable').dataTable();
        $('#myPurchase').dataTable();

		$(document).on('click','.btnPatientView',function(){

			let id = $(this).data('id');
			let url = "{{ asset('mypatient/show') }}";
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: url,
				type: "POST",
				data: {
					"id":id,
				},
				beforeSend:function(){
					console.log('ajax fired');
				},
				success: function (data) {
					if(data.status==true){
						$('#myPatientModel').modal('show');
						$('#PatientDetail').html(data.data);          
					}else{
						console.log('error');
					}
				},
				error:function(xhr){
					console.log(xhr);
				}
			});

		});

		$(document).on('click','.btnPatientEdit',function(){

			let id = $(this).data('id');
			let url = "{{ asset('mypatient/edit') }}";
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: url,
				type: "POST",
				data: {
					"id":id,
				},
				beforeSend:function(){
					console.log('ajax fired');
				},
				success: function (data) {
					if(data.status==true){
						$('#myPatientModel').modal('show');
						$('#PatientDetail').html(data.data);          
					}else{
						console.log('error');
					}
				},
				error:function(xhr){
					console.log(xhr);
				}
			});

			});

		$(document).on('click','.btnOrderView',function(){

			let id = $(this).data('id');
			let url = "{{ asset('myorder/show') }}";
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: url,
				type: "POST",
				data: {
					"id":id,
				},
				beforeSend:function(){
					console.log('ajax fired');
				},
				success: function (data) {
					if(data.status==true){
						$('#myOrderModel').modal('show');
						$('#OrderDetail').html(data.data);
					}else{
						console.log('error');
					}
				},
				error:function(xhr){
					console.log(xhr);
				}
			});

		});
    
	
	
	</script>
@endsection
