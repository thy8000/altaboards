<?php

if (!defined('ABSPATH')) exit;

add_action('after_setup_theme', 'wp_utils_register_menu');
function wp_utils_register_menu()
{
    register_nav_menu('main-menu-desktop', 'Menu (Desktop)');

    register_nav_menu('main-menu-mobile', 'Menu (Mobile)');
}
