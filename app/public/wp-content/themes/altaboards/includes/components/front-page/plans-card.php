<?php

wp_utils_verify_abspath();

$plan = $args['plan'] ?? '';

if (empty($plan)) {
    return;
}

$color = $args['plan']['color'] ?? '';

if($color === 'bg-jade'){
    $color = 'bg-jade';
}
else if($color === 'bg-yellow-500'){
    $color = 'bg-yellow-500';
}
else{
    $color = 'bg-sky-500';
}

?>

<div class="flex flex-col w-full bg-white rounded-2xl lg:w-4/12">
    <div class="<?php echo esc_attr($color) ?> w-full rounded-t-2xl py-4">
        <h2 class="text-2xl font-medium text-center my-0 py-3 text-white">
            <?php echo $plan['title'] ?>
        </h2>
    </div>

    <div class="p-10">
        <h3 class="text-base font-medium text-center h-[130px] my-0 text-gray-600">
            <?php echo $plan['description'] ?>
        </h3>

        <hr>

        <h4 class="text-lg	font-medium text-gray-700">
            <?php echo esc_html_e('Serviços:') ?>
        </h4>

        <ul>
            <?php
            foreach ($plan['services'] as $service) {
            ?>
                <li>
                    <?php echo $service ?>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>