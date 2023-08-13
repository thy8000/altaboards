<?php

wp_utils_verify_abspath();

$bg_image_url = esc_url(get_template_directory_uri() . '/assets/images/about-us-hero-background-image.jpg');

$top_title = $args['top_title'] ?? '';
$main_title = $args['main_title'] ?? '';
$bottom_title = $args['bottom_title'] ?? '';

?>

<section class="bg-white bg-cover bg-no-repeat bg-left lg:bg-center" style="background-image: url(<?php echo $bg_image_url ?>)">
    <div class="custom-container">
        <div class="flex py-16 pb-24">
            <div class="w-full flex flex-col gap-10 justify-center items-center">
                <?php
                if (!empty($top_title)) {
                ?>
                    <h2 class="text-xl text-gray-700 text-center font-bold font-roboto my-0 lg:text-start">
                        <?php echo $top_title ?>
                    </h2>
                <?php
                }
                if (!empty($main_title)) {
                ?>
                    <h2 class="text-5xl text-jade font-normal font-roboto max-w-[800px] text-center my-0 lg:text-6xl">
                        <?php echo $main_title ?>
                    </h2>
                <?php
                }
                if (!empty($bottom_title)) {
                ?>
                    <h3 class="text-xl font-medium text-midgray text-center max-w-[800px] my-0">
                        <?php echo $bottom_title ?>
                    </h3>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

</section>