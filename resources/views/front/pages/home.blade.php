<!doctype html>
<html lang="en">

<head>
    <title>Flash Car</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">


    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!--Owl carousel CSS-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!--Google Fonts-->
        
 
       
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
       <!--Google fonts End-->
  <style>
  
  
  
  /*Media Queries Breakpoints*/
    /*600px,
      1024px,
      1147px,
      931px,
      650px,
      580px,
      767px,
      480px,
      1199px*/
  
  
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'League Spartan', sans-serif;
    }

    .nav_bar {
  padding: 0 7%;
  overflow: hidden;
  display: flex;
}

.nav_bar .center {
  width: 80%;
}

.center img {
  max-width: 231px;
  width: 100%;
}

.nav_bar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-weight: 600;
}

.nav_bar a:hover {
  color: #ffe500;
}

/* Small Navbar  */
.nav_bar_sm {
  display: none;
  width: 100%;
}

.ham_menu {
  width: 24px;
  height: 24px;
}

.ham_menu img {
  width: 100%;
}

.main_logo img {
  max-width: 231px;
  width: 100%;
}

    .profile {
      width: 37px;
      height: 37px;
      border: 1px solid black;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .profile img {
      width: 100%;
      object-fit: contain;
    }

    /* Small Navbar End */

    .btns_con {
      box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px,
        rgba(0, 0, 0, 0.22) 0px 15px 12px;
      background-color: #ffe500;
      padding: 5px 10px;
      border-radius: 0.5rem;
      border: none;
      font-weight: 600;
      margin: 2px;
      font-size: 12px;
    }

    .btns_log {
      box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px,
        rgba(0, 0, 0, 0.22) 0px 15px 12px;
      background-color: #dce1ef;
      padding: 5px 20px;
      border-radius: 0.5rem;
      border: none;
      font-weight: 600;
      margin: 2px;
      font-size: 12px;
    }

    .nav_bar a.active {
      background-color: #4caf50;
      color: white;
    }
    
    /*More Services*/
    .more_services{
        margin-top: 7rem ;
        margin-bottom: 3rem ;
    }
    /*More services End*/

    /* Testimonial section */
.testimonials {
  margin-bottom: 13rem;
}

#testimonial {
  width: 100%;
}
.testimonial_wrap {
  max-width: 750px;
  height: 100%;
  width: 100%;
  /* border: 1px solid red; */
}
.testi_img img {
  width: 100%;
  height: 100%;
}

