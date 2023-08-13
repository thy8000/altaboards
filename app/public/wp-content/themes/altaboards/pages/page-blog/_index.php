<?php

wp_utils_verify_abspath();

$three_first_posts_ID_list = get_posts([
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'fields'         => 'ids',
]);

wp_utils_get_component('header/_index');

wp_utils_get_component('featured-posts');

wp_utils_get_component('posts-list', [
    'posts_to_exclude' => $three_first_posts_ID_list,
]);

wp_utils_get_component('footer/_index');