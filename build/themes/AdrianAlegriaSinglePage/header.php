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
  <script src="<?php echo get_template_directory_uri() . '/js/vendors/spotify-web-api.js'; ?>"></script>
</head>

<body id="home">
  <header class="img-index container-fluid  section--1 section row m-0">
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
    <!-- Navigation  desktop-->
    <nav class="col-3 d-none d-lg-block pt-3 px-0">
      <img src="https://adrianalegria.com/wp-content/uploads/2019/06/AdrianAlegriaLogo.png" alt="AdrianAlegria Logo" class="img-fluid klanimate" data-delay="1.5">
      <div class="menu fixed-top ml-3 js-replace js-replace--reverse">
        <div class="js-replace__item js-replace__item--active">
          <div class="js-replace__content">
            <a data-easing="easeInOutQuad" href="#home" class="logo">HOME</a>
            <a data-easing="easeInOutQuad" href="#music" class="logo">MUSIC</a>
            <a data-easing="easeInOutQuad" href="#radio" class="logo">RADIO</a>
            <a data-easing="easeInOutQuad" href="#photos" class="logo">PHOTOS</a>
            <a data-easing="easeInOutQuad" href="#gigs" class="logo">GIGS</a>
            <a data-easing="easeInOutQuad" href="#stores" class="logo">STORES</a>
            <a data-easing="easeInOutQuad" href="#booking" class="logo" data-toggle="modal" data-target="#bookingModal">BOOKING</a>
            <a data-easing="easeInOutQuad" href="#about" class="logo">ABOUT</a>
          </div>
        </div>
        <div class="js-replace__item">
          <div class="js-replace__content">
            <a data-easing="easeInOutQuad" href="#home" class="logo--invert">HOME</a>
            <a data-easing="easeInOutQuad" href="#music" class="logo--invert">MUSIC </a>
            <a data-easing="easeInOutQuad" href="#radio" class="logo--invert">RADIO </a>
            <a data-easing="easeInOutQuad" href="#photos" class="logo--invert">PHOTOS </a>
            <a data-easing="easeInOutQuad" href="#gigs" class="logo--invert">GIGS </a>
            <a data-easing="easeInOutQuad" href="#stores" class="logo--invert">STORES </a>
            <a data-easing="easeInOutQuad" href="#booking" class="logo--invert" data-toggle="modal" data-target="#bookingModal">BOOKING </a>
            <a data-easing="easeInOutQuad" href="#about" class="logo--invert">ABOUT </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Social media-->
    <ul class="col-9 px-0 pt-3 d-none d-lg-block klanimate" data-delay="1.5">
      <li class="list-inline-item float-right">
        <a href="https://open.spotify.com/artist/24w4dGFG8bDi3wG1qbnDM7" target="_blank" class="text-light">
          <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x "></i>
            <i class="fab fa-spotify fa-stack-1x text-dark"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item float-right">
        <a href="https://www.mixcloud.com/adrianalegria/" target="_blank" class="text-light">
          <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x "></i>
            <i class="fab fa-mixcloud fa-stack-1x text-dark"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item float-right">
        <a href="https://twitter.com/AdrianAlegriaDJ" target="_blank" class="text-light">
          <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x "></i>
            <i class="fab fa-twitter fa-stack-1x text-dark"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item float-right">
        <a href="https://www.youtube.com/channel/UCHGwqkwO2lIR7h-oXLVRrUg" target="_blank" class="text-light">
          <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x "></i>
            <i class="fab fa-youtube fa-stack-1x text-dark"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item float-right">
        <a href="https://soundcloud.com/adrian-alegria" target="_blank" class="text-light">
          <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x "></i>
            <i class="fab fa-soundcloud fa-stack-1x text-dark"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item float-right">
        <a href="https://instagram.com/adrianalegriadj/" target="_blank" class="text-light">
          <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x "></i>
            <i class="fab fa-instagram fa-stack-1x text-dark"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item float-right pr-2">
        <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
          <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x "></i>
            <i class="fab fa-facebook-f fa-stack-1x text-dark"></i>
          </span>
        </a>
      </li>
    </ul>
  </header>
