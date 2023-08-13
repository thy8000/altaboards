<?php

wp_utils_verify_abspath();

$post_object = $args['post_object'] ?? '';

$post_date = $post_object->post_date;
$formatted_post_date = date_i18n('d \d\e F, Y', strtotime($post_date));

$post_categories_list = get_the_category($post_object->ID) ?? '';
$post_first_category = $post_categories_list[0] ?? '';
$post_first_category_link = !empty($post_first_category) ? get_category_link($post_first_category->term_id) : '';

$post_permalink = get_the_permalink($post_object->ID);

$post_thumbnail_url = !empty(get_the_post_thumbnail_url($post_object->ID)) ? get_the_post_thumbnail_url($post_object->ID) : get_template_directory_uri() . '/assets/images/obrasoft-placeholder.png';
?>

<div class="w-full flex flex-col gap-10 lg:flex-row">
    <div class="w-full lg:w-2/5">
        <a href="<?php echo esc_url($post_permalink) ?>">
            <img class="rounded cursor-pointer transition-all duration-300	ease-linear hover:scale-105" src="<?php echo esc_url($post_thumbnail_url) ?>">
        </a>
    </div>

    <div class="w-full flex flex-col gap-5 justify-center items-start lg:w-3/5">
        <?php
        if (!empty($post_first_category)) {
        ?>
            <a class="bg-jade text-white py-1.5 px-6 rounded-full transition-all duration-500 ease-linear hover:bg-jade/70" href="<?php echo esc_url($post_first_category_link) ?>">
                <?php echo esc_html($post_first_category->name) ?>
            </a>
        <?php
        }
        ?>

        <a href="<?php echo esc_url($post_permalink) ?>" class="line-clamp-2 text-gray-600 text-2xl font-medium font-inter cursor-pointer transition-all duration-500 ease-linear hover:text-jade/70">
            <?php echo esc_html($post_object->post_title) ?>
        </a>

        <a href="<?php echo esc_url($post_permalink) ?>" class="line-clamp-2 text-base text-gray-900">
            <?php echo esc_html($post_object->post_excerpt) ?>
        </a>

        <a href="<?php echo esc_url($post_permalink) ?>" class="line-clamp-2 text-base text-midgray">
            <?php echo esc_html($formatted_post_date) ?>
        </a>
    </div>
</div>