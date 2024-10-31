<?php
/*
Plugin Name: Phando Video
Plugin URI: https://wordpress.org/plugins/phando-video/
Description: Embed videos on website using shortcode
Version: 1.0.0
Author: Phando
Author URI:http://www.phando.com/home/
*/



if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'PHANDO__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PHANDO__PLUGIN_ASSETS_DIR', plugin_dir_path( __FILE__ ).'/assets' );
define( 'PHANDO__PLUGIN_URL', plugin_dir_url( __FILE__ ) );






require_once( PHANDO__PLUGIN_DIR . 'class.phando.php' );
add_action( 'init', array( 'Phando', 'init' ) );

require_once( PHANDO__PLUGIN_DIR . 'class.phando-admin-setting.php' );
add_action( 'init', array( 'Phando_Admin_Settings', 'init' ) );



         
