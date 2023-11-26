@extends('front.layout ')
@section('title')
 {{__('Hospitals')}} 
@stop
@section('loader')
<div id="overlayer"></div>
<span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')

    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style type="text/css">
  
        .owl-nav button {
            position: absolute;
            top: 50%;
            background-color: #e7d045;
            color: #fff;
            margin: 0;
            transition: all 0.3s ease-in-out;
        }

        .owl-nav button.owl-prev {
            left: 0;
        }

        .owl-nav button.owl-next {
            right: 0;
        }

        .owl-dots {
            text-align: center;
            padding-top: 15px;
        }

        .owl-dots button.owl-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            background: #00be9c;
            margin: 0 3px;
        }

        .owl-dots button.owl-dot.active {
            background-color: #e7d045;
        }

        .owl-dots button.owl-dot:focus {
            outline: none;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.38) !important;
        }

        .owl-nav button:focus {
            outline: none;
        }

        .item {
            text-align: center;
        }

        .card {
            box-shadow: 0 0 9px #c1c1c1;
            border-radius: 5px;
        }

        .card-body {
            padding: 10px 20px 8px 20px;
            text-align: left;
        }

        .card-body h5 {
            font-weight: 600;
        }

        .card-img-top {
            height: 179px;
            object-fit: cover;
            border-radius: 5px 5px 0px 0px;
        }
        .body{
            overflow-x:hidden;
        }
</style>
<!--<section class="pt-5 pb-5" style="background:#00be9c;">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-6 col-sm-12 bg-white text-center" style="border-radius:20px">-->
<!--                <img src="{{ asset('public'.$hospital->logo) }}" style="    width: 85%;">-->
<!--            </div>-->
<!--             <div class="col-lg-6 col-sm-12 p-5">-->
<!--                <h1 class="text-white">{{ $hospital->name }}</h1>-->
<!--                <p class="text-white">{{ $hospital->sub_title }}</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

 <div class=" row" style="background:#00be9c; ">
    
    
        <div class="col-lg-8 col-sm-12 bg-white text-center container " style="">
            <!-- <div class="" style="width: 70%;"> -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 "  style="height: 400px;" src="https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height: 400px;" src="https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height: 400px;" src="https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 p-5">
            <!-- <div style="width: 30%;"> -->
            <h1 class="text-white">{{ $hospital->name }}</h1>
            <p class="text-white">{{ $hospital->sub_title }}</p>
        </div>
    
    
    </div>



    <section>
        <div class="container" style="padding-top: 80px;">
            <div class="row">
                <div class="col-lg-6 col-12" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Meet Our Doctors</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2">
                    <a href="" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All Doctors<i class="fa fa-angle-right " aria-hidden="true"></i></a>
                </div>

            </div>
        </div>

<!--start doctor modal-->
<!--<div class="modal fade bd-example-modal-lg in" id="doctorModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: block; padding-left: 0px;">-->
<!--	<div class="modal-dialog modal-lg modal-dialog-centered" style="margin-top: 100px;">-->
<!--	  <div class="modal-content">-->
<!--		  <div id="appointmentContent"><div class="row">-->
<!--    <div class="col-sm-12">-->
<!--        <h3 class="text-center text-bold mt-5">Book Appointment Now</h3>-->
<!--    </div>-->
<!--    <div class="col-sm-2"></div>-->
<!--    <div class="col-sm-4">-->
<!--        <img style="height: 200px;width:200px;" class="img-thumbnail" src="https://pasaal.online/public/upload/doctor/doctor_121466.jpg"><br>-->
<!--        <div style="width: 200px;" class="text-center">-->
<!--            <b style="width: 200px;font-size:20px;" class="text-center">Jay Ram Das</b>-->
<!--            <span style="width: 200px;">Cardiologists</span>-->
<!--        </div>-->

<!--    </div>-->
<!--    <div class="col-sm-5">-->
        
<!--        <div class="form-group">-->
<!--            <label for="">Name</label>-->
<!--            <input id="book_name" class="form-control" type="text" name="name" placeholder="Enter Name">-->
<!--        </div>-->

<!--        <div class="form-group">-->
<!--            <label for="">Contact Number</label>-->
<!--            <input id="book_contact_number" class="form-control" type="text" name="phone_number" placeholder="Enter Phone Number">-->
<!--        </div>-->

<!--        <div class="form-group">-->
<!--            <label for="">Message</label>-->
<!--            <input id="book_message" class="form-control" type="text" name="message" placeholder="Enter Message">-->
<!--        </div>-->
<!--                <div class="form-group">-->
<!--            <input hidden="" type="hidden" id="book_doc_id" value="1">-->
<!--            <input hidden="" type="hidden" id="book_department_id" value="1">-->
<!--            <button id="bookNow" class="btn btn-success">Book Appointment</button>-->
<!--        </div>-->
<!--    </div>-->
<!--</div></div>-->
<!--	  </div>-->
<!--	</div>-->
<!--</div>-->

