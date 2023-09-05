<?php

if (!defined('ABSPATH')) exit;

$post_thumbnail_url = !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/obrasoft-placeholder.png';

$post_date = get_the_date('Y-m-d');
$post_formatted_date = date_i18n('d \d\e F \d\e Y', strtotime($post_date));

$post_title = get_the_title();

$post_category = !empty(get_the_category()) ? get_the_category() : '';
$first_post_category = !empty($post_category) ? $post_category[0] : '';
$first_post_category_link = !empty($first_post_category) ? get_category_link($first_post_category->term_id) : '';

$post_excerpt = !empty(get_the_excerpt()) ? get_the_excerpt() : '';

$author_ID = get_the_author_meta('ID');
$author_image_url = get_avatar_url($author_ID, 150) ?? get_template_directory_uri() . '/assets/images/unknow-person.png';
$author_name = !empty(get_the_author_meta('first_name', $author_ID)) ? get_the_author_meta('first_name', $author_ID) : esc_html__('Autor desconhecido', 'it9-obrasoft');
?>

<section class="bg-stone-200">
    <div class="flex justify-center relative -mt-[400px] pb-20">
        <div class="w-full max-w-[940px] bg-cover bg-no-repeat bg-center relative" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/background-preto.jpg)">
            <div class="w-full h-[450px] bg-cover bg-no-repeat bg-center px-8 after:content-[''] after:w-full after:h-full after:absolute after:left-0 after:top-0 after:opacity-50 after:bg-[#2d2d2d] lg:px-0" style="background-image: url(<?php echo esc_attr($post_thumbnail_url) ?>)">
                <?php
                if (!empty($first_post_category)) {
                ?>

                    <a href="<?php echo esc_url($first_post_category_link) ?>" class="absolute z-10 top-8 right-8 bg-jade py-1.5 px-6 rounded-full transition-all duration-500	ease-linear	text-white hover:bg-jade/70">
                        <?php echo esc_html($first_post_category->name) ?>
                    </a>

                <?php
                }
                ?>

                <div class="flex justify-center gap-10">
                    <div class="flex flex-col gap-4 max-w-[500px] h-[400px] w-full relative z-10 justify-end py-8 max-w-prose">
                        <span class="text-white text-lg">
                            <?php echo esc_html($post_formatted_date) ?>
                        </span>

                        <h1 class="text-white text-3xl font-cabin font-semibold">
                            <?php echo esc_html($post_title) ?>
                        </h1>

                        <?php
                        if (!empty($post_excerpt)) {
                        ?>
                            <span class="text-base text-white font-medium line-clamp-5">
                                <?php echo esc_html($post_excerpt) ?>
                            </span>
                        <?php
                        }
                        ?>

                        <span class="text-white font-cabin text-xs">
                            <?php echo esc_html('Tempo de leitura: 5 minutos') ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="w-full bg-slate-50 text-white flex items-center flex-col py-10 relative">
                <div class="post-content flex flex-col max-w-[840px] px-8 lg:px-0">
                    <?php echo get_the_content() ?>
                </div>

                <div class="border-t border-dashed border-[#ddd] w-full max-w-[840px] mt-10 px-8 lg:px-0">
                    <div class="mt-10 flex gap-10">
                        <div>
                            <img class="w-14 h-auto" src="<?php echo esc_url($author_image_url) ?>">
                        </div>

                        <div class="flex flex-col gap-2 text-gray-700">
                            <span class="text-base"><?php esc_html_e('Escrito por: ', 'it9-obrasoft') ?></span>

                            <span class="text-2xl font-semibold"><?php echo $author_name ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>