<?php

wp_utils_verify_abspath();

$plans_list = [
    'basic' => [
        'color' => 'bg-jade',
        'title' => 'Basic',
        'description' => esc_html__('Ideal para pequenas empresas e empreendedores individuais que desejam um controle básico sobre seus fornecedores.', 'it9-obrasoft'),
        'services' => [
            esc_html__('1 usuário', 'it9-obrasoft'),
            esc_html__('Acesso a informações dos fornecedores, como detalhes de contato, produtos/serviços fornecidos e histórico de transações', 'it9-obrasoft'),
            esc_html__('Notificações por e-mail sobre prazos de entrega, contratos, etc...', 'it9-obrasoft'),
            esc_html__('Assistência técnica por e-mail', 'it9-obrasoft'),
        ],
    ],
    'pro' => [
        'color' => 'bg-yellow-500',
        'title' => 'Pro',
        'description' => esc_html__('Para empresas pequenas que desejam gerenciar os fornecedores de forma colaborativa.', 'it9-obrasoft'),
        'services' => [
            esc_html__('Até 10 usuários', 'it9-obrasoft'),
            esc_html__('Acesso a informações dos fornecedores, como detalhes de contato, produtos/serviços fornecidos e histórico de transações', 'it9-obrasoft'),
            esc_html__('Análise de desempenho de fornecedores e relatórios personalizados', 'it9-obrasoft'),
            esc_html__('Integração com sistemas de contabilidade', 'it9-obrasoft'),
            esc_html__('Notificações por e-mail sobre prazos de entrega, contratos, etc...', 'it9-obrasoft'),
            esc_html__('Assistência técnica prioritária, com tempos de respostas mais rápido', 'it9-obrasoft'),
        ],
    ],
    'enterprise' => [
        'color' => 'bg-cyan-500',
        'title' => 'Enterprise',
        'description' => esc_html__('Plano ideal para atender às necessidades de grandes empresas e organizações que desejam gerenciar os fornecedores de forma colaborativa e sem restrições.', 'it9-obrasoft'),
        'services' => [
            esc_html__('Sem restrições de usuário', 'it9-obrasoft'),
            esc_html__('Acesso a informações dos fornecedores, como detalhes de contato, produtos/serviços fornecidos e histórico de transações', 'it9-obrasoft'),
            esc_html__('Campos de dados personalizados', 'it9-obrasoft'),
            esc_html__('Análise de desempenho de fornecedores e relatórios personalizados', 'it9-obrasoft'),
            esc_html__('Análises avançadas de dados e informações mais precisas', 'it9-obrasoft'),
            esc_html__('Integração com sistemas de contabilidade', 'it9-obrasoft'),
            esc_html__('Notificações por e-mail sobre prazos de entrega, contratos, etc...', 'it9-obrasoft'),
            esc_html__('Reforço de segurança, como autenticação de dois fatores e criptografia ponta a ponta', 'it9-obrasoft'),
            esc_html__('Assistência técnica dedicada com tempos de resposta ultrarápidos.', 'it9-obrasoft'),
        ],
    ],
];
?>

<section>
    <div class="custom-container">
        <div class="flex flex-col py-16 justify-center items-center gap-20">
            <div class="flex flex-col text-center">
                <h2 class="text-6xl font-black text-jade max-w-[900px] my-0">
                    <?php echo esc_html_e('Escolha o melhor plano para sua equipe', 'it9-obrasoft') ?>
                </h2>

                <h3 class="text-6xl font-black text-gray-600 max-w-[900px] my-4">
                    <?php echo esc_html_e('Comece de graça.', 'it9-obrasoft') ?>
                </h3>

                <h4 class="my-0 text-2xl font-medium text-midgray pt-10">
                    <?php echo esc_html_e('Altabase permite que você cria uma gestão de fornecedores poderosa', 'it9-obrasoft') ?>
                </h4>
            </div>

            <div class="flex gap-6">
                <?php
                foreach ($plans_list as $plan) {
                ?>
                    <?php wp_utils_get_component('front-page/plans-card', ['plan' => $plan]) ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>