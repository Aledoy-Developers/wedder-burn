<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Wedderburn Electric |  Expert Solutions for Electrical Repair and Maintenance
</title>

  <!-- Google fonts -->
  <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

  <style>
    .down__arr {
      font-size: 1rem;
      transition: all 0.25s;
    }
    .nav-item:hover .down__arr {
      transform: rotate(180deg);
    }
  </style>

</head>

<body>
<!-- header -->
<header id="site-header" class="fixed-top">
  <section class="w3l-header-4">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html"><img src="assets/images/wedderburn.png" alt="Wedderburn" class="img-fluid">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa icon-expand fa-bars"></span>
          <span class="fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item @@home__active">
              <a class="nav-link" href="index.html">Home </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item @@services__active ser_link">
              <a class="nav-link" href="javascript:void(0)">
                Services <i class="fa fa-chevron-down down__arr"></i>
              </a>
              <ul class="dropdown__list">
                <li class="dropdown__item"><a href="electrical.html" class="dropdown__link">Electrical Panels(Breaker Box)</a></li>
                <li class="dropdown__item"><a href="knob.html" class="dropdown__link">Knob & Tube Whole Home Wiring </a></li>
                <li class="dropdown__item"><a href="ev.html" class="dropdown__link">EV / Tesla Home Charger</a></li>
                <li class="dropdown__item"><a href="ceiling.html" class="dropdown__link">Ceiling Fan Installation</a></li>
                <li class="dropdown__item"><a href="outlets.html" class="dropdown__link">Outlets / Switches / Fixtures upgrade</a></li>
                <li class="dropdown__item"><a href="indoor.html" class="dropdown__link">Indoor / Outdoor lighting Installation</a></li>
                <li class="dropdown__item"><a href="commercial.html" class="dropdown__link">Commercial Electrical service</a></li>
              </ul>
            </li>
            <li class="nav-item @@faq__active">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item @@bookings__active">
              <a class="nav-link" href="booking.php">Bookings</a>
            </li>
            <li class="nav-item ml-3">
              <a href="contact.php" class="btn btn-outline-primary btn-style mr-2">Contact Us</a>
            </li>
          </ul>

          <!-- //toggle switch for light and dark theme -->
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
      </nav>
    </div>
  </section>
</header>
<!-- //header -->

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-abouts py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title"></h2>
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
        </ul>
    </div>
