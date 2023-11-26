<?php $__env->startSection('content'); ?>
    <!-- start -->
    <div class="container">


        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h2 class="mb-4 mt-4" style="font-weight: 600">Hospitals List</h2>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="input-group mb-4 mt-4">
                    <input type="text" class="form-control" name="hospital_name" id="hospitalName"
                        placeholder="Hospital Name" style="height: 38px; font-size: 14px" />
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2" style="font-size: 14px">Search</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-sm-6">
                <select class="float-right form-control mb-4 mt-4" id="cityID" style="height: 38px; font-size: 14px">
                    <option value="">Select City</option>
                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if(request()->city_id == $city->id): ?> selected="selected" <?php endif; ?> value="<?php echo e($city->id); ?>">
                            <?php echo e($city->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-6" style="display:none;">
                <select name="department_id" id="department_id" class="form-control mt-4 mb-4">
                    <option class="pd_first" value="">Filter by Department</option>
                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if(isset(request()->department_id) && $department->id == request()->department_id): ?> selected="selected" <?php endif; ?> value="<?php echo e($department->id); ?>"
                            class="pd_tld">
                            <?php echo e($department->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="row" id="hospitallistbox">
            <?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="doctor-card col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="border border-success rounded shadow p-2 mb-2" style="text-align: center">
                        <a href="<?php echo e(asset('hospital/' . $hospital->slug)); ?>">
                            <?php if($hospital->logo): ?>
                                <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4"
                                    src="<?php echo e(asset('public' . $hospital->logo)); ?>" alt="">
                            <?php else: ?>
                                <img style="width: 100px; height: 100px; border-radius: 50%" class="mt-4"
                                    src="<?php echo e(asset('public/images/hospital.png')); ?>" alt="" />
                            <?php endif; ?>
                        </a>

                        <p class="text-center text-capitalize mt-4" style="font-size: 22px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            <?php echo e($hospital->name); ?>

                        </p>
                        <p class="text-center text-uppercase text-success" style="font-size: 1rem">
                            <?php echo e(isset($hospital->city) ? $hospital->city->name : $hospital->city_id); ?>

                        </p>

                        <a href="<?php echo e(asset('hospital/' . $hospital->slug)); ?>"
                            class="btn bg-lightgreen text-light text-uppercase rounded-3">
                            book an appontment
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php echo e($hospitals->links()); ?>

    </div>

    <!-- end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(function() {

            function filterHospital(){

                let name = $('#hospitalName').val();
                let city_id = $('#cityID').val();
                let department_id = $('#department_id').val();
                let url = "<?php echo e(asset('hospitallist/search/view')); ?>";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "name": name,
                        "city_id":city_id,
                        "department_id":department_id,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            $('#hospitallistbox').html(data.data);
                        } else {
                            console.log('error');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            }

            $('#cityID').on('change', function() {
                filterHospital();
            });
            
            $('#department_id').on('change', function() {
                filterHospital();
            });

            $('#hospitalName').on('keyup', function() {
                filterHospital();
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/pages/hospitallist.blade.php ENDPATH**/ ?>