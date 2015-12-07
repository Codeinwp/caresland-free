<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package ti_caresland_lite
 */

get_header(); ?>

        <!-- [begin] content -->
        <div class="full-content-body ">
            <div class="container">

                <div id="primary" class="blog-content-wrap">

                   	<div id="main" class="blog-content" role="main">


						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title"><?php printf( __( 'Search results for: %s', 'caresland-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->


							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'content', 'search' ); ?>

							<?php endwhile; ?>

							
							<?php if(get_next_posts_link() != null ) : ?>
								<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
						
							<?php endif; ?>
							<?php if(get_previous_posts_link() != null ) : ?>
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

<?php get_footer(); ?>