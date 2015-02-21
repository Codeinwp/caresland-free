<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ti_caresland_lite
 */

get_header(); ?>

       <!-- [begin] content -->
        <div id="primary" class="full-content-body ">
            <div class="container">

                <div class="blog-content-wrap">

                   	<div id="main" class="blog-content single-content">

					<?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'single' ); ?>

                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>

                    </div><!-- .blog-content -->
				</div><!-- .blog-content-wrap -->

                <div class="sidebar">
					<?php get_sidebar(); ?>
                </div>
		</div>
	</div>

<?php get_footer(); ?>