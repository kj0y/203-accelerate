<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// Enqueue google font Open Sans
function custom_add_google_fonts() {
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700', false );
}
add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );

// Custom post types function
function create_custom_post_types() {
//create a case study custom post type
	register_post_type('case_studies',
		array(
			'labels' => array(
				'name' => _( 'Case Studies' ),
				'singular_name' => _( 'Case Study' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'case-studies'
			),
		)
	);
}

//Hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types' );