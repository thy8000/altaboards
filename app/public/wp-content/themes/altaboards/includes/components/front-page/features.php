<?php

if (!defined('ABSPATH')) {
    exit;
}

$features_list = [
    [
        'icon' => 'ver-todos',
        'text' => esc_html__('Veja em um só painel todos os vencimentos e seus prazos.', 'it9-obrasoft'),
    ],
    [
        'icon' => 'receba',
        'text' => esc_html__('Receba avisos e alertas dos prazos em seu e-mail.', 'it9-obrasoft'),
    ],
    [
        'icon' => 'organize',
        'text' => esc_html__('Arquive e organize comprovantes e evidências.', 'it9-obrasoft'),
    ],
    [
        'icon' => 'economize',
        'text' => esc_html__('Economize tempo e dinheiro na gestão dos vencimentos.', 'it9-obrasoft'),
    ],
];
?>

<div class="premium">
    <div class="custom-container flex gap-12 flex-col items-center lg:flex-row">
        <div data-w-id="9834e358-c302-6893-4645-24d06e714ba0" class="premium-div-image">
            <img class="w-[21.875rem]" src="<?php echo get_template_directory_uri() ?>/assets/images/front-page-feature-image.svg" width="508" alt="">
        </div>
        <div data-w-id="9834e358-c302-6893-4645-24d06e714ba2" class="premium-div-content">
            <h3 class="premium-title">Crie <strong>quadros personalizados</strong> para monitorar vencimentos</h3>
            <p class="premium-text">Controle vencimentos de qualquer coisa! Se você precisa controlar o vencimento de treinamentos, exames ocupacionais, contratos, entrega de EPI&#x27;s, seguros, programas, etc...​ <br><br>Com isto, você consegue <strong>controlar o acesso de colaboradores e prestadores de serviço</strong> na sua empresa integrando o sistema com sua catraca.</p>
            <a href="#" class="premium-button w-button">veja na prática</a>
        </div>
    </div>
</div>
<div class="premium">
    <div class="custom-container flex flex-col items-center lg:flex-row-reverse">
        <div data-w-id="c5a841c2-d076-784b-3bc1-35978245fc49" class="premium-div-image">
            <img class="w-[18.75rem]" src="<?php echo get_template_directory_uri() ?>/assets/images/front-page-feature-image-inverse.svg" width="508" alt="">
        </div>

        <div data-w-id="c5a841c2-d076-784b-3bc1-35978245fc4b" class="premium-div-content">
            <h3 class="premium-title">Organize, agilize e economize :)</h3>
            <div class="premium-div-feature">
                <?php

                foreach ($features_list as $feature) {

                ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page-feature-item-<?php echo $feature['icon'] ?>.svg" height="" width="45" alt="">

                    <p class="premium-div-feature-text">
                        <?php echo $feature['text'] ?>
                    </p>
                <?php

                }

                ?>
            </div>
        </div>
    </div>
</div>