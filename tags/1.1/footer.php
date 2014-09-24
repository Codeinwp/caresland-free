<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package codeinwp
 */
?>


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
            
            <div class="footer-box-wrap">
            	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                	<div class="footer-box">
						<?php dynamic_sidebar( 'footer-1' ); ?>
                	</div>
				<?php endif; ?>
            	<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                	<div class="footer-box">
						<?php dynamic_sidebar( 'footer-2' ); ?>
                	</div>
				<?php endif; ?>
            	<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                	<div class="footer-box">
						<?php dynamic_sidebar( 'footer-3' ); ?>
                	</div>
				<?php endif; ?>
            	<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                	<div class="footer-box">
						<?php dynamic_sidebar( 'footer-4' ); ?>
                	</div>
				<?php endif; ?> 
	        </div><!-- .footer-widgets-wrap -->
			
            <div class="clear"></div>
            
			<div class="site-info-contact">
            	
	            <?php if (get_theme_mod('codeinwp_footer_info_email')) : ?>
            		<p class="c-email"><a href="mailto:<?php echo get_theme_mod('codeinwp_footer_info_email'); ?>"><?php _e('Write us an Email','codeinwp'); ?></a></p>
                <?php endif; ?>
                <?php if (get_theme_mod('codeinwp_footer_info_chat')) : ?>
                	<p class="c-chat"><a href="<?php echo get_theme_mod('codeinwp_footer_info_chat'); ?>"><?php _e('Live Chat 24 / 7','codeinwp'); ?></a></p>
                <?php endif; ?>
                <?php if (get_theme_mod('codeinwp_footer_info_support')) : ?>
                	<p class="c-support"><?php _e('Support:','codeinwp'); ?> <?php echo get_theme_mod('codeinwp_footer_info_support'); ?></p>
                <?php endif; ?>
            </div>

            <div class="site-info">
                <?php _e( 'Copyright &copy; ', 'codeinwp' ); ?>
                <?php echo date( 'Y' ); ?>
                <strong> <?php bloginfo( 'name' ); ?> </strong>
                <?php _e( '| All rights reserved.' ); ?>
            </div><!-- .site-info -->
			<div class="clear"></div>
			<div class="poweredby">
				<a href="http://themeisle.com/themes/caresland/?utm_source=caresland&amp;utm_medium=link&amp;utm_campaign=themefooter" target="_blank">Caresland</a> powered by <a href="http://wordpress.org/" target="_blank">WordPress</a>
			</div>

    	</div><!-- .container -->

	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>