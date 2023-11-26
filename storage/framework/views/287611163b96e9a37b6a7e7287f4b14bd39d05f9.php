<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .modal-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem;
            border-bottom: 1px solid #e9ecef;
            border-top-left-radius: 0.3rem;
            border-top-right-radius: 0.3rem;
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .modal-title {
            margin: 0;
            line-height: 1.5;
        }

        h5,
        .h5 {
            font-size: 1.25rem;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            margin-bottom: 0.5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }

        .modal-header .close {
            padding: 1rem;
            margin: -1rem -1rem -1rem auto;
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
        }

        button.close {
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
            -webkit-appearance: none;
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
        }

        .modal-body {
            padding: 30px;
        }

        .modal-body {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem;
        }

        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        @media (min-width: 768px) .col-md-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width: 768px) .col-md-6 {
            float: left;
            width: 50%;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        .text-primary {
            color: #007bff !important;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .modal-footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 1rem;
            border-top: 1px solid #e9ecef;
        }

        .mt-3,
        .my-3 {
            margin-top: 1rem !important;
        }

        .float-right {
            float: right !important;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        body {

            margin-top: -11rem;

        }
        }

        @media (min-width: 330px) {
            .become-a-doctor {
                width: 90% !important;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form id="appliedDoctorForm" action="<?php echo e(asset('applied-doctor')); ?>" method="POST"
                enctype="multipart/form-data">
                <div class="modal-header" style="margin-top: 182px;background-color:#00be9c;">
                    <h5 class="modal-title">Become a Doctor</h5>
                </div>
                <div class="row hide" id="alertSectionDF">
                    <div class="col-sm-12">
                        <div class="alert" id="alertMsgDF">   </div>
                    </div>
                </div>

                <div class="modal-body" id="bodySectionDF" style="background-color:#f1f1f9">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstname" class="form-label fw-semi">Name <span
                                    class="text-primary">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Name" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="mobileno" class="form-label fw-semi">Phone Number <span
                                    class="text-primary">*</span> </label>
                            <input type="number" class="form-control" id="mobileno" name="phone_no"
                                onkeypress="validatePhoneNumber(6)" maxlength="10" pattern="[1-9]{1}[0-9]{9}"
                                placeholder="Enter your Phone Number" required>
                        </div>
                        <!--column-->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label fw-semi">Email <span
                                    class="text-primary">*</span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Email Address">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label fw-semi">Password <span
                                    class="text-primary">*</span></label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter password">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="partnerdistrictid" class="form-label fw-semi">Nmc Number<span
                                    class="text-primary">*</span></label>
                            <input type="text" class="form-control" name="nmc" placeholder="Enter Your NmcNO">
                        </div>
                        <!--column-->
                        <div class="col-md-6 mb-3">
                            <label for="partnervdcid" class="form-label fw-semi">Experienced Year<span
                                    class="text-primary"> *</span></label>
                            <input type="text" class="form-control" name="experience"
                                placeholder="Enter Your Experienced Year">

                            </select>
                        </div>
                        <!--column-->
                        <div class="col-md-6 mb-3">
                            <label for="department_id" class="form-label fw-semi">Specialist<span class="text-primary">
                                    *</span></label>
                            <select name="department_id" class="form-control" required>
                                <option selected disabled>Select Specialist</option>
                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!--column-->

                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label fw-semi">Qualification<span class="text-primary">
                                    *</span></label>
                            <input type="text" class="form-control" id="address" name="qualification"
                                placeholder="Select Qualification">
                        </div>
                        <!--column-->
                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label fw-semi">Currently Working at<span
                                    class="text-primary"> *</span></label>
                            <select class="form-control" id="work_type" name="work_type">
                                <option value="lab">Lab</option>
                                <option value="clinic">PolyClinic</option>
                                <option value="pharmacy">Pharmacy</option>
                            </select>
                        </div>
                        
                           
                    </div>
                    <button type="submit" class="btn mt-3 ms-2 me-3" id="formsubmitBtn"
                        style="background-color:#00be9c; color: white;">
                        Become a Doctor
                         
                    </button>
                </div>
                <div class="modal-footer" style="background-color:#00be9c; height: 50px;">
                </div>
            </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script>
    $('#appliedDoctorForm').on('submit', function(e) {
        e.preventDefault();
        let url = $(this).attr('action');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                console.log('ajax fired');
            },
            success: function(data) {
                $('#alertSectionDF').removeClass('hide');
                // $('#bodySectionDF').addClass('hide');
                $('#alertMsgDF').html(data.message);
                $('#alertMsgDF').addClass('alert-success');
                if (data.status == true) {
                    $('#appliedDoctorForm')[0].reset();
                }
            },
            error: function(xhr) {
                let errorMessage = "<div class='alert alert-danger'><ul>";
                $.each(xhr.responseJSON.errors, function(k, v) {
                    errorMessage = "<li>" + errorMessage + v + '</li>';
                });
                errorMessage = errorMessage + "</ul></div>";
                $('#alertSectionDF').removeClass('hide');
                $('#alertMsgDF').html(errorMessage);
            }
        });
    });
</script>

</html>
<?php /**PATH /home/sansarhealth/public_html/resources/views/become-a-doctor.blade.php ENDPATH**/ ?>