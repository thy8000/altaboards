<?php

wp_utils_verify_abspath();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$posts_to_exclude = $args['posts_to_exclude'] ?? '';

$custom_query_args = $args['custom_query_args'] ?? '';

if (empty($custom_query_args)) {
    $posts_list = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 10,
        'paged'          => $paged,
        'post__not_in'   => $posts_to_exclude,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);
} else {
    $posts_list = new WP_Query($custom_query_args);
}

$post_categories = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => true,
]);
?>

<section class="bg-white py-14">
    <div class="custom-container">
        <div class="flex gap-20 flex-col lg:flex-row">
            <div class="w-full gap-14 flex flex-col lg:gap-10 lg:w-3/4">
                <?php
                if (!$posts_list->have_posts()) {
                    esc_html_e('Não há postagens disponíveis no momento, tente novamente mais tarde.', 'it9-obrasoft');
                }

                while ($posts_list->have_posts()) {
                    $posts_list->the_post();

                    wp_utils_get_component('post-card', [
                        'post_object' => get_post(),
                    ]);
                }
                ?>

                <div class="flex gap-4">
                    <?php
                    echo paginate_links([
                        'total'      => $posts_list->max_num_pages,
                        'prev_text'  => '<',
                        'next_text' => '>',
                    ]);
                    ?>
                </div>
            </div>

            <div class="w-full flex flex-col gap-10 lg:w-1/4">
                <div>
                    <?php wp_utils_get_component('search'); ?>
                </div>

                <?php
                if (!empty($post_categories)) {
                ?>
                    <div>
                        <span class="text-2xl font-cabin font-medium">Categorias</span>

                        <?php
                        foreach ($post_categories as $post_category) {
                            $post_category_link = get_category_link($post_category->term_id);
                        ?>
                            <ul>
                                <li class="border-b border-solid border-[#0000001a] py-4">
                                    <a class="transition-all duration-500 ease-linear text-midgray hover:text-jade" href="<?php echo esc_url($post_category_link) ?>">
                                        <?php echo esc_html($post_category->name) ?>
                                    </a>
                                </li>
                            </ul>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>