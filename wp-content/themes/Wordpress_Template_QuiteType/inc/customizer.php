<?php
/**
 * Wordpress_Template_QuiteType Theme Customizer.
 *
 * @package Wordpress_Template_QuiteType
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Wordpress_Template_QuiteType_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'Wordpress_Template_QuiteType_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function Wordpress_Template_QuiteType_customize_preview_js() {
	wp_enqueue_script( 'Wordpress_Template_QuiteType_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'Wordpress_Template_QuiteType_customize_preview_js' );
