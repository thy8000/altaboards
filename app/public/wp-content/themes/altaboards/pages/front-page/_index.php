<?php

wp_utils_verify_abspath();

$benefits_list = [
    [
        'title'       => esc_html__('Integrações diversas. Criação de gráficos e relatórios', 'it9-obrasoft'),
        'description' => esc_html__('Caso alguma documentação estiver vencida é possível bloquear o acesso de pessoas ou a entrada de maquinários e veículos através da integração com sistemas QRCode e dispositivos de controle de acesso. E ainda, criar gráficos e relatórios com o status dos vencimentos.', 'it9-obrasoft'),
        'image'       => esc_url(get_template_directory_uri() . '/assets/images/graphic-creator-benefit.jpeg'),
        'link'        => esc_url(get_page_link(get_page_by_path('services'))),
    ],
    [
        'title'       => esc_html__('Redução de custos administrativos', 'it9-obrasoft'),
        'description' => esc_html__('Equipe reduzida também é redução de custos administrativos. Automatize a Gestão de Fornecedores migrando a sua mão de obra para outras atividades. O melhor aproveitamento da mão de obra e a automação dos processos colocam a sua operação em outro nível.', 'it9-obrasoft'),
        'image'       => esc_url(get_template_directory_uri() . '/assets/images/cost-reduction-benefit.jpg'),
        'link'        => esc_url(get_page_link(get_page_by_path('services'))),
    ],
];

wp_utils_get_component('header/_index');

wp_utils_get_component('front-page/hero');

wp_utils_get_component('front-page/features');

wp_utils_get_component('front-page/supplier-management');

wp_utils_get_component('front-page/services');

wp_utils_get_component('benefits-list', [
    'benefits_list' => $benefits_list,
]);

wp_utils_get_component('front-page/plans');

wp_utils_get_component('call-to-action-contact');

wp_utils_get_component('footer/_index');
