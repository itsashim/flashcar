<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
    </style>
</head>

<body>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form id="appliedHealthForm" action="<?php echo e(asset('applied-health-partner')); ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-header" data-aos="zoom-in" style="margin-top: 0px;background-color:#00be9c;">
            <h5 class="modal-title">Become a Health Partner</h5>
        </div>
        <div class="row hide" id="alertSectionAHP">
            <div class="col-sm-12">
                <div class="alert" id="alertMsgAHP"></div>
            </div>
        </div>
        <div class="modal-body" id="bodySectionAHP" data-aos="zoom-in" style="background-color:#f1f1f9">
            <?php echo csrf_field(); ?>

            <div class="row">

                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="healthpartnername" class="form-label fw-semi">Health Partner Name <span
                            class="text-primary">*</span></label>
                    <input type="text" class="form-control" id="healthpartnername" name="health_partner_name"
                        placeholder="Enter your Health Partner Name">
                </div>
                <!--column-->
                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="firstname" class="form-label fw-semi">First Name <span
                            class="text-primary">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        placeholder="Enter First Name">
                </div>
                <!--column-->
                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="lastname" class="form-label fw-semi">Last Name <span
                            class="text-primary">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        placeholder="Enter Last Name">
                </div>
                <!--column-->


                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="mobileno" class="form-label fw-semi">Phone Number <span class="text-primary">*</span>
                    </label>
                    <input type="number" class="form-control" id="mobileno" name="phone"
                        onkeypress="validatePhoneNumber(6)" maxlength="10" pattern="[1-9]{1}[0-9]{9}"
                        placeholder="Enter your Phone Number">
                </div>
                <!--column-->
                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="email" class="form-label fw-semi">Email <span class="text-primary">*</span></label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter your Email Address">
                </div>

                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="password" class="form-label fw-semi">Password <span
                            class="text-primary">*</span></label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your Password">
                </div>
                <!--column-->

                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="partnerdistrictid" class="form-label fw-semi">City<span
                            class="text-primary">*</span></label>
                    <select name="city_id" class="form-control select2" required>
                        <option selected disabled>Select City</option>
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="address" class="form-label fw-semi">Address<span class="text-primary">
                            *</span></label>
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="Enter your  Address">
                </div>
                <!--column-->
                
                <!--column-->
                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="type" class="form-label fw-semi">Upload Document<span class="text-primary">
                            *</span></label>
                    <input type="file" id="file" name="document" class="form-control">
                </div>
                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <label for="type" class="form-label fw-semi">Upload Logo

                        <input type="file" id="file" name="logo" class="form-control">
                </div>
                <!--column-->
                <div class="col-md-6 mb-3" data-aos="zoom-in">
                    <img src="" id="previmage" name="previmage" style="display:none">
                </div>
            </div>
            <button type="submit" class="btn becomepartnerBtn mt-3 ms-2 me-3" id="formsubmitBtn"
                style="background-color:#00be9c; color: white;">
                Become a Health Partner
            </button>
        </div>
        <div class="modal-footer">
           <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
            </button>
        </div>
    </form>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script>
    $('#appliedHealthForm').on('submit',function(e){
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
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
         
        
                $('#alertSectionAHP').removeClass('hide');
                $('#bodySectionAHP').addClass('hide');
                 $('#alertMsgAHP').html(data.message);
                  // $('#alertMsgAHP').append(data."<button>Close</button>");
                $('#alertMsgAHP').addClass('alert-success');
                $('#alertSectionAHP').each(function(){
   
                
                if(data.status==true){
                    $('#appliedHealthForm')[0].reset();
                }
            },
            error:function(xhr){
                let errorMessage = "<div class='alert alert-danger'><ul>";
                $.each(xhr.responseJSON.errors,function(k,v){
                    errorMessage = "<li>"+errorMessage + v + '</li>';
                });
                errorMessage =  errorMessage + "</ul></div>";
                $('#alertSectionAHP').removeClass('hide');
                $('#alertMsgAHP').html(errorMessage);
            }
        });
    });
</script>
</html><?php /**PATH /home/sansarhealth/public_html/resources/views/become-a-health-partner.blade.php ENDPATH**/ ?>