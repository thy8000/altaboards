<?php

wp_utils_verify_abspath();

$main_title   = $args['main_title'] ?? '';
$bottom_title = $args['bottom_title'] ?? '';
$show_additional_row = $args['show_additional_row'] ?? false;
?>

<div class="flex flex-col py-16 gap-10">
    <div class="w-full">
        <?php
        if (!empty($main_title)) {
        ?>
            <h2 class="text-4xl text-jade font-medium font-cabin w-full my-0 pb-8 lg:max-w-[600px] lg:text-5xl">
                <?php echo $main_title ?>
            </h2>
        <?php
        }
        if (!empty($bottom_title)) {
        ?>
            <h3 class="text-midgray text-xl font-medium	max-w-[65ch]">
                <?php echo $bottom_title ?>
            </h3>
        <?php
        }
        ?>
    </div>

    <?php
    if (!empty($show_additional_row)) {
    ?>
        <div class="flex flex-col gap-10 lg:flex-row">
            <div class="w-full lg:w-6/12">
                <h3 class="text-3xl text-gray-700 font-medium font-cabin my-0 pb-8 lg:max-w-[450px] lg:text-start">
                    <?php esc_html_e('Evite surpresas com riscos desnecessários', 'it9-obrasoft') ?>
                </h3>

                <h4 class="text-base font-normal text-midgray w-full lg:max-w-[450px]">
                    <?php esc_html_e('Quando o fornecedor está com a documentação atrasada sua empresa está exposta a diversos perigos e é coautora de possíveis acidentes e falhas. Evite multas, ações na justiça, autuações, entre outros riscos. Proteja a imagem da sua empresa!', 'it9-obrasoft') ?>
                </h4>
            </div>

            <div class="w-full lg:w-6/12">
                <h3 class="text-3xl text-gray-700 font-medium font-cabin my-0 pb-8 lg:max-w-[450px] lg:text-start">
                    <?php esc_html_e('Pague apenas o seu fornecedor “compliance”', 'it9-obrasoft') ?>
                </h3>

                <h4 class="text-base font-normal text-midgray w-full lg:max-w-[450px]">
                    <?php esc_html_e('Com alertas e farol de visualização você poderá controlar em um único painel se os seus fornecedores estão com a documentação em dia. Fornecedor "compliance" é fornecedor pago!', 'it9-obrasoft') ?>
                </h4>
            </div>
        </div>
    <?php
    }
    ?>
</div>