<?php
/**
 * Sharp Blog Theme Customizer
 *
 * @package sharp_blog
 */

/**
 * Customizer options
 */
function sharp_blog_customize_register( $wp_customize ) {
	include get_stylesheet_directory() . '/inc/customizer/featured-posts-section.php';
	include get_stylesheet_directory() . '/inc/customizer/popular-posts-section.php';
	include get_stylesheet_directory() . '/inc/customizer/editors-choice-section.php';
    include get_stylesheet_directory() . '/inc/customizer/trending-posts-section.php';
}
add_action( 'customize_register', 'sharp_blog_customize_register' );