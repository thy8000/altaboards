<?php 
wp_utils_verify_abspath(); 
?>

<section class="bg-stone-200">
    <div class="custom-container">
        <?php 
        wp_utils_get_component('front-page/title-and-embed-video');
        wp_utils_get_component('front-page/timeline') 
        ?>
    </div>
</section>