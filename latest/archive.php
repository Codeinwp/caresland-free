<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package codeinwp
 */

get_header(); ?>

        <!-- [begin] content -->
        <div class="full-content-body ">
            <div class="container">
            
                <div id="primary" class="blog-content-wrap">
                
                   	<div id="main" class="blog-content" role="main">
                    
                    

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title">
								<?php
									if ( is_category() ) :
										single_cat_title();

									elseif ( is_tag() ) :
										single_tag_title();

									elseif ( is_author() ) :
										/* Queue the first post, that way we know
										 * what author we're dealing with (if that is the case).
										*/
										the_post();
										printf( __( 'Author: %s', 'codeinwp' ), '<span class="vcard">' . get_the_author() . '</span>' );
										/* Since we called the_post() above, we need to
										 * rewind the loop back to the beginning that way
										 * we can run the loop properly, in full.
										 */
										rewind_posts();

									elseif ( is_day() ) :
										printf( __( 'Day: %s', 'codeinwp' ), '<span>' . get_the_date() . '</span>' );

									elseif ( is_month() ) :
										printf( __( 'Month: %s', 'codeinwp' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'codeinwp' ) ) . '</span>' );

									elseif ( is_year() ) :
										printf( __( 'Year: %s', 'codeinwp' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'codeinwp' ) ) . '</span>' );

									elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
										_e( 'Asides', 'codeinwp' );

									elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
										_e( 'Images', 'codeinwp');

									elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
										_e( 'Videos', 'codeinwp' );

									elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
										_e( 'Quotes', 'codeinwp' );

									elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
										_e( 'Links', 'codeinwp' );

									else :
										_e( 'Archives', 'codeinwp' );

									endif;
								?>
							</h1>
							<?php
								// Show an optional term description.
								$term_description = term_description();
								if ( ! empty( $term_description ) ) :
									printf( '<div class="taxonomy-description">%s</div>', $term_description );
								endif;
							?>
						</header><!-- .page-header -->

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