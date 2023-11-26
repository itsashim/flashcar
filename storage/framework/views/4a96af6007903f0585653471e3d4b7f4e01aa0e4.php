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
        
        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0,0,0,.2);
            border-radius: 0.3rem;
            outline: 0;
        }
        
        .modal.show .modal-dialog {
            -webkit-transform: none;
            transform: none;
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

        @media (min-width: 768px) {
            .col-md-6 {
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

            @media (min-width: 768px) {
                .col-md-6 {
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
    </style>
</head>

<body>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success"><?php echo e(session()->get('message')); ?></div>
    <?php endif; ?>

           <form action="<?php echo e(asset('upload-prescription')); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body" style="background-color:#f1f1f9">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-12">

                            <?php if(auth()->user()): ?>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <span><?php echo e(auth()->user()->name); ?></span>
                                </div>
                                <?php if(auth()->user()->phone_no): ?>
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <span><?php echo e(auth()->user()->phone_no); ?></span>
                                </div>
                                <?php else: ?>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <span><?php echo e(auth()->user()->email); ?></span>
                                </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" required>
                                </div>
                            <?php endif; ?>
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <input type="text" name="message" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Delivery Address</label>
                                    <input type="text" name="delivery_address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input type="file" name="path" id="preview_img2" required />
                                    <div id="viewLogo2"></div>
                                </div>
                        </div>
                         <button type="submit" class="btn btn-primary ml-3 m-2" style="background-color:orange">Upload Now</button>
                    </div>
                </div>
            </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.select2').select2();
    </script>

</body>

</html>
<?php /**PATH /home/sansarhealth/public_html/resources/views/upload-prescription.blade.php ENDPATH**/ ?>