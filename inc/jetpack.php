<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ti_caresland_lite
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ti_caresland_lite_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ti_caresland_lite_jetpack_setup' );
