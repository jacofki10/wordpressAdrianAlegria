<?php get_header(); ?>
<!-- Latest Albums / Singles -->
<section class="container-fluid p-5 section--2 section section--bg col-lg-10 mx-auto" id="music">
  <h2 class="text-left text-uppercase text-dark klanimate" data-duration="1.8">Latest Albums / Singles</h2>
  <hr class="mb-3">
  <ul id="grid" class="row klanimate pl-0" data-duration="3" data-delay="0.5"></ul>
</section>
<!-- Radio -->
<section class="img-brand container-fluid p-3 section--3 section" id="radio">
  <div class="col-lg-10 mx-auto py-5">
    <h2 class="text-left text-uppercase text-white klanimate" data-duration="1.8">Radio Podcasts</h2>
    <hr class="mb-4">
    <?php
    $homePageRadio = new WP_Query(array(
      'post_per_page' => 3,
      'post_type' => 'radio'
    ));
    while ($homePageRadio->have_posts()) {
      $homePageRadio->the_post(); ?>
      <div class="col-md-7 p-0 mb-4 klanimate" data-duration="3" data-delay="0.5">
        <?php the_title(); ?>
      </div>
    <?php } ?>
    <div class="col-md-7 p-5 text-center klanimate" data-duration="2" data-delay="0.5">
      <button type="button" class="btn btn-outline-light btn-lg rounded-0">Show more</button>
    </div>
  </div>
</section>
<!--Photos-->
<!-- <section class="container-fluid p-5 section--4 section section--bg  col-lg-10 mx-auto" id="photos">
  <h2 class="text-left text-uppercase klanimate" data-duration="2">Photos</h2>
  <hr class="mb-5">
  <div id="instafeed" class="row klanimate" data-duration="3" data-delay="0.5">
  </div>
</section> -->
<!--Social Media-->
<section class="container-fluid px-5 text-white bg-dark section--5 section">
  <div class="col-lg-11 mx-auto klanimate row text-center" data-duration="3">
    <div class="col-md-2 p-4">
      <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
        <span class="fa-stack fa-1x m-3">
          <i class="fab fa-facebook-f fa-2x"></i>
        </span>
      </a>
      <h5>Facebook</h5>
    </div>
    <div class="col-md-2 p-4">
      <a href="https://instagram.com/adrianalegriadj/" target="_blank" class="text-light">
        <span class="fa-stack fa-1x m-3">
          <i class="fab fa-instagram fa-2x"></i>
        </span>
      </a>
      <h5>Instagram</h5>
    </div>
    <div class="col-md-2 p-4">
      <a href="https://soundcloud.com/adrian-alegria" target="_blank" class="text-light">
        <span class="fa-stack fa-1x m-3">
          <i class="fab fa-soundcloud fa-2x"></i>
        </span>
      </a>
      <h5>Soundcloud</h5>
    </div>
    <div class="col-md-2 p-4">
      <a href="https://www.youtube.com/channel/UCHGwqkwO2lIR7h-oXLVRrUg" target="_blank" class="text-light">
        <span class="fa-stack fa-1x m-3">
          <i class="fab fa-youtube fa-2x"></i>
        </span>
      </a>
      <h5>Youtube</h5>
    </div>
    <div class="col-md-2 p-4">
      <a href="https://twitter.com/AdrianAlegriaDJ" target="_blank" class="text-light">
        <span class="fa-stack fa-1x m-3">
          <i class="fab fa-twitter fa-2x"></i>
        </span>
      </a>
      <h5>Twitter</h5>
    </div>
    <div class="col-md-2 p-4">
      <a href="https://open.spotify.com/artist/24w4dGFG8bDi3wG1qbnDM7" target="_blank" class="text-light">
        <span class="fa-stack fa-1x m-3">
          <i class="fab fa-spotify fa-2x"></i>
        </span>
      </a>
      <h5>Spotify</h5>
    </div>
  </div>
</section>
<!-- Gigs -->
<section class="container-fluid p-5 text-center section--6 section section--bg col-lg-10 mx-auto" id="gigs">
  <h2 class="text-left text-uppercase klanimate" data-duration="2">Gigs</h2>
  <hr class="mb-5">
  <?php
  $options = array('scope' => 'all', 'limit' => 5);
  echo gigpress_shows($options);
  ?>
