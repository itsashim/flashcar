<?php $__env->startSection('title', 'Bluebook'); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .vehicle-type {
            margin-top: 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .vehicle-type div {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vehicle-type .item {
            flex-basis: 48%;
        }

        .vehicle-type label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .vehicle-type i {
            margin-right: 2px;
            font-size: 24px;
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        .blue-book-count input {
            width: 50px;
        }

        .submit-button button {
            text-align: center;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
            padding: 10px 20px;
            /* Increased padding */
            background-color: #4caf50;
            /* Green background color */
            color: #fff;
            /* White text color */
            transition: background-color 0.3s;
            /* Color change effect on hover */
            font-size: 16px;
            /* Increased font size */
            border: none;
            /* Remove border */
        }

        .submit-button button:hover {
            background-color: #45a049;
            /* Darker green on hover */
        }

        .terms {
            display: flex;
            margin-top: 10px;
            font-size: 14px;
        }

        .service-charge p {
            font-weight: bold;
        }

        /* .flex-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        } */

        /* .flex-container .item {
            flex-basis: 48%;
        } */

        .flex-container .item.full-width {
            flex-basis: 100%;
        }

        .check_box {
            width: unset !important;
            margin-right: 10px;
        }

        .vehicle-type div input {
            margin-right: 10px;
        }

        /* banner */
        .banner {
            background-color: #123b82;
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
            color: #123b82;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;

        }

        .button:hover {
            background-color: #123b82;
            color: #fff;
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
            <a class="button" href="#">View Tax Fares</a>
            <div>
                <p class="tc">* Terms & Conditions</p>
            </div>
        </div>
        <div class="image-container">
            <img src="cover-image.png" alt="Image Description" />
        </div>
    </div>

    <div class="container my-5">
        
        <form id="addData" action="<?php echo e(route('bluebook')); ?>" method="POST" enctype="multipart/form-data" oninput="calculatePrice()">
            <?php echo csrf_field(); ?>
            <div class="vehicle-type">
                <div>
                    <input class="check_box" type="radio" id="two-wheeler" name="vehicle_type" value="bike"
                        onclick="updateServiceCharge()" />
                    <label for="two-wheeler">
                        <i class="fas fa-motorcycle"></i> Two Wheeler
                    </label>
                    
                </div>

                <div>
                    <input class="check_box" type="radio" id="four-wheeler" name="vehicle_type" value="car"
                        onclick="updateServiceCharge()" />
                    <label for="four-wheeler">
                        <i class="fas fa-car"></i> Four Wheeler
                    </label>
                    
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12">
                    <label for="date">Pick a date *</label>
                    <input type="date" name="date" id="date" required />
                </div>

                <div class="col-md-6 col-sm-12">
                    <label for="full-name">Full Name *</label>
                    <input type="text" name="name" id="full-name" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="mobile-number">Mobile Number *</label>
                    <input type="tel" name="phone" id="mobile-number" required />
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="vehicle-name">Vehicle Name *</label>
                    <input type="text" name="vehicle_name" id="vehicle-name" placeholder="Eg. Honda, Hyundai, Suzuki, Jeep" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="registration-number">Vehicle Registration Number *</label>
                    <input type="text" name="vehicle_reg_no" id="registration-number"
                        placeholder="Eg. BA 10 PA 1010 / BAGMATI PRADESH 3 2 003 PA 1111" required />
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="engine-cc">Engine CC *</label>
                    <input type="number" name="vehicle_engine" id="engine-cc" placeholder="CC Eg. 150, 125, 1190, 1450" required />
                </div>
            </div>
            <div class="row">
                <div class="item full-width">
                    <label for="pickup-address">Pickup Address *</label>
                    <input type="text" name="pickup_address" id="pickup-address" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label>Do you have insurance papers? *</label>
                    <div>
                        <input class="check_box" type="radio" id="yes" name="insurance" value="Yes" required />
                        <span for="yes">Yes</span>
                    </div>
                    <div>
                        <input class="check_box" type="radio" id="no" name="insurance" value="No" required />
                        <span for="no">No</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="comments">Any Comments</label>
                    <textarea id="comments" name="message"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="blue-book-count">No of Blue Book you want to renew?</label>
                    <input type="number" id="blue-book-count" name="bluebook_qty" value="1" min="1"
                        oninput="updateServiceCharge()" />
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="text" name="service_charge" id="service-charge" value="Rs. 800 Service Charge" readonly>
                    
                </div>
            </div>
            <div class="terms">
                <input class="check_box" type="checkbox" required />
                <label for="terms">By continuing, It is acknowledged that you have read and agreed to
                    our Blue Book Renewal Terms & Conditions.</label>
            </div>
            <div class="submit-button mt-4">
                <button class="btn btn-dark" type="submit">Submit</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

    <script>
        function updateServiceCharge() {
            var blueBookCount = parseInt(
                document.getElementById("blue-book-count").value
            );
            var vehicleType = document.querySelector(
                'input[name="vehicle-type"]:checked'
            ).id;

            var price;
            if (vehicleType === "two-wheeler") {
                price = blueBookCount * 500;
            } else if (vehicleType === "four-wheeler") {
                price = blueBookCount * 800;
            }

            document.getElementById("service-charge").textContent =
                "Rs. " + price + " Service Charge";
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/wheelonpalms.shahbazali.website/resources/views/front/bluebook.blade.php ENDPATH**/ ?>