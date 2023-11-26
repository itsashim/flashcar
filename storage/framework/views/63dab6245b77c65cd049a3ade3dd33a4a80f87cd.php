<!doctype html>
<html lang="en">

<head>
    <title>Rental</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <style>
            * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
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
  font-weight: 900;
  font-style: italic;
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
  font-weight: 900;
  font-style: italic;
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
  font-weight: 900;
  font-style: italic;
  margin: 2px;
  font-size: 12px;
}

.nav_bar a.active {
  background-color: #4caf50;
  color: white;
}

@media  screen and (max-width: 600px) {
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

.header_banner .img_2 h1 {
  font-weight: 900;
}

.header_banner .img_2 p {
  color: #929395;
}

.pick_drop_cards h6 {
  font-weight: 550;
  margin: 0;
}

.pick_drop_cards a {
  font-size: 12px !important;
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
  padding: 3rem;
  position: relative;
}

.card {
  margin: 0.5rem;
}

.line_1 {
  height: 3rem;
  border: 1px solid lightgray;
}

.exch button {
  padding: 0.8rem 1.8rem;
  border-radius: 1rem;
  border: none;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  background-color: #e5ce00;
  position: absolute;
  left: 47%;
  bottom: 54%;
}

.btn_1 {
  background-color: #ffe500;
  padding: 0.5rem 1.2rem;
  border-radius: 0.5rem;
  border: 1px solid black;
  font-weight: 900;
  font-style: italic;
  margin: 2px;
}

.btn_2 {
  background-color: #dce1ef;
  padding: 0.5rem 1rem;
  border-radius: 0.5rem;
  border: 1px solid black;
  font-weight: 900;
  font-style: italic;
  margin: 2px;
}

/*.offer_services {
    padding: 2rem 5rem;
}*/

.offer_services h1 {
  font-size: 4rem;
  font-weight: 700;
}

@media  screen and (max-width: 1024px) {
  .offer_services h1 {
    font-size: 3rem;
  }
}

.offer_services p {
  color: #929395;
}

.more_services {
  padding: 6rem;
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
  border-radius: 1rem;
  margin: 1rem;
}

.price button {
  background-color: #ffc73a;
  padding: 0.5rem 1rem;
  color: white;
  border: none;
  border-radius: 0.5rem;
}

a {
  text-decoration: none !important;
}

.popular_rental_deals {
  padding: 3rem 4rem;
  background-color: #f5f3f4;
  border-radius: 6rem;
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

.big_card {
  padding: 4rem;
}

.small_cards {
  font-size: 10px;
}

.small_cards h5 {
  font-size: 12px;
}

.tall_card h5 {
  font-size: 2rem;
  font-weight: 800;
}

.small_cards h5 {
  font-weight: 800;
}

.small_cards .college {
  background-color: lightblue !important;
  padding: 5px;
}

.small_cards .read_more {
  padding: 5px;
}

/*.foot{
    height: 50vh;
    background-color: black;
    margin-top: 15rem;

}*/

.foot_img {
  display: flex;
  justify-content: center;
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
  background-color: black;
  height: 20vh;
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
  .header_banner {
    display: none;
  }

  /* Hero section Small desktop  */
  .hero_sec_sm .img_2 {
    position: unset;
  }
  /* Hero section Small desktop  End */
  /* Hero Section End*/
}
/* Smalll nav bar End */

        </style>
</head>

<body>

    <!-- Nav Bar Desktop -->
    <div class="nav_bar  justify-content-xl-end justify-content-end justify-content-md-center py-5">

        <div class="center d-flex justify-content-lg-between justify-content-start align-items-center
        ">
            <a href="#home">Home</a>
            <a href="<?php echo e(url('/car-list')); ?>">Carlist</a>
                <a href="/"><img src="<?php echo e(asset('/public/new-images/main-logo.png')); ?>" alt="Main Logo"></a>
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
            <img src="<?php echo e(asset('/public/new-images/main-logo.png')); ?>" alt="">
        </div>
        <div class="profile">
          <img src="<?php echo e(asset('/public/new-images/image 76.png')); ?>" alt="">
        </div>
    </div>
    <!-- Nav Bar Small Screen End -->



    <!-- Hero Section -->
        <div class="header_banner ">
            <div class="img_banner">
                <img src="<?php echo e(asset('/public/new-images/carbanner.jpg')); ?>" alt=""> </div>

                <div class="img_2">
                    <h1>Rent Your Favourite</h1>
                    <h1>Car In <strong class="text-warning">Easy</strong> Steps.</h1>
                    <p>Get a car wherever and whenever you need<br> it with your iOS or Android device.</p>
                </div>
            </div>
        </div>
    <!-- Hero Section End-->
    <!-- Hero Section Small desktop -->
    <!-- <div class="hero_sec_sm">
        <div class="hero_sec_wrap">
                <h1>Rent Your Favourite</h1>
                <h1>Car In <strong class="text-warning">Easy</strong> Steps.</h1>
            
                <div><img src="" alt=""></div>
            <p>Get a car wherever and whenever you need<br> it with your iOS or Android device.</p>
        </div>
    </div> -->
    <!-- Hero Section Small desktop End -->

    <!-- Cards Section -->
    <div class="cards pick_drop_cards">
        <div class="d-flex justify-content-center">
            <!-- Card 1 - Pick-Up -->
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
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
                                <div class="text-center">
                                    <h6>Location</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle" href="#" role="button"
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

                                <div class="text-center">
                                    <h6>Date</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle" href="#" role="button"
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

                                <div class="text-center">
                                    <h6>Time</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle" href="#" role="button"
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
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
                                <div class="text-center">
                                    <h6>Location</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle" href="#" role="button"
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
                                <div class="text-center">
                                    <h6>Date</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle" href="#" role="button"
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
                                <div class="text-center">
                                    <h6>Time</h6>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle" href="#" role="button"
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
        <a href="#" class="exch"><button type="button"><i class="fa-solid fa-right-left fa-2xl"></i></button></a>

        <!-- Button Section -->
        <div class="btns text-center mt-4">
            <button type="button" class="btn_1">Book Now</button>
            <button type="button" class="btn_2">Contact Us</button>
        </div>
    </div>



    <div class="more_services container">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12">
                <section class="offer_services">
                    <h1>More Services We <br> All offer For Our</h1>
                    <h1 style="color: #E5CE00;">Customer</h1>
                    <p>Get a car wherever and whenever you need it with <br>
                        your iOS or Android device.</p>

                    <div class="btns_2  mt-4">
                        <button type="button" class="btn_1">Contact Us</button>
                        <button type="button" class="btn_2">Know More</button>
                    </div>
                </section>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-12">
                <div class="rental_img">
                    <img src="<?php echo e(asset('/public/new-images/Frame 427320752.png')); ?>" width="100%" alt="car_rental_img">
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

            <div class="popular_card">

                <div class=" d-flex justify-content-between">
                    <h5 style="padding: 1rem 0.5rem; color: #929395;">Popular Car</h5>
                    <a href="<?php echo e(url('/car-list')); ?>" class="text-warning">View All</a>
                </div>

                <div class="d-flex justify-content-between flex-wrap">
                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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


                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
                        <div class="d-flex justify-content-between  mt-5">
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

                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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

                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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

                <div class="d-flex justify-content-between">
                    <h5 style="padding: 1rem 0.5rem; color: #929395;">Recomendation Car</h5>
                </div>

                <div class="d-flex justify-content-between flex-wrap">
                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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


                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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

                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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

                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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

            <div class="popular_card m-0">

                <div class="d-flex justify-content-between flex-wrap">
                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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


                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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

                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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

                    <div class="cardss" style="width: auto;">
                        <h6>Koenigsegg</h6>
                        <p>Sport</p>
                        <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="mt-3" width="250" alt="car">
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

    <div class="blogs_cards mt-5">

        <div class="row mx-0">

            <div class="col-lg-4 col-md-12 col-sm-12">
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


            <div class="col-lg-8 col-md-12 col-sm-12">

                <div class="big_card">

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12 p-1">
                            <div class="card tall_card" style="width: 100%; height: 100%; margin: 0;">
                                <img src="<?php echo e(asset('/public/new-images/car.png')); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <button type="button" class="bg-warning p-2 mb-2 college">College</button>
                                    <h5 class="card-title">How to Choose the Best College for Your Career in India?
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Voluptatum esse maxime, corporis fugit natus autem corrupti doloribus hic
                                        vero
                                        perferendis consectetur, ea consequatur explicabo maiores, odit recusandae
                                        aperiam et nostrum.</p>
                                    <button type="button" class="read_more  mt-3">Read More<i
                                            class="fa-solid fa-greater-than ms-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="small_cards">

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                        <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                            <img src="<?php echo e(asset('/public/new-images/Image-2.png')); ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <button type="button" class="bg-warning  mb-2 college">College</button>
                                                <h5 class="card-title">How to Choose the Best College for Your
                                                    Career in
                                                    India?</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit.
                                                    Suspendisse varius enim in eros.</p>
                                                <button type="button" class="read_more ">Read More<i
                                                        class="fa-solid fa-greater-than ms-2"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                        <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                            <img src="<?php echo e(asset('/public/new-images/Image-3.png')); ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <button type="button" class="bg-warning mb-2 college">College</button>
                                                <h5 class="card-title">How to Choose the Best College for Your
                                                    Career in
                                                    India?</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit.
                                                    Suspendisse varius enim in eros.</p>
                                                <button type="button" class="read_more ">Read More<i
                                                        class="fa-solid fa-greater-than ms-2"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                        <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                            <img src="<?php echo e(asset('/public/new-images/Image-4.png')); ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <button type="button" class="bg-warning  mb-2 college">College</button>
                                                <h5 class="card-title">How to Choose the Best College for Your
                                                    Career in
                                                    India?</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit.
                                                    Suspendisse varius enim in eros.</p>
                                                <button type="button" class="read_more">Read More<i
                                                        class="fa-solid fa-greater-than ms-2"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                        <div class="card" style="width: 100%; height: 100%; margin: 0;">
                                            <img src="<?php echo e(asset('/public/new-images/Image-5.png')); ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <button type="button" class="bg-warning  mb-2 college">College</button>
                                                <h5 class="card-title">How to Choose the Best College for Your
                                                    Career in
                                                    India?</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit.
                                                    Suspendisse varius enim in eros.</p>
                                                <button type="button" class="read_more">Read More<i
                                                        class="fa-solid fa-greater-than ms-2"></i></button>
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


    <div class="testimonials">
        <div class="test_head text-center">
            <h5>Testimonial</h5>
            <h3>What people say about?</h3>
        </div>

        <div id="testimonialCarousel" class="carousel slide p-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-slide text-center">
                        <div class="author-info">
                            <img src="<?php echo e(asset('/public/new-images/Image-3.png')); ?>" alt="Author" class="author-image rounded-circle">
                            <h4>John Doe</h4>
                            <p>Happy Customer</p>
                        </div>
                        <p>"I absolutely loved the experience with this service! The staff was incredibly helpful
                            and
                            the
                            car I rented was in top-notch condition. I highly recommend this to anyone looking for a
                            hassle-free car rental experience."</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-slide text-center">
                        <p>"The car I rented was perfect for my trip. The whole process was smooth, and the customer
                            service
                            was excellent. I would definitely use this service again in the future."</p>
                        <div class="author-info">
                            <img src="<?php echo e(asset('/public/new-images/Image-2.png')); ?>" alt="Author" class="author-image rounded-circle">
                            <h4>Jane Smith</h4>
                            <p>Satisfied Customer</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <footer>
        <div class="foot">

            <div class="foot_img ">
                <img src="<?php echo e(asset('/public/new-images/footer-img.png')); ?>" alt="footer">
            </div>

            <div class="foot_text d-flex justify-content-between">
                <div>
                    <a href="#">+91-9876543210</a>
                </div>
                <div>
                    <h6 class="text-white">Follow US</h6>
                    <a href="#"><i class="fa-brands fa-twitter me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                
            </div>
        </div>
    </footer>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html><?php /**PATH /home/shahbazali.website/rental.shahbazali.website/resources/views/front/pages/home.blade.php ENDPATH**/ ?>