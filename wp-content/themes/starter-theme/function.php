<?php
// 1. Define the function to enqueue your scripts and styles
function my_theme_styles() {
    // This is the correct function to enqueue the main style.css
    wp_enqueue_style( 'my-theme-main-style', get_stylesheet_uri() );
}

// 2. Attach the function to the 'wp_enqueue_scripts' action hook
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );
?>