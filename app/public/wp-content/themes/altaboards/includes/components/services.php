<?php

if (!defined('ABSPATH')) {
    exit;
}

$services_card_list = [
    [
        'icon'        => 'saude',
        'title'       => esc_html__('Saúde e Segurança', 'it9-obrasoft'),
        'description' => esc_html__('Controle vencimentos de todos os requisitos legais para a gestão de QSMA.', 'it9-obrasoft'),
        'list'        => [
            esc_html__('Treinamentos', 'it9-obrasoft'),
            esc_html__('Entregas de EPIs', 'it9-obrasoft'),
            esc_html__('Exames Ocupacionais', 'it9-obrasoft'),
            esc_html__('PCMSO', 'it9-obrasoft'),
            esc_html__('PPRA', 'it9-obrasoft'),
        ],
    ],
    [
        'icon'        => 'transporte',
        'title'       => esc_html__('Veículos e equipamentos', 'it9-obrasoft'),
        'description' => esc_html__('Controle as validades e obrigações legais de sua frota de veículos e equipamentos.', 'it9-obrasoft'),
        'list'        => [
            esc_html__('Manutenções', 'it9-obrasoft'),
            esc_html__('Garantias', 'it9-obrasoft'),
            esc_html__('Revisões', 'it9-obrasoft'),
            esc_html__('Seguros', 'it9-obrasoft'),
            esc_html__('Impostos', 'it9-obrasoft'),
        ],
    ],
    [
        'icon'        => 'pessoas',
        'title'       => esc_html__('Gestão de contratados', 'it9-obrasoft'),
        'description' => esc_html__('Controle vencimentos das obrigações contratuais de seus prestadores de serviços.', 'it9-obrasoft'),
        'list'        => [
            esc_html__('Contratos', 'it9-obrasoft'),
            esc_html__('Treinamentos', 'it9-obrasoft'),
            esc_html__('Exames ocupacionais', 'it9-obrasoft'),
            esc_html__('Renovações', 'it9-obrasoft'),
            esc_html__('Seguros', 'it9-obrasoft'),
        ],
    ],
    [
        'icon'        => 'auditorias',
        'title'       => esc_html__('Auditorias e certificações', 'it9-obrasoft'),
        'description' => esc_html__('Evite surpresas, controle os prazos de vencimentos de todas as suas certificações e auditorias.', 'it9-obrasoft'),
        'list'        => [
            esc_html__('ISO', 'it9-obrasoft'),
            esc_html__('CREA', 'it9-obrasoft'),
            esc_html__('CRECI', 'it9-obrasoft'),
            esc_html__('LEED', 'it9-obrasoft'),
            esc_html__('Green Build', 'it9-obrasoft'),
        ],
    ],
    [
        'icon'        => 'locacao',
        'title'       => esc_html__('Contratos de locação', 'it9-obrasoft'),
        'description' => esc_html__('Mantenha seus contratos de locação em dia.', 'it9-obrasoft'),
        'list'        => [
            esc_html__('Términos contratuais', 'it9-obrasoft'),
            esc_html__('Seguros obrigatórios', 'it9-obrasoft'),
            esc_html__('Reajuste de valores', 'it9-obrasoft'),
        ],
    ],
    [
        'icon'        => 'licencas',
        'title'       => esc_html__('Licença de funcionamento', 'it9-obrasoft'),
        'description' => esc_html__('Estar em dia com todas as licenças é uma obrigação legal. Mantenha sua operação segura!', 'it9-obrasoft'),
        'list'        => [
            esc_html__('AVCB', 'it9-obrasoft'),
            esc_html__('Alvarás', 'it9-obrasoft'),
        ],
    ],
];
?>

<div id="Section-Cases" class="cases">
    <?php

    if (!empty($args['title'])) {

    ?>

        <div data-w-id="7948b345-27d9-f568-d1c0-7e3adda72960" class="center-title-container">
            <h3 class="premium-title">
                <?php echo esc_html($args['title']) ?>
            </h3>
        </div>

    <?php

    }

    ?>

    <div data-w-id="2788e480-576c-445d-0b27-5c15e5409f78" class="cases-container">
        <?php

        foreach ($services_card_list as $service_card) {
            wp_utils_get_component('service-card', [
                'card_object' => $service_card,
            ]);
        }

        ?>
    </div>
    <a href="/services/#plans" class="cases-button w-button">escolha um plano </a>
</div>