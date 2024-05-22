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
        'Simple Switch Plugin Settings', // Page title
        'Simple Switch',                 // Menu title
        'manage_options',                // Capability
        'simple-switch-plugin',          // Menu slug
        'ssp_options_page',              // Callback function
        'dashicons-admin-generic',       // Icon
        20                               // Position
    );
}

// Register the settings
add_action('admin_init', 'ssp_settings_init');

function ssp_settings_init() {
    register_setting('ssp_settings', 'ssp_option_1');
    register_setting('ssp_settings', 'ssp_option_2');
    register_setting('ssp_settings', 'ssp_option_3');
    register_setting('ssp_settings', 'ssp_option_4');
    register_setting('ssp_settings', 'ssp_option_5');
    register_setting('ssp_settings', 'ssp_option_6');
    register_setting('ssp_settings', 'ssp_option_7');
    register_setting('ssp_settings', 'ssp_option_8');
    register_setting('ssp_settings', 'ssp_option_9');
    register_setting('ssp_settings', 'ssp_option_10');
    register_setting('ssp_settings', 'ssp_option_11');
    register_setting('ssp_settings', 'ssp_option_12');
    register_setting('ssp_settings', 'ssp_option_13');
    register_setting('ssp_settings', 'ssp_option_14');
    register_setting('ssp_settings', 'ssp_option_15');
    register_setting('ssp_settings', 'ssp_option_16');
    register_setting('ssp_settings', 'ssp_option_17');
    register_setting('ssp_settings', 'ssp_option_18');
    register_setting('ssp_settings', 'ssp_option_19');
    register_setting('ssp_settings', 'ssp_option_20');
    register_setting('ssp_settings', 'ssp_option_21');
    register_setting('ssp_settings', 'ssp_option_22');
    register_setting('ssp_settings', 'ssp_option_23');
    register_setting('ssp_settings', 'ssp_option_24');
    register_setting('ssp_settings', 'ssp_option_25');

    add_settings_section(
        'ssp_settings_section',
        __('Settings', 'simple-switch-plugin'),
        'ssp_settings_section_callback',
        'ssp_settings'
    );

    add_settings_field(
        'ssp_field_on_off_1',
        __('Enable/Disable Option 1', 'simple-switch-plugin'),
        'ssp_field_on_off_render_1',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_2',
        __('Enable/Disable Option 2', 'simple-switch-plugin'),
        'ssp_field_on_off_render_2',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_3',
        __('Enable/Disable Option 3', 'simple-switch-plugin'),
        'ssp_field_on_off_render_3',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_4',
        __('Enable/Disable Option 4', 'simple-switch-plugin'),
        'ssp_field_on_off_render_4',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_5',
        __('Enable/Disable Option 5', 'simple-switch-plugin'),
        'ssp_field_on_off_render_5',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_6',
        __('Enable/Disable Option 6', 'simple-switch-plugin'),
        'ssp_field_on_off_render_6',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_7',
        __('Enable/Disable Option 7', 'simple-switch-plugin'),
        'ssp_field_on_off_render_7',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_8',
        __('Enable/Disable Option 8', 'simple-switch-plugin'),
        'ssp_field_on_off_render_8',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_9',
        __('Enable/Disable Option 9', 'simple-switch-plugin'),
        'ssp_field_on_off_render_9',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_10',
        __('Enable/Disable Option 10', 'simple-switch-plugin'),
        'ssp_field_on_off_render_10',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_11',
        __('Enable/Disable Option 11', 'simple-switch-plugin'),
        'ssp_field_on_off_render_11',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_12',
        __('Enable/Disable Option 12', 'simple-switch-plugin'),
        'ssp_field_on_off_render_12',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_13',
        __('Enable/Disable Option 13', 'simple-switch-plugin'),
        'ssp_field_on_off_render_13',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_14',
        __('Enable/Disable Option 14', 'simple-switch-plugin'),
        'ssp_field_on_off_render_14',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_15',
        __('Enable/Disable Option 15', 'simple-switch-plugin'),
        'ssp_field_on_off_render_15',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_16',
        __('Enable/Disable Option 16', 'simple-switch-plugin'),
        'ssp_field_on_off_render_16',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_17',
        __('Enable/Disable Option 17', 'simple-switch-plugin'),
        'ssp_field_on_off_render_17',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_18',
        __('Enable/Disable Option 18', 'simple-switch-plugin'),
        'ssp_field_on_off_render_18',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_19',
        __('Enable/Disable Option 19', 'simple-switch-plugin'),
        'ssp_field_on_off_render_19',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_20',
        __('Enable/Disable Option 20', 'simple-switch-plugin'),
        'ssp_field_on_off_render_20',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_21',
        __('Enable/Disable Option 21', 'simple-switch-plugin'),
        'ssp_field_on_off_render_21',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_22',
        __('Enable/Disable Option 22', 'simple-switch-plugin'),
        'ssp_field_on_off_render_22',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_23',
        __('Enable/Disable Option 23', 'simple-switch-plugin'),
        'ssp_field_on_off_render_23',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_24',
        __('Enable/Disable Option 24', 'simple-switch-plugin'),
        'ssp_field_on_off_render_24',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_25',
        __('Enable/Disable Option 25', 'simple-switch-plugin'),
        'ssp_field_on_off_render_25',
        'ssp_settings',
        'ssp_settings_section'
    );
}

