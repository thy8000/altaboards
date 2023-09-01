<?php

wp_utils_verify_abspath();

wp_utils_get_component('header/_index');

wp_utils_get_component('hero', [
    'main_title' => esc_html__('Nossos Planos', 'it9-obrasoft'),
    'bottom_title' => esc_html__('Conheça nossos planos e o que a nossa plataforma pode te oferecer', 'it9-obrasoft'),
]);

wp_utils_get_component('plans', [
    'plans_slug' => ['free', 'basic', 'advanced', 'pro', 'enterprise'],
]);

wp_utils_get_component('call-to-action-contact');

wp_utils_get_component('footer/_index');
