@extends('front.layout.front')
@section('title')
    {{ __('Hospital Detail') }}
@stop
@section('loader')
    <!--<div id="overlayer"></div>-->
    <!--<span class="loader"><span class="loader-inner"></span></span>-->
@stop
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&amp;display=swap"
rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link href="https://www.merodoctor.com/css/common/b.styleconfig.css?v=0.0.2" rel="stylesheet" type="text/css">
<link href="https://www.merodoctor.com/css/common/z.custom.css?v=0.0.2" rel="stylesheet" type="text/css">
<link href="https://www.merodoctor.com/css/common/z.toastr.min.css?v=0.0.2" rel="stylesheet" type="text/css">
<style>
  .navbar-nav .nav-item+.nav-item {
    margin-left: 1rem !important;
}
    .navbar-nav .dropdown-menu {
     position: absolute !important; 
}
.header-right-panel .btn {
    padding: 9px 10px;
    font-size: 13px;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --animate-duration: 1s;
    --animate-delay: 1s;
    --animate-repeat: 1;
}

.main-nav li a {
    text-decoration: none;
    color: #212529;
    padding: 1rem 1.3rem;
    display: block;
    line-height: 1.5;
    font-weight: 25;
    font-size: 13px;
}

body {
    margin: 0;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: var(--bs-body-bg);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.hide-preloader {
    display: none;
}

.preloader {
    position: fixed;
    top: 0;
    width: 100%;
    text-align: center;
    z-index: 20;
    height: 100%;
    background-color: rgba(251, 251, 251, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
}

.header {
    padding: 1.2rem 0;
}

.header_container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.container, .container-fluid, .container-xxl, .container-xl, .container-lg, .container-md, .container-sm {
    width: 100%;
    padding-right: var(--bs-gutter-x, 0.75rem);
    padding-left: var(--bs-gutter-x, 0.75rem);
    margin-right: auto;
    margin-left: auto;
}

.branding {
    display: flex;
    align-items: center;
    transition: transform 300ms ease;
    font-size: 14px;
    transform: translateY(0);
}

a {
    transition: all 0.2s ease-in-out;
    color: #292562;
    text-decoration: none;
}

img {
    max-width: 100%;
}

.branding_details {
    max-width: 90px;
    line-height: 1.3;
    margin-bottom: 0;
    margin-left: 1rem;
    color: #000;
    font-weight: 600;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

.main-nav {
    font-size: 15px;
}
@media (min-width: 1200px){
    .pe-xl-4 {
        padding-right: 1.5rem !important;
    }
}
.border-end {
    border-right: 1px solid #dee2e6 !important;
}


/* .box{
    height: 100px;
    background: #fff;
    border: 1px solid black;
    
} */


.services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
    gap: 1rem;
}

.services .box-container .box{
    background: #fff;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    border: var(--border);
    padding: 2rem;
}

.services .box-container .box i{
    color: var(--green);
    font-size: 2rem;
    padding-bottom: .5rem;
}

.services .box-container .box h3{
    color: var(--black);
    font-size: .8rem;
    padding: 1rem 0;
}

.services .box-container .box p{
    color: var(--light-color);
    font-size: .8rem;
    line-height: 1;
}

.btn{
    padding: 0.25rem 0.5rem;
    font-size: 0.775rem;
    border-radius: 0.2rem;
}
.accordion-button:not(.collapsed) {
    color: #00be9c !important;
    background-color: #1b424924 !important;
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
}
.btn-outline-secondary:hover {
    color: #00be9c !important;
    background-color: #1b424924 !important;
    border-color: #303639;
}
</style>
<main class="main-content" role="main">
    
    <div class="row">
      <div class="col-md-6 left">

      </div>
      <div class="col-md-d right">

      </div>
    </div>
    
    <section class="banner-section banner-section-inner" style="height: 350px;">
      <input type="hidden" id="frompage" value="hospitaldepartment">

      <div class="d-md-flex">
        <div class="col-md-7 m-0 p-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($hospitalGalleries as $gallery)
    <div class="carousel-item @if($loop->first) active @endif">
      <img style="height: 350px;" src="{{ asset('public/storage/'.$gallery->image_path) }}"" class="d-block w-100" alt="...">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" type="button" href="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" type="button" href="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
        </div>

        <div class="col-md-5">
            <div class="row">
                <div class="col-8">
                   <h4 class="header fw-bolder" style="color: white;">{{ $hospital->name }}</h4>
                  <p class="fw-bold" style="color: white;"> <i class="fa-solid fa-location-dot" style="font-size: 20px; color: white;"></i>    Address {{ $hospital->address }}</p>
                   <p class="fw-bold" style="color: white;"> <i class="fa-solid fa-phone" style="font-size: 20px; color: white;"></i>    Phone No {{ $hospital->phone }} </p>
                  <p class="fw-semibold" style="color: white;">{!! $hospital->detail !!}</p> 
                  <i class="fa-solid fa-input-text" style="font-size: 20px; color: white;"></i>
                </div>
                <div class="col-4">
                    <img class=" pt-5" src="{{ asset('public'.$hospital->logo) }}" alt="">  
                    <div class="slide-details-location text-end d-lg-flex justify-content-end gap-4">
              <div>
              <div class="row">
                <div class="col-3">
                  @if($hospital->facebook_url)
                    <a href="{{ $hospital->facebook_url }}" style="color:#004b9b">
                      <i class="fa-brands fa-facebook pt-5 " style="font-size: 30px; color: white;"></i>
                    </a>
                  @endif
                </div>
                <div class="col-3">
                  @if($hospital->instagram_url)
                    <a href="{{ $hospital->instagram_url }}">
                      <i class="fa-brands fa-instagram pt-5" style="font-size: 30px; color: white;"></i>
                    </a>
                  @endif
                </div>
                <div class="col-3">
                  @if($hospital->twitter_url)
                  <a href="{{ $hospital->twitter_url }}" style="color:#004b9b">
                    <i class="fa-brands fa-twitter pt-5" style="font-size: 30px; color: white;"></i>
                  </a>
                @endif
                </div>
                <div class="col-3">
                  @if($hospital->linkedin_url)
                  <a href="{{ $hospital->linkedin_url }}">
                    <i class="fa-brands fa-linkedin pt-5" style="font-size: 30px; color: white;"></i>
                  </a>
                  @endif
                </div>
              </div>
              
              </div>
              <div>
                <em class="bi bi-geo-alt"></em> <a href="https://www.google.com/maps/?q=," target="_blank"></a>
              </div>
            </div>
                </div>
                
            </div>
          <!--<div class="slide-details ">-->
          <!--  <div class="d-flex flex-column justify-content-between align-items-center">-->
          <!--      <h4>Name Of Hospital</h4>-->
          <!--        <p>Address</p>-->
          <!--        <p>Full Locations of Hospital</p>-->
                 
          <!--    <div class="d-flex flex-direction-column slide-details-media shadow mb-3">-->
                
          <!--      <img src="https://images.unsplash.com/photo-1661127402206-99cc0ac559ef?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80" alt="">-->
          <!--      <h5 class=" mb-0 ms-2"> <small class="mt-2 fs-14 d-block fw-normal"></small></h5>-->
                  
          <!--    </div>-->
             
          <!--  </div>-->
           
          <!--  <div class="slide-details-location text-end d-lg-flex justify-content-end gap-4">-->
          <!--    <div>-->
          <!--      <em class="bi bi-telephone"></em> <a href="tel:"></a>-->
          <!--    </div>-->
          <!--    <div>-->
          <!--      <em class="bi bi-geo-alt"></em> <a href="https://www.google.com/maps/?q=," target="_blank"></a>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        
      </div>
      
    </section>
    <!-- <div class=" text-center py-3 border-bottom hospital-brand">
   <div class="container">
    
   </div>
 </div> -->
    <section class="block-sm pb-3">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-3 mb-5 pe-lg-4 order-1 order-lg-0">
            <div class="shadow rounded p-3 border" style="background:#00be9c;">
              <h5 class="mb-4">Follow below easy steps</h5>
              <div class="accordion " id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button @if($step!=1) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Step 1: Select a Department
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse @if($step==1) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">विभाग छान्नुहोस्।</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button @if($step!=2) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Step 2: Select a Doctor and Time
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse  @if($step==2) show @endif" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body"> चिकित्सक् र दिन छान्नुहोस्।</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button @if($step!=3) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Step 3: Select Patient
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse @if($step==3) show  @endif" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">बिरामी चयन गर्नुहोस्|</div>
                  </div>
                </div>
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button @if($step!=4) collapsed   @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      Step 4: Get Appointment confirmation.
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse @if($step==4) show @endif" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body"> एपोइन्टमेण्ट निश्चित भएको sms पाउनुहोस्।</div>
                  </div>
                </div>
               
              </div>
             
            </div>

          </div>
          
          <div class="col-lg-9 order-0 order-lg-1">

            @if($step==1)
            <div class=" departmentsection" id="departmentsection">
              <div class="row align-items-center mb-2">
                <div class="col-md-6 col-lg-8 mb-3 mb-lg-0">
                  <h5 class="mb-lg-0">Select a Department</h5>
                  <p class="mb-0">Extended Hospital Service</p>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Find Specilities" name="" id="searchDepart">
                  </div>
                </div>
              </div>
              <section class="services" id="services">
                <div class="box-container" id="departmentListBox">
                    @foreach($departments as $department)
                    <div class="box">
                        <img src="{{ asset('public/upload/department/'.$department->image) }}" />
                        <h6 class="mb-3 text-truncate department-title fw-semi">{{ $department->name }}
                        </h6>
                        <p class="small"> {{ $department->doctorsCount }} Doctors</p>
                        <a href="{{ asset('hospital/'.$hospital->slug.'/'.$department->id) }}">
                            <span class="btn btn-outline-secondary btn-sm">Consult Now</span>
                        </a>
                    </div>
                    @endforeach
                </div>
              </section>

            </div>
            @elseif($step==2)
            <section id="doctorSection">

                  @foreach($doctors as $doctor)
                    <div id="finddoctors_view"><input type="hidden" id="cid" value="4522" data-count="1" data-sync="0">
                        <div class="d-sm-flex flex-wrap mb-4 shadow-sm rounded-3 bg-gray-light border doc-list-item">
                            <div class="col-md-5 flex-fill">
                                <div class="p-3 pb-0 d-xl-flex mb-3 docdetail2029">
                                    <div class="text-center">
                                        <a href="javascript:void(0);" data-docid="4522" data-orgid="614"
                                            data-nextavltime="Aug 25 at 7:00 PM" class="d-block doctorprofile">
                                            <img class="rounded-circle border-success" src="{{ asset('public/upload/doctor/'.$doctor->image) }}"
                                                alt="Dr. Madhur Basnet" style="width: 200px; height:200px;">
                                        </a>

                                        <div class="d-xl-none">
                                            <h6 class="my-2" data-depid="1974" data-docid="2696"
                                                data-gdepid="14" data-gdocid="623" data-orgid="614"
                                                id="doctordetail">Dr. {{ $doctor->name }} </h6>
                                            <p class="mb-1 pb-2 fs-12"><i
                                                    class="bi bi-caret-right-square-fill me-1 text-success"></i>Department : {{ $doctor->department->name }}
                                            </p>
                                            <a data-docid="4522" data-orgid="614"
                                                data-nextavltime="Aug 25 at 7:00 PM"
                                                class="btn btn-sm btn-outline-success small doctorprofile">View
                                                Profile <em class="bi bi-chevron-right"></em></a>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <input type="hidden" id="newdocid0" value="4522" data-gdocid="2029"
                                            data-orgid="614" data-gdepid="81" data-depid="1996">

                                        <div class="d-none d-xl-block pb-2">
                                            <h5 class="mb-3" data-depid="1974" data-docid="2696"
                                                data-gdepid="14" data-gdocid="623" data-orgid="614"
                                                id="doctordetail">Dr. {{ $doctor->name }} </h5>
                                            <!-- <div class="line line-sm ms-0 mb-3"></div> -->
                                            <div class="fs-12 ">
                                                <p class="mb-2 pb-1"><i class="fa-solid fa-caret-right"></i></i>&nbsp;&nbsp;Department: {{ $doctor->department->name }}
                                                </p>
                                                <!-- 				<p class="mb-2 pb-1"><i class="bi bi-caret-right-square-fill me-1 text-success"></i> </p> -->
                                                  <p class="mb-2 pb-1">
                                                    <i class="fa-solid fa-caret-right"></i></i>&nbsp;&nbsp;Experience: {{ $doctor->experience }}
                                                  </p>
                                                  <p class="mb-2 pb-1"><i class="fa-solid fa-caret-right"></i></i>&nbsp;&nbsp;Next Available Time:
                                                    <span class="text-dark pt-1" >Aug 25 at 7:00 PM </span>
                                                </p>
                                            </div>
                                            <a data-docid="{{ $doctor->id }}" data-orgid="614" data-nextavltime="Aug 25 at 7:00 PM" class="btn btn-sm text-white small doctorprofile" style="background: #00be9c;"> <i class="fa fa-user"></i> View Profile 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 border-start flex-fill bg-white">
                                <div id="doctorschedule_4522">
                                    <div class="appointment-time-info px-3 pb-3 pt-2">
                                        <div class="table-responsive mb-3 mb-xl-0">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Dr. Available Time</th>
                                                        <th scope="col">Available Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="small align-middle">
                                                    <tr>
                                                        <td>
                                                              <?php $dayOfWeek = \Carbon\Carbon::now()->dayOfWeek; 
                                                              $todayTimeTable = \App\Model\TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek)->first();
                                                              $tommorowTimeTable = \App\Model\TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+1)->first();
                                                              $dayAfterTommorowTimeTable = \App\Model\TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+2)->first();
                                                              
                                                              ?>
                                                            <div class="m-1">{{ \Carbon\Carbon::now()->format('Y/m/d') }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="m-1">{{ $todayTimeTable->from }} - {{ $todayTimeTable->to }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="m-1">
                                                                <?php 
                                                                    $todayToken = $todayTimeTable->token;
                                                                    $tokenTime = 0;
                                                                ?>
                                                                @for($i=0;$i<$todayToken; $i++)
                                                                    @if($i==0)
                                                                        <a class="btn bookThisTime text-white" data-id="{{ $doctor->id }}" data-date="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" data-time="{{ $todayTimeTable->from }}" style="background: #00be9c;">{{ $todayTimeTable->from }}</a>
                                                                    @else
                                                                        <a class="btn bookThisTime text-white" data-id="{{ $doctor->id }}" data-date="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" data-time="{{ \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime+20)->format('H:i') }}" style="background: #00be9c;">{{ \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime+20)->format('H:i') }}</a>
                                                                        <?php $tokenTime=$tokenTime+20; ?>
                                                                    @endif
                                                                @endfor
                                                              </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="m-1">{{ \Carbon\Carbon::now()->addDays(1)->format('Y/m/d') }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="m-1">{{ $tommorowTimeTable->from }} - {{ $tommorowTimeTable->to }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="m-1">
                                                                <?php 
                                                                    $tommorrowToken = $tommorowTimeTable->token;
                                                                    $tokenTime = 0;
                                                                ?>
                                                                @for($i=0;$i<$tommorrowToken; $i++)
                                                                    @if($i==0)
                                                                        <a class="btn bookThisTime text-white" data-id="{{ $doctor->id }}" data-date="{{ \Carbon\Carbon::now()->addDays(1)->format('Y-m-d') }}" data-time="{{ $tommorowTimeTable->from }}" style="background: #00be9c;">{{ $tommorowTimeTable->from }}</a>
                                                                    @else
                                                                        <a class="btn bookThisTime text-white" data-id="{{ $doctor->id }}" data-date="{{ \Carbon\Carbon::now()->addDays(1)->format('Y-m-d') }}" data-time="{{ \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+20)->format('H:i') }}" style="background: #00be9c;">{{ \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+20)->format('H:i') }}</a>
                                                                        <?php $tokenTime=$tokenTime+20; ?>
                                                                    @endif
                                                                @endfor
                                                              </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="m-1">{{ \Carbon\Carbon::now()->addDays(2)->format('Y/m/d') }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="m-1">{{ $dayAfterTommorowTimeTable->from }} - {{ $dayAfterTommorowTimeTable->to }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="m-1">
                                                                <?php 
                                                                    $dayAfterTommorrowToken = $dayAfterTommorowTimeTable->token;
                                                                    $tokenTime = 0;
                                                                ?>
                                                                @for($i=0;$i<$dayAfterTommorrowToken; $i++)
                                                                    @if($i==0)
                                                                        <a class="btn bookThisTime text-white" data-id="{{ $doctor->id }}" data-date="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}" data-time="{{ $dayAfterTommorowTimeTable->from }}" style="background: #00be9c;"> {{ $dayAfterTommorowTimeTable->from }} </a>
                                                                    @else
                                                                        <a class="btn bookThisTime text-white" data-id="{{ $doctor->id }}" data-date="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}" data-time="{{ \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+20)->format('H:i') }}" style="background: #00be9c;"> {{ \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+20)->format('H:i') }} </a> 
                                                                        <?php $tokenTime=$tokenTime+20; ?>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-end">
                                            <a title="Check Other Schedule Time to take appointment"
                                                class="btn fw-semi doctorapptfulltime rounded w-100 text-white btn-lg"
                                                href="#" style="background: #00be9c;">Check Other Schedule Time to take appointment &nbsp;&nbsp; <i class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    @endforeach

            </section>

            @elseif($step==3)

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
                        <button type="submit" class="btn btn-primary" id="completeStepThree" data-id="{{ $doctor_id }}" data-date="{{ $date }}" data-time="{{ $time }}">Continue Appointment</button>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <button class="btn btn-primary" id="btnAddPatient">Add New Patient</button>
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
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary" style="background-color: #00be9c;">Login </button>
                      </div>
                    </form>

                  </div>
                  <div class="col-sm-6">
                    <h3>Or Please Register to continue</h3>
                    <form action="{{ asset('user/register') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" name="email" class="form-control" />
                      </div>
                      
                      <div class="form-group">
                        <label for="Email">Phone</label>
                        <input type="text" name="phone" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label for="Email">Password</label>
                        <input type="password" name="password" class="form-control" />
                      </div>
                      
                      <div class="form-group">
                        <button class="btn btn-primary">Register</button>
                      </div>
                    </form>
                  </div>
                </div>

                @endif

              </section>
            

              @elseif($step==4)

              @if(session()->has('confirmed'))

                  <section id="AppointmentConfirmed">

                    <h3>Thank you for having appointment from our site. Your appointment request has been submitted. </h3>

                    <div id="printDIV">
                      <h2>Patient Details</h2>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Token Number</th>
                            <th>{{ session()->get('appointment_id') }}</th>
                          </tr>
                          <tr>
                            <th>First Name</th>
                            <th>{{ $patient->first_name }}</th>
                          </tr>
                          <tr>
                            <th>Last Name</th>
                            <th>{{ $patient->first_name }}</th>
                          </tr>
                          <tr>
                            <th>Last Name</th>
                            <th>{{ $patient->last_name }}</th>
                          </tr>
                          <tr>
                            <th>Age</th>
                            <th>{{ $patient->age }}</th>
                          </tr>
                          <tr>
                            <th>DOB</th>
                            <th>{{ $patient->dob }}</th>
                          </tr>
                          <tr>
                            <th>Gender</th>
                            <th>{{ $patient->gender }}</th>
                          </tr>
                          <tr>
                            <th>Location</th>
                            <th>{{ $patient->location }}</th>
                          </tr>
                          <tr>
                            <th>Phone</th>
                            <th>{{ $patient->phone }}</th>
                          </tr>
                          <tr>
                            <th>Email</th>
                            <th>{{ $patient->email }}</th>
                          </tr>
                          <tr>
                            <th>Address</th>
                            <th>{{ $patient->address }}</th>
                          </tr>
                        </thead>
                      </table>
                    </div>

                    <button class="btn btn-primary" type="button" onclick="printDiv()">Print</button>
                  </section>

              @else

              <section id="AppointmentDetail">
                <h3>Payment and Confirm Appointment</h3>
                <div class="row">
                  <div class="col-sm-12">
                    Appointment Fee: Rs {{ $appointment_fee }}
                  </div>
                  <div class="col-sm-4">
                    <img class="payment_method" id="cod" src="{{ asset('public/front/cashondelivery.png') }}" />
                    <div id="codDetails" class="hide"></div>
                    <img class="payment_method" id="manual" src="{{ asset('public/images/manualpayment.jpg') }}" />
                  </div>
                  {{-- <div class="col-sm-4">
                    <img class="payment_method" id="esewatransfer" style="height: 160px;" src="{{ asset('public/front/esewa_money_transfer.jpg') }}" />
                    <div id="esewaTrasferDetails" class="hide">
                      <ul class="list">
                        <li>Transfer amount to esewa number 98XXXXXXX</li>
                        <li>
                          Screenshot your payment details and upload your file here.
                          <input type="file" name="payment_proof" class="form-control" />
                        </li>
                        <li>Await for payment verificatin from us shortly.</li>
                      </ul>
                    </div>
                  </div> --}}
                  {{-- <div class="col-sm-4">
                    <img class="payment_method" id="paymentGateway" style="height: 145px;" src="{{ asset('public/front/payment_gateway.png') }}" />
                    <div id="livepayment" class="hide">
                      Coming soon
                    </div> --}}
                  </div>
                </div>
              </section>
              @endif

            @endif
            
          </div>
        </div>
      </div>
    </section>

  </main>

  @if($step==4)
  <div id="codModal" class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ asset('cod/confirm') }}" method="POST">
          @csrf
        <div class="modal-header">
          <h5 class="modal-title">Continue with Cash On Delivery</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Appointment Fee: {{ $appointment_fee }}</p>
        </div>
        <div class="modal-footer">
          <input style="display: none;" type="text" name="patient_id" value="{{ $patient->id }}" />
          <input style="display: none;" type="text" name="doctor_id" value="{{ $doctor_id }}" />
          <input style="display: none;" type="text" name="date" value="{{ $date }}" />
          <input style="display: none;" type="text" name="time" value="{{ $time }}" />
          <input style="display: none;" type="text" name="payment_method" value="cod" />
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm Appointment</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
  <div id="manualModal" class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ asset('cod/confirm') }}" method="POST">
          @csrf
        <div class="modal-header">
          <h5 class="modal-title">Continue with Manual Payment</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Appointment Fee: {{ $appointment_fee }}</p>
          <b>Bank Name: {{ $setting->bank_name }}</b><br/>
          <b>Bank Account Number: {{ $setting->bank_account_number }}</b><br/>
          <b>Esewa ID: {{ $setting->esewa_id }}</b><br/>
        </div>
        <div class="modal-footer">
          <input style="display: none;" type="text" name="patient_id" value="{{ $patient->id }}" />
          <input style="display: none;" type="text" name="doctor_id" value="{{ $doctor_id }}" />
          <input style="display: none;" type="text" name="date" value="{{ $date }}" />
          <input style="display: none;" type="text" name="time" value="{{ $time }}" />
          <input style="display: none;" type="text" name="payment_method" value="manual" />
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm Appointment</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  @endif

  <div id="doctorProfile" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Doctor Details</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="profileContent"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
              <label for="">Location</label>
              <input type="text" name="location" class="form-control"/>
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
              <input type="text" name="address" class="form-control"/>
            </div>
            <div class="form-group">
              <button class="btn btn-primary">Save</button>
            </div>
          </form>

        </div>
        
      </div>
    </div>
  </div>

