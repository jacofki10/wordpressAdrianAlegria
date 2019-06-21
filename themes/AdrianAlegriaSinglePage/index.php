<?php get_header(); ?>
<!-- Latest Albums / Singles -->
<section class="container-fluid p-5 section--2 section section--bg col-lg-10 mx-auto" id="music">
  <h2 class="text-left text-uppercase text-dark klanimate" data-x="400" data-duration="2">Latest Albums / Singles</h2>
  <hr class="mb-3">
  <ul id="grid" class="row klanimate" data-duration="3" data-delay="1"></ul>
</section>
<!-- Radio -->
<section class="img-brand container-fluid p-3 section--3 section" id="radio">
  <div class="col-lg-10 mx-auto py-5">
    <h2 class="text-left text-uppercase text-white klanimate" data-x="400" data-duration="2">Radio Podcasts</h2>
    <hr class="mb-4">
    <?php
    $homePageRadio = new WP_Query(array(
      'post_per_page' => 3,
      'post_type' => 'radio'
    ));
    while ($homePageRadio->have_posts()) {
      $homePageRadio->the_post(); ?>
      <div class="col-md-7 p-0 mb-4 klanimate" data-duration="3" data-delay="1">
        <?php the_title(); ?>
      </div>
    <?php } ?>
    <div class="col-md-7 p-5 text-center klanimate" data-duration="2" data-delay="1">
      <button type="button" class="btn btn-outline-light btn-lg rounded-0">Show more</button>
    </div>
  </div>
</section>
<!--Photos-->
<section class="container-fluid p-5 section--4 section section--bg  col-lg-10 mx-auto" id="photos">
  <h2 class="text-left text-uppercase klanimate" data-x="400" data-duration="2">Photos</h2>
  <hr class="mb-5">
  <div id="instafeed" class="row klanimate" data-duration="3" data-delay="1">
  </div>
</section>
<!--Social Media-->
<section class="container-fluid px-5 text-white bg-dark section--5 section">
  <div class="col-lg-11 mx-auto klanimate" data-duration="3">
    <div class="row text-center">
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
  </div>
</section>
<!-- Gigs -->
<section class="container-fluid p-5 text-center section--6 section section--bg col-lg-10 mx-auto" id="gigs">
  <h2 class="text-left text-uppercase klanimate" data-x="400" data-duration="2">Gigs</h2>
  <hr class="mb-5">
  <?php
  $options = array('scope' => 'all', 'limit' => 5);
  echo gigpress_shows($options);
  ?>
</section>
<!--STORES-->
<section class="img-store container-fluid p-3 section--7 section" id="stores">
  <div class="col-lg-10 mx-auto py-5">
    <h2 class="text-uppercase text-white klanimate" data-x="400" data-duration="2">Stores</h2>
    <div class="col-md-7 p-0 mb-4  ml-auto klanimate" data-duration="3" data-delay="1">
      <a href="https://itunes.apple.com/us/artist/adrian-alegria/id540608442"><img src="https://adrianalegria.com/wp-content/uploads/2019/06/itunesMusic.png" alt="" class="img-fluid"></a>
    </div>
    <div class="col-md-7 p-0 mb-4  ml-auto klanimate" data-duration="3" data-delay="1.2">
      <a href="https://www.beatport.com/artist/adrian-alegria/232753"><img src="https://adrianalegria.com/wp-content/uploads/2019/06/beatportMusic.png" alt="" class="img-fluid"></a>
    </div>
    <div class="col-md-7 p-0 mb-4  ml-auto klanimate" data-duration="3" data-delay="1.4">
      <a href="https://www.traxsource.com/artist/118712/adrian-alegria"><img src="https://adrianalegria.com/wp-content/uploads/2019/06/traxsourceLogo.png" alt="" class="img-fluid"></a>
    </div>
    <div class="col-md-7 p-0 mb-4  ml-auto klanimate" data-duration="3" data-delay="1.6">
      <a href="https://www.junodownload.com/artists/Adrian+Alegria"><img src="https://adrianalegria.com/wp-content/uploads/2019/06/junoDownloadLogo.png" alt="" class="img-fluid"></a>
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
  <h2 class="text-left text-uppercase klanimate" data-x="400" data-duration="2">About</h2>
  <hr class="mb-5">
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="1">Adrian Alegria is a young DJ and producer with an amazing projection.</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="1.2">Born in Barakaldo (Vizcaya) currently living in Pamplona (Navarra). He started very young with the music, at 5
    years he began with the piano and continued studying until the 15. Attracted by electronic music, he started
    mixing on his own and did not take long to start his career as a DJ.</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="1.4">It has undergone major clubs in the Basque Country, Navarra and La Rioja as Txitxarro, Itzela -Dcibelia,
    Totem-Box, Movie Music Club, Pagoa, Crepusculo, Txuribeltz ... and also abroad, in London, in the Club No.65.</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="1.6">Today is superior sound technician and his first productions already have tapped by international artists such as
    Roger Sanchez, Cristian Varela, Tocadisco, De La Swing, Peter Gelderblom, Dennis Cruz ... and can be found on sale
    through seals that have already opted for it as Doppelgaenger, Ritmikal Records, Ausara Recordings, Selectechouse
    Label, DaMusic, Red Drum Music, Blum Recordings, Bullet Proof Records and so on. His productions are supported by
    large artists as Marco Carola, Luciano, Dennis Cruz, Joseph Capriati or Neverdogs. Thanks to his passion for
    electronic music his evolution has been very rapid. In 2011 he began his career in the radio at Espiral FM
    Pamplona, ​taking the title of radio technician, with its "Tribal Beats" program. Currently he works for ÁTICA FM
    in his new "Alegria Sessions" program.</p>
  <p class="text-justify font-weight-bold klanimate" data-duration="3" data-delay="1.9">His sets and productions are very personal. Melodies, tribal influences, atmospheres, mixed with bases House,
    Deep Techno actually get to those variations of rhythms and transmit unique sensations to the public.</p>
</section>
<?php get_footer(); ?>
