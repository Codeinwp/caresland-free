<?php
/**
 * The template for displaying Search Results pages.
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
								<h1 class="page-title"><?php printf( __( 'Search results for: %s', 'codeinwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->


							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								
								<?php get_template_part( 'content', 'search' ); ?>

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