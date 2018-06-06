<?php
/**
 * The template used for displaying home page.
 *
 * @package ti_caresland_lite
 */

get_header(); ?>

	   <!-- [begin] content -->
<div id="content" class="content-area" role="main">



	<?php if (!is_home()) : ?>

		<div class="content-body">
			<div class="container">

				<div class="content-text">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; // end of the loop. ?>

				</div>

			</div><!-- .container -->
		</div><!-- .content-body -->

	<?php else : ?>

		<div class="full-content-body ">
			<div class="container">

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
				<?php if (get_next_posts_link() != null ) : ?>
					<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			
				<?php endif; ?>
				<?php if (get_previous_posts_link() != null ) : ?>
				<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

				<?php endif; ?>
									
		
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


	<?php endif; ?>

	</div>

<?php get_footer(); ?>
