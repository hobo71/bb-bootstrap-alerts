<?php
/**
 * Plugin Name: Bootstrap Alerts For Beaver Builder
 * Plugin URI: http://www.brainstormforce.com
 * Description: This is the plugin to create predefined alert messages.
 * Version: 1.0
 * Author: Brainstorm Force
 * Author URI: https://www.brainstormforce.com/
 */
define( 'BB_NOTIFICATIONS_DIR', plugin_dir_path( __FILE__ ) );
define( 'BB_NOTIFICATIONS_URL', plugins_url( '/', __FILE__ ) );

function bsf_bb_alerts() {
    if ( class_exists( 'FLBuilder' ) ) {
    	 require_once 'bb-bootstrap-alerts-module/bb-bootstrap-alerts-module.php';
    }
}
add_action( 'init', 'bsf_bb_alerts' );
