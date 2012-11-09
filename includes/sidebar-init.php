<?php
function elegance_widgets_init() {
	// Social Sidebar Widget
	// Location: right after the navigation
	register_sidebar(array(
		'name'					=> 'Social Sidebar',
		'id' 						=> 'social-sidebar',
		'description'   => __( 'Located at the top of pages.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));
	// Welcome Widget
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Welcome Sidebar',
		'id' 						=> 'welcome-sidebar',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Main Page Widget 1
	// Location: Contacts page
	register_sidebar(array(
		'name'					=> 'Main Page Widget 1',
		'id' 						=> 'main_page_w_1',
		'description'   => __( 'Located at the bottom of Main page.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Main Page Widget 2
	// Location: Contacts page
	register_sidebar(array(
		'name'					=> 'Main Page Widget 2',
		'id' 						=> 'main_page_w_2',
		'description'   => __( 'Located at the bottom of Main page.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Main Page Widget 3
	// Location: Contacts page
	register_sidebar(array(
		'name'					=> 'Main Page Widget 3',
		'id' 						=> 'main_page_w_3',
		'description'   => __( 'Located at the bottom of Main page.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar',
		'id' 						=> 'main-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%2$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Testimonials Widget
	// Location: About page
	register_sidebar(array(
		'name'					=> 'Testimonials',
		'id' 						=> 'testimonials',
		'description'   => __( 'Located at the right side of About page.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// Offers Widget
	// Location: About page
	register_sidebar(array(
		'name'					=> 'Offers',
		'id' 						=> 'offers',
		'description'   => __( 'Located at the left side of About page.'),
		'before_widget' => '<div id="%1$s" class="widget-alt">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// Services Widget
	// Location: Services page
	register_sidebar(array(
		'name'					=> 'Services area',
		'id' 						=> 'services',
		'description'   => __( 'Located at the left side of Services page.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Latest News Widget
	// Location: Services page
	register_sidebar(array(
		'name'					=> 'Latest News',
		'id' 						=> 'latest_news',
		'description'   => __( 'Located at the right side of Services page.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// Contact Form Widget
	// Location: Contacts page
	register_sidebar(array(
		'name'					=> 'Contact Form',
		'id' 						=> 'contact_form',
		'description'   => __( 'Located at the left side of Contacts page.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// Address Widget
	// Location: Contacts page
	register_sidebar(array(
		'name'					=> 'Address',
		'id' 						=> 'address',
		'description'   => __( 'Located at the right side of Contacts page.'),
		'before_widget' => '<div id="%1$s" class="widget google_map">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>