<?php

wp_utils_verify_abspath();

$background_image_url = esc_url(get_template_directory_uri() . '/assets/images/call-to-action-contact-background.jpg');

$page_contact_link = get_page_link(get_page_by_path('contact'));

?>

<section class="bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo $background_image_url ?>)">
    <div class="custom-container">
        <div class="flex py-16 flex-col lg:flex-row">
            <div class="flex flex-col gap-10 w-full lg:w-3/5">
                <div class="text-jade font-inter text-4xl font-semibold">
                    <?php esc_html_e('Aumente a eficiência do seu negócio e reduza os riscos, eleve sua empresa a outro nivel.', 'it9-obrasoft') ?>
                </div>

                <div class="text-gray-600 font-inter text-2xl">
                    <?php esc_html_e('Entre em contato conosco e marque uma reunião conosco', 'it9-obrasoft') ?>
                </div>
            </div>

            <div class="flex justify-center w-full mt-16 lg:w-2/5 lg:mt-0">
                <div class="flex items-center">
                    <a class="bg-jade text-white py-4 px-10 rounded-full flex gap-3.5 items-center justify-center transition-all duration-500 ease-in hover:bg-transparent hover:border hover:text-jade hover:border-jade" href="<?php echo esc_url($page_contact_link) ?>">
                        <?php esc_html_e('Experimente grátis', 'it9-obrasoft') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>