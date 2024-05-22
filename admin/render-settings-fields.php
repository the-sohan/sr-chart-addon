<?php
// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

function ssp_settings_section_callback() {
    echo __('Toggle the switches to enable or disable the features.', 'simple-switch-plugin');
}

function ssp_field_on_off_render_1() {
    $option = get_option('ssp_option_1');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_1' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
    <?php
}

function ssp_field_on_off_render_2() {
    $option = get_option('ssp_option_2');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_2' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
    <?php
}

function ssp_field_on_off_render_3() {
    $option = get_option('ssp_option_3');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_3' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
    <?php
}

function ssp_field_on_off_render_4() {
    $option = get_option('ssp_option_4');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_4' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
    <?php
}

function ssp_field_on_off_render_5() {
    $option = get_option('ssp_option_5');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_5' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
    <?php
}

function ssp_field_on_off_render_6() {
    $option = get_option('ssp_option_6');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_6' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
    <?php
}

function ssp_field_on_off_render_7() {
    $option = get_option('ssp_option_7');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_7' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
    <?php
}

function ssp_field_on_off_render_8() {
    $option = get_option('ssp_option_8');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_8' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
    <?php
}

function ssp_field_on_off_render_9() {
    $option = get_option('ssp_option_9');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_9' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
    <?php
}

function ssp_field_on_off_render_10() {
    $option = get_option('ssp_option_10');
    ?>
    <div class="ssp-checkbox-container">
        <label class="switch">
            <input type='checkbox' name='ssp_option_10' <?php checked($option, 1); ?> value='1'>
            <span class="slider"></span>
        </label>
    </div>
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
