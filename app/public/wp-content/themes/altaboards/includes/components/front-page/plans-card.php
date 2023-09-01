<?php

wp_utils_verify_abspath();

$page_contact_link = get_page_link(get_page_by_path('contact'));

if (empty($args['plan_slug'])) {
    return;
}

$plans_list = [
    'free' => [
        'color' => [
            'bg' => 'bg-sky-300',
            'fill' => 'fill-sky-300',
            'text' => 'text-sky-300',
        ],
        'title' => 'Free',
        'link' => [
            'text' => 'Começar agora',
            'url' => 'https://app.altaboards.com/#/register',
        ],
        'price' => [
            'monthly' => 'Grátis',
            'yearly'  => '',
        ],
        'description' => esc_html__('Plano gratuito para aqueles que desejam conhecer e testar o nosso software.', 'it9-obrasoft'),
        'services' => [
            esc_html__('1 Quadro', 'it9-obrasoft'),
            esc_html__('10 linhas', 'it9-obrasoft'),
        ],
    ],
    'basic' => [
        'color' => [
            'bg' => 'bg-green-400',
            'fill' => 'fill-green-400',
            'text' => 'text-green-300',
        ],
        'title' => 'Basic',
        'link' => [
            'text' => 'Saiba mais',
            'url' => '/contact',
        ],
        'price' => [
            'monthly' => '29,90',
            'yearly'  => '25,42',
        ],
        'description' => esc_html__('Ideal para pequenas empresas e empreendedores individuais que desejam um controle básico sobre seus fornecedores.', 'it9-obrasoft'),
        'services' => [
            esc_html__('3 Quadros ', 'it9-obrasoft'),
            esc_html__('100 linhas', 'it9-obrasoft'),
            esc_html__('APP QR Code', 'it9-obrasoft'),
        ],
    ],
    'advanced' => [
        'color' => [
            'bg' => 'bg-yellow-400',
            'fill' => 'fill-yellow-400',
            'text' => 'text-yellow-300',
        ],
        'title' => 'Advanced',
        'link' => [
            'text' => 'Saiba mais',
            'url' => '/contact',
        ],
        'price' => [
            'monthly' => '79,00',
            'yearly'  => '67,15',
        ],
        'description' => esc_html__('Plano ideal para atender às necessidades de grandes empresas e organizações que desejam gerenciar os fornecedores de forma colaborativa.', 'it9-obrasoft'),
        'services' => [
            esc_html__('Quadros ilimitados', 'it9-obrasoft'),
            esc_html__('500 linhas', 'it9-obrasoft'),
            esc_html__('APP QR Code', 'it9-obrasoft'),
        ],
    ],
    'pro' => [
        'color' => [
            'bg' => 'bg-rose-500',
            'fill' => 'fill-rose-500',
            'text' => 'text-rose-300',
        ],
        'title' => 'Pro',
        'link' => [
            'text' => 'Saiba mais',
            'url' => '/contact',
        ],
        'price' => [
            'monthly' => '129,00',
            'yearly'  => '109,65',
        ],
        'description' => esc_html__('Para empresas grandes e organizações que desejam gerenciar os fornecedores de forma colaborativa.', 'it9-obrasoft'),
        'services' => [
            esc_html__('Quadros ilimitados', 'it9-obrasoft'),
            esc_html__('1000 linhas', 'it9-obrasoft'),
            esc_html__('Integração com API', 'it9-obrasoft'),
            esc_html__('APP QR Code', 'it9-obrasoft'),
        ],
    ],
    'enterprise' => [
        'color' => [
            'bg' => 'bg-gray-800',
            'fill' => 'fill-gray-800',
            'text' => 'text-gray-800',
        ],
        'title' => 'Enterprise',
        'link' => [
            'text' => 'Fale conosco',
            'url' => '/contact',
        ],
        'price' => [
            'monthly' => 'Fale Conosco',
            'yearly'  => '',
        ],
        'description' => esc_html__('Para atender às necessidades de grandes empresas que os planos anteriores não conseguiram suprir.', 'it9-obrasoft'),
        'services' => [
            esc_html__('Quadros ilimitados', 'it9-obrasoft'),
            esc_html__('Linhas ilimitadas', 'it9-obrasoft'),
            esc_html__('Integração com API', 'it9-obrasoft'),
            esc_html__('APP QR Code', 'it9-obrasoft'),
        ],
    ],
];
?>

