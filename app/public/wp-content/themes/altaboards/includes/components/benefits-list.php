<?php

wp_utils_verify_abspath();

$benefits_list = $args['benefits_list'] ?? '';

if(empty($benefits_list)){
    return;
}
?>

<section class="bg-violet-50">
    <div class="custom-container">
        <div class="flex flex-col py-16 gap-40 lg:gap-60">
            <?php
            foreach($benefits_list as $key => $benefit){
                wp_utils_get_component('benefit-column', [
                    'benefit_item' => $benefit,
                    'is_reverse'   => $key % 2 === 0 ? true : false,
                ]);
            }
            ?>
        </div>
    </div>
</section>