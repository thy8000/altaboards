<?php

if (!defined('ABSPATH')) {
    exit;
}

$service_item = $args['card_object'];
?>

<div class="case-item-div">
    <div class="case-item-image">
        <img class="w-[3.75rem]" src="<?php echo get_template_directory_uri() ?>/assets/images/services-card-<?php echo $service_item['icon'] ?>.svg" height="60" alt="" class="image">
    </div>

    <h4 class="case-item-title">
        <?php echo $service_item['title'] ?>
    </h4>

    <p class="case-item-text">
        <?php echo $service_item['description'] ?>
    </p>

    <p class="case-item-list">
        <?php

        foreach ($service_item['list'] as $list_item) {
            echo '• ' . $list_item . '<br>';
        }

        ?>
    </p>
</div>