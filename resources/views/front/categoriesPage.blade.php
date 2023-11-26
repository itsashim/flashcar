@extends('front.layout.front')
   <!-- owl carousel -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
      integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
@section('title')
    {{ __('messages.Department') }}
@stop

@section('styles')
<style>
    .ViewAllBtn {
        padding: 7px 10px;
        border: 2px solid #c7c7c7;
        color:#000;
        border-radius:5px
    }
    
    .ViewAllBtn:hover {
        background: #00be9c;
        color:#fff;
    }

    .viewAllDesktop {
        display:block;
    }
    
    .viewAllMobile {
        display:none;
    }
    
    .pricing-part-box__p  {
        /*white-space: nowrap; */
        /*overflow: hidden;*/
        /*text-overflow: ellipsis; */
        
            display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: justify;
    }
    
    .mobile-view,
    .mobile-view2 {
        display: flex;
        align-items: center;
    }
    
    .owl-item .item {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 1rem;
    }
    
    /* modal */
    .department_select span {
        min-width: 16% !important;
    }
    /* modal end */
    
    /* become a seller */
    @media screen and (max-width:425px) {
        .mobile-view {
            flex-direction: column-reverse;
            text-align: center;
        }
        
        .mobile-view2 {
            flex-direction:column;
            text-align:center;
        }
        
        .seller-img {
            height: 200px;
            width: 300px;
        }
        
    }
    /* become a seller end */
    
    /* Tablet */
    @media screen and (min-width: 575px) and (max-width: 991px) {

        .owl-img{
            width: 223px;
            height: 226px;
        }

    }

    /* mobile */
    @media screen and ( max-width: 575px) {
        .owl-img{
            width: 290px;
            height: 290px;
        }
        
        /**/
        .viewAllDesktop {
            display:none;
        }
        .viewAllMobile {
            display:block;
            text-align: center;
        }
        
        /* mobile app */
        .mobile-app {
            text-align:center;
        }
        /* mobile app end */

    }

    /* laptop */
    @media screen and ( min-width: 992px) {

        .owl-img{
            width: 240px;
            height: 240px;
        }

    }
    
    @media screen and (max-width:767px) {
        .col-reverse {
            flex-direction: column-reverse;
        }
    }

    /* app download */
    @media screen and (min-width: 768px) and (max-width: 991px)
    {
        .scanqr {
            width: 100% !important;
        }
    }
    
    @media screen and (max-width:767px) {
        .img-fluid {
            height:150px;
        }
        
        .app-qr__bottom {
            width:150px;
        }
        
        .download-text {
            font-size:1.5rem;
        }
    }
    /* app download end */

</style>
@endsection

@section('content')
    <!--new categories section -->
    <section class="categories_sec container">
      <div class="categories_wrapper">
        <div class="row mb-3">
                <div class="col-lg-8 col-md-8 aos-init aos-animate" data-aos="zoom-in" style="    border-left: 7px solid #00be9c;">
                    <h2 style="    color: #0f4a86 !important; font-size:32px; font-weight:bold;">Categories</h2>
                    <p class="m-0">Services  available in following categories</p>
                </div>

                <div class="col-lg-4 col-md-4 text-lg-right pb-sm-20 pt-3 aos-init aos-animate viewAllDesktop" data-aos="zoom-in">
                    <a href="{{ asset('categoriesPage') }}" class="ViewAllBtn">View All Categories &nbsp;
                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        <div
          class="categories owl-carousel owl-theme owl-carousel_prev_next"
          id="owl-demo2"
        >
          <div class="item">
            <div class="categories_img_div">
              <img
                class="categories_img"
                src="https://servpro.dreamguystech.com/uploads/category_images/service-01_150_150.jpg"
                alt="White air-conditioner"
              />
            </div>
            <h4 class="categories_h4">AC Service & Repair</h4>
          </div>
          <div class="item">
            <div class="categories_img_div">
              <img
                class="categories_img"
                src="https://servpro.dreamguystech.com/uploads/category_images/service-01_150_150.jpg"
                alt="White air-conditioner"
              />
            </div>
            <h4 class="categories_h4">Education Service</h4>
          </div>
          <div class="item">
            <div class="categories_img_div">
              <img
                class="categories_img"
                src="https://servpro.dreamguystech.com/uploads/category_images/service-03_150_150.jpg"
              />
            </div>
            <h4 class="categories_h4">System technicians</h4>
          </div>
          <div class="item">
            <div class="categories_img_div">
              <img
                class="categories_img"
                src="https://servpro.dreamguystech.com/uploads/category_images/service-04_150_150.jpg"
              />
            </div>
            <h4 class="categories_h4">Pet Care</h4>
          </div>
          <div class="item">
            <div class="categories_img_div">
              <img
                class="categories_img"
                src="https://servpro.dreamguystech.com/uploads/category_images/system-service_150_150.jpg"
              />
            </div>
            <h4 class="categories_h4">Electricians</h4>
          </div>
          <div class="item">
            <div class="categories_img_div">
              <img
                class="categories_img"
                src="https://servpro.dreamguystech.com/uploads/category_images/service-01_150_150.jpg"
                alt="White air-conditioner"
              />
            </div>
            <h4 class="categories_h4">Plumber Service</h4>
          </div>
          <div class="item">
            <div class="categories_img_div">
              <img
                class="categories_img"
                src="https://servpro.dreamguystech.com/uploads/category_images/service-01_150_150.jpg"
                alt="White air-conditioner"
              />
            </div>
            <h4 class="categories_h4">Gardener Service</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- categories section end -->

@stop

@section('scripts')
<!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/5cfe83b03e.js"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap cdn -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- owl carosel cdn -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- owl carousel js -->
    <script>
            $("#owl-demo2").owlCarousel({
                loop: true,
                autoplay: 1000,
                autoPlaySpeed: 1000,
                slideSpeed : 100,
                paginationSpeed : 400,
                items : 6,
                responsive:{
                    0:{
                        items:1,
                    },
                    400:{items: 2},

                    700:{items: 3},

                    800:{
                        items:4
                    },
                    1100:{
                        items:6
                    }
                 }


            });

      var owl = $(".owl-carousel_prev_next");
      // owl.owlCarousel();
      $(".next-btn").click(function () {
      	owl.trigger("next.owl.carousel");
      });
      $(".prev-btn").click(function () {
      	owl.trigger("prev.owl.carousel");
      });
      $(".prev-btn").addClass("disabled");
    </script>

@endsection
