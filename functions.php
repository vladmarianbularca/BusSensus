<?php
/**
 * PopularFX functions and definitions
 *
 * @link https://popularfx.com/docs/
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PopularFX
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

//Enqueue styles
function popularfx_child_enqueue_styles() {
	wp_enqueue_style( 'popularfx-theme-css', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css') );
	if(is_page_template('templates/page-home.php')){
  		wp_enqueue_style( 'home-style-css', get_stylesheet_directory_uri() . '/assets/css/home-style.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/home-style.css') );
      	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', array(), '1.0.0' );
  	}
}
add_action( 'wp_enqueue_scripts', 'popularfx_child_enqueue_styles', 10 );
//Enqueue styles end
?>