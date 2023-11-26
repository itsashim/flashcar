<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style014.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    *{
    margin: 0;
    padding: 0;
}



.pic img{
    width: 150px;
    text-align: center;
}

.pic2 img{
    width: 180px;

}

.box{
    width: 100%;
    background-color: white;
    

}

.F{
    margin-left: 15px;

}

.F input{
    margin-left: 10px;
   
}

.T1 h6{
    padding-top: 15px;
    color:#90A3BF;
    font-family: Plus Jakarta Sans;
}


.T2 h6{
    padding-top: 15px;
    color:#90A3BF;
    font-family: Plus Jakarta Sans;
}


.T3 h6{
    padding-top: 15px;
    color:#90A3BF;
    font-family: Plus Jakarta Sans;
}

 .Range h6{
    color: slategray;
  
}

.Range input{
    width: 90%;
}

.F label{
    color: black;
    font-weight: 500;
    line-height: 50px;
}

.F input{
    margin: 4px 0 0;
    line-height: normal;
   
}

.T1 input{
    margin-left: 10px;
}

.cards{
    padding: 1rem;
    position: relative;
}

.card{
    margin: 0.5rem;
}

.line_1{
    height: 4rem;
    border: 1px solid lightgray ;
}

.exch{
    position: absolute;
    left: 45%;
    bottom: 18%;

}

.D{
    margin-top: 30px;
}

.D h5{
    font-family: emoji;
    font-size: 20px;
    font-weight: 600;
    line-height: 30px;
}





.card h6{
    font-weight: 700;
    margin-left: 5px;
}

.card p{
    color: slategray;
    font-weight: 500;
    margin-left: 5px;
}

.link a{
    margin-top: 40px;
    text-decoration: none;
    color: slategray;
}

.parent{
    border-radius: 30px;
    justify-content: center;
    gap: 10px;
    
}

.parent a{
    color: slategrey;
}

.B button{
    margin-top: 50px;
    margin-bottom: 50px;
    width: 13%;
   
}

.p{
    background-color:whitesmoke;
}

.Bot a{
    text-decoration: none;
    color: slategrey;
    
}

.Bot{
    gap: 50px;
    line-height: 40px;
    margin-top: 20px;
    
}
main{
    margin-top: 20%;
    
}

.bottom p{
    text-align: center;
    color: slategrey;
}

.Foot{
    justify-content: center;
    justify-content: space-around;
    margin-top: 20px;
}

.Font{
    display: flex;
    gap: 30px;
    font-size: 30px;
}



</style>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="gap: 40px;">
           <div class="pic2">
            <img src="{{asset('public/new-images/main-logo.png')}}">
           </div>
            <form class="d-flex" role="search" style="width: 35%;">
              <input class="form-control me-2" type="search" placeholder="Search something here" aria-label="Search" style="border-radius: 30px;">
               </form>
          </div>
        </div>
        <div class="Font">
        <i class="fa-solid fa-heart" style="color:red"></i>
        <i class="fa-solid fa-bell" style="color: blue"></i>
        <i class="fa-solid fa-gear" style="color: black"></i>
        </div>
      </nav>
    
    <div class="M d-flex">
    <div class="box">
       <div class="F">
           <div class="T1">
               <h6>TYPE</h6>
           </div>
       
       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
           <label class="form-check-label" for="flexCheckChecked">
               Sport(10)
           </label>
       </div>

       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
               SUV(12)
           </label>
       </div>

       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
               MPV(16)
           </label>
       </div>

       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
               Sedan(20)
           </label>
       </div>

       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
               Coupe(14)
           </label>
       </div>

       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
               Hatchback(14)
           </label>
       </div>

       <div class="T2">
           <h6>CAPACITY</h6>
       </div>

       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
               2 Person(10)
           </label>
       </div>

       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
               4 Person(14)
           </label>
       </div>

       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
               6 Person(12)
           </label>
       </div>

       <div class="form-check" style="display: flex;
       align-items: center;
       gap: 1rem;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
               8 or Person(16)
           </label>
       </div>
        

       <div class="T3">
           <h6>PRICE</h6>
       </div>

       <div class="Range">
           <label for="customRange1" class="form-label"></label>
           <input type="range" class="form-range"id="customRange1">
           <h6>MAX. $100.00</h6>
       </div>
        </div>
   </div>


  <!-- Cards Section -->
  <div class="p">
  <div class="cards">
    <div class="d-flex justify-content-center">
        <!-- Card 1 - Pick-Up -->
        <div class="card" style="width: auto;">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        <h6>Pick-Up</h6>
                    </label>
                </div>
                <!-- Pick-Up Dropdowns -->
                <div class="drop_down d-flex justify-content-around">
                    <!-- Location Dropdown -->
                    <div class="text-center">
                        <h4>Location</h4>
                        <div class="dropdown">
                            <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Select your city
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
                        <h4>Date</h4>
                        <div class="dropdown">
                            <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Select your date
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
                        <h4>Time</h4>
                        <div class="dropdown">
                            <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Select your time
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

        <!-- Card 2 - Drop-off -->
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        <h6>Drop-off</h6>
                    </label>
                </div>
                <!-- Drop-off Dropdowns -->
                <div class="drop_down d-flex justify-content-around">
                    <!-- Location Dropdown -->
                    <div class="text-center">
                        <h4>Location</h4>
                        <div class="dropdown">
                            <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Select your city
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
                        <h4>Date</h4>
                        <div class="dropdown">
                            <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Select your date
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
                        <h4>Time</h4>
                        <div class="dropdown">
                            <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Select your time
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
  
    
    <!-- Exchange Button -->
    <a href="#" class="exch"><img src="{{asset('public/new-images/exc.jpg.png')}}" width="110" alt="left_right"></a>
  </div>


  
