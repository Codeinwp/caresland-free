<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package codeinwp
 */

get_header(); ?>

        <!-- [begin] content -->
        <div class="full-content-body ">
            <div class="container">

                <h1><?php _e('Blog','codeinwp'); ?></h1>
                
                <div id="primary" class="blog-content-wrap">
                
                   	<div id="main" class="blog-content" role="main">

					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php 
							if (function_exists("cwp_pagination")) {
								cwp_pagination();
							} else{
								codeinwp_paging_nav();
							} 
						?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
   
                    </div><!-- .blog-content -->
				</div><!-- .blog-content-wra -->

                <div class="sidebar">
					<?php get_sidebar(); ?>
				</div><!-- .sidebar -->
		</div>
	</div>

<?php get_footer(); ?>