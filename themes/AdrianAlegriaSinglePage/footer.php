 <!-- Footer -->
 <footer class="bg-dark text-center p-3 ">
   <div class="container my-5 text-white ">
     <h1 class="text-uppercase font-weight-bold px-3 anna">Adrian Alegria.</h1>
     <div class="copyright text-center my-4">
       <small>Copyright &copy; 2019<a href="http://diegoarnes.viajaconnos.com/" class="text-white"> Diego Arnes </a></small>
     </div>
     <ul class="list-inline mb-0">
       <li class="list-inline-item">
         <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
           <span class="fa-stack"><i class="fab fa-facebook-f fa-lg"></i></span>
         </a>
       </li>
       <li class="list-inline-item">
         <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
           <span class="fa-stack"><i class="fab fa-twitter fa-lg"></i></span>
         </a>
       </li>
       <li class="list-inline-item">
         <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
           <span class="fa-stack "><i class="fab fa-instagram fa-lg"></i></span>
         </a>
       </li>
       <li class="list-inline-item">
         <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
           <span class="fa-stack"><i class="fab fa-youtube fa-lg"></i></span>
         </a>
       </li>
       <li class="list-inline-item">
         <a href="https://www.facebook.com/adrianalegriaofficial" target="_blank" class="text-light">
           <span class="fa-stack "><i class="fab fa-spotify fa-lg"></i></span>
         </a>
       </li>
     </ul>
   </div>
 </footer>
 <!---- Plugin JavaScript ---->
 <!-- Scroll Animate JavaScript -->
 <script src="<?php echo get_template_directory_uri(); ?>/js/klAnimate/greensock.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/klAnimate/kl-animate.min.js"></script>
 <script>
   jQuery.klAnimate();
 </script>
 <!--Nav Color Change-->
 <script src="<?php echo get_template_directory_uri() . '/js/navColorChange.js'; ?>"></script>
 <!-- Scroll down JavaScript -->
 <script src="<?php echo get_template_directory_uri() . '/js/smooth-scroll.polyfills.js'; ?>"></script>
 <script>
   var scrollDown = new SmoothScroll('a[href*="#"]');
 </script>
 <!-- shuffleLetters JavaScript -->
 <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.shuffleLetters.js"></script>
 <!-- Contact Form JavaScript -->
 <script src="<?php echo get_template_directory_uri(); ?>/js/mail/contact_me.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/mail/freelancer.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/mail/jqBootstrapValidation.js"></script>

 <?php wp_footer(); ?>
 </body>

 </html>
