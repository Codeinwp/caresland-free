<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ti_caresland_lite
 */

get_header(); ?>


        <div id="primary" class="full-content-body ">
            <div class="container">

                <div class="line-orange"></div>

                <div class="content-wrap">
                    <div id="main"  class="content-inside"  role="main">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'page' ); ?>

						<?php endwhile; // end of the loop. ?>

                    </div><!-- .content-inside -->
                    <div class="botttom-box-shadow-center"></div>
                    <div class="botttom-box-shadow-left"></div>
                    <div class="botttom-box-shadow-right"></div>

                </div>

                <?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

            </div><!-- .container -->
        </div><!-- full-content-body -->

<?php get_footer(); ?>
