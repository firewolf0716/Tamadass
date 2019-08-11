<?php

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 */
function tamadass_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'tamadass_javascript_detection', 0 );


/**
 * Enqueue scripts and styles.
 */
function tamadass_scripts() {
	// Add custom fonts, used in the main stylesheet.
	tamadass_fonts();

	// Theme stylesheet.
	wp_enqueue_style( 'firewolf-style', get_stylesheet_uri() );

	wp_enqueue_style( 'common-css', get_theme_file_uri( '/assets/css/common.css' ), array( 'firewolf-style' ), '1.0' );

	single_page_style();

	wp_enqueue_style( 'page-css', get_theme_file_uri( '/assets/css/page.css' ), array( 'firewolf-style' ), '1.0' );

	wp_enqueue_style( 'responsive-css', get_theme_file_uri( '/assets/css/responsive.css' ), array( 'firewolf-style' ), '1.0' );

	wp_enqueue_script( 'firewolf-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'tamadass_scripts' );

/**
 * Register custom fonts.
 */
function tamadass_fonts() {
	
    wp_enqueue_style( 'notosans','https://fonts.googleapis.com/css?family=Noto+Sans+JP&amp;subset=japanese', array() );
    wp_enqueue_style( 'notoserif','https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap', array() );

}

function single_page_style() {

	if ( is_front_page() ){
		wp_enqueue_style( 'front-page-css', get_theme_file_uri( '/assets/css/front-page.css' ), array( 'firewolf-style' ), '1.0' );
	}
	

}