<div class="parent d-flex">
  <div class="card" style="width: 20rem;">
   <div class="card-body">
      <h6>Koenigsegg</h6>
      <p>Sport</p>
      <img src=" {{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="...">
    
          <div class="link d-flex justify-content-around">
              <a href="#"><i class="fa-solid fa-gas-pump" style="color: slategrey;"></i> 90L</a>
              <a href="#"><i class="fa-solid fa-life-ring" style="color: slategrey;"></i> Manual</a>
              <a href="#"><i class="fa-solid fa-user-group" style="color: slategrey;"></i>2People</a>
          </div>
          <div class="D d-flex justify-content-around">
            <h5>$99.00/day</h5>
            <a href="{{url('/review-list')}}" type="button" class="btn btn-warning">Rent Now</button>
          </div>
    </div>
  </div>

  <div class="card" style="width: 20rem;">
    <div class="card-body">
       <h6>Koenigsegg</h6>
       <p>Sport</p>
       <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="...">
     
       <div class="link d-flex justify-content-around">
       <a href="#"><i class="fa-solid fa-gas-pump" style="color: slategrey;"></i> 90L</a>
       <a href="#"><i class="fa-solid fa-life-ring" style="color: slategrey;"></i> Manual</a>
       <a href="#"><i class="fa-solid fa-user-group" style="color: slategrey;"></i>2People</a>
       </div>
       <div class="D d-flex justify-content-around">
       <h5>$99.00/day</h5>
       <button type="button" class="btn btn-warning">Rent Now</button>
       </div>
      </div>
   </div>

   <div class="card" style="width: 20rem;">
    <div class="card-body">
       <h6>Koenigsegg</h6>
       <p>Sport</p>
       <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="...">
     
       <div class="link d-flex justify-content-around">
       <a href="#"><i class="fa-solid fa-gas-pump" style="color: slategrey;"></i> 90L</a>
       <a href="#"><i class="fa-solid fa-life-ring" style="color: slategrey;"></i> Manual</a>
       <a href="#"><i class="fa-solid fa-user-group" style="color: slategrey;"></i>2People</a>
       </div>
       <div class="D d-flex justify-content-around">
       <h5>$99.00/day</h5>
       <button type="button" class="btn btn-warning">Rent Now</button>
       </div>
      </div>
   </div>
