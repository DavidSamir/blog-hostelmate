<?php

// Editors Choice section
$wp_customize->add_section('sharp_blog_editors_choice_section', array(    
	'title'       => __('Editors Choice Section', 'sharp-blog'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('sharp_blog_editors_choice', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'emerge_blog_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('sharp_blog_editors_choice', 
	array(		
		'label' 	=> __('Enable Editors Choice', 'sharp-blog'),
		'section' 	=> 'sharp_blog_editors_choice_section',
		'settings'  => 'sharp_blog_editors_choice',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('sharp_blog_editors_choice_section_title', 
	array(
		'default'           => 'Editors Choice',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('sharp_blog_editors_choice_section_title', 
	array(
		'label'       => __('Section Title', 'sharp-blog'),
		'section'     => 'sharp_blog_editors_choice_section',   
		'settings'    => 'sharp_blog_editors_choice_section_title',	
		'type'        => 'text'
	)
);

$wp_customize->add_setting('sharp_blog_number_of_editors_choice_items', 
	array(
	'default' 			=> 3,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'emerge_blog_sanitize_number_range'
	)
);

$wp_customize->add_control('sharp_blog_number_of_editors_choice_items', 
	array(
	'label'       => __('Number of Items (Max: 50)', 'sharp-blog'),
	'section'     => 'sharp_blog_editors_choice_section',   
	'settings'    => 'sharp_blog_number_of_editors_choice_items',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 50,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('sharp_blog_editors_choice_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'emerge_blog_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('sharp_blog_editors_choice_category', 
	array(		
		'label' 	=> __('Select Categories', 'sharp-blog'),
		'section' 	=> 'sharp_blog_editors_choice_section',
		'settings'  => 'sharp_blog_editors_choice_category',
		'type' 		=> 'select',
		'choices' 	=> sharp_blog_get_post_categories(),
	)
);