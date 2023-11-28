<?php

if (!defined('ABSPATH')) exit;

$home_url = get_home_url();

?>

<div class="container px-4 md:px-12">
    <div class="flex h-[90px] justify-around items-center lg:hidden">
        <div class="flex items-center">
            <?php wp_utils_load_svg('assets/images/hamburguer-open.svg', 'main-menu-button-open fill-midgray w-8 pt-2.5') ?>

            <?php wp_utils_load_svg('assets/images/close.svg', 'main-menu-button-close hidden fill-graySecondary w-8 pt-2.5 self-center pt-2.5') ?>
        </div>

        <a class="self-center" href="<?php echo esc_url($home_url) ?>">
            <img class="w-[150px]" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/altaboards-logo.svg') ?>">
        </a>

        <?php wp_nav_menu([
            'theme_location'  =>  'main-menu-mobile',
            'menu_class'      => 'main-menu-mobile',
        ]); ?>
    </div>
</div>