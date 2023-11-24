<?php

if (!defined('ABSPATH')) exit;

$home_url = get_home_url();

?>

<div class="hidden h-[90px] justify-around items-center lg:flex">
    <a class="self-center" href="<?php echo esc_url($home_url) ?>">
        <img class="w-[200px]" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/altaboards-logo.svg') ?>">
    </a>

    <?php 
        wp_nav_menu([
            'theme_location' =>  'main-menu-desktop',
            'menu_class'      => 'main-menu-desktop',
        ]); 
    ?>

    <a class="bg-jade text-white py-4 px-10 rounded-full flex gap-3.5 items-center justify-center transition-all duration-500 ease-in hover:bg-transparent hover:border hover:text-jade hover:border-jade max-w-[250px]" href="https://app.altaboards.com/#/login" target="_blank">
        <?php esc_html_e('Login', 'it9-obrasoft') ?>
    </a>
</div>