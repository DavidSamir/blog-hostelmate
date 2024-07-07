<?php

// Feature post one section
$wp_customize->add_section('sharp_blog_featured_posts_section', array(    
	'title'       => __('Featured Posts Section', 'sharp-blog'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('sharp_blog_featured_posts', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'emerge_blog_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('sharp_blog_featured_posts', 
	array(		
		'label' 	=> __('Enable Featured Posts', 'sharp-blog'),
		'section' 	=> 'sharp_blog_featured_posts_section',
		'settings'  => 'sharp_blog_featured_posts',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('sharp_blog_featured_posts_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'emerge_blog_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('sharp_blog_featured_posts_category', 
	array(		
		'label' 	=> __('Select Categories', 'sharp-blog'),
		'section' 	=> 'sharp_blog_featured_posts_section',
		'settings'  => 'sharp_blog_featured_posts_category',
		'type' 		=> 'select',
		'choices' 	=> sharp_blog_get_post_categories(),
	)
);