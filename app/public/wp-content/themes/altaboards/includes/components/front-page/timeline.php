<?php

wp_utils_verify_abspath(); 

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

<div class="flex py-16 gap-20 justify-center items-center">
    <ul class="flex flex-col gap-40 relative">
        <div class="absolute w-0.5 bg-jade h-full inset-2/4 -translate-y-2/4 -ml-[4px] lg:ml-0"></div>

        <?php
        foreach ($timeline_steps as $step => $timeline) {
            $is_inverted = (int) $step % 2 === 0 ? 'lg:flex-row -ml-[13px]' : 'lg:flex-row-reverse';
            $invert_steps = (int) $step % 2 === 0 ? '-ml-[-5px] lg:ml-[9px]' : '-ml-[4px] lg:ml-[47px]';
            $last_element = end($timeline_steps);

            $is_last = $step === ($total_elements) ? 'flex items-end' : '';
        ?>
            <li class="flex flex-col-reverse z-20 gap-10 <?php echo esc_attr($is_inverted) ?>">
                <div class="w-full lg:w-5/12">
                    <div class="flex flex-col gap-2 bg-jade p-14 rounded-lg shadow-lg font-cabin lg:bg-jade/30">
                        <span>
                            <?php echo $timeline['description'] ?>
                        </span>
                    </div>
                </div>

                <div class="flex justify-center <?php echo esc_attr($is_last) ?>">
                    <div class="front-page-timeline-circle <?php echo esc_attr($invert_steps) ?> lg:ml-0">
                        <?php echo $step ?>
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</div>