<?php

if (!defined('ABSPATH')) exit;

$image_404_url = get_template_directory_uri() . '/assets/images/404.png';

$home_page_url = get_home_url();
?>

<section class="bg-stone-200">
    <div class="custom-container">
        <div class="flex py-14">
            <div class="w-full flex flex-col gap-4 justify-center items-center lg:flex-row">
                <div>
                    <img src="<?php echo esc_url($image_404_url) ?>">
                </div>

                <div class="flex flex-col gap-10">
                    <h1 class="font-roboto text-3xl text-jade">
                        <?php esc_html_e('Oops! Página não encontrada.', 'it9-obrasoft') ?>
                    </h1>

                    <h2 class="text-base text-gray-700 font-light max-w-[50ch]">
                        <?php esc_html_e('Desculpe-nos, parece que você se perdeu em algum lugar. A página que você está procurando não existe mais ou foi movida para outro endereço.', 'it9-obrasoft') ?>
                    </h2>

                    <a class="bg-jade text-white py-4 px-10 rounded-full flex gap-3.5 items-center justify-center transition-all duration-500 ease-in max-w-[250px] hover:bg-transparent hover:border hover:text-jade hover:border-jade" href="<?php echo esc_url($home_page_url) ?>">
                        <?php esc_html_e('Página inicial', 'it9-obrasoft') ?>

                        <?php wp_utils_load_svg('assets/images/stack-pop.svg', 'stroke-white w-8') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>