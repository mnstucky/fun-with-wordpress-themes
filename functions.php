<?php

function register_nav()
{
    register_nav_menus(array(
        'header' => 'Header'
    ));

    register_nav_menus(array(
        'footer' => 'Footer'
    ));

    register_nav_menus(array(
        '404' => '404'
    ));
}

if (!function_exists('setup')) {
    function setup()
    {
        register_nav();
    }
}

function load_css()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('opensans', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap');
    wp_enqueue_style('matesc', 'https://fonts.googleapis.com/css2?family=Mate+SC&display=swap');
}

// Placeholder for loading JS assets
function load_js()
{
    wp_enqueue_script('init', get_template_directory_uri(), '/js/init.js');
}

add_action('after_setup_theme', 'setup');
add_action('wp_enqueue_scripts', 'load_css');
// add_action('wp_footer', 'load_js');