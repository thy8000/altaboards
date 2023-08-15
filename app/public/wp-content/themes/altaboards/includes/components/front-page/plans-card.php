<?php

wp_utils_verify_abspath();

$plan = $args['plan'] ?? '';

$page_contact_link = get_page_link(get_page_by_path('contact'));

if (empty($plan)) {
    return;
}

$color = $args['plan']['color'] ?? '';

if ($color === 'jade') {
    $bg_color = 'bg-jade';
    $fill_color = 'fill-jade';
} else if ($color === 'yellow-500') {
    $bg_color = 'bg-yellow-500';
    $fill_color = 'fill-yellow-500';
} else {
    $bg_color = 'bg-sky-500';
    $fill_color = 'fill-sky-500';
}

?>
<a class="flex flex-col w-full bg-white rounded-2xl shadow-2xl lg:w-4/12" href="<?php echo esc_url($page_contact_link) ?>">
    <div>
        <div class="<?php echo esc_attr($bg_color) ?> w-full rounded-t-2xl py-4">
            <h2 class="text-2xl font-medium text-center my-0 py-3 text-white">
                <?php echo $plan['title'] ?>
            </h2>
        </div>

        <div class="p-10">
            <h3 class="text-base font-medium text-center my-0 text-gray-700 h-full pb-8 lg:pb-0 lg:h-[200px] xl:h-[140px]">
                <?php echo $plan['description'] ?>
            </h3>

            <hr>

            <h4 class="text-lg font-medium text-gray-900 pt-4">
                <?php echo esc_html_e('Serviços:') ?>
            </h4>

            <ul class="flex flex-col gap-4">
                <?php
                foreach ($plan['services'] as $service) {
                ?>
                    <li class="flex items-center gap-4">
                        <div>
                            <?php wp_utils_load_svg('assets/images/plan-card-feature-icon.svg', "w-6 {$fill_color}"); ?>
                        </div>

                        <div class="font-semibold text-midgray">
                            <?php echo $service ?>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</a>