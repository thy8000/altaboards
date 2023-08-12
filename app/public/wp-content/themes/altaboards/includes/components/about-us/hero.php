<?php

wp_utils_verify_abspath();

$bg_image_url = esc_url(get_template_directory_uri() . '/assets/images/about-us-hero-background-image.jpg');

?>

<section class="bg-white bg-cover bg-no-repeat bg-left lg:bg-center" style="background-image: url(<?php echo $bg_image_url ?>)">
    <div class="custom-container">
        <div class="flex py-16 pb-24">
            <div class="w-full flex flex-col gap-10 justify-center items-center">
                <h2 class="text-xl text-gray-700 text-center font-bold font-roboto my-0 lg:text-start">
                    <?php esc_html_e('Nossa missão é aprimorar e simplificar a maneira como as empresas lidam com seus fornecedores.', 'it9-obrasoft') ?>
                </h2>

                <h2 class="text-5xl text-jade font-normal font-roboto max-w-[800px] text-center my-0 lg:text-6xl">
                    <?php esc_html_e('Conheça a nossa história', 'it9-obrasoft') ?>
                </h2>

                <h3 class="text-xl font-medium text-midgray text-center max-w-[800px] my-0">
                    <?php esc_html_e('Nem todo mundo precisa ser um gestor, mas todo negócio deveria ter acesso à um. Nossa missão é criar isso.', 'it9-obrasoft') ?>
                </h3>
            </div>
        </div>
    </div>

</section>