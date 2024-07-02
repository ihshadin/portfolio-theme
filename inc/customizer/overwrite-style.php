<?php

function shadin_custom_colors_css() {
    $primary_color = get_theme_mod('primary_color', '#f89020');
    $secondary_color = get_theme_mod('secondary_color', '#FFFFFF');
    $accent_color = get_theme_mod('accent_color', 'rgba(255, 255, 255, 0.6)');
    $box_shadow_color = get_theme_mod('box_shadow_color', 'rgba(0, 0, 0, 0.1)');
    $gradient_primary_color = get_theme_mod('gradient_colors', '#f89020')['gradient_primary_color'];
    $gradient_secondary_color = get_theme_mod('gradient_colors', '#f5bf4f')['gradient_secondary_color'];
    $border_color = get_theme_mod('border_color', 'rgba(255, 255, 255, 0.1)');
    $primary_bg_color = get_theme_mod('background_colors', '#2e3a42')['primary_bg_color'];
    $secondary_bg_color = get_theme_mod('background_colors', '#29323b')['secondary_bg_color'];
    $body_bg_color1 = get_theme_mod('body_bg_colors', '#313e45')['body_bg_color_1'];
    $body_bg_color2 = get_theme_mod('body_bg_colors', '#080b10')['body_bg_color_2'];
    $hero_overlay_color = get_theme_mod('shadin_banner_bg', '#000000')['background-color'];
    $primary_font_family = get_theme_mod('primary_font_family', 'Poppins')["font-family"];

    $custom_css = "
    :root {
        --primary-color: {$primary_color};
        --secondary-color: {$secondary_color};
        --accent-color: {$accent_color};
        --box-shadow-color: {$box_shadow_color};
        --gradient-primary-color: {$gradient_primary_color};
        --gradient-secondary-color: {$gradient_secondary_color};
        --primary-border-color: {$border_color};
        --primary-bg-color: {$primary_bg_color};
        --secondary-bg-color: {$secondary_bg_color};
        --body-bg-color-1: {$body_bg_color1};
        --body-bg-color-2: {$body_bg_color2};
        --hero-overlay-color: {$hero_overlay_color};
        --typography_setting: {$typography_setting};

        --primary-font-family: {$primary_font_family};
    }";

    wp_add_inline_style('main-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'shadin_custom_colors_css');