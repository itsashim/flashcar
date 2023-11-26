<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flashcar2</title>
    <link rel="stylesheet" href="style015.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <style>
        *{
        margin: 0;
        padding: 0;
    }

    .pic2 img{
        width: 180px;

    }

    .Font{
        display: flex;
        gap: 30px;
        font-size: 30px;
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

    .image img{
        border-radius: 100%;
        width: 100px;
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
        width: 95%;
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

    .pic3 img{
        width: 100%;
    }

    .Heading{
        border: 2px solid;
        width: 80%;
        background: #f8de22;
        padding: 25px;
        border-radius: 15px;
    }

    .Heading h3{
        font-weight: 600;
    }

    .Heading p{
        font-weight: 500;
    }

    .Heading2{
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        width: 88%;
        padding: 35px;
        border-radius: 15px;

    }
    .pics{
        width: 14%;
        gap: 15px;
        margin-top: 20px;
    }

    .pic4 img{
        width: 115px;
    }

    .pic5 img{
        width: 115px;
    }

    .pic6 img{
        width: 115px;
    }



    .Texts1{
        gap: 30px;
    }

    .Texts2{
        gap: 30px;
        margin-top: 15px;
    }

    .main{
        padding: 50px;

    }

    .B{
        justify-content: space-between;
        margin-top: 20px;
    }

    .k{
        border: 2px solid;
        width: 100%;
    }

    .L{
     padding: 64px;

    }

    .R{
        font-weight: 600;
        margin-left: 20px;
    }

    .R h6{
        color: #f8de22;
    }

    .parent1{
        border-radius: 30px;
        justify-content: center;
        gap: 54px;
        margin-top: 30px;

    }

    .parent1 a{
        color: slategrey;
    }


    .parent2{
        border-radius: 30px;
        justify-content: center;
        gap: 54px;
        margin-top: 15px;

    }

    .parent2 a{
        color: slategray;
    }

    .dropdown{
       text-align: center;
       margin-top: 30px;
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

    .Foot{
        justify-content: center;
        justify-content: space-around;
        margin-top: 20px;
    }
    .D{
        margin-top: 15px;
    }
  </style>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="navbarSupportedContent"
          style="gap: 40px;"
        >
          <div class="pic2">
            <img src=" {{asset('public/new-images/F.pic.jpg.png')}}" />
          </div>
          <form class="d-flex" role="search" style="width: 35%;">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search something here"
              aria-label="Search"
              style="border-radius: 30px;"
            />
          </form>
        </div>
      </div>
      <div class="Font">
        <i class="fa-solid fa-heart" style="color:red"></i>
        <i class="fa-solid fa-bell" style="color: blue"></i>
        <i class="fa-solid fa-gear" style="color: black"></i>
      </div>
    </nav>
    <div class="main2 d-flex">
      <div class="cont">
        <div class="F">
          <div class="T1">
            <h6>TYPE</h6>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
            />
            <label class="form-check-label" for="flexCheckChecked">
              Sport(10)
            </label>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
              checked
            />
            <label class="form-check-label" for="flexCheckChecked">
              SUV(12)
            </label>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
              checked
            />
            <label class="form-check-label" for="flexCheckChecked">
              MPV(16)
            </label>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
              checked
            />
            <label class="form-check-label" for="flexCheckChecked">
              Sedan(20)
            </label>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
              checked
            />
            <label class="form-check-label" for="flexCheckChecked">
              Coupe(14)
            </label>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
              checked
            />
            <label class="form-check-label" for="flexCheckChecked">
              Hatchback(14)
            </label>
          </div>

          <div class="T2">
            <h6>CAPACITY</h6>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
              checked
            />
            <label class="form-check-label" for="flexCheckChecked">
              2 Person(10)
            </label>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
              checked
            />
            <label class="form-check-label" for="flexCheckChecked">
              4 Person(14)
            </label>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
              checked
            />
            <label class="form-check-label" for="flexCheckChecked">
              6 Person(12)
            </label>
          </div>

          <div
            class="form-check"
            style="display: flex;
           align-items: center;
           gap: 1rem;"
          >
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckChecked"
              checked
            />
            <label class="form-check-label" for="flexCheckChecked">
              8 or Person(16)
            </label>
          </div>

          <div class="T3">
            <h6>PRICE</h6>
          </div>

          <div class="Range">
            <label for="customRange1" class="form-label"></label>
            <input type="range" class="form-range" id="customRange1" />
            <h6>MAX. $100.00</h6>
          </div>
        </div>
      </div>
      <div class="main_main">
        <div class="main d-flex">
          <div class="parent1">
            <div class="Heading">
              <h3>
                Sports car with the best<br />
                design and acceleration
              </h3>
              <p>
                Safety and comfort while driving a futuristic<br />
                and elegant sports car
              </p>
              <div class="pic3">
                <img src="{{asset('public/new-images/car.jpg.png')}}" width="50%" />
              </div>
            </div>

            <div class="pics d-flex">
              <div class="pic4">
                <img src="{{asset('public/new-images/car2.jpg.png')}}" />
              </div>

              <div class="pic5">
                <img src="{{asset('public/new-images/car3.jpg.png')}}" />
              </div>

              <div class="pic6">
                <img src="{{asset('public/new-images/car4.jpg.png')}}" />
              </div>
            </div>
          </div>

          <div class="parent2">
            <div class="Heading2">
              <h3>Nissan GT-R</h3>
              <p>
                NISMO has become the embodiment of Nissan's<br />
                outstanding performance, inspired by the most<br />
                unforgiving proving ground, the "race track".
              </p>

              <div class="Texts1 d-flex">
                <div class="Text1 d-flex" style="gap: 20px;">
                  <h6>Type Car</h6>
                  <h6>Sport</h6>
                </div>

                <div class="Text2 d-flex" style="gap: 20px;">
                  <h6>Capacity</h6>
                  <h6>2Person</h6>
                </div>
              </div>

              <div class="Texts2 d-flex">
                <div class="Text3 d-flex" style="gap: 20px;">
                  <h6>Steering</h6>
                  <h6>Manual</h6>
                </div>

                <div class="Text4 d-flex" style="gap: 20px;">
                  <h6>Gasoline</h6>
                  <h6>70L</h6>
                </div>
              </div>

              <div class="B d-flex">
                <h5>$80.00/day</h5>
                <a href="{{url('/billing')}}" type="button" class="btn btn-warning">Rent Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="L">
          <div class="H">
            <h4>Reviews</h4>
          </div>

          <div class="d-flex">
            <img
              src="{{asset('public/new-images/img2.jpg.png')}}"
              width="100"
              height="100"
              style="border-radius: 50px;"
            />
            <div class="R">
              <h4>Alex Stanton</h4>
              <h6>CEO at Bukalapak</h6>
              <p>
                We are very happy with the service from the MORENT App. Morent
                has a low price and also a large variety<br />
                of cars with good and comfortable facilities. In addition, the
                service provided by the officers is also very friendly<br />
                and very polite.
              </p>
            </div>
          </div>

          <div class="d-flex">
            <img
              src=" {{asset('public/new-images/img.jpg.png')}} "
              width="100"
              height="100"
              style="border-radius: 50px;"
            />
            <div class="R">
              <h4>Skylar Dias</h4>
              <h6>CEO at Bukalapak</h6>
              <p>
                We are very happy with the service from the MORENT App. Morent
                has a low price and also a large variety of<br />
                cars with good and comfortable facilities. In addition, the
                service provided by the officers is also very friendly<br />
                and very polite.
              </p>
            </div>
          </div>

          <div class="dropdown">
            <button
              class="btn btn-outline-warning dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Show All
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </div>

        <div class="parent1 d-flex">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h6>Koenigsegg</h6>
              <p>Sport</p>
              <img src="{{asset('public/new-images/Sport.jpg.jpg')}} " class="card-img-top" alt="..." />

              <div class="link d-flex justify-content-around">
                <a href="#"
                  ><i
                    class="fa-solid fa-gas-pump"
                    style="color: slategrey;"
                  ></i>
                  90L</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-life-ring"
                    style="color: slategrey;"
                  ></i>
                  Manual</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-user-group"
                    style="color: slategrey;"
                  ></i
                  >2People</a
                >
              </div>
              <div class="D d-flex justify-content-around">
                <h5>$99.00/day</h5>
                <button type="button" class="btn btn-warning">Rent Now</button>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h6>Koenigsegg</h6>
              <p>Sport</p>
              <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="..." />

              <div class="link d-flex justify-content-around">
                <a href="#"
                  ><i
                    class="fa-solid fa-gas-pump"
                    style="color: slategrey;"
                  ></i>
                  90L</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-life-ring"
                    style="color: slategrey;"
                  ></i>
                  Manual</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-user-group"
                    style="color: slategrey;"
                  ></i
                  >2People</a
                >
              </div>
              <div class="D d-flex justify-content-around">
                <h5>$99.00/day</h5>
                <button type="button" class="btn btn-warning">Rent Now</button>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h6>Koenigsegg</h6>
              <p>Sport</p>
              <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="..." />

              <div class="link d-flex justify-content-around">
                <a href="#"
                  ><i
                    class="fa-solid fa-gas-pump"
                    style="color: slategrey;"
                  ></i>
                  90L</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-life-ring"
                    style="color: slategrey;"
                  ></i>
                  Manual</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-user-group"
                    style="color: slategrey;"
                  ></i
                  >2People</a
                >
              </div>
              <div class="D d-flex justify-content-around">
                <h5>$99.00/day</h5>
                <button type="button" class="btn btn-warning">Rent Now</button>
              </div>
            </div>
          </div>
        </div>

        <div class="parent2 d-flex">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h6>Koenigsegg</h6>
              <p>Sport</p>
              <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="..." />

              <div class="link d-flex justify-content-around">
                <a href="#"
                  ><i
                    class="fa-solid fa-gas-pump"
                    style="color: slategrey;"
                  ></i>
                  90L</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-life-ring"
                    style="color: slategrey;"
                  ></i>
                  Manual</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-user-group"
                    style="color: slategrey;"
                  ></i
                  >2People</a
                >
              </div>
              <div class="D d-flex justify-content-around">
                <h5>$99.00/day</h5>
                <button type="button" class="btn btn-warning">Rent Now</button>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h6>Koenigsegg</h6>
              <p>Sport</p>
              <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="..." />

              <div class="link d-flex justify-content-around">
                <a href="#"
                  ><i
                    class="fa-solid fa-gas-pump"
                    style="color: slategrey;"
                  ></i>
                  90L</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-life-ring"
                    style="color: slategrey;"
                  ></i>
                  Manual</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-user-group"
                    style="color: slategrey;"
                  ></i
                  >2People</a
                >
              </div>
              <div class="D d-flex justify-content-around">
                <h5>$99.00/day</h5>
                <button type="button" class="btn btn-warning">Rent Now</button>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h6>Koenigsegg</h6>
              <p>Sport</p>
              <img src="{{asset('public/new-images/Sport.jpg.jpg')}}" class="card-img-top" alt="..." />

              <div class="link d-flex justify-content-around">
                <a href="#"
                  ><i
                    class="fa-solid fa-gas-pump"
                    style="color: slategrey;"
                  ></i>
                  90L</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-life-ring"
                    style="color: slategrey;"
                  ></i>
                  Manual</a
                >
                <a href="#"
                  ><i
                    class="fa-solid fa-user-group"
                    style="color: slategrey;"
                  ></i
                  >2People</a
                >
              </div>
              <div class="D d-flex justify-content-around">
                <h5>$99.00/day</h5>
                <button type="button" class="btn btn-warning">Rent Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main d-flex justify-content-around">
      <div class="bottom">
        <img src="{{asset('public/new-images/Sport.jpg.jpg')}} " />
        <p>
          Our vision is to provide convenience<br />
          and help increase your sales business.
        </p>
      </div>

      <div class="Bot d-flex">
        <div class="C1">
          <h5>About</h5>
          <a href="#">How it works</a><br />
          <a href="#">Features</a><br />
          <a href="#">Partnership</a><br />
          <a href="#">Bussiness Relation</a>
        </div>

        <div class="C2">
          <h5>Community</h5>
          <a href="#">Event</a><br />
          <a href="#">Blog</a><br />
          <a href="#">Posdcast</a><br />
          <a href="#">Invite a friend</a>
        </div>

        <div class="C3">
          <h5>Social</h5>
          <a href="#">Discord</a><br />
          <a href="#">Instagram</a><br />
          <a href="#">Twitter</a><br />
          <a href="#">Facebook</a>
        </div>
      </div>
    </div>

    <hr />

    <footer>
      <div class="Foot d-flex justify-content-around">
        <h5>©2022 MORENT. All rights reserved</h5>
        <div class="A d-flex" style="gap: 30px;">
          <h5>Privacy & Policy</h5>
          <h5>Terms & Condition</h5>
        </div>
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
