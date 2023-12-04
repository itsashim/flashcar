<!doctype html>
<html lang="en">

<head>
    <title>Flash Car</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Owl carousel CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- league spartan -->
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <!-- Plus Jakarta -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
        <!-- Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">
    <!--Google fonts End-->
    <link rel="stylesheet" href="{{ asset('public/style.css') }}">
    <style>
        .help-block{
            color: red;
        }
    </style>


    @yield('styles')

</head>

<body>

    @include('front.layout.partials.header')

    @yield('content')


    @if (url()->current() == url('/'))
        {{-- Footer for desktop --}}
    {{--    <footer class="desktop d-none d-md-block">
            <div class="foot">

                <div class="foot_img d-sm-flex">
                    <img src="{{ asset('public/new-images/footer-img.png') }}" alt="footer">
                </div>

                <div class="foot_text ms-auto d-flex justify-content-between ">
                    <div>
                        <a href="#">+91-9876543210</a>
                        <button class="btn btn-primary mt-3 btn-vendor" type="button">Register As Vendor</button>
                    </div>
                    <div>
                        <h6 class="text-white text-end">Follow US</h6>
                        <a href="#"><i class="fa-brands fa-twitter me-2"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook me-2"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram me-2"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>

                </div>
            </div>
        </footer> --}}
        {{-- footer for desktop end --}}


            {{-- footer for mobile --}}

        {{--    <footer class="mobile d-block d-md-none">
                <div class="foot-mobile">
                    <div class="foot_img_mbl d-sm-flex justify-content-center">
                        <img src="{{ asset('public/new-images/New Project.png') }}" alt="footer">
                    </div>

                    <div class="foot_text ms-auto mt-3">
                        <div class="footer-logo">
                            <a class="d-flex justify-content-center" href="{{ url('/') }}"><img
                                    src="{{ asset('public/new-images/main-logo.png') }}" alt="Logo"></a>
                        </div>
                        <hr>
                        <div class="footer_enqury">
                            <h4 class="text-white mb-3 text-center">Business Enquire</h4>
                            <form class="mb-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputName"
                                        aria-describedby="emailHelp" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputCompany"
                                        placeholder="Company">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="exampleInputPhone"
                                        placeholder="Mobile Number">
                                </div>
                                <button type="submit" class="btn mx-auto">Submit</button>
                            </form>
                        </div>
                        <div class="footer_menu_section mt-3 mb-3">
                            <div class="footer-menu">
                                <div class="menu_text">
                                    <h5>About</h5>
                                </div>
                                <ul>
                                    <li><a href="#">How it works</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Partnership</a></li>
                                    <li><a href="#">Business Relation</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <div class="menu_text">
                                    <h5>Help</h5>
                                </div>
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Services</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>

                        <section class="newsletter mb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="content">
                                            <h2>Join Our Newsletter</h2>
                                            <div class="input-group">
                                                <input type="email" class="form-control newsletter"
                                                    placeholder="Your email address">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Subscribe</button>
                                                </span>
                                            </div>
                                            <p>* Will send you weekly updates for your better tool management.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>

                </div>
            </footer> --}}

            {{-- footer for mobile end --}}
    @else
        {{-- Conditional Footer --}}
      {{--  <footer class="px-5">
            <div class="footer_ d-flex justify-content-around flex-wrap">
                <div class="bottom">
                    <img src="{{ asset('public/new-images/main-logo.png') }}" />
                    <p>
                        Our vision is to provide convenience<br />
                        and help increase your sales business.
                    </p>
                </div>

                <div class="Bot d-flex flex-wrap">
                    <div class="C1">
                        <h5>About</h5>
                        <a href="#">How it works</a><br />
                        <a href="#">Features</a><br />
                        <a href="#">Partnership</a><br />
                        <a href="#">Bussiness Relation</a>
                    </div>

                    <div class="C2">
                        <h5>Community</h5>
                        <a href="#">Event</a><br />
                        <a href="#">Blog</a><br />
                        <a href="#">Posdcast</a><br />
                        <a href="#">Invite a friend</a>
                    </div>

                    <div class="C3">
                        <h5>Social</h5>
                        <a href="#">Discord</a><br />
                        <a href="#">Instagram</a><br />
                        <a href="#">Twitter</a><br />
                        <a href="#">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="footer_divider  my-3"></div>
            <div class="d-flex flex-wrap justify-content-center justify-content-md-between gap-3" style="margin: 0 5%">
                <p>©2022 MORENT. All rights reserved</p>
                <div class="d-flex gap-3">
                    <p>Privacy & Policy</p>
                    <p>Terms & Condition</p>
                </div>
            </div>
        </footer> --}}
        {{-- Conditional Footer End --}}
    @endif

        <div class="foot_img d-sm-flex" style="transform: translate(0,0)">
            <img class="lg-img" src="{{ asset('public/new-images/footer-img.png') }}" alt="footer">
            <img class="lg-img android_img" src="{{ asset('public/new-images/andriod-footer-fone.png') }}" alt="footer">
            <img class="sm-img" src="{{ asset('public/new-images/New Project.png') }}" alt="footer">
        </div>

