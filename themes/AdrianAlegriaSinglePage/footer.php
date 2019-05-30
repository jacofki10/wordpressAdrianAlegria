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
 <?php wp_footer(); ?>
 <!-- Plugin JavaScript -->
 <!--Grid Scroll Effects-->
 <script src="<?php echo get_template_directory_uri() . '/js/gridLoadingEffects/masonry.pkgd.min.js'; ?>" type="text/javascript"></script>
 <script src="<?php echo get_template_directory_uri() . '/js/gridLoadingEffects/imagesloaded.js'; ?>" type="text/javascript"></script>
 <script src="<?php echo get_template_directory_uri() . '/js/gridLoadingEffects/classie.js'; ?>" type="text/javascript"></script>
 <script src="<?php echo get_template_directory_uri() . '/js/gridLoadingEffects/AnimOnScroll.js'; ?>" type="text/javascript"></script>

 <script>
   new AnimOnScroll(document.getElementById('grid'), {
     minDuration: 0.7,
     maxDuration: 1.7,
     viewportFactor: 0.4
   });
 </script>

 <!-- Contact Form JavaScript -->
 <script src="<?php echo get_template_directory_uri(); ?>/js/contact_me.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/freelancer.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/jqBootstrapValidation.js"></script>
 <!-- Scroll down JavaScript -->
 <script>
   var scrollDown = new SmoothScroll('a[href*="#"]');
 </script>

 <!-- Custom scripts for this template -->
 <!-- Optional JavaScript -->
 <script src="<?php echo get_template_directory_uri(); ?>/js/animateMenu/main.js"></script>
 </body>

 </html>
