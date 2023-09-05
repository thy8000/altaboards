<?php

wp_utils_verify_abspath();

?>

<section class="bg-orange-50 w-full bg-aureolin rounded-t-[50px] -mt-[40px] z-10 relative">
    <div class="custom-container">
        <div class="flex flex-col py-16 gap-16">
            <div class="w-full">
                <h2 class="text-jade text-center text-5xl font-inter font-bold">
                    <?php esc_html_e('Afinal, quem somos nós ?', 'it9-obrasoft') ?>
                </h2>
            </div>

            <div class="w-full flex justify-center">
                <div class="flex">
                    <img class="w-full h-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/about-us-image.png">
                </div>
            </div>
            
            <div class="lg:flex-row flex-col w-full flex gap-10">
                <div class="lg:w-1/2 w-full flex justify-center">
                    <div class="lg:text-justify text-start text-lg text-midgray max-w-[450px]">
                        <?php esc_html_e('Nascemos no ano de 2011 dentro de um canteiro de obras com uma idéia que visa até os dias de hoje preservar a vida das pessoas e manter uma boa qualidade na execução das atividades. Hoje atuamos além de canteiros de obras nos mais variados segmentos em todo o Brasil e em países da América Latina, acordamos cedo todos os dias acreditando veementemente em nossa missão..', 'it9-obrasoft') ?>
                    </div>
                </div>

                <div class="lg:w-1/2 w-full flex justify-center">
                    <div class="lg:text-justify text-start text-lg text-midgray max-w-[450px]">
                        <?php esc_html_e('Ao longo dos anos colecionamos amigos, clientes, parceiros e pessoas que compõem um time empolgado e apaixonado, com sinergia, honestidade e transparência em qualquer parte do nosso trabalho.', 'it9-obrasoft') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>