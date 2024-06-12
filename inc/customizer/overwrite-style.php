<?php

function shadin_custom_colors_css() {
    $primary_color = get_theme_mod('theme_primary_color', '#f89020');
    
    $custom_css = "
    :root {
        --primary-color: {$main_color};
    }";

    wp_add_inline_style('main-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'shadin_custom_colors_css');