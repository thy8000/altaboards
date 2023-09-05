<?php

if (!defined('ABSPATH')) exit;

$post_ID = get_the_ID();

$related_posts = it9_obrasoft_get_related_posts($post_ID);

if (empty($related_posts)) {
    return;
}
?>

<section class="bg-orange-50 w-full">
    <div class="custom-container">
        <div class="flex flex-col gap-10 py-14">
            <div class="text-start w-full lg:text-center">
                <span class="text-4xl text-gray-600 font-cabin font-medium">
                    <?php esc_html_e('Artigos relacionados', 'it9-obrasoft') ?>
                </span>
            </div>

            <div class="flex flex-col gap-16 justify-center lg:flex-row lg:gap-[1%]">
                <?php
                foreach ($related_posts as $post_object) {
                    $post_thumbnail_url = !empty(get_the_post_thumbnail_url($post_object->ID)) ? get_the_post_thumbnail_url($post_object->ID) : get_template_directory_uri() . '/assets/images/obrasoft-placeholder.png';

                    $post_date = get_the_date('F j, Y', $post_object->ID);
                    $post_formatted_date = date_i18n('d \d\e F \d\e Y', strtotime($post_date));

                    $post_url = get_permalink($post_object->ID);

                    $author_ID = get_the_author_meta('ID', $post_object->ID);
                    $author_image_url = get_avatar_url($author_ID, 150) ?? get_template_directory_uri() . '/assets/images/unknow-person.png';
                    $author_name = !empty(get_the_author_meta('first_name', $author_ID)) ? get_the_author_meta('first_name', $author_ID) : esc_html__('Autor desconhecido', 'it9-obrasoft');
                ?>
                    <div class="w-full flex flex-col gap-4 justify-center lg:w-[30%]">
                        <a href="<?php echo esc_url($post_url) ?>" class="relative w-full max-w-[310px] h-[190px] flex p-8 items-end bg-center bg-cover transition-all duration-500 ease-linear hover:grayscale cursor-pointer before-content after:content-[''] after:w-full after:h-full after:absolute after:left-0 after:top-0 after:opacity-30 after:bg-[#2d2d2d]" style="background-image: url(<?php echo $post_thumbnail_url ?>)">
                            <div class="mt-10 flex gap-4 relative z-20">
                                <div class="">
                                    <img class="w-9 h-auto" src="<?php echo esc_url($author_image_url) ?>">
                                </div>

                                <div class="flex flex-col gap-1.5 text-white">
                                    <span class="text-xs font-semibold"><?php echo esc_html($author_name) ?></span>
                                    <span class="text-xs font-normal"><?php echo esc_html($post_formatted_date) ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo esc_url($post_url) ?>" class="text-lg font-cabin font-medium transition-all duration-500 ease-linear text-gray-600 hover:text-jade">
                            <?php echo esc_html($post_object->post_title) ?>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>