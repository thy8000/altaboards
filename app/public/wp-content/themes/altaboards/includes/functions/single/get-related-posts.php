<?php

if (!defined('ABSPATH')) exit;

function it9_obrasoft_get_related_posts($post_ID)
{
    $post_categories = get_the_category();
    $post_categories_ID_list = it9_obrasoft_get_post_categories_ID($post_categories);

    $post_args = [
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post__not_in'   => [$post_ID],
    ];

    if (!empty($post_categories_ID_list)) {
        $post_args['category__in'] = $post_categories_ID_list;
    }

    return get_posts($post_args);
}

function it9_obrasoft_get_post_categories_ID($categories_list = [])
{
    if (empty($categories_list)) {
        return '';
    }

    $categories_ID_list = [];

    foreach ($categories_list as $category_object) {
        $categories_ID_list[] = $category_object->term_id;
    }

    return $categories_ID_list;
}
