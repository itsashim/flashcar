<?php $__env->startSection('title'); ?>
    about-us
<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<style>
    .ViewAllBtn {
        padding: 7px 10px;
        border: 2px solid #c7c7c7;
        color:#000;
        border-radius:5px
    }
    
    .ViewAllBtn:hover {
        background: #019444;
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
        /*box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;*/
        padding: 1rem;
    }
    
    /* modal */
    .department_select span {
        min-width: 16% !important;
    }
    /* modal end */
    
    /* become a seller */
    @media  screen and (max-width:425px) {
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
    @media  screen and (min-width: 575px) and (max-width: 991px) {

        .owl-img{
            width: 223px;
            height: 226px;
        }

    }

    /* mobile */
    @media  screen and ( max-width: 575px) {
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
    @media  screen and ( min-width: 992px) {

        .owl-img{
            width: 240px;
            height: 240px;
        }

    }
    
    @media  screen and (max-width:767px) {
        .col-reverse {
            flex-direction: column-reverse;
        }
    }

    /* app download */
    @media  screen and (min-width: 768px) and (max-width: 991px)
    {
        .scanqr {
            width: 100% !important;
        }
    }
    
    @media  screen and (max-width:767px) {
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
<?php $__env->stopSection(); ?>

    <!-- owl carousel -->
    

<?php $__env->startSection('content'); ?>
<!-- Why choose us Section -->
    <section class="choose_sec">
      <div class="choose_wrapper">
        <div class="choose_wrapper_left">
          <div>
            <h2 class="heading_two">Why  Choose Wheels On Palms?</h2>
            <p>
            Wheels On Palms is a concept of young and enthusiastic people who are always
            in search and development of country & upliftment of the society. This
            concept is mainly win the trust of its customers/consumers, through their
            product & services. This concept was brought forward after Research and
            penetration. in the society. The service sector in the society is very poor and
            frustrating & because people are often been cheated or not satisfied. with
            the service provided. The "Wheels On Palms" "concept was forwarded by the the
            developers to bring the several services under one roof and with qualified
            service providers/technicians.
            </p>
            <!--<button class="choose_btn">Join As Seller</button>-->
          </div>
        </div>
        <div class="choose_wrapper_right">
          <div class="service_div">
            <div class="service_img_div">
              <img
                class="service_img"
                src="https://bytesed.com/laravel/qixer/assets/uploads/media-uploader/m41641985855.png"
                alt=""
              />
            </div>
            <h3>Trust and Quality</h3>
            <p>
           The app typically features reviews and ratings from previous customers, helping customers make informed choices & trust of the services they're booking.
            </p>
          </div>

          <div class="service_div">
            <div class="service_img_div">
              <img
                class="service_img"
                src="https://bytesed.com/laravel/qixer/assets/uploads/media-uploader/m11641985855.png"
                alt=""
              />
            </div>
            <h3>Ease of Payment</h3>
            <p>
              Integrated payment gateways make it easy for customers to pay for services without dealing with cash transactions.
            </p>
          </div>
          <div class="service_div">
            <div class="service_img_div">
              <img
                class="service_img"
                src="https://bytesed.com/laravel/qixer/assets/uploads/media-uploader/m21641985855.png"
                alt=""
              />
            </div>
            <h3>Security and Transparency:</h3>
            <p>
                The platform often handles payment processing enhancing security & transparency for both customers & service providers.
            </p>
          </div>
          <div class="service_div">
            <div class="service_img_div">
              <img
                class="service_img"
                src="https://bytesed.com/laravel/qixer/assets/uploads/media-uploader/m31641985855.png"
                alt=""
              />
            </div>
            <h3>Scheduling:</h3>
            <p>
             Customers can view the availability of service providers & schedule appointments that fit their own schedules.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Why choose us Section End-->
    <!-- testimonial section -->
    <section class="testimonial_sec">
      <div class="testimonial_wrapper">
        <div class="testimonial_img_div">
          <img
            class="testimonial_img"
            src="https://www.cymolthemes.com/html/mrhandy/air-conditioner/images/bg-image/col-bgimage-5.jpg"
            alt=""
          />
        </div>
        <div class="testimonial_content">
          <h5 class="testimonial_subhead">testimonials</h5>
          <h2 class="testimonial_head">Happy Client's Say About Our Company</h2>
          <p>
            Experience how easy it is to get hire sate, quality professional to
            solve all your service and installation need. Look what they say!
          </p>
        </div>
        <div class="testimonial_div">
          <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="testimonial item">
              <h3>Wonderful Experience</h3>
              <blockquote>
                They were very thorough and did not mind answering my questions
                about the new units. I will recommend One Hour Heating & Air
                Conditioning to my friends. I enjoyed the crew and the teamwork
                they displayed was unmatched.
              </blockquote>
              <div class="client_div">
                <div class="client_info">
                  <div class="star">
                    <i class="star_icon fa fa-star"></i>
                    <i class="star_icon fa fa-star"></i>
                    <i class="star_icon fa fa-star"></i>
                    <i class="star_icon fa fa-star"></i>
                    <i class="star_icon fa fa-star"></i>
                  </div>
                  <h3>Dev Singh</h3>
                  <p>Web</p>
                </div>
                <div class="client_img_div">
                  <img
                    class="client_img"
                    src="https://square-vn.com/app/dscms/assets/images/person-4.jpg?v=1653932875"
                    alt=""
                  />
                </div>
              </div>
            </div>

            <div class="testimonial item">
              <h3>Wonderful Experience</h3>
              <blockquote>
                They were very thorough and did not mind answering my questions
                about the new units. I will recommend One Hour Heating & Air
                Conditioning to my friends. I enjoyed the crew and the teamwork
                they displayed was unmatched.
              </blockquote>
              <div class="client_div">
                <div class="client_info">
                  <div class="star">
                    <i class="star_icon fa fa-star"></i>
                    <i class="star_icon fa fa-star"></i>
                    <i class="star_icon fa fa-star"></i>
                    <i class="star_icon fa fa-star"></i>
                    <i class="star_icon fa fa-star"></i>
                  </div>
                  <h3>Ashim Rai</h3>
                  <p>Web Developer</p>
                </div>
                <div class="client_img_div">
                  <img
                    class="client_img"
                    src="https://square-vn.com/app/dscms/assets/images/person-4.jpg?v=1653932875"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- testimonial section end -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- owl carosel cdn -->
   
    <script>
            $(document).ready(function() {

       $("#owl-demo").owlCarousel({
           loop: true,
           autoplay: 1000,
           autoPlaySpeed: 1000,
           slideSpeed : 100,
           paginationSpeed : 400,
           items : 1,
       });

      });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/wheelonpalms.shahbazali.website/resources/views/front/about-us.blade.php ENDPATH**/ ?>