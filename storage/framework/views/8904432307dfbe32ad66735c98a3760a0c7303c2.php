<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rental</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
              * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }

      body {
          font-family: Arial, sans-serif;
          background-color: #f2f2f2;
      }

      .billing-form,
      .Rental-form,
      .Payment-form,
      .Confirmation_info,
      .Rental_summary {
          background-color: #ffffff;
          border-radius: 10px;
          padding: 20px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          margin: 1rem;
          width: 100%;
      }

      .form-group label {
          display: block;
          margin-bottom: 5px;
          font-weight: bold;
      }

      .form-group input[type="text"] {
          width: 100%;
          padding: 8px;
          border-radius: 5px;
          border: 1px solid #ddd;
      }

      .btn {
          background-color: #4CAF50;
          color: white;
          padding: 10px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }

      .btn:hover {
          background-color: #45a049;
      }

      .form_group {
          margin: 1rem;
      }
    </style>
  </head>

  <body>
    <div class="row mx-0">
      <div class="col-lg-8">
        <div class="info_form">
          <div class="billing-form">
            <h4>Billing Info</h4>
            <p>Please Enter you billing info</p>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="name">Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                  />
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="phonenumber">Phone Number</label>
                  <input
                    type="text"
                    id="phonenumber"
                    name="phonenumber"
                    placeholder="Enter your phone number"
                  />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="address">Address</label>
                  <input
                    type="text"
                    id="address"
                    name="address"
                    placeholder="Enter your address"
                  />
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="town">Town/City</label>
                  <input
                    type="text"
                    id="town"
                    name="town"
                    placeholder="Enter your town"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="Rental-form">
            <h4>Rental Info</h4>
            <p>Please select your rental date</p>

            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                id="flexRadioDefault1"
              />
              <label class="form-check-label" for="flexRadioDefault1">
                Pick-Up
              </label>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="name">Location</label>
                  <div class="dropdown">
                    <button
                      class="btn  dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Select your City
                    </button>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="phonenumber">Date</label>
                  <div class="dropdown">
                    <button
                      class="btn  dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton2"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Select your date
                    </button>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex">
              <div class="form-group form_group col-lg-6 col-md-6 col-sm-12">
                <label for="address">Time</label>
                <div class="dropdown">
                  <button
                    class="btn  dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton3"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Select your time
                  </button>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                id="flexRadioDefault2"
                checked
              />
              <label class="form-check-label" for="flexRadioDefault2">
                Drop-Off
              </label>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="name">Location</label>
                  <div class="dropdown">
                    <button
                      class="btn  dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton4"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Select your location
                    </button>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="phonenumber">Date</label>
                  <div class="dropdown">
                    <button
                      class="btn  dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton5"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Select your date
                    </button>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="address">Time</label>
                  <div class="dropdown">
                    <button
                      class="btn  dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton6"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Select your time
                    </button>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="Payment-form">
            <h4>Billing Info</h4>
            <p>Please enter your paymnent info</p>

            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                id="flexRadioDefault2"
                checked
              />
              <label class="form-check-label" for="flexRadioDefault2">
                Credit Card
              </label>
            </div>

            <div class="d-flex">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="name">Card Number</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Card number"
                  />
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group form_group">
                  <label for="phonenumber">Expiration Date</label>
                  <input
                    type="text"
                    id="phonenumber"
                    name="phonenumber"
                    placeholder="DD/MM/YY"
                  />
                </div>
              </div>
            </div>

            <div class="d-flex">
              <div class="form-group form_group">
                <label for="address">Card Holder</label>
                <input
                  type="text"
                  id="address"
                  name="address"
                  placeholder="Card holder"
                />
              </div>
              <div class="form-group form_group">
                <label for="town">CVC</label>
                <input type="text" id="town" name="town" placeholder="CVC" />
              </div>
            </div>

            <div class="d-flex justify-content-between">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault1"
                />
                <label class="form-check-label" for="flexRadioDefault1">
                  Paypal
                </label>
              </div>
              <div>
                <img src="" alt="paypal.logo" />
              </div>
            </div>

            <div class="d-flex justify-content-between">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault1"
                />
                <label class="form-check-label" for="flexRadioDefault1">
                  Bitcoin
                </label>
              </div>
              <div>
                <img src="" alt="bitcoin.logo" />
              </div>
            </div>
          </div>

          <div class="Confirmation_info">
            <h4>Confirmation</h4>
            <p>
              We are getting to the end.Just few clicks and your rental is
              ready!
            </p>

            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label class="form-check-label" for="flexCheckDefault">
                I agree with sending an Marketing and newsletter emails.No
                spam,promised!
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckChecked"
                checked
              />
              <label class="form-check-label" for="flexCheckChecked">
                I agree with our terms and conditions and privacy policy.
              </label>
            </div>

            <a
              name="rent_now"
              class="btn btn-warning text-white"
              href="#"
              role="button"
              >Rent Now</a
            >

            <div class="other_txt">
              <img src="" alt="safe.logo" />
              <h4>All your data are safe.</h4>
              <p>
                We are using the most advanced security to provide you the best
                experience ever.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="Rental_summary">
          <h3>Rental Summary</h3>
          <p>
            Prices may change depending on the length of th rental and the price
            of your rental car.
          </p>
          <div class="nissan d-flex">
            <img src=" <?php echo e(asset('public/new-images/Look.png')); ?>" alt="nissan.gtr" />
            <div>
              <h3>Nissan GT-R</h3>
              <img src="<?php echo e(asset('public/new-images/Review.png')); ?>" alt="review" />
            </div>
          </div>

          <div class="subtotal d-flex justify-content-between">
            <p>Subtotal</p>
            <h6>$80.00</h6>
          </div>

          <div class="subtotal d-flex justify-content-between">
            <p>Tax</p>
            <h6>$0</h6>
          </div>

          <div class="promo_input">
            <button type="button">Apply Now</button>
          </div>

          <div class="total_rental d-flex justify-content-between">
            <div>
              <h4>Total Rental Price</h4>
              <p>Overall price and includes rental discount</p>
            </div>
            <div class="rate">
              <h2>$80.00</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php /**PATH /home/shahbazali.website/rental.shahbazali.website/resources/views/front/demo/billing.blade.php ENDPATH**/ ?>