<?php $__env->startSection('title'); ?>
    <?php echo e(__('Service Details')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/shahbazali.online\/test\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.1"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                            55356, 56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        .content {
            min-height: 200px;
            padding: 40px 0;
        }

        .service-header {
            margin-bottom: 30px;
        }

        .service-header h1 {
            font-weight: bold;
            font-size: 36px;
        }

        .service-location {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        .rating {
            list-style: none;
            margin: 0 0 7px;
            padding: 0;
            width: 100%;
        }

        .rating i {
            color: #dedfe0;
        }

        .service-cate {
            display: flex;
            align-items: center;
        }

        .service-cate .cate-link {
            color: #fff;
            padding: 2px 10px;
            text-transform: uppercase;
            background: #d9c505;
            border-radius: 4px;
            font-size: 0.8125rem;
            display: inline-block;
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }

        .fav-link {
            font-size: 26px;
            margin-left: 10px;
            color: #2c3038;
        }

        .service-images {
            margin-bottom: 30px;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #ff6101;
            border: 1px px solid #ff6101;
        }

        .service-tabs>li+li {
            margin-left: 10px;
        }

        .tab-content {
            padding-top: 20px;
        }

        .tab-content>.active {
            display: block;
        }

        .card {
            border: 1px solid #f0f0f0;
            margin-bottom: 1.875rem;
        }

        .book-service-left {
            display: none;
        }

        .sidebar-widget {
            background: #f9f9f9;
            padding: 14px;
            border-radius: 5px;
            text-align: center;
        }

        .widget {
            margin-bottom: 30px;
        }

        .sidebar-widget .service-amount {
            color: #2c3038;
            font-size: 36px;
            font-weight: 700;
        }

        .service-book .btn {
            font-weight: 700;
            display: block;
            padding: 11px 25px;
            border-radius: 5px;
            text-transform: uppercase;
            width: 100%;
        }

        .about-author {
            display: flex;
            display: -ms-flexbox;
            align-items: center;
        }

        .about-author {
            min-height: 80px;
        }

        .about-provider-img {
            background-color: #fff;
            height: 80px;
            overflow: hidden;
            position: absolute;
            width: 80px;
        }

        .provider-details {
            margin-left: 100px;
        }

        .provider-details .ser-provider-name {
            display: inline-block;
            margin-bottom: 5px;
        }

        .ser-provider-name {
            display: inline-block;
            margin-bottom: 10px;
            color: #272b41;
            font-size: 16px;
            font-weight: 600;
        }

        .last-seen {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .provider-info {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
        }

        .available-widget ul li:first-child {
            padding-top: 0;
        }

        .available-widget ul li {
            color: #858585;
            overflow: hidden;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .service-widget {
            background-color: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 15px;
            margin-bottom: 30px;
            position: relative;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.05);
        }

        .service-img {
            position: relative;
            overflow: hidden;
            z-index: 1;
            border-radius: 15px 15px 0 0;
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100%;
        }

        .service-img .serv-img {
            border-radius: 15px 15px 0 0;
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            transform: translateZ(0);
            -moz-transition: all 2000ms cubic-bezier(0.19, 1, 0.22, 1) 0ms;
            -ms-transition: all 2000ms cubic-bezier(0.19, 1, 0.22, 1) 0ms;
            -o-transition: all 2000ms cubic-bezier(0.19, 1, 0.22, 1) 0ms;
            -webkit-transition: all 2000ms cubic-bezier(0.19, 1, 0.22, 1) 0ms;
            transition: all 2000ms cubic-bezier(0.19, 1, 0.22, 1) 0ms;
            width: 100%;
        }

        .item-info {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            padding: 0 15px 15px;
            z-index: 1;
        }

        .service-user {
            font-size: 20px;
            line-height: 28px;
            color: #fff;
            font-weight: bold;
            float: left;
        }

        .cate-list {
            float: right;
        }

        .cate-list a {
            color: #fff;
            padding: 2px 15px;
            font-size: 13px;
            overflow: hidden;
            line-height: 22px;
            border-radius: 15px;
            position: relative;
            display: inline-block;
        }

        .bg-yellow {
            background: #d9c505;
        }

        .service-content {
            padding: 15px;
        }

        .service-content .title {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .service-widget .service-content .title a {
            display: inline-block;
            color: #242423;
        }

        .service-widget .rating {
            color: #757575;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .rating {
            list-style: none;
            margin: 0 0 7px;
            padding: 0;
            width: 100%;
        }

        .user-info span i {
            font-size: 12px;
            line-height: 26px;
            color: #171717;
            text-align: center;
            width: 27px;
            height: 27px;
            border: 1px dashed #171717;
            border-radius: 50%;
        }

        .ser-contact span {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: calc(100% - 30px);
            display: block;
        }

        .ser-location {
            display: flex;
            overflow: hidden;
            text-align: right;
            align-items: center;
        }

        .user-info span i {
            font-size: 12px;
            line-height: 26px;
            color: #171717;
            text-align: center;
            width: 27px;
            height: 27px;
            border: 1px dashed #171717;
            border-radius: 50%;
        }
    </style>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="d-detailpg-part-main-box">

            <div class="row my-2">
                <div class="col-sm-3">
                    <!--<select name="department_id" id="department_id" class="form-control">-->
                    <!--    <option class="pd_first" value="#">Filter by Department</option>-->
                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!--</select>-->
                </div>
                <div class="col-sm-6">
                    <!--<input type="text" class="form-control" placeholder="Search By Services Name"-->
                    <!--    id="search_name" style="width: auto;">-->
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper">
        <div class="content">

            <div class="container">



                <div class="row" id="doctorList">
                    
                    <?php
                    $dayOfWeek = \Carbon\Carbon::now()->dayOfWeek + 1;
                    $todayTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                        ->where('day', $dayOfWeek)
                        ->first();
                    $status = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                        ->where('day', $dayOfWeek)
                        ->get('status');
                    ?>
                    <?php if($todayTimeTable): ?>
                        <input type="hidden" id="cid" value="4522" data-count="1" data-sync="0">
                        <div class="col-lg-8">

                            <div class="service-view">

                                <div class="service-header">
                                    <h1><?php echo e($doctor->name); ?></h1>

                                    <address class="service-location"><i class="fas fa-location-arrow"></i>
                                        <?php echo e($doctor->city->name); ?></address>

                                    <!--<div class="rating">-->

                                    <!--    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>-->

                                    <!--    <span class="d-inline-block average-rating">(0)</span>-->

                                    <!--</div>-->

                                    <div class="service-cate">
                                        <a class="cate-link"
                                            href="<?php echo e('https://sathiservice.com/find-doctor?department_id=' . $department->id); ?>"><?php echo e($doctor->department->name); ?></a>

                                        <div class="action">
                                            <button class="like btn btn-default add_to_wishlist"
                                                data-id="<?php echo e($doctor->id); ?>" type="button">
                                                <span class="fa fa-heart add-to-fav"></span>
                                            </button>
                                        </div>


                                    </div>

                                </div>



                                <div class="service-images">

                                    <div class="">
                                        <a href="javascript:void(0);" data-docid="<?php echo e($doctor->id); ?>" data-orgid="614"
                                            data-nextavltime="Aug 25 at 7:00 PM" class="d-block doctorprofile">

                                            <?php if($doctor->image): ?>
                                                <img src="<?php echo e(asset('public/upload/doctor/' . $doctor->image)); ?>"
                                                    title=" <?php echo e($doctor->image); ?>" class="img-fluid w-100"
                                                    style="height:415px; object-fit: cover;">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('public/images/doctor.png')); ?>"
                                                    title=" <?php echo e($doctor->image); ?>" class="img-fluid w-100"
                                                    style="height:415px; object-fit: cover;">
                                            <?php endif; ?>

                                            <!--<img class="rounded-circle border-success"-->
                                            <!--    src="<?php echo e(asset('public/upload/doctor/' . $doctor->image)); ?>"-->
                                            <!--    alt="Dr. Madhur Basnet" style="width: 200px; height:200px;" title=" <?php echo e($doctor->image); ?>">-->
                                        </a>
                                    </div>

                                </div>



                                <div class="service-details">

                                    <ul class="nav nav-pills service-tabs" id="pills-tab" role="tablist">

                                        <li class="nav-item">

                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                                href="#pills-home" role="tab" aria-controls="pills-home"
                                                aria-selected="true">Overview</a>

                                        </li>

                                    </ul>



                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab">

                                            <div class="card service-description">

                                                <div class="card-body">

                                                    <h5 class="card-title">Service Details</h5>

                                                    <p class="mb-0">
                                                    <p><?php echo e($doctor->about_us); ?></p>
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="book-service-left">

                                    <!--<div class="sidebar-widget widget">-->

                                    <!--    <div class="service-amount">-->

                                    <!--        <span>&#36;500</span>-->

                                    <!--    </div>-->

                                    <!--    <div class="service-book">-->


                                    <!--        <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#modal-wizard1"> Book Service </a>-->



                                    <!--    </div>-->

                                    <!--</div>-->

                                    <div class="card provider-widget clearfix">
                                        <div class="card-body">
                                            <h5 class="card-title">Service Provider</h5>
                                            <div class="about-author">
                                                <div class="about-provider-img">
                                                    <div class="provider-img-wrap">
                                                        <?php if($doctor->user && $doctor->user->profile_pic): ?>
                                                            <img src="<?php echo e($doctor->user->profile_pic); ?>"
                                                                alt="Profile Picture">
                                                        <?php endif; ?>
                                                        <!--<img class="img-fluid rounded-circle" alt="" src="https://truelysell.com/uploads/profile_img/1631787916.jpg">-->
                                                    </div>
                                                </div>
                                                <div class="provider-details">
                                                    <p class="ser-provider-name"><?php echo e($doctor->user); ?></p>
                                                    <p class="last-seen">
                                                        <i class="fas fa-circle"></i> Last Seen: &nbsp; 47 days Ago
                                                    </p>
                                                    <p class="text-muted mb-1">Member Since Sep 2021</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="provider-info">
                                                <p class="mb-1"><i class="far fa-envelope mr-1"></i>
                                                    <a href="#" class="email"><?php echo e($doctor->email); ?></a>
                                                </p>
                                                <p class="mb-0"><i class="fas fa-phone-alt mr-1"></i>
                                                    <?php echo e($doctor->phone_no); ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title">Avilable Date For Booking Services</h4>
                            <div class="table-responsive border mb-3 mb-xl-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th style="min-width:155px;" scope="col">Service Available
                                                Time</th>
                                            <th style="min-width: 300px;" scope="col">Available
                                                Time</th>
                                        </tr>
                                    </thead>
                                    <tbody class="small align-middle" id="tableBody">
                                        <?php $__currentLoopData = $timeTables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    
                                                    <?php echo e($data['date']); ?>


                                                </td>
                                                <td>
                                                    <div class="m-1">
                                                        <?php if($data['timeTable']['status'] != '0'): ?>
                                                            <?php if(isset($data['timeTable']['from'])): ?>
                                                                <?php echo e($data['timeTable']['from']); ?> -
                                                                <?php echo e($data['timeTable']['to']); ?>

                                                            <?php else: ?>
                                                                <span class="badge badge-danger"> Not Available
                                                                </span>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <span class="badge badge-info"> Not Available
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                                <td class="timeTD">
                                                    <div class="m-1">
                                                        <?php
                                                        $todayToken = $data['hours'];
                                                        $tokenTime = 0;
                                                        ?>

                                                        <?php if($todayTimeTable->status != '0'): ?>
                                                            <?php if($todayToken > 0): ?>
                                                                <?php for($i = 0; $i < $todayToken; $i++): ?>
                                                                    <?php if($i == 0): ?>
                                                                        <?php if($todayTimeTable->from >= \Carbon\Carbon::now()->format('H:i')): ?>
                                                                            <a class="btn bookThisTime"
                                                                                data-time_table_id="<?php if ($todayTimeTable) {
                                                                                    echo $todayTimeTable->id;
                                                                                } ?>"
                                                                                data-id="<?php echo e($doctor->id); ?>"
                                                                                data-date="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>"
                                                                                data-time="<?php echo e($todayTimeTable->from); ?>"
                                                                                style="background: #00be9c;"><?php echo e($todayTimeTable->from); ?>

                                                                                
                                                                            </a>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <?php if(
                                                                            $todayTimeTable->to >
                                                                                \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')): ?>
                                                                            <?php if(
                                                                                \Carbon\Carbon::now()->format('H:i') <=
                                                                                    \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')): ?>
                                                                                <?php
                                                                                $doctor->id;
                                                                                $time = \Carbon\Carbon::parse($todayTimeTable->from)
                                                                                    ->addMinutes($tokenTime + 60)
                                                                                    ->format('H:i');
                                                                                $date = \Carbon\Carbon::now()->format('Y-m-d');
                                                                                $else_app = \App\Model\Appointment::where('doc_id', $doctor->id)
                                                                                    ->where('time', $time)
                                                                                    ->where('date', $date)
                                                                                    ->count();
                                                                                ?>

                                                                                <?php if($else_app == 0): ?>
                                                                                    <a class="btn bookThisTime mb-2"
                                                                                        data-time_table_id="<?php if ($todayTimeTable) {
                                                                                            echo $todayTimeTable->id;
                                                                                        } ?>"
                                                                                        data-id="<?php echo e($doctor->id); ?>"
                                                                                        data-date="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>"
                                                                                        data-time="<?php echo e(\Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?>"
                                                                                        style="background: #00be9c;"><?php echo e(\Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?>

                                                                                        hi
                                                                                    </a>
                                                                                    <?php $tokenTime = $tokenTime + 60; ?>
                                                                                <?php else: ?>
                                                                                    <span class="btn btn-danger"
                                                                                        title="doctor taken"
                                                                                        style="cursor: not-allowed;"><?php echo e($time); ?></span>
                                                                                    <?php $tokenTime = $tokenTime + 60; ?>
                                                                                <?php endif; ?>
                                                                            <?php else: ?>
                                                                                <?php $tokenTime = $tokenTime + 60; ?>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endfor; ?>
                                                            <?php else: ?>
                                                                <span class="badge badge-danger"> Token Not
                                                                    Available</span>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <span class="badge badge-info"> Service Not Available</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4 theiaStickySidebar book-service-right">
                            <div class="card provider-widget clearfix">
                                <div class="card-body">
                                    <h5 class="card-title">Service Provider</h5>
                                    <div class="about-author">

                                        <div class="about-provider-img">

                                            <div class="provider-img-wrap">

                                                <img class="img-fluid rounded-circle" src="<?php
                                                if (!empty($doctor->user->profile_pic)) {
                                                    echo asset('public/upload/profile/' . $doctor->user->profile_pic);
                                                } else {
                                                    echo asset('public/upload/images') . '/' . $setting->logo; // Replace 'site_logo.png' with the actual path to your site logo image.
                                                }
                                                ?>"
                                                    alt="Profile Picture"
                                                    style="width:80px; height:80px; object-fit:contain;">


                                                <!--<a href="javascript:void(0);"><img class="img-fluid rounded-circle" alt="" src="https://truelysell.com/uploads/profile_img/1631787916.jpg"></a>-->

                                            </div>

                                        </div>



                                        <div class="provider-details">
                                            <a href="javascript:void(0);"
                                                class="ser-provider-name"><?php echo e($doctor->name); ?></a>

                                            <p class="last-seen">


                                                <i class="fas fa-circle"></i> Last Seen: &nbsp;
                                                <?php echo e($doctor->created_at->diffForHumans()); ?>

                                            </p>


                                            <!--<p class="text-muted mb-1">Member Since Sep 2021</p>-->

                                        </div>

                                    </div>

                                    <hr>
                                    <div class="provider-info">
                                        <p class="mb-1"><i class="far fa-envelope mr-1"></i><?php echo e($doctor->email); ?>

                                        </p>
                                        <p class="mb-0"><i class="fas fa-phone-alt mr-1"></i>
                                            <?php echo e($doctor->phone_no); ?> </p>

                                    </div>



                                </div>
                            </div>
                            <br>
                            <div class="card available-widget">

                                <div class="card-body">
                                    <h5 class="card-title">Related Service</h5>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body card m-2 p-2">
                                            <a href="<?php echo e(route('services.find', ['id' => $doctor->id])); ?>">
                                                <?php if($doctor->image): ?>
                                                    <img class="owl-img w-100"
                                                        src="<?php echo e(asset('public/upload/doctor/' . $doctor->image)); ?>"
                                                        style="height:250px; object-fit: cover;">
                                                <?php else: ?>
                                                    <img class="owl-img w-100"
                                                        src="<?php echo e(asset('public/images/doctor.png')); ?>"
                                                        style="height:250px; object-fit: cover;">
                                                <?php endif; ?>
                                            </a>
                                            <span class="img-text text-center">
                                                <h4
                                                    style="margin: 1rem 0; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                    <?php echo e($doctor->name); ?></h4>
                                                <p><?php echo e($doctor->service); ?> </p>
                                                <h6> <?php echo e($doctor->department->name); ?> </h6>
                                                <a href="<?php echo e(route('services.find', ['id' => $doctor->id])); ?>"
                                                    class="btn form-control"
                                                    style="color:#000; background-color: #019444; color:#fff;">Book
                                                    Appointment</a>
                                            </span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="row justify-content-center">
                                <div id="calendar"></div>
                            </div>
                        </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


    </div>
    <!-- Bootstrap Modal -->
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Date Information</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modalDate">Date information will appear here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!--<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth', // Set the initial view
                dateClick: function(info) {
                    var clickedDate = new Date(info.dateStr);
                    var date = formatDate(clickedDate);
                    console.log('dateeeeeee', date);
                    // Get the day of the week (Sunday, Monday, etc.)
                    var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
                        'Saturday'
                    ];
                    var dayOfWeek = daysOfWeek[clickedDate.getDay()];


                    var doctor_id = <?php echo json_encode($doctor->id); ?>;

                    $.ajax({
                        url: '<?php echo e(route('appointment.getAvaiableTime')); ?>', // Replace with the URL of your PHP script
                        method: 'get', // Use GET or POST depending on your server setup
                        data: {
                            dayOfWeek: dayOfWeek,
                            doctor_id: doctor_id,
                            date: date
                        }, // Send the day name to the server
                        success: async function(response) {
                            //megha
                            // const responseObject = JSON.parse(response);
                            console.log(response);
                            console.log('megha data', response.data.status);
                            // Generate dynamic content with the fetched data
                            var newContent = `
                                        <!-- Your new table rows go here -->
                                        <tr>
                                            <td>
                                                ${info.dateStr} <span class="badge badge-warning text-light">Today</span>
                                                
                                                ${response.data.status !== '0' ? await generateButtons(info.dateStr,clickedDate) : ''}
                                            </td>
                                            <td>
                                              <div class="m-1">
                                                ${response.status !== '0' ? (response.data.from ? response.data.from + ' - ' + response.data.to : '<span class="badge badge-info">Not Available</span>') : ''}
                                            </div>
                                            </td>
                                            <td>
                                                <div class="m-1">
                                                        ${response.data.status !== '0' ? await generateButtons(response.data,clickedDate) : ''}
                                                </div>
                                            </td>
                                        </tr>
                                    `;

                            // Replace the table body content
                            replaceTableBody(newContent);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching data:', error);
                        }
                    });
                }
            });

            calendar.render();

            function showPopup(date) {
                $('#myModal').modal('show');

            }

            function replaceTableBody(newContent) {
                var tableBody = document.getElementById('tableBody');
                tableBody.innerHTML = newContent;
            }

            function addMinutes(time, minutes) {
                let [hours, mins] = time.split(':').map(Number);
                hours += Math.floor(minutes / 60);
                mins += minutes % 60;
                return `${hours.toString().padStart(2, '0')}:${mins.toString().padStart(2, '0')}`;
            }

            async function generateButtons(data, clickDate) {

                let buttonsHtml = ''; // Initialize an empty string to store the generated HTML

                // JavaScript equivalent of your PHP for loop
                for (let i = 0; i < 5; i++) {
                    console.log(i)
                    const now = clickDate;
                    const hours = now.getHours().toString().padStart(2,
                        '0'); // Get hours and pad with leading zero if needed
                    const minutes = now.getMinutes().toString().padStart(2, '0');
                    // JavaScript equivalent of your PHP if conditions
                    if (i > 0 && data.to > addMinutes(data.from, i * 60) && now.toLocaleTimeString('en-US', {
                            hour12: false,
                            hour: '2-digit',
                            minute: '2-digit'
                        }) <= addMinutes(data.from, i * 60)) {
                        let time = addMinutes(data.from, i * 60);
                        let date = now.toISOString().slice(0, 10);
                        // let else_app = await (countAppointments(data.doctor_id, time, clickDate));
                        // console.log('else_app', else_app);
                        // if (else_app == 0) {
                        buttonsHtml += `
                                <a class="btn bookThisTime mb-2"
                                    data-time_table_id="${data.id}"
                                    data-id="${data.doctor_id}"
                                    data-date="${formatDate(clickDate)}"
                                    data-time="${time}"
                                    style="background: #00be9c;">
                                    ${time}
                                </a>`;
                        // } else {
                        //     buttonsHtml += `
                    //         <span class="btn btn-danger" title="doctor taken" style="cursor: not-allowed;">
                    //             ${time}
                    //         </span>`;
                        // }
                    }
                }
                console.log('btn', buttonsHtml);
                return buttonsHtml; // Return the generated HTML
            }

            function countAppointments(doctorId, time, date) {
                return new Promise(function(resolve, reject) {
                    $.ajax({
                        url: '<?php echo e(route('test.count')); ?>',
                        type: 'GET',
                        data: {
                            'doctor_id': doctorId,
                            'time': time,
                            'date': formatDate(date)
                        },
                        success: function(data) {
                            console.log('helllllllooooo', data)
                            resolve(data); // Resolve the promise with the retrieved data
                        },
                        error: function(xhr) {
                            reject(xhr); // Reject the promise with the error details
                        }
                    });
                });
            }

            function formatDate(inputDate) {
                const dateObject = new Date(inputDate);

                const year = dateObject.getFullYear();
                const month = (dateObject.getMonth() + 1).toString().padStart(2, '0');
                const day = dateObject.getDate().toString().padStart(2, '0');

                return `${year}-${month}-${day}`;
            }

        });

        $(document).ready(function() {
            $(document).on('click', '.bookThisTime', function() {
                let date = $(this).data('date');
                let time = $(this).data('time');
                let time_id = $(this).data('time_table_id');
                let id = $(this).data('id');

                window.location.href = "<?php echo e(asset('/appoint/doctor?doctor_id=')); ?>" + id + "&date=" + date +
                    "&time=" + time + "&time_table_id=" + time_id;
            });
        })

        $(document).on('click', '.add_to_wishlist', function() {

            <?php if(auth()->user()): ?>

                let product_id = $(this).data('id');
                let url = "<?php echo e(asset('/add-to-wishlist')); ?>";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "product_id": product_id,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            toastr.success(data.message);
                            // alert(data.message);
                            $('#cartTotalCount').html(data.cartCount);
                            $('#wishlistTotalCount').html(data.wishlistCount);
                        } else {
                            toastr.success(data.message);
                            // alert(data.message);
                            console.log(data.message);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            <?php else: ?>

                // $('#userLoginModal').modal('show');
                <?php
                    session()->flash('doctor_id', $doctor->id);
                ?>
                window.location.href = "<?php echo e(url('login')); ?>";
            <?php endif; ?>
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/finddoctor.blade.php ENDPATH**/ ?>