.carousel_control {
  background-color: white;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
  border-radius: 50%;
  padding: 2rem;
  height: 4rem;
  width: 4rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
.carousel_control:hover {
  background: #e5ce00;
  box-shadow: -6px 6px 24px 0px rgba(32, 191, 182, 0.25);
}

.carousel_control {
  color: #1d1e21;
}

.carousel-control-next-icon {
  background-image: unset !important;
}

.carousel-control-prev-icon {
  background-image: unset !important;
}

.stars i {
  color: #ffbd3d;
}

/* Testimonial section End */

/*Popular Card*/
.popular_card h5{
    color:#90A3BF;
    text-align: center;
    font-size: 20.26px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
}

    @media screen and (max-width: 600px) {
      .nav_bar a,
      .nav_bar .right {
        float: none;
        display: block;
        text-align: left;
      }
    }

    .header_banner {
      position: relative;
      padding-bottom: 4rem;
    }

    .img_banner img {
      width: 100%;
      object-fit: contain;
      position: relative;
      border-bottom-left-radius: 3rem;
      border-bottom-right-radius: 3rem;
    }

    .header_banner .img_2 {
      position: absolute;
      bottom: 1%;
      left: 50%;
      transform: translate(-50%, 0);
      text-align: center;
      background-color: rgba(255, 255, 255, 0.558);
    }

    .header_banner  h1 {
      font-weight: 600;
    }

    .header_banner  p {
      color: #929395;
    }

    .pick_drop_cards h6 {
      font-weight: 550;
      margin: 0;
    }

    .pick_drop_cards a {
        color: #90A3BF;
        font-family: Plus Jakarta Sans;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: -0.171px;
    }

    .car_logo {
      position: absolute;
      top: 16%;
      left: 17%;
      width: 100%;
      z-index: 3;
      background-size: contain;
    }

    .cards {
      background-color: #f5f3f4;
      padding: 3rem 5%;
      position: relative;
    }

   .card_up{
       background-color: white;
       padding: 23px;
       border-radius: 14.239px;
   }
       
   }

    .line_1 {
      height: 3rem;
      border: 1px solid lightgray;
    }

    .exch button {
    padding: 0.8rem 1.8rem;
    border: none;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 5px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -128%);
    width: 46px;
    height: 46px;
    flex-shrink: 0;
    border-radius: 9px;
    background: #FFE500;
    display: flex;
    justify-content: center;
    align-items: center;
    }
    
    .exch button img{
        width: 22px;
        height: 22px;
    }

    .btn_1 {
      background-color: #ffe500;
      padding: 0.5rem 1.2rem;
      border-radius: 0.5rem;
      border: 1px solid black;
      font-weight: 600;
      margin: 2px;
    }

    .btn_2 {
      background-color: #dce1ef;
      padding: 0.5rem 1rem;
      border-radius: 0.5rem;
      border: 1px solid black;
      font-weight: 600;
      margin: 2px;
    }

    /*.offer_services {
        padding: 2rem 5rem;
    }*/

    .offer_services h1 {      
        color: #000;
        font-family: League Spartan;
        font-size: 65px;
        font-style: normal;
        font-weight: 700;
        line-height: 110%; /* 93.149px */
        letter-spacing: 1.059px;
        text-transform: capitalize;
    }

    .offer_services h1 svg{
        width: 375.34px;
        height: 18.792px;
        transform: rotate(-3.848deg);
        flex-shrink: 0;
        fill: #A49300;
        position: absolute;
        top: 52px;
        z-index: -3;
    }

    @media screen and (max-width: 1024px) {
      .offer_services h1 {
        font-size: 3rem;
      }
    }

    .offer_services p {
      color: #929395;
    }

    .recomendation_car {
      margin-top: 2rem;
    }

    .popular_card {
      margin-top: 4rem;
    }
  
    .card_head_text p {
      color: gray;
    }

    .card_head_text h4 {
      font-weight: 700;
    }

    .cardss {
        padding: 2rem;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        background-color: white;
        border-radius: 12.662px;
        margin-bottom: 1rem;
        max-width: 290px;
        width: 100%;
    }
    
    .cardss .img{
        width: 80%;
        display: block;
        margin: 0 auto;
        margin-bottom: 4rem;
    }

    .price button {
      background-color: #ffc73a;
      padding: 0.5rem 1rem;
      color: white;
      border: none;
      border-radius: 0.5rem;
    }
    
    .price h4{
        font-size: 1rem;
    }

    a {
      text-decoration: none !important;
    }

    .popular_rental_deals {
      padding: 3rem 6%;
      background-color: #f5f3f4;
      /*border-bottom-right-radius: 112px;*/
      /*border-top-right-radius: 112px;*/
      border-radius: 112px;
    }

    .popular_card p {
      color: #929395 !important;
    }

    .popular_card h6 {
      font-weight: 700;
    }

    .class_3 h6 {
      font-size: 13px;
      font-weight: 700;
    }

    .class_3 p {
      font-size: 10px;
    }

    .class_3 button {
      background-color: transparent;
      color: black;
      border-radius: 3rem;
      font-size: 10px;
    }

    .class_3 a {
      background-color: transparent;
      color: black;
      border-radius: 3rem;
      font-size: 10px;
      border: 1px solid black;
    }
    /*Blog Section Start*/



    .blogs_cards{
        padding-inline: 1%;
    }

    .blogs_cards .blogs p{
        color: #000;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
    }

    .blogs h1 {
      color: #e5ce00;
      font-size: 6rem;
      font-weight: 700;
    }

    .blogs p {
      font-weight: 530;
    }

    .blogs {
      padding: 10rem 3rem;
    }

    .blogs_1 {
      padding: 5rem;
    }

    .card_1 {
      border: 1px solid black;
      border-radius: 1rem;
    }

    .college {
      border: none;
      border-radius: 2px;
    }

    .read_more {
      padding: 0.5rem 1rem;
      background: transparent;
      border: 1px solid black;
      border-radius: 2rem;
    }
    
    .read_more svg{
    width: 1.2rem;
    height: 1.2rem;
    transform: translate(2px, -10%);
    }

    .big_card {
      padding: 4rem;
    }


    .small_cards h5{
      font-size: 14px;
      font-weight: 600;
    }
    
    .small_cards p{
        font-size: 13px;
    }

    .tall_card h5 {
      font-size: 2rem;
      font-weight: 600;
    }

    .small_cards .college {
      background-color: lightblue !important;
      padding: 5px;
    }

    .small_cards .read_more {
       padding: 5px 20px;
    }

    .foot {
      background-color: black;
      padding: 1rem 0 0 0;
      margin-top: 10rem;
    }

    .foot_img {
      display: flex;
      justify-content: center;
      transform: translate(0%, -50%);
    }

    .foot_img img {
      background-size: contain;
      width: 80%;
      background-repeat: no-repeat;
    }

    .foot a {
      color: white;
    }

    .foot_text {
      padding: 0 4%;
      width: 50%;
      transform: translate(0, -100%);
    }
    
    .footer_enqury button{
        border: 1px solid white;
        color: white;
        width: 100%;
        border-radius: 100px;
    }
    
    .footer_enqury input::placeholder{
        text-align: center;
    }
    
    /* Desktop first MEDIA QUERIES */

    @media (max-width: 1147px) {
      .nav_bar .center {
        transform: translate(6%, 0);
        width: 100%;
      }
    }

    /* Smalll nav bar */
    @media (max-width: 931px) {
      .nav_bar {
        display: none !important;
      }

      .nav_bar_sm {
        display: flex;
      }
      /* Hero Section */

      /* Hero section Small desktop  */
      .hero_sec_sm .img_2 {
        position: unset;
      }
      .hero_sec_sm .resgister_hero button{
        display: flex;
        width: 128px;
        height: 44px;
        padding: 0px 20px;
        justify-content: center;
        align-items: center;
        gap: 8px;
        flex-shrink: 0;
        border-radius: 27px;
        background: #FFE500;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        border: none;
          
      }
      
      .nav_side  {
        display: flex;
        position: absolute;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        height: 100vh;
        padding: 3rem;
        top: 4rem;
        left: 0;
        z-index: 999;
      }

      .nav_side .center {
        display: flex;
      }

      .nav_side .center a {
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-weight: 600; 
      }

      .show {
        animation: show 1s 1 ease-in;
      }

      .vanish {
        animation: vanish 1s 1 ease-out;
        /* z-index: 999; */
      }

      .hide {
        display: none !important;
      }
      /* Hero section Small desktop  End */
      /* Hero Section End*/
      @keyframes vanish {
        0% {
          opacity: 1;
        }
        100% {
          opacity: 0;
        }
      }
      @keyframes show {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }

      .foot_text {
        width: 100%;
        transform: unset;
      }
      
      
      /*Testimonial Section*/
      .testi_img{
        width: 50%;
        border-radius: 20px;
        overflow: hidden;
        margin: 0 auto;
      }
     /*Testimonial Section End*/ 
    }
    /* Smalll navbar End */
    
    
    
    @media(max-width: 650px){
        .popular_card .owl-item{
          transform: translate(-136px, 0px);
        }
        .popular_card .owl-item.active{
            transform: translate(0px, 0px) !important;
        }
    }
    
     @media(max-width: 580px){
        .popular_card .owl-item{
          transform: translate(0px, 0px);
        }
        .popular_card .owl-item.active{
            transform: translate(0px, 0px) !important;
        }
        
        .cardss{
            width: unset;
            margin: 0 auto;
        }
        
        .carousel_control{
            width: 3rem;
            height: 3rem;
            padding: 1.5rem;
        }
        
        /*Recomendation Car*/
        .recomendation_car .cardss{
            margin: unset;
            max-width: unset;   
        }
        .recomendation_flex{
            display: flex;
        }
         .recomendation_flex .attr{
             flex-direction: column;
             margin-top: unset !important;
             margin-left: 5px;
             justify-content: unset !important;
             min-width: 85px ;
         }
        /*Recomendation Car End*/
        
    }
    
     @media(max-width: 767px){
         .popular_rental_deals{
             border-radius: 0;
         }
         .testimonials{
             background-color: #f5f3f4;
         }
         
         .btn_3{
             display: none;
         }
         
         .exch button{
             transform: translate(-50%, -50%);
         }
         
         .exch button img {
            transform: rotate(89.688deg);
        }
          .popular_card h5 {
          color: #000;
        }
         
     }

     @media(max-width: 767px){
  
      .mobile-slider{
        overflow: scroll;
      }
      .testimonials{
        margin-bottom: 0rem; 
      }
  
      .foot_img_mbl{
        text-align: center;
      }
      .foot_img_mbl img{
        width: 90%;
        max-width: 400px;
      }
      .foot_text{
        background: #000;
        border-radius: 41px;
        display: flex;
        align-items: center;
        flex-direction: column;
      }
      .footer-logo img{
        width: 80%;
      }
      hr{
        border: 1px solid #fff !important;
        width: 100% !important;
        margin-bottom: 1em !important;
      }
      .form-control{
        border-radius: 38px;
        border: 0.5px solid #90A3BF;
        background: transparent;
      }
      .footer_menu_section {
        display: flex;
        align-items: center;
        color: #fff;
        gap: 5em;
      }
      .footer-menu ul{
        list-style: none;
        padding: 0;
      }
      .footer-menu ul li a{
        text-decoration: none;
        color: #90A3BF;
        font-size: 16px;
        line-height: 30.2px;
        font-weight: 500;
      }
      .newsletter {
        padding: 16px 0;
        background: #0c273a;
        width: 100%;
        border-radius: 10px;
      }

      .newsletter .content {
      max-width: 650px;
      margin: 0 auto;
      text-align: center;
      position: relative;
      z-index: 2; }
      .newsletter .content h2 {
      color: #fff;
      margin-bottom: 15px;
      text-align: start;
      }
      .newsletter .content p {
      color: #fff;
      margin-bottom: 15px;
      text-align: start;
      font-size: 13px;
      line-height: 17.76px;
      font-weight: 500;
      margin-top: 15px;
      opacity: 50%;
      }
      .newsletter .content .form-control{
      height: 50px;
      border-color: #001622;
      border-radius:0;
      }
      .newsletter .content.form-control:focus {
      box-shadow: none;
      border: 2px solid #243c4f;
      }
      input.form-control.newsletter{
        border-radius: 0px !important;
      }
      .newsletter .content .btn {
      min-height: 50px; 
      border-radius:0;
      background: #000E15;
      color: #fff;
      font-weight:600;
      }
     }
     
     @media(max-width: 1199px){
        .blogs{
            padding-bottom: 1rem;
            padding-top: 1rem;
        }
     }
  </style>
         
  
