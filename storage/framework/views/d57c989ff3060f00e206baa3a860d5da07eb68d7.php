<div class="row">
<?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-12">
    <div id="finddoctors_view"><input type="hidden" id="cid" value="4522"
            data-count="1" data-sync="0">
        <div class="d-sm-flex flex-wrap mb-4 shadow-sm rounded-3 bg-gray-light border doc-list-item">
            <div class="col-md-5 flex-fill">
                <div class="p-3 pb-0 d-xl-flex mb-3 docdetail2029">
                    <div class="text-center">
                        <a href="javascript:void(0);" data-docid="<?php echo e($doctor->id); ?>" data-orgid="614"
                            data-nextavltime="Aug 25 at 7:00 PM" class="d-block doctorprofile">
                            <img class="rounded-circle border-success" src="<?php echo e(asset('public/upload/doctor/'.$doctor->image)); ?>"
                                alt="Dr. Madhur Basnet" style="width: 200px; height:200px;">
                        </a>

                        <div class="d-xl-none">
                            <h6 class="my-2" data-depid="1974" data-docid="<?php echo e($doctor->id); ?>"
                                data-gdepid="14" data-gdocid="623" data-orgid="614"
                                id="doctordetail">Dr. <?php echo e($doctor->name); ?> </h6>
                            <p class="mb-1 pb-2 fs-12"><i
                                    class="bi bi-caret-right-square-fill me-1 text-success"></i>Department : <?php echo e($doctor->department->name); ?>

                            </p>
                            <a data-docid="<?php echo e($doctor->id); ?>" data-orgid="614"
                                data-nextavltime="Aug 25 at 7:00 PM"
                                class="btn btn-sm btn-outline-success small doctorprofile">View
                                Profile <em class="bi bi-chevron-right"></em></a>
                        </div>
                    </div>
                    <div class="ms-3">
                        <input type="hidden" id="newdocid0" value="4522" data-gdocid="2029" data-orgid="614" data-gdepid="81" data-depid="1996">

                        <div class="d-none d-xl-block pb-2">
                            <h5 class="mb-3" data-depid="1974" data-docid="2696"
                                data-gdepid="14" data-gdocid="623" data-orgid="614"
                                id="doctordetail">Dr. <?php echo e($doctor->name); ?> </h5>
                            <!-- <div class="line line-sm ms-0 mb-3"></div> -->
                            <div class="fs-12 ">
                                <p class="mb-2 pb-1"><i
                                        class="bi bi-caret-right-square-fill me-1 text-success"></i>Department: <?php echo e($doctor->department->name); ?>

                                </p>
                                <!-- 				<p class="mb-2 pb-1"><i class="bi bi-caret-right-square-fill me-1 text-success"></i> </p> -->
                                    <p class="mb-2 pb-1">
                                    <i class="bi bi-caret-right-square-fill me-1 text-success"></i>Experience: <?php echo e($doctor->experience); ?>

                                    </p>

                            </div>
                            <a data-docid="<?php echo e($doctor->id); ?>"  class="btn btn-sm btn-outline-success small doctorprofile">View Profile <em class="bi bi-chevron-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 border-start flex-fill bg-white">
                <div id="doctorschedule_4522">
                    <div class="appointment-time-info px-3 pb-3 pt-2">
                        <div class="table-responsive mb-3 mb-xl-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Dr. Available Time</th>
                                        <th scope="col">Available Time</th>
                                    </tr>
                                </thead>
                                <tbody class="small align-middle">
                                    <tr>
                                        <td>
                                                <?php $dayOfWeek = \Carbon\Carbon::now()->dayOfWeek; 
                                                $todayTimeTable = \App\Model\TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek)->first();
                                                $tommorowTimeTable = \App\Model\TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+1)->first();
                                                $dayAfterTommorowTimeTable = \App\Model\TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+2)->first();
                                                
                                                ?>
                                            <div class="m-1"><?php echo e(\Carbon\Carbon::now()->format('Y/m/d')); ?></div>
                                        </td>
                                        <td>
                                            <div class="m-1"><?php echo e($todayTimeTable->from); ?> - <?php echo e($todayTimeTable->to); ?></div>
                                        </td>
                                        <td>
                                            <div class="m-1">
                                                <?php 
                                                    $todayToken = $todayTimeTable->token;
                                                    $tokenTime = 0;
                                                ?>
                                                <?php for($i=0;$i<$todayToken; $i++): ?>
                                                    <?php if($i==0): ?>
                                                        <a class="btn btn-primary bookThisTime" data-id="<?php echo e($doctor->id); ?>" data-date="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" data-time="<?php echo e($todayTimeTable->from); ?>"><?php echo e($todayTimeTable->from); ?></a>
                                                    <?php else: ?>
                                                        <a class="btn btn-primary bookThisTime" data-id="<?php echo e($doctor->id); ?>" data-date="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" data-time="<?php echo e(\Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime+20)->format('H:i')); ?>"><?php echo e(\Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime+20)->format('H:i')); ?></a>
                                                        <?php $tokenTime=$tokenTime+20; ?>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="m-1"><?php echo e(\Carbon\Carbon::now()->addDays(1)->format('Y/m/d')); ?></div>
                                        </td>
                                        <td>
                                            <div class="m-1"><?php echo e($tommorowTimeTable->from); ?> - <?php echo e($tommorowTimeTable->to); ?></div>
                                        </td>
                                        <td>
                                            <div class="m-1">
                                                <?php 
                                                    $tommorrowToken = $tommorowTimeTable->token;
                                                    $tokenTime = 0;
                                                ?>
                                                <?php for($i=0;$i<$tommorrowToken; $i++): ?>
                                                    <?php if($i==0): ?>
                                                        <a class="btn btn-primary bookThisTime" data-id="<?php echo e($doctor->id); ?>" data-date="<?php echo e(\Carbon\Carbon::now()->addDays(1)->format('Y-m-d')); ?>" data-time="<?php echo e($tommorowTimeTable->from); ?>"><?php echo e($tommorowTimeTable->from); ?></a>
                                                    <?php else: ?>
                                                        <a class="btn btn-primary bookThisTime" data-id="<?php echo e($doctor->id); ?>" data-date="<?php echo e(\Carbon\Carbon::now()->addDays(1)->format('Y-m-d')); ?>" data-time="<?php echo e(\Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+20)->format('H:i')); ?>"><?php echo e(\Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+20)->format('H:i')); ?></a>
                                                        <?php $tokenTime=$tokenTime+20; ?>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="m-1"><?php echo e(\Carbon\Carbon::now()->addDays(2)->format('Y/m/d')); ?></div>
                                        </td>
                                        <td>
                                            <div class="m-1"><?php echo e($dayAfterTommorowTimeTable->from); ?> - <?php echo e($dayAfterTommorowTimeTable->to); ?></div>
                                        </td>
                                        <td>
                                            <div class="m-1">
                                                <?php 
                                                    $dayAfterTommorrowToken = $dayAfterTommorowTimeTable->token;
                                                    $tokenTime = 0;
                                                ?>
                                                <?php for($i=0;$i<$dayAfterTommorrowToken; $i++): ?>
                                                    <?php if($i==0): ?>
                                                        <a class="btn btn-primary bookThisTime" data-id="<?php echo e($doctor->id); ?>" data-date="<?php echo e(\Carbon\Carbon::now()->addDays(2)->format('Y-m-d')); ?>" data-time="<?php echo e($dayAfterTommorowTimeTable->from); ?>"> <?php echo e($dayAfterTommorowTimeTable->from); ?> </a>
                                                    <?php else: ?>
                                                        <a class="btn btn-primary bookThisTime" data-id="<?php echo e($doctor->id); ?>" data-date="<?php echo e(\Carbon\Carbon::now()->addDays(2)->format('Y-m-d')); ?>" data-time="<?php echo e(\Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+20)->format('H:i')); ?>"> <?php echo e(\Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+20)->format('H:i')); ?> </a> 
                                                        <?php $tokenTime=$tokenTime+20; ?>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end">
                            <a title="Check Other Schedule Time to take appointment"
                                class="btn fw-semi btn-success doctorapptfulltime rounded w-100"
                                href="#">Check Other Schedule Time to take appointment <em
                                    class="bi bi-arrow-right"></em> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxsitesearch/doctors.blade.php ENDPATH**/ ?>