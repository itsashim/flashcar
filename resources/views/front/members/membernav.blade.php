<style>
    .bg-site {
        background-color: #ffe500 !important;
    }

    .bg-site ul>li>a {
        color: black !important;
        font-size: 1.1rem;
        font-weight: 600;

    }


    .container {
        padding: unset !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-site">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav container">
            <li class="nav-item @if ($page == 'myaccount')  @endif">
                <a class="nav-link" href="{{ asset('myaccount') }}">My Account </span></a>
            </li>
            <li class="nav-item @if ($page == 'myappointments')  @endif">
                <a class="nav-link" href="{{ asset('myappointments') }}">Car Rent Histories</a>
            </li>
            {{-- <li class="nav-item @if ($page == 'addbike')  @endif">
                <a class="nav-link" href="{{ asset('addbike') }}">Add Bike</a>
            </li> --}}
            {{-- <li class="nav-item @if ($page == 'mypurchases')  @endif">
                <a class="nav-link" href="{{ asset('mypurchases') }}">My Purchased Products</a>
            </li> --}}
            {{-- <li class="nav-item @if ($page == 'mysubscriptions')  @endif">
                <a class="nav-link" href="{{ asset('mysubscriptions') }}">My Subscription History</a>
            </li> --}}
            {{--
                <li class="nav-item @if ($page == 'myprescriptions')  @endif">
                    <a class="nav-link" href="{{ asset('myprescriptions') }}">My Prescriptions History</a>
                </li>
            --}}
            <li class="nav-item @if ($page == 'my-wishlists')  @endif">
                <a class="nav-link" href="{{ asset('my-wishlists') }}">My Wishlist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ asset('userlogout') }}">Logout</a>
            </li>
        </ul>
    </div>
</nav>
