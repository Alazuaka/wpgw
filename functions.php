<?php

add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles');

function add_scripts_and_styles () {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() );
}
?>