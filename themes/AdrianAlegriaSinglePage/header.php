<!DOCTYPE html>
<html style="--replace-offset:0%;" <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Oficial DJ Adrian Alegria Website, with his music, podtcast, photos and last gigs." />
  <title>Adrian Alegria</title>
  <?php wp_head(); ?>
  <?php
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://accounts.spotify.com/api/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "grant_type=refresh_token&refresh_token=AQDJoLDvk5oAQQkQFfF1nb56AP1_AWsQWj-OP1YDz-Aw9gHmOl2Nz4X_zi2kHH_yHeOfR6nXdlZiYN8-qaHRgbVJCm-MW3hFvsfqdgFgxKACoD6Y2VPgVskNN5Aro50YebvRXw",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Basic NzUzOTY3OTI0NTliNGZjNDg2MDI3OWU2Mzk3YmRlYmY6NWYyYzE1MGM4MGQxNDgwZmFkNTk3ODQxNmFiYjdhZTk="
    ),
  ));
  $response = curl_exec($curl);
  $response1 = json_decode($response, true);
  $token = $response1['access_token'];
  curl_close($curl);
  ?>
  <script>
    var token = '<?php echo $token; ?>';
  </script>
  <!--Spotify api-->
  <script src="<?php echo get_template_directory_uri() . '/js/spotify-web-api.js'; ?>" type="text/javascript"></script>
  <!--Nav Color Change-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/navColorChange.css'; ?>" type="text/css" media="screen">
  <!-- Custom styles Animate menu -->
  <link href="<?php echo get_template_directory_uri() . '/css/hamburgers.css'; ?>" rel="stylesheet">
  <!-- Custom styles Mask -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/mask.css'; ?>" type="text/css" media="screen">
</head>

<body id="home">
  <!-- Navigation mobile-->
  <nav class="navbar fixed-top d-lg-none bg-white ">
    <a href="#home">
      <img src="https://adrianalegria.com/wp-content/uploads/2019/06/AdrianAlegriaLogoNegro-300x63.png" class="LogoMobile" alt="AdrianAlegria Logo">
    </a>
    <button class="hamburger hamburger--collapse " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse text-center m-3 " id="navbarNav">
      <ul class="navbar-nav list-inline font-weight-bold">
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#music" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">MUSIC</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#radio" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">RADIO</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#photos" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">PHOTOS</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#gigs" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">GIGS</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#stores" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">STORES</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#booking" data-toggle="modal" data-target="#bookingModal" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">BOOKING</a>
        </li>
        <li class="nav-item m-3">
          <a data-easing="easeInOutQuad" href="#about" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">ABOUT</a>
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
  <div class="img-index container-fluid pl-0 section--1 section ">
    <div class="row m-0 pt-4 ">
      <!-- Navigation  desktop-->
      <nav class="col-3 d-none d-lg-block ">
        <div><img src="https://adrianalegria.com/wp-content/uploads/2019/06/AdrianAlegriaLogo.png" alt="AdrianAlegria Logo" class="img-fluid klanimate" data-delay="2"></div>
        <div class="menu fixed-top mt-5 ml-3 ">
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
      <div class="col-9 px-0 d-none d-lg-block klanimate" data-delay="2">
        <ul class="list-inline float-right">
          <li class="list-inline-item">
            <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-facebook-f fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://instagram.com/adrianalegriadj/" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-instagram fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://soundcloud.com/adrian-alegria" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-soundcloud fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.youtube.com/channel/UCHGwqkwO2lIR7h-oXLVRrUg" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-youtube fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://twitter.com/AdrianAlegriaDJ" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-twitter fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.mixcloud.com/adrianalegria/" target="_blank" class="text-light">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x "></i>
                <i class="fab fa-mixcloud fa-stack-1x text-dark"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
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
