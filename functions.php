<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// Theme support
require_once get_template_directory() . '/inc/functions/theme-support.php';

// register nav menus
require_once get_template_directory() . '/inc/functions/register-nav.php';

// Enqueue scripts and styles.
require_once get_template_directory() . '/inc/functions/enqueue-scripts.php';

// contact form 7 autofill off
add_filter('wpcf7_autop_or_not', '__return_false');

// Kirki Framework Integrate
require_once get_template_directory() . '/inc/customizer/customizer-container.php';

// Several features functions
require get_template_directory() . '/inc/functions/featured-container.php';

// Widgets register and custom widgets
require get_template_directory() . '/inc/widgets/widgets-container.php';

// Custom Posts functions
require get_template_directory() . '/inc/custom-post/custom-post.php';

// Custom Taxonomies Added functions
require get_template_directory() . '/inc/custom-post/custom-texonomies.php';

// Custom Meta Box Add for Post Type
require get_template_directory() . '/inc/custom-post/custom-metabox.php';

// this is comment format
require get_template_directory() . '/template-parts/comment_format.php';

// Required Plugins
require get_template_directory() . '/inc/tgm-plugin/required-plugins.php';
