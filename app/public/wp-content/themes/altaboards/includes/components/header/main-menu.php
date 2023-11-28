<?php

if (!defined('ABSPATH')) exit;

?>

<header class="sticky top-0 left-0 w-full z-50 shadow-[0px_9px_15px_rgba(0,0,0,0.75)] bg-white">
   <?php

   wp_utils_get_component('header/main-menu-desktop');

   wp_utils_get_component('header/main-menu-mobile');

   ?>
</header>