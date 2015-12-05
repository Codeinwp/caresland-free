<?php
/*
Template Name: Page template with sidebar
*/
get_header();
?>
        <!-- [begin] content -->
        <div class="full-content-body ">
            <div class="container">
            
                <div id="primary" class="blog-content-wrap">
                
                   	<div id="main" class="blog-content" role="main">
                    
                    

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', 'page' );
							?>

						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>

					<?php 
						if (function_exists("cwp_pagination")) {
							cwp_pagination();
						} else{
							codeinwp_paging_nav();
						} 
					?>
                    </div><!-- .blog-content -->
				</div><!-- .blog-content-wra -->

                <div class="sidebar">
					<?php get_sidebar(); ?>
				</div><!-- .sidebar -->

		</div>
	</div>
<?php get_footer(); ?>
