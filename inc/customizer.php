<?php
/**
 * caresland-lite Theme Customizer
 *
 * @package caresland-lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function codeinwp_customize_register( $wp_customize ) {

	class caresland_lite_Theme_Support extends WP_Customize_Control
	{
		public function render_content()
		{

		}

	} 


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	$wp_customize->remove_control('header_textcolor');

	/* theme notes */
	$wp_customize->add_section( 'codeinwp_theme_notes' , array(
		'title'      => __('ThemeIsle theme notes','caresland-lite'),
		'description' => sprintf( __( "Thank you for being part of this! We've spent almost 6 months building ThemeIsle without really knowing if anyone will ever use a theme or not, so we're very grateful that you've decided to work with us. Wanna <a href='http://themeisle.com/contact/' target='_blank'>say hi</a>?
		<br/><br/><a href='http://themeisle.com/demo/?theme=Caresland Free' target='_blank' />View Theme Demo</a> | <a href='http://themeisle.com/forums/forum/caresland-free' target='_blank'>Get theme support</a><br/><br/><a href='http://themeisle.com/documentation-caresland-free' target='_blank'>Documentation</a>")),
		'priority'   => 30,
	));
	$wp_customize->add_setting(
        'codeinwp_theme_notes',array('sanitize_callback' => 'caresland_lite_sanitize_text'));
	
	$wp_customize->add_control( new caresland_lite_Theme_Support( $wp_customize, 'codeinwp_theme_notes',
	    array(
	        'section' => 'codeinwp_theme_notes',
	   )
	));
	
	/* logo */	
	$wp_customize->add_section( 'codeinwp_logo_section' , array(
    	'title'       => __( 'Logo', 'caresland-lite' ),
    	'priority'    => 31,
    	'description' => __('Upload a logo to replace the default site name and description in the header','caresland-lite'),
	) );

	$wp_customize->add_setting( 'codeinwp_logo' ,array('sanitize_callback' => 'caresland_lite_sanitize_text'));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
	    'label'    => __( 'Logo', 'caresland-lite' ),
	    'section'  => 'codeinwp_logo_section',
	    'settings' => 'codeinwp_logo',
	) ) );
	

	/* Footer contact info*/
	$wp_customize->add_section( 'codeinwp_footer_info_section' , array(
    	'title'       => __( 'Footer contact info', 'caresland-lite' ),
    	'priority'    => 130,
	) );

	$wp_customize->add_setting( 'codeinwp_footer_info_email' , array('sanitize_callback' => 'is_email'));
	$wp_customize->add_control( 'codeinwp_footer_info_email', array(
	    'label'    => __( 'Email', 'caresland-lite' ),
	    'section'  => 'codeinwp_footer_info_section',
	    'settings' => 'codeinwp_footer_info_email',
		'priority'    => 5,
	) );
	$wp_customize->add_setting( 'codeinwp_footer_info_support' ,array('sanitize_callback' => 'caresland_lite_sanitize_text'));
	$wp_customize->add_control( 'codeinwp_footer_info_support', array(
	    'label'    => __( 'Support', 'caresland-lite' ),
	    'section'  => 'codeinwp_footer_info_section',
	    'settings' => 'codeinwp_footer_info_support',
		'priority'    => 10,
	) );
	$wp_customize->add_setting( 'codeinwp_footer_info_chat' ,array('sanitize_callback' => 'caresland_lite_sanitize_text'));
	$wp_customize->add_control( 'codeinwp_footer_info_chat', array(
	    'label'    => __( 'Live chat', 'caresland-lite' ),
	    'section'  => 'codeinwp_footer_info_section',
	    'settings' => 'codeinwp_footer_info_chat',
		'priority'    => 15,
	) );	

}
add_action( 'customize_register', 'codeinwp_customize_register' );


if( class_exists( 'WP_Customize_Control' ) ):
class Example_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
        <?php
    }
}
endif;
function caresland_lite_sanitize_text( $input ) {
			return wp_kses_post( force_balance_tags( $input ) );
		}
/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cwp_customize_preview_js() {
	wp_enqueue_script( 'customizerJS', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ), '20131205', true );
}
add_action( 'customize_preview_init', 'cwp_customize_preview_js' );