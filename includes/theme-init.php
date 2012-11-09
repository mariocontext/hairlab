<?php

add_action( 'after_setup_theme', 'my_setup' );

if ( ! function_exists( 'my_setup' ) ):

function my_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 310, 150, true ); // Normal post thumbnails
		add_image_size( 'slider-post-thumbnail', 940, 419, true ); // Slider Thumbnail
		add_image_size( 'portfolio-post-thumbnail', 290, 150, true ); // Portfolio Thumbnail
		add_image_size( 'post-small-thumbnail', 280, 123, true ); // Post small Thumbnail
	}

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'header_menu' => 'Header Menu',
	  		  'sidebar_menu' => 'Sidebar Menu',
	  		  'footer_menu' => 'Footer Menu'
	  		)
	  	);
	}
}
endif;


/* Slider */
function my_post_type_slider() {
	register_post_type( 'slider',
                array( 
				'label' => __('Slider'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'custom-fields',
            'thumbnail')
					) 
				);
}

add_action('init', 'my_post_type_slider');



/* Portfolio */
function my_post_type_portfolio() {
	register_post_type( 'portfolio',
                array( 
				'label' => __('Portfolio'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'rewrite' => true,
				'hierarchical' => true,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'revisions')
					) 
				);
	register_taxonomy('portfoliocat', 'portfolio', array('hierarchical' => true, 'label' => 'Portfolio Categories', 'singular_name' => 'Category'));
}

add_action('init', 'my_post_type_portfolio');



/* Testimonial */
function my_post_type_testi() {
	register_post_type( 'testi',
                array( 
				'label' => __('Testimonial'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'custom-fields',
						'editor')
					) 
				);
}

add_action('init', 'my_post_type_testi');




/* Experience */
function my_post_type_exper() {
	register_post_type( 'exper',
                array( 
				'label' => __('Experience'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'thumbnail',
						'custom-fields',
						'editor')
					) 
				);
}

add_action('init', 'my_post_type_exper');



?>