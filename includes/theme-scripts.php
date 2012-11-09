<?php
function my_script() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.4.4.min.js', false, '1.4.4');
		wp_enqueue_script('jquery');

		wp_enqueue_script('superfish', get_bloginfo('template_url').'/js/superfish.js', array('jquery'), '1.4.8');
		wp_enqueue_script('prettyPhoto', get_bloginfo('template_url').'/js/jquery.prettyPhoto.js', array('jquery'), '3.0.1');
		wp_enqueue_script('faded', get_bloginfo('template_url').'/js/jquery.faded.js', array('jquery'), '0.3.2');
	}
}
add_action('init', 'my_script');
?>