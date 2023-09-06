<?php

if (!defined('ABSPATH')) exit;

$menu_items = $args['menu-items'] ?? '';

$home_url = get_home_url();
?>

<div class="hidden h-[90px] justify-around items-center lg:flex">
    <a class="self-center" href="<?php echo esc_url($home_url) ?>">
        <img class="w-[200px]" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/altaboards-logo.svg') ?>">
    </a>

    <ul class="flex gap-x-6 justify-center items-center font-cabin">
        <?php
        foreach ($menu_items as $menu_item) {
            $menu_item_url = $menu_item->url;
        ?>
            <li>
                <a class="text-midgray transition-all duration-500 ease-linear hover:text-jade" href="<?php echo esc_url($menu_item_url) ?>">
                    <?php echo esc_html($menu_item->title); ?>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>

    <a class="bg-jade text-white py-4 px-10 rounded-full flex gap-3.5 items-center justify-center transition-all duration-500 ease-in hover:bg-transparent hover:border hover:text-jade hover:border-jade max-w-[250px]" href="https://app.altaboards.com/#/login" target="_blank">
        <?php esc_html_e('Login', 'it9-obrasoft') ?>
    </a>
</div>