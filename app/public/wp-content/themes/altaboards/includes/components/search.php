<?php

if (!defined('ABSPATH')) exit;

?>

<div class="flex flex-col">
    <form action="<?php echo esc_url(get_home_url()) ?>" method="GET">
        <label class="relative">
            <label class="cursor-pointer flex h-16 p-6 items-center absolute left-0 top-1/2 -translate-y-2/4">
                <?php wp_utils_load_svg('assets/images/search.svg', 'w-5 h-5 stroke-gray-700') ?>

                <input type="submit" value="">
            </label>

            <input class="rounded-md w-full h-16 px-16 text-base text-midgray bg-gray-100 transition-all duration-500 ease-linear outline-0 border-2 focus-visible:border-jade" type="text" name="s" placeholder="<?php esc_html_e('Pesquisa', 'it9-obrasoft') ?>">
        </label>
    </form>
</div>