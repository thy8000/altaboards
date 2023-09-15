<?php

if(!defined('ABSPATH')) exit;

$business_address = [
    'address' => [
        'link' => esc_url('https://goo.gl/maps/XJLpfXgwbXXrVQJ18'),
        'label' => esc_html__('Avenida Engenheiro Luis Carlos Berrini, 1140, Cj 72 - Monções - São Paulo/SP', 'it9-obrasoft'),
    ],
    'cep' => [
        'link' => esc_url('https://goo.gl/maps/XJLpfXgwbXXrVQJ18'),
        'label' => esc_html__('CEP: 04571-000', 'it9-obrasoft'),
    ],
    'mail' => [
        'link' => 'mailto:contato@obrasoft.com.br',
        'label' => esc_html('contato@obrasoft.com.br'),
    ],
];
?>

<div class="flex flex-col gap-4">
    <?php
    foreach($business_address as $address){
    ?>
    <span class="text-midgray">
        <a class="hover:text-jade text-midgray transition-all duration-500 ease-linear" href="<?php echo $address['link'] ?>" target="_blank">
            <?php echo $address['label'] ?>
        </a>
    </span>
    <?php
    }
    ?>
</div>