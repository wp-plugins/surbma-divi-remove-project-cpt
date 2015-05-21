<?php

/*
Plugin Name: Surbma - Divi Remove Project CPT
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Removes the Project Custom Post Type from Divi theme.

Version: 1.0.0

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-divi-remove-project-cpt
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
function surbma_divi_remove_project_cpt_init() {
	load_plugin_textdomain( 'surbma-divi-remove-project-cpt', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_divi_remove_project_cpt_init' );

function surbma_divi_remove_project_cpt() {   
	if ( wp_basename( get_bloginfo( 'template_directory' ) ) == 'Divi' ) {
		remove_action( 'init', 'et_pb_register_posttypes', 0 );
	}
}
add_action( 'after_setup_theme', 'surbma_divi_remove_project_cpt' );