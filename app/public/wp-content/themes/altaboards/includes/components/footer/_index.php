<?php

if (!defined('ABSPATH')) exit;

wp_footer();
?>

<footer>
    <div class="bg-black">
        <div class="custom-container">
            <div class="lg:flex-row flex py-11 gap-4 flex-col">
                <div class="lg:w-3/4 w-full">
                    <div class="lg:flex-row flex gap-8 flex-col">
                        <?php wp_utils_get_component('footer/logo-and-social-links'); ?>

                        <div class="border border-[#262d38]"></div>

                        <?php wp_utils_get_component('footer/business-address') ?> 
                    </div>
                </div>

                <div class="lg:hidden block border border-[#262d38]"></div>

                <div class="lg:w-1/4 w-full">
                    <?php wp_utils_get_component('footer/menu-items'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="custom-container">
            <div class="py-5 text-center text-black">
                <?php 
                    echo sprintf(
                        esc_html__('© %s - Altaboards - Hospedado e monitorado pela %s - %s, todos os direitos reservados', 'it9-obrasoft'),
                        date('Y'), 
                        '<a href="#">IT9</a>',
                        '<a href="#">ABCTudo</a>',
                    );
                ?>
            </div>
        </div>
    </div>
</footer>

</body>