</div>
    <div class="parent d-flex">
   <div class="card" style="width: 20rem;">
    <div class="card-body">
       <h6>Koenigsegg</h6>
       <p>Sport</p>
       <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="...">
     
       <div class="link d-flex justify-content-around">
       <a href="#"><i class="fa-solid fa-gas-pump" style="color: slategrey;"></i> 90L</a>
       <a href="#"><i class="fa-solid fa-life-ring" style="color: slategrey;"></i> Manual</a>
       <a href="#"><i class="fa-solid fa-user-group" style="color: slategrey;"></i>2People</a>
       </div>
       <div class="D d-flex justify-content-around">
       <h5>$99.00/day</h5>
       <button type="button" class="btn btn-warning">Rent Now</button>
       </div>
      </div>
   </div>

   <div class="card" style="width: 20rem;">
    <div class="card-body">
       <h6>Koenigsegg</h6>
       <p>Sport</p>
       <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="...">
     
       <div class="link d-flex justify-content-around">
       <a href="#"><i class="fa-solid fa-gas-pump" style="color: slategrey;"></i> 90L</a>
       <a href="#"><i class="fa-solid fa-life-ring" style="color: slategrey;"></i> Manual</a>
       <a href="#"><i class="fa-solid fa-user-group" style="color: slategrey;"></i>2People</a>
       </div>
       <div class="D d-flex justify-content-around">
       <h5>$99.00/day</h5>
       <button type="button" class="btn btn-warning">Rent Now</button>
       </div>
      </div>
   </div>
  
   <div class="card" style="width: 20rem;">
    <div class="card-body">
       <h6>Koenigsegg</h6>
       <p>Sport</p>
       <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="...">
     
       <div class="link d-flex justify-content-around">
        <a href="#"><i class="fa-solid fa-gas-pump" style="color: slategrey;"></i> 90L</a>
       <a href="#"><i class="fa-solid fa-life-ring" style="color: slategrey;"></i> Manual</a>
       <a href="#"><i class="fa-solid fa-user-group" style="color: slategrey;"></i>2People</a>
       </div>
       <div class="D d-flex justify-content-around">
       <h5>$99.00/day</h5>
       <button type="button" class="btn btn-warning">Rent Now</button>
       </div>
      </div>
   </div>
   </div>

   <div class="parent d-flex">
   <div class="card" style="width: 20rem;">
    <div class="card-body">
       <h6>Koenigsegg</h6>
       <p>Sport</p>
       <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="...">
     
       <div class="link d-flex justify-content-around">
     <a href="#"><i class="fa-solid fa-gas-pump" style="color: slategrey;"></i> 90L</a>
       <a href="#"><i class="fa-solid fa-life-ring" style="color: slategrey;"></i> Manual</a>
       <a href="#"><i class="fa-solid fa-user-group" style="color: slategrey;"></i>2People</a>
       </div>
       <div class="D d-flex justify-content-around">
       <h5>$99.00/day</h5>
       <button type="button" class="btn btn-warning">Rent Now</button>
       </div>
      </div>
   </div>

   <div class="card" style="width: 20rem;">
    <div class="card-body">
       <h6>Koenigsegg</h6>
       <p>Sport</p>
       <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="...">
     
       <div class="link d-flex justify-content-around">
        <a href="#"><i class="fa-solid fa-gas-pump" style="color: slategrey;"></i> 90L</a>
       <a href="#"><i class="fa-solid fa-life-ring" style="color: slategrey;"></i> Manual</a>
       <a href="#"><i class="fa-solid fa-user-group" style="color: slategrey;"></i>2People</a>
       </div>
       <div class="D d-flex justify-content-around">
       <h5>$99.00/day</h5>
       <button type="button" class="btn btn-warning">Rent Now</button>
       </div>
      </div>
   </div>

   <div class="card" style="width: 20rem;">
    <div class="card-body">
       <h6>Koenigsegg</h6>
       <p>Sport</p>
       <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="...">
     
       <div class="link d-flex justify-content-around">
        <a href="#"><i class="fa-solid fa-gas-pump" style="color: slategrey;"></i> 90L</a>
       <a href="#"><i class="fa-solid fa-life-ring" style="color: slategrey;"></i> Manual</a>
       <a href="#"><i class="fa-solid fa-user-group" style="color: slategrey;"></i>2People</a>
       </div>
       <div class="D d-flex justify-content-around">
       <h5>$99.00/day</h5>
       <button type="button" class="btn btn-warning">Rent Now</button>
       </div>
      </div>
   </div>
</div>
  <div class="B text-center">
    <button type="button" class="btn btn-warning">Show more car</button>
 </div>
  </div>
   </div>

 <div class="main d-flex justify-content-around">
   <div class="bottom">
   <img src="{{asset('public/new-images/F.pic.jpg.png')}}">
   <p>Our vision is to provide convenience<br> and help increase your sales business.</p>
   </div>

   <div class="Bot d-flex">
    <div class="C1">
    <h5>About</h5>
    <a href="#">How it works</a><br>
    <a href="#">Features</a><br>
    <a href="#">Partnership</a><br>
    <a href="#">Bussiness Relation</a>
   </div>

   <div class="C2">
    <h5>Community</h5>
    <a href="#">Event</a><br>
    <a href="#">Blog</a><br>
    <a href="#">Posdcast</a><br>
    <a href="#">Invite a friend</a>
   </div>

   
   <div class="C3">
    <h5>Social</h5>
    <a href="#">Discord</a><br>
    <a href="#">Instagram</a><br>
    <a href="#">Twitter</a><br>
    <a href="#">Facebook</a>
   </div>
   </div>
 </div>

 <hr>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>