@stop
@section('scripts')
<script>

  $(function(){

    @if(isset($department_id))

    $(document).on('click','.bookThisTime',function(){
      console.log('this is test');
      let doctor_id = $(this).data('id');
      let date = $(this).data('date');
      let time = $(this).data('time');
      window.location.href = "{{ asset('hospital/'.$hospital->slug.'/'.$department_id) }}/"+"?date="+date+"&time="+time+"&doctor_id="+doctor_id;
    });

    @endif

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
        window.location.href = "{{ asset('hospital/'.$hospital->slug.'/'.$department_id) }}/"+"?date="+date+"&time="+time+"&doctor_id="+doctor_id+"&patient_id="+patient_id;
      }
    });
    @endif

    @if($step==4)

    $('#cod').on('click',function(){
      $('#codDetails').removeClass('hide');
      $('#esewaTrasferDetails').addClass('hide');
      $('#livepayment').addClass('hide');
    });

    $('#esewatransfer').on('click',function(){
      $('#esewaTrasferDetails').removeClass('hide');
      $('#codDetails').addClass('hide');
      $('#livepayment').addClass('hide');
    });

    $('#paymentGateway').on('click',function(){
      $('#livepayment').removeClass('hide');
      $('#codDetails').addClass('hide');
      $('#esewaTrasferDetails').addClass('hide');
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

    $('#cod').on('click',function(){

        $('#codModal').modal('show');

    });

    $('#manual').on('click',function(){

        $('#manualModal').modal('show');

    });

    $(document).on('click','.doctorprofile',function(){

        let id = $(this).data('docid');
        let url = "{{ asset('doctor/profile') }}";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id": id,
            },
            beforeSend: function() {
                console.log('ajax fired');
            },
            success: function(data) {
                if (data.status == true) {
                    $('#doctorProfile').modal('show');
                    $('#profileContent').html(data.data);
                } else {
                    console.log('error');
                }
            },
            error: function(xhr) {
                console.log(xhr);
            }
        });
    });

    $('#searchDepart').on('keyup',function(){
            let name = $(this).val();
            let url = "{{ asset('departmentlist/search/view') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "name":name,
                    "hospital_id":{{ $hospital->id }},
                },
                beforeSend:function(){
                    console.log('ajax fired');
                },
                success: function (data) {
                    if(data.status==true){
                        $('#departmentListBox').html(data.data);          
                    }else{
                        console.log('error');
                    }
                },
                error:function(xhr){
                    console.log(xhr);
                }
            });

        });

        $('#btnAddPatient').on('click',function(){
          $('#addNewPatientModal').modal('show');
        })
    
        function printDiv() {
            var divContents = document.getElementById("printDIV").innerHTML;
            var a = window.open('', '', 'height=800, width=800');
            a.document.write('<html>');
            a.document.write('<body > <h1>Appointment Details<br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }

        $('.carousel').carousel({
          interval: 2000,
        });

  });



  // Doctor Profile
  let doctorProfile = document.getElementById("doctorProfile");

  function displayProfile() {
    doctorProfile.classList.add("displayProfile");
  }
  function closeProfile() {
    doctorProfile.classList.remove("displayProfile")
  }

  $(document).on('click','.closeProfile',function(){
    console.log('clicked');
    $('#doctorProfile').modal('hide');
  });


</script>
@endsection