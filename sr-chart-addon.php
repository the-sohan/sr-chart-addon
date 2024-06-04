<?php
/**
 * Plugin Name: SR Chart List
 * Description: Custom Elementor addon.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Sohan
 * Author URI:  https://developers.elementor.com/
 * Text Domain: sr-chart-addon
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.21.0
 * Elementor Pro tested up to: 3.21.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function sr_elementor_chart_addon() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );



	// Run the plugin
	\SR_Elementor_Chart_Addon\Plugin::instance();

}
add_action( 'plugins_loaded', 'sr_elementor_chart_addon' );



// Register Scripts
function sr_chart_addon_enqueue_script()
{   
	wp_enqueue_style( 'sr-info-box', plugin_dir_url( __FILE__ ) . 'includes/assets/css/info-box.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'sr-chartjs-script', plugin_dir_url( __FILE__ ) . 'includes/assets/js/chart.js', 'jquery', '2.9.4', true );
}
add_action( 'wp_enqueue_scripts', 'sr_chart_addon_enqueue_script' );


// Include the admin settings
include_once plugin_dir_path(__FILE__) . 'admin/admin-settings.php';

// Use the switch state in your plugin
add_action('init', 'ssp_check_switch_state');


function ssp_check_switch_state() {
    if (get_option('ssp_option')) {
        
    } else {
        
    }
}


