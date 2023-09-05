<?php

if (!defined('ABSPATH')){
    exit;
}

wp_utils_get_component('header/_index');

wp_utils_get_component('page-contact/content');

wp_utils_get_component('page-contact/form');

wp_utils_get_component('footer/_index');
