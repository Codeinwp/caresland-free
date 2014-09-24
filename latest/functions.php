<?php
/**
 * caresland-lite functions and definitions
 *
 * @package caresland-lite
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

function caresland_lite_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on caresland-lite, use a find and replace
	 * to change 'caresland-lite' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'caresland-lite', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'my-primary' => __( 'The Primary Menu', 'caresland-lite' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'codeinwp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	$args = array(
		'width'         => 980,
		'height'        => 60,
		'default-image' => '',
		'uploads'       => true,
	);
	add_theme_support( 'custom-header', $args );
}

add_action( 'after_setup_theme', 'caresland_lite_setup' );


/**
 * Register widgetized area and update sidebar with default widgets.
 */
function caresland_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'caresland-lite' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="line-orange"></div>',
		'after_widget'  => '<div class="bottom-shadow"></div></aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer1', 'caresland-lite' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="footer-box-inside">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="footer-widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer2', 'caresland-lite' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class="footer-box-inside">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="footer-widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer3', 'caresland-lite' ),
		'id'            => 'footer-3',
		'before_widget' => '<div id="%1$s" class="footer-box-inside">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="footer-widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer4', 'caresland-lite' ),
		'id'            => 'footer-4',
		'before_widget' => '<div id="%1$s" class="footer-box-inside">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="footer-widget-title">',
		'after_title'   => '</h1>',
	) );	
}
add_action( 'widgets_init', 'caresland_lite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function caresland_lite_scripts() {

	wp_enqueue_style( 'caresland_lite_bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style( 'caresland_lite_style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'caresland_lite_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'v3.0.3', true );

	wp_enqueue_script( 'caresland_lite_tinynav', get_template_directory_uri() . '/js/tinynav.min.js', array(), 'v1.1', true );
	
	wp_enqueue_script( 'caresland_lite_custom-scrips', get_template_directory_uri() . '/js/functions.js', array('jquery'), 'v1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'caresland_lite_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* no title */
add_filter( 'the_title', 'caresland_lite_title'); 
function caresland_lite_title ($title) { 
    if( $title == "" ){ 
        $title = "(No title)"; 
    } 
    return $title; 
}

/* pagination */
function caresland_lite_pagination($pages = '', $range = 3)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\">";
         if($paged > 1 && $showitems < $pages)
		 	echo "<a href='".get_pagenum_link($paged - 1)."' class=\"pagination-prev\"></a>";
			
		$ok_l = true;
		$ok_r = true;

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){	
			
			$border_left = '';
			$border_right = '';
			
				if($paged-$range <= 0) 
					$br1 = 1; 
				else 
					$br1 = $paged-$range;
				
				if ( $paged+$range >= $pages) 
					$br2 = $pages; 
				else 
					$br2 = $paged + $range; 
			 	
				if($i <= $br1 && $ok_l == true) { $border_left = 'border-left'; $ok_l = false; }
				if($i >= $br2 && $ok_r == true) { $border_right = 'border-right'; $ok_r = false;}
				
                echo ($paged == $i)? "<span class=\"".$border_left." ".$border_right." current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"".$border_left." ".$border_right." inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\" class=\"pagination-next\"></a>";  
         echo "</div>\n";
     }
}

/* Set the image size by cropping the image */
add_image_size( 'event-thumbnail', 325, 200, true );
add_image_size( 'post-thumbnail', 315, 172, true );


/*
 * Search only post
 */
function caresland_lite_SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','caresland_lite_SearchFilter');


function caresland_lite_add_editor_styles() {
    add_editor_style( '/css/custom-editor-style.css' );
}
add_action( 'init', 'caresland_lite_add_editor_styles' );

add_action( 'customize_controls_print_scripts', 'caresland_lite_add_customizer_button' );

function caresland_lite_add_customizer_button()
{
    wp_register_script( 'cwp_customizer_script', get_template_directory_uri().'/js/customizer_button.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script( 'cwp_customizer_script' );
}