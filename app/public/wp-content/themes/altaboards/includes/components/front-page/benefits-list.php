<?php

wp_utils_verify_abspath();

$benefits_list = [
    [
        'title'       => esc_html__('Integrações diversas. Criação de gráficos e relatórios', 'it9-obrasoft'),
        'description' => esc_html__('Caso alguma documentação estiver vencida é possível bloquear o acesso de pessoas ou a entrada de maquinários e veículos através da integração com sistemas QRCode e dispositivos de controle de acesso. E ainda, criar gráficos e relatórios com o status dos vencimentos.', 'it9-obrasoft'),
        'image'       => esc_url(get_template_directory_uri() . '/assets/images/graphic-creator-benefit.jpeg'),
    ],
    [
        'title'       => esc_html__('Redução de custos administrativos', 'it9-obrasoft'),
        'description' => esc_html__('Equipe reduzida também é redução de custos administrativos. Automatize a Gestão de Fornecedores migrando a sua mão de obra para outras atividades. O melhor aproveitamento da mão de obra e a automação dos processos colocam a sua operação em outro nível.', 'it9-obrasoft'),
        'image'       => esc_url(get_template_directory_uri() . '/assets/images/cost-reduction-benefit.jpg'),
    ],
];
?>

<section class="bg-violet-50">
    <div class="custom-container">
        <div class="flex flex-col py-16 gap-40 lg:gap-60">
            <?php
            foreach($benefits_list as $key => $benefit){
                wp_utils_get_component('benefit-column', [
                    'benefit_item' => $benefit,
                    'is_reverse'   => $key % 2 === 0 ? true : false,
                ]);
            }
            ?>
        </div>
    </div>
</section>