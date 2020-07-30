<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */

function custom_wc_translations($translated){
	$text = array(
	'Your order' => 'Tilauksesi',
	'Country / Region' => 'Maa',
	'Apartment, suite, unit, etc. (optional)' => 'Asunnon numero',
	'Update cart' => 'Päivitä ostoskori',
	'Proceed to checkout' => 'Siirry kassalle'
	);
	$translated = str_ireplace(  array_keys($text),  $text,  $translated );
	return $translated;
}

function load_google_web_font_sample() { 
	echo '<link href="'. ( is_ssl() ? 'https' : 'http' ) .'://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">';
	 } 
	add_action( 'wp_head', 'load_google_web_font_sample', 0 );