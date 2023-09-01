<?php

wp_utils_verify_abspath();

$benefits_list = [
    [
        'title'       => esc_html__('Integrações diversas. Criação de gráficos e relatórios', 'it9-obrasoft'),
        'description' => esc_html__('Caso alguma documentação estiver vencida é possível bloquear o acesso de pessoas ou a entrada de maquinários e veículos através da integração com sistemas QRCode e dispositivos de controle de acesso. E ainda, criar gráficos e relatórios com o status dos vencimentos.', 'it9-obrasoft'),
        'image'       => esc_url(get_template_directory_uri() . '/assets/images/graphic-creator-benefit.jpeg'),
        'link'        => '',
    ],
    [
        'title'       => esc_html__('Redução de custos administrativos', 'it9-obrasoft'),
        'description' => esc_html__('Equipe reduzida também é redução de custos administrativos. Automatize a Gestão de Fornecedores migrando a sua mão de obra para outras atividades. O melhor aproveitamento da mão de obra e a automação dos processos colocam a sua operação em outro nível.', 'it9-obrasoft'),
        'image'       => esc_url(get_template_directory_uri() . '/assets/images/cost-reduction-benefit.jpg'),
        'link'        => '',
    ],
];

wp_utils_get_component('header/_index');

wp_utils_get_component('hero', [
    'main_title' => esc_html__('Nossos Serviços', 'it9-obrasoft'),
    'bottom_title' => esc_html__('Oferecemos serviços diferenciados por meio de um software robusto para gerenciamento de fornecedores de forma automatizada.', 'it9-obrasoft'),
]);
?>

<section class="bg-white">
    <div class="custom-container">
        <?php
        wp_utils_get_component('services-title', [
            'main_title' => esc_html__('O que o Altabase tem a oferecer', 'it9-obrasoft'),
            'bottom_title' => esc_html__('Saiba as vantagens do nosso software, e o que a nossa ferramenta de gerenciamento de fornecedores pode auxiliar no seu negócio.', 'it9-obrasoft'),
            'show_additional_row' => false,
        ]);
        ?>
    </div>

    <?php wp_utils_get_component('services') ?>
</section>

<?php
wp_utils_get_component('benefits-list', [
    'benefits_list' => $benefits_list,
]);

wp_utils_get_component('plans', [
    'plans_slug' => ['free', 'advanced', 'pro'],
]);

wp_utils_get_component('call-to-action-contact');

wp_utils_get_component('footer/_index');
?>