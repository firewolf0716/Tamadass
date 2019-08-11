<?php

function tamadass_setup() {	

	load_theme_textdomain( 'tamadass' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'header'    => __( 'Header Menu' ),
		'footer' => __( 'Footer Menu' ),
	) );
}
add_action( 'after_setup_theme', 'tamadass_setup' );