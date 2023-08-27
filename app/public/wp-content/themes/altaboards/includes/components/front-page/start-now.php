<?php

if (!defined('ABSPATH')) {
    exit;
}

$images_list = [
    '3' => [
        'id' => '4cd4fd87-cb01-f968-f5df-310606021ac5',
    ],
    '7' => [
        'id' => '4cd4fd87-cb01-f968-f5df-310606021ac6',
    ],
    '1' => [
        'id' => '4cd4fd87-cb01-f968-f5df-310606021ac7',
    ],
    '5' => [
        'id' => '4cd4fd87-cb01-f968-f5df-310606021ac8',
    ],
    '4' => [
        'id' => '4cd4fd87-cb01-f968-f5df-310606021ac9',
    ],
    '2' => [
        'id' => '4cd4fd87-cb01-f968-f5df-310606021aca',
    ],
    '6' => [
        'id' => '4cd4fd87-cb01-f968-f5df-310606021acb',
    ],
];
?>

<div class="startnow">
    <div data-w-id="4cd4fd87-cb01-f968-f5df-310606021ab7" class="center-title-container">
        <h6 class="startnow-title pb-4">
            Gerenciar vencimentos é <strong>fácil</strong>, <strong>flexível</strong> e <strong class="bold-text">grátis</strong>!
        </h6>

        <a href="https://app.altaboards.com/#/register" class="startnow-button w-button">
            Cadastrar-se
        </a>
    </div>

    <?php

    foreach($images_list as $key => $image) {

    ?>
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/start-now-shape-0<?php echo $key ?>.svg" data-w-id="<?php echo $image['id'] ?>" alt="" class="startnow-shape<?php echo $key ?>">
    <?php

    }

    ?>



<!--
    <img src="images/shape-03.svg" data-w-id="4cd4fd87-cb01-f968-f5df-310606021ac5" alt="" class="startnow-shape3">
    <img src="images/shape-07.svg" data-w-id="4cd4fd87-cb01-f968-f5df-310606021ac6" alt="" class="startnow-shape7">
    <img src="images/shape-01.svg" data-w-id="4cd4fd87-cb01-f968-f5df-310606021ac7" alt="" class="startnow-shape1">
    <img src="images/shape-05.svg" data-w-id="4cd4fd87-cb01-f968-f5df-310606021ac8" alt="" class="startnow-shape5">
    <img src="images/shape-04.svg" data-w-id="4cd4fd87-cb01-f968-f5df-310606021ac9" alt="" class="startnow-shape4">
    <img src="images/shape-02.svg" data-w-id="4cd4fd87-cb01-f968-f5df-310606021aca" alt="" class="startnow-shape2">
    <img src="images/shape-06.svg" data-w-id="4cd4fd87-cb01-f968-f5df-310606021acb" alt="" class="startnow-shape6">
-->
</div>