function ssp_settings_section_callback() {
    echo __('Toggle the switches to enable or disable the features.', 'simple-switch-plugin');
}

function ssp_field_on_off_render_1() {
    $option = get_option('ssp_option_1');
    ?>
    <input type='checkbox' name='ssp_option_1' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_2() {
    $option = get_option('ssp_option_2');
    ?>
    <input type='checkbox' name='ssp_option_2' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_3() {
    $option = get_option('ssp_option_3');
    ?>
    <input type='checkbox' name='ssp_option_3' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_4() {
    $option = get_option('ssp_option_4');
    ?>
    <input type='checkbox' name='ssp_option_4' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_5() {
    $option = get_option('ssp_option_5');
    ?>
    <input type='checkbox' name='ssp_option_5' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_6() {
    $option = get_option('ssp_option_6');
    ?>
    <input type='checkbox' name='ssp_option_6' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_7() {
    $option = get_option('ssp_option_7');
    ?>
    <input type='checkbox' name='ssp_option_7' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_8() {
    $option = get_option('ssp_option_8');
    ?>
    <input type='checkbox' name='ssp_option_8' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_9() {
    $option = get_option('ssp_option_9');
    ?>
    <input type='checkbox' name='ssp_option_9' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_10() {
    $option = get_option('ssp_option_10');
    ?>
    <input type='checkbox' name='ssp_option_10' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_11() {
    $option = get_option('ssp_option_11');
    ?>
    <input type='checkbox' name='ssp_option_11' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_12() {
    $option = get_option('ssp_option_12');
    ?>
    <input type='checkbox' name='ssp_option_12' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_13() {
    $option = get_option('ssp_option_13');
    ?>
    <input type='checkbox' name='ssp_option_13' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_14() {
    $option = get_option('ssp_option_14');
    ?>
    <input type='checkbox' name='ssp_option_14' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_15() {
    $option = get_option('ssp_option_15');
    ?>
    <input type='checkbox' name='ssp_option_15' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_16() {
    $option = get_option('ssp_option_16');
    ?>
    <input type='checkbox' name='ssp_option_16' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_17() {
    $option = get_option('ssp_option_17');
    ?>
    <input type='checkbox' name='ssp_option_17' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_18() {
    $option = get_option('ssp_option_18');
    ?>
    <input type='checkbox' name='ssp_option_18' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_19() {
    $option = get_option('ssp_option_19');
    ?>
    <input type='checkbox' name='ssp_option_19' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_20() {
    $option = get_option('ssp_option_20');
    ?>
    <input type='checkbox' name='ssp_option_20' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_21() {
    $option = get_option('ssp_option_21');
    ?>
    <input type='checkbox' name='ssp_option_21' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_22() {
    $option = get_option('ssp_option_22');
    ?>
    <input type='checkbox' name='ssp_option_22' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_23() {
    $option = get_option('ssp_option_23');
    ?>
    <input type='checkbox' name='ssp_option_23' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_24() {
    $option = get_option('ssp_option_24');
    ?>
    <input type='checkbox' name='ssp_option_24' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_field_on_off_render_25() {
    $option = get_option('ssp_option_25');
    ?>
    <input type='checkbox' name='ssp_option_25' <?php checked($option, 1); ?> value='1'>
    <?php
}

function ssp_options_page() {
    ?>
    <form action='options.php' method='post' class='sr-admin-admin-setting-form'>
        <h2>Simple Switch Plugin Settings</h2>
        <?php
        settings_fields('ssp_settings');
        do_settings_sections('ssp_settings');
        submit_button();
        ?>
    </form>
    <?php
}
