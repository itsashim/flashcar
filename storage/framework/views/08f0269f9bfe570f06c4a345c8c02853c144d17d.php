<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.My Account')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

    <style>
        .disnone {
            display: none;
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <?php echo $__env->make('front.members.membernav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid">
        <h3>Upcoming Appointments</h3>
        <div class="row">
            <?php if($upcomming->count() > 0): ?>
                <?php $__currentLoopData = $upcomming; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card mb-2">
                            <div class="card-header card-primary">
                                
                                <button id="print-<?php echo e($u->id); ?>" class="btn-sm btn-info"><i
                                        class="fa fa-print"></i></button>

                                <div id="print_div-<?php echo e($u->id); ?>" style="text-align:center;" class="disnone">

                                    <head>
                                        <meta charset="UTF-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>Document</title>
                                        <style>
                                            .container {
                                                padding: 2rem 5rem;
                                                text-align: center;
                                            }

                                            table {
                                                width: 100%;
                                            }

                                            th,
                                            td {
                                                width: 50%;
                                            }

                                            th,
                                            td {
                                                text-align: center; //start
                                            }

                                            .img {
                                                text-align: end;
                                            }

                                            h3 {
                                                text-align: start;
                                            }

                                            .badge {
                                                border: none;
                                                outline: none;
                                                padding: 5px;
                                                border-radius: 8px;
                                            }

                                            .badge-success {
                                                color: white;
                                                background-color: green;
                                            }

                                            .badge-danger {
                                                color: white;
                                                background-color: red;
                                            }

                                            .badge-warning {
                                                color: black;
                                                background-color: #FFE840;
                                            }

                                            .badge-primary {
                                                color: white;
                                                background-color: #1179E8;
                                            }

                                            .text-center {
                                                position: relative;
                                                top: 50%;
                                                left: 50%;
                                                transform: translateX(-50%);
                                            }
                                        </style>

                                    </head>
                                    <div class="container">
                                        <h2 style="text-align: left; font-size:1.17rem;">Patient Details</h2>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"
                                                        style="background-color: lightgreen; padding: 1rem;text-align:center;">
                                                        Booking Confirmed</th><br>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <?php if($u->status == 3): ?>
                                                            <span
                                                                class="badge badge-success"><?php echo e(__('messages.Approve')); ?></span>
                                                        <?php elseif($u->status == 6): ?>
                                                            <span
                                                                class="badge badge-danger"><?php echo e(__('messages.Reject')); ?></span>
                                                        <?php elseif($u->status == 0): ?>
                                                            <span
                                                                class="badge badge-danger"><?php echo e(__('messages.Absent')); ?></span>
                                                        <?php elseif($u->status == 1): ?>
                                                            <span
                                                                class="badge badge-warning"><?php echo e(__('messages.Receive')); ?></span>
                                                        <?php elseif($u->status == 2): ?>
                                                            <span
                                                                class="badge badge-primary"><?php echo e(__('messages.Reschedule')); ?></span>
                                                        <?php elseif($u->status == 4): ?>
                                                            <span
                                                                class="badge badge-succeess"><?php echo e(__('messages.Complete')); ?></span>
                                                        <?php elseif($u->status == 5): ?>
                                                            <span
                                                                class="badge badge-primary"><?php echo e(__('messages.Refer Doctor')); ?></span>
                                                        <?php endif; ?>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Token Number</th>
                                                    <th><?php echo e($u->id); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th><?php echo e($u->patient->first_name); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <th><?php echo e($u->patient->first_name); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Hospital Name</th>
                                                    <th><?php echo e(isset($u->hospital_id) ? $u->hospital->name : '-'); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Doctor Name</th>
                                                    <th><?php echo e($u->doctors->name); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Department Name</th>
                                                    <th><?php echo e($u->department->name); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Date</th>
                                                    <th><?php echo e($u->date); ?></th>
                                                </tr>
                                                <?php if($u->hospital_id == null): ?>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th><?php echo e($u->time); ?></th>
                                                    </tr>
                                                <?php endif; ?>
                                                <tr>
                                                    <th>Age</th>
                                                    <th><?php echo e($u->patient->age); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>DOB</th>
                                                    <th><?php echo e($u->patient->dob); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <th><?php echo e($u->patient->gender); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <th><?php echo e($u->patient->phone); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <th><?php echo e($u->patient->email); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <th><?php echo e($u->patient->address); ?></th>
                                                </tr>
                                            </thead>
                                        </table>

                                    </div>
                                </div>

                                <script>
                                    (function(id) {
                                        let div = document.querySelector("#print-" + id);
                                        div.addEventListener("click", () => {
                                            var divContents = document.getElementById("print_div-" + id).innerHTML;
                                            var a = window.open('', '', 'height=800, width=800');
                                            a.document.write('<html>');
                                            a.document.write('<body > <h1>Appointment Details<br><br><br>');
                                            a.document.write(
                                                '<div class="img" style="text-align: center!important;"><img src="https://sansarhealth.com/public/upload/images/638996222fe35.png" style="width: 250px;"></div>'
                                            );
                                            a.document.write(divContents);
                                            a.document.write('</body></html>');
                                            a.document.close();
                                            a.print();
                                        });
                                    })
                                    (<?php echo e($u->id); ?>);
                                </script>


                            </div>
                            <div class="card-body" id="card-<?php echo e($u->id); ?>" data-toggle="modal"
                                data-target="#exampleModal-<?php echo e($u->id); ?>" style="cursor:pointer"
                                title="click to see details">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="tab-appointment-detail-box">
                                            <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><i
                                                    class="fa-solid fa-user-doctor"></i> <br>
                                                <?php echo e(isset($u->doctors->name) ? $u->doctors->name : '-'); ?></h5>
                                            <?php if($u->status == 3): ?>
                                                <span class="badge badge-success"><?php echo e(__('messages.Approve')); ?></span>
                                            <?php elseif($u->status == 6): ?>
                                                <span class="badge badge-danger"><?php echo e(__('messages.Reject')); ?></span>
                                            <?php elseif($u->status == 0): ?>
                                                <span class="badge badge-danger"><?php echo e(__('messages.Absent')); ?></span>
                                            <?php elseif($u->status == 1): ?>
                                                <span class="badge badge-warning"><?php echo e(__('messages.Receive')); ?></span>
                                            <?php elseif($u->status == 2): ?>
                                                <span class="badge badge-primary"><?php echo e(__('messages.Reschedule')); ?></span>
                                            <?php elseif($u->status == 4): ?>
                                                <span class="badge badge-succeess"><?php echo e(__('messages.Complete')); ?></span>
                                            <?php elseif($u->status == 5): ?>
                                                <span class="badge badge-primary"><?php echo e(__('messages.Refer Doctor')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php if($u->hospital_id == null): ?>
                                            <i class="far fa-clock"></i>
                                            <span>
                                                <?php $date = date_create($u->time);
                                                if ($date) {
                                                    echo date_format($date, 'H:i a');
                                                }
                                                ?>
                                            </span>
                                            <br />
                                        <?php else: ?>
                                            <i class="fa-solid fa-hospital"></i>
                                            <span>
                                                <?php echo e($u->hospital->name); ?>

                                            </span>
                                            <br />
                                        <?php endif; ?>
                                        <i class="far fa-calendar-alt"></i>
                                        <span>
                                            <?php
                                            $date = date_create($u->date);
                                            if ($date) {
                                                echo date_format($date, 'd F,Y');
                                            }
                                            ?>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal-<?php echo e($u->id); ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Doctor: <?php echo e($u->doctors->name); ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="overflow:scroll">

                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Department</th>
                                                    <?php if($u->hospital_id == null): ?>
                                                        <th scope="col">Time</th>
                                                    <?php endif; ?>
                                                    <th scope="col">Date</th>
                                                    <?php if($u->hospital_id != null): ?>
                                                        <th scope="col">Hospital</th>
                                                    <?php endif; ?>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo e($u->department->name); ?></td>
                                                    <?php if($u->hospital_id == null): ?>
                                                        <td>
                                                            <?php
                                                                $date = date_create($u->time);
                                                                echo date_format($date, 'H:i a');
                                                            ?>
                                                        </td>
                                                    <?php endif; ?>
                                                    <td> <?php
                                                        $date = date_create($u->date);
                                                        echo date_format($date, 'd F,Y');
                                                    ?>
                                                        <?php echo e($u->created_at->diffforhumans()); ?>

                                                    </td>
                                                    
                                                    <?php if($u->hospital_id != null): ?>
                                                        <td> <?php echo e($u->hospital->name); ?> </td>
                                                    <?php endif; ?>
                                                    <td>
                                                        <?php if($u->status == 3): ?>
                                                            <span
                                                                class="badge badge-success"><?php echo e(__('messages.Approve')); ?></span>
                                                        <?php elseif($u->status == 6): ?>
                                                            <span
                                                                class="badge badge-danger"><?php echo e(__('messages.Reject')); ?></span>
                                                        <?php elseif($u->status == 0): ?>
                                                            <span
                                                                class="badge badge-danger"><?php echo e(__('messages.Absent')); ?></span>
                                                        <?php elseif($u->status == 1): ?>
                                                            <span
                                                                class="badge badge-warning"><?php echo e(__('messages.Receive')); ?></span>
                                                        <?php elseif($u->status == 2): ?>
                                                            <span
                                                                class="badge badge-primary"><?php echo e(__('messages.Reschedule')); ?></span>
                                                        <?php elseif($u->status == 4): ?>
                                                            <span
                                                                class="badge badge-succeess"><?php echo e(__('messages.Complete')); ?></span>
                                                        <?php elseif($u->status == 5): ?>
                                                            <span
                                                                class="badge badge-primary"><?php echo e(__('messages.Refer Doctor')); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="alert alert-warning">No upcoming appointments available</div>
            <?php endif; ?>
        </div>
    </div>


    <div class="container-fluid">
        <h3>Expired Past Appointments</h3>
        <div class="row">
            <?php if($past->count() > 0): ?>
                <?php $__currentLoopData = $past; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <div class="card mb-2">
                            <div class="card-header card-primary">
                                
                                <button id="print-<?php echo e($u->id); ?>" class="btn-sm btn-info"><i
                                        class="fa fa-print"></i></button>


                                <div id="print_div-<?php echo e($u->id); ?>" style="text-align:center;" class="disnone">

                                    <head>
                                        <meta charset="UTF-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>Document</title>
                                        <style>
                                            .container {
                                                padding: 2rem 5rem;
                                                text-align: center;
                                            }

                                            table {
                                                width: 100%;
                                            }

                                            th,
                                            td {
                                                width: 50%;
                                            }

                                            th,
                                            td {
                                                text-align: center; //start
                                            }

                                            .img {
                                                text-align: end;
                                            }

                                            h3 {
                                                text-align: start;
                                            }

                                            .badge {
                                                border: none;
                                                outline: none;
                                                padding: 5px;
                                                border-radius: 8px;
                                            }

                                            .badge-success {
                                                color: white;
                                                background-color: green;
                                            }

                                            .badge-danger {
                                                color: white;
                                                background-color: red;
                                            }

                                            .badge-warning {
                                                color: black;
                                                background-color: #FFE840;
                                            }

                                            .badge-primary {
                                                color: white;
                                                background-color: #1179E8;
                                            }

                                            .text-center {
                                                position: relative;
                                                top: 50%;
                                                left: 50%;
                                                transform: translateX(-50%);
                                            }
                                        </style>

                                    </head>
                                    <div class="container">
                                        
                                        
                                        <h2 style="text-align: left; font-size:1.17rem;">Patient Details</h2>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"
                                                        style="background-color: lightgreen; padding: 1rem;text-align:center;">
                                                        Booking Confirmed</th><br>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">
                                                        <?php if($u->status == 3): ?>
                                                            <span
                                                                class="badge badge-success"><?php echo e(__('messages.Approve')); ?></span>
                                                        <?php elseif($u->status == 6): ?>
                                                            <span
                                                                class="badge badge-danger"><?php echo e(__('messages.Reject')); ?></span>
                                                        <?php elseif($u->status == 0): ?>
                                                            <span
                                                                class="badge badge-danger"><?php echo e(__('messages.Absent')); ?></span>
                                                        <?php elseif($u->status == 1): ?>
                                                            <span
                                                                class="badge badge-warning"><?php echo e(__('messages.Receive')); ?></span>
                                                        <?php elseif($u->status == 2): ?>
                                                            <span
                                                                class="badge badge-primary"><?php echo e(__('messages.Reschedule')); ?></span>
                                                        <?php elseif($u->status == 4): ?>
                                                            <span
                                                                class="badge badge-succeess"><?php echo e(__('messages.Complete')); ?></span>
                                                        <?php elseif($u->status == 5): ?>
                                                            <span
                                                                class="badge badge-primary"><?php echo e(__('messages.Refer Doctor')); ?></span>
                                                        <?php endif; ?>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Token Number</th>
                                                    <th><?php echo e($u->id); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th><?php echo e($u->patient->first_name); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <th><?php echo e($u->patient->first_name); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Hospital Name</th>
                                                    <th><?php echo e(isset($u->hospital_id) ? $u->hospital->name : '-'); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Doctor Name</th>
                                                    <th><?php echo e($u->doctors->name); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Department Name</th>
                                                    <th><?php echo e($u->department->name); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Date</th>
                                                    <th><?php echo e($u->date); ?></th>
                                                </tr>
                                                <?php if($u->hospital_id == null): ?>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th><?php echo e($u->time); ?></th>
                                                    </tr>
                                                <?php endif; ?>
                                                <tr>
                                                    <th>Age</th>
                                                    <th><?php echo e($u->patient->age); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>DOB</th>
                                                    <th><?php echo e($u->patient->dob); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <th><?php echo e($u->patient->gender); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <th><?php echo e($u->patient->phone); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <th><?php echo e($u->patient->email); ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <th><?php echo e($u->patient->address); ?></th>
                                                </tr>
                                            </thead>
                                        </table>

                                    </div>
                                </div>

                                <script>
                                    (function(id) {
                                        let div = document.querySelector("#print-" + id);
                                        div.addEventListener("click", () => {
                                            var divContents = document.getElementById("print_div-" + id).innerHTML;
                                            var a = window.open('', '', 'height=800, width=800');
                                            a.document.write('<html>');
                                            a.document.write('<body > <h1>Appointment Details<br><br><br>');
                                            a.document.write(
                                                '<div class="img" style="text-align: center!important;"><img src="https://sansarhealth.com/public/upload/images/638996222fe35.png" style="width: 250px;"></div>'
                                            );
                                            a.document.write(divContents);
                                            a.document.write('</body></html>');
                                            a.document.close();
                                            a.print();
                                        });
                                    })
                                    (<?php echo e($u->id); ?>);
                                </script>

                            </div>
                            <div class="card-body" id="card-<?php echo e($u->id); ?>" data-toggle="modal"
                                data-target="#exampleModal-<?php echo e($u->id); ?>" style="cursor:pointer"
                                title="click to see details">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="tab-appointment-detail-box">
                                            <h4 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><i
                                                    class="fa-solid fa-user-doctor"></i> <br>
                                                <?php echo e(isset($u->doctors->name) ? $u->doctors->name : '-'); ?></h4>
                                            <?php if($u->status == 3): ?>
                                                <span class="badge badge-success"><?php echo e(__('messages.Approve')); ?></span>
                                            <?php elseif($u->status == 6): ?>
                                                <span class="badge badge-danger"><?php echo e(__('messages.Reject')); ?></span>
                                            <?php elseif($u->status == 0): ?>
                                                <span class="badge badge-danger"><?php echo e(__('messages.Absent')); ?></span>
                                            <?php elseif($u->status == 1): ?>
                                                <span class="badge badge-warning"><?php echo e(__('messages.Receive')); ?></span>
                                            <?php elseif($u->status == 2): ?>
                                                <span class="badge badge-primary"><?php echo e(__('messages.Reschedule')); ?></span>
                                            <?php elseif($u->status == 4): ?>
                                                <span class="badge badge-succeess"><?php echo e(__('messages.Complete')); ?></span>
                                            <?php elseif($u->status == 5): ?>
                                                <span class="badge badge-primary"><?php echo e(__('messages.Refer Doctor')); ?></span>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <?php if($u->hospital_id == null): ?>
                                            <i class="far fa-clock"></i>
                                            <span>
                                                <?php $date = date_create($u->time);
                                                if ($date) {
                                                    echo date_format($date, 'H:i a');
                                                }
                                                ?>
                                            </span>
                                            <br />
                                        <?php else: ?>
                                            <i class="fa-solid fa-hospital"></i>
                                            <span>
                                                <?php echo e($u->hospital->name); ?>

                                            </span>
                                            <br />
                                        <?php endif; ?>
                                        <i class="far fa-calendar-alt"></i>
                                        <span><?php
                                        $date = date_create($u->date);
                                        echo date_format($date, 'd F,Y'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal-<?php echo e($u->id); ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Doctor:
                                            <?php echo e($u->doctors->name); ?>

                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="overflow:scroll">

                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Department</th>
                                                    <?php if($u->hospital_id == null): ?>
                                                        <th scope="col">Time</th>
                                                    <?php endif; ?>
                                                    <th scope="col">Date</th>
                                                    <?php if($u->hospital_id != null): ?>
                                                        <th scope="col">Hospital</th>
                                                    <?php endif; ?>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo e($u->department->name); ?></td>
                                                    <?php if($u->hospital_id == null): ?>
                                                        <td>
                                                            <?php
                                                                $date = date_create($u->time);
                                                                echo date_format($date, 'H:i a');
                                                            ?>
                                                        </td>
                                                    <?php endif; ?>
                                                    <td> <?php
                                                        $date = date_create($u->date);
                                                        echo date_format($date, 'd F,Y');
                                                    ?> <?php echo e($u->created_at->diffforhumans()); ?> </td>
                                                    
                                                    <?php if($u->hospital_id != null): ?>
                                                        <td> <?php echo e($u->hospital->name); ?> </td>
                                                    <?php endif; ?>
                                                    <td>
                                                        <?php if($u->status == 3): ?>
                                                            <span
                                                                class="badge badge-success"><?php echo e(__('messages.Approve')); ?></span>
                                                        <?php elseif($u->status == 6): ?>
                                                            <span
                                                                class="badge badge-danger"><?php echo e(__('messages.Reject')); ?></span>
                                                        <?php elseif($u->status == 0): ?>
                                                            <span
                                                                class="badge badge-danger"><?php echo e(__('messages.Absent')); ?></span>
                                                        <?php elseif($u->status == 1): ?>
                                                            <span
                                                                class="badge badge-warning"><?php echo e(__('messages.Receive')); ?></span>
                                                        <?php elseif($u->status == 2): ?>
                                                            <span
                                                                class="badge badge-primary"><?php echo e(__('messages.Reschedule')); ?></span>
                                                        <?php elseif($u->status == 4): ?>
                                                            <span
                                                                class="badge badge-succeess"><?php echo e(__('messages.Complete')); ?></span>
                                                        <?php elseif($u->status == 5): ?>
                                                            <span
                                                                class="badge badge-primary"><?php echo e(__('messages.Refer Doctor')); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="alert alert-warning">No past appointments available</div>
            <?php endif; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/members/appointment.blade.php ENDPATH**/ ?>