</section>
<!--STORES-->
<section class="img-store container-fluid p-3 section--7 section" id="stores">
  <div class="col-lg-10 mx-auto py-5">
    <h2 class="text-uppercase text-white klanimate" data-duration="2">Stores</h2>
    <div class="col-md-7 p-0 mb-4  ml-auto klanimate" data-duration="3" data-delay="0.5">
      <a href="https://itunes.apple.com/us/artist/adrian-alegria/id540608442"><img src="https://adrianalegria.com/wp-content/uploads/2019/06/itunesMusic.png" alt="Itunes Store Logo" class="img-fluid"></a>
    </div>
    <div class="col-md-7 p-0 mb-4  ml-auto klanimate" data-duration="3" data-delay="0.7">
      <a href="https://www.beatport.com/artist/adrian-alegria/232753"><img src="https://adrianalegria.com/wp-content/uploads/2019/06/beatportMusic.png" alt="Beatport Store Logo" class="img-fluid"></a>
    </div>
    <div class="col-md-7 p-0 mb-4  ml-auto klanimate" data-duration="3" data-delay="0.9">
      <a href="https://www.traxsource.com/artist/118712/adrian-alegria"><img src="https://adrianalegria.com/wp-content/uploads/2019/06/traxsourceLogo.png" alt="Traxsource Store Logo" class="img-fluid"></a>
    </div>
    <div class="col-md-7 p-0 mb-4  ml-auto klanimate" data-duration="3" data-delay="1.1">
      <a href="https://www.junodownload.com/artists/Adrian+Alegria"><img src="https://adrianalegria.com/wp-content/uploads/2019/06/junoDownloadLogo.png" alt="JuniDownload Store Logo" class="img-fluid"></a>
    </div>
  </div>
</section>
<!--Booking-->
<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Talk to Me!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="3" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--About-->
<section class="container-fluid p-5 section--7 section section--bg col-lg-10 mx-auto" id="about">
  <h2 class="text-left text-uppercase klanimate" data-duration="2">About</h2>
  <hr class="mb-5">
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="0.5">ESP</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="0.5">
    Adrian Alegria es un joven compositor y DJ vasco con una gran proyección. Su música ha sonado en sesiones de artistas de la talla de Roger Sanchez, Cristian Varela o Tocadisco y ha conseguido incluir varios de sus lanzamientos entre las listas de los más vendidos. Ha actuado en importantes cabinas de España y del extranjero, en Londres, habiendo sido residente habitual en varias salas como Txitxarro, Itzela-Dcibelia o Sala Totem.</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="0.7">Pianista desde los 5 años, poco a poco se fue adentrando en el mundo de la música electrónica. Su sonido personal, con bases House, Deep o Techno, influenciado por sonidos afro, funk, jazz o étnico, consigue transmitir sensaciones únicas al público. Sus producciones se pueden encontrar en sellos discográficos como Piston Recordings, Younan Music o SELECTECHouse Label, que ya han apostado por su talento. También es locutor de radio en ATICA FM, con su programa Alegria Sessions.</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="0.9">Actualmente está trabajando en nuevo material para su próximo album.</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="1">ING</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="1.1">Adrian Alegria is a young composer and DJ from the Basque Country who has a huge projection. Some of his works have made it to best-selling lists and artists like Roger Sanchez, Cristian Varela or Tocadisco have played his music in their sessions. He has played in many relevant cabines in Spain and London, and he has been the resident DJ in Txitarro, Itzela-Dcibelia and Sala Totem.</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="1.3">Pianist since he was 5, he slowly introduced into electronic music. His personal sound mixes House, Deep and Techno bases with afro, funk, jazz and ethnic music; transmiting unique feelings to the audience. His works can be found in record labels like Piston Recording, Younan Music or SELECTECHouse which have already worked with him. He also works in the radio: he has a program called Alegria Sessions in ATICA FM.</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="1.5">At the moment he is working on some stuff for his next project.</p>
</section>
<?php get_footer(); ?>
