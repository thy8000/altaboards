<?php

if (!defined('ABSPATH')) exit;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/_index.css">

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_utils_get_component('header/main-menu'); ?>