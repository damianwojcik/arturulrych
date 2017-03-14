<?php

add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_footer', 'enqueue_scripts' );


function enqueue_styles() {
    // load styles
    wp_enqueue_style( 'muli_font', 'https://fonts.googleapis.com/css?family=Muli', '', NULL);
    wp_enqueue_style( 'site_styles', THEME_URL .'/style.css', '', NULL);
}


function enqueue_scripts() {
    // load scripts
    wp_enqueue_script("jquery");
    wp_enqueue_script( 'google_map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAXtC0AkDX0KXNA2GHyCQbmZZzILneLa-s' , '', NULL);
    wp_enqueue_script( 'site_scripts', THEME_URL . '/assets/js/scripts.js', '', NULL);
}
