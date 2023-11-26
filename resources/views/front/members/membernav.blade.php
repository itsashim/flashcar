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
        <li class="nav-item @if($page=="myaccount") active @endif">
          <a class="nav-link" href="{{ asset('myaccount') }}">My Account </span></a>
        </li>
        <li class="nav-item @if($page=="myappointments") active @endif">
          <a class="nav-link" href="{{ asset('myappointments') }}">Booking Histories</a>
        </li>
       <li class="nav-item @if($page=="addbike") active @endif">
          <a class="nav-link" href="{{ asset('addbike') }}">Add Bike</a>
        </li>
        <li class="nav-item @if($page=="mypurchases") active @endif">
          <a class="nav-link" href="{{ asset('mypurchases') }}">My Purchased Products</a>
        </li>
        <li class="nav-item @if($page=="mysubscriptions") active @endif">
          <a class="nav-link" href="{{ asset('mysubscriptions') }}">My Subscription History</a>
        </li>
    {{--    <li class="nav-item @if($page=="myprescriptions") active @endif">
          <a class="nav-link" href="{{ asset('myprescriptions') }}">My Prescriptions History</a>
        </li>--}}
        <li class="nav-item @if($page=="my-wishlists") active @endif">
          <a class="nav-link" href="{{ asset('my-wishlists') }}">My Wishlist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('userlogout') }}">Logout</a>
        </li>
      </ul>
    </div>
</nav>