<?php
wp_utils_verify_abspath();

$page_contact_link = get_page_link(get_page_by_path('contact'));

$whatsapp_contact_link = "https://api.whatsapp.com/send?phone=5511970800600&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20Altaboards%20Gest%C3%A3o%20de%20Fornecedores!";
?>

<div class="hero">
    <div class="custom-container flex flex-col-reverse gap-12 lg:flex-row">
        <div data-w-id="21856c67-9fa8-9c2d-d6f2-c3cfb2130683" class="hero-div-content">
            <h1 class="hero-title">Gerencie o vencimento de <strong>qualquer coisa</strong> de forma fácil, flexível e grátis!</h1>
            <h2 class="hero-subtitle">Altaboards: uma solução completa para gestão de prazos, projetos e licenças.</h2>
            <div class="hero-div-buttons">
                <a href="https://app.altaboards.com/#/register" class="hero-button w-button">começar agora</a>
                <a href="#Section-Cases" class="hero-button-ghost w-button">casos de uso</a>
            </div>
        </div>
        
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page-hero-animation.gif" alt="" class="image-2">
    </div>
</div>