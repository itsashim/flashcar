@extends('front.layout.front')

@section('title', 'Book Doctor Through Hospital')

@section('styles')
<style>

    .carousel-indicators {
        gap:1rem;
    }

    .curosel-li {
        width: 10px !important;
        height: 10px !important;
        border-radius: 50% !important;
    }
    
    .hospital-details {
        flex-wrap: wrap;
        gap: 2rem;
        padding: 0 2rem;
    }
    
    .table {
        margin-bottom:0;
    }
    
    .table thead th {
         border-bottom: unset; 
    }
    
    @media screen and (max-width:991px) {
        .step-box {
            height: 325px !important;
            margin-bottom:1rem;
        }
        
        .hospital-content-mobile {        
                display: flex;
                flex-direction: column;
                align-items: center;
        }
    }
    
    @media screen and (max-width:396px) {
        .hospital-details {
            gap:0;
        }
    }
</style>
@endsection

@section('content')
<div class="container-fluid" style="padding:0;">
    @if(isset($hospital))
    <div class="row" style="background-color:#5CC09C">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active curosel-li"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="curosel-li"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="curosel-li"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($hospitalGalleries as $gallery)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img class="d-block w-100 carousel-image"
                                src="{{ asset('public/storage/' . $gallery->image_path) }}" alt="First slide" />
                            <div class="carousel-caption" style="color: black; position: absolute; bottom: 20px">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-sm-12 hospital-content-mobile">

            <div class="row d-flex ">
                <div class=" mt-2 ">
                    <img src="{{ asset('public' . $hospital->logo) }}" alt="background"
                        style="width: 120px; height: 120px; border-radius: 50%;" />

                </div>
                <div>
                    <p class="text-left fs-6 text-uppercase mt-4 pl-4 pt-2" style="font-weight: bold">
                        {{ $hospital->name }}
                    </p>
                    <div class="">
                        <div class="justify-content-center pb-2 d-flex pl-4 ">

                            <a href="{{ $hospital->facebook_url ? $hospital->facebook_url : '-' }}">
                                <!--<i class="fa-brands fa-facebook-f"></i>-->
                                <i class="fa-brands fa-facebook fa-2xl px-2"  ></i>
                                <!--<i class="fa-brands fa-facebook-f px-2"-->
                                <!--    style=" font-size: 2.3rem; border: solid; border-radius: 10px; "></i>-->
                            </a>
                            <a href="{{ $hospital->instagram_url ? $hospital->instagram_url : '-' }}">
                                <i class="fa-brands fa-instagram fa-2xl px-2" style="color:#FF647F "></i>
                                <!--<i class="fa-brands fa-instagram px-2"-->
                                <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: pink;"></i>-->
                            </a>
                            <a href="{{ $hospital->twitter_url ? $hospital->twitter_url : '-' }}">
                                <i class="fa-brands fa-twitter fa-2xl px-2 "></i>
                                <!--<i class="fa-brands fa-square-twitter fa-2xl px-2"></i>-->
                                <!--<i class="fa-brands fa-twitter px-2"-->
                                <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: blue;"></i>-->
                            </a>
                            <a href="{{ $hospital->linkedin_url ? $hospital->linkedin_url : '-' }}">
                                <i class="fa-brands fa-whatsapp fa-2xl px-2" style="color:forestgreen"></i>
                                <!--<i class="fa-brands fa-whatsapp px-2"-->
                                <!--    style="color: white; font-size: 2.3rem; border: solid; border-radius: 10px; background-color: green;"></i>-->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="">
                </div>
            </div>
            <hr>
             <div class="hospital-details d-flex">
                    <div class="">
                        <span class="d-flex"><i class="fa-solid fa-phone pt-1"></i>
                            <p class="px-2 text-bold"  >Phone</p>
                        </span>
                        <p style="color: white; font-weight:bold;">{{ $hospital->phone ? $hospital->phone : '-' }}</p>
                    </div>
                    <div class="">
                        <span class="d-flex"><i class="fa-solid fa-envelope pt-1"></i>
                            <p class="px-2 text-bold"  >Email</p>
                        </span>
                        <p style="color: white; font-weight:bold;">{{ $hospital->email ? $hospital->email : '-' }}</p>
                    </div>
                    <div class=" ">
    
                        <span class="d-flex "><i class="fa-solid fa-location-dot pt-1"></i>
                            <p class="px-2 text-bold">Address</p>
                        </span>
                        <p style="color: white; font-weight:bold;">{{ $hospital->address ? $hospital->address : '-' }}</p>
                    </div>
                </div>
            
            <p class="px-2">
                {!! $hospital->detail !!}
            </p>
        </div>
    </div>
    @endif

    <div>
        <div class="row mt-5 mb-3">
            <div class="col-lg-3 col-md-12">
                <div class="border-2  step-box" style="
                    background-color: #5cc09c;
                    width: 100%;
                    height: 350px;
                    border-radius: 7px;
                  ">
                  <p class="text-capitalize pl-3 pt-2" style="font-size: 1.3rem; font-weight: bold">
                    Follow below easy steps
                  </p>
                  <div class="border-2 m-3" style="background-color: white; border-radius: 7px">
                    <div>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Step 1: Select a Department</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">विभाग छान्नुहोस्।</th>
                          </tr> --}}
                        </tbody>
                      </table>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Step 2: Select a Doctor and Time</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">
                              चिकित्सक् र दिन छान्नुहोस्।
                            </th>
                          </tr> -->
                        </tbody>
                      </table>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Step 3: Select Patient</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">बिरामी चयन गर्नुहोस्|</th>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Step 4: Get Appointment confirmation.</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- <tr style="background-color: #d4d4d4">
                            <th scope="row" style="color: green">विभाग छान्नुहोस्।</th>
                          </tr> -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-lg-8 col-md-8">
                <section id="PatientSection">
                    @if(session('message'))
                          <div class="alert alert-info">{{ session()->get('message') }}</div>
                    @endif
    
                    @if(auth()->user())
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="patient">Select Patient</label>
                            <select name="patient_id" id="patientID" class="form-control">
                              <option disabled selected>Select Patient</option>
                              @foreach($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->first_name.' '.$patient->last_name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group" id="PatientDetail">
                          </div>
    
                          <div class="form-group">
                            <button type="submit" class="btn bg-lightgreen" id="completeStepThree" data-id="{{ $doctor_id }}" data-date="{{ $date }}"
                            data-time="{{ $time }}" data-time_table_id="{{ isset($time_id) ? $time_id : "-" }}" style="color:#fff;">Continue Appointment</button>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <button class="btn bg-lightgreen" id="btnAddPatient" style="color:#fff;">Add New Patient</button>
                        </div>
                      </div>
    
                    @else
    
                    <div class="row">
                      <div class="col-sm-6">
                        
    
                        <h3>Please Login to continue</h3>
                        <form action="{{ asset('user/login') }}" method="POST">
                          @csrf
                          <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="email" class="form-control" />
                          </div>
                          <div class="form-group">
                            <label for="Email">Password</label>
                            <input type="password" name="password" class="form-control" />
                            <input type="text" style="display: none;" name="appointment" value="1" />
                          </div>
                          <div class="form-group">
                            <button class="btn btn-primary" style="background-color: #00be9c;">Login </button>
                          </div>
                        </form>
    
                      </div>
                      <div class="col-sm-6">
                        <h3>Or Please Register to continue</h3>
                        {{-- <form action="{{ asset('user/register') }}" method="POST"> --}}
                        <form action="{{ route('user.register') }}" method="POST">
                          @csrf
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required/>
                          </div>
                          @error('name')
                            <span class="badge badge-danger">{{ $message }}</span>  
                          @enderror
    
                          <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="email" class="form-control" required/>
                          </div>
                           @error('email')
                            <span class="badge badge-danger">{{ $message }}</span>  
                          @enderror
                          
                          <div class="form-group">
                            <label for="Email">Phone</label>
                            <input type="text" name="phone_no" class="form-control" required/>
                          </div>
                           @error('phone_no')
                            <span class="badge badge-danger">{{ $message }}</span>  
                        @enderror
    
                          <div class="form-group">
                            <label for="Email">Password</label>
                            <input type="password" name="password" class="form-control" required/>
                          </div>
                          @error('password')
                            <span class="badge badge-danger">{{ $message }}</span>  
                          @enderror
                          <input type="text" style="display: none;" name="appointment" value="1" required/>
                          
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Register</button>
                          </div>
                        </form>
                      </div>
                    </div>
    
                    @endif
    
                </section>
            </div>
        </div>
    </div>
</div>

<div id="addNewPatientModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        
        <div class="modal-body">
          <form action="{{ asset('patient/register') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="">First Name</label>
              <input type="text" name="first_name" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" name="last_name" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="">Age</label>
              <input type="number" name="age" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" name="dob" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="">Gender</label>
              <select name="gender" class="form-control">
                <option selected disabled>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Relation</label>
              <input type="text" name="relation" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="">Phone</label>
              <input type="text" name="phone" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input type="text" name="location" class="form-control"/>
            </div>
            <!--<div class="form-group">-->
            <!--  <label for="">Address</label>-->
            <!--  <input type="text" name="address" class="form-control"/>-->
            <!--</div>-->
            <div class="form-group">
              <button class="btn btn-primary">Save</button>
            </div>
          </form>

        </div>
        
      </div>
    </div>
  </div>

@endsection

@section('scripts')
<script>
    @if($step==3)
    $('#completeStepThree').on('click',function(){
      let patient_id = $('#patientID').val();
      if(patient_id==null || patient_id == "null"){
        alert('Please select patient');
        return false;
      }else{
        let doctor_id = $(this).data('id');
        let date = $(this).data('date');
        let time = $(this).data('time');
        let time_id = $(this).data('time_table_id');
        @if(isset($hospital))
          window.location.href = "{{ asset('hospital/'.$hospital->slug.'?department_id='.$department_id) }}/"+"&date="+date+"&time="+time+"&doctor_id="+doctor_id+"&patient_id="+patient_id+"&time_table_id=" +time_id;
        @else 
         window.location.href = "{{ asset('appoint/doctor?date=') }}"+date+"&time="+time+"&doctor_id="+doctor_id+"&patient_id="+patient_id+"&time_table_id=" +time_id;
        @endif
      }
    });
    @endif

    $('#patientID').on('change',function(){
      let id = $(this).val();
      if(id=="self"){
        $('#PatientDetail').empty();
      }else{
        let url = "{{ asset('patient/details') }}";
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
                    let address = data.data.address;
                    if(address==null){
                      address = "-";
                    }

                    let patientDetails = '<table class="table table-striped table-bordered">'+
                                            '<thead>'+
                                              '<tr>'+
                                                '<th>Name</th>'+
                                                '<th>'+data.data.first_name+' '+data.data.last_name+'</th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                '<th>Age</th>'+
                                                '<th>'+data.data.age+'</th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                '<th>Gender</th>'+
                                                '<th>'+data.data.gender+'</th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                '<th>Location</th>'+
                                                '<th>'+data.data.location+'</th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                '<th>Relation</th>'+
                                                '<th>'+data.data.relation+'</th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                '<th>Phone</th>'+
                                                '<th>'+data.data.phone+'</th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                '<th>Address</th>'+
                                                '<th>'+address+'</th>'+
                                              '</tr>'+
                                            '</thead>'+
                                          '</table>';
                                          console.log(patientDetails);
                              $('#PatientDetail').empty();
                              $('#PatientDetail').html(patientDetails);
       
                  }else{
                      console.log('error');
                  }
              },
              error:function(xhr){
                  console.log(xhr);
              }
          });
      }
    });

    $('#btnAddPatient').on('click',function(){
        $('#addNewPatientModal').modal('show');
    });


</script>
@endsection