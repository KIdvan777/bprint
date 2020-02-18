<?php
/*
@package bprint theme
*/

function bprint_load_admin_scripts($hook)
{
    if('toplevel_page_hask777-bprint' != $hook){
        return;
    }

    wp_register_style('bprint_admin_style', get_template_directory_uri() . '/inc/admin/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bprint_admin_style');
}
add_action('admin_enqueue_scripts', 'bprint_load_admin_scripts');
