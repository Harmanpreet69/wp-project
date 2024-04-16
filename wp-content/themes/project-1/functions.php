<?php

// Register Header and Footer
function theme_setup()
{
    register_nav_menus(array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}
add_action('after_setup_theme', 'theme_setup');


// Enqueue custom stylesheet
function enqueue_custom_styles()
{
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
