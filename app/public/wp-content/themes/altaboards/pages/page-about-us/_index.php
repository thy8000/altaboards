<?php

wp_utils_verify_abspath();

$benefits_list = [
    [
        'title'       => esc_html__('Apresentando o Altaboards', 'it9-obrasoft'),
        'description' => esc_html__('Descubra uma plataforma robusta e abrangente que possibilita a automatização da Gestão de Fornecedores para a sua empresa.', 'it9-obrasoft'),
        'image'       => esc_url(get_template_directory_uri() . '/assets/images/graphic-creator-benefit.jpeg'),
        'link'        => esc_url(get_page_link(get_page_by_path('services'))),
    ],
    [
        'title'       => esc_html__('A Consultoria ObraSoft', 'it9-obrasoft'),
        'description' => esc_html__('Contamos com uma equipe altamente qualificada e capacitada para auxiliar sua empresa no processo de melhoria contínua do Sistema de Gestão, combinando conhecimento técnico e tecnológico de forma a oferecer as melhores soluções para os desafios enfrentados no dia a dia.', 'it9-obrasoft'),
        'image'       => esc_url(get_template_directory_uri() . '/assets/images/time-obrasoft.jpg'),
        'link'        => esc_url(get_page_link(get_page_by_path('contact'))),
    ],
];

wp_utils_get_component('header/_index');

wp_utils_get_component('about-us/hero');

wp_utils_get_component('about-us/our-history');

wp_utils_get_component('benefits-list', [
    'benefits_list' => $benefits_list,
]);

wp_utils_get_component('call-to-action-contact');

wp_utils_get_component('footer/_index');