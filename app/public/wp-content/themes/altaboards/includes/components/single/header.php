<?php

if (!defined('ABSPATH')) exit;

$post_thumbnail_url = !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/obrasoft-placeholder.png';

?>

<section>
    <div class="w-full h-[630px] bg-no-repeat bg-cover blur-md" style="background-image: url(<?php echo esc_attr($post_thumbnail_url) ?>)"></div>
</section>