<?php

wp_utils_verify_abspath();

?>

<section class="bg-slate-50">
    <div class="custom-container">
        <?php
        wp_utils_get_component('services-title', [
            'main_title' => esc_html__('Controle todo o tipo de documentação. O céu é o limite!', 'it9-obrasoft'),
            'show_additional_row' => true,
        ]);

        wp_utils_get_component('services-card-list');
        ?>
    </div>
</section>