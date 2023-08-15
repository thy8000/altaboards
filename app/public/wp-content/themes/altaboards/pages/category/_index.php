<?php

wp_utils_verify_abspath();

$category_object = get_queried_object();

$category_query_args = [
    'posts_per_page' => 10,
    'cat'            => $category_object->term_id,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

wp_utils_get_component('header/_index');

wp_utils_get_component('category/category-header', [
    'category_object' => $category_object,
]);

wp_utils_get_component('posts-list', [
    'custom_query_args' => $category_query_args,
]);

wp_utils_get_component('footer/_index');
