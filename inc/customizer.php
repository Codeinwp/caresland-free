<?php
/**
 * ti_caresland_lite Theme Customizer
 *
 * @package ti_caresland_lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ti_caresland_lite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->remove_control('header_textcolor');

	/* theme notes */
	$wp_customize->add_section( 'ti_caresland_lite_theme_notes' , array(
		'title'      => __('ThemeIsle theme notes','caresland-lite'),
		'description' => sprintf( __( "Thank you for being part of this! We've spent almost 6 months building ThemeIsle without really knowing if anyone will ever use a theme or not, so we're very grateful that you've decided to work with us. Wanna <a href='http://themeisle.com/contact/' target='_blank'>say hi</a>?
		<br/><br/><a href='http://themeisle.com/demo/?theme=Caresland Free' target='_blank' />View Theme Demo</a> | <a href='http://themeisle.com/forums/forum/caresland/' target='_blank'>Get theme support</a>",'caresland-lite')),
		'priority'   => 30,
	));
	$wp_customize->add_setting(
        'ti_caresland_lite_theme_notice',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text'));

	$wp_customize->add_control(
    'ti_caresland_lite_theme_notice',
    array(
        'section' => 'ti_caresland_lite_theme_notes',
		'type'  => 'read-only',
    ));

	/* logo */
	$wp_customize->add_section( 'ti_caresland_lite_logo_section' , array(
    	'title'       => __( 'Logo', 'caresland-lite' ),
    	'priority'    => 31,
    	'description' => __('Upload a logo to replace the default site name and description in the header','caresland-lite'),
	) );

	$wp_customize->add_setting( 'ti_caresland_lite_logo',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text'));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
	    'label'    => __( 'Logo', 'caresland-lite' ),
	    'section'  => 'ti_caresland_lite_logo_section',
	    'settings' => 'ti_caresland_lite_logo',
	) ) );

/* Social icons*/
	$wp_customize->add_section( 'ti_caresland_lite_link_section' , array(
    	'title'       => __( 'Social icons', 'caresland-lite' ),
    	'priority'    => 30,
    	'description' => __('Links for social icons.','caresland-lite'),
	) );

	$wp_customize->add_setting( 'ti_caresland_lite_social_link_fb',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text',
		'default'     => '#',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_control( 'ti_caresland_lite_social_link_fb', array(
	    'label'    => __( 'Facebook link', 'caresland-lite' ),
	    'section'  => 'ti_caresland_lite_link_section',
	    'settings' => 'ti_caresland_lite_social_link_fb',
	) );
	
	$wp_customize->add_setting( 'ti_caresland_lite_social_link_tw',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text',
		'default'     => '#',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_control( 'ti_caresland_lite_social_link_tw', array(
	    'label'    => __( 'Twitter link', 'caresland-lite' ),
	    'section'  => 'ti_caresland_lite_link_section',
	    'settings' => 'ti_caresland_lite_social_link_tw',
	) );	

	$wp_customize->add_setting( 'ti_caresland_lite_social_link_gp',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text',
		'default'     => '#',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_control( 'ti_caresland_lite_social_link_gp', array(
	    'label'    => __( 'Google+ link', 'caresland-lite' ),
	    'section'  => 'ti_caresland_lite_link_section',
	    'settings' => 'ti_caresland_lite_social_link_gp',
	) );
	
	$wp_customize->add_setting( 'ti_caresland_lite_social_link_in',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text',
		'default'     => '#',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_control( 'ti_caresland_lite_social_link_in', array(
	    'label'    => __( 'Linkedin link:', 'caresland-lite' ),
	    'section'  => 'ti_caresland_lite_link_section',
	    'settings' => 'ti_caresland_lite_social_link_in',
	) );
	
	$wp_customize->add_setting( 'ti_caresland_lite_social_link_yo',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text',
		'default'     => '#',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_control( 'ti_caresland_lite_social_link_yo', array(
	    'label'    => __( 'Youtube link:', 'caresland-lite' ),
	    'section'  => 'ti_caresland_lite_link_section',
	    'settings' => 'ti_caresland_lite_social_link_yo',
	) );

	/* Footer contact info*/
	$wp_customize->add_section( 'ti_caresland_lite_footer_info_section' , array(
    	'title'       => __( 'Footer contact info', 'caresland-lite' ),
    	'priority'    => 130,
	) );

	$wp_customize->add_setting( 'ti_caresland_lite_footer_info_email',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text'));
	$wp_customize->add_control( 'ti_caresland_lite_footer_info_email', array(
	    'label'    => __( 'Email', 'caresland-lite' ),
	    'section'  => 'ti_caresland_lite_footer_info_section',
	    'settings' => 'ti_caresland_lite_footer_info_email',
		'priority'    => 5,
	) );
	$wp_customize->add_setting( 'ti_caresland_lite_info_support',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text'));
	$wp_customize->add_control( 'ti_caresland_lite_info_support', array(
	    'label'    => __( 'Support', 'caresland-lite' ),
	    'section'  => 'ti_caresland_lite_footer_info_section',
	    'settings' => 'ti_caresland_lite_info_support',
		'priority'    => 10,
	) );
	$wp_customize->add_setting( 'ti_caresland_lite_footer_info_chat',
        array('sanitize_callback' => 'ti_caresland_lite_sanitize_text'));
	$wp_customize->add_control( 'ti_caresland_lite_footer_info_chat', array(
	    'label'    => __( 'Live chat', 'caresland-lite' ),
	    'section'  => 'ti_caresland_lite_footer_info_section',
	    'settings' => 'ti_caresland_lite_footer_info_chat',
		'priority'    => 15,
	) );

}
add_action( 'customize_register', 'ti_caresland_lite_customize_register' );


if( class_exists( 'WP_Customize_Control' ) ):
class  ti_caresland_lite_Customize_Textarea_Control extends WP_Customize_Control {
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
/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

		function ti_caresland_lite_sanitize_text( $input ) {
			return wp_kses_post( force_balance_tags( $input ) );
		}
		
function  ti_caresland_lite_customize_preview_js() {
	wp_enqueue_script( 'customizerJS', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ), '20131205', true );
}
add_action( 'customize_preview_init', 'ti_caresland_lite_customize_preview_js' );