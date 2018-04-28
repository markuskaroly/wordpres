<?php
function register_css_js() {
	if (!is_admin()) {
		// register css
		wp_enqueue_style('style', get_stylesheet_uri () ,NULL,NULL);
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',NULL,NULL);

		// deregister JS
		wp_deregister_script('wp-embed');
		wp_deregister_script('jquery');

		// register JS
		wp_register_script('jquery', get_template_directory_uri().'/js/jquery-3.3.1.slim.min.js', NULL, NULL, true);
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js', NULL, NULL, true);
		wp_enqueue_script('bootstrap.min');

		wp_register_script('bootstrap.bundle.min', get_template_directory_uri().'/js/bootstrap.bundle.min.js', NULL, NULL, true);
		wp_enqueue_script('bootstrap.bundle.min');

	}
}
add_action('wp_enqueue_scripts', 'register_css_js');
?>