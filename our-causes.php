
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- required meta -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- #favicon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
   <!-- #title -->
   <title>Charifund | Nonprofit NGO Fundraising HTML5 Template</title>
   <!-- #keywords -->
   <meta name="keywords" content="charity, nonprofit, fundraising, donation, html, bootstrap, scss">
   <!-- #description -->
   <meta name="description" content="Nonprofit NGO Fundraising HTML5 Template">
   <?php include 'head.php'; ?>
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
      <div class="topbar topbar--secondary d-none d-lg-block">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="topbar__inner">
                     <div class="row align-items-center">
                        <div class="col-12 col-lg-6 col-xxl-4">
                           <div class="topbar__list-wrapper">
                              <ul class="topbar__list">
                                 <li><a href="mailto:support@example.com"><i
                                          class="fa-regular fa-envelope"></i>support@example.com</a>
                                 </li>
                                 <li><a href="tel:2305-587-3407"><i class="fa-solid fa-phone"></i>+2(305)
                                       587-3407</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-12 col-xxl-4 d-none d-xxl-block">
                           <div class="topbar__extra text-center">
                              <p><i class="icon-heart-hand"></i> Are you ready to help them? Let's become a
                                 volunteer!
                              </p>
                           </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xxl-4">
                           <div class="topbar__items justify-content-end">
                              <div class="select-currency">
                                 <select name="currency" class="currency-select select">
                                    <option value="usd">USD</option>
                                    <option value="gbp">GBP</option>
                                    <option value="aud">AUD</option>
                                    <option value="euro">Euro</option>
                                 </select>
                              </div>
                              <div class="select-country">
                                 <select name="country" class="country-select select">
                                    <option data-flag="fi-gb-eng">English</option>
                                    <option data-flag="fi-us">Spanish</option>
                                    <option data-flag="fi-cn">Chinese</option>
                                    <option data-flag="fi-it">Italian</option>
                                 </select>
                              </div>
                              <div class="social">
                                 <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                                    title="facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                 </a>
                                 <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo"
                                    title="vimeo">
                                    <i class="fa-brands fa-vimeo-v"></i>
                                 </a>
                                 <a href="https://x.com/" target="_blank" aria-label="share us on twitter"
                                    title="twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                 </a>
                                 <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                                    title="linkedin">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== / topbar end ==== -->
      <!-- ==== header start ==== -->
      <?php include 'header.php'; ?>
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
                  <h2 class="title-animation">Our Causes</h2>
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
      <!-- ==== cause slider section start ==== -->
      <section class="cause cause-three-alt">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-md-8 col-xl-7">
                  <div class="section__header mb-60 text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                     <h2 class="title-animation">Be the reason of someone
                        <span>smiles</span> Causes
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row gutter-30">
               <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                  <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000">
                     <div class="cause__slider-single van-tilt">
                        <div class="thumb">
                           <a href="cause-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/one.png" alt="Image">
                           </a>
                           <div class="tag">
                              <a href="our-causes.php">Health</a>
                           </div>
                        </div>
                        <div class="content">
                           <h6><a href="cause-details.php">Children we work with</a></h6>
                           <p>Lorem ipsum dolor sit amet, consete
                              sadipscing elitr, sed diam nonum
                           </p>
                        </div>
                        <div class="cause__slider-cta">
                           <div class="cause__progress progress-bar-single">
                              <div class="cause-progress__intro">
                                 <p><span>Donation</span>
                                    <span class="percent-value">85%</span>
                                 </p>
                              </div>
                              <div class="cause-progress__bar">
                                 <div class="progress-bar-wrapper" data-percent="85%">
                                    <div class="progress-bar">
                                       <div class="progress-bar-percent">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cause-progress__goal">
                                 <p>Raised: <span class="raised">$8500</span></p>
                                 <p>Goal: <span class="goal">$1,0000</span></p>
                              </div>
                           </div>
                           <div class="cause__cta">
                              <a href="donate-us.php" aria-label="donate now" title="donate now"
                                 class="btn--secondary">Donate Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                  <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <div class="cause__slider-single van-tilt">
                        <div class="thumb">
                           <a href="cause-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/two.png" alt="Image">
                           </a>
                           <div class="tag">
                              <a href="our-causes.php">Food</a>
                           </div>
                        </div>
                        <div class="content">
                           <h6><a href="cause-details.php">Help For Education</a></h6>
                           <p>Lorem ipsum dolor sit amet, consete
                              sadipscing elitr, sed diam nonum
                           </p>
                        </div>
                        <div class="cause__slider-cta">
                           <div class="cause__progress progress-bar-single">
                              <div class="cause-progress__intro">
                                 <p><span>Donation</span>
                                    <span class="percent-value">90%</span>
                                 </p>
                              </div>
                              <div class="cause-progress__bar">
                                 <div class="progress-bar-wrapper" data-percent="90%">
                                    <div class="progress-bar">
                                       <div class="progress-bar-percent">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cause-progress__goal">
                                 <p>Raised: <span class="raised">$8500</span></p>
                                 <p>Goal: <span class="goal">$1,0000</span></p>
                              </div>
                           </div>
                           <div class="cause__cta">
                              <a href="donate-us.php" aria-label="donate now" title="donate now"
                                 class="btn--secondary">Donate Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                  <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                     <div class="cause__slider-single van-tilt">
                        <div class="thumb">
                           <a href="cause-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/three.png" alt="Image">
                           </a>
                           <div class="tag">
                              <a href="our-causes.php">Health</a>
                           </div>
                        </div>
                        <div class="content">
                           <h6><a href="cause-details.php">Help For Food</a></h6>
                           <p>Lorem ipsum dolor sit amet, consete
                              sadipscing elitr, sed diam nonum
                           </p>
                        </div>
                        <div class="cause__slider-cta">
                           <div class="cause__progress progress-bar-single">
                              <div class="cause-progress__intro">
                                 <p><span>Donation</span>
                                    <span class="percent-value">75%</span>
                                 </p>
                              </div>
                              <div class="cause-progress__bar">
                                 <div class="progress-bar-wrapper" data-percent="75%">
                                    <div class="progress-bar">
                                       <div class="progress-bar-percent">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cause-progress__goal">
                                 <p>Raised: <span class="raised">$8500</span></p>
                                 <p>Goal: <span class="goal">$1,0000</span></p>
                              </div>
                           </div>
                           <div class="cause__cta">
                              <a href="donate-us.php" aria-label="donate now" title="donate now"
                                 class="btn--secondary">Donate Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                  <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                     <div class="cause__slider-single van-tilt">
                        <div class="thumb">
                           <a href="cause-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/four.png" alt="Image">
                           </a>
                           <div class="tag">
                              <a href="our-causes.php">Food</a>
                           </div>
                        </div>
                        <div class="content">
                           <h6><a href="cause-details.php">Give health support</a></h6>
                           <p>Lorem ipsum dolor sit amet, consete
                              sadipscing elitr, sed diam nonum
                           </p>
                        </div>
                        <div class="cause__slider-cta">
                           <div class="cause__progress progress-bar-single">
                              <div class="cause-progress__intro">
                                 <p><span>Donation</span>
                                    <span class="percent-value">65%</span>
                                 </p>
                              </div>
                              <div class="cause-progress__bar">
                                 <div class="progress-bar-wrapper" data-percent="65%">
                                    <div class="progress-bar">
                                       <div class="progress-bar-percent">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cause-progress__goal">
                                 <p>Raised: <span class="raised">$8500</span></p>
                                 <p>Goal: <span class="goal">$1,0000</span></p>
                              </div>
                           </div>
                           <div class="cause__cta">
                              <a href="donate-us.php" aria-label="donate now" title="donate now"
                                 class="btn--secondary">Donate Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                  <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000">
                     <div class="cause__slider-single van-tilt">
                        <div class="thumb">
                           <a href="cause-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/one.png" alt="Image">
                           </a>
                           <div class="tag">
                              <a href="our-causes.php">Health</a>
                           </div>
                        </div>
                        <div class="content">
                           <h6><a href="cause-details.php">Children we work with</a></h6>
                           <p>Lorem ipsum dolor sit amet, consete
                              sadipscing elitr, sed diam nonum
                           </p>
                        </div>
                        <div class="cause__slider-cta">
                           <div class="cause__progress progress-bar-single">
                              <div class="cause-progress__intro">
                                 <p><span>Donation</span>
                                    <span class="percent-value">85%</span>
                                 </p>
                              </div>
                              <div class="cause-progress__bar">
                                 <div class="progress-bar-wrapper" data-percent="85%">
                                    <div class="progress-bar">
                                       <div class="progress-bar-percent">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cause-progress__goal">
                                 <p>Raised: <span class="raised">$8500</span></p>
                                 <p>Goal: <span class="goal">$1,0000</span></p>
                              </div>
                           </div>
                           <div class="cause__cta">
                              <a href="donate-us.php" aria-label="donate now" title="donate now"
                                 class="btn--secondary">Donate Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                  <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <div class="cause__slider-single van-tilt">
                        <div class="thumb">
                           <a href="cause-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/two.png" alt="Image">
                           </a>
                           <div class="tag">
                              <a href="our-causes.php">Food</a>
                           </div>
                        </div>
                        <div class="content">
                           <h6><a href="cause-details.php">Help For Education</a></h6>
                           <p>Lorem ipsum dolor sit amet, consete
                              sadipscing elitr, sed diam nonum
                           </p>
                        </div>
                        <div class="cause__slider-cta">
                           <div class="cause__progress progress-bar-single">
                              <div class="cause-progress__intro">
                                 <p><span>Donation</span>
                                    <span class="percent-value">90%</span>
                                 </p>
                              </div>
                              <div class="cause-progress__bar">
                                 <div class="progress-bar-wrapper" data-percent="90%">
                                    <div class="progress-bar">
                                       <div class="progress-bar-percent">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cause-progress__goal">
                                 <p>Raised: <span class="raised">$8500</span></p>
                                 <p>Goal: <span class="goal">$1,0000</span></p>
                              </div>
                           </div>
                           <div class="cause__cta">
                              <a href="donate-us.php" aria-label="donate now" title="donate now"
                                 class="btn--secondary">Donate Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                  <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                     <div class="cause__slider-single van-tilt">
                        <div class="thumb">
                           <a href="cause-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/three.png" alt="Image">
                           </a>
                           <div class="tag">
                              <a href="our-causes.php">Health</a>
                           </div>
                        </div>
                        <div class="content">
                           <h6><a href="cause-details.php">Help For Food</a></h6>
                           <p>Lorem ipsum dolor sit amet, consete
                              sadipscing elitr, sed diam nonum
                           </p>
                        </div>
                        <div class="cause__slider-cta">
                           <div class="cause__progress progress-bar-single">
                              <div class="cause-progress__intro">
                                 <p><span>Donation</span>
                                    <span class="percent-value">75%</span>
                                 </p>
                              </div>
                              <div class="cause-progress__bar">
                                 <div class="progress-bar-wrapper" data-percent="75%">
                                    <div class="progress-bar">
                                       <div class="progress-bar-percent">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cause-progress__goal">
                                 <p>Raised: <span class="raised">$8500</span></p>
                                 <p>Goal: <span class="goal">$1,0000</span></p>
                              </div>
                           </div>
                           <div class="cause__cta">
                              <a href="donate-us.php" aria-label="donate now" title="donate now"
                                 class="btn--secondary">Donate Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                  <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                     <div class="cause__slider-single van-tilt">
                        <div class="thumb">
                           <a href="cause-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/four.png" alt="Image">
                           </a>
                           <div class="tag">
                              <a href="our-causes.php">Food</a>
                           </div>
                        </div>
                        <div class="content">
                           <h6><a href="cause-details.php">Give health support</a></h6>
                           <p>Lorem ipsum dolor sit amet, consete
                              sadipscing elitr, sed diam nonum
                           </p>
                        </div>
                        <div class="cause__slider-cta">
                           <div class="cause__progress progress-bar-single">
                              <div class="cause-progress__intro">
                                 <p><span>Donation</span>
                                    <span class="percent-value">65%</span>
                                 </p>
                              </div>
                              <div class="cause-progress__bar">
                                 <div class="progress-bar-wrapper" data-percent="65%">
                                    <div class="progress-bar">
                                       <div class="progress-bar-percent">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cause-progress__goal">
                                 <p>Raised: <span class="raised">$8500</span></p>
                                 <p>Goal: <span class="goal">$1,0000</span></p>
                              </div>
                           </div>
                           <div class="cause__cta">
                              <a href="donate-us.php" aria-label="donate now" title="donate now"
                                 class="btn--secondary">Donate Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="row">
               <div class="col-12">
                  <div class="pagination-wrapper" data-aos="fade-up" data-aos-duration="1000">
                     <ul class="pagination main-pagination">
                        <li>
                           <button>
                              <i class="fa-solid fa-angles-left"></i>
                           </button>
                        </li>
                        <li>
                           <a href="blog-list.php">1</a>
                        </li>
                        <li>
                           <a href="blog-list.php" class="active">2</a>
                        </li>
                        <li>
                           <a href="blog-list.php">3</a>
                        </li>
                        <li>
                           <button>
                              <i class="fa-solid fa-angles-right"></i>
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div> -->
         </div>
         <div class="spade">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/help/spade.png" alt="Image">
         </div>
      </section>
      <!-- ==== / cause slider section end ==== -->
      <!-- ==== cta section start ==== -->
      <section class="cta-section-two">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-7">
                  <div class="cta__section__content">
                     <div class="section__content text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                        <h2 class="title-animation">children need your help
                           by donating today
                        </h2>
                        <div class="banner__content-cta cta">
                           <a href="our-causes.php" aria-label="about us" title="about us"
                              class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                           <a href="contact-us.php" aria-label="contact us" title="contact us" class="btn--primary">Get
                              A Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cta-bg">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cta/cta-bg.png" alt="Image" class="parallax-image">
         </div>
         <div class="shape-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cta/shape-left.png" alt="Image">
         </div>
         <div class="shape">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/shape-two.png" alt="Image">
         </div>
      </section>
      <!-- ==== / cta section end ==== -->
      <!-- ==== cause slider section start ==== -->
      <section class="cause cause-three">
         <div class="container">
            <div class="row gutter-30 align-items-center">
               <div class="col-12 col-md-8 col-xl-7">
                  <div class="section__header">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                     <h2 class="title-animation">Help & <span>donate</span> them when
                        they're in need
                     </h2>
                  </div>
               </div>
               <div class="col-12 col-md-4 col-xl-5">
                  <div class="slider-navigation">
                     <button type="button" aria-label="prev slide" title="prev slide" class="prev-cause slider-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                     </button>
                     <button type="button" aria-label="next slide" title="next slide"
                        class="next-cause slider-btn slider-btn-next">
                        <i class="fa-solid fa-arrow-right"></i>
                     </button>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="cause__slider-wrapper">
                     <div class="cause__slider swiper">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.php">
                                          <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/one.png" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.php">Health</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.php">Children we work with</a></h6>
                                       <p>Lorem ipsum dolor sit amet, consete
                                          sadipscing elitr, sed diam nonum
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">85%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="85%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="donate-us.php" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.php">
                                          <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/two.png" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.php">Food</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.php">Help For Education</a></h6>
                                       <p>Lorem ipsum dolor sit amet, consete
                                          sadipscing elitr, sed diam nonum
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">90%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="90%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="donate-us.php" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.php">
                                          <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/three.png" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.php">Health</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.php">Help For Food</a></h6>
                                       <p>Lorem ipsum dolor sit amet, consete
                                          sadipscing elitr, sed diam nonum
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">75%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="75%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="donate-us.php" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.php">
                                          <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/four.png" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.php">Food</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.php">Give health support</a></h6>
                                       <p>Lorem ipsum dolor sit amet, consete
                                          sadipscing elitr, sed diam nonum
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">65%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="65%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="donate-us.php" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.php">
                                          <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/one.png" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.php">Health</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.php">Children we work with</a></h6>
                                       <p>Lorem ipsum dolor sit amet, consete
                                          sadipscing elitr, sed diam nonum
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">85%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="85%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="donate-us.php" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.php">
                                          <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/two.png" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.php">Food</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.php">Help For Education</a></h6>
                                       <p>Lorem ipsum dolor sit amet, consete
                                          sadipscing elitr, sed diam nonum
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">90%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="90%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="donate-us.php" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.php">
                                          <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/three.png" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.php">Health</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.php">Help For Food</a></h6>
                                       <p>Lorem ipsum dolor sit amet, consete
                                          sadipscing elitr, sed diam nonum
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">75%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="75%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="donate-us.php" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.php">
                                          <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cause/four.png" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.php">Food</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.php">Give health support</a></h6>
                                       <p>Lorem ipsum dolor sit amet, consete
                                          sadipscing elitr, sed diam nonum
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">65%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="65%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="donate-us.php" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="spade">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/help/spade.png" alt="Image">
         </div>
      </section>
      <!-- ==== / cause slider section end ==== -->
      <!-- ==== contact section start ==== -->
      <section class="contact">
         <div class="container">
            <div class="row justify-content-end">
               <div class="col-12 col-md-10 col-xl-7">
                  <div class="contact__content">
                     <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                        <h2 class="title-animation">Send Us <span>message</span>
                           For donation!
                        </h2>
                     </div>
                     <div class="contact__form cta" data-aos="fade-up" data-aos-duration="1000">
                        <form action="#" method="post">
                           <div class="input-group">
                              <div class="input-single">
                                 <input type="email" name="contact-email" id="contactEmail" placeholder="your email...">
                                 <i class="fa-solid fa-paper-plane"></i>
                              </div>
                              <div class="input-single">
                                 <input type="text" name="contact-number" id="contactNumber"
                                    placeholder="your phone...">
                                 <i class="fa-solid fa-phone"></i>
                              </div>
                           </div>
                           <div class="input-single">
                              <input type="text" name="contact-address" id="contactAddress"
                                 placeholder="your address...">
                              <i class="fa-solid fa-location-dot"></i>
                           </div>
                           <div class="input-single alter-input">
                              <textarea name="contact-message" id="contactMessage"
                                 placeholder="your message..."></textarea>
                              <i class="fa-solid fa-envelope"></i>
                           </div>
                           <div class="form-cta">
                              <button type="submit" aria-label="submit message" title="submit message"
                                 class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="contact-bg">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/contact/contact-bg.png" alt="Image" class="parallax-image">
         </div>
         <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/cta/shape-left.png" alt="Image" class="base-img">
         </div>
      </section>
      <!-- ==== / contact section end ==== -->
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