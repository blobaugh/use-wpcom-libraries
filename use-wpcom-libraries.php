<?php
/*
Plugin Name: Use WPCOM Libraries
Plugin URI: http://github.com/blobaugh/use-wpcom-libraries
Description: Switches the URL on built-in WordPress javascript files to serve from the WordPress.com CDN, rather than the local server, to decrease load time and bandwidth consumption on the local server.
Author: Ben Lobaugh
Version: 0.6
Author URI: http://ben.lobaugh.net
*/

// Show module in Jetpack?


/**
 * Singleton
 **/
class Use_WPCOM_Libraries {

	/**
	 * Holds the instance of Scripts_From_WPcom singleton
	 *
	 * @since 0.6
	 * @var Scripts_From_WPcom
	 **/
	private static $instance = null;

	/**
	 * Private singleton constructor
	 *
	 * @since 0.6
	 * @return Scripts_From_WPcom
	 **/
	private function __construct() {
		add_filter( 'script_loader_src', array( $this, 'rewrite_src' ), 1, 2 );
	}



	/**
	 * Gets a copy of the singleton to use 
	 *
	 * @since 0.6
	 * @return Scripts_From_WPcom
	 **/
	public static function instance() {
		if( !is_null( self::$instance ) )
			return self::$instance;

		self::$instance = new Use_WPCOM_Libraries();

		return self::$instance;
	}

	/**
	 * Rewrites the registered script urls to point to http://wordpress.com
	 *
	 * @since 0.6
	 **/
	public function rewrite_src( $src, $handle ) {
		if( strpos( $src, 'wp-includes' ) ) {
			$src = str_replace( site_url(), 'http://wordpress.com', $src );
		}
		return $src;
	}
}

Use_WPCOM_Libraries::instance();
