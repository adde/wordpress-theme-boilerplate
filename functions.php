<?php
/**
 * Functions
 *
 * Set up the theme and provide some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 */

/**
 * Requiring dependencies
 */
require 'util.php';



/**
 * Register our sidebars and widgetized areas.
 */
function themename_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Main sidebar', 'themename' ),
    'id' => 'sidebar_main',
    'before_widget' => '<div class="before-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'themename_widgets_init' );



/**
 * Register our menus.
 */
function themename_register_menus() {
  register_nav_menus(
    array(
      'menu_main' => __( 'Primär meny' )
    )
  );
}
add_action( 'init', 'themename_register_menus' );

function themename_wp_nav_menu_args( $args = '' ) {
  $args['container'] = false;
  return $args;
}
add_filter( 'wp_nav_menu_args', 'themename_wp_nav_menu_args' );



/**
 * Adds extra thumbnail-sizes
 */
if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'new-thumb', 250, 250, true); // with hardcrop set to true
}