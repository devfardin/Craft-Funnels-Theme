<?php
define( 'CF_THEME_DIR', __DIR__ );
define( 'CF_THEME_URL', get_stylesheet_directory_uri() );

/**
 * Frontend Styles and Scripts
 */
function cf_theme_enqueue_frontend_scripts() {
	wp_enqueue_style(
		'cf-style',
		CF_THEME_URL . '/assets/css/main.css',
		array(),
		filemtime( CF_THEME_DIR . '/assets/css/main.css' )
	);

}
add_action( 'wp_enqueue_scripts', 'cf_theme_enqueue_frontend_scripts' );


/**
 * Includes
 *
 */
require_once( CF_THEME_DIR . '/includes/setup.php' );
