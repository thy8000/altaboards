<?php

wp_utils_verify_abspath();

$benefit_item = $args['benefit_item'] ?? '';

$is_reverse = !empty($args['is_reverse']) ? esc_attr('lg:flex-row') : esc_attr('lg:flex-row-reverse');
$is_reverse_shadow_box = !empty($args['is_reverse']) ? esc_attr('lg:shadow-[35px_-35px_0px_0px_rgb(4,181,113)]') : esc_attr('lg:shadow-[-35px_-35px_0px_0px_rgb(4,181,113)]');

$page_contact_link = esc_url(get_page_link(get_page_by_path('contact')));

if (empty($benefit_item)) {
    return;
}
?>

<div class="w-full flex flex-col-reverse gap-14 <?php echo $is_reverse ?>">
    <div class="flex flex-col gap-5 w-full lg:w-3/5">
        <span class="text-jade text-4xl font-roboto">
            <?php echo $benefit_item['title'] ?>
        </span>

        <span class="text-midgray text-xl max-w-[65ch]">
            <?php echo $benefit_item['description'] ?>
        </span>

        <?php
        if (!empty($benefit_item['link'])) {
        ?>
            <a class="bg-jade text-white py-4 px-10 rounded-full flex gap-3.5 items-center justify-center transition-all duration-500 ease-in hover:bg-transparent hover:border hover:text-jade hover:border-jade max-w-[250px]" href="<?php echo $benefit_item['link'] ?>">
                <?php esc_html_e('Saiba mais', 'it9-obrasoft') ?>
            </a>
        <?php
        }
        ?>
    </div>

    <div class="flex w-full lg:w-2/5">
        <img class="rounded-md w-full h-auto shadow-[15px_-25px_0px_0px_rgb(4,181,113)] md:w-[614px] <?php echo $is_reverse_shadow_box ?>" src="<?php echo $benefit_item['image'] ?>">
    </div>
</div>