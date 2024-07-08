<?php

function theme_enqueue_styles() {
	// plugins styles
	wp_enqueue_style( 'plugins-style', get_template_directory_uri() . '/css/plugins.css', array(), _S_VERSION, 'all' );
	// main styles
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION, 'all' );
	// colors styles
	wp_enqueue_style( 'colors-style', get_template_directory_uri() . '/css/color.css', array(), _S_VERSION, 'all' );
	// theme style
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_scripts() {
	// jQuery js
	wp_enqueue_script( 'jQuery-js', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), _S_VERSION, true );
	// Enqueue jQuery from the WordPress core
	wp_enqueue_script('jquery');
	// plugins js
	wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/js/plugins.js', array('jquery'), _S_VERSION, true );
	// main scripts
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/script.js', array('jquery',), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

// Admin Scripts
function theme_enqueue_scripts_admin() {
	// Enqueue jQuery
    wp_enqueue_script('jquery');
	
    wp_enqueue_script( 'admin-scripts', get_template_directory_uri() . '/js/admin-scripts.js', array('jquery'), _S_VERSION, true );
}
add_action('admin_enqueue_scripts', 'theme_enqueue_scripts_admin');


// add custom styles to the post editor
function shadin_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'shadin_theme_add_editor_styles' );