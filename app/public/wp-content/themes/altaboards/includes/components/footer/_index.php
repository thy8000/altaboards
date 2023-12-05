<?php

if (!defined('ABSPATH')) exit;

wp_footer();
?>

<footer>
    <div class="bg-white">
        <div class="custom-container">
            <div class="lg:flex-row flex py-11 gap-4 flex-col">
                <div class="lg:w-3/4 w-full">
                    <div class="lg:flex-row flex gap-8 flex-col">
                        <?php wp_utils_get_component('footer/logo-and-social-links'); ?>

                        <div class="border border-midgray"></div>

                        <?php wp_utils_get_component('footer/business-address') ?> 
                    </div>
                </div>

                <div class="lg:hidden block border border-midgray"></div>

                <div class="lg:w-1/4 w-full">
                    <?php wp_utils_get_component('footer/menu-items'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="custom-container">
            <div class="py-5 text-center text-midgray">
                <?php 
                    echo sprintf(
                        esc_html__('© %s - Altaboards - Hospedado e monitorado pela %s - %s, todos os direitos reservados', 'it9-obrasoft'),
                        date('Y'), 
                        '<a class="hover:text-gray-400 transition-all duration-500 ease-linear" href="https://it9.com.br/" target="_blank">IT9</a>',
                        '<a class="hover:text-gray-400 transition-all duration-500 ease-linear" href="https://www.abctudo.com.br/" target="_blank">ABCTudo</a>',
                    );
                ?>
            </div>
        </div>
    </div>
</footer>

</body>