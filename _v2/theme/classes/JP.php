<?php
/**
 * Main Class
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'JP' ) ) :

	/**
	 * Main Class
	 *
	 * @class JP
	 * @since 1.0.0
	 * @package jp
	 */
	class JP {

		/**
		 * Setup class
		 *
		 * @since  1.0.0
		 */
		public function __construct() {
			// ## Actions ##

			// Enqueue styles and scripts.
			add_action( 'wp_enqueue_scripts', array( $this, 'styles_and_scripts' ) );
		}

		/**
		 * Enqueue styles and scripts
		 *
		 * @since  1.0.0
		 */
		public function styles_and_scripts() {
			global $jp;

			// Styles (ADDED INLINE ON HEADER.PHP).
			// wp_enqueue_style( 'jp-style', get_theme_file_uri( '/assets/css/main.css' ), array(), $jp->version, 'screen' );
			// wp_enqueue_style( 'jp-print-style', get_theme_file_uri( '/assets/css/print.css' ), array(), $jp->version, 'print' );

			// Scripts (ADDED INLINE ON FOOTER.PHP).
			// wp_enqueue_script( 'jp-script', get_theme_file_uri( '/assets/js/main.js' ), array(), $jp->version, true );

			// Remove WordPress scripts.
    		// wp_deregister_script( 'jquery' );
			wp_deregister_script( 'wp-embed' );

			// Remove WP Emoji.
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
		}
	}

endif;

return new JP();
