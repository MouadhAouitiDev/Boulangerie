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
<div class="copyright-wrapper">
        	<div class="container">
                <div class="copyright">
                    	<p><a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?>  <?php echo esc_attr(date_i18n( __( 'Y', 'Ma boulangerie francaise' ) )); ?> <?php esc_html_e('. Developper par Mouadh Aouiti','bread-and-cake'); ?></p>               
                </div><!-- copyright --><div class="clear"></div> 

            </div><!-- container -->
        </div>
    </div>
        


</body>
</html>