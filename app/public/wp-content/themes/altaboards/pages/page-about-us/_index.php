<?php

wp_utils_verify_abspath();

$benefits_list = [
    [
        'title'       => esc_html__('Apresentando o Altaboards', 'it9-obrasoft'),
        'description' => esc_html__('Descubra uma plataforma robusta e abrangente que possibilita a automatização da Gestão de Fornecedores para a sua empresa.', 'it9-obrasoft'),
        'image'       => esc_url(get_template_directory_uri() . '/assets/images/graphic-creator-benefit.jpeg'),
        'link'        => esc_url(get_page_link(get_page_by_path('services'))),
    ],
];

wp_utils_get_component('header/_index');

wp_utils_get_component('hero', [
    'top_title' => esc_html__('Nossa missão é aprimorar e simplificar a maneira como as empresas lidam com seus fornecedores.', 'it9-obrasoft'),
    'main_title' => esc_html__('Conheça a nossa história', 'it9-obrasoft'),
    'bottom_title' => esc_html__('Nem todo mundo precisa ser um gestor, mas todo negócio deveria ter acesso à um. Nossa missão é criar isso.', 'it9-obrasoft'),
]);

wp_utils_get_component('about-us/our-history');

wp_utils_get_component('benefits-list', [
    'benefits_list' => $benefits_list,
]);

wp_utils_get_component('call-to-action-contact');

wp_utils_get_component('footer/_index');