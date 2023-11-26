<?php $__env->startSection('styles'); ?>
    <style>
        body {
            background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Open Sans", sans-serif;
            color: #333333;
        }

        .box-form {
            margin: 3rem auto;
            width: 80%;
            background: #FFFFFF;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex: 1 1 100%;
            align-items: stretch;
            justify-content: space-between;
            box-shadow: 0 0 20px 6px #090b6f85;
        }

        label::before {
            height: 1.4rem;
        }

        @media (max-width: 980px) {
            .box-form {
                flex-flow: wrap;
                text-align: center;
                align-content: center;
                align-items: center;
            }
        }

        .box-form div {
            height: auto;
        }

        .box-form .left {
            color: #FFFFFF;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("<?php echo e(url('public/login_image.jpg')); ?>");
            overflow: hidden;
        }

        .box-form .left .overlay {
            padding: 30px;
            width: 100%;
            height: 100%;
            background: #5961f9ad;
            overflow: hidden;
            box-sizing: border-box;
        }

        .box-form .left .overlay h1 {
            font-size: 6vmax;
            line-height: 1;
            font-weight: 900;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .box-form .left .overlay span p {
            margin-top: 30px;
            font-weight: 900;
        }

        .box-form .left .overlay span a {
            background: #3b5998;
            color: #FFFFFF;
            margin-top: 10px;
            padding: 10px 35px;
            border-radius: 100px;
            display: inline-block;
            box-shadow: 0 3px 6px 1px #042d4657;
        }

        .box-form .left .overlay span a:last-child {
            background: #1dcaff;
            margin-left: 30px;
        }

        .box-form .right {
            padding: 40px;
            overflow: hidden;
        }

        @media (max-width: 980px) {
            .box-form .right {
                width: 100%;
            }
        }

        .box-form .right h5 {
            font-size: 6vmax;
            /* line-height: 0; */
        }

        .box-form .right p {
            font-size: 14px;
            color: #B0B3B9;
        }

        .box-form .right .inputs {
            overflow: hidden;
        }

        .box-form .right input {
            width: 100%;
            padding: 10px;
            margin-top: 25px;
            font-size: 16px;
            border: none;
            outline: none;
            border-bottom: 2px solid #B0B3B9;
        }

        .box-form .right .remember-me--forget-password {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .box-form .right .remember-me--forget-password input {
            margin: 0;
            margin-right: 7px;
            width: auto;
        }

        .box-form .right button {
            float: right;
            color: #fff;
            font-size: 16px;
            padding: 12px 35px;
            border-radius: 50px;
            display: inline-block;
            border: 0;
            outline: 0;
            box-shadow: 0px 4px 20px 0px #49c628a6;
            background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);
        }

        @media  screen and (max-width: 980px) {
            .box-form .right button {
                float: none;
            }
        }


        label {
            display: block;
            position: relative;
            margin-left: 30px;
        }

        label::before {
            content: ' \f00c';
            position: absolute;
            font-family: FontAwesome;
            background: transparent;
            border: 3px solid #70F570;
            border-radius: 4px;
            color: transparent;
            left: -30px;
            transition: all 0.2s linear;
        }

        label:hover::before {
            font-family: FontAwesome;
            content: ' \f00c';
            color: #fff;
            cursor: pointer;
            background: #70F570;
        }

        label:hover::before .text-checkbox {
            background: #70F570;
        }

        label span.text-checkbox {
            display: inline-block;
            height: auto;
            position: relative;
            cursor: pointer;
            transition: all 0.2s linear;
        }

        label input[type="checkbox"] {
            display: none;
        }

        @media  screen and (max-width: 520px) {
            .box-form .left .overlay span a:last-child {
                margin-left: 0;
            }
        }

        /* Login Page End */
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Login Body -->
    <!-- partial:index.partial.html -->
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>Sansar Health</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur et est sed felis aliquet sollicitudin</p>
                <span>
                    
                </span>
            </div>
        </div>


        <div class="right">
            <h5>Forgot Password</h5>
            <p>Don't have an account? <a href="<?php echo e(url('register')); ?>">Create Your Account</a> it takes less than a minute or
                <a href="<?php echo e(url('login')); ?>">Login</a> from here</p>

                <div id="errorMessage" style="color:#ff0000;"></div>

                <div class="inputs" id="step1">
                    <input id="email" type="email" name="email" placeholder="Enter your email id" class="form-control">
                </div>
                <div class="inputs hide" id="step2">
                    <input id="code" type="text" name="code" placeholder="Enter your Token" class="form-control">
                </div>
                <div class="inputs hide" id="step3">
                    <input id="password" type="password" name="password" placeholder="Enter your Password" class="form-control">
                    <input id="c_password" type="password" name="c_password" placeholder="Confirm Password" class="form-control">
                </div>
                <br><br>
                <button type="button" class="btn btn-primary" id="requestResetPassword">Request Password Token</button>
                <button type="button" class="btn btn-primary hide" id="verifyResetPassword">Verify Token</button>
                <button type="button" class="btn btn-primary hide" id="setResetPassword">Set Password</button>
                <div id="step4" class="hide">
                    <a class="btn btn-primary" href="<?php echo e(url('login')); ?>">Password Reset successfully please click here to login</a>
                </div>
        </div>

    </div>
    <!-- Login End -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(function() {

            $('#requestResetPassword').on('click', function() {
                let email = $('#email').val();
                let url = "<?php echo e(asset('forgot-password')); ?>";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "email": email,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            alert(data.message);
                            $('#errorMessage').empty();
                            $('#step1').addClass('hide');
                            $('#step2').removeClass('hide');
                            $('#requestResetPassword').addClass('hide');
                            $('#verifyResetPassword').removeClass('hide');
                        } else {
                            alert(data.message);

                        }
                    },
                    error: function(xhr) {
                        for (var error in xhr.responseJSON.errors) {
                            $('#errorMessage').html('<span class="help-block ' + error + '">*' + xhr.responseJSON.errors[error] + '</span>');
                        }
                    }
                });
            });

            $('#verifyResetPassword').on('click', function() {
                let url = "<?php echo e(asset('verify-token')); ?>";
                let email = $('#email').val();
                let code = $('#code').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "email": email,
                        "code":code,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            alert(data.message);
                            $('#errorMessage').empty();
                            $('#step1').addClass('hide');
                            $('#step2').addClass('hide');
                            $('#step3').removeClass('hide');
                            $('#requestResetPassword').addClass('hide');
                            $('#verifyResetPassword').addClass('hide');
                            $('#setResetPassword').removeClass('hide');

                        } else {
                            alert(data.message);

                        }
                    },
                    error: function(xhr) {
                        for (var error in xhr.responseJSON.errors) {
                            $('#errorMessage').html('<span class="help-block ' + error + '">*' + xhr.responseJSON.errors[error] + '</span>');
                        }
                    }
                });
            });
            
            $('#setResetPassword').on('click', function() {
                let url = "<?php echo e(asset('update-password')); ?>";
                let email = $('#email').val();
                let code = $('#code').val();
                let password = $('#password').val();
                let c_password = $('#c_password').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "email": email,
                        "code": code,
                        "password": password,
                        "c_password": c_password,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            alert(data.message);
                            $('#errorMessage').empty();
                            $('#step1').addClass('hide');
                            $('#step2').addClass('hide');
                            $('#step3').addClass('hide');
                            $('#requestResetPassword').addClass('hide');
                            $('#verifyResetPassword').addClass('hide');
                            $('#setResetPassword').addClass('hide');
                            $('#step4').removeClass('hide');

                        } else {
                            alert(data.message);
                        }
                    },
                    error: function(xhr) {
                        for (var error in xhr.responseJSON.errors) {
                            $('#errorMessage').html('<span class="help-block ' + error + '">*' + xhr.responseJSON.errors[error] + '</span>');
                        }

                    }
                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/pages/forgot.blade.php ENDPATH**/ ?>