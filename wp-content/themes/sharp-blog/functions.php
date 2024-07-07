<?php
/**
 * Theme functions and definitions
 *
 */

/**
 * Enqueues Styles
 */
function sharp_blog_enqueue_styles() {

	wp_enqueue_style( 'sharp-blog-style-parent', get_template_directory_uri() . '/style.css',
		array(
			'emerge-blog-blocks',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'sharp_blog_enqueue_styles', 10 );


require get_stylesheet_directory() . '/inc/customizer.php';

require get_stylesheet_directory() . '/inc/child-functions.php';

add_filter( 'emerge_blog_get_fonts_url', 'sharp_blog_modify_font' );
/**
 * Modify enqueued font
 */
function sharp_blog_modify_font( $font ){
	return str_replace( 'Jost', 'Inconsolata', $font);
}

function sharp_blog_setup() {
    add_theme_support('title-tag');
    add_theme_support( 'automatic-feed-links' );
}
add_action('after_setup_theme', 'sharp_blog_setup');