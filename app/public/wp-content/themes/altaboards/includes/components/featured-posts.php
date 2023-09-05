<?php

if (!defined('ABSPATH')) exit;

$featured_first_post = get_posts([
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC',
]);

if (empty($featured_first_post)) {
    return;
}

?>

<section class="bg-slate-50 bg-no-repeat bg-center bg-cover py-14" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/background-preto.jpg)">
    <div class="custom-container">
        <div class="flex flex-col pt-20 gap-14 lg:gap-8 lg:flex-row">
            <div class="w-full lg:w-8/12">
                <?php
                $featured_first_post_thumbnail_url = !empty(get_the_post_thumbnail_url($featured_first_post[0]->ID)) ? get_the_post_thumbnail_url($featured_first_post[0]->ID) : get_template_directory_uri() . '/assets/images/obrasoft-placeholder.png';

                $featured_first_post_category = !empty(get_the_category($featured_first_post[0]->ID)) ? get_the_category($featured_first_post[0]->ID) : '';
                $featured_first_post_first_category = !empty($featured_first_post_category) ? $featured_first_post_category[0] : '';
                $featured_first_post_first_category_link = !empty($featured_first_post_first_category) ? get_category_link($featured_first_post_first_category->term_id) : '';

                $featured_first_post_author_display_name = get_the_author_meta('first_name', $featured_first_post[0]->post_author);

                $featured_first_post_date = date_i18n('j \d\e F \d\e Y', strtotime($featured_first_post[0]->post_date));
                ?>

                <div class="w-full flex flex-col items-start gap-4">
                    <a class="w-full h-auto" href="<?php echo esc_url(get_the_permalink($featured_first_post[0]->ID)) ?>">
                        <img class="w-full h-auto bg-cover bg-center rounded cursor-pointer transition-all duration-300	ease-linear hover:scale-105" src="<?php echo esc_url($featured_first_post_thumbnail_url) ?>">
                    </a>

                    <?php
                    if (!empty($featured_first_post_first_category)) {
                    ?>
                        <a class="bg-jade text-white py-1.5 px-6 rounded-full transition-all duration-500 ease-linear hover:bg-jade/70" href="<?php echo esc_url($featured_first_post_first_category_link) ?>">
                            <?php echo esc_html($featured_first_post_first_category->name) ?>
                        </a>
                    <?php
                    }
                    ?>

                    <a class="text-gray-600 text-3xl font-medium font-cabin mt-0 mb-0 cursor-pointer transition-all duration-500 ease-linear hover:text-jade/70" href="<?php echo esc_url(get_the_permalink($featured_first_post[0]->ID)) ?>">
                        <?php echo esc_html($featured_first_post[0]->post_title) ?>
                    </a>

                    <span class="text-gray-900 text-base">
                        Autor: <b><?php echo esc_html($featured_first_post_author_display_name) ?></b> - <?php echo esc_html($featured_first_post_date) ?>
                    </span>
                </div>
            </div>

            <?php
            $featured_posts_list = get_posts([
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'offset'         => 1,
            ]);

            if (!empty($featured_posts_list)) {
            ?>
                <div class="w-full flex flex-col gap-14 lg:gap-5 lg:w-4/12">
                    <?php
                    foreach ($featured_posts_list as $featured_post) {
                        $featured_post_thumbnail_url = !empty(get_the_post_thumbnail_url($featured_post->ID)) ? get_the_post_thumbnail_url($featured_post->ID) : get_template_directory_uri() . '/assets/images/obrasoft-placeholder.png';

                        $featured_post_date = date_i18n('j \d\e F \d\e Y', strtotime($featured_post->post_date));
                    ?>
                        <div class="w-full flex-col flex items-start gap-4 lg:flex-row">
                            <div class="w-full h-full lg:w-7/12">
                                <a class="w-full h-auto" href="<?php echo esc_url(get_the_permalink($featured_post->ID)) ?>">
                                    <img class="w-full h-full bg-cover bg-center rounded cursor-pointer transition-all duration-300	ease-linear hover:scale-105" src="<?php echo esc_url($featured_post_thumbnail_url) ?>">
                                </a>
                            </div>

                            <div class="w-full flex flex-col gap-4 lg:w-5/12">
                                <a class="text-gray-600 font-medium font-cabin text-sm cursor-pointer transition-all duration-500 ease-linear hover:text-jade/70" href="<?php echo esc_url(get_the_permalink($featured_post->ID)) ?>">
                                    <?php echo esc_html($featured_post->post_title) ?>
                                </a>

                                <span class="text-900 text-sm text-gray-900">
                                    <?php echo esc_html($featured_post_date) ?> <br>
                                </span>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>