1
        {{-- Conditional Footer --}}
        <footer class="px-5 pb-3">
            <div class="footer_ d-flex justify-content-around flex-wrap">
                <div class="bottom">
                    <img src="{{ asset('public/new-images/main-logo.png') }}" />
                    <p>
                        Our vision is to provide convenience<br />
                        and help increase your sales business.
                    </p>
                     <a href="{{asset('/register-vendor')}}" class="btn btn_1 mt-3 btn-vendor border-0" >Register As Vendor</a>
                </div>

                <div class="Bot d-flex flex-wrap">
                    <div class="C1">
                        <h5>About</h5>
                        <a href="#">How it works</a><br />
                        <a href="#">Features</a><br />
                        <a href="#">Partnership</a><br />
                        <a href="#">Bussiness Relation</a>
                    </div>

                    <div class="C2">
                        <h5>Community</h5>
                        <a href="#">Event</a><br />
                        <a href="#">Blog</a><br />
                        <a href="#">Posdcast</a><br />
                        <a href="#">Invite a friend</a><br />
                        <a href="{{asset('/register-vendor')}}">Become a vendor</a><br />
                        <a href="{{asset('/admin')}}">Vendor's Login</a>
                    </div>

                    <div class="C3">
                        <h5>Social</h5>
                        <a href="#">Discord</a><br />
                        <a href="#">Instagram</a><br />
                        <a href="#">Twitter</a><br />
                        <a href="#">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="footer_divider  my-3"></div>
            <div class="d-flex flex-wrap justify-content-center justify-content-md-between gap-3" style="margin: 0 5%">
                <p>©2022 MORENT. All rights reserved</p>
                <div class="d-flex gap-3 Bot">
                    <a href="{{ url('/privacypolicy') }}">Privacy & Policy</a>
                    <a href="{{ url('/termcondition') }}">Terms & Condition</a>
                </div>
            </div>
        </footer>
        {{-- Conditional Footer End --}}


    </div>

  {{--  <div class="modal fade" id="vendorModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Register as vendor</h5>
                    <button type="button" class="btn btn-sm btn-danger close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="vendorForm" method="POST" action="{{ asset('vendor/register') }}" enctype="multipart/form-data">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                            <span id="error_name"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone_no">Phone</label>
                            <input type="text" name="phone_no" class="form-control">
                            <span id="error_phone_no"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                            <span id="error_email"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                            <span id="error_password"></span>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control">
                            <span id="error_confirm_password"></span>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            @php $countries = \App\Country::all(); @endphp
                            <select id="countryID" name="country_id" class="form-control">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country )
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <select id="cityID" name="city_id" class="form-control">
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="passport">Passport</label>
                            <input type="file" name="passport" class="form-control">
                            <span id="error_passport"></span>
                        </div>
                        <div class="form-group">
                            <label for="driver_license">Driver License</label>
                            <input type="file" name="driver_license" class="form-control">
                            <span id="error_driver_license"></span>
                        </div>
                        <div class="form-group">
                            <label for="national_id_card">National Id Card</label>
                            <input type="file" name="national_id_card" class="form-control">
                            <span id="error_national_id_card"></span>
                        </div>
                        <div class="form-group">
                            <label for="residence_permit">Residence Permit</label>
                            <input type="file" name="residence_permit" class="form-control">
                            <span id="error_residence_permit"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="sumbit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


    <!-- Jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Jquery End -->

    <!--Owl carousel js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')

    <script>
        $('#popular_car-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                650: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1200: {
                    items: 4
                }

            }
        })

        $('#service_card').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            items: 1
        })

        $('.recommend_car-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                650: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1200: {
                    items: 4
                }

            }
        })

        $('#img_carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                650: {
                    items: 1
                },
                1024: {
                    items: 1
                },
                1200: {
                    items: 1
                }

            }
        })
    </script>

    <!--Nav Scripts-->
    <script>
        $(document).ready(function() {

            // Hamburger menu
            const hamMenu = $(".ham_menu");
            const navSideCenter = $(".nav_side");

            // User Modal Open Close
            const userProfile = $(".user_profile");
            const profileModal = $(".profile_modal");
            const userProfileSm = $(".user_profile_sm");


            // currency
            const currency = $(".currency");
            const currency_modal = $('.currency_modal');

            // Toggle sidebar when hamburger menu is clicked
            hamMenu.click(function() {
                navSideCenter.toggleClass("hide");
            });

            userProfile.each(function() {
                $(this).click(function() {
                    profileModal.toggleClass("hide");
                });
            });


            currency.on("click", function(){
                currency_modal.toggleClass("hide")
            });


            // Close sidebar when clicked outside
            $(document).click(function(event) {
                const isClickInsideSidebar = $.contains(navSideCenter[0], event.target);
                const isHamburgerClicked = $.contains(hamMenu[0], event.target);

                if (!isClickInsideSidebar && !isHamburgerClicked) {
                    navSideCenter.addClass('hide');
                }

                const isClickInsideUserProfile = $(event.target).closest('.user_profile').length > 0;
                const isClickInsideProfileModal = $.contains(profileModal[0], event.target);

                // Check if click was outside user_profile and profile_modal and profile_modal is not hidden
                if (!isClickInsideUserProfile && !isClickInsideProfileModal && !profileModal.hasClass(
                        'hide')) {
                    profileModal.addClass('hide');
                }

                // Currency
                const isCur = $(event.target).closest('.currency').length > 0;
                const isCurModal = $.contains(currency_modal[0], event.target);

                // Check if click was outside user_profile and profile_modal and profile_modal is not hidden
                if (!isCur && !isCurModal && !currency_modal.hasClass(
                        'hide')) {
                    currency_modal.addClass('hide');
                }

            });

            // Prevent sidebar from closing when clicked inside
            navSideCenter.click(function(event) {
                event.stopPropagation();
            });

            // Prevent profile modal from closing when clicked inside
            profileModal.click(function(event) {
                event.stopPropagation();
            });

            currency_modal.click(function(event) {
                event.stopPropagation();
            });

            $('#vendorForm').on('submit', function(e) {
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
                        if (data.status == true) {
                            toastr.success(data.message);
                            $('#vendorForm')[0].reset();
                            $('#vendorModal').modal('hide');
                        } else {
                            toastr.error(data.message);
                        }
                    },
                    error: function(xhr) {
                        var i = 0;
                        $('.help-block').remove();
                        $('.has-error').removeClass('has-error');
                        for (var error in xhr.responseJSON.errors) {
                            $('#add_' + error).removeClass('has-error');
                            $('#add_' + error).addClass('has-error');
                            $('#error_' + error).html(
                                '<span class="help-block ' + error + '">*' + xhr
                                .responseJSON.errors[
                                    error] + '</span>');
                            i++;
                        }
                    }
                });
            });

        });

        $(document).on('click', '.login_url', function() {
            window.location.href = "{{ asset('login') }}";
        });

        $(document).on('click', '.contact_us_url', function() {
            window.location.href = "{{ asset('contact_us') }}";
        });

        $(document).on('click', '.register_url', function() {
            window.location.href = "{{ asset('register') }}";
        });

        $(document).on('click','.btn-vendor',function(){
            $('#vendorModal').modal('show');
        });

        $(document).on('click','.close',function(){
            $('.modal').modal('hide');
        });

        $('#countryID').on('change',function(){

            let country_id = $(this).val();

            let url = "{{ asset('get-city') }}";

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "country_id": country_id,
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#cityID').empty();
                        $('#cityID').append('<option value="">Select City</option>');
                        $.each(data.cities ,function(key,value){
                            $('#cityID').append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    } else {
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });

        $('#countryID').change();


    </script>
</body>

</html>