<!--end doctor modal-->
        <div class="container pb-3">
            <div class="owl-carousel loop2 pb-5 pt-4">

				@foreach($doctors as $doctor)
                <div class="item">
                    <div class="card" style="width: 17rem;box-shadow: none; border:0px">
                        <img class="card-img-top"
                            src="{{ asset('public/upload/doctor/'.$doctor->image)  }}"
                            alt="Card image cap">
                        <div class="card-body" style="    border: 0px;     padding: 10px 4px 8px 0px;">
                            <h5>Dr. {{ $doctor->name }}</h5>
                            <p class="card-text pb-2">{{ $doctor->service }} </p>
                            <p><button  data-id="{{ $doctor->id }}" class="appoint_now"  style="padding: 7px 10px; border: 2px solid #c7c7c7;">Book Appointment &nbsp;<i class="fa fa-angle-right " aria-hidden="true"></i></button></p>
                        </div>
                    </div>
                </div>
				@endforeach
            </div>

            <script type="text/javascript">
            
            
              $(document).on('click','.appoint_now',function(){
         let id = $(this).data('id');
         let url = "https://pasaal.online/doctor-detail-page";
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
                     $('#doctorModal').modal('show');
                     $('#appointmentContent').html(data.data);          
                  }else{
                     console.log('error');
                  }
              },
              error:function(xhr){
                  console.log(xhr);
              }
         });
      });
      
      $(document).on('click','#bookNow',function(){
         let url = "https://pasaal.online/bookappoinment";
         let name = $('#book_name').val();
         let phone_no = $('#book_contact_number').val();
         let department_id = $('#book_department_id').val();
         let doc_id = $('#book_doc_id').val();
         let service_id = null;
         let user_id = $('#bookAuthId').val();
         let messages = $('#book_message').val();
         $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: url,
              type: "POST",
              data: {
                  "name":name,
                  "phone_no":phone_no,
                  "department_id":department_id,
                  "doc_id":doc_id,
                  "service_id":service_id,
                  "user_id":user_id,
                  "messages":messages,
              },
              beforeSend:function(){
                  console.log('ajax fired');
              },
              success: function (data) {
                  if(data.status==true){
                     alert(data.message);
                     $('#doctorModal').modal('hide');
                  }else{
                     console.log('error');
                  }
              },
              error:function(xhr){
                  console.log(xhr);
              }
         });
      });


            
            
            
            
                $(".loop2").owlCarousel({
                    autoplay: true,
                    lazyLoad: true,
                    loop: true,
                    margin: 20,
                    /*
                      animateOut: 'fadeOut',
                      animateIn: 'fadeIn',
                      */
                    responsiveClass: true,
                    autoHeight: true,
                    autoplayTimeout: 7000,
                    smartSpeed: 800,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },

                        600: {
                            items: 2
                        },

                        1024: {
                            items: 4
                        },

                        1366: {
                            items: 4
                        }
                    }
                });
            </script>
        </div>
    </section>
        <section class=" pt-5 pb-5" style="background:#e5e5e5;">
            <!--<div class="container pt-5 pb-5">-->
            <!--    {!! $hospital->detail !!}-->
            <!--</div>-->
            
            
               <div class="row">


            <div class="col-lg-8 col-sm-12 pl-5">

          
                <p>{!! $hospital->detail !!}
                </p>
            </div>

            <div class="col-lg-4 col-sm-12 pr-5">
                <img src="{{ asset('public'.$hospital->logo) }}" alt="Hospital image or logo" class="img-thumbnail">
            </div>
            
        </section>
   
    
          <style>
        .curved-section .svg-top {
            
            fill: #e5e5e5;
            width: calc(100% + 1.3px);
    height: 62px;
    display: block;
    width: calc(100% + 1.3px);
    position: relative;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
        }
        .curved-section .svg-bottom {
           fill:#fff;
            transform: rotate(180deg);
display: block;
width: calc(100% + 1.3px);
    height: 49px;
}
 
    </style>
   <!--start medical department     -->
    <section style="background:#00be9c;" class="curved-section">
  <svg class="svg-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> 	<path class="elementor-shape-fill" d="M500,98.9L0,6.1V0h1000v6.1L500,98.9z"></path> </svg>
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12 text-white">
                <h2><b>MEDICAL DEPARTMENT</b></h2>
                <p style="color:white">We cover big variety of medical services</p>
            </div>
        </div>
        <div class="row pb-4 pt-3">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    
                    @foreach($departments as $department)
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center  my-1" style="
    border: #6fdbb2 1px solid;
    border-radius: 5%;">
                
                        <img src="{{ asset('public/upload/department/'.$department->image) }}" style="    height:130px;object-fit:cover;">
                        <div class="pt-3 pl-4 pr-4" style="border-bottom: 3px solid black; background:#e5e5e5;">
                        <h6><b><a href="{{'https://pasaal.online/find-doctor?department_id='.$department-> id}}">{{ $department -> name}}</a></b></h6>
                        <p class="pb-2" style="color:grey">{{substr($department->description, 0, strpos($department->description, ' ',70))}} ...</p>
                    <cente> <hr class="mb-0" style="background: black; width: 47%; height: 5px;"></center>
                </div>
            </div>
            
            @endforeach
            
            
       
            
            
            

            
          
            
            
            
            
                </div>
            </div>
                <!--<div class="col-lg-4 col-md-4 col-sm-12">-->
                <!--    <h6 class="text-white"><b>MODERN EQUIPMENT<hr style=" border-top: 1px solid rgb(255 255 255);  width: 49%; margin-right: 0px; margin-top: -10px;"></b></h6>-->
                <!--    <p class="text-white pb-2" style="font-size: 15px;">-->
                <!--        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since -->
                <!--        \the 1500s, when an unknown printer took a galley of type and sheets containing Lorem Ipsum passages, and more recently with desktop publishing-->
                <!--        software like Aldus PageMaker including versions of Lorem Ipsum.-->
                <!--    </p>-->
                <!--    <i class="fa fa-check" aria-hidden="true" style="background:black; padding:7px; font-size:14px; color:white"></i><span style="background: white;  font-size:15px;  padding: 5px 40px;color:black">CHECKOUT ALL DEPARTMENT</span>-->
                <!--</div> -->
        </div>
        
    </div>
    <svg class="svg-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> 	<path class="elementor-shape-fill" d="M500,98.9L0,6.1V0h1000v6.1L500,98.9z"></path> </svg>
