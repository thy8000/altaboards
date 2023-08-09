<?php

wp_utils_verify_abspath();

$services_list = [
    [
        'title' => esc_html__('Situação Cadastral', 'it9-obrasoft'),
        'image' => esc_url(get_template_directory_uri() . '/assets/images/company-status-service-icon.svg'),
        'description' => esc_html__('Verifique a situação cadastral da empresa. Obtenha informações sobre dívidas e processos.', 'it9-obrasoft'),
    ],
    [
        'title' => esc_html__('Saúde Ocupacional', 'it9-obrasoft'),
        'image' => esc_url(get_template_directory_uri() . '/assets/images/occupacional-health-service-icon.svg'),
        'description' => esc_html__('Acompanhe a saúde ocupacional dos funcionários. Verifique exames, atestados, entre outros itens.', 'it9-obrasoft'),
    ],
    [
        'title' => esc_html__('Treinamento', 'it9-obrasoft'),
        'image' => esc_url(get_template_directory_uri() . '/assets/images/training-service-icon.svg'),
        'description' => esc_html__('Mantenha atualizado o treinamento de todos os funcionários. Priorize trabalhadores com formação adequada e em dia.', 'it9-obrasoft'),
    ],
    [
        'title' => esc_html__('Segurança do Trabalho', 'it9-obrasoft'),
        'image' => esc_url(get_template_directory_uri() . '/assets/images/workplace-safety-service-icon.svg'),
        'description' => esc_html__('Avalie maquinários, veículos, equipamentos e EPIs. Verifique se as manutenções, revisões, calibrações e garantias estão dentro dos prazos.', 'it9-obrasoft'),
    ],
    [
        'title' => esc_html__('Qualidade', 'it9-obrasoft'),
        'image' => esc_url(get_template_directory_uri() . '/assets/images/quality-service-icon.svg'),
        'description' => esc_html__('Mantenha a qualidade dos serviços prestados. Acompanhe cada detalhe.', 'it9-obrasoft'),
    ],
    [
        'title' => esc_html__('Gestão de tempo', 'it9-obrasoft'),
        'image' => esc_url(get_template_directory_uri() . '/assets/images/time-management-service-icon.svg'),
        'description' => esc_html__('Garanta o comprometimento das entregas de mercadorias e serviços. Mantenha o fluxo da sua operação sem surpresas.', 'it9-obrasoft'),
    ],
];

?>

<div class="md:gap-x-[5%] flex flex-wrap py-16 gap-y-20 gap-x-0 justify-center">
    <?php
    foreach ($services_list as $service) {
        wp_utils_get_component('service-card', [
            'card_info' => $service,
        ]);
    }
    ?>
</div>