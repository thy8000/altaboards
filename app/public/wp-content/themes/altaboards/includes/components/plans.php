<?php

wp_utils_verify_abspath();

if(empty($args['plans_slug'])){
    return;
}

?>

<section id="plans" class="bg-orange-50">
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
                    <?php echo esc_html_e('Altaboards permite que você cria uma gestão de fornecedores poderosa', 'it9-obrasoft') ?>
                </h4>
            </div>

            <div class="grid grid-col-1 lg:grid-cols-3 gap-6">
                <?php
                foreach ($args['plans_slug'] as $plan_slug) {
                ?>
                    <?php wp_utils_get_component('front-page/plans-card', ['plan_slug' => $plan_slug]) ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>