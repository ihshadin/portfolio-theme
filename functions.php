<?php
/**
 * Shadin functions and definitions
 *
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function shadin_setup() {
	/*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on Shadin, use a find and replace
	* to change 'shadin' to the name of your theme in all the template files.
	*/
	load_theme_textdomain( 'shadin', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'pirmary-menu' => esc_html__( 'Primary Menu', 'shadin' ),
		)
	);

	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	// add_theme_support(
	// 	'custom-background',
	// 	apply_filters(
	// 		'shadin_custom_background_args',
	// 		array(
	// 			'default-color' => 'ffffff',
	// 			'default-image' => '',
	// 		)
	// 	)
	// );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'shadin_setup' );

// Register widget area.
// function shadin_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'shadin' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'shadin' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'shadin_widgets_init' );

// Enqueue scripts and styles.
function shadin_scripts() {
	// CSS styles
	// plugins styles
	wp_enqueue_style( 'plugins-style', get_template_directory_uri() . '/css/plugins.css', array(), _S_VERSION, 'all' );
	// main styles
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION, 'all' );
	// colors styles
	wp_enqueue_style( 'colors-style', get_template_directory_uri() . '/css/color.css', array(), _S_VERSION, 'all' );
	// theme style
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	// JS Scripts
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
add_action( 'wp_enqueue_scripts', 'shadin_scripts' );

// Admin Scripts
function enqueue_custom_admin_script() {
	// Enqueue jQuery
    wp_enqueue_script('jquery');
	
    wp_enqueue_script( 'admin-scripts', get_template_directory_uri() . '/js/admin-scripts.js', array('jquery'), _S_VERSION, true );
}
add_action('admin_enqueue_scripts', 'enqueue_custom_admin_script');

// contact form 7 autofill off
add_filter('wpcf7_autop_or_not', '__return_false');

// Implement the Custom Header feature.
// require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Redux Framework Integrate
require_once get_template_directory() . '/inc/redux-framework/theme-options/config.php';

// Several features functions
require get_template_directory() . '/inc/featured/featured-container.php';

// Custom Posts functions
require get_template_directory() . '/inc/custom-post.php';

// Custom Taxonomies Added functions
require get_template_directory() . '/inc/custom-texonomies.php';

// Custom Meta Box Add for Post Type
require get_template_directory() . '/inc/custom-metabox.php';