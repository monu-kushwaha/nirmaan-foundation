
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <!-- #title -->
    <title>Nirmaan Foundation</title>
    <!-- #keywords -->
    <meta name="keywords" content="charity, nonprofit, fundraising, donation, html, bootstrap, scss">
    <!-- #description -->
    <meta name="description" content="Nonprofit & Fundraising Charity Html5 Template">
    <!-- google fonts -->
     <?php 
     
     include 'head.php';
     ?>
 </head>
<body>
   <!--[if lt IE 9]>
      <p class="browserupgrade">
         You are using an <strong>outdated</strong> browser. Please
         <a href="https://browsehappy.com/">upgrade your browser</a> to improve
         your experience and security.
      </p>
      <![endif]-->
   <div class="page-wrapper">
      <!-- ==== preloader start ==== -->
      <div class="preloader">
         <i class="icon-donation"></i>
         <p>CHARIFUND</p>
      </div>
      <!-- ==== / preloader end ==== -->
      <!-- ==== topbar start ==== -->
      <!-- ==== / topbar end ==== -->
      <!-- ==== header start ==== -->
      <?php
      include 'header.php';
      ?>
      <!-- ==== / header end ==== -->
      <!-- ==== mobile menu start ==== -->
      <div class="mobile-menu mobile-menu--primary d-block d-xxl-none">
         <nav class="mobile-menu__wrapper">
            <div class="mobile-menu__header nav-fade">
               <div class="logo">
                  <a href="index.php" aria-label="home page" title="logo">
                     <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/logo.png" alt="Image">
                  </a>
               </div>
               <button aria-label="close mobile menu" class="close-mobile-menu">
                  <i class="fa-solid fa-xmark"></i>
               </button>
            </div>
            <div class="mobile-menu__list"></div>
            <div class="mobile-menu__cta nav-fade d-block d-md-none">
               <a href="donate-us.php" class="btn--primary ">Donate Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="mobile-menu__social social nav-fade">
               <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="facebook">
                  <i class="fa-brands fa-facebook-f"></i>
               </a>
               <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo" title="vimeo">
                  <i class="fa-brands fa-vimeo-v"></i>
               </a>
               <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                  <i class="fa-brands fa-twitter"></i>
               </a>
               <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin" title="linkedin">
                  <i class="fa-brands fa-linkedin-in"></i>
               </a>
            </div>
         </nav>
      </div>
      <div class="mobile-menu__backdrop"></div>
      <!-- ==== / mobile menu end ==== -->
      <!-- ==== search popup start ==== -->
      <div class="search-popup">
         <button class="close-search" aria-label="close search box" title="close search box">
            <i class="fa-solid fa-xmark"></i>
         </button>
         <form action="#" method="post">
            <div class="search-popup__group">
               <input type="text" name="search-field" id="searchField" placeholder="Search...." required>
               <button type="submit" aria-label="search products" title="search products">
                  <i class="fa-solid fa-magnifying-glass"></i>
               </button>
            </div>
         </form>
      </div>
      <!-- ==== / search popup end ==== -->
      <!-- ==== banner section start ==== -->
      <section class="common-banner">
         <div class="container">
            <div class="row">
               <div class="common-banner__content text-center">
                  <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                  <h2 class="title-animation">Donate Us</h2>
               </div>
            </div>
         </div>
         <div class="banner-bg">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/banner/banner-bg.png" alt="Image">
         </div>
         <div class="shape">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/shape.png" alt="Image">
         </div>
         <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sprade-base.png" alt="Image" class="base-img">
         </div>
      </section>
      <!-- ==== / banner section end ==== -->
      <!-- ==== donate us section start ==== -->
      <div class="cm-details donate-us community checkout faq">
         <div class="container">
            <div class="row gutter-60">
               <div class="col-12 col-xl-8">
                  <div class="cm-details__content">
                     <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/event/poster-two.png" alt="Image">
                     </div>
                     <div class="donate-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="cm-group">
                           <h3 class="title-animation">Help Children Rise out of Poverty</h3>
                           <p>Lorem Ipsum is simply dummy a of the printing and type setting industry Loreaim
                              Ipsum has been the industry's standard dummy
                           </p>
                        </div>
                        <div class="cta">
                           <div class="community-donation">
                              <div class="community-donation__inner">
                                 <h5>Support Where It Counts.</h5>
                                 <div class="warning">
                                    <div class="line"><i class="fa-solid fa-triangle-exclamation"></i></div>
                                    <p><strong>Notice:</strong> Test mode is enabled. While in test mode no
                                       live
                                       donations are processed.
                                    </p>
                                 </div>
                                 <div class="donation-form" data-aos-delay="300">
                                    <div class="donation-form__single">
                                       <h5>Your Donation:</h5>
                                       <div class="input-group-icon">
                                          <div class="thumb">
                                             <i class="fa-solid fa-dollar-sign"></i>
                                          </div>
                                          <input type="text" name="donation-amount" id="donationAmount">
                                       </div>
                                       <div class="made-amount">
                                          <span class="donation-amount">20</span>
                                          <span class="donation-amount">50</span>
                                          <span class="donation-amount active">100</span>
                                          <span class="donation-amount">200</span>
                                          <span class="donation-amount custom-amount">Custom</span>
                                       </div>
                                    </div>
                                    <div class="donation-form__single">
                                       <h5>Select Payment Method</h5>
                                       <div class="radio-wrapper">
                                          <div class="radio-single">
                                             <input type="radio" id="testDonation" name="donation-payment" checked>
                                             <label for="testDonation">Test Donation</label>
                                          </div>
                                          <div class="radio-single">
                                             <input type="radio" id="offlineDonation" name="donation-payment" checked>
                                             <label for="offlineDonation">Offline Donation</label>
                                          </div>
                                          <div class="radio-single">
                                             <input type="radio" id="cardDonation" name="donation-payment" checked>
                                             <label for="cardDonation">Credit Card</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="cta">
                                       <a href="donate-us.php" aria-label="donate us" title="donate us"
                                          class="btn--primary">Donate Now <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="checkout__form">
                                 <div class="intro">
                                    <h5>Details Information</h5>
                                 </div>
                                 <form action="index.php" method="post">
                                    <div class="input-group">
                                       <div class="input-single">
                                          <input type="text" name="c-name" id="cName" placeholder="First Name" required>
                                          <i class="fa-solid fa-user"></i>
                                       </div>
                                       <div class="input-single">
                                          <input type="text" name="c-lastname" id="clastName" placeholder="Last Name"
                                             required>
                                          <i class="fa-solid fa-user"></i>
                                       </div>
                                    </div>
                                    <div class="input-group">
                                       <div class="input-single">
                                          <input type="email" name="c-email" id="cEmail" placeholder="Your Email"
                                             required>
                                          <i class="fa-solid fa-envelope"></i>
                                       </div>
                                       <div class="input-single">
                                          <input type="text" name="c-phone" id="cPhone" placeholder="Your Number"
                                             required>
                                          <i class="fa-solid fa-phone"></i>
                                       </div>
                                    </div>
                                    <div class="input-single">
                                       <input type="text" name="c-address-two" id="cAddressTwo"
                                          placeholder="Your Address" required>
                                       <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="input-single alter-input">
                                       <textarea name="contact-message" id="contactMessage"
                                          placeholder="your message..."></textarea>
                                       <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="form-cta">
                                       <button type="submit" aria-label="submit message" title="submit message"
                                          class="btn--primary">Save Informations <i
                                             class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="award">
                     <div class="container">
                        <div class="row gutter-24">
                           <div class="col-12 col-lg-8">
                              <div class="award__single" data-aos="fade-up" data-aos-duration="1000">
                                 <div class="thumb">
                                    <a href="event-details.php">
                                       <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/award/one.png" alt="Image">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-lg-4">
                              <div class="award__single" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="200">
                                 <div class="thumb">
                                    <a href="event-details.php">
                                       <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/award/four.png" alt="Image">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-lg-5">
                              <div class="award__single" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="100">
                                 <div class="thumb">
                                    <a href="event-details.php">
                                       <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/award/two.png" alt="Image">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-lg-7">
                              <div class="award__single" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="300">
                                 <div class="thumb">
                                    <a href="event-details.php">
                                       <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/award/three.png" alt="Image">
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="faq__content-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                     <div class="accordion" id="accordion">
                        <div class="accordion-item">
                           <h6 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 What kind of recipes can I find on your website?
                              </button>
                           </h6>
                           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                 <p>
                                    It is a long established fact that a reader will be distracted by
                                    the readable the a content of a page when looking at its layout.
                                    Many desktop publishing packages and web page editors.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h6 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Are the recipes suitable for beginners?
                              </button>
                           </h6>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                 <p>
                                    It is a long established fact that a reader will be distracted by
                                    the readable the a content of a page when looking at its layout.
                                    Many desktop publishing packages and web page editors.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h6 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Do you offer cooking tips and techniques?
                              </button>
                           </h6>
                           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                 <p>
                                    It is a long established fact that a reader will be distracted by
                                    the readable the a content of a page when looking at its layout.
                                    Many desktop publishing packages and web page editors.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h6 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 How frequently do you update your recipe collection?
                              </button>
                           </h6>
                           <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                 <p>
                                    It is a long established fact that a reader will be distracted by
                                    the readable the a content of a page when looking at its layout.
                                    Many desktop publishing packages and web page editors.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-xl-4">
                  <div class="cm-details__sidebar">
                     <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="intro">
                           <h5>search here</h5>
                        </div>
                        <form action="#" method="post">
                           <input type="text" name="search-product" id="searchProduct" placeholder="Search Here..."
                              required>
                           <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                     </div>
                     <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="intro">
                           <h5>Recent Causes</h5>
                        </div>
                        <div class="cm-sidebar-post">
                           <div class="single-item">
                              <div class="thumb">
                                 <a href="blog-details.php">
                                    <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/ph-one.png" alt="Image">
                                 </a>
                              </div>
                              <div class="content">
                                 <p><i class="fa-solid fa-calendar-days"></i> <span>November 19, 2024</span>
                                 </p>
                                 <p><a href="blog-details.php">Where Innovation Meets Foundation</a>
                                 </p>
                              </div>
                           </div>
                           <div class="single-item">
                              <div class="thumb">
                                 <a href="blog-details.php">
                                    <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/ph-two.png" alt="Image">
                                 </a>
                              </div>
                              <div class="content">
                                 <p><i class="fa-solid fa-calendar-days"></i> <span>November 19, 2024</span>
                                 </p>
                                 <p><a href="blog-details.php">Where Innovation Meets Foundation</a>
                                 </p>
                              </div>
                           </div>
                           <div class="single-item">
                              <div class="thumb">
                                 <a href="blog-details.php">
                                    <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/three.png" alt="Image">
                                 </a>
                              </div>
                              <div class="content">
                                 <p><i class="fa-solid fa-calendar-days"></i> <span>November 22, 2024</span>
                                 </p>
                                 <p><a href="blog-details.php">Structures That Stand,
                                       Dreams That Soar</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="intro">
                           <h5>Tags</h5>
                        </div>
                        <div class="tag-wrapper">
                           <a href="shop.php">t-shirt</a>
                           <a href="shop.php">Banner Design</a>
                           <a href="shop.php">Brochures</a>
                           <a href="shop.php">Landing</a>
                           <a href="shop.php">Print</a>
                           <a href="shop.php">Business Card</a>
                        </div>
                     </div>
                     <div class="cm-sidebar-overview" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="cm-logo">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/event/logo.png" alt="Image">
                        </div>
                        <div class="cm-content">
                           <p>Small Donations Bigger Impact</p>
                           <h4>Education Health
                              for Every Child
                           </h4>
                        </div>
                        <div class="cm-cta">
                           <a href="contact-us.php" aria-label="contact us" title="contact us" class="btn--primary">
                              Get A Quote <i class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                        <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/event/overview.png" alt="Image" class="parallax-image">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== / donate us section end ==== -->
      <!-- ==== footer start ==== -->
      <?php include 'footer.php' ?>
      <!-- ==== / footer end ==== -->
      <!-- ==== custom cursor start ==== -->
      <div class="mouseCursor cursor-outer"></div>
      <div class="mouseCursor cursor-inner"></div>
      <!-- ==== / custom cursor end ==== -->
      <!-- ==== scroll to top start ==== -->
      <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
         <span></span>
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </button>
      <!-- ==== / scroll to top end ==== -->
      <!-- ==== color switcher start ==== -->
      
      <!-- ==== / color switcher end ==== -->
   </div>
   <!-- ==== js dependencies start ==== -->
   <!-- jquery -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/jquery-3.7.1.min.js"></script>
   <!-- bootstrap five js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/bootstrap.bundle.min.js"></script>
   <!-- nice select js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/jquery.nice-select.min.js"></script>
   <!-- magnific popup js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/jquery.magnific-popup.min.js"></script>
   <!-- swiper slider js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/swiper-bundle.min.js"></script>
   <!-- viewport js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/viewport.jquery.js"></script>
   <!-- odometer js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/odometer.min.js"></script>
   <!-- vanilla tilt js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/vanilla-tilt.min.js"></script>
   <!-- aos js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/aos.js"></script>

   <!-- splittext js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/SplitText.min.js"></script>
   <!-- scrollto js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/ScrollToPlugin.min.js"></script>
   <!-- scrolltrigger js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/ScrollTrigger.min.js"></script>
   <!-- gsap js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/gsap.min.js"></script>
   <!-- ==== / js dependencies end ==== -->
   <!-- template settings js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/template-settings.js"></script>
   <!-- main js -->
   <script src="https://wowtheme7.com/tf/charifund/charifund/assets/js/custom.js"></script>
</body>

</html>