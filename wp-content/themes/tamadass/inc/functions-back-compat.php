<?php

/**
 * Prevent switching to Tamadass on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Tamadass 1.0.1
 */
function tamadass_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'tamadass_upgrade_notice' );
}
add_action( 'after_switch_theme', 'tamadass_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Seventeen on WordPress versions prior to 4.7.
 *
 * @since Tamadass 1.0.1
 *
 * @global string $wp_version WordPress version.
 */
function tamadass_upgrade_notice() {
	$message = sprintf( __( 'Tamadass requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'Tamadass' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Tamadass 1.0.1
 *
 * @global string $wp_version WordPress version.
 */
function tamadass_customize() {
	wp_die( sprintf( __( 'Tamadass requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'Tamadass' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'tamadass_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Tamadass 1.0.1
 *
 * @global string $wp_version WordPress version.
 */
function tamadass_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Tamadass requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'Tamadass' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'tamadass_preview' );
