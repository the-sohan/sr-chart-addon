<?php
// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue the admin CSS file
add_action('admin_enqueue_scripts', 'ssp_enqueue_admin_css');

function ssp_enqueue_admin_css($hook_suffix) {
    // Only enqueue on your plugin's settings page
    if ($hook_suffix == 'toplevel_page_simple-switch-plugin') {
        wp_enqueue_style('ssp_admin_css', plugin_dir_url(__FILE__) . 'assets/css/admin.css');
    }
}

// Add the admin menu
add_action('admin_menu', 'ssp_add_admin_menu');

function ssp_add_admin_menu() {
    add_menu_page(
        'SR Chart Elementor Addon Settings', // Page title
        'SR Chart',                 // Menu title
        'manage_options',                // Capability
        'simple-switch-plugin',          // Menu slug
        'ssp_options_page',              // Callback function
        'dashicons-admin-generic',       // Icon
        20                               // Position
    );
}

// Register settings Fields
include_once plugin_dir_path(__FILE__) . 'register-settings-fields.php';

// Render settings Fields
include_once plugin_dir_path(__FILE__) . 'render-settings-fields.php';



function ssp_options_page() {
    ?>
    <form action='options.php' method='post' class='sr-admin-admin-setting-form'>
        
        <?php
        settings_fields('ssp_settings');
        do_settings_sections('ssp_settings');
        submit_button();
        ?>
    </form>
    <?php
}
