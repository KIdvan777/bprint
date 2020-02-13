<?php
/**
 * bprint functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bprint
 */

 /**
  * Setup functions.
  */
require get_template_directory() . '/inc/setup/setup.php';

/**
 * Var Dump Functions.
 */
require get_template_directory() . '/inc/var_dump.php';

/**
 * Add image for taxonomies.
 */
require get_template_directory() . '/inc/setup/cat-image.php';

/**
 * New nav menu walker.
 */
require get_template_directory() . '/inc/classes/class-walker-nav-menu-bprint.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
 require get_template_directory() . '/inc/setup/content-width.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/front/enqueue.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
