<?php
function mygoodwin_styles() {
    wp_enqueue_style('site.css', get_stylesheet_directory_uri() . '/css/site.css', array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles');

function mygoodwin_scripts() {
    wp_enqueue_script('js.js', get_stylesheet_directory_uri() . '/js/js.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mygoodwin_scripts');
function show_admin_bar_always() {
    return true;
}
add_filter('show_admin_bar', 'show_admin_bar_always');
?>