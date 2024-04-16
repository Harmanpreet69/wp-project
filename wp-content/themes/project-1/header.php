<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="logo">
            <p>BuyStuff.com</p>
        </div>
        <nav>
            <?php wp_nav_menu(array(
                'menu'           => 'main',
                'theme_location' => '',
                'depth'          => 2,
                'fallback_cb'    => false
            )); ?>
        </nav>
    </header>