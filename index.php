
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
      
      <!-- ==== / preloader end ==== -->
      <!-- ==== topbar start ==== -->
      
      <!-- ==== / topbar end ==== -->
      <!-- ==== header start ==== -->
      <?php
      include 'header.php';
      ?>
      <!-- ==== / header end ==== -->
      <!-- ==== mobile menu start ==== -->
      <div class="mobile-menu d-block d-xl-none">
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
               <a href="donate-us.php" class="btn--primary btn--primary-alt">Donate Now <i
                     class="icon-circle-arrow"></i></a>
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
         <!-- <form action="#" method="post">
            <div class="search-popup__group">
               <input type="text" name="search-field" id="searchField" placeholder="Search...." required>
               <button type="submit" aria-label="search" title="search">
                  <i class="fa-solid fa-magnifying-glass"></i>
               </button>
            </div>
         </form> -->
      </div>
      <!-- ==== / search popup end ==== -->
      <!-- ==== banner start ==== -->
      <section class="banner">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-xl-10">
                  <div class="banner__slider swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="banner__content text-center">
                              <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                              <h1>Helping Each Other Make
                                 <span>Better</span> today
                              </h1>
                              <p>Join our monthly giving
                                 program to provide consistent support to our initiatives. Regular
                                 contributions, no matter the size, help us plan and sustain long-term projects.
                              </p>
                              <div class="banner__content-cta cta">
                                 <a href="our-causes.php" aria-label="about us" title="about us"
                                    class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                 <a href="contact-us.php" aria-label="contact us" title="contact us"
                                    class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="banner__content text-center">
                              <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                              <h1>Helping Each Other Make
                                 <span>Better</span> today
                              </h1>
                              <p>Join our monthly giving
                                 program to provide consistent support to our initiatives. Regular
                                 contributions, no matter the size, help us plan and sustain long-term projects.
                              </p>
                              <div class="banner__content-cta cta">
                                 <a href="our-causes.php" aria-label="about us" title="about us"
                                    class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                 <a href="contact-us.php" aria-label="contact us" title="contact us"
                                    class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="banner__content text-center">
                              <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                              <h1>Helping Each Other Make
                                 <span>Better</span> today
                              </h1>
                              <p>Join our monthly giving
                                 program to provide consistent support to our initiatives. Regular
                                 contributions, no matter the size, help us plan and sustain long-term projects.
                              </p>
                              <div class="banner__content-cta cta">
                                 <a href="our-causes.php" aria-label="about us" title="about us"
                                    class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                 <a href="contact-us.php" aria-label="contact us" title="contact us"
                                    class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="banner-bg">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/banner/banner-one-bg.png" alt="Image" class="parallax-image">
         </div>
         <div class="bottom-shape">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/banner/banner-one-shape.png" alt="Image">
         </div>
         <div class="alter-shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
         <div class="circle-shape"></div>
      </section>
      <!-- ==== / banner end ==== -->
      <!-- ==== help section start ==== -->
      <section class="help-two" id="aboutSection">
         <div class="container">
            <div class="row">
               <div class="col-12 col-lg-5 col-xxl-6 ">
                  <div class="help-two__thumb d-none d-lg-block">
                     <div class="help-two__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/help/three.png" alt="Image">
                        </div>
                        <div class="thumb-sm" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/help/two.png" alt="Image">
                        </div>
                        <div class="thumb-md" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/help/one.png" alt="Image">
                        </div>
                        <div class="help-two__thumb-content">
                           <div class="thumb">
                              <i class="icon-donation"></i>
                           </div>
                           <div class="content">
                              <h2><span class="odometer" data-odometer-final="250"></span><span>+</span>
                              </h2>
                              <p>Services we Provide</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-7 col-xxl-6">
                  <div class="help-two__content">
                     <div class="section__content">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                        <h2 class="title-animation">Helping each other can
                           make <span>world</span> better
                        </h2>
                        <p>Volunteering offers opportunities to develop new skills and gain valuable
                           experience. This can include leadership, communication, project
                        </p>
                     </div>
                     <div class="help-two__inner cta">
                        <div class="help-two__inner-content">
                           <div class="help__content-icon-group">
                              <div class="help__content-icon">
                                 <div class="thumb">
                                    <i class="icon-make-donation"></i>
                                 </div>
                                 <div class="content">
                                    <h6>Start helping them</h6>
                                    <p>Raising awareness about the charity's mission and cause.</p>
                                 </div>
                              </div>
                              <hr>
                              <div class="help__content-icon">
                                 <div class="thumb">
                                    <i class="icon-support-heart"></i>
                                 </div>
                                 <div class="content">
                                    <h6>Make Donations</h6>
                                    <p>Raising awareness about the charity's mission and cause.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="help__content-list">
                              <ul>
                                 <li><i class="fa-solid fa-circle-check"></i> Helped fund 3,265 Project
                                    powerfull
                                 </li>
                                 <li><i class="fa-solid fa-circle-check"></i> We give child a gift of a
                                    education
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="help-two-card-wrapper">
                           <div class="help-two__card van-tilt">
                              <div class="help-card-thumb">
                                 <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/help/author.png" alt="Image">
                                 <i class="icon-star"></i>
                              </div>
                              <div class="help-card-content">
                                 <h4>35,734</h4>
                                 <h6>Helped Fund</h6>
                                 <p>Quisque dignissim enim diam</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / help section end ==== -->
      <!-- ==== cause slider section start ==== -->
      <section class="cause cause-alt" data-background="assets/images/cause/cause-bg.png" id="causeSection">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-md-8 col-xl-7">
                  <div class="section__header text-center">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                     <h2 class="title-animation">Be the reason of someone
                        <span>smiles</span> Causes
                     </h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="cause-inner__wrapper">
            <div class="container">
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
      <!-- ==== award section start ==== -->
      <section class="award" id="eventSection">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-10 col-xl-8">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                     <h2 class="title-animation">Our Global Awards <span>Winning</span>
                        Photo Gallery
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row gutter-24">
               <div class="col-12 col-lg-8">
                  <div class="award__single" data-aos="fade-up" data-aos-duration="1000">
                     <div class="thumb">
                        <a href="our-causes.php">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/award/one.png" alt="Image">
                        </a>
                     </div>
                     <div class="content">
                        <div class="award__content">
                           <h5><a href="our-causes.php">Child trouble & care</a></h5>
                           <p>Demostic & Transportation</p>
                        </div>
                        <div class="award__thumb">
                           <a href="our-causes.php">
                              <i class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-4">
                  <div class="award__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                     <div class="thumb">
                        <a href="our-causes.php">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/award/four.png" alt="Image">
                        </a>
                     </div>
                     <div class="content">
                        <div class="award__content">
                           <h5><a href="our-causes.php">Child trouble & care</a></h5>
                           <p>Demostic & Transportation</p>
                        </div>
                        <div class="award__thumb">
                           <a href="our-causes.php">
                              <i class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-5">
                  <div class="award__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                     <div class="thumb">
                        <a href="our-causes.php">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/award/two.png" alt="Image">
                        </a>
                     </div>
                     <div class="content">
                        <div class="award__content">
                           <h5><a href="our-causes.php">Child trouble & care</a></h5>
                           <p>Demostic & Transportation</p>
                        </div>
                        <div class="award__thumb">
                           <a href="our-causes.php">
                              <i class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-7">
                  <div class="award__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <div class="thumb">
                        <a href="our-causes.php">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/award/three.png" alt="Image">
                        </a>
                     </div>
                     <div class="content">
                        <div class="award__content">
                           <h5><a href="our-causes.php">Child trouble & care</a></h5>
                           <p>Demostic & Transportation</p>
                        </div>
                        <div class="award__thumb">
                           <a href="our-causes.php">
                              <i class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="section__cta cta text-center">
                     <a href="events.php" aria-label="our events" title="our events" class="btn--primary">View
                        All <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="spade">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/community/spade.png" alt="Image" class="base-img">
         </div>
      </section>
      <!-- ==== / award section end ==== -->
      <!-- ==== team section start ==== -->
      <section class="team" data-background="assets/images/bg-one.png" id="teamSection">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-10 col-xl-6">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                     <h2 class="title-animation">Meet Our Volunteer
                        <span>Team</span> members
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row gutter-40">
               <div class="col-12 col-sm-6 col-xl-3">
                  <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                     <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                           <a href="team-details.php">
                              <img src="images/image1.jpg" alt="Image" class="img-fluid team-images">
                           </a>
                           <div class="team__icons">
                              <div class="team__single-content__icon">
                                 <i class="fa-solid fa-plus"></i>
                              </div>
                              <div class="team__single__thumb-social">
                                 <ul>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-facebook-f"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-twitter"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-instagram"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-behance"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="team__single-content">
                           <h6><a href="team-details.php">Sahil</a></h6>
                           <p>Founder And  CEO</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-xl-3">
                  <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                           <a href="team-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/team/two.png" alt="Image" height="400px">
                           </a>
                           <div class="team__icons">
                              <div class="team__single-content__icon">
                                 <i class="fa-solid fa-plus"></i>
                              </div>
                              <div class="team__single__thumb-social">
                                 <ul>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-facebook-f"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-twitter"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-instagram"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-behance"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="team__single-content">
                           <h6><a href="team-details.php">Arian Drobloas</a></h6>
                           <p>Volunteer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-xl-3">
                  <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                     <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                           <a href="team-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/team/three.png" alt="Image">
                           </a>
                           <div class="team__icons">
                              <div class="team__single-content__icon">
                                 <i class="fa-solid fa-plus"></i>
                              </div>
                              <div class="team__single__thumb-social">
                                 <ul>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-facebook-f"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-twitter"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-instagram"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-behance"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="team__single-content">
                           <h6><a href="team-details.php">Jara Klintof</a></h6>
                           <p>Volunteer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-xl-3">
                  <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                     <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                           <a href="team-details.php">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/team/four.png" alt="Image">
                           </a>
                           <div class="team__icons">
                              <div class="team__single-content__icon">
                                 <i class="fa-solid fa-plus"></i>
                              </div>
                              <div class="team__single__thumb-social">
                                 <ul>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-facebook-f"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-twitter"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-instagram"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.php">
                                          <i class="fa-brands fa-behance"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="team__single-content">
                           <h6><a href="team-details.php">Aiden Markram</a></h6>
                           <p>Volunteer</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="section__cta cta text-center">
                     <a href="our-team.php" aria-label="our team" title="our team" class="btn--primary">View All
                        <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="spade">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sprade-green.png" alt="Image">
         </div>
      </section>
      <!-- ==== / team section end ==== -->
      <!-- ==== faq section start ==== -->
      <section class="faq" id="faqSection">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-8 col-xl-6">
                  <div class="faq__content">
                     <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                        <h2 class="title-animation">Frequently <span>Asked</span>
                           Questions
                        </h2>
                     </div>
                     <div class="faq__content-inner cta" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="accordion" id="accordion">
                           <div class="accordion-item">
                              <h6 class="accordion-header" id="headingOne">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What kind of recipes can I find on your website?
                                 </button>
                              </h6>
                              <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne" data-bs-parent="#accordion">
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
               </div>
               <div class="col-12 col-lg-4 col-xl-5 offset-xl-1">
                  <div class="faq__thumb d-none d-lg-block">
                     <div class="faq__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/faq/thumb-lg.png" alt="Image">
                        </div>
                        <div class="thumb-sm" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/faq/thumb-sm.png" alt="Image">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape d-none d-lg-block">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/faq/shape.png" alt="Image">
         </div>
      </section>
      <!-- ==== / faq section end ==== -->
      <!-- ==== partner section start ==== -->
      <div class="partner">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="partner__slider swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/one.png" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/two.png" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/three.png" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/four.png" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/five.png" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/one.png" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/two.png" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/three.png" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/four.png" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/sponsor/five.png" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== / partner section end ==== -->
      <!-- ==== testimonial two section start ==== -->
      <section class="testimonial-two">
         <div class="container">
            <div class="row">
               <div class="col-12 col-lg-9 col-xl-5">
                  <div class="section__header" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                     <h2 class="title-animation">What People Say
                        <span>About</span> us
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="testimonial-two__inner" data-background="assets/images/testimonial-bg.png" data-aos="fade-up"
                  data-aos-duration="1000" data-aos-delay="100">
                  <div class="row align-items-center">
                     <div class="col-12 col-lg-5 d-none d-lg-block">
                        <div class="testimonial-two__thumb">
                           <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/testimonial-thumb.png" alt="Image">
                           <div class="quote-thumb">
                              <i class="fa-solid fa-quote-right"></i>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-lg-7 col-xl-6">
                        <div class="testimonial-two__content">
                           <div class="testimonial-two__slider swiper">
                              <div class="swiper-wrapper">
                                 <div class="swiper-slide">
                                    <div class="testimonial-two__single">
                                       <div class="author-info">
                                          <div class="author-thumb">
                                             <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/author-two.png" alt="Image">
                                          </div>
                                          <div class="author-content">
                                             <h5>James Anderson</h5>
                                             <p>Software Engineer</p>
                                          </div>
                                       </div>
                                       <div class="testimonial-two__single-content">
                                          <h5>Climb the mountain not to plant your flag but to embrace
                                             the ways challenge, enjoy the air, and behold the. Climb it
                                             see the world, not so the world can see you. This is due to
                                             their excellent service.
                                          </h5>
                                          <div class="review">
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="testimonial-two__single">
                                       <div class="author-info">
                                          <div class="author-thumb">
                                             <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/author-two.png" alt="Image">
                                          </div>
                                          <div class="author-content">
                                             <h5>James Anderson</h5>
                                             <p>Software Engineer</p>
                                          </div>
                                       </div>
                                       <div class="testimonial-two__single-content">
                                          <h5>Climb the mountain not to plant your flag but to embrace
                                             the ways challenge, enjoy the air, and behold the. Climb it
                                             see the world, not so the world can see you. This is due to
                                             their excellent service.
                                          </h5>
                                          <div class="review">
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="testimonial-two__single">
                                       <div class="author-info">
                                          <div class="author-thumb">
                                             <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/author-two.png" alt="Image">
                                          </div>
                                          <div class="author-content">
                                             <h5>James Anderson</h5>
                                             <p>Software Engineer</p>
                                          </div>
                                       </div>
                                       <div class="testimonial-two__single-content">
                                          <h5>Climb the mountain not to plant your flag but to embrace
                                             the ways challenge, enjoy the air, and behold the. Climb it
                                             see the world, not so the world can see you. This is due to
                                             their excellent service.
                                          </h5>
                                          <div class="review">
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                             <i class="icon-star"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slider-navigation cta">
                              <button type="button" aria-label="prev slide" title="prev slide"
                                 class="prev-testimonial-two slider-btn">
                                 <i class="fa-solid fa-arrow-left"></i>
                              </button>
                              <button type="button" aria-label="next slide" title="next slide"
                                 class="next-testimonial-two slider-btn slider-btn-next">
                                 <i class="fa-solid fa-arrow-right"></i>
                              </button>
                           </div>
                           <div class="quote">
                              <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/quote-two.png" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="blog-bg">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/blog-bg.png" alt="Image">
         </div>
         <div class="spade">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/community/spade.png" alt="Image" class="base-img">
         </div>
      </section>
      <!-- ==== / testimonial two section end ==== -->
      <!-- ==== blog section start ==== -->
      <!-- <section class="blog blog-two" data-background="assets/images/bg-one.png" id="blogSection">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-md-8 col-xl-7">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000"
                     data-aos-delay="100">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                     <h2 class="title-animation">Our Latest <span>News</span> &
                        Articles you like
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row gutter-40">
               <div class="col-12 col-lg-6 col-xl-4">
                  <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                     <div class="blog__single van-tilt">
                        <div class="blog__single-inner">
                           <div class="blog__single-meta">
                              <p><i class="icon-user"></i>Robert Fox</p>
                              <p><i class="icon-message"></i>Comments (03)</p>
                           </div>
                           <div class="blog__single-content">
                              <h5><a href="blog-details.php">IT Service Case Studies Accelerate
                                    Business Fly Success Tech</a>
                              </h5>
                           </div>
                           <div class="blog__single-thumb">
                              <a href="blog-details.php">
                                 <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/one.png" alt="Image">
                              </a>
                              <div class="tag">
                                 <a href="blog-list.php"><i class="fa-solid fa-tags"></i>Health</a>
                              </div>
                           </div>
                           <div class="blog__single-cta">
                              <a href="blog-details.php" aria-label="blog details" title="blog details">Read
                                 More<i class="fa-solid fa-circle-arrow-right"></i></a>
                           </div>
                        </div>
                        <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/spade.png" alt="Image" class="spade-two">
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-6 col-xl-4">
                  <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <div class="blog__single van-tilt">
                        <div class="blog__single-inner">
                           <div class="blog__single-meta">
                              <p><i class="icon-user"></i>Robert Fox</p>
                              <p><i class="icon-message"></i>Comments (08)</p>
                           </div>
                           <div class="blog__single-content">
                              <h5><a href="blog-details.php">IT Service Case Studies Accelerate
                                    Business Fly Success Tech</a>
                              </h5>
                           </div>
                           <div class="blog__single-thumb">
                              <a href="blog-details.php">
                                 <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/two.png" alt="Image">
                              </a>
                              <div class="tag">
                                 <a href="blog-list.php"><i class="fa-solid fa-tags"></i>Education</a>
                              </div>
                           </div>
                           <div class="blog__single-cta">
                              <a href="blog-details.php" aria-label="blog details" title="blog details">Read
                                 More<i class="fa-solid fa-circle-arrow-right"></i></a>
                           </div>
                        </div>
                        <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/spade.png" alt="Image" class="spade-two">
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-6 col-xl-4">
                  <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                     <div class="blog__single van-tilt">
                        <div class="blog__single-inner">
                           <div class="blog__single-meta">
                              <p><i class="icon-user"></i>Robert Fox</p>
                              <p><i class="icon-message"></i>Comments (13)</p>
                           </div>
                           <div class="blog__single-content">
                              <h5><a href="blog-details.php">IT Service Case Studies Accelerate
                                    Business Fly Success Tech</a>
                              </h5>
                           </div>
                           <div class="blog__single-thumb">
                              <a href="blog-details.php">
                                 <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/three.png" alt="Image">
                              </a>
                              <div class="tag">
                                 <a href="blog-list.php"><i class="fa-solid fa-tags"></i>Food</a>
                              </div>
                           </div>
                           <div class="blog__single-cta">
                              <a href="blog-details.php" aria-label="blog details" title="blog details">Read
                                 More<i class="fa-solid fa-circle-arrow-right"></i></a>
                           </div>
                        </div>
                        <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/spade.png" alt="Image" class="spade-two">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="section__cta cta text-center">
                     <a href="blog-grid.php" aria-label="our blog" title="our blog" class="btn--primary">View
                        All <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="spade">
            <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/blog/spade-base.png" alt="Image" class="base-img">
         </div>
      </section> -->
      <!-- ==== / blog section end ==== -->
      <!-- ==== image gallery section start ==== -->
      <div class="gallery">
         <div class="gallery__inner">
            <div class="gallery__slider">
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/one.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/two.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/three.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/four.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/five.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/six.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/one.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/two.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/three.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/four.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/five.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
               <div class="gallery__single">
                  <img src="https://wowtheme7.com/tf/charifund/charifund/assets/images/gallery/six.png" alt="Image">
                  <a href="index.php">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== / image gallery section end ==== -->
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
      <!-- <div class="color-palate">
         <button class="color-trigger">
            <i class="fa-solid fa-gear"></i>
         </button>
         <button class="close-color-trigger">
            <i class="fa-solid fa-xmark"></i>
         </button>
         <div class="color-palate-inner">
            <div class="various-color clearfix">
               <h6>Multiple Colors</h6>
               <br>
               <div class="colors-list">
                  <span class="palate default-color active" data-theme-file="https://wowtheme7.com/tf/charifund/charifund/assets/css/default-theme.css"></span>
                  <span class="palate blue-color" data-theme-file="https://wowtheme7.com/tf/charifund/charifund/assets/css/blue-theme.css"></span>
                  <span class="palate brown-color" data-theme-file="https://wowtheme7.com/tf/charifund/charifund/assets/css/brown-theme.css"></span>
                  <span class="palate green-color" data-theme-file="https://wowtheme7.com/tf/charifund/charifund/assets/css/green-theme.css"></span>
                  <span class="palate orange-color" data-theme-file="https://wowtheme7.com/tf/charifund/charifund/assets/css/orange-theme.css"></span>
                  <span class="palate purple-color" data-theme-file="https://wowtheme7.com/tf/charifund/charifund/assets/css/purple-theme.css"></span>
                  <span class="palate teal-color" data-theme-file="https://wowtheme7.com/tf/charifund/charifund/assets/css/teal-theme.css"></span>
                  <span class="palate yellow-color" data-theme-file="https://wowtheme7.com/tf/charifund/charifund/assets/css/yellow-theme.css"></span>
               </div>
            </div>
            <h6>RTL Version</h6>
            <ul class="rtl-version option-box">
               <li class="rtl">RTL Version</li>
               <li>LTR Version</li>
            </ul>
            <h6>Boxed Version</h6>
            <ul class="box-version option-box">
               <li class="box">Boxed</li>
               <li>Full width</li>
            </ul>
            <h6>Sticky Header</h6>
            <ul class="header-version option-box">
               <li class="box">Yes</li>
               <li>No</li>
            </ul>
            <h6>Dark Verion</h6>
            <ul class="dark-version option-box">
               <li class="box">Yes</li>
               <li>No</li>
            </ul>
            <div class="purchase-box">
               <p>You will find much more options for colors and styling in admin panel. This color picker is used
                  only for demonstration purposes.
               </p>
               <a href="index.php" class="purchase-box__btn">buy now</a>
            </div>
         </div>
      </div> -->
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