</head>

<body>

    <!-- Nav Bar Desktop -->
    <div class="nav_bar  justify-content-xl-end justify-content-end justify-content-md-center py-5">

        <div class="center d-flex justify-content-lg-between justify-content-start align-items-center
        ">
            <a href="#home">Home</a>
            <a href="#carlist">Carlist</a>
                <a href="#"><img src="{{asset('public/new-images/main-logo.png') }}" alt="Logo"></a>
            <a href="#blogs">Blogs</a>
            <a href="#contact">Contact Us</a>
            <div class="right">
                <button type="button" class="btns_con">Contact Us</button>
                <button type="button" class="btns_log">Login</button>
            </div>
        </div>
     
    </div>
    <!-- Nav Bar Desktop End-->

    <!-- Nav Bar Small Screen -->
    <div class="nav_bar_sm  justify-content-around align-items-center">
        <div class="ham_menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              
        </div>
        <div class="main_logo">
            <img src="{{asset('public/new-images/main-logo.png') }}" alt="">
        </div>
        <div class="profile">
          <img src="{{asset('public/new-images/image 76.png') }}" alt="">
        </div>
        <div class="nav_side hide vanish">
                <nav class="center 
                flex-column
                justify-content-lg-between justify-content-start align-items-center
                ">
                    <a href="#home">Home</a>
                    <a href="#carlist">Carlist</a>
                    <a href="#blogs">Blogs</a>
                    <a href="#contact">Contact Us</a>
                    <div class="right">
                        <button type="button" class="btns_con">Contact Us</button>
                        <button type="button" class="btns_log">Login</button>
                    </div>
                </nav>
        </div>
    </div>
    <!-- Nav Bar Small Screen End -->



    <!-- Hero Section -->
        <div class="header_banner d-none d-md-block">
            <div class="img_banner">
              <img src="{{asset('public/new-images/carbanner.jpg') }}" alt=""> 
            </div>

                <div class="img_2">
                    <h1>Rent Your Favourite</h1>
                    <h1>Car In <strong class="text-warning">Easy</strong> Steps.</h1>
                    <p>Get a car wherever and whenever you need<br> it with your iOS or Android device.</p>
                </div>
            </div>
        </div>
    <!-- Hero Section End-->
    <!-- Hero Section Small desktop -->
     <div class="hero_sec_sm header_banner d-md-none d-block mt-4">
        <div class="hero_sec_wrap">
                <h1 class="text-center">Rent Your Favourite</h1>
                <h1 class="text-center">Car In <strong class="text-warning">Easy</strong> Steps.</h1>
            
                <div class="owl-carousel owl-theme" id="img_carousel">
                  <img class="item mx-auto" style="max-width: 400px;width: 60%" src="{{asset('public/new-images/lambo.png') }}" alt="">
                  <img class="item mx-auto" style="max-width: 400px;width: 60%" src="{{asset('public/new-images/lambo.png') }}" alt="">
                  <img class="item mx-auto" style="max-width: 400px;width: 60%" src="{{asset('public/new-images/lambo.png') }}" alt="">
                </div>
                <p class="text-center mt-2">Get a car wherever and whenever you need<br> it with your Android device.</p>
                <div class="resgister_hero">
                    <button class="mx-auto">Register now</button>
                    <div class="d-flex gap-2 justify-content-center mt-3">
                        <div><img src="{{asset('public/new-images/App Store.png')}}"></div>
                        <div><img src="{{asset('public/new-images/Google Play.png')}}"></div>
                    </div>
                </div>
        </div>
    </div> 
    <!-- Hero Section Small desktop End -->

    <!-- Cards Section -->
    <div class="cards pick_drop_cards position-relative" >
        <div class="d-flex justify-content-center">
            <!-- Card 1 - Pick-Up -->
            <div class="row" style="width: 100%; max-width: 800px">

                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <div class="card_up">
                        <div class="">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <h5>Pick-Up</h5>
                                </label>
                            </div>
                            <!-- Pick-Up Dropdowns -->
                            <div class="drop_down d-flex justify-content-between flex-wrap">
                                <!-- Location Dropdown -->
                                <div class="">
                                    <h6>Location</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="line_1"></div>
                                <!-- Date Dropdown -->

                                <div class="">
                                    <h6>Date</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="line_1"></div>
                                <!-- Time Dropdown -->

                                <div class="">
                                    <h6>Time</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - Drop-off -->
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <div class="card_up">
                        <div class="">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <h5>Drop-off</h5>
                                </label>
                            </div>
                            <!-- Drop-off Dropdowns -->
                            <div class="drop_down d-flex justify-content-around flex-wrap">
                                <!-- Location Dropdown -->
                                <div class="">
                                    <h6>Location</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Date Dropdown -->
                                <div class="line_1"></div>
                                <div class="">
                                    <h6>Date</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Time Dropdown -->
                                <div class="line_1"></div>
                                <div class="">
                                    <h6>Time</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle px-0" href="#" role="button"
                                            data-bs-toggle="dropdown">
                                            Semarang
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Exchange Button -->
        <a href="#" class="exch"><button type="button">
            <img src="{{asset('public/new-images/Swap.svg')}}">
        </button></a>

        <!-- Button Section -->
        <div class="btns text-center mt-4 d-none d-md-block">
            <button type="button" class="btn_1">Book Now</button>
            <button type="button" class="btn_2">Contact Us</button>
        </div>
    </div>





    <div class="more_services container container-sm">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <section class="offer_services d-none d-md-block">
                    <h1>More Services We <br> All offer For Our</h1>
                    <h1 class="position-relative" style="color: #E5CE00;">Customer!! <br>
                    <svg class="d-none" xmlns="http://www.w3.org/2000/svg" width="375" height="34" viewBox="0 0 375 34" fill="none">
                    <path d="M0.0440759 15.187L374.282 0.226267L366.674 7.64472L0.365026 34.0001L0.0440759 15.187Z" fill="#A49300"/>
                    </svg>
                    </h1>
                    <p>Get a car wherever and whenever you need it with <br>
                        your iOS or Android device.</p>

                    <div class="btns_2  mt-4">
                        <button type="button" class="btn_1">Contact Us</button>
                        <button type="button" class="btn_2">Know More</button>
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 ">
               <div class="owl-carousel owl-theme" id="service_card">
                <div class="rental_img">
                    <img src="{{asset('public/new-images/Frame 427320752.png') }}" width="100%" alt="car_rental_img">
                </div>
                <div class="rental_img">
                  <img src="{{asset('public/new-images/Group 1000001787.png') }}" width="100%" alt="car_rental_img">
              </div>
              <div class="rental_img">
                <img src="{{asset('public/new-images/Group 1000001788.png') }}" width="100%" alt="car_rental_img">
            </div>
            <div class="rental_img">
              <img src="{{asset('public/new-images/Group 1000001789.png') }}" width="100%" alt="car_rental_img">
          </div>
            </div>
            </div>    
        </div>
    </div>

    <div class="popular_rental_deals">

        <div class="card_head_text text-center">
            <p>POPULAR RENTAL DEALS</p>
            <h4>Most popular cars rental deals</h4>
        </div>


        <div class="popular_car">

            <div class="popular_card" >

                <div class="d-flex justify-content-between mb-3">
                    <h5 >Popular Car</h5>
                    <a href="#" class="text-warning">View All</a>
                </div>

                <div  class="owl-carousel owl-theme" id="popular_car-carousel"> 
                    <div class="cardss">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>

                        <div class="img">
                            <img src="{{asset('public/new-images/car.png') }}" class="mt-3" width="220" alt="car">
                        </div>
                        <div class="d-flex justify-content-between text-muted mt-5">
                            <a href="#">
                                <p><i class="fa-solid fa-gas-pump me-1"></i>90L</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-regular fa-circle-dot me-1 "></i>Manual</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-solid fa-user-group me-1"></i>2 People</p>
                            </a>
                        </div>
                        <div class="price d-flex justify-content-between align-items-center mt-3">
                            <div class="d-flex">
                                <h4 class="m-0">$99.00/</h4>
                                <p class="text-secondary m-0">day</p>
                            </div>
                            <button type="button">Rent Now</button>

                        </div>
                    </div>
                    <div class="cardss">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <div class="img">
                            <img src="{{asset('public/new-images/car-2.png') }}" class="mt-3" width="220" alt="car">
                        </div>
                        <div class="d-flex justify-content-between text-muted mt-5">
                            <a href="#">
                                <p><i class="fa-solid fa-gas-pump me-1"></i>90L</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-regular fa-circle-dot me-1 "></i>Manual</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-solid fa-user-group me-1"></i>2 People</p>
                            </a>
                        </div>
                        <div class="price d-flex justify-content-between mt-3">
                            <div class="d-flex">
                                <h4>$99.00/</h4>
                                <p class="text-secondary">day</p>
                            </div>
                            <button type="button">Rent Now</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="recomendation_car">

            <div class="popular_card">
                
                <div class="d-flex justify-content-between mb-3">
                    <h5>Recommendation Car</h5>
                </div>
                
                 <div  class="owl-carousel owl-theme recommend_car-carousel"> 
                    <div class="cardss">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                    <div class="recomendation_flex">        
                        <div class="img">
                            <img src="{{asset('public/new-images/car.png') }}" class="mt-3" width="220" alt="car">
                        </div>
                        <div class="attr d-flex justify-content-between text-muted mt-5">
                            <a href="#">
                                <p><i class="fa-solid fa-gas-pump me-1"></i>90L</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-regular fa-circle-dot me-1 "></i>Manual</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-solid fa-user-group me-1"></i>2 People</p>
                            </a>
                        </div>
                    </div>    
                        <div class="price d-flex justify-content-between mt-3">
                            <div class="d-flex">
                                <h4>$99.00/</h4>
                                <p class="text-secondary">day</p>
                            </div>
                            <button type="button">Rent Now</button>

                        </div>
                    </div>
                    <div class="cardss">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <div class="img">
                            <img src="{{asset('public/new-images/car-2.png') }}" class="mt-3" width="220" alt="car">
                        </div>
                        <div class="d-flex justify-content-between text-muted mt-5">
                            <a href="#">
                                <p><i class="fa-solid fa-gas-pump me-1"></i>90L</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-regular fa-circle-dot me-1 "></i>Manual</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-solid fa-user-group me-1"></i>2 People</p>
                            </a>
                        </div>
                        <div class="price d-flex justify-content-between mt-3">
                            <div class="d-flex">
                                <h4>$99.00/</h4>
                                <p class="text-secondary">day</p>
                            </div>
                            <button type="button">Rent Now</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="popular_card mt-3">
                <div  class="owl-carousel owl-theme recommend_car-carousel"> 
                    <div class="cardss">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <div class="img">
                            <img src="{{asset('public/new-images/car.png') }}" class="mt-3" width="220" alt="car">
                        </div>
                        <div class="d-flex justify-content-between text-muted mt-5">
                            <a href="#">
                                <p><i class="fa-solid fa-gas-pump me-1"></i>90L</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-regular fa-circle-dot me-1 "></i>Manual</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-solid fa-user-group me-1"></i>2 People</p>
                            </a>
                        </div>
                        <div class="price d-flex justify-content-between mt-3">
                            <div class="d-flex">
                                <h4>$99.00/</h4>
                                <p class="text-secondary">day</p>
                            </div>
                            <button type="button">Rent Now</button>

                        </div>
                    </div>
                    <div class="cardss">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <div class="img">
                            <img src="{{asset('public/new-images/car-2.png') }}" class="mt-3" width="220" alt="car">
                        </div>
                        <div class="d-flex justify-content-between text-muted mt-5">
                            <a href="#">
                                <p><i class="fa-solid fa-gas-pump me-1"></i>90L</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-regular fa-circle-dot me-1 "></i>Manual</p>
                            </a>
                            <a href="#">
                                <p><i class="fa-solid fa-user-group me-1"></i>2 People</p>
                            </a>
                        </div>
                        <div class="price d-flex justify-content-between mt-3">
                            <div class="d-flex">
                                <h4>$99.00/</h4>
                                <p class="text-secondary">day</p>
                            </div>
                            <button type="button">Rent Now</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="btn_3 text-center mt-5">
            <button type="button" class="btn_1">Show More</button>
            <button type="button" class="btn_2">Know More</button>
        </div>
    </div>

    <div class="blogs_cards mt-5 d-none d-md-block">

        <div class="row mx-0">

            <div class="col-xl-4  col-sm-12">
                <div class="blogs">
                    <h1>Blogs</h1>
                    <p>We are constantly publishing informative and insightful blogs covering a wide variety of
                        topics
                        related
                        to
                        <b> education, freelancing, careers, courses,</b> and anything else that can help our
                        readers in
                        some
                        way.
                    </p>
                </div>
            </div>


            <div class="col-xl-8  col-sm-12">

                <div class="big_card">

                    <div class="row">

                        <div class="col-lg-6 col-md-12 col-sm-12 p-1">
                            <div class="card tall_card" style="width: 100%; height: 100%; margin: 0;">
                                <img src="{{asset('public/new-images/Image.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <button type="button" class="bg-warning p-2 mb-2 college">College</button>
                                    <h5 class="card-title">How to Choose the Best College for Your Career in India?
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Voluptatum esse maxime, corporis fugit natus autem corrupti doloribus hic
                                        vero
                                        perferendis consectetur, ea consequatur explicabo maiores, odit recusandae
                                        aperiam et nostrum.</p>
                                    <button type="button" class="read_more  mt-3 d-flex align-items-center">Read More<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z" fill="#111111"/>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="small_cards">

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                        <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                            <img src="{{asset('public/new-images/Image-2.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <button type="button" class="bg-warning  mb-2 college">College</button>
                                                <h5 class="card-title">How to Choose the Best College for Your
                                                    Career in
                                                    India?</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit.
                                                    Suspendisse varius enim in eros.</p>
                                                <button type="button" class="read_more  mt-3 d-flex align-items-center">Read More<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z" fill="#111111"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                        <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                            <img src="{{asset('public/new-images/Image-3.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <button type="button" class="bg-warning mb-2 college">College</button>
                                                <h5 class="card-title">How to Choose the Best College for Your
                                                    Career in
                                                    India?</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit.
                                                    Suspendisse varius enim in eros.</p>
                                                <button type="button" class="read_more  mt-3 d-flex align-items-center">Read More<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z" fill="#111111"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                        <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                            <img src="{{asset('public/new-images/Image-4.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <button type="button" class="bg-warning  mb-2 college">College</button>
                                                <h5 class="card-title">How to Choose the Best College for Your
                                                    Career in
                                                    India?</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit.
                                                    Suspendisse varius enim in eros.</p>
                                                <button type="button" class="read_more  mt-3 d-flex align-items-center">Read More<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z" fill="#111111"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                        <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                            <img src="{{asset('public/new-images/Image-5.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <button type="button" class="bg-warning  mb-2 college">College</button>
                                                <h5 class="card-title">How to Choose the Best College for Your
                                                    Career in
                                                    India?</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit.
                                                    Suspendisse varius enim in eros.</p>
                                                <button type="button" class="read_more  mt-3 d-flex align-items-center">Read More<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00344 5.14778C7.10434 5.24867 7.10434 5.41222 7.00344 5.51311L4.36956 8.14699C4.26867 8.24788 4.10512 8.24788 4.00423 8.14699L3.88243 8.0252C3.78154 7.92432 3.78154 7.76074 3.88243 7.65985L6.21185 5.33045L3.88243 3.00103C3.78154 2.90014 3.78154 2.73659 3.88243 2.6357L4.00423 2.5139C4.10512 2.41301 4.26867 2.41301 4.36956 2.5139L7.00344 5.14778Z" fill="#111111"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TEstimonial Section -->

    <div class="testimonials">
        <div class="test_head text-center">
            <h5>Testimonial</h5>
            <h3>What people say about?</h3>
        </div>
    
        <div id="testimonial" class="carousel slide ">
            <div class="carousel-inner">
               <div class="carousel-item active">
                    <div class="testimonial_wrap row mx-auto  mt-4 ">
                        <div class="col-lg-6">
                            <div class="testi_img"><img src="{{asset('public/new-images/testimonial1.jpeg')}}" alt="testimonial one"></div>
                        </div>
                        <div class="col-lg-6 p-3 d-flex flex-column">
                           <div class="order-2 order-md-1">
                              <p class="text-center text-md-start">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat atque enim explicabo assumenda tempore autem minus culpa neque? Quisquam vel libero quos asperiores. Eligendi optio voluptatibus adipisci reiciendis cumque sint praesentium recusandae atque ut tenetur?</p>
                           </div>
                           <div class="order-1 order-md-2">
                            <h4 class="text-center text-md-start">Name of the customer</h4>
                            <div class="stars text-center text-md-start mb-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="total_rating">4.9</span>
                            </div>
                           </div>    
                        </div>
                    </div>
               </div>
               <div class="carousel-item ">
                    <div class="testimonial_wrap row mx-auto  mt-4 ">
                        <div class="col-lg-6">
                            <div class="testi_img"><img src="{{asset('public/new-images/testimonial1.jpeg')}}" alt="testimonial one"></div>
                        </div>
                        <div class="col-lg-6 p-3 d-flex flex-column">
                           <div class="order-2 order-md-1">
                              <p class="text-center text-md-start">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat atque enim explicabo assumenda tempore autem minus culpa neque? Quisquam vel libero quos asperiores. Eligendi optio voluptatibus adipisci reiciendis cumque sint praesentium recusandae atque ut tenetur?</p>
                           </div>
                           <div class="order-1 order-md-2">
                            <h4 class="text-center text-md-start">Name of the customer</h4>
                            <div class="stars text-center text-md-start mb-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="total_rating">4.9</span>
                            </div>
                           </div>    
                        </div>
                    </div>
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial" data-bs-slide="prev">
                <div class="carousel_control " aria-hidden="true">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#testimonial" data-bs-slide="next">
                <span class="carousel_control" aria-hidden="true">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>
      
    </div>
    <!-- TEstimonial Section -->
    

    {{-- Footer for desktop --}}
    <footer class="desktop d-none d-md-block">
        <div class="foot">

            <div class="foot_img d-sm-flex">
                <img src="{{asset('public/new-images/footer-img.png') }}" alt="footer">
            </div>

            <div class="foot_text ms-auto d-flex justify-content-between ">
                <div>
                    <a href="#">+91-9876543210</a>
                </div>
                <div>
                    <h6 class="text-white text-end">Follow US</h6>
                    <a href="#"><i class="fa-brands fa-twitter me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                
            </div>
        </div>
    </footer>
    {{-- footer for desktop end --}}

    {{-- footer for mobile --}}

    <footer class="mobile d-block d-md-none">
      <div class="foot-mobile">
          <div class="foot_img_mbl d-sm-flex justify-content-center">
              <img src="{{asset('public/new-images/New Project.png') }}" alt="footer">
          </div>

          <div class="foot_text ms-auto mt-3">
              <div class="footer-logo">
                <a class="d-flex justify-content-center" href="{{ url('/') }}"><img src="{{asset('public/new-images/main-logo.png') }}" alt="Logo"></a>
              </div>
              <hr>  
              <div class="footer_enqury">
                  <h4 class="text-white mb-3 text-center">Business Enquire</h4>
                  <form class="mb-3">
                    <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputCompany" placeholder="Company">
                    </div>
                    <div class="mb-3">
                      <input type="tel" class="form-control" id="exampleInputPhone" placeholder="Mobile Number">
                    </div>
                <button type="submit" class="btn mx-auto">Submit</button> 
                  </form>
              </div>
              <div class="footer_menu_section mt-3 mb-3">
                <div class="footer-menu">
                  <div class="menu_text">
                    <h5>About</h5>
                  </div>
                  <ul>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Featured</a></li>
                    <li><a href="#">Partnership</a></li>
                    <li><a href="#">Business Relation</a></li>
                  </ul>
                </div>
                <div class="footer-menu">
                  <div class="menu_text">
                    <h5>Help</h5>
                  </div>
                  <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Services</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Refund Policy</a></li>
                  </ul>
                </div>
              </div>

              <section class="newsletter mb-5">
                <div class="container">
                <div class="row">
                <div class="col-sm-12">
                  <div class="content">
                    <h2>Join Our Newsletter</h2>
                    <div class="input-group">
                      <input type="email" class="form-control newsletter" placeholder="Your email address">
                      <span class="input-group-btn">
                      <button class="btn" type="submit">Subscribe</button>
                      </span>
                    </div>
                    <p>*  Will send you weekly updates for your better tool management.</p>
                  </div>
                </div>
                </div>
                </div>
                </section>
              
          </div>
          
      </div>
  </footer>

    {{-- footer for mobile end--}}


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

        
        <!-- Jquery  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- Jquery End -->
       
       <!--Owl carousel js-->
       <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    
   
    <script src="script.js"></script>
    
    <script>
        $('#popular_car-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
                0:{
                    items:1
                },
                650:{
                    items: 2
                },
                1024:{
                    items: 3
                },
                1200: {
                    items: 4
                }
                
            }
        })
        
          $('#service_card').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items: 1
            })
        
         $('.recommend_car-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
                0:{
                    items:1
                },
                650:{
                    items: 2
                },
                1024:{
                    items: 3
                },
                1200: {
                    items: 4
                }
                
            }
        })
        
            $('#img_carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                    0:{
                        items:1
                    },
                    650:{
                        items: 1
                    },
                    1024:{
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                    
                }
            })
        
        
        
        
    </script>
    
    <!--Nav Scripts-->
    <script>
        const ham_menu = document.querySelector(".ham_menu");
        const nav_side_center = document.querySelector(".nav_side");
        
        ham_menu.addEventListener("click", function () {
          nav_side_center.classList.toggle("vanish");
          nav_side_center.classList.toggle("show");
        
          if (nav_side_center.classList.contains("vanish")) {
            setTimeout(function () {
              nav_side_center.classList.add("hide");
            }, 900);
          } else {
            nav_side_center.classList.remove("hide");
          }
        });
    </script>
        
</body>

</html>