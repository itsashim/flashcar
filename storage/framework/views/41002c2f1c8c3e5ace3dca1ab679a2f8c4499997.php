
<?php $__env->startSection('title', 'Bluebook'); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        /* Add your custom CSS styles here */

        .sec {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }

        .category-icons {
            background-color: red;
            border-radius: 50%;
            padding: 10px;
            width: 5rem;
            height: 5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            margin-top: 2rem;
        }

        .category-icons i {
            color: white;
            font-size: 2rem;
        }

        /* Colors */
        .blue_text {
            color: blue;
            font-size: larger;
        }

        .text-center button {
            padding: 0.5rem 2rem;
            border-radius: 20px
        }

        .banner {
            background-color: #123b82;
            color: #fff;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            /* margin-top: 10%; */
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

        <div class="container">
            <div class="icon_header mt-5">
                <div class="category-icons">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <h1 class="text-center">Two Wheeler</h1>

                <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <h2 class="blue_text ml-5">Tax Rate</h2>
                        <!-- Insert table content for Two Wheeler Tax Rate -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">Engine(CC)</th>
                                    <th scope="col">Price (NRs.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Up to 125</td>
                                    <td>3,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>126 to 150</td>
                                    <td>5,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>151 to 225</td>
                                    <td>6,500</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>226 to 400</td>
                                    <td>12,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>401 to 650</td>
                                    <td>25,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>651 and higher</td>
                                    <td>25,000</td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Renewal Charge</td>
                                    <td>400</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                            <strong>Note:</strong> Rs. 300 will be added on Tax amount per year
                            as <strong> renewal charge</strong>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <h2 class="blue_text ml-5">Third-Party Insurance Policy Rate</h2>
                        <div class="icon_header border border-2">
                            <!-- Insert table content for Two Wheeler Insurance Policy Rate -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N.</th>
                                        <th scope="col">Engine (CC)</th>
                                        <th scope="col">Price (NRs.)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Up to 149</td>
                                        <td>1,715</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">2</th>
                                        <td>150 to 250</td>
                                        <td>1,941</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>251 and higher</td>
                                        <td>2,167</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>
                                <strong>Note:</strong> A copy of Owner's Identity document is
                                compulsory (Citizenship/Licence/PAN/VoterID/Passport)
                            </p>
                        </div>
                    </div>
                </div>

                <h1 class="text-center mt-5">
                    <div class="category-icons"><i class="fas fa-car"></i></div>
                    Four Wheeler
                </h1>

                <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <h2 class="blue_text ml-5">Tax Rate</h2>
                        <!-- Insert table content for Two Wheeler Tax Rate -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">Engine(CC)</th>
                                    <th scope="col">Price (NRs.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Up to 1000</td>
                                    <td>22,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>1001 to 1500</td>
                                    <td>25,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>1501 to 2000</td>
                                    <td>27,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>2001 to 2500</td>
                                    <td>37,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>2501 to 3000</td>
                                    <td>50,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>3001 to 3500</td>
                                    <td>65,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>3001 and higher</td>
                                    <td>70,000</td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Renewal Charge</td>
                                    <td>400</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                            <strong>Note:</strong> Rs. 400 will be added on Tax amount per year
                            as <strong> renewal charge.</strong>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <h2 class="blue_text ml-5">Third-Party Insurance Policy Rate</h2>
                        <div class="icon_header border border-2">
                            <!-- Insert table content for Two Wheeler Insurance Policy Rate -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N.</th>
                                        <th scope="col">Engine (CC)</th>
                                        <th scope="col">Price (NRs.)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Up to 149</td>
                                        <td>1,715/td></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">2</th>
                                        <td>150 to 250</td>
                                        <td>1,941</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>251 and higher</td>
                                        <td>2,167</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>
                                <strong>Note:</strong> As per the rule of
                                <strong> Government of Nepal,</strong> Third Party Insurance is
                                compulsory. ** A copy of Owner's Identity document is compulsory
                                (Citizenship/Licence/PAN/VoterID/Passport) **
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec">
                <h2 class="blue_text ml-5">Fine Rates (Two Wheeler & Four Wheeler)</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Days</th>
                            <th scope="col">Fine(%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>First 30 Days</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Upto 45 Days</td>
                            <td>10%</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Upto same fiscal year</td>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Upto 5 Years (per/year)</td>
                            <td>32%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Renewal Charge Fine</td>
                            <td>100%</td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    <strong> Note :</strong> Above mentioned fine charges are applicable
                    after 90 days of being expired from date mentioned on bluebook.
                </p>
            </div>


            <h1 class="text-center mt-5">
                <div class="category-icons"><i class="fas fa-bolt"></i></div>
                For Electric Vehicle
            </h1>

            <div class="row mt-4">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <h2 class="blue_text ml-5">
                        Two Wheeler &nbsp;<i class="fas fa-motorcycle"></i>
                    </h2>
                    <!-- Insert table content for Two Wheeler Tax Rate -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Battery (Watt)</th>
                                <th scope="col">Price (NRs.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Up to 50</td>
                                <td>1,000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>51 to 350</td>
                                <td>1,500</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>351 to 1000</td>
                                <td>2,000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>1001 to 1500</td>
                                <td>2,500</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>1501 and higher</td>
                                <td>3,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <h2 class="blue_text ml-5">
                        Four Wheeler &nbsp;<i class="fas fa-car"></i>
                    </h2>
                    <div class="icon_header border border-2">
                        <!-- Insert table content for Two Wheeler Insurance Policy Rate -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">S.N.</th>
                                    <th scope="col">Battery (KW)</th>
                                    <th scope="col">Price (NRs.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>10 to 50</td>
                                    <td>5,000</td>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>51 to 125</td>
                                    <td>15,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>126 to 200</td>
                                    <td>20,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>201 and higher</td>
                                    <td>30,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h4 class="font-weight-bold mt-4">Third Wheel Service Charge</h4>
                <p>
                    Two Wheeler = 500/- <br>
                    Four Wheeler = 800/- <br>
                    Pick &amp; Drop charge = Free <br>

                </p>
                <button type="button" class="btn btn-dark mb-5">Renew Now</button>
            </div>

        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/wheelonpalms.shahbazali.website/resources/views/front/bluebook-tax-rates.blade.php ENDPATH**/ ?>