<?php
define("CSS_PATH", get_template_directory_uri() . '/assets/css/');
define("JS_PATH", get_template_directory_uri() . '/assets/js/');
define("IMG_PATH", get_template_directory_uri() . '/assets/images/');
add_theme_support('post-thumbnails');

function wp_theme_enqueues()
{
	wp_enqueue_style('style', get_template_directory_uri(  ). 'assets/dest/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('theme', JS_PATH . 'theme.js', '', '', true);
	$ajax_vars = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'main-js', 'ajax_var', $ajax_vars );
}
add_action('wp_enqueue_scripts', 'wp_theme_enqueues');

require get_template_directory() . '/inc/wp-admin-page.php';
require get_template_directory() . '/inc/acf-settings.php';
 