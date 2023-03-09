<?php


define("CSS_PATH", get_template_directory_uri() . '/assets/css/');
define("JS_PATH", get_template_directory_uri() . '/assets/js/');
define("IMG_PATH", get_template_directory_uri() . '/assets/images/');
add_theme_support('post-thumbnails');

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'theme_setup' ) ) :
	function theme_setup() {
		load_theme_textdomain( 'theme', get_template_directory() . '/languages' );
		
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary', 'theme' ),
			)
		);

		add_theme_support(
			'html5',array('search-form','gallery','caption','style','script',)
		);
		add_theme_support( 'editor-styles' );
		add_theme_support(
			'custom-background',
			apply_filters(
				'theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );

function wp_theme_enqueues()
{
	wp_enqueue_style('style', get_template_directory_uri(  ). '/assets/dest/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('theme', JS_PATH . 'theme.js', '', '', true);
	$ajax_vars = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'main-js', 'ajax_var', $ajax_vars );
}
add_action('wp_enqueue_scripts', 'wp_theme_enqueues');

require get_template_directory() . '/inc/wp-admin-page.php';
require get_template_directory() . '/inc/acf-settings.php';
require get_template_directory() . '/inc/functions-cpt.php';
 