<?php 

function load_theme_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_theme_assets');
