<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package caresland-lite
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
	            <div class="line-orange"></div>
                <h1 class="widget-title"><?php _e( 'Search', 'caresland-lite' ); ?></h1>
				<?php get_search_form(); ?>
                <div class="bottom-shadow"></div>
			</aside>

			<aside id="archives" class="widget">
	            <div class="line-orange"></div>
				<h1 class="widget-title"><?php _e( 'Archives', 'caresland-lite' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
                <div class="bottom-shadow"></div>
			</aside>

			<aside id="meta" class="widget">
	            <div class="line-orange"></div>
				<h1 class="widget-title"><?php _e( 'Meta', 'caresland-lite' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
                <div class="bottom-shadow"></div>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->