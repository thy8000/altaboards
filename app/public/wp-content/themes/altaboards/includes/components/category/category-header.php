<?php

if (!defined('ABSPATH')) exit;

$category_object = $args['category_object'] ?? '';

$category_name = is_search() ? $category_object : $category_object->name;

if (empty($category_object)) {
    return;
}

?>

<section>
    <div class="flex">
        <div class="w-full">
            <div class="bg-jade py-20">
                <h1 class="text-center font-roboto text-white text-5xl">
                    <?php echo esc_html($category_name) ?>
                </h1>
            </div>
        </div>
    </div>
</section>