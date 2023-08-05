<?php

if (!defined('ABSPATH')) exit;

$timeline_steps = [
    '1' => [
        'title' => esc_html__('Passo 1', 'it9-obrasoft'),
        'description' => esc_html__('Crie quadros de monitoramento de toda a documentação que deseja controlar.', 'it9-obrasoft'),
    ],
    '2' => [
        'title' => esc_html__('Passo 2', 'it9-obrasoft'),
        'description' => esc_html__('Informe a periodicidade de alertas próximos aos vencimentos.', 'it9-obrasoft'),
    ],
    '3' => [
        'title' => esc_html__('Passo 1', 'it9-obrasoft'),
        'description' => esc_html__('Insira datas e o sistema calculará os prazos de cada item.', 'it9-obrasoft'),
    ],
    '4' => [
        'title' => esc_html__('Passo 1', 'it9-obrasoft'),
        'description' => esc_html__('Convide seu fornecedor a interagir e alimentar os quadros.', 'it9-obrasoft'),
    ],
];

$total_elements = count($timeline_steps); 
?>

<section class="bg-white">
    <div class="custom-container">
        <div class="flex py-16 gap-20 justify-center items-center">
            <ul class="flex flex-col gap-40 relative">
                <div class="absolute w-0.5 bg-jade h-[1238px] left-[379px]"></div>

                <?php
                foreach ($timeline_steps as $step => $timeline) {
                    $is_inverted = (int) $step % 2 === 0 ? 'flex-row -ml-[13px]' : 'flex-row-reverse';
                    $last_element = end($timeline_steps);

                    $is_last = $step === ($total_elements) ? 'flex items-end' : '';
                ?>
                    <li class="flex z-10 gap-10 <?php echo esc_attr($is_inverted) ?>">
                        <div class="w-5/12">
                            <div class="flex flex-col gap-2 bg-jade/30 p-14 rounded-lg shadow-lg font-roboto">
                                <span>
                                    <?php echo $timeline['description'] ?>
                                </span>
                            </div>
                        </div>

                        <div class="2/12 <?php echo esc_attr($is_last) ?>">
                            <div class="front-page-timeline-circle">
                                <?php echo $step ?>
                            </div>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>