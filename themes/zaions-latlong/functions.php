<?php


function zaions_cssJsScripts() {
    // CSS Files import
    wp_enqueue_style( 'zaions_style-css', get_stylesheet_uri(  ), null, time(), 'all' );
    wp_enqueue_style( 'zaions_main-css', get_stylesheet_directory_uri(  ) . './assets/css/main.css', 'zaions_style-css', time(), 'all' );
    wp_enqueue_style( 'zaions_bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', 'zaions_style-css', time(), 'all' );

    // JS Files Import
    wp_enqueue_script( 'zaions_main-jquery', 'https://code.jquery.com/jquery-3.1.1.min.js', null, time(), 'all' );
    wp_enqueue_script( 'zaions_main-google-map-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', null, time(), 'all' );
    wp_enqueue_script( 'zaions_main-google-map-api', 'https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=YOUR_API_KEY', null, time(), 'all' );
    wp_enqueue_script( 'zaions_main-js', get_stylesheet_directory_uri(  ) . './assets/js/main.js', null, time(), 'all' );
}
 
add_action( 'wp_enqueue_scripts', 'zaions_cssJsScripts' );