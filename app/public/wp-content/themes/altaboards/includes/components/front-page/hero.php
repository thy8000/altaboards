<?php 
wp_utils_verify_abspath(); 

$page_contact_link = get_page_link(get_page_by_path('contact'));

$whatsapp_contact_link = "https://api.whatsapp.com/send?phone=5511970800600&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20Altaboards%20Gest%C3%A3o%20de%20Fornecedores!";
?>

<section class="bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/background-hero.jpg">
    <div class="custom-container">
        <div class="flex py-16">
            <div class="w-full flex flex-col items-center gap-12">
                <h2 class="text-xl text-gray-700 text-center font-bold font-roboto my-0 lg:text-start">
                    <?php esc_html_e('Solução intuitiva para a gestão de fornecedores.', 'it9-obrasoft') ?>
                </h2>

                <h3 class="front-page-hero-title text-5xl text-gray-600 font-normal font-roboto max-w-[800px] text-center my-0 lg:text-6xl">
                    <?php
                    printf(
                        esc_html__('%s %s %s %s %s', 'it9-obrasoft'),
                        esc_html__('Fazer a', 'it9-obrasoft'),
                        '<strong>',
                        esc_html__('gestão de fornecedores', 'it9-obrasoft'),
                        '</strong>',
                        esc_html__('ficou fácil e prático', 'it9-obrasoft')
                    );
                    ?>
                </h3>

                <h4 class="text-xl font-medium text-midgray text-center max-w-[800px] my-0">
                    <?php esc_html_e('Ao exercer controle sobre seu prestador de serviços, você assegura a pontualidade, monitoramento e segurança de suas operações. Essa abordagem proativa fortalece sua eficiência e confiabilidade, além de garantir uma parceria bem-sucedida.', 'it9-obrasoft') ?>
                </h4>

                <div class="flex gap-12 flex-col lg:flex-row">
                    <a class="bg-jade text-white py-4 px-10 rounded-full flex gap-3.5 items-center justify-center transition-all duration-500 ease-in hover:bg-transparent hover:border hover:text-jade hover:border-jade" href="<?php echo esc_url($page_contact_link) ?>">
                        <?php esc_html_e('Experimente grátis', 'it9-obrasoft') ?>
                    </a>

                    <a class="front-page-hero-whatsapp-button bg-transparent text-jade py-4 px-10 rounded-full border border-jade flex gap-3.5 items-center transition-all duration-500 ease-in hover:bg-jade hover:text-white" href="<?php echo esc_url($whatsapp_contact_link) ?>" target="_blank">
                        <?php wp_utils_load_svg('assets/images/whatsapp.svg', 'front-page-hero-whatsapp-button-icon w-8 h-8 stroke-jade transition-all duration-500 ease-in') ?>

                        <span>
                            <?php esc_html_e('Solicite uma proposta', 'it9-obrasoft') ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>