</section>
 <!-- contacts -->
 <section class="w3l-contact-7 py-5">
     <div class="contacts-9 py-lg-5 py-md-4">
         <div class="container">
             <div class="top-map">
                 <div class="row map-content-9">
                     <div class="col-lg-8">
                         <h3 class="title-big">Contact us</h3>
                         <p class="mb-4">Your email address will not be published. Required fields are marked *</p>
                      <?php
                      if($error)
                      { ?>
                         <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php } ?>
                      <?php
                      if($correct)
                      { ?>
                         <div class="alert alert-success"><?php echo $correct; ?></div>
                        <?php } ?>
                         <form action="proc-contact.php" method="post" class="text-right">
                             <div class="form-grid">
                                 <input type="text" name="name" id="w3lName" placeholder="Name*" required="">
                                 <input type="email" name="email" id="w3lSender" placeholder="Email*" required="">
                                 <input type="text" name="phone" id="w3lPhone" placeholder="Phone number*"
                                     required="">
                                 <input type="text" name="subject" id="w3lSubject" placeholder="Subject">
                             </div>
                             <textarea name="message" id="w3lMessage" placeholder="Message"></textarea>
                             <button type="submit" class="btn btn-primary btn-style mt-3">Submit</button>
                         </form>
                     </div>
                     <div class="col-lg-4 cont-details">
                         <address>
                            <p>For more info or inquiry about our services, please feel free to get in touch with us.</p>
                             <br><br>
                             <p> <a href="tel:(412) 499 0182"><span class="fa fa-phone"></span> (412) 499 0182</a></p>
                             <p> <a href="mailto:Klem_45@yahoo.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                              Klem_45@yahoo.com</a></p>
                             <p><a href="mailto: info@wedderburnelectric.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                              info@wedderburnelectric.com</a></p>

                             <h5 class="mt-4 mb-3">Follow us on social media</h5>
                             <div class="main-social-footer-29">
                                 <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                                 <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                                 <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                 <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                             </div>
                         </address>
                     </div>
                 </div>
                 <div class="map mt-lg-5 mt-md-3">
                     <!-- <iframe
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
                         frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
                        
                 </div>
             </div>

         </div>

     </div>

 </section>
 <!-- //contacts -->
     <!-- footer -->
     <section class="w3l-footer-29-main" id="footer">
      <div class="footer-29 py-5">
        <div class="container pb-lg-3">
          <div class="row footer-top-29">
            <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-4">
              <h6 class="footer-title-29">Contact Us</h6>
              <ul>
                <li>
                  <!-- <span class="fa fa-map-marker"></span> CW Electrical
                    Services Inc 3424 Babcock Blvd Pittsburgh, PA 15237 -->
                </li>
                <li><a href="tel:(412) 499 0182"><span class="fa fa-phone"></span> (412) 499 0182</a></li>
                <li><a href="mailto:Klem_45@yahoo.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                    Klem_45@yahoo.com</a></li>
                <li><a href="mailto: info@wedderburnelectric.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                    info@wedderburnelectric.com</a></li>
              </ul>
              <div class="main-social-footer-29">
                <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 footer-list-29 footer-2 mt-4">
              <ul>
                <h6 class="footer-title-29">Our Services</h6>
                <li><a href="electrical.html">Electrical Panels(Breaker box)</a></li>
                <li><a href="knob.html">Knob & tube Whole Home Wiring</a></li>
                <li><a href="ev.html">EV / Tesla Home Chargers</a></li>
                <li><a href="ceiling.html">Ceiling Fan Installation</a></li>
                <li><a href="outlets.html">Outlet / Switches / Fixtures Updates</a></li>
               
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-6 footer-list-29 footer-4 mt-4">
              <ul>
                <h6 class="footer-title-29">Quick Links</h6>
                <li><a href="index.html">Home page</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="booking.php">Bookings</a></li>
                <li><a href="contact.php">Get in touch</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-4">
            <ul>
              <h6 class="footer-title-29">FAQ</h6>
              <li><a href="faq.html">
                  Are your technicians licensed and insured? - <br><br>Yes, all our technicians are fully licensed and insured to ensure the highest level of professionalism and safety on every job. 
                </a>
              </li>
            </ul>
            </div>
          </div>
          <div class="row bottom-copies">
            <p class="copy-footer-29 col-lg-8">© 2024 Wedderburn Electric. All rights reserved.</p>
            <ul class="list-btm-29 col-lg-4">
              <li><a href="#link">Privacy policy</a></li>
              <li><a href="#link">Terms of service</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" class="bg-warning" title="Go to top">
        <span class="fa fa-level-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->
    </section>
    <!-- // footer -->

    <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

    <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
          type: 'inline',

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: 'auto',

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
          type: 'inline',

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: 'auto',

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-slide-bottom'
        });
      });
    </script>
    <!-- magnific popup -->

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for tesimonials carousel slider -->
    <script>
      $(document).ready(function () {
        $("#owl-demo1").owlCarousel({
          loop: true,
          margin: 20,
          nav: false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            736: {
              items: 1,
              nav: false
            },
            1000: {
              items: 2,
              nav: false,
              loop: false
            }
          }
        })
      })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!--/MENU-JS-->
    <script>
      $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
          $("#site-header").addClass("nav-fixed");
        } else {
          $("#site-header").removeClass("nav-fixed");
        }
      });

      //Main navigation Active Class Add Remove
      $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
      });
      $(document).on("ready", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
        $(window).on("resize", function () {
          if ($(window).width() > 991) {
            $("header").removeClass("active");
          }
        });
      });
    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    </body>

    </html>