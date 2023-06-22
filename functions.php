<?php

if ( ! function_exists( 'mygalery_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function mygalery_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'mygalery_theme_support' );


/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

if ( ! function_exists( 'mygalery_styles' ) ) :

  function mygalery_styles() {
    // Register Stylesheet
    wp_enqueue_style('mygalery-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));// this enque style.css
    wp_enqueue_style('mygalery-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');// this enque my custom style blocks.css
  }

endif;

add_action( 'wp_enqueue_scripts', 'mygalery_styles' );


// /*-----------------------------------------------------------
// Customising The Excerpt Lenght
// ------------------------------------------------------------*/
// function custom_excerpt_lenght($length) {
// 	return 25;
// }
// add_filter('excerpt_length', 'custom_excerpt_lenght');