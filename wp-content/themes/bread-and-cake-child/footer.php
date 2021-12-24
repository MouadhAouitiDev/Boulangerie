<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bread and Cake
 */
?>
</div><!-- main-container -->
<?php wp_footer(); ?>
<footer id="footer"class=" text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h4 class="footer-title">À propos de nous</h4>
		<div></div>

        <p class=" mb-0">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla sapien in.

acus feugiat molestie. Vivamus ullamcorper erat quam, sit amet rutrum sapien eleifend eget. Nunc at mauris ac lectus sagittis egestas. Aliquam.
        </p>
		<p>
		 <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?></p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h4 class="footer-title mb-0">Flux Instagram</h4>
		<div></div>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="" style="color: #c8c7c5;
    text-decoration: none;">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!" class="" style="color: #c8c7c5;
    text-decoration: none;">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!" class="" style="color: #c8c7c5;
    text-decoration: none;">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!" class="" style="color: #c8c7c5;
    text-decoration: none;">Lorem Ipsum</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h4 class="footer-title">Horaires d'ouvertures</h4>
				<div></div>


  
   <span class="spanleft">Lundi</span>
	<span class="">8:00 - 16:00</span>
   <div class="clear"></div>
   <span class="spanleft">Mardi</span>
	<span class="spanright">8:00 - 16:00</span>
   <div class="clear"></div>
   <span class="spanleft">Mercredi</span>
	<span class="spanright">12:00 - 20:00</span>
   <div class="clear"></div>
   <span class="spanleft">Jeudi</span>
 <span class="spanright">8:00 - 16:00</span>
   <div class="clear"></div>
   <span class="spanleft">Vendredi</span>
	<span class="spanright">8:00 - 16:00</span>
   <div class="clear"></div>
   <span class="spanleft">samedi</span>
    <span class="spanright">8:00 - 16:00</span>
   <div class="clear"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h4 class="footer-title mb-0">Nous contacter</h4>
				<div></div>


       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla sapien in</p>
	   <div class="contactdetail">
                	                	  <p><i class="fa fa-map-marker"></i> 123, Saint Andrew Street, Golden Avenue, United States</p>
                    	
               
					                        <p><i class="fa fa-phone"></i> +01 88 888 8888</p>
                                         
					                      <p><i class="fa fa-envelope"></i><a class="footer-title"href="mailto:info@websitename.com"> info@websitename.com</a></p>
                                       
                </div>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

 
</footer>
<div class="copyright-wrapper">
        	<div class="container">
                <div class="copyright">
                    	<p><a class="footer-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?>  <?php  ?> <?php esc_html_e('-&copy;2021 Powred by ArdorTech','bread-and-cake'); ?></p>               
                </div><!-- copyright --><div class="clear"></div> 

            </div><!-- container -->
        </div>
    </div>
        


</body>
</html>