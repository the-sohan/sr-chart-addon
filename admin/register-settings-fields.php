<?php
// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
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
        __('Chart Elementor Widget Lists', 'simple-switch-plugin'),
        'ssp_settings_section_callback',
        'ssp_settings'
    );

    add_settings_field(
        'ssp_field_on_off_1',
        __('Chart Widget 1', 'simple-switch-plugin'),
        'ssp_field_on_off_render_1',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_2',
        __('Chart Widget 2', 'simple-switch-plugin'),
        'ssp_field_on_off_render_2',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_3',
        __('Chart Widget 3', 'simple-switch-plugin'),
        'ssp_field_on_off_render_3',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_4',
        __('Chart Widget 4', 'simple-switch-plugin'),
        'ssp_field_on_off_render_4',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_5',
        __('Chart Widget 5', 'simple-switch-plugin'),
        'ssp_field_on_off_render_5',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_6',
        __('Chart Widget 6', 'simple-switch-plugin'),
        'ssp_field_on_off_render_6',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_7',
        __('Chart Widget 7', 'simple-switch-plugin'),
        'ssp_field_on_off_render_7',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_8',
        __('Chart Widget 8', 'simple-switch-plugin'),
        'ssp_field_on_off_render_8',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_9',
        __('Chart Widget 9', 'simple-switch-plugin'),
        'ssp_field_on_off_render_9',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_10',
        __('Chart Widget 10', 'simple-switch-plugin'),
        'ssp_field_on_off_render_10',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_11',
        __('Chart Widget 11', 'simple-switch-plugin'),
        'ssp_field_on_off_render_11',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_12',
        __('Chart Widget 12', 'simple-switch-plugin'),
        'ssp_field_on_off_render_12',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_13',
        __('Chart Widget 13', 'simple-switch-plugin'),
        'ssp_field_on_off_render_13',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_14',
        __('Chart Widget 14', 'simple-switch-plugin'),
        'ssp_field_on_off_render_14',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_15',
        __('Chart Widget 15', 'simple-switch-plugin'),
        'ssp_field_on_off_render_15',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_16',
        __('Chart Widget 16', 'simple-switch-plugin'),
        'ssp_field_on_off_render_16',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_17',
        __('Chart Widget 17', 'simple-switch-plugin'),
        'ssp_field_on_off_render_17',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_18',
        __('Chart Widget 18', 'simple-switch-plugin'),
        'ssp_field_on_off_render_18',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_19',
        __('Chart Widget 19', 'simple-switch-plugin'),
        'ssp_field_on_off_render_19',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_20',
        __('Chart Widget 20', 'simple-switch-plugin'),
        'ssp_field_on_off_render_20',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_21',
        __('Chart Widget 21', 'simple-switch-plugin'),
        'ssp_field_on_off_render_21',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_22',
        __('Chart Widget 22', 'simple-switch-plugin'),
        'ssp_field_on_off_render_22',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_23',
        __('Chart Widget 23', 'simple-switch-plugin'),
        'ssp_field_on_off_render_23',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_24',
        __('Chart Widget 24', 'simple-switch-plugin'),
        'ssp_field_on_off_render_24',
        'ssp_settings',
        'ssp_settings_section'
    );

    add_settings_field(
        'ssp_field_on_off_25',
        __('Chart Widget 25', 'simple-switch-plugin'),
        'ssp_field_on_off_render_25',
        'ssp_settings',
        'ssp_settings_section'
    );
}