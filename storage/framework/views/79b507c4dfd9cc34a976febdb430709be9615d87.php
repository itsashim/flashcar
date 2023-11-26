<?php $__env->startSection('title', 'Bluebook'); ?>



<?php $__env->startSection('styles'); ?>

    <style>



        label span {

            color: red;

        }



        .form-group {

            margin-bottom: 20px;

        }



        label {

            font-weight: bold;

        }



        .btn-primary {

            background-color: #007bff;

            border-color: #007bff;

        }



        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }



        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }



        .form_1 {
            border: none;
            border-bottom: 1px solid #ccc;
        }



        .phone-input {

            display: inline-block;

            border: 1px solid #ccc;

            padding: 5px;

            font-size: 16px;

        }



        #mobileNumber {

            width: 3.5rem;

            background: dimgray;

            color: white;

            text-align: center;

            border: none;

        }



        #phoneNumber {

            border: none;

            border-bottom: 1px solid #ccc;

            width: 89%;

        }



        .btn_2 button {

            border-radius: 2rem;

            padding: 0.5rem 1.5rem;

            background-color: #DCDCDC;

        }



        .btn_2 button:hover {

            background: #0056b3;

            color: white;

        }





        .btn_2 button:focus {

            background: radial-gradient(circle at 10% 20%, rgb(7, 121, 222) 0%, rgb(20, 72, 140) 90%);

            color: white;

        }





        textarea {

            width: 100%;

            height: 100%;

            border: #ccc 1px solid;

        }



        icon-shape {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            vertical-align: middle;

        }



        .icon-sm {

            width: 3rem;

            height: 3rem;

        }



        .services_2 {

            display: flex;

            align-items: baseline;

        }



        .services_2 h2 {

            font-weight: 600;

            padding: 1rem;

        }



        .quantity-field {

            width: 20%;

        }



        .btn_1 button {

            padding: 0.7rem 4rem;

            border-radius: 3rem;

            background: radial-gradient(circle at 10% 20%, #20748f 0%, #1a5d72 90%);

            color: white;

            border: none;

        }



        .btn_1 button:hover {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }



        @media  screen and (max-width:745px) {

            #mobileNumber {

                width: 3.5rem;



            }



            #phoneNumber {

                width: 80%;

            }

        }



        @media  screen and (min-width:556px) and (max-width:744px) {

            #phoneNumber {

                #phoneNumber {

                    width: 76%;

                }



            }

        }



        @media  screen and (max-width:437px) and (max-width:556px) {

            #phoneNumber {

                width: 60%;

            }



        }



        @media  screen and (max-width:1280px) and (min-width:745px) {

            #phoneNumber {

                width: auto;

            }

        }



        /* banner */

        .banner {

            background-color: #20748f;

            color: #fff;

            display: flex;

            flex-wrap: wrap;

            align-items: center;

            justify-content: space-between;

            padding: 50px;

            gap: 2rem;

        }



        .content {

            width: 100%;

            max-width: 500px;

            /* margin: 0 auto; */

            text-align: center;

        }



        h2 {

            font-size: 2em;

            margin: 10px 25px;

        }



        p {

            font-size: 1em;

            margin: px 25px;

        }



        .button {

            display: inline-block;

            padding: 10px 20px;

            font-size: 1em;

            background-color: #fff;

            color: #123b82 !important;

            text-decoration: none;

            border-radius: 5px;

            transition: background-color 0.3s;



        }






        .image-container {

            max-width: 500px;

            width: 100%;

            text-align: right;

        }



        .image-container img {

            max-height: 100%;

            /* Adjust the max-height to change the image size */

            width: auto;

            display: block;

            margin: 0 auto;

            /* Adjust the margin to change the alignment */

        }



        .tc {

            border-bottom: 1px solid white;

            display: inline-block;

            padding-bottom: 5px;

            cursor: pointer;

        }

    </style>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



    <div class="banner">

        <div class="content">

            <h2>Blue Book Renewal</h2>

            <h2>Just Got Easier</h2>

            <p>The service is currently available only in Kathmandu Valley.</p>

            <p>(Kathmandu, Bhaktapur, Lalitpur)</p>

            <a class="button" href="<?php echo e(url('bluebook-tax-rates')); ?>">View Tax Fares</a>

            <div class="pt-3">

                <p class="tc">* Terms & Conditions</p>

            </div>

        </div>

        <div class="image-container">

            <img src="<?php echo e(url('public/images/cover-image.jpg')); ?>" alt="Image Description" />

        </div>

    </div>



    

    <!--HEADER-->

    <div class="container-fluid p-5">

        <form action="<?php echo e(route('bluebook')); ?>" method="POST" enctype="multipart/form-data" oninput="calculatePrice()">

            <?php echo csrf_field(); ?>

            <div class="d-flex gap-4 justify-content-center">

                <div class="form-check  d-flex align-items-center">

                    <input class="form-check-input" type="radio" name="vehicle_type" id="inlineRadio1"

                        value="bike" checked>

                    <label class="form-check-label" for="inlineRadio1">

                        <h3 class="animate__animated animate__lightSpeedInRight mb-0">Two Wheeler<i

                                class="fa-solid fa-motorcycle fa-xs ml-2"></i></h3>

                    </label>

                </div>

                <div class="form-check d-flex align-items-center">

                    <input class="form-check-input" type="radio" name="vehicle_type" id="inlineRadio2"

                        value="car">

                    <label class="form-check-label" for="inlineRadio2">

                        <h3 class="animate__animated animate__lightSpeedInRight mb-0">Four Wheeler<i

                                class="fa-solid fa-car fa-xs ml-2"></i></h3>

                    </label>

                </div>

            </div>

            <!--HEADER-->



            <!--FORM START-->

            <div class="form-row ">

                <div class="  p-4  col-lg-6 col-md-12 col-sm-12 ">

                    <label for="date">Pick a Date</label> <span>*</span><br>

                    <input type="date" class="form-control"  name="date"

                        id="date" required>

                </div>



                <div class="  p-4  col-lg-6 col-md-12 col-sm-12 ">

                    <label for="full-name">Full Name</label><span>*</span><br>

                    <input type="text" class="form-control" name="name"

                        id="full-name" required>

                </div>



            </div>





            <div class="form-row ">



                <div class="  p-4 col-lg-6 col-md-6 col-sm-12 ">

                    <label for="mobile-number">Mobile Number</label><span>*</span><br>

                    <input type="text" id="mobileNumber" class="phone-input" value="+977" readonly>

                    <input type="tel" class="phone-input" name="phone" id="mobile-number" required>

                </div>



                <div class="  p-4 col-lg-6 col-md-6 col-sm-12 ">

                    <label for="vehicle_name">Vehicle Name</label><span>*</span><br>

                    <input type="text" class="form-control" name="vehicle_name"  id="vehicle-name"

                        placeholder="Eg. Honda, Hyundai, Suzuki, Jeep" required>

                </div>



            </div>





            <div class="form-row ">



                <div class="  p-4 col-lg-6 col-md-6 col-sm-12  ">

                    <label for="regestration-number">Vehicle Registration Number</label><span>*</span><br>

                    <input type="text" class="form-control"
                        name="vehicle_reg_no" id="registration-number"

                        placeholder="Eg. BA 10 PA 1010 / BAGMATI PRADESH 3 2 003 PA 1111" required>

                </div>

                <div class="  p-4  col-lg-6 col-md-6 col-sm-12 ">

                    <label for="mobileNumber">Engine CC</label><span>*</span><br>

                    <input type="text" id="mobileNumber" class="phone-input" value="CC" readonly>

                    <input type="number" name="vehicle_engine" id="engine-cc" placeholder="CC Eg. 150, 125, 1190, 1450"

                        required>

                </div>

            </div>



            <div class="form-row ">

                <div class="  p-4  col-lg-6 col-md-12 col-sm-12 ">

                    <label for="pickup-address">Pickup Address</label><span>*</span><br>

                    <input type="text" class="form-control"

                        name="pickup_address" id="pickup-address" required>

                </div>

                <div class=" btn_2  p-4 col-lg-6 col-md-12 col-sm-12  ">

                    <h6>Do you have insurance paper?</h6> <span>*</span>

                    <div>

                        <input type="radio" class="btn btn-light" id="yes" name="insurance"

                            value="Yes">Yes

                        <input type="radio" class="btn btn-light" id="no" name="insurance"

                            value="No">No

                    </div>

                </div>

            </div>



            <div class="form-row">

                <div class=" p-4 col-lg-6 col-md-12 col-sm-12   ">

                    <label for="comments">Any Comments</label>

                    <textarea id="comments" name="message"></textarea>

                </div>



                <div class="p-4 col-lg-6 col-md-6 col-sm-12 ">

                    <h6>No of Blue Book you want to renew?</h6>

                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-12 col-sm-12 mt-3 p-0">

                            <div>
                               <input class="text-danger px-2 py-2 border-0" type="text" name="service_charge" id="service_charge" value="$currentCharge" readonly style="font-size:20px; font-weight: 600">
                            </div>
                            <p class="mt-2">Service Charges</p>

                        </div>
                        <!--QUANTIY SNIPPET-->
                        <div class="d-flex col-lg-5 col-md-12 col-sm-12 ">

                            <div class="input-group align-items-center">

                                <input type="button" value="-"

                                    class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "

                                    data-field="quantity">

                                <input type="text" step="1" max="" value="1" name="bluebook_qty"

                                    class="quantity-field border-0 text-center" readonly>

                                <input type="button" value="+"

                                    class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">

                            </div>

                        </div>
                        <!--QUANTIY SNIPPET-->
                    </div>
                </div>
            </div>



            <!--TERMS & CONDITIONS-->



            <div class="d-flex flex-column justify-content-center align-items-center text-center btn_1 m-5 ">

                <p>*By continuing, It is acknowledge that you have read and agreed to our Blue Book Renewal <a

                        href="#">Terms & Conditions.</a></p>

                <button type="submit">Book Now</button>

            </div>



            <!--TERMS & CONDITIONS-->









            <!--FORM END-->





        </form>



        <!--FORM END-->



    </div>



    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>



    <script>

        document.addEventListener('DOMContentLoaded', function() {

            const twoWheelerRadio = document.getElementById('inlineRadio1');

            const fourWheelerRadio = document.getElementById('inlineRadio2');

            const serviceCharge = document.getElementById('service_charge');

            const quantityField = document.querySelector('.quantity-field');

            



            let currentCharge = 500; // Initial service charge for Two Wheeler

            // Update the input field's value
            const serviceChargeField = document.getElementById('service_charge');
            serviceChargeField.value = `Rs ${currentCharge}`;



            twoWheelerRadio.addEventListener('change', function() {

                currentCharge = 500;

                updateServiceCharge();

            });



            fourWheelerRadio.addEventListener('change', function() {

                currentCharge = 800;

                updateServiceCharge();

            });



            document.querySelector('.button-minus').addEventListener('click', function() {

                let value = parseInt(quantityField.value, 10);

                if (value > 1) {

                    quantityField.value = value - 1;

                    updateServiceCharge();

                }

            });



            document.querySelector('.button-plus').addEventListener('click', function() {

                let value = parseInt(quantityField.value, 10);

                if (value < 10) {

                    quantityField.value = value + 1;

                    updateServiceCharge();

                }

            });



            function updateServiceCharge() {

                let quantity = parseInt(quantityField.value, 10);

                serviceCharge.value = `Rs. ${currentCharge * quantity}`;

            }

        });

    </script>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/bluebook.blade.php ENDPATH**/ ?>