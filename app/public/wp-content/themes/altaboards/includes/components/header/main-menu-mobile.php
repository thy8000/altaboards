<?php

if (!defined('ABSPATH')) exit;

$menu_items = $args['menu-items'] ?? '';

$home_url = get_home_url();
?>

<div class="flex h-[90px] justify-around items-center lg:hidden">
    <div class="flex items-center">
        <?php wp_utils_load_svg('assets/images/hamburguer-open.svg', 'main-menu-button-open fill-white w-8 pt-2.5') ?>
    </div>

    <a class="self-center" href="<?php echo esc_url($home_url) ?>">
        <img class="w-[150px]" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/altaboards-logo.svg') ?>">
    </a>

    <div class="self-center">
        <?php wp_utils_load_svg('assets/images/search.svg', 'stroke-white w-8 pt-2.5') ?>
    </div>

    <ul class="main-menu-mobile-items font-inter flex-col fixed bg-black top-0 h-full w-full -left-full transition-all duration-500 ease-in-out">
        <div class="flex relative">
            <img class="w-60 p-8" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/altaboards-logo.svg') ?>">

            <?php wp_utils_load_svg('assets/images/close.svg', 'main-menu-button-close fill-white w-8 pt-2.5 self-center absolute right-9') ?>
        </div>

        <?php
        foreach ($menu_items as $menu_item) {
            $menu_item_url = $menu_item->url;
        ?>
            <li class="p-4 border-y border-b-[#f4f0f0]">
                <a class="hover:text-aureolin text-white transition-all duration-500 ease-linear" href="<?php echo esc_url($menu_item_url) ?>">
                    <?php esc_html_e($menu_item->title); ?>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
</div>