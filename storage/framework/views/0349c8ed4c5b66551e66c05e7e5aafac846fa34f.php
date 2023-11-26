<style>
    .bg-site{
        background-color: #25819e !important;
    }
    .bg-site ul>li>a{
      color: rgb(255, 255, 255)!important;
    }
    #navbarNav>ul>.active>a{
      color: floralwhite!important;
    }
    #navbarNav>ul>.active{
      border-bottom: 1px solid white;
    }
    .container {
        padding: unset !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-site">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav container">
        <li class="nav-item <?php if($page=="myaccount"): ?> active <?php endif; ?>">
          <a class="nav-link" href="<?php echo e(asset('myaccount')); ?>">My Account </span></a>
        </li>
        <li class="nav-item <?php if($page=="myappointments"): ?> active <?php endif; ?>">
          <a class="nav-link" href="<?php echo e(asset('myappointments')); ?>">Booking Histories</a>
        </li>
       <li class="nav-item <?php if($page=="addbike"): ?> active <?php endif; ?>">
          <a class="nav-link" href="<?php echo e(asset('addbike')); ?>">Add Bike</a>
        </li>
        <li class="nav-item <?php if($page=="mypurchases"): ?> active <?php endif; ?>">
          <a class="nav-link" href="<?php echo e(asset('mypurchases')); ?>">My Purchased Products</a>
        </li>
        <li class="nav-item <?php if($page=="mysubscriptions"): ?> active <?php endif; ?>">
          <a class="nav-link" href="<?php echo e(asset('mysubscriptions')); ?>">My Subscription History</a>
        </li>
    
        <li class="nav-item <?php if($page=="my-wishlists"): ?> active <?php endif; ?>">
          <a class="nav-link" href="<?php echo e(asset('my-wishlists')); ?>">My Wishlist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(asset('userlogout')); ?>">Logout</a>
        </li>
      </ul>
    </div>
</nav><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/front/members/membernav.blade.php ENDPATH**/ ?>