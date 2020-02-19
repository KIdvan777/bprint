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
}

function bprint_sidebar_options()
{
    echo 'Customize your Sidebar Information';
}

function bprint_sidebar_profile()
{
    $picture= esc_attr(get_option('profile_picture'));
    echo
    '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"/>
     <input type="hidden" id="profile-picture" name="profile_picture" value="' . $picture . '" />';
}

function bprint_sidebar_name()
{
    $first_name = esc_attr(get_option('first_name'));
    $last_name = esc_attr(get_option('last_name'));
    echo
    '<input type="text" name="first_name" value="' . $first_name . '" placeholder="First Name" />
     <input type="text" name="last_name" value="' . $last_name . '" placeholder="Last Name" />';
}

function bprint_sidebar_description()
{
    $decription = esc_attr(get_option('user_description'));
    echo '<input type="text" name="user_description" value="' . $decription . '" placeholder="description" /><i class="fab fa-twitter"></i><p class="description">Write something about yourself;</p>';
}

function bprint_sidebar_twitter()
{
    $twitter_handler = esc_attr(get_option('twitter_handler'));
    echo '<input type="text" name="twitter_handler" value="' . $twitter_handler . '" placeholder="Twitter Name" /><i class="fab fa-twitter"></i><p class="description">Input your twitter username without the @ character</p>';
}

function bprint_sanitize_twitter_handler($input)
{
    $output = sanitize_text_field($input);
    $output = str_replace('@', '', $output);
    return $output;
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
