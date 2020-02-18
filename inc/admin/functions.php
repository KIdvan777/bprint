<?php

/*
@package bprint theme
*/
// A MAIN ACTION
add_action('admin_menu', 'bprint_add_admin_page');

function bprint_add_admin_page()
{
    // Generate Bprint admin page
    add_menu_page('Bprint Theme Options', 'Bprint', 'manage_options', 'hask777-bprint', 'bprint_theme_create_page', '', 110);
    // Generate Bprint admin sub-pages
    add_submenu_page('hask777-bprint', 'Bprint Theme Options', 'Settings', 'manage_options','hask777-bprint', 'bprint_theme_create_page');

    add_submenu_page('hask777-bprint', 'Bprint CSS Options', 'Custom CSS', 'manage_options','hask777-bprint_css', 'bprint_theme_settings_page');

    // Activate custom settings
    add_action('admin_init', 'bprint_custom_settings');

}

function bprint_custom_settings()
{
    register_setting('bprint-settings-group', 'first_name');
    add_settings_section('bprint-sidebar-options', 'Sidebar Opitons', 'bprint_sidebar_options', 'hask777-bprint');
    add_settings_field('sidebar-name', 'First Name', 'bprint_sidebar_name', 'hask777-bprint', 'bprint-sidebar-options');
}

function bprint_sidebar_options()
{
    echo 'Customize your Sidebar Information';
}

function bprint_sidebar_name()
{
    $first_name = esc_attr(get_option('first_name'));
    echo '<input type="text" name="first_name" value="' . $first_name . '" placeholder="First Name" />';
}

function bprint_theme_create_page()
{
    // Generation of our admin page
    require_once( get_template_directory() . '/inc/admin/templates/bprint-admin.php' );
}

function bprint_theme_settings_page()
{
    // Generation of our admin page
    echo '<h1>Bprint Custom CSS</h1>';
}
