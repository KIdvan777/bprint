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
    add_submenu_page('hask777-bprint', 'Bprint Sidebar Options', 'Sidebar', 'manage_options','hask777-bprint', 'bprint_theme_create_page');
    add_submenu_page('hask777-bprint', 'Bprint Theme Options', 'Theme options', 'manage_options', 'hask777-bprint_theme',
    'bprint_theme_support_page');
    add_submenu_page('hask777-bprint', 'Bprint CSS Options', 'Custom CSS', 'manage_options','hask777-bprint_css', 'bprint_theme_settings_page');

    // Activate custom settings
    add_action('admin_init', 'bprint_custom_settings');

}

function bprint_custom_settings()
{
    // Sidebar options
    register_setting('bprint-settings-group', 'profile_picture');
    register_setting('bprint-settings-group', 'first_name');
    register_setting('bprint-settings-group', 'last_name');
    register_setting('bprint-settings-group', 'user_description');
    register_setting('bprint-settings-group', 'twitter_handler', 'bprint_sanitize_twitter_handler');

    add_settings_section('bprint-sidebar-options', 'Sidebar Opitons', 'bprint_sidebar_options', 'hask777-bprint');

    add_settings_field('sidebar-profile-picture', 'Profile Picture', 'bprint_sidebar_profile', 'hask777-bprint', 'bprint-sidebar-options');
    add_settings_field('sidebar-name', 'Full Name', 'bprint_sidebar_name', 'hask777-bprint', 'bprint-sidebar-options');
    add_settings_field('sidebar-description', 'Description', 'bprint_sidebar_description', 'hask777-bprint', 'bprint-sidebar-options');
    add_settings_field('sidebar-twitter', 'Twitter Handler', 'bprint_sidebar_twitter', 'hask777-bprint', 'bprint-sidebar-options');
    // Theme Support Options
    register_setting('bprint-theme-support', 'post_formats', 'bprint_post_formats_callback');

    add_settings_section('bprint-theme-options', 'Theme Options', 'bprint_theme_options', 'hask777-bprint_theme');
    add_settings_field('post-formats', 'Post Formats', 'bprint_post_formats', 'hask777-bprint_theme', 'bprint-theme-options');
}

require get_template_directory() . '/inc/admin/inc/sidebar.php';
require get_template_directory() . '/inc/admin/inc/support.php';

function bprint_theme_create_page()
{
    // Generation of our admin page
    require_once( get_template_directory() . '/inc/admin/templates/bprint-admin.php' );
}

function bprint_theme_support_page()
{
    // Generation of our support page
    require_once( get_template_directory() . '/inc/admin/templates/bprint-theme-support.php' );
}

function bprint_theme_settings_page()
{
    // Generation of our admin page
    echo '<h1>Bprint Custom CSS</h1>';
}
