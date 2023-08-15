<?php

wp_utils_verify_abspath();

$features_background_image = get_template_directory_uri() . '/assets/images/front-page-features.png';
?>

<section class="bg-gray-100">
    <div class="custom-container">
        <div class="flex flex-col-reverse py-16 justify-center lg:flex-row">
            <div class="w-full flex flex-col gap-x-5 lg:w-6/12">
                <div class="pb-10">
                    <h2 class="text-4xl text-jade font-medium font-roboto pb-8 lg:max-w-[450px]">
                        <?php esc_html_e('Esteja no controle do seu negócio e dos seus clientes, conheça a máxima eficiência da sua empresa.', 'it9-obrasoft') ?>
                    </h2>

                    <h3 class="text-lg font-normal text-midgray lg:max-w-[450px]">
                        <?php esc_html_e('A gestão de fornecedores é um pilar essencial para o sucesso de qualquer empresa operar de forma eficiente, competitiva e sustentável no mercado. Conosco, você terá tudo isso de forma simples e eficaz.', 'it9-obrasoft') ?>
                    </h3>
                </div>

                <div class="flex flex-wrap gap-10">
                    <div class="w-full flex items-center bg-white py-4 px-5 h-[100px] rounded-xl gap-x-6 shadow-lg lg:w-5/12">
                        <div class="text-xs">
                            <?php esc_html_e('Monitore o recebimento e a validade dos documentos', 'it9-obrasoft') ?>
                        </div>

                        <?php wp_utils_load_svg('/assets/images/heart-rate-monitor.svg', 'w-12 stroke-teal-300') ?>
                    </div>

                    <div class="w-full flex items-center bg-white py-4 px-5 h-[100px] rounded-xl gap-x-6 shadow-lg lg:w-5/12">
                        <div class="text-xs">
                            <?php esc_html_e('Visualize em um único painel todos os seus fornecedores', 'it9-obrasoft') ?>
                        </div>

                        <?php wp_utils_load_svg('/assets/images/eyeglass.svg', 'w-12 stroke-violet-800') ?>
                    </div>

                    <div class="w-full flex items-center bg-white py-4 px-5 h-[100px] rounded-xl gap-x-6 shadow-lg lg:w-5/12">
                        <div class="text-xs">
                            <?php esc_html_e('Acesse pelo celular de qualquer lugar 24 horas', 'it9-obrasoft') ?>
                        </div>

                        <?php wp_utils_load_svg('/assets/images/devices.svg', 'w-12 stroke-pink-800') ?>
                    </div>

                    <div class="w-full flex items-center bg-white py-4 px-5 h-[100px] rounded-xl gap-x-6 shadow-lg lg:w-5/12">
                        <div class="text-xs">
                            <?php esc_html_e('Alerte automaticamente os seus fornecedores', 'it9-obrasoft') ?>
                        </div>

                        <?php wp_utils_load_svg('/assets/images/bell-plus.svg', 'w-12 stroke-amber-500') ?>
                    </div>
                </div>
            </div>

            <div class="w-full flex justify-center items-center lg:w-6/12">
                <img src="<?php echo esc_url($features_background_image) ?>">
            </div>
        </div>
    </div>
</section>