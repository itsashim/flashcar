<?php $__env->startSection('title', 'Used Bike List'); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .card:hover {
            box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;

        }

        .card-body {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .buttons {
            text-align: center;
        }

        .button {
            padding: 2% 32%;
            border-radius: 2rem;
            background-color: transparent;
            border: 1px solid red;
            color: red;
        }

        .icons_4 {
            opacity: 70%;
        }

        button:hover {
            color: white;
            background-color: red;
            cursor: pointer;
        }

        @media  screen and (min-width:991px) and (max-width:1200px) {
            .row {
                gap: 5rem;
            }

        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container mt-5">
        <!--HEADERS-->
        <div class="container-fluid text-center text-light" style="color: #20748f !important; font-weight: bolder;">
            <h2 style="font-weight: bold; letter-spacing: 1px;">BUY USED BIKES</h2>
        </div>
        <!--HEADERS-->

        <!--CARDS-->
        <div class="container mb-5">
            <!--<div class="d-flex justify-content-between flex-wrap">-->
            <div class="row">

                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card m-2" style="width: 22rem; border-radius: 2rem;">
                            <img class="card-img-top p-2" style="border-radius: 2rem;"
                                src="<?php echo e(asset('public/' . $data->logo_path)); ?>" alt="Bajaj Pulsar 150">
                            <div class="card-body"
                                style="padding: 0%; padding-left: 1rem; padding-right: 1rem; padding-bottom: 1.5rem;">
                                <div class="card-title d-flex justify-content-between">
                                    <h5>Bajaj Pulsar 150</h5>
                                    <h5 class="text-danger">Rs. <?php echo e($data->bikesell->price); ?></h5>
                                </div>
                                <p class="card-text font-italic font-weight-bold"><?php echo e($data->bikesell->bike_no); ?></p>
                                <div class="d-flex flex-row justify-content-between text-center icons_4">
                                    <p><i class="fa-solid fa-road"></i><br><?php echo e($data->bikesell->run_km); ?> km</p>
                                    <p><i class="fa-solid fa-location-dot fa-lg"></i><br>Biratnagar </p>
                                    <p><i class="fa-regular fa-calendar fa-lg"></i><br><?php echo e($data->bikesell->year); ?></p>
                                    <p><i class="fa-solid fa-gas-pump fa-lg"></i><br>Petrol</p>
                                </div>
                                <div class="buttons">
                                    <a class="button btn" href="<?php echo e(route('bikeDetails', $data->bikesell->id)); ?>">Seller
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

                

            </div>
        </div>
    </div>
    <!--CARDS-->
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/rental.shahbazali.website/resources/views/front/pages/used_bike_list.blade.php ENDPATH**/ ?>