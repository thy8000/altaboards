<?php

if (!defined('ABSPATH')) exit;

$search_query_string = $_GET['s'] ?? '';

$search_query_args = [
    'posts_per_page' => 10,
    'orderby'        => 'date',
    'order'          => 'DESC',
    's'              => $search_query_string,
];

wp_utils_get_component('header/_index');

wp_utils_get_component('category/category-header', [
    'category_object' => $search_query_string,
]);

wp_utils_get_component('posts-list', [
    'custom_query_args' => $search_query_args,
]);

wp_utils_get_component('footer/_index');
