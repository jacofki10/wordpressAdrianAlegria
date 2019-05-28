<!DOCTYPE html>
<html style="--replace-offset:0%;" <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
  <title>Adrian Alegria</title>
  <!-- Custom styles Mask -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/mask.css'; ?>" type="text/css" media="screen">
  <!-- Custom styles Animate menu -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/animateMenu.css'; ?>" type="text/css" media="screen">
  <script src="<?php echo get_template_directory_uri() . '/js/animateMenu/segment.min.js'; ?>" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri() . '/js/animateMenu/ease.min.js'; ?>" type="text/javascript"></script>
  <!--Scroll down menu-->
  <script src="<?php echo get_template_directory_uri() . '/js/smooth-scroll.polyfills.js'; ?>" type="text/javascript"></script>
  <!--Nav Color Change-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/navColorChange.css'; ?>" type="text/css" media="screen">
  <script src="<?php echo get_template_directory_uri() . '/js/navColorChange.js'; ?>" type="text/javascript"></script>
  <!--Grid Scroll Effects-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/gridLoadingEffects.css'; ?>" type="text/css" media="screen">
  <script src="<?php echo get_template_directory_uri() . '/js/gridLoadingEffects/modernizr.custom.js'; ?>" type="text/javascript"></script>
</head>

<body id="home">
  <!-- Navigation mobile-->
  <nav class="navbar fixed-top d-lg-none bg-white ">
    <a class="col-10 navbar-brand no-gutters pl-sm-5 text-center" href="#home">
      <img src="http://adrianalegria.com/wp-content/themes/AdrianAlegriaSinglePage/images/AdrianAlegriaLogoNegro.png" class="LogoMobile" alt="AdrianAlegria Logo">
    </a>
    <div id="menu-icon-wrapper" class="menu-icon-wrapper">
      <svg width="1000px" height="1000px">
        <path id="pathA" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
        <path id="pathB" d="M 300 500 L 700 500"></path>
        <path id="pathC" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
      </svg>
      <button class="menu-icon-trigger navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
    </div>
    <div class="collapse navbar-collapse text-center m-3 " id="navbarNav">
      <ul class="navbar-nav list-inline font-weight-bold">
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#music" class="menu-icon-trigger navbar-toggler " data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">MUSIC</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#radio" class="menu-icon-trigger navbar-toggler " data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">RADIO</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#photos" class="menu-icon-trigger navbar-toggler " data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">PHOTOS</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#gigs" class="menu-icon-trigger navbar-toggler " data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">GIGS</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#stores" class="menu-icon-trigger navbar-toggler " data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">STORES</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#booking" class="menu-icon-trigger navbar-toggler " data-toggle="modal" data-target="#bookingModal" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">BOOKING</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#about" class="menu-icon-trigger navbar-toggler " data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">ABOUT</a>
        </li>
        <div class="row d-flex my-2 ">
          <li class="list-inline-item mx-0 flex-fill">
            <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-facebook-f fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0 flex-fill">
            <a href="https://instagram.com/adrianalegriadj/" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-instagram fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0 flex-fill">
            <a href="https://soundcloud.com/adrian-alegria" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-soundcloud fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0 flex-fill">
            <a href="https://www.youtube.com/channel/UCHGwqkwO2lIR7h-oXLVRrUg" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-youtube fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0 flex-fill">
            <a href="https://twitter.com/AdrianAlegriaDJ" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-twitter fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
        </div>
      </ul>
    </div>
  </nav>
  <!--desktop-->
  <div class="img-index container-fluid pl-0 section--1 section">
    <div class="row m-0 pt-4">
      <!-- Navigation  desktop-->
      <nav class="col-3 d-none d-lg-block ">
        <div><img src="http://adrianalegria.com/wp-content/themes/AdrianAlegriaSinglePage/images/AdrianAlegriaLogo.png" alt="AdrianAlegria Logo" class="img-fluid"></div>
        <div class="menu fixed-top mt-5 ml-3 pt-5 ">
          <div class="js-replace js-replace--reverse">
            <div class="js-replace__item js-replace__item--active">
              <div class="js-replace__content">
                <a data-easing="easeInOutQuad" href="#home">
                  <div class="logo">HOME</div>
                </a>
                <a data-easing="easeInOutQuad" href="#music">
                  <div class="logo">MUSIC</div>
                </a>
                <a data-easing="easeInOutQuad" href="#radio">
                  <div class="logo">RADIO</div>
                </a>
                <a data-easing="easeInOutQuad" href="#photos">
                  <div class="logo">PHOTOS</div>
                </a>
                <a data-easing="easeInOutQuad" href="#gigs">
                  <div class="logo">GIGS</div>
                </a>
                <a data-easing="easeInOutQuad" href="#stores">
                  <div class="logo">STORES</div>
                </a>
                <a data-easing="easeInOutQuad" href="#booking">
                  <div class="logo" data-toggle="modal" data-target="#bookingModal">BOOKING</div>
                </a>
                <a data-easing="easeInOutQuad" href="#about">
                  <div class="logo">ABOUT</div>
                </a>
              </div>
            </div>
            <div class="js-replace__item">
              <div class="js-replace__content">
                <a data-easing="easeInOutQuad" href="#home">
                  <div class="logo--invert">HOME</div>
                </a>
                <a data-easing="easeInOutQuad" href="#music">
                  <div class="logo--invert">MUSIC</div>
                </a>
                <a data-easing="easeInOutQuad" href="#radio">
                  <div class="logo--invert">RADIO</div>
                </a>
                <a data-easing="easeInOutQuad" href="#photos">
                  <div class="logo--invert">PHOTOS</div>
                </a>
                <a data-easing="easeInOutQuad" href="#gigs">
                  <div class="logo--invert">GIGS</div>
                </a>
                <a data-easing="easeInOutQuad" href="#stores">
                  <div class="logo--invert">STORES</div>
                </a>
                <a data-easing="easeInOutQuad" href="#booking">
                  <div class="logo--invert" data-toggle="modal" data-target="#bookingModal">BOOKING</div>
                </a>
                <a data-easing="easeInOutQuad" href="#about">
                  <div class="logo--invert">ABOUT</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- Social media-->
      <div class="col-9 px-0 d-none d-lg-block ">
        <ul class="list-inline float-right">
          <li class="list-inline-item mx-0">
            <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-facebook-f fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="https://instagram.com/adrianalegriadj/" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-instagram fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="https://soundcloud.com/adrian-alegria" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-soundcloud fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="https://www.youtube.com/channel/UCHGwqkwO2lIR7h-oXLVRrUg" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-youtube fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="https://twitter.com/AdrianAlegriaDJ" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-twitter fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="https://www.mixcloud.com/adrianalegria/" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-mixcloud fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="https://open.spotify.com/artist/24w4dGFG8bDi3wG1qbnDM7" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-spotify fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
