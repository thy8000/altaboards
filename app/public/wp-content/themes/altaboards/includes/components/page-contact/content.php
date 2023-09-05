<?php

if (!defined('ABSPATH')) exit;

$contact_image = get_template_directory_uri() . '/assets/images/page-contact-image.png';
?>

<section class="bg-orange-50">
    <div class="custom-container">
        <div class="flex flex-col-reverse py-14 gap-14 lg:gap-0 lg:flex-row">
            <div class="basis-6/12 flex flex-col justify-center	gap-10">
                <div class="flex flex-col">
                    <h1 class="text-4xl	font-medium font-cabin text-jade">
                        <?php esc_html_e('Entre em contato conosco!', 'it9-obrasoft') ?>
                    </h1>

                    <h2 class="text-base font-normal text-gray-600">
                        <?php esc_html_e('Aguardamos o seu contato! Tem alguma dúvida sobre o nosso aplicativo, precisar de suporte técnico, ou quiser solicitar o orçamento do nosso app, não hesite em entrar em contato. Nossa equipe está dedicada e pronta para atendê-lo e fornecer a assistência necessária.', 'it9-obrasoft') ?>
                    </h2>
                </div>

                <div class="flex flex-col gap-4">
                    <a class="flex items-center gap-2 transition-all duration-500 ease-linear text-gray-600 hover:text-jade" href="https://goo.gl/maps/DnGX5hfU8zHU7HbH7">
                        <?php
                        wp_utils_load_svg('assets/images/address.svg', 'w-8');
                        echo esc_html('Avenida Engenheiro Luis Carlos Berrini, 1140, Cj 72 - Monções - São Paulo/SP');
                        ?>
                    </a>

                    <a class="flex items-center gap-2 max-w-md transition-all duration-500 ease-linear text-gray-600 hover:text-jade" href="tel:+1140637425">
                        <?php
                        wp_utils_load_svg('assets/images/phone.svg', 'w-8');
                        echo esc_html('(11) 4063-7425');
                        ?>
                    </a>

                    <a class="flex items-center gap-2 transition-all duration-500 ease-linear text-gray-600 hover:text-jade" href="mailto:contato@obrasoft.com.br">
                        <?php
                        wp_utils_load_svg('assets/images/envelope.svg', 'w-8');
                        echo esc_html('contato@obrasoft.com.br');
                        ?>
                    </a>
                </div>
            </div>

            <div class="basis-6/12 flex justify-center">
                <img src="<?php echo esc_url($contact_image) ?>">
            </div>
        </div>
    </div>
</section>