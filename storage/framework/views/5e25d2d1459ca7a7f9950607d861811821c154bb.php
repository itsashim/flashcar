<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Subscription')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<style>
    .card-header{
        background-color: #20748f !important;
        color: white;
    }
    .card-title{
        color: white;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
    $res_curr = explode('-', $setting->currency);
    
    ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <?php
    if (Session::get('payment_done')) {
        $cs = 'block';
    } else {
        $cs = 'none';
    }
    ?>
    <div class="modal" id="ssuccess" style="display:<?= $cs ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="ssuccess-main-box">
                        <div class="success-icon">
                            <img src="<?php echo e(asset('public/upload/correct.png')); ?>">
                        </div>
                        <div class="success-bottom-part">
                            <div class="success-heading">
                                <h3><?php echo e(__('messages.Subscription successfully')); ?></h3>
                            </div>
                            <div class="success-des">
                                <p><?php echo e(__('messages.sublin1')); ?> </p>
                                <p><?php echo e(__('messages.sublin2')); ?></p>
                            </div>
                            <div class="success-buttons-main-box">
                                <div class="success-buttons">
                                    <a href="<?php echo e(url('chatarea/1')); ?>"
                                        onclick="closemode()"><?php echo e(__('messages.lets chat')); ?></a>
                                </div>
                                <div class="success-buttons">
                                    <a onclick="closemode()" target="_blank"
                                        href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo e($setting->email); ?>&su=Package <?php echo e($subscription->name); ?> &body=<?php echo e($subscription->description); ?>"><?php echo e(__('messages.Send email')); ?></a>
                                </div>
                                <div class="success-buttons">
                                    <button type="button"><?php echo e(__('messages.Call')); ?> (<?php echo e($setting->phone_no); ?>)</button>
                                </div>
                                <div class="success-buttons">
                                    <a href="<?php echo e(url('/')); ?>"><?php echo e(__('messages.Visit Hospital')); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="success-close-button">
                            <button type="button" class="btn btn-secondary"
                                onclick="closemode()"><?php echo e(__('messages.Ok Great')); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ssuccess-background-black">
        </div>
    </div>
    <div class="d-detailpg-main-box">
        <div class="container">
            <div class="global-heading">
                <p style="text-align: justify;"><?php echo e($subscription->description); ?></p>
            </div>
            <div class="d-detailpg-part-main-box">
                <div class="row">
                    <div class="col-md-8">
                        <?php if(session('success_msg')): ?>
                            <div class="alert alert-success fade in alert-dismissible show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <?php echo e(session('success_msg')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(session('error_msg')): ?>
                            <div class="alert alert-danger fade in alert-dismissible show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <?php echo e(session('error_msg')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="container">
                            <div id="accordion" class="accordion">
                                 
                                <div class="card mb-4">
                                    <?php if(Auth::id()): ?>
                                        <div class="card-header collapsed" href="#collapseOne">
                                            <a class="card-title">
                                                <?php echo e(Auth::user()->name); ?>

                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <div class="card-header" href="#collapseOne">
                                            <a class="card-title">
                                                <?php echo e(__('messages.Returning Patient')); ?> <span class="sublogin">
                                                    <?php echo e(__('messages.Click here to login')); ?></span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Auth::id()): ?>
                                        <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                                        <?php else: ?>
                                            <div id="collapseOne" class="card-body collapse collapse in"
                                                data-parent="#accordion">
                                    <?php endif; ?>
                                    <div class="part-form-main-box">
                                        <form method="post" action="<?php echo e(url('userlogin')); ?>" class="btnsaveoption">
                                            <?php echo e(csrf_field()); ?>

                                            <span id="login_error" class="dangerrequired"></span>
                                            <input type="text" class="modelemail" name="email"
                                                placeholder="<?php echo e(__('messages.Enter Your Email')); ?>" id="login_email">
                                            <span id="login_email_error" class="dangerrequired"></span>
                                            <input type="password" id="login_password" name="password"
                                                placeholder="<?php echo e(__('messages.Enter Your Password')); ?>">
                                            <span id="login_password_error" class="dangerrequired"></span>
                                            <div class="btnsublogin">
                                                <button type="submit" class="btneee"><?php echo e(__('messages.Login')); ?></button>
                                            </div>
                                        </form>
                                        <p><?php echo e(__("messages.Don't have an account?")); ?> <a href=""
                                                onclick="showregmodel()" data-toggle="modal"
                                                data-target="#myModal"><?php echo e(__('messages.Register Now')); ?></a></p>
                                    </div>
                                </div>
                                <?php if(Auth::id()): ?>
                                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo">
                                    <?php else: ?>
                                        <div class="card-header collapsed" data-parent="#accordion" href="#collapseTwo">
                                <?php endif; ?>
                                <a class="card-title">
                                    <?php echo e(__('messages.Payment Information')); ?>

                                </a>
                            </div>
                            <?php if(Auth::id()): ?>
                                <div id="collapseTwo" class="card-body collapse collapse show" data-parent="#accordion">
                                <?php else: ?>
                                    <div id="collapseTwo" class="card-body collapse show" data-parent="#accordion">
                            <?php endif; ?>

                            <div class="part-form-main-box">
                                <?php
                                    $months = [1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec'];
                                ?>
                                <form>
                                    <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($p->id == 2): ?>
                                            <div class="radio" class="subradio">
                                                <input id="radio-<?php echo e($p->id); ?>" name="payment" type="radio"
                                                    value="<?php echo e($p->id); ?>" onclick="showbrain('1')">
                                                <label for="radio-<?php echo e($p->id); ?>" class="radio-label">
                                                    <img src="<?php echo e(asset('public/upload/payment/') . '/' . $p->Image); ?>"
                                                        id="visa" class="payimg">
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <?php if($p->id == 1): ?>
                                            <div class="radio" class="subradio">
                                                <input id="radio-<?php echo e($p->id); ?>" name="payment" type="radio"
                                                    value="<?php echo e($p->id); ?>" data-toggle="modal"
                                                    data-target="#autoization" onclick="showbrain('0')">
                                                <label for="radio-<?php echo e($p->id); ?>" class="radio-label">
                                                    <img src="<?php echo e(asset('public/upload/payment/') . '/' . $p->Image); ?>"
                                                        id="visa" class="payimg">
                                                </label>
                                            </div>
                                        <?php endif; ?>

                                        <?php if($p->id == 3): ?>
                                            <div class="radio subradio">
                                                <input id="radio-<?php echo e($p->id); ?>" name="payment" type="radio"
                                                    value="<?php echo e($p->id); ?>">
                                                <label for="radio-<?php echo e($p->id); ?>" class="radio-label"
                                                    id="codPayment">
                                                    <img src="<?php echo e(asset('public/upload/payment/') . '/' . $p->Image); ?>"
                                                        class="payimg" style="width:180px">
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-0">
                <div class="card-header">
                    <?php echo e(__('messages.Cart Details')); ?>

                </div>
                <div class="card-body">
                    <div>
                        <label><?php echo e(__('messages.Package Name')); ?></label>
                        <span class="floatright" id="packagename"><?php echo e($subscription->name); ?></span>
                    </div>
                    <div>
                        <label><?php echo e(__('messages.Price')); ?></label>
                        <span class="floatright"><?php echo e($res_curr[1]); ?><span
                                id="packageprice"><?php echo e($subscription->price); ?></span></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div id="codModal" class="modal" tabindex="-1" role="dialog">
      <form action="<?php echo e(asset('subscription/cod/store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Continue with cash on Delivery?</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="text" style="display: none;" name="subscription_id" value="<?php echo e($subscription->id); ?>" />
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Continue</button>
            </div>
          </div>
        </div>
      </form>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="https://js.braintreegateway.com/web/dropin/1.23.0/js/dropin.min.js"></script>
<script>
    var form = document.querySelector('#payment-form');
    var client_token = "<?php echo e($token); ?>";

    braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
        paypal: {
            flow: 'vault'
        }
    }, function(createErr, instance) {
        if (createErr) {
            console.log('Create Error', createErr);
            return;
        }
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            instance.requestPaymentMethod(function(err, payload) {
                if (err) {
                    console.log('Request Payment Method Error', err);
                    return;
                }

                // Add the nonce to the form and submit
                document.querySelector('#nonce').value = payload.nonce;
                form.submit();
            });
        });
    });

    $('#codPayment').on('click', function() {
        $('#codModal').modal('show');
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/showorderpage.blade.php ENDPATH**/ ?>