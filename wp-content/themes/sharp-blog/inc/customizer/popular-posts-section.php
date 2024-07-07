<?php

// Popular Post section
$wp_customize->add_section('sharp_blog_popular_posts_section', array(    
	'title'       => __('Popular Posts Section', 'sharp-blog'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('sharp_blog_popular_posts', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'emerge_blog_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('sharp_blog_popular_posts', 
	array(		
		'label' 	=> __('Enable Popular Posts', 'sharp-blog'),
		'section' 	=> 'sharp_blog_popular_posts_section',
		'settings'  => 'sharp_blog_popular_posts',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('sharp_blog_popular_posts_section_title', 
	array(
		'default'           => 'Popular Posts',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('sharp_blog_popular_posts_section_title', 
	array(
		'label'       => __('Section Title', 'sharp-blog'),
		'section'     => 'sharp_blog_popular_posts_section',   
		'settings'    => 'sharp_blog_popular_posts_section_title',	
		'type'        => 'text'
	)
);

$wp_customize->add_setting('sharp_blog_number_of_popular_posts_items', 
	array(
	'default' 			=> 3,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'emerge_blog_sanitize_number_range'
	)
);

$wp_customize->add_control('sharp_blog_number_of_popular_posts_items', 
	array(
	'label'       => __('Number of Items (Max: 50)', 'sharp-blog'),
	'section'     => 'sharp_blog_popular_posts_section',   
	'settings'    => 'sharp_blog_number_of_popular_posts_items',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 50,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('sharp_blog_popular_posts_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'emerge_blog_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('sharp_blog_popular_posts_category', 
	array(		
		'label' 	=> __('Select Categories', 'sharp-blog'),
		'section' 	=> 'sharp_blog_popular_posts_section',
		'settings'  => 'sharp_blog_popular_posts_category',
		'type' 		=> 'select',
		'choices' 	=> sharp_blog_get_post_categories(),
	)
);