</section> 

<!--end medical department-->

      <section class="pt-5 pb-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 col-12" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Our Gallery</h2>
                    <p class="m-0">Diagnostic Services Professional Consultation Tooth</p>
                </div>

                <div class="col-lg-6 col-12 text-right pt-2">
                    <a href="" style="    padding: 7px 10px; border: 2px solid #c7c7c7;">View All &nbsp;<i
                            class="fa fa-angle-right " aria-hidden="true"></i></a>
                </div>

            </div>
             <div class="row pt-5 pb-5">
				@foreach($hospitalGalleries as $gallery)
                 <div class="col-lg-3 col-sm-6 p-1">
                      <img src="{{ asset('public/storage/'.$gallery->image_path) }}" style="    width: 100%;">
                 </div>
				 @endforeach
             </div>
        </div>
        </section>
        
        
        <section class=" pt-5 pb-5" style="background:#e5e5e5;">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-12">
                        <h2><b>FEATURED SERVICES</b></h2>
                        <p style="color:grey">We cover big variety of medical services</p>
                    </div>
                </div>
                <div class="row pb-4">
                    
                    @foreach($facilities as $facility)
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="pt-4 pl-4 pr-4" style="border: 3px solid #00be9c;">
                             <img src="{{ asset('public/front/13.png') }}" style="    width: 70%;">
                             <h6><b>FREE CHECKUP</b></h6>
                             <p class="pb-4" style="color:grey">The Basis of Wellness</p>
                            <cente> <hr class="mb-0" style="background: #00be9c; width: 47%; height: 5px;"></center>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                {{-- <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <p style="font-size:14px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        
                         <i class="fa fa-check" aria-hidden="true" style="background:#00be9c; font-size:14px; padding:7px; color:white"></i>
                         <span style="background: black;    font-size:15px; padding: 5px;color:white">CHECKOUT ALL THE AWESOME FEATURES</span>
                    </div>
                </div> --}}
            </div>
        </section>


        <!--<section style="background:#ade3c9">-->
        <!--    <div class="container pt-5 pb-5">-->
        <!--        <div class="row pt-5 pb-5">-->
        <!--            <div class="col-12 text-center text-white">-->
        <!--                <h1 class="pb-3"><b>WAIT! THERE'S A LOT MORE TO SEE!</b></h1>-->
        <!--                <i class="fa fa-check" aria-hidden="true" style="background:black; font-size:14px; padding:7px;"></i><span style="background: #00be9c;   font-size:15px;  padding: 5px;">CHECKOUT ALL THE AWESOME FEATURES</span>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
@stop