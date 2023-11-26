<!doctype html>
<html class="no-js" lang="en">
   <head>
       
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin login</title>
      <meta name="description" content="<?php echo e(__('messages.meta_description_admin')); ?>">
      <meta name="title" content="<?php echo e(__('messages.meta_title_admin')); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta property="og:type" content="website"/>
      <meta property="og:url" content="<?php echo e(url('/')); ?>"/>
      <meta property="og:title" content="<?php echo e(__('messages.site name')); ?>"/>
      <meta property="og:image" content="<?php echo e(asset('public/App_icon.png')); ?>"/>
      <meta property="og:image:width" content="250px"/>
      <meta property="og:image:height" content="250px"/>
      <meta property="og:site_name" content="<?php echo e(__('messages.site name')); ?>"/>
      <meta property="og:description" content="<?php echo e(__('messages.meta_description_admin')); ?>"/>
      <meta property="og:keyword" content="<?php echo e(__('messages.meta_keyword')); ?>"/>
      <link rel="apple-touch-icon" href="apple-icon.png">
      <link rel="shortcut icon" href="<?php echo e(asset('public/App_icon.png')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('public/adesign/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('public/adesign/vendors/font-awesome/css/font-awesome.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('public/adesign/vendors/themify-icons/css/themify-icons.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('public/adesign/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('public/adesign/vendors/selectFX/css/cs-skin-elastic.css')); ?>">
      <?php if(Session::get("is_rtl")==""||Session::get("is_rtl")=='1'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/adesign/assets/css/style.css')); ?>">
      <?php else: ?>
      <link rel="stylesheet" href="<?php echo e(asset('public/adesign/assets/css/rtl.css?v=2')); ?>">
      <?php endif; ?>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body class="bg-dark" onload="gettimezone()">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-logo">
                  <img src="https://sansarhealth.com/public/upload/images/638996222fe35.png" alt="">
                  <a href="#">
                     <h3 style="color: rgb(10, 227, 10);">Please Login to continue</h3>
                  </a>
               </div>
               <div class="login-form">
                  <div id="respond" class="comment-respond">
                     <?php if(Session::has('message')): ?>
                     <div class="col-sm-12">
                        <div class="alert  <?php echo e(Session::get('alert-class', 'alert-info')); ?> alert-dismissible fade show" role="alert"><?php echo e(Session::get('message')); ?>

                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                     </div>
                     <?php endif; ?>
                  </div>
                  <form action="<?php echo e(url('admin/postlogin')); ?>" method="post">
                     <?php echo e(csrf_field()); ?>      
                     <input type="hidden" name="type" value="<?php echo e($type); ?>"/>         
                     <div class="form-group">
                        <label><?php echo e(__('messages.Email')); ?></label>
                         <?php if($type==3): ?>
                        <input type="email" class="form-control" name="email"  id="email" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Email')); ?>">
                        <?php else: ?>
                        <input type="email" class="form-control" name="email"  id="email" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Email')); ?>">
                        <?php endif; ?>
                     </div>
                     <div class="form-group">
                         <?php if($type==3): ?>
                        <label><?php echo e(__('messages.Password')); ?></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Password')); ?>" >
                        <?php else: ?>
                         <input type="password" class="form-control" name="password" id="password" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Password')); ?>" >
                        <?php endif; ?>
                     </div>
                     
                     <div class="form-group">
                         <a href="<?php echo e(route('forgot.password')); ?>">Forgot Password</a>
                     </div>
                     
                     <div class="checkbox">
                        <label>
                        <input type="checkbox" id="rem_me" name="rem_me" value="1" <?php echo isset($_COOKIE['rem_me']) ? "checked" : ''; ?>> <?php echo e(__('messages.Remember Me')); ?>

                        </label>                                    
                     </div>
                     <?php if($type==2): ?>
                         <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button>  
                         <!--<a href="<?php echo e(url('doctor/')); ?>" class="btn btn-secondary btn-flat m-b-30 m-t-30 signin" ><?php echo e(__('messages.Doctors').' '.__('messages.Sign in')); ?></a> -->
                     <?php else: ?>
                         <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button>  
                         <!--<a href="<?php echo e(url('admin/')); ?>" class="btn btn-secondary btn-flat m-b-30 m-t-30 signin"><?php echo e(__('messages.Admin').' '.__('messages.Sign in')); ?></a> -->
                     <?php endif; ?>
                                                
                  </form>
               </div>
            </div>
         </div>
      </div>
      <input type="hidden" id="site_url" value="<?php echo e(url('/')); ?>" />
      <script src="<?php echo e(asset('public/adesign/vendors/jquery/dist/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('public/adesign/vendors/popper.js/dist/umd/popper.min.js')); ?>"></script>
      <script src="<?php echo e(asset('public/adesign/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
      <script src="<?php echo e(asset('public/adesign/assets/js/main.js')); ?>"></script>       
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="<?php echo e(asset('public/adesign/vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="<?php echo e(asset('public/js/admin.js?v=88')); ?>"></script>
      
      <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
            integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
        </script>
        <script src="<?php echo e(asset('public/select2/js/select2.min.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   </body>
</html><?php /**PATH /home/flashcarsrental.com/public_html/resources/views/admin/login.blade.php ENDPATH**/ ?>