<div class="flex flex-col w-full bg-white rounded-2xl shadow-2xl lg:w-4/12" href="<?php echo esc_url($page_contact_link) ?>">
    <div class="<?php echo esc_attr($plans_list[$args['plan_slug']]['color']['bg']) ?> w-full rounded-t-2xl py-4">
        <h2 class="text-2xl font-medium text-center my-0 py-3 text-white">
            <?php echo $plans_list[$args['plan_slug']]['title'] ?>
        </h2>
    </div>

    <div class="p-10">
        <div class="flex flex-col items-center gap-5 pb-5">
            <div class="text-midgray">
                <span class="font-bold text-4xl font-roboto <?php echo esc_attr($plans_list[$args['plan_slug']]['color']['text']) ?>">
                    <?php

                    echo esc_html($plans_list[$args['plan_slug']]['price']['monthly']);

                    ?>
                </span>

                <?php

                if ($plans_list[$args['plan_slug']]['price']['monthly'] !== 'Grátis' && $plans_list[$args['plan_slug']]['price']['monthly'] !== 'Fale Conosco') {

                ?>
                    por mês

                <?php

                }

                ?>
            </div>

            <div class="text-midgray">
                <?php

                if ($plans_list[$args['plan_slug']]['price']['monthly'] !== 'Grátis' && $plans_list[$args['plan_slug']]['price']['monthly'] !== 'Fale Conosco') {

                ?>

                    ou

                    <span class="font-roboto font-bold <?php echo esc_attr($plans_list[$args['plan_slug']]['color']['text']) ?>">
                        R$ <?php echo esc_html($plans_list[$args['plan_slug']]['price']['monthly']) ?>
                    </span>

                    anual

                <?php

                }

                ?>
            </div>

            <?php

            if ($plans_list[$args['plan_slug']]['price']['monthly'] === 'Grátis' || $plans_list[$args['plan_slug']]['price']['monthly'] === 'Fale Conosco') {

            ?>
                <span class="mt-[5px]"></span>
            <?php

            }

            ?>

            <a role="button" class="bg-jade text-white py-4 px-10 rounded-full flex gap-3.5 items-center justify-center transition-all duration-500 ease-in hover:bg-transparent hover:border hover:text-jade hover:border-jade" href="<?php echo esc_url($plans_list[$args['plan_slug']]['link']['url']) ?>">
                <?php echo esc_html($plans_list[$args['plan_slug']]['link']['text']) ?>
            </a>
        </div>

        <h3 class="text-base font-medium text-center my-0 text-gray-700 h-full pb-8 lg:pb-0 lg:h-[200px] xl:h-[140px]">
            <?php echo $plans_list[$args['plan_slug']]['description'] ?>
        </h3>

        <hr>

        <h4 class="text-lg font-medium text-gray-900 pt-4">
            <?php echo esc_html_e('Serviços:') ?>
        </h4>

        <ul class="flex flex-col gap-4">
            <?php
            foreach ($plans_list[$args['plan_slug']]['services'] as $service) {
            ?>
                <li class="flex items-center gap-4">
                    <div>
                        <?php wp_utils_load_svg('assets/images/plan-card-feature-icon.svg', "w-6 {$plans_list[$args['plan_slug']]['color']['fill']}"); ?>
                    </div>

                    <div class="font-semibold text-midgray">
                        <?php echo $service ?>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>