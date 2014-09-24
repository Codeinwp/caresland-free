<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package codeinwp
 */

get_header(); ?>

        <div id="primary" class="full-content-body ">
            <div class="container">

                <div class="line-orange"></div>

                <div class="content-wrap">
                    <div id="main"  class="content-inside"  role="main">


					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'codeinwp' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'codeinwp' ); ?></p>

							<?php get_search_form(); ?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->


                    </div><!-- .content-inside -->
                    <div class="botttom-box-shadow-center"></div>
                    <div class="botttom-box-shadow-left"></div>
                    <div class="botttom-box-shadow-right"></div>

                </div>
                
            </div><!-- .container -->
        </div><!-- full-content-body -->

<?